<?php /*a:1:{s:74:"F:\PHPWAMP\wwwroot\tp5.1\wenjuan\application\index\view\index\statics.html";i:1604563112;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>statics</title>
		<link rel="stylesheet" type="text/css" href="../public/static/index/statics/statics.css" />
		<link rel="stylesheet" type="text/css" href="../public/static/index/manage/manage.css" />
		<script type="text/javascript" src="../public/static/index/manage/jquery-3.4.1.min.js"></script>
		<script type="text/javascript" src="../public/static/index/statics/echarts.min.js"></script>
		<link type="text/css" rel="stylesheet" href="../public/static/index/release/css/bootstrap.css">
		<script type="text/javascript" src="../public/static/index/release/js/bootstrap.js"></script>
		<!--<script type="text/javascript" src="https://cdn.staticfile.org/echarts/4.3.0/echarts.min.js"></script>-->
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
						<a class="tab-item" href="#" style="background-color: skyblue;">
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
			<div id="content" style="margin:0 auto;width: 1000px;text-align: center">
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
						<button type="button" class="ques_btn" style="width: 100px;">问卷统计</button>
					</div>
				</div>
				<?php endforeach; ?>
				<div style="text-align: center">
					<nav aria-label="Page navigation">
						<?php echo $list; ?>
					</nav>
				</div>
			</div>
		</div>
		<div id="advertise">

		</div>
		<script type="text/javascript">
			$(function () {
				$(".ques_btn").each(function (i) {
					$(this).click(function () {
						//alert(111);
						if ($(this).parent('div').siblings('p').find('span').attr('status')!=1){
						    alert($(this).parent('div').siblings('p').find('span').html());
						} else {
                            var d=$('.btn-container').eq(i).siblings('input').attr('wenjuanid');
                            window.location.href="<?php echo url('index/statics/index'); ?>?id="+d;
						}

                    })
                });
				console.log();
			if ($(".question-item").length===0) {
			    var no="<h3 class='text-left'>目前没有创建问卷......</h3>";
				$("#content").append(no);
			}
            })
		</script>
	</body>
</html>
