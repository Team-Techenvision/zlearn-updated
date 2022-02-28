
<div class="col-12">
    <div class="card">
        <div class="card-body"> 
            <div class="col-12 text-right pb-2"> 
                {{-- <a href="add-test-type" class="btn btn-info">Add Test Types</a> --}}
            </div>    
        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap text-center" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th>No </th>
                        <th>Program Name</th>
                        <th>Status</th>                            
                        {{-- <th>Action</th> --}}
                    
                    </tr>
                </thead>

                <tbody>
                    <?php $i = 1; ?>
                    @foreach($program_name as $row)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$row->program_name}}</td>                            
                        <td>@if($row->status == 1) Active @else De-Active @endif</td>
                        {{-- <td><a href="{{url('edit-test-type/'.$row->id)}}" class="btn btn-info mr-2">Edit</a><a href="{{url('delete-test-type/'.$row->id)}}" class="btn btn-danger">Delete</a></td>                                                --}}
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
