<?php /*a:1:{s:75:"F:\PHPWAMP\wwwroot\tp5.1\wenjuan\application\index\view\Release\qrcode.html";i:1588053972;}*/ ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../public/static/index/release/css/bootstrap.min.css">
    <title>问卷调查</title>
</head>
<body>
<div class="container" style="text-align: center">
    <div class="row">
        <div class="col-xs-12">
            <h2 class="123"><?php echo htmlentities($wenjuan['0']['title']); ?></h2>
        </div>
        <div class="container row">
            <?php foreach($question as $vo): ?>
            <!--多选题-->
            <?php if(($vo['topic']==2)): ?>
            <div class="col-xs-12 duo" >
                <div class="question_title" style="text-align: left">
                    <h3><span>题目序号.</span><?php echo htmlentities($vo['title']); ?>[多选题]</h3>
                </div>
                <div class="col-xs-12 duo_x" style="text-align: left">
                    <?php foreach($option as $v): if(($v['question_id']==$vo['question_id'])): ?>
                    <div class="checkbox duoxuan">
                        <label>
                            <input type="checkbox" value="<?php echo htmlentities($v['Scontent']); ?>" select_id="<?php echo htmlentities($v['select_id']); ?>" question_id="<?php echo htmlentities($v['question_id']); ?>">
                            <?php echo htmlentities($v['Scontent']); ?>
                        </label>
                    </div>
                    <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>




            <?php elseif(($vo['topic']==1)): ?>
            <!--单选题-->
            <div class="col-xs-12 dan" style="text-align: left">
                <div class="question_title" style="text-align: left">
                    <h3><span>题目序号.</span><?php echo htmlentities($vo['title']); ?>[单选题]</h3>
                </div>
                <?php foreach($option as $v): if(($v['question_id']==$vo['question_id'])): ?>
                <div class="radio danxuan" id="<?php echo htmlentities($vo['question_id']); ?>">
                    <label>
                        <input type="radio" name="options<?php echo htmlentities($vo['question_id']); ?>" id="options" value="<?php echo htmlentities($v['Scontent']); ?>" select_id="<?php echo htmlentities($v['select_id']); ?>" question_id="<?php echo htmlentities($v['question_id']); ?>">
                        <?php echo htmlentities($v['Scontent']); ?>
                    </label>
                </div>
                <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <?php else: ?>


            <!--填空题-->
            <div>
                <div class="col-xs-12 question_title" style="text-align: left">
                    <h3><span>题目序号.</span><?php echo htmlentities($vo['title']); ?>[填空题]</h3>
                </div>
                <div class="col-xs-12">
                    <textarea class="form-control" rows="4" question_id="<?php echo htmlentities($vo['question_id']); ?>"></textarea>
                </div>
            </div>
            <?php endif; ?>
            <?php endforeach; ?>
            <button class="btn btn-default" type="submit" style="width: 150px;height: 60px;background-color: #00a0e8;color: white;margin-top: 30px;margin-bottom: 30px;">提交</button>
            </div>

        </div>
</div>

<script type="text/javascript" src="../public/static/index/release/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="../public/static/index/release/js/bootstrap.min.js"></script>
<script src="http://pv.sohu.com/cityjson?ie=utf-8"></script>
<script type="text/javascript">
    $(function () {
        //获取地址栏的userid
        function getUrlParam(name) {
            var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)"); //构造一个含有目标参数的正则表达式对象
            var r = window.location.search.substr(1).match(reg);  //匹配目标参数
            if (r != null) return unescape(r[2]);
            return null; //返回参数值
        }
        var userid=getUrlParam('userid');
        //问题序号
        $(".question_title").find('h3').find('span').each(function (i) {
            $(this).html(i+1+'.');
        });
        var data=[];
        var blanks=[];
        //$('input').attr('checked',false);
        $('.btn').click(function (i) {
            //alert(111);
            //console.log($('.duoxuan').find('label').find('input:checked'));
            var d=$('input:checked');
            var m=0;
            var n=0;
            //判断单选是否填写完整
            if ($('.dan').length===$('.danxuan').find('label').find('input:checked').length){
                //$('.duoxuan').find('label').find('input:checked')
                //console.log($('.duo_x'));
                //判断多选是否填写完整
                $('.duo_x').each(function (i) {
                    //console.log($(this).find('div').find('label').find('input:checked'));
                   if ($(this).find('div').find('label').find('input:checked').length!==0){
                       m=m+1;
                   }
                });
                //console.log(m);
                if (m===$('.duo').length) {
                     $('.form-control').each(function (i) {
                         //  console.log($(this).val());
                         if($(this).val().length!==0){
                             n=n+1;
                         }
                     });
                     //判断填空是否填写完整
                     if (n===$('.form-control').length){
                         var ip=returnCitySN["cip"]; //获取到用户的ip地址
                         var text=$(".form-control");
                         var selectid=[];
                         var textcontent=[];
                         d.each(function (i) {
                             //获取到选项id,并存入数组，将填写信息依次存入数组
                             selectid[i]=new Object();
                             selectid[i].paperid="<?php echo htmlentities($wenjuan['0']['paperid']); ?>";
                             selectid[i].question_id=$(this).attr('question_id');
                             selectid[i].option_id=$(this).attr('select_id');
                             selectid[i].userid=userid;
                             selectid[i].user_ip=ip;
                         });
                         data.push(selectid);
                         text.each(function (j) {
                             textcontent[j]=new  Object();
                             textcontent[j].paperid="<?php echo htmlentities($wenjuan['0']['paperid']); ?>";
                             textcontent[j].question_id=$(this).attr('question_id');
                             textcontent[j].userid=userid;
                             textcontent[j].user_ip=ip;
                             textcontent[j].textcontent=$(this).val();
                         });
                         blanks.push(textcontent);
                         //向后台发送请求
                         $.ajax({
                             type:"post",
                             url:"<?php echo url('index/release/subselect'); ?>",
                             data:{"dd":data,"db":blanks},
                             dataType:"json",
                             success:function (e) {
                                 console.log(e);
                                 if (e==0){
                                     alert("请勿重复提交!");
                                 }else {
                                     alert("提交成功");
                                     window.location.href = "<?php echo url('index/release/sucThank'); ?>";
                                 }
                             }
                         });
                         // $.ajax({
                         //     type:"post",
                         //     url:"<?php echo url('index/release/subtext'); ?>",
                         //     data:{"db":blanks},
                         //     dataType:"json",
                         //     success:function (e) {
                         //         console.log(e);
                         //         if (e==false){
                         //             alert("请勿重复提交!");
                         //         }else {
                         //             alert("提交成功");
                         //             window.location.href = "<?php echo url('index/release/sucThank'); ?>";
                         //         }
                         //     }
                         // });
                         //console.log(data);
                         //console.log(blanks);
                          //alert("提交成功");
                     } else {
                         alert("请将问卷填写完整");
                     }

                }else {
                    alert("请将问卷填写完整");
                }
            }else{
                alert("请将问卷填写完整");
            }
        })
    })
</script>
</body>
</html>