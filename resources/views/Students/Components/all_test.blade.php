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

                                        Dashboard

                                    </li>

                                </ol>

                            </div>
                        </div>

                        <div class="row"
                             role="tablist">
                            <div class="col-auto">
                                <a href="student-my-courses.html"
                                   class="btn btn-outline-secondary">My Courses</a>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- BEFORE Page Content -->

                <!-- // END BEFORE Page Content -->

                <!-- Page Content -->

    <div class="container page__container">
        <div class="page-section">
        {{-- {{$Test_time}} --}}
            <div class="row"> 
                @foreach($Test_time as $list)
                    <div class="col-md-4 text-center mb-2" style="height:400px">
                        <?php $test_status = DB::table('user_tests')->where('test_id',$list->id)->where('user_id', $user->id)->first(); ?>
                        @if($test_status)
                        {{-- <!-- <a href="javascript:void(0)" class="w-100 test_done" > --> --}}
                            <form action="javascript:void(0)" method="post" class="w-100"> 
                        @else 
                        <form action="{{url('Start-Test')}}" method="post" class="w-100">
                        {{-- <a href="{{url('Start-Test')}}/{{$list->id}}" class="w-100"> --}}
                        @endif 
                        @csrf
                           <div class="card" style="height: 100%;">
                              <img class="card-img-top" src="{{asset('Student/images/1280_work-station-straight-on-view.jpg')}}" alt="Card image cap">
                              <div class="card-body">
                                <h5 class="card-title">{{$list->test_name}}</h5>
                                <input type="hidden" name="test_id" value="{{$list->id}}" class="form-control" >
                                <p class="card-text" style="height: 50px;overflow: hidden;">{{$list->description}}</p>
                                 <span class="d-flex text-center"><span class="m-auto">Date : {{$list->exam_date}} &nbsp;&nbsp; {{$list->exam_time}}</span> </span>
                                 <span class="d-flex text-center"> <span class="m-auto">Time : {{$list->hours}} hr {{$list->minute}} min </span></span>
                                @if($test_status)
                                 <span class="btn btn-primary test_done mt-3">Test Completed</span>
                                @else
                                <button class="btn btn-primary mt-3">Start Test</button>
                                @endif  
                              </div>
                            </div>
                        </form>                         
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
        <script>
            $(document).ready(function()
            {
                $('.test_done').click(function()
                {
                    alert("This Test Already Completed !!!");
                });
            });
        </script>    
    </body>

</html>