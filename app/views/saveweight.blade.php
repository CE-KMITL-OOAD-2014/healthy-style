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
			 <h1>Enter your weight today </h1>
			 <br>
			 
			 <div class="container">
				<div class="row">
					<div class="col-md-6"><span class="pull-left">น้ำหนักเริ่มต้น : {{$weight}} </span></div>
					
					<div class="col-md-6"><span class="pull-middle">น้ำหนักเป้าหมาย : {{$goalweight}} </span></div>
				</div>
			</div>
			 
			<br><br>
				<div class="progress">
					<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
					60%
					</div>
				</div>
			 
			 <form class="navbar-form navbar-right" role="search">
                    <div class="col-lg-3">
                        <input type="text" class="form-control" name="weightday" placeholder="YOUR WEIGHT">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">submit</button>
                </form>
        
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