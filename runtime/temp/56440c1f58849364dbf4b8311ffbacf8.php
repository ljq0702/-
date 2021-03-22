<?php /*a:1:{s:73:"F:\PHPWAMP\wwwroot\tp5.1\wenjuan\application\index\view\index\manage.html";i:1604563074;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>manage</title>
		<link rel="stylesheet" type="text/css" href="../public/static/index/manage/manage.css" />
		<script src="../public/static/index/manage/jquery-3.4.1.min.js"></script>
		<script src="../public/static/index/manage/layer/layer.js"></script>
        <script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>
        <!--<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>-->
        <!--<script type="text/javascript" src="../public/static/index/question/resources/script/configBase.js"></script>-->
        <!--<script type="text/javascript" src="/static/index/question/resources/script/exam/exam.js"></script>-->
		<script type="text/javascript" src="../public/static/index/question/resources/script/exam/exam.js"></script>
		<script type="text/javascript" src="../public/static/index/question/resources/script/jquery-ui.min.js"></script>
		<script type="text/javascript" src="../public/static/index/question/resources/script/dcselect.js"></script>
		<script type="text/javascript" src="../public/static/index/question/resources/script/layer/layer.js"></script>
		<script type="text/javascript" src="../public/static/index/question/resources/script/artTemplate/template.js"></script>
		<link type="text/css" rel="stylesheet" href="../public/static/index/question/resources/skin/base.css">
		<link type="text/css" rel="stylesheet" href="../public/static/index/question/resources/skin/blue.css">
		<link type="text/css" rel="stylesheet" href="../public/static/index/question/resources/skin/content.css">
		<link type="text/css" rel="stylesheet" href="../public/static/index/release/css/bootstrap.css">
		<script type="text/javascript" src="../public/static/index/release/js/bootstrap.js"></script>
	</head>
	<body>
		<form action="" method="post">
			<div id="main">
				<div id="top">
					<div style="width: 20%;display: flex;justify-content: center;align-items: center;">
						<div id="profile">
						</div>
					</div>
					<div style="width: 79%;height: 100%;margin: 0;padding: 0;">
						<div id="aword">
							<p id="sign">书籍是人类进步的阶梯..................................</p>
						</div>
						<div id="tab">
							<a class="tab-item" href="<?php echo url('index/main/index'); ?>">
								主页
							</a>
							<a class="tab-item" href="#" style="background-color: skyblue;">
								问卷管理
							</a>
							<a class="tab-item" href="<?php echo url('index/main/statics'); ?>">
								问卷统计
							</a>
							<a class="tab-item" href="<?php echo url('index/main/personal'); ?>">
								个人中心
							</a>
							<a class="tab-item" href="<?php echo url('index/main/logout'); ?>">
								安全退出
							</a>
						</div>
					</div>
				</div>
				<div id="content">
					<?php foreach($list as $val): ?>
					<div class="question-item">
						<input type="checkbox" name="question" wenjuanid="<?php echo htmlentities($val['paperid']); ?>" />
						<p class="questionnaire_title"><?php echo htmlentities($val['title']); if(($val['status']==0)): ?>
							<span style="margin-left: 10px;color: blue" status="<?php echo htmlentities($val['status']); ?>">[未审核]</span>
							<?php elseif(($val['status']==1)): ?>
							<span style="margin-left: 10px;color: green" status="<?php echo htmlentities($val['status']); ?>">[审核通过]</span>
							<?php else: ?>
							<span style="margin-left: 10px;color: red" status="<?php echo htmlentities($val['status']); ?>">[审核未通过]</span>
							<?php endif; ?>
						</p>
						<div class="btn-container">
							<button type="button" class="ques_btn">查看</button>
							<button type="button" class="ques_btn">修改</button>
							<button type="button" class="ques_btn">发布</button>
						</div>
					</div>
					<?php endforeach; ?>
					<div style="text-align: center">
						<nav aria-label="Page navigation">
							<?php echo $list; ?>
						</nav>
					</div>


				</div>
				<div id="btns">
					<button type="button" class="btn_options" ><a href="<?php echo url('index/edit/index'); ?>" target="_self">新建</a></button>
					<button type="button" class="btn_options">删除</button>
					
					<!-- 发布，，保存并提交表单的按钮 -->
					<!--<input type="submit" class="btn_options" value="发布" />-->
				</div>
			</div>
		</form>

		<script>
			/****************** 删除问卷 *********************/
			$(function () {
			    if($('.question-item').length>0){
                    $('#content div').children('input:checkbox').each(function (i,val) {
                        //console.log(i,val);
                        $(this).eq(i).click(function () {
                            $('val').prop('checked',function (a,b) {
                                return !b;
                            })
                        })
                    });

                    $('#btns button').eq(1).click(function () {
                        var wenjuan=[];
                        //wenjuan.splice(0,wenjuan,length);
                        wenjuan.length=0;
                        $('#content div').children('input:checkbox').each(function (i) {
                            if($('#content div').children('input:checkbox').eq(i).is(':checked')){
                                //console.log(111);
                                //var id=[];
                                //wenjuan.i=$('#content div').children('input:checkbox').eq(i).attr('wenjuanid');
                                wenjuan.push($('#content div').children('input:checkbox').eq(i).attr('wenjuanid'));
                            }
                        });
                        if (wenjuan.length==0){
                            alert('请选择需要删除的问卷');
                        } else{
                            layer.confirm('确定要删除吗？', {
                                btn: ['是的','再想想'] //按钮
                            }, function(){
                                console.log(wenjuan);
                                $.ajax({
                                    type:"post",
                                    url:"<?php echo url('index/edit/del'); ?>",
                                    data:{'wenjuan[]':wenjuan},
                                    dataType: 'text',
                                    success:function (e) {
                                        if (e){
                                            $.each(wenjuan,function (i,val) {
                                                $("input[wenjuanid="+val+"]").parent('.question-item').remove();
                                            });
                                        }
                                        if($('.question-item').length==0){
                                            var no="<h1>目前没有问卷.....</h1>";
                                            $('#content').append(no);
                                        }
                                    }
                                });
                                layer.msg('删除成功', {icon: 1});
                            }, function(){
                                // layer.msg('也可以这样', {
                                //     time: 20000, //20s后自动关闭
                                //     btn: ['明白了', '知道了']
                                // });
                            });

                        }

                    });
				}else{
			        var no="<h3>目前没有问卷.....</h3>";
			        $('#content').append(no);
				}


            })
		</script>
		<script>
			/****************** 查看问卷 *******************/
			$(function () {
                $('.btn-container').children('button:first-child').each(function (i) {
                    $(this).click(function () {
                        var d=$('.btn-container').eq(i).siblings('input').attr('wenjuanid');
                        $.get("<?php echo url('index/edit/show'); ?>",{id:d},function (e) {
                            var dataObj=eval("("+e+")");
                            //console.log(dataObj);
                            var tmp="";
                            for (var i in dataObj){
                                tmp=dataObj[i];
                            }
                            //console.log(tmp);
                            layer.open({
                                type: 1,
                                skin: 'layui-layer-rim', //加上边框
                                area: ['700px', '650px'], //宽高
                                content: tmp,
                            });
                            //console.log(tmp);
                            // console.log(JSON.stringify(eval(e)));
                        },'json');
                    });
                });

            })
		</script>

        <script>
            /************* 修改问卷 ************/
            $(function () {
                //找到的页面中的修改的按钮
                $('.btn-container').find('button:first-child').next('button').each(function (i) {
                    $(this).click(function () {
                        //获取需要修改的问卷id
                        var d=$('.btn-container').eq(i).siblings('input').attr('wenjuanid');
                        //将问卷的id传入服务器，请求问卷数据
                        $.get('<?php echo url("index/edit/show"); ?>',{id:d},function (e) {
                            //console.log(e);
                            window.location.href="<?php echo url('index/edit/index'); ?>?id="+d;
                        },'json');
                    });
                });
            })
        </script>

		<script>
			/*************** 发布文卷 ***************/
            $(function () {
                //找到的页面中的发布的按钮
                $('.btn-container').find('button:last-child').each(function (i) {
                    $(this).click(function () {
                        if ($(this).parent('div').siblings('p').find('span').attr('status')!=1){
                            alert($(this).parent('div').siblings('p').find('span').html());
						} else {
                            //获取需要修改的问卷id
                            var d=$('.btn-container').eq(i).siblings('input').attr('wenjuanid');
                            //将问卷的id传入服务器，请求问卷数据
                            $.get('<?php echo url("index/release/rs"); ?>',{id:d},function (e) {
                                console.log(e);
                                //window.open("<?php echo url('index/release/index'); ?>?id="+d);
                            },'json');
                            window.location.href="<?php echo url('index/release/index'); ?>?id="+d+"&userid="+"<?php echo htmlentities(app('session')->get('user.id')); ?>";
						}
                    });
                });
            })
		</script>
	</body>
</html>