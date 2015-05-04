<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="<?php echo base_url(); ?>" />

    <title><?php echo $title ?> </title>

    <link href="<?php echo base_url().CSS_DIR; ?>/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url().PUB_DIR; ?>/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?php echo base_url().CSS_DIR; ?>/animate.css" rel="stylesheet">
    <link href="<?php echo base_url().CSS_DIR; ?>/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

<div class="middle-box text-center loginscreen  animated fadeInDown">
    <div>
        <div>

            <h1 class="logo-name">IN+</h1>

        </div>
        <h3>欢迎！</h3>
        <p> 这里是毕业设计作品展示平台
            <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
        </p>
        <p></p>
        <form class="m-t" role="form" action="login/validate" method="post">
            <div class="form-group">
                <input type="username" name="username" class="form-control" placeholder="Username" required="">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password" required="">
            </div>
            <button type="submit" class="btn btn-primary block full-width m-b">登录</button>

            <a href="#"><small>忘记密码?</small></a>
            <p class="text-muted text-center"><small>还为拥有账号?</small></p>
            <a class="btn btn-sm btn-white btn-block" href="login/register">创建账号</a>
        </form>
        <p class="m-t"> <small>www.t-uvw.xyz &copy; 2015</small> </p>
    </div>
</div>

<!-- Mainly scripts -->
<script src="<?php echo base_url().JS_DIR;?>/jquery-2.1.1.js"></script>
<script src="<?php echo base_url().JS_DIR;?>/bootstrap.min.js"></script>

</body>

</html>
