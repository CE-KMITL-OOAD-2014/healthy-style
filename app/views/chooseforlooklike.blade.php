@extends ('theme')
@section('title')
<title>รายการโปรด...</title>
@stop
@section('body')

	<div class="container">
    
      <div class="row">
      <h1>เลือกเพิ่มหรือดูรายการอาหารโปรดของคุณ</h1>
          <div class="col-xs-6">

              <div class="form-wrap">
                
                    <form action="{{url('chooseforlooklike')}}" method="post" role="search">
                        <div class="form-group">
                       		<br><button type="submit" name="choose"  class="btn btn-primary btn-block btn-lg" value="1" >เพิ่มรายการโปรด</button>
                            <br><button type="submit" name="choose" class="btn btn-success btn-block btn-lg" value="2">ดูบันทึกรายการโปรด</button>
                        </div>
                    </form>
                   
              </div>
        </div> <!-- /.col-xs-12 -->
       
      </div> <!-- /.row -->
    </div> <!-- /.container -->


@stop