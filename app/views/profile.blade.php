@extends ('theme')
@section('title')
<title>Profile...</title>
@stop
@section('body')

    <div class="container">
      
      <form action="{{url('profile')}}" method="post">
      <div class="row">
      <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
          

       
      <br>
      </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">{{$name}}&nbsps'&nbsp&nbsp Profile </h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class=" col-md-3 col-lg-3 ">  
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <a href="/editprofile">แก้ไขข้อมูลส่วนตัว</a><br><br>
                      </tr>
                      <tr>
                        <a href="/chooseforsave">ไดอารี่</a><br><br>
                      </tr>
                       <tr>
                        <a href="/saveweight">บันทึกและดูน้ำหนักที่เปลี่ยน</a><br><br>
                      </tr>
                      <tr>
                        <a href="/chooseforlooklike">รายการโปรด</a><br><br>
                      </tr>
                      
                    </tbody>
                  </table>
                 
                </div>
                
                <div class=" col-md-9 col-lg-9 ">  
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>ชื่อที่ใช้แสดง(ชื่อที่ใช้ในการสมัคร):</td>
                        <td>{{$name}}</td>
                      </tr>
                      <tr>
                        <td>อายุ:</td>
                        <td>{{$age}}</td>
                      </tr>
                      <tr>
                        <td>น้ำหนัก ( กิโลกรัม ) : </td>
                        <td>{{$weight}}</td>
                      </tr>
                      <tr>
                        <td>ความสูง ( เซนติเมตร ) :</td>
                        <td>{{$height}}</td>
                      </tr>
                      <tr>
                        <td>เพศ : </td>
                        <td>{{$sex}}</td>
                      </tr>
                      <tr>
                        <td>ระดับกิจกรรมในชีวิตประจำวัน :</td>
                        <td>{{$activity}}</td>
                      </tr>
                      <tr>
                        <td>น้ำหนักเป้าหมาย ( กิโลกรัม ) :</td>
                        <td>{{$goalweight}}</td>
                      </tr>
                      <tr>
                        <td>วันจำนวนเป้าหมาย  :</td>
                        <td>{{$goaldate}}</td>
                      </tr>
                      <tr>
                        <td>ค่าแคลอรี่ที่ควรได้รับต่อวัน(ค่า bmr)  :</td>
                        <td>{{$bmr}}</td>
                      </tr>
                        <td>ค่าแคลอรี่ที่ควรได้รับต่อวันสำหรับผู้ลดน้ำหนัก(ค่า bmr สำหรับผู้ลดน้ำหนัก)  :</td>
                        <td>{{$downbmr}}</td>
                    </tbody>
                  </table>
                  
                </div>

              </div>
            </div>
                 
            
          </div>
        </div>
      </div>
      </form>
    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

@stop