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
                {{-- <div class="pt-32pt">
                    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
                        <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">
                            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                                <h2 class="mb-0">RESUME</h2>
                                <ol class="breadcrumb p-0 m-0">
                                    <li class="breadcrumb-item"><a href="JavaScript:Void(0);">Student</a></li>
                                    <li class="breadcrumb-item active">
                                        <!-- Basic Information -->
                                        {{$page_title}}
                                    </li>
                                </ol>
                            </div>
                        </div>
                         
                    </div>
                </div> --}}
                  {{-- ==================================== --}}
                  <div class="py-32pt navbar-submenu">
                    <div class="container page__container">
                        <div class="progression-bar progression-bar--active-accent">
                            <a href="JavaScript:Void(0);"
                               class="progression-bar__item progression-bar__item--complete text-white">
                                <span class="progression-bar__item-content">
                                    <i class="material-icons progression-bar__item-icon bg-success">done</i>
                                    <span class="progression-bar__item-text h5 mb-0 text-uppercase text-blue1">BASIC INFO</span>
                                </span>
                            </a>
                            <a href="JavaScript:Void(0);"
                               class="progression-bar__item progression-bar__item--complete">
                                <span class="progression-bar__item-content">
                                    <i class="material-icons progression-bar__item-icon bg-timesheet-color-primary"> </i>
                                    <span class="progression-bar__item-text h5 mb-0 text-uppercase ">ACADEMICS INFO</span>
                                </span>
                            </a>
                            <a href="JavaScript:Void(0);" class="progression-bar__item progression-bar__item--complete">
                             <span class="progression-bar__item-content">
                                 <i class="material-icons progression-bar__item-icon bg-timesheet-color-primary"> </i>
                                 <span class="progression-bar__item-text h5 mb-0 text-uppercase">TRAINING INFO</span>
                             </span>
                         </a>
                            <a href="JavaScript:Void(0);"
                               class="progression-bar__item progression-bar__item progression-bar__item--complete">
                                <span class="progression-bar__item-content">
                                    <i class="material-icons progression-bar__item-icon bg-timesheet-color-primary"></i>
                                    <span class="progression-bar__item-text h5 mb-0 text-uppercase">RESUME</span>
                                </span>
                            </a>
                            
                        </div>
                    </div>
                </div>
                {{-- ====================================== --}}
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
                             <div class="form-row">
                                <div class="col-12 col-md-6 mb-3">
                                    <label class="form-label" for="">First NAME</label>
                                    <input type="text" class="form-control" name="first_name" id="" placeholder="Enter Your First Name" value="{{$user->name}}" readonly="">                                    
                                </div>
                                <div class="col-12 col-md-6 mb-3">
                                    <label class="form-label" for="">Last NAME</label>
                                    <input type="text" class="form-control" id="" placeholder="Enter Your Last Name" name="last_name" value="{{$user->l_name}}" @if($user->l_name == "Null")required="" @else readonly="" @endif>
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label class="form-label col-4 col-md-3 p-2">GENDER:</label>
                                <div class="custom-control custom-radio col-md-9 col-8 p-2">
                                    <span class="mr-3">                                         
                                         <input type="radio" id="" name="gender" value="1" class="" @if($user->gender == "1")checked @endif @if($user->gender == "Null") checked @endif>
                                         <label for="Male" class="pl-1">Male</label>          
                                    </span>
                                    <span class="ml-3">                                        
                                        <input type="radio" id="" name="gender" value="0" @if($user->gender == "0")checked @endif>
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
                              <input type="email" class="form-control col-md-9" id="" name="email" value="{{$user->email}}" placeholder="Enter Your Email Address .." readonly="">
                            </div>
                            <div class="form-group row ">
                                <label class="form-label col-md-3 p-2">CONTACT DETAILS:</label>
                                <input type="text" class="form-control col-md-9" id="" name="phone_no" value="{{$user->phone}}" placeholder="Enter Your MOBILE Number .." required="">
                            </div>
                           <!--  <div class="form-group row ">
                                <label class="form-label col-md-3 p-2">CAMPUS:</label>
                                <input id="" type="text" class="form-control col-md-9" placeholder="Enter Campus Name" name="campus" value="@if($Education){{$Education->compus}}@endif" >
                            </div> -->
                            <div class="form-group row ">
                                <label class="form-label col-md-3 p-2 text-uppercase">College:</label>
                                <select id="" name="collage" class="form-control custom-select col-md-9" @if($Education->collage_id == "Null") required="" @else readonly @endif >
                                    <option value="" selected>Select College</option>
                                    @foreach($College as $list)
                                    <option value="{{$list->id}}" @if($Education) @if($Education->collage_id == $list->id)selected @endif @endif>{{$list->college_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group row ">
                                <label class="form-label col-md-3 col-4 p-2">EDUCATION:</label>
                                <div class="custom-control custom-radio co-md-9 col-8 p-2">
                                    <span class="mr-3">                                         
                                         <input type="radio" id="" name="education" value="UG" class="" @if($Education) @if($Education->education == "UG")checked @endif @endif>
                                         <label for="UG" class="pl-1">UG</label>          
                                    </span>
                                    <span class="ml-3">                                         
                                        <input type="radio" id="" name="education" value="PG" class="" @if($Education) @if($Education->education == "PG")checked @endif @endif>             
                                         <label for="PG" class="pl-1">PG</label>     
                                    </span>
                                </div>                                
                            </div>
                             <div class="form-group row ">
                                <label class="form-label col-md-3 p-2 text-uppercase">course:</label>
                                <select id="" name="degree" class="form-control custom-select col-md-9" required="">
                                    <option value="" selected>Select Course</option>
                                    @foreach($course as $list)
                                    <option value="{{$list->id}}" @if($Education) @if($Education->degree == $list->id)selected @endif @endif>{{$list->course_name}}</option>
                                    @endforeach                                      
                                </select>                               
                            </div>
                            <div class="form-group row ">
                                <label class="form-label col-md-3 p-2 text-uppercase">branch:</label>
                                <select id="" name="branch" class="form-control custom-select col-md-9" required="">
                                    <option value="" selected>Select Branch</option>
                                    @foreach($branch as $list)
                                    <option value="{{$list->id}}" @if($Education) @if($Education->branch_id == $list->id)selected @endif @endif>{{$list->branch_name}}</option>
                                    @endforeach                                      
                                </select>                               
                            </div>

                            <div class="form-group row">
                                <label class="form-label col-md-3 p-2">SEMESTER:</label>
                                <select id="" name="semester" class="form-control custom-select col-md-9" required="">
                                    <option value="" selected>Select Semester </option>
                                    @foreach($Semister as $list)
                                    <option value="{{$list->id}}" @if($UserDetails) @if($UserDetails->semister == $list->id)selected @endif @endif>{{$list->semister_name}}</option>
                                    @endforeach                                       
                                </select>                               
                            </div>
                            <div class="form-group row">
                                <label class="form-label col-md-3 p-2">USN/ROLL NUMBER:</label>
                                <input id="" type="text" class="form-control col-md-9" placeholder="Enter USN / Roll Number" name="roll_no" value="@if($Education){{$Education->roll_no}}@endif" required="">
                            </div>                             
                            <div class="form-group row ">
                                <label class="form-label col-md-3 p-2">MOTHER’S NAME:</label>
                                <input id="" type="text" class="form-control col-md-9" placeholder="Enter MOTHER’S NAME" value="@if($UserDetails){{$UserDetails->mother_name}}@endif" name="mother_name" required="">
                            </div>
                            <div class="form-group row ">
                                <label class="form-label col-md-3 p-2">MOTHER’S OCCUPATION:</label>
                                <input id="" type="text" class="form-control col-md-9" name="mother_occupation" placeholder="Enter Occupation" value="@if($UserDetails){{$UserDetails->mother_occupation}}@endif" required="">
                            </div>
                            <div class="form-group row ">
                                <label class="form-label col-md-3 p-2">FATHER’S NAME:</label>
                                <input id="" type="text" class="form-control col-md-9" name="father_name" placeholder="Enter FATHER’S NAME" value="@if($UserDetails){{$UserDetails->father_name}}@endif" required="">
                            </div>
                            <div class="form-group row ">
                                <label class="form-label col-md-3 p-2">FATHER’S OCCUPATION:</label>
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
                                <label class="form-label col-md-3 p-2">UPLOAD KYC-AADHAR OR PAN:</label>
                                <div class="custom-file col-md-9">
                                    <input type="file" id="file" class="form-control" name="upload_kyc_doc" >
                                    
                                </div>                                
                            </div>

                            @if(isset($UserDetails->upload_kyc))
                            @if($UserDetails->upload_kyc)
                            <div class="form-group row ">
                                <label class="form-label col-md-3 p-2">Preview</label>
                                <div class=" col-md-9">                                  
                                   <img class="document_img" src="{{asset($UserDetails->upload_kyc)}}" alt="" width="80" height="80">
                                </div>                                
                            </div>
                            @endif
                            @endif
                            @php
                                
                                // print_r($blood_group);  
                            @endphp
                            <div class="form-group row">
                                <label class="form-label col-md-3 p-2">BLOOD GROUP:</label>
                                {{-- <input id="" type="text" class="form-control col-md-9" placeholder="Enter Blood Group" name="blood_group" value="@if($UserDetails){{$UserDetails->blood_group}}@endif" required=""> --}}
                                <select id="" name="blood_group" class="form-control custom-select col-md-9" >
                                <option value="" selected>Select Blood Group</option>
                                @foreach($blood_group as $list)
                                    <option value="{{$list->blood_group_name}}" @if($UserDetails) @if($UserDetails->blood_group == $list->blood_group_name)selected @endif @endif>{{$list->blood_group_name}}</option>
                                    @endforeach 
                                </select> 
                            </div>
                            
                            <div class="form-group row ">
                                <label class="form-label col-md-3 p-2">EMERGENCY CONTACT NO. :</label>
                                <input id="" type="text" class="form-control col-md-9" name="emergency_contact" placeholder="Enter Emergency Contact No. Mother Or Father Mobile No." value="@if($UserDetails){{$UserDetails->emergency_contact}}@endif" required="">
                            </div>

                            <div class="form-group row">
                                <div class="col-10 m-auto text-right pt-3">
                                    {{-- <button type="reset" name="reset" class="btn btn-secondary mr-2">Reset</button> --}}
                                    <a href="{{url('studentdashboard')}}" class="btn btn-secondary mr-2" >Back</a>
                                    <button name="submit" class="btn btn-primary">Save</button>
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
        {{-- <script src = "https://code.jquery.com/jquery-1.10.2.js"></script> --}}
        <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
         @toastr_js
        @toastr_render
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