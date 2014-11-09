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
                       		  <input type="submit" name="foodforsave" id="btn-login" class="btn btn-primary btn-block btn-lg" value="อาหาร" >
                            <br><input type="submit" name="sportforsave" id="btn-login" class="btn btn-success btn-block btn-lg" value="กิจกรรมการเผาพลาญพลังงาน">
                        </div>
                    </form>
                   
              </div>
        </div> <!-- /.col-xs-12 -->
       
      </div> <!-- /.row -->
    </div> <!-- /.container -->


@stop