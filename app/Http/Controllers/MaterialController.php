<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;

use App\Categories;
use App\Standerd;
Use App\Subject;
Use App\chapter;
Use App\College;
Use App\Semister;
Use App\Test_Type;
Use App\Question;
Use App\Answer;
Use App\Test;
Use App\Test_Section;
Use App\Material;


class MaterialController extends Controller
{
    public function view_material()
    {
        $data['material'] =  Material::get();
        $data['flag'] = 1; 
        $data['page_title'] = 'View Material'; 
        return view('Admin/webviews/manage_admin_material',$data);
    } 

    public function add_material()
    {
        $data['flag'] = 2; 
        $data['page_title'] = 'Add Material';   
        $data['subjects'] = DB::table('subjects')->where('status',"1")->orderBy('subject_name', 'asc')->get();
        $data['sections'] = DB::table('test_section')->where('status',"1")->get();    
        return view('Admin/webviews/manage_admin_material',$data);
    }

    public function submit_material(Request $req)
    {
    //    dd($req);
        $this->validate($req,[
            'section_id'=>'required',
            'material_name'=>'required',   
         ]);


         if($req->material_id) { 
                // dd($req);
                if($req->hasFile('new_pdf_link')) {
                    $file = $req->file('new_pdf_link');
                    $filename = 'pdf'.time().'.'.$req->new_pdf_link->extension();
                    $destinationPath = public_path('/images/material');
                    $file->move($destinationPath, $filename);

                    Material::where('id',$req->material_id)->update([
                        'pdf_link' => 'images/material/'.$filename,
                    ]);
                }
             if($req->material_id){
                Material::where('id',$req->material_id)->update([
                    'material_name' => $req->material_name,
                    'section_id' => $req->section_id,
                    // 'chapter_id' => $req->chapter_id,
                    'attachment_type' => $req->attachment_type,
                    'video_link' => $req->video_link,
                    'description' => $req->description,
                    'status' => $req->status,
                ]);
             }
            toastr()->success('Material Updated Successfully!');
            return redirect('view-material');
         }else{
                // save code start 

            $file = $req->file('pdf_link');
            // dd($file);
            if($req->hasFile('pdf_link')) {
                $file = $req->file('pdf_link');
                $filename = 'pdf'.time().'.'.$req->pdf_link->extension();
                $destinationPath = public_path('/images/material');
                $file->move($destinationPath, $filename);

            
                $data = new Material;
                $data->material_name=$req->material_name;             
                $data->section_id=$req->section_id;
                // $data->chapter_id=$req->chapter_id;
                $data->attachment_type=$req->attachment_type;
                $data->pdf_link = 'images/material/'.$filename;
                $data->video_link=$req->video_link;
                $data->description=$req->description;
                $data->status=$req->status;             
                $result = $data->save();
                // dd($question_id);
            
            if($result)
            {
                toastr()->success('Material Successfully Added!');
            }
            else
            {
                toastr()->error('Material Not Added!!');
            }         
            
            }else{
                $data = new Material;
                $data->material_name=$req->material_name;             
                $data->section_id=$req->section_id;
                // $data->chapter_id=$req->chapter_id;
                $data->attachment_type=$req->attachment_type;
                $data->video_link=$req->video_link;
                $data->description=$req->description;
                $data->status=$req->status;             
                $result = $data->save();            
            if($result)
            {
                toastr()->success('Material Successfully Added!');
            }
            else
            {
                toastr()->error('Material Not Added!!');
            }  
            
            }
       
        return redirect('view-material');
        
        }
    }

    public function delete_material($id){ 
        $data['result']=Material::where('id',$id)->delete();
        toastr()->error('Material Deleted !');
        return redirect('view-material');
    }

    public function edit_material($id){
        $data['flag'] = 3; 
        $data['page_title'] = 'Edit Material'; 
        $data['material'] = Material::where('id',$id)->first(); 
        $data['subjects'] = DB::table('subjects')->where('status',"1")->orderBy('subject_name', 'asc')->get();
        $data['sections'] = DB::table('test_section')->where('status',"1")->get(); 
        // dd($data);
        return view('Admin/webviews/manage_admin_material',$data);
    }
    
}
