<div class="mdk-drawer js-mdk-drawer"
                 id="default-drawer">
                <div class="mdk-drawer__content">
                    {{-- <div class="d-flex p-2" style="height: 65px; width:100%;">
                        <img class="img-fluid w-100" src="{{asset('images/Picture1.png')}}" alt=""> 
                    </div> --}}
                    <div class="sidebar sidebar-dark-pickled-bluewood sidebar-left"
                         data-perfect-scrollbar>

                        <!-- Sidebar Content -->

                        @php
                            $profile_pic = DB::table('user_details')->where('user_id', Auth::User()->id)->pluck('image')->first();
                        @endphp

                        <form id="profile-pic" action="{{url('profile-pic-submit')}}" method="post"  enctype="multipart/form-data" >
                            @csrf
                        <a href="javascript:void(0)"
                           class="sidebar-brand ">
                            <!-- <img class="sidebar-brand-icon" src="../../public/images/illustration/student/128/white.svg" alt="Luma"> -->
                            <label for="profile_picture">
                            <span class="avatar avatar-xl sidebar-brand-icon h-auto">

                                <span class="avatar-title " style="background-color: #3038400d;"><img class="rounded-circle profile_picture" src="@if($profile_pic){{asset($profile_pic)}}@else{{asset('Student/images/profile_pic/profile1.png')}}@endif"
                                         class="img-fluid p-2"
                                         alt="logo" /></span>

                            </span>
                            </label>

                            <span class="text-wite">@php 
                                $user = Auth::user();
                                echo $user->name;
                              @endphp
                              </span>
                        </a>

                            {{-- <input type="file" class="text-center pb-3 pl-3" name="profile_picture" id="profile_picture"> --}}
                            <input type="file" class="text-center pb-3 pl-3" name="profile_picture" id="profile_picture" style="display: none; visibility:none;">
                        </form>
                        <div class="sidebar-heading text-wite">Student</div>
                        <ul class="sidebar-menu">

                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button"
                                   href="{{url('studentdashboard')}}">
                                    <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left text-wite">view_compact</span>
                                    <span class="sidebar-menu-text">Dashboard</span>
                                </a>
                            </li>
                            {{-- <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button"
                                   href="{{url('resume-page-one')}}">
                                   <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left text-wite">school</span>
                                    <span class="sidebar-menu-text">Resume</span>
                                </a>
                            </li> --}}

                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" data-toggle="collapse" href="#profile_List">
                                    <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left text-wite">school</span>
                                    Profile
                                    <!-- <span class="sidebar-menu-badge badge badge-accent badge-notifications ml-auto">2</span> -->
                                    <span class="sidebar-menu-toggle-icon"></span>
                                </a>
                                <ul class="sidebar-submenu collapse sm-indent" id="profile_List">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="{{ url('/resume-page-one') }}">
                                                <span class="sidebar-menu-text">Basic Info</span>
                                            </a>
                                        </li>
                                    
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button alert_message" href="JavaScript:Void(0);">
                                                <span class="sidebar-menu-text">Academics info</span>
                                            </a>
                                        </li>
                                    
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button alert_message" href="JavaScript:Void(0);">
                                                <span class="sidebar-menu-text">Skill info</span>
                                            </a>
                                        </li>
                                    
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button"
                                               href="{{url('resume-template')}}" >
                                                <span class="sidebar-menu-text text-wite">Resume</span>
                                            </a>
                                        </li>
            
                                </ul>
                            </li>

                            {{-- <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button"
                                   href="{{url('View-All-Test')}}">
                                   <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">message</span>
                                    <span class="sidebar-menu-text">Start Test</span>
                                </a>
                            </li> --}}
                             <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button"
                                   data-toggle="collapse"
                                   href="#Test_List">
                                    <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left text-wite">message</span>
                                    Test & Analysis
                                    <!-- <span class="sidebar-menu-badge badge badge-accent badge-notifications ml-auto">2</span> -->
                                    <span class="sidebar-menu-toggle-icon"></span>
                                </a>
                                <ul class="sidebar-submenu collapse sm-indent"
                                    id="Test_List">
                                    <?php  $education = DB::table('education__details')->where('user_id',Auth::User()->id)->first(); ?>
                                    @if($education)
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="{{url('View-All-Test')}}">
                                            <span class="sidebar-menu-text">Class Room</span>
                                        </a>
                                    </li>
                                    @else
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button alert_message"
                                           href="JavaScript:Void(0);" >
                                            <span class="sidebar-menu-text">Class Room</span>
                                        </a>
                                    </li>
                                    @endif
                                    {{-- <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="{{url('E-Learn')}}">
                                            <span class="sidebar-menu-text">E-Learn</span>
                                        </a>
                                    </li> --}}
                                    {{-- <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="{{url('Compiler')}}">
                                            <span class="sidebar-menu-text">Compiler</span>
                                        </a>
                                    </li> --}}
                                   

                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="{{url('All-Result')}}">
                                            <span class="sidebar-menu-text text-wite">Result</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="{{url('charts')}}">
                                            <span class="sidebar-menu-text text-wite">Analysis</span>
                                        </a>
                                    </li>

                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="{{url('test_compiler')}}" >
                                            <span class="sidebar-menu-text text-wite">Compiler</span>
                                        </a>
                                    </li>

                                   

                                    {{-- <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="{{url('download-resume')}}/1" target="_blank">
                                            <span class="sidebar-menu-text text-wite">Basic Resume</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="{{url('download-resume')}}/2" target="_blank">
                                            <span class="sidebar-menu-text text-wite">Engg. Resume</span>
                                        </a>
                                    </li> --}}
                                </ul>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button"
                                   href="{{url('learing_video')}}">
                                   <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left text-wite">school</span>
                                    <span class="sidebar-menu-text ">Learning Videos</span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button"
                                   href="#">
                                   <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left text-wite">view_compact</span>
                                    <span class="sidebar-menu-text ">Books & Content</span>
                                </a>
                            </li>

                            {{-- <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button"
                                   href="{{url('charts')}}">
                                    <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left text-wite">view_compact</span>
                                    <span class="sidebar-menu-text">Analysis</span>
                                </a>
                            </li> --}}
                        </ul>
                    
                        <!-- // END Sidebar Content -->

                    </div>
                </div>
            </div>

            <style>
                .mdk-drawer__content
                {
                   /* margin-top: 65px!important;*/
                }
                .text-blue1{
                    color: #194968!important;
                }
                .sidebar-menu-text , .sidebar-menu-button
                {
                    color: #fff!important;
                }
                .sidebar-dark-pickled-bluewood
                {
                    /* background: #4782a3fa!important; */
                    background-image: linear-gradient(to bottom, #272c33, #38404a,#272c33)!important;
                }
                .sidebar-dark-pickled-bluewood .open {
                        background: #272c33!important;
                    }
            </style>