<?php /*a:1:{s:74:"F:\PHPWAMP\wwwroot\tp5.1\wenjuan\application\index\view\Release\index.html";i:1604563539;}*/ ?>
<!DOCTYPE html>
<html><head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>生成二维码</title>
    <link rel="stylesheet" href="../public/static/index/release/css/bootstrap.min.css">
    <style type="text/css">
        body{
            background: url("../public/static/index/release/imgs/1.jpg") no-repeat;
            background-size: 100%;
        }
        .demo{
            width:700px;
            margin:40px auto 0 auto;
            min-height:200px;
            border: 1px solid #d7d8d9;
            background-color: white;
        }

        .demo p{line-height:30px}

        #code
        {
            margin-top:25px;
            border: 1px solid #d7d8d9;
            width: 150px;
            height: 150px;
            position: relative;
        }

        canvas{
            display: block;
            width: 100px;
            height: 100px;
            margin: 0 auto;
            position: absolute;
            top: 15%;
            left: 16%;
        }

    </style>

</head>
<body>
<div id="main" class="container">
    <h2 class="top_title">问卷二维码</h2>
    <div class="demo row text-center">
        <div class="col-xs-6 " style="margin-top: 30px">
            <p>请输入内容然后提交生成二维码：</p>
            <p><input type="text" class="input" id="mytxt"> <button type="button" id="copy" class="btn btn-default" data-clipboard-action="copy" data-clipboard-target="#mytxt">复制</button></p>
            <div><button type="button" id="sub_btn" class="btn btn-default" onclick="screenShot()">下载二维码</button></div>
        </div>

        <div id="code" class="col-xs-3"><img src="" alt="" class="qr_img" download=""></div>
        <div class="col-xs-3" >
            <div ><a href="<?php echo url('index/main/manage'); ?>"><button type="button" class="btn btn-default" style="height: 100px;margin-top: 40px;background-color: #00d0ff;color: white">返回问卷管理页面</button></a></div>
        </div>
    </div>
</div>
<script src="../public/static/index/release/index/jquery_003.js"></script>
<script src="../public/static/index/release/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="../public/static/index/release/index/jquery_002.js"></script>
<script type="text/javascript" src="../public/static/index/release/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../public/static/index/release/js/clipboard.js"></script>
<script type="text/javascript" src="../public/static/index/release/canvas/html2canvas.js"></script>
<script type="text/javascript" src="../public/static/index/release/canvas/canvas2image.js"></script>
<script type="text/javascript" src="../public/static/index/release/canvas/base64.js"></script>

<script type="text/javascript">

    $(function(){
        function getUrlParam(name) {
            var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)"); //构造一个含有目标参数的正则表达式对象
            var r = window.location.search.substr(1).match(reg);  //匹配目标参数
            if (r != null) return unescape(r[2]);
            return null; //返回参数值
        }
        //将问卷的id存入遍历hid
        var hid=getUrlParam('id');
        var userid=getUrlParam('userid');
        var str = "http://30b823a053.zicp.vip/tp5.1/wenjuan/public/rs?id="+hid+"&userid="+userid;
        $('#mytxt').val(str);
        $('#code').qrcode(str);
        // $("#sub_btn").click(function(){
        //     $("#code").empty();
            //var str = toUtf8($("#mytxt").val());
            // $("#code").qrcode({
            //
            //     render: "div",
            //
            //     width: 100,
            //
            //     height:100,
            //
            //     text: str,
            // });
        //});

        //复制功能实现
        var clipboard = new Clipboard('#copy');
        clipboard.on('success', function(e) {
            alert("复制成功,可粘贴");
        });
    });

    // function toUtf8(str) {
    //
    //     var out, i, len, c;
    //
    //     out = "";
    //
    //     len = str.length;
    //
    //     for(i = 0; i < len; i++) {
    //
    //         c = str.charCodeAt(i);
    //
    //         if ((c >= 0x0001) && (c <= 0x007F)) {
    //
    //             out += str.charAt(i);
    //
    //         } else if (c > 0x07FF) {
    //
    //             out += String.fromCharCode(0xE0 | ((c >> 12) & 0x0F));
    //
    //             out += String.fromCharCode(0x80 | ((c >>  6) & 0x3F));
    //
    //             out += String.fromCharCode(0x80 | ((c >>  0) & 0x3F));
    //
    //         } else {
    //
    //             out += String.fromCharCode(0xC0 | ((c >>  6) & 0x1F));
    //
    //             out += String.fromCharCode(0x80 | ((c >>  0) & 0x3F));
    //
    //         }
    //
    //     }
    //
    //     return out;
    //
    // }

</script>
<script>
    var canvas=document.getElementsByTagName('canvas');
    // var ctx=canvas.getContext('2d');
    // ctx.fillStyle='#FF0000';
    // ctx.fillRect(0,0,80,100);

    function screenShot()
    {
        var type ='png';
        var d=document.getElementsByTagName("canvas");
        var imgdata=d[0].toDataURL(type);
        //2.0 将mime-type改为image/octet-stream,强制让浏览器下载
        var fixtype=function(type)
        {
            type=type.toLocaleLowerCase().replace(/jpg/i,'jpeg');
            var r=type.match(/png|jpeg|bmp|gif/)[0];
            return 'image/'+r;
        };
        imgdata=imgdata.replace(fixtype(type),'image/octet-stream');
        //3.0 将图片保存到本地
        var date=new Date();
        var filename=''+date.getHours()+':'+date.getMinutes()+":"+date.getSeconds()+'.'+type;
        savaImage(imgdata,filename);
    };

    function savaImage(data,filename)
    {
        var save_link=document.createElementNS('http://www.w3.org/1999/xhtml', 'a');
        save_link.href=data;
        save_link.download=filename;
        var event=document.createEvent('MouseEvents');
        event.initMouseEvent('click',true,false,window,0,0,0,0,0,false,false,false,false,0,null);
        save_link.dispatchEvent(event);
    };
    </script>
</body>
</html>