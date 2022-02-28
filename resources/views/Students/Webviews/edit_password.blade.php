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
                                    <li class="breadcrumb-item"><a href="#">Student</a></li>
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
                         <form class="form-group col-md-10 m-auto" action="{{url('update-password')}}" method="POST" enctype="multipart/form-data">
                         @csrf                            
                            <div class="form-group row ">
                                <label class="form-label col-md-3 p-2">New Password:</label>
                                <input id="" type="text" class="form-control col-md-9" placeholder="Enter New Password" name="password" required>
                            </div>

                            <div class="form-group row ">
                                <label class="form-label col-md-3 p-2">Confirm Password:</label>
                                <input id="" type="text" class="form-control col-md-9" placeholder="Enter Confirm Password" name="c_password" required>
                            </div>
                         
                            <div class="form-group row">
                                <div class="col-10 m-auto text-right pt-3">
                                    <button type="reset" name="reset" class="btn btn-secondary mr-2">Reset</button>
                                    <button name="submit" class="btn btn-primary">Update</button>
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
    </body>
</html>