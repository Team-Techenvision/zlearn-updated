<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
Use App\Test;
use App\Categories;
use App\Standerd;
Use App\Subject;
Use App\chapter;
Use App\College;
Use App\Semister;
Use App\Test_Type;
Use App\branch;
Use App\course;
Use App\Test_name;
Use App\Test_Section;
Use App\Program_Name;
Use App\Question_level;


use App\Exports\UsersExport;
use App\Exports\TestReportExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;




use DB;

use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{



    public function import() 
    {
        Excel::import(new UsersImport,request()->file('file'));
        toastr()->success('User Data Uploded Successfully!');   
        return redirect()->back();
    }
    public function importExportView()
    {
        $data['flag'] = 26; 
        $data['page_title'] = 'Import User'; 
        return view('Admin/webviews/manage_admin_user',$data);
    }

    public function export() 
    {
        $student = User::where('user_type', 2)
                        ->leftJoin('user_details', 'user_details.user_id', '=', 'users.id')
                        ->leftJoin('education__details as ed', 'ed.user_id', '=', 'users.id')
                        ->leftJoin('colleges', 'colleges.id', '=', 'ed.collage_id')
                        ->leftJoin('branches', 'branches.id', '=', 'ed.branch_id')
                        ->leftJoin('semisters', 'semisters.id', '=', 'user_details.semister')
                        ->select('users.*', 'user_details.*', 'ed.*','colleges.*','branches.*','semisters.*')
                        ->get();
                        // dd($student);
        return Excel::download(new UsersExport($student), 'users.xlsx');
    }

    public function view_test_result()
    {
        $data['flag'] = 35; 
        $data['page_title'] = 'View Result'; 
        $data['tests'] = Test::where('status',1)->get();               
        return view('Admin/webviews/manage_admin_user',$data);
    }

    public function export_test_report(Request $request) 
    {
        // dd($request);
        $test_id = $request->test_id;
        // $test_result = Test::where('tests.id', $test_id)
        //                 ->Join('user_tests', 'user_tests.test_id', '=', 'tests.id')
        //                 ->Join('users', 'users.id', '=', 'user_tests.user_id')
        //                 // ->leftJoin('colleges', 'colleges.id', '=', 'ed.collage_id')
        //                 // ->leftJoin('branches', 'branches.id', '=', 'ed.branch_id')
        //                 // ->leftJoin('semisters', 'semisters.id', '=', 'user_details.semister')
        //                 // ->select('users.*')
        //                 ->get();
                        // dd($test_result);
        // $test_result = DB::select("SELECT tests.test_name,colleges.college_name,users.name,branches.branch_name,semisters.semister_name,test_results.total_score,tests.total_marks FROM test_results INNER JOIN tests ON(tests.id = test_results.test_id)INNER JOIN users ON(users.id = test_results.user_id)INNER JOIN education__details ed ON (ed.user_id = users.id)INNER JOIN colleges ON (colleges.id = ed.collage_id)INNER JOIN branches ON(branches.id=ed.branch_id)INNER JOIN user_details ud ON (ud.user_id=users.id)INNER JOIN semisters ON(semisters.id = ud.semister) WHERE ('tests.id' =$test_id)");
    //   working  $test_result = DB::select("SELECT tests.test_name,colleges.college_name,users.name,branches.branch_name,semisters.semister_name,test_results.total_score,tests.total_marks FROM test_results INNER JOIN tests ON(tests.id = test_results.test_id)INNER JOIN users ON(users.id = test_results.user_id)INNER JOIN education__details ed ON (ed.user_id = users.id)INNER JOIN colleges ON (colleges.id = ed.collage_id)INNER JOIN branches ON(branches.id=ed.branch_id)INNER JOIN user_details ud ON (ud.user_id=users.id)INNER JOIN semisters ON(semisters.id = ud.semister) WHERE (test_results.test_id=$test_id)");
        $test_result = DB::select("SELECT tests.test_name,colleges.college_name,users.name,branches.branch_name,semisters.semister_name,test_results.total_score,tests.total_marks FROM test_results INNER JOIN tests ON(tests.id = test_results.test_id)RIGHT JOIN users ON(users.id = test_results.user_id)INNER JOIN education__details ed ON (ed.user_id = users.id)INNER JOIN colleges ON (colleges.id = ed.collage_id)INNER JOIN branches ON(branches.id=ed.branch_id)INNER JOIN user_details ud ON (ud.user_id=users.id)INNER JOIN semisters ON(semisters.id = ud.semister) WHERE (tests.id=$test_id)");

       dd($test_result);
        return Excel::download(new TestReportExport($test_result), 'test_report.xlsx');
    }

    public function admin_list(Request $request)
    {
       $data['admin'] =  User::where('user_type', 1)->get();
        $data['flag'] = 1; 
        $data['page_title'] = 'View Admin'; 
        return view('Admin/webviews/manage_admin_user',$data);
    } 

    public function user_list(Request $request)
    {
        $data['student'] =  User::leftjoin('education__details', 'education__details.user_id', '=', 'users.id')
                            ->where('users.user_type', 2)
                            ->select('users.*','education__details.collage_id')
                            ->get();
        // dd($data['student']);
        $data['flag'] = 27; 
        $data['page_title'] = 'View Student';    
        return view('Admin/webviews/manage_admin_user',$data);
    }

    public function status_student($id, $status){ 
        User::where('id',$id)->update([
            'status' => $status,
        ]);
        toastr()->success('Student Updated!');
        return redirect('user-list');
    }


    public function categories_list()
    {

       $data['Categories'] =  Categories::get();
        // dd($data);
        return view('Admin.categories_list',$data);
    }
     

    public function view_subject()
    {
       
        $data['flag'] = 6; 
        $data['page_title'] = 'All Subject';  
        $data['subjects'] = Subject::get();     
        return view('Admin/webviews/manage_admin_user',$data);
    }


    public function add_subject()
    {
        $data['flag'] = 2; 
        $data['page_title'] = 'Add Subject';
        $data['courses'] = DB::table('courses')->where('status',"1")->get();
        $data['semister'] = Semister::where('status',"1")->get();
        //dd($data['standerds']);  
        return view('Admin/webviews/manage_admin_user',$data);
    }


    public function submit_subject(Request $req)
    {
    //    dd($req);

        $this->validate($req,[
            'sub_name'=>'required',       
            'status'=>'nullable|numeric'             
         ]);


         if($req->id) { 

            Subject::where('id',$req->id)->update([
                'subject_name' => $req->sub_name,
                'status' => $req->status,
            ]);
            toastr()->success('Subject Updated Successfully!');
            return redirect('view-subject');

         }else{
 
                $data = new Subject;
                $data->subject_name=$req->sub_name;            
                $data->status=$req->status;             
                $result = $data->save();
            if($result)
            {
                toastr()->success('Subject Successfully Added!');
            }
            else
            {
                toastr()->error('Subject Not Added!!');
            }         
    
        // toastr()->success('Subject Successfully Added!');
        return redirect('view-subject');

        }
    }

    public function delete_subject($id){ 
        $data['result']=Subject::where('id',$id)->delete();
        toastr()->error('Subject Deleted !');
        return redirect('view-subject');
    }

    public function edit_subject($id){
        $data['flag'] = 15; 
        $data['page_title'] = 'Edit Subject'; 
        $data['subject'] = Subject::where('id',$id)->first(); 
        // dd($data);
        return view('Admin/webviews/manage_admin_user',$data);
    }



    public function view_standard()
    {
        $data['flag'] = 5; 
        $data['page_title'] = 'All Standard';  
        $data['standerds'] = Standerd::get();     
        return view('Admin/webviews/manage_admin_user',$data);
    }

    public function add_standard()
    {
        $data['flag'] = 3; 
        $data['page_title'] = 'Add Standard';        
        return view('Admin/webviews/manage_admin_user',$data);
    }

    public function submit_standard(Request $req)
    {
    //    dd($req);
        $this->validate($req,[
            'standerd_name'=>'required',        
            'status'=>'nullable|numeric'             
         ]);


         if($req->id) { 

            Standerd::where('id',$req->id)->update([
                'standerd_name' => $req->standerd_name,
                'status' => $req->status,
            ]);
            toastr()->success('Standard Updated Successfully!');
            return redirect('view-standard');

         }else{

                $result = DB::table('standerds')->where('standerd_name', $req->class_name)->first(); 
                if(!$result)
                {   
                // ======================================
                $data = new Standerd;
                    $data->standerd_name=$req->standerd_name;            
                    $data->status=$req->status;             
                $result = $data->save();
                if($result)
                {
                    toastr()->success('Standard Successfully Added!');
                }
                else
                {
                    toastr()->error('Standard Not Added!!!');
                } 
            }
            else
            {
                toastr()->error('Standard Already Exists!!! ');
            }         
            toastr()->success('Standard Successfully Added!');
            return redirect('view-standard');

            }
    }



    public function delete_standard($id){ 
        $data['result']=Standerd::where('id',$id)->delete();
        toastr()->error('Standard Deleted !');
        return redirect('view-standard');
    }

    public function edit_standard($id){
        $data['flag'] = 10; 
        $data['page_title'] = 'Edit Standard'; 
        $data['standard'] = Standerd::where('id',$id)->first();  
        // dd($data);
        return view('Admin/webviews/manage_admin_user',$data);
    }

    public function view_semister()
    {
       
        $data['flag'] = 12; 
        $data['page_title'] = 'All Semester';  
        $data['semister'] = Semister::get();     
        return view('Admin/webviews/manage_admin_user',$data);
    }

    public function add_semister()
    {
        $data['flag'] = 13; 
        $data['page_title'] = 'Add Semester';        
        return view('Admin/webviews/manage_admin_user',$data);
    }

    public function submit_semister(Request $req)
    {
    //    dd($req);
        $this->validate($req,[
            'semister_name'=>'required',        
            'status'=>'nullable|numeric'             
         ]);


         if($req->id) { 

            Semister::where('id',$req->id)->update([
                'semister_name' => $req->semister_name,
                'status' => $req->status,
            ]);
            toastr()->success('Semester Updated Successfully!');
            return redirect('view-semister');

         }else{

                $result = Semister::where('semister_name', $req->semister_name)->first(); 
                if(!$result)
                {   
                // ======================================
                $data = new Semister;
                    $data->semister_name=$req->semister_name;            
                    $data->status=$req->status;             
                    $result = $data->save();
                if($result)
                {
                    toastr()->success('Semester Successfully Added!');
                }
                else
                {
                    toastr()->error('Semester Not Added!!!');
                } 
            }
            else
            {
                toastr()->error('Semester Already Exists!!! ');
            }         
            toastr()->success('Semester Successfully Added!');
            return redirect('view-semister');

            }
    }



    public function delete_semister($id){ 
        $data['result']=Semister::where('id',$id)->delete();
        toastr()->error('Semister Deleted !');
        return redirect('view-semister');
    }

    public function edit_semister($id){
        $data['flag'] = 14; 
        $data['page_title'] = 'Edit Semister'; 
        $data['semister'] = Semister::where('id',$id)->first();  
        // dd($data);
        return view('Admin/webviews/manage_admin_user',$data);
    }


    public function view_chapter()
    {
       $data['flag'] = 7; 
       $data['page_title'] = 'All Chapter';  
       $data['chapters'] = chapter::get();     
       return view('Admin/webviews/manage_admin_user',$data);
    }

    public function add_chapter()
    {
        $data['flag'] = 4; 
        $data['page_title'] = 'Add Chapter'; 
        $data['subjects'] = DB::table('subjects')->where('status',"1")->orderBy('subject_name', 'asc')->get(); 
        $data['standerds'] = DB::table('standerds')->where('status',"1")->get();
        // $data['semister'] = Semister::where('status',"1")->get();
        return view('Admin/webviews/manage_admin_user',$data);
    }

    public function submit_chapter(Request $req)
    {
       // dd($req);

       $this->validate($req,[
        'subject_id'=>'required|numeric',
        'chapter_name'=>'required',
        'subject_id'=>'required|numeric',       
        'status'=>'nullable|numeric'             
     ]);


     if($req->id) { 

        chapter::where('id',$req->id)->update([
            'chapter_name' => $req->chapter_name,
            'subject_id' => $req->subject_id,
            'status' => $req->status,
        ]);
        toastr()->success('Chapter Updated Successfully!');
        return redirect('view-chapter');

     }else{

            $data = new chapter;
            $data->chapter_name=$req->chapter_name; 
            $data->subject_id=$req->subject_id;          
            $data->status=$req->status;             
            $result = $data->save();
        if($result)
        {
            toastr()->success('Chapter Successfully Added!');
        }
        else
        {
            toastr()->error('Chapter Not Added!!');
        }         

    // toastr()->success('Subject Successfully Added!');
            return redirect('view-chapter');
    }   
    }

    public function delete_chapter($id){ 
        $data['result']=chapter::where('id',$id)->delete();
        toastr()->error('Chapter Deleted !');
        return redirect('view-chapter');
    }

    public function edit_chapter($id){
        $data['flag'] = 16; 
        $data['page_title'] = 'Edit Chapter'; 
        $data['chapter'] = chapter::where('id',$id)->first(); 
        $data['subjects'] = DB::table('subjects')->where('status',"1")->orderBy('subject_name', 'asc')->get(); 
        $data['standerds'] = DB::table('standerds')->where('status',"1")->get();
        // $data['semister'] = Semister::where('status',"1")->get(); 
        // dd($data);
        return view('Admin/webviews/manage_admin_user',$data);
    }

    public function view_college()
    {
       $data['flag'] = 8; 
       $data['page_title'] = 'All College';  
       $data['college'] = College::with('Program_Namedemo')->get(); 
    //    dd($data['college']);    
       return view('Admin/webviews/manage_admin_user',$data);
    }

    public function add_college()
    {
        $data['flag'] = 9; 
        $data['page_title'] = 'Add College';    
        $data['program_type'] = Program_Name::all();   
        return view('Admin/webviews/manage_admin_user',$data);
    }


    public function submit_college(Request $req)
    {
    //    dd($req);
        $this->validate($req,[
            'college_name'=>'required',        
            'status'=>'nullable|numeric'              
         ]);


         if($req->id) { 

            College::where('id',$req->id)->update([
                'college_name' => $req->college_name,
                'program_type' => $req->program_type,
                'status' => $req->status,
            ]);
            toastr()->success('College Updated Successfully!');
            return redirect('view-college');

         }else{

            $result = College::where('college_name', $req->college_name)->first();  
                if(!$result)
                {   
                // ======================================
                $data = new College;
                $data->college_name=$req->college_name; 
                $data->program_type=$req->program_type;           
                $data->status=$req->status;             
                $result = $data->save();
                if($result)
                {
                    toastr()->success('College Successfully Added!');
                }
                else
                {
                    toastr()->error('College Not Added!!!');
                } 
            }
            else
            {
                toastr()->error('College Already Exists!!! ');
            }         
            toastr()->success('College Successfully Added!');
            return redirect('view-college');
            }
    }

    public function delete_college($id){ 
        $data['result']=College::where('id',$id)->delete();
        toastr()->error('College Deleted !');
        return redirect('view-college');
    }

    public function edit_college($id){
        $data['flag'] = 11; 
        $data['page_title'] = 'Edit College'; 
        $data['college'] = College::where('id',$id)->first(); 
        $data['program_type'] = Program_Name::all(); 
        // dd($data);
        return view('Admin/webviews/manage_admin_user',$data);
    }


    public function view_course()
    {
       $data['flag'] = 20; 
       $data['page_title'] = 'All Course';  
       $data['course'] = course::get();     
       return view('Admin/webviews/manage_admin_user',$data);
    }

    public function add_course()
    {
        $data['flag'] = 21; 
        $data['page_title'] = 'Add Course';        
        return view('Admin/webviews/manage_admin_user',$data);
    }


    public function submit_course(Request $req)
    {
    //    dd($req);
        $this->validate($req,[
            'course_name'=>'required',        
            'status'=>'nullable|numeric'              
         ]);


         if($req->id) { 

            course::where('id',$req->id)->update([
                'course_name' => $req->course_name,
                'status' => $req->status,
            ]);
            toastr()->success('Branch Updated Successfully!');
            return redirect('view-course');

         }else{

            $result = course::where('course_name', $req->course_name)->first();  
                if(!$result)
                {   
                // ======================================
                $data = new course;
                $data->course_name=$req->course_name;            
                $data->status=$req->status;             
                $result = $data->save();
                if($result)
                {
                    toastr()->success('Course Successfully Added!');
                }
                else
                {
                    toastr()->error('Course Not Added!!!');
                } 
            }
            else
            {
                toastr()->error('Course Already Exists!!! ');
            }         
            toastr()->success('Course Successfully Added!');
            return redirect('view-course');
            }
    }

    public function delete_course($id){ 
        $data['result']=course::where('id',$id)->delete();
        toastr()->error('Course Deleted !');
        return redirect('view-course');
    }

    public function edit_course($id){
        $data['flag'] = 22; 
        $data['page_title'] = 'Edit Course'; 
        $data['course'] = course::where('id',$id)->first();  
        // dd($data);
        return view('Admin/webviews/manage_admin_user',$data);
    }



    public function view_branch()
    {
       $data['flag'] = 23; 
       $data['page_title'] = 'All Branch';  
       $data['branch'] = branch::get();     
       return view('Admin/webviews/manage_admin_user',$data);
    }

    public function add_branch()
    {
        $data['flag'] = 24; 
        $data['page_title'] = 'Add Branch';        
        return view('Admin/webviews/manage_admin_user',$data);
    }


    public function submit_branch(Request $req)
    {
    //    dd($req);
        $this->validate($req,[
            'branch_name'=>'required',        
            'status'=>'nullable|numeric'              
         ]);


         if($req->id) { 

            branch::where('id',$req->id)->update([
                'branch_name' => $req->branch_name,
                'status' => $req->status,
            ]);
            toastr()->success('Branch Updated Successfully!');
            return redirect('view-branch');

         }else{

            $result = branch::where('branch_name', $req->branch_name)->first();  
                if(!$result)
                {   
                // ======================================
                $data = new branch;
                $data->branch_name=$req->branch_name;            
                $data->status=$req->status;             
                $result = $data->save();
                if($result)
                {
                    toastr()->success('Branch Successfully Added!');
                }
                else
                {
                    toastr()->error('Branch Not Added!!!');
                } 
            }
            else
            {
                toastr()->error('Branch Already Exists!!! ');
            }         
            toastr()->success('Branch Successfully Added!');
            return redirect('view-branch');
            }
    }

    public function delete_branch($id){ 
        $data['result']=branch::where('id',$id)->delete();
        toastr()->error('Branch Deleted !');
        return redirect('view-branch');
    }

    public function edit_branch($id){
        $data['flag'] = 25; 
        $data['page_title'] = 'Edit Branch'; 
        $data['branch'] = branch::where('id',$id)->first();  
        // dd($data);
        return view('Admin/webviews/manage_admin_user',$data);
    }




    public function view_test_type()
    {
       $data['flag'] = 17; 
       $data['page_title'] = 'All Test Type';  
       $data['test_type'] = Test_Type::get();
    //    dd($data);     
       return view('Admin/webviews/manage_admin_user',$data);
    }

    public function add_test_type()
    {
        $data['flag'] = 18; 
        $data['page_title'] = 'Add Test Type';        
        return view('Admin/webviews/manage_admin_user',$data);
    }


    public function submit_test_type(Request $req)
    {
    //    dd($req);
        $this->validate($req,[
            'test_type_name'=>'required',        
            'status'=>'nullable|numeric'              
         ]);


         if($req->id) { 

            Test_Type::where('id',$req->id)->update([
                'test_type_name' => $req->test_type_name,
                'status' => $req->status,
            ]);
            toastr()->success('Test Type Updated Successfully!');
            return redirect('view-test-type');

         }else{

            $result = Test_Type::where('test_type_name', $req->test_type_name)->first();  
                if(!$result)
                {   
                // ======================================
                $data = new Test_Type;
                $data->test_type_name=$req->test_type_name;            
                $data->status=$req->status;             
                $result = $data->save();
                if($result)
                {
                    toastr()->success('Test Type Successfully Added!');
                }
                else
                {
                    toastr()->error('Test Type Not Added!!!');
                } 
            }
            else
            {
                toastr()->error('Test Type Already Exists!!! ');
            }         
            toastr()->success('Test Type Successfully Added!');
            return redirect('view-test-type');

            }
    }

    public function delete_test_type($id){ 
        $data['result']=Test_Type::where('id',$id)->delete();
        toastr()->error('Test Type Deleted !');
        return redirect('view-test-type');
    }

    public function edit_test_type($id){
        $data['flag'] = 19; 
        $data['page_title'] = 'Edit Test Type'; 
        $data['test_type'] = Test_Type::where('id',$id)->first();  
        // dd($data);
        return view('Admin/webviews/manage_admin_user',$data);
    }

    public function view_test_name()
    {
       
        $data['flag'] = 29; 
        $data['page_title'] = 'All Test Name';  
        $data['test_name'] = DB::table('test_name')->where('status',"1")->get();     
        return view('Admin/webviews/manage_admin_user',$data);
    }

    public function view_question_level()
    {
        $data['flag'] = 30; 
        $data['page_title'] = 'All Level';  
        $data['question_level'] = DB::table('question_level')->where('status',"1")->get();     
        return view('Admin/webviews/manage_admin_user',$data);
    }

    public function view_test_section()
    {
       
        $data['flag'] = 31; 
        $data['page_title'] = 'All Test Section';  
        $data['test_section'] = DB::table('test_section')->get();     
        return view('Admin/webviews/manage_admin_user',$data);
    }

    public function add_test_section()
    {
        $data['flag'] = 33; 
        $data['page_title'] = 'Add Test Section';        
        return view('Admin/webviews/manage_admin_user',$data);
    }


    public function submit_test_section(Request $req)
    {
    //    dd($req);
        $this->validate($req,[
            'test_section_name'=>'required',        
            'status'=>'nullable|numeric'              
         ]);


         if($req->id) { 

            Test_Section::where('id',$req->id)->update([
                'test_section_name' => $req->test_section_name,
                'status' => $req->status,
            ]);
            toastr()->success('Test Section Updated Successfully!');
            return redirect('view-test-section');

         }else{

            $result = Test_Section::where('test_section_name', $req->test_section_name)->first();  
                if(!$result)
                {   
                // ======================================
                $data = new Test_Section;
                $data->test_section_name=$req->test_section_name;            
                $data->status=$req->status;             
                $result = $data->save();
                if($result)
                {
                    toastr()->success('Test Section Successfully Added!');
                }
                else
                {
                    toastr()->error('Test Section Not Added!!!');
                } 
            }
            else
            {
                toastr()->error('Test Section Already Exists!!! ');
            }         
            toastr()->success('Test Section Successfully Added!');
            return redirect('view-test-section');

            }
    }

    public function delete_test_section($id){ 
        $data['result']=Test_Section::where('id',$id)->delete();
        toastr()->error('Test Section Deleted !');
        return redirect('view-test-section');
    }

    public function edit_test_section($id){
        $data['flag'] = 34; 
        $data['page_title'] = 'Edit Test Section'; 
        $data['test_section'] = Test_Section::where('id',$id)->first();  
        // dd($data);
        return view('Admin/webviews/manage_admin_user',$data);
    }

    public function view_program_name()
    {
       
        $data['flag'] = 32; 
        $data['page_title'] = 'All Program Name';  
        $data['program_name'] = DB::table('program_name')->where('status',"1")->get();     
        return view('Admin/webviews/manage_admin_user',$data);
    }

    public function view_college_admin()
    {
       
        $data['admin'] =  User::where('user_type', 3)->get();
        $data['flag'] = 36; 
        $data['page_title'] = 'View College Admin'; 
        return view('Admin/webviews/manage_admin_user',$data);
    }


    public function add_college_admin()
    {
        $data['flag'] = 37; 
        $data['page_title'] = 'Add Subject';
        $data['courses'] = DB::table('courses')->where('status',"1")->get();
        $data['semister'] = Semister::where('status',"1")->get();
        //dd($data['standerds']);  
        return view('Admin/webviews/manage_admin_user',$data);
    }


    public function submit_college_admin(Request $req)
    {
    //    dd($req);

        $this->validate($req,[
            'sub_name'=>'required',       
            'status'=>'nullable|numeric'             
         ]);


         if($req->id) { 

            Subject::where('id',$req->id)->update([
                'subject_name' => $req->sub_name,
                'status' => $req->status,
            ]);
            toastr()->success('Subject Updated Successfully!');
            return redirect('view-subject');

         }else{
 
                $data = new Subject;
                $data->subject_name=$req->sub_name;            
                $data->status=$req->status;             
                $result = $data->save();
            if($result)
            {
                toastr()->success('Subject Successfully Added!');
            }
            else
            {
                toastr()->error('Subject Not Added!!');
            }         
    
        // toastr()->success('Subject Successfully Added!');
        return redirect('view-subject');

        }
    }

    public function delete_college_admin($id){ 
        $data['result']=Subject::where('id',$id)->delete();
        toastr()->error('Subject Deleted !');
        return redirect('view-subject');
    }

    public function edit_college_admin($id){
        $data['flag'] = 38; 
        $data['page_title'] = 'Edit Subject'; 
        $data['subject'] = Subject::where('id',$id)->first(); 
        // dd($data);
        return view('Admin/webviews/manage_admin_user',$data);
    }
    
}
