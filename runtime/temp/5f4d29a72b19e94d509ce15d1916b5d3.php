<?php /*a:1:{s:72:"F:\PHPWAMP\wwwroot\tp5.1\wenjuan\application\admin\view\login\index.html";i:1588418205;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <title>后台登录</title>
    <link href="../static/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="../static/admin/css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="../static/admin/css/animate.css" rel="stylesheet">
    <link href="../static/admin/css/style.css" rel="stylesheet">
    <link href="../static/admin/css/login.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->
    <script>
        if (window.top !== window.self) {
            window.top.location = window.location;
        }
    </script>

</head>

<body class="signin">
<div class="signinpanel">
    <div class="row">
        <div class="col-sm-7">
            <div class="signin-info">
                <div class="logopanel m-b">
                    <h1>[ Hello ]</h1>
                </div>
                <div class="m-b"></div>
                <h4>欢迎使用 <strong>问卷管理系统后台</strong></h4>
                <ul class="m-b">
                    <li><i class="fa fa-arrow-circle-o-right m-r-xs"></i> 用户管理</li>
                    <li><i class="fa fa-arrow-circle-o-right m-r-xs"></i> 问卷管理</li>
                    <li><i class="fa fa-arrow-circle-o-right m-r-xs"></i> 权限管理</li>
                    <li><i class="fa fa-arrow-circle-o-right m-r-xs"></i> 问卷审核</li>
                    <li><i class="fa fa-arrow-circle-o-right m-r-xs"></i> 问卷统计</li>
                </ul>
                <!--<strong>还没有账号？ <a href="#">立即注册&raquo;</a></strong>-->
            </div>
        </div>
        <div class="col-sm-5">
            <form method="post" action="<?php echo url('admin/login/loginHandler'); ?>">
                <?php echo token(); ?>
                <h4 class="no-margins"><?php if((session('?error'))): ?><span style="color: red"><?php echo session('error'); ?></span><?php else: ?>登录<?php endif; ?></h4>
                <p class="m-t-md">登录到问卷系统后台</p>
                <input type="text" class="form-control uname" placeholder="用户名" name="username"/>
                <input type="password" class="form-control pword m-b" placeholder="密码" name="password"/>
                <!--<a href="">忘记密码了？</a>-->
                <input type="submit" class="btn btn-success btn-block" value="登录">
            </form>
        </div>
    </div>
    <div class="signup-footer">
        <div class="pull-left">
            &copy; 2015 All Rights Reserved. H+
        </div>
    </div>
</div>
</body>

</html>
