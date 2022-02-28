
<div class="col-12">
    <div class="card">
        <div class="card-body">

            {{-- <h4 class="card-title">Buttons example</h4> --}}
            {{-- <p class="card-title-desc">The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
            </p> --}}
            <div class="col-md-8 m-auto">
                                       
                <form class="" action="{{url('submit-test')}}" method="POST">                        
                @csrf 

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Test Type</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="test_type_id" required>
                                <option value="">Select Test Type</option>
                                @foreach($test_types as $r) 
                                    <option value="{{$r->id}}">{{$r->test_type_name}}</option> 
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Types Of Test </label>
                        <div class="col-sm-9">
                            <select class="form-control" name="test_name_id" required>
                                <option value="">Select Types Of Test</option>
                                @foreach($test_name as $r) 
                                    <option value="{{$r->id}}">{{$r->test_name}}</option> 
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Test Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="test_name" required placeholder="Enter Test Name" required/>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">General Directions </label>
                        <div class="col-sm-9">
                            <div class="form-group">                            
                                <div>
                                    <textarea  class="form-control" rows="3" name="test_instruction" placeholder="General Directions"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Test Instructions </label>
                        <div class="col-sm-9">
                            <div class="form-group">                            
                                <div>
                                    <textarea  class="form-control" rows="3" name="description" placeholder="Test Instructions"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="control-label col-sm-3"> Select College</label>
                        <div class="col-sm-9">
                            <select class="select2 form-control select2-multiple" multiple="multiple" name="college_id[]" data-placeholder="Choose ...">
                                @foreach($college as $r) 
                                    <option value="{{$r->id}}">{{$r->college_name}}</option> 
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="control-label col-sm-3"> Select Course</label>
                        <div class="col-sm-9">
                            <select class="select2 form-control select2-multiple" multiple="multiple" name="course_id[]" data-placeholder="Choose ...">
                                @foreach($courses as $r) 
                                    <option value="{{$r->id}}">{{$r->course_name}}</option> 
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="control-label col-sm-3"> Select Branch</label>
                        <div class="col-sm-9">
                            <select class="select2 form-control select2-multiple" multiple="multiple" name="branch_id[]" data-placeholder="Choose ...">
                                @foreach($branches as $r) 
                                    <option value="{{$r->id}}">{{$r->branch_name}}</option> 
                                @endforeach
                            </select>
                        </div>
                    </div>                   

                     <div class="form-group row">
                        <label class="control-label col-sm-3">Select Semester</label>
                        <div class="col-sm-9">
                            <select class="select2 form-control select2-multiple" multiple="multiple" name="semester_id[]" data-placeholder="Choose ...">
                                @foreach($semisters as $r) 
                                    <option value="{{$r->id}}">{{$r->semister_name}}</option> 
                                @endforeach
                            </select>
                        </div>
                    </div>

                    {{-- <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Select Semester</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="semester_id" required>
                                <option value="">Select Semester</option>
                                @foreach($semisters as $r) 
                                    <option value="{{$r->id}}">{{$r->semister_name}}</option> 
                                @endforeach
                            </select>
                        </div>
                    </div> --}}

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Training Program</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="program_name_id" required>
                                <option value="">Select Training Program</option>
                                @foreach($program_names as $r) 
                                    <option value="{{$r->id}}">{{$r->program_name}}</option> 
                                @endforeach
                            </select>
                        </div>
                    </div>

                    


                    {{-- <div class="form-group row">
                        <label class="control-label col-sm-3"> Select Chapter</label>
                        <div class="col-sm-9">
                            <select class="select2 form-control select2-multiple" multiple="multiple" name="chapter_id[]" data-placeholder="Choose ...">
                                -- @foreach($chapters as $r) 
                                    <option value="{{$r->id}}">{{$r->chapter_name}}</option> 
                                @endforeach --
                            </select>
                        </div>
                    </div> --}}


                    <div class="form-group row">
                        <label class="control-label col-sm-3"> Select Section</label>
                        <div class="col-sm-9">
                            <select class="select2 form-control select2-multiple" id="test_section_id" multiple="multiple" name="test_section_id[]" data-placeholder="Choose ..." required>
                                @foreach($test_section as $r) 
                                    <option value="{{$r->id}}">{{$r->test_section_name}}</option> 
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="control-label col-sm-3"> Select Subject</label>
                        <div class="col-sm-9">
                            <select class="select2 form-control select2-multiple" id="test_subject_id" multiple="multiple" name="subject_id[]" data-placeholder="Choose ..." required>
                                @foreach($subjects as $r) 
                                    <option value="{{$r->id}}">{{$r->subject_name}}</option> 
                                @endforeach
                            </select>
                        </div>
                    </div>
                
                   

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Question Pattern</label>
                        <div class="col-md-9">
                            <select class="form-control" name="question_pattern" >
                                <option value="">Select Question Pattern</option>
                                @foreach($question_pattern as $r) 
                                    <option value="{{$r->id}}">{{$r->question_pattern_name}}</option> 
                                @endforeach
                            </select>
                        </div>
                    </div>

                    {{-- <div class="form-group row">
                        <label class="col-md-3 col-form-label">Level</label>
                        <div class="col-md-9">
                            <select class="form-control" name="question_level" required>
                                <option value="">Select Level</option>
                                @foreach($question_level as $r) 
                                    <option value="{{$r->id}}">{{$r->question_level_name}}</option> 
                                @endforeach
                            </select>
                        </div>
                    </div> --}}

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Total Question</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="total_question"  placeholder="Enter Total Question" required/>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Total Marks</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="total_marks"  placeholder="Enter Total Marks" required/>
                        </div>
                    </div>

                    {{-- <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Mark Per Question</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="mark_per_question"  placeholder="Enter Mark Per Question" />
                        </div>
                    </div> --}}

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Test Duration</label>
                        <div class="col-sm-4">
                            <input type="number" class="form-control" name="hours"  placeholder="Enter hours" required/>
                        </div>
                        <div class="col-sm-4">
                            <input type="number" class="form-control" name="minute"  placeholder="Enter minute" required/>
                        </div>
                    </div>

                    {{-- <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Exam Date</label>
                        <div class="col-sm-4">
                            <input type="date" class="form-control" name="exam_date"/>
                        </div>
                        
                        <div class="col-sm-4">
                            <input type="time" class="form-control" name="exam_time"/>
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


