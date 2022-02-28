
<div class="col-12">
    <div class="card">
        <div class="card-body"> 
            <div class="row">
                    <div class="col-6 pb-2"> 
                        <h4 class=""> Test Name : {{$test_level->test_name}}</a>
                    </div>    
                    <div class="col-6">
                        <input class="form-control mb-5" type="text" id="myInput" placeholder="search section">
                    </div>
                    @php
                        $test_section = DB::table("test_section")->join('test_tb_section','test_tb_section.test_section_id','=','test_section.id')
                                            ->where('test_tb_section.test_id', $test_level->id)
                                            ->select('test_section.*','test_tb_section.id as test_tb_section_id','test_tb_section.test_id','test_tb_section.test_section_id','test_tb_section.section_question')
                                            ->get();
                    @endphp
                    @foreach($test_section as $r) 
                    <div class="col-3"> 
                        <p class=""> Section: {{$r->test_section_name}}</p>
                    </div> 
                    <div class="col-3">
                        <p class=""> Question : {{$r->section_question}}</p>
                    </div>
                    @endforeach 
        </div>
        <table  id="question_table" class="table table-striped table-bordered dt-responsive nowrap text-center" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th>Select </th>
                        <th>Section</th>
                        <th>Question</th>                    
                    </tr>
                </thead>
                <form class="" action="{{url('save-test-question')}}" method="POST">                        
                    @csrf 
                    <input type="hidden" name="test_id" value="{{$test_level->id}}" >
                <tbody>
                    <?php $i = 1; ?>
                    @foreach($test_chapter as $row)
                      <?php   
                            $test_question= DB::table("questions")->where("questions.chapter_id",$row->chapter_id)->get();
                            // dd($test_question);
                            
                      ?>
                       @foreach($test_question as $row)
                    {{-- @if($test_question) --}}
                    <tr>
                        @php
                            // $question_level = 
                        @endphp
                        <td><input type="checkbox" name="question_id[]" value="{{$row->id}}" ></td>
                        @php $test_section_name = DB::table('test_section')->where('id',$row->test_section)->pluck('test_section_name')->first(); @endphp
                        <td>{{{$test_section_name}}}</td>
                        <td>{!!$row->question!!}</td>   

                        {{-- <td>{{$row->question_level_name}}</td>                                                                           --}}
                    </tr>
                    @endforeach
                    {{-- @else  --}}
                    {{-- <tr>
                        <td>No Question Available...</td>                                                                          
                    </tr> --}}
                    {{-- @endif --}}
                    @endforeach
                   
                </tbody>
                <div class="form-group text-center">
                    <div>                        
                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                       Save 
                        </button>
                       
                    </div>
                </div> 
            </form>
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
