<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\UserDetails;
use App\Education_Detail;
use App\Academics_detail;
use App\Academic_project;
use App\Certification;
use App\Interships;
use App\Technical_skill;
use App\Question;
use App\Answer;
use App\Save_Answer;
use App\Categories;
use App\Test;
use App\UserTest;
use App\College;
use App\course;
use App\Semister;
use App\branch;
use App\Test_question;
use App\Test_Section;
use App\Test_semester;
use App\test_result;
use App\Test_case;
use App\testcase_result;
use App\UG_Details;
use App\PG_Details;
use Session;
use PDF;
use DB;

use Illuminate\Support\Facades\File; 

use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    //
    public function index(Request $request)
    {
        $data['page_title'] = 'Dashboard';
        if (Session::has('Test_Id'))
        {              
            session()->forget('Test_Id');
        }

        $u_id = Auth::User()->id;

        /****
         * Coading Section Start 
         * 
         * */
       
        $coading_count = DB::table('save__answers')->join('questions','questions.id','=','save__answers.question_id')->where('save__answers.user_id', $u_id)->where('questions.test_section',7)->count();
        $coadingcorrect_count = DB::table('save__answers')->join('questions','questions.id','=','save__answers.question_id')->where('save__answers.user_id', $u_id)->where('questions.test_section',7)->whereColumn('save__answers.Select_option','=','save__answers.correct_answer')->count();
        // dd($coading_count);
        // dd($coadingcorrect_count->count());
        if($coading_count !=0){
        $new_count_coding_section = round(($coadingcorrect_count / $coading_count) * 100);
        if($new_count_coding_section > 0 && $new_count_coding_section <= 25 )
        {
            $data['coding_arrow'] = 'rischio1';
            $data['coading_text'] =  'Poor';
        }elseif($new_count_coding_section > 25 && $new_count_coding_section <= 50 )
        {
            $data['coding_arrow'] = 'rischio2';
            $data['coading_text'] =  'Average';
        }
        elseif($new_count_coding_section > 50 && $new_count_coding_section <= 75 )
        {
            $data['coding_arrow'] = 'rischio3';
            $data['coading_text'] =  'Good';
        }
        elseif($new_count_coding_section > 75 && $new_count_coding_section <= 100 )
        {
            $data['coding_arrow'] = 'rischio4';
            $data['coading_text'] =  'Excellent';
        }else{
            $data['coding_arrow'] = '';
            $data['coading_text'] =  'Not Found';
        }
    }
        /****
         * Coading Section Ends 
         * 
         * */

         /****
         * Quantitative Section Start 
         * 
         * */
       
        $quantitative_count = DB::table('save__answers')->join('questions','questions.id','=','save__answers.question_id')->where('save__answers.user_id', $u_id)->where('questions.test_section',1)->count();
        $quantitativecorrect_count = DB::table('save__answers')->join('questions','questions.id','=','save__answers.question_id')->where('save__answers.user_id', $u_id)->where('questions.test_section',1)->whereColumn('save__answers.Select_option','=','save__answers.correct_answer')->count();
        // dd($coading_count);
        // dd($coadingcorrect_count->count());
        if($quantitative_count !=0 && $quantitativecorrect_count != 0){
        $new_count_quantitative_section = round(($quantitativecorrect_count / $quantitative_count) * 100);
        if($new_count_quantitative_section > 0 && $new_count_quantitative_section <= 25 )
        {
            $data['quantitative_arrow'] = 'rischio1';
            $data['quantitative_text'] =  'Poor';
        }elseif($new_count_quantitative_section > 25 && $new_count_quantitative_section <= 50 )
        {
            $data['quantitative_arrow'] = 'rischio2';
            $data['quantitative_text'] =  'Average';
        }
        elseif($new_count_quantitative_section > 50 && $new_count_quantitative_section <= 75 )
        {
            $data['quantitative_arrow'] = 'rischio3';
            $data['quantitative_text'] =  'Good';
        }
        elseif($new_count_quantitative_section > 75 && $new_count_quantitative_section <= 100 )
        {
            $data['quantitative_arrow'] = 'rischio4';
            $data['quantitative_text'] =  'Excellent';
        }else{
            $data['quantitative_arrow'] = '';
            $data['quantitative_text'] =  'Not Found';
        }
        }else{
            $data['quantitative_arrow'] = '';
            $data['quantitative_text'] =  'Not Found';
        }
        /****
         * Quantitative Section Ends 
         * 
         * */

         /****
         * Verbal Ability Section Start 
         * 
         * */
       
        $verbal_count = DB::table('save__answers')->join('questions','questions.id','=','save__answers.question_id')->where('save__answers.user_id', $u_id)->where('questions.test_section',2)->count();
        $verbalcorrect_count = DB::table('save__answers')->join('questions','questions.id','=','save__answers.question_id')->where('save__answers.user_id', $u_id)->where('questions.test_section',2)->whereColumn('save__answers.Select_option','=','save__answers.correct_answer')->count();
        // dd($coading_count);
        // dd($coadingcorrect_count->count());
        if($verbal_count !=0 && $verbalcorrect_count != 0){
        $new_count_verbal_section = round(($verbalcorrect_count / $verbal_count) * 100);
        if($new_count_verbal_section > 0 && $new_count_verbal_section <= 25 )
        {
            $data['verbal_arrow'] = 'rischio1';
            $data['verbal_text'] =  'Poor';
        }elseif($new_count_verbal_section > 25 && $new_count_verbal_section <= 50 )
        {
            $data['verbal_arrow'] = 'rischio2';
            $data['verbal_text'] =  'Average';
        }
        elseif($new_count_verbal_section > 50 && $new_count_verbal_section <= 75 )
        {
            $data['verbal_arrow'] = 'rischio3';
            $data['verbal_text'] =  'Good';
        }
        elseif($new_count_verbal_section > 75 && $new_count_verbal_section <= 100 )
        {
            $data['verbal_arrow'] = 'rischio4';
            $data['verbal_text'] =  'Excellent';
        }else{
            $data['verbal_arrow'] = '';
            $data['verbal_text'] =  'Not Found';
        }
        }else{
            $data['verbal_arrow'] = '';
            $data['verbal_text'] =  'Not Found';
        }
        /****
         * Verbal Ability Section Ends 
         * 
         * */

        /****
         * Reasoning Ability Section Start 
         * 
         * */
       
        $reasoning_count = DB::table('save__answers')->join('questions','questions.id','=','save__answers.question_id')->where('save__answers.user_id', $u_id)->where('questions.test_section',3)->count();
        $reasoningcorrect_count = DB::table('save__answers')->join('questions','questions.id','=','save__answers.question_id')->where('save__answers.user_id', $u_id)->where('questions.test_section',3)->whereColumn('save__answers.Select_option','=','save__answers.correct_answer')->count();
        // dd($coading_count);
        // dd($coadingcorrect_count->count());
        if($reasoning_count !=0 && $reasoningcorrect_count != 0){
        $new_count_reasoning_section = round(($reasoningcorrect_count / $reasoning_count) * 100);
        if($new_count_reasoning_section > 0 && $new_count_reasoning_section <= 25 )
        {
            $data['reasoning_arrow'] = 'rischio1';
            $data['reasoning_text'] =  'Poor';
        }elseif($new_count_reasoning_section > 25 && $new_count_reasoning_section <= 50 )
        {
            $data['reasoning_arrow'] = 'rischio2';
            $data['reasoning_text'] =  'Average';
        }
        elseif($new_count_reasoning_section > 50 && $new_count_reasoning_section <= 75 )
        {
            $data['reasoning_arrow'] = 'rischio3';
            $data['reasoning_text'] =  'Good';
        }
        elseif($new_count_reasoning_section > 75 && $new_count_reasoning_section <= 100 )
        {
            $data['reasoning_arrow'] = 'rischio4';
            $data['reasoning_text'] =  'Excellent';
        }else{
            $data['reasoning_arrow'] = '';
            $data['reasoning_text'] =  'Not Found';
        }
        }else{
            $data['reasoning_arrow'] = '';
            $data['reasoning_text'] =  'Not Found';
        }
        /****
         * Ressoning Ability Section Ends 
         * 
         * */
        
        // dd($new_count_coding_section);
        $UserDetails = UserDetails::where('user_id',$u_id)->first();
        // dd($UserDetails);
        if($UserDetails == null){
            return redirect('edit-password');
        }else{
            return view('Students/Webviews/student_dashboard',$data);
        }
    	
    }

    public function resume_page_one()
    {
        $data['page_title'] = 'Basic Information';
        $u_id = Auth::User()->id;
        $data['user'] = User::where('id',$u_id)->first();
        $data['UserDetails'] = UserDetails::where('user_id',$u_id)->first(); 
        $data['Education'] = Education_Detail::where('user_id',$u_id)->first();
        $data['College']= College::where('status',1)->orderBy('college_name','asc')->get();
        $data['course']= course::where('status',1)->orderBy('course_name','asc')->get();
        $data['Semister'] = Semister::where('status',1)->orderBy('semister_name','asc')->get();
        $data['branch'] = branch::where('status',1)->orderBy('branch_name','asc')->get();
        $data['blood_group'] = DB::table('blood_group')->where('status',1)->orderBy('id','asc')->get();  
        // dd($data['Education']);  
    	return view('Students/Webviews/student_add_resume',$data);

    }

    public function submit_BasicInfo(Request $req)
    {
        // dd($req);

        $this->validate($req,[
            'first_name'=>'required',
            'last_name'=>'nullable',
            'first_name'=>'required',        
            'gender'=>'required|numeric',
            'bod_date'=>'required',
            'email'=> 'required|email', 
            'phone_no' => 'required|digits:10|numeric',             
            'education'=>'required|alpha', 
            'degree'=>'required|numeric',
            'semester'=>'required|numeric',
            'roll_no'=>'required',
            'mother_name'=>'nullable',
            'father_name'=>'nullable',
            'permanent_address'=>'required',
            'current_address'=>'required',
            'kyc_doc'=>'required',
            'blood_group'=>'required',
            'upload_kyc_doc' => 'nullable|mimes:jpeg,png,jpg,gif,pdf'
                       
         ]);

          $u_id = Auth::User()->id; 
          $result = "";       
         $update = DB::table('users')->where('id', $u_id)->update([ 'name' => $req->first_name, 'l_name'=> $req->last_name,'email' => $req->email, 'phone' => $req->phone_no,'gender'=> $req->gender,'standers'=> $req->education,]);

        $user_result = DB::table('user_details')->where('user_id', $u_id)->first();
        $cust_newfile = Null;
        $destinationPath =Null;
        $imageName = Null;
        if($req->hasFile('upload_kyc_doc'))
        {
            $file = $req->file('upload_kyc_doc');
            $destinationPath = 'images/Resume_doc'; 
            $imageName = rand(111111, 999999).'.'.$req->upload_kyc_doc->extension(); 
            $cust_newfile = $destinationPath.'/'.$imageName; 
        }   
       
        if($user_result)
        {  
           // dd("'dob' => $req->bod_date, 'address'=> $req->permanent_address,'semister' => $req->semester, 'mother_name' => $req->mother_name,'father_name'=> $req->father_name,'occupation'=> $req->occupation,'kyc_name'=>$req->kyc_doc,'blood_group'=>$req->blood_group,'upload_kyc'=>$cust_newfile");
           if($req->hasFile('upload_kyc_doc'))
           {
                $result = DB::table('user_details')->where('user_id', $u_id)->update([ 'dob' => $req->bod_date, 'address'=> $req->permanent_address,'semister' => $req->semester, 'mother_name' => $req->mother_name,'father_name'=> $req->father_name,'occupation'=> $req->occupation,'mother_occupation'=> $req->mother_occupation,'emergency_contact'=> $req->emergency_contact,'kyc_name'=>$req->kyc_doc,'blood_group'=>$req->blood_group,'upload_kyc'=>$cust_newfile]);
           }
           else
           {
                $result = DB::table('user_details')->where('user_id', $u_id)->update([ 'dob' => $req->bod_date, 'address'=> $req->permanent_address,'semister' => $req->semester, 'mother_name' => $req->mother_name,'father_name'=> $req->father_name,'occupation'=> $req->occupation,'mother_occupation'=> $req->mother_occupation,'emergency_contact'=> $req->emergency_contact,'kyc_name'=>$req->kyc_doc,'blood_group'=>$req->blood_group]); 
           }
           // dd($user_result->upload_kyc);
            if($result)
            {
               // dd("Hello");
                if($user_result->upload_kyc)
                {
                    if($req->hasFile('upload_kyc_doc'))
                    {
                        File::delete(public_path($user_result->upload_kyc));
                    }
                }    

            }
            //dd($user_result->upload_kyc);
        }
        else
        {   
           // dd("String"); 
            $data = new UserDetails;
            $data->user_id=$u_id;            
            $data->dob=$req->bod_date;
            $data->address=$req->permanent_address; 
            $data->semister=$req->semester; 
            $data->mother_name=$req->mother_name; 
            $data->father_name=$req->father_name; 
            $data->occupation=$req->occupation; 
            $data->mother_occupation=$req->mother_occupation;
            $data->emergency_contact=$req->emergency_contact;
            $data->kyc_name=$req->kyc_doc; 
            $data->blood_group=$req->blood_group;
            $data->upload_kyc=$cust_newfile;
            $result = $data->save();
        }
        if($result)
        {
            if($req->hasFile('upload_kyc_doc'))
            {
                $file->move($destinationPath,$imageName); 
            }
        }
        $result = DB::table('education__details')->where('user_id', $u_id)->first();
        if($result)
        {
            $result = DB::table('education__details')->where('user_id', $u_id)->update(['degree'=> $req->degree,'roll_no' => $req->roll_no, 'education' => $req->education,'current_address'=> $req->current_address,'collage_id'=>$req->collage,'university'=>$req->university,'branch_id'=>$req->branch]); 
        }
        else
        {  
            $data = new Education_Detail;
            $data->user_id=$u_id; 
            $data->degree=$req->degree; 
            $data->roll_no=$req->roll_no; 
            $data->education=$req->education; 
            $data->current_address=$req->current_address;
            $data->collage_id=$req->collage;
            $data->university=$req->university;
            $data->branch_id=$req->branch;
            $result = $data->save();
        }

        // if($result)
        //    {
                $data['page_title'] = 'Resume Form One';
                $u_id = Auth::User()->id;
                $data['user'] = User::where('id',$u_id)->first(); 
                // $req->session()->flash('alert-success', 'Basic Information Submited Successfully!!');     
                // return view('Students/Webviews/student_add_resume2',$data);
                toastr()->success('Information saved successfully!!');  
                return redirect('resume-page-two');
        //    }
        //    else
        //    {
        //          $req->session()->flash('alert-danger', 'Profile Not Submited!!');
        //          return back(); 
        //    } 
 
    }

    public function resume_page_two()
    {
        $data['page_title'] = 'Academics Information';
        $u_id = Auth::User()->id;
        $data['user'] = User::where('id',$u_id)->first(); 
        $data['UserDetails'] = UserDetails::where('user_id',$u_id)->first();        
        $data['Academics'] = Academics_detail::where('user_id',$u_id)->first();
        $data['Education'] = Education_Detail::where('user_id',$u_id)->first();
        $data['UG_Details'] = UG_Details::where('user_id',$u_id)->get();
        $data['PG_Details'] = PG_Details::where('user_id',$u_id)->get();
        $data['Semister'] = Semister::where('status',1)->orderBy('semister_name','asc')->get();
        $data['graduation_sem'] = DB::table("graduation_sem")->where('status',1)->orderBy('sem_id','asc')->get();
        // dd($data['UG_Details']); 
    	return view('Students/Webviews/student_add_academics',$data);

    }

    public function resume_trainingInfo()
    {
        $data['page_title'] = 'Training Details';
        $u_id = Auth::User()->id;
        $data['user'] = User::where('id',$u_id)->first();
        $data['Academic_project'] = Academic_project::where('user_id',$u_id)->get();        
        $data['Certification'] = Certification::where('user_id',$u_id)->get();
        $data['Interships'] = Interships::where('user_id',$u_id)->get();
        $data['Technical_skill'] = Technical_skill::where('user_id',$u_id)->first(); 
    //    dd($data);     
    	return view('Students/Webviews/training_details',$data);
    }

    public function submit_AcademicsInfo(Request $req)
    {
    //    dd($req);

        $this->validate($req,[
            'sslc_per'=>'required',
            'year_sslc'=>'required',       
         ]);
        //  dd($req);
         $u_id = Auth::User()->id;
         $user_result = Academics_detail::where('user_id',$u_id)->first();
         if($user_result)
         {
            $result = DB::table('academics_details')->where('user_id', $u_id)->update([
                'sslc_perce' => $req->sslc_per, 
                'sslc_year'=> $req->year_sslc,
                'sslc_board' => $req->sslc_board, 
                'sslc_school'=> $req->sslc_school,
                'puc_perce' => $req->puc_per, 
                'puc_year' => $req->year_puc,
                'puc_board' => $req->puc_board, 
                'puc_college' => $req->puc_college,
                'diploma_perce'=> $req->diploma_per,
                'diploma_year' => $req->year_diploma,
                'diploma_university'=> $req->diploma_university,
                'diplma_college' => $req->diplma_college,
                'year_of_pass_ug' => $req->year_of_pass_ug,
                'avg_percentage_ug'=> $req->avg_percentage_ug,
                'college_ug' => $req->college_ug,
                'university_ug' => $req->university_ug,
                'cource_ug'=> $req->cource_ug,
                'branch_ug'=> $req->branch_ug,
                'year_of_pass_pg' => $req->year_of_pass_pg, 
                'avg_percentage_pg' => $req->avg_percentage_pg,
                'avg_cgpa'=> $req->avg_cgpa,
                'year_graduation' => $req->year_graduated, 
                'curr_backlog' => $req->current_backLog,
                'num_year_backlog'=> $req->no_yer_backs,
                'gap' => $req->acd_gaps,
                'gap_explan' => $req->explain_gaps
            ]); 
         }
         else
         {
            $data = new Academics_detail;
            $data->user_id=$u_id;            
            $data->sslc_perce=$req->sslc_per;
            $data->sslc_year=$req->year_sslc; 
            $data->sslc_board=$req->sslc_board;
            $data->sslc_school=$req->sslc_school; 
            $data->puc_perce=$req->puc_per; 
            $data->puc_year=$req->year_puc; 
            $data->puc_board=$req->puc_board; 
            $data->puc_college=$req->puc_college; 
            $data->diploma_perce=$req->diploma_per;
            $data->diploma_year=$req->year_diploma;
            $data->diploma_university=$req->diploma_university;
            $data->diplma_college=$req->diplma_college;
            $data->year_of_pass_ug=$req->year_of_pass_ug;
            $data->avg_percentage_ug=$req->avg_percentage_ug;
            $data->college_ug=$req->college_ug;
            $data->university_ug=$req->university_ug;
            $data->cource_ug=$req->cource_ug;
            $data->branch_ug=$req->branch_ug;
            $data->year_of_pass_pg=$req->year_of_pass_pg;
            $data->avg_percentage_pg=$req->avg_percentage_pg;
            $data->avg_cgpa=$req->avg_cgpa;
            $data->year_graduation=$req->year_graduated;
            $data->curr_backlog=$req->current_backLog;
            $data->num_year_backlog=$req->no_yer_backs;
            $data->gap=$req->acd_gaps;
            $data->gap_explan=$req->explain_gaps;            
            $result = $data->save();
         }

         if($req->semester_id_ug)
        {
            $i = 0;
            foreach($req->semester_id_ug as $row)
            {
                if($row != null)
                {    
                    $data = new UG_Details;
                    $data->user_id=$u_id;            
                    $data->semester_id_ug=$row;
                    $data->percentage_ug=$req->percentage_ug[$i]; 
                    $data->scrore_type_ug=$req->scrore_type_ug[$i];
                    $data->status='1';
                    $result = $data->save();
                }
                $i++;
            }
        } 

        if($req->semester_id_pg)
        {
            $j = 0;
            foreach($req->semester_id_pg as $row)
            {
                if($row != null)
                {    
                    $data = new PG_Details;
                    $data->user_id=$u_id;            
                    $data->semester_id_pg=$row;
                    $data->percentage_pg=$req->percentage_pg[$j]; 
                    $data->scrore_type_pg=$req->scrore_type_pg[$j];
                    $data->status='1';
                    $result = $data->save();
                }
                $j++;
            }
        } 
         if($result)
         {              
              $u_id = Auth::User()->id;
              $data['user'] = User::where('id',$u_id)->first(); 
              // $req->session()->flash('alert-success', 'Academics Information Submited Successfully!!');     
              // return view('Students/Webviews/student_add_resume2',$data);
              toastr()->success('Information saved successfully!!'); 
              return redirect('resume-training-Info');
              //return redirect('studentdashboard'); 
         }
         else
         {
               //$req->session()->flash('alert-danger', 'Academics Information Not Submited!!');
              // return back(); 
             // $req->session()->flash('alert-success', 'Academics Information saved successfully Successfully!!'); 
                toastr()->success('Information saved successfully!!'); 
                return redirect('resume-training-Info');
               //return redirect('studentdashboard'); 
         } 



    }
    // =================================================================
    public function submit_TrainingInfo(Request $req)
    {
        // dd($req);
       
        // $this->validate($req,[
        //     'tech_skill'=>'required',
        //     'career_object'=>'required'
        //  ]);

         $u_id = Auth::User()->id;
         $user_result = Technical_skill::where('user_id',$u_id)->first();
         if($user_result)
         {
            $result = DB::table('technical_skills')->where('user_id', $u_id)->update([ 'tech_skill' => $req->tech_skill, 'linkedin_link'=> $req->linkedin_link,'achievement' => $req->achievement,'known_language' => $req->known_language, 'extracurricular'=> $req->extracurricular,'skil_sets' => $req->skil_sets, 'seminar_traning' => $req->seminar_traning, 'hobbies' => $req->hobbies,'career_object'=> $req->career_object]);
         }
         else
         {
            $data = new Technical_skill;
            $data->user_id=$u_id;            
            $data->tech_skill=$req->tech_skill;
            $data->linkedin_link=$req->linkedin_link; 
            $data->achievement=$req->achievement;
            $data->known_language=$req->known_language;
            $data->extracurricular=$req->extracurricular; 
            $data->skil_sets=$req->skil_sets; 
            $data->hobbies=$req->hobbies; 
            $data->seminar_traning=$req->seminar_traning;
            $data->career_object=$req->career_object;
            $result = $data->save();
                        
        }
        if ($req->hasfile('upload_certificat')) 
        {
            //dd("Yes");
        }
        $s = 0;
        
        if ($req->hasfile('upload_certificat')) 
        {
            foreach($req->file('upload_certificat') as $row)
            {  
                $filename = $req->file('upload_certificat')[$s];
                $name = rand(11111, 99999).'.'.$row->extension();            
                $destinationPath1 = 'images/Certificate';
                $cust_newfile2 = $destinationPath1.'/'.$name;
                    //dd($cust_newfile2);

                $data = new Certification;
                $data->user_id=$u_id; 
                $data->Certification_name=$req->certificate[$s]; 
                $data->upload_certificat=$cust_newfile2;
                $result21 = $data->save(); 
                if($result21)
                {
                    $filename->move($destinationPath1,$name);
                } 
                $s++;               
            }
        }
        else
        {    
                $i= 0;
                //dd($req->certificate);
            if($req->certificate)
            {
                foreach($req->certificate as $row)
                {    
                    if( $row != null)
                    {
                        $data = new Certification;
                        $data->user_id=$u_id; 
                        $data->Certification_name= $row;
                        // $data->Certification_name=$req->certificate[$i];
                        $result21 = $data->save();
                    }
                    $i++;
                }    
            }
             //dd("12"); 
        }
        if($req->project_name)
        {
            $i = 0;
            foreach($req->project_name as $row)
            {
                if($row != null)
                {    
                    $data = new Academic_project;
                    $data->user_id=$u_id;            
                    $data->project_name=$row;
                    $data->team_size=$req->team_size[$i]; 
                    $data->project_detail=$req->project_detail[$i];
                    $result = $data->save();
                }
                $i++;
                
            }
        } 
        //dd($req->proj_roles);
           
            $j = 0;
        // dd($req->int_comp_name);
        if($req->int_comp_name)
        {
            foreach($req->int_comp_name as $row)
            {
                if($row != null)
                {
                    $data = new Interships;
                    $data->user_id=$u_id;            
                    $data->int_comp_name=$row;
                    $data->intship_duration=$req->intship_duration[$j]; 
                    $data->your_roles=$req->proj_roles[$j];
                    $result = $data->save();
                }
                $j++;
                
            }
        }
        // dd($req);
        $j = 0;
        if ($req->hasfile('intern_certificate')) 
        {
            foreach($req->file('intern_certificate') as $row)
            {  
                $filename = $req->file('intern_certificate')[$j];
                $name = rand(11111, 99999).'.'.$row->extension();            
                $destinationPath1 = 'images/intern_certificate';
                $cust_newfile2 = $destinationPath1.'/'.$name;
                    //dd($cust_newfile2);

                    $data->user_id=$u_id;            
                    $data->int_comp_name=$req->int_comp_name[$j];
                    $data->intship_duration=$req->intship_duration[$j]; 
                    $data->your_roles=$req->proj_roles[$j];
                    $data->intern_description=$req->intern_description[$j];
                    $data->intern_certificate=$cust_newfile2;
                    $result = $data->save();
                if($result)
                {
                    $filename->move($destinationPath1,$name);
                } 
                $j++;               
            }
        }
        else
        {    
                $j= 0;
                //dd($req->certificate);
            if($req->int_comp_name)
            {
                foreach($req->int_comp_name as $row)
            {
                if($row != null)
                {
                    $data = new Interships;
                    $data->user_id=$u_id;            
                    $data->int_comp_name=$row;
                    $data->intship_duration=$req->intship_duration[$j]; 
                    $data->intern_description=$req->intern_description[$j];
                    $data->your_roles=$req->proj_roles[$j];
                    $result = $data->save();
                }
                $j++;
                
            }   
            }
             //dd("12"); 
        }    
           
        // if($result)
        // {
            // $req->session()->flash('alert-success', 'Training Information Submited Successfully!!');
         toastr()->success('Information saved successfully!!');  
            return redirect('studentdashboard'); 
        // }
        // else
        // {
        //     $req->session()->flash('alert-danger', 'Training Information Not Submited!!');
        //     return back(); 
        // }

    }
    // ================================================================

    // public function submit_TrainingInfo(Request $req)
    // {        
       
    //     $this->validate($req,[
    //         'tech_skill'=>'required',
    //         'career_object'=>'required'
    //      ]);

    //      $u_id = Auth::User()->id;
    //      $user_result = Technical_skill::where('user_id',$u_id)->first();
    //      if($user_result)
    //      {
    //         $result = DB::table('technical_skills')->where('user_id', $u_id)->update([ 'tech_skill' => $req->tech_skill, 'linkedin_link'=> $req->linkedin_link,'achievement' => $req->achievement, 'hobbies' => $req->hobbies,'career_object'=> $req->career_object]);
    //      }
    //      else
    //      {
    //         $data = new Technical_skill;
    //         $data->user_id=$u_id;            
    //         $data->tech_skill=$req->tech_skill;
    //         $data->linkedin_link=$req->linkedin_link; 
    //         $data->achievement=$req->achievement; 
    //         $data->hobbies=$req->hobbies; 
    //         $data->career_object=$req->career_object;
    //         $result = $data->save();

                      
    //     }
    //     if ($req->hasfile('upload_certificat')) 
    //     {
    //         //dd("Yes");
    //     }
    //     $s = 0;
        
    //     if ($req->hasfile('upload_certificat')) 
    //     {
    //         foreach($req->file('upload_certificat') as $row)
    //         {    
                
    //             $filename = $req->file('upload_certificat')[$s];
    //             $name = rand(11111, 99999).'.'.$row->extension();            
    //             $destinationPath1 = 'images/Certificate';
    //             $cust_newfile2 = $destinationPath1.'/'.$name;
    //                 //dd($cust_newfile2);

    //             $data = new Certification;
    //             $data->user_id=$u_id; 
    //             $data->Certification_name=$req->certificate[$s]; 
    //             $data->upload_certificat=$cust_newfile2;
    //             $result21 = $data->save(); 
    //             if($result21)
    //             {
    //                 $filename->move($destinationPath1,$name);
    //             } 
    //             $s++;               
    //         }
    //     }
    //     if($req->project_name)
    //     {
    //         $i = 0;
    //         foreach($req->project_name as $row)
    //         {
                

    //             $data = new Academic_project;
    //             $data->user_id=$u_id;            
    //             $data->project_name=$row;
    //             $data->team_size=$req->team_size[$i]; 
    //             $data->project_detail=$req->project_detail[$i];
    //             $result = $data->save();
    //             $i++;
                
    //         }
    //     } 
    //     if($req->int_comp_name)
    //     {   
    //         $j = 0;
    //     // dd($req->int_comp_name);
    //         foreach($req->int_comp_name as $row)
    //         {
                
    //             $data = new Interships;
    //             $data->user_id=$u_id;            
    //             $data->int_comp_name=$row;
    //             $data->intship_duration=$req->intship_duration[$j]; 
    //             $data->your_roles=$req->your_roles[$j];
    //             $result = $data->save();
    //             $j++;
                
    //         }
    //     }    
    //     // if($result)
    //     // {
    //         $req->session()->flash('alert-success', 'Training Information Submited Successfully!!');
    //         return redirect('studentdashboard'); 
    //     // }
    //     // else
    //     // {
    //     //     $req->session()->flash('alert-danger', 'Training Information Not Submited!!');
    //     //     return back(); 
    //     // }

    // }

    // public function Start_Test()
    // {
    //     $data['page_title'] = 'Start Test';
    //     $u_id = Auth::User()->id;
    //     $data['user'] = User::where('id',$u_id)->first();
    //     $data['Question'] = Question::where('status',1)->first();
    // 	return view('Students/Webviews/teck_test',$data);

    // }
    // ==========================================================
    public function View_all_Test()
    {
        $data['page_title'] = 'All Test';
        $u_id = Auth::User()->id;
        $data['user'] = User::where('id',$u_id)->first(); 
        $college = Education_Detail::where('user_id',$u_id)->first(); 
        $user_semester = UserDetails::where('user_id',$u_id)->first();      
        $data['count_Que'] = Question::where('status',1)->get();       
        $data['Test_time'] = DB::table('tests')
		->join('test_branch', 'test_branch.test_id', '=', 'tests.id')
        ->join('test_college','test_college.test_id','=','tests.id')
        ->join('test_course','test_course.test_id','=','tests.id')
        ->join('education__details as ed_D', 'ed_D.collage_id', '=', 'test_college.college_id')
        ->join('test_semester','test_semester.test_id','=','tests.id')
       	// ->join('education__details as ed', 'ed.branch_id', '=', 'test_branch.branch_id')       
        ->select('tests.*')
        ->where("test_college.college_id",$college->collage_id)
        ->where("test_branch.branch_id",$college->branch_id)
        ->where("test_course.course_id",$college->degree)
        ->where("test_semester.semester_id",$user_semester->semister)
        ->where("tests.status",1)
        ->where("ed_D.user_id",$u_id)
        ->get();
        // ->toSql();

       // dd($data['Test_time']);         
        return view('Students/Webviews/all_test',$data);       

    }

    public function Test_Instraction(Request $req)
    {
        // dd($req->test_id);
        $u_id = Auth::User()->id;
        $data['test'] = Test::where('status',1)->where('id',$req->test_id)->first();
        $data['test_section'] = DB::table('test_section')
        ->join('test_tb_section','test_tb_section.test_section_id', '=', 'test_section.id')             
        ->orderBy('test_section.Priority', 'asc') 
        ->where('test_tb_section.test_id',$req->test_id)
        ->select('test_section.test_section_name as section_name','test_tb_section.*')
        ->get();
    // dd($data['test_section']);
        // dd($data['test']);
        $data['test_id'] = $req->test_id;
        return view('Students/Webviews/Test_Instraction',$data);
    }

    // public function Start_Test(Request $req)
    public function Start_Test($test_id)
    {
        //dd($req);
        $u_id = Auth::User()->id;
        $Test_ID = $test_id;
        session()->forget('Test_Id');
        // ===========================================
        $type_name_id = Test::where('id',$Test_ID)->first();

        if($type_name_id->test_name_id == 4)
        {
           // dd("true");
            DB::table('save__answers')->where('user_id', $u_id)->where('test_id',$Test_ID)->delete();
        }
        // ===========================================
        $user_test = UserTest::where('Test_status',1)->where('test_id',$Test_ID)->where('user_id',$u_id)->first();
        if(!$user_test)
        {
            // ============================
            if($type_name_id->test_name_id != 4)
            { 
            //    ================================ 
                $data = new UserTest;
                $data->user_id=$u_id;            
                $data->test_id=$Test_ID;            
                $result = $data->save();
                // ==================================
            }   
            // =========================== 
           // $test_question = Question::get();
             
            $test_question = DB::table('test_question')
            ->join('questions', 'questions.id', '=', 'test_question.question_id')           
            ->select('questions.*')
            ->where('test_question.test_id',$Test_ID)
            ->get();
            //dd($test_question);
            foreach($test_question as $list)
            {
                $data = new Save_Answer;
                $data->user_id=$u_id;                             
                $data->test_id=$Test_ID;
                $data->question_id=$list->id; 
                $data->correct_answer=$list->correct_answer;             
                $result = $data->save(); 
            }


            Session::put('Test_Id',$Test_ID);
            return redirect('Test');
            //return redirect('s_test2');
            // 
            
            // $data['page_title'] = 'Start Test';
            // $u_id = Auth::User()->id;
            // $data['user'] = User::where('id',$u_id)->first();
            // $data['Question'] = Question::where('status',1)->paginate(1);
            // $data['count_Que'] = Question::where('status',1)->get();
            // $data['Test_time']=Test::where('id',$req->test_id)->first();
            // //dd($data['Test_time']);
            // return view('Students/Webviews/teck_test',$data);
        }
        else
        {
            $data['page_title'] = 'Start Test';
            $u_id = Auth::User()->id;
            $data['user'] = User::where('id',$u_id)->first();
            // $data['Question'] = Question::where('status',1)->paginate(1);
            // $data['count_Que'] = Question::where('status',1)->get();
            // $data['Test_time']=Test::where('id',$t_id)->first();
            //dd($data['Test_time']);
            return redirect('studentdashboard');
        }    
        
    }

    // public function Test_Start()
    // {
    //     if (Session::has('Test_Id'))
    //     {
    //         //

    //        $test_id = Session::get('Test_Id');
    //         $data['page_title'] = 'Start Test';
    //         $u_id = Auth::User()->id;
    //         $data['user'] = User::where('id',$u_id)->first();             
    //         $data['Test_time']=Test::where('id',$test_id)->first();
    //         // $data['Question'] = DB::table('test_question')
    //         // ->join('questions', 'questions.id', '=', 'test_question.question_id')           
    //         // ->select('questions.*')
    //         // ->where('test_question.test_id',$test_id)
    //         // ->paginate(1);
    //         $data['Question'] = DB::table('test_question')
    //         ->join('questions', 'questions.id', '=', 'test_question.question_id')
    //         ->join('test_section', 'test_section.id', '=', 'questions.test_section')
    //         ->orderBy('test_section_name', 'asc')          
    //         ->select('questions.*')
    //         ->where('test_question.test_id',$test_id)
    //         ->paginate(1); 
    //         // ==========================================
    //         // $data['count_Que'] = DB::table('test_question')
    //         // ->join('questions', 'questions.id', '=', 'test_question.question_id')           
    //         // ->select('questions.*')
    //         // ->where('test_question.test_id',$test_id)
    //         // ->get();
    //         $data['count_Que'] = DB::table('test_question')
    //         ->join('questions', 'questions.id', '=', 'test_question.question_id')  
    //         ->join('save__answers', 'save__answers.question_id', '=', 'questions.id')   
    //         ->join('test_section', 'test_section.id', '=', 'questions.test_section')
    //         ->select('questions.*','save__answers.Select_option')
    //         ->where('test_question.test_id',$test_id)
    //         ->orderBy('test_section_name', 'asc')
    //         ->get();
    //         //dd($data['Test_time']);
    //         return view('Students/Webviews/teck_test',$data);
    //     }
    // }
    // ====================================================
      public function Test_Start()
    {
        if (Session::has('Test_Id'))
        {
            //
           
           $test_id = Session::get('Test_Id');
            $data['page_title'] = 'Start Test';
            $u_id = Auth::User()->id;
            $data['user'] = User::where('id',$u_id)->first();             
            $data['Test_time']=Test::where('id',$test_id)->first();
            // $data['Question'] = DB::table('test_question')
            // ->join('questions', 'questions.id', '=', 'test_question.question_id')           
            // ->select('questions.*')
            // ->where('test_question.test_id',$test_id)
            // ->paginate(1);
            // $data['Question'] = DB::table('test_question')
            // ->join('questions', 'questions.id', '=', 'test_question.question_id')
            // ->join('test_section', 'test_section.id', '=', 'questions.test_section')
            // ->orderBy('test_section_name', 'asc')          
            // ->select('questions.*')
            // ->where('test_question.test_id',$test_id)
            // ->paginate(1); 

            $data['section'] = DB::table('test_section')
            ->join('test_tb_section','test_tb_section.test_section_id', '=', 'test_section.id')
            ->join('tests','tests.id', '=', 'test_tb_section.test_id')
            ->orderBy('test_section.Priority', 'asc') 
            ->where('test_tb_section.test_id',$test_id)
            ->select('test_section.id as section_id','test_section.test_section_name')
            ->get();

            if (Session::has('current_session'))
            {

            }
            else
            {
                Session::put('current_session', $data['section'][0]->section_id);
            }
            // $data['count_Que'] = DB::table('test_question')
            // ->join('questions', 'questions.id', '=', 'test_question.question_id')           
            // ->select('questions.*')
            // ->where('test_question.test_id',$test_id)
            // ->get();
            $data['count_Que'] = DB::table('test_question')
            ->join('questions', 'questions.id', '=', 'test_question.question_id')  
            ->join('save__answers', 'save__answers.question_id', '=', 'questions.id')   
            ->join('test_section', 'test_section.id', '=', 'questions.test_section')
            ->select('questions.*','save__answers.Select_option')
            ->where('test_question.test_id',$test_id)
            ->where('save__answers.user_id',$u_id)
            ->orderBy('test_section_name', 'asc')
            ->get();
            //dd($data['Test_time']);
            return view('Students/Webviews/teck_test',$data);
        }
    }
    // ===============================================
    // public function Test_Start()
    // {
    //     if (Session::has('Test_Id'))
    //     {
    //         //

    //        $test_id = Session::get('Test_Id');
    //         $data['page_title'] = 'Start Test';
    //         $u_id = Auth::User()->id;
    //         $data['user'] = User::where('id',$u_id)->first();             
    //         $data['Test_time']=Test::where('id',$test_id)->first();
    //         // $data['Question'] = DB::table('test_question')
    //         // ->join('questions', 'questions.id', '=', 'test_question.question_id')           
    //         // ->select('questions.*')
    //         // ->where('test_question.test_id',$test_id)
    //         // ->paginate(1);
    //         $data['Question'] = DB::table('test_question')
    //         ->join('questions', 'questions.id', '=', 'test_question.question_id')
    //         ->join('test_section', 'test_section.id', '=', 'questions.test_section')
    //         ->orderBy('test_section_name', 'asc')          
    //         ->select('questions.*')
    //         ->where('test_question.test_id',$test_id)
    //         ->paginate(1); 
    //         // $data['count_Que'] = DB::table('test_question')
    //         // ->join('questions', 'questions.id', '=', 'test_question.question_id')           
    //         // ->select('questions.*')
    //         // ->where('test_question.test_id',$test_id)
    //         // ->get();
    //         $data['count_Que'] = DB::table('test_question')
    //         ->join('questions', 'questions.id', '=', 'test_question.question_id')  
    //         ->join('save__answers', 'save__answers.question_id', '=', 'questions.id')   
    //         ->join('test_section', 'test_section.id', '=', 'questions.test_section')
    //         ->select('questions.*','save__answers.Select_option')
    //         ->where('test_question.test_id',$test_id)
    //         ->orderBy('test_section_name', 'asc')
    //         ->get();
    //         //dd($data['Test_time']);
    //         return view('Students/Webviews/teck_test',$data);
    //     }
    // }

    public function Submit_test(Request $req)
    {
        //dd($req);
        $u_id = Auth::User()->id;
        //$update = DB::table('save__answers')->where('user_id', $u_id)->where('question_id', $req->question_id)->update(['Select_option' => $req->option]);
        // $data = new Save_Answer;
        // $data->user_id=$u_id;            
        // $data->question_id=$req->question_id;
        // $data->Select_option=$req->option;
        // $result = $data->save();

        $update = DB::table('save__answers')->where('user_id', $u_id)->where('test_id',$req->test_id)->where('question_id',$req->question_id)->update([ 'Select_option' => $req->option,'updated_at' => date("Y-m-d h:i:s")]);
        // $data['page_title'] = 'Start Test';
        // $u_id = Auth::User()->id;
        // $data['user'] = User::where('id',$u_id)->first();
        // //dd(++$req->question_id);
        // $data['Question'] = Question::where('status',1)->where('id',++$req->question_id)->first();

        // if($data['Question'])
        // {      
    	//     return view('Students/Webviews/teck_test',$data);
        // }
        // else
        // {
        //     return redirect('studentdashboard'); 
        // }


        // ===============================
        return Response()->json($update);

    }

    // ===================================================

    public function Test_Result()
    {
       // dd($t_id);
       session()->forget('current_session');
       // $data['page_title'] = 'Test Result';
        $test_id = Session::get('Test_Id');
        $u_id = Auth::User()->id;
        $codeing_score = 0;
        //$data['Test_time']=Test::where('id',$test_id)->select('test_name','mark_per_question')->first();
        //dd($test_id);
        $user = User::where('id',$u_id)->first();
        $Q_total1 = Save_Answer::where('user_id',$u_id)->where('test_id',$test_id)->get();
        $Compl_total1 = Save_Answer::where('user_id',$u_id)->where('test_id',$test_id)->whereNotNull('Select_option')->get();
        $U_total1 = Save_Answer::where('user_id',$u_id)->where('test_id',$test_id)->whereNull('Select_option')->get(); 
        $C_total1 = Save_Answer::where('user_id',$u_id)->where('test_id',$test_id)->whereColumn('Select_option','correct_answer')->get();
        $W_total1 = Save_Answer::where('user_id',$u_id)->where('test_id',$test_id)->whereColumn('Select_option','!=','correct_answer')->get();         
        //dd($data['W_total']);

        $Coding_Question = testcase_result::where('user_id',$u_id)->where('test_id',$test_id)->get();
        $Coding_Question_no = count($Coding_Question);

        $Coding_score = testcase_result::where('user_id',$u_id)
                                        ->where('test_id',$test_id)
                                        ->select(DB::raw('SUM(mark_testcase) AS Coding_Score'))
                                        ->first();

        if($Coding_score)
        {
            $codeing_score =  $Coding_score->Coding_Score;
        }
        // $data['Test_time']=Test::where('id',$t_id)->first();
          // ===================================================
                $test_type = "";
                $type_name_id = Test::where('id',$test_id)->first();
                 
                if($type_name_id->test_name_id == 4)
                {
                        $test_type = 0;
                }
                else
                {
                    $test_type = 1;
                }
        // ===================================================
        $test_result1 = test_result::where('test_id',$test_id)->where('user_id',$u_id)->where('test_type',1)->first();
        // ==================================================
        //$test_result1 = test_result::where('test_id',$test_id)->where('user_id',$u_id)->first();

        if(!$test_result1)
        {
        
            $Test_time1 =Test::where('id',$test_id)->select('test_name','mark_per_question')->first();
           // dd( $Test_time1 );
            $Total_Q1 = count($Q_total1);
            $Compl_Q1 = count($Compl_total1);
            $Un_Comp_Q1 = count($U_total1);
            $Correct_Ans1 = count($C_total1);
            $Wrong_Ans1 = count($W_total1);
            if( $Test_time1 )
            {
                $Score = $Correct_Ans1 * $Test_time1->mark_per_question;
            }
            else
            {
                $Score = $Correct_Ans1 * 0;
            }          

            $Score = $Score + $codeing_score;

            $data = new test_result;
            $data->user_id=$u_id;                             
            $data->test_id=$test_id;
            $data->total_question=$Total_Q1; 
            $data->completed=$Compl_Q1; 
            $data->un_answered=$Un_Comp_Q1 - $Coding_Question_no; 
            $data->correct=$Correct_Ans1;
            $data->wrong=$Wrong_Ans1;
            $data->total_score=$Score;
            $data->test_type=$test_type;             
            $result = $data->save();
        }

        $data['C_Score'] = $codeing_score;
        $data['no_CQuestion'] = $Coding_Question_no;
        $data['page_title'] = 'Test Result';
        $data['Test_time']=Test::where('id',$test_id)->select('test_name','mark_per_question')->first();
        //dd($test_id);
        $data['user'] = User::where('id',$u_id)->first();
        $data['Q_total'] = Save_Answer::where('user_id',$u_id)->where('test_id',$test_id)->get();
        $data['Compl_total'] = Save_Answer::where('user_id',$u_id)->where('test_id',$test_id)->whereNotNull('Select_option')->get();
        $data['U_total'] = Save_Answer::where('user_id',$u_id)->where('test_id',$test_id)->whereNull('Select_option')->get(); 
        $data['C_total'] = Save_Answer::where('user_id',$u_id)->where('test_id',$test_id)->whereColumn('Select_option','correct_answer')->get();
        $data['W_total'] = Save_Answer::where('user_id',$u_id)->where('test_id',$test_id)->whereColumn('Select_option','!=','correct_answer')->get(); 
        // =========================================================


        return view('Students/Webviews/Test_result',$data);   
    }



    // ====================================================================

    public function Delete_Intership($Int_id)
    {
        $u_id = Auth::User()->id;
        $result = "";
        $Interships = Interships::where('user_id',$u_id)->where('id',$Int_id)->first();
        if($Interships)
        {
            $result=Interships::where('id',$Int_id)->where('user_id',$u_id)->delete();
        }
        return back();
    }

    public function Delete_project($proj_id)
    {
        $u_id = Auth::User()->id;
        $result = "";
        $project = Academic_project::where('user_id',$u_id)->where('id',$proj_id)->first();
        if($project)
        {
            $result=Academic_project::where('id',$proj_id)->where('user_id',$u_id)->delete();
        }
        return back();
    }

    public function Delete_Certificate($certi_id)
    {
        $u_id = Auth::User()->id;
        $result = "";
        $certificate = Certification::where('user_id',$u_id)->where('id',$certi_id)->first();
        if($certificate)
        {
            $uploaded_certifi = "";
            if($certificate->upload_certificat)
            {
                $uploaded_certifi = $certificate->upload_certificat;
            }
            $result= Certification::where('id',$certi_id)->where('user_id',$u_id)->delete();
            if($result)
            {
                if($certificate->upload_certificat != null)
                {
                    unlink(public_path($uploaded_certifi));
                }    
            }

        }
        return back();
    }

    public function Delete_UG_Details($id)
    {
        // dd($id);
        $UG_deleted = UG_Details::where('id',$id)->delete();
        toastr()->error('Information Deleted!!');  
        return back();
    }

    public function Delete_PG_Details($id)
    {
        // dd($id);
        $PG_deleted = PG_Details::where('id',$id)->delete();
        toastr()->error('Information Deleted!!');
        return back();
    }

    public function learing_video_section()
    {
        $data['sections'] = DB::table('test_section')->where('status',"1")->get();  
         return view('Students/Webviews/all_video_page', $data);
    }

    public function E_Learn($section_id)
    {
        $data['material'] = DB::table('material')->where('section_id', $section_id)->whereNotNull('video_link')->get();  
         return view('Students/Webviews/all_video_section_wise', $data);
    }

    public function get_video_link(Request $req)
    {
        $data['material'] = DB::table('material')->where('id',$req->material_id)->first();
    return $data;
    }


    // ====================================================

    public function Get_TestQ(Request $req)
    {
        $_Que = Question::where('id',$req)->first();
    }



// ======================21-8-21======================

    public function QuestionOnSection(Request $req)
    {
        $u_id = Auth::User()->id;
        $test_id = Session::get('Test_Id');
        //$section_id = $req->section_id;

        $section_id = $req->section_id;
        // return $section_id;
        Session::put('current_session', $section_id);


         $Question = DB::table('test_question')
            ->join('questions', 'questions.id', '=', 'test_question.question_id')
            ->join('test_section', 'test_section.id', '=', 'questions.test_section')
            ->join('test_tb_section', 'test_tb_section.test_section_id', '=', 'test_section.id')          
            ->select('questions.*','test_tb_section.section_time')
            ->where('test_question.test_id',$test_id)
            ->where('questions.test_section',$section_id)
            ->where('test_tb_section.test_id',$test_id)
            ->paginate(1);
        // return response()->json(array('$question'=> $Question), 200);
        return response()->json($data = [
            'status' => 200,
            'msg' => 'success',
            'question' => $Question,
            'links' => $Question->links()->render()
        ]);
    }
// =======================================================

    public function fetch_section_question($section_id)
    {

        $u_id = Auth::User()->id;
        $test_id = Session::get('Test_Id');
        //$section_id = 5;
        $Question = DB::table('test_question')
            ->join('questions', 'questions.id', '=', 'test_question.question_id')
            ->join('test_section', 'test_section.id', '=', 'questions.test_section')          
            ->select('questions.*')
            ->where('test_question.test_id',$test_id)
            ->where('questions.test_section',$section_id)
            ->paginate(1);

        return response()->json($data = [
            'status' => 200,
            'msg' => 'success',
            'question' => $Question,
            'links' => $Question->links()->render()
        ]);
    }
// ==================================================
    public function question_option(Request $req)
    {
        $test_id = Session::get('Test_Id');
        
        $Q_option = DB::table('answers')->where('question_id',$req->q_id)->get();

        $Select_option = DB::table('save__answers')->where('test_id',$test_id)->where('user_id',Auth::User()->id)->where('question_id',$req->q_id)->select('Select_option')->first();
        $producttest['select_op'] = $Select_option;
         $producttest['data'] =  $Q_option; 
       echo json_encode($producttest);
       exit; 
    }
// ============================================================

    public function View_Compiler_sample()
    {
        return view('Students/Webviews/compiler_test');
    }
// ==============================================================
    public function All_Result()
    {
        $u_id = Auth::User()->id;
        $data['page_title'] = 'All Test Result';
        $data['Test_Result'] = DB::table('test_results')
        ->join('tests', 'tests.id', '=', 'test_results.test_id')
        ->select('test_results.id','tests.test_name')
        ->where('test_results.user_id',$u_id)
        ->get();
        // dd($data['Test_Result']);
        return view('Students/Webviews/All_Testresult',$data); 

    }
    
    // ================================================================
    public function get_result(Request $req)
    {
        # code...
        //$Result1 = $req->result_ID;
       // $student = test_result::where('id',$req->result_ID)->get();
        $student = DB::table('test_results')
         ->join('tests', 'tests.id', '=', 'test_results.test_id')
         ->select('test_results.*','tests.test_name')
         ->where('test_results.id',$req->result_ID)
         ->get();
        return response()->json($data = [
            'status' => 200,
            'msg' => 'success',
            'student_result' => $student,            
        ]);
    }
   


    // ==================================================


    
    public function View_Compiler()
    {
        $data['Question'] = Question::where('id',1299)->first();
        $data['test_case'] = Test_case::where('question_id',1299)->get();
        return view('Students/Webviews/demo1_compiler',$data);
    }

    public function charts()
    {
        $data['page_title'] = 'Student Analysis';
        return view('Students/Webviews/chart',$data);
    }

   public function save_student_program(Request $req){
        //    return $req->req; 
        // $programm = $req->programm;
        // $stdin = $req->test_case_input; 
    
                    $curl = curl_init();
    
                    curl_setopt_array($curl, array(
                    CURLOPT_URL => 'https://onecompiler.com/api/v1/run?access_token=DP2R97GPfK7Hd3dYsNCaZ546C9PufwVGsPdc2FMRKWgqQdPBZh3gvSjaNGGGZayxm6UtS99yXYK5sF4DKeueaG8s8HW6BGmHrA2QVpAns4UfHqbGAVhZaKnaShP2xZtB',
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'POST',
                    CURLOPT_POSTFIELDS =>$req->programm,
                    CURLOPT_HTTPHEADER => array(
                        'Content-Type: application/json'
                    ),
                    ));
    
                    $response = curl_exec($curl);
    
                    curl_close($curl);
                    return $response;
    
          
        }

 
    // public function save_student_program(Request $req){
    //     //    return $req;
           
    //                 $curl = curl_init();
    
    //                 curl_setopt_array($curl, array(
    //                 CURLOPT_URL => 'https://onecompiler.herokuapp.com/api/v1/run',
    //                 CURLOPT_RETURNTRANSFER => true,
    //                 CURLOPT_ENCODING => '',
    //                 CURLOPT_MAXREDIRS => 10,
    //                 CURLOPT_TIMEOUT => 0,
    //                 CURLOPT_FOLLOWLOCATION => true,
    //                 CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //                 CURLOPT_CUSTOMREQUEST => 'POST',
    //                 CURLOPT_POSTFIELDS =>$req->programm,
    //                 CURLOPT_HTTPHEADER => array(
    //                     'Content-Type: application/json'
    //                 ),
    //                 ));
    
    //                 $response = curl_exec($curl);
    
    //                 curl_close($curl);
    //                 return $response;
    
          
    //     }


        
        // ======================================================

        public function QTest_Case(Request $req)
        {
            
            $test_case = Test_case::where('question_id',$req->q_id)->get(); 
            return response()->json($data = [
                'status' => 200,
                'msg' => 'success',
                'test_case' => $test_case,            
            ]);
        }

        public function testCase_Result(Request $req)
        {
           
            //$req->test_case_count
            //$req->test_case_pass
            //$req->section_id
            //$req->q_id
            $test_CaseResult_update = "";
            $u_id = Auth::User()->id;
            $test_id = Session::get('Test_Id');
            $testcase_result = testcase_result::where('user_id',$u_id)->where('test_id',$test_id)->where('Question_id',$req->q_id)->first(); 
            $MTest_case = Test_case::where('question_id',$req->q_id)->pluck('marks_test_case')->first();
            $marks_testCase = $req->test_case_pass * $MTest_case;
            
            if($testcase_result)
            {
                // return $req->test_case_pass;
                //$test_CaseResult = 0;
                $test_CaseResult_update = DB::table('testcase_result')
                                        ->where('user_id', $u_id)
                                        ->where('test_id',$test_id)
                                        ->where('section_id',$req->section_id)
                                        ->where('Question_id',$req->q_id)
                                        ->update([ 
                                            'correct_testCase' => $req->test_case_pass,                                            
                                            'mark_testcase' =>$marks_testCase
                                            // 'total_testCase' => $req->test_case_count,
                                        ]);
            
            }
            else
            {
                //$test_CaseResult = 1;
                 
                $data = new testcase_result;
                $data->user_id=$u_id;            
                $data->test_id=$test_id;
                $data->section_id=$req->section_id;
                $data->Question_id=$req->q_id; 
                $data->correct_testCase=$req->test_case_pass; 
                $data->total_testCase=$req->test_case_count; 
                $data->mark_testcase=$marks_testCase;
                $test_CaseResult_update = $data->save();

                if($test_CaseResult_update)
                {
                    $update = DB::table('save__answers')->where('user_id', $u_id)->where('test_id',$req->test_id)->where('question_id',$req->q_id)->update(['Select_option' => 99,'updated_at' => date("Y-m-d h:i:s")]);
                }
            }
            return response()->json($data = [
                'status' => 200,
                'msg' => 'success',
                'test_case' => $test_CaseResult_update,                            
            ]);

        }

        public function profile_pic_submit(Request $req){

            $u_id = Auth::User()->id;

            if($req->hasFile('profile_picture')) {
                $file = $req->file('profile_picture');
                $filename = 'profile_pic'.time().'.'.$req->profile_picture->extension();
                $destinationPath = public_path('Student/images/profile_pic');
                $file->move($destinationPath, $filename);
                $image = 'Student/images/profile_pic/'.$filename;
                $result = DB::table('user_details')->where('user_id', $u_id)->update(['image'=>$image]);
            }
            
            toastr()->success('Image Uploded Successfully!');
            return back();
        }

        public function downloadResume($resume_type){ 
            $user_id = Auth::User()->id;
            $data['student_info'] = User::join('user_details', 'user_details.user_id', '=', 'users.id')
                                          ->join('education__details', 'education__details.user_id', '=', 'users.id')
                                          ->join('academics_details', 'academics_details.user_id', '=', 'users.id')
                                          ->join('pg_details', 'pg_details.user_id', '=', 'users.id')
                                          ->join('ug_details', 'ug_details.user_id', '=', 'users.id')
                                          ->join('technical_skills', 'technical_skills.user_id', '=', 'users.id')
                                          ->leftjoin('certifications', 'certifications.user_id', '=', 'users.id')
                                          ->leftjoin('academic_projects', 'academic_projects.user_id', '=', 'users.id')
                                          ->where('users.id',Auth::User()->id)
                                          ->first();
            
        //    dd($data['student_info']);
        if($data['student_info'] != null){
        switch ($resume_type) {
            case "1":
                $pdf = PDF::loadView('Students/Webviews/basic_resume', $data);
              break;
            case "2":
                $pdf = PDF::loadView('Students/Webviews/engg_resume', $data);
              break;
              case "3":
                // dd($data);
                $pdf = PDF::loadView('Students/Webviews/premium_resume', $data);
              break;
            default:
            $pdf = PDF::loadView('Students/Webviews/resume1', $data);
          }
        
           
        //    return $pdf->download("$user_id.pdf");
    
            // for view without download use stream methode 
           return $pdf->stream();
        //    return view('Students/Webviews/resume1',$data);

        }else{
            toastr()->error('Please fill all data to download resume');
            return back();
        }
       }
       public function downloadResumeview($resume_type){ 
        //    dd($resume_type);
       
        $data['student_info'] = User::join('user_details', 'user_details.user_id', '=', 'users.id')
                                      ->join('education__details', 'education__details.user_id', '=', 'users.id')
                                      ->join('academics_details', 'academics_details.user_id', '=', 'users.id')
                                      ->join('pg_details', 'pg_details.user_id', '=', 'users.id')
                                      ->join('ug_details', 'ug_details.user_id', '=', 'users.id')
                                      ->join('technical_skills', 'technical_skills.user_id', '=', 'users.id')
                                      ->leftjoin('certifications', 'certifications.user_id', '=', 'users.id')
                                      ->leftjoin('academic_projects', 'academic_projects.user_id', '=', 'users.id')
                                      ->where('users.id',3)
                                      ->first();
       return view('Students/Webviews/engg_resume',$data);
   }

   public function viewResumeTemplate(){
    $u_id = Auth::User()->id;
    $data['date_place'] = DB::table('technical_skills')->where('user_id', $u_id)->first();  
    return view('Students/Webviews/viewResumeTemplate',$data);

   }

   public function save_resume_date_place(Request $req){
    $u_id = Auth::User()->id;
    $result = DB::table('technical_skills')->where('user_id', $u_id)->update([
        'resume_date' => $req->date, 
        'resume_place'=> $req->place,
    ]); 

    if($result){
        return response()->json(['success'=>'Date And Place Saved Successfully']);
    }else{
        return response()->json(['error'=>'Date And Place Not Save']);
    }

   }
}
