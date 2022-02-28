<div class="col-12">
    <div class="card">
        <div class="card-body">   
            <form class="" action="{{url('view-test-question')}}" method="POST">                        
                @csrf 
            <div class="col-md-8 m-auto">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Select Test</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="test_id" required>
                                <option value="">Select Test</option>
                                @foreach($tests as $r) 
                                    <option value="{{$r->id}}">{{$r->test_name}}</option> 
                                @endforeach
                            </select>
                        </div>
                    </div>
            </div>

            <div class="form-group text-center mt-5">
                <div>                        
                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                    Find Question
                    </button>
                   
                </div>
            </div>

        </form>
        </div>
    </div>
</div>
<!-- end col -->


<div class="col-12">
<div class="card">
    
    <div class="card-body"> 
        <div class="col-12 text-right pb-2">
        </div>    
    <table id="table-search" class="table table-striped table-bordered dt-responsive nowrap text-center" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
            
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