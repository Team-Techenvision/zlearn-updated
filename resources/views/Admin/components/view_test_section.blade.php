
<div class="col-12">
    <div class="card">
        <div class="card-body"> 
            <div class="col-12 text-right pb-2"> 
                <a href="{{url('add-test-section')}}" class="btn btn-info">Add Test Section</a>
            </div>    
        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap text-center" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th>No </th>
                        <th>Test Section</th>
                        <th>Status</th>                            
                        <th>Action</th>                    
                    </tr>
                </thead>

                <tbody>
                    <?php $i = 1; ?>
                    @foreach($test_section as $row)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$row->test_section_name}}</td>                            
                        <td>@if($row->status == 1) Active @else De-Active @endif</td>
                        <td><a href="{{url('edit-test-section/'.$row->id)}}" class="btn btn-info mr-2">Edit</a><a href="{{url('delete-test-section/'.$row->id)}}" class="btn btn-danger">Delete</a></td>                                               
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
