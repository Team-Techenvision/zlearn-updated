<!DOCTYPE html>
<html lang="en"
    dir="ltr">
    <head>
        @include('Students.Common.student_head')
    </head>
    <body class="layout-app ">
        <div class="preloader">
            <div class="sk-chase">
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
            </div>
            
            <!-- More spinner examples at https://github.com/tobiasahlin/SpinKit/blob/master/examples.html -->
        </div>
        
        <!-- Drawer Layout -->
        
        <div class="mdk-drawer-layout js-mdk-drawer-layout"
            data-push
            data-responsive-width="992px">
            <div class="mdk-drawer-layout__content page-content">
                
                <!-- Header -->
                
                <!-- Navbar -->
                
                @include('Students.Common.student_navbar')
                
                <!-- // END Navbar -->
                
                <!-- // END Header -->
                <div class="pt-32pt">
                    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
                        <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">
                            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                                <h2 class="mb-0">Dashboard</h2>
                                <ol class="breadcrumb p-0 m-0">
                                    <li class="breadcrumb-item"><a href="index.html">Student</a></li>
                                    <li class="breadcrumb-item active">
                                        <!-- ACADEMIC Details -->
                                        {{$page_title}}
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <!-- <div class="row"
                            role="tablist">
                            <div class="col-auto">
                                <a href="student-my-courses.html"
                                class="btn btn-outline-secondary">My Courses</a>
                            </div>
                        </div> -->
                    </div>
                </div>
                <!-- BEFORE Page Content -->
                <!-- // END BEFORE Page Content -->
                <!-- Page Content -->
                <div class="container page__container">
                    <div class="page-section">
                        <!-- =================================-->
                        <div class="any_message row col-12">
                            @if ($errors->any())
                            <div class="alert alert-danger col-12">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            @if(session()->has('alert-danger'))
                            <div class="alert alert-danger col-12">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                                {{ session()->get('alert-danger') }}
                            </div>
                            @endif
                            @if(session('success'))
                            <div class="alert alert-success col-12">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                                {{ session('success') }}
                            </div>
                            @endif
                        </div>
                
                        <!-- =================================== -->
                        <form class="form-group col-md-10 m-auto" action="{{url('Training-Info')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-row">                                
                                <div class="col-12 col-md-12 mb-3">
                                    <label class="form-label text-uppercase" for="">TECHNICAL SKILLS:</label>                                     
                                     <textarea class="form-control" name="tech_skill" placeholder="Enter Technical Skill"  required="">@if($Technical_skill){{$Technical_skill->tech_skill}}@endif</textarea>
                                </div>
                            </div>
                            <!-- <div class="form-group row ">
                                <label class="form-label col-md-3 p-2">CERTIFICATIONS:</label>
                                <input type="text" class="form-control col-md-9" name="sslc_per" id="" placeholder="Enter Any Certifications" >
                            </div> -->
                            <div id="certificate_section" class="border p-2">
                              
                                <div class="form-row">
                                    <div class="col-12 col-md-12 mb-3">
                                        <label class="form-label text-uppercase" for="">CERTIFICATIONS:</label> 
                                        <a href="javascript:void(0);" class="btn btn-success float-right h3" id="certificate" title="Add More">+</a>                                     
                                    </div>
                                </div>
                                @if($Certification)
                                    @foreach ($Certification as $item)
                                    <div class="col-12  form-group p-1 h6">
                                        CERTIFICATIONS :- {{$item->Certification_name}}
                                        <a href="{{url('Delete_Certificate')}}/{{$item->id}}" class="btn btn-accent float-right" title="Delete"><i class="material-icons">delete</i></a>
                                    </div>
                                    <div class="col-12  form-group p-1 h6">
                                        UPLOAD CERTIFICATIONS :- @if($item->upload_certificat)Yes @else No @endif
                                    </div> 
                                    <hr style="w-50 m-auto text-dark">
                                    @endforeach                                    
                                @else
                                    <div class="form-row">
                                        <div class="col-12 col-md-6 mb-3">
                                            <label class="form-label" for="">CERTIFICATIONS</label>
                                            <input type="text" class="form-control" name="certificate[]" id="" placeholder="Enter Any Certifications" required="">
                                        </div>
                                        <div class="col-12 col-md-6 mb-3">
                                            <label class="form-label" for="">UPLOAD CERTIFICATIONS</label>
                                            <input type="file" class="form-control" id="" placeholder="Enter Year Of Passing" name="upload_certificat[]" required="">
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <div id="project_details" class="border p-2">
                                <div class="form-row">
                                    <div class="col-12 col-md-12 mb-3">
                                        <label class="form-label" for="">ACADEMIC PROJECTS:</label>
                                        <a href="javascript:void(0);" class="btn btn-success float-right h3" title="Add More" id="add_project" >+</a>
                                    </div>
                                </div>
                                @if($Academic_project)
                                    <div class="form-row">
                                        @foreach ($Academic_project as $item)
                                            <div class="col-md-12  form-group p-1 h6">
                                                <a href="{{url('Delete-Project')}}/{{$item->id}}" class="btn btn-accent float-right" title="Delete" id="delete_proj"><i class="material-icons">delete</i></a>
                                             </div>   
                                            <div class="col-md-6  form-group p-1 h6">
                                                Project Name :- {{$item->project_name}}
                                                
                                            </div>
                                            <div class="col-md-6  form-group p-1 h6">
                                                Team/single :- {{$item->team_size}}
                                            </div>
                                            <div class="col-12  form-group p-1 h6">
                                                Project details :- {{$item->project_detail}}
                                            </div>
                                             <hr style="w-50 m-auto text-dark"> 
                                        @endforeach
                                    </div>                                        
                                @else 
                                    <div class="form-row">   
                                        <div class="col-12 col-md-6 mb-3">
                                            <label class="form-label text-uppercase" for="">Project Name:</label>
                                            <input type="text" class="form-control" id="" placeholder="Enter Project Name" name="project_name[]" required="">
                                        </div>
                                        <div class="col-12 col-md-6 mb-3">
                                            <label class="form-label text-uppercase" for="">Team/single:</label>
                                            <input type="number" class="form-control" min="1" id="" value="1" placeholder="Enter Project Team Size" name="team_size[]" >

                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-12 col-md-12 mb-3">
                                            <label class="form-label text-uppercase" for="">Project details:</label>                                     
                                            <textarea class="form-control" name="project_detail[]" placeholder="Enter Project Details" required=""></textarea>
                                        </div>                                
                                    </div>
                                @endif    
                            </div>
                            <div id="internship_div" class="border p-2"> 
                                <div class="form-row">
                                    <div class="col-12 col-md-12 mb-3">
                                        <label class="form-label text-uppercase" for="">INTERNSHIPS:</label> 
                                        <a href="javascript:void(0);" class="btn btn-success float-right h3" id="enter_ship" title="Add More">+</a>                                     
                                    </div>
                                </div>
                                @if($Interships)
                                    <div class="form-row">
                                        @foreach ($Interships as $item)
                                        <div class="col-md-12  form-group p-1 h6">
                                                <a href="{{url('Delete-Intship')}}/{{$item->id}}" class="btn btn-accent float-right delete_intership" title="Delete" ><i class="material-icons">delete</i></a>
                                             </div>
                                            <div class="col-md-6  form-group p-1 h6">
                                                OMPANY Name :- {{$item->int_comp_name}}                                                
                                            </div>
                                            <div class="col-md-6  form-group p-1 h6">
                                                DURATION <small>(No Of Month)</small> :- {{$item->intship_duration}}
                                            </div>
                                            <div class="col-md-12  form-group p-1 h6">
                                                ROLES & RESPONSIBILITIES :- {{$item->your_roles}}
                                            </div> 
                                        @endforeach 
                                    </div>                                       
                                @else
                                  <div class="form-row">
                                    <div class="col-12 col-md-6 mb-3">
                                        <label class="form-label text-uppercase" for="">COMPANY Name:</label>
                                        <input type="text" class="form-control" name="int_comp_name[]" id="" placeholder="Enter Company Name" >
                                    </div>
                                    <div class="col-12 col-md-6 mb-3">
                                        <label class="form-label" for="">DURATION <small>(No Of Month)</small>:</label>
                                        <input type="number" class="form-control" min="1" id="" placeholder="Enter Year Of Graduated" value="1" name="intship_duration[]">
                                    </div>
                                </div>
                               
                                <div class="form-row">
                                    <div class="col-12 col-md-6 mb-3">
                                        <label class="form-label text-uppercase" for="">ROLES & RESPONSIBILITIES:</label>
                                        <input type="text" class="form-control" name="your_roles[]" id="" placeholder="Enter Your Roles" >
                                    </div>                                
                                </div>
                                @endif
                            </div>    

                            <div class="form-row">
                                 <div class="col-12 col-md-6 mb-3">
                                    <label class="form-label" for="">LINKEDIN PROFILE:</label>
                                    <input type="text" class="form-control" id="" placeholder="Enter Linkedin Profile Link" value="@if($Technical_skill){{$Technical_skill->linkedin_link}}@endif" name="linkedin_link">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-12 col-md-6 mb-3">
                                    <label class="form-label text-uppercase" for="">ACHIEVEMENTS:</label>
                                    <input type="text" class="form-control" id="" placeholder="Enter Achievements If Any" value="@if($Technical_skill){{$Technical_skill->achievement}}@endif" name="achievement">
                                </div>
                                <div class="col-12 col-md-6 mb-3">
                                    <label class="form-label text-uppercase" for="">HOBBIES:</label>
                                    <input type="text" class="form-control" id="" placeholder="Enter Your Hobbies" value="@if($Technical_skill){{$Technical_skill->hobbies}}@endif" name="hobbies">
                                </div>
                            </div>

                            <div class="form-row">                                 
                                <div class="col-12 col-md-12 mb-3">
                                    <label class="form-label" for="">CAREER OBJECTIVE:</label>
                                    <textarea class="form-control" id="" placeholder="Enter Career Objective" name="career_object">@if($Technical_skill){{$Technical_skill->career_object}}@endif</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-10 m-auto text-right pt-3">
                                    <button type="reset" name="reset" class="btn btn-secondary mr-2">Reset</button>
                                    <button name="submit" class="btn btn-primary">Next</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


                <!-- ======================================== -->
                   

                <!-- // END Page Content -->
                <!-- Footer -->
                <!-- @include('Students.Common.student_footertext') -->
                <!-- // END Footer -->
            </div>
            <!-- // END drawer-layout__content -->
            <!-- Drawer left sidebar start -->
            @include('Students.Common.student_sidebar')
            <!-- // END Drawer sidebar ends -->
        </div>
        <!-- // END Drawer Layout -->
        @include('Students.Common.student_footer')
        
         <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
         rel = "stylesheet">
        <!-- <script src = "https://code.jquery.com/jquery-1.10.2.js"></script> -->
        <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

        <script>
            $(document).ready(function()
            {
                $('#year_graduated').datepicker({
                    minDate: 1,
                    dateFormat: 'yy-mm-dd'
                });

                $('#add_project').click(function()
                {
                     $("#project_details").append('<div class="form-row proj_section border pt-2 pb-2"><div class="col-12"><a href="javascript:void(0);" id="remCF" class="remCF btn btn-danger float-right">Remove</a></div><div class="col-12 col-md-6 mb-3"><label class="form-label text-uppercase" for="">Project Name:</label><input type="text" class="form-control" id="" placeholder="Enter Project Name" name="project_name[]" required=""></div><div class="col-12 col-md-6 mb-3"><label class="form-label text-uppercase" for="">Team/single:</label><input type="number" class="form-control" min="1" id="" value="1" placeholder="Enter Project Team Size" name="team_size[]" required=""></div><div class="form-row col-12"><div class="col-12 col-md-12 mb-3"><label class="form-label text-uppercase" for="">Project details:</label><textarea class="form-control col-12" name="project_detail[]" placeholder="Enter Project Details" required=""></textarea></div> </div></div>');
                });
 
                $('#project_details').on('click','.remCF',function() 
                {
                    //alert("!!");
                    $(this).parent().parent().remove();
                });

                $('#enter_ship').click(function()
                {
                    $("#internship_div").append('<div class="form-row enter_ship col-12 border pt-2 pb-2"><div class="col-12"><a href="javascript:void(0);" id="remCF1" class="remCF1 btn btn-danger float-right">Remove</a></div><div class="col-12 col-md-6 mb-3"><label class="form-label text-uppercase" for="">COMPANY Name</label><input type="text" class="form-control" name="int_comp_name" id="" placeholder="Enter Company Name" ></div><div class="col-12 col-md-6 mb-3"><label class="form-label" for="">DURATION <small>(No Of Month)</small>:</label><input type="number" class="form-control" min="1" id="" value="1" placeholder="Enter Year Of Graduated" name="intship_duration"></div> <div class="form-row col-12"><div class="col-12 col-md-6 mb-3"><label class="form-label text-uppercase" for="">ROLES & RESPONSIBILITIES:</label><input type="text" class="form-control col-12" name="proj_roles" id="" placeholder="Enter Your Roles" ></div></div></div> ');
                });

                $('#internship_div').on('click','.remCF1',function() 
                {
                    //alert("!!");
                    $(this).parent().parent().remove();
                });


                $('#certificate').click(function()
                {
                    $("#certificate_section").append('<div class="form-row border col-12 pt-2 pb-2"><div class="col-12"><a href="javascript:void(0);" id="remCF1" class="remCF2 btn btn-danger float-right">Remove</a></div><div class="col-12 col-md-6 mb-3"> <label class="form-label" for="">CERTIFICATIONS</label><input type="text" class="form-control" name="certificate[]" id="" placeholder="Enter Any Certifications" required=""></div><div class="col-12 col-md-6 mb-3"><label class="form-label" for="">UPLOAD CERTIFICATIONS</label><input type="file" class="form-control" id="" placeholder="Enter Year Of Passing" name="upload_certificat" required=""></div></div>');
                });

                $('#certificate_section').on('click','.remCF2',function() 
                {
                    //alert("!!");
                    $(this).parent().parent().remove();
                });
                              
            });
        </script>
        <script>
            $(document).ready(function()
            {
                //  $('.delete_intership').click(function()
                // {
                //     ///alert($(this).attr('data'));
                //     let id = $(this).attr('data');
                //     if(id)
                //     {
                //          $.ajaxSetup({
                //                 headers: {
                //                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                //                 }
                //             });
                //      $.ajax({
                //             url: "{{ url('Delete-Intship')}}",
                //             type: "post",
                //             data: {Int_id : id},
                //             success: function(data)
                //             {
                //                // $("#employees").html(data);
                //                alert(data);
                //             }
                //         });
                //     }
                // });
            });
        </script>
    </body>
</html>