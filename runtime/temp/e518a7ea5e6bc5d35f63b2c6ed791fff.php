<?php /*a:1:{s:75:"F:\PHPWAMP\wwwroot\tp5.1\wenjuan\application\index\view\index\personal.html";i:1604563087;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>personal</title>
		<link rel="stylesheet" type="text/css" href="../public/static/index/personal/personal.css" />
		<link rel="stylesheet" type="text/css" href="../public/static/index/release/css/bootstrap.css">
	</head>
	<body>
		<div id="main">
			<div id="top" style="z-index: 999;">
				<div style="width: 20%;display: flex;justify-content: center;align-items: center;">
					<div id="profile">
					</div>
				</div>
				<div style="width: 79%;height: 100%;margin: 0;padding: 0;">
					<div id="aword">
						<p id="sign">书籍是人类进步的阶梯..................................</p>
					</div>
					<div id="tab">
						<a class="tab-item" href="<?php echo url('index/main/index'); ?>" >
							主页
						</a>
						<a class="tab-item" href="<?php echo url('index/main/manage'); ?>">
							问卷管理
						</a>
						<a class="tab-item" href="<?php echo url('index/main/statics'); ?>">
							问卷统计
						</a>
						<a class="tab-item" href="#" style="background-color: skyblue;">
							个人中心
						</a>
						<a class="tab-item" href="<?php echo url('index/main/logout'); ?>">
							安全退出
						</a>
					</div>
				</div>
			</div>
			<div id="content" class="container text-center">
				<div class="row text-center" >
					<div class="col-xs-6 col-xs-offset-3" style="margin-top: 50px;padding: 20px">
						<h5>个人信息展示</h5>
						<div class="list-group text-left">
							<a href="#" class="list-group-item disabled">
								用户信息
							</a>
							<a href="#" class="list-group-item userid">用户编号：<span></span></a>
							<a href="#" class="list-group-item username">用户名：<span></span></a>
							<a href="#" class="list-group-item password">用户密码：<span></span></a>
							<a href="#" class="list-group-item wjcount">用户问卷数：<span></span></a>
						</div>
					</div>
				</div>

			</div>
				<!--<script type="text/javascript" src="../public/static/index/personal/static/js"></script>-->
			</div>
		</div>
		<div id="advertise">

		</div>

		<script type="text/javascript" src="../public/static/index/release/jquery-3.4.1.min.js"></script>
		<script type="text/javascript" src="../public/static/index/release/js/bootstrap.min.js"></script>
		<script>
			$(function () {
				var uid="<?php echo htmlentities(app('session')->get('user.id')); ?>";
				console.log(uid);
				// $.get("<?php echo url('index/main/personal'); ?>",{uid:uid},function (e) {
				// 	console.log(111);
                // },'json');
				$.ajax({
					type:'POST',
					url:"<?php echo url('index/main/person'); ?>",
					data:{uid:uid},
					dataType:'json',
					success:function (e) {
						// console.log(e);
						var data=eval('('+e+')');
						//console.log(data);
						$.each(data,function (i,v) {
							var id=v.id;
							var username=v.username;
							var password=v.password;
							var count=v.count;
							$(".userid").find('span').html(id);
							$('.username').find('span').html(username);
							$(".password").find('span').html(password);
							$(".wjcount").find('span').html(count);
                        })
                    }
				});
            })
		</script>
	</body>
</html>
