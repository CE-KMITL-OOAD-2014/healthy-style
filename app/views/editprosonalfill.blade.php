@extends ('theme')
@section('title')
<title>Edit Profile..</title>
@stop
@section('body')

    <div class="container">
	<div class="row">
	
        <div class="span8">
    		<form action="{{url('/editprofile')}}" method="post">
    			<h2>แก้ไขข้อมูลส่วนตัว....</h2>
				<div class="control-group">
				
    			<div class="form-group">
                    
                    <div class="form-group">
                            <input type="text" name="age" id="age" class="form-control input-lg" placeholder="Age" tabindex="4">
                    </div>

                    <div class="form-group">
                            <input type="text" name="weight" id="weight" class="form-control input-lg" placeholder="Weight(Kg.)" tabindex="4">
                    </div>

                    <div class="form-group">
                            <input type="text" name="height" id="height" class="form-control input-lg" placeholder="Height(Cm.)" tabindex="4">
                    </div>
     
  
				<div class="control-group">
                    <label for="sex" class="control-label"> 
						เพศ :
                    </label>
                    <div class="controls">
                    <form name="formsex" id="formsex" method="post" onsubmit="BMRCal();">
                        <input type="radio" name="sex" value="male" checked=true>&nbspชาย&nbsp&nbsp&nbsp 						
                        <input type="radio" name="sex" value="female">&nbspหญิง
                    </form>
                    </div>
                </div>
				<br>
				<div class="control-group">
                    <label for="age" class="control-label"> 
						กิจกรรมในชีวิตประจำวัน :  
                    </label>
                    <div class="controls">
                    <form>
						<input type="radio" name="act" value="act1">&nbspSedentary <br>
						&nbsp&nbsp&nbsp&nbsp&nbsp<span class="help-inline">(น้อยมาก: ไม่ออกกำลังกาย-ทำงานที่ส่วนใหญ่นั่ง) </span><br>
                        <input type="radio" name="act" value="act2">&nbspLightly active <br>
						&nbsp&nbsp&nbsp&nbsp&nbsp<span class="help-inline">(น้อย: ออกกำลังกายหรืเล่นกีฬา 1-2 วัน/อาทิตย์ หรือทำงานที่มีการเคลื่อนไหว) </span><br>
						<input type="radio" name="act" value="act3">&nbspModerately active <br>
						&nbsp&nbsp&nbsp&nbsp&nbsp<span class="help-inline">(ปานกลาง: ออกกำลังกายหรือเล่นกีฬา 3-5 วัน/อาทิตย์) </span><br>
						<input type="radio" name="act" value="act4">&nbspVery active <br>
						&nbsp&nbsp&nbsp&nbsp&nbsp<span class="help-inline">(มาก: ออกกำลังกายหรือเล่นกีฬา 6-7 วัน/อาทิตย์) </span><br>
						<input type="radio" name="act" value="act5">&nbspExtra active<br>
						&nbsp&nbsp&nbsp&nbsp&nbsp<span class="help-inline">(มากที่สุด: ออกกำลังกายหรือเล่นกีฬาอย่างหนัก, อาชีพที่ใช้แรงงาน) </span><br>
                    </form>
                    </div>
                </div>
				<br>
				
				<label for="weight" class="control-label">	
    					น้ำหนักเป้าหมาย :
    				</label>
    				<div class="controls">
    					<input name="weight" type="text" value="" id="weight">
    					<span class="help-inline">  กิโลกรัม</span>
						<span class="help-inline">  ( หากไม่ต้องการลดน้ำหนักให้ใส่ค่า 0 )</span>
    				</div>
    			</div>
				
				<br>
				<label for="weight" class="control-label">	
    					จำนวนสัปดาห์เป้าหมาย :
    				</label>
    				<div class="controls">
    					<input name="weight" type="text" value="" id="weight">
    					<span class="help-inline">  สัปดาห์</span>
						<span class="help-inline">  ( หากไม่ต้องการลดน้ำหนักให้กำหนด 0 สัปดาห์ )</span>
    				</div>
    			</div>
				<br>
    			<div class="form-actions">
					<button type="submit"  value="Send" class="btn btn-large btn-primary">Update Profile</button><br><br>
                <br>
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