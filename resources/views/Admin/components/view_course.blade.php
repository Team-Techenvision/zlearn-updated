
<div class="col-12">
    <div class="card">
        <div class="card-body"> 
            <div class="col-12 text-right pb-2"> 
                <a href="{{url('add-course')}}" class="btn btn-info">Add Course</a>
            </div>    
        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap text-center" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th>No </th>
                        <th>Course</th>
                        <th>Status</th>                            
                        <th>Action</th>
                    
                    </tr>
                </thead>

                <tbody>
                    <?php $i = 1; ?>
                    @foreach($course as $row)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$row->course_name}}</td>                            
                        <td>@if($row->status == 1) Active @else De-Active @endif</td>
                        <td><a href="{{url('edit-course/'.$row->id)}}" class="btn btn-info mr-2">Edit</a><a href="{{url('delete-course/'.$row->id)}}" class="btn btn-danger">Delete</a></td>                                               
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
