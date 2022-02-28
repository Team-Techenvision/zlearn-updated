<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div class="h-100">

        <div class="user-wid text-center py-4">
            <div class="user-img">
                <img src="{{asset('images/users/avatar-2.jpg')}}" alt="" class="avatar-md mx-auto rounded-circle">
            </div>

            <div class="mt-3">

                <a href="#" class="text-dark font-weight-medium font-size-16">{{  Auth::user()->name }}</a>
                <p class="text-body mt-1 mb-0 font-size-13">Admin </p>

            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-map-marker-outline"></i>
                        <span>Users</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{url('admin-list')}}">Admin list</a></li> 
                        <li><a href="{{url('user-list')}}">Student list</a></li>   
                        <li><a href="{{url('view-college-admin')}}">College Admin List</a></li>   
                        <li><a href="{{url('importExportView')}}">Import Student</a></li> 
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-map-marker-outline"></i>
                        <span>Master Pages</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">                         
                        {{-- <li><a href="add-standard">Add Standard</a></li>
                        <li><a href="add-subject">Add Subject</a></li>
                        <li><a href="add-chapter">Add Chapter</a></li> --}}
                        <li><a href="{{url('view-college')}}">View College</a></li>
                        <li><a href="{{url('view-course')}}">View Course</a></li>
                        <li><a href="{{url('view-branch')}}">View Branch</a></li>
                        <li><a href="{{url('view-semister')}}">View Semester</a></li>
                        {{-- <li><a href="{{url('view-standard')}}"> View Standard</a></li> --}}                        
                        <li><a href="{{url('view-subject')}}"> View Subject</a></li>
                        <li><a href="{{url('view-chapter')}}">View Chapter</a></li>                        
                        <li><a href="{{url('view-test-type')}}">View Test Type</a></li> 
                        <li><a href="{{url('view-test-name')}}">View Test Name</a></li>                        
                        <li><a href="{{url('view-question-level')}}">View Level</a></li>                        
                        <li><a href="{{url('view-test-section')}}">View Test Section</a></li>                        
                        <li><a href="{{url('view-program-name')}}">View Program Name</a></li> 
                        <li><a href="{{url('view-test-case')}}">View Test Case</a></li>                        

                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-map-marker-outline"></i>
                        <span>Manage Questions</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">                        
                        <li><a href="{{url('view-question')}}"> View Question</a></li>                        
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-map-marker-outline"></i>
                        <span>Manage Test</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">                        
                        <li><a href="{{url('view-test')}}"> View Test</a></li>   
                        <li><a href="{{url('manage-test-question')}}"> Manage Test Question</a></li>
                        <li><a href="{{url('view-test-question')}}"> View Test Question</a></li>  
                        <li><a href="{{url('view-test-result')}}"> Test Result</a></li>                     
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-map-marker-outline"></i>
                        <span>Manage Material</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">                        
                        <li><a href="{{url('view-material')}}"> View Material</a></li>                                              
                    </ul>
                </li>
                

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->