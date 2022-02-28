<!DOCTYPE html>
<html>
<head>
	<title>Resume</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="shortcut icon" href="{{ asset('/1.png') }}">
	<style>
		body{
            margin: 30px;
            padding: 0px;
        }
        @page { margin:0px; padding: 0px; }
       
            .page-break {
                page-break-after: always;
            }

            .page-break:last-child {
                page-break-after: avoid;
            }
      
            p{
                margin-bottom: 0px;
                margin-top: 5px;
                font-size: 1rem;
                text-align: left;
                line-height: 1.5!important;
            }
            h4{
                margin-top: 5px;
                margin-bottom: 0px;
                
            }
            .h4{
                font-size: 1rem;
                /* margin-top: 5px; */
                margin-bottom: 0px;
            }
            .p{
                margin-bottom: 0px;
                margin-top: 0px!important;
                text-align: left;
                line-height: 1.5!important;
            }
            .bg-grey{
                background-color: #d3d3d3;
                color: #000;
                margin-bottom: 0px!important;
                padding-bottom:  0px!important;
            }
            .sub-heading{
                margin-top: 0px!important;
                font-size: 1.1rem!important;
                padding-bottom: 0px!important;
                margin-bottom: 0px!important;
            }
            .border-table{
                width: 100%;
                border: 1px solid #000;
                padding:12px 0px;
                border-collapse: collapse;
            }
            .border-table td, th{
                border: 1px solid #000;
                text-align: center;
            }
            .border-table th{
                background-color: #d3d3d3;
                padding:15px 0px;
                padding-bottom:10px;
            }

            .no_table{
                width: 100%;
                border: none;
                padding:0px;
                border-collapse: collapse;
            }
            .no_table td, .no_table th{
                border: none;
                text-align: left;
                padding: 0px;
                margin: 0px;
                vertical-align: top;
                line-height: 1.5rem;
            }
            .no_table th{
                padding-top: 0px;
                padding-bottom:0px;
                margin: 0px!important;
                border: none;
            }
            .skill_ul{
                margin-top: 0px!important;
                padding-top:0px!important;
                margin :0px!important;
            }
            .skill_ul li{
                padding-top: 5px;
                padding-bottom: 0px;
                margin-bottom: 0px!important;
                list-style-type: square;
            }
           
	</style>
</head>
<body>
    <div class="content">
        <table style="width: 100%; border: none !important; padding:15px 25px;">
            <tr>
                <td>
                    <h3 style="margin-top: 0px; margin-bottom:0px; font-weight:bold;">{{$student_info->name}}  {{$student_info->l_name}}</h3>
                </td>
            </tr>
            <tr>
                <td  style="border-bottom: 3px solid #000; padding-bottom:10px;">
                    <p style="text-align: left; margin-right:25px;"> <span style="border-right: 1px solid #070707; padding-right:10px; margin-right:10px;">{{$student_info->email}} </span> <span>{{$student_info->phone}} </span>  </p>
                </td>
            </tr>
           
            <tr style="width: 100%;">
                <td>
                   <h4 class="sub-heading" style="padding-top: 8px;"> <span class="bg-grey">Career Objective</span></h4>          
                </td>                            
            </tr>
            <tr>
                <td>
                    <p style="white-space:pre-wrap;">{{$student_info->career_object}}</p>
                </td>
            </tr>

            <tr>
                <td>
                    <h4 class="sub-heading" style="padding-top: 8px;"> <span class="bg-grey">Academic Qualifications </span></h4>
                </td>
            </tr>

            <tr>
                <td>
                <table class="border-table">
                        <tr>
                            <th>Qualification</th>
                            <th>University / Board</th>
                            <th>Institution</th>
                            <th>Year of Passing</th>
                            <th>Percentage/ CGPA</th>
                        </tr>

                        @if($student_info->education == 'PG')
                    
                        @php
                            $college_name = DB::table('colleges')->where('id', $student_info->collage_id)->pluck('college_name')->first();
                            $degree =   DB::table('courses')->where('id', $student_info->degree)->pluck('course_name')->first();
                            $branch_name =  DB::table('branches')->where('id', $student_info->branch_id)->pluck('branch_name')->first();
                        @endphp
                        {{-- <p> <span>{{$degree}}</span>   <span> <b>{{$branch_name}}</b> </span> <span>{{$student_info->year_of_pass_ug}}</span> <span> <b>{{$college_name}} </b></span>  </p> --}}
                        <tr>
                            <td>{{$degree}}</td>
                            <td>{{$student_info->university}}</td>
                            <td>{{$college_name}}</td>   
                            <td>{{$student_info->year_of_pass_pg}}</td> 
                            <td>{{$student_info->avg_percentage_pg}}</td>               
                        </tr>
    
                        <tr>
                            <td>{{$student_info->cource_ug}}</td>
                            <td>{{$student_info->university_ug}}</td>
                            <td>{{$student_info->college_ug}}</td>
                            <td>{{$student_info->year_of_pass_ug}}</td>
                            <td>{{$student_info->avg_percentage_ug}}</td>                      
                        </tr>
                        
                        @else
                        @php
                            $college_name = DB::table('colleges')->where('id', $student_info->collage_id)->pluck('college_name')->first();
                            $degree =   DB::table('courses')->where('id', $student_info->degree)->pluck('course_name')->first();
                            $branch_name =  DB::table('branches')->where('id', $student_info->branch_id)->pluck('branch_name')->first();
                        @endphp
                        {{-- <p> <span>{{$degree}}</span>   <span> <b>{{$branch_name}}</b> </span> <span>{{$student_info->year_of_pass_ug}}</span> <span> <b>{{$college_name}} </b></span>  </p> --}}
                        <tr>
                            <td>{{$degree}}</td>
                            <td>{{$branch_name}}</td>
                            <td>{{$student_info->year_of_pass_ug}}</td>
                            <td>{{$college_name}}</td>                      
                        </tr>
                        @endif
                        <tr>
                            <td>10 <sup>th</sup></td>
                            <td>{{$student_info->sslc_board}}</td>
                            <td>{{$student_info->sslc_school}}</td>
                            <td>{{$student_info->sslc_year}}</td>
                            <td>{{$student_info->sslc_perce}}</td>                      
                        </tr>
                        @if($student_info->puc_year)
                        <tr>
                            <td> 12 <sup>th</sup></td>
                            <td>{{$student_info->puc_board}}</td>
                            <td>{{$student_info->puc_college}}</td>
                            <td>{{$student_info->puc_year}}</td>
                            <td>{{$student_info->puc_perce}}</td>                             
                        </tr>
                        @elseif($student_info->diploma_year){
                            <tr>
                                <td>Diploma</td>
                                <td>{{$student_info->diploma_university}}</td>
                                <td>{{$student_info->diplma_college}}</td>
                                <td>{{$student_info->diploma_year}}</td>
                                <td>{{$student_info->diploma_perce}}</td>                             
                            </tr>
                        }
                        @else{
    
                        }
                        @endif
                </table>
            </td>
            </tr>

           

            {{-- <tr>
                <td>
                    <h4>Education</h4>
                </td>
            </tr>
            <tr>
               <td>

                <table class="border-table">
                    <tr>
                        <th>Qualification</th>
                        <th>Branch</th>                       
                        <th>Year of Passing</th>
                        <th>College</th>
                    </tr>

                   
                    @if($student_info->education == 'PG')
                    
                    <tr>
                        <td>{{$student_info->cource_ug}}</td>
                        <td>{{$student_info->branch_ug}}</td>
                        <td>{{$student_info->year_of_pass_ug}}</td>
                        <td>{{$student_info->college_ug}}</td>                      
                    </tr>
                    @php
                        $college_name = DB::table('colleges')->where('id', $student_info->collage_id)->pluck('college_name')->first();
                        $degree =   DB::table('courses')->where('id', $student_info->degree)->pluck('course_name')->first();
                        $branch_name =  DB::table('branches')->where('id', $student_info->branch_id)->pluck('branch_name')->first();
                    @endphp
                    {{-- <p> <span>{{$degree}}</span>   <span> <b>{{$branch_name}}</b> </span> <span>{{$student_info->year_of_pass_ug}}</span> <span> <b>{{$college_name}} </b></span>  </p> --}
                    <tr>
                        <td>{{$degree}}</td>
                        <td>{{$branch_name}}</td>
                        <td>{{$student_info->year_of_pass_ug}}</td>
                        <td>{{$college_name}}</td>                      
                    </tr>
                    @else
                    @php
                        $college_name = DB::table('colleges')->where('id', $student_info->collage_id)->pluck('college_name')->first();
                        $degree =   DB::table('courses')->where('id', $student_info->degree)->pluck('course_name')->first();
                        $branch_name =  DB::table('branches')->where('id', $student_info->branch_id)->pluck('branch_name')->first();
                    @endphp
                    {{-- <p> <span>{{$degree}}</span>   <span> <b>{{$branch_name}}</b> </span> <span>{{$student_info->year_of_pass_ug}}</span> <span> <b>{{$college_name}} </b></span>  </p> --}
                    <tr>
                        <td>{{$degree}}</td>
                        <td>{{$branch_name}}</td>
                        <td>{{$student_info->year_of_pass_ug}}</td>
                        <td>{{$college_name}}</td>                      
                    </tr>
                    @endif
                </table>
                    
                    
                </td>
            </tr> --}}
          
          
            {{-- /*****************************
                    Intership 
            ************************************/ --}}


            @php
                $intership=  DB::table('interships')->where('user_id', Auth::user()->id)->get();
            //    dd($$student_info->user_id);
            @endphp
            @if($intership->count() > 0)
            <tr>
                <td>
                    <h4 class="sub-heading"> <span class="bg-grey">Internships </span></h4>
                </td>
            </tr>
              
            <tr>
                <td>

                    
                        @foreach ($intership as $item)
                        <table class="no_table">
                        <tr>
                            <th style="width:25%;"> <p>Company Name  </p> </th>
                            <td  style="width:75%;"> <p> <span style="margin-left: -10px;">:</span> {{$item->int_comp_name}}</p> </td>
                        </tr>
                        <tr>
                            <th style="width:25%;"><p>Role  </p></th>   
                            <td style="width:75%;"><p> <span style="margin-left: -10px;">:</span> {{$item->your_roles}}</p></td>                            
                        </tr> 
                        <tr>
                            <th style="width:25%;"  style="vertical-align: top;"><p>Description  </p></th>   
                            <td style="width:75%;"><p> <span style="margin-left: -10px;">:</span> {{$item->intern_description}}</p></td> 
                        </tr>
                        <tr>
                            <th style="width:25%;"> <p> Duration </p></th>
                            <td style="width:75%;"><p> <span style="margin-left: -10px;">:</span> {{$item->intship_duration}} Months</p></td>
                        </tr>
                    </table>                         
                        @endforeach
                             
                </td>
            </tr>
            @endif

             {{-- /*****************************
                    Technical Skills
            ************************************/ --}}
            @if($student_info->tech_skill)
            <tr>
                <td>
                    <h4 class="sub-heading" style="padding-top: 8px;"> <span class="bg-grey" >Technical Skills </span></h4>
                </td>
            </tr>

            <tr>
                <td>
                   @php
                       $new_array =  explode(",",$student_info->tech_skill)
                   @endphp
                   <ul class="skill_ul">
                       @foreach ($new_array as $item)
                            <li>
                                {{$item}} 
                            </li>
                       @endforeach
                   </ul>
                </td>
            </tr>
            @endif

            {{-- <tr>
                <td>
                 
                      <ul>
                          <li>
                            <p style="margin-left: 10px;"> 
                                @php
                                    $output = str_replace(',', '<br />', $student_info->tech_skill);
                                   
                                @endphp
                              @php
                                   echo   $output;
                              @endphp
                                </p>
                          </li>
                      </ul>
                  
                </td>
            </tr> --}}

            {{-- /*****************************
                    Certification
            ************************************/ --}}


            @php
                $Certification =  DB::table('certifications')->where('user_id', Auth::user()->id)->get();
            //    dd($projects->count());
            $i=1;
            @endphp
            @if($Certification->count() > 0)
            <tr>
                <td>
                    <h4 class="sub-heading" style="padding-top: 8px;"> <span class="bg-grey">Achievements and Certifications</span></h4>
                </td>
            </tr>

           
            <tr>
                <td>
                    <ul class="skill_ul">
                        <li>
                            {{$student_info->achievement}}
                        </li>
                        @foreach ($Certification as $item)
                        <li>
                            Certification In {{$item->Certification_name}}
                        </li>
                        @endforeach
                    </ul>
                    {{-- <table class="no_table">
                        <tr>
                            <th colspan="2">Certifications</th>
                        </tr>
                       
                        <tr>
                            <td style="width:20%;"> <p><b>Certification In</b>  </p>  </td>
                            <td style="width:80%;">{{}}</td>
                        </tr>
                        @endforeach
                    </table> --}}
                </td>
            </tr>
            @endif

        </table>
            {{-- /*****************************
                    projects
            ************************************/ --}}
        
            <table style="width: 100%; border: none !important; padding:0px 25px;margin-top:-8px;"  >
            @php
                $projects =  DB::table('academic_projects')->where('user_id', Auth::user()->id)->get();
            //    dd($projects->count());
            $i=1;
            @endphp
            @if($projects->count() > 0)
            <tr>
                <td>
                    <h4 class="sub-heading"> <span class="bg-grey">Projects</span></h4>
                </td>
            </tr>
            <tr>
                <td>
                   
                        @foreach ($projects as $item)
                        <table class="no_table" >
                        {{-- <tr >
                            <td  colspan="2">
                                <h4> Project {{$i++}} </h4>
                            </td>                          
                        </tr> --}}
                        <tr >
                            <td width="20%">
                                <b>Project Name </b>                             
                            </td>
                            <td width="85%">
                          <span style="margin-left: -10px;">:</span>  {{$item->project_name}} 
                                </td>                   
                        </tr>  
                        <tr>
                            <td width="20%">
                                <p><b>Team Size</b></p>
                            </td> 
                            <td width="80%">
                               <p> <span style="margin-left: -10px;">:</span> {{$item->team_size}}</p>
                            </td>
                        </tr>   
                        <tr>
                            <td  width="20%" style="vertical-align: top;">
                                <p><b>Project Description </b></p>
                            </td>
                            <td width="80%" style="vertical-align: top;">
                                <p> <span style="margin-left: -10px;">:</span> {{$item->project_detail}}</p>
                            </td>
                        </tr>   
                        </table>       
                         @endforeach  
                   
                </td>
            </tr>
            @endif
           
            </table>
            <table style="width: 100%; border: none !important; padding:0px 25px;">
            
              {{-- /*****************************
                   Workshops / Seminars / Trainings
            ************************************/ --}}
           
           <tr>
               <td>
                <h4 class="sub-heading" style="padding-top: 8px;"> <span class="bg-grey">Workshops / Seminars / Trainings Attended</span></h4>
               </td>
           </tr>

           <tr>
            <td>
               @php
                   $new_array =  explode(",",$student_info->seminar_traning)
               @endphp
               <ul class="skill_ul">
                   @foreach ($new_array as $item)
                        <li>
                            {{$item}} 
                        </li>
                   @endforeach
               </ul>
            </td>
        </tr>

           {{-- <tr>
               <td>
                   <p style="margin-left: 10px;">{{$student_info->seminar_traning}}</p>
               </td>
           </tr> --}}

             {{-- /*****************************
                   Skills Sets
            ************************************/ --}}

            <tr>
                <td>
                    <h4 class="sub-heading"  style="padding-top: 8px;"> <span class="bg-grey">Personal Attributes</span></h4>
                </td>
            </tr>
            <tr>
                <td>
                   @php
                       $new_array =  explode(",",$student_info->skil_sets)
                   @endphp
                   <ul class="skill_ul">
                       @foreach ($new_array as $item)
                            <li>
                                {{$item}} 
                            </li>
                       @endforeach
                   </ul>
                </td>
            </tr>
            {{-- <tr>
                <td>
                    <p style="margin-left: 10px;">{{$student_info->skil_sets}}</p>
                </td>
            </tr> --}}
           

          {{-- /*****************************
                Extra-curricular Activities
            ************************************/ --}}

            <tr>
                <td>
                    <h4 class="sub-heading"  style="padding-top: 8px;"> <span class="bg-grey">Extra-curricular Activities</span></h4>
                </td>
            </tr>
            <tr>
                <td>
                   @php
                       $new_array =  explode(",",$student_info->extracurricular)
                   @endphp
                   <ul class="skill_ul">
                       @foreach ($new_array as $item)
                            <li>
                                {{$item}} 
                            </li>
                       @endforeach
                   </ul>
                </td>
            </tr>
            {{-- <tr>
                <td>
                    <p style="margin-left: 10px;">{{$student_info->extracurricular}}</p>
                </td>
            </tr> --}}


             {{-- /*****************************
               Hobbies
            ************************************/ --}}

            <tr>
                <td>
                    <h4 class="sub-heading"  style="padding-top: 8px;"> <span class="bg-grey">Hobbies</span></h4>
                </td>
            </tr>
            {{-- <tr>
                <td>
                    <p style="margin-left: 10px;">
                        @php
                            $output = str_replace(',', '<br />', $student_info->hobbies);
                            echo $output;
                        @endphp
                    </p>
                  </td>
            </tr> --}}

            <tr>
                <td>
                   @php
                       $new_array =  explode(",",$student_info->hobbies)
                   @endphp
                   <ul class="skill_ul">
                       @foreach ($new_array as $item)
                            <li>
                                {{$item}} 
                            </li>
                       @endforeach
                   </ul>
                </td>
            </tr>

            

              {{-- /*****************************
                    Personal Information
            ************************************/ --}}

            
            <tr>
                <td>
                    <table>
                        <tr>
                            <td colspan="2" style="padding-top:8px; padding-bottom:5px;">
                                <h4 class="sub-heading" style="margin-bottom: 20px;"> <span class="bg-grey" >Personal Details</span></h4>
                            </td>
                        </tr>
                        {{-- <tr>
                           <td> <b>Full Name</b> </td>
                           <td style="text-align: left; padding-left:20px;">{{$student_info->name}} {{$student_info->l_name}}</td>
                           
                        </tr>
                        <tr>
                            <td> <b>Mobile</b> </td>
                           <td style="text-align: left; padding-left:20px;">{{$student_info->phone}}</td>
                        </tr> --}}
                       
                        <tr>
                            <td>
                                <b >Date of Birth  </b>
                            </td>
                            <td style="text-align: left; padding-left:20px;">
                                {{-- $mytime = Carbon\Carbon::now()->format('d F Y');  --}}
                               : {{ Carbon\Carbon::parse($student_info->dob)->format('d F Y')}}
                            </td>
                        </tr>
                        <tr>
                            <td> <b>Father’s Name </b></td>
                            <td style="text-align: left; padding-left:20px;"> : {{$student_info->father_name}}</td>
                        </tr>
                        <tr>
                            <td>
                                <b>Gender</b>
                            </td>
                            <td style="text-align: left; padding-left:20px;"> : 
                                @if($student_info->gender == '1')
                                Male 
                                @else
                                Female
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>
                              <b>Language Known</b>  
                            </td>
                            <td style="text-align: left; padding-left:20px;"> : {{$student_info->known_language}}</td>
                        </tr>
                        <tr>
                            <td> <b>Address</b> </td>
                            <td  style="text-align: left; padding-left:20px;"> : {{$student_info->address}}</td>
                        </tr>
                    </table>  
                </td>
            </tr>

             {{-- /*****************************
                    Declaration 
            ************************************/ --}}
           
            <tr>
                <td>  <h4 class="sub-heading" style="padding-top: 8px;"> <span class="bg-grey">Declaration</span></h4> </td>
            </tr>
            <tr>
                <td>
                    <p style="margin-top:-1px;">I hereby declare that the above furnished information is true to the best of my knowledge.</p>
                </td>
            </tr>
            @php
                $mytime = Carbon\Carbon::now()->format('d F Y'); 
            @endphp   
            <tr>
                <td>
                    <p style="padding-bottom: 0px; margin-top :15px;"> @php echo date('j F Y', strtotime($student_info->resume_date));  @endphp</p>
                </td>
            </tr>
             
            <tr>
                <td>
                    <p style="margin-top: -5px;">Place: {{$student_info->resume_place}}</p>
                </td>
            </tr>
            <tr>
                <td>
                    <br>
                    <p style="text-align: right">(  {{$student_info->name}} {{$student_info->l_name}} )</p>
                </td>
            </tr>
        </table>
    </div>
     

</body>
</html>