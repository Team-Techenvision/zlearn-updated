<!DOCTYPE html>
<html lang="en" dir="ltr">

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

    <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
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
                                        <!-- ACADEMIC Details -->
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
                                <span class="progression-bar__item-text h5 mb-0 text-uppercase text-blue1 ml-30">BASIC
                                    INFO</span>
                            </span>
                        </a>
                        <a href="JavaScript:Void(0);"
                            class="progression-bar__item progression-bar__item--complete text-white">
                            <span class="progression-bar__item-content">
                                <i class="material-icons progression-bar__item-icon bg-success">done</i>
                                <span class="progression-bar__item-text h5 mb-0 text-uppercase text-blue1 ml-60">ACADEMICS
                                    INFO</span>
                            </span>
                        </a>
                        <a href="JavaScript:Void(0);" class="progression-bar__item progression-bar__item--complete">
                            <span class="progression-bar__item-content">
                                <i class="material-icons progression-bar__item-icon bg-timesheet-color-primary"> </i>
                                <span class="progression-bar__item-text h5 mb-0 text-uppercase ml-30">SKILLS INFO</span>
                            </span>
                        </a>
                        <a href="JavaScript:Void(0);" class="progression-bar__item progression-bar__item--complete last-item">
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
                        @if (session()->has('alert-danger'))
                            <div class="alert alert-danger col-12">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ session()->get('alert-danger') }}
                            </div>
                        @endif
                        @if (session('success'))
                            <div class="alert alert-success col-12">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ session('success') }}
                            </div>
                        @endif
                    </div>
                    <!-- =================================== -->
                    <form class="form-group col-md-10 m-auto" action="{{ url('Academics-Info') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <!-- <div class="form-group row ">
                                <label class="form-label col-md-3 p-2">NAME:</label>
                                <input type="text" class="form-control col-md-9"
                                placeholder="Enter Your Name">
                            </div> -->
                        <div class="form-row">
                            <div class="col-12 col-md-6 mb-3">
                                <label class="form-label" for=""> <span class="text-danger">*</span> SSLC / 10 <sup>th</sup> Percentage(%)</label>
                                <input type="number" class="form-control" name="sslc_per" id=""
                                    value="@if ($Academics){{ $Academics->sslc_perce }}@endif" placeholder="Enter Your SSLC Percentage"
                                    required="" step="0.01">
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label class="form-label" for=""> <span class="text-danger">*</span> Enter Year Of Pass (YYYY)</label>
                                <input type="number" class="form-control" id="" placeholder="Enter Year Of Pass (YYYY)"
                                    value="@if ($Academics){{ $Academics->sslc_year }}@endif" name="year_sslc" required="" max="9999">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12 col-md-6 mb-3">
                                <label class="form-label" for=""> <span class="text-danger">*</span> University / Board</label>
                                <input type="text" class="form-control" name="sslc_board" id=""
                                    value="@if ($Academics){{ $Academics->sslc_board }}@endif" placeholder="Enter University / Board"
                                    required="" >
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label class="form-label" for=""> <span class="text-danger">*</span> School Name</label>
                                <input type="text" class="form-control" id="" placeholder="Enter School Name"
                                    value="@if ($Academics){{ $Academics->sslc_school }}@endif" name="sslc_school" required="" >
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12 col-md-6 mb-3">
                                <label class="form-label" for="">  PUC / 12 <sup>th</sup> Percentage(%) If Applicable</label>
                                <input type="number" class="form-control" name="puc_per" id=""
                                    value="@if ($Academics){{ $Academics->puc_perce }}@endif" placeholder="Enter PUC / 12th Percentage"
                                    step="0.01">
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label class="form-label" for="">  Enter Year Of Pass (YYYY)</label>
                                <input type="number" class="form-control" id="" placeholder="Enter Year Of Pass (YYYY)"
                                    value="@if ($Academics){{ $Academics->puc_year }}@endif" name="year_puc"  max="9999">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12 col-md-6 mb-3">
                                <label class="form-label" for="">University / Board</label>
                                <input type="text" class="form-control" name="puc_board" id=""
                                    value="@if ($Academics){{ $Academics->puc_board }}@endif" placeholder="Enter University / Board"
                                    >
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label class="form-label" for="">College Name</label>
                                <input type="text" class="form-control" id="" placeholder="Enter College Name"
                                    value="@if ($Academics){{ $Academics->puc_college }}@endif" name="puc_college"  >
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12 col-md-6 mb-3">
                                <label class="form-label" for="">Diploma Percentage(%) If Applicable </label>
                                <input type="number" class="form-control" name="diploma_per" id=""
                                    value="@if ($Academics){{ $Academics->diploma_perce }}@endif" placeholder="Enter Diploma Percentage">
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label class="form-label" for="">Enter Year Of Pass (YYYY)</label>
                                <input type="number" class="form-control" id="" placeholder="Enter Year Of Pass (YYYY)"
                                    value="@if ($Academics){{ $Academics->diploma_year }}@endif" name="year_diploma" max="9999">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-12 col-md-6 mb-3">
                                <label class="form-label" for=""> University / Board</label>
                                <input type="text" class="form-control" name="diploma_university" id=""
                                    value="@if ($Academics){{ $Academics->diploma_university }}@endif" placeholder="Enter University / Board"
                                   >
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label class="form-label" for=""> College Name</label>
                                <input type="text" class="form-control" id="" placeholder="Enter College Name"
                                    value="@if ($Academics){{ $Academics->diplma_college }}@endif" name="diplma_college">
                            </div>
                        </div>

                        <div id="ug_details" class="border p-2">
                            <div class="form-row">
                                <div class="col-12 col-md-12 mb-3">
                                    <label class="form-label" for="">UG</label>                                    
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-12 col-md-6 mb-3">
                                    <label class="form-label" for="">Enter Year Of Pass (YYYY)</label>
                                    <input type="number" class="form-control" id="" placeholder="Enter Year of Pass (YYYY)"
                                        value="@if ($Academics){{ $Academics->year_of_pass_ug }}@endif" name="year_of_pass_ug" max="9999">
                                </div>
                                <div class="col-12 col-md-6 mb-3">
                                    <label class="form-label" for="">AVG Percentage(%)</label>
                                    <input type="number" class="form-control" id="" placeholder="Enter Average Percentage"
                                        value="@if ($Academics){{ $Academics->avg_percentage_ug }}@endif" name="avg_percentage_ug" step="0.01">
                                </div>
                            </div>
                            @if($Education->education == 'UG')
                            <div class="form-row">
                                <div class="col-12 col-md-4 mb-3">
                                    <label class="form-label" for="">Semester</label>
                                    <select id="" name="semester_id_ug[]" class="form-control custom-select">
                                        <option value="" selected>Select Semester </option>
                                        @foreach ($graduation_sem as $list)
                                            <option value="{{ $list->sem_id }}"  >{{ $list->sem_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-12 col-md-4 mb-3">
                                    <label class="form-label" for=""> Score Type</label>
                                    <select id="" name="scrore_type_ug[]" class="form-control custom-select">
                                        <option value="">Select Score Type </option>
                                        <option value="SGPA">SGPA</option>
                                        <option value="CGPA">CGPA</option>
                                        <option value="Percentage" >Percentage</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-2 mb-3">
                                    <label class="form-label" for="">Score</label>
                                        <input type="number" class="form-control" id="" placeholder="Scrore" value="" name="percentage_ug[]" step="0.01">
                                    </div>
                                    <div class="col-12 col-md-2 ">
                                        <a href="javascript:void(0);" class="btn btn-success float-right h3 mt-4"
                                        title="Add More" id="add_ug">+</a>
                                        </a>
                                    </div>
                                </div>
                            @endif

                            @if($Education->education == 'PG')
                            <div class="form-row">
                                <div class="col-12 col-md-6 mb-3">
                                    <label class="form-label" for="">College Name</label>
                                    <input type="text" class="form-control" id="" placeholder="Enter College Name"
                                        value="@if ($Academics){{ $Academics->college_ug }}@endif" name="college_ug">
                                </div>
                                <div class="col-12 col-md-6 mb-3">
                                    <label class="form-label" for=""> University / Board</label>
                                    <input type="text" class="form-control" name="university_ug" id=""
                                        value="@if ($Academics){{ $Academics->university_ug }}@endif" placeholder="Enter University / Board"
                                       >
                                </div>
                                <div class="col-12 col-md-6 mb-3">
                                    <label class="form-label" for="">Course</label>
                                    <input type="text" class="form-control" id="" placeholder="Enter Course"
                                        value="@if ($Academics){{ $Academics->cource_ug }}@endif" name="cource_ug">
                                </div>
                                <div class="col-12 col-md-6 mb-3">
                                    <label class="form-label" for="">Branch</label>
                                    <input type="text" class="form-control" id="" placeholder="Enter Branch"
                                        value="@if ($Academics){{ $Academics->branch_ug }}@endif" name="branch_ug">
                                </div>
                            </div>
                            @else
                           
                            @if ($UG_Details->count() > 0)
                                    <div class="form-row">
                                        @foreach ($UG_Details as $item)
                                            {{-- <div class="col-md-12  form-group p-1 h6">
                                                <a href="{{url('Delete-UG_Details')}}/{{$item->id}}" class="btn btn-danger float-right" title="Delete" id="delete_ug"><i class="material-icons">delete</i></a>
                                             </div>   --}}
                                             <?php
                                             $semester_name = DB::table('graduation_sem')->where('sem_id', $item->semester_id_ug)->pluck('sem_name')->first();
                                             ?>  
                                            <div class="col-md-4 col-12 form-group p-1 h6">
                                                Semester Name : {{$semester_name}}
                                            </div>
                                            <div class="col-md-4 col-12 form-group p-1 h6">
                                                Score Type : {{$item->scrore_type_ug}}
                                            </div>
                                            <div class="col-md-2 col-12 form-group p-1 h6">
                                                Score : {{$item->percentage_ug}}
                                            </div>
                                            <div class="col-md-2 col-12">
                                                <a href="{{url('Delete-UG_Details')}}/{{$item->id}}" class="btn btn-danger float-right" title="Delete" id="delete_ug"><i class="material-icons">delete</i></a>
                                            </div>
                                             <hr style="w-50 m-auto text-dark"> 
                                        @endforeach
                                    </div>                                       
                                @endif
                            @endif
                        </div>

                        @if($Education->education == 'PG')
                        <div id="pg_details" class="border p-2">
                            <div class="form-row">
                                <div class="col-12 col-md-12 mb-3">
                                    <label class="form-label" for="">PG</label>
                                   
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-12 col-md-6 mb-3">
                                    <label class="form-label" for="">Enter Year Of Pass (YYYY)</label>
                                    <input type="number" class="form-control" id="" placeholder="Enter Year of Pass (YYYY)"
                                        value="@if ($Academics){{ $Academics->year_of_pass_pg }}@endif" name="year_of_pass_pg" max="9999">
                                </div>
                                <div class="col-12 col-md-6 mb-3">
                                    <label class="form-label" for="">AVG Percentage(%)</label>
                                    <input type="number" class="form-control" id="" placeholder="Enter Average Percentage"
                                        value="@if ($Academics){{ $Academics->avg_percentage_pg }}@endif" name="avg_percentage_pg" step="0.01">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-12 col-md-4 mb-3">
                                    <label class="form-label" for=""> Semester</label>
                                    <select id="" name="semester_id_pg[]" class="form-control custom-select">
                                        <option value="">Select Semester </option>
                                        <option value="1" >1st Semester </option>
                                        <option value="2" >2nd Semester </option>
                                        <option value="3" >3rd Semester </option>
                                        <option value="4" >4th Semester </option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label class="form-label" for=""> Score Type</label>
                                    <select id="" name="scrore_type_pg[]" class="form-control custom-select">
                                        <option value="">Select Score Type </option>
                                        <option value="SGPA">SGPA</option>
                                        <option value="CGPA">CGPA</option>
                                        <option value="Percentage" >Percentage</option>
                                    </select>
                                </div>

                                <div class="col-12 col-md-2 mb-3">
                                    <label class="form-label" for="">Score</label>
                                        <input type="number" class="form-control" id="" placeholder="Score" value="" name="percentage_pg[]" step="0.01">
                                    </div>
                                    <div class="col-12 col-md-2 ">
                                        <a href="javascript:void(0);" class="btn btn-success float-right h3 mt-4"
                                        title="Add More" id="add_pg">+</a>
                                        </a>
                                    </div>
                                </div>

                            @if ($PG_Details->count() > 0)
                                    <div class="form-row">
                                        @foreach ($PG_Details as $item)
                                            {{-- <div class="col-md-12  form-group p-1 h6">
                                                <a href="{{url('Delete-PG_Details')}}/{{$item->id}}" class="btn btn-danger float-right" title="Delete" id="delete_ug"><i class="material-icons">delete</i></a>
                                             </div>   --}}
                                             <?php
                                                    if($item->semester_id_pg == 1){
                                                        $semester_name = '1st Semester';
                                                    } elseif ($item->semester_id_pg == 2) {
                                                        $semester_name = '2nd Semester';
                                                    }elseif ($item->semester_id_pg == 3) {
                                                        $semester_name = '3rd Semester ';
                                                    }else{
                                                        $semester_name = '4th Semester';
                                                    } 
                                             ?>  
                                            <div class="col-md-4  form-group p-1 h6">
                                                Semester Name : {{$semester_name}}
                                            </div>
                                            <div class="col-md-4 col-12 form-group p-1 h6">
                                                Score Type : {{$item->scrore_type_pg}}
                                            </div>
                                            <div class="col-md-2  form-group p-1 h6">
                                                Score : {{$item->percentage_pg}}
                                            </div>
                                            <div class="col-md-2  form-group p-1 h6">
                                                <a href="{{url('Delete-PG_Details')}}/{{$item->id}}" class="btn btn-danger float-right" title="Delete" id="delete_ug"><i class="material-icons">delete</i></a>
                                             </div>  
                                             <hr style="w-50 m-auto text-dark"> 
                                        @endforeach
                                    </div>                                       
                                @endif
                        </div>

                        @endif

                        {{-- <div class="form-row">
                            <div class="col-12 col-md-6 mb-3">
                                <label class="form-label" for="">UG</label>
                                <select id="" name="ddl_graduation" class="form-control custom-select">
                                    <option value="" selected>Select Semester </option>
                                    @foreach ($graduation_sem as $list)
                                        <option value="{{ $list->sem_id }}" @if ($UserDetails->semister == $list->sem_id)selected @endif>
                                            {{ $list->sem_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label class="form-label" for="">UG</label>
                                <input type="text" class="form-control" id="" placeholder="Enter Other UG"
                                    value="@if ($Academics){{ $Academics->other_graduation }}@endif" name="write_graduation">
                            </div>
                        </div> --}}

                        {{-- <div class="form-row">
                            <div class="col-12 col-md-6 mb-3">
                                <label class="form-label" for="">PG</label>
                                <select id="" name="ddl_pg" class="form-control custom-select">
                                    <option value="">Select Semester </option>
                                    <option value="1" @if ($Academics) @if ($Academics->ddl_pg == '1')selected @endif @endif>1st Semester </option>
                                    <option value="2" @if ($Academics) @if ($Academics->ddl_pg == '2')selected @endif @endif>2nd Semester </option>
                                    <option value="3" @if ($Academics) @if ($Academics->ddl_pg == '3')selected @endif @endif>3rd Semester </option>
                                    <option value="4" @if ($Academics) @if ($Academics->ddl_pg == '4')selected @endif @endif>4th Semester </option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label class="form-label" for="">PG (Other)</label>
                                <input type="text" class="form-control" id="" placeholder="Enter Other PG"
                                    value="@if ($Academics){{ $Academics->other_pg }}@endif" name="write_pg">
                            </div>
                        </div> --}}

                        {{-- <div class="form-row">
                            <div class="col-12 col-md-6 mb-3">
                                <label class="form-label" for="">Total CGPA (AVG Total)</label>
                                <input type="text" class="form-control" name="avg_cgpa" id=""
                                    value="@if ($Academics){{ $Academics->avg_cgpa }}@endif" placeholder="Enter Total CGPA ">
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label class="form-label" for="">Year Of Graduated<small>(Future date
                                        (YYYY))</small></label>
                                <input type="text" class="form-control" id="year_graduated1"
                                    placeholder="Enter Year Of Graduated (YYYY)" value="@if ($Academics){{ $Academics->year_graduation }}@endif"
                                    name="year_graduated">
                            </div>
                        </div> --}}
                        <div class="form-row mt-3">
                            <div class="col-12 col-md-6 mb-3">
                                <label class="form-label" for="">Current Back Logs</label>
                                <input type="number" class="form-control" name="current_backLog" min="0" id=""
                                    value="@if ($Academics){{ $Academics->curr_backlog }}@endif" placeholder="Enter Current Back Logs">
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label class="form-label" for="">Number of Year Backs <small>(If Applicable
                                        )</small></label>
                                <input type="text" class="form-control" id="" placeholder="Enter Number of Year Backs"
                                    value="@if ($Academics){{ $Academics->num_year_backlog }}@endif" name="no_yer_backs">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12 col-md-6 mb-3">
                                <label class="form-label" for="">Any gaps In The Academics</label>
                                <div class="custom-control custom-radio col-md-9 col-8 p-2">
                                    <span class="mr-3">
                                        <input type="radio" id="" name="acd_gaps" value="1" class="gaps"
                                            @if ($Academics) @if ($Academics->gap == '1')checked @endif @endif>
                                        <label for="Yes" class="pl-1">Yes</label>
                                    </span>
                                    <span class="ml-3">
                                        <input type="radio" class="gaps" id="" name="acd_gaps" value="0"
                                            @if ($Academics) @if ($Academics->gap == '0')checked @endif @endif>
                                        <label for="No" class="pl-1">No</label>
                                    </span>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label class="form-label" for="">Explain </label>
                                <textarea class="form-control gap_explain" name="explain_gaps"
                                    placeholder="If Applicable Gaps In The Academics Then Explain" maxlength="300"
                                    readonly="">@if ($Academics){{ $Academics->gap_explan }}@endif</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-10 m-auto text-right pt-3">
                                {{-- <button type="reset" name="reset" class="btn btn-secondary mr-2">Reset</button> --}}
                                <a href="{{ url('resume-page-one') }}" class="btn btn-secondary mr-2">Back</a>
                                <button name="submit" class="btn btn-primary btn-submit">Next</button>
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

    <link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
    {{-- <script src = "https://code.jquery.com/jquery-1.10.2.js"></script> --}}
    <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    @toastr_js
    @toastr_render
    <script>
        $(document).ready(function() {
            $('#year_graduated').datepicker({
                minDate: 1,
                dateFormat: 'yy-mm-dd'
            });

            $('.gaps').click(function() {
                if ($(this).val() == 1) {
                    $('.gap_explain').removeAttr('readonly');
                    $('.gap_explain').attr('required', true);
                } else {
                    $('.gap_explain').removeAttr('required');
                    $('.gap_explain').attr('readonly', true);
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#add_ug').click(function() {
                $("#ug_details").append(
                    '<div class="form-row"><div class="col-12 col-md-4 mb-3"><label class="form-label" for="">Semester</label><select id="" name="semester_id_ug[]" class="form-control custom-select"><option value="" selected>Select Semester </option>@foreach ($graduation_sem as $list)<option value="{{ $list->sem_id }}"  >{{ $list->sem_name }}</option>@endforeach</select></div><div class="col-12 col-md-4 mb-3"><label class="form-label" for=""> Score Type</label><select id="" name="scrore_type_ug[]" class="form-control custom-select"><option value="">Select Score Type </option><option value="SGPA">SGPA</option><option value="CGPA">CGPA</option><option value="Percentage" >Percentage</option></select></div><div class="col-12 col-md-2 mb-3"><label class="form-label" for=""> <span class="text-danger">*</span> Score</label><input type="number" class="form-control" id="" placeholder="Score" value="" name="percentage_ug[]" required step="0.01"></div><div class="col-12 col-md-2  "><a href="javascript:void(0);" id="remCF" class="remCF btn btn-danger float-right mt-4"><i class="material-icons">delete</i></a></div></div>'
                    );
            });
            
             $('#ug_details').on('click', '.remCF', function() {
                //alert("!!");
                $(this).parent().parent().remove();
            });

            // pg details

            $('#add_pg').click(function() {
                $("#pg_details").append(
                    '<div class="form-row"><div class="col-12 col-md-4 mb-3"><label class="form-label" for="">Semester</label><select id="" name="semester_id_pg[]" class="form-control custom-select"><option value="">Select Semester </option><option value="1" >1st Semester </option><option value="2" >2nd Semester </option><option value="3" >3rd Semester </option><option value="4" >4th Semester </option></select></div><div class="col-12 col-md-4 mb-3"><label class="form-label" for=""> Score Type</label><select id="" name="scrore_type_pg[]" class="form-control custom-select"><option value="">Select Score Type </option><option value="SGPA">SGPA</option><option value="CGPA">CGPA</option><option value="Percentage" >Percentage</option></select></div><div class="col-12 col-md-2 mb-3"><label class="form-label" for=""> <span class="text-danger">*</span> Score</label><input type="number" class="form-control" id="" placeholder="Score"value="" name="percentage_pg[]" required step="0.01"></div><div class="col-12 col-md-2  "><a href="javascript:void(0);" id="remCF1" class="remCF1 btn btn-danger float-right mt-4"><i class="material-icons">delete</i></a></div></div>'
                    );
            });
            
             $('#pg_details').on('click', '.remCF1', function() {
                //alert("!!");
                $(this).parent().parent().remove();
            });
        });
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
</body>

</html>
