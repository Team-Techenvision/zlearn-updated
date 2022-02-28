<!DOCTYPE html>
<html>
<head>
	<title>Resume</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="shortcut icon" href="{{ asset('/1.png') }}">
	<style>
		body{
            margin: 0px;
            padding: 0px;
        }
       
        @page { margin:0px; padding: 0px; }
        .page-break {
                page-break-after: always;
            }

        .no-page-break{
            page-break-inside: avoid;
        }

            .page-break:last-child {
                page-break-after: avoid;
            }
        .header{
            background-color: #5b9bd5;
            color: #fff;
            padding-bottom: 10px;
            }
            p{
                margin-bottom: 0px;
                margin-top: 3px;
                text-align: left;
                line-height: 1.5!important;
            }
            h4{
                margin-top: 5px;
                margin-bottom: 0px;
               
            }
            .h4{
                font-size: 1rem;
                margin-top: 5px;
                margin-bottom: 0px;
            }
            .p{
                margin-bottom: 0px;
                margin-top: 5px;
                text-align: left;
                line-height: 1.5!important;
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
                background-color: #5b9bd5;
                color: #fff;
                padding-top: 10px;
                padding-bottom:10px;
            }
            .no_table{
                width: 100%;
                border: none;
                padding:15px 0px;
                border-collapse: collapse;
            }
            .no_table td, .no_table th{
                border: none;
                /* text-align: left; */
                padding: 0px;
                margin: 0px;
                vertical-align: top;
                line-height: 1.5rem;
            }
            .no_table th{
                padding-top: 0px;
                padding-bottom:0px;
                border: none;
            }
            .skill_ul li{
                list-style-type:disc;
            }
            .skill_ul{
                padding-left: 15px;
                margin :0px;
                padding-top: 0px;
                padding-bottom: 5px;
            }
	</style>
</head>
<body>

    <div class="header">
        <table style="width: 800px; border: none !important; padding:0px 15px;">
            <tr style="width: 100%;">
                <td style="width: 100%;">
                    <h2 style="margin-left: 30px; margin-top:8px; margin-bottom:8px;">{{$student_info->name}}  {{$student_info->l_name}}
                    </h2>
                </td>
                <td style="width : 100%;">
                   <p style="text-align: right; margin-right:22px;"> <span style="border-right: 1px solid #fff; padding-right:10px; margin-right:10px;"> {{$student_info->phone}}</span> <span>{{$student_info->email}} </span>  </p>   
                   <p style="text-align: right; margin-right:25px;">{{$student_info->address}}</p>          
                </td>            
            </tr>
        </table>
    </div>

    <div class="content">
        <table style="width: 800px;  padding:0px 45px; page-break-after: auto;">
            <tr style="width: 100%;  ">
                <td style="width : 100%; border-bottom:2px solid #e0dfdf; padding-bottom: 4px; padding-top:8px;">
                   <h4>Career Objective</h4>          
                </td>                            
            </tr>
            <tr>
                <td>
                    <p style="white-space:pre-wrap;">{!!$student_info->career_object!!}</p>
                </td>
            </tr>
            

            <tr style="width: 100%;  ">
                <td style="width : 100%;">
                   <h4>Personal Attributes</h4>          
                </td>                            
            </tr>
            <tr>
                <td style="padding-top: 8px;">
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


            <tr style="width: 100%;  ">
                <td style="width : 100%;">
                   <h4>Education</h4>          
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
                    <p > <span >{{$degree}} </span> : <b><span style="margin-left: 10px;">{{$branch_name}}</span></b> - <span style="margin-left: 10px;">{{$student_info->year_of_pass_pg}}</span> <b> <span style="margin-left: 10px;">{{$student_info->university}}</span> </b> </p>
                   
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


        <table style="width: 800px; border: none !important; padding:0px 45px; page-break-after: auto;">
            @php
                $intership=  DB::table('interships')->where('user_id', Auth::user()->id)->get();
            @endphp
             @if($intership->count() > 0)

            <tr style="width: 100%;">
                <td style="width : 100%; border-bottom:2px solid #e0dfdf;">
                   <h4>Internships</h4>          
                </td>                            
            </tr>
            @foreach ($intership as $item)
            <tr>
                <td style="width : 100%;">
                       <h4>{{$item->int_comp_name}} </h4>
                       <p><b style="margin-left: 30px;">{{$item->intship_duration}} Months</b> <span style="margin-left: 30px;">{{$item->your_roles}}</span></p> 
                </td>
            </tr>           
            <tr>
                <td style="width : 100%; border-bottom:1px solid #e0dfdf; padding-bottom: 8px;">
                        <p>{{$item->intern_description}}</p> 
                </td>
            </tr>
            @endforeach
            @endif            
        </table>

        <table style="width:800px; border: none !important; padding:0px 45px; page-break-after: auto;">
            @php
            $projects=  DB::table('academic_projects')->where('user_id', Auth::user()->id)->get();
        @endphp
         @if($projects->count() > 0)
        
        <tr style="width: 100%; padding:0px; margin:0px;">
            <td style="width: 100%; padding:0px; margin:0px;">
                <table style="width:100%; border: none !important; padding:0px;">
                    <tr>
                        <td colspan="2" style="width:800px; border-bottom:2px solid #e0dfdf; padding-bottom: 4px; padding-top:8px; padding-left:-1px;">
                        <h4 >Projects</h4>          
                        </td>    
                    </tr> 
                    @foreach ($projects as $item)    
                    <tr>
                        <td colspan="2" style="width:800px; border-bottom:1px solid #e0dfdf; padding-bottom: 8px;">
                               <p><b>{{$item->project_name}}</b></p> 
                        </td>
                    </tr>    
                        
                    <tr>
                        <td style="max-width: 150px;border-bottom:1px solid #e0dfdf; padding-bottom: 8px;">
                            <p >Description</p>
                        </td>
                        <td style=" border-bottom:1px solid #e0dfdf; padding-bottom: 5px; margin-left:60px; border-left:1px solid #e0dfdf;">
                            <p style="padding-left:15px; margin-top:-3px; margin-bottom:-5px;  word-wrap: break-word; ">{{$item->project_detail}}</p> 
                        </td>
                    </tr>
                    <tr>
                        <td style="max-width: 150px;border-bottom:1px solid #e0dfdf; padding-bottom: 8px;">
                            <p >Team Size</p>
                        </td>
                        <td  style=" border-bottom:1px solid #e0dfdf; padding-bottom: 5px; margin-left:60px; border-left:1px solid #e0dfdf;">
                            <p  style="padding-left:15px; margin-top:-3px; margin-bottom:-8px;  word-wrap: break-word; ">{{$item->team_size}}</p> 
                        </td>
                    </tr>
                    @endforeach  
                 </table>
            </td>
        </tr>
        </table>
        @endif

      
    <table style="width: 800px; border: none !important; padding:0px 45px;">
           
           
            {{-- /*****************************
                    Certification
            ************************************/ --}}


            @php
                $Certification =  DB::table('certifications')->where('user_id', Auth::user()->id)->get();
            //    dd($projects->count());
            $i=1;
            @endphp
            @if($Certification->count() > 0)
            <tr style="width: 100%;  ">
                <td style="width : 100%; border-bottom:2px solid #e0dfdf; padding-bottom: 4px; padding-top:8px;">
                   <h4>Certifications</h4>          
                </td>                            
            </tr>
            @foreach ($Certification as $item)
            <tr>
                <td>
                    <p style="">Certification In <b>{{$item->Certification_name}} </b></p>
                </td>
            </tr>
            @endforeach

            @endif

             {{-- /*****************************
                    Personal Information
            ************************************/ --}}

            
            <tr>
                <td style="width : 100%; border-bottom:2px solid #e0dfdf; padding-bottom: 4px; padding-top:8px;">
                   <h4 style="width: 100%;">Personal Details</h4>          
                </td>                            
            </tr>

            <tr>
                <td>
                    <table style="width: 800px;">
                        <tr>
                            <td style="padding-top: 8px;">
                                Date of Birth
                            </td>
                            <td style="text-align: left; padding-left:20px; padding-top: 8px;">
                                {{-- $mytime = Carbon\Carbon::now()->format('d F Y');  --}}
                                {{ Carbon\Carbon::parse($student_info->dob)->format('d F Y')}}
                            </td>
                        </tr>
                        <tr>
                            <td> Father’s Name</td>
                            <td style="text-align: left; padding-left:20px;">  {{$student_info->father_name}}</td>
                        </tr>
                        <tr>
                            <td>
                                Gender
                            </td>
                            <td style="text-align: left; padding-left:20px;">
                                @if($student_info->gender == '1')
                                Male 
                                @else
                                Female
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>
                              Language Known
                            </td>
                            <td style="text-align: left; padding-left:20px;">{{$student_info->known_language}}</td>
                        </tr>
                        <tr>
                            <td> Address</td>
                            <td  style="text-align: left; padding-left:20px;">{{$student_info->address}}</td>
                        </tr>
                    </table>  
                </td>
            </tr> 

             {{-- /*****************************
                    Declaration 
            ************************************/ --}}
           
            {{-- <tr>
                <td>  <h4 class="sub-heading" style="margin-top: 40px;"> <span class="bg-grey">Declaration</span></h4> </td>
            </tr>
            <tr>
                <td>
                    <p>I hereby declare that the above furnished information is true to the best of my knowledge.</p>
                </td>
            </tr>
            @php
                $mytime = Carbon\Carbon::now()->format('d F Y'); 
            @endphp   
            <tr>
                <td>
                    <p>Date: </p>
                </td>
            </tr>
             
            <tr>
                <td>
                    <p>Place: </p>
                </td>
            </tr>
            <tr>
                <td>
                    <br>
                    <p style="text-align: right; padding-right:30px;">(  Name )</p>
                </td>
            </tr> --}}
               
        </table>
    </div>

    <div style="position: fixed;height: 20px;background-color: 5b9bd5;bottom: 0px;left: 0px;right: 0px;margin-bottom: 0px;">
    </div>
     

</body>
</html>