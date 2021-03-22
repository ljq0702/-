<?php /*a:1:{s:74:"F:\PHPWAMP\wwwroot\tp5.1\wenjuan\application\admin\view\index\welcome.html";i:1604563681;}*/ ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--360浏览器优先以webkit内核解析-->


    <title>后台管理</title>

    <link rel="shortcut icon" href="../static/admin/favicon.ico"> <link href="../static/admin/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="../static/admin/css/font-awesome.css?v=4.4.0" rel="stylesheet">

    <link href="../static/admin/css/animate.css" rel="stylesheet">
    <link href="../static/admin/css/style.css?v=4.1.0" rel="stylesheet">


</head>

<body class="gray-bg">
<div class="row  border-bottom white-bg dashboard-header">
    <div class="col-sm-12">
        <blockquote class="text-warning" style="font-size:14px">
            <h4 class="text-danger">欢迎来到~~问卷管理系统后台</h4>
        </blockquote>

        <hr>
    </div>
    <div class="col-sm-5">
        <h2>
            问卷管理
        </h2>
        <p>
            提供各种所需问卷题型，一件调用，深度调查，满足您对问卷专业性及个性化需求。
        </p>
        <br>
        <p>
            <a class="btn btn-success btn-outline" href="http://wpa.qq.com/msgrd?v=3&uin=516477188&site=qq&menu=yes" target="_blank">
                <i class="fa fa-qq"> </i> 联系我
            </a>
            <a class="btn btn-white btn-bitbucket" href="http://www.zi-han.net" target="_blank">
                <i class="fa fa-home"></i> 访问博客
            </a>
        </p>
    </div>
    <div class="col-sm-4">
        <h4>系统具有以下特点：</h4>
        <ol>
            <li>基础题型 满足您更多的业务需求</li>
            <li>简单三步，即可获取数据</li>
            <li>多端支持，各行各业都在用</li>
            <li>更多……</li>
        </ol>
    </div>

</div>
<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-sm-6">

            <!--<div class="ibox float-e-margins">-->
                <!--<div class="ibox-title">-->
                    <!--<h5>二次开发</h5>-->
                <!--</div>-->
                <!--<div class="ibox-content">-->
                    <!--<p>我们提供基于H+的二次开发服务，具体费用请联系作者。</p>-->
                    <!--<p>同时，我们也提供以下服务：</p>-->
                    <!--<ol>-->
                        <!--<li>基于WordPress的网站建设和主题定制</li>-->
                        <!--<li>PSD转WordPress主题</li>-->
                        <!--<li>PSD转XHTML</li>-->
                        <!--<li>Html页面（CSS+XHTML+jQuery）制作</li>-->
                    <!--</ol>-->
                <!--</div>-->
            <!--</div>-->
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>联系信息</h5>

                </div>
                <div class="ibox-content">
                    <p><i class="fa fa-send-o"></i> 博客：<a href="javascript:void (0);">http://www.zi-han.net</a>
                    </p>
                    <p><i class="fa fa-qq"></i> QQ：<a href="http://wpa.qq.com/msgrd?v=3&uin=516477188&site=qq&menu=yes" target="_blank">1063080020</a>
                    </p>
                    <p><i class="fa fa-weixin"></i> 微信：<a href="javascript:;">李俊强</a>
                    </p>
                    <p><i class="fa fa-credit-card"></i> 电话：<a href="javascript:;" class="电话">17828021938</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="ibox">
                <div class="ibox-content">
                    <h5>用户数量</h5>
                    <h2><?php echo htmlentities($user_count); ?></h2>
                    <div id="sparkline1"></div>
                </div>
            </div>
            <div class="ibox">
                <div class="ibox-content">
                    <h5>问卷数量</h5>
                    <h2><?php echo htmlentities($wenjuan_count); ?></h2>
                    <div id="sparkline1"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script id="welcome-template" type="text/x-handlebars-template">
    <div class="border-bottom white-bg page-heading clearfix">
        <h2>更新日志：</h2>
        <div>今天是情人节，H+终于跨到了v3.0，就算是情人节礼物吧，感谢你们的不离不弃，一路相伴！</div>
        <div class="pull-right">——Beau-zihan / 2015.8.20</div>
    </div>
    <div class="m">
        <div class="tabs-container">
            <div class="tabs-left">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a data-toggle="tab" href="#layouts"><i class="fa fa-columns"></i> 布局
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#new"><i class="fa fa-plus-square"></i> 新增
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#update"><i class="fa fa-arrow-circle-o-up"></i> 升级
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#revise"><i class="fa fa-pencil"></i> 修正
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#optimize"><i class="fa fa-magic"></i> 优化
                        </a>
                    </li>
                </ul>
                <div class="tab-content" style="line-height:1.8em;">
                    <div id="layouts" class="tab-pane active">
                        <div class="panel-body">
                            <ol class="no-left-padding">
                                <li class="text-danger"><b>推荐：</b>期待已久的contentTabs效果，支持关闭、双击刷新、左右滑动等；</li>
                                <li>固定左侧主菜单栏，并对菜单项做了新的调整；</li>
                                <li>增加右侧面板及聊天窗口等。</li>
                            </ol>

                            <p style="margin-left:25px;">
                            <hr><span class="label label-danger">特别致谢</span> 感谢[子·梦]同学提供的contentTabs优化方案和代码！</p>
                        </div>
                    </div>
                    <div id="new" class="tab-pane">
                        <div class="panel-body">
                            <ol class="no-left-padding">
                                <li>表单：搜索自动补全插件suggest、高级表单插件（时间选择，切换按钮，图像裁剪上传，单选复选框美化，文件域美化等)等；</li>
                                <li>图表：图表组合页面等；</li>
                                <li>页面：团队、社交、客户管理、文章列表、文章详情、新登录页面等；</li>
                                <li>UI元素：竖向选项卡、拖动面板、文本对比、加载动画、SweetAlert等；</li>
                                <li>相册：layer相册、Blueimp相册等；</li>
                                <li>表格：FooTables等。</li>
                            </ol>
                        </div>
                    </div>
                    <div id="update" class="tab-pane">
                        <div class="panel-body">
                            <ol>
                                <li>页面弹层插件layer升级至1.9.3；</li>
                                <li>更新jqgrid，支持树形表格；</li>
                                <li>更新帮助文档。</li>
                            </ol>
                        </div>
                    </div>
                    <div id="revise" class="tab-pane">
                        <div class="panel-body">
                            <ol>
                                <li>jstree、Simditor等多处错误；</li>
                                <li>页面加载进度提示；</li>
                                <li>Glyphicon字体图标不显示的问题；</li>
                                <li>重新整理开发文档；</li>
                            </ol>
                        </div>
                    </div>
                    <div id="optimize" class="tab-pane">
                        <div class="panel-body">
                            <ol>
                                <li>H+整体视觉效果；</li>
                                <li>jstree默认主题显示效果；</li>
                                <li>表单验证显示效果；</li>
                                <li>iCheck显示效果；</li>
                                <li>Tabs显示效果。</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="alert alert-warning alert-dismissable m-t-sm">
            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
            同时这也是一个示例，演示了如何从iframe中弹出一个覆盖父页面的层。
        </div>
    </div>
</script>

<!-- 全局js -->
<script src="../static/admin/js/jquery.min.js?v=2.1.4"></script>
<script src="../static/admin/js/bootstrap.min.js?v=3.3.6"></script>
<script src="../static/admin/js/plugins/layer/layer.min.js"></script>

<!-- 自定义js -->
<script src="../static/admin/js/content.js"></script>

<!-- 欢迎信息 -->
<script src="../static/admin/js/welcome.js"></script>
</body>

</html>
