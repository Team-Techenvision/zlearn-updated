
<div class="col-12">
    <div class="card">
        <div class="card-body">

            {{-- <h4 class="card-title">Buttons example</h4> --}}
            {{-- <p class="card-title-desc">The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
            </p> --}}
            <div class="col-md-8 m-auto">
                      @php
                        //   dd($answer);
                      @endphp                 
                <form class="" action="{{url('submit-answer')}}" method="POST">                        
                @csrf 
                   <input type="hidden" name="question_id" value="{{$question->id}}">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Question </label>
                        <div class="col-sm-9">
                            <div class="form-group">                            
                                <div>
                                    <textarea  class="form-control" rows="3" name="question" placeholder="Enter Question" readonly>{{$question->question}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <?php for($i=0; $i < $question->choice_count; $i++) {  ?>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Answer {{$i+1}} </label>                       
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="answer[]" placeholder="Enter Answer "  placeholder="Enter Answer "/>
                        </div>
                    </div>
                    <?php  }  ?>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Correct Answer</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="correct_answer">    
                            <?php for($i=0; $i < $question->choice_count; $i++) {  ?>                                
                                <option value="{{$i+1}}">{{$i+1}}</option>
                            <?php  }  ?>                              
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


