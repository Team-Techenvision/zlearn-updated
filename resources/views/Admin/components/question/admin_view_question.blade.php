
<div class="col-12">
    <div class="card">
        <div class="card-body"> 
            <div class="col-12 text-right pb-2"> 
                <a href="{{url('add-question')}}" class="btn btn-info">Add Question</a>
            </div>    
        <table id="example2" class="table table-striped table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%; white-space: normal!important;">
                <thead>
                    <tr>
                        <th>No </th>
                        <th>Question</th>
                        <th>Status</th>                            
                        <th>Action</th>
                    
                    </tr>
                </thead>

                <tbody>
                    <?php $i = 1; ?>
                    @foreach($question as $row)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{!!$row->question!!}</td>                            
                        <td>@if($row->status == 1) Active @else De-Active @endif</td>
                        <td width="10%"><a href="{{url('edit-question/'.$row->id)}}" class="btn btn-info mt-2">Edit</a>@if($row->test_section == 7) <a href="{{url('add-test-case/'.$row->id)}}" class="btn btn-warning my-2">Test Case</a> @else <a href="{{url('edit-answer/'.$row->id)}}" class="btn btn-warning mt-2">Answer</a>  @endif <a href="{{url('delete-question/'.$row->id)}}" class="btn btn-danger mt-2">Delete</a></td>                                               
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

