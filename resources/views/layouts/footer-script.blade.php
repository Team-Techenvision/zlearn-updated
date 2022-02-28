        <!-- JAVASCRIPT -->
        <script src="{{ URL::asset('libs/jquery/jquery.min.js')}}"></script>
        <script src="{{ URL::asset('libs/bootstrap/bootstrap.min.js')}}"></script>
        <script src="{{ URL::asset('libs/metismenu/metismenu.min.js')}}"></script>
        <script src="{{ URL::asset('libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{ URL::asset('libs/node-waves/node-waves.min.js')}}"></script>
        <script src=
"https://www.jdoodle.com/assets/jdoodle-pym.min.js"
        type="text/javascript">
    </script>

        @yield('script')

        <!-- App js -->
        <script src="{{ URL::asset('js/app.min.js')}}"></script>

        <script type="text/javascript">

        
        $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
                });
                $(document).ready(function() {
                    $('select[name="subject_id"]').on('change', function() {
                        var subjectID = $(this).val();
                        if(subjectID) {
                            $.ajax({
                                url: '/myform/ajax/'+subjectID,
                                type: "GET",
                                dataType: "json",
                                success:function(data) {
            
                                //     alert(data);
                                    $('select[name="chapter_id"]').empty();
                                    $.each(data, function(key, value) {
                                        $('select[name="chapter_id"]').append('<option value="'+ key +'">'+ value +'</option>');
                                    });
            
            
                                }
                            });
                        }else{
                            $('select[name="chapter_id"]').empty();
                        //     $('select[name="chapter_id"]').append('<option value="''">'+ Select Chapter +'</option>');
                        }
                    });
                });
            </script>

<script type="text/javascript">
    $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
            $(document).ready(function() {
                $('select[name="subject_id[]"]').on('change', function() {
                    var subjectID = $(this).val();
                    // alert(subjectID);
                    if(subjectID) {
                        $.ajax({
                            method: "POST",
                            url: "/get_chapter",
                            dataType: 'json',
                            data: {
                                "_token": "{{ csrf_token() }}",
                                'subject_id': subjectID
                            },
                            success:function(data) {        
                                // alert(data);
                                $('select[name="chapter_id[]"]').empty();
                                $.each(data, function(key, value) {
                                    $('select[name="chapter_id[]"]').append('<option value="'+ key +'">'+ value +'</option>');
                                });
        
        
                            }
                        });
                    }else{
                        $('select[name="chapter_id"]').empty();
                    //     $('select[name="chapter_id"]').append('<option value="''">'+ Select Chapter +'</option>');
                    }
                });
            });
        </script>



{{-- <script type="text/javascript">
    $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
            $(document).ready(function() {
                $('select[name="test_id"]').on('change', function() {
                    var testID = $(this).val();
                    var $tableSearch = $('#table-search');
                    // alert(testID);
                    $tableSearch.html('');
                    if(testID) {
                        $.ajax({
                            method: "POST",
                            url: "/get-test-question",
                            dataType: 'json',
                            data: {
                                "_token": "{{ csrf_token() }}",
                                'test_id': testID
                            },
                            success:function(data) {        
                                // alert(data);
                                data.forEach(function(row) {
                                $tableSearch.append('<tr><td>'+ row.question_name +'</td><td>'+ row.q_id +'</td></tr>');
                            });
                            }
                        });
                    }else{
                        $('select[name="chapter_id"]').empty();
                    //     $('select[name="chapter_id"]').append('<option value="''">'+ Select Chapter +'</option>');
                    }
                });
            });
        </script> --}}


        <script>
            $(document).ready(function(){
              $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#question_table tr").filter(function() {
                  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
              });
            });
            </script>


<script>
    $('#form_two').submit(function () {
        var sum = 0;
        $(".section_question").each(function(){
            sum += +$(this).val();
        });

        var timingsum = 0;
        $(".section_time").each(function(){
            timingsum += +$(this).val();
        });

        var added_question = parseInt(sum);
        var total_question = parseInt($('#total_question').val());

        var added_timing = parseInt(timingsum);
        var total_timing = parseInt($('#total_minutes').val());
        
        if(added_question > total_question || added_question < total_question){
            $('.question_count_msg').show();
            return false;
        }

        if(added_timing > total_timing || added_timing < total_timing){
            $('.question_timing_msg').show();
            return false;
        }

        });
</script>




        @yield('script-bottom')