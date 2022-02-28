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
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>

                                    <li class="breadcrumb-item active">

                                        Learing Videos

                                    </li>

                                </ol>

                            </div>
                        </div>

                        {{-- <div class="row"
                             role="tablist">
                            <div class="col-auto">
                                <a href="#"
                                   class="btn btn-outline-secondary">My Courses</a>
                            </div>
                        </div> --}}

                    </div>
                </div>

                <!-- BEFORE Page Content -->

                <!-- // END BEFORE Page Content -->

                <!-- Page Content -->

    <div class="container page__container">
        <div class="page-section">
        {{-- {{$Test_time}} --}}
            <div class="row"> 
                @foreach($sections as $list)
                    <div class="col-md-4 text-center mb-2">                        
                       <a href="{{url('E-Learn/'.$list->id)}}"> 
                           <div class="card">
                              {{-- <img class="card-img-top" src="{{asset('Student/images/1280_work-station-straight-on-view.jpg')}}" alt="video"> --}}
                              <div class="card-body" style="height: 90px;">
                                <h5 class="card-title mb-2">{{$list->test_section_name}}</h5>
                                {{-- <p class="card-text" style="height: 90px;overflow-y: scroll;">{{$list->description}}</p> --}}
                              </div>
                        </div>
                    </a>             
                    </div>                    
                @endforeach     
            </div>
        

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

       
    

        
        
    </body>

</html>