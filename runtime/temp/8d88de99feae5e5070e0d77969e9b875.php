<?php /*a:1:{s:72:"F:\PHPWAMP\wwwroot\tp5.1\wenjuan\application\index\view\index\login.html";i:1604562843;}*/ ?>
﻿<!DOCTYPE>
<html>
<head>
<title>问卷登录</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="../public/static/index/login/js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="../public/static/index/login/images/login.js"></script>
<link href="../public/static/index/login/css/login2.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h1>问卷系统登录</h1>

<div class="login" style="margin-top:50px;">
    
    <div class="header">
        <div class="switch" id="switch"><a class="switch_btn_focus" id="switch_qlogin" href="javascript:void(0);" tabindex="7"><?php if((session('?error'))): ?><span style="color: red"><?php echo session('error'); ?></span><?php else: ?>快速登录<?php endif; ?></a>
			<a class="switch_btn" id="switch_login" href="javascript:void(0);" tabindex="8">快速注册</a><div class="switch_bottom" id="switch_bottom" style="position: absolute; width: 64px; left: 0px;"></div>
        </div>
    </div>

    <form action="<?php echo url('index/login/index'); ?>" method="post">
        <?php echo token(); ?>
    <div class="web_qr_login" id="web_qr_login" style="display: block; height: 235px;">    

            <!--登录-->
            <div class="web_login" id="web_login">
               
               
               <div class="login-box">

			<div class="login_form">
				<form action="" name="loginform" accept-charset="utf-8" id="login_form" class="loginForm" method="post"><input type="hidden" name="did" value="0"/>
               <input type="hidden" name="to" value="log"/>
                <div class="uinArea" id="uinArea">
                <label class="input-tips" for="u">帐号：</label>
                <div class="inputOuter" id="uArea">
                    
                    <input type="text" id="u" name="username" class="inputstyle"/>
                </div>
                </div>
                <div class="pwdArea" id="pwdArea">
               <label class="input-tips" for="p">密码：</label> 
               <div class="inputOuter" id="pArea">
                    
                    <input type="password" id="p" name="password" class="inputstyle"/>
                </div>
                </div>
               
                <div style="padding-left:50px;margin-top:20px;"><input type="submit" value="登 录" style="width:150px;" class="button_blue"/></div>
              </form>
           </div>
           
            	</div>
               
            </div>
            <!--登录end-->
  </div>
    </form>
  <!--注册-->
    <form action="<?php echo url('index/login/ct'); ?>" method="post">
        <?php echo token(); ?>
    <div class="qlogin" id="qlogin" style="display: none; ">
   
    <div class="web_login"><form name="form2" id="regUser" accept-charset="utf-8"  action="" method="post">
	      <input type="hidden" name="to" value="reg"/>
		      		       <input type="hidden" name="did" value="0"/>
        <ul class="reg_form" id="reg-ul">
        		<div id="userCue" class="cue">快速注册请注意格式</div>
                <li>
                	
                    <label for="user"  class="input-tips2">用户名：</label>
                    <div class="inputOuter2">
                        <input type="text" id="user" name="username" maxlength="16" class="inputstyle2"/>
                    </div>
                    
                </li>
                
                <li>
                <label for="passwd" class="input-tips2">密码：</label>
                    <div class="inputOuter2">
                        <input type="password" id="passwd"  name="password" maxlength="16" class="inputstyle2"/>
                    </div>
                    
                </li>
                <li>
                <label for="passwd2" class="input-tips2">确认密码：</label>
                    <div class="inputOuter2">
                        <input type="password" id="passwd2" name="" maxlength="16" class="inputstyle2" />
                    </div>
                    
                </li>
                
                <!--<li>-->
                 <!--<label for="qq" class="input-tips2">QQ：</label>-->
                    <!--<div class="inputOuter2">-->
                       <!---->
                        <!--<input type="text" id="qq" name="qq" maxlength="10" class="inputstyle2"/>-->
                    <!--</div>-->
                   <!---->
                <!--</li>-->
                
                <li>
                    <div class="inputArea">
                        <input type="submit" id="reg"  style="margin-top:10px;margin-left:85px;" class="button_blue" value="完成并注册"/>
                    </div>
                    
                </li><div class="cl"></div>
            </ul></form>
           
    
    </div>
   
    
    </div>
    </form>
    <!--注册end-->
</div>
</body></html>