
<div class="col-12">
    <div class="card">
        <div class="card-body"> 
            <div class="col-12 text-right pb-2"> 
                <a href="{{url('add-test')}}" class="btn btn-info">Add Test</a>
            </div>    
        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap text-center" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th>No </th>
                        <th>Test Name</th>
                        <th>Status</th>                            
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $i = 1; ?>
                    @foreach($test as $row)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$row->test_name}}</td>                            
                        <td>@if($row->status == 1) Active @else De-Active @endif</td>
                        @php
                        $deactive = 0;
                        $active = 1;
                        @endphp
                        <td>
                            <a href="{{url('edit-test/'.$row->id)}}" class="btn btn-info mr-2">Edit</a>
                             @if($row->status == 1) <a href="{{url('delete-test/'.$row->id.'/'.$deactive)}}" class="btn btn-danger">Deactive</a>@else <a href="{{url('delete-test/'.$row->id.'/'.$active)}}" class="btn btn-info">Active</a>@endif
                             <a href="{{url('delete-this-test/'.$row->id)}}" class="btn btn-info mr-2">Delete</a>   
                            </td>                                               
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
