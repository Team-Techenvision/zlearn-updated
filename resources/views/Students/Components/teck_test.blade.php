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
                                <!--<h2 class="mb-0">Dashboard</h2>-->

                                <ol class="breadcrumb p-0 m-0">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>

                                    <li class="breadcrumb-item active">
                                        &nbsp;{{$Test_time->test_name}}
                                        {{-- <!-- Dashboard{{$page_title}}  --> --}}
                                       {{-- <!--  {{$Question->question_title}} --> --}}

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

    <div class="container page__container ml-0 pl-0" style="">
            <div class="row">
                <div class="block btn12 col-12 col-12 text-center m-auto"></div>
            </div>
        <div class="alert_div">
            <div class="alert alert-danger" role="alert">
                Answer Submited !!
            </div>
            <div class="alert alert-success" role="alert">
                Answer Not Submited !!
            </div>
        </div>    
        <div class="page-section">            
            <div class="row bg-white p-3 shadow m-2">
                <div class="col-12 m-auto text-center">
                    <span class="border pagenation_row">{{ $Question->links() }}</span>
                </div>
                 {{-- <div class="example stopwatch d-flex" data-timer="60"></div> --}}
                 
                {{-- <form class="form-group row col-12" id="test_form" action="{{url('user-submit-test')}}" method="POST"> --}}
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
            <?php  $Q_option = DB::table('answers')->where('question_id',$question->id)->get(); 
                    $i=1;
                foreach ($Q_option as  $value) 
                { ?>
                   <div class="col-md-6 h5">
                      <input type="radio"  name="option" value="{{$i++}}">
                        <label>{{$value->answer}}</label><br>
                   </div>

               <?php }
                // dd($Question);
            ?>
                 @endforeach
               
                <div class="col-md-10 text-center m-auto pt-3">
                    <button class="btn btn-info h3" id="submit_testQ">Next</button>
                </div>
                </form>
            </div>

        </div>
    </div>

    <!-- // END Page Content -->
{{-- ========================================== --}}
{{-- <div class="toast bg-success">
    <div class="toast-header">
      <strong class="mr-auto text-primary">Message</strong>
      <small class="text-muted">5 mins ago</small>
      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
    </div>
    <div class="toast-body">
        Answer Submited !!
    </div>
  </div>

  <div class="toast1 bg-danger" >
    <div class="toast-header">
      <strong class="mr-auto text-primary">Message</strong>
      <small class="text-muted">5 mins ago</small>
      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
    </div>
    <div class="toast-body">
        Answer Not Submited !!!
    </div>
  </div> --}}

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
        {{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/timecircles/1.5.3/TimeCircles.min.js"></script> --}}
 
        <script src="{{asset('Student/vendor/timer.js')}}"></script>
        <style>
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
                 font-size: 2.5rem; }
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
        {{-- <script>
    $(document).ready(function()
    {  
     // $("#count-down").TimeCircles();
		//$("#count-down").TimeCircles().end().fadeOut();	
		
        $(".example.stopwatch").TimeCircles();
 
    });
</script> --}}

<script>
    let hr = {{$Test_time->hours}};
    let min = {{$Test_time->minute}};
     //set_timer($('.block'), [0, hr,min, 0], 
         set_timer($('.block'), [0, 0,1, 0], 
          function(block) {
            block.html('<h1>time is over</h1>');
            window.clearTimeout();
            sessionStorage.removeItem("timer_start_");
             $(location).attr('href',"{{ url('studentdashboard')}}");
        });
    </script> 
        
    </body>

</html>