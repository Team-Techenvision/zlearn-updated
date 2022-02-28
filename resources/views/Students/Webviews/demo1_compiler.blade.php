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

                {{-- <div class="pt-32">
                    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
                        <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">

                            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                                <!--<h2 class="mb-0">Dashboard</h2>-->

                                <ol class="breadcrumb p-0 m-0">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>

                                    <li class="breadcrumb-item active">
                                        &nbsp;{{$Test_time->test_name}}
                                        {{-- <!-- Dashboard{{$page_title}}  --> --}}
                                       {{-- <!--  {{$Question->question_title}} --> - -}}

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
                </div> --}}

                <!-- BEFORE Page Content -->

                <!-- // END BEFORE Page Content -->

                <!-- Page Content -->

    <div class="row" id="Q_paper" style="">
            <div class="row">
                <div class="btn12 col-12 col-12 text-center m-auto">&nbsp;Time:- <span class="block"><span></div>
            </div>
        <div class="alert_div">
            <div class="alert alert-danger" role="alert">
                Answer Submited !!
            </div>
            <div class="alert alert-success" role="alert">
                Answer Not Submited !!
            </div>
        </div> 
        <div class="row w-100 col-12">         
            <div class="page-section1 col-md-9 " style="width: 80vw;">            
                <div class="row bg-white p-3 shadow m-2" id="main_cont_row">
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
            <div class="col-md-3 p-0 m-0">
                {{-- <div class="col-md-12 m-auto" id="num_list">
                    <div class="col-12 m-auto text-center">
                        <span class="border pagenation_row">{{ $Question->links() }}</span>
                    </div>
                    <form class="form-group row col-12" id="test_form" action="javascript:void(0)" method="POST">
                        @csrf
                        @foreach ($Question as $question)                        
                            <input type="hidden" value="{{count($count_Que)}}" id="total_Q">
                        <div class="col-12 m-auto pb-5">
                            @if($question->question)
                                <label class="h5"><span class="h3 mr-2">Q.</span> {{$question->question}}</label>
                            @endif
                            @if($question->question_image)
                                <img src="{{url($question->question_image)}}" class="img-thumbnail">
                            @endif
                        </div>
                        <input type="hidden" name="test_id" value="{{$Test_time->id}}" >
                        <input type="hidden" name="question_id" value="{{$question->id}}">
                    {{-- < ?php  $Q_option = DB::table('answers')->where('question_id',$question->id)->get(); 
                        $i=1;
                    foreach ($Q_option as  $value) 
                    { ?> --}}
                       {{-- <div class="col-md-12">
                          <input type="radio"  name="option" value="{{$i++}}">
                            <label>{{$value->answer}}</label><br>
                       </div> --}}

                   {{-- < ?php }
                    //  dd($Question);
                    ?>
                     @endforeach
                   
                    <div class="col-md-10 text-center m-auto pt-3">
                        <button class="btn btn-info h3" id="submit_testQ">Next</button>
                    </div> --}}
                    {{-- </form> --}}
                    {{-- < ?php $i=1; ? >
                    @foreach($count_Que as $list)
                    {{-- <span class="col-3 rounded rounded-circle bg-info p-4">{{$list->id}}</span> --}}
                    {{-- {{$list->id}} - -}}
                    <span data="{{$i}}" class="col-2 bg-primary text-white Quest_No mb-2">{{$i++}}</span>
                    @endforeach --}}
                    <div id="myDIV">                        
                        <div class="alert alert-success text-sucess" role="alert">
                            Test Case Successfull
                          </div>
                      
                        <div class="alert alert-danger text-false" role="alert">
                            Test False
                          </div>
                        <?php $i=1; ?>
                        <span class="d-flex row"><h5>Q. &nbsp; {{$Question->question}}</h5></span>
                        <br/>
                        @foreach($test_case as $list)

                        <span class="d-flex row"><span>Test Case {{$i++}} :- </span></span>
                        <br/>
                        <span class="d-flex"><h5>Input :- {{$list->input_test_case}}</h5></span>
                        <span class="d-flex"><h5>Output :- {{$list->output_test_case}}</h5></span>
                        <br/>
                        <button  class="btn btn-outline-danger btn-lx submit_programm" type="button" id="" style="bottom: 25px;" value="{{$list->output_test_case}}">submit Program</button>
                        @endforeach
                    </div>
                    <div class=" text-left" style="position: relative;margin-top: 10%;">
                        <a href="{{ url('studentdashboard')}}" class="btn btn-outline-danger btn-lx" style="bottom: 25px;">Finish Test</a>
                        {{-- <button  class="btn btn-outline-danger btn-lx" type="button" id="submit_programm3" style="bottom: 25px;">submit Program</button> --}}

                    </div>
                    
                {{-- </div>  --}}
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
        <script>
            $(document).ready(function()
            {
                $('.sidebar, .alert').hide();
                // $('.alert').hide();
                $('#submit_testQ').click(function()
                {
                    $.ajax({
                    url: "{{ url('user-submit-test')}}",
                    method: 'post',
                    data: $('#test_form').serialize(),
                    success: function(response)
                    {
                        if(response)
                        {
                            let searchParams = new URLSearchParams(window.location.search);
                            //alert(searchParams.get('page'));
                            let cur_page = searchParams.get('page');
                            if(!cur_page)
                            {
                                cur_page = 1;
                            }
                            //$('.alert-success').show();
                            //$('.alert_div').hide(2000);
                            cur_page = parseInt(cur_page);
                            if($('#total_Q').val() > cur_page)
                            {
                                cur_page = cur_page + 1;
                                let url1 = "{{ url('Test')}}?page="+cur_page;
                                //alert(url1);
                                $(location).attr('href', url1);
                            }
                            else
                            {
                                $(location).attr('href',"{{ url('Test-Result')}}");
                            }    
                        }
                        else
                        {
                            //$('.alert-danger').show();
                           // $('.alert_div').hide(2000);
                            //alert("Not Submited !!!");
                        }
                        //------------------------
                            // $('#send_form').html('Submit');
                            // $('#res_message').show();
                            // $('#res_message').html(response.msg);
                            // $('#msg_div').removeClass('d-none');

                            // document.getElementById("contact_us").reset(); 
                            // setTimeout(function()
                            // {
                            //     $('#res_message').hide();
                            //     $('#msg_div').hide();
                            // },10000);
                        //--------------------------
                    }});
                });
            });
        </script>
        <!-- ======================================= -->
        <script>
            $(document).ready(function()
            {
            
               
                $('.Quest_No').click(function()
                {
                    let cur_page = $(this).attr('data'); 
                    let searchParams = new URLSearchParams(window.location.search);
                    let url1 = "{{ url('Test')}}?page="+cur_page;
                    //alert(url1);
                    $(location).attr('href', url1);
                               
                });
                 
            });
        </script>
        <!-- ============================================= -->
        {{-- <script>
    $(document).ready(function()
    {  
     // $("#count-down").TimeCircles();
		//$("#count-down").TimeCircles().end().fadeOut();	
		
        $(".example.stopwatch").TimeCircles();
 
    });
</script> --}}

<script>
    
    // let hr = 0;
    // let min = 30;
    //  set_timer($('.block'), [0, hr,min, 0], 
    //      //set_timer($('.block'), [0, 0,1, 0], 
    //       function(block) {
    //         block.html('<h1>time is over</h1>');
    //         window.clearTimeout();

    //         sessionStorage.removeItem("timer_start_");
    //          $(location).attr('href',"{{ url('studentdashboard')}}");
    //     });
    </script> 

<script>
    window.onmessage = function (e) {
        if (e.data && e.data.language) {
            console.log(e.data) // store e.data on your database/ handle it
            // alert('hi');
            // var code = JSON.stringify(e.data); 
            const myJSON = JSON.stringify(e.data);
            localStorage.setItem('compiler',myJSON);
            // localStorage.setItem('mycode',code);

        }
    };
</script>


    <script>
        $(document).ready(function()
        {
            $(".text-sucess").hide();
            $(".text-false").hide();
            $('.submit_programm').click(function(e){
                var expected_output =  $(this).val();
                var compiler = localStorage.getItem('compiler');
                    //    alert(compiler);
                        $.ajax({
                            url: "{{ url('save-student-program')}}",
                            method: 'post',
                            data: {
                                "_token": "{{ csrf_token() }}",
                                'programm' : compiler
                                },
                            success: function(data)
                            {
                                // console.log(data);
                               var result = JSON.parse(data);
                                console.log(result.stdout);
                               if(result.stdout == expected_output){
                                $(".text-sucess").show();
                                $(".text-false").hide();
                               }else{
                                $(".text-sucess").hide();
                                $(".text-false").show();
                               }
                               
                            }
                            });
                    
                
            });
        });
    </script>




        
    </body>

</html>