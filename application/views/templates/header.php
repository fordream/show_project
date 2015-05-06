<!DOCTYPE html>
<html>
<head>

    <base href="<?php echo base_url(); ?>" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $title ?>-大学生毕业设计展示平台</title>

    <link href="<?php echo base_url().TP_DIR; ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url().PUB_DIR;?>/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="<?php echo base_url().CSS_DIR;?>/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="<?php echo base_url().JS_DIR;?>/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="<?php echo base_url().CSS_DIR;?>/animate.css" rel="stylesheet">
    <link href="<?php echo base_url().CSS_DIR;?>/style.css" rel="stylesheet">

    <link href="<?php echo base_url() . CSS_DIR; ?>/graph/first.css" rel="stylesheet" type="text/css" />
<body class="gray-bg boxed-layout">
<div class="row">
    <div class="col-lg-3">
        </div>
<div class="passwordBox animated fadeInDown col-lg-9" style="width: 980px">
    <div class="row">

        <div class="col-md-12">

            <nav class="navbar navbar-static-top gray-bg" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="homepage/index"><i class="fa fa-rss"></i> </a>
                    <div class="navbar-form-custom">
                        <div class="form-group">
                            <button type="text" class="form-control" >毕业设计作品展示平台</button>
                        </div>
                    </div>
                </div>
                <?php
                if(!array_key_exists('logged_in', $this->session->all_userdata())) { ?>

                    <ul class="nav navbar-top-links navbar-right">
                        <li>
                            <span class="m-r-sm text-muted welcome-message">欢迎您！<?php echo $username ?></span>
                        </li>
                        <li>
                            <a href="login/register">
                                <i class="fa fa-plus"></i> 注册
                            </a>
                        </li>

                        <li>
                            <a href="login/index">
                                <i class="fa fa-sign-in"></i> 登录
                            </a>
                        </li>
                    </ul>

                <?php } else { ?>

                    <ul class="nav navbar-top-links navbar-right">
                        <li>
                            <span class="m-r-sm text-muted welcome-message">欢迎您！<?php echo $username ?></span>
                        </li>

                        <li>
                            <small>
                            <a href="topdetail/addwork">
                                <i class="fa fa-comment"></i> 发布作品
                            </a>
                            </small>
                        </li>

                        <li>
                            <small>
                            <a href="topdetail/addnote">
                                <i class="fa fa-comments"></i> 发布帖子
                            </a>
                            </small>
                        </li>

                        <li>
                            <a href="homepage/logout">
                                <i class="fa fa-sign-out"></i> 退出系统
                            </a>
                        </li>
                    </ul>

                <?php }
                ?>
            </nav>
