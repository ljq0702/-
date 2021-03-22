<?php /*a:1:{s:79:"F:\PHPWAMP\wwwroot\tp5.1\wenjuan\application\index\view\statics\statistics.html";i:1588950650;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/static/index/release/css/bootstrap.min.css">
    <link rel="stylesheet" href="/static/index/statics/js/nav.css">
    <link rel="stylesheet" href="/static/index/statics/js/font-awesome.css">
    <script type="text/javascript" src="/static/index/statics/echarts.min.js"></script>
</head>
<body>
<div class="inside-main text-center" style="margin-bottom: 30px">
    <div class="inside-box">
        <div class="container">
            <div class="title" style="margin-top: 52px;font-size: 25px"><?php echo htmlentities($wenjuan['0']['title']); ?></div>
            <hr>
            <div class="ques_list text-center row">
                <?php foreach($question as $i=>$vo): if(($vo['topic']==1||$vo['topic']==2)): ?>
                <div class="lis-item col-xs-offset-2" style="margin-top: 20px">
                    <div class="ques_title text-left serial" style="font-size: 25px;"><span>1.</span><?php echo htmlentities($vo['title']); ?></div>
                    <div class="box">
                        <!--表格样式-->
                        <div class="tb" style="width: 800px;display: none">
                            <table class="table table-striped">
                                <thead class="text-center">
                                <th style="text-align: center">选项</th>
                                <th style="text-align: center">比例</th>
                                </thead>
                                <tbody>
                                <?php foreach($option as $v): if(($v['question_id']==$vo['question_id'])): ?>
                                <tr>
                                    <td class="sele_title" sid="<?php echo htmlentities($vo['question_id']); ?>"><?php echo htmlentities($v['Scontent']); ?></td>
                                    <td>
                                        <?php foreach($op as $k=>$a): if(($v['select_id']==$k)): foreach($opz as $key=>$b): if(($key==$vo['question_id'])): ?>
                                        <div class="progress progress-striped active" >
                                            <div class="progress-bar progress-bar-info" role="progressbar"
                                                 aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                 style="width:<?php echo htmlentities($a/$b*100); ?>%;" data_num="<?php echo htmlentities($a/$b*100); ?>"><?php echo htmlentities($a/$b*100); ?>%</div>
                                        </div>
                                        <?php endif; ?>
                                        <?php endforeach; ?>
                                        <?php endif; ?>
                                        <?php endforeach; ?>
                                    </td>
                                </tr>
                                <?php endif; ?>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <!--按钮-->
                        <div id="btn" class="text-center" style="margin-bottom:10px ">
                            <div class="btn-group btn-group-lg que_btn num_btn" num="<?php echo htmlentities($i+1); ?>">
                                <button type="button" class="btn btn-default biaoge"><span class="glyphicon glyphicon-th-list"></span> 表格</button>
                                <button type="button" class="btn btn-default tiaoxing"><span class="glyphicon glyphicon-align-left"></span> 条形图</button>
                                <button type="button" class="btn btn-default zhuzhuang"><span class="glyphicon glyphicon-signal"></span> 柱状图</button>
                            </div>
                        </div>
                        <!--条形图等-->

                        <div class="arts" style="border: 1px solid #1f90d8;height: 300px;width: 800px;display: block">
                            <!--柱状图-->
                            <div id="zhuz" class="align-content-center zhuz" num="<?php echo htmlentities($i+1); ?>" style="width: 350px;height: 300px;margin: 0 auto;display: none"></div>
                            <!--条形图-->
                            <div id="tiaox" class="align-content-center tiaox"num="<?php echo htmlentities($i+1); ?>" style="width: 700px;height: 300px;margin: 0 auto;display: block"></div>
                        </div>


                    </div>
                </div>
                <?php else: ?>





                <div class="lis-item col-xs-offset-2" style="margin-top: 20px">
                    <div class="text_title text-left serial" style="font-size: 25px;"><span>1.</span><?php echo htmlentities($vo['title']); ?></div>
                    <div class="box">
                        <div id="btn" class="text-left" style="margin-bottom:10px ">
                            <div class="btn-group btn-group-lg text_btn" num="<?php echo htmlentities($i+1); ?>">
                                <button type="button" class="btn btn-default biaoge"><span class="glyphicon glyphicon-th-list"></span> 表格</button>
                            </div>
                        </div>
                        <!--表格样式-->
                        <div class="tb" style="width: 800px;display: block">
                            <table class="table table-striped">
                                <thead>
                                <th class="text-center">填空内容</th>
                                </thead>
                                <tbody>
                                <?php foreach($text as $v): ?>
                                <tr>
                                    <td><?php echo htmlentities($v['textcontent']); ?></td>
                                </tr>

                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <!--按钮-->
                    </div>
                </div>
                <?php endif; ?>
                <?php endforeach; ?>



                </div>
            </div>
        </div>
    </div>
</div>
<!--<div class="text-center">-->
    <!--<button type="button" class="btn btn-info"><a href="<?php echo url('index/main/statics'); ?>" style="color:white;">返回问卷统计</a></button>-->
<!--</div>-->
<div class="leftNav-item">
    <ul>
        <li>
            <i class="fa fa-location-arrow"></i>
            <a href="<?php echo url('index/main/statics'); ?>" class="rota">返回</a>
        </li>
    </ul>
</div>


<script src="/static/index/manage/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="/static/index/release/js/bootstrap.min.js"></script>
<!--<script type="text/javascript" src="../public/static/index/statics/js/jquery.js"></script>-->
<!--<script type="text/javascript" src="../public/static/index/statics/js/jquery-1.js"></script>-->
<script type="text/javascript">
    $(function () {
        //获取地址栏的id
        function getUrlParam(name) {
            var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)"); //构造一个含有目标参数的正则表达式对象
            var r = window.location.search.substr(1).match(reg);  //匹配目标参数
            if (r != null) return unescape(r[2]);
            return null; //返回参数值
        }
        var id=getUrlParam('id');
        $.get("<?php echo url('index/statics/index'); ?>",{id:id},function (e) {
            console.log(e);
        },'json');

        //问题序号
        $('.serial').find('span').each(function (i) {
            $(this).html(i+1+'.');
        })
    })
</script>
<script>
    $(function () {
        $(".text_btn").find('button').each(function (i) {
            $(this).click(function () {
                var tab=$(this).parent('div').parent("div").siblings(".tb");
                if (tab.css('display')==='none'){
                    tab.css('display','block');
                } else {
                    tab.css('display','none');
                }
            })
        })
    })
</script>
<script>
    $(function () {
        var data1=[];
        var select=[];
        $(".sele_title").each(function (i) {
           select[i]=new Object();
           select[i].sid=$(this).attr('sid');
           select[i].stext=$(this).html();
           select[i].num=$(this).next('td').find('div').find('div').attr('data_num');
        });
        //console.log(select);
        var map={};
        var test=[];
        for (var i=0;i<select.length;i++){
            var ai=select[i];
            if (!map[ai.sid]){
                test.push({
                    sid:ai.sid,
                    stext:ai.stext,
                    data:[ai]
                });
                map[ai.sid]=ai;
            }else {
                for (var j=0;j<test.length;j++){
                    var dj=test[j];
                    if (dj.sid===ai.sid){
                        dj.data.push(ai);
                        break;
                    }
                }
            }
        }
        //console.log(test);

        for (var i=0;i<test.length;i++){
            var dd=test[i]['data'];
            data1.push(dd);
        }
        //console.log(data1);
        var sssss=[];
        var ffff={};
        $.each(data1,function (i,v) {
            for (var i=0;i<v.length;i++){
                var bi=v[i];
                //console.log(bi);
                if (!ffff[bi.sid]){
                    sssss.push({
                        sid:bi.sid,
                        text:[bi.stext],
                        data:[bi.num]
                    });
                    ffff[bi.sid]=bi.sid;
                } else {
                    for (var j=0;j<sssss.length;j++){
                        var dj=sssss[j];
                        if (dj.sid===bi.sid){
                            dj.text.push(bi.stext);
                            dj.data.push(bi.num);
                            break;
                        }
                    }
                }
            }
        });
        //console.log($(".ques_title").length);
        var num_btn=[];
        $(".num_btn").each(function (i,v) {
            num_btn.push($(this).attr("num"));
        });
console.log(num_btn);
        for (var i=0;i<$(".ques_title").length;i++){
            //console.log(i);
            tu(num_btn[i],sssss[i]);
        }
        //tu(2);
    });
    //var fff="<?php echo htmlentities($wenjuan['0']['title']); ?>";
    //console.log(fff);
    function tu(num,data1) {
        var d=$(".zhuz[num="+num+"]");
        var tiao=$(".tiaox[num="+num+"]");
        /**********  柱状图 *********/
        var myChart = echarts.init(d[0]);

        option = {
            color: ['#3398DB'],
            tooltip: {
                trigger: 'axis',
                axisPointer: {            // 坐标轴指示器，坐标轴触发有效
                    type: 'shadow'        // 默认为直线，可选为：'line' | 'shadow'
                }
            },
            grid: {
                left: '3%',
                right: '4%',
                bottom: '3%',
                containLabel: true
            },
            xAxis: [
                {
                    type: 'category',
                    data: data1.text,
                    axisTick: {
                        alignWithLabel: true
                    }
                }
            ],
            yAxis: [
                {
                    type: 'value',
                    min:0,
                    max: 100,
                }
            ],
            series: [
                {
                    name: '直接访问',
                    type: 'bar',
                    barWidth: '60%',
                    data: data1.data
                }
            ]
        };
        myChart.setOption(option,true);




        /**********  条形图 ********/
        var tiaox=echarts.init(tiao[0]);

        optiont = {
            color:['#3398DB'],
            dataset: {
                source: {
                    'product':data1.text,
                    'amount':data1.data

            }
            },
            grid: {containLabel: true},
            xAxis: {name: 'amount',min:0,max:100},
            yAxis: {type: 'category'},
            // visualMap: {
            //     orient: 'horizontal',
            //     left: 'center',
            //     min: 10,
            //     max: 100,
            //     text: ['High Score', 'Low Score'],
            //     // Map the score column to color
            //     dimension: 0,
            //     inRange: {
            //         color: ['#D7DA8B', '#E15457']
            //     }
            // },
            series: [
                {
                    type: 'bar',
                    encode: {
                        // Map the "amount" column to X axis.
                        x: 'amount',
                        // Map the "product" column to Y axis
                        y: 'product'
                    }
                }
            ]
        };

        tiaox.setOption(optiont);


        //进行按钮的遍历，点击相应的按钮，展示相应的统计图
        $(".que_btn[num="+num+"]").find('button').each(function (i) {
            //console.log($(this));
            $(this).click(function () {
                // alert(111);
                var t=$(this).parent("div").parent("div").siblings('.arts').children('#tiaox');
                var z=$(this).parent("div").parent("div").siblings('.arts').children('#zhuz');
                var tb=$(this).parent("div").parent("div").siblings('.tb');
                var art=$(this).parent("div").parent("div").siblings('.arts');
                if ($(this).is('.biaoge')){
                    //alert(111);
                    if (tb.css("display")==='none'){
                        tb.css('display','block');
                    }else {
                        tb.css('display','none');
                    }
                }
                if($(this).is('.tiaoxing')) {
                    if (t.css("display")==='none'){
                        t.css('display','block');
                        z.css('display','none');
                        art.css("display",'block');
                    }else {
                        t.css('display','none');
                        art.css("display",'none');
                    }
                }
                if($(this).is('.zhuzhuang')) {
                    if (z.css("display")==='none'){
                        art.css("display",'block');
                        t.css('display','none');
                        z.css('display','block');
                    }else {
                        z.css('display','none');
                        art.css("display",'none');
                    }
                }
            })
        });
    }
</script>
</body>
</html>