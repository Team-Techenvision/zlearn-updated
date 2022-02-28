@extends('layouts.master')

@section('title') User List @endsection
@section('css')

    <!-- DataTables -->
    <link href="{{ URL::asset('/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />

@endsection

@section('content')

    @component('common-components.breadcrumb')
         @slot('title') @if($page_title)  {{$page_title}} @endif @endslot
         {{-- @slot('li_1') Tables  @endslot --}}
     @endcomponent

                    

     <div class="row">
        @if($flag == 1)
        @include('Admin.admin_list')
    @elseif($flag == 2) 
        @include('Admin.components/add_subject')
    @elseif($flag == 3) 
        @include('Admin.components/add_standard')
    @elseif($flag == 4) 
        @include('Admin.components/add_chapter')
    @elseif($flag == 5) 
        @include('Admin.components/view_standard') 
    @elseif($flag == 6) 
        @include('Admin.components/view_subject') 
    @elseif($flag == 7) 
        @include('Admin.components/view_chapter')
    @elseif($flag == 8) 
        @include('Admin.components/view_college')
    @elseif($flag == 9) 
        @include('Admin.components/add_college')
    @elseif($flag == 10) 
        @include('Admin.components/edit_standard')
    @elseif($flag == 11) 
        @include('Admin.components/edit_college')   
    @elseif($flag == 12) 
        @include('Admin.components/view_semister')
    @elseif($flag == 13) 
        @include('Admin.components/add_semister')  
    @elseif($flag == 14) 
        @include('Admin.components/edit_semister')
    @elseif($flag == 15) 
        @include('Admin.components/edit_subject')
    @elseif($flag == 16) 
        @include('Admin.components/edit_chapter')
    @elseif($flag == 17) 
        @include('Admin.components/view_test_type')
    @elseif($flag == 18) 
        @include('Admin.components/add_test_type') 
    @elseif($flag == 19) 
        @include('Admin.components/edit_test_type') 
    @elseif($flag == 20) 
        @include('Admin.components/view_course')
    @elseif($flag == 21) 
        @include('Admin.components/add_course') 
    @elseif($flag == 22) 
        @include('Admin.components/edit_course') 
    @elseif($flag == 23) 
        @include('Admin.components/view_branch')
    @elseif($flag == 24) 
        @include('Admin.components/add_branch') 
    @elseif($flag == 25) 
        @include('Admin.components/edit_branch')
    @elseif($flag == 26) 
        @include('Admin.components/import_user')
    @elseif($flag == 27) 
        @include('Admin.user_list')
    @elseif($flag == 28) 
        @include('Admin.components/view_test_type')
    @elseif($flag == 29) 
        @include('Admin.components/view_test_name')
    @elseif($flag == 30) 
        @include('Admin.components/view_question_level')
    @elseif($flag == 31) 
        @include('Admin.components/view_test_section')
    @elseif($flag == 32) 
        @include('Admin.components/view_program_name')
    @elseif($flag == 33) 
        @include('Admin.components/add_test_section') 
    @elseif($flag == 34) 
        @include('Admin.components/edit_test_section')
    @elseif($flag == 35) 
        @include('Admin.components/view_test_result')
    @elseif($flag == 36) 
        @include('Admin.components/view_college_admin')
    @elseif($flag == 37) 
        @include('Admin.components/add_college_admin')
    @elseif($flag == 38) 
        @include('Admin.components/edit_college_admin')
    @endif
    </div>
                    <!-- end row -->

    @endsection

@section('script')

    <!-- Required datatable js -->
    <script src="{{ URL::asset('/libs/datatables/datatables.min.js')}}"></script>
    <script src="{{ URL::asset('/libs/jszip/jszip.min.js')}}"></script>
    <script src="{{ URL::asset('/libs/pdfmake/pdfmake.min.js')}}"></script>

    <!-- Datatable init js -->
    <script src="{{ URL::asset('/js/pages/datatables.init.js')}}"></script>

   

@endsection