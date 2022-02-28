
<div class="col-12">
    <div class="card">
        <div class="card-body">

            {{-- <h4 class="card-title">Buttons example</h4> --}}
            {{-- <p class="card-title-desc">The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
            </p> --}}
            <div class="col-md-8 m-auto">                                       
                <form class="" action="{{url('submit-question')}}" method="POST" enctype="multipart/form-data">                        
                @csrf 
                    {{-- <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Question Title</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="question_title"  placeholder="Enter Question Title"/>
                        </div>
                    </div>  --}}

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Subject</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="subject_id" required>
                                <option value="">Select Subject</option>
                                @foreach($subjects as $r) 
                                    <option value="{{$r->id}}">{{$r->subject_name}}</option> 
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Chapter</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="chapter_id" required>
                                 <option value="">Select Chapter</option>
                              {{--  @foreach($chapters as $r) 
                                    <option value="{{$r->id}}">{{$r->chapter_name}}</option> 
                                @endforeach --}}
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label"> Question Type </label>                
                        <div class="col-md-9">
                            <div class="row">
                                {{-- <h5 class="font-size-14 mb-4">Default Radios</h5> --}}
                                <div class="form-check mb-2 col-6">
                                    <input class="form-check-input" type="radio"  name="question_type" id="exampleRadios1" value="1" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                       Image
                                    </label>
                                </div>
                                <div class="form-check col-6">
                                    <input class="form-check-input" type="radio"  name="question_type" id="exampleRadios2" value="0">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Text
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Question </label>
                        <div class="col-sm-9">
                            <div class="form-group">                            
                                <div>
                                    <textarea  id="elm1"  class="form-control" rows="3" name="question" placeholder="Enter Question"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Question </label>
                        <div class="col-md-9">
                            {{-- <input type="file" class="custom-file-input" id="customFile" name="question_image">
                            <label class="custom-file-label" for="customFile">Choose file</label> --}}
                            <input type="file" name="question_image" >
                        </div>
                    </div>

                
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Choice Count</label>
                        <div class="col-md-9">
                            <select class="form-control" name="choice_count">
                                <option value="0">Select Choice</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>                                                               
                            </select>
                        </div>
                    </div>

                   
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Explanation </label>
                        <div class="col-sm-9">
                            <div class="form-group">                            
                                <div>
                                    <textarea  class="form-control" rows="3" name="explanation" placeholder="Enter Explanation"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Explanation image </label>
                        <div class="col-md-9">                           
                            <input type="file" name="explanation_image" >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Level</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="question_level" required>
                                <option value="">Select Level</option>
                                @foreach($question_level as $r) 
                                    <option value="{{$r->id}}">{{$r->question_level_name}}</option> 
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Section</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="test_section" required>
                                <option value="">Select Section</option>
                                @foreach($test_section as $r) 
                                    <option value="{{$r->id}}">{{$r->test_section_name}}</option> 
                                @endforeach
                            </select>
                        </div>
                    </div>

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



