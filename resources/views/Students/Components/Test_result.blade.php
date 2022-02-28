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
                                        &nbsp;{{$page_title}}
                                        {{-- Dashboard --}}

                                    </li>

                                </ol>

                            </div>
                        </div>

                        {{-- <div class="row"
                             role="tablist">
                            <div class="col-auto">
                                <a href="student-my-courses.html"
                                   class="btn btn-outline-secondary">My Courses</a>
                            </div>
                        </div> --}}

                    </div>
                </div>

                <!-- BEFORE Page Content -->

                <!-- // END BEFORE Page Content -->

                <!-- Page Content -->

    <div class="container page__container bg-white mt-2">
        <div class="page-section ">
            <div class="row text-center h5">
                <div class="col-md-2 p-2 border">
                    <div class="col-12">Questions</div>
                    <div class="col-12 h4 p-2"><?= count($Q_total); ?></div>
                </div>
                <div class="col-md-2 p-2 border">
                    <div class="col-12">Completed</div>
                    <div class="col-12 h4 p-2"><?= count($Compl_total); ?></div>
                    
                </div>
                <div class="col-md-2 p-2 border">
                    <div class="col-12">Unanswered</div>
                    <div class="col-12 h4 p-2"><?= count($U_total);?></div>                    
                </div>
                <div class="col-md-2 p-2 border">
                    <div class="col-12">Correct</div>
                    <div class="col-12 h4 p-2"><?= count($C_total);?></div>                    
                </div>
                <div class="col-md-2 p-2 border">
                    <div class="col-12">Wrong</div>
                    <div class="col-12 h4 p-2"><?= count($W_total); ?></div>                    
                </div>
                <div class="col-md-2 p-2 border">
                    <div class="col-12"> Total Score</div>
                    <div class="col-12 h4 p-2"><?= count($C_total) * 2 ;?></div>                   
                </div>

                <div class="col-12 mt-3">
                    <div class="alert alert-success h3" role="alert">
                       {{$Test_time->test_name}} Submited !!!!
                    </div>
                </div>
                   @foreach ($W_total as $item)
                    <?php    
                            $Question = DB::table('questions')->where('id',$item->question_id)->first();
                    ?>
                        <div class="col-md-12 row">
                            @if($Question->question)
                                <label class="h5"><span class="h3 mr-2">Q.</span> {{$Question->question}}</label>
                            @endif
                        </div>
                        <div class="col-md-12 row">
                            @if($Question->question_image)
                                <img src="{{url($Question->question_image)}}" class="img-thumbnail">
                            @endif
                        </div>
                        <?php  $Q_option = DB::table('answers')->where('question_id',$Question->id)->get(); 
                            $i=1;
                        foreach ($Q_option as  $value) 
                        { ?>
                        @if($Question->correct_answer == $i)
                        <div class="col-md-6 h5 row">                            
                            {{-- <input type="radio"  name="option{{$i}}" value="{{$i++}}" checked> --}}
                                <label>Correct Answer :- <span class="text-info">{{$value->answer}}</span></label>
                        </div>
                       @endif
                    <?php $i++; }
                    // dd($Question);
                             ?>

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