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

                <div class="pt-35pt bg-primary">
                    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
                        {{-- <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">

                            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                                <h2 class="mb-0">Dashboard</h2>

                                <ol class="breadcrumb p-0 m-0">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>

                                    <li class="breadcrumb-item active">

                                        Dashboard

                                    </li>

                                </ol>

                            </div>
                        </div> --}}

                        {{-- <div class="row"
                             role="tablist">
                            <div class="col-auto">
                                <a href="student-my-courses.html"
                                   class="btn btn-outline-secondary">My Courses</a>
                            </div>
                        </div> --}}
                        <div class="hero py-64pt text-center text-sm-left">
                            <div class="container page__container">
                                                               
                                   <table class="table table-bordered text-white table-sm text-center">
                                       <tr>
                                          <td>Test Name</td>
                                          <td class="bg-warning">{{$test->test_name}}</td>
                                          <td>Total Questions</td>
                                          <td class="bg-warning">{{$test->total_question}}</td>
                                           <td>Total Time</td>
                                          <td class="bg-warning">{{$test->hours}}:{{$test->minute}}</td>
                                       </tr>
                                   </table>
                                    <table class="table table-bordered text-white table-sm text-center">
                                       <tr>
                                          <td class="tb_col">Section Name</td>
                                          <td class="">No. of Questions</td>
                                          <td class="tb_col">Time limit</td>
                                          <td class="">Marks per Question</td>
                                           <td class="tb_col">Negative Marking</td>                                  
                                       </tr>
                                       @foreach($test_section as $list)
                                        <tr>
                                          <td class="tb_col">{{$list->section_name}}</td>
                                          <td class="">{{$list->section_question}}</td>
                                          <td class="tb_col">{{$list->section_time}} Min</td>
                                          <td class="">{{$test->mark_per_question}}</td>
                                           <td class="tb_col">0/0</td>                                  
                                       </tr>
                                       @endforeach                                       
                                        
                                   </table>
                                   <div class="row text-center">
                                       <div class="col-md-6">
                                           <p class="text-white h4">General Directions:</p>
                                           {{-- {{$test->test_instruction}} --}}
                                           
                                           <ul class="text-left text-white pr-2" style="font-size: 14px;">
                                                 {{-- <li> --}}
                                                     <?php echo nl2br($test->description); ?>
                                                    {{-- </li>     --}}
                                           </ul>
                                       </div>
                                       <div class="col-md-6">
                                            <p class="text-white h4">Test Instructions:</p>
                                           {{-- {{$test->test_instruction}} --}}
                                           
                                           <ul class="text-left text-white pr-2" style="font-size: 14px;">
                                                {{-- <li> Total duration of examination is 100 minutes. 
                                                </li>
                                                <li> Your clock will be set at the server. The countdown timer at the top right corner of screen will display the remaining time available for you to complete the examination. When the timer reaches zero, the examination will end by itself. You need not terminate the examination or submit your paper.</li> 
                                               <li>You are not allowed to use any calculator and any other computing machine.</li>
                                               <li>Click on the question number in the Question Palette to go to that question directly.</li>
                                               <li> Select an answer for a multiple choice type question by clicking on the bubble placed before the 4 choices in the form of radio buttons (o).</li>
                                               <li> Click on Save & Next to save your answer for the current question and then go to the next question. </li>     --}}
                                               {{-- <li> --}}
                                                   <?php echo nl2br($test->test_instruction); ?>
                                                {{-- {{$test->test_instruction}} --}}
                                            {{-- </li> --}}
                                           </ul>
                                       </div>
                                       <div class="col-12 text-center">
                                         <a href="{{url('studentdashboard')}}" class="btn btn-outline-secondary btn-lg">Cancel</a>
                                        <a href="{{url('Start-Test-Demo')}}/{{$test_id}}" class="btn btn-outline-warning btn-lg">Start >></a>
                                           
                                       </div>
                                   </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- BEFORE Page Content -->

                <!-- // END BEFORE Page Content -->

                <!-- Page Content -->

    <div class="container page__container">
        <div class="page-section">
        
        

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

        <style>
            .tb_col
            {
                background-color: #e4a93c!important;
            }
        </style>
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