<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Profile...</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

      <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Healthy Style</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="about.html">บทความ</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">ค่าแคลอรี่<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="Foodpage.html">อาหาร</a>
                            </li>
                            <li>
                                <a href="Sportpage.html">กิจกรรมการเผาผลาญพลังงาน</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">โปรแกรมการคำนวณ<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="BMI.html">BMI</a>
                            </li>
                            <li>
                                <a href="BMR.html">BMR</a>
                            </li>
                        </ul>
                    </li>
					<li>
                        <a href="Register.html">Register</a>
                    </li>
					<li>
                        <a href="LOGIN.html">LOG IN</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <br>
    <br>
    <br>
    <div class="container">
      <form action="{{url('profile')}}" method="post">
      <div class="row">
      <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
          

       
      <br>
      </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Fern Helecho</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>ชื่อที่ใช้แสดง :</td>
                        <td>fern helecho</td>
                      </tr>
                      <tr>
                        <td>น้ำหนัก ( กิโลกรัม ) : </td>
                        <td>60</td>
                      </tr>
                      <tr>
                        <td>ความสูง ( เซนติเมตร ) :</td>
                        <td>170</td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>เพศ : </td>
                        <td>ชาย</td>
                      </tr>
                        <tr>
                        <td>ระดับกิจกรรมในชีวิตประจำวัน :</td>
                        <td>น้อยมาก</td>
                      </tr>
                      <tr>
                        <td>น้ำหนักเป้าหมาย ( กิโลกรัม ) :</td>
                        <td>50</td>
                      </tr>
                        <td>เวลาเป้าหมาย ( สัปดาห์ ) :</td>
                        <td>3</td>
                           
                      </tr>
                     
                    </tbody>
                  </table>
                  
                  <a href="#" class="btn btn-primary">บันทึกข้อมูลลงในไดอารี่</a>&nbsp&nbsp&nbsp&nbsp
                  <a href="#" class="btn btn-primary">บันทึกน้ำหนักประจำวัน</a><br><br>
				  <a href="#" class="btn btn-primary">ดูข้อมูลในไดอารี่</a>&nbsp&nbsp&nbsp&nbsp
                  <a href="#" class="btn btn-primary">ดูบันทึกการเปลี่ยนแปลงของน้ำหนัก</a>
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                        
							<a href="editprosonal.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            &nbsp&nbsp<a href="index.html" data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
							
                            
                        
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

</body>

</html>