<html>
	<head>
		<title> Examples </title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</head>
	
	<body>
	<div class = "container">
		<div>
			<div class="panel panel-danger">
				<div class="panel-heading "> Heading</div>
	
				
				<div class="panel-body "> <div>
				<div class = "col-md-6 col-xs-6 ">
					<div>
						<img src="IMG_0910.PNG" width="300" height="450"> 
					</div>
				</div>
				<div class = "col-md-6 col-xs-6 ">
					<div>
					<h1><div class="label label-default">Name</div>   Kiki<br></h1>
					<h1><div class="label label-Primary">Surname</div>   KuKu<br></h1>
					<h1><div class="label label-success">Age</div>   108<br></h1>
					<h1><div class="label label-info">Like</div>   dog<br></h1>
					<h1><div class="label label-danger">Hate</div>   snake<br></h1>
					
					
				</div>
		
				<div>
					<table border="5" width="300">
					<form action="{{ url('/') }}" method="POST">

					<tr>
					<td width="200" >Name:</td>
					<td><input type="text" class="form-control"  name="user"></td>
					</tr>
			
					<tr>
					<td width="200">Comment:</td>
					<td><input type="text" class="form-control" name="comment"></td>
					</tr>
			
					<tr>
						<td width="200"  >feeling:</td>
						<td><input  type="radio" name ="feeling" value="like">like<br>
						<input type="radio" name ="feeling" value="Hate">Hate<br>
						<input type="radio" name ="feeling" value="Go to Hell">Go to Hell </td>
					</tr>
						<td width="200">Submit:</td>
						<td> <input class="btn btn-danger" type="submit"></td>
					</form>
					</table>
				</div>
			</div>
		</div>
	</div>
		<!--<div class="row">
			<div class="col-md-3 col-xs-6 well"></div>
			<div class="col-md-3 col-xs-6 well"></div>
		</div>
		
		<div class="row">
			<div class="col-md-3 col-xs-4 well"></div>
			<div class="col-md-3 col-xs-4 well"></div>
			<div class="col-md-3 col-xs-4 well"></div>
		</div>

		<div>
	<div class = "col-md-6 col-xs-6 well"/>
			<div>
				<img src="IMG_0910.png" width="300" height="150"> 
			</div>
	</div>
	<div class = "col-md-6 col-xs-6 well"/>
			<div>
				<p> Name : Nutcharee <br>Surname : Samsawang<br>Age : 20 
				<br> Like : dog <br> Hate : snake </p>
			</div>
		
			<div>
				<table border="5" width="300">
			<tr>
				<td width="200">Name:</td>
				<td><input type="text" name="name"></td>
			</tr>
			
			<tr>
				<td width="200">Comment:</td>
				<td><input type="text" name="comment"></td>
			</tr>
			
			<tr>
				<td width="200">feeling:</td>
				<td><input type="radio" name ="feeling">like<br>
				<input type="radio" name ="feeling">Hate<br>
				<input type="radio" name ="feeling">Go to Hell </td>
			</tr>
				<td width="200">Submit:</td>
				<td> <input type="submit"></td>
				</table>
			</div>-->
	</div>


			<div> 
			<h2> Comments </h2>
			@foreach($comments as $comment)
			<div>
				<header>
					{{ $comment->user }} is feeling
						{{$comment->feeling}}
					({{ $comment->created_at }})
				</header>
				<div> {{ $comment->comment}} </div>	
			</div>
			<hr>
			@endforeach

		</div>
		</div>
	</body>
</html>