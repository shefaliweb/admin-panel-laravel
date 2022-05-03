<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="../assets/css/main.css">
  <!-- Font-icon css-->

  <title>Login</title>
</head>
<body>
  <section class="material-half-bg">
    <div class="cover"></div>
  </section>
  <section class="login-content">
<!--     <div class="logo">
      <h1>admin</h1>
    </div> -->
    <div class="login-box">
      <form class="login-form" action="{{url('/admin_login')}}" method="post">
        @csrf
        <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>Login</h3>
     <!--    @if($errors)
        @foreach($errors->all() as $error)
        <p class="text-danger ">{{$error}}</p>
        @endforeach
        @endif
 -->
        @if(Session::has('error'))
        <p class="text-danger text-center">{{session('error')}}</p>
        @endif
        <div class="form-group">
          <label class="control-label">USERNAME</label>
          <input class="form-control" type="text" placeholder="Username" name="username" required="" >
      <!--     @if ($errors->has('username'))
          <span class="text-danger">{{ $errors->first('username') }}</span>
          @endif -->
        </div>
        <div class="form-group">
          <label class="control-label">PASSWORD</label>
          <input class="form-control" type="password" placeholder="Password" name="password" required="">
          <!-- @if ($errors->has('password'))
          <span class="text-danger">{{ $errors->first('password') }}</span>
          @endif -->
        </div>

        <div class="form-group btn-container">
          <button class="btn btn-primary btn-block" type="submit"><i class="fa fa-sign-in fa-lg fa-fw"></i>Sign In</button>
        </div>
        <br>
 <!--        <div class="text-center">

          <a href="{{url('/Register')}}">Register Now</a>
        </div> -->
          

       </form>
       
      

    </div>

  </section>
  <!-- Essential javascripts for application to work-->
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <!-- The javascript plugin to display page loading on top-->
  <script src="js/plugins/pace.min.js"></script>
  <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });
    </script>
  </body>

  </html>