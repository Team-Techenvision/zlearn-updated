<!DOCTYPE html>
<html lang="en"
    dir="ltr">
    <head>
        @include('Students.Common.student_head')
        <style>
            .text-danger{
                margin-left: -15px;
            }
        </style>
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
                                    <span class="progression-bar__item-text h5 mb-0 text-uppercase text-blue1 ml-30">BASIC INFO</span>
                                </span>
                            </a>
                            <a href="JavaScript:Void(0);"
                               class="progression-bar__item progression-bar__item--complete">
                                <span class="progression-bar__item-content">
                                    <i class="material-icons progression-bar__item-icon bg-timesheet-color-primary"> </i>
                                    <span class="progression-bar__item-text h5 mb-0 text-uppercase ml-60">ACADEMICS INFO</span>
                                </span>
                            </a>
                            <a href="JavaScript:Void(0);" class="progression-bar__item progression-bar__item--complete">
                             <span class="progression-bar__item-content">
                                 <i class="material-icons progression-bar__item-icon bg-timesheet-color-primary"> </i>
                                 <span class="progression-bar__item-text h5 mb-0 text-uppercase ml-30">SKILLS INFO</span>
                             </span>
                         </a>
                            <a href="JavaScript:Void(0);"
                               class="progression-bar__item progression-bar__item progression-bar__item--complete last-item">
                                <span class="progression-bar__item-content">
                                    <i class="material-icons progression-bar__item-icon bg-timesheet-color-primary"></i>
                                    <span class="progression-bar__item-text h5 mb-0 text-uppercase ml-20">RESUME</span>
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
                    <form class="form-group col-md-12 m-auto" action="{{url('Basic-Info')}}" method="POST" enctype="multipart/form-data">
                        @csrf                              
                             <div class="form-row">
                                <div class="col-12 col-md-6 mb-3">
                                    <label class="form-label" for=""><span class="text-danger">*</span> First Name   </label>
                                    <input type="text" class="form-control" name="first_name" id="" placeholder="Enter Your First Name" value="{{$user->name}}" readonly="" required>                                    
                                </div>
                                <div class="col-12 col-md-6 mb-3" style="padding-right: 0px;">
                                    <label class="form-label" for=""><span class="text-danger">*</span> Last Name   </label>
                                    <input type="text" class="form-control" id="" placeholder="Enter Your Last Name" name="last_name" value="{{$user->l_name}}" @if($user->l_name == "Null")required="" @else readonly="" @endif>
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label class="form-label col-4 col-md-4 p-2"> <span class="text-danger">*</span> Gender</label>
                                <div class="custom-control custom-radio col-md-8 col-8 p-2">
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
                                <label class="form-label col-md-4 p-2"><span class="text-danger">*</span> Date of Birth </label>
                                <input id="" type="date" class="form-control col-md-8" name="bod_date" value="@if($UserDetails){{$UserDetails->dob}}@endif" required="">
                            </div>

                            <div class="form-group row">
                                <label class="form-label col-md-4 p-2"><span class="text-danger">*</span> Blood Group</label>
                                {{-- <input id="" type="text" class="form-control col-md-8" placeholder="Enter Blood Group" name="blood_group" value="@if($UserDetails){{$UserDetails->blood_group}}@endif" required=""> --}}
                                <select id="" name="blood_group" class="form-control custom-select col-md-8" >
                                <option value="" selected>Select Blood Group</option>
                                @foreach($blood_group as $list)
                                    <option value="{{$list->blood_group_name}}" @if($UserDetails) @if($UserDetails->blood_group == $list->blood_group_name)selected @endif @endif>{{$list->blood_group_name}}</option>
                                    @endforeach 
                                </select> 
                            </div>

                            <div class="form-group row ">
                                <label class="form-label col-md-4 p-2"><span class="text-danger">*</span> Email </label>
                              <input type="email" class="form-control col-md-8" id="" name="email" value="{{$user->email}}" placeholder="Enter Your Email Address .." readonly="" >
                            </div>
                            <div class="form-group row ">
                                <label class="form-label col-md-4 p-2"><span class="text-danger">*</span> Contact Number </label>
                                <input type="text" class="form-control col-md-8" id="phone_no" name="phone_no" value="{{$user->phone}}" placeholder="Enter Contact Number .." required="" onkeyup="sendContact();" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" maxlength="10">
                                <div class=" col-md-8 offset-md-4" >
                                    <span id="mob-info" class="info"></span>
                                </div>
                            </div>

                            <div class="form-group row ">
                                <label class="form-label col-md-4 p-2"><span class="text-danger">*</span> Emergency Contact Number  </label>
                                <input id="emergency_contact" type="text" class="form-control col-md-8" name="emergency_contact" placeholder="Enter Emergency Contact Number Mother Or Father Mobile No." value="@if($UserDetails){{$UserDetails->emergency_contact}}@endif" required="" onkeyup="sendContact2();" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" maxlength="10">
                                <div class=" col-md-8 offset-md-4" >
                                    <span id="mob-info2" class="info"></span>
                                </div>
                            </div>
                        
                            <div class="form-group row ">
                                <label class="form-label col-md-4 p-2"><span class="text-danger">*</span> Permanent Address</label>
                                <textarea class="form-control col-md-8" name="permanent_address" placeholder="Enter Permanent Address" required="">@if($UserDetails){{$UserDetails->address}}@endif</textarea>
                            </div>
                            <div class="form-group row ">
                                <label class="form-label col-md-4 p-2"><span class="text-danger">*</span> Current Address  </label>
                                <textarea class="form-control col-md-8" name="current_address" placeholder="Enter Current Address" required="">@if($Education){{$Education->current_address}}@endif</textarea>
                            </div>

                            <div class="form-group row ">
                                <label class="form-label col-md-4 p-2"><span class="text-danger">*</span> KYC - Aadhar or PAN card  </label>
                                 <input id="" type="text" class="form-control col-md-8"  placeholder="Enter AADHAR / PAN" name="kyc_doc" value="@if($UserDetails){{$UserDetails->kyc_name}}@endif" required="">
                            </div>
                            <div class="form-group row ">
                                <label class="form-label col-md-4 p-2">Upload KYC - Aadhar or PAN card</label>
                                <div class="custom-file col-md-4" style="padding-left: 0px; padding-right:0px;">
                                    <input type="file" id="file" class="form-control" name="upload_kyc_doc" >
                                </div> 

                                
                               
                                @if($UserDetails)  
                                <div style="display: none">{{ $file_type =  pathinfo($UserDetails->upload_kyc, PATHINFO_EXTENSION)}}</div>
                                    @if($file_type == 'pdf')
                                    <div class="col-md-4 text-center mt-1">
                                            <i class="fa fa-check text-success mr-2" aria-hidden="true"></i> <span class="ml-1 mr-2"> Image Uploded </span> 
                                        </div>  
                                    @else
                                    <div class="col-md-4 text-center mt-1">
                                         <i class="fa fa-check text-success mr-2" aria-hidden="true"></i> <span class="ml-1 mr-2"> Image Uploded </span> <a href="javascript:;" data-href="{{asset($UserDetails->upload_kyc)}}" class="openmodal btn btn-primary btn-sm">Preview</a>
                                    </div>  
                                    @endif  
                                @endif                         
                            </div>

                            {{-- @if(isset($UserDetails->upload_kyc))
                            @if($UserDetails->upload_kyc)
                            <div class="form-group row ">
                                <label class="form-label col-md-4 p-2">Preview</label>
                                <div class=" col-md-8" id="pop">                                  
                                    <img class="document_img" id="imageresource" src="{{asset($UserDetails->upload_kyc)}}" alt="" width="80" height="80">
                                 </div>                                  
                            </div>
                            @endif
                            @endif --}}

                            @if($Education)
                                @php
                                    $college_name= DB::table('colleges')->where('id', $Education->collage_id)->pluck('college_name')->first();
                                @endphp
                                
                            <div class="form-group row ">
                                <label class="form-label col-md-4 p-2"> <span class="text-danger">*</span> College</label>
                                <input type="text" class="form-control col-md-8" id="" name="selected_collage" value="{{$college_name}}" readonly>
                                <input type="hidden" name="collage" value="{{$Education->collage_id}}" >
                            </div>
                            @else
                            <div class="form-group row ">
                                <label class="form-label col-md-4 p-2 text-uppercase"> <span class="text-danger">*</span> College</label>
                                <select id="" name="collage" class="form-control custom-select col-md-8" >
                                    <option value="" selected>Select College</option>
                                    @foreach($College as $list)
                                    <option value="{{$list->id}}" @if($Education) @if($Education->collage_id == $list->id)selected @endif @endif>{{$list->college_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            @endif
                            
                            <div class="form-group row ">
                                <label class="form-label col-md-4 p-2"><span class="text-danger">*</span> University / Board Name  </label>
                                <input id="" type="text" class="form-control col-md-8" placeholder="Enter University / Board Name " value="@if($Education){{$Education->university}}@endif" name="university" required="">
                            </div>

                            <div class="form-group row ">
                                <label class="form-label col-md-4 col-4 p-2"> <span class="text-danger">*</span> Education</label>
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

                            @if($Education)
                                @php
                                    $course_name= DB::table('courses')->where('id', $Education->degree)->pluck('course_name')->first();
                                @endphp
                                
                            <div class="form-group row ">
                                <label class="form-label col-md-4 p-2"><span class="text-danger">*</span> Course  </label>
                                <input type="text" class="form-control col-md-8" id="" name="selected_course" value="{{$course_name}}" readonly>
                                <input type="hidden" name="degree" value="{{$Education->degree}}">
                            </div>
                            @else
                            <div class="form-group row ">
                                <label class="form-label col-md-4 p-2 text-uppercase"><span class="text-danger">*</span> Course   </label>
                                <select id="" name="degree" class="form-control custom-select col-md-8" required="">
                                    <option value="" selected>Select Course</option>
                                    @foreach($course as $list)
                                    <option value="{{$list->id}}" @if($Education) @if($Education->degree == $list->id)selected @endif @endif>{{$list->course_name}}</option>
                                    @endforeach                                      
                                </select>                               
                            </div>
                        @endif

                        @if($Education)
                            
                                @php
                                $branch_name= DB::table('branches')->where('id', $Education->branch_id)->pluck('branch_name')->first();
                            @endphp
                            <div class="form-group row ">
                                {{-- if readonly field enable this  --}}
                                {{-- <label class="form-label col-md-4 p-2">Branch:</label>
                                <input type="text" class="form-control col-md-8" id="" name="selected_branch" value="{{$branch_name}}" readonly>
                                <input type="hidden" name="branch" value="{{$Education->branch_id}}"> --}}

                                <label class="form-label col-md-4 p-2 text-uppercase"><span class="text-danger">*</span> Branch </label>
                                <select id="" name="branch" class="form-control custom-select col-md-8" required="">
                                    <option value="" selected>Select Branch</option>
                                    @foreach($branch as $list)
                                    <option value="{{$list->id}}" @if($Education) @if($Education->branch_id == $list->id)selected @endif @endif>{{$list->branch_name}}</option>
                                    @endforeach                                      
                                </select>   
                            </div>
                            @else
                            <div class="form-group row ">
                                <label class="form-label col-md-4 p-2 text-uppercase"><span class="text-danger">*</span> Branch </label>
                                <select id="" name="branch" class="form-control custom-select col-md-8" required="">
                                    <option value="" selected>Select Branch</option>
                                    @foreach($branch as $list)
                                    <option value="{{$list->id}}" @if($Education) @if($Education->branch_id == $list->id)selected @endif @endif>{{$list->branch_name}}</option>
                                    @endforeach                                      
                                </select>                               
                            </div>
                            @endif
                            <div class="form-group row">
                                <label class="form-label col-md-4 p-2"><span class="text-danger">*</span> Semester  </label>
                                <select id="" name="semester" class="form-control custom-select col-md-8" required="">
                                    <option value="" selected>Select Semester </option>
                                    @foreach($Semister as $list)
                                    <option value="{{$list->id}}" @if($UserDetails) @if($UserDetails->semister == $list->id)selected @endif @endif>{{$list->semister_name}}</option>
                                    @endforeach                                       
                                </select>                               
                            </div>
                            <div class="form-group row">
                                <label class="form-label col-md-4 p-2"><span class="text-danger">*</span> USN/Roll Number  </label>
                                <input id="" type="text" class="form-control col-md-8" placeholder="Enter USN / Roll Number" name="roll_no" value="@if($Education){{$Education->roll_no}}@endif" required="">
                            </div>                             
                            <div class="form-group row ">
                                <label class="form-label col-md-4 p-2"><span class="text-danger">*</span> Mother's Name  </label>
                                <input id="" type="text" class="form-control col-md-8" placeholder="Enter Mother's Name" value="@if($UserDetails){{$UserDetails->mother_name}}@endif" name="mother_name" required="">
                            </div>
                            <div class="form-group row ">
                                <label class="form-label col-md-4 p-2">Mother's Occupation</label>
                                <input id="" type="text" class="form-control col-md-8" name="mother_occupation" placeholder="Enter mother's Occupation" value="@if($UserDetails){{$UserDetails->mother_occupation}}@endif">
                            </div>
                            <div class="form-group row ">
                                <label class="form-label col-md-4 p-2"><span class="text-danger">*</span> Father's Name  </label>
                                <input id="" type="text" class="form-control col-md-8" name="father_name" placeholder="Enter Father's Name" value="@if($UserDetails){{$UserDetails->father_name}}@endif" required="">
                            </div>
                            <div class="form-group row ">
                                <label class="form-label col-md-4 p-2">Father's Occupation</label>
                                <input id="" type="text" class="form-control col-md-8" name="occupation" placeholder="Enter Father's Occupation" value="@if($UserDetails){{$UserDetails->occupation}}@endif">
                            </div>
                          
                           
                            <div class="form-group row">
                                <div class="col-10 m-auto text-right pt-3">
                                    {{-- <button type="reset" name="reset" class="btn btn-secondary mr-2">Reset</button> --}}
                                    {{-- <a href="{{url('studentdashboard')}}" class="btn btn-secondary mr-2" >Back</a> --}}
                                    <button name="submit" class="btn btn-primary btn-submit" >Next</button>
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

          <!-- Modal -->
<div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <img src="" id="imagepreview" style="width: 100%; height: auto;">
        </div>
        
      </div>
    </div>
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

{{-- <script>
    $("#pop").on("click", function() {
        $('#imagepreview').attr('src', $('#imageresource').attr('src')); // here asign the image to the modal when the user click the enlarge link
        $('#imagemodal').modal('show'); // imagemodal is the id attribute assigned to the bootstrap modal, then i use the show function
    });
</script> --}}

<script>
    $(".openmodal").click(function(){
        var href = $(this).data("href");
        $("#imagemodal img").attr("src",href );
        $("#imagemodal").modal("show");
    })
</script>

<script>
    $(':input[required]:visible').on("input", function () {    	
  canChangeColor();
});


function canChangeColor(){  
  	
  var can = true;  

  $(':input[required]:visible').each(function(){
     if($(this).val()==''){
        can = false;
     }
  });
//   alert(can);
  if(can){
    $('.btn-submit').removeClass('btn-secondary').addClass("btn-primary");
  }else{
    $('.btn-submit').removeClass("btn-primary").addClass("btn-secondary");
  }

}
</script>

<script type="text/javascript">

    function sendContact() {
     
        var valid;  
        valid = validateContact();
               
    }
    
    function validateContact() {
    
        var valid = true;   
    
        //$(".demoInputBox").css('background-color','');
        $(".info").html('');
    
        if(!$("#phone_no").val()) {
            $("#phone_no").css('background-color','#FFFFDF');
            $("#mob-info").css('color','red');
            $("#phone_no").css('border','1px solid red');
            valid = false;
        }else if(!$("#phone_no").val().match(/[0-9]{10}/)) {
            $("#mob-info").html("Please Enter 10 Digit Mobile Number");
            $("#phone_no").css('background-color','#FFFFDF');
            $("#mob-info").css('color','red');
            $("#phone_no").css('border','1px solid red');
            valid = false;
        }else{
            $("#phone_no").css('border','1px solid #ced4da');
        }
        return valid;
    }
    </script>

<script type="text/javascript">

    function sendContact2() {
     
        var valid;  
        valid = validateContact2();
               
    }
    
    function validateContact2() {
    
        var valid = true;   
    
        //$(".demoInputBox").css('background-color','');
        $(".info").html('');
    
        if(!$("#emergency_contact").val()) {
            $("#emergency_contact").css('background-color','#FFFFDF');
            $("#mob-info2").css('color','red');
            $("#emergency_contact").css('border','1px solid red');
            valid = false;
        }else if(!$("#emergency_contact").val().match(/[0-9]{10}/)) {
            $("#mob-info2").html("Please Enter 10 Digit Mobile Number");
            $("#emergency_contact").css('background-color','#FFFFDF');
            $("#mob-info2").css('color','red');
            $("#emergency_contact").css('border','1px solid red');
            valid = false;
        }else{
            $("#emergency_contact").css('border','1px solid #ced4da');
        }
        return valid;
    }
    </script>
        
    </body>
</html>