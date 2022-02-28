
<div class="col-12">
    <div class="card">
        <div class="card-body"> 
            <div class="col-12 text-right pb-2"> 
                {{-- <a href="add-college" class="btn btn-info">Add College</a> --}}
            </div>    
        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap text-center" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th>No </th>
                        <th>Student Name</th>
                        <th>College</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Status</th>                            
                        <th>Action</th>  
                        <th></th>                  
                    </tr>
                </thead>

                <tbody>
                    <a class="btn btn-warning" href="{{ route('export') }}">Export User Data</a>
                    <?php $i = 1; ?>
                    @foreach($student as $row)
                    <?php $college = DB::table("colleges")->where("id",$row->collage_id)->pluck('college_name')->first();   
                        // dd($college);
                    ?> 
                   
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$row->name}} {{$row->user_id}}</td>  
                        <td>  
                            {{$college}}
                        </td> 
                        <td>{{$row->phone}}</td>   
                        <td>{{$row->email}}</td>                            
                        <td>@if($row->status == 1) Active @else De-Active @endif</td>
                        {{-- <td><a href="{{url('edit-college/'.$row->id)}}" class="btn btn-info mr-2">Edit</a><a href="{{url('delete-college/'.$row->id)}}" class="btn btn-danger">Delete</a></td>         
                         --}}
                       <td>
                       @php
                         $deactive = 0;
                         $active = 1;
                         @endphp
                         @if($row->status == 1) <a href="{{url('status-student/'.$row->id.'/'.$deactive)}}" class="btn btn-danger">Deactive</a>@else <a href="{{url('status-student/'.$row->id.'/'.$active)}}" class="btn btn-info">Active</a>@endif </td>
                         <td>  </td>
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
