<style>
#graphbox{
border:1px solid #e7e7e7;
padding:10px;
width:90px;
background-color:#f8f8f8;
margin:5px 0;
float:left;
}
#graphbox h2{
color:#666666;
font-family:Arial;
font-size:18px;
font-weight:700;
}
.graph{
position:relative;
background-color:#F0EFEF;
border:1px solid #000000;
border-radius:5px;
-moz-border-radius: 5px !important;
-webkit-border-radius: 5px;
padding:2px;
font-size:11px;
font-weight:700;
width:260px
}
.graph .bar{
position:relative;
text-align:center;
color:#ffffff;
height:10px;
line-height:10px;
font-family:Arial;
display:block;
}
.graph a:link,.graph a:visited,.graph a:hover{
	text-align:center;
	color:#ABDC6C;
	height:10px;
	line-height:10px;
	font-family:Arial;
	padding-left:5px;
}
.graph .bar{
	border-radius:5px;
	-moz-border-radius: 3px !important;
	-webkit-border-radius: 3px;

}
#invite_box{
	border-radius:5px;
	-moz-border-radius: 3px !important;
	-webkit-border-radius: 3px;
}
tr.gray,tr.gray a{
	color:#999999;
}

</style>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="image/x-icon" href="/favicon.ico" rel="icon"/>
<link type="image/x-icon" href="/favicon.ico" rel="shortcut icon"/>
<meta http-equiv="Content-Security-Policy" content="script-src 'self' 'unsafe-inline' 'unsafe-eval' *.cloudflare.com *.google-analytics.com *.cnzz.com; object-src 'none'; child-src https:">

<script src="/js/jquery.min.js" type="text/javascript" /></script>
<script>
    function mobileplayer()
    {
        var platform = navigator.platform;
        var ua = navigator.userAgent;
        var ios = /iPhone|iPad|iPod/.test(platform) && ua.indexOf( "AppleWebKit" ) > -1;
        var andriod = ua.indexOf( "Android" ) > -1;
        if(ios || andriod) {
            return true;
        } else {
            return false;
        }
    }
    function AC_FL_RunContent() {
        var str = '';
        var ret = AC_GetArgs(arguments, "clsid:d27cdb6e-ae6d-11cf-96b8-444553540000", "application/x-shockwave-flash");
        if($.browser.msie && !$.browser.opera) {
            str += '<object ';
            for (var i in ret.objAttrs) {
                str += i + '="' + ret.objAttrs[i] + '" ';
            }
            str += '>';
            for (var i in ret.params) {
                str += '<param name="' + i + '" value="' + ret.params[i] + '" /> ';
            }
            str += '</object>';
        } else {
            str += '<embed ';
            for (var i in ret.embedAttrs) {
                str += i + '="' + ret.embedAttrs[i] + '" ';
            }
            str += '></embed>';
        }
        return str;
    }
    function AC_GetArgs(args, classid, mimeType) {
        var ret = new Object();
        ret.embedAttrs = new Object();
        ret.params = new Object();
        ret.objAttrs = new Object();
        for (var i = 0; i < args.length; i = i + 2){
            var currArg = args[i].toLowerCase();
            switch (currArg){
                case "classid":break;
                case "pluginspage":ret.embedAttrs[args[i]] = 'http://www.macromedia.com/go/getflashplayer';break;
                case "src":ret.embedAttrs[args[i]] = args[i+1];ret.params["movie"] = args[i+1];break;
                case "codebase":ret.objAttrs[args[i]] = 'http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0';break;
                case "onafterupdate":case "onbeforeupdate":case "onblur":case "oncellchange":case "onclick":case "ondblclick":case "ondrag":case "ondragend":
                case "ondragenter":case "ondragleave":case "ondragover":case "ondrop":case "onfinish":case "onfocus":case "onhelp":case "onmousedown":
                case "onmouseup":case "onmouseover":case "onmousemove":case "onmouseout":case "onkeypress":case "onkeydown":case "onkeyup":case "onload":
                case "onlosecapture":case "onpropertychange":case "onreadystatechange":case "onrowsdelete":case "onrowenter":case "onrowexit":case "onrowsinserted":case "onstart":
                case "onscroll":case "onbeforeeditfocus":case "onactivate":case "onbeforedeactivate":case "ondeactivate":case "type":
                case "id":ret.objAttrs[args[i]] = args[i+1];break;
                case "width":case "height":case "align":case "vspace": case "hspace":case "class":case "title":case "accesskey":case "name":
                case "tabindex":ret.embedAttrs[args[i]] = ret.objAttrs[args[i]] = args[i+1];break;
                default:ret.embedAttrs[args[i]] = ret.params[args[i]] = args[i+1];
            }
        }
        ret.objAttrs["classid"] = classid;
        if(mimeType) {
            ret.embedAttrs["type"] = mimeType;
        }
        return ret;
    }
</script>
<script src="/js/zoom2.v.js" type="text/javascript" /></script>
<!--[if IE 6]>
<script src="js/DD_belatedPNG_0.0.8a-min.js"></script>
<script>
  DD_belatedPNG.fix('#site_logo');
</script>
<![endif]-->


<script type="text/javascript" src="/js/klappe.js"></script>
<script type="text/javascript" src="/js/ctrlent.js"></script>
<script type="text/javascript" src="/js/facebox.js"></script>
<title>TTG :: seckiller 的详情</title>
<meta name="keywords" content="TTG,套套哥,听听歌"/>
<meta name="description" content="totheglory,套套哥,听听歌"/>
<link rel="stylesheet" href="/css/default.css?190306" type="text/css">
			<script type="text/javascript">
				function get_user_bonus(uid){
					$.getJSON('/modtask.php?ajax=1&ajax_action=get_user_bonus&uid='+uid+'&s='+Math.floor(Math.random()*1000),function(data){
						alert('做种数量积分：'+data[0]+'\r\n'+'速度比率积分：'+data[1]+'\r\n'+'做种时间积分：'+data[2]+'\r\n'+'种子生命周期：'+data[3]+'\r\n'+'种子尺寸积分：'+data[4]+'\r\n'+'绝对保种积分：'+data[5]+'\r\n'+'积分加成：×'+data[6]+'\r\n'+'永久双倍积分：'+data[8]+'\r\n'+'总计：'+data[7]+'\r\n');
					});
				}
				$(document).ready(function(){
					$('.ipstate').each(function(){
						var ip=$(this).html();
						var target=$(this);
						$.get('/ip/ip.php?action=queryip&ip_url='+ip,function(data){
                            target.attr('class', '');
                            target.attr('title', data);
                            target.text(`${ip} - ${data}`);
							// target.empty();
                            // target.append(`<a href="javascript:void(0)" title="${data}">${ip} - ${data}</a>`);

						});
					});
					$('#ajax-loader').ajaxStart(function(){$(this).show()});
					$('#ajax-loader').ajaxStop(function(){$(this).hide()});

				});
				function getInvite(id){
					var target=$('#invite_box');
					if(target.length<1){
						$.getJSON('/modtask.php?ajax=1&ajax_action=get_user_invite&uid='+id,function(data){
							//var target=$('#invite_box');
							if(target.length<1){
								var count=0;
								var table=$('<table width="100%" cellspacing="0" cellpadding="5" border="1"></table>');
								target=$('<div style="width: 600px; height: 200px; position: absolute; border: 10px solid #777777; left: 40%; top: 30%;overflow:auto;background:#D7D7DE;" id="invite_box"></div>');
								target.append('<center><button onclick="close_invite();">关闭</button></center>');
								table.append('<tr><th width="80px">邀请码</th><th>邀请人</th><th width="186px">邀请码生成时间</th><th width="186px">邀请码发送时间</th></tr>');
								if(data=='empty'){
									alert('无有效信息');
									return;
								}
								if(data=='error'){
									alert('程序错误或您没有权限');
									return;
								}
								$.each(data,function(index,inv){
									table.append('<tr'+(inv.retire===1?' class="gray"':'')+'><td class="rowhead">'+inv.invcode+'</td><td align="center"><a href="/userdetails.php?id='+inv.ruid+'" target="_blank">'+inv.rusername+'</a></td><td align="center">'+inv.createtime+'</td><td align="left">'+inv.usetime+'</td></tr>');
									count++;
								});
								if(count>10){
									target.height(600);
								}else if(count<3){
									target.height(140);
								}else{
									target.height(count*25+60);
								}
								count>0 && target.append(table);
								target.css({top:$('body').scrollTop()+200+'px',left:($('body').innerWidth()/2-350)+'px'}).appendTo('body');

							}
						});
					}else{
						target.css({top:$('body').scrollTop()+200+'px',left:($('body').innerWidth()/2-350)+'px'}).show();
					}
				}
				function close_invite(){
					$('#invite_box').hide();;
				}
			</script>
			
<script type="text/javascript">
  //var _gaq = _gaq || [];
  //_gaq.push(['_setAccount', 'UA-25606536-1']);
  //_gaq.push(['_trackPageview']);

  //(function() {
  //  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
  //  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
  //  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  //})();

  function blink(selector){
    $(selector).fadeOut('normal', function(){
        $(this).fadeIn('normal', function(){
            blink(this);
        });
    });
  }

  function goTop() {
    $(window).scroll(function(e) {
        if($(window).scrollTop()>300)
            $("#gotop").fadeIn(300);
        else
            $("#gotop").fadeOut(300);
    });
  };
  $(document).ready(function(){
    $("a#signed").click(function(){
        $.post("signed.php", {signed_timestamp: "1656337698", signed_token: "c75010c912edbfa72dd98139254a3fa6"}, function(data) {
            $('#sp_signed').html("<b style=\"color:green;\">已签到</b>");
            alert(data);
        });
    });
    $("a.nocheck").click(function(){
        if (!confirm('确认使用此道具？'))
            return false;
        var tid=$(this).attr("tid");
        var mid=$(this).attr("mid");
        $.post("/usemall.php", {c: "nocheck", tid: tid, mid: mid}, function(data) {
            alert(data);
        });
    });
    $('a[rel*=modal_notice]').facebox();
    blink('span#blink');

    $("#gotop").click(function(e) {
        $('body,html').animate({scrollTop:0},500);
    });
    goTop();
  });
</script>
</head>
<body>
<table width="100%" cellspacing="0" cellpadding="0" style="background:transparent; min-width:1126px;">
<tr>
<td class="clear" width="49%">
<div id="site_logo" style="margin-bottom: 6px;background:url('/pic/ttg_logo_1.png') no-repeat 0 0;width:429px;height:73px;"></div>
</td>
<td class=clear>
</td>
<td class=clear width=49% align=right>
</td>
</tr></table>
<!-- /////// Added by hdmonster 2007-07-31 //////// -->
<!-- /////// some vars for the statusbar;o) //////// -->


<script>
function showmenu(){
	var targetMenu=$('#browse_menu');
	var offset=$('#browseBtn').offset();
	targetMenu.css('top',offset.top+40);
	targetMenu.css('left',offset.left);
	targetMenu.show()
}
function hidemenu(){
var targetMenu=$('#browse_menu');
	targetMenu.hide()
}
</script>
<table cellpadding="4" cellspacing="1" border="0" style="width:100%; min-width:1126px;">
<tr><td ><table style="width:100%" cellspacing="0" cellpadding="0" border="0">
  <tr>
  <td class="bottom" align="left">
      <span class="smallfont">欢迎回来，<b><a href="/userdetails.php?id=161520">seckiller</a></b>
&nbsp;&nbsp;&nbsp;
[<span id="sp_signed"><a href="javascript:void(0);" id="signed"><b style="color:red;">签到</b></a></span>]&nbsp;&nbsp;&nbsp;[<a href="/donate.php">捐助</a>]
&nbsp;&nbsp;&nbsp;[<a href="/my.php">控制面板</a>]
&nbsp;&nbsp;&nbsp;[<a href="/mycarts.php"><font color=purple><b>小货车</b></font></a>]
&nbsp;&nbsp;&nbsp;[<a href="/bookmarks.php">收藏夹</a>]
&nbsp;&nbsp;&nbsp;[<a href="/ndreports.php"><font color="#FF00BF"><b>禁转举报</b></font></a>]
&nbsp;&nbsp;&nbsp;[<a href="/invite.php">邀请：<span id='invites'>0</span></a>]
&nbsp;&nbsp;&nbsp;[<a href="/rsstools.php">RSS订阅</a>]
&nbsp;&nbsp;&nbsp;[<a href="/logout.php">退出</a>]
&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;[<a href="/blackjack.php">BlackJack</a>]
&nbsp;&nbsp;&nbsp;[<a href="/bet.php">菠菜</a>]<br/>
<font color=1900D1>分享率 :</font> <font color=#000000>6.494</font>&nbsp;&nbsp;<font color=green>上传量 : </font> <font color=black><a href="#" onclick="return false;" title="604,930.86 MB">590.75 GB</a></font>&nbsp;&nbsp;<font color=darkred>下载量 :</font> <font color=black><a href="#" onclick="return false;" title="93,153.42 MB">90.97 GB</a></font>&nbsp;&nbsp;&nbsp;&nbsp;<font color=1900D1>做种活动 :&nbsp;</font></span> <img alt="做种中" title="做种中" src="/pic/arrowup.gif">&nbsp;<font color=black><span class="smallfont">200</span></font>&nbsp;&nbsp;<img alt="下载中" title="下载中" src="/pic/arrowdown.gif">&nbsp;<font color=black><span class="smallfont">5</span></font>&nbsp;&nbsp;<font color=A83838>HP:&nbsp;</font>5&nbsp;&nbsp;积分 : <a href="/mybonus.php">10857.46</a>&nbsp;&nbsp;<a href="/mall.php"><b style="color:#FF8000;">积分商城</b></a>
</td>
<td class="bottom" align="right">
    <a href="?id=161520&changelang=8"><img src="/pic/flag/china.gif" width="16" height="10" title="中文(Chinese)" border="0" alt="中文"></a>
    <a href="?id=161520&changelang=12"><img src="/pic/flag/uk.gif" width="16" height="10" title="英文(English)" border="0" alt="英文"></a>
    <a href="?id=161520&changelang=17"><img src="/pic/flag/japan.gif" width="16" height="10" title="日本語(japanese)" border="0" alt="日本語"></a>
    <a href="?id=161520&changelang=30"><img src="/pic/flag/south_korea.gif" width="16" height="10" title="韩文(Korean)" border="0" alt="韩文"></a>
    <span class="smallfont">当前时间 : 21:48<br/>
<span class=smallfont><a href=/messages.php?action=viewmailbox&box=1><img height=14px style=border:none alt=inbox title='inbox (no new messages)' src=/pic/pn_inbox.gif></a> 1 (0 <b>新</b>)</span><span class=smallfont>&nbsp;&nbsp;<a href=/messages.php?action=viewmailbox&box=-1><img height=14px style=border:none alt="发件箱" title="发件箱" src=/pic/pn_sentbox.gif></a> 0</span>&nbsp;<a href=/friends.php><img style=border:none alt="好友列表" title="好友列表" src=/pic/buddylist.gif></a></span></td></tr></table></td></tr></table>
<p>

<div id="book_tools" style="width:100%; min-width:1126px;">
<div class="inner clearfix">
<table class=main style="width:95%" cellspacing="0" cellpadding="5" border="0" align="center" id="nav_table">
<tr>
<td align="center" class="navigation"><a href="/index.php">首页<br />Home</a></td>
<!--<td align="center" class="navigation"><a href="http://totheglory.im/bbs" target="_blank"><font color=red><b>社区<br />Forum</b></font></a></td>-->
<td align="center" class="navigation"><a href="/forums.php"><font color=red><b>社区<br />Forum</b></font></a></td>
<td align="center" class="navigation"><a id="browseBtn" href="/browse.php?c=M">影视&音乐(<font color=red><b>新</b></font>)<br />Media</a></td>
<td align="center" class="navigation"><a href="/rules.php">规则<br />Rules</a></td>
<td align="center" class="navigation"><a href="/faq.php">常见问题<br />FAQ</a></td>
</tr>
</table>
</div>
</div>
<table class="mainouter" style="width:100%; min-width:1126px;" border="1" cellspacing="0" cellpadding="10" id="main_table">
<tr><td align=center class=outer style="padding-top: 20px; padding-bottom: 20px">
<p><table border=0 style='background:#F781F3;'><tr><td><div style="padding:0 10px;"><p><b>目前下载量：90.97 GB (已达标)</b></p><p><b>目前上传量：590.75 GB (已达标)</b></p><p><b>目前做种积分：10857.46 (已达标)</b></p><p><b>目前分享率：6.494 (已达标)</b></p><p><b>亲，距离新人考核结束还有21天，请保持达标状态直到顺利通过，加油</b></p><p><b>注意：请仔细阅读<a href="/forums.php?action=viewtopic&topicid=8"><font style="color:blue;">【新手必读】TTG详细使用手册</font></a></b></p><p><b>注意：自注册之日起开始考核分享率，请谨慎下载，参见<a href="/forums.php?action=viewtopic&topicid=2928"><font style="color:red;">【TTG新手参考】</font></a></b></p><p><b>友情提示：待升级到 TeraByte 级别才可浏览游戏区哦</b></p><p><b style="color: red;">如无法完成，也可考虑<a href="/donate.php" target="_blank">捐助</a></b></p></div></td></tr></table></p><p><table class=main border=0 cellspacing=0 cellpadding=0><tr><td class=embedded><h1 style='margin:0px'>seckiller</h1></td></tr></table></p>
<table class=main width=1024 border=0 cellspacing=0 cellpadding=0><tr><td class=embedded>
<table width=100% border=1 cellspacing=0 cellpadding=5>
<tr><td class=rowhead>注册日期</td><td align=left>2022-06-18 13:03:05</td></tr>
<tr><td class=rowhead>上次访问</td><td align=left>2022-06-27 21:47:01</td></tr>
<tr><td class=rowhead>网络地址</td><td align=left><span class="ipstate">221.231.165.124</span></td></tr>
<tr><td class=rowhead>BT Client</td><td align=left><table border="1" cellspacing="0" cellpadding="5"><tr class="nowrap"><td class="colhead" align="center">client</td><td class="colhead" align="center">IPv4</td><td class="colhead" align="center">IPv6</td><td class="colhead" align="center">Port</td><td class="colhead" align="center">seeding</td><td class="colhead" align="center">leeching</td><td class="colhead" align="center">start time</td><td class="colhead" align="center">seedbox</td></tr><tr class="nowrap"><td class="rowfollow" align="center">qBittorrent/4.3.9</td><td class="rowfollow" align="center" style="color: #000;"><span class="ipstate">221.231.165.124</span></td><td class="rowfollow" align="center">240e:3a1:ecf:9470:48d3:24ff:fe13:6bd7</td></td><td class="rowfollow" align="center">14065</td><td class="rowfollow" align="center">4</td><td class="rowfollow" align="center">5</td><td class="rowfollow" align="center"><span title="2022-06-27 19:50:07">6 天 </span></td><td class="rowfollow" align="center">N</td></tr><tr class="nowrap"><td class="rowfollow" align="center">Transmission/3.00</td><td class="rowfollow" align="center" style="color: #000;"><span class="ipstate">221.231.165.124</span></td><td class="rowfollow" align="center">240e:3a1:ecf:9470:48d3:24ff:fe13:6bd7</td></td><td class="rowfollow" align="center">51414</td><td class="rowfollow" align="center">196</td><td class="rowfollow" align="center">0</td><td class="rowfollow" align="center"><span title="2022-06-27 15:23:20">6 天 </span></td><td class="rowfollow" align="center">N</td></tr></table></td></tr>
<tr>
		<td class=rowhead>上传量</td>
		<td align=left>590.75 GB</td>
	</tr>
	<tr>
		<td class=rowhead>下载量</td>
		<td align=left>90.97 GB</td>
	</tr>
<tr><td class=rowhead style='vertical-align: middle'>分享率</td><td align=left valign=center style='padding-top: 1px; padding-bottom: 0px'><table border=0 cellspacing=0 cellpadding=0><tr><td class=embedded><font color=#000000>6.493</font></td><td class=embedded>&nbsp;&nbsp;<img src=pic/smilies/w00t.gif></td></tr></table></td></tr>
<tr><td class=rowhead style='vertical-align: middle'>做种/下载时间比率</td><td align=left valign=center style='padding-top: 1px; padding-bottom: 0px; vertical-align: middle'><font color=#000000>114.568</font>&nbsp;&nbsp;<img src=pic/smilies/w00t.gif>&nbsp;&nbsp;[做种时间: 1700 天 5 小时 43 分钟 , 下载时间: 14 天 20 小时 10 分钟 ]</td></tr>
<tr><td class=rowhead>HP</td><td align=left>5</td></tr>

<tr><td class=rowhead>等级</td><td align=left>Byte</td></tr>
<tr><td class=rowhead>邀请</td><td align=left><a href='/inviterecover.php?uid=161520'>查看/回收</a></td></tr>
<tr><td class=rowhead nowrap>积分</td><td align=left>10857.46</td></tr>
<tr><td class=rowhead nowrap>种子评论数</td><td align=left>0</td></tr>
<tr><td class=rowhead nowrap>社区帖子数</td><td align=left>0</td></tr>
<tr><td class=rowhead nowrap>安全问题</td><td align=left><font style="color:red;">未启用</font></td></tr>
<tr><td class=rowhead nowrap>双重认证</td><td align=left><font style="color:red;">未启用</font></td></tr>
<tr valign=top><td class=rowhead>当前上传<a href="javascript: klappe_news('a2')"><br><img border="0" src="/pic/viewinfo.gif" id="pica" alt="[显示/隐藏]" title="显示/隐藏"></td><td align=left><div id="ka2" style="display: none;"><table class=main border=1 cellspacing=0 cellpadding=5><tr><td class=colhead align=center>类型</td><td class=colhead>名称</td><td class=colhead align=center>TTL</td><td class=colhead align=center>尺寸</td><td class=colhead align=right>做种者</td><td class=colhead align=right>下载者</td><td class=colhead align=center>上传量</td>
<td class=colhead align=center>下载量</td><td class=colhead align=center>分享率</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_m2160p.png" alt="影视2160p"></td>
<td><a href=details.php?id=571801&amp;hit=1><b>CCTV4K Jun Wu Ling Ju Li 20220626 UHDTV HEVC HLG DD 5 1-NGB [CCTV4K超高清 军武零距离 铁拳劲旅](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>2<br>小时</td><td align=center>6.48<br>GB</td><td align=right>167</td><td align=right>12</td><td align=center>4.09<br>GB</td>
<td align=center>6.48<br>GB</td><td align=center><font color=#990000>0.631</font></td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_hjb.png" alt="韩剧包"></td>
<td><a href=details.php?id=478263&amp;hit=1><b>Work Later Drink Now 2021 S01 1080P WEB-DL H264 AAC-JKCT[술꾼도시여자들/酒鬼都市女人们 全12集] 韩语发音|自制内封简繁Friday软字幕</b></a></td><td align=center>5063<br>小时</td><td align=center>14.18<br>GB</td><td align=right>44</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_m2160p.png" alt="影视2160p"></td>
<td><a href=details.php?id=544213&amp;hit=1><b>The Grand Mansion Gate Complete 2001 WEB-DL 2160p H265 AAC-LeagueWEB [大宅门 | 40集全 简中硬字 导演：郭宝昌 主演：斯琴高娃 刘佩琦 陈宝国 中国第一部高清电视剧 *高清经典剧系列第一弹](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>1526<br>小时</td><td align=center>51.11<br>GB</td><td align=right>8</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p"></td>
<td><a href=details.php?id=370161&amp;hit=1><b>The Great Buddha 2017 BluRay 1080p x265 10bit MNHD-FRDS[大佛普拉斯 第54届台湾电影金马奖5项大奖 闽南语 汉语普通话 简英SUP字幕 10bit HEVC版本](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>30471<br>小时</td><td align=center>4.10<br>GB</td><td align=right>75</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_rjb.png" alt="日剧包"></td>
<td><a href=details.php?id=485699&amp;hit=1><b>Kingyo Tsuma 2022 Netflix WEB-DL 1080p x264 DDP-HDCTV[2022冬季日剧 金鱼妻 全8话 | 主演：筱原凉子 岩田刚典 *内封中字*](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>3195<br>小时</td><td align=center>13.03<br>GB</td><td align=right>42</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_usb.png" alt="欧美剧包"></td>
<td><a href=details.php?id=362401&amp;hit=1><b>Pride and Prejudice E01-E06 1995 1080p Blu-ray x265 10bit AC3￡cXcY@FRDS[傲慢与偏见/傲慢与偏见 BBC版 迷你剧 全六集 国英双语/中英字幕/简中字幕 BBC出品 10bit HEVC版本 修正E01错误 转自FRDS 可在原种基础上校验辅种]</b></a></td><td align=center>33135<br>小时</td><td align=center>16.43<br>GB</td><td align=right>45</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_hjb.png" alt="韩剧包"></td>
<td><a href=details.php?id=480015&amp;hit=1><b>One Ordinary Day S01 2021 CoupangPlay WEB-DL 1080p H264 AAC-HDCTV[韩剧 某一天 全8集 | 主演：金秀贤 车胜元 *内封中字*](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>4565<br>小时</td><td align=center>14.83<br>GB</td><td align=right>25</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_do720p.png" alt="纪录片720p"></td>
<td><a href=details.php?id=25179&amp;hit=1><b><font color=#0000FF>National Geographic 720p HDTV x264[国家地理 合集 500GB有字幕B] </font></b></a></td><td align=center>101009<br>小时</td><td align=center>235.88<br>GB</td><td align=right>234</td><td align=right>2</td><td align=center>69.23<br>MB</td>
<td align=center>0.00<br>kB</td><td align=center>Inf.</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_drama.png" alt="高清综艺"></td>
<td><a href=details.php?id=571809&amp;hit=1><b>TJTV Ai Qing Bao Wei Zhan 20220614 1080p HDTV H264-NGB [天津卫视 爱情保卫战 后婚恋时代情感综艺节目](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>1<br>小时</td><td align=center>3.06<br>GB</td><td align=right>136</td><td align=right>34</td><td align=center>1.06<br>GB</td>
<td align=center>3.06<br>GB</td><td align=center><font color=#cc0000>0.347</font></td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_drama.png" alt="高清综艺"></td>
<td><a href=details.php?id=571808&amp;hit=1><b>TJTV Ai Qing Bao Wei Zhan 20220609 1080p HDTV H264-NGB [天津卫视 爱情保卫战 后婚恋时代情感综艺节目](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>1<br>小时</td><td align=center>3.20<br>GB</td><td align=right>129</td><td align=right>37</td><td align=center>629.10<br>MB</td>
<td align=center>3.20<br>GB</td><td align=center><font color=#ee0000>0.192</font></td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_drama.png" alt="高清综艺"></td>
<td><a href=details.php?id=571807&amp;hit=1><b>TJTV Ai Qing Bao Wei Zhan 20220607 1080p HDTV H264-NGB [天津卫视 爱情保卫战 后婚恋时代情感综艺节目](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>1<br>小时</td><td align=center>3.12<br>GB</td><td align=right>145</td><td align=right>17</td><td align=center>441.20<br>MB</td>
<td align=center>3.12<br>GB</td><td align=center><font color=#ee0000>0.138</font></td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p"></td>
<td><a href=details.php?id=411831&amp;hit=1><b>Joker 2019 BluRay 1080p x265 10bit MNHD-FRDS [【小丑/小丑起源电影：罗密欧】10bit HEVC版本](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>15747<br>小时</td><td align=center>6.62<br>GB</td><td align=right>77</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_dlb.png" alt="华语剧包"></td>
<td><a href=details.php?id=452017&amp;hit=1><b>The Greed of Man 1992 2160p WEB-DL H{@}265 AAC 2Audio-LeagueWEB [大时代 全40集 | 主演: 郑少秋 刘青云 周慧敏 郭蔼明 李丽珍 国粤双语 | *4K*](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>7447<br>小时</td><td align=center>81.24<br>GB</td><td align=right>17</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_dlb.png" alt="华语剧包"></td>
<td><a href=details.php?id=471479&amp;hit=1><b>Zheng Fu 2003 WEB-DL 4k H265 AAC-HDSWEB[征服 全20集 主演: 孙红雷 / 石兆琪 / 江珊 / 刘威葳 / 李易祥 / 张立 / 倪土 / 曹珊姗](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>6973<br>小时</td><td align=center>30.82<br>GB</td><td align=right>37</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_anime.png" alt="高清动漫"></td>
<td><a href=details.php?id=321998&amp;hit=1><b>Death Note BDrip 1920x1080 TV 01-37Fin+SP H264 FLAC MKV@U2[死亡笔记](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>48037<br>小时</td><td align=center>49.37<br>GB</td><td align=right>29</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_do1080p.png" alt="纪录片1080i/p"></td>
<td><a href=details.php?id=555732&amp;hit=1><b>Voices of Liberation 2022 S01 1080p NF WEB-DL DD+5{@}1 x264-cfandora [解放之声 第一季  全11集  二战结束时重要里程碑](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>1054<br>小时</td><td align=center>31.33<br>GB</td><td align=right>4</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_hjb.png" alt="韩剧包"></td>
<td><a href=details.php?id=394673&amp;hit=1><b>Guardian The Lonely and Great God S01 1080p NF WEB-DL DDP2{@}0 x264-Ao [Netflix源 | 韩剧: 孤单又灿烂的神:鬼怪 全16集 2016 | 主演: 孔侑 金高银 李栋旭 韩语原声杜比2 0 内封多国语字幕](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>21993<br>小时</td><td align=center>37.92<br>GB</td><td align=right>60</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p"></td>
<td><a href=details.php?id=412698&amp;hit=1><b>Edward Scissorhands 25th Anniversary Remastered Edition BluRay 1080p x265 10bit 2Audios MNHD-FRDS [剪刀手爱德华(25周年纪念数码修复版)/幻海奇缘(港)(sup简繁英 注定悲剧的童话 10bit HEVC版本)](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>15492<br>小时</td><td align=center>5.58<br>GB</td><td align=right>63</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_usb.png" alt="欧美剧包"></td>
<td><a href=details.php?id=403822&amp;hit=1><b>My Brilliant Friend S02 2020 1080p WEB-DL x265 AC3￡cXcY@FRDS[【我的天才女友/那不勒斯故事(台)/L‘amica geniale】 第二季 意大利语/简中SUP字幕 HBO出品 HEVC版本](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>18495<br>小时</td><td align=center>13.97<br>GB</td><td align=right>34</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_anime.png" alt="高清动漫"></td>
<td><a href=details.php?id=571316&amp;hit=1><b>Studio Ghibli Collection 1979-2016 BluRay 1080p x265 10bit 4Audio MNHD-FRDS [【吉卜力作品合集】收录吉卜力工作室24部长片 国粤英日四语 10bit HEVC版本](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>96<br>小时</td><td align=center>136.81<br>GB</td><td align=right>102</td><td align=right>2</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_mv.png" alt="MV&amp;演唱会"></td>
<td><a href=details.php?id=371424&amp;hit=1><b>Taylor Swift - Reputation Stadium Tour 2018 2160p HDR Netflix WEBRip DD+ Atmos 5{@}1 x265-TrollUHD [泰勒·斯威夫特：“举世盛名”巡回演唱会 4K HDR 版本](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>29755<br>小时</td><td align=center>43.19<br>GB</td><td align=right>25</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_dlb.png" alt="华语剧包"></td>
<td><a href=details.php?id=554125&amp;hit=1><b>I Am A Super Star 2022 S01 1080p WEB-DL H{@}264 AAC-JKCT [超时空大玩家|全24集 |主演：主演:魏大勋/辛芷蕾/张艺上/张子贤/邱心志] *内封简繁英多国软字幕(<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>1126<br>小时</td><td align=center>13.77<br>GB</td><td align=right>7</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_rjb.png" alt="日剧包"></td>
<td><a href=details.php?id=417531&amp;hit=1><b>17{@}3 about a sex 2020 Complete 1080p WEB-DL AAC x264-NSBC [17{@}3 关于性 全9集] 「亚洲人的青春隐秘物语」 豆瓣 9{@}1(<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>14198<br>小时</td><td align=center>7.79<br>GB</td><td align=right>45</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_dlb.png" alt="华语剧包"></td>
<td><a href=details.php?id=390533&amp;hit=1><b><font color=#0000FF>JSTV Drawing Sword Complete 1080i HDTV MPEG2-ys333666 [江苏卫视 亮剑 真·全30集完整版 这个版本有楚云飞捧土！]</font></b></a></td><td align=center>23477<br>小时</td><td align=center>143.88<br>GB</td><td align=right>61</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_anime.png" alt="高清动漫"></td>
<td><a href=details.php?id=403402&amp;hit=1><b>Neon Genesis Evangelion/Shinseiki Evangelion 1995 BDrip 1080p TV 01-26Fin AVC 10bit AAC&amp;AC3 MKV-Fussoir [新世纪福音战士|TV 01-26话|转载自nyaa](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>18671<br>小时</td><td align=center>44.57<br>GB</td><td align=right>19</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_rjb.png" alt="日剧包"></td>
<td><a href=details.php?id=385437&amp;hit=1><b>The Naked Director S01 1080p NF WEB-DL DDP5{@}1 x264-Ao[全裸导演/全裸监督(港)/AV帝王(台) 第一季 全8集 2019 | 山田孝之 满岛真之介 玉山铁二 「DDP5{@}1@640kbps 国英日多语音轨·官配简繁英多语字幕」](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>25292<br>小时</td><td align=center>35.92<br>GB</td><td align=right>28</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_m720p.png" alt="电影720p"></td>
<td><a href=details.php?id=403471&amp;hit=1><b>Les Miserables 25th Anniversary Production 2010 720p BluRay DD5{@}1 x264-BMDru[悲惨世界：25周年纪念演唱会(世界音乐剧四大名剧之一)]</b></a></td><td align=center>18636<br>小时</td><td align=center>5.80<br>GB</td><td align=right>2</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_usb.png" alt="欧美剧包"></td>
<td><a href=details.php?id=487670&amp;hit=1><b>My Brilliant Friend S03 1080p WEB-DL AAC2 0 H 264-MeM GP[我的天才女友 第三季全8集](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>2810<br>小时</td><td align=center>18.23<br>GB</td><td align=right>36</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p"></td>
<td><a href=details.php?id=413706&amp;hit=1><b>Little Forest Summer Autumn 2014 BluRay 1080p x265 10bit MNHD-FRDS [【小森林-夏秋篇/小森食光-夏秋篇(台)】处平凡而不自弃 随性自然的小清新 10bit HEVC版本](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>15205<br>小时</td><td align=center>5.02<br>GB</td><td align=right>56</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_dlb.png" alt="华语剧包"></td>
<td><a href=details.php?id=392635&amp;hit=1><b>Soldiers Sortie 2006 2160p WEB-DL AAC H265 AAC-OurTV[豆瓣华语高分剧集系列 士兵突击 2160p 全30集 主演: 王宝强 / 陈思诚 / 段奕宏 / 张译 / 邢佳栋](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>22715<br>小时</td><td align=center>45.31<br>GB</td><td align=right>51</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p"></td>
<td><a href=details.php?id=484189&amp;hit=1><b>The Martian 2015 Extended BluRay 1080p x265 10bit 2Audio MNHD-FRDS[火星救援/火星人/火星任务(港)/绝地救援(台)](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>3553<br>小时</td><td align=center>6.52<br>GB</td><td align=right>54</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p"></td>
<td><a href=details.php?id=413424&amp;hit=1><b>Before Midnight 2013 CC Bluray 1080p x265 10bit MNHD-FRDS [【爱在午夜降临前/爱在午夜希腊时(台)/情约半生(港)】10bit HEVC 版本](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>15291<br>小时</td><td align=center>5.15<br>GB</td><td align=right>57</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_anime.png" alt="高清动漫"></td>
<td><a href=details.php?id=365233&amp;hit=1><b>Hachimitsu to Clover I+II TV 01-38 Fin+SP BDRip 1080p MKV @U2[蜂蜜与四叶草 全两季 2005 04&amp;2006 06 bangumi高分 ]</b></a></td><td align=center>32227<br>小时</td><td align=center>50.11<br>GB</td><td align=right>6</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_hjb.png" alt="韩剧包"></td>
<td><a href=details.php?id=484047&amp;hit=1><b>All of Us Are Dead S01 2022 Netflix WEB-DL 1080p HEVC DDP-AREY [僵尸校园 /2022韩剧  지금 우리 학교는 全12集 | 主演：尹灿荣 朴持厚 *韩语 多国语软字幕 HEVC*](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>3586<br>小时</td><td align=center>31.51<br>GB</td><td align=right>28</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_m2160p.png" alt="影视2160p"></td>
<td><a href=details.php?id=492512&amp;hit=1><b>Young Justice Bao 2000 S01 Complete 2160p WEB-DL H{@}265 AAC-LeagueWEB [少年包青天 第一部 全40集 | 类型:剧情/悬疑/古装 主演:周杰/释小龙/任泉 国语中字 | *4K*](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>2695<br>小时</td><td align=center>52.45<br>GB</td><td align=right>23</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_dlb.png" alt="华语剧包"></td>
<td><a href=details.php?id=560749&amp;hit=1><b>Jade Gods Of Honour Complete 2001 1080i HDTV H{@}264 DD5{@}1-HDHTV [封神榜*全40集*粤语*简繁中字](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>658<br>小时</td><td align=center>125.40<br>GB</td><td align=right>1</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_anime.png" alt="高清动漫"></td>
<td><a href=details.php?id=335763&amp;hit=1><b>Shouwa Genroku Rakugo Shinjuu Sukeroku Futatabi Hen BDRip 1080p TV 01-12 Fin+SP H264 FLAC [昭和元禄落语心中 助六再临篇/昭和元禄落語心中 助六再び篇* 自壓(付相關專輯)*]   </b></a></td><td align=center>42443<br>小时</td><td align=center>39.46<br>GB</td><td align=right>2</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_dlb.png" alt="华语剧包"></td>
<td><a href=details.php?id=417448&amp;hit=1><b>Shao Nian Bao Qing Tian S02 2001 WEB-DL 4k H265 AAC-HDSWEB[少年包青天2 全40集 主演: 陆毅 / 任泉 / 释小龙 / 范冰冰 / 李卉 / 佟大为 / 刘东浒 / 刘威](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>14219<br>小时</td><td align=center>66.83<br>GB</td><td align=right>7</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p"></td>
<td><a href=details.php?id=430208&amp;hit=1><b>Dying to Survive 2018 BluRay 1080p x265 10bit MNHD-FRDS [【Drug Dealer/Dying to Survive/中国药神/印度药商/印度药神/生命之路】10bit HEVC版    ](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>10919<br>小时</td><td align=center>5.35<br>GB</td><td align=right>63</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_rjb.png" alt="日剧包"></td>
<td><a href=details.php?id=502591&amp;hit=1><b>Shinhannin Flag 2021 KKTV WEB-DL 1080p x264 AAC-HDCTV [2021秋季日剧 真凶标签 全20话+1期特别篇话 | 主演：西岛秀俊 芳根京子 *内封中字*](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>2446<br>小时</td><td align=center>21.64<br>GB</td><td align=right>11</td><td align=right>1</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p"></td>
<td><a href=details.php?id=413194&amp;hit=1><b>Heidi 2015 BluRay 1080p x265 10bit MNHD-FRDS [【海蒂和爷爷/阿尔卑斯山少女海蒂/飘零燕(港)】同名经典儿童文学作品改编 豆瓣8 9分 10bit HEVC版本](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>15345<br>小时</td><td align=center>5.31<br>GB</td><td align=right>92</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_dlb.png" alt="华语剧包"></td>
<td><a href=details.php?id=477191&amp;hit=1><b>Breakout 2021 2160p WEB-DL H265 AAC-OurTV[突围/人民的名义2/人民的名义续集/人民的财产/天凉好个秋  全45集  主演:靳东/闫妮/黄志忠/陈晓](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>5361<br>小时</td><td align=center>64.57<br>GB</td><td align=right>21</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_anime.png" alt="高清动漫"></td>
<td><a href=details.php?id=366698&amp;hit=1><b>Fullmetal Panic! Invisible Victory BDRip 1920x1080 TV 01-12 Fin+SP H264 FLAC DTS-HDMAx3-jsum@U2 [全金属狂潮 / 惊爆危机 Invisible Victory](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>31704<br>小时</td><td align=center>46.96<br>GB</td><td align=right>7</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_do1080p.png" alt="纪录片1080i/p"></td>
<td><a href=details.php?id=557031&amp;hit=1><b>Rust Valley Restorers 2022 S04 1080p AMZN WEB-DL DDP5{@}1 H{@}264-NTb [老爷车大翻新  / 经典老车换新装(台) / 铁锈谷旧车改新 第4季 全10集](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>961<br>小时</td><td align=center>32.41<br>GB</td><td align=right>2</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_anime.png" alt="高清动漫"></td>
<td><a href=details.php?id=247587&amp;hit=1><b>Steins Gate 01-25Fin+SP 1080p BDRip-MKV SumiSora&amp;CASO</b></a></td><td align=center>74383<br>小时</td><td align=center>34.57<br>GB</td><td align=right>16</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_anime.png" alt="高清动漫"></td>
<td><a href=details.php?id=417442&amp;hit=1><b>Planetes 2003 v2 1080p Bluray x264 FLAC-yan04000985 [星空清理者/星空之旅/惑星奇航/PlanetES 幸村诚作品 硬科幻动画](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>14222<br>小时</td><td align=center>35.92<br>GB</td><td align=right>13</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_m2160p.png" alt="影视2160p"></td>
<td><a href=details.php?id=413702&amp;hit=1><b>The Fast And The Furious 2001-2019 UHD BluRay 2160p DTS-X MA 7{@}1 x265 10bit HDR-BeiTai[速度与激情9部合集 DTS:XMA7 1/原盘英简繁SUP字幕/章节](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>15206<br>小时</td><td align=center>162.12<br>GB</td><td align=right>39</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_dlb.png" alt="华语剧包"></td>
<td><a href=details.php?id=394030&amp;hit=1><b>Four Great Classical Novels REPACK 1986-2000 DVDRip x264 AC3-CMCT[四大名著 (央视版) 西游记/红楼梦/三国演义/水浒传 国语/简繁中字 *04版DVD原盘压制* *修正版*](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>22225<br>小时</td><td align=center>137.33<br>GB</td><td align=right>300</td><td align=right>4</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_hjb.png" alt="韩剧包"></td>
<td><a href=details.php?id=570498&amp;hit=1><b>You Raise Me Up Complete HDTV 720p H{@}264-OneHD [韩剧: wavve 让我振起 (全8集) 韩语 简体字幕 壹高清出品](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>224<br>小时</td><td align=center>11.35<br>GB</td><td align=right>5</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_usb.png" alt="欧美剧包"></td>
<td><a href=details.php?id=478539&amp;hit=1><b>Westworld S01-S03 1080p BluRay x264 DTS-WiKi[西部世界（第1-3季合集）/ 西方极乐园(台)/「第74届金球奖/艾美奖/剧情类最佳剧集提名」]  *内封中英双语字幕  *HBO烧脑经典</b></a></td><td align=center>4974<br>小时</td><td align=center>162.17<br>GB</td><td align=right>226</td><td align=right>5</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_do1080p.png" alt="纪录片1080i/p"></td>
<td><a href=details.php?id=382100&amp;hit=1><b>Smithsonian Air Warriors S01-06 1080P WEB-DL Collection[战机：空中勇士 前六季1080P合集 共24集 * 各种军用飞机：黑鹰、支奴干、阿帕奇、空中加油机、C-17全球霸王、巨型轰炸机等*](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>26199<br>小时</td><td align=center>45.80<br>GB</td><td align=right>16</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p"></td>
<td><a href=details.php?id=343896&amp;hit=1><b>New Dragon Inn 1992 1080p BluRay 1080p x265 10bit 2Audio MNHD-FRDS[新龙门客栈 MLIFE独家纪念修复版 原盘简英硬字幕 国粤双语 10bit HEVC版本](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>39044<br>小时</td><td align=center>14.11<br>GB</td><td align=right>73</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p"></td>
<td><a href=details.php?id=413388&amp;hit=1><b>Up 2009 BluRay 1080p x265 10bit 4Audio MNHD-FRDS [[飞屋环游记/天外奇迹(台)/冲天救兵(港)/冲天奇兵]Top 250#116 国台英粤四语 10bit HEVC版本](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>15298<br>小时</td><td align=center>5.17<br>GB</td><td align=right>240</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_ape.png" alt="无损音乐FLAC&amp;APE"></td>
<td><a href=details.php?id=442159&amp;hit=1><b>群星 - 有生之年非听不可的1001张唱片（第四辑：751-1001） 2014 - FLAC 分轨 [有生之年非听不可的1001张唱片（第四辑：751-1001） 2014 - FLAC 分轨](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>8638<br>小时</td><td align=center>94.87<br>GB</td><td align=right>65</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_hjb.png" alt="韩剧包"></td>
<td><a href=details.php?id=398504&amp;hit=1><b>Crash Landing on You S01 1080p NF WEB-DL DD+2{@}0 x264-ARiN [사랑의 불시착/爱的迫降/爱情的迫降/爱情迫降/爱的从北]内封中字(<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>20454<br>小时</td><td align=center>54.65<br>GB</td><td align=right>22</td><td align=right>0</td><td align=center>114.51<br>MB</td>
<td align=center>0.00<br>kB</td><td align=center>Inf.</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p"></td>
<td><a href=details.php?id=375274&amp;hit=1><b>Confessions 2010 BluRay 1080p x265 10bit MNHD-FRDS [告白/ 自白 / 母亲 sup简繁日 中岛哲也导演 一个母亲老师的复仇](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>28363<br>小时</td><td align=center>4.03<br>GB</td><td align=right>71</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_rjb.png" alt="日剧包"></td>
<td><a href=details.php?id=554960&amp;hit=1><b>Jiko Keisatsu 2019 Amazon WEB-DL 1080p H{@}264 DDP-HDCTV [2019秋季日剧 时效警察开始了 全8话+1期复活特别篇 | 主演：小田切让 麻生久美子| 转自HDChina](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>1101<br>小时</td><td align=center>37.62<br>GB</td><td align=right>8</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_m2160p.png" alt="影视2160p"></td>
<td><a href=details.php?id=404891&amp;hit=1><b>Marvel Cinematic Universe The Infinity Saga 23 Movies Collection 2008-2019 UHD BluRay 2160p x265 10bit HDR-PTH[漫威宇宙“无限传奇”阶段23部4K合集 英语/国语/简英特效/国配字幕](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>18056<br>小时</td><td align=center>552.50<br>GB</td><td align=right>137</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_anime.png" alt="高清动漫"></td>
<td><a href=details.php?id=328657&amp;hit=1><b>AIR TV01-12+SP Fin 2005 1080P BDRip 3Audio FLAC x264-mawen1250 [青空]</b></a></td><td align=center>45277<br>小时</td><td align=center>22.25<br>GB</td><td align=right>12</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p"></td>
<td><a href=details.php?id=387300&amp;hit=1><b>A Brighter Summer Day 1991 BluRay 1080p x265 10bit MNHD-FRDS [牯岭街少年杀人事件] 经典老片 杨德昌作品 4K修复 10bit HEVC版本 小体积收藏(<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>24690<br>小时</td><td align=center>7.82<br>GB</td><td align=right>89</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_dlb.png" alt="华语剧包"></td>
<td><a href=details.php?id=406039&amp;hit=1><b>The Bad Kids 2020 WEB-DL 4K H265 AAC-Enichi [隐秘的角落 全12集](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>17612<br>小时</td><td align=center>15.70<br>GB</td><td align=right>132</td><td align=right>2</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_anime.png" alt="高清动漫"></td>
<td><a href=details.php?id=396061&amp;hit=1><b>Samurai Champloo TV 01-26+SP Fin 1080p BDrip x264 FLAC-philosophy-raws[混沌武士 渡边信一郎又一公路片力作 转自U2]</b></a></td><td align=center>21368<br>小时</td><td align=center>45.48<br>GB</td><td align=right>21</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p"></td>
<td><a href=details.php?id=412551&amp;hit=1><b>How to Train Your Dragon 2010 BluRay 1080p x265 10bit 4Audio MNHD-FRDS [驯龙高手/驯龙记/驯龙 Top 250 #178 国台英粤四语 10bit HEVC版本](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>15531<br>小时</td><td align=center>5.71<br>GB</td><td align=right>226</td><td align=right>1</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_m2160p.png" alt="影视2160p"></td>
<td><a href=details.php?id=548014&amp;hit=1><b>Zhao Jiadi S01 2022 60fps 2160p WEB-DL AAC H{@}265-HDSWEB [我叫赵甲第 全30集 60帧]</b></a></td><td align=center>1392<br>小时</td><td align=center>33.09<br>GB</td><td align=right>12</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_anime.png" alt="高清动漫"></td>
<td><a href=details.php?id=436635&amp;hit=1><b>Mahouka Koukou no Rettousei Raihousha Hen 2020 BDRip 1080p TV 01-13 Fin+SP x264 FLAC-jsum@U2 [转自U2 魔法科高中的劣等生 来访者篇](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>10100<br>小时</td><td align=center>42.29<br>GB</td><td align=right>11</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_anime.png" alt="高清动漫"></td>
<td><a href=details.php?id=396040&amp;hit=1><b>Fate/Zero TV 01-25+Remix+SP Fin 1080p BDrip x264 Hi10P FLAC MKV-mawen1250[命运之夜前传 第一期]</b></a></td><td align=center>21374<br>小时</td><td align=center>64.13<br>GB</td><td align=right>17</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p"></td>
<td><a href=details.php?id=412443&amp;hit=1><b>The Pianist 2002 BluRay 1080p x265 10bit 2Audio MNHD-FRDS [【钢琴家/战地琴人/钢琴战曲/钢琴恋曲】 Top 250 #41 国英双语 10bit HEVC版本](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>15561<br>小时</td><td align=center>7.57<br>GB</td><td align=right>254</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_rjb.png" alt="日剧包"></td>
<td><a href=details.php?id=517359&amp;hit=1><b>Tsuma Shougakusei ni Naru 2022 KKTV WEB-DL 1080p x264 AAC-HDCTV[2022冬季日剧 妻子变成小学生 全10话 | 主演：石田百合子 堤真一 *内封中字*](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>2209<br>小时</td><td align=center>10.60<br>GB</td><td align=right>18</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_rjb.png" alt="日剧包"></td>
<td><a href=details.php?id=441561&amp;hit=1><b>The Naked Director S02 2021 Netflix WEB-DL 1080p x264 DDP-AREY [2021日剧 全裸导演 第二季 /  全裸監督 シーズン2 全8集 | 主演：山田孝之 满岛真之介 *国日双语 多国语软字幕*](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>8836<br>小时</td><td align=center>15.08<br>GB</td><td align=right>73</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p"></td>
<td><a href=details.php?id=412447&amp;hit=1><b>Memento 2000 BluRay 1080p x265 10bit 2Audio MnHD-FRDS [记忆碎片/纪念品/记忆拼图/凶心人/失忆 Top 250 #49 克里斯托弗诺兰作品 国英双语 10bit HEVC版本](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>15561<br>小时</td><td align=center>5.89<br>GB</td><td align=right>277</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p"></td>
<td><a href=details.php?id=344097&amp;hit=1><b>Once A Thief 1991 BluRay 1080p x265 10bit 2Audios MNHD-FRDS[纵横四海 国粤双语 周润发 张国荣 钟楚红 10bit HEVC版本](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>38963<br>小时</td><td align=center>4.96<br>GB</td><td align=right>74</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_m_uhd.png" alt="UHD原盘"></td>
<td><a href=details.php?id=550594&amp;hit=1><b>Uncharted 2022 2160p UHD Blu-ray HEVC TrueHD 7{@}1-MAXAGAZ [神秘海域/Uncharted: Drake‘s Fortune/神秘海域：德雷克船长的宝藏/秘境探险(港/台) | 类别：动作  冒险 原生中字](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>1245<br>小时</td><td align=center>59.52<br>GB</td><td align=right>50</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_do720p.png" alt="纪录片720p"></td>
<td><a href=details.php?id=25176&amp;hit=1><b><font color=#0000FF>National Geographic 720p HDTV x264[国家地理 合集 500GB有字幕A]</font></b></a></td><td align=center>101010<br>小时</td><td align=center>232.25<br>GB</td><td align=right>273</td><td align=right>1</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_m2160p.png" alt="影视2160p"></td>
<td><a href=details.php?id=557040&amp;hit=1><b>A Year Without a Job 2022 S01 Complete 2160p WEB-DL H{@}265 AAC-LeagueWEB [没有工作的一年/国语中字/4K](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>960<br>小时</td><td align=center>114.09<br>GB</td><td align=right>2</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_mv.png" alt="MV&amp;演唱会"></td>
<td><a href=details.php?id=543512&amp;hit=1><b>Sammi Touch Mi 2 Live 2016 UHD Blu-ray Remux 2160p HEVC TrueHD 5{@}1-Hares  [郑秀文Touch Mi 2巡回演唱会 ](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>1544<br>小时</td><td align=center>58.16<br>GB</td><td align=right>11</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_rjb.png" alt="日剧包"></td>
<td><a href=details.php?id=522471&amp;hit=1><b>Mystery to Lunakare 2022 Friday WEB-DL 1080p H 264 AAC-HDCTV [2022冬季日剧 勿言推理 全12话 | 主演：菅田将晖 伊藤沙莉 *内封中字*](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>2134<br>小时</td><td align=center>15.79<br>GB</td><td align=right>19</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_do720p.png" alt="纪录片720p"></td>
<td><a href=details.php?id=509678&amp;hit=1><b>The Gate of Heavenly Peace 1995 480p DVD [天安门 (纪录片) 请勿发表任何带有倾向性的评论](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>2324<br>小时</td><td align=center>2.34<br>GB</td><td align=right>25</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_rjb.png" alt="日剧包"></td>
<td><a href=details.php?id=533947&amp;hit=1><b>Seinaru Kaibutsutachi 2012 Amazon WEB-DL 1080p H{@}264 DDP-HDCTV [2012冬季日剧 圣的怪物们 全8话 | 主演：冈田将生 中谷美纪](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>1826<br>小时</td><td align=center>26.81<br>GB</td><td align=right>3</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p"></td>
<td><a href=details.php?id=412618&amp;hit=1><b>Jagten AKA The Hunt 2012 BluRay 1080p x265 10bit 2Audio MNHD-FRDS [【狩猎/谎言的烙印(台)/诬网(港)】 央视国配 repack 10bit HEVC版本](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>15514<br>小时</td><td align=center>5.70<br>GB</td><td align=right>91</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_usb.png" alt="欧美剧包"></td>
<td><a href=details.php?id=534518&amp;hit=1><b>Why Didn‘t They Ask Evans S01 1080p AMZN WEB-DL DDP 5{@}1 H{@}264-CBON [悬崖上的谋杀 第一季 全3集 | 改编自阿加莎·克里斯蒂同名小说 | 导演: 休·劳瑞 | 主演: 威尔·保尔特 露西·宝通](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>1809<br>小时</td><td align=center>12.49<br>GB</td><td align=right>17</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_anime.png" alt="高清动漫"></td>
<td><a href=details.php?id=326963&amp;hit=1><b>Fullmetal Alchemist TV 01-51+SP Fin BDrip 1440x1080 HEVC Ma10P FLAC MKV philosophy-raws[钢之炼金术师 03版 日版bd制作 日英双语/英文字幕 v2 转自U2]</b></a></td><td align=center>45998<br>小时</td><td align=center>49.04<br>GB</td><td align=right>43</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_dlb.png" alt="华语剧包"></td>
<td><a href=details.php?id=473810&amp;hit=1><b>Return Of The Condor Heroes 1995 TVB WEB-DL 1080p H 264 AAC 2Audio-HDCTV [港剧 神雕侠侣 全32集 | 主演：古天乐 李若彤 *内封中字* *国粤双语*](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>6275<br>小时</td><td align=center>39.96<br>GB</td><td align=right>41</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_anime.png" alt="高清动漫"></td>
<td><a href=details.php?id=328786&amp;hit=1><b>Kokoro Connect TV 1-17+SP Fin 2012 1080P BDRip Hi10p FLAC MKV-A I R nesSub&amp;mawen1250[恋爱随意链接/心灵链环/ココロコネクト 一季完结 简繁外挂]</b></a></td><td align=center>45233<br>小时</td><td align=center>21.60<br>GB</td><td align=right>9</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p"></td>
<td><a href=details.php?id=413633&amp;hit=1><b>Departures 2008 BluRay 1080p x265 10bit 2Audio MNHD-FRDS [入殓师/礼仪师之奏鸣曲(港)/送行者-礼仪师的乐章(台)/礼仪师(台) 国日双语 10bit HEVC版本](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>15228<br>小时</td><td align=center>5.06<br>GB</td><td align=right>81</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_anime.png" alt="高清动漫"></td>
<td><a href=details.php?id=490819&amp;hit=1><b>Kaleido Star TV 01-51 Fin + OVA 01-03 + SP 1080p BDrip H 264 FLAC-jsum@U2 [百变之星 全51集+OVA*3](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>2742<br>小时</td><td align=center>65.44<br>GB</td><td align=right>1</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p"></td>
<td><a href=details.php?id=408379&amp;hit=1><b>The Bucket List 2007 Bluray 1080p x265 10bit 3Audio MNHD-FRDS[【遗愿清单/The Bucket List/玩转身前事(港)】10bit HEVC版本](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>16874<br>小时</td><td align=center>7.66<br>GB</td><td align=right>75</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_do1080p.png" alt="纪录片1080i/p"></td>
<td><a href=details.php?id=409759&amp;hit=1><b>Learn To Speculate in Stocks From Scratch 2020 WEB-DL 1080p H264 AAC-PTHweb[从零开始学炒股](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>16453<br>小时</td><td align=center>11.95<br>GB</td><td align=right>23</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_hjb.png" alt="韩剧包"></td>
<td><a href=details.php?id=367106&amp;hit=1><b>Welcome To Waikiki S01 Complete 1080p NF WEB-DL DDP2{@}0 x264-Ao[韩剧: 加油吧威基基 全20集 主演:金正贤 李伊庚 孙承源] 内封中文字幕 豆瓣8{@}6分(<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>31545<br>小时</td><td align=center>27.80<br>GB</td><td align=right>21</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p"></td>
<td><a href=details.php?id=411141&amp;hit=1><b>Your Name 2016 BluRay 1080p x265 10bit MNHD-FRDS [[你的名字/君之名]Top 250 #91 新海诚编导 第40届日本电影学院奖3大奖2提名 10bit HEVC版本](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>15969<br>小时</td><td align=center>4.56<br>GB</td><td align=right>230</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_rjb.png" alt="日剧包"></td>
<td><a href=details.php?id=359217&amp;hit=1><b>Unnatural 2018 BluRay 1080p x264 DD2{@}0-HDChina[非自然死亡/不自然死因研究所(港)/法医女王(台)  豆瓣9 3高分悬疑日剧   简繁日字 ]</b></a></td><td align=center>34117<br>小时</td><td align=center>47.97<br>GB</td><td align=right>77</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_usb.png" alt="欧美剧包"></td>
<td><a href=details.php?id=441708&amp;hit=1><b>Ekaterina 2014~2019 S01~S03 HDTV&amp;WEB-DL 1080p H264 AAC-MIXED PACK[豆瓣9 1 高分俄罗斯剧 叶卡捷琳娜大帝/宫锁德妹 全三季 全中文字幕]</b></a></td><td align=center>8786<br>小时</td><td align=center>160.69<br>GB</td><td align=right>33</td><td align=right>6</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_us.png" alt="欧美剧1080i/p"></td>
<td><a href=details.php?id=408725&amp;hit=1><b>A Perfect World 1993 1080p Blu-ray x265 AC3￡cXcY@FRDS[【完美的世界/强盗保镳】克林特·伊斯特伍德/凯文·科斯特纳 作品 国语/英语 中英字幕/R3官方简中字幕 HEVC版本](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>16783<br>小时</td><td align=center>6.12<br>GB</td><td align=right>75</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_anime.png" alt="高清动漫"></td>
<td><a href=details.php?id=355714&amp;hit=1><b>Gintama Season3 2015 BDRip 1080P TV 01-51(266-316)Fin+SP H264 FLAC MKV-jsum@U2 [银魂°(银魂第3期)]</b></a></td><td align=center>35135<br>小时</td><td align=center>80.23<br>GB</td><td align=right>30</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_anime.png" alt="高清动漫"></td>
<td><a href=details.php?id=389702&amp;hit=1><b>Steins;Gate 0 BDRip 1920x1080 TV 01-24 Fin+SP H264 FLAC-jsum@U2 [命运石之门0](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>23819<br>小时</td><td align=center>49.98<br>GB</td><td align=right>10</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_dlb.png" alt="华语剧包"></td>
<td><a href=details.php?id=424955&amp;hit=1><b>The Bronze Teeth 2001-2009 PAL DVD5[铁齿铜牙纪晓岚 全165集 主演:张国立 / 王刚 / 张铁林 / 袁立 / 张庭 / 张春年 国语中文字幕]</b></a></td><td align=center>12466<br>小时</td><td align=center>258.82<br>GB</td><td align=right>5</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_dlb.png" alt="华语剧包"></td>
<td><a href=details.php?id=416383&amp;hit=1><b>War and Beauty 2004 Complete WEB-DL 4K H265 AAC 2Audio-PTerWEB [金枝欲孽 全30集 | 主演: 邓萃雯 黎姿 张可颐 佘诗曼 国粤双语 内嵌简体中字</b></a></td><td align=center>14523<br>小时</td><td align=center>51.88<br>GB</td><td align=right>7</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p"></td>
<td><a href=details.php?id=347148&amp;hit=1><b>Ashes of Time Redux 2008 BluRay 1080p x265 10bit 2Audio MNHD-FRDS[东邪西毒终极版](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>37830<br>小时</td><td align=center>7.60<br>GB</td><td align=right>89</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_anime.png" alt="高清动漫"></td>
<td><a href=details.php?id=417203&amp;hit=1><b>Chihayafuru 3 TV 01-24 Fin + SP 1080p BDrip H 264 FLAC-jsum@U2 [花牌情缘 第三季](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>14275<br>小时</td><td align=center>51.17<br>GB</td><td align=right>2</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_dlb.png" alt="华语剧包"></td>
<td><a href=details.php?id=419298&amp;hit=1><b>Palace of Desire 2000 WEB-DL 4k H265 AAC-HDSWEB[大明宫词 全37集 主演: 陈红 / 归亚蕾 / 周迅 / 赵文瑄 / 傅彪 / 申军谊 / 贾妮 / 刘栋]</b></a></td><td align=center>13640<br>小时</td><td align=center>33.85<br>GB</td><td align=right>11</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p"></td>
<td><a href=details.php?id=412533&amp;hit=1><b>Children of Heaven 1997 BluRay 1080p x265 10bit 2Audio MNHD-FRDS [【小鞋子/天堂的孩子】 Top 250 #124 国波双语 10bit HEVC版本](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>15538<br>小时</td><td align=center>5.90<br>GB</td><td align=right>222</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_hjb.png" alt="韩剧包"></td>
<td><a href=details.php?id=484586&amp;hit=1><b>Now, We Are Breaking Up Complete HDTV 720p H{@}264 KR-OneHD [韩剧: SBS 现正分手中 (全16集) 韩语 简体字幕 壹高清出品](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>3454<br>小时</td><td align=center>34.67<br>GB</td><td align=right>2</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_anime.png" alt="高清动漫"></td>
<td><a href=details.php?id=355384&amp;hit=1><b>Gintama Season2 2011 BDrip 1080P TV 01-64(201-265)Fin+SP H264 FLAC MKV-jsum@U2 [银魂´ 银魂第2期]</b></a></td><td align=center>35249<br>小时</td><td align=center>103.96<br>GB</td><td align=right>30</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_hjb.png" alt="韩剧包"></td>
<td><a href=details.php?id=414235&amp;hit=1><b>Vagabond S01 2019 Netflix WEB-DL 4k HEVC DDP-AREY[2019韩剧 浪客行 / 배가본드 全16集 | 主演：李昇基 裴秀智 *国韩双语 多国语软字幕 4K+HEVC*](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>15071<br>小时</td><td align=center>112.19<br>GB</td><td align=right>14</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p"></td>
<td><a href=details.php?id=413315&amp;hit=1><b>Pulp Fiction 1994 BluRay 1080p x265 10bit MNHD-FRDS [低俗小说 / 导演：昆汀塔伦蒂诺 / 10bit HEVC版本](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>15315<br>小时</td><td align=center>5.21<br>GB</td><td align=right>289</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_sports.png" alt="高清体育节目"></td>
<td><a href=details.php?id=391783&amp;hit=1><b>Exquisite Lifestyle S04 2160p UHDTV HEVC 10bit MPEG-iLoveTV[2019 | 健身教学片 | 极致瑜伽 | 第四季 共10集 | 瑜伽教练：盼盼老师 | 4K无台标版本 超高码率21 6M]</b></a></td><td align=center>23014<br>小时</td><td align=center>87.08<br>GB</td><td align=right>10</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_dlb.png" alt="华语剧包"></td>
<td><a href=details.php?id=356756&amp;hit=1><b>State of Divinity 1996 Complete 1080p WEB-DL H264 AAC 2Audios-OurTV  [TVB剧集：笑傲江湖 全43集 | 主演: 吕颂贤 梁艺龄 何宝生 陈少霞 何美钿 国粤双语/内嵌中字 转自OurBits，表示感谢](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>34822<br>小时</td><td align=center>30.97<br>GB</td><td align=right>41</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_hjb.png" alt="韩剧包"></td>
<td><a href=details.php?id=480519&amp;hit=1><b>The Silent Sea S01 2021 1080p NF WEB-DL DDP5{@}1 Atmos x264-PuTao [寂静之海 全8集 | 主演：裴斗娜 孔刘 *韩语 内封中字*](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>4444<br>小时</td><td align=center>17.02<br>GB</td><td align=right>63</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_mv.png" alt="MV&amp;演唱会"></td>
<td><a href=details.php?id=472362&amp;hit=1><b>Koji Tamaki Chocolate cosmos 2021 1080p Blu-ray AVC LPCM 2{@}0- MTeam[玉置浩二 Chocolate cosmos ~恋の思い出、切ない恋心 2021 演唱会](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>6692<br>小时</td><td align=center>17.74<br>GB</td><td align=right>12</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_anime.png" alt="高清动漫"></td>
<td><a href=details.php?id=428117&amp;hit=1><b>Kanon 2002+2006 BDRip 1080p Hi10P FLAC V2-VCB-Studio&amp;philosophy-raws[華音/雪之少女 东映版+京都版 日英双语 海量特典 V2](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>11384<br>小时</td><td align=center>32.90<br>GB</td><td align=right>8</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p"></td>
<td><a href=details.php?id=435308&amp;hit=1><b>The Terminal 2004 BluRay 1080p x265 10bit 2Audio MNHD-FRDS [【幸福终点站/航站奇缘】 斯皮尔伯格作品 国英双语 10bit HEVC版本](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>10521<br>小时</td><td align=center>12.49<br>GB</td><td align=right>80</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_hjb.png" alt="韩剧包"></td>
<td><a href=details.php?id=417112&amp;hit=1><b>Reply 1988 UHDTV 60fps DD2{@}0 x265 10bit-Yumi[请回答1988/回应吧1988(韩剧全20集 简体中文 UHDTV 10bit HEVC版本)](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>14301<br>小时</td><td align=center>84.64<br>GB</td><td align=right>111</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p"></td>
<td><a href=details.php?id=320492&amp;hit=1><b>The Lives of Others 2006 BluRay 1080p x265 10bit 2Audio MNHD-FRDS[窃听风暴 Top 250 #55 国德双语 10bit HEVC版本 教育网做种](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>48764<br>小时</td><td align=center>7.63<br>GB</td><td align=right>265</td><td align=right>1</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_rjb.png" alt="日剧包"></td>
<td><a href=details.php?id=398048&amp;hit=1><b>Nagi no Oitoma 2019 2160p WEB-DL H265 AAC-OurTV[日剧 | 风平浪静的闲暇 / 风的新生活 / 凪的新生活 / 凪のお暇 全10集 2019 | 主演: 黑木华 高桥一生 中村伦也 日语简中](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>20603<br>小时</td><td align=center>11.70<br>GB</td><td align=right>10</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_ape.png" alt="无损音乐FLAC&amp;APE"></td>
<td><a href=details.php?id=328969&amp;hit=1><b>豆瓣音乐top250 (2017 4) 合集 Flac分轨(<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>45164<br>小时</td><td align=center>72.44<br>GB</td><td align=right>92</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_dlb.png" alt="华语剧包"></td>
<td><a href=details.php?id=473845&amp;hit=1><b>Eightfold Path of the Heavenly Dragon 1997 TVB WEB-DL 1080p H264 AAC 2Audio-HDCTV [天龙八部 全45集 | 主演: 黄日华 / 陈浩民 / 樊少皇 / 李若彤 *内封中字* *国粤双语*(<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>6268<br>小时</td><td align=center>54.61<br>GB</td><td align=right>55</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p"></td>
<td><a href=details.php?id=404743&amp;hit=1><b>Gattaca 1997 BluRay 1080p x265 10bit 3Audio MNHD-FRDS[千钧一发 - 安德鲁·尼科尔 伊桑·霍克/乌玛·瑟曼/裘德·洛 *PGS(chs&amp;eng/   )*]</b></a></td><td align=center>18132<br>小时</td><td align=center>4.94<br>GB</td><td align=right>51</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_dl.png" alt="大陆港台剧720p"></td>
<td><a href=details.php?id=261922&amp;hit=1><b>Empresses in the Palace E01-76 2011 BluRay 720p x264 AC3-CMCT[后宫·甄嬛传/甄嬛传 国语/简繁中字] *115网盘分流*</b></a></td><td align=center>70251<br>小时</td><td align=center>76.72<br>GB</td><td align=right>33</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_m2160p.png" alt="影视2160p"></td>
<td><a href=details.php?id=492425&amp;hit=1><b>Young Justice Bao 2006 S03 Complete 2160p WEB-DL H{@}265 AAC-LeagueWEB [少年包青天Ⅲ之天芒传奇/少年包青天3/ 全45集 | 类型:剧情/爱情/悬疑 主演:邓超/释小龙/赵阳 国语中字 | *4K*](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>2698<br>小时</td><td align=center>36.66<br>GB</td><td align=right>11</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p"></td>
<td><a href=details.php?id=533817&amp;hit=1><b>The Limehouse Golem 2016 BluRay 1080p DD5{@}1 x264-BMDru[莱姆豪斯的杀人魔/英伦迷案/英伦谜杀(台)|豆瓣评分最高的恐怖片(提名)|原盘压制|简繁字幕](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>1834<br>小时</td><td align=center>11.17<br>GB</td><td align=right>8</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_dlb.png" alt="华语剧包"></td>
<td><a href=details.php?id=569454&amp;hit=1><b>Cross Mountains and Seas 2021 SUBBED 2160p WEB-DL H265 AAC-FLTTH [经山历海 / 经山海 | 2021 | 全31集 | 剧情 | 主演: 王丽坤 / 张国强 / 邹廷威 / 侯岩松 / 秦焰  4K](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>344<br>小时</td><td align=center>38.65<br>GB</td><td align=right>3</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_anime.png" alt="高清动漫"></td>
<td><a href=details.php?id=354989&amp;hit=1><b>Gintama Season1 2006 BDRip 1080P TV001-201Fin+SP H264 FLAC MKV-jsum@U2 [银魂 第一季]</b></a></td><td align=center>35392<br>小时</td><td align=center>259.18<br>GB</td><td align=right>35</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_do1080p.png" alt="纪录片1080i/p"></td>
<td><a href=details.php?id=412079&amp;hit=1><b>The Social Dilemma 2020 1080p NF WEB-DL DDP5{@}1 H{@}264-pawel2006 [监视资本主义：智能陷阱 / 社交困境] 「大型科技公司如Google, Facebook, Twitter如何影响社交媒体？」</b></a></td><td align=center>15675<br>小时</td><td align=center>3.76<br>GB</td><td align=right>34</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_anime.png" alt="高清动漫"></td>
<td><a href=details.php?id=359990&amp;hit=1><b>Death Note 2006 Blu-Ray 1080p x264 FLAC-jsum@U2[死亡笔记 全37集](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>33897<br>小时</td><td align=center>49.37<br>GB</td><td align=right>32</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_dlb.png" alt="华语剧包"></td>
<td><a href=details.php?id=345301&amp;hit=1><b>New Legend Of Chu Liu Xiang 2012 Complete WEB-DL 4K H264 AAC-FLTTH@OurTV [楚留香新传 全38集 | 主演: 张智尧 樊少皇 刘德凯 | 4K版](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>38486<br>小时</td><td align=center>98.81<br>GB</td><td align=right>3</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_anime.png" alt="高清动漫"></td>
<td><a href=details.php?id=425037&amp;hit=1><b>Concrete Revolutio Choujin Gensou 2015 BDRip 1080p x264 FLAC-jsum@U2 [混凝土革命 超人幻想 | 24集全 【繁中外挂】](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>12444<br>小时</td><td align=center>73.40<br>GB</td><td align=right>1</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_do720p.png" alt="纪录片720p"></td>
<td><a href=details.php?id=317457&amp;hit=1><b>General History of China Complete 2013 HDTV 720p x264 AC3-CMCT [CCTV6 中国通史 全100集 「国语/内嵌简体中字」]</b></a></td><td align=center>50105<br>小时</td><td align=center>119.78<br>GB</td><td align=right>368</td><td align=right>1</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p"></td>
<td><a href=details.php?id=341880&amp;hit=1><b>The Curious Case of Benjamin Button 2008 BluRay 1080p x265 10bit 3Audio MNHD-FRDS[本杰明巴顿奇事](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>39879<br>小时</td><td align=center>7.75<br>GB</td><td align=right>75</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p"></td>
<td><a href=details.php?id=335369&amp;hit=1><b>Dangal 2017 BluRay 1080p x265 10bit MNHD-FRDS [摔跤吧!爸爸/我和我的冠军女儿(台)/摔跤吧!老爸/摔跤家族 Top 250 #77 阿米尔汗作品 10bit HEVC版本 R3中字]</b></a></td><td align=center>42616<br>小时</td><td align=center>8.00<br>GB</td><td align=right>247</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p"></td>
<td><a href=details.php?id=526134&amp;hit=1><b>Death on the Nile 2022 BluRay 1080p DTS-HD MA 7{@}1 x265 10bit-BeiTai[尼罗河上的惨案 英语DTS-HD MA 7{@}1/英简繁双语SUP字幕/章节](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>2066<br>小时</td><td align=center>12.17<br>GB</td><td align=right>11</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p"></td>
<td><a href=details.php?id=437888&amp;hit=1><b>Hachi-ko 1987 BluRay 1080p x265 10bit 3Audio MNHD-FRDS[【忠犬八公物语/八千公物语/阿八的故事/八公犬的故事】 国粤日三语 10bit HEVC版本  ](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>9770<br>小时</td><td align=center>5.17<br>GB</td><td align=right>50</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_dlb.png" alt="华语剧包"></td>
<td><a href=details.php?id=255668&amp;hit=1><b>Da Ming Wang Chao E01-46 2007 JPN DVDRip x264-10bit AC3-CMCT[大明王朝 1566 ：嘉靖与海瑞/嘉靖与海瑞  导演：张黎 主演：陈宝国 黄志忠 倪大红 王庆祥 日版 国语/简繁中字]</b></a></td><td align=center>72042<br>小时</td><td align=center>18.32<br>GB</td><td align=right>183</td><td align=right>1</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_anime.png" alt="高清动漫"></td>
<td><a href=details.php?id=444366&amp;hit=1><b>Serial Experiments Lain 1998 EP01-EP13 Fin 1080P BDRip x264-Kagura[玲音|监督：中村隆太郎 日语 90年代三大黑暗系动画之一 (玲音,此时此刻的我,非常偶像key)]</b></a></td><td align=center>7740<br>小时</td><td align=center>23.37<br>GB</td><td align=right>9</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_dlb.png" alt="华语剧包"></td>
<td><a href=details.php?id=474009&amp;hit=1><b>The Making of an Ordinary Woman S02 2021 WEB-DL 4k H{@}265 AAC-HDCTV [台剧 俗女养成记2 全10集 | 主演：谢盈萱 吴以涵 *内封中字*](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>6228<br>小时</td><td align=center>13.37<br>GB</td><td align=right>58</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_rjb.png" alt="日剧包"></td>
<td><a href=details.php?id=388295&amp;hit=1><b>Midnight Diner S01 2009 1080p BluRay x264-WiKi[深夜食堂 第一部 小林薰 不破万作 綾田俊樹 「细尝人生百味 尽在方寸之间」内封中文字幕]</b></a></td><td align=center>24292<br>小时</td><td align=center>34.00<br>GB</td><td align=right>100</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p"></td>
<td><a href=details.php?id=362252&amp;hit=1><b>Gone Girl 2014 BluRay 1080p x265 10bit MNHD-FRDS[【消失的爱人/失踪罪(港)/控制(台)】Top 250 大卫芬奇导演 特效简英 10bit HEVC版]</b></a></td><td align=center>33176<br>小时</td><td align=center>6.87<br>GB</td><td align=right>110</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_hjb.png" alt="韩剧包"></td>
<td><a href=details.php?id=409670&amp;hit=1><b>It‘s Okay to Not Be Okay S01 2020 Netflix WEB-DL 1080p x264 DDP-AREY[2020韩剧 虽然是精神病但没关系 / 사이코지만 괜찮아 全16集 | 主演：金秀贤 徐睿知 *韩语 多国语软字幕 完结撒花*](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>16485<br>小时</td><td align=center>50.46<br>GB</td><td align=right>30</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_hjb.png" alt="韩剧包"></td>
<td><a href=details.php?id=483687&amp;hit=1><b>Our Beloved Summer S01 1080p NF WEB-DL AAC2{@}0 x264-DoA [那年，我们的夏天 / 那年我们 / 그 해 우리는]</b></a></td><td align=center>3671<br>小时</td><td align=center>34.02<br>GB</td><td align=right>42</td><td align=right>1</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_dlb.png" alt="华语剧包"></td>
<td><a href=details.php?id=234211&amp;hit=1><b>For the sake of the Republic of China E01-68 2003 DVDRip x264 AC3-CMCT[]走向共和/满清末代王朝 68集全 (海外未删减版) 【国语内嵌繁体中字】(<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>78923<br>小时</td><td align=center>29.88<br>GB</td><td align=right>159</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_mv.png" alt="MV&amp;演唱会"></td>
<td><a href=details.php?id=480816&amp;hit=1><b>Jacky Cheung A Classic Tour Live in Taipei 2016 1080i Blu-ray AVC DTS-HD MA 5{@}1 - MTeam[《學友．經典 世界巡迴演唱會》台北站 再見篇 (精裝藍光版)【和香港站部份歌曲不同】](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>4363<br>小时</td><td align=center>53.74<br>GB</td><td align=right>42</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p"></td>
<td><a href=details.php?id=378603&amp;hit=1><b>In the Mood for Love 2000 CC BluRay 1080p x265 10bit 2Audio MNHD-FRDS[花样年华   10bit HEVC CC版本 王家卫编导作品  梁朝伟 张曼玉](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>27289<br>小时</td><td align=center>7.13<br>GB</td><td align=right>97</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_anime.png" alt="高清动漫"></td>
<td><a href=details.php?id=395977&amp;hit=1><b>Gintama 2017 S04 1080P BDRIP H264 FLAC-jsum@U2 [银魂第四季]</b></a></td><td align=center>21414<br>小时</td><td align=center>100.89<br>GB</td><td align=right>27</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_dlb.png" alt="华语剧包"></td>
<td><a href=details.php?id=418100&amp;hit=1><b>Against the Blade of Honour 1997 WEB-DL 4k H265 AAC 2Audio-HDSWEB[港剧 圆月弯刀 全20集 国粤双语 主演: 古天乐 / 梁小冰 / 温碧霞 / 张兆辉 / 张翼 / 王伟 / 李颖](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>14037<br>小时</td><td align=center>29.11<br>GB</td><td align=right>4</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_usb.png" alt="欧美剧包"></td>
<td><a href=details.php?id=477546&amp;hit=1><b>Arcane S01 1080p NF WEB-DL DDP5 1 HEVC-TEPES[英雄联盟：双城之战/奥术/英雄联盟动画剧集 全9集 | 内封中字](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>5260<br>小时</td><td align=center>15.14<br>GB</td><td align=right>109</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_anime.png" alt="高清动漫"></td>
<td><a href=details.php?id=307477&amp;hit=1><b>Hunter X Hunter BluRay 1080p x264 FLAC - mawen1250 [全职猎人 10bit BDRip](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>55428<br>小时</td><td align=center>155.46<br>GB</td><td align=right>30</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p"></td>
<td><a href=details.php?id=443001&amp;hit=1><b>Days of Being Wild 1990 BluRay 1080p x265 10bit 2Audio MNHD-FRDS[阿飞正传</b></a></td><td align=center>8330<br>小时</td><td align=center>3.54<br>GB</td><td align=right>71</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_rjb.png" alt="日剧包"></td>
<td><a href=details.php?id=387765&amp;hit=1><b>Anata no Ban Desu S01 1080p KKTV WEB-DL AAC2 0 H264-Ao [日剧 | 轮到你了 全20集+特别篇1话 2019 | 主演: 原田知世 田中圭 西野七濑 内封繁体] (<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>24512<br>小时</td><td align=center>22.52<br>GB</td><td align=right>50</td><td align=right>1</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_anime.png" alt="高清动漫"></td>
<td><a href=details.php?id=500225&amp;hit=1><b>Haikyuu!! 2014 Blu-ray 1080p x264 FLAC-jsum@U2[排球少年!! TV 01-25 Fin+SP](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>2504<br>小时</td><td align=center>47.31<br>GB</td><td align=right>2</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_do1080p.png" alt="纪录片1080i/p"></td>
<td><a href=details.php?id=407272&amp;hit=1><b>Cosmos A SpaceTime Odyssey 2014 BluRay 1080p x265 10Bit DTS 5{@}1-FFans [宇宙时空之旅 科普必备片 五星无脑推荐 内封中字简繁双语特效 HEVC编码]</b></a></td><td align=center>17155<br>小时</td><td align=center>33.39<br>GB</td><td align=right>63</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p"></td>
<td><a href=details.php?id=412648&amp;hit=1><b>Memories of Murder 2003 BluRay 1080p x265 10bit MNHD-FRDS [【杀人回忆/谋杀回忆/杀人记忆/杀手回忆录】 奉俊昊作品 法版4k修复 Repack 10bit HEVC版本](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>15507<br>小时</td><td align=center>5.59<br>GB</td><td align=right>127</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_m2160p.png" alt="影视2160p"></td>
<td><a href=details.php?id=436634&amp;hit=1><b>My chief My Regiment 2009 Complete WEB-DL 4K H 265 AAC-CHDWEB [我的团长我的团 4K修复版 全43集 主演: 段奕宏 张译 张国强 邢佳栋 李晨 国语中字](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>10101<br>小时</td><td align=center>81.62<br>GB</td><td align=right>27</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_anime.png" alt="高清动漫"></td>
<td><a href=details.php?id=356865&amp;hit=1><b>Sora yori mo Tooi Basho BDRip 1920x1080 TV 01-13 Fin+SP H264 FLACx2 MKV-jsum@U2 [比宇宙更远的地方](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>34776<br>小时</td><td align=center>32.15<br>GB</td><td align=right>4</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_anime.png" alt="高清动漫"></td>
<td><a href=details.php?id=411116&amp;hit=1><b>Prince Nezhas Triumph Against Dragon King 1979 Webrip 1080p x265 10bit AAC MNHD-FRDS[【哪吒闹海】HEVC 10bit 胶片修复 上海美影 烧包源](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>15981<br>小时</td><td align=center>2.93<br>GB</td><td align=right>86</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p"></td>
<td><a href=details.php?id=411244&amp;hit=1><b>Ice Age 2002 BluRay 1080p x265 10bit 4Audio MNHD-FRDS [【冰河世纪】含SP Gone Nutty 国台英粤四语 10bit HEVC版本](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>15940<br>小时</td><td align=center>4.22<br>GB</td><td align=right>82</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_hjb.png" alt="韩剧包"></td>
<td><a href=details.php?id=403136&amp;hit=1><b>365 Repeat the Year S01 1080p KKTV WEB-DL AAC2{@}0 x264-Ao[韩剧 | 365：逆转命运的1年/365:운명을 거스르는 1년 全24集 2020 | 主演: 李俊赫 南志铉 金智秀 *内封繁中*]](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>18770<br>小时</td><td align=center>17.04<br>GB</td><td align=right>74</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p"></td>
<td><a href=details.php?id=398060&amp;hit=1><b>Lord of War 2005 BluRay 1080p x265 10bit 2Audio MNHD-FRDS[战争之王/军火之王 SUP繁简英 特效字幕 国英双语 尼古拉斯·凯奇 10bit HEVC版本](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>20601<br>小时</td><td align=center>8.16<br>GB</td><td align=right>61</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_dlb.png" alt="华语剧包"></td>
<td><a href=details.php?id=334069&amp;hit=1><b>Yong Zheng Wang Chao 1997 Complete HDTV 1080p H264 AAC-CHDTV [雍正王朝  全44集   *主演：唐国强、焦晃]</b></a></td><td align=center>43195<br>小时</td><td align=center>108.04<br>GB</td><td align=right>59</td><td align=right>1</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_hjb.png" alt="韩剧包"></td>
<td><a href=details.php?id=486783&amp;hit=1><b>Juvenile Justice S01 2022 1080p NF WEB-DL DDP5{@}1 x264-PuTao [少年法庭 全10集 | 主演：金惠秀 金武烈 *韩语 内封中字*](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>2930<br>小时</td><td align=center>19.12<br>GB</td><td align=right>21</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_dlb.png" alt="华语剧包"></td>
<td><a href=details.php?id=416881&amp;hit=1><b>Battle of Changsha 2014 WEB-DL 4k H265 AAC-HDSWEB[战长沙 全32集|主演：霍建华 杨紫 左小青 任程伟 牛骏峰](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>14353<br>小时</td><td align=center>37.36<br>GB</td><td align=right>9</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_dlb.png" alt="华语剧包"></td>
<td><a href=details.php?id=356771&amp;hit=1><b>The Heaven Sword And Dragon Saber 2003 Complete WEB-DL 1080p H264 AAC-FLTTH [2004 倚天屠龙记 全40集 | 主演:苏有朋 贾静雯 高圆圆](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>34815<br>小时</td><td align=center>33.28<br>GB</td><td align=right>23</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_anime.png" alt="高清动漫"></td>
<td><a href=details.php?id=497126&amp;hit=1><b>Fruits Basket 1st Season 2019 Blu-ray 1080p x264 FLAC-jsum@U2[水果篮子2019 第1季 TV 01-25 Fin+SP](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>2566<br>小时</td><td align=center>45.26<br>GB</td><td align=right>1</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p"></td>
<td><a href=details.php?id=412553&amp;hit=1><b>Room 2015 BluRay 1080p x265 10bit MNHD-FRDS [【房间/不存在的房间(台)/抖室(港)】 Top 250 #124 10bit HEVC版本](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>15530<br>小时</td><td align=center>5.66<br>GB</td><td align=right>237</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_hjb.png" alt="韩剧包"></td>
<td><a href=details.php?id=529608&amp;hit=1><b>Business Proposal S01 2022 1080p NF WEB-DL DDP2{@}0 x264-REVOLT [社内相亲 / 我和总裁相了个亲 全12集 「內封中字」](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>1987<br>小时</td><td align=center>30.22<br>GB</td><td align=right>22</td><td align=right>0</td><td align=center>357.00<br>MB</td>
<td align=center>0.00<br>kB</td><td align=center>Inf.</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_dlb.png" alt="华语剧包"></td>
<td><a href=details.php?id=426337&amp;hit=1><b>The Prince of Han Dynasty Ⅰ 2002 WEB-DL 4k H265 AAC-HDSWEB[大汉天子1 全41集 | 主演：陈道明 陈莎莉 贾静雯 黄晓明](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>11999<br>小时</td><td align=center>64.45<br>GB</td><td align=right>7</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p"></td>
<td><a href=details.php?id=368708&amp;hit=1><b>Final Destination Ⅰ-V 2000-2011 BluRay 1080p x264 AC3 2Audios-CMCT[死神来了Ⅰ-Ⅴ合集/终点Ⅰ-Ⅴ合集/绝命终结站Ⅰ-Ⅴ合集(台)/死神来了Ⅰ-Ⅴ合集(港) 国英双语 中英字幕]</b></a></td><td align=center>30998<br>小时</td><td align=center>39.07<br>GB</td><td align=right>59</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p"></td>
<td><a href=details.php?id=340288&amp;hit=1><b>Gone with the Wind 1939 BluRay 1080p x265 10bit 9Audio MnHD-FRDS[乱世佳人/飘 Top 250 #167 克拉克·盖博 费雯·丽 8国配 10bit HEVC版本](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>40551<br>小时</td><td align=center>11.94<br>GB</td><td align=right>292</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_do1080p.png" alt="纪录片1080i/p"></td>
<td><a href=details.php?id=369856&amp;hit=1><b>Dynasties Complete 2018 BluRay 1080p x264 DTS 2Audios-CMCT[BBC 王朝 (全5集) 国英双语 中英字幕] *大卫·艾登堡作品*(<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>30581<br>小时</td><td align=center>28.29<br>GB</td><td align=right>66</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_dlb.png" alt="华语剧包"></td>
<td><a href=details.php?id=426354&amp;hit=1><b>The Prince of Han Dynasty Ⅱ 2004 WEB-DL 4k H265 AAC-HDSWEB[大汉天子2 全40集 | 主演：陈道明 黄晓明 宁静 董勇](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>11990<br>小时</td><td align=center>63.37<br>GB</td><td align=right>9</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_anime.png" alt="高清动漫"></td>
<td><a href=details.php?id=324067&amp;hit=1><b>Fullmetal Alchemist Brotherhood 2009 BDrip 1080p 01-64+SP Fin AVC FLAC-dgwxx[钢之炼金术师FA/鋼の錬金術師 FULLMETAL ALCHEMIST]</b></a></td><td align=center>46998<br>小时</td><td align=center>48.15<br>GB</td><td align=right>17</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p"></td>
<td><a href=details.php?id=412124&amp;hit=1><b>Rashomon 1950 CC Bluray 1080p x265 10bit 2Audios MNHD-FRDS [【罗生门】黑泽明惊世之作 第16届威尼斯金狮奖 10bit HEVC版本](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>15660<br>小时</td><td align=center>7.24<br>GB</td><td align=right>68</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_dlb.png" alt="华语剧包"></td>
<td><a href=details.php?id=402910&amp;hit=1><b>The Gutter 2020 WEB-DL 4k H265 AAC 2Audio-HDCTV[叹息桥 全15集 | 主演：林保怡 周家怡 *国粤双语* *豆瓣8{@}9高分*](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>18850<br>小时</td><td align=center>20.25<br>GB</td><td align=right>23</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_hjb.png" alt="韩剧包"></td>
<td><a href=details.php?id=401588&amp;hit=1><b>Pinocchio 2014 2160p WEB-DL H265 AAC-FLTTH[韩剧 | 匹诺曹/피노키오 全20集 2014 | 主演: 李钟硕 朴信惠 金英光 李侑菲 | 4K 内封韩语·简繁英泰多语软字幕](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>19348<br>小时</td><td align=center>27.89<br>GB</td><td align=right>4</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p"></td>
<td><a href=details.php?id=335529&amp;hit=1><b>Your Name 2016 BluRay 1080p x265 10bit MNHD-FRDS [你的名字/君之名] Top 250 #91 新海诚编导 第40届日本电影学院奖3大奖2提名 10bit HEVC版本 中字</b></a></td><td align=center>42558<br>小时</td><td align=center>4.56<br>GB</td><td align=right>246</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_hjb.png" alt="韩剧包"></td>
<td><a href=details.php?id=569042&amp;hit=1><b>Hometown ChaChaCha S01 2021 Netflix WEB-DL 1080p x264 DDP-HDCTV [海岸村恰恰恰 韩剧 全16集 | 主演：申敏儿 金宣虎]  *内封中字*(<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>371<br>小时</td><td align=center>49.10<br>GB</td><td align=right>7</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_dlb.png" alt="华语剧包"></td>
<td><a href=details.php?id=476764&amp;hit=1><b>The Last Goodbye to Mama 2021 Complete 2160p WEB-DL H265 DDP-LeagueWEB[您好 母亲大人/再见啦 母亲大人 全30集 国语中字 4K](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>5458<br>小时</td><td align=center>39.11<br>GB</td><td align=right>3</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_dlb.png" alt="华语剧包"></td>
<td><a href=details.php?id=437609&amp;hit=1><b>Age of Awakening 2021 Complete 1080p WEB-DL H 264 AAC-TJUPT [觉醒年代 1080p 全43集（转自北洋园）](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>9821<br>小时</td><td align=center>25.46<br>GB</td><td align=right>48</td><td align=right>1</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_dlb.png" alt="华语剧包"></td>
<td><a href=details.php?id=244396&amp;hit=1><b>Qian Fu E01-30 2008 DVDRip x264 AC3-CMCT[潜伏 30集全 | 主演：孙红雷 姚晨 沈傲君 祖峰] [采用DVD9原盘压制] [内嵌简体中字] </b></a></td><td align=center>75348<br>小时</td><td align=center>15.93<br>GB</td><td align=right>70</td><td align=right>1</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p"></td>
<td><a href=details.php?id=403210&amp;hit=1><b>La La Land 2016 BluRay 1080p x265 10bit MNHD-FRDS[爱乐之城/星声梦里人(港)/乐来越爱你(台)]</b></a></td><td align=center>18732<br>小时</td><td align=center>5.61<br>GB</td><td align=right>208</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p"></td>
<td><a href=details.php?id=349748&amp;hit=1><b>The Last Emperor 1987 BluRay 1080p x265 10bit 2Audios MNHD-FRDS[末代皇帝(219分钟版)/末代皇帝溥仪(港)国英双语 第60届奥斯卡多项大奖 10bit HEVC版本 V2版本](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>36971<br>小时</td><td align=center>11.72<br>GB</td><td align=right>119</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_mbluray.png" alt="BluRay原盘"></td>
<td><a href=details.php?id=391693&amp;hit=1><b>The Invincible Tour Jay Chou 2016 Blu-ray 1080p AVC Dolby Digital Audio 5 1-MTeam   [周杰伦2016地表最强世界巡回演唱会/地表最强世界巡回演唱会](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>23054<br>小时</td><td align=center>20.91<br>GB</td><td align=right>45</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_rjb.png" alt="日剧包"></td>
<td><a href=details.php?id=523157&amp;hit=1><b>The Best Divorce 2013 Complete 1080p WEB-DL x265 AC3￡cXcY@FRDS[日剧【最完美的离婚/最佳离婚/最高の離婚/僕のヤバイ妻】附：特辑SP 日语/简中字幕 HEVC版本 修正错误重发](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>2123<br>小时</td><td align=center>13.39<br>GB</td><td align=right>22</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_rjb.png" alt="日剧包"></td>
<td><a href=details.php?id=416362&amp;hit=1><b>Tokyo Love Story 1991 S01 BluRay 1080p LPCM 2{@}0 x264-CHD[东京爱情故事 全11集 【三国配 简繁字幕】](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>14534<br>小时</td><td align=center>63.56<br>GB</td><td align=right>22</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_m2160p.png" alt="影视2160p"></td>
<td><a href=details.php?id=357899&amp;hit=1><b>Signal 2016 Complete UHDTV HEVC 60fps 2160p x265-ONCE [60Fps 信号/解码追凶(港)/暗号](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>34447<br>小时</td><td align=center>38.74<br>GB</td><td align=right>18</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_rjb.png" alt="日剧包"></td>
<td><a href=details.php?id=479547&amp;hit=1><b>Japan Sinks People of Hope S01 2021 1080p NF WEB-DL x264 DDP2{@}0-TJUPT[日本沉没：希望之人 全10集 | TBS剧集 内封多国软字幕 主演: 小栗旬 杏 | TJUPT小组作品](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>4711<br>小时</td><td align=center>21.46<br>GB</td><td align=right>19</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_rjb.png" alt="日剧包"></td>
<td><a href=details.php?id=569284&amp;hit=1><b>The Ivory Tower 2003 1080p HDTV x265 AC3-￡cXcY@FRDS [白色巨塔 全二十一集 日语/简中字幕 ](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>359<br>小时</td><td align=center>22.96<br>GB</td><td align=right>151</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_rjb.png" alt="日剧包"></td>
<td><a href=details.php?id=389614&amp;hit=1><b>Girl from Nowhere S1 2018 NF WEB-DL 1080P H264 DDP2{@}0 Thai-OPS[禁忌女孩/来路不明的转校生 泰剧/惊悚 第一季 全13集]「简繁中字等多国字幕」(<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>23850<br>小时</td><td align=center>16.31<br>GB</td><td align=right>33</td><td align=right>1</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_dobd.png" alt="纪录片BluRay原盘"></td>
<td><a href=details.php?id=328998&amp;hit=1><b>BBC Life 2009 EP01-EP10 BluRay 1080p MultiAudio DTS-HD HR 5{@}1 x264-beAst[BBC:生命 全10集 终极高参收藏版 国粤英台多语DTSHDMA 5 1/英简繁特效SUP字母/章节]</b></a></td><td align=center>45156<br>小时</td><td align=center>81.76<br>GB</td><td align=right>81</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_usb.png" alt="欧美剧包"></td>
<td><a href=details.php?id=437043&amp;hit=1><b>Girl From Nowhere S02 1080p NF WEB-DL DDP2{@}0 x264-HBO[禁忌女孩2/Girl From Nowhere 2/来路不明的转校生2/转学来的女生(港/台)](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>9979<br>小时</td><td align=center>12.86<br>GB</td><td align=right>14</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_usb.png" alt="欧美剧包"></td>
<td><a href=details.php?id=557044&amp;hit=1><b>Into the Badlands S01 1080p BluRay Remux AVC DTS-HD MA 5{@}1-NTb [荒原 第一季](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>959<br>小时</td><td align=center>72.45<br>GB</td><td align=right>1</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p"></td>
<td><a href=details.php?id=342362&amp;hit=1><b>Little Forest Winter Spring 2015 BluRay 1080p x265 10bit MNHD-FRDS[小森林-冬春篇 橋本愛 三浦貴大 处平凡而不自弃 美食与爱不可辜 勇敢出发 10bit HEVC版本](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>39668<br>小时</td><td align=center>4.82<br>GB</td><td align=right>49</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p"></td>
<td><a href=details.php?id=387129&amp;hit=1><b>Whisper of the Heart 1995 BluRay 1080p x265 10bit 4Audio MNHD-FRDS [侧耳倾听/心之谷/梦幻街少女] 吉卜力工作室作品 国粤英日四语 豆瓣电影Top250 10bit HEVC版本</b></a></td><td align=center>24754<br>小时</td><td align=center>6.59<br>GB</td><td align=right>131</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_m2160p.png" alt="影视2160p"></td>
<td><a href=details.php?id=418795&amp;hit=1><b>Resident Evil 2002-2017 BluRay 2160p 2Audio TrueHD Atmos 7{@}1 x265 10bit HDR-BeiTai  [生化危机7部合集 国英双语TrueHD7{@}1/英简繁双语SUP字幕/章节]</b></a></td><td align=center>13800<br>小时</td><td align=center>124.39<br>GB</td><td align=right>67</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_dlb.png" alt="华语剧包"></td>
<td><a href=details.php?id=263607&amp;hit=1><b>Han Wu Da Di E01-58 2004 DVDRip x264 AC3-CMCT [汉武大帝 58集全 | 主演：陈宝国 焦晃 归亚蕾 陶虹 杨童舒 林静 台版 国语/简繁中字]</b></a></td><td align=center>69801<br>小时</td><td align=center>29.47<br>GB</td><td align=right>63</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p"></td>
<td><a href=details.php?id=412364&amp;hit=1><b>Fight Club 1999 BluRay 1080p x265 10bit 2Audio MNHD-FRDS [【搏击俱乐部/斗阵俱乐部(台)/搏击会(港)/格斗俱乐部】 Top 250 #10 国英双语 10bit HEVC版本](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>15585<br>小时</td><td align=center>7.62<br>GB</td><td align=right>259</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_anime.png" alt="高清动漫"></td>
<td><a href=details.php?id=426599&amp;hit=1><b>Magi The Kingdom of Magic 2013 BDRip 1080p x264 FLAC-jsum@U2 [魔奇少年 第二季/MAGI魔奇少年 第二季/天方魔谭MAGI 第二季/魔笛 第二季](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>11900<br>小时</td><td align=center>70.29<br>GB</td><td align=right>2</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p"></td>
<td><a href=details.php?id=413711&amp;hit=1><b>City Lights 1931 CC Bluray 1080p x265 10bit MNHD-FRDS [【城市之光】10bit HEVC版本](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>15205<br>小时</td><td align=center>4.94<br>GB</td><td align=right>59</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_rjb.png" alt="日剧包"></td>
<td><a href=details.php?id=483329&amp;hit=1><b>Tokyo Girl 2016 Amazon WEB-DL 4k x265 DDP-AREY[2016日剧 东京女子图鉴 / Tokyo Girl 全11集 | 主演：水川麻美 阿部力 *日语 多国语软字幕 4K+x265*]</b></a></td><td align=center>3766<br>小时</td><td align=center>18.99<br>GB</td><td align=right>14</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_usb.png" alt="欧美剧包"></td>
<td><a href=details.php?id=366183&amp;hit=1><b>Sherlock S01-S04 2010-2017 1080p Blu-ray x265 10bit AC3￡cXcY@FRDS [【神探夏洛克/新福尔摩斯】全四季 附：导航集 附：电影版 地狱新娘 中英双语/简中字幕 BBC出品 10bit HEVC版本 修正上一版错误](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>31881<br>小时</td><td align=center>20.70<br>GB</td><td align=right>167</td><td align=right>1</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p"></td>
<td><a href=details.php?id=412077&amp;hit=1><b>The Sixth Sense 1999 BluRay 1080p x265 10bit 2Audio MNHD-FRDS [灵异第六感/第六感/鬼眼]Top 250 #163 国英双语 10bit HEVC版本](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>15676<br>小时</td><td align=center>6.12<br>GB</td><td align=right>240</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p"></td>
<td><a href=details.php?id=403662&amp;hit=1><b>Millennium Actress 2001 BluRay 1080p x265 10bit MNHD-FRDS [千年女优( 今敏作品 10bit HEVC版本)](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>18540<br>小时</td><td align=center>4.43<br>GB</td><td align=right>59</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_hjb.png" alt="韩剧包"></td>
<td><a href=details.php?id=438365&amp;hit=1><b>Mouse 2021 WEB-DL 1080p H{@}265 AAC-HDSWEB [韩剧 窥探 / 마우스  全20集打包+1集特辑  内封简繁英多国字幕](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>9673<br>小时</td><td align=center>40.93<br>GB</td><td align=right>55</td><td align=right>0</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
</table>
</div></td></tr>
<tr valign=top><td class=rowhead>当前下载<a href="javascript: klappe_news('a3')"><br><img border="0" src="/pic/viewinfo.gif" id="pica" alt="[显示/隐藏]" title="显示/隐藏"></td><td align=left><div id="ka3" style="display: none;"><table class=main border=1 cellspacing=0 cellpadding=5><tr><td class=colhead align=center>类型</td><td class=colhead>名称</td><td class=colhead align=center>TTL</td><td class=colhead align=center>尺寸</td><td class=colhead align=right>做种者</td><td class=colhead align=right>下载者</td><td class=colhead align=center>上传量</td>
<td class=colhead align=center>下载量</td><td class=colhead align=center>分享率</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_mbluray.png" alt="BluRay原盘"></td>
<td><a href=details.php?id=571802&amp;hit=1><b>Hana‘s Miso Soup 2014 1080i JPN Blu-ray AVC LPCM 2{@}0-HDAsia [小花的味噌汤 / はなちゃんのみそ汁]  | 24HOUR TELEVISION 2014 SP日剧(<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>1<br>小时</td><td align=center>38.20<br>GB</td><td align=right>0</td><td align=right>187</td><td align=center>0.00<br>kB</td>
<td align=center>0.00<br>kB</td><td align=center>---</td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_drama.png" alt="高清综艺"></td>
<td><a href=details.php?id=571810&amp;hit=1><b>TJTV Ai Qing Bao Wei Zhan 20220615 1080p HDTV H264-NGB [天津卫视 爱情保卫战 后婚恋时代情感综艺节目](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>1<br>小时</td><td align=center>3.12<br>GB</td><td align=right>1</td><td align=right>173</td><td align=center>225.61<br>MB</td>
<td align=center>739.10<br>MB</td><td align=center><font color=#cc0000>0.305</font></td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_drama.png" alt="高清综艺"></td>
<td><a href=details.php?id=571813&amp;hit=1><b>TJTV Ai Qing Bao Wei Zhan 20220622 1080p HDTV H264-NGB [天津卫视 爱情保卫战 后婚恋时代情感综艺节目](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>1<br>小时</td><td align=center>3.11<br>GB</td><td align=right>1</td><td align=right>178</td><td align=center>192.64<br>MB</td>
<td align=center>682.61<br>MB</td><td align=center><font color=#dd0000>0.282</font></td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_drama.png" alt="高清综艺"></td>
<td><a href=details.php?id=571812&amp;hit=1><b>TJTV Ai Qing Bao Wei Zhan 20220621 1080p HDTV H264-NGB [天津卫视 爱情保卫战 后婚恋时代情感综艺节目](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>1<br>小时</td><td align=center>3.12<br>GB</td><td align=right>1</td><td align=right>181</td><td align=center>332.29<br>MB</td>
<td align=center>1.22<br>GB</td><td align=center><font color=#dd0000>0.265</font></td></tr>
<tr><td style='padding: 0px'><img src="pic/cate/cate_drama.png" alt="高清综艺"></td>
<td><a href=details.php?id=571811&amp;hit=1><b>TJTV Ai Qing Bao Wei Zhan 20220616 1080p HDTV H264-NGB [天津卫视 爱情保卫战 后婚恋时代情感综艺节目](<b style="color: rgb(255, 153, 0);">匿</b>)</b></a></td><td align=center>1<br>小时</td><td align=center>3.10<br>GB</td><td align=right>1</td><td align=right>171</td><td align=center>157.41<br>MB</td>
<td align=center>785.89<br>MB</td><td align=center><font color=#dd0000>0.200</font></td></tr>
</table>
</div></td></tr>
<tr valign=top><td class=rowhead>完成下载<a href="javascript: klappe_news('a4')"><br><img border="0" src="/pic/viewinfo.gif" id="pica" alt="[显示/隐藏]" title="显示/隐藏"></td><td align=left><div id="ka4" style="display: none;"><table class=main border=1 cellspacing=0 cellpadding=3>
<tr>
<td class=colhead align=center>类型</td>
<td class=colhead align=center>种子</td>
<td class=colhead align=center>上传</td>
<td class=colhead align=center>下载</td>
<td class=colhead align=center>开始</td>
<td class=colhead align=center>结束</td>
<td class=colhead align=center>最后活动</td>
<td class=colhead align=center width=75>下载耗时</td>
<td class=colhead align=center>做种者</td>
<td class=colhead align=center>下载者</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=60><img src="pic/cate/cate_drama.png" alt="高清综艺" border=0></a></td>
<td><a href=details.php?id=571807><b>TJTV Ai Qing Bao Wei...</b></a><br />1.63 MB/sec.</td>
<td align=center>441.20 MB</td>
<td align=center>3.12 GB</td>
<td align=center>2022-06-27 20:45:21</td>
<td align=center>2022-06-27 21:18:02</td>
<td align=center>2022-06-27 21:48:02</td>
<td align=center>32:41</td>
<td align=center>145</td>
<td align=center>17</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=60><img src="pic/cate/cate_drama.png" alt="高清综艺" border=0></a></td>
<td><a href=details.php?id=571809><b>TJTV Ai Qing Bao Wei...</b></a><br />1.06 MB/sec.</td>
<td align=center>1.06 GB</td>
<td align=center>3.06 GB</td>
<td align=center>2022-06-27 20:45:14</td>
<td align=center>2022-06-27 21:34:20</td>
<td align=center>2022-06-27 21:34:20</td>
<td align=center>49:06</td>
<td align=center>136</td>
<td align=center>34</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=99><img src="pic/cate/cate_hjb.png" alt="韩剧包" border=0></a></td>
<td><a href=details.php?id=438365><b>Mouse 2021 WEB-DL 10...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:28:09</td>
<td align=center>2022-06-27 16:25:25</td>
<td align=center>2022-06-27 21:34:04</td>
<td align=center>8d 22:57:16</td>
<td align=center>55</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=53><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p" border=0></a></td>
<td><a href=details.php?id=403662><b>Millennium Actress 2...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-19 08:08:08</td>
<td align=center>2022-06-27 16:23:49</td>
<td align=center>2022-06-27 21:33:23</td>
<td align=center>8d 08:15:41</td>
<td align=center>59</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=53><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p" border=0></a></td>
<td><a href=details.php?id=412077><b>The Sixth Sense 1999...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:28:09</td>
<td align=center>2022-06-27 16:25:50</td>
<td align=center>2022-06-27 21:32:32</td>
<td align=center>8d 22:57:41</td>
<td align=center>240</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=87><img src="pic/cate/cate_usb.png" alt="欧美剧包" border=0></a></td>
<td><a href=details.php?id=366183><b>Sherlock S01-S04 201...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:42:37</td>
<td align=center>2022-06-27 16:26:22</td>
<td align=center>2022-06-27 21:32:28</td>
<td align=center>8d 22:43:45</td>
<td align=center>167</td>
<td align=center>1</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=88><img src="pic/cate/cate_rjb.png" alt="日剧包" border=0></a></td>
<td><a href=details.php?id=483329><b>Tokyo Girl 2016 Amaz...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:42:37</td>
<td align=center>2022-06-27 16:26:21</td>
<td align=center>2022-06-27 21:32:22</td>
<td align=center>8d 22:43:44</td>
<td align=center>14</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=53><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p" border=0></a></td>
<td><a href=details.php?id=413711><b>City Lights 1931 CC ...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:42:37</td>
<td align=center>2022-06-27 16:26:46</td>
<td align=center>2022-06-27 21:32:12</td>
<td align=center>8d 22:44:09</td>
<td align=center>59</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=58><img src="pic/cate/cate_anime.png" alt="高清动漫" border=0></a></td>
<td><a href=details.php?id=426599><b>Magi The Kingdom of ...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-21 22:52:16</td>
<td align=center>2022-06-27 16:26:43</td>
<td align=center>2022-06-27 21:31:42</td>
<td align=center>5d 17:34:27</td>
<td align=center>2</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=53><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p" border=0></a></td>
<td><a href=details.php?id=412364><b>Fight Club 1999 BluR...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-19 08:08:08</td>
<td align=center>2022-06-27 16:23:04</td>
<td align=center>2022-06-27 21:31:41</td>
<td align=center>8d 08:14:56</td>
<td align=center>259</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=90><img src="pic/cate/cate_dlb.png" alt="华语剧包" border=0></a></td>
<td><a href=details.php?id=263607><b>Han Wu Da Di E01-58 ...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-19 08:08:08</td>
<td align=center>2022-06-27 16:26:10</td>
<td align=center>2022-06-27 21:31:31</td>
<td align=center>8d 08:18:02</td>
<td align=center>63</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=108><img src="pic/cate/cate_m2160p.png" alt="影视2160p" border=0></a></td>
<td><a href=details.php?id=418795><b>Resident Evil 2002-2...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 14:42:00</td>
<td align=center>2022-06-27 16:25:01</td>
<td align=center>2022-06-27 21:31:17</td>
<td align=center>9d 01:43:01</td>
<td align=center>67</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=53><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p" border=0></a></td>
<td><a href=details.php?id=387129><b>Whisper of the Heart...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 14:39:22</td>
<td align=center>2022-06-27 16:27:27</td>
<td align=center>2022-06-27 21:30:49</td>
<td align=center>9d 01:48:05</td>
<td align=center>131</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=53><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p" border=0></a></td>
<td><a href=details.php?id=342362><b>Little Forest Winter...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 14:10:55</td>
<td align=center>2022-06-27 16:25:16</td>
<td align=center>2022-06-27 21:30:48</td>
<td align=center>9d 02:14:21</td>
<td align=center>49</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=87><img src="pic/cate/cate_usb.png" alt="欧美剧包" border=0></a></td>
<td><a href=details.php?id=557044><b>Into the Badlands S0...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:42:37</td>
<td align=center>2022-06-27 16:25:52</td>
<td align=center>2022-06-27 21:30:46</td>
<td align=center>8d 22:43:15</td>
<td align=center>1</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=87><img src="pic/cate/cate_usb.png" alt="欧美剧包" border=0></a></td>
<td><a href=details.php?id=437043><b>Girl From Nowhere S0...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:28:09</td>
<td align=center>2022-06-27 16:25:39</td>
<td align=center>2022-06-27 21:30:45</td>
<td align=center>8d 22:57:30</td>
<td align=center>14</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=67><img src="pic/cate/cate_dobd.png" alt="纪录片BluRay原盘" border=0></a></td>
<td><a href=details.php?id=328998><b>BBC Life 2009 EP01-E...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:42:38</td>
<td align=center>2022-06-27 16:23:46</td>
<td align=center>2022-06-27 21:30:18</td>
<td align=center>8d 22:41:08</td>
<td align=center>81</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=88><img src="pic/cate/cate_rjb.png" alt="日剧包" border=0></a></td>
<td><a href=details.php?id=389614><b>Girl from Nowhere S1...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 14:39:22</td>
<td align=center>2022-06-27 16:22:56</td>
<td align=center>2022-06-27 21:29:53</td>
<td align=center>9d 01:43:34</td>
<td align=center>33</td>
<td align=center>1</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=88><img src="pic/cate/cate_rjb.png" alt="日剧包" border=0></a></td>
<td><a href=details.php?id=479547><b>Japan Sinks People o...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:28:09</td>
<td align=center>2022-06-27 16:26:42</td>
<td align=center>2022-06-27 21:29:50</td>
<td align=center>8d 22:58:33</td>
<td align=center>19</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=88><img src="pic/cate/cate_rjb.png" alt="日剧包" border=0></a></td>
<td><a href=details.php?id=569284><b>The Ivory Tower 2003...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:28:09</td>
<td align=center>2022-06-27 16:26:22</td>
<td align=center>2022-06-27 21:29:50</td>
<td align=center>8d 22:58:13</td>
<td align=center>151</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=108><img src="pic/cate/cate_m2160p.png" alt="影视2160p" border=0></a></td>
<td><a href=details.php?id=357899><b>Signal 2016 Complete...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-21 22:52:15</td>
<td align=center>2022-06-27 16:25:34</td>
<td align=center>2022-06-27 21:29:40</td>
<td align=center>5d 17:33:19</td>
<td align=center>18</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=88><img src="pic/cate/cate_rjb.png" alt="日剧包" border=0></a></td>
<td><a href=details.php?id=416362><b>Tokyo Love Story 199...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-19 08:08:08</td>
<td align=center>2022-06-27 16:24:09</td>
<td align=center>2022-06-27 21:29:26</td>
<td align=center>8d 08:16:01</td>
<td align=center>22</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=88><img src="pic/cate/cate_rjb.png" alt="日剧包" border=0></a></td>
<td><a href=details.php?id=523157><b>The Best Divorce 201...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-19 08:08:08</td>
<td align=center>2022-06-27 16:23:07</td>
<td align=center>2022-06-27 21:29:24</td>
<td align=center>8d 08:14:59</td>
<td align=center>22</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=54><img src="pic/cate/cate_mbluray.png" alt="BluRay原盘" border=0></a></td>
<td><a href=details.php?id=391693><b>The Invincible Tour ...</b></a><br />0.00 kB/sec.</td>
<td align=center>1.97 MB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:28:09</td>
<td align=center>2022-06-27 16:23:45</td>
<td align=center>2022-06-27 21:29:15</td>
<td align=center>8d 22:55:36</td>
<td align=center>45</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=53><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p" border=0></a></td>
<td><a href=details.php?id=349748><b>The Last Emperor 198...</b></a><br />0.00 kB/sec.</td>
<td align=center>336.27 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:42:37</td>
<td align=center>2022-06-27 16:25:51</td>
<td align=center>2022-06-27 21:29:06</td>
<td align=center>8d 22:43:14</td>
<td align=center>119</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=53><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p" border=0></a></td>
<td><a href=details.php?id=403210><b>La La Land 2016 BluR...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-19 08:08:08</td>
<td align=center>2022-06-27 16:26:33</td>
<td align=center>2022-06-27 21:29:05</td>
<td align=center>8d 08:18:25</td>
<td align=center>208</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=90><img src="pic/cate/cate_dlb.png" alt="华语剧包" border=0></a></td>
<td><a href=details.php?id=244396><b>Qian Fu E01-30 2008 ...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-19 08:08:08</td>
<td align=center>2022-06-27 16:26:27</td>
<td align=center>2022-06-27 21:28:59</td>
<td align=center>8d 08:18:19</td>
<td align=center>70</td>
<td align=center>1</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=90><img src="pic/cate/cate_dlb.png" alt="华语剧包" border=0></a></td>
<td><a href=details.php?id=437609><b>Age of Awakening 202...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-19 08:08:08</td>
<td align=center>2022-06-27 16:22:53</td>
<td align=center>2022-06-27 21:28:58</td>
<td align=center>8d 08:14:45</td>
<td align=center>48</td>
<td align=center>1</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=90><img src="pic/cate/cate_dlb.png" alt="华语剧包" border=0></a></td>
<td><a href=details.php?id=476764><b>The Last Goodbye to ...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-19 08:08:08</td>
<td align=center>2022-06-27 16:22:04</td>
<td align=center>2022-06-27 21:28:58</td>
<td align=center>8d 08:13:56</td>
<td align=center>3</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=99><img src="pic/cate/cate_hjb.png" alt="韩剧包" border=0></a></td>
<td><a href=details.php?id=569042><b>Hometown ChaChaCha S...</b></a><br />0.00 kB/sec.</td>
<td align=center>32.31 MB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-19 08:08:08</td>
<td align=center>2022-06-27 16:24:40</td>
<td align=center>2022-06-27 21:28:56</td>
<td align=center>8d 08:16:32</td>
<td align=center>7</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=53><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p" border=0></a></td>
<td><a href=details.php?id=335529><b>Your Name 2016 BluRa...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 14:39:22</td>
<td align=center>2022-06-27 16:26:45</td>
<td align=center>2022-06-27 21:28:47</td>
<td align=center>9d 01:47:23</td>
<td align=center>246</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=99><img src="pic/cate/cate_hjb.png" alt="韩剧包" border=0></a></td>
<td><a href=details.php?id=401588><b>Pinocchio 2014 2160p...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-21 22:52:15</td>
<td align=center>2022-06-27 16:25:04</td>
<td align=center>2022-06-27 21:28:45</td>
<td align=center>5d 17:32:49</td>
<td align=center>4</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=90><img src="pic/cate/cate_dlb.png" alt="华语剧包" border=0></a></td>
<td><a href=details.php?id=402910><b>The Gutter 2020 WEB-...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-20 13:39:26</td>
<td align=center>2022-06-27 16:23:06</td>
<td align=center>2022-06-27 21:28:36</td>
<td align=center>7d 02:43:40</td>
<td align=center>23</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=53><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p" border=0></a></td>
<td><a href=details.php?id=412124><b>Rashomon 1950 CC Blu...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 14:39:22</td>
<td align=center>2022-06-27 16:26:45</td>
<td align=center>2022-06-27 21:28:28</td>
<td align=center>9d 01:47:23</td>
<td align=center>68</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=58><img src="pic/cate/cate_anime.png" alt="高清动漫" border=0></a></td>
<td><a href=details.php?id=324067><b>Fullmetal Alchemist ...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 14:39:22</td>
<td align=center>2022-06-27 16:25:18</td>
<td align=center>2022-06-27 21:28:16</td>
<td align=center>9d 01:45:56</td>
<td align=center>17</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=90><img src="pic/cate/cate_dlb.png" alt="华语剧包" border=0></a></td>
<td><a href=details.php?id=426354><b>The Prince of Han Dy...</b></a><br />0.00 kB/sec.</td>
<td align=center>439.69 MB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:42:37</td>
<td align=center>2022-06-27 16:25:19</td>
<td align=center>2022-06-27 21:28:09</td>
<td align=center>8d 22:42:42</td>
<td align=center>9</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=63><img src="pic/cate/cate_do1080p.png" alt="纪录片1080i/p" border=0></a></td>
<td><a href=details.php?id=369856><b>Dynasties Complete 2...</b></a><br />0.00 kB/sec.</td>
<td align=center>81.33 MB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 14:39:22</td>
<td align=center>2022-06-27 16:23:43</td>
<td align=center>2022-06-27 21:28:06</td>
<td align=center>9d 01:44:21</td>
<td align=center>66</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=53><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p" border=0></a></td>
<td><a href=details.php?id=340288><b>Gone with the Wind 1...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-19 08:08:08</td>
<td align=center>2022-06-27 16:25:14</td>
<td align=center>2022-06-27 21:28:05</td>
<td align=center>8d 08:17:06</td>
<td align=center>292</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=53><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p" border=0></a></td>
<td><a href=details.php?id=368708><b>Final Destination �...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-19 08:08:08</td>
<td align=center>2022-06-27 16:26:43</td>
<td align=center>2022-06-27 21:28:03</td>
<td align=center>8d 08:18:35</td>
<td align=center>59</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=90><img src="pic/cate/cate_dlb.png" alt="华语剧包" border=0></a></td>
<td><a href=details.php?id=426337><b>The Prince of Han Dy...</b></a><br />0.00 kB/sec.</td>
<td align=center>293.00 MB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:42:37</td>
<td align=center>2022-06-27 16:24:33</td>
<td align=center>2022-06-27 21:28:01</td>
<td align=center>8d 22:41:56</td>
<td align=center>7</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=99><img src="pic/cate/cate_hjb.png" alt="韩剧包" border=0></a></td>
<td><a href=details.php?id=529608><b>Business Proposal S0...</b></a><br />0.00 kB/sec.</td>
<td align=center>357.00 MB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-19 08:08:08</td>
<td align=center>2022-06-27 16:26:40</td>
<td align=center>2022-06-27 21:27:59</td>
<td align=center>8d 08:18:32</td>
<td align=center>22</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=53><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p" border=0></a></td>
<td><a href=details.php?id=412553><b>Room 2015 BluRay 108...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 14:11:10</td>
<td align=center>2022-06-27 16:22:45</td>
<td align=center>2022-06-27 21:27:51</td>
<td align=center>9d 02:11:35</td>
<td align=center>237</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=58><img src="pic/cate/cate_anime.png" alt="高清动漫" border=0></a></td>
<td><a href=details.php?id=497126><b>Fruits Basket 1st Se...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:42:37</td>
<td align=center>2022-06-27 16:26:06</td>
<td align=center>2022-06-27 21:27:47</td>
<td align=center>8d 22:43:29</td>
<td align=center>1</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=90><img src="pic/cate/cate_dlb.png" alt="华语剧包" border=0></a></td>
<td><a href=details.php?id=356771><b>The Heaven Sword And...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:42:37</td>
<td align=center>2022-06-27 16:23:31</td>
<td align=center>2022-06-27 21:27:44</td>
<td align=center>8d 22:40:54</td>
<td align=center>23</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=90><img src="pic/cate/cate_dlb.png" alt="华语剧包" border=0></a></td>
<td><a href=details.php?id=416881><b>Battle of Changsha 2...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-21 22:52:15</td>
<td align=center>2022-06-27 16:24:24</td>
<td align=center>2022-06-27 21:27:41</td>
<td align=center>5d 17:32:09</td>
<td align=center>9</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=99><img src="pic/cate/cate_hjb.png" alt="韩剧包" border=0></a></td>
<td><a href=details.php?id=486783><b>Juvenile Justice S01...</b></a><br />0.00 kB/sec.</td>
<td align=center>7.26 MB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-19 08:08:08</td>
<td align=center>2022-06-27 16:25:41</td>
<td align=center>2022-06-27 21:27:38</td>
<td align=center>8d 08:17:33</td>
<td align=center>21</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=90><img src="pic/cate/cate_dlb.png" alt="华语剧包" border=0></a></td>
<td><a href=details.php?id=334069><b>Yong Zheng Wang Chao...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 15:16:47</td>
<td align=center>2022-06-27 16:22:41</td>
<td align=center>2022-06-27 21:27:37</td>
<td align=center>9d 01:05:54</td>
<td align=center>59</td>
<td align=center>1</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=53><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p" border=0></a></td>
<td><a href=details.php?id=398060><b>Lord of War 2005 Blu...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 14:39:22</td>
<td align=center>2022-06-27 16:26:12</td>
<td align=center>2022-06-27 21:27:30</td>
<td align=center>9d 01:46:50</td>
<td align=center>61</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=99><img src="pic/cate/cate_hjb.png" alt="韩剧包" border=0></a></td>
<td><a href=details.php?id=403136><b>365 Repeat the Year ...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-19 08:08:08</td>
<td align=center>2022-06-27 16:26:55</td>
<td align=center>2022-06-27 21:27:24</td>
<td align=center>8d 08:18:47</td>
<td align=center>74</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=53><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p" border=0></a></td>
<td><a href=details.php?id=411244><b>Ice Age 2002 BluRay ...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-19 08:08:08</td>
<td align=center>2022-06-27 16:23:21</td>
<td align=center>2022-06-27 21:27:24</td>
<td align=center>8d 08:15:13</td>
<td align=center>82</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=58><img src="pic/cate/cate_anime.png" alt="高清动漫" border=0></a></td>
<td><a href=details.php?id=411116><b>Prince Nezhas Triump...</b></a><br />0.00 kB/sec.</td>
<td align=center>1.19 MB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:42:37</td>
<td align=center>2022-06-27 16:26:19</td>
<td align=center>2022-06-27 21:27:19</td>
<td align=center>8d 22:43:42</td>
<td align=center>86</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=58><img src="pic/cate/cate_anime.png" alt="高清动漫" border=0></a></td>
<td><a href=details.php?id=356865><b>Sora yori mo Tooi Ba...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-21 22:52:15</td>
<td align=center>2022-06-27 16:23:18</td>
<td align=center>2022-06-27 21:27:14</td>
<td align=center>5d 17:31:03</td>
<td align=center>4</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=108><img src="pic/cate/cate_m2160p.png" alt="影视2160p" border=0></a></td>
<td><a href=details.php?id=436634><b>My chief My Regiment...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 14:39:22</td>
<td align=center>2022-06-27 16:22:18</td>
<td align=center>2022-06-27 21:27:07</td>
<td align=center>9d 01:42:56</td>
<td align=center>27</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=53><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p" border=0></a></td>
<td><a href=details.php?id=412648><b>Memories of Murder 2...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 14:35:41</td>
<td align=center>2022-06-27 16:22:21</td>
<td align=center>2022-06-27 21:27:00</td>
<td align=center>9d 01:46:40</td>
<td align=center>127</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=63><img src="pic/cate/cate_do1080p.png" alt="纪录片1080i/p" border=0></a></td>
<td><a href=details.php?id=407272><b>Cosmos A SpaceTime O...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 14:39:22</td>
<td align=center>2022-06-27 16:26:12</td>
<td align=center>2022-06-27 21:26:56</td>
<td align=center>9d 01:46:50</td>
<td align=center>63</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=58><img src="pic/cate/cate_anime.png" alt="高清动漫" border=0></a></td>
<td><a href=details.php?id=500225><b>Haikyuu!! 2014 Blu-r...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-19 08:08:08</td>
<td align=center>2022-06-27 16:26:43</td>
<td align=center>2022-06-27 21:26:46</td>
<td align=center>8d 08:18:35</td>
<td align=center>2</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=88><img src="pic/cate/cate_rjb.png" alt="日剧包" border=0></a></td>
<td><a href=details.php?id=387765><b>Anata no Ban Desu S0...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:42:37</td>
<td align=center>2022-06-27 16:26:08</td>
<td align=center>2022-06-27 21:26:38</td>
<td align=center>8d 22:43:31</td>
<td align=center>50</td>
<td align=center>1</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=53><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p" border=0></a></td>
<td><a href=details.php?id=443001><b>Days of Being Wild 1...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:28:09</td>
<td align=center>2022-06-27 16:26:17</td>
<td align=center>2022-06-27 21:26:38</td>
<td align=center>8d 22:58:08</td>
<td align=center>71</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=60><img src="pic/cate/cate_drama.png" alt="高清综艺" border=0></a></td>
<td><a href=details.php?id=571808><b>TJTV Ai Qing Bao Wei...</b></a><br />1.32 MB/sec.</td>
<td align=center>629.10 MB</td>
<td align=center>3.20 GB</td>
<td align=center>2022-06-27 20:45:16</td>
<td align=center>2022-06-27 21:26:36</td>
<td align=center>2022-06-27 21:26:36</td>
<td align=center>41:20</td>
<td align=center>129</td>
<td align=center>37</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=58><img src="pic/cate/cate_anime.png" alt="高清动漫" border=0></a></td>
<td><a href=details.php?id=307477><b>Hunter X Hunter BluR...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:42:37</td>
<td align=center>2022-06-27 16:24:52</td>
<td align=center>2022-06-27 21:26:32</td>
<td align=center>8d 22:42:15</td>
<td align=center>30</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=87><img src="pic/cate/cate_usb.png" alt="欧美剧包" border=0></a></td>
<td><a href=details.php?id=477546><b>Arcane S01 1080p NF ...</b></a><br />0.00 kB/sec.</td>
<td align=center>416.33 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:42:37</td>
<td align=center>2022-06-27 16:22:23</td>
<td align=center>2022-06-27 21:26:30</td>
<td align=center>8d 22:39:46</td>
<td align=center>109</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=90><img src="pic/cate/cate_dlb.png" alt="华语剧包" border=0></a></td>
<td><a href=details.php?id=418100><b>Against the Blade of...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-20 13:39:26</td>
<td align=center>2022-06-27 16:25:01</td>
<td align=center>2022-06-27 21:26:27</td>
<td align=center>7d 02:45:35</td>
<td align=center>4</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=58><img src="pic/cate/cate_anime.png" alt="高清动漫" border=0></a></td>
<td><a href=details.php?id=395977><b>Gintama 2017 S04 108...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:42:37</td>
<td align=center>2022-06-27 16:24:56</td>
<td align=center>2022-06-27 21:26:26</td>
<td align=center>8d 22:42:19</td>
<td align=center>27</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=53><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p" border=0></a></td>
<td><a href=details.php?id=378603><b>In the Mood for Love...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-19 08:08:08</td>
<td align=center>2022-06-27 16:25:44</td>
<td align=center>2022-06-27 21:26:24</td>
<td align=center>8d 08:17:36</td>
<td align=center>97</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=59><img src="pic/cate/cate_mv.png" alt="MV&演唱会" border=0></a></td>
<td><a href=details.php?id=480816><b>Jacky Cheung A Class...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:42:37</td>
<td align=center>2022-06-27 16:26:08</td>
<td align=center>2022-06-27 21:26:18</td>
<td align=center>8d 22:43:31</td>
<td align=center>42</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=90><img src="pic/cate/cate_dlb.png" alt="华语剧包" border=0></a></td>
<td><a href=details.php?id=234211><b>For the sake of the ...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:42:37</td>
<td align=center>2022-06-27 16:25:01</td>
<td align=center>2022-06-27 21:26:13</td>
<td align=center>8d 22:42:24</td>
<td align=center>159</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=99><img src="pic/cate/cate_hjb.png" alt="韩剧包" border=0></a></td>
<td><a href=details.php?id=483687><b>Our Beloved Summer S...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-19 08:08:08</td>
<td align=center>2022-06-27 16:22:44</td>
<td align=center>2022-06-27 21:26:06</td>
<td align=center>8d 08:14:36</td>
<td align=center>42</td>
<td align=center>1</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=99><img src="pic/cate/cate_hjb.png" alt="韩剧包" border=0></a></td>
<td><a href=details.php?id=409670><b>It‘s Okay to Not B...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:21:50</td>
<td align=center>2022-06-27 16:25:08</td>
<td align=center>2022-06-27 21:26:06</td>
<td align=center>8d 23:03:18</td>
<td align=center>30</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=53><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p" border=0></a></td>
<td><a href=details.php?id=362252><b>Gone Girl 2014 BluRa...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 14:39:22</td>
<td align=center>2022-06-27 16:23:51</td>
<td align=center>2022-06-27 21:26:04</td>
<td align=center>9d 01:44:29</td>
<td align=center>110</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=88><img src="pic/cate/cate_rjb.png" alt="日剧包" border=0></a></td>
<td><a href=details.php?id=388295><b>Midnight Diner S01 2...</b></a><br />0.00 kB/sec.</td>
<td align=center>22.79 MB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:42:37</td>
<td align=center>2022-06-27 16:25:08</td>
<td align=center>2022-06-27 21:26:03</td>
<td align=center>8d 22:42:31</td>
<td align=center>100</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=90><img src="pic/cate/cate_dlb.png" alt="华语剧包" border=0></a></td>
<td><a href=details.php?id=474009><b>The Making of an Ord...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:28:09</td>
<td align=center>2022-06-27 16:25:37</td>
<td align=center>2022-06-27 21:25:58</td>
<td align=center>8d 22:57:28</td>
<td align=center>58</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=58><img src="pic/cate/cate_anime.png" alt="高清动漫" border=0></a></td>
<td><a href=details.php?id=444366><b>Serial Experiments L...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:42:37</td>
<td align=center>2022-06-27 16:24:50</td>
<td align=center>2022-06-27 21:25:56</td>
<td align=center>8d 22:42:13</td>
<td align=center>9</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=53><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p" border=0></a></td>
<td><a href=details.php?id=437888><b>Hachi-ko 1987 BluRay...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-20 13:39:26</td>
<td align=center>2022-06-27 16:24:20</td>
<td align=center>2022-06-27 21:25:53</td>
<td align=center>7d 02:44:54</td>
<td align=center>50</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=90><img src="pic/cate/cate_dlb.png" alt="华语剧包" border=0></a></td>
<td><a href=details.php?id=255668><b>Da Ming Wang Chao E0...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:42:37</td>
<td align=center>2022-06-27 16:22:36</td>
<td align=center>2022-06-27 21:25:53</td>
<td align=center>8d 22:39:59</td>
<td align=center>183</td>
<td align=center>1</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=53><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p" border=0></a></td>
<td><a href=details.php?id=526134><b>Death on the Nile 20...</b></a><br />0.00 kB/sec.</td>
<td align=center>12.01 MB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-19 08:08:08</td>
<td align=center>2022-06-27 16:26:08</td>
<td align=center>2022-06-27 21:25:45</td>
<td align=center>8d 08:18:00</td>
<td align=center>11</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=53><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p" border=0></a></td>
<td><a href=details.php?id=335369><b>Dangal 2017 BluRay 1...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:42:37</td>
<td align=center>2022-06-27 16:21:25</td>
<td align=center>2022-06-27 21:25:37</td>
<td align=center>8d 22:38:48</td>
<td align=center>247</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=53><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p" border=0></a></td>
<td><a href=details.php?id=341880><b>The Curious Case of ...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-19 08:08:08</td>
<td align=center>2022-06-27 16:26:00</td>
<td align=center>2022-06-27 21:25:33</td>
<td align=center>8d 08:17:52</td>
<td align=center>75</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=62><img src="pic/cate/cate_do720p.png" alt="纪录片720p" border=0></a></td>
<td><a href=details.php?id=317457><b>General History of C...</b></a><br />0.00 kB/sec.</td>
<td align=center>3.88 MB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:28:09</td>
<td align=center>2022-06-27 16:26:38</td>
<td align=center>2022-06-27 21:25:31</td>
<td align=center>8d 22:58:29</td>
<td align=center>368</td>
<td align=center>1</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=58><img src="pic/cate/cate_anime.png" alt="高清动漫" border=0></a></td>
<td><a href=details.php?id=425037><b>Concrete Revolutio C...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-19 08:08:08</td>
<td align=center>2022-06-27 16:23:27</td>
<td align=center>2022-06-27 21:25:31</td>
<td align=center>8d 08:15:19</td>
<td align=center>1</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=90><img src="pic/cate/cate_dlb.png" alt="华语剧包" border=0></a></td>
<td><a href=details.php?id=345301><b>New Legend Of Chu Li...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-21 22:52:15</td>
<td align=center>2022-06-27 16:22:52</td>
<td align=center>2022-06-27 21:25:31</td>
<td align=center>5d 17:30:37</td>
<td align=center>3</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=63><img src="pic/cate/cate_do1080p.png" alt="纪录片1080i/p" border=0></a></td>
<td><a href=details.php?id=412079><b>The Social Dilemma 2...</b></a><br />0.00 kB/sec.</td>
<td align=center>128.10 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 16:47:02</td>
<td align=center>2022-06-27 16:25:09</td>
<td align=center>2022-06-27 21:25:27</td>
<td align=center>8d 23:38:07</td>
<td align=center>34</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=58><img src="pic/cate/cate_anime.png" alt="高清动漫" border=0></a></td>
<td><a href=details.php?id=359990><b>Death Note 2006 Blu-...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:42:37</td>
<td align=center>2022-06-27 16:26:48</td>
<td align=center>2022-06-27 21:25:27</td>
<td align=center>8d 22:44:11</td>
<td align=center>32</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=58><img src="pic/cate/cate_anime.png" alt="高清动漫" border=0></a></td>
<td><a href=details.php?id=354989><b>Gintama Season1 2006...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-19 08:08:08</td>
<td align=center>2022-06-27 16:24:03</td>
<td align=center>2022-06-27 21:25:27</td>
<td align=center>8d 08:15:55</td>
<td align=center>35</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=90><img src="pic/cate/cate_dlb.png" alt="华语剧包" border=0></a></td>
<td><a href=details.php?id=569454><b>Cross Mountains and ...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:42:37</td>
<td align=center>2022-06-27 16:25:54</td>
<td align=center>2022-06-27 21:25:25</td>
<td align=center>8d 22:43:17</td>
<td align=center>3</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=53><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p" border=0></a></td>
<td><a href=details.php?id=533817><b>The Limehouse Golem ...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:42:37</td>
<td align=center>2022-06-27 16:22:53</td>
<td align=center>2022-06-27 21:25:22</td>
<td align=center>8d 22:40:16</td>
<td align=center>8</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=108><img src="pic/cate/cate_m2160p.png" alt="影视2160p" border=0></a></td>
<td><a href=details.php?id=492425><b>Young Justice Bao 20...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-21 22:52:17</td>
<td align=center>2022-06-27 16:23:25</td>
<td align=center>2022-06-27 21:25:13</td>
<td align=center>5d 17:31:08</td>
<td align=center>11</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=76><img src="pic/cate/cate_dl.png" alt="大陆港台剧720p" border=0></a></td>
<td><a href=details.php?id=261922><b>Empresses in the Pal...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:42:37</td>
<td align=center>2022-06-27 16:26:28</td>
<td align=center>2022-06-27 21:25:09</td>
<td align=center>8d 22:43:51</td>
<td align=center>33</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=90><img src="pic/cate/cate_dlb.png" alt="华语剧包" border=0></a></td>
<td><a href=details.php?id=473845><b>Eightfold Path of th...</b></a><br />0.00 kB/sec.</td>
<td align=center>3.86 MB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-19 08:08:08</td>
<td align=center>2022-06-27 16:21:15</td>
<td align=center>2022-06-27 21:25:04</td>
<td align=center>8d 08:13:07</td>
<td align=center>55</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=53><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p" border=0></a></td>
<td><a href=details.php?id=404743><b>Gattaca 1997 BluRay ...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-21 22:52:15</td>
<td align=center>2022-06-27 16:23:08</td>
<td align=center>2022-06-27 21:25:04</td>
<td align=center>5d 17:30:53</td>
<td align=center>51</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=83><img src="pic/cate/cate_ape.png" alt="无损音乐FLAC&APE" border=0></a></td>
<td><a href=details.php?id=328969><b>豆瓣音乐top250 (...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:42:37</td>
<td align=center>2022-06-27 16:22:24</td>
<td align=center>2022-06-27 21:25:01</td>
<td align=center>8d 22:39:47</td>
<td align=center>92</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=53><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p" border=0></a></td>
<td><a href=details.php?id=320492><b>The Lives of Others ...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-19 08:08:08</td>
<td align=center>2022-06-27 16:25:52</td>
<td align=center>2022-06-27 21:25:01</td>
<td align=center>8d 08:17:44</td>
<td align=center>265</td>
<td align=center>1</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=88><img src="pic/cate/cate_rjb.png" alt="日剧包" border=0></a></td>
<td><a href=details.php?id=398048><b>Nagi no Oitoma 2019 ...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:42:37</td>
<td align=center>2022-06-27 16:24:57</td>
<td align=center>2022-06-27 21:25:01</td>
<td align=center>8d 22:42:20</td>
<td align=center>10</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=99><img src="pic/cate/cate_hjb.png" alt="韩剧包" border=0></a></td>
<td><a href=details.php?id=417112><b>Reply 1988 UHDTV 60f...</b></a><br />0.00 kB/sec.</td>
<td align=center>121.42 MB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:42:37</td>
<td align=center>2022-06-27 16:24:26</td>
<td align=center>2022-06-27 21:24:52</td>
<td align=center>8d 22:41:49</td>
<td align=center>111</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=53><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p" border=0></a></td>
<td><a href=details.php?id=435308><b>The Terminal 2004 Bl...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-21 22:52:16</td>
<td align=center>2022-06-27 16:24:37</td>
<td align=center>2022-06-27 21:24:45</td>
<td align=center>5d 17:32:21</td>
<td align=center>80</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=58><img src="pic/cate/cate_anime.png" alt="高清动漫" border=0></a></td>
<td><a href=details.php?id=428117><b>Kanon 2002+2006 BDRi...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-19 08:08:08</td>
<td align=center>2022-06-27 16:25:54</td>
<td align=center>2022-06-27 21:24:41</td>
<td align=center>8d 08:17:46</td>
<td align=center>8</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=59><img src="pic/cate/cate_mv.png" alt="MV&演唱会" border=0></a></td>
<td><a href=details.php?id=472362><b>Koji Tamaki Chocolat...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:42:37</td>
<td align=center>2022-06-27 16:25:06</td>
<td align=center>2022-06-27 21:24:36</td>
<td align=center>8d 22:42:29</td>
<td align=center>12</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=99><img src="pic/cate/cate_hjb.png" alt="韩剧包" border=0></a></td>
<td><a href=details.php?id=480519><b>The Silent Sea S01 2...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-19 08:08:08</td>
<td align=center>2022-06-27 16:21:11</td>
<td align=center>2022-06-27 21:24:31</td>
<td align=center>8d 08:13:03</td>
<td align=center>63</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=90><img src="pic/cate/cate_dlb.png" alt="华语剧包" border=0></a></td>
<td><a href=details.php?id=356756><b>State of Divinity 19...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:42:37</td>
<td align=center>2022-06-27 16:23:53</td>
<td align=center>2022-06-27 21:24:16</td>
<td align=center>8d 22:41:16</td>
<td align=center>41</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=57><img src="pic/cate/cate_sports.png" alt="高清体育节目" border=0></a></td>
<td><a href=details.php?id=391783><b>Exquisite Lifestyle ...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:42:37</td>
<td align=center>2022-06-27 16:23:45</td>
<td align=center>2022-06-27 21:24:14</td>
<td align=center>8d 22:41:08</td>
<td align=center>10</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=53><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p" border=0></a></td>
<td><a href=details.php?id=413315><b>Pulp Fiction 1994 Bl...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:42:37</td>
<td align=center>2022-06-27 16:25:31</td>
<td align=center>2022-06-27 21:24:13</td>
<td align=center>8d 22:42:54</td>
<td align=center>289</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=99><img src="pic/cate/cate_hjb.png" alt="韩剧包" border=0></a></td>
<td><a href=details.php?id=414235><b>Vagabond S01 2019 Ne...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-19 08:08:08</td>
<td align=center>2022-06-27 16:27:18</td>
<td align=center>2022-06-27 21:24:13</td>
<td align=center>8d 08:19:10</td>
<td align=center>14</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=58><img src="pic/cate/cate_anime.png" alt="高清动漫" border=0></a></td>
<td><a href=details.php?id=355384><b>Gintama Season2 2011...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-19 08:08:08</td>
<td align=center>2022-06-27 16:24:38</td>
<td align=center>2022-06-27 21:24:08</td>
<td align=center>8d 08:16:30</td>
<td align=center>30</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=99><img src="pic/cate/cate_hjb.png" alt="韩剧包" border=0></a></td>
<td><a href=details.php?id=484586><b>Now, We Are Breaking...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-19 08:08:08</td>
<td align=center>2022-06-27 16:26:11</td>
<td align=center>2022-06-27 21:23:57</td>
<td align=center>8d 08:18:03</td>
<td align=center>2</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=53><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p" border=0></a></td>
<td><a href=details.php?id=412533><b>Children of Heaven 1...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-19 08:08:08</td>
<td align=center>2022-06-27 16:22:16</td>
<td align=center>2022-06-27 21:23:54</td>
<td align=center>8d 08:14:08</td>
<td align=center>222</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=90><img src="pic/cate/cate_dlb.png" alt="华语剧包" border=0></a></td>
<td><a href=details.php?id=419298><b>Palace of Desire 200...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 14:11:03</td>
<td align=center>2022-06-27 16:23:01</td>
<td align=center>2022-06-27 21:23:47</td>
<td align=center>9d 02:11:58</td>
<td align=center>11</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=58><img src="pic/cate/cate_anime.png" alt="高清动漫" border=0></a></td>
<td><a href=details.php?id=417203><b>Chihayafuru 3 TV 01-...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-19 08:08:08</td>
<td align=center>2022-06-27 16:22:11</td>
<td align=center>2022-06-27 21:23:46</td>
<td align=center>8d 08:14:03</td>
<td align=center>2</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=53><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p" border=0></a></td>
<td><a href=details.php?id=347148><b>Ashes of Time Redux ...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-19 08:08:08</td>
<td align=center>2022-06-27 16:23:51</td>
<td align=center>2022-06-27 21:23:44</td>
<td align=center>8d 08:15:43</td>
<td align=center>89</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=90><img src="pic/cate/cate_dlb.png" alt="华语剧包" border=0></a></td>
<td><a href=details.php?id=416383><b>War and Beauty 2004 ...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-19 08:08:08</td>
<td align=center>2022-06-27 16:21:34</td>
<td align=center>2022-06-27 21:23:44</td>
<td align=center>8d 08:13:26</td>
<td align=center>7</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=90><img src="pic/cate/cate_dlb.png" alt="华语剧包" border=0></a></td>
<td><a href=details.php?id=424955><b>The Bronze Teeth 200...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:48:21</td>
<td align=center>2022-06-27 16:21:56</td>
<td align=center>2022-06-27 21:23:43</td>
<td align=center>8d 22:33:35</td>
<td align=center>5</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=58><img src="pic/cate/cate_anime.png" alt="高清动漫" border=0></a></td>
<td><a href=details.php?id=389702><b>Steins;Gate 0 BDRip ...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-20 13:39:26</td>
<td align=center>2022-06-27 16:23:00</td>
<td align=center>2022-06-27 21:23:42</td>
<td align=center>7d 02:43:34</td>
<td align=center>10</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=58><img src="pic/cate/cate_anime.png" alt="高清动漫" border=0></a></td>
<td><a href=details.php?id=355714><b>Gintama Season3 2015...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-19 08:08:08</td>
<td align=center>2022-06-27 16:21:25</td>
<td align=center>2022-06-27 21:23:35</td>
<td align=center>8d 08:13:17</td>
<td align=center>30</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=70><img src="pic/cate/cate_us.png" alt="欧美剧1080i/p" border=0></a></td>
<td><a href=details.php?id=408725><b>A Perfect World 1993...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 14:39:22</td>
<td align=center>2022-06-27 16:26:28</td>
<td align=center>2022-06-27 21:23:30</td>
<td align=center>9d 01:47:06</td>
<td align=center>75</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=87><img src="pic/cate/cate_usb.png" alt="欧美剧包" border=0></a></td>
<td><a href=details.php?id=441708><b>Ekaterina 2014~2019 ...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 16:47:05</td>
<td align=center>2022-06-27 16:23:22</td>
<td align=center>2022-06-27 21:23:29</td>
<td align=center>8d 23:36:17</td>
<td align=center>33</td>
<td align=center>6</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=88><img src="pic/cate/cate_rjb.png" alt="日剧包" border=0></a></td>
<td><a href=details.php?id=359217><b>Unnatural 2018 BluRa...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:42:37</td>
<td align=center>2022-06-27 16:24:25</td>
<td align=center>2022-06-27 21:23:24</td>
<td align=center>8d 22:41:48</td>
<td align=center>77</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=53><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p" border=0></a></td>
<td><a href=details.php?id=411141><b>Your Name 2016 BluRa...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 14:39:22</td>
<td align=center>2022-06-27 16:20:35</td>
<td align=center>2022-06-27 21:23:18</td>
<td align=center>9d 01:41:13</td>
<td align=center>230</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=99><img src="pic/cate/cate_hjb.png" alt="韩剧包" border=0></a></td>
<td><a href=details.php?id=367106><b>Welcome To Waikiki S...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:42:37</td>
<td align=center>2022-06-27 16:25:09</td>
<td align=center>2022-06-27 21:23:17</td>
<td align=center>8d 22:42:32</td>
<td align=center>21</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=63><img src="pic/cate/cate_do1080p.png" alt="纪录片1080i/p" border=0></a></td>
<td><a href=details.php?id=409759><b>Learn To Speculate i...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 14:39:22</td>
<td align=center>2022-06-27 16:24:55</td>
<td align=center>2022-06-27 21:23:16</td>
<td align=center>9d 01:45:33</td>
<td align=center>23</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=53><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p" border=0></a></td>
<td><a href=details.php?id=408379><b>The Bucket List 2007...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 14:39:22</td>
<td align=center>2022-06-27 16:22:49</td>
<td align=center>2022-06-27 21:23:09</td>
<td align=center>9d 01:43:27</td>
<td align=center>75</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=58><img src="pic/cate/cate_anime.png" alt="高清动漫" border=0></a></td>
<td><a href=details.php?id=490819><b>Kaleido Star TV 01-5...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:42:37</td>
<td align=center>2022-06-27 16:22:43</td>
<td align=center>2022-06-27 21:23:06</td>
<td align=center>8d 22:40:06</td>
<td align=center>1</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=53><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p" border=0></a></td>
<td><a href=details.php?id=413633><b>Departures 2008 BluR...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 14:39:22</td>
<td align=center>2022-06-27 16:22:03</td>
<td align=center>2022-06-27 21:23:06</td>
<td align=center>9d 01:42:41</td>
<td align=center>81</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=58><img src="pic/cate/cate_anime.png" alt="高清动漫" border=0></a></td>
<td><a href=details.php?id=328786><b>Kokoro Connect TV 1-...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:42:37</td>
<td align=center>2022-06-27 16:22:12</td>
<td align=center>2022-06-27 21:22:56</td>
<td align=center>8d 22:39:35</td>
<td align=center>9</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=90><img src="pic/cate/cate_dlb.png" alt="华语剧包" border=0></a></td>
<td><a href=details.php?id=473810><b>Return Of The Condor...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-19 08:08:08</td>
<td align=center>2022-06-27 16:22:21</td>
<td align=center>2022-06-27 21:22:49</td>
<td align=center>8d 08:14:13</td>
<td align=center>41</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=58><img src="pic/cate/cate_anime.png" alt="高清动漫" border=0></a></td>
<td><a href=details.php?id=326963><b>Fullmetal Alchemist ...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 15:16:35</td>
<td align=center>2022-06-27 16:22:05</td>
<td align=center>2022-06-27 21:22:47</td>
<td align=center>9d 01:05:30</td>
<td align=center>43</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=53><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p" border=0></a></td>
<td><a href=details.php?id=412618><b>Jagten AKA The Hunt ...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:42:37</td>
<td align=center>2022-06-27 16:22:18</td>
<td align=center>2022-06-27 21:22:42</td>
<td align=center>8d 22:39:41</td>
<td align=center>91</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=87><img src="pic/cate/cate_usb.png" alt="欧美剧包" border=0></a></td>
<td><a href=details.php?id=534518><b>Why Didn‘t They As...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:42:37</td>
<td align=center>2022-06-27 16:22:56</td>
<td align=center>2022-06-27 21:22:42</td>
<td align=center>8d 22:40:19</td>
<td align=center>17</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=88><img src="pic/cate/cate_rjb.png" alt="日剧包" border=0></a></td>
<td><a href=details.php?id=533947><b>Seinaru Kaibutsutach...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:42:37</td>
<td align=center>2022-06-27 16:25:34</td>
<td align=center>2022-06-27 21:22:41</td>
<td align=center>8d 22:42:57</td>
<td align=center>3</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=62><img src="pic/cate/cate_do720p.png" alt="纪录片720p" border=0></a></td>
<td><a href=details.php?id=509678><b>The Gate of Heavenly...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-20 13:39:27</td>
<td align=center>2022-06-27 16:22:15</td>
<td align=center>2022-06-27 21:22:33</td>
<td align=center>7d 02:42:48</td>
<td align=center>25</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=88><img src="pic/cate/cate_rjb.png" alt="日剧包" border=0></a></td>
<td><a href=details.php?id=522471><b>Mystery to Lunakare ...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-19 08:08:08</td>
<td align=center>2022-06-27 16:22:01</td>
<td align=center>2022-06-27 21:22:24</td>
<td align=center>8d 08:13:53</td>
<td align=center>19</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=59><img src="pic/cate/cate_mv.png" alt="MV&演唱会" border=0></a></td>
<td><a href=details.php?id=543512><b>Sammi Touch Mi 2 Liv...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-21 22:52:17</td>
<td align=center>2022-06-27 16:24:38</td>
<td align=center>2022-06-27 21:22:23</td>
<td align=center>5d 17:32:21</td>
<td align=center>11</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=108><img src="pic/cate/cate_m2160p.png" alt="影视2160p" border=0></a></td>
<td><a href=details.php?id=557040><b>A Year Without a Job...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:42:37</td>
<td align=center>2022-06-27 16:23:33</td>
<td align=center>2022-06-27 21:22:19</td>
<td align=center>8d 22:40:56</td>
<td align=center>2</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=62><img src="pic/cate/cate_do720p.png" alt="纪录片720p" border=0></a></td>
<td><a href=details.php?id=25176><b><font color=#0000FF>National Geographic ...</font></b></a><br />0.00 kB/sec.</td>
<td align=center>393.28 MB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-19 08:08:08</td>
<td align=center>2022-06-27 16:23:04</td>
<td align=center>2022-06-27 21:22:18</td>
<td align=center>8d 08:14:56</td>
<td align=center>273</td>
<td align=center>1</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=109><img src="pic/cate/cate_m_uhd.png" alt="UHD原盘" border=0></a></td>
<td><a href=details.php?id=550594><b>Uncharted 2022 2160p...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:42:37</td>
<td align=center>2022-06-27 16:27:28</td>
<td align=center>2022-06-27 21:22:13</td>
<td align=center>8d 22:44:51</td>
<td align=center>50</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=53><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p" border=0></a></td>
<td><a href=details.php?id=344097><b>Once A Thief 1991 Bl...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-19 08:08:08</td>
<td align=center>2022-06-27 16:24:59</td>
<td align=center>2022-06-27 21:22:07</td>
<td align=center>8d 08:16:51</td>
<td align=center>74</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=88><img src="pic/cate/cate_rjb.png" alt="日剧包" border=0></a></td>
<td><a href=details.php?id=441561><b>The Naked Director S...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-19 08:08:08</td>
<td align=center>2022-06-27 16:26:20</td>
<td align=center>2022-06-27 21:22:06</td>
<td align=center>8d 08:18:12</td>
<td align=center>73</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=53><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p" border=0></a></td>
<td><a href=details.php?id=412447><b>Memento 2000 BluRay ...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-19 08:08:08</td>
<td align=center>2022-06-27 16:25:51</td>
<td align=center>2022-06-27 21:22:06</td>
<td align=center>8d 08:17:43</td>
<td align=center>277</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=88><img src="pic/cate/cate_rjb.png" alt="日剧包" border=0></a></td>
<td><a href=details.php?id=517359><b>Tsuma Shougakusei ni...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:28:09</td>
<td align=center>2022-06-27 16:24:13</td>
<td align=center>2022-06-27 21:21:57</td>
<td align=center>8d 22:56:04</td>
<td align=center>18</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=53><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p" border=0></a></td>
<td><a href=details.php?id=412443><b>The Pianist 2002 Blu...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:42:37</td>
<td align=center>2022-06-27 16:25:36</td>
<td align=center>2022-06-27 21:21:55</td>
<td align=center>8d 22:42:59</td>
<td align=center>254</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=58><img src="pic/cate/cate_anime.png" alt="高清动漫" border=0></a></td>
<td><a href=details.php?id=396040><b>Fate/Zero TV 01-25+R...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-21 22:52:16</td>
<td align=center>2022-06-27 16:22:07</td>
<td align=center>2022-06-27 21:21:53</td>
<td align=center>5d 17:29:51</td>
<td align=center>17</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=58><img src="pic/cate/cate_anime.png" alt="高清动漫" border=0></a></td>
<td><a href=details.php?id=436635><b>Mahouka Koukou no Re...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-19 08:08:08</td>
<td align=center>2022-06-27 16:25:57</td>
<td align=center>2022-06-27 21:21:52</td>
<td align=center>8d 08:17:49</td>
<td align=center>11</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=108><img src="pic/cate/cate_m2160p.png" alt="影视2160p" border=0></a></td>
<td><a href=details.php?id=548014><b>Zhao Jiadi S01 2022 ...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-21 22:52:15</td>
<td align=center>2022-06-27 16:21:25</td>
<td align=center>2022-06-27 21:21:41</td>
<td align=center>5d 17:29:10</td>
<td align=center>12</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=53><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p" border=0></a></td>
<td><a href=details.php?id=412551><b>How to Train Your Dr...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-19 08:08:08</td>
<td align=center>2022-06-27 16:22:37</td>
<td align=center>2022-06-27 21:21:36</td>
<td align=center>8d 08:14:29</td>
<td align=center>226</td>
<td align=center>1</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=58><img src="pic/cate/cate_anime.png" alt="高清动漫" border=0></a></td>
<td><a href=details.php?id=396061><b>Samurai Champloo TV ...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:42:37</td>
<td align=center>2022-06-27 16:24:31</td>
<td align=center>2022-06-27 21:21:36</td>
<td align=center>8d 22:41:54</td>
<td align=center>21</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=90><img src="pic/cate/cate_dlb.png" alt="华语剧包" border=0></a></td>
<td><a href=details.php?id=406039><b>The Bad Kids 2020 WE...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 14:39:22</td>
<td align=center>2022-06-27 16:23:59</td>
<td align=center>2022-06-27 21:21:35</td>
<td align=center>9d 01:44:37</td>
<td align=center>132</td>
<td align=center>2</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=53><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p" border=0></a></td>
<td><a href=details.php?id=387300><b>A Brighter Summer Da...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:42:37</td>
<td align=center>2022-06-27 16:21:46</td>
<td align=center>2022-06-27 21:21:35</td>
<td align=center>8d 22:39:09</td>
<td align=center>89</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=58><img src="pic/cate/cate_anime.png" alt="高清动漫" border=0></a></td>
<td><a href=details.php?id=328657><b>AIR TV01-12+SP Fin 2...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-19 08:08:08</td>
<td align=center>2022-06-27 16:22:53</td>
<td align=center>2022-06-27 21:21:14</td>
<td align=center>8d 08:14:45</td>
<td align=center>12</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=88><img src="pic/cate/cate_rjb.png" alt="日剧包" border=0></a></td>
<td><a href=details.php?id=554960><b>Jiko Keisatsu 2019 A...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-19 08:08:08</td>
<td align=center>2022-06-27 16:27:02</td>
<td align=center>2022-06-27 21:21:13</td>
<td align=center>8d 08:18:54</td>
<td align=center>8</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=108><img src="pic/cate/cate_m2160p.png" alt="影视2160p" border=0></a></td>
<td><a href=details.php?id=404891><b>Marvel Cinematic Uni...</b></a><br />0.00 kB/sec.</td>
<td align=center>30.42 MB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 14:42:09</td>
<td align=center>2022-06-27 16:22:53</td>
<td align=center>2022-06-27 21:21:13</td>
<td align=center>9d 01:40:44</td>
<td align=center>137</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=99><img src="pic/cate/cate_hjb.png" alt="韩剧包" border=0></a></td>
<td><a href=details.php?id=398504><b>Crash Landing on You...</b></a><br />0.00 kB/sec.</td>
<td align=center>114.51 MB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 14:42:54</td>
<td align=center>2022-06-27 16:22:47</td>
<td align=center>2022-06-27 21:21:10</td>
<td align=center>9d 01:39:53</td>
<td align=center>22</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=83><img src="pic/cate/cate_ape.png" alt="无损音乐FLAC&APE" border=0></a></td>
<td><a href=details.php?id=442159><b>群星 - 有生之�...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:42:37</td>
<td align=center>2022-06-27 16:21:31</td>
<td align=center>2022-06-27 21:21:10</td>
<td align=center>8d 22:38:54</td>
<td align=center>65</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=53><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p" border=0></a></td>
<td><a href=details.php?id=375274><b>Confessions 2010 Blu...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:42:37</td>
<td align=center>2022-06-27 16:21:57</td>
<td align=center>2022-06-27 21:21:10</td>
<td align=center>8d 22:39:20</td>
<td align=center>71</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=53><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p" border=0></a></td>
<td><a href=details.php?id=413388><b>Up 2009 BluRay 1080p...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-19 08:08:08</td>
<td align=center>2022-06-27 16:25:04</td>
<td align=center>2022-06-27 21:21:09</td>
<td align=center>8d 08:16:56</td>
<td align=center>240</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=53><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p" border=0></a></td>
<td><a href=details.php?id=343896><b>New Dragon Inn 1992 ...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-19 08:08:08</td>
<td align=center>2022-06-27 16:25:55</td>
<td align=center>2022-06-27 21:21:08</td>
<td align=center>8d 08:17:47</td>
<td align=center>73</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=63><img src="pic/cate/cate_do1080p.png" alt="纪录片1080i/p" border=0></a></td>
<td><a href=details.php?id=382100><b>Smithsonian Air Warr...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 14:39:22</td>
<td align=center>2022-06-27 16:25:33</td>
<td align=center>2022-06-27 21:20:59</td>
<td align=center>9d 01:46:11</td>
<td align=center>16</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=87><img src="pic/cate/cate_usb.png" alt="欧美剧包" border=0></a></td>
<td><a href=details.php?id=478539><b>Westworld S01-S03 10...</b></a><br />0.00 kB/sec.</td>
<td align=center>368.29 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-19 08:08:08</td>
<td align=center>2022-06-27 16:22:01</td>
<td align=center>2022-06-27 21:20:55</td>
<td align=center>8d 08:13:53</td>
<td align=center>226</td>
<td align=center>5</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=99><img src="pic/cate/cate_hjb.png" alt="韩剧包" border=0></a></td>
<td><a href=details.php?id=570498><b>You Raise Me Up Comp...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-19 08:08:08</td>
<td align=center>2022-06-27 16:25:51</td>
<td align=center>2022-06-27 21:20:54</td>
<td align=center>8d 08:17:43</td>
<td align=center>5</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=108><img src="pic/cate/cate_m2160p.png" alt="影视2160p" border=0></a></td>
<td><a href=details.php?id=413702><b>The Fast And The Fur...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 16:47:02</td>
<td align=center>2022-06-27 16:20:41</td>
<td align=center>2022-06-27 21:20:52</td>
<td align=center>8d 23:33:39</td>
<td align=center>39</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=90><img src="pic/cate/cate_dlb.png" alt="华语剧包" border=0></a></td>
<td><a href=details.php?id=394030><b>Four Great Classical...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:42:37</td>
<td align=center>2022-06-27 16:24:30</td>
<td align=center>2022-06-27 21:20:52</td>
<td align=center>8d 22:41:53</td>
<td align=center>300</td>
<td align=center>4</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=58><img src="pic/cate/cate_anime.png" alt="高清动漫" border=0></a></td>
<td><a href=details.php?id=417442><b>Planetes 2003 v2 108...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:42:37</td>
<td align=center>2022-06-27 16:21:25</td>
<td align=center>2022-06-27 21:20:52</td>
<td align=center>8d 22:38:48</td>
<td align=center>13</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=58><img src="pic/cate/cate_anime.png" alt="高清动漫" border=0></a></td>
<td><a href=details.php?id=247587><b>Steins Gate 01-25Fin...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:28:09</td>
<td align=center>2022-06-27 16:21:41</td>
<td align=center>2022-06-27 21:20:35</td>
<td align=center>8d 22:53:32</td>
<td align=center>16</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=63><img src="pic/cate/cate_do1080p.png" alt="纪录片1080i/p" border=0></a></td>
<td><a href=details.php?id=557031><b>Rust Valley Restorer...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-19 08:08:08</td>
<td align=center>2022-06-27 16:25:52</td>
<td align=center>2022-06-27 21:20:34</td>
<td align=center>8d 08:17:44</td>
<td align=center>2</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=58><img src="pic/cate/cate_anime.png" alt="高清动漫" border=0></a></td>
<td><a href=details.php?id=366698><b>Fullmetal Panic! Inv...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:42:37</td>
<td align=center>2022-06-27 16:22:27</td>
<td align=center>2022-06-27 21:20:32</td>
<td align=center>8d 22:39:50</td>
<td align=center>7</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=90><img src="pic/cate/cate_dlb.png" alt="华语剧包" border=0></a></td>
<td><a href=details.php?id=477191><b>Breakout 2021 2160p ...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-19 08:08:08</td>
<td align=center>2022-06-27 16:26:43</td>
<td align=center>2022-06-27 21:20:32</td>
<td align=center>8d 08:18:35</td>
<td align=center>21</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=53><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p" border=0></a></td>
<td><a href=details.php?id=413194><b>Heidi 2015 BluRay 10...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-20 13:39:26</td>
<td align=center>2022-06-27 16:25:27</td>
<td align=center>2022-06-27 21:20:31</td>
<td align=center>7d 02:46:01</td>
<td align=center>92</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=88><img src="pic/cate/cate_rjb.png" alt="日剧包" border=0></a></td>
<td><a href=details.php?id=502591><b>Shinhannin Flag 2021...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:28:09</td>
<td align=center>2022-06-27 16:22:18</td>
<td align=center>2022-06-27 21:20:28</td>
<td align=center>8d 22:54:09</td>
<td align=center>11</td>
<td align=center>1</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=53><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p" border=0></a></td>
<td><a href=details.php?id=430208><b>Dying to Survive 201...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-19 08:08:08</td>
<td align=center>2022-06-27 16:22:53</td>
<td align=center>2022-06-27 21:20:26</td>
<td align=center>8d 08:14:45</td>
<td align=center>63</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=108><img src="pic/cate/cate_m2160p.png" alt="影视2160p" border=0></a></td>
<td><a href=details.php?id=571801><b>CCTV4K Jun Wu Ling J...</b></a><br />3.65 MB/sec.</td>
<td align=center>4.09 GB</td>
<td align=center>6.48 GB</td>
<td align=center>2022-06-27 19:50:07</td>
<td align=center>2022-06-27 20:20:25</td>
<td align=center>2022-06-27 21:20:25</td>
<td align=center>30:18</td>
<td align=center>167</td>
<td align=center>12</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=90><img src="pic/cate/cate_dlb.png" alt="华语剧包" border=0></a></td>
<td><a href=details.php?id=417448><b>Shao Nian Bao Qing T...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-19 08:08:08</td>
<td align=center>2022-06-27 16:25:16</td>
<td align=center>2022-06-27 21:20:24</td>
<td align=center>8d 08:17:08</td>
<td align=center>7</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=58><img src="pic/cate/cate_anime.png" alt="高清动漫" border=0></a></td>
<td><a href=details.php?id=335763><b>Shouwa Genroku Rakug...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-21 22:52:15</td>
<td align=center>2022-06-27 16:21:54</td>
<td align=center>2022-06-27 21:20:08</td>
<td align=center>5d 17:29:39</td>
<td align=center>2</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=58><img src="pic/cate/cate_anime.png" alt="高清动漫" border=0></a></td>
<td><a href=details.php?id=328010><b>Ghost in the Shell�...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 14:42:00</td>
<td align=center>2022-06-27 16:23:06</td>
<td align=center>2022-06-27 21:20:03</td>
<td align=center>9d 01:41:06</td>
<td align=center>33</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=58><img src="pic/cate/cate_anime.png" alt="高清动漫" border=0></a></td>
<td><a href=details.php?id=359597><b>Mahou Tsukai no Yome...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-19 08:08:08</td>
<td align=center>2022-06-27 16:24:51</td>
<td align=center>2022-06-27 21:20:02</td>
<td align=center>8d 08:16:43</td>
<td align=center>1</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=62><img src="pic/cate/cate_do720p.png" alt="纪录片720p" border=0></a></td>
<td><a href=details.php?id=25179><b><font color=#0000FF>National Geographic ...</font></b></a><br />0.00 kB/sec.</td>
<td align=center>517.65 MB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 14:39:22</td>
<td align=center>2022-06-27 16:21:01</td>
<td align=center>2022-06-27 21:19:54</td>
<td align=center>9d 01:41:39</td>
<td align=center>234</td>
<td align=center>2</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=88><img src="pic/cate/cate_rjb.png" alt="日剧包" border=0></a></td>
<td><a href=details.php?id=485699><b>Kingyo Tsuma 2022 Ne...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-19 08:08:08</td>
<td align=center>2022-06-27 16:24:04</td>
<td align=center>2022-06-27 21:19:46</td>
<td align=center>8d 08:15:56</td>
<td align=center>42</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=99><img src="pic/cate/cate_hjb.png" alt="韩剧包" border=0></a></td>
<td><a href=details.php?id=480015><b>One Ordinary Day S01...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:28:09</td>
<td align=center>2022-06-27 16:26:10</td>
<td align=center>2022-06-27 21:19:43</td>
<td align=center>8d 22:58:01</td>
<td align=center>25</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=99><img src="pic/cate/cate_hjb.png" alt="韩剧包" border=0></a></td>
<td><a href=details.php?id=478263><b>Work Later Drink Now...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-19 08:08:08</td>
<td align=center>2022-06-27 16:23:54</td>
<td align=center>2022-06-27 21:19:37</td>
<td align=center>8d 08:15:46</td>
<td align=center>44</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=90><img src="pic/cate/cate_dlb.png" alt="华语剧包" border=0></a></td>
<td><a href=details.php?id=560749><b>Jade Gods Of Honour ...</b></a><br />0.00 kB/sec.</td>
<td align=center>240.53 MB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-21 22:52:18</td>
<td align=center>2022-06-27 16:21:31</td>
<td align=center>2022-06-27 21:19:36</td>
<td align=center>5d 17:29:13</td>
<td align=center>1</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=53><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p" border=0></a></td>
<td><a href=details.php?id=370161><b>The Great Buddha 201...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-19 08:08:08</td>
<td align=center>2022-06-27 16:22:52</td>
<td align=center>2022-06-27 21:19:21</td>
<td align=center>8d 08:14:44</td>
<td align=center>75</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=108><img src="pic/cate/cate_m2160p.png" alt="影视2160p" border=0></a></td>
<td><a href=details.php?id=492512><b>Young Justice Bao 20...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-19 08:08:08</td>
<td align=center>2022-06-27 16:23:43</td>
<td align=center>2022-06-27 21:19:18</td>
<td align=center>8d 08:15:35</td>
<td align=center>23</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=99><img src="pic/cate/cate_hjb.png" alt="韩剧包" border=0></a></td>
<td><a href=details.php?id=484047><b>All of Us Are Dead S...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:28:09</td>
<td align=center>2022-06-27 16:23:26</td>
<td align=center>2022-06-27 21:19:08</td>
<td align=center>8d 22:55:17</td>
<td align=center>28</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=58><img src="pic/cate/cate_anime.png" alt="高清动漫" border=0></a></td>
<td><a href=details.php?id=365233><b>Hachimitsu to Clover...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:42:37</td>
<td align=center>2022-06-27 16:24:19</td>
<td align=center>2022-06-27 21:19:07</td>
<td align=center>8d 22:41:42</td>
<td align=center>6</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=87><img src="pic/cate/cate_usb.png" alt="欧美剧包" border=0></a></td>
<td><a href=details.php?id=362401><b>Pride and Prejudice ...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:28:10</td>
<td align=center>2022-06-27 16:22:57</td>
<td align=center>2022-06-27 21:18:40</td>
<td align=center>8d 22:54:47</td>
<td align=center>45</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=53><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p" border=0></a></td>
<td><a href=details.php?id=413424><b>Before Midnight 2013...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 14:39:22</td>
<td align=center>2022-06-27 16:25:18</td>
<td align=center>2022-06-27 21:18:33</td>
<td align=center>9d 01:45:56</td>
<td align=center>57</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=108><img src="pic/cate/cate_m2160p.png" alt="影视2160p" border=0></a></td>
<td><a href=details.php?id=544213><b>The Grand Mansion Ga...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-19 08:08:08</td>
<td align=center>2022-06-27 16:22:58</td>
<td align=center>2022-06-27 21:18:32</td>
<td align=center>8d 08:14:50</td>
<td align=center>8</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=53><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p" border=0></a></td>
<td><a href=details.php?id=484189><b>The Martian 2015 Ext...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-19 08:08:08</td>
<td align=center>2022-06-27 16:25:55</td>
<td align=center>2022-06-27 21:18:21</td>
<td align=center>8d 08:17:47</td>
<td align=center>54</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=90><img src="pic/cate/cate_dlb.png" alt="华语剧包" border=0></a></td>
<td><a href=details.php?id=392635><b>Soldiers Sortie 2006...</b></a><br />0.00 kB/sec.</td>
<td align=center>64.05 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:42:37</td>
<td align=center>2022-06-27 16:21:28</td>
<td align=center>2022-06-27 21:18:20</td>
<td align=center>8d 22:38:51</td>
<td align=center>51</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=53><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p" border=0></a></td>
<td><a href=details.php?id=413706><b>Little Forest Summer...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-21 22:52:17</td>
<td align=center>2022-06-27 16:25:22</td>
<td align=center>2022-06-27 21:18:16</td>
<td align=center>5d 17:33:05</td>
<td align=center>56</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=87><img src="pic/cate/cate_usb.png" alt="欧美剧包" border=0></a></td>
<td><a href=details.php?id=487670><b>My Brilliant Friend ...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:28:09</td>
<td align=center>2022-06-27 16:20:57</td>
<td align=center>2022-06-27 21:18:05</td>
<td align=center>8d 22:52:48</td>
<td align=center>36</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=52><img src="pic/cate/cate_m720p.png" alt="电影720p" border=0></a></td>
<td><a href=details.php?id=403471><b>Les Miserables 25th ...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-19 08:08:08</td>
<td align=center>2022-06-27 16:23:53</td>
<td align=center>2022-06-27 21:18:00</td>
<td align=center>8d 08:15:45</td>
<td align=center>2</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=88><img src="pic/cate/cate_rjb.png" alt="日剧包" border=0></a></td>
<td><a href=details.php?id=385437><b>The Naked Director S...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 14:11:02</td>
<td align=center>2022-06-27 16:21:34</td>
<td align=center>2022-06-27 21:17:54</td>
<td align=center>9d 02:10:32</td>
<td align=center>28</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=58><img src="pic/cate/cate_anime.png" alt="高清动漫" border=0></a></td>
<td><a href=details.php?id=403402><b>Neon Genesis Evangel...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:42:37</td>
<td align=center>2022-06-27 16:24:37</td>
<td align=center>2022-06-27 21:17:47</td>
<td align=center>8d 22:42:00</td>
<td align=center>19</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=90><img src="pic/cate/cate_dlb.png" alt="华语剧包" border=0></a></td>
<td><a href=details.php?id=390533><b><font color=#0000FF>JSTV Drawing Sword C...</font></b></a><br />0.00 kB/sec.</td>
<td align=center>50.29 MB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:42:37</td>
<td align=center>2022-06-27 16:20:59</td>
<td align=center>2022-06-27 21:17:46</td>
<td align=center>8d 22:38:22</td>
<td align=center>61</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=88><img src="pic/cate/cate_rjb.png" alt="日剧包" border=0></a></td>
<td><a href=details.php?id=417531><b>17{@}3 about a sex 2...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:42:37</td>
<td align=center>2022-06-27 16:21:31</td>
<td align=center>2022-06-27 21:17:12</td>
<td align=center>8d 22:38:54</td>
<td align=center>45</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=90><img src="pic/cate/cate_dlb.png" alt="华语剧包" border=0></a></td>
<td><a href=details.php?id=554125><b>I Am A Super Star 20...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:42:37</td>
<td align=center>2022-06-27 16:21:34</td>
<td align=center>2022-06-27 21:16:55</td>
<td align=center>8d 22:38:57</td>
<td align=center>7</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=59><img src="pic/cate/cate_mv.png" alt="MV&演唱会" border=0></a></td>
<td><a href=details.php?id=371424><b>Taylor Swift - Reput...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:42:38</td>
<td align=center>2022-06-27 16:22:57</td>
<td align=center>2022-06-27 21:16:50</td>
<td align=center>8d 22:40:19</td>
<td align=center>25</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=58><img src="pic/cate/cate_anime.png" alt="高清动漫" border=0></a></td>
<td><a href=details.php?id=571316><b>Studio Ghibli Collec...</b></a><br />0.00 kB/sec.</td>
<td align=center>192.15 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-24 23:06:42</td>
<td align=center>2022-06-27 16:21:31</td>
<td align=center>2022-06-27 21:16:23</td>
<td align=center>2d 17:14:49</td>
<td align=center>102</td>
<td align=center>2</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=87><img src="pic/cate/cate_usb.png" alt="欧美剧包" border=0></a></td>
<td><a href=details.php?id=403822><b>My Brilliant Friend ...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-19 08:08:08</td>
<td align=center>2022-06-27 16:21:28</td>
<td align=center>2022-06-27 21:16:20</td>
<td align=center>8d 08:13:20</td>
<td align=center>34</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=53><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p" border=0></a></td>
<td><a href=details.php?id=412698><b>Edward Scissorhands ...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 14:10:58</td>
<td align=center>2022-06-27 16:22:56</td>
<td align=center>2022-06-27 21:15:19</td>
<td align=center>9d 02:11:58</td>
<td align=center>63</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=99><img src="pic/cate/cate_hjb.png" alt="韩剧包" border=0></a></td>
<td><a href=details.php?id=394673><b>Guardian The Lonely ...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:42:37</td>
<td align=center>2022-06-27 16:21:48</td>
<td align=center>2022-06-27 21:15:13</td>
<td align=center>8d 22:39:11</td>
<td align=center>60</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=63><img src="pic/cate/cate_do1080p.png" alt="纪录片1080i/p" border=0></a></td>
<td><a href=details.php?id=555732><b>Voices of Liberation...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:28:09</td>
<td align=center>2022-06-27 16:22:45</td>
<td align=center>2022-06-27 21:14:43</td>
<td align=center>8d 22:54:36</td>
<td align=center>4</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=58><img src="pic/cate/cate_anime.png" alt="高清动漫" border=0></a></td>
<td><a href=details.php?id=321998><b>Death Note BDrip 192...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 17:42:37</td>
<td align=center>2022-06-27 16:21:35</td>
<td align=center>2022-06-27 21:14:30</td>
<td align=center>8d 22:38:58</td>
<td align=center>29</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=90><img src="pic/cate/cate_dlb.png" alt="华语剧包" border=0></a></td>
<td><a href=details.php?id=471479><b>Zheng Fu 2003 WEB-DL...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-18 14:39:22</td>
<td align=center>2022-06-27 16:21:36</td>
<td align=center>2022-06-27 21:14:28</td>
<td align=center>9d 01:42:14</td>
<td align=center>37</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=90><img src="pic/cate/cate_dlb.png" alt="华语剧包" border=0></a></td>
<td><a href=details.php?id=452017><b>The Greed of Man 199...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-19 08:08:08</td>
<td align=center>2022-06-27 16:22:06</td>
<td align=center>2022-06-27 21:12:59</td>
<td align=center>8d 08:13:58</td>
<td align=center>17</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=53><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p" border=0></a></td>
<td><a href=details.php?id=411831><b>Joker 2019 BluRay 10...</b></a><br />0.00 kB/sec.</td>
<td align=center>0.00 kB</td>
<td align=center>0.00 kB</td>
<td align=center>2022-06-19 08:08:08</td>
<td align=center>2022-06-27 16:23:14</td>
<td align=center>2022-06-27 21:11:18</td>
<td align=center>8d 08:15:06</td>
<td align=center>77</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=63><img src="pic/cate/cate_do1080p.png" alt="纪录片1080i/p" border=0></a></td>
<td><a href=details.php?id=571793><b>The Rocking Sky 2015...</b></a><br />1.78 MB/sec.</td>
<td align=center>432.78 MB</td>
<td align=center>3.44 GB</td>
<td align=center>2022-06-27 19:25:09</td>
<td align=center>2022-06-27 19:58:04</td>
<td align=center>2022-06-27 19:59:05</td>
<td align=center>32:55</td>
<td align=center>122</td>
<td align=center>7</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=83><img src="pic/cate/cate_ape.png" alt="无损音乐FLAC&APE" border=0></a></td>
<td><a href=details.php?id=571647><b>【自购禁转】�...</b></a><br />348.61 kB/sec.</td>
<td align=center>380.00 MB</td>
<td align=center>2.75 GB</td>
<td align=center>2022-06-26 16:20:15</td>
<td align=center>2022-06-26 18:37:57</td>
<td align=center>2022-06-26 18:39:12</td>
<td align=center>2:17:42</td>
<td align=center>299</td>
<td align=center>5</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=83><img src="pic/cate/cate_ape.png" alt="无损音乐FLAC&APE" border=0></a></td>
<td><a href=details.php?id=571651><b>【自购禁转】�...</b></a><br />332.12 kB/sec.</td>
<td align=center>603.33 MB</td>
<td align=center>2.41 GB</td>
<td align=center>2022-06-26 16:20:06</td>
<td align=center>2022-06-26 18:27:01</td>
<td align=center>2022-06-26 18:27:01</td>
<td align=center>2:06:55</td>
<td align=center>240</td>
<td align=center>2</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=83><img src="pic/cate/cate_ape.png" alt="无损音乐FLAC&APE" border=0></a></td>
<td><a href=details.php?id=571646><b>【自购禁转】�...</b></a><br />327.73 kB/sec.</td>
<td align=center>286.13 MB</td>
<td align=center>2.29 GB</td>
<td align=center>2022-06-26 16:20:17</td>
<td align=center>2022-06-26 18:22:10</td>
<td align=center>2022-06-26 18:23:10</td>
<td align=center>2:01:53</td>
<td align=center>267</td>
<td align=center>4</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=83><img src="pic/cate/cate_ape.png" alt="无损音乐FLAC&APE" border=0></a></td>
<td><a href=details.php?id=571650><b>【自购禁转】�...</b></a><br />340.65 kB/sec.</td>
<td align=center>383.74 MB</td>
<td align=center>2.40 GB</td>
<td align=center>2022-06-26 16:20:08</td>
<td align=center>2022-06-26 18:23:07</td>
<td align=center>2022-06-26 18:23:07</td>
<td align=center>2:02:59</td>
<td align=center>252</td>
<td align=center>7</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=83><img src="pic/cate/cate_ape.png" alt="无损音乐FLAC&APE" border=0></a></td>
<td><a href=details.php?id=571649><b>【自购禁转】�...</b></a><br />229.06 kB/sec.</td>
<td align=center>215.86 MB</td>
<td align=center>1.56 GB</td>
<td align=center>2022-06-26 16:20:12</td>
<td align=center>2022-06-26 18:19:33</td>
<td align=center>2022-06-26 18:19:33</td>
<td align=center>1:59:21</td>
<td align=center>339</td>
<td align=center>3</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=83><img src="pic/cate/cate_ape.png" alt="无损音乐FLAC&APE" border=0></a></td>
<td><a href=details.php?id=571648><b>【自购禁转】�...</b></a><br />294.03 kB/sec.</td>
<td align=center>434.03 MB</td>
<td align=center>1.51 GB</td>
<td align=center>2022-06-26 16:20:13</td>
<td align=center>2022-06-26 17:49:45</td>
<td align=center>2022-06-26 17:51:10</td>
<td align=center>1:29:32</td>
<td align=center>331</td>
<td align=center>5</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=63><img src="pic/cate/cate_do1080p.png" alt="纪录片1080i/p" border=0></a></td>
<td><a href=details.php?id=571626><b>Jade Side By Side Wi...</b></a><br />2.32 MB/sec.</td>
<td align=center>214.89 MB</td>
<td align=center>1.52 GB</td>
<td align=center>2022-06-26 12:05:05</td>
<td align=center>2022-06-26 12:16:18</td>
<td align=center>2022-06-26 12:16:18</td>
<td align=center>11:13</td>
<td align=center>68</td>
<td align=center>1</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=60><img src="pic/cate/cate_drama.png" alt="高清综艺" border=0></a></td>
<td><a href=details.php?id=571624><b>Jade Say No To Drugs...</b></a><br />2.24 MB/sec.</td>
<td align=center>105.32 MB</td>
<td align=center>1.51 GB</td>
<td align=center>2022-06-26 11:45:11</td>
<td align=center>2022-06-26 11:56:45</td>
<td align=center>2022-06-26 11:58:09</td>
<td align=center>11:34</td>
<td align=center>27</td>
<td align=center>1</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=60><img src="pic/cate/cate_drama.png" alt="高清综艺" border=0></a></td>
<td><a href=details.php?id=571602><b>J2 MASA‘s Taste of...</b></a><br />12.71 MB/sec.</td>
<td align=center>1.36 GB</td>
<td align=center>9.89 GB</td>
<td align=center>2022-06-26 09:50:07</td>
<td align=center>2022-06-26 10:03:24</td>
<td align=center>2022-06-26 10:03:24</td>
<td align=center>13:17</td>
<td align=center>66</td>
<td align=center>1</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=88><img src="pic/cate/cate_rjb.png" alt="日剧包" border=0></a></td>
<td><a href=details.php?id=571546><b>Yoshitsune 2005 COMP...</b></a><br />1.70 MB/sec.</td>
<td align=center>9.83 GB</td>
<td align=center>56.97 GB</td>
<td align=center>2022-06-25 19:50:05</td>
<td align=center>2022-06-26 05:20:28</td>
<td align=center>2022-06-26 05:20:28</td>
<td align=center>9:30:23</td>
<td align=center>157</td>
<td align=center>1</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=53><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p" border=0></a></td>
<td><a href=details.php?id=571579><b>Noise 2022 1080p Blu...</b></a><br />8.33 MB/sec.</td>
<td align=center>1.17 GB</td>
<td align=center>9.86 GB</td>
<td align=center>2022-06-26 04:40:03</td>
<td align=center>2022-06-26 05:00:15</td>
<td align=center>2022-06-26 05:00:15</td>
<td align=center>20:12</td>
<td align=center>225</td>
<td align=center>13</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=53><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p" border=0></a></td>
<td><a href=details.php?id=571578><b>Noise 2022 1080p Blu...</b></a><br />5.51 MB/sec.</td>
<td align=center>767.57 MB</td>
<td align=center>5.52 GB</td>
<td align=center>2022-06-26 04:40:03</td>
<td align=center>2022-06-26 04:57:08</td>
<td align=center>2022-06-26 04:57:08</td>
<td align=center>17:05</td>
<td align=center>188</td>
<td align=center>8</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=60><img src="pic/cate/cate_drama.png" alt="高清综艺" border=0></a></td>
<td><a href=details.php?id=571563><b>JSTV The Shning One ...</b></a><br />1.65 MB/sec.</td>
<td align=center>526.43 MB</td>
<td align=center>5.06 GB</td>
<td align=center>2022-06-26 00:05:05</td>
<td align=center>2022-06-26 00:57:28</td>
<td align=center>2022-06-26 00:59:04</td>
<td align=center>52:23</td>
<td align=center>60</td>
<td align=center>1</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=60><img src="pic/cate/cate_drama.png" alt="高清综艺" border=0></a></td>
<td><a href=details.php?id=571564><b>JSTV The Shning One ...</b></a><br />3.14 MB/sec.</td>
<td align=center>504.96 MB</td>
<td align=center>5.10 GB</td>
<td align=center>2022-06-26 00:10:05</td>
<td align=center>2022-06-26 00:37:47</td>
<td align=center>2022-06-26 00:39:08</td>
<td align=center>27:42</td>
<td align=center>58</td>
<td align=center>2</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=60><img src="pic/cate/cate_drama.png" alt="高清综艺" border=0></a></td>
<td><a href=details.php?id=571544><b>CCTV15 Feng Hua Guo ...</b></a><br />1.17 MB/sec.</td>
<td align=center>110.20 MB</td>
<td align=center>1.61 GB</td>
<td align=center>2022-06-25 19:35:08</td>
<td align=center>2022-06-25 19:58:32</td>
<td align=center>2022-06-25 19:58:32</td>
<td align=center>23:24</td>
<td align=center>26</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=60><img src="pic/cate/cate_drama.png" alt="高清综艺" border=0></a></td>
<td><a href=details.php?id=571540><b>CCTV15 Feng Hua Guo ...</b></a><br />3.50 MB/sec.</td>
<td align=center>164.90 MB</td>
<td align=center>1.61 GB</td>
<td align=center>2022-06-25 19:15:07</td>
<td align=center>2022-06-25 19:22:58</td>
<td align=center>2022-06-25 19:24:08</td>
<td align=center>7:51</td>
<td align=center>44</td>
<td align=center>1</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=60><img src="pic/cate/cate_drama.png" alt="高清综艺" border=0></a></td>
<td><a href=details.php?id=571536><b>CCTV15 Min Ge Zhong ...</b></a><br />1.33 MB/sec.</td>
<td align=center>706.04 MB</td>
<td align=center>3.22 GB</td>
<td align=center>2022-06-25 18:25:07</td>
<td align=center>2022-06-25 19:06:19</td>
<td align=center>2022-06-25 19:06:19</td>
<td align=center>41:12</td>
<td align=center>53</td>
<td align=center>1</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=54><img src="pic/cate/cate_mbluray.png" alt="BluRay原盘" border=0></a></td>
<td><a href=details.php?id=571518><b>Parallel Mothers 202...</b></a><br />3.63 MB/sec.</td>
<td align=center>1.60 GB</td>
<td align=center>37.24 GB</td>
<td align=center>2022-06-25 15:50:08</td>
<td align=center>2022-06-25 18:45:12</td>
<td align=center>2022-06-25 18:45:12</td>
<td align=center>2:55:04</td>
<td align=center>290</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=60><img src="pic/cate/cate_drama.png" alt="高清综艺" border=0></a></td>
<td><a href=details.php?id=571535><b>CCTV15 Feng Hua Guo ...</b></a><br />2.21 MB/sec.</td>
<td align=center>509.20 MB</td>
<td align=center>1.61 GB</td>
<td align=center>2022-06-25 18:25:06</td>
<td align=center>2022-06-25 18:37:31</td>
<td align=center>2022-06-25 18:37:31</td>
<td align=center>12:25</td>
<td align=center>41</td>
<td align=center>1</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=60><img src="pic/cate/cate_drama.png" alt="高清综艺" border=0></a></td>
<td><a href=details.php?id=571532><b>J2 Backpack America ...</b></a><br />11.44 MB/sec.</td>
<td align=center>3.91 GB</td>
<td align=center>17.80 GB</td>
<td align=center>2022-06-25 17:55:05</td>
<td align=center>2022-06-25 18:21:38</td>
<td align=center>2022-06-25 18:23:12</td>
<td align=center>26:33</td>
<td align=center>36</td>
<td align=center>1</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=60><img src="pic/cate/cate_drama.png" alt="高清综艺" border=0></a></td>
<td><a href=details.php?id=571525><b>CCTV15 Min Ge Zhong ...</b></a><br />1.71 MB/sec.</td>
<td align=center>649.09 MB</td>
<td align=center>3.22 GB</td>
<td align=center>2022-06-25 17:00:06</td>
<td align=center>2022-06-25 17:32:14</td>
<td align=center>2022-06-25 17:32:14</td>
<td align=center>32:08</td>
<td align=center>51</td>
<td align=center>1</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=60><img src="pic/cate/cate_drama.png" alt="高清综艺" border=0></a></td>
<td><a href=details.php?id=571524><b>CCTV15 Feng Hua Guo ...</b></a><br />2.56 MB/sec.</td>
<td align=center>289.88 MB</td>
<td align=center>1.61 GB</td>
<td align=center>2022-06-25 17:00:08</td>
<td align=center>2022-06-25 17:10:53</td>
<td align=center>2022-06-25 17:12:04</td>
<td align=center>10:45</td>
<td align=center>42</td>
<td align=center>1</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=63><img src="pic/cate/cate_do1080p.png" alt="纪录片1080i/p" border=0></a></td>
<td><a href=details.php?id=571505><b>Jade Bonding With Mo...</b></a><br />11.88 MB/sec.</td>
<td align=center>1.02 GB</td>
<td align=center>8.39 GB</td>
<td align=center>2022-06-25 13:55:15</td>
<td align=center>2022-06-25 14:07:18</td>
<td align=center>2022-06-25 14:07:18</td>
<td align=center>12:03</td>
<td align=center>57</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=90><img src="pic/cate/cate_dlb.png" alt="华语剧包" border=0></a></td>
<td><a href=details.php?id=571473><b>Jade Brutally Young ...</b></a><br />9.77 MB/sec.</td>
<td align=center>11.38 GB</td>
<td align=center>59.80 GB</td>
<td align=center>2022-06-25 08:50:05</td>
<td align=center>2022-06-25 10:34:31</td>
<td align=center>2022-06-25 10:34:31</td>
<td align=center>1:44:26</td>
<td align=center>158</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=54><img src="pic/cate/cate_mbluray.png" alt="BluRay原盘" border=0></a></td>
<td><a href=details.php?id=571448><b>Fortune Favors Lady ...</b></a><br />1.04 MB/sec.</td>
<td align=center>911.65 MB</td>
<td align=center>14.58 GB</td>
<td align=center>2022-06-24 23:50:11</td>
<td align=center>2022-06-25 03:49:01</td>
<td align=center>2022-06-25 03:49:01</td>
<td align=center>3:58:50</td>
<td align=center>291</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=83><img src="pic/cate/cate_ape.png" alt="无损音乐FLAC&APE" border=0></a></td>
<td><a href=details.php?id=571339><b>【PERFECT FLAC】�...</b></a><br />717.21 kB/sec.</td>
<td align=center>13.99 GB</td>
<td align=center>2.71 GB</td>
<td align=center>2022-06-24 01:15:08</td>
<td align=center>2022-06-24 02:21:17</td>
<td align=center>2022-06-24 02:30:03</td>
<td align=center>1:06:09</td>
<td align=center>34</td>
<td align=center>1</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=83><img src="pic/cate/cate_ape.png" alt="无损音乐FLAC&APE" border=0></a></td>
<td><a href=details.php?id=571342><b>【PERFECT FLAC】�...</b></a><br />715.45 kB/sec.</td>
<td align=center>5.13 GB</td>
<td align=center>914.58 MB</td>
<td align=center>2022-06-24 01:15:06</td>
<td align=center>2022-06-24 01:36:55</td>
<td align=center>2022-06-24 01:40:02</td>
<td align=center>21:49</td>
<td align=center>87</td>
<td align=center>1</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=83><img src="pic/cate/cate_ape.png" alt="无损音乐FLAC&APE" border=0></a></td>
<td><a href=details.php?id=571345><b>【PERFECT FLAC】�...</b></a><br />414.39 kB/sec.</td>
<td align=center>2.48 GB</td>
<td align=center>396.58 MB</td>
<td align=center>2022-06-24 01:15:02</td>
<td align=center>2022-06-24 01:31:22</td>
<td align=center>2022-06-24 01:35:13</td>
<td align=center>16:20</td>
<td align=center>183</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=83><img src="pic/cate/cate_ape.png" alt="无损音乐FLAC&APE" border=0></a></td>
<td><a href=details.php?id=571341><b>【PERFECT FLAC】�...</b></a><br />316.15 kB/sec.</td>
<td align=center>2.22 GB</td>
<td align=center>298.55 MB</td>
<td align=center>2022-06-24 01:15:06</td>
<td align=center>2022-06-24 01:31:13</td>
<td align=center>2022-06-24 01:35:11</td>
<td align=center>16:07</td>
<td align=center>82</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=83><img src="pic/cate/cate_ape.png" alt="无损音乐FLAC&APE" border=0></a></td>
<td><a href=details.php?id=571340><b>【PERFECT FLAC】�...</b></a><br />247.79 kB/sec.</td>
<td align=center>1.76 GB</td>
<td align=center>289.65 MB</td>
<td align=center>2022-06-24 01:15:07</td>
<td align=center>2022-06-24 01:35:04</td>
<td align=center>2022-06-24 01:35:04</td>
<td align=center>19:57</td>
<td align=center>30</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=83><img src="pic/cate/cate_ape.png" alt="无损音乐FLAC&APE" border=0></a></td>
<td><a href=details.php?id=571343><b>【PERFECT FLAC】�...</b></a><br />279.10 kB/sec.</td>
<td align=center>1.88 GB</td>
<td align=center>325.98 MB</td>
<td align=center>2022-06-24 01:15:05</td>
<td align=center>2022-06-24 01:35:01</td>
<td align=center>2022-06-24 01:35:01</td>
<td align=center>19:56</td>
<td align=center>43</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=90><img src="pic/cate/cate_dlb.png" alt="华语剧包" border=0></a></td>
<td><a href=details.php?id=571249><b>NBS The Real Heroine...</b></a><br />1.46 MB/sec.</td>
<td align=center>8.22 GB</td>
<td align=center>68.50 GB</td>
<td align=center>2022-06-23 12:10:06</td>
<td align=center>2022-06-24 01:33:28</td>
<td align=center>2022-06-24 01:33:28</td>
<td align=center>13:23:22</td>
<td align=center>248</td>
<td align=center>4</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=83><img src="pic/cate/cate_ape.png" alt="无损音乐FLAC&APE" border=0></a></td>
<td><a href=details.php?id=571344><b>【PERFECT FLAC】�...</b></a><br />362.48 kB/sec.</td>
<td align=center>1.50 GB</td>
<td align=center>262.66 MB</td>
<td align=center>2022-06-24 01:15:03</td>
<td align=center>2022-06-24 01:27:25</td>
<td align=center>2022-06-24 01:30:08</td>
<td align=center>12:22</td>
<td align=center>30</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=83><img src="pic/cate/cate_ape.png" alt="无损音乐FLAC&APE" border=0></a></td>
<td><a href=details.php?id=571346><b>【PERFECT FLAC】�...</b></a><br />351.09 kB/sec.</td>
<td align=center>1.56 GB</td>
<td align=center>254.06 MB</td>
<td align=center>2022-06-24 01:15:02</td>
<td align=center>2022-06-24 01:27:23</td>
<td align=center>2022-06-24 01:30:05</td>
<td align=center>12:21</td>
<td align=center>185</td>
<td align=center>1</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=53><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p" border=0></a></td>
<td><a href=details.php?id=571195><b>CCTV6 Kincsem 2017 1...</b></a><br />3.91 MB/sec.</td>
<td align=center>4.17 GB</td>
<td align=center>6.26 GB</td>
<td align=center>2022-06-22 23:05:09</td>
<td align=center>2022-06-22 23:32:28</td>
<td align=center>2022-06-22 23:39:07</td>
<td align=center>27:19</td>
<td align=center>53</td>
<td align=center>1</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=99><img src="pic/cate/cate_hjb.png" alt="韩剧包" border=0></a></td>
<td><a href=details.php?id=571165><b>J2 Mouse 2021 COMPLE...</b></a><br />3.54 MB/sec.</td>
<td align=center>8.74 GB</td>
<td align=center>45.26 GB</td>
<td align=center>2022-06-22 19:10:06</td>
<td align=center>2022-06-22 22:48:03</td>
<td align=center>2022-06-22 22:48:03</td>
<td align=center>3:37:57</td>
<td align=center>103</td>
<td align=center>2</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=60><img src="pic/cate/cate_drama.png" alt="高清综艺" border=0></a></td>
<td><a href=details.php?id=571177><b>CCTV15 Min Ge Zhong ...</b></a><br />1.61 MB/sec.</td>
<td align=center>462.21 MB</td>
<td align=center>3.22 GB</td>
<td align=center>2022-06-22 21:00:10</td>
<td align=center>2022-06-22 21:34:16</td>
<td align=center>2022-06-22 21:34:16</td>
<td align=center>34:06</td>
<td align=center>37</td>
<td align=center>1</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=60><img src="pic/cate/cate_drama.png" alt="高清综艺" border=0></a></td>
<td><a href=details.php?id=571176><b>CCTV15 Feng Hua Guo ...</b></a><br />2.02 MB/sec.</td>
<td align=center>260.42 MB</td>
<td align=center>1.61 GB</td>
<td align=center>2022-06-22 21:00:12</td>
<td align=center>2022-06-22 21:13:47</td>
<td align=center>2022-06-22 21:15:10</td>
<td align=center>13:35</td>
<td align=center>31</td>
<td align=center>1</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=54><img src="pic/cate/cate_mbluray.png" alt="BluRay原盘" border=0></a></td>
<td><a href=details.php?id=571136><b>99 9 Criminal Lawyer...</b></a><br />2.27 MB/sec.</td>
<td align=center>3.22 GB</td>
<td align=center>39.12 GB</td>
<td align=center>2022-06-22 15:15:07</td>
<td align=center>2022-06-22 20:08:46</td>
<td align=center>2022-06-22 20:10:07</td>
<td align=center>4:53:39</td>
<td align=center>391</td>
<td align=center>1</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=54><img src="pic/cate/cate_mbluray.png" alt="BluRay原盘" border=0></a></td>
<td><a href=details.php?id=571123><b>Fantastic Beasts The...</b></a><br />3.89 MB/sec.</td>
<td align=center>1.93 GB</td>
<td align=center>40.40 GB</td>
<td align=center>2022-06-22 14:25:06</td>
<td align=center>2022-06-22 17:22:25</td>
<td align=center>2022-06-22 17:22:25</td>
<td align=center>2:57:19</td>
<td align=center>406</td>
<td align=center>2</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=60><img src="pic/cate/cate_drama.png" alt="高清综艺" border=0></a></td>
<td><a href=details.php?id=571043><b>ViuTV Know Your Ingr...</b></a><br />1.61 MB/sec.</td>
<td align=center>3.44 GB</td>
<td align=center>23.50 GB</td>
<td align=center>2022-06-21 23:50:06</td>
<td align=center>2022-06-22 03:59:02</td>
<td align=center>2022-06-22 03:59:02</td>
<td align=center>4:08:56</td>
<td align=center>39</td>
<td align=center>1</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=108><img src="pic/cate/cate_m2160p.png" alt="影视2160p" border=0></a></td>
<td><a href=details.php?id=571041><b>Doctor Strange in th...</b></a><br />201.22 kB/sec.</td>
<td align=center>318.47 MB</td>
<td align=center>1.64 GB</td>
<td align=center>2022-06-21 23:46:16</td>
<td align=center>2022-06-22 02:08:59</td>
<td align=center>2022-06-22 02:10:04</td>
<td align=center>2:22:43</td>
<td align=center>1035</td>
<td align=center>1</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=90><img src="pic/cate/cate_dlb.png" alt="华语剧包" border=0></a></td>
<td><a href=details.php?id=570958><b>CCTV Chuan Qi Da Zha...</b></a><br />2.84 MB/sec.</td>
<td align=center>8.82 GB</td>
<td align=center>100.49 GB</td>
<td align=center>2022-06-21 12:40:09</td>
<td align=center>2022-06-21 22:43:09</td>
<td align=center>2022-06-21 22:43:09</td>
<td align=center>10:03:00</td>
<td align=center>208</td>
<td align=center>5</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=60><img src="pic/cate/cate_drama.png" alt="高清综艺" border=0></a></td>
<td><a href=details.php?id=571032><b>JSTV Who‘s Still S...</b></a><br />2.77 MB/sec.</td>
<td align=center>276.08 MB</td>
<td align=center>3.79 GB</td>
<td align=center>2022-06-21 22:15:11</td>
<td align=center>2022-06-21 22:38:31</td>
<td align=center>2022-06-21 22:38:31</td>
<td align=center>23:20</td>
<td align=center>27</td>
<td align=center>1</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=54><img src="pic/cate/cate_mbluray.png" alt="BluRay原盘" border=0></a></td>
<td><a href=details.php?id=571005><b>Police 2020 1080p Bl...</b></a><br />4.06 MB/sec.</td>
<td align=center>7.01 GB</td>
<td align=center>26.84 GB</td>
<td align=center>2022-06-21 20:05:07</td>
<td align=center>2022-06-21 21:57:50</td>
<td align=center>2022-06-21 21:59:05</td>
<td align=center>1:52:43</td>
<td align=center>251</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=88><img src="pic/cate/cate_rjb.png" alt="日剧包" border=0></a></td>
<td><a href=details.php?id=571008><b>J2 凪のお暇 2019...</b></a><br />3.43 MB/sec.</td>
<td align=center>1.65 GB</td>
<td align=center>16.86 GB</td>
<td align=center>2022-06-21 20:15:09</td>
<td align=center>2022-06-21 21:39:08</td>
<td align=center>2022-06-21 21:39:08</td>
<td align=center>1:23:59</td>
<td align=center>84</td>
<td align=center>2</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=90><img src="pic/cate/cate_dlb.png" alt="华语剧包" border=0></a></td>
<td><a href=details.php?id=570939><b>Jade The Offliners 2...</b></a><br />3.67 MB/sec.</td>
<td align=center>4.18 GB</td>
<td align=center>60.04 GB</td>
<td align=center>2022-06-21 10:35:14</td>
<td align=center>2022-06-21 15:14:31</td>
<td align=center>2022-06-21 15:14:31</td>
<td align=center>4:39:17</td>
<td align=center>133</td>
<td align=center>1</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=60><img src="pic/cate/cate_drama.png" alt="高清综艺" border=0></a></td>
<td><a href=details.php?id=570916><b>DragonTV China Now 2...</b></a><br />4.95 MB/sec.</td>
<td align=center>150.80 MB</td>
<td align=center>2.42 GB</td>
<td align=center>2022-06-21 07:30:04</td>
<td align=center>2022-06-21 07:38:24</td>
<td align=center>2022-06-21 07:38:24</td>
<td align=center>8:20</td>
<td align=center>21</td>
<td align=center>2</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=60><img src="pic/cate/cate_drama.png" alt="高清综艺" border=0></a></td>
<td><a href=details.php?id=570907><b>ZJTV Zhui Xing Xing ...</b></a><br />719.96 kB/sec.</td>
<td align=center>746.09 MB</td>
<td align=center>4.73 GB</td>
<td align=center>2022-06-21 04:50:05</td>
<td align=center>2022-06-21 06:44:47</td>
<td align=center>2022-06-21 06:46:04</td>
<td align=center>1:54:42</td>
<td align=center>26</td>
<td align=center>1</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=60><img src="pic/cate/cate_drama.png" alt="高清综艺" border=0></a></td>
<td><a href=details.php?id=570906><b>ZJTV Wei Ge Er Zan 2...</b></a><br />957.36 kB/sec.</td>
<td align=center>543.97 MB</td>
<td align=center>5.30 GB</td>
<td align=center>2022-06-21 04:50:05</td>
<td align=center>2022-06-21 06:26:48</td>
<td align=center>2022-06-21 06:28:03</td>
<td align=center>1:36:43</td>
<td align=center>22</td>
<td align=center>1</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=60><img src="pic/cate/cate_drama.png" alt="高清综艺" border=0></a></td>
<td><a href=details.php?id=570905><b>DragonTV Qing Jing X...</b></a><br />1.43 MB/sec.</td>
<td align=center>704.53 MB</td>
<td align=center>5.66 GB</td>
<td align=center>2022-06-21 04:50:05</td>
<td align=center>2022-06-21 05:57:29</td>
<td align=center>2022-06-21 05:57:29</td>
<td align=center>1:07:24</td>
<td align=center>23</td>
<td align=center>1</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=60><img src="pic/cate/cate_drama.png" alt="高清综艺" border=0></a></td>
<td><a href=details.php?id=570908><b>DragonTV Ai Yue Zhi ...</b></a><br />1.76 MB/sec.</td>
<td align=center>263.32 MB</td>
<td align=center>3.54 GB</td>
<td align=center>2022-06-21 04:50:04</td>
<td align=center>2022-06-21 05:24:24</td>
<td align=center>2022-06-21 05:24:24</td>
<td align=center>34:20</td>
<td align=center>17</td>
<td align=center>1</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=53><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p" border=0></a></td>
<td><a href=details.php?id=570878><b>Fantastic Beasts The...</b></a><br />292.28 kB/sec.</td>
<td align=center>119.33 MB</td>
<td align=center>2.31 GB</td>
<td align=center>2022-06-20 22:55:18</td>
<td align=center>2022-06-21 01:13:24</td>
<td align=center>2022-06-21 01:13:24</td>
<td align=center>2:18:06</td>
<td align=center>496</td>
<td align=center>12</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=60><img src="pic/cate/cate_drama.png" alt="高清综艺" border=0></a></td>
<td><a href=details.php?id=570880><b>BRTV Dian Ran Xi Wan...</b></a><br />335.89 kB/sec.</td>
<td align=center>327.22 MB</td>
<td align=center>1.62 GB</td>
<td align=center>2022-06-20 23:00:12</td>
<td align=center>2022-06-21 00:24:40</td>
<td align=center>2022-06-21 00:24:40</td>
<td align=center>1:24:28</td>
<td align=center>30</td>
<td align=center>1</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=60><img src="pic/cate/cate_drama.png" alt="高清综艺" border=0></a></td>
<td><a href=details.php?id=570884><b>JSTV Camping Life 20...</b></a><br />4.63 MB/sec.</td>
<td align=center>963.66 MB</td>
<td align=center>4.61 GB</td>
<td align=center>2022-06-20 23:15:11</td>
<td align=center>2022-06-20 23:32:10</td>
<td align=center>2022-06-20 23:33:11</td>
<td align=center>16:59</td>
<td align=center>25</td>
<td align=center>1</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=60><img src="pic/cate/cate_drama.png" alt="高清综艺" border=0></a></td>
<td><a href=details.php?id=570876><b>CCTV15 Feng Hua Guo ...</b></a><br />1.55 MB/sec.</td>
<td align=center>673.33 MB</td>
<td align=center>1.61 GB</td>
<td align=center>2022-06-20 22:55:19</td>
<td align=center>2022-06-20 23:13:03</td>
<td align=center>2022-06-20 23:13:03</td>
<td align=center>17:44</td>
<td align=center>24</td>
<td align=center>1</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=60><img src="pic/cate/cate_drama.png" alt="高清综艺" border=0></a></td>
<td><a href=details.php?id=570847><b>BRTV 8 PM Concert 20...</b></a><br />1.34 MB/sec.</td>
<td align=center>2.06 GB</td>
<td align=center>8.17 GB</td>
<td align=center>2022-06-20 20:25:09</td>
<td align=center>2022-06-20 22:09:04</td>
<td align=center>2022-06-20 22:10:13</td>
<td align=center>1:43:55</td>
<td align=center>40</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=60><img src="pic/cate/cate_drama.png" alt="高清综艺" border=0></a></td>
<td><a href=details.php?id=570839><b>J2ers育成記 22061...</b></a><br />928.39 kB/sec.</td>
<td align=center>134.55 MB</td>
<td align=center>438.81 MB</td>
<td align=center>2022-06-20 19:35:03</td>
<td align=center>2022-06-20 19:43:07</td>
<td align=center>2022-06-20 19:43:07</td>
<td align=center>8:04</td>
<td align=center>27</td>
<td align=center>1</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=60><img src="pic/cate/cate_drama.png" alt="高清综艺" border=0></a></td>
<td><a href=details.php?id=570793><b>Jade Endless Melody ...</b></a><br />14.71 MB/sec.</td>
<td align=center>0.98 GB</td>
<td align=center>6.19 GB</td>
<td align=center>2022-06-20 11:25:08</td>
<td align=center>2022-06-20 11:32:19</td>
<td align=center>2022-06-20 11:32:19</td>
<td align=center>7:11</td>
<td align=center>78</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=63><img src="pic/cate/cate_do1080p.png" alt="纪录片1080i/p" border=0></a></td>
<td><a href=details.php?id=570763><b>CCTV9 Sanxingdui:Red...</b></a><br />1.28 MB/sec.</td>
<td align=center>218.57 MB</td>
<td align=center>9.81 GB</td>
<td align=center>2022-06-20 08:10:05</td>
<td align=center>2022-06-20 10:21:16</td>
<td align=center>2022-06-20 10:21:16</td>
<td align=center>2:11:11</td>
<td align=center>97</td>
<td align=center>1</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=63><img src="pic/cate/cate_do1080p.png" alt="纪录片1080i/p" border=0></a></td>
<td><a href=details.php?id=570760><b>CCTV9 Africa‘s Wil...</b></a><br />1.77 MB/sec.</td>
<td align=center>503.00 MB</td>
<td align=center>13.76 GB</td>
<td align=center>2022-06-20 08:00:06</td>
<td align=center>2022-06-20 10:13:06</td>
<td align=center>2022-06-20 10:13:06</td>
<td align=center>2:13:00</td>
<td align=center>38</td>
<td align=center>1</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=63><img src="pic/cate/cate_do1080p.png" alt="纪录片1080i/p" border=0></a></td>
<td><a href=details.php?id=570762><b>CCTV9 Liang Zhu Wen ...</b></a><br />1.56 MB/sec.</td>
<td align=center>796.97 MB</td>
<td align=center>10.30 GB</td>
<td align=center>2022-06-20 08:10:06</td>
<td align=center>2022-06-20 10:02:35</td>
<td align=center>2022-06-20 10:04:04</td>
<td align=center>1:52:29</td>
<td align=center>45</td>
<td align=center>1</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=53><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p" border=0></a></td>
<td><a href=details.php?id=570765><b>The Unbearable Weigh...</b></a><br />2.92 MB/sec.</td>
<td align=center>2.07 GB</td>
<td align=center>11.68 GB</td>
<td align=center>2022-06-20 08:50:04</td>
<td align=center>2022-06-20 09:58:27</td>
<td align=center>2022-06-20 09:58:27</td>
<td align=center>1:08:23</td>
<td align=center>480</td>
<td align=center>22</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=63><img src="pic/cate/cate_do1080p.png" alt="纪录片1080i/p" border=0></a></td>
<td><a href=details.php?id=570761><b>CCTV9 Fire Sparkles ...</b></a><br />1.18 MB/sec.</td>
<td align=center>253.35 MB</td>
<td align=center>6.51 GB</td>
<td align=center>2022-06-20 08:05:06</td>
<td align=center>2022-06-20 09:39:28</td>
<td align=center>2022-06-20 09:39:28</td>
<td align=center>1:34:22</td>
<td align=center>41</td>
<td align=center>2</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=53><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p" border=0></a></td>
<td><a href=details.php?id=570756><b>The Unbearable Weigh...</b></a><br />738.37 kB/sec.</td>
<td align=center>962.05 MB</td>
<td align=center>6.12 GB</td>
<td align=center>2022-06-20 06:35:04</td>
<td align=center>2022-06-20 08:59:58</td>
<td align=center>2022-06-20 09:01:04</td>
<td align=center>2:24:54</td>
<td align=center>607</td>
<td align=center>21</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=90><img src="pic/cate/cate_dlb.png" alt="华语剧包" border=0></a></td>
<td><a href=details.php?id=570709><b>CCTV8 Mulan Mother 2...</b></a><br />1.64 MB/sec.</td>
<td align=center>11.34 GB</td>
<td align=center>73.74 GB</td>
<td align=center>2022-06-19 19:35:06</td>
<td align=center>2022-06-20 08:23:41</td>
<td align=center>2022-06-20 08:23:41</td>
<td align=center>12:48:35</td>
<td align=center>158</td>
<td align=center>1</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=83><img src="pic/cate/cate_ape.png" alt="无损音乐FLAC&APE" border=0></a></td>
<td><a href=details.php?id=570740><b>【PERFECT FLAC】�...</b></a><br />804.04 kB/sec.</td>
<td align=center>250.61 MB</td>
<td align=center>2.59 GB</td>
<td align=center>2022-06-20 00:50:05</td>
<td align=center>2022-06-20 01:46:24</td>
<td align=center>2022-06-20 01:46:24</td>
<td align=center>56:19</td>
<td align=center>25</td>
<td align=center>2</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=83><img src="pic/cate/cate_ape.png" alt="无损音乐FLAC&APE" border=0></a></td>
<td><a href=details.php?id=570739><b>【PERFECT FLAC】Al...</b></a><br />607.43 kB/sec.</td>
<td align=center>486.69 MB</td>
<td align=center>811.48 MB</td>
<td align=center>2022-06-20 00:50:11</td>
<td align=center>2022-06-20 01:12:59</td>
<td align=center>2022-06-20 01:14:06</td>
<td align=center>22:48</td>
<td align=center>32</td>
<td align=center>1</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=83><img src="pic/cate/cate_ape.png" alt="无损音乐FLAC&APE" border=0></a></td>
<td><a href=details.php?id=570741><b>【PERFECT FLAC】�...</b></a><br />214.68 kB/sec.</td>
<td align=center>215.00 MB</td>
<td align=center>270.87 MB</td>
<td align=center>2022-06-20 00:50:05</td>
<td align=center>2022-06-20 01:11:37</td>
<td align=center>2022-06-20 01:13:10</td>
<td align=center>21:32</td>
<td align=center>35</td>
<td align=center>1</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=83><img src="pic/cate/cate_ape.png" alt="无损音乐FLAC&APE" border=0></a></td>
<td><a href=details.php?id=570737><b>【PERFECT FLAC】Lu...</b></a><br />307.15 kB/sec.</td>
<td align=center>155.36 MB</td>
<td align=center>308.34 MB</td>
<td align=center>2022-06-20 00:50:11</td>
<td align=center>2022-06-20 01:07:19</td>
<td align=center>2022-06-20 01:07:19</td>
<td align=center>17:08</td>
<td align=center>28</td>
<td align=center>1</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=83><img src="pic/cate/cate_ape.png" alt="无损音乐FLAC&APE" border=0></a></td>
<td><a href=details.php?id=570738><b>【PERFECT FLAC】Il...</b></a><br />314.84 kB/sec.</td>
<td align=center>157.56 MB</td>
<td align=center>277.95 MB</td>
<td align=center>2022-06-20 00:50:10</td>
<td align=center>2022-06-20 01:05:14</td>
<td align=center>2022-06-20 01:05:14</td>
<td align=center>15:04</td>
<td align=center>26</td>
<td align=center>2</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=83><img src="pic/cate/cate_ape.png" alt="无损音乐FLAC&APE" border=0></a></td>
<td><a href=details.php?id=570736><b>【PERFECT FLAC】Ju...</b></a><br />306.98 kB/sec.</td>
<td align=center>37.38 MB</td>
<td align=center>226.63 MB</td>
<td align=center>2022-06-20 00:50:14</td>
<td align=center>2022-06-20 01:02:50</td>
<td align=center>2022-06-20 01:04:05</td>
<td align=center>12:36</td>
<td align=center>29</td>
<td align=center>1</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=60><img src="pic/cate/cate_drama.png" alt="高清综艺" border=0></a></td>
<td><a href=details.php?id=570725><b>JSTV Take Me Out 202...</b></a><br />3.83 MB/sec.</td>
<td align=center>1.00 GB</td>
<td align=center>4.58 GB</td>
<td align=center>2022-06-19 22:10:07</td>
<td align=center>2022-06-19 22:30:31</td>
<td align=center>2022-06-19 22:32:09</td>
<td align=center>20:24</td>
<td align=center>22</td>
<td align=center>1</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=60><img src="pic/cate/cate_drama.png" alt="高清综艺" border=0></a></td>
<td><a href=details.php?id=570714><b>BRTV China in Callig...</b></a><br />2.38 MB/sec.</td>
<td align=center>0.98 GB</td>
<td align=center>3.26 GB</td>
<td align=center>2022-06-19 20:05:07</td>
<td align=center>2022-06-19 20:28:30</td>
<td align=center>2022-06-19 20:31:08</td>
<td align=center>23:23</td>
<td align=center>32</td>
<td align=center>1</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=60><img src="pic/cate/cate_drama.png" alt="高清综艺" border=0></a></td>
<td><a href=details.php?id=570705><b>CCTV15 Global Chines...</b></a><br />1.91 MB/sec.</td>
<td align=center>1.12 GB</td>
<td align=center>5.27 GB</td>
<td align=center>2022-06-19 18:50:05</td>
<td align=center>2022-06-19 19:37:04</td>
<td align=center>2022-06-19 19:37:04</td>
<td align=center>46:59</td>
<td align=center>33</td>
<td align=center>1</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=60><img src="pic/cate/cate_drama.png" alt="高清综艺" border=0></a></td>
<td><a href=details.php?id=570704><b>CCTV15 Feng Hua Guo ...</b></a><br />3.37 MB/sec.</td>
<td align=center>254.36 MB</td>
<td align=center>1.61 GB</td>
<td align=center>2022-06-19 18:50:05</td>
<td align=center>2022-06-19 18:58:14</td>
<td align=center>2022-06-19 18:58:14</td>
<td align=center>8:09</td>
<td align=center>22</td>
<td align=center>1</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=53><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p" border=0></a></td>
<td><a href=details.php?id=570678><b>RTHK31 The Contract ...</b></a><br />13.74 MB/sec.</td>
<td align=center>1.93 GB</td>
<td align=center>3.98 GB</td>
<td align=center>2022-06-19 16:10:11</td>
<td align=center>2022-06-19 16:15:08</td>
<td align=center>2022-06-19 16:48:07</td>
<td align=center>4:57</td>
<td align=center>36</td>
<td align=center>1</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=53><img src="pic/cate/cate_m1080p.png" alt="电影1080i/p" border=0></a></td>
<td><a href=details.php?id=570653><b>ViuTV そして父�...</b></a><br />571.15 kB/sec.</td>
<td align=center>1.18 GB</td>
<td align=center>4.20 GB</td>
<td align=center>2022-06-19 13:05:22</td>
<td align=center>2022-06-19 15:13:50</td>
<td align=center>2022-06-19 16:47:07</td>
<td align=center>2:08:28</td>
<td align=center>45</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=60><img src="pic/cate/cate_drama.png" alt="高清综艺" border=0></a></td>
<td><a href=details.php?id=570659><b>HNTV Back To Field S...</b></a><br />2.57 MB/sec.</td>
<td align=center>4.10 GB</td>
<td align=center>9.14 GB</td>
<td align=center>2022-06-19 13:55:09</td>
<td align=center>2022-06-19 14:55:57</td>
<td align=center>2022-06-19 16:46:03</td>
<td align=center>1:00:48</td>
<td align=center>20</td>
<td align=center>1</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=60><img src="pic/cate/cate_drama.png" alt="高清综艺" border=0></a></td>
<td><a href=details.php?id=570660><b>HNTV Infinity and Be...</b></a><br />2.90 MB/sec.</td>
<td align=center>5.67 GB</td>
<td align=center>8.99 GB</td>
<td align=center>2022-06-19 14:00:09</td>
<td align=center>2022-06-19 14:52:58</td>
<td align=center>2022-06-19 16:45:06</td>
<td align=center>52:49</td>
<td align=center>47</td>
<td align=center>1</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=60><img src="pic/cate/cate_drama.png" alt="高清综艺" border=0></a></td>
<td><a href=details.php?id=570651><b>Jade STARS Academy 2...</b></a><br />11.44 MB/sec.</td>
<td align=center>2.28 GB</td>
<td align=center>4.71 GB</td>
<td align=center>2022-06-19 12:55:10</td>
<td align=center>2022-06-19 13:02:12</td>
<td align=center>2022-06-19 16:44:03</td>
<td align=center>7:02</td>
<td align=center>45</td>
<td align=center>1</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=60><img src="pic/cate/cate_drama.png" alt="高清综艺" border=0></a></td>
<td><a href=details.php?id=570649><b>Jade Bong Bong Amigo...</b></a><br />9.07 MB/sec.</td>
<td align=center>3.47 GB</td>
<td align=center>14.93 GB</td>
<td align=center>2022-06-19 12:30:10</td>
<td align=center>2022-06-19 12:58:16</td>
<td align=center>2022-06-19 16:43:03</td>
<td align=center>28:06</td>
<td align=center>50</td>
<td align=center>1</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=83><img src="pic/cate/cate_ape.png" alt="无损音乐FLAC&APE" border=0></a></td>
<td><a href=details.php?id=570584><b>【PERFECT FLAC】�...<font color='red'>(SeedBox)</font></b></a><br />76.13 kB/sec.</td>
<td align=center>5.73 GB</td>
<td align=center>2.66 GB</td>
<td align=center>2022-06-18 22:40:43</td>
<td align=center>2022-06-19 08:51:02</td>
<td align=center>2022-06-19 09:02:08</td>
<td align=center>10:10:19</td>
<td align=center>47</td>
<td align=center>1</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=83><img src="pic/cate/cate_ape.png" alt="无损音乐FLAC&APE" border=0></a></td>
<td><a href=details.php?id=570582><b>【PERFECT FLAC】�...<font color='red'>(SeedBox)</font></b></a><br />190.77 kB/sec.</td>
<td align=center>8.41 GB</td>
<td align=center>2.79 GB</td>
<td align=center>2022-06-18 22:41:53</td>
<td align=center>2022-06-19 02:57:49</td>
<td align=center>2022-06-19 05:27:49</td>
<td align=center>4:15:56</td>
<td align=center>119</td>
<td align=center>4</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=60><img src="pic/cate/cate_drama.png" alt="高清综艺" border=0></a></td>
<td><a href=details.php?id=570595><b>Jade Liza‘s On Lin...<font color='red'>(SeedBox)</font></b></a><br />1.35 MB/sec.</td>
<td align=center>113.75 GB</td>
<td align=center>24.66 GB</td>
<td align=center>2022-06-18 23:35:20</td>
<td align=center>2022-06-19 04:46:35</td>
<td align=center>2022-06-19 05:21:04</td>
<td align=center>5:11:15</td>
<td align=center>36</td>
<td align=center>2</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=83><img src="pic/cate/cate_ape.png" alt="无损音乐FLAC&APE" border=0></a></td>
<td><a href=details.php?id=570587><b>【PERFECT FLAC】�...<font color='red'>(SeedBox)</font></b></a><br />790.20 kB/sec.</td>
<td align=center>8.36 GB</td>
<td align=center>2.61 GB</td>
<td align=center>2022-06-18 22:40:43</td>
<td align=center>2022-06-18 23:38:31</td>
<td align=center>2022-06-18 23:38:31</td>
<td align=center>57:48</td>
<td align=center>101</td>
<td align=center>2</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=83><img src="pic/cate/cate_ape.png" alt="无损音乐FLAC&APE" border=0></a></td>
<td><a href=details.php?id=570585><b>【PERFECT FLAC】�...<font color='red'>(SeedBox)</font></b></a><br />189.25 kB/sec.</td>
<td align=center>1.04 GB</td>
<td align=center>258.18 MB</td>
<td align=center>2022-06-18 22:40:43</td>
<td align=center>2022-06-18 23:04:00</td>
<td align=center>2022-06-18 23:04:00</td>
<td align=center>23:17</td>
<td align=center>44</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=83><img src="pic/cate/cate_ape.png" alt="无损音乐FLAC&APE" border=0></a></td>
<td><a href=details.php?id=570581><b>【PERFECT FLAC】�...<font color='red'>(SeedBox)</font></b></a><br />475.12 kB/sec.</td>
<td align=center>1.47 GB</td>
<td align=center>418.97 MB</td>
<td align=center>2022-06-18 22:42:01</td>
<td align=center>2022-06-18 22:57:04</td>
<td align=center>2022-06-18 22:57:04</td>
<td align=center>15:03</td>
<td align=center>55</td>
<td align=center>1</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=83><img src="pic/cate/cate_ape.png" alt="无损音乐FLAC&APE" border=0></a></td>
<td><a href=details.php?id=570583><b>【PERFECT FLAC】�...<font color='red'>(SeedBox)</font></b></a><br />421.21 kB/sec.</td>
<td align=center>994.27 MB</td>
<td align=center>238.17 MB</td>
<td align=center>2022-06-18 22:41:31</td>
<td align=center>2022-06-18 22:51:10</td>
<td align=center>2022-06-18 22:51:10</td>
<td align=center>9:39</td>
<td align=center>132</td>
<td align=center>0</td>
</tr>
<tr>
<td align=center><a href=browse.php?cat=60><img src="pic/cate/cate_drama.png" alt="高清综艺" border=0></a></td>
<td><a href=details.php?id=570556><b>CCTV15 Feng Hua Guo ...<font color='red'>(SeedBox)</font></b></a><br />1.54 MB/sec.</td>
<td align=center>5.16 GB</td>
<td align=center>1.61 GB</td>
<td align=center>2022-06-18 19:25:03</td>
<td align=center>2022-06-18 19:42:53</td>
<td align=center>2022-06-18 20:01:01</td>
<td align=center>17:50</td>
<td align=center>24</td>
<td align=center>1</td>
</tr>
</table></div></td></tr>
<tr valign=top><td class=rowhead><a name=hr></a>HR记录<a href="javascript: klappe_news('a5')"><br><img border="0" src="/pic/viewinfo.gif" id="pica" alt="[显示/隐藏]"></td><td align=left><div id="ka5" style="display: none;"><table class=main border=1 cellspacing=0 cellpadding=5><tr><td class=colhead align=center>类型</td><td class=colhead>名称</td><td class=colhead align=center>开始</td><td class=colhead align=center>做种时间</td><td class=colhead align=center>累计时间</td><td class=colhead align=right>做种者</td><td class=colhead align=right>下载者</td><td class=colhead align=center>上传量</td>
<td class=colhead align=center>下载量</td><td class=colhead align=center>分享率</td><td class=colhead align=center>HR检测</td></tr>
</table>
</div></td></tr>
</table>
</td></tr></table>
</td></tr><tr valign=top><td align="center" style="background-color:#E6E6FA;line-height:220%"><a href="/disclaimer.php" target="_blank">免责条款</a> | <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_4085974'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s94.cnzz.com/stat.php%3Fid%3D4085974%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script></td></tr></table><div id="gotop" title="回到顶部"></div>
    <!--<script type="text/javascript">
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-50968028-1', 'totheglory.im');
        ga('send', 'pageview');
    </script>-->
  </body></html>
