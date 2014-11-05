<!DOCTYPE html>
    <html lang="">
    
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('title')
    <!-- Bootstrap CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    </head>
    
    <body>
      <div class="navbar navbar-inverse">
      <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

    <a class="navbar-brand" href="/">Healthy Style</a>
    </div>
    <div class="navbar-collapse collapse navbar-inverse-collapse">
    
    <ul class="nav navbar-nav navbar-right">
    
    <li class="active"><a href="/article">บทความ</a></li>
    
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">ค่าแคลอรี่<b class="caret"></b></a>
        <ul class="dropdown-menu">
        <li><a href="#">อาหาร</a></li>
        <li><a href="#">กิจกรรมการเผาผลาญพลังงาน</a></li>
        </ul>
    </li>

    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">โปรแกรมการคำนวณ<b class="caret"></b></a>
        <ul class="dropdown-menu">
        <li><a href="/bmi">BMI</a></li>
        <li><a href="/bmr">BMR</a></li>
      </ul>
    </li>

      <li><a href="/signup">Register</a></li>
      <li><a href="/signout">Log Out</a></li>

    </ul>
    </div>
    </div>
    </body>

    <br>
    <div class="container">

      <form action="{{url('afteredit')}}" method="post">
      <div class="row">
      <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
          

       
      <br>
      </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Profile...</h3>
            </div>
            <div class="panel-body">
              <div class="row">

                <div class=" col-md-8 col-lg-8 ">  
                  <table class="table table-user-information">
                    <tbody>

                      <tr>
                        <td>email:</td>
                        <td>{{$email}}</td>
                      </tr>
                      <tr>
                        <td>password:</td>
                        <td>{{$password}}</td>
                      </tr>

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
                        <td>{{$gender}}</td>
                      </tr>
                      <tr>
                        <td>ระดับกิจกรรมในชีวิตประจำวัน :</td>
                        <td>{{$act}}</td>
                      </tr>
                      <tr>
                        <td>น้ำหนักเป้าหมาย ( กิโลกรัม ) :</td>
                        <td>{{$goalweight}}</td>
                      </tr>
                        <td>เวลาเป้าหมาย ( สัปดาห์ ) :</td>
                        <td>{{$goaldate}}</td>
                           
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


</html>