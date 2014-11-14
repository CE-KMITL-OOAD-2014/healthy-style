@extends ('theme')
@section('title')
<title>บันทึกน้ำหนัก</title>
@stop
@section('body')

	<div class="container">
	<form action="{{url('saveweight')}}" method="post" >
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-8">
			 <h1>บันทึกและดูการเปลี่ยนแปลงของน้ำหนัก... </h1>
			 <br>
			 
			 <div class="container">
				<div class="row">
					<div class="col-md-3"><span class="pull-left">น้ำหนักเริ่มต้น : {{$weight}} </span></div>
					
					<div class="col-md-3"><span class="pull-right">น้ำหนักเป้าหมาย : {{$goalweight}} </span></div>
				</div>
			</div>
			<br><br>
			 <form class="navbar-form navbar-right" role="search">
                    <div class="col-lg-6">
                        <h5>น้ำหนักปัจจุบันที่ต้องการบันทึก :</h5>
                        <br><input type="text" name="weightday" class="form-control" placeholder="YOUR WEIGHT">
                    	<br><button type="submit" class="btn btn-primary">submit</button> 
            </form>

           	</div>
    </form>
            <br><br><br><br><br><br><br><br>
            <form action="{{url('changeweight')}}" method="get" >
                    	&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-success">ดูบันทึกการเปลี่ยนแปลงของน้ำหนัก</button>
            </form>
                    
               
        
	</div>

		

   
    <!-- /.container -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>




@stop