<?php /*a:1:{s:72:"F:\PHPWAMP\wwwroot\tp5.1\wenjuan\application\admin\view\index\wjAll.html";i:1588584685;}*/ ?>
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


    <link type="text/css" rel="stylesheet" href="../static/index/question/resources/skin/base.css">
    <link type="text/css" rel="stylesheet" href="../static/index/question/resources/skin/blue.css">
    <link type="text/css" rel="stylesheet" href="../static/index/question/resources/skin/content.css">
</head>
<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">

    <div class="row">

        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>所有问卷信息</h5>
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
                            <th>问卷编号</th>
                            <th>问卷名</th>
                            <th>用户id</th>
                            <th>审核状态</th>
                            <th>查看选项</th>
                            <th>审核选项</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($res as $vo): ?>
                        <tr>
                            <td><?php echo htmlentities($vo['paperid']); ?></td>
                            <td><?php echo htmlentities($vo['title']); ?></td>
                            <td><?php echo htmlentities($vo['userid']); ?></td>
                            <?php if(($vo['status']==0)): ?>
                            <td style="margin-left: 10px;color: blue" class="audit" status="<?php echo htmlentities($vo['status']); ?>">[未审核]</td>
                            <?php elseif(($vo['status']==1)): ?>
                            <td style="margin-left: 10px;color: green" class="audit" status="<?php echo htmlentities($vo['status']); ?>">[审核通过]</td>
                            <?php else: ?>
                            <td style="margin-left: 10px;color: red" class="audit" status="<?php echo htmlentities($vo['status']); ?>">[审核未通过]</td>
                            <?php endif; ?>
                            <td><button type="button" class="btn btn-w-m btn-success">查看问卷详情</button></td>
                            <td><button type="button" class="btn btn-outline btn-primary">审核通过</button>
                                <button type="button" class="btn btn-outline btn-danger">未通过</button>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div style="text-align: center">
                    <nav aria-label="Page navigation">
                        <?php echo $page; ?>
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
<script src="../static/admin/layer/layer.js"></script>
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
        $('.btn-success').each(function () {
            $(this).click(function () {
                var paperid=$(this).parent('td').siblings('td:first-child').html();
                console.log(paperid);
                $.get("<?php echo url('admin/index/show'); ?>",{id:paperid},function (e) {
                    var dataObj=eval("("+e+")");
                    //var dataObj=JSON.stringify(e);
                    console.log(dataObj);
                    var tmp="";
                    for (var i in dataObj){
                        tmp=dataObj[i];
                    }
                    //console.log(tmp);
                    layer.open({
                        type: 1,
                        skin: 'layui-layer-rim', //加上边框
                        area: ['700px', '600px'], //宽高
                        content: tmp,
                    });
                    //console.log(tmp);
                    // console.log(JSON.stringify(eval(e)));
                },'json');
            });

        });
        //审核问卷
        $('.btn-primary').each(function () {
            $(this).click(function () {
                //定义变量存放问卷id
                var wjid=$(this).parent('td').siblings('td:first-child').html();
                //alert(wjid);
                $.ajax({
                    type:"get",
                    url:"<?php echo url('admin/index/audit'); ?>",
                    data: {id:wjid},
                    success:function (e) {
                        //console.log('ss');
                        if (e===1){
                            // alert(1111);
                            // $(this).parent('td').siblings('.audit').css('color','green');
                            // $(this).parent('td').siblings('.audit').html("[审核通过]");
                            window.location.reload()
                        }
                    }
                });

            })
        });


        $('.btn-danger').each(function () {
            $(this).click(function () {
                //定义变量存放问卷id
                var wjid=$(this).parent('td').siblings('td:first-child').html();
                //alert(wjid);
                $.ajax({
                    type:"get",
                    url:"<?php echo url('admin/index/audit2'); ?>",
                    data: {id:wjid},
                    success:function (e) {
                        //console.log('ss');
                        if (e===1){
                            // alert(1111);
                            // $(this).parent('td').siblings('.audit').css('color','green');
                            // $(this).parent('td').siblings('.audit').html("[审核通过]");
                            window.location.reload()
                        }
                    }
                });

            })
        })
    })
</script>

</body>

</html>
