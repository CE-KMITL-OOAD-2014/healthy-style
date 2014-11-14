@extends ('theme')
@section('title')
<title>Profile...</title>
@stop
@section('body')

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
                          <td><input type="radio" name="gender" value="0" checked=true>&nbspชาย&nbsp&nbsp&nbsp             
                          <input type="radio" name="gender" value="1">&nbspหญิง</td>
                         </div>
                      </div>
                      </tr>

                      <tr>
                      <div class="form-group">
                          <td>ระดับกิจกรรมในชีวิตประจำวัน :</td>
                          <div class="controls">
                              <td><input type="radio" name="act" value="1">&nbsp Sedentary <br>
                              &nbsp&nbsp&nbsp&nbsp&nbsp<span class="help-inline">(น้อยมาก: ไม่ออกกำลังกาย-ทำงานที่ส่วนใหญ่นั่ง) </span><br>
                                          <input type="radio" name="act" value="2">&nbsp Lightly active <br>
                              &nbsp&nbsp&nbsp&nbsp&nbsp<span class="help-inline">(น้อย: ออกกำลังกายหรืเล่นกีฬา 1-2 วัน/อาทิตย์ หรือทำงานที่มีการเคลื่อนไหว) </span><br>
                              <input type="radio" name="act" value="3">&nbsp Moderately active <br>
                              &nbsp&nbsp&nbsp&nbsp&nbsp<span class="help-inline">(ปานกลาง: ออกกำลังกายหรือเล่นกีฬา 3-5 วัน/อาทิตย์) </span><br>
                              <input type="radio" name="act" value="4">&nbsp Very active <br>
                              &nbsp&nbsp&nbsp&nbsp&nbsp<span class="help-inline">(มาก: ออกกำลังกายหรือเล่นกีฬา 6-7 วัน/อาทิตย์) </span><br>
                              <input type="radio" name="act" value="5">&nbsp Extra active<br>
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
                          <td>วันเป้าหมาย  :</td>
                          <td><input type="text" name="goaldate" id="goaldate" class="form-control input-lg" placeholder="" tabindex="4"></td>
                        </div>
                      </tr>

                      <tr>
                        <div class="form-actions">
                          <td><button type="submit" value="Send" class="btn btn-large btn-primary">Update Profile</button></td>
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
@stop