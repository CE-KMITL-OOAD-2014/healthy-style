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

      <form action="{{url('/editprofile')}}" method="post">
      <div class="row">
      <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
          

       
      <br>
      </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">EditProfile...<small>(หากข้อมูลส่วนไหนไม่ต้องการแก้ไขให้กรอกข้อมูลเดิม)</small></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class=" col-md-12 col-lg-12 ">  
                  <table class="table table-user-information">
                    <tbody>

                      <tr>
                        <div class="form-group">
                          <td>email:</td>
                          <td><input type="email" name="email" id="email" class="form-control input-lg" placeholder="" tabindex="4"></td>
                        </div>
                      </tr>

                      <tr>
                        <div class="form-group">
                          <td>password:</td>
                          <td><input type="password" name="password" id="password" class="form-control input-lg" placeholder="" tabindex="4"></td>
                        </div>
                      </tr>

                     
                      <tr>
                        <div class="form-group">
                          <td>ชื่อที่ใช้แสดง(ชื่อที่ใช้ในการสมัคร):</td>
                          <td><input type="text" name="name" id="name" class="form-control input-lg" placeholder="" tabindex="4"></td>
                        </div>
                      </tr>

                      <tr>
                        <div class="form-group">
                          <td>อายุ:</td>
                          <td><input type="text" name="age" id="age" class="form-control input-lg" placeholder="" tabindex="4"></td>
                        </div>
                      </tr>

                      <tr>
                        <div class="form-group">
                          <td>น้ำหนัก ( กิโลกรัม ):</td>
                          <td><input type="text" name="weight" id="weight" class="form-control input-lg" placeholder="" tabindex="4"></td>
                        </div>
                      </tr>

                      <tr>
                        <div class="form-group">
                          <td>ความสูง ( เซนติเมตร ):</td>
                          <td><input type="text" name="height" id="height" class="form-control input-lg" placeholder="" tabindex="4"></td>
                        </div>
                      </tr>

                      <tr>
                      <div class="control-group">
                          <td>เพศ:</td>                    
                         <div class="controls">
                          <td><input type="radio" name="gender" value="male" checked=true>&nbspชาย&nbsp&nbsp&nbsp             
                          <input type="radio" name="gender" value="female">&nbspหญิง</td>
                         </div>
                      </div>
                      </tr>

                      <tr>
                      <div class="form-group">
                          <td>ระดับกิจกรรมในชีวิตประจำวัน :</td>
                          <div class="controls">
                              <td><input type="radio" name="act" value="น้อยมาก">&nbsp Sedentary <br>
                              &nbsp&nbsp&nbsp&nbsp&nbsp<span class="help-inline">(น้อยมาก: ไม่ออกกำลังกาย-ทำงานที่ส่วนใหญ่นั่ง) </span><br>
                                          <input type="radio" name="act" value="น้อย">&nbsp Lightly active <br>
                              &nbsp&nbsp&nbsp&nbsp&nbsp<span class="help-inline">(น้อย: ออกกำลังกายหรืเล่นกีฬา 1-2 วัน/อาทิตย์ หรือทำงานที่มีการเคลื่อนไหว) </span><br>
                              <input type="radio" name="act" value="ปานกลาง">&nbsp Moderately active <br>
                              &nbsp&nbsp&nbsp&nbsp&nbsp<span class="help-inline">(ปานกลาง: ออกกำลังกายหรือเล่นกีฬา 3-5 วัน/อาทิตย์) </span><br>
                              <input type="radio" name="act" value="มาก">&nbsp Very active <br>
                              &nbsp&nbsp&nbsp&nbsp&nbsp<span class="help-inline">(มาก: ออกกำลังกายหรือเล่นกีฬา 6-7 วัน/อาทิตย์) </span><br>
                              <input type="radio" name="act" value="มากที่สุด">&nbsp Extra active<br>
                              &nbsp&nbsp&nbsp&nbsp&nbsp<span class="help-inline">(มากที่สุด: ออกกำลังกายหรือเล่นกีฬาอย่างหนัก, อาชีพที่ใช้แรงงาน) </span><br></td>
                    
                    </div>
                        </div>
                      </tr>

                      <tr>
                      <div class="form-group">
                          <td>น้ำหนักเป้าหมาย ( กิโลกรัม ) :</td>
                          <td><input type="text" name="goalweight" id="goalweight" class="form-control input-lg" placeholder="" tabindex="4"></td>
                        </div>

                      </tr>

                      <tr>
                      <div class="form-group">
                          <td>เวลาเป้าหมาย ( สัปดาห์ ) :</td>
                          <td><input type="text" name="goaldate" id="goaldate" class="form-control input-lg" placeholder="" tabindex="4"></td>
                        </div>
                      </tr>

                      <tr>
                        <div class="form-actions">
                          <td><button type="submit" value="Send" class="btn btn-large btn-primary">Update</button></td>
                        </div>    
                      </tr>

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