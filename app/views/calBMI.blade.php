@extends ('theme')
@section('title')
<title>คำนวณ BMI...</title>
@stop
@section('body')
    
    <!-- Page Content -->
 
    <div class="container">
	<div class="row">
	
        <div class="span8">
    		<form action="{{url('/bmi')}}" method="post" class="form-horizontal" name="calBMIform" accept-charset="utf-8">
            <h2>คำนวณ BMI(ดัชนีมวลกาย) </h2>
    			
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

                
				<br>
                <br>
				
    			<div class="form-actions">
					<button type="submit" class="btn btn-large btn-primary">คำนวณ</button><br>
					
                    
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