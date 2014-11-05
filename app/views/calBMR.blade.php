@extends ('theme')
@section('title')
<title>คำนวณ BMR...</title>
@stop
@section('body')

<div class="container">
	<div class="row">
	
        <div class="span8">
            
    		<form action="{{url('/bmr')}}" method="post" class="form-horizontal" name="calBMRform" accept-charset="utf-8">
    			<h2>คำนวณ BMR(ค่าแคลอรี่ต่อวัน) </h2>
				
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
    				<label for="age" class="control-label">	
    					อายุ :
    				</label>
    				<div class="controls">
					   <input name="age" type="text" value="" id="age">
    				</div>
    			</div>
				
				<div class="control-group">
                    <label for="gender" class="control-label"> 
						เพศ :
                    </label>
                    <div class="controls">
                        <input type="radio" name="gender" value="0" >&nbspชาย&nbsp&nbsp&nbsp 						
                        <input type="radio" name="gender" value="1">&nbspหญิง
                    </div>
                </div>
				
				<div class="control-group">
                    <label for="age" class="control-label"> 
						กิจกรรมในชีวิตประจำวัน :  
                    </label>
                    <div class="controls">
						<input type="radio" name="act" value="1">&nbspSedentary <br>
						&nbsp&nbsp&nbsp&nbsp&nbsp<span class="help-inline">(น้อยมาก: ไม่ออกกำลังกาย-ทำงานที่ส่วนใหญ่นั่ง) </span><br>
                        <input type="radio" name="act" value="2">&nbspLightly active <br>
						&nbsp&nbsp&nbsp&nbsp&nbsp<span class="help-inline">(น้อย: ออกกำลังกายหรืเล่นกีฬา 1-2 วัน/อาทิตย์ หรือทำงานที่มีการเคลื่อนไหว) </span><br>
						<input type="radio" name="act" value="3">&nbspModerately active <br>
						&nbsp&nbsp&nbsp&nbsp&nbsp<span class="help-inline">(ปานกลาง: ออกกำลังกายหรือเล่นกีฬา 3-5 วัน/อาทิตย์) </span><br>
						<input type="radio" name="act" value="4">&nbspVery active <br>
						&nbsp&nbsp&nbsp&nbsp&nbsp<span class="help-inline">(มาก: ออกกำลังกายหรือเล่นกีฬา 6-7 วัน/อาทิตย์) </span><br>
						<input type="radio" name="act" value="5">&nbspExtra active<br>
						&nbsp&nbsp&nbsp&nbsp&nbsp<span class="help-inline">(มากที่สุด: ออกกำลังกายหรือเล่นกีฬาอย่างหนัก, อาชีพที่ใช้แรงงาน) </span><br>
                    </div>
                </div>

				<br>

    			<div class="form-actions">
					<button type="submit" class="btn btn-large btn-primary">คำนวณ</button><br>
					<br><label for="BMR" class="control-label">    
						ค่าแคลอรี่ที่ควรได้รับต่อวัน :
                    </label>
					&nbsp&nbsp<input name="txtSum" id="txtSim" type="text">
    				
    			</div>
			
    		</form>
    	</div> <!-- .span8 -->
	</div>
</div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

@stop