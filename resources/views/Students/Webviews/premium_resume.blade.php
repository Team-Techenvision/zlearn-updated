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
                padding-bottom: 0px;
            }
            .h4{
                font-size: 1rem;
                margin-top: 5px;
                margin-bottom: 0px;
                padding-bottom: 0px;
              
            }
            .p{
                margin-bottom: 0px;
                margin-top: 5px;
                text-align: left;
                line-height: 1.5!important;
            }
           
            .sub-heading{
                margin-top: 10px;
                font-size: 1.1rem;
                line-height: 1.7;
            }
            .border-table{
                width: 100%;
                border: 1px solid #000;
                padding:15px 0px;
                border-collapse: collapse;
            }
            .border-table td, th{
                border: 1px solid #000;
                text-align: center;
            }
            .border-table th{
                padding-top: 10px;
                padding-bottom:10px;
                
            }
            .skill_ul{
                margin-top: 0px!important;
                padding-top:0px!important;
                margin :0px!important;
            }
            .skill_ul li{
                padding-top: 3px;
                padding-bottom: 0px;
                margin-bottom: 0px!important;
                margin-top: 0px;
                list-style-type: square;
            }
            .column {
                float: left;
                width: 50%;
                }

            /* Clear floats after the columns */
            .row:after {
            content: "";
            display: table;
            clear: both;
            }
            
	</style>
</head>
<body>
    <div class="content page-break">
        <table style="width: 100%; border: none !important; padding: 15px 50px; border-bottom:2px solid #5b9bd5; margin-left:-30px; margin-right:-30px;">
            <tr>
                <td>
                    <table style="width: 100%; text-align:center;">
                        <tr>
                            <td style="vertical-align: top; width:25%;"><p style="font-size:1.2rem; font-weight:bold; color:#00008B; margin-top:-10px;">{{$student_info->name}}  {{$student_info->l_name}}</p>
                                <p> <b>Address</b> </p>
                                <p> {{$student_info->address}} </p>
                                <div style="background-color: #000; height:50px; width: 35px; position:absolute; margin-left:-56px;"></div>
                            </td>
                            <td style="width: 50%;">  <img src="@if($student_info->image){{public_path($student_info->image)}}@endif" alt=""  width="120" height="120" style="border-radius: 60px;"></td>
                            <td style="vertical-align: top; width:25%;"> 
                                <p style="text-align: right;"> {{$student_info->email}} <span><img src="{{public_path('Student/images/logo/email.png')}}" style="margin-top:5px;" alt=""  width="20" height="20"></span></p> 
                                <p style="text-align: right;"> {{$student_info->phone}} <span><img src="{{public_path('Student/images/logo/phone.png')}}" style="margin-top:5px;" alt=""  width="20" height="20"></span></p>
                            </td>
                        </tr>
                    </table>
            </td>
            </tr>
        </table>

        <div class="row">
            <div class="column">
                <table>
                    <tr>
                        <td>
                            <table style="width: 100%; border: none !important; padding: 15px 20px;">
                                <tr style="width: 100%;">
                                    <td style="width : 100%; ">
                                       <h4 class="sub-heading" style="margin-top:-10px; margin-bottom:0px; padding-bottom:0px;"> <span class="bg-grey "> Career Objectives </span> </h4>  
                                       <div style="background-color: #5b9bd5; height:50px; width: 38px; position:absolute; margin-left:-60px;"></div>    
                                    </td>                           
                                </tr>
                                <tr>
                                    <td>
                                        <p style="white-space:pre-wrap; margin-top:0px; padding-top:0px;">{{$student_info->career_object}}</p>
                                    </td>
                                </tr>
                            </table>
                            <table style="width: 100%; border: none !important; padding: 15px 20px;">
                                <tr style="width: 100%;">
                                    <td style="width : 100%; ">
                                       <h4 class="sub-heading" style="margin-top:-10px; margin-bottom:0px; padding-bottom:0px;"> <span class="bg-grey "> Education </span> </h4>  
                                       <div style="background-color: #5b9bd5; height:50px; width: 38px; position:absolute; margin-left:-60px;"></div>    
                                    </td>                           
                                </tr>
                                <tr> 
                                    <td>
                                        @if($student_info->education == 'PG')
                                            @php
                                                $college_name = DB::table('colleges')->where('id', $student_info->collage_id)->pluck('college_name')->first();
                                                $degree =   DB::table('courses')->where('id', $student_info->degree)->pluck('course_name')->first();
                                                $branch_name =  DB::table('branches')->where('id', $student_info->branch_id)->pluck('branch_name')->first();
                                            @endphp
                                            <p > <span >{{$degree}} </span> : <b><span style="margin-left: 10px;">{{$branch_name}}</span></b> - <span style="margin-left: 10px;">{{$student_info->year_of_pass_pg}}</span> <br> <b> <span>{{$student_info->university}}</span> </b> </p>
                                       @else
                                        @php
                                            $college_name = DB::table('colleges')->where('id', $student_info->collage_id)->pluck('college_name')->first();
                                            $degree =   DB::table('courses')->where('id', $student_info->degree)->pluck('course_name')->first();
                                            $branch_name =  DB::table('branches')->where('id', $student_info->branch_id)->pluck('branch_name')->first();
                                        @endphp
                                            <p > <span >{{$degree}} </span> : <b><span style="margin-left: 10px;">{{$branch_name}}</span></b> - <span style="margin-left: 10px;">{{$student_info->year_of_pass_ug}}</span> <b> <span style="margin-left: 10px;">{{$student_info->university}}</span> </b> </p>
                                        @endif

                                    </td>
                                </tr>
                            </table>

                            <table style="width: 100%; border: none !important; padding: 15px 20px;">
                                @php
                                    $intership=  DB::table('interships')->where('user_id', Auth::user()->id)->get();
                                @endphp
                                 @if($intership->count() > 0)
                                
                                 <tr style="width: 100%;">
                                    <td style="width : 100%; ">
                                       <h4 class="sub-heading" style="margin-top:-10px; margin-bottom:0px; padding-bottom:0px;"> <span class="bg-grey "> Internships </span> </h4>  
                                       <div style="background-color: #5b9bd5; height:50px; width: 38px; position:absolute; margin-left:-60px;"></div>    
                                    </td>                           
                                </tr>                               
                                @foreach ($intership as $item)
                                <tr>
                                    <td style="width : 100%;">
                                           <h4 style="font-size: 1.1rem; margin-top:-3px;"><b>{{$item->int_comp_name}}</b></h4>
                                            <p><b style="color:#5b9bd5;">{{$item->intship_duration}} Months</b> <span style="margin-left: 40px;">{{$item->your_roles}}</span></p>
                                    </td>
                                </tr>           
                                <tr>
                                    <td style="width : 100%;">
                                            <p>{{$item->intern_description}}</p> 
                                    </td>
                                </tr>
                                @endforeach
                                @endif            
                            </table>


                            <table style="width: 100%; border: none !important; padding: 15px 20px;"  >
                                @php
                                    $projects =  DB::table('academic_projects')->where('user_id', Auth::user()->id)->get();
                                //    dd($projects->count());
                                $i=1;
                                @endphp
                                @if($projects->count() > 0)
                                <tr style="width: 100%;">
                                    <td style="width : 100%; ">
                                       <h4 class="sub-heading" style="margin-top:-10px; margin-bottom:0px; padding-bottom:0px;"> <span class="bg-grey "> Projects </span> </h4>  
                                       <div style="background-color: #5b9bd5; height:50px; width: 38px; position:absolute; margin-left:-60px;"></div>    
                                    </td>                           
                                </tr>   
                                <tr>
                                    <td>
                                            @foreach ($projects as $item)                                         
                                            
                                            <tr>
                                                <td >
                                            <span class="">Project Name </span>   :  {{$item->project_name}} 
                                                </td>                   
                                            </tr>  
                                            <tr>                                               
                                                <td >
                                                   <p> <span style="margin-right:25px;">Team Size</span>  :  {{$item->team_size}}</p>
                                                </td>
                                            </tr>   
                                            <tr>                                               
                                                <td  style="vertical-align: top;">
                                                    <p > <span style="margin-right:15px;"> Description </span>  : </p> 
                                                    <p style=" margin-bottom:20px;"> {{$item->project_detail}}</p>
                                                </td>
                                            </tr>        
                                             @endforeach  
                                       
                                    </td>
                                </tr>
                                @endif
                               
                                </table>

                        </td>
                    </tr>
                </table>
            </div>
            <div class="column">
                <table style="vertical-align: top;  padding: 0px 20px;">
                    <tr >
                        <td>
                            <h4 class="sub-heading" style="margin-bottom:0px; padding-bottom:0px;"> <span class="bg-grey "> Personal Attributes </span> </h4>         
                        </td>                            
                    </tr>
                    <tr>
                        <td style="padding-top: 0px; vertical-align: top;">
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
                </table>
              
                 {{-- /*****************************
                    Technical Skills
                ************************************/ --}}
                @if($student_info->tech_skill)
                <table style="padding: 7px 20px;">
                    <tr>
                        <td>
                            <h4 class="sub-heading" style="padding-top: 0px;"> <span class="bg-grey" >Technical Skills </span></h4>
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
                </table>
                @endif

                <table style=" padding: 7px 20px;">
                        {{-- /*****************************
                            Workshops / Seminars / Trainings
                        ************************************/ --}}
           
                    <tr>
                        <td>
                            <h4 class="sub-heading" style="padding-top: 0px;"> <span class="bg-grey" >Workshops / Seminars / Trainings Attended </span></h4>
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
                </table>      

        

                {{-- /*****************************
                        Extra-curricular Activities
                    ************************************/ --}}
                    <table style="padding: 7px 20px;">
                    <tr>
                        <td>
                            <h4 class="sub-heading" style="padding-top: 0px;"> <span class="bg-grey" >Extra-curricular Activities </span></h4>
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
                    </table>

                    <table style="padding: 7px 20px;">
                        {{-- /*****************************
                            Hobbies
                        ************************************/ --}}

                        <tr>
                            <td>
                                <h4 class="sub-heading" style="padding-top: 0px;"> <span class="bg-grey" >Hobbies</span></h4>
                            </td>    
                        </tr>
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
                </table>

                <table style="padding: 7px 20px;">
                    {{-- /*****************************
                        Hobbies
                    ************************************/ --}}

                    <tr>
                        <td>
                            <h4 class="sub-heading" style="padding-top: 0px;"> <span class="bg-grey" >Language Known</span></h4>
                        </td>    
                    </tr>
                    <tr>
                        <td>
                           @php
                               $new_array =  explode(",",$student_info->known_language)
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
            </table>
            </div>
        </div>
    </div>
</body>
</html>