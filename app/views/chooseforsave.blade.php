@extends ('theme')
@section('title')
<title>บันทึก...</title>
@stop
@section('body')

	<div class="container">
    
      <div class="row">
      <h1>เลือกอาหารหรือกิจกรรมการเผาพลาญพลังงานเพื่อบันทึก</h1>
          <div class="col-xs-6">

              <div class="form-wrap">
                
                    <form action="{{url('chooseforsave')}}" method="post" role="search">
                        <div class="form-group">
                       		<br><button type="submit" name="choose"  class="btn btn-primary btn-block btn-lg" value="1" >อาหาร</button>
                            <br><button type="submit" name="choose" class="btn btn-success btn-block btn-lg" value="2">กิจกรรมการเผาผลาญพลังงาน</button>
                        </div>
                    </form>
                   
              </div>
        </div> <!-- /.col-xs-12 -->
       
      </div> <!-- /.row -->
    </div> <!-- /.container -->


@stop