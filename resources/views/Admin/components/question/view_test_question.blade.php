
<div class="col-12">
    <div class="card">
        <div class="card-body"> 
            <div class="col-12 text-left pb-2"> 
                <h4 class="test-capitalize"> Test Name : {{ $tests->test_name}}  </a>
            </div>    
        <table  class="table table-striped table-bordered dt-responsive nowrap text-center" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th>Section</th>
                        <th>Question</th>                    
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                       @foreach($test_question as $row)
                    <tr>
                        @php
                        @endphp
                        @php $test_section_name = DB::table('test_section')->where('id',$row->test_section)->pluck('test_section_name')->first(); @endphp
                        <td>{{{$test_section_name}}}</td>
                        <td>{{$row->question}}</td>                                                                          
                    </tr>
                    @endforeach
                   
                   
                </tbody>
                 
            </table>
        </div>
    </div>
</div>

<style>
    .dt-buttons
    {
        display:none!important;
    }
 </style>   
<!-- end col -->

