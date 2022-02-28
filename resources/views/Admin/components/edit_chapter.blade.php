
<div class="col-12">
    <div class="card">
        <div class="card-body"> 
            <div class="col-md-8 m-auto">                                           
                <form class="" action="{{url('submit-chapter')}}" method="post"> 
                @csrf    
			<input type="hidden" class="form-control" name="id" value="{{$chapter->id}}" required>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Chapter Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="chapter_name"  placeholder="Enter Chapter Name" value="{{$chapter->chapter_name}}" required />   
                    </div>
                </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Subject</label>
                        <div class="col-sm-9">                                 
                            <select class="form-control" name="subject_id" required>                                      
                                <option value="">Select Subject</option>
                                @foreach($subjects as $r)                                     
                                    <option value="{{$r->id}}" @if($r->id == $chapter->subject_id)selected @endif>{{$r->subject_name}}</option> 
                                @endforeach                                 
                            </select>
                        </div>
                    </div>
                    {{-- <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Semester</label>
                        <div class="col-sm-9">                                 
                            <select class="form-control" name="semester_id" readonly>                                    
                                <option value="">Select Semester</option>
                                @foreach($semister as $r)                                     
                                    <option value="{{$r->id}}" @if($r->id == $chapter->semister_id)selected @endif>{{$r->semister_name}}</option> 
                                @endforeach                                                                    
                            </select>
                        </div>
                    </div> --}}
                    
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Status</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="status">                                    
                                <option value="1">Active</option>
                                <option value="0">De-Active</option>                                     
                            </select>
                        </div>
                    </div>
                    <div class="form-group text-center mt-5">
                        <div>
                        <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                            Cancel
                            </button>
                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                            Submit
                            </button>                               
                        </div>

                        <div class="any_message mt-3">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </ul>
                                </div>
                            @endif
                            @if(session()->has('alert-danger'))
                                <div class="alert alert-danger">
                                    {{ session()->get('alert-danger') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                                @if(session()->has('alert-success'))
                                <div class="alert alert-success">
                                    {{ session()->get('alert-success') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end col -->
