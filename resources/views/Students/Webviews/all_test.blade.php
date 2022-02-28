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
                        {{-- {{$Test_time}} --}}
                         
    {{-- ===================================================== --}}
        <div class="row mb-32pt">
            <div class="col-lg-12 d-flex align-items-center">
                <div class="flex" style="max-width: 100%">
                    <div class="card m-0">
                        <div data-toggle="lists" data-lists-values='["js-lists-values-employee-name", "js-lists-values-employee-title"]'
                                                        class="table-responsive">
                            <table class="table table-flush">
                                <thead>
                                    <tr>
                                        <th colspan="2">
                                            <a href="javascript:void(0)"
                                                class="sort"
                                            data-sort="js-lists-values-employee-name">Test Name</a>
                                        </th>
                                        {{-- <th>
                                            <a href="javascript:void(0)"
                                                class="sort"
                                            data-sort="js-lists-values-employee-title">Details</a>
                                        </th> --}}
                                        <th class="text-center">
                                            <a href="javascript:void(0)"
                                                class="sort"
                                            data-sort="js-lists-values-employee-title">Status</a>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                    @foreach($Test_time as $list)
                                    <?php $test_status = DB::table('user_tests')->where('test_id',$list->id)->where('user_id', $user->id)->first(); ?>
                                    <tr>
                                        <td colspan="2">
                                            <div class="media align-items-center">
                                                <div class="media-body">
                                                    <strong class="js-lists-values-employee-name">{{$list->test_name}}</strong>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="">
                                            <div class="media align-items-center">
                                                <div class="media-body text-center">
                                                    @if($test_status)                                                  
                                                <form action="javascript:void(0)" method="post" class="w-100">
                                                @else
                                                <form action="{{url('Test-Instraction')}}" method="post" class="w-100">
                                                @endif

                                                @csrf
                                                            
                                                    <input type="hidden" name="test_id" value="{{$list->id}}" class="form-control" >
                                                            @if($test_status)
                                                    <!-- <span class="test_done mt-3">Completed</span> -->
                                                    <a href="javascript:Void(0);" class="test_done">Completed</a>
                                                    @else
                                                        <!-- <button class="mt-3">Start Now</button> -->
                                                        <input type="submit" class="bg-primary text-white btn p-1" name="submit" value="Start Now">
                                                    @endif 
                                                </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                                    {{-- =================================================== --}}
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
                    <script>
                    $(document).ready(function()
                    {
                    $('.test_done').click(function()
                    {
                    alert("This Test Already Completed !!!");
                    });
                    });
                    </script>
                    <script>
                        $(document).ready(function()
                        {
                            localStorage.clear();
                        });
                    </script>
                </body>
            </html>