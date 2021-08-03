
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <script src="{{url('assets/js/jquery.min.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/2.0.46/css/materialdesignicons.min.css">

    <link href="{{url('assets/css/admin_app.min.css')}}" rel="stylesheet" type="text/css">
    <style>
        body{
            background:#020326;
            padding-top: 3%;
        }
        .loginbox{
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 2% 5% 5%;
        }
        .f-padding{
            padding: 20px 25px;
            border-radius: 5px;
            background: white!important;
        }
    </style>
</head>
<body class="theme-mda no-loader lr-page row">
   <h1 class=" text-center text-white"><b>FreshYum</b></h1>
   <div class="loginbox">
    <div class="page-background lr-page col-md-3 col-sm-8 col-xs-10 f-padding">
        <br>
        <div class="form-box" id="login-box">
            <div class="header text-theme text-center"><span class="h3">Sign In</span></div>
            <br>
            <?php 
            if(isset($errors) && $errors->first()!=''){ ?>

            <div class="alert alert-danger" style="text-align: center;">
                <strong><?php echo $errors->first(); ?></strong>
            </div>

        <?php }
        $session = \Session::get("msg");
        if($session != "" && \General::is_json($session)){ 
            $session = json_decode($session,true);
            \Session::forget("msg");
            ?>
            <div class="alert alert-danger" style="text-align: center;">
                <strong><?php echo $session['msg']; ?></strong>
            </div>
            <?php } ?>
            <form class="p-2" id="login_form" name="form" method='Post' action='{{URL::to('admin/login')}}'>
                <input type="hidden" name='_token' value='{{csrf_token()}}'>
                <div class="body">
                   {{--  <div class="input-field label-float">
                      <input name="email" id="email" type="email" class="clearable" placeholder="Email" autocomplete="off">
                      <div class="imput-highlight"></div>
                    </div> --}}
                    <div class="input-field label-float">
                      <input id="email" type="email" name="email" class="clearable" placeholder="email" autocomplete="off">
                      <div class="input-highlight"></div>
                  </div>
                  <br>
                  <div class="input-field label-float">
                      <input id="password" type="password" name="password" class="clearable" placeholder="Password" autocomplete="off">
                      <div class="input-highlight"></div>
                  </div>
                  <div class="form-group mt40">

                  </div>
              </div>
              <br>
              <div class="footer">                                          
                <button type="submit" class="btn theme btn-block waves-effect waves-light">Sign me in</button> 
                <br> 
            </div>
        </form>
    </div>
</div>
</div>
</body>
</html>