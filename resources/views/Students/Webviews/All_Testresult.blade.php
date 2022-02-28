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
                                    <li class="breadcrumb-item"><a href="JavaScript:Void(0);">Dashboard</a></li>

                                    <li class="breadcrumb-item active">

                                        {{$page_title}}

                                    </li>

                                </ol>

                            </div>
                        </div>

                         

                    </div>
                </div>

                <!-- BEFORE Page Content -->

                <!-- // END BEFORE Page Content -->

                <!-- Page Content -->

    <div class="container page__container">
        <div class="page-section">         
            <div class="row"> 
                 @if(count($Test_Result) > 0)
                    @foreach($Test_Result as $list)
                      <div class="col-12 row pt-2 pb-2 bg-white border">
                          <span class="col-8">{{$list->test_name}}</span> <span class="col-4"><a href="JavaScript:Void(0);" data="{{$list->id}}"  class="text-primary this_result" data-toggle="modal" data-target="#exampleModal">Result</a></span>
                      </div>                     
                    @endforeach
                @else
                  <div class="alert alert-warning col-12" role="alert">
                     No Result !!!!!
                  </div>
                @endif         
            </div>
        

        </div>
    </div>

    <!-- // END Page Content -->


                <!-- Footer -->

                <!-- @include('Students.Common.student_footertext') -->

                <!-- // END Footer -->

            </div>

<!-- ========================================================== -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-info" id="exampleModalLabel"></h5>       
          <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="btn btn-danger">&times;</span>
          </button>
        </div>
        <div class="modal-body">                 
            <div class="row text-center h5 bg-info">
                  <div class="col-md-2 p-2 border">
                      <div class="col-12">Questions</div>
                      <div class="col-12 h4 p-2" id="Q_total"></div>
                  </div>
                  <div class="col-md-2 p-2 border">
                      <div class="col-12">Completed</div>
                      <div class="col-12 h4 p-2" id="Compl_total"></div>
                      
                  </div>
                  <div class="col-md-2 p-2 border">
                      <div class="col-12">Unanswered</div>
                      <div class="col-12 h4 p-2" id="U_total"></div>                    
                  </div>
                  <div class="col-md-2 p-2 border">
                      <div class="col-12">Correct</div>
                      <div class="col-12 h4 p-2" id="C_total"></div>                    
                  </div>
                  <div class="col-md-2 p-2 border">
                      <div class="col-12">Wrong</div>
                      <div class="col-12 h4 p-2" id="W_total"></div>                    
                  </div>
                  <div class="col-md-2 p-2 border">
                      <div class="col-12">Score</div>
                      <div class="col-12 h4 p-2" id="T_Score"></div>                   
                  </div>
                   
              </div>
              <div class="modal-footer">
                  <div class="d-flex text-right text-primary"><span>Date:- <small id="date"></small></span></div>   
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
          </div>
    </div>
  </div>
  </div>
  <!-- ========================================================== -->

 



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
                 
                $('.this_result').click(function()
                {
                   // alert($(this).attr('data'));
                    let result_id = $(this).attr('data');

                    $.ajax({
                        url: "{{ url('get-result')}}",
                        method: 'post',
                        data: {
                            "_token": "{{ csrf_token() }}",
                            'result_ID': result_id
                        },
                        success: function(response)
                        { 
                           // alert(response);
                           console.log(response);
                           //console.log(response['student_result']['0']['id']);
                           $('#Q_total').text(response['student_result']['0']['total_question']);
                           $('#Compl_total').text(response['student_result']['0']['completed']);
                           $('#U_total').text(response['student_result']['0']['un_answered']);
                           $('#C_total').text(response['student_result']['0']['correct']);
                           $('#W_total').text(response['student_result']['0']['wrong']);
                           $('#T_Score').text(response['student_result']['0']['total_score']);
                           $('#exampleModalLabel').text(response['student_result']['0']['test_name']);
                           $('#date').text(response['student_result']['0']['created_at']);
                        } 
                    });
                });


            });
        </script>    
    </body>

</html>