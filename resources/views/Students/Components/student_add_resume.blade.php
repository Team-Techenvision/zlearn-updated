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
                                        <!-- Basic Information -->
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
                    <div class="page-section row">
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
                         <form class="form-group col-md-10 m-auto" action="{{url('Basic-Info')}}" method="POST" enctype="multipart/form-data">
                        @csrf 
                            <!-- <div class="form-group row ">
                                <label class="form-label col-md-3 p-2">NAME:</label>
                                <input type="text" class="form-control col-md-9"
                                placeholder="Enter Your Name">
                            </div> -->
                             <div class="form-row">
                                <div class="col-12 col-md-6 mb-3">
                                    <label class="form-label" for="">First NAME</label>
                                    <input type="text" class="form-control" name="first_name" id="" placeholder="Enter Your First Name" value="{{$user->name}}" required="">                                    
                                </div>
                                <div class="col-12 col-md-6 mb-3">
                                    <label class="form-label" for="">Last NAME</label>
                                    <input type="text" class="form-control" id="" placeholder="Enter Your Last Name" name="last_name" value="{{$user->l_name}}" required="">
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label class="form-label col-4 col-md-3 p-2">GENDER:</label>
                                <div class="custom-control custom-radio col-md-9 col-8 p-2">
                                    <span class="mr-3">                                         
                                         <input type="radio" id="" name="gender" value="1" class="" checked>
                                         <label for="Male" class="pl-1">Male</label>          
                                    </span>
                                    <span class="ml-3">                                        
                                        <input type="radio" id="" name="gender" value="0">
                                         <label for="Female" class="pl-1">Female</label>     
                                    </span>
                                </div>                                
                            </div>
                            <div class="form-group row ">
                                <label class="form-label col-md-3 p-2">DATE OF BIRTH:</label>
                                <input id="bod_date" type="text" class="form-control col-md-9" name="bod_date" value="@if($UserDetails){{$UserDetails->dob}}@endif" required="">
                            </div>
                            <div class="form-group row ">
                                <label class="form-label col-md-3 p-2">YOUR EMAIL:</label>
                              <input type="email" class="form-control col-md-9" id="" name="email" value="{{$user->email}}" placeholder="Enter Your Email Address .." required="">
                            </div>
                            <div class="form-group row ">
                                <label class="form-label col-md-3 p-2">CONTACT DETAILS:</label>
                                <input type="text" class="form-control col-md-9" id="" name="phone_no" value="{{$user->phone}}" placeholder="Enter Your MOBILE Number .." required="">
                            </div>
                            <div class="form-group row ">
                                <label class="form-label col-md-3 p-2">CAMPUS:</label>
                                <input id="" type="text" class="form-control col-md-9" placeholder="Enter Campus Name" name="campus" value="@if($Education){{$Education->compus}}@endif" required="">
                            </div>
                            <div class="form-group row ">
                                <label class="form-label col-md-3 p-2 text-uppercase">Collage:</label>
                                <select id="" name="collage" class="form-control custom-select col-md-9" required="">
                                    <option value="" selected>Select Collage</option>
                                    @foreach($College as $list)
                                    <option value="{{$list->id}}">{{$list->college_name}}</option>
                                    @endforeach
                                    
                                </select>
                            </div>
                            <div class="form-group row ">
                                <label class="form-label col-md-3 col-4 p-2">EDUCATION:</label>
                                <div class="custom-control custom-radio co-md-9 col-8 p-2">
                                    <span class="mr-3">                                         
                                         <input type="radio" id="" name="education" value="UG" class="" checked>
                                         <label for="UG" class="pl-1">UG</label>          
                                    </span>
                                    <span class="ml-3">                                         
                                        <input type="radio" id="" name="education" value="PG" class="" >             
                                         <label for="PG" class="pl-1">PG</label>     
                                    </span>
                                </div>                                
                            </div>
                             <div class="form-group row ">
                                <label class="form-label col-md-3 p-2 text-uppercase">course:</label>
                                <select id="" name="degree" class="form-control custom-select col-md-9" required="">
                                    <option value="" selected>Select Course</option>
                                    @foreach($course as $list)
                                    <option value="{{$list->id}}">{{$list->course_name}}</option>
                                    @endforeach                                      
                                </select>                               
                            </div>
                            <div class="form-group row ">
                                <label class="form-label col-md-3 p-2 text-uppercase">branch:</label>
                                <select id="" name="branch" class="form-control custom-select col-md-9" required="">
                                    <option value="" selected>Select Course</option>
                                    @foreach($branch as $list)
                                    <option value="{{$list->id}}">{{$list->branch_name}}</option>
                                    @endforeach                                      
                                </select>                               
                            </div>

                            <div class="form-group row">
                                <label class="form-label col-md-3 p-2">SEMESTER:</label>
                                <select id="" name="semester" class="form-control custom-select col-md-9" required="">
                                    <option value="" selected>Select Semester </option>
                                    @foreach($Semister as $list)
                                    <option value="{{$list->id}}">{{$list->semister_name}}</option>
                                    @endforeach                                       
                                </select>                               
                            </div>
                            <div class="form-group row">
                                <label class="form-label col-md-3 p-2">USN/ROLL NUMBER:</label>
                                <input id="" type="text" class="form-control col-md-9" placeholder="Enter USN / Roll Number" name="roll_no" value="@if($Education){{$Education->roll_no}}@endif" required="">
                            </div>
                            <!-- <div class="form-row">
                                <div class="col-12 col-md-6 mb-3">
                                    <label class="form-label" for="">MOTHER’S NAME</label>
                                    <input type="text" class="form-control" name="mother_name" id="" placeholder="Enter MOTHER’S NAME" required="">                                    
                                </div>
                                <div class="col-12 col-md-6 mb-3">
                                    <label class="form-label" for="">FATHER’S NAME</label>
                                    <input type="text" class="form-control" id="" placeholder="Enter FATHER’S NAME" name="father_name" required="">
                                </div>
                            </div> -->
                            <div class="form-group row ">
                                <label class="form-label col-md-3 p-2">MOTHER’S NAME:</label>
                                <input id="" type="text" class="form-control col-md-9" placeholder="Enter MOTHER’S NAME" value="@if($UserDetails){{$UserDetails->mother_name}}@endif" name="mother_name" required="">
                            </div>
                            <div class="form-group row ">
                                <label class="form-label col-md-3 p-2">FATHER’S NAME:</label>
                                <input id="" type="text" class="form-control col-md-9" name="father_name" placeholder="Enter FATHER’S NAME" value="@if($UserDetails){{$UserDetails->father_name}}@endif" required="">
                            </div>
                            <div class="form-group row ">
                                <label class="form-label col-md-3 p-2">OCCUPATION:</label>
                                <input id="" type="text" class="form-control col-md-9" name="occupation" placeholder="Enter Occupation" value="@if($UserDetails){{$UserDetails->occupation}}@endif" required="">
                            </div>
                            <div class="form-group row ">
                                <label class="form-label col-md-3 p-2">PERMANENT ADDRESS:</label>
                                <textarea class="form-control col-md-9" name="permanent_address" placeholder="Enter Permanent Address" required="">@if($UserDetails){{$UserDetails->address}}@endif</textarea>
                            </div>
                            <div class="form-group row ">
                                <label class="form-label col-md-3 p-2">CURRENT ADDRESS:</label>
                                <textarea class="form-control col-md-9" name="current_address" placeholder="Enter Current Address" required="">@if($Education){{$Education->current_address}}@endif</textarea>
                            </div>
                            <div class="form-group row ">
                                <label class="form-label col-md-3 p-2">KYC-AADHAR AND PAN:</label>
                                 <input id="" type="text" class="form-control col-md-9"  placeholder="Enter AADHAR / PAN" name="kyc_doc" value="@if($UserDetails){{$UserDetails->kyc_name}}@endif" required="">
                            </div>
                            <div class="form-group row ">
                                <label class="form-label col-md-3 p-2">UPLOAD KYC:</label>
                                <div class="custom-file col-md-9">
                                    <input type="file" id="file" class="custom-file-input" name="upload_kyc_doc">
                                    <label for="file" class="custom-file-label">Choose file</label>
                                </div>                                
                            </div>
                            <div class="form-group row">
                                <label class="form-label col-md-3 p-2">BLOOD GROUP:</label>
                                <input id="" type="text" class="form-control col-md-9" placeholder="Enter Blood Group" name="blood_group" value="@if($UserDetails){{$UserDetails->blood_group}}@endif" required="">
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
               <!--  @include('Students.Common.student_footertext') -->
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
                $('#bod_date').datepicker({
                    maxDate: 0,
                    changeMonth: true,
                    changeYear: true,
                    dateFormat: 'yy-mm-dd'
                });
            });
        </script>
        
    </body>
</html>