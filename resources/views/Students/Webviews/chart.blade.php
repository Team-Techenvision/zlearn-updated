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
                 
                <div id="myChart" style="width:100%; max-width:600px; height:500px;">
                   
                </div>
                         
            </div>
        

        </div>
    </div>

    <!-- // END Page Content -->


                <!-- Footer -->

                <!-- @include('Students.Common.student_footertext') -->

                <!-- // END Footer -->

            </div>

<!-- ========================================================== -->

  <!-- ========================================================== -->

 



            <!-- // END drawer-layout__content -->

            <!-- Drawer left sidebar start -->

            @include('Students.Common.student_sidebar')

            <!-- // END Drawer sidebar ends -->

        </div>

        <!-- // END Drawer Layout -->

        @include('Students.Common.student_footer')

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

        <script>
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);
            
            function drawChart() {
            var data = google.visualization.arrayToDataTable([
              ['Contry', 'Mhl'],
              ['Quantitative Ability',54.8],
              ['Verbal Ability',48.6],
              ['Programming',44.4],
              ['Coding',23.9],
              ['Masths',14.5]
            ]);
            
            var options = {
              title:'Student Result',
              is3D:true
            };
            
            var chart = new google.visualization.PieChart(document.getElementById('myChart'));
              chart.draw(data, options);
            }
            </script>
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