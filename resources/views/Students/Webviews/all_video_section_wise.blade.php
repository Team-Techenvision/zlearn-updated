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

                                        Section

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
            <div class="row"> 
                @foreach($material as $list)
                    <div class="col-md-3 text-center mb-2">                        
                        <div class="card"  data-toggle="modal" data-target="#quick-view" onclick="fetch_video('{{$list->id}}')"  title="View Video">
                              <img class="card-img-top" src="{{asset('Student/images/1280_work-station-straight-on-view.jpg')}}" alt="video">
                              <div class="card-body" style="height: 90px;">
                                <h5 class="card-title mb-2">{{$list->material_name}}</h5>
                                {{-- <p class="card-text" style="height: 90px;overflow-y: scroll;">{{$list->description}}</p> --}}
                                
                              </div>
                        </div>
                        <a href="{{url('View-All-Test')}}" class="btn btn-primary">Take Test</a>   
                        {{-- <button class="btn btn-primary">Take Test</button>                --}}
                    </div>                    
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

        <!-- Quick-view modal popup start-->
<div class="modal fade theme-modal" id="quick-view" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content quick-view-modal">
            <div class="modal-header">
                <h5 class="modal-title" id="show_title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            <div class="modal-body">  
                <div class="row">
                    <div class="col-md-9 col-12">
                        <div class="quick-view" id="show_video"> </div>
                    </div>
                    <div class="col-md-3 col-12 ">
                        <div class="quick-view  m-center" > <textarea name="show_info" id="show_info" cols="25" rows="12"></textarea> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Quick-view modal popup end-->
    
<script>
function fetch_video(material_id){
    // alert(material_id);
  $.ajax({
                    type: "post",
                    data:{ "_token": "{{ csrf_token() }}", material_id:material_id},
                    url:"{{ url('get-video-link') }}",
                    success : function(data){
                    //   alert();
                    //  window.location.reload(true);    
                    // console.log(data['material']['video_link']);             
                    $('#show_video').html(data['material']['video_link']);
                    // $('#show_info').html(data['material']['description']);
                    $('#show_title').html(data['material']['material_name']);
                    $("textarea[id='show_info']").html(data['material']['description']);

                    }
                });
  
}

</script>  
        
        
    </body>

</html>