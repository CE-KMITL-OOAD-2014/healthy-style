@extends ('theme')
@section('title')
<title>Log in..</title>
@stop
@section('body')

    <br>
    <section id="login">
    <div class="container">
    
      <div class="row">
          <div class="col-xs-6">
              <div class="form-wrap">
                <h1>LOG IN....</h1>
                    <form action="{{url('signin')}}" method="post" role="search">
                        <div class="form-group">
                            <label for="name" class="sr-only">Email</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="key" class="sr-only">Password</label>
                            <input type="password" name="password" id="key" class="form-control" placeholder="Password">
                        </div>
                        <input type="submit" id="btn-login" class="btn btn-success btn-block btn-lg" value="Log in">
                    </form>
                    
              </div>
        </div> <!-- /.col-xs-12 -->
       
      </div> <!-- /.row -->
    </div> <!-- /.container -->
</section>



    <!-- /.container -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
@stop