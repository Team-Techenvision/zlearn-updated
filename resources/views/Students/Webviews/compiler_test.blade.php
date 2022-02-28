<!DOCTYPE html>
<html lang="en"
      dir="ltr">

    <head>
      @include('Students.Common.student_head')
      <meta name="csrf-token" content="{{ csrf_token() }}" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/timecircles/1.5.3/TimeCircles.css">
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
            <div class="col-12 mdk-drawer-layout__content page-content m-auto">
        
                <!-- Header -->
        
                <!-- Navbar -->
        
                @include('Students.Common.student_navbar')
        
                <!-- // END Navbar -->
        
                <!-- // END Header -->

                

                <!-- BEFORE Page Content -->

                <!-- // END BEFORE Page Content -->

                <!-- Page Content -->

    <div class="row" id="Q_paper" style="">
           <div class="col-12 text-right ">
                    <a class="btn btn-info mr-5 mt-2 mb-2" href="{{url('studentdashboard')}}">Home</a>
           </div>
       
        <div class="row w-100 col-12 p-0">         
            <div class="page-section1 col-md-12 " style="width: 100%;">            
                <div class="row bg-white shadow m-0" id="main_cont_row">
                    <!-- <div class="col-12 m-auto text-center">
                        <span class="border pagenation_row">{ { $Question->links() } }</span>
                    </div> -->
                     {{-- <div class="example stopwatch d-flex" data-timer="60"></div> --}}
                     
                    {{-- <form class="form-group row col-12" id="test_form" action="{{url('user-submit-test')}}" method="POST"> --}}
                        {{-- <iframe src="https://onecompiler.com/" class="col-12 w-100" style="height:500px;" title="W3Schools Free Online Web Tutorials"  allowfullscreen>
                                
                        </iframe> --}}

                        {{-- <iframe
                        frameBorder="0"
                        height="450px"  src="https://onecompiler.com/embed/" 
                        width="100%"
                        ></iframe> --}}

                       <iframe
                        frameBorder="0"
                        height="450px"  src="https://editor-demo.w3spaces.com/" 
                        width="100%"
                        ></iframe>

                       
                         {{-- <iframe
                            frameBorder="0"
                            height="450px"  src="https://onecompiler.herokuapp.com/embed" 
                            width="100%"
                            ></iframe>  --}}

                       

                        
                </div>
            </div>
            
        </div>  
    </div>

    <!-- // END Page Content -->
{{-- ========================================== --}}
 

{{-- ======================================== --}}

                <!-- Footer -->

                {{-- <!-- @include('Students.Common.student_footertext') --> --}}

                <!-- // END Footer -->

            </div>

            <!-- // END drawer-layout__content -->

            <!-- Drawer left sidebar start -->

            @include('Students.Common.student_sidebar')

            <!-- // END Drawer sidebar ends -->

        </div>

        <!-- // END Drawer Layout -->

        @include('Students.Common.student_footer')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/timecircles/1.5.3/TimeCircles.min.js"></script>
 
       <script src="{{asset('Student/vendor/timer.js')}}"></script> 
        <style>
        .mdk-drawer__content
        {
            display:none!important;
        }
            .pagenation_row ul li{
                border: 1px solid black;
                font-weight: bold;
            }
            .toast
            {
                position: absolute;
                right: 10px;
                top: 5px;
            }
            .btn12 {
                 padding: 0.25rem;
                 border: 0; 
                 border-radius: 3px; 
                 /* background-color: #4F46E5;  */
                 color: #212529; 
                 cursor:pointer; 
                 display: inline-block; 
                 font-size: 2.5rem; 
             }
             #num_lis1 a
             {                 
                  font-size: 110%;
             }
             .Quest_No
             {
                cursor: pointer;
             }
             
             iframe .MuiToolbar-root
             {
                 display: none!important;
             }

             .page-section1 #main_cont_row 
             {

             }
             .jss5
             {
                 display: none!important;
             }
             @media screen and (max-width: 700px) 
             {
                #Q_paper
                {
                    width: 100vw!important;
                }
                .page-section1
                {
                    width: 100vh!important;
                    padding: 0px!important;
                } 
                .page-section1 row 
                {
                    margin: 0px!important;
                    padding: 0px!important;
                } 
             }

             @media screen and (max-width: 600px) 
             {
                #Q_paper
                {
                    padding-right: 0rem!important; 
                    padding-left: 0rem!important;
                }
               
             }
        </style>
        


   




        
    </body>

</html>