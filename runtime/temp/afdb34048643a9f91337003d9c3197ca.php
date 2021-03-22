<?php /*a:1:{s:71:"F:\PHPWAMP\wwwroot\tp5.1\wenjuan\application\index\view\index\main.html";i:1604563831;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>main</title>
		<link rel="stylesheet" type="text/css" href="../public/static/index/index/main.css" />
		<script>
            addEventListener("load", function () {
                setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
                window.scrollTo(0, 1);
            }
		</script>
		<!--//meta tags ends here-->
		<!--booststrap-->
		<link href="../public/static/index/index/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
		<!--//booststrap end-->
		<!-- font-awesome icons -->
		<link href="../public/static/index/index/css/font-awesome.min.css" rel="stylesheet">
		<!-- //font-awesome icons -->
		<!--stylesheets-->
		<link href="../public/static/index/index/css/style.css" rel='stylesheet' type='text/css' media="all">
		<!--//stylesheets-->
		<link href="http://fonts.googleapis.com/css?family=Muli:400,600,700" rel="stylesheet">
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
		<!--tupianlubo-->
		<link rel="stylesheet" type="text/css" href="../public/static/index/index/css/style2.css">
		<script type="text/javascript" src="../public/static/index/index/js/jquery-1.js"></script>


	</head>
	<body>

		<div id="main" style="width:100%;">
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
						<a class="tab-item" href="#" style="background-color: skyblue;">
							主页
						</a>
						<a class="tab-item" href="<?php echo url('index/main/manage'); ?>">
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
			<div id="content" style="width: 100%;">
				<!--<div id="autoplay">-->

				<!--</div>-->

					<div class="main-top" id="home" style="width: 100%; height: 100%;">
						<!-- header -->
						<div id="demo01" class="flexslider" style="width: 1200px">

							<div class="flex-viewport" style="overflow: hidden; position: relative;">
								<ul class="slides" style="width: 1400%; transition-duration: 0.4s; transform: translate3d(-2880px, 0px, 0px);">
									<li class="clone" style="width: 960px; float: left; display: block;">
										<div class="img"><img src="../public/static/index/index/imgs/1.jpg" width="100%" alt=""
											height="450"></div>
									</li>
									<li class="" style="width: 960px; float: left; display: block;">
										<div class="img"><img src="../public/static/index/index/imgs/2.jpg" width="100%" alt=""
											height="450"></div>
									</li>
									<li style="width: 960px; float: left; display: block;" class="">
										<div class="img"><img src="../public/static/index/index/imgs/3.jpg" width="100%" alt=""
											height="450"></div>
									</li>
									<li style="width: 960px; float: left; display: block;" class="flex-active-slide">
										<div class="img"><img src="../public/static/index/index/imgs/4.jpg" width="100%" alt=""
											height="450"></div>
									</li>
									<li style="width: 960px; float: left; display: block;" class="">
										<div class="img"><img src="../public/static/index/index/imgs/5.jpg" width="100%" alt=""
											height="450"></div>
									</li>
									<li style="width: 960px; float: left; display: block;" class="">
										<div class="img"><img src="../public/static/index/index/imgs/6.jpg" width="100%" alt=""
											height="450"></div>
									</li>
									<li class="clone" style="width: 960px; float: left; display: block;">
										<div class="img"><img src="../public/static/index/index/imgs/4.jpg" width="100%" alt=""
											height="450"></div>
									</li>
								</ul>
							</div>
							<!--<ol class="flex-control-nav flex-control-paging">-->
								<!--<li><a class="">1</a></li>-->
								<!--<li><a class="">2</a></li>-->
								<!--<li><a class="flex-active">3</a></li>-->
								<!--<li><a class="">4</a></li>-->
								<!--<li><a class="">5</a></li>-->
							<!--</ol>-->
							<ul class="flex-direction-nav">
								<li><a class="flex-prev" href="#">Previous</a></li>
								<li><a class="flex-next" href="#">Next</a></li>
							</ul>
						<!-- //header -->
						<!-- banner -->
						<!--<div class="main-banner">-->
							<!--<div class="container">-->
								<!--<div class="mainer-left-grid">-->
									<!--<div class="banner-right-txt">-->
										<!--<div class="social-icons">-->
											<!--<ul>-->
												<!--<li>-->
													<!--<a href="#">-->
														<!--<span class="fa fa-facebook "></span>-->
													<!--</a>-->
												<!--</li>-->
												<!--<li>-->
													<!--<a href="#">-->
														<!--<span class="fa fa-twitter "></span>-->
													<!--</a>-->
												<!--</li>-->
												<!--<li>-->
													<!--<a href="#">-->
														<!--<span class="fa fa-rss"></span>-->
													<!--</a>-->
												<!--</li>-->
												<!--<li>-->
													<!--<a href="#">-->
														<!--<span class="fa fa-envelope"></span>-->
													<!--</a>-->
												<!--</li>-->
												<!--<li>-->
													<!--<a href="#">-->
														<!--<span class="fa fa-instagram "></span>-->
													<!--</a>-->
												<!--</li>-->
											<!--</ul>-->
										<!--</div>-->
										<!--<h4 class="mb-3">Best Services </h4>-->
										<!--<h5>With-->
											<!--<span>Biz-Pro</span>-->
										<!--</h5>-->
										<!--<div class="two-demo-button mt-lg-4 mt-md-3 mt-3">-->
											<!--<p class="mt-2">-->
												<!--<span class="fa fa-arrow-right mr-2" aria-hidden="true"></span> Lorem ipsum dolor sit</p>-->
											<!--<p class="mt-2">-->
												<!--<span class="fa fa-arrow-right mr-2" aria-hidden="true"></span> Sed do eiusmod tempor</p>-->
											<!--<p class="mt-2">-->
												<!--<span class="fa fa-arrow-right mr-2" aria-hidden="true"></span> Amet Lorem ipsum dolor</p>-->
										<!--</div>-->
										<!--&lt;!&ndash;<div class="view-buttn mt-lg-5 mt-md-4 mt-sm-4 mt-3">-->
                                          <!--<a href="#blog" class="btn">Read More</a>&ndash;&gt;-->
									<!--</div>-->
								<!--</div>-->
							<!--</div>-->
						<!--</div>-->
					</div>
					<!-- //banner -->
					<!--//about -->
					<section class="about py-lg-4 py-md-3 py-sm-3 py-3" id="about">
						<div class="container py-lg-5 py-md-4 py-sm-4 py-3">
							<div class="row">
								<div class="col-lg-7 about-grid-wthree">
									<p class="mb-lg-5 mb-md-4 mb-3"> 提供各种所需问卷题型，一件调用，深度调查，满足您对问卷专业性及个性化需求。</p>
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-6 about-grid-grids my-3">
											<div class="about-fashion-grid ">
												<div class="about-icon mb-3">
													<span class="fa fa-reply-all" aria-hidden="true"></span>
												</div>
												<h6>深度调查</h6>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 about-grid-grids my-3">
											<div class="about-fashion-grid ">
												<div class="about-icon mb-3">
													<span class="fa fa-desktop" aria-hidden="true"></span>
												</div>
												<h6>操作简单</h6>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 about-grid-grids my-3">
											<div class="about-fashion-grid ">
												<div class="about-icon mb-3">
													<span class="fa fa-lightbulb-o" aria-hidden="true"></span>
												</div>
												<h6>免费发布</h6>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 about-grid-grids my-3">
											<div class="about-fashion-grid">
												<div class="about-icon mb-3">
													<span class="fa fa-money" aria-hidden="true"></span>
												</div>
												<h6>数据分析</h6>
											</div>
										</div>

									</div>
								</div>
								<div class="col-lg-5 text-center">
									<h3 class="title text-center mb-lg-5 mb-sm-4 mb-4">
										<span>问卷</span> 系统</h3>
									<img src="../public/static/index/index/images/blog2.jpg" alt="news image" class="img-fluid">
								</div>
							</div>
						</div>
					</section>
					<!--//about -->
					<!--Our Goals -->
					<section class="our-goals" id="service">
						<div class="container-fluid">
							<div class="row">
								<div class="col-lg-5 service-grid-set">
									<h3 class="title text-center mb-lg-5 mb-sm-4 mb-4">
										<span>系统</span> 特点</h3>
									<div class="row mb-lg-5 mb-sm-4 mb-3 my-3 ">
										<div class="col-lg-2 col-md-3 col-sm-3">
											<div class="jst-icon-goal text-center">
												<span class="fa fa-cubes" aria-hidden="true"></span>
											</div>
										</div>
										<div class="col-lg-10 col-md-9 col-sm-9 goals-making-wthree">
											<h4 class="Sub-txt-w3ls mb-2">基础题型</h4>
											<p>满足您更多的业务需求</p>
										</div>
									</div>
									<div class="row mb-lg-5 mb-sm-4 mb-3 my-3">
										<div class="col-lg-2 col-md-3 col-sm-3">
											<div class="jst-icon-goal text-center">
												<span class="fa fa-money" aria-hidden="true"></span>
											</div>
										</div>
										<div class="col-lg-10 col-md-9 col-sm-9 goals-making-wthree">
											<h4 class="Sub-txt-w3ls mb-2">简单三步</h4>
											<p>简单三步，即可获取数据</p>
										</div>
									</div>
									<div class="row my-3">
										<div class="col-lg-2 col-md-3 col-sm-3">
											<div class="jst-icon-goal text-center">
												<span class="fa fa-reply-all" aria-hidden="true"></span>
											</div>
										</div>
										<div class="col-lg-10 col-md-9 col-sm-9 goals-making-wthree">
											<h4 class="Sub-txt-w3ls mb-2">多端支持</h4>
											<p>多端支持，各行各业都在用</p>
										</div>
									</div>
								</div>
								<div class="col-lg-7 w3layouts-make-goals">

								</div>
							</div>
						</div>
					</section>
					<!--//Our Goals -->
					<!-- states -->
					<section class="stats-count py-lg-4 py-md-3 py-sm-3 py-3">
						<div class="container py-lg-5 py-md-4 py-sm-4 py-3">
							<div class="row text-center">
								<div class="col-lg-3 col-md-3 col-sm-3 col-6 my-3 number-wthree-info ">
									<h5>700</h5>
									<h6 class="pt-2">Smile</h6>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-3 col-6 my-3 number-wthree-info">
									<h5>250 +</h5>
									<h6 class="pt-2">Awards</h6>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-3 col-6 my-3 number-wthree-info">
									<h5>150</h5>
									<h6 class="pt-2">Coffee</h6>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-3 col-6 my-3 number-wthree-info">
									<h5>125</h5>
									<h6 class="pt-2">Tea</h6>
								</div>
							</div>
						</div>
					</section>
					<!--//states -->
					<!-- blog -->

					<!--//blog -->

					<!-- gallery -->


					<!--//gallery -->
					<!-- team -->

					<!-- //team -->
					<!--//contact-map -->

					<!-- footer -->
					<section class="bottom-footer py-lg-4 py-md-3 py-sm-3 py-3">
						<div class="container py-lg-5 py-md-5 py-sm-4 py-3">

							<div class="row">
								<div class="col-lg-6 col-md-6 footer-left-side">
									<div class=" footer-top ">
										<p>
											<span>Address</span> :Melbourne St,South
											<br>Birbane 4101 Austraila.</p>
										<p class="pt-lg-3 pt-2">
											<span> Phone</span> :+(000) 123 4565 32</p>
										<p class="pt-lg-3 pt-2">
											<span>Email</span> :
											<a href="mailto:info@example.com">info@example1.com</a>
										</p>
									</div>

								</div>
								<div class="col-lg-6 col-md-6 footer-right-side">
									<div class="footer-w3layouts-head mb-md-4 mb-3">
										<h2>
											<a href="index.html">Biz-Pro</a>
										</h2>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna Lorem ipsum dolor sit amet, consectetur
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna Lorem ipsum dolor sit amet, consectetur</p>
								</div>
							</div>
							<!-- move icon -->
							<div class="text-center mt-lg-5 mt-md-4 mt-3">
								<a href="#home" class="move-top text-center mt-3">
									<span class="fa fa-arrow-up" aria-hidden="true"></span>
								</a>
							</div>
							<!--//move icon -->
						</div>
					</section>
					<!-- footer -->

			</div>
		</div>
		<div id="advertise">
			<div id="close_btn" onclick="close_adv()"></div>
		</div>

		<script type="text/javascript">
			var A = document.getElementById("advertise");
			function close_adv() {
				A.style.display = "none";
			}
			
			//定时器，，每隔1分钟显示广告
			setInterval(function(){
				A.style.display = "block";
			},30000);
		</script>
		<!--图片轮播-->
		<script type="text/javascript" src="../public/static/index/index/js/slider.js"></script>
		<script type="text/javascript">
            $(function() {
                $('#demo01').flexslider({
                    animation: "slide",
                    direction: "horizontal",
                    easing: "swing"
                });
                $('#demo02').flexslider({
                    animation: "slide",
                    direction: "vertical",
                    easing: "swing"
                });
            });
		</script>

	</body>
</html>
