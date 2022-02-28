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
                        <form class="form-group col-md-10 m-auto" action="{{url('Academics-Info')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <!-- <div class="form-group row ">
                                <label class="form-label col-md-3 p-2">NAME:</label>
                                <input type="text" class="form-control col-md-9"
                                placeholder="Enter Your Name">
                            </div> -->
                            <div class="form-row">
                                <div class="col-12 col-md-6 mb-3">
                                    <label class="form-label" for="">SSLC PERCENTAGE(%)</label>
                                    <input type="text" class="form-control" name="sslc_per" id="" value="@if($Academics){{$Academics->sslc_perce}}@endif" placeholder="Enter Your SSLC Percentage" required="">
                                </div>
                                <div class="col-12 col-md-6 mb-3">
                                    <label class="form-label" for="">YEAR OF PASSING</label>
                                    <input type="text" class="form-control" id="" placeholder="Enter Year Of Passing" value="@if($Academics){{$Academics->sslc_year}}@endif" name="year_sslc" required="">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-12 col-md-6 mb-3">
                                    <label class="form-label" for="">PUC / 12th PERCENTAGE(%)</label>
                                    <input type="text" class="form-control" name="puc_per" id="" value="@if($Academics){{$Academics->puc_perce}}@endif" placeholder="Enter PUC / 12th Percentage" required="">
                                </div>
                                <div class="col-12 col-md-6 mb-3">
                                    <label class="form-label" for="">YEAR OF PASSING</label>
                                    <input type="text" class="form-control" id="" placeholder="Enter Year Of Passing" value="@if($Academics){{$Academics->puc_year}}@endif" name="year_puc" required="">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-12 col-md-6 mb-3">
                                    <label class="form-label" for="">DIPLOMA PERCENTAGE(%)</label>
                                    <input type="text" class="form-control" name="diploma_per" id="" value="@if($Academics){{$Academics->diploma_perce}}@endif" placeholder="Enter Diploma Percentage">
                                </div>
                                <div class="col-12 col-md-6 mb-3">
                                    <label class="form-label" for="">YEAR OF PASSING</label>
                                    <input type="text" class="form-control" id="" placeholder="EnterYear Of Passing" value="@if($Academics){{$Academics->diploma_year}}@endif" name="year_diploma" >
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-12 col-md-6 mb-3">
                                    <label class="form-label" for="">GRADUATION</label>
                                   <select id="" name="ddl_graduation" class="form-control custom-select">
                                    <option value="" selected>Select Semester </option>
                                    @foreach($Semister as $list)
                                    <option value="{{$list->id}}">{{$list->semister_name}}</option>
                                    @endforeach                                     
                                </select>
                                </div>
                                <div class="col-12 col-md-6 mb-3">
                                    <label class="form-label" for="">GRADUATION</label>
                                    <input type="text" class="form-control" id="" placeholder="Enter Other Graduation" value="@if($Academics){{$Academics->other_graduation}}@endif" name="write_graduation">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-12 col-md-6 mb-3">
                                    <label class="form-label" for="">PG</label>
                                   <select id="" name="ddl_pg" class="form-control custom-select">
                                    <option value="" selected>Select Semester </option>
                                    <option value="1">1st Semester </option>
                                    <option value="2">2nd Semester </option>
                                    <option value="3">3rd Semester </option>
                                    <option value="4">4th Semester </option>
                                </select>
                                </div>
                                <div class="col-12 col-md-6 mb-3">
                                    <label class="form-label" for="">PG (Other)</label>
                                    <input type="text" class="form-control" id="" placeholder="Enter Other PG" value="@if($Academics){{$Academics->other_pg}}@endif" name="write_pg">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-12 col-md-6 mb-3">
                                    <label class="form-label" for="">TOTAL CGPA (AVG TOTAL)</label>
                                    <input type="text" class="form-control" name="avg_cgpa" id="" value="@if($Academics){{$Academics->avg_cgpa}}@endif" placeholder="Enter Total CGPA " >
                                </div>
                                <div class="col-12 col-md-6 mb-3">
                                    <label class="form-label" for="">YEAR OF GRADUATED <small>(FUTURE DATE)</small></label>
                                    <input type="text" class="form-control" id="year_graduated" placeholder="Enter Year Of Graduated" value="@if($Academics){{$Academics->year_graduation}}@endif" name="year_graduated">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-12 col-md-6 mb-3">
                                    <label class="form-label" for="">CURRENT BACK LOGS</label>
                                    <input type="text" class="form-control" name="current_backLog" id="" value="@if($Academics){{$Academics->curr_backlog}}@endif" placeholder="Enter Current Back Logs" >
                                </div>
                                <div class="col-12 col-md-6 mb-3">
                                    <label class="form-label" for="">NUMBER OF YEAR BACKS <small>(IF ANY)</small></label>
                                    <input type="text" class="form-control" id="" placeholder="Enter Number of Year Backs" value="@if($Academics){{$Academics->num_year_backlog}}@endif" name="no_yer_backs" >
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-12 col-md-6 mb-3">
                                    <label class="form-label" for="">ANY GAPS IN THE ACADEMICS</label>
                                    <div class="custom-control custom-radio col-md-9 col-8 p-2">
                                        <span class="mr-3">
                                            <input type="radio" id="" name="acd_gaps" value="1" class="gaps">
                                            <label for="Yes" class="pl-1">Yes</label>
                                        </span>
                                        <span class="ml-3">
                                            <input type="radio" class="gaps" id="" name="acd_gaps" value="0" checked>
                                            <label for="No" class="pl-1">No</label>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 mb-3">
                                    <label class="form-label" for="">Explain </label>
                                    <textarea class="form-control gap_explain" name="explain_gaps" placeholder="If Any Gaps In The Academics Then Explain" readonly="">@if($Academics){{$Academics->gap_explan}}@endif</textarea>
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
        <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
        <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

        <script>
            $(document).ready(function()
            {
                $('#year_graduated').datepicker({
                    minDate: 1,
                    dateFormat: 'yy-mm-dd'
                });

              $('.gaps').click(function()
              {
                if($(this).val() == 1)
                {
                   $('.gap_explain').removeAttr('readonly');
                   $('.gap_explain').attr('required',true); 
                }
                else
                {                    
                    $('.gap_explain').removeAttr('required');
                    $('.gap_explain').attr('readonly',true);
                }
              });  
            });
        </script>
    </body>
</html>