
<div class="col-12">
    <div class="card">
        <div class="card-body">

            {{-- <h4 class="card-title">Buttons example</h4> --}}
            {{-- <p class="card-title-desc">The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
            </p> --}}
            <div class="col-md-8 m-auto">                                       
                <form class="" action="{{url('submit-material')}}" method="POST" enctype="multipart/form-data">                        
                @csrf 
                <input type="hidden" class="form-control" name="material_id" value="{{$material->id}}" required>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Material Title</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="material_name" value="{{$material->material_name}}"  placeholder="Enter Material Name"/>
                        </div>
                    </div> 

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Section</label>
                        <div class="col-sm-9">                                 
                            <select class="form-control" name="section_id" required>                                      
                                <option value="">Select Section</option>
                                @foreach($sections as $r)                                     
                                    <option value="{{$r->id}}" @if($r->id == $material->section_id)selected @endif>{{$r->test_section_name}}</option> 
                                @endforeach                                 
                            </select>
                        </div>
                    </div>

                    
                    
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label"> Question Type </label>                
                        <div class="col-md-9">
                            <div class="row">
                                {{-- <h5 class="font-size-14 mb-4">Default Radios</h5> --}}
                                <div class="form-check mb-2 col-6">
                                    <input class="form-check-input" type="radio"  name="attachment_type" id="pdf_upload" value="1" @if($material->attachment_type == 1) checked @endif >
                                    <label class="form-check-label" for="exampleRadios1">
                                       PDF
                                    </label>
                                </div>
                                <div class="form-check col-6">
                                    <input class="form-check-input" type="radio"  name="attachment_type" id="video_upload" value="0" @if($material->attachment_type == 0) checked @endif>
                                    <label class="form-check-label" for="exampleRadios2">
                                        Video Link
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Uploaded Material</label>
                        <div class="col-sm-9 mt-2">
                            {{-- <input type="text" class="form-control" name="pdf_link" value="@if(isset($material->pdf_link)) {{ $material->pdf_link }} @endif" readonly/> --}}
                            <a href="{{asset($material->pdf_link) }}" download="{{$material->pdf_link}}" title="Download">{{$material->pdf_link}}</a> 
                        </div>
                    </div> 

                    <div class="form-group row show_pdf">
                        <label class="col-md-3 col-form-label">Update Material </label>
                        <div class="col-md-9">                         
                            <input type="file" name="new_pdf_link">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Video link</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="video_link" value="@if(isset($material->video_link)) {{ $material->video_link }} @endif"  placeholder="Enter Video Link"/>
                        </div>
                    </div> 
                   
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Description </label>
                        <div class="col-sm-9">
                            <div class="form-group">                            
                                <div>
                                    <textarea  class="form-control" rows="3" name="description" placeholder="Enter Description">{{ $material->description }}</textarea>
                                </div>
                            </div>
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



