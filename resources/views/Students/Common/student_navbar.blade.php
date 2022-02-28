<div class="navbar navbar-expand pr-0 navbar-light border-bottom-2"
                     id="default-navbar"
                     data-primary style="border-bottom: 2px solid #e0dfdf!important;" >
        
                    <!-- Navbar Toggler -->
        
                    <button class="navbar-toggler w-auto mr-16pt d-block  rounded-0"
                            type="button"
                            data-toggle="sidebar">
                        <span class="material-icons">short_text</span>
                    </button>
        
                    <!-- // END Navbar Toggler -->
        
                    <!-- Navbar Brand -->
        
                    <a href="index.html"
                       class="navbar-brand mr-16pt d-lg-none">
        
                        <span class="avatar avatar-sm navbar-brand-icon mr-0 mr-lg-8pt">
        
                            <span class="avatar-title rounded bg-primary"><img src ="{{asset('Student/images/illustration/student/128/white.svg')}}"
                                     alt="logo"
                                     class="img-fluid" /></span>
                        </span>
        
                        <span class="d-none d-lg-block">Zlearn</span>
                    </a>
        
                    <!-- // END Navbar Brand -->
        
                    <span class="d-none d-md-flex align-items-center mr-16pt">
         
                        <span class="avatar avatar-sm mr-12pt">
        
                            {{-- <img class="p-1 logo-small" src="{{asset('images/zlearnlogo.jpg')}}" alt=""> --}}
                            {{-- <span class="avatar-title rounded navbar-avatar">
                               
                                <i class="material-icons">opacity</i>
                            </span> --}}
                        </span>
        
                        
                    </span>
        
                    <div class="flex"></div>        
                    <!-- Navbar Menu -->
        
                    <div class="nav navbar-nav flex-nowrap d-flex mr-16pt">
      
                        <div class="nav-item dropdown">
                            <a href="#"
                               class="nav-link d-flex align-items-center dropdown-toggle"
                               data-toggle="dropdown"
                               data-caret="false">
        
                                <span class="avatar avatar-sm mr-8pt2">
        
                                    <span class="avatar-title rounded-circle bg-timesheet-color-primary"><i class="material-icons">account_box</i></span>
        
                                </span>
        
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-header"><strong>Account</strong></div>
                                <a class="dropdown-item"
                                   href="{{url('/edit-password')}}">Edit Password</a>                               
                                <a class="dropdown-item"
                                   href="{{url('/logout')}}">Logout</a>
                            </div>
                        </div>
                    </div>
        
                    <!-- // END Navbar Menu -->
        
                </div>