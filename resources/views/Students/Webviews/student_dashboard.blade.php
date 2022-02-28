<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    @include('Students.Common.student_head')
</head>

<body class="layout-app " style="background:#b2afaf66!important;">

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

    <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
        <div class="mdk-drawer-layout__content page-content">

            <!-- Header -->

            <!-- Navbar -->

            @include('Students.Common.student_navbar')

            <!-- // END Navbar -->

            <!-- // END Header -->

            <div class="">
                <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left "
                    style="padding-left:0px!important;padding-right:0px!important;">
                    <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">

                        <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                            {{-- <h2 class="mb-0">Dashboard</h2> --}}


                        </div>
                    </div>



                </div>
            </div>

            <!-- BEFORE Page Content -->

            <!-- // END BEFORE Page Content -->

            <!-- Page Content -->

            <div class="container page__container " style="padding-left:0px!important;padding-right:0px!important;">
                <div class="page-section pt-0">
                    <div class="row">
                        <div class="col-md-12 mb-2">
                            @php
                                $user = Auth::user();
                            @endphp
                            <div class="" role="alert">
                                <h5 class="pb-0" style="text-transform: none"> Hi <strong
                                        class="text-orange">@php echo $user->name; @endphp </strong>, how do you like to upskill
                                    today? </h5>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <a href="{{url('View-All-Test')}}" class="btn btn-dark"> Take Test </a>
                                    <a href="{{url('learing_video')}}" class="btn btn-dark"> Learn Online Video </a>
                                  </div>
                                <div class="col-md-6">
                                  
                              </div>
                            </div>
                            {{-- <div class="progress mb-3" style="height: 8px;">
                  <div class="progress-bar" role="progressbar" style="width: 100%;background: #c2c4be;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"> 
                    
                  </div>
                </div> --}}
                        </div>
                        <div class="row col-12 text-center p-0 m-auto">
                            <div class="col-md-10 row m-auto">
                                <div class="col-12 row pt-4 pb-4 border shadow"
                                    style="border-radius: 1.25rem!important;background:#f3f3f3!important;">
                                    <div class="col-12 text-center pb-3">
                                        <span class="h4">Performance Analysis (Sectionwise)</span>
                                    </div>

                                    <div class="col-12 col-md-4 text-center mb-3">
                                        {{-- <img  src="{{asset('images/dashboard_scrore.png')}}" alt="" class="img-thumbnail"> --}}
                                        <div class="gauge-wrapper">
                                            <div class="gauge four <?php echo $quantitative_arrow; ?>">
                                                <div class="slice-colors">
                                                    <div class="st slice-item"></div>
                                                    <div class="st slice-item"></div>
                                                    <div class="st slice-item"></div>
                                                    <div class="st slice-item"></div>
                                                </div>
                                                <div class="needle"></div>
                                                <div class="gauge-center">
                                                    <div class="label">Quantitative Ability</div>
                                                    <div class="number">@php echo $quantitative_text; @endphp</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 text-center mb-3">
                                        {{-- <img  src="{{asset('images/dashboard_scrore.png')}}" alt="" class="img-thumbnail"> --}}
                                        <div class="gauge-wrapper">
                                            <div class="gauge four <?php echo $verbal_arrow; ?>">
                                                <div class="slice-colors">
                                                    <div class="st slice-item"></div>
                                                    <div class="st slice-item"></div>
                                                    <div class="st slice-item"></div>
                                                    <div class="st slice-item"></div>
                                                </div>
                                                <div class="needle"></div>
                                                <div class="gauge-center">
                                                    <div class="label">Verbal Ability</div>
                                                    <div class="number">@php echo $verbal_text; @endphp</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-4 text-center mb-3">
                                        {{-- <img  src="{{asset('images/dashboard_scrore.png')}}" alt="" class="img-thumbnail"> --}}
                                        <div class="gauge-wrapper">
                                            <div class="gauge four <?php echo $reasoning_arrow; ?>">
                                                <div class="slice-colors">
                                                    <div class="st slice-item"></div>
                                                    <div class="st slice-item"></div>
                                                    <div class="st slice-item"></div>
                                                    <div class="st slice-item"></div>
                                                </div>
                                                <div class="needle"></div>
                                                <div class="gauge-center">
                                                    <div class="label">Coading</div>
                                                    <div class="number">@php echo $reasoning_text; @endphp</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="col-3 text-center mb-3">
                        {{-- <img src="{{asset('images/dashboard_scrore.png')}}" alt="" class="img-thumbnail"> --
                        <div class="gauge-wrapper">
                          <div class="gauge four rischio3">
                            <div class="slice-colors">
                              <div class="st slice-item"></div>
                              <div class="st slice-item"></div>
                              <div class="st slice-item"></div>
                              <div class="st slice-item"></div>
                            </div>
                            <div class="needle"></div>
                            <div class="gauge-center">
                              <div class="label">RISK</div>
                              <div class="number">HIGH</div>
                            </div>    
                          </div>
                        </div>
                      </div> --}}
                                </div>
                                <!-- ====================================== -->
                                <div class="col-12 row pt-2 pb-2 border shadow mt-2 mb-2"
                                    style="border-radius: 1.25rem!important;background:#f3f3f3!important;">
                                    <div class="col-12 m-auto text-center p-0">
                                        <span class="col-12 text-center pl-0 pr-0 pb-0 pt-2">
                                            <h3>Chapter Completion</h3>
                                        </span>
                                    </div>
                                    <div class="col-12 m-auto p-0">
                                        <!--  <canvas id="horizontalBar"></canvas> -->

                                        <div id="chart" class="w-100" style=""></div>



                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 row mt-o"
                                style="border-radius: 1.25rem!important;background:#f3f3f3!important;">
                                <div class="col-12 mt-o">
                                    <div class="col-12 mt-o text-center p-0">
                                        <span class="col-12 text-center">
                                            <h3>ZSCORE</h3>
                                        </span>
                                    </div>
                                    <div class="col-12 mt-o text-center p-0">
                                        <canvas id="doughnutChart"></canvas>
                                        {{-- <div id="myChart" style="width:100%; max-width:600px; height:500px;"> --}}
                                    </div>
                                    <div class="col-12 mt-o text-center p-0 pb-2">
                                        <span class="col-12 text-center p-0">
                                            <h3>29%</h3>
                                        </span>
                                        <span class="col-12 d-flex text-center p-0"><span
                                                class="mt-o">Academic Scores - 10%/30% </span></span>
                                        <span class="col-12 d-flex text-center p-0"><span class="mt-o">Test –
                                                10%/30%</span></span>
                                        <span class="col-12 d-flex text-center p-0"><span
                                                class="mt-o">Internship – 9%/40%</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        {{-- <div class="col-sm-6">
                <a href="{{url('resume-page-one')}}">
                    <div class="card text-center">
                      <div class="card-body text-center">
                        <span  class="h1 text-primary"><i class="fa fa-graduation-cap" aria-hidden="true"></i></span>
                        <p class="h3 text-uppercase">Resume</p>
                        <hr class="style1 w-75 m-auto bg-primary">                   
                      </div>
                    </div>
                </a>
              </div> --}}
                        {{-- <div class="col-sm-6">
                <a href="{{url('E-Learn')}}">
                    <div class="card text-center">
                      <div class="card-body text-center">
                        <span  class="h1 text-danger"><i class="fa fa-play-circle" aria-hidden="true"></i></span>
                        <p class="h3">LEARNING VIDEOS & CONTENT</p>
                        <hr class="style1 w-75 m-auto bg-danger">                   
                      </div>
                    </div>
                </a>
              </div> --}}
                        {{-- <div class="col-sm-6">
                <a href="JavaScript:Void(0);">
                    <div class="card text-center">
                      <div class="card-body text-center">
                        <span  class="h1 text-warning"><i class="fas fa-clipboard-list"></i></span>
                        <p class="h3 text-uppercase">TEST RESULTS & ANAYLYSIS</p>
                        <hr class="style1 w-75 m-auto bg-warning">                   
                      </div>
                    </div>
                </a>
              </div> --}}

                        {{-- <div class="col-sm-6">
                <a href="{{url('View-All-Test')}}">
                    <div class="card text-center">
                      <div class="card-body text-center">
                        <span  class="h1 text-success"><i class="fa fa-university" aria-hidden="true"></i></span>
                        <p class="h3 text-uppercase">CLASS ROOM TRAINING </p>
                        <hr class="style1 w-75 m-auto bg-success">                   
                      </div>
                    </div>
                </a>
              </div> --}}
                    </div>

                </div>
            </div>

            <!-- // END Page Content -->

            <!-- Large modal -->
            {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large
                modal</button>

            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        ...
                    </div>
                </div>
            </div> --}}


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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.min.js"
        integrity="sha512-GMGzUEevhWh8Tc/njS0bDpwgxdCJLQBWG3Z2Ct+JGOpVnEmjvNx6ts4v6A2XJf1HOrtOsfhv3hBKpK9kE5z8AQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('Student/js/chart_br.js') }}"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <style type="text/css">
        .apexcharts-menu-icon {
            display: none !important;
        }

        @media screen and (max-width: 600px) {
            .page-section {
                padding-left: 10px !important;

            }
        }

    </style>
    <script type="text/javascript">
        $(document).ready(function() {
            var options = {
                series: [{
                    name: 'Completed Chapters',
                    data: [44, 55, 41, 37],
                    color: '#393a3e'
                }, {
                    name: 'Total Chapters',
                    data: [25, 12, 19, 32],
                    color: '#ef6548'
                }],
                chart: {
                    type: 'bar',
                    height: 200,
                    stacked: true,
                },
                plotOptions: {
                    bar: {
                        horizontal: true,
                    },
                },
                stroke: {
                    width: 1,
                    colors: ['#fff']
                },
                // title: {
                //   text: 'Fiction Books Sales'
                // },
                xaxis: {
                    categories: ["Technical", "Verbal", "Logical", "Quantitative"],
                    labels: {
                        formatter: function(val) {
                            return val
                        }
                    }
                },
                yaxis: {
                    title: {
                        text: undefined
                    },
                },
                tooltip: {
                    y: {
                        formatter: function(val) {
                            return val
                        }
                    }
                },
                fill: {
                    opacity: 1
                },
                legend: {
                    position: 'top',
                    horizontalAlign: 'left',
                    offsetX: 10
                }
            };

            var chart = new ApexCharts(document.querySelector("#chart"), options);
            chart.render();

        });
    </script>
    {{-- <script>
        $(document).ready(function()
          {
            var options = {
          series: [44, 55, 41],
          chart: {
          width: 300,
          type: 'donut',
        },
        plotOptions: {
          pie: {
            startAngle: -90,
            endAngle: 270
          }
        },
        dataLabels: {
          enabled: false
        },
        // fill: {
        //   type: 'gradient',
        // },
        // legend: {
        //   formatter: function(val, opts) {
        //     return val + " - " + opts.w.globals.series[opts.seriesIndex]
        //   }
        // },
        title: {
          text: 'ZSCORE'
        },
        responsive: [{
          breakpoint: 480,
          options: {
            chart: {
              width: 0
            },
            legend: {
              position: 'bottom'
            }
          }
        }]
        };

        var chart = new ApexCharts(document.querySelector("#pie_chart"), options);
        chart.render();
      
          });
      </script> --}}

    <script>

    </script>
</body>

</html>
