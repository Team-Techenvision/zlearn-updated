<!DOCTYPE html>
<html lang="en"
      dir="ltr">

    <head>
      @include('Students.Common.student_head')
      <style>
          .card{
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px!important;
          }
          .card .card-body{
              background-color: #313740;
              color: #fff;
          }
          .card-title{
              color: #fff;
              text-transform: capitalize!important;
          }
      </style>
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
                                {{-- <h2 class="mb-0">Dashboard</h2> --}}

                                <ol class="breadcrumb p-0 m-0">
                                    {{-- <li class="breadcrumb-item"><a href="index.html">Home</a></li> --}}

                                    <li class="breadcrumb-item active">

                                        Resume Template

                                    </li>

                                </ol>

                            </div>
                        </div>

                        {{-- <div class="row"
                             role="tablist">
                            <div class="col-auto">
                                <a href="#"
                                   class="btn btn-outline-secondary">My Courses</a>
                            </div>
                        </div> --}}

                    </div>
                </div>

                <!-- BEFORE Page Content -->

                <!-- // END BEFORE Page Content -->

                <!-- Page Content -->

    <div class="container page__container">
        <div class="page-section">
        {{-- {{$Test_time}} --}}

                    <!-- Button trigger modal -->
               
            <div class="row"> 
                <div class="col-12 text-right mb-3"> 
                     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        <span style="text-transform: capitalize!important;"> Add Date And Place </span>
                    </button> 
                </div>
                    <div class="col-md-4 text-center mb-2">                        
                       <a href="{{url('download-resume')}}/1"  target="_blank"> 
                           <div class="card">
                              <img class="card-img-top" src="{{asset('Student/images/template/template1.jpg')}}" alt="video">
                              <div class="card-body" style="height: 50px;">
                                <h5 class="card-title ">Template 1</h5>
                                {{-- <p class="card-text" style="height: 50px;overflow-y: scroll;">{{$list->description}}</p> --}}
                              </div>
                            </div>
                        </a>             
                    </div> 
                    
                    <div class="col-md-4 text-center mb-2">                        
                        <a href="{{url('download-resume')}}/2"  target="_blank"> 
                            <div class="card">
                               <img class="card-img-top" src="{{asset('Student/images/template/template2.jpg')}}" alt="video">
                               <div class="card-body" style="height: 50px;">
                                 <h5 class="card-title ">Template 2</h5>
                                 {{-- <p class="card-text" style="height: 50px;overflow-y: scroll;">{{$list->description}}</p> --}}
                               </div>
                             </div>
                         </a>             
                     </div> 

                     <div class="col-md-4 text-center mb-2">                        
                        <a href="{{url('download-resume')}}/3"> 
                            <div class="card">
                               <img class="card-img-top" src="{{asset('Student/images/template/template3.jpg')}}" alt="video">
                               <div class="card-body" style="height: 50px;">
                                 <h5 class="card-title ">Template 3</h5>
                                 {{-- <p class="card-text" style="height: 50px;overflow-y: scroll;">{{$list->description}}</p> --}}
                               </div>
                             </div>
                         </a>             
                     </div> 
            </div>
            <!-- Modal -->
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

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Add Date and Place</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                     <form action="">
                        <div class="form-row">
                            <div class="col-12 col-md-12 mb-3">
                                <label class="form-label" for=""><span class="text-danger">*</span>Place  </label>
                                <input type="text" class="form-control" name="place" id="" value="@if($date_place->resume_place){{$date_place->resume_place}}@endif" placeholder="Enter Place which print on resume" required>                                    
                            </div>
                            <div class="col-12 col-md-12 mb-3">
                                <label class="form-label" for=""><span class="text-danger">*</span>Date  </label>
                                <input type="date" class="form-control" name="date" id="" value="@if($date_place->resume_date){{$date_place->resume_date}}@endif" placeholder="Enter date" required>                                    
                            </div>
                        </div>
                     </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" id="send_form"  class="btn btn-primary">Save</button>
                    </div>
                  </div>
                </div>
              </div>

        </div>

        <!-- // END Drawer Layout -->

        @include('Students.Common.student_footer')
    </body>

</html>