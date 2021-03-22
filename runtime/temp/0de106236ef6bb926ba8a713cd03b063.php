<?php /*a:1:{s:71:"F:\PHPWAMP\wwwroot\tp5.1\wenjuan\application\admin\view\index\user.html";i:1588483783;}*/ ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>H+ 后台主题UI框架 - 基础表格</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link rel="shortcut icon" href="favicon.ico"> <link href="../static/admin/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="../static/admin/css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="../static/admin/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="../static/admin/css/animate.css" rel="stylesheet">
    <link href="../static/admin/css/style.css?v=4.1.0" rel="stylesheet">

</head>
<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">

    <div class="row">

        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>用户信息表</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="table_basic.html#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="table_basic.html#">选项1</a>
                            </li>
                            <li><a href="table_basic.html#">选项2</a>
                            </li>
                        </ul>
                        <!--<a class="close-link">-->
                            <!--<i class="fa fa-times"></i>-->
                        <!--</a>-->
                    </div>
                </div>
                <div class="ibox-content">

                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>id编号</th>
                            <th>用户名</th>
                            <th>密码</th>
                            <th>选项</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($res as $vo): ?>
                        <tr>
                            <td><?php echo htmlentities($vo['id']); ?></td>
                            <td><?php echo htmlentities($vo['username']); ?></td>
                            <td><?php echo htmlentities($vo['password']); ?></td>
                            <td><button type="button" class="btn btn-w-m btn-success">查看用户问卷</button></td>
                        </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div style="text-align: center">
                    <nav aria-label="Page navigation">
                        <?php echo $res; ?>
                    </nav>
                </div>
            </div>
        </div>
    </div>

 </div>



<!-- 全局js -->
<script src="../static/admin/js/jquery.min.js?v=2.1.4"></script>
<script src="../static/admin/js/bootstrap.min.js?v=3.3.6"></script>



<!-- Peity -->
<script src="../static/admin/js/plugins/peity/jquery.peity.min.js"></script>

<!-- 自定义js -->
<script src="../static/admin/js/content.js?v=1.0.0"></script>


<!-- iCheck -->
<script src="../static/admin/js/plugins/iCheck/icheck.min.js"></script>

<!-- Peity -->
<script src="../static/admin/js/demo/peity-demo.js"></script>

<script>
    $(document).ready(function () {
        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $('.btn').each(function () {
            $(this).click(function () {
                var id=$(this).parent('td').siblings('td:first-child').html();
                 console.log(id);

                window.location.href="<?php echo url('admin/index/wj'); ?>?id="+id;
            });

        });
    })
</script>

</body>

</html>
