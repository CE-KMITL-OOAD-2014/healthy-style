@extends ('theme')
@section('title')
<title>Register..</title>
@stop
@section('body')

<br>

<div class="container">
	<form action="{{url('/signup')}}" method="post">
        <div class="row">
           
            <div class="span8">
              
             <h2>Please Sign Up <small>......</small></h2>
             
             <div class="form-group">
                <input type="text" name="name" id="name" class="form-control input-lg" placeholder="Name" tabindex="4">
            </div>

            <div class="form-group">
                <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4">
            </div>
            
            <div class="form-group">
                <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="4">
            </div>
            
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
                <label for="gender" class="control-label"> 
                  เพศ :
              </label>
              <div class="controls">
                
                <input type="radio" name="gender" value="0" checked=true>&nbspชาย&nbsp&nbsp&nbsp 						
                <input type="radio" name="gender" value="1">&nbspหญิง
                
            </div>
        </div>

        <br>
        <div class="control-group">
            <label for="act" class="control-label"> 
              กิจกรรมในชีวิตประจำวัน :  
          </label>
          <div class="controls">
            
              <input type="radio" name="act" value="1">&nbsp Sedentary <br>
              &nbsp&nbsp&nbsp&nbsp&nbsp<span class="help-inline">(น้อยมาก: ไม่ออกกำลังกาย-ทำงานที่ส่วนใหญ่นั่ง) </span><br>
              <input type="radio" name="act" value="2">&nbsp Lightly active <br>
              &nbsp&nbsp&nbsp&nbsp&nbsp<span class="help-inline">(น้อย: ออกกำลังกายหรืเล่นกีฬา 1-2 วัน/อาทิตย์ หรือทำงานที่มีการเคลื่อนไหว) </span><br>
              <input type="radio" name="act" value="3">&nbsp Moderately active <br>
              &nbsp&nbsp&nbsp&nbsp&nbsp<span class="help-inline">(ปานกลาง: ออกกำลังกายหรือเล่นกีฬา 3-5 วัน/อาทิตย์) </span><br>
              <input type="radio" name="act" value="4">&nbsp Very active <br>
              &nbsp&nbsp&nbsp&nbsp&nbsp<span class="help-inline">(มาก: ออกกำลังกายหรือเล่นกีฬา 6-7 วัน/อาทิตย์) </span><br>
              <input type="radio" name="act" value="5">&nbsp Extra active<br>
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
    <br><br>
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

@stop





