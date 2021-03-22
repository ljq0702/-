<?php /*a:1:{s:71:"F:\PHPWAMP\wwwroot\tp5.1\wenjuan\application\index\view\index\edit.html";i:1604563151;}*/ ?>
<html>

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="renderer" content="webkit|ie-comp|ie-stand">
		<title>新建问卷</title>
		<meta name="keywords" content="">
		<meta name="description" content="">
		<meta name="robots" content="noindex,nofollow">
		<script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>
		<!--<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>-->
		<!--<script type="text/javascript" src="../public/static/index/question/resources/script/configBase.js"></script>-->
		<script type="text/javascript" src="../public/static/index/question/resources/script/exam/exam.js"></script>
		<script type="text/javascript" src="../public/static/index/question/resources/script/jquery-ui.min.js"></script>
		<script type="text/javascript" src="../public/static/index/question/resources/script/dcselect.js"></script>
		<script type="text/javascript" src="../public/static/index/question/resources/script/layer/layer.js"></script>
		<script type="text/javascript" src="../public/static/index/question/resources/script/artTemplate/template.js"></script>
		<link type="text/css" rel="stylesheet" href="../public/static/index/question/resources/skin/base.css">
		<link type="text/css" rel="stylesheet" href="../public/static/index/question/resources/skin/blue.css">
		<link type="text/css" rel="stylesheet" href="../public/static/index/question/resources/skin/content.css">
	</head>

	<body>
		<!--主体框架开始-->
		<div class="pagebox" id="pageContentId">
			<div class="home-desktop" id="desktop_scroll">
				<div style="width:1025px; position: relative;">
					<div class="title">
						<div class="name left">创建问卷</div>
						<div class="function left">
							<!--[&nbsp;<a href="javascript:;" onclick="definedLayer('/addTeacherData.html',{},'html');">添加</a>&nbsp;]-->
						</div>
						<div class="clear"></div>
					</div>
					<div class="create-questions-content">
						<div class="exam-nav">
							<div class="exam-item">
								<h4 class="exam-item-title">常用题型<i class="icon-expand"></i></h4>
								<ul class="exam-nav-list" id="ui_sortable_exam">
									<li data-uid="1" data-tempId="drag_choice">
										<a href="javascript:;" data-checkType="1"><i class="icon-singleChoice"></i>单选题</a>
									</li>
									<li data-uid="2" data-tempId="drag_choice">
										<a href="javascript:;" data-checkType="2"><i class="icon-multipleChoice"></i>多选题</a>
									</li>
									<!--<li data-uid="3" data-tempId="drag_choice">-->
										<!--<a href="javascript:;" data-checkType="1"><i class="icon-picChoice"></i>图片单选</a>-->
									<!--</li>-->
									<!--<li data-uid="4" data-tempId="drag_choice">-->
										<!--<a href="javascript:;" data-checkType="2"><i class="icon-picsChoice"></i>图片多选</a>-->
									<!--</li>-->
									<li data-uid="5" data-tempId="drag_completion">
										<a href="javascript:;" data-checkType="1"><i class="icon-gapFilling"></i>单行填空</a>
									</li>
									<!--<li data-uid="6" data-tempId="drag_completion">-->
										<!--<a href="javascript:;" data-checkType="2"><i class="icon-multiRow"></i>多行填空</a>-->
									<!--</li>-->
									<!--<li data-uid="7" data-tempId="drag_describe">-->
										<!--<a href="javascript:;"><i class="icon-describe"></i>描述说明</a>-->
									<!--</li>-->
								</ul>
							</div>
						</div>
						<!--出题-->
				<div id="saveh">
							<div class="create-questions">
								<div class="questions-head-title"><h4 class="h4-bg T_edit T-center" data-Tid="10001" id="questionTitle"><span style="font-size:18px;">问卷标题</span></h4></div>
								<table class="questions-items-title">
									<tbody>
									<tr>
										<td class="module-menu"></td>
										<td><div class="cq-title T_edit" data-Tid="10002" id="questionExamTitle"><span style="font-size:16px;">问卷标题</span></div>
										</td>
									</tr>
									</tbody>
								</table>
								<ul class="ui-questions-content-list"></ul>
								<ul class="ui-foot-all-list"></ul>
							</div>
                </div>
					<div style="height:40px; margin: 20px 0; text-align: right;">
						<a href="<?php echo url('index/main/manage'); ?>"><input type="button" class="cotrlBtn exam-save-btn btnBlue" id="saveQuestion" style="height:40px;width: 140px; font-size:18px;" value="保存问卷"></a>
						<a href="<?php echo url('index/main/manage'); ?>" target="_self" class="cotrlBtn exam-save-btn btnBlue" style="font-size: 18px;height: 20px;background-color: #ce8735;border: none;">返回问卷管理</a>
					</div>

			</div>

			<!--选择题-->
			<script type="text/html" id="drag_choice">
				<li class="ui-module items-questions">
					<div class="theme-type">
						<div class="module-menu">
							<h4></h4>
							<div class="module-ctrl">
								<a href="javascript:void(0);" class="ui-up-btn" data-tisp="上移"><i class="icon-up"></i></a>
								<a href="javascript:void(0);" class="ui-down-btn" data-tisp="下移"><i class="icon-down"></i></a>
								<a href="javascript:void(0);" class="ui-clone-btn" data-tisp="复制"><i class="icon-clone"></i></a>
								<a href="javascript:void(0);" class="ui-del-btn" data-tisp="删除"><i class="icon-del"></i></a>
							</div>
						</div>
						<div class="ui-drag-area">
							<div class="cq-title T_edit T_plugins" data-Tid="{{itmetid}}" type-id="{{if type==1}}1{{else if type==2}}2{{/if}}"><span>{{if type==1}}单选题目标题{{else if type==2}}多选题目标题{{/if}}</span></div></div>
						<div class="cq-items-content">
							<ul class="cq-unset-list" data-checkType="{{type}}" data-nameStr="{{name}}">
								{{each items as itemData i}}
								<li><label class="input-check"><input type="{{if type==1}}radio{{else if type==2}}checkbox{{/if}}" name="{{name}}" value="{{itemData.value}}"></label>
									<div class="cq-answer-content T_edit T_plugins" data-Tid="{{itemData.tid}}">选项{{i+1}}</div>
								</li>
								{{/each}}
							</ul>
							<div class="cq-items-ctrl">
								<a href="javascript:void(0);" class="ui-add-item-btn" data-tisp="添加"><i class="icon-add"></i></a>
								<a href="javascript:void(0);" class="ui-batch-item-btn" data-tisp="批量添加"><i class="icon-addList"></i></a>
								<a href="javascript:void(0);" class="ui-add-answer-btn" data-tisp="添加答案解析"><i class="icon-assignment"></i></a>
							</div>
						</div>
					</div>
				</li>
			</script>
			<!--填空题-->
			<script type="text/html" id="drag_completion">
				<li class="ui-module items-questions">
					<div class="theme-type">
						<div class="module-menu">
							<h4></h4>
							<div class="module-ctrl">
								<a href="javascript:void(0);" class="ui-up-btn" data-tisp="上移"><i class="icon-up"></i></a>
								<a href="javascript:void(0);" class="ui-down-btn" data-tisp="下移"><i class="icon-down"></i></a>
								<a href="javascript:void(0);" class="ui-clone-btn" data-tisp="复制"><i class="icon-clone"></i></a>
								<a href="javascript:void(0);" class="ui-del-btn" data-tisp="删除"><i class="icon-del"></i></a>
							</div>
						</div>
						<div class="ui-drag-area">
							<div class="cq-title T_edit T_plugins" data-Tid="{{itmetid}}" type-id="3" style="font-size:16px;"><span>{{if type==1}}填空题目标题{{else if type==2}}完形填空题目标题{{/if}}</span></div>
						</div>
						<div class="cq-items-content">
							<div class="describe-edit-content T_edit T_plugins" data-tid="{{items[0].tid}}"><span style="line-height: 1.6;12px;">这里是{{if type==1}}填空题目标题{{else if type==2}}完形填空题目标题{{/if}}</span></div>
						</div>
					</div>
				</li>
			</script>
			<!--描述题-->
			<!--<script type="text/html" id="drag_describe">-->
				<!--<li class="ui-module items-questions">-->
					<!--<div class="theme-type">-->
						<!--<div class="module-menu">-->
							<!--<h4></h4>-->
							<!--<div class="module-ctrl">-->
								<!--<a href="javascript:void(0);" class="ui-up-btn" data-tisp="上移"><i class="icon-up"></i></a>-->
								<!--<a href="javascript:void(0);" class="ui-down-btn" data-tisp="下移"><i class="icon-down"></i></a>-->
								<!--<a href="javascript:void(0);" class="ui-clone-btn" data-tisp="复制"><i class="icon-clone"></i></a>-->
								<!--<a href="javascript:void(0);" class="ui-del-btn" data-tisp="删除"><i class="icon-del"></i></a>-->
							<!--</div>-->
						<!--</div>-->
						<!--<div class="ui-drag-area">-->
							<!--<div class="cq-title T_edit T_plugins" data-Tid="{{itmetid}}"><span style="font-size:16px;">描述题目标题</span></div>-->
						<!--</div>-->
						<!--<div class="cq-items-content">-->
							<!--<div class="describe-edit-content T_edit T_plugins" data-tid="{{items[0].tid}}"><span style="line-height: 1.6;12px;">这里是描述题内容</span></div>-->
						<!--</div>-->
					<!--</div>-->
				<!--</li>-->
			<!--</script>-->
			<script type="text/html" id="drag_T_edit">
				<div class="cq-into-edit">
					<div class="add-edit cq-edit-title" contenteditable="true">{{title}}</div>
				</div>
			</script>
			<script type="text/html" id="T_edit_plugins">
				<div class="edit-plug-box">
					<a href="javascript:void(0);"><i class="icon-picChoice"></i></a>
					<a href="javascript:void(0);"><i class="icon-title"></i></a>
				</div>
			</script>
			<script type="text/html" id="ui_additem_content">
				{{each items as itemData i}}
				<li><label class="input-check"><input type="{{if type==1}}radio{{else if type==2}}checkbox{{/if}}" name="{{name}}" value="{{itemData.value}}"></label>
					<div class="cq-answer-content T_edit T_plugins" data-Tid="{{itemData.tid}}">选项{{i+1+index}}</div>
				</li>
				{{/each}}
			</script>

			<script type="text/html" id="analysis_tmp">
				<textarea class="exam-textarea analysis_contx" placeholder="请在此填写答案解析"></textarea>
			</script>
			<script type="text/javascript">
				$(function() {
					exam.init();
                    $("select").dcselect();
                    var dataBase={},questionItems=[];
                    //获取地址栏参数的方法
                    function getUrlParam(name) {
                        var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)"); //构造一个含有目标参数的正则表达式对象
                        var r = window.location.search.substr(1).match(reg);  //匹配目标参数
                        if (r != null) return unescape(r[2]);
                        return null; //返回参数值
                    }
                    var hid=getUrlParam('id');
                    $('#saveQuestion').on('click',function(){
						dataBase={};
						questionItems=[];
                    	dataBase.questionTitle=$('#questionTitle').find('span').text();
                    	dataBase.questionExamTitle=$('#questionExamTitle span').text();
                        dataBase.htmlid=hid;
                    	//封装所有题列表，遍历提取值analysis（答案）、题列表（数组对象）；
                    	$('.ui-questions-content-list').children('li').each(function(i){
                    		var dataTx={},qListItems=[];
                    		dataTx.QItemsTitle=$(this).find('.cq-title').find('span').text();
                    		dataTx.topic_id=$(this).find('.ui-drag-area div').attr('type-id');
                    		//封装单题，遍历提取值name、value、checkCurr（选中状态）；
                    		$(this).find('ul.cq-unset-list').children('li').each(function(j){
                    			var listItems={};
                    			listItems.name=$(this).find('input').attr('name');
                    			// listItems.value=$(this).find('input').val();
                                listItems.value=$(this).children('.cq-answer-content').text();
                    			listItems.checkCurr=$(this).find('input').prop('checked');
                    			qListItems.push(listItems);
                    		});
                    		dataTx.analysis=$(this).find('.analysis_contx').val()||0;
                    		dataTx.qListItems=qListItems;
                    		questionItems.push(dataTx);
                    	});
                    	dataBase.questionItems=questionItems;
                    	//questionItems.htmlid=hid;
                    	//questionItems.push(hid);
                        console.log(questionItems);
                        //console.log(dataBase);
						//如果hid为空；就进行添加操作；如果不为空；就传入id，进行修改操作
						if (hid==null) {
                            $.ajax({
                                type:"post",
                                url:"<?php echo url('index/edit/sub'); ?>",
                                data:dataBase,
                                dataType:"json",
                                success:function (e) {
                                    alert("提交成功");
                                }
                            });

                            // console.log(dataBase);
                            // console.log(JSON.stringify(dataBase));
                            //alert(dataBase);
                            //保存问卷页面
                            var html2=$('#saveh').html().trim();
                            //console.log(html2);
                            $.ajax({
                                type:"post",
                                url: "<?php echo url('index/edit/saveHtml'); ?>",
                                data: {"html2":html2},
                                dataType:"json",
                                success:function (e) {
                                    alert('保存成功');
                                }
                            });
						}else{
                            $.ajax({
                                type:"post",
                                url:"<?php echo url('index/edit/upd'); ?>",
                                data:dataBase,
                                dataType:"json",
                                success:function (e) {
                                    alert("提交成功");
                                }
                            });

                            // console.log(dataBase);
                            // console.log(JSON.stringify(dataBase));
                            //alert(dataBase);
                            //保存问卷页面
                            var html2=$('#saveh').html().trim();
                            //console.log(html2);
                            $.ajax({
                                type:"post",
                                url: "<?php echo url('index/edit/saveHtml'); ?>",
                                data: {"html2":html2,"htmlid":hid},
                                dataType:"json",
                                success:function (e) {
                                    alert('保存成功');
                                }
                            });
						}

                    });
				});
			</script>
          <script>
              $(function () {
                  //获取地址栏参数的方法
                  function getUrlParam(name) {
                      var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)"); //构造一个含有目标参数的正则表达式对象
                      var r = window.location.search.substr(1).match(reg);  //匹配目标参数
                      if (r != null) return unescape(r[2]);
                      return null; //返回参数值
                  }
                  //将问卷的id存入遍历hid
                  var hid=getUrlParam('id');
                  if (hid!=null){
                      console.log(getUrlParam('id'));
                      $.get('<?php echo url("index/edit/show"); ?>',{id:hid},function (e) {
                          console.log(e);
                          var dataObj=eval("("+e+")");
                          console.log(dataObj);
                          var tmp="";
                          for (var i in dataObj){
                              tmp=dataObj[i];
                          }
                          $('#saveh').empty();
                          $('#saveh').append(tmp);
                          $('#saveQuestion').attr('value','修改问卷');
                      },'json');
                  }

              })
          </script>
		</div>
                
		<!--主体框架结束-->
	</body>

</html>