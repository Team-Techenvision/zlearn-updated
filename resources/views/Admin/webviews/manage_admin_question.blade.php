@extends('layouts.master')

@section('title') User List @endsection
@section('css')

    <!-- DataTables -->
    <link href="{{ URL::asset('/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('/libs/summernote/summernote.min.css')}}" rel="stylesheet" type="text/css" />

@endsection

@section('content')

    @component('common-components.breadcrumb')
         @slot('title') @if($page_title)  {{$page_title}} @endif @endslot
         {{-- @slot('li_1') Tables  @endslot --}}
     @endcomponent

                    

     <div class="row">
        @if($flag == 1)
            @include('Admin.components/question/admin_view_question')
        @elseif($flag == 2) 
            @include('Admin.components/question/admin_add_question')
        @elseif($flag == 3) 
            @include('Admin.components/question/admin_edit_question')
        @elseif($flag == 4) 
            @include('Admin.components/question/admin_add_answer')
        @elseif($flag == 5) 
            @include('Admin.components/admin_view_test')
        @elseif($flag == 6) 
            @include('Admin.components/admin_add_test')
        @elseif($flag == 7) 
            @include('Admin.components/edit_test')
        @elseif($flag == 8) 
            @include('Admin.components/question/add_test_question')
        @elseif($flag == 9) 
            @include('Admin.components/question/select_question')
        @elseif($flag == 10) 
            @include('Admin.components/question/admin_add_test_two')
        @elseif($flag == 11) 
            @include('Admin.components/question/show_test_question')
        @elseif($flag == 12) 
            @include('Admin.components/question/view_test_question')
        @elseif($flag == 13) 
            @include('Admin.components/question/admin_edit_answer')
        @elseif($flag == 14) 
            @include('Admin.components/question/admin_edit_test_two')
        @elseif($flag == 15) 
            @include('Admin.components/question/add_test_case')
    @endif
    </div>
                    <!-- end row -->

    @endsection

@section('script')

    <!-- Required datatable js -->
    <script src="{{ URL::asset('/libs/datatables/datatables.min.js')}}"></script>
    <script src="{{ URL::asset('/libs/jszip/jszip.min.js')}}"></script>
    <script src="{{ URL::asset('/libs/pdfmake/pdfmake.min.js')}}"></script>
    <!--tinymce js-->
<script src="{{URL::asset('/libs/tinymce/tinymce.min.js')}}"></script>
<!-- Summernote js -->
<script src="{{URL::asset('/libs/summernote/summernote.min.js')}}"></script>
<!-- init js -->
<script src="{{URL::asset('/js/pages/form-editor.init.js')}}"></script>

    <!-- Datatable init js -->
    <script src="{{ URL::asset('/js/pages/datatables.init.js')}}"></script>

    <script>
        $(document).ready(function()
        {
            $("#addCF").click(function()
            {
                //alert("!!!!");
                 $("#customFields").append('<tr><td style"text-align-right"><button class="remCF btn btn-danger pr-10" type="button" >Remove</button></td></tr><tr><td width="30%"> <label for="">Input Test Case</label></td><td width="70%"><input type="text" class="form-control" name="input_test_case[]" placeholder="Enter Input " /></td></tr><tr><td width="30%"><label for="">Output Test Case</label></td><td width="70%"><input type="text" class="form-control" name="output_test_case[]" placeholder="Enter Output" /></td></tr>');
            });
    
             $("#customFields").on('click', '.remCF', function()
            {
                var closestRow = $(this).closest('tr');
    closestRow.add(closestRow.prev()).add(closestRow.next()).remove();
            });
    
                 
        });
    </script>



<script>
    $(document).ready(function() {
    $('#example2').DataTable();
} );
</script>

@endsection