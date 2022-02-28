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

                <div class="pt-10pt">
                    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
                       <!--  <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">

                            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                                <h2 class="mb-0">Dashboard</h2>

                                <ol class="breadcrumb p-0 m-0">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>

                                    <li class="breadcrumb-item active">

                                        Dashboard

                                    </li>

                                </ol>

                            </div>
                        </div> -->

                         <!-- =================================================== -->
                <div class="bg-primary pb-lg-64pt py-32pt w-100">
                    <div class="container page__container">
                        <nav class="course-nav">
                            <a data-toggle="tooltip"
                               data-placement="bottom"
                               data-title="Getting Started with Angular: Introduction"
                               href=""><span class="material-icons">lock</span></a>
                            <a data-toggle="tooltip"
                               data-placement="bottom"
                               data-title="Getting Started with Angular: Introduction to TypeScript"
                               href=""><span class="material-icons text-primary">account_circle</span></a>
                            <a data-toggle="tooltip"
                               data-placement="bottom"
                               data-title="Getting Started with Angular: Comparing Angular to AngularJS"
                               href=""><span class="material-icons">lock</span></a>
                            <a data-toggle="tooltip"
                               data-placement="bottom"
                               data-title="Getting Started with Angular: Lesson 4"
                               href=""><span class="material-icons">lock</span></a>
                        </nav>
                        <div class="js-player embed-responsive embed-responsive-16by9 mb-32pt">
                            <div class="player embed-responsive-item">
                                <div class="player__content">
                                    <div class="player__image"
                                         style="--player-image: url(../../public/images/illustration/player.svg)"></div>
                                    <a href=""
                                       class="player__play bg-primary">
                                        <span class="material-icons">play_arrow</span>
                                    </a>
                                </div>
                                <div class="player__embed d-none">
                                    <iframe class="embed-responsive-item"
                                            src="https://player.vimeo.com/video/97243285?title=0&amp;byline=0&amp;portrait=0"
                                            allowfullscreen=""></iframe>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-wrap align-items-end mb-16pt">
                            <h1 class="text-white flex m-0">Introduction to e-Learn</h1>
                            <p class="h1 text-white-50 font-weight-light m-0">50:13</p>
                        </div>

                        <p class="hero__lead measure-hero-lead text-white-50 mb-24pt">JavaScript is now used to power backends, create hybrid mobile applications, architect cloud solutions, design neural networks and even control robots. Enter TypeScript: a superset of JavaScript for scalable, secure, performant and feature-rich applications.</p>

                        <div class="d-flex flex-column flex-sm-row align-items-center justify-content-start">
                            <!-- <a href="lesson.html"
                               class="btn btn-outline-white mb-16pt mb-sm-0 mr-sm-16pt">Watch trailer <i class="material-icons icon--right">play_circle_outline</i></a>
                            <a href="pricing.html"
                               class="btn btn-white">Get started</a> -->
                        </div>
                    </div>
                </div>

                <!-- =============================== -->
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
        
    </body>

</html>