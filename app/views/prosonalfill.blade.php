<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Prosonal...</title>

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

    <br><br><br>
    
    <div class="container">
	<form action="{{url('prosonal')}}" method="post">
    <div class="row">
	
        <div class="span8">
    		
    			<h2>กรอกข้อมูลส่วนตัว....</h2>
				
    				

                    <div class="control-group">
    				    <label for="age" class="control-label">	
    					   อายุ :
    				    </label>
    				    <div class="controls">
					           <input name="age" type="text" value="" id="age">
					           <span class="help-inline">ปี</span>
    				    </div>
    			    </div>
				
                    <div class="control-group">
				        <label for="weight" class="control-label">	
    					   น้ำหนัก :
    				    </label>
    				    <div class="controls">
    					       <input name="weight" type="text" value="" id="weight">
    					       <span class="help-inline">  กิโลกรัม</span>
    				    </div>
    			     </div>
     
    			<div class="control-group">
    				<label for="height" class="control-label">	
    					ส่วนสูง :
    				</label>
    				<div class="controls">
					   <input name="height"type="text" value="" id="height">
					   <span class="help-inline">  เซนติเมตร</span>
    				</div>
    			</div>
     
  
				<div class="control-group">
                    <label for="gender" class="control-label"> 
						เพศ :
                    </label>
                    <div class="controls">
                    
                        <input type="radio" name="gender" value="male" checked=true>&nbspชาย&nbsp&nbsp&nbsp 						
                        <input type="radio" name="gender" value="female">&nbspหญิง
                    
                    </div>
                </div>

				<br>
				<div class="control-group">
                    <label for="act" class="control-label"> 
						กิจกรรมในชีวิตประจำวัน :  
                    </label>
                    <div class="controls">
                    
						<input type="radio" name="act" value="น้อยมาก">&nbsp Sedentary <br>
						&nbsp&nbsp&nbsp&nbsp&nbsp<span class="help-inline">(น้อยมาก: ไม่ออกกำลังกาย-ทำงานที่ส่วนใหญ่นั่ง) </span><br>
                        <input type="radio" name="act" value="น้อย">&nbsp Lightly active <br>
						&nbsp&nbsp&nbsp&nbsp&nbsp<span class="help-inline">(น้อย: ออกกำลังกายหรืเล่นกีฬา 1-2 วัน/อาทิตย์ หรือทำงานที่มีการเคลื่อนไหว) </span><br>
						<input type="radio" name="act" value="ปานกลาง">&nbsp Moderately active <br>
						&nbsp&nbsp&nbsp&nbsp&nbsp<span class="help-inline">(ปานกลาง: ออกกำลังกายหรือเล่นกีฬา 3-5 วัน/อาทิตย์) </span><br>
						<input type="radio" name="act" value="มาก">&nbsp Very active <br>
						&nbsp&nbsp&nbsp&nbsp&nbsp<span class="help-inline">(มาก: ออกกำลังกายหรือเล่นกีฬา 6-7 วัน/อาทิตย์) </span><br>
						<input type="radio" name="act" value="มากที่สุด">&nbsp Extra active<br>
						&nbsp&nbsp&nbsp&nbsp&nbsp<span class="help-inline">(มากที่สุด: ออกกำลังกายหรือเล่นกีฬาอย่างหนัก, อาชีพที่ใช้แรงงาน) </span><br>
                    
                    </div>
                </div>
				<br>
				
				<label for="goalweight" class="control-label">	
    					น้ำหนักเป้าหมาย :
    				</label>
    				<div class="controls">
    					<input name="goalweight" type="text" value="" id="goalweight">
    					<span class="help-inline">  กิโลกรัม</span>
						<span class="help-inline">  ( หากไม่ต้องการลดน้ำหนักให้ใส่ค่า 0 )</span>
    				</div>

                    <br>
                <label for="goaldate" class="control-label">    
                        จำนวนสัปดาห์เป้าหมาย :
                    </label>
                    <div class="controls">
                        <input name="goaldate" type="text" value="" id="goaldate">
                        <span class="help-inline">  สัปดาห์</span>
                        <span class="help-inline">  ( หากไม่ต้องการลดน้ำหนักให้กำหนด 0 สัปดาห์ )</span>
                    </div>

                <br>
                <div class="form-actions">
                    <button type="submit" value="Send" class="btn btn-large btn-primary">บันทึกข้อมูลส่วนตัว</button><br>
                </div>
            
        </div>
                
    </div>
    </form>
</div>
</body>
    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

  


</html>


    



