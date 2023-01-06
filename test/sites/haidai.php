<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>HDAI :: 首页</title>
<link rel="icon" type="image/ico" href="/favicon.png">
<meta name="renderer" content="never" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="theme-color" content="#3a3f51" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<link rel="stylesheet" href="/assets/libs/layui/css/layui.css" media="all" />
<link rel="stylesheet" href="/assets/css/default/black.css?v=20210914131904" media="all" />
<link rel="stylesheet" href="/assets/css/sprites.css?v=20210914131904" media="all" />
<link rel="stylesheet" href="/pic/category/hd/scenetorrents/catsprites.css?v=20210914131904" />
<script src="/assets/libs/layui/layui.js" charset="UTF-8"></script>
<script src="/assets/js/function.js?v=20210914131904" charset="UTF-8"></script>
<script>
  window.API_SERVICE = "App.Site.Index";
  window.REQUEST_TIME = 1655636696;
  const USER_DATA = '';
  layui.config({
    base: "/assets/js/lay-modules/",
    version: 20210914131904
  }).extend({
    tongJi: "nexusPHP/tongJi",
    torrents: 'nexusPHP/torrents'
  });
</script>
</head>
<body>
<!--[if lt IE 9]>
<script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
<script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<header>

<div class="topbar-banner layui-hide" id="topbar-banner">
<a class="link-block" style="background-image:url(/assets/img/banner.jpg)" href="javascript:void(0);"></a>
</div>

<div class="site-topbar">
<div class="layui-main flex">
<div class="topbar-nav"> <a href="javascript:;" title="上传量"><i class="layui-icon layui-icon-upload-drag"></i> 265.43 GB</a><span class="sep">|</span>
<a href="javascript:;" title="下载量"><i class="layui-icon layui-icon-download-circle"></i> 59.70 GB</a><span class="sep">|</span>
<a href="javascript:;" title="分享率"><i class="layui-icon layui-icon-share"></i> 4.446</a><span class="sep">|</span>
<a href="/Torrents.index?peers=yes" title="当前活动"><i class="layui-icon layui-icon-chart"></i><img class="arrowup" alt="Torrents seeding" title="当前做种" src="pic/trans.gif">63<img class="arrowdown" alt="Torrents leeching" title="当前下载" src="pic/trans.gif">0</a>
</div>
<div class="topbar-info"><a href="/userdetails.php?id=10233" title="用户UID：10233"><i class="layui-icon layui-icon-username"></i> seckiller（UID:10233）</a><span class="sep">|</span>
<a href="/mybonus.php" target="_blank" title="魔力值"><i class="layui-icon layui-icon-diamond"></i> 29,048.6</a><span class="sep">|</span>
<a href="/invite.php?id=10233" target="_blank" title="邀请"><i class="layui-icon layui-icon-key"></i> 4</a><span class="sep">|</span>
<a href="/messages.php" title="收件箱" target="_blank"><i class="layui-icon layui-icon-email"></i> 4<span id="msg_speaker" style="color: #FF5722;" title="未读消息"><i class="layui-icon layui-icon-notice"></i>2</span></a><span class="sep">|</span>
<a href="/Torrents.index?inbookmarked=yes" title="收藏夹" target="_blank"><i class="layui-icon layui-icon-star-fill"></i></a><span class="sep">|</span>
<a href="/getrss.php" title="RSS链接" target="_blank"><i class="layui-icon layui-icon-rss"></i></a><span class="sep">|</span>
<a href="/Users.logout" title="退出登录"><i class="layui-icon layui-icon-logout" style="color: #FF5722;"></i></a>
</div>
</div>
</div>
</header>

<div class="layui-header">
<div class="layui-main flex">
<div class="header-logo"><h1>HDAI</h1></div>
<div class="header-nav">
<ul class="layui-nav" lay-filter="header-nav">
<li class="layui-nav-item" id="nav_home"><a href="/">首页</a></li>
<li class="layui-nav-item" id='nav_movie'><a href="/Movie.index">影视</a></li>
<li class="layui-nav-item" id='nav_torrent'><a href="/Torrents.index">种子</a></li>
<li class="layui-nav-item" id='nav_upload'><a href="/Torrents.upload">发布</a></li>
<li class="layui-nav-item" id='nav_forums'><a href="/forums.php">论坛</a></li>
<li class="layui-nav-item"><a href="/subtitles.php">字幕</a></li>
<li class="layui-nav-item">
<a href="javascript:;">其他</a>
<dl class="layui-nav-child">
<dd><a href="/usercp.php">控制面板</a></dd>
<dd><a href="/rules.php">规则</a></dd>
<dd><a href="/faq.php">常见问题</a></dd>
<dd><a href="/topten.php">排行榜</a></dd>
<dd><a href="/staff.php">管理组</a></dd>
</dl>
</li>
</ul>
</div>
<div class="header-search">
<form class="layui-form layui-hide" action="">
<input type="text" name="search" required="" lay-verify="required" placeholder="搜索框" autocomplete="off" class="layui-input">
<button type="submit" class="layui-btn layui-btn-primary pull-right" lay-submit lay-filter="headerSearch"><i class="layui-icon layui-icon-search"></i></button>
</form>
</div>
</div>
</div>
<div class="layui-main">
<a href="/messages.php" class="layui-btn layui-btn-normal">未读消息 2</a></div>
<style>
body{
  color: #cecece;
} 
a {
  color: #ccc;
}
.layui-col-md2 {
  width: 16.66666667%;
  float: left;
}
.last-torrent .layui-table{
  background-color: #111;
  margin: 0;
}
</style>
<div class="layui-main">

<div class="layui-carousel carousel" id="carousel">
<div carousel-item>
<div><img src="/assets/img/carousel1.jpg"></div>
<div><img src="/assets/img/carousel2.jpg"></div>
<div><img src="/assets/img/carousel3.jpg"></div>
</div>
</div>

<div class="special">
<div class="layui-row layui-col-space10">
<div class="layui-col-md3"><a href="#"><img lay-src="/attachments/202010/1.jpg"></a></div>
<div class="layui-col-md3"><a href="#"><img lay-src="/attachments/202010/2.jpg"></a></div>
<div class="layui-col-md3"><a href="#"><img lay-src="/attachments/202010/3.jpg"></a></div>
<div class="layui-col-md3"><a href="#"><img lay-src="/attachments/202010/4.jpg"></a></div>
</div>
</div>
</div>

<div class="layui-main">

<div class="brick-box last-torrent">
<h2 class="title"><i class="layui-icon layui-icon-release" style="font-size: 22px; margin-right:8px;"></i>最近上传种子</h2>
<table class="layui-table" lay-skin="line" lay-size="sm">
<colgroup>
<col><col width="90"><col width="140">
</colgroup>
<thead>
<tr><th>标题</th><th>大小</th><th>时间</th></tr>
</thead>
<tbody>
<tr>
<td><a href="details.php?id=8203" title="Batman v Superman: Dawn of Justice 2016 Remastered IMAX Ultimate Edition 2160p UHD BluRay x265 DV HDR TrueHD Atmos mUHD-FRDS" target="_blank"><h3>Batman v Superman: Dawn of Justice 2016 Remastered IMAX Ultimate Edition 2160p UHD BluRay x265 DV HDR TrueHD Atmos mUHD-FRDS</h3></a><p class="desc">【蝙蝠侠大战超人：正义黎明/蝙蝠侠与超人：正义黎明/蝙蝠侠大战超人/蝙蝠侠对超人：正义曙光(港/台)】mUHD作品 4k杜比视界版本 国英评 特效双语 Hybrid DV P8</p></td>
<td><span class="layui-badge layui-bg-gray">50.57 GB</span></td>
<td>2022-06-19 13:07:10</td>
</tr><tr>
<td><a href="details.php?id=8202" title="American Pie 1999 UNRATED BluRay 1080p Hevc 10bit DTS-HD MA5.1-Iceyumao@Dream" target="_blank"><h3>American Pie 1999 UNRATED BluRay 1080p Hevc 10bit DTS-HD <span class="__cf_email__" data-cfemail="8bc6cabea5baa6c2e8eef2fee6eae4cbcff9eeeae6">[email&#160;protected]</span></h3></a><p class="desc">美国派 / 美国陷饼 / 美国处男 / East Great Falls High</p></td>
<td><span class="layui-badge layui-bg-gray">9.31 GB</span></td>
<td>2022-06-19 11:55:07</td>
</tr><tr>
<td><a href="details.php?id=8201" title="Itami Juzo FILM COLLECTION Blu-ray Box II" target="_blank"><h3>Itami Juzo FILM COLLECTION Blu-ray Box II</h3></a><p class="desc">伊丹十三电影集II（2012）CC收藏版</p></td>
<td><span class="layui-badge layui-bg-gray">219.21 GB</span></td>
<td>2022-06-19 07:28:23</td>
</tr><tr>
<td><a href="details.php?id=8200" title="B Zhan Lesson 70 Tao" target="_blank"><h3>B Zhan Lesson 70 Tao</h3></a><p class="desc">b站课程70套 c4d/python/excel/绘画/日语/科学/文学/政治/历史/经济学/哲学/心理学/吉他/创作等等</p></td>
<td><span class="layui-badge layui-bg-gray">392.51 GB</span></td>
<td>2022-06-19 07:03:10</td>
</tr><tr>
<td><a href="details.php?id=8199" title="My Dress-Up Darling S01 1080p B-Global WEB-DL HEVC AAC-CHDWEB" target="_blank"><h3>My Dress-Up Darling S01 1080p B-Global WEB-DL HEVC AAC-CHDWEB</h3></a><p class="desc">更衣人偶坠入爱河/その着せ替え人形は恋をする/恋上换装娃娃/My Dress-Up Darling</p></td>
<td><span class="layui-badge layui-bg-gray">8.32 GB</span></td>
<td>2022-06-19 02:14:08</td>
</tr><tr>
<td><a href="details.php?id=8198" title="X 2022 1080p Blu-ray AVC DTS-HD MA 5.1-Thor@HDSky" target="_blank"><h3>X 2022 1080p Blu-ray AVC DTS-HD MA <span class="__cf_email__" data-cfemail="62574c534f360a0d10222a2631091b">[email&#160;protected]</span></h3></a><p class="desc">X【DIY简繁/双语字幕】打着恐怖片幌子的颜色片 女主角们都太拼了</p></td>
<td><span class="layui-badge layui-bg-gray">36.18 GB</span></td>
<td>2022-06-19 00:24:11</td>
</tr><tr>
<td><a href="details.php?id=8197" title="Love Death and Robots S03 2022 1080p WEB-DL x265 AC3￡cXcY@FRDS" target="_blank"><h3>Love Death and Robots S03 2022 1080p WEB-DL x265 AC3￡<span class="__cf_email__" data-cfemail="bedde6dde7fef8ecfaed">[email&#160;protected]</span></h3></a><p class="desc">爱，死亡和机器人 第三季 中英特效/官方简中字幕 Netflix出品 HEVC版本</p></td>
<td><span class="layui-badge layui-bg-gray">4.94 GB</span></td>
<td>2022-06-18 22:25:52</td>
</tr><tr>
<td><a href="details.php?id=8196" title="Dying To Survive 2018 1080p Blu-ray HEVC 10bit Atmos TrueHD 7.1-piekei@Dream" target="_blank"><h3>Dying To Survive 2018 1080p Blu-ray HEVC 10bit Atmos TrueHD <span class="__cf_email__" data-cfemail="e9dec7d8c499808c828c80a9ad9b8c8884">[email&#160;protected]</span></h3></a><p class="desc">我不是药神 徐峥 国语中字</p></td>
<td><span class="layui-badge layui-bg-gray">9.82 GB</span></td>
<td>2022-06-18 19:45:39</td>
</tr><tr>
<td><a href="details.php?id=8195" title="The Bourne Supremacy 2004 UHD BluRay 2160p 10bit HDR 2Audio DTS-X 7.1 x265-beAst" target="_blank"><h3>The Bourne Supremacy 2004 UHD BluRay 2160p 10bit HDR 2Audio DTS-X 7.1 x265-beAst</h3></a><p class="desc">谍影重重2/叛谍追击2:机密圈套(港)/神鬼认证:神鬼疑云(台)/伯恩的身份2/至尊伯恩/伯恩的霸权 国英双语DTS-X 7.1/英语导评/英简繁双语&导评英语SUP字幕/章节</p></td>
<td><span class="layui-badge layui-bg-gray">31.99 GB</span></td>
<td>2022-06-18 18:11:41</td>
</tr><tr>
<td><a href="details.php?id=8194" title="The Little Mermaid 1989 BluRay 1080p x265 10bit 4Audios MNHD-FRDS" target="_blank"><h3>The Little Mermaid 1989 BluRay 1080p x265 10bit 4Audios MNHD-FRDS</h3></a><p class="desc">【小美人鱼 / 小鱼仙】迪士尼系列 国台粤英四轨 10bit HEVC版本</p></td>
<td><span class="layui-badge layui-bg-gray">4.96 GB</span></td>
<td>2022-06-18 17:49:20</td>
</tr> </tbody>
</table>
</div>

<div class="brick-box">
<div class="box-hd">
<h2 class="title"><i class="layui-icon layui-icon-chart-screen" style="font-size: 22px; margin-right:8px;"></i>最近更新</h2>
</div>
<div class="brick-list">
<ul class="layui-row layui-col-space10">
<li class="layui-col-md2" data-movie-id="4842">
<div class="brick-item">
<div class="thumb">
<a href="/Movie.subject?id=4842" title="民暴之女
2022-06-19 07:28:29" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img3.doubanio.com/view/photo/s_ratio_poster/public/p2535455590.jpg" alt="民暴之女" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="/Movie.subject?id=4842" title="民暴之女" target="_blank">民暴之女</a></h3>
<p class="desc" title="年份 year">1992</p>
<p class="info" title="评分 rating">7.6</p>
</div>
</li>
<li class="layui-col-md2" data-movie-id="4841">
<div class="brick-item">
<div class="thumb">
<a href="/Movie.subject?id=4841" title="X
2022-06-19 00:24:16" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img2.doubanio.com/view/photo/s_ratio_poster/public/p2870867333.jpg" alt="X" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="/Movie.subject?id=4841" title="X" target="_blank">X</a></h3>
<p class="desc" title="年份 year">2022</p>
<p class="info" title="评分 rating">5.8</p>
</div>
</li>
<li class="layui-col-md2" data-movie-id="4840">
<div class="brick-item">
<div class="thumb">
<a href="/Movie.subject?id=4840" title="爱，死亡和机器人 第三季
2022-06-18 22:25:55" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img1.doubanio.com/view/photo/s_ratio_poster/public/p2872163998.jpg" alt="爱，死亡和机器人 第三季" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="/Movie.subject?id=4840" title="爱，死亡和机器人 第三季" target="_blank">爱，死亡和机器人 第三季</a></h3>
<p class="desc" title="年份 year">2022</p>
<p class="info" title="评分 rating">8.5</p>
</div>
</li>
<li class="layui-col-md2" data-movie-id="4839">
<div class="brick-item">
<div class="thumb">
<a href="/Movie.subject?id=4839" title="小美人鱼
2022-06-18 17:49:23" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img1.doubanio.com/view/photo/s_ratio_poster/public/p827079407.jpg" alt="小美人鱼" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="/Movie.subject?id=4839" title="小美人鱼" target="_blank">小美人鱼</a></h3>
<p class="desc" title="年份 year">1989</p>
<p class="info" title="评分 rating">8.4</p>
</div>
</li>
<li class="layui-col-md2" data-movie-id="4838">
<div class="brick-item">
<div class="thumb">
<a href="/Movie.subject?id=4838" title="黄真伊
2022-06-18 06:17:32" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img1.doubanio.com/view/photo/s_ratio_poster/public/p2068345968.jpg" alt="黄真伊" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="/Movie.subject?id=4838" title="黄真伊" target="_blank">黄真伊</a></h3>
<p class="desc" title="年份 year">2006</p>
<p class="info" title="评分 rating">8.1</p>
</div>
</li>
<li class="layui-col-md2" data-movie-id="4837">
<div class="brick-item">
<div class="thumb">
<a href="/Movie.subject?id=4837" title="辛白林
2022-06-18 00:53:46" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img1.doubanio.com/view/photo/s_ratio_poster/public/p2160652168.jpg" alt="辛白林" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="/Movie.subject?id=4837" title="辛白林" target="_blank">辛白林</a></h3>
<p class="desc" title="年份 year">2014</p>
<p class="info" title="评分 rating">5</p>
</div>
</li>
<li class="layui-col-md2" data-movie-id="4836">
<div class="brick-item">
<div class="thumb">
<a href="/Movie.subject?id=4836" title="开封府
2022-06-18 00:49:02" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img2.doubanio.com/view/photo/s_ratio_poster/public/p2528366921.jpg" alt="开封府" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="/Movie.subject?id=4836" title="开封府" target="_blank">开封府</a></h3>
<p class="desc" title="年份 year">2017</p>
<p class="info" title="评分 rating">6.5</p>
</div>
</li>
<li class="layui-col-md2" data-movie-id="4835">
<div class="brick-item">
<div class="thumb">
<a href="/Movie.subject?id=4835" title="圣诞之吻SS
2022-06-18 00:42:53" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img2.doubanio.com/view/photo/s_ratio_poster/public/p2544844143.jpg" alt="圣诞之吻SS" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="/Movie.subject?id=4835" title="圣诞之吻SS" target="_blank">圣诞之吻SS</a></h3>
<p class="desc" title="年份 year">2010</p>
<p class="info" title="评分 rating">7.8</p>
</div>
</li>
<li class="layui-col-md2" data-movie-id="4834">
<div class="brick-item">
<div class="thumb">
<a href="/Movie.subject?id=4834" title="一起深呼吸
2022-06-17 21:47:55" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img9.doubanio.com/view/photo/s_ratio_poster/public/p2636314736.jpg" alt="一起深呼吸" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="/Movie.subject?id=4834" title="一起深呼吸" target="_blank">一起深呼吸</a></h3>
<p class="desc" title="年份 year">2021</p>
<p class="info" title="评分 rating">5.9</p>
</div>
</li>
<li class="layui-col-md2" data-movie-id="4833">
<div class="brick-item">
<div class="thumb">
<a href="/Movie.subject?id=4833" title="神探默多克 第一季
2022-06-17 14:14:47" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img9.doubanio.com/view/photo/s_ratio_poster/public/p2292223605.jpg" alt="神探默多克 第一季" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="/Movie.subject?id=4833" title="神探默多克 第一季" target="_blank">神探默多克 第一季</a></h3>
<p class="desc" title="年份 year">2008</p>
<p class="info" title="评分 rating">7.9</p>
</div>
</li>
<li class="layui-col-md2" data-movie-id="4832">
<div class="brick-item">
<div class="thumb">
<a href="/Movie.subject?id=4832" title="终端
2022-06-17 09:54:50" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img2.doubanio.com/view/photo/s_ratio_poster/public/p2517557233.jpg" alt="终端" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="/Movie.subject?id=4832" title="终端" target="_blank">终端</a></h3>
<p class="desc" title="年份 year">2018</p>
<p class="info" title="评分 rating">5.6</p>
</div>
</li>
<li class="layui-col-md2" data-movie-id="4831">
<div class="brick-item">
<div class="thumb">
<a href="/Movie.subject?id=4831" title="使女的故事 第二季
2022-06-16 22:55:52" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img2.doubanio.com/view/photo/s_ratio_poster/public/p2520829721.jpg" alt="使女的故事 第二季" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="/Movie.subject?id=4831" title="使女的故事 第二季" target="_blank">使女的故事 第二季</a></h3>
<p class="desc" title="年份 year">2018</p>
<p class="info" title="评分 rating">8.9</p>
</div>
</li>
<li class="layui-col-md2" data-movie-id="4830">
<div class="brick-item">
<div class="thumb">
<a href="/Movie.subject?id=4830" title="英雄好汉
2022-06-16 22:42:58" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img9.doubanio.com/view/photo/s_ratio_poster/public/p2557818615.jpg" alt="英雄好汉" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="/Movie.subject?id=4830" title="英雄好汉" target="_blank">英雄好汉</a></h3>
<p class="desc" title="年份 year">1987</p>
<p class="info" title="评分 rating">7.2</p>
</div>
</li>
<li class="layui-col-md2" data-movie-id="4829">
<div class="brick-item">
<div class="thumb">
<a href="/Movie.subject?id=4829" title="星际旅行：下一代 第一季
2022-06-16 12:53:07" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img3.doubanio.com/view/photo/s_ratio_poster/public/p2511422000.jpg" alt="星际旅行：下一代 第一季" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="/Movie.subject?id=4829" title="星际旅行：下一代 第一季" target="_blank">星际旅行：下一代 第一季</a></h3>
<p class="desc" title="年份 year">1987</p>
<p class="info" title="评分 rating">8.8</p>
</div>
</li>
<li class="layui-col-md2" data-movie-id="4828">
<div class="brick-item">
<div class="thumb">
<a href="/Movie.subject?id=4828" title="落水狗
2022-06-16 12:23:37" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img2.doubanio.com/view/photo/s_ratio_poster/public/p1851340431.jpg" alt="落水狗" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="/Movie.subject?id=4828" title="落水狗" target="_blank">落水狗</a></h3>
<p class="desc" title="年份 year">1992</p>
 <p class="info" title="评分 rating">8.4</p>
</div>
</li>
<li class="layui-col-md2" data-movie-id="4827">
<div class="brick-item">
<div class="thumb">
<a href="/Movie.subject?id=4827" title="暗夜行者
2022-06-15 23:57:58" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img2.doubanio.com/view/photo/s_ratio_poster/public/p2688770853.jpg" alt="暗夜行者" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="/Movie.subject?id=4827" title="暗夜行者" target="_blank">暗夜行者</a></h3>
<p class="desc" title="年份 year">2022</p>
<p class="info" title="评分 rating"></p>
</div>
</li>
<li class="layui-col-md2" data-movie-id="4826">
<div class="brick-item">
<div class="thumb">
<a href="/Movie.subject?id=4826" title="好好说话
2022-06-15 20:34:09" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img9.doubanio.com/view/photo/s_ratio_poster/public/p2872224824.jpg" alt="好好说话" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="/Movie.subject?id=4826" title="好好说话" target="_blank">好好说话</a></h3>
<p class="desc" title="年份 year">2022</p>
<p class="info" title="评分 rating"></p>
</div>
</li>
<li class="layui-col-md2" data-movie-id="4825">
<div class="brick-item">
<div class="thumb">
<a href="/Movie.subject?id=4825" title="四根羽毛
2022-06-15 15:23:30" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img2.doubanio.com/view/photo/s_ratio_poster/public/p686597811.jpg" alt="四根羽毛" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="/Movie.subject?id=4825" title="四根羽毛" target="_blank">四根羽毛</a></h3>
<p class="desc" title="年份 year">2002</p>
<p class="info" title="评分 rating">7.4</p>
</div>
</li>
</ul>
</div>
</div>



<div class="brick-box">
<div class="layui-tab" lay-filter="movieTabBrief">
<div class="box-hd">
<h2 class="title">电影</h2>
<div class="more">
<ul class="layui-tab-title">
<li class="layui-this">CN(中国大陆)	</li>
<li>HK/TW(港台)</li>
<li>EU/US(欧美)</li>
<li>JP(日)</li>
<li>KR(韩)</li>
<li>Other(其他)</li>
</ul>
</div>
</div>
<div class="layui-tab-content">
<div class="layui-tab-item layui-show">
<div class="brick-list">
<ul class="layui-row layui-col-space10"> <li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8196" title="Dying To Survive 2018 1080p Blu-ray HEVC 10bit Atmos TrueHD 7.1-piekei@Dream" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img.pterclub.com/images/2022/06/17/p2519071023.jpg">
</a>
</div>
<h3 class="title"><a href="details.php?id=8196" title="Dying To Survive 2018 1080p Blu-ray HEVC 10bit Atmos TrueHD 7.1-piekei@Dream" target="_blank">Dying To Survive 2018 1080p Blu-ray HEVC 10bit Atmos TrueHD <span class="__cf_email__" data-cfemail="eddac3dcc09d8488868884ada99f888c80">[email&#160;protected]</span></a></h3>
<p class="desc">我不是药神 徐峥 国语中字</p>
<div class="rating tid_8196">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">19</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8164" title="Up Your Nose 2022 1080p WEB-DL DDP5.1 AAC H.265-HDSWEB" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img9.doubanio.com/view/photo/l_ratio_poster/public/p2873818227.jpg">
</a>
</div>
<h3 class="title"><a href="details.php?id=8164" title="Up Your Nose 2022 1080p WEB-DL DDP5.1 AAC H.265-HDSWEB" target="_blank">Up Your Nose 2022 1080p WEB-DL DDP5.1 AAC H.265-HDSWEB</a></h3>
<p class="desc">目中无人 / 盲侠</p>
<div class="rating tid_8164">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">8</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8156" title="Ashes.Of.Time.Redux.2008.BluRay.1080p.x264.DTS.2Audios-CMCT" target="_blank">
<img lay-src="https://images.weserv.nl/?url=http://images.blu-ray.com/movies/covers/2837_front.jpg">
</a>
</div>
<h3 class="title"><a href="details.php?id=8156" title="Ashes.Of.Time.Redux.2008.BluRay.1080p.x264.DTS.2Audios-CMCT" target="_blank">Ashes.Of.Time.Redux.2008.BluRay.1080p.x264.DTS.2Audios-CMCT</a></h3>
<p class="desc">东邪西毒：终极版 [国粤双语][王家卫作品系列之（四）]</p>
<div class="rating tid_8156">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">15</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8155" title="Lust, Caution (2007) (1080p BluRay x265 HEVC 10bit AAC 7.1 Chinese Tigole)" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img9.doubanio.com/view/photo/s_ratio_poster/public/p453716305.jpg">
</a>
</div>
<h3 class="title"><a href="details.php?id=8155" title="Lust, Caution (2007) (1080p BluRay x265 HEVC 10bit AAC 7.1 Chinese Tigole)" target="_blank">Lust, Caution (2007) (1080p BluRay x265 HEVC 10bit AAC 7.1 Chinese Tigole)</a></h3>
<p class="desc">色戒</p>
<div class="rating tid_8155">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">28</span>
<span class="layui-badge layui-bg-cyan" title="下载">1</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8126" title="Snipers 2022 2160p WEB-DL 60fps HEVC 10bit DDP-DBTV" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img9.doubanio.com/view/photo/l_ratio_poster/public/p2738601191.jpg">
</a>
</div>
<h3 class="title"><a href="details.php?id=8126" title="Snipers 2022 2160p WEB-DL 60fps HEVC 10bit DDP-DBTV" target="_blank">Snipers 2022 2160p WEB-DL 60fps HEVC 10bit DDP-DBTV</a></h3>
<p class="desc">最冷的枪 / 狙击手 导演: 张艺谋 / 张末 编剧: 陈宇 主演: 陈永胜 / 章宇 / 张译 / 刘奕铁 / 黄炎</p>
<div class="rating tid_8126">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">10</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8106" title="目中无人.HD1080P.2022.WEB-DL.AAC.H.264" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img1.doubanio.com/view/photo/l/public/p2873818227.webp">
</a>
</div>
<h3 class="title"><a href="details.php?id=8106" title="目中无人.HD1080P.2022.WEB-DL.AAC.H.264" target="_blank">目中无人.HD1080P.2022.WEB-DL.AAC.H.264</a></h3>
<p class="desc">电影讲述身怀绝技的盲眼“捉刀人”成瞎子，遇上惨遭灭门和凌辱的酒家女倪燕，原本不想插手的他逐渐被卷入一场势力庞大的暗黑纷争中，成瞎子开始踏上了寻求公道的复仇之路，他的真实身份也随之揭晓。</p>
<div class="rating tid_8106">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">13</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8101" title="Dearest 2014 4K WEB-DL AAC H.265-OurTV" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://i.loli.net/2018/06/29/5b362869dce1a.jpg">
</a>
</div>
<h3 class="title"><a href="details.php?id=8101" title="Dearest 2014 4K WEB-DL AAC H.265-OurTV" target="_blank">Dearest 2014 4K WEB-DL AAC H.265-OurTV</a></h3>
<p class="desc">亲爱的/亲爱的小孩/打拐/家之亲爱的小孩 | 主演: 赵薇 黄渤 佟大为 郝蕾 张译 国语无字【4K-HEVC版】*BesTV4K高码*</p>
<div class="rating tid_8101">
 <span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">3</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8098" title="我的姐姐.国语中字.2021.1080P.WEB-DL.H264.AAC.mp4" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://www.axjhd.com/attachment/moviedetails/49170.jpg">
</a>
</div>
<h3 class="title"><a href="details.php?id=8098" title="我的姐姐.国语中字.2021.1080P.WEB-DL.H264.AAC.mp4" target="_blank">我的姐姐.国语中字.2021.1080P.WEB-DL.H264.AAC.mp4</a></h3>
<p class="desc"></p>
<div class="rating tid_8098">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-cyan" title="下载">5</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8084" title="Trainee God of Wealth 2022 2160p WEB-DL H.265 AAC-PTerWEB" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img9.doubanio.com/view/photo/l_ratio_poster/public/p2873622823.jpg">
</a>
</div>
<h3 class="title"><a href="details.php?id=8084" title="Trainee God of Wealth 2022 2160p WEB-DL H.265 AAC-PTerWEB" target="_blank">Trainee God of Wealth 2022 2160p WEB-DL H.265 AAC-PTerWEB</a></h3>
<p class="desc">冒牌财神爷 | 导演：史冰 主演：贾冰 于洋 克拉拉 国语中字</p>
<div class="rating tid_8084">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">5</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8079" title="Kill Zone AKA Saat po long 2005 1080p Blu-ray REMUX AVC DTS-HD MA 5.1-RMS" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img2.doubanio.com/view/photo/l_ratio_poster/public/p2250158341.jpg">
</a>
</div>
<h3 class="title"><a href="details.php?id=8079" title="Kill Zone AKA Saat po long 2005 1080p Blu-ray REMUX AVC DTS-HD MA 5.1-RMS" target="_blank">Kill Zone AKA Saat po long 2005 1080p Blu-ray REMUX AVC DTS-HD MA 5.1-RMS</a></h3>
<p class="desc">杀破狼 / SPL / Kill Zone / Saat po long</p>
<div class="rating tid_8079">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
 <span class="layui-badge layui-bg-green" title="上传">12</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8077" title="西游记之大圣归来.Monkey.King.Hero.Is.Back.2015.BD-1080p.X264.AAC.2Audio.CHS.ENG-99Mp4.mp4" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img1.doubanio.com/view/photo/s_ratio_poster/public/p2255028780.jpg">
</a>
</div>
<h3 class="title"><a href="details.php?id=8077" title="西游记之大圣归来.Monkey.King.Hero.Is.Back.2015.BD-1080p.X264.AAC.2Audio.CHS.ENG-99Mp4.mp4" target="_blank">西游记之大圣归来.Monkey.King.Hero.Is.Back.2015.BD-1080p.X264.AAC.2Audio.CHS.ENG-99Mp4.mp4</a></h3>
<p class="desc"></p>
<div class="rating tid_8077">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-cyan" title="下载">3</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8000" title="奇迹·笨小孩 2022 Nice View 2022 WEB-DL 1080p H.264 DDP 5.1 & AAC 2Audios-Dave" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img2.doubanio.com/view/photo/s_ratio_poster/public/p2842327103.jpg">
</a>
</div>
<h3 class="title"><a href="details.php?id=8000" title="奇迹·笨小孩 2022 Nice View 2022 WEB-DL 1080p H.264 DDP 5.1 & AAC 2Audios-Dave" target="_blank">奇迹·笨小孩 2022 Nice View 2022 WEB-DL 1080p H.264 DDP 5.1 & AAC 2Audios-Dave</a></h3>
<p class="desc">奇迹·笨小孩 2022 高码率</p>
<div class="rating tid_8000">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">2</span>
</p>
</div>
</li>
</ul>
</div>
</div>
<div class="layui-tab-item">
<div class="brick-list">
<ul class="layui-row layui-col-space10">
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8185" title="Listen Before You Sing 2021 1080p BluRay x264-WiKi" target="_blank">
 <img lay-src="https://images.weserv.nl/?url=https://s2.loli.net/2022/06/10/lXiakUqOdFBxt1K.jpg">
</a>
</div>
<h3 class="title"><a href="details.php?id=8185" title="Listen Before You Sing 2021 1080p BluRay x264-WiKi" target="_blank">Listen Before You Sing 2021 1080p BluRay x264-WiKi</a></h3>
<p class="desc">听见歌 再唱 / 听见歌在唱 内封中字</p>
<div class="rating tid_8185">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">8</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8178" title="Terminal 2018 1080p Blu-ray AVC DTS-HD MA 5.1-Palm@MTeam" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://hdatmos.club/attachments/202206/202206091055359f5cbbd5a8fd1bf4fbc213bcfda5ddaf.jpg.thumb.jpg">
</a>
</div>
<h3 class="title"><a href="details.php?id=8178" title="Terminal 2018 1080p Blu-ray AVC DTS-HD MA 5.1-Palm@MTeam" target="_blank">Terminal 2018 1080p Blu-ray AVC DTS-HD MA <span class="__cf_email__" data-cfemail="5a6f746b770a3b36371a170e3f3b37">[email&#160;protected]</span></a></h3>
<p class="desc">终端 / 刺杀终点战(台) / 喋血双红(港) 【DIY】 R3简繁中字***女子報仇，十年未晚</p>
<div class="rating tid_8178">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">3</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8173" title="Black Vengeance 1987 BluRay 1080p x264 FLAC 2Audios-CMCT" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img9.doubanio.com/view/photo/l_ratio_poster/public/p2557818615.jpg">
</a>
</div>
<h3 class="title"><a href="details.php?id=8173" title="Black Vengeance 1987 BluRay 1080p x264 FLAC 2Audios-CMCT" target="_blank">Black Vengeance 1987 BluRay 1080p x264 FLAC 2Audios-CMCT</a></h3>
<p class="desc">英雄好汉/江湖情2：英雄好汉 | 导演: 黄泰来 主演: 周润发 刘德华 万梓良 国粤双语 国配/简繁中字</p>
<div class="rating tid_8173">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">5</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8133" title="The Romance In Paris 1975 NTSC DVD9 DD 2.0-Custom IVL-PTer" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img.pterclub.com/images/2022/06/12/Romance-In-Paris-Poster.jpg">
</a>
</div>
<h3 class="title"><a href="details.php?id=8133" title="The Romance In Paris 1975 NTSC DVD9 DD 2.0-Custom IVL-PTer" target="_blank">The Romance In Paris 1975 NTSC DVD9 DD 2.0-Custom IVL-PTer</a></h3>
<p class="desc">巴黎艳遇 国语，简繁英软字幕 | DIY IVL版本DVD | 邵氏出品，必属佳片</p>
<div class="rating tid_8133">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">8</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8122" title="Hong Kong 1941 1984 BluRay 1080p HEVC 10bit TrueHD5.1-piekei@Dream" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://s1.ax1x.com/2020/08/19/d3FD3Q.jpg">
</a>
</div>
<h3 class="title"><a href="details.php?id=8122" title="Hong Kong 1941 1984 BluRay 1080p HEVC 10bit TrueHD5.1-piekei@Dream" target="_blank">Hong Kong 1941 1984 BluRay 1080p HEVC 10bit <span class="__cf_email__" data-cfemail="f7a3858292bfb3c2d9c6da879e929c929eb7b38592969a">[email&#160;protected]</span></a></h3>
<p class="desc">【香港經典影片系列】等待黎明(1984) 国粤双语 简繁英字幕</p>
<div class="rating tid_8122">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">1</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8094" title="The Sadness 2021 2160p GER UHD Blu-ray Remux HEVC DTS-HD MA 5.1-Iceyumao@Dream" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img.hdhome.org/images/2022/04/16/53bb9069b5a70277183ec5773960f840.png">
</a>
</div>
<h3 class="title"><a href="details.php?id=8094" title="The Sadness 2021 2160p GER UHD Blu-ray Remux HEVC DTS-HD MA 5.1-Iceyumao@Dream" target="_blank">The Sadness 2021 2160p GER UHD Blu-ray Remux HEVC DTS-HD MA <span class="__cf_email__" data-cfemail="b68398879bffd5d3cfc3dbd7d9f6f2c4d3d7db">[email&#160;protected]</span></a></h3>
<p class="desc">哭悲 2021 导演:贾宥廷|主演:朱轩洋\王自强\邱彦翔\蓝苇华\蔡昌宪\雷嘉纳</p>
<div class="rating tid_8094">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">8</span>
</p>
 </div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8092" title="Out of Inferno 2013 2D Blu-ray 1080p AVC DTS-HD MA 5.1-TTG" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img9.doubanio.com/view/photo/l_ratio_poster/public/p2147894527.jpg">
</a>
</div>
<h3 class="title"><a href="details.php?id=8092" title="Out of Inferno 2013 2D Blu-ray 1080p AVC DTS-HD MA 5.1-TTG" target="_blank">Out of Inferno 2013 2D Blu-ray 1080p AVC DTS-HD MA 5.1-TTG</a></h3>
<p class="desc">逃出生天 古天乐 刘青云 李心洁 港版原盘 国粤双语 中英文字幕</p>
<div class="rating tid_8092">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">4</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8058" title="Peace Hotel 1995 BluRay 1080p 2Audio TrueHD 5.1 x265 10bit-BeiTai" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://iili.io/Xit5tn.jpg">
</a>
</div>
<h3 class="title"><a href="details.php?id=8058" title="Peace Hotel 1995 BluRay 1080p 2Audio TrueHD 5.1 x265 10bit-BeiTai" target="_blank">Peace Hotel 1995 BluRay 1080p 2Audio TrueHD 5.1 x265 10bit-BeiTai</a></h3>
<p class="desc">和平饭店 国粤双语TrueHD5.1/原盘繁简英SUP字幕/章节</p>
<div class="rating tid_8058">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">11</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8049" title="Radio!Ready Oh! 2020 1080p WEB-DL H.264 AAC-PTerWEB" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img9.doubanio.com/view/photo/l_ratio_poster/public/p2623882687.jpg">
</a>
</div>
<h3 class="title"><a href="details.php?id=8049" title="Radio!Ready Oh! 2020 1080p WEB-DL H.264 AAC-PTerWEB" target="_blank">Radio!Ready Oh! 2020 1080p WEB-DL H.264 AAC-PTerWEB</a></h3>
<p class="desc">阳光电台不打烊 | 导演：洪子鹏 | 主演：刘亮佐 黄镫辉 林鹤轩 国语中字</p>
<div class="rating tid_8049">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">1</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8041" title="Hot War 1998 Blu-ray 1080p Remux AVC LPCM 2.0-piekei@Dream     審核中" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img9.doubanio.com/view/photo/l_ratio_poster/public/p967686414.jpg">
</a>
</div>
<h3 class="title"><a href="details.php?id=8041" title="Hot War 1998 Blu-ray 1080p Remux AVC LPCM 2.0-piekei@Dream     審核中" target="_blank">Hot War 1998 Blu-ray 1080p Remux AVC LPCM <span class="__cf_email__" data-cfemail="1a28342a376a737f717f735a5e687f7b77">[email&#160;protected]</span>    審核中</a></h3>
<p class="desc">幻影特攻 (1998) 国粤双语 繁中 / 簡中 / 英文字幕</p>
<div class="rating tid_8041">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">1</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7987" title="The Stool Pigeon 2010 HKG Blu-ray 1080P AVC DTS-HD MA 7.1-doraemon" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img9.doubanio.com/view/photo/s_ratio_poster/public/p586242594.jpg">
</a>
</div>
<h3 class="title"><a href="details.php?id=7987" title="The Stool Pigeon 2010 HKG Blu-ray 1080P AVC DTS-HD MA 7.1-doraemon" target="_blank">The Stool Pigeon 2010 HKG Blu-ray 1080P AVC DTS-HD MA 7.1-doraemon</a></h3>
<p class="desc">线人 自购港版原盘 国粤双语 简繁英字幕</p>
<div class="rating tid_7987">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">12</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7957" title="驱魔道长.1993.国语中字.aac.h264.mp4" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img9.doubanio.com/view/photo/s_ratio_poster/public/p2238829096.jpg">
</a>
</div>
<h3 class="title"><a href="details.php?id=7957" title="驱魔道长.1993.国语中字.aac.h264.mp4" target="_blank">驱魔道长.1993.国语中字.aac.h264.mp4</a></h3>
<p class="desc"></p>
<div class="rating tid_7957">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">1</span>
</p>
</div>
</li>
</ul>
</div>
</div>
<div class="layui-tab-item">
<div class="brick-list">
<ul class="layui-row layui-col-space10">
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8203" title="Batman v Superman: Dawn of Justice 2016 Remastered IMAX Ultimate Edition 2160p UHD BluRay x265 DV HDR TrueHD Atmos mUHD-FRDS" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://images.static-bluray.com/movies/covers/286720_slip.jpg">
</a>
</div>
<h3 class="title"><a href="details.php?id=8203" title="Batman v Superman: Dawn of Justice 2016 Remastered IMAX Ultimate Edition 2160p UHD BluRay x265 DV HDR TrueHD Atmos mUHD-FRDS" target="_blank">Batman v Superman: Dawn of Justice 2016 Remastered IMAX Ultimate Edition 2160p UHD BluRay x265 DV HDR TrueHD Atmos mUHD-FRDS</a></h3>
<p class="desc">【蝙蝠侠大战超人：正义黎明/蝙蝠侠与超人：正义黎明/蝙蝠侠大战超人/蝙蝠侠对超人：正义曙光(港/台)】mUHD作品 4k杜比视界版本 国英评 特效双语 Hybrid DV P8</p>
<div class="rating">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">2</span>
<span class="layui-badge layui-bg-cyan" title="下载">8</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8202" title="American Pie 1999 UNRATED BluRay 1080p Hevc 10bit DTS-HD MA5.1-Iceyumao@Dream" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img9.doubanio.com/view/photo/l_ratio_poster/public/p1446184593.jpg">
</a>
</div>
<h3 class="title"><a href="details.php?id=8202" title="American Pie 1999 UNRATED BluRay 1080p Hevc 10bit DTS-HD MA5.1-Iceyumao@Dream" target="_blank">American Pie 1999 UNRATED BluRay 1080p Hevc 10bit DTS-HD <span class="__cf_email__" data-cfemail="89c4c8bca7b8a4c0eaecf0fce4e8e6c9cdfbece8e4">[email&#160;protected]</span></a></h3>
<p class="desc">美国派 / 美国陷饼 / 美国处男 / East Great Falls High</p>
<div class="rating">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">1</span>
<span class="layui-badge layui-bg-cyan" title="下载">4</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8198" title="X 2022 1080p Blu-ray AVC DTS-HD MA 5.1-Thor@HDSky" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img9.doubanio.com/view/photo/l_ratio_poster/public/p2870867333.jpg">
</a>
</div>
<h3 class="title"><a href="details.php?id=8198" title="X 2022 1080p Blu-ray AVC DTS-HD MA 5.1-Thor@HDSky" target="_blank">X 2022 1080p Blu-ray AVC DTS-HD MA <span class="__cf_email__" data-cfemail="b98c978894edd1d6cbf9f1fdead2c0">[email&#160;protected]</span></a></h3>
<p class="desc">X【DIY简繁/双语字幕】打着恐怖片幌子的颜色片 女主角们都太拼了</p>
<div class="rating">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">6</span>
<span class="layui-badge layui-bg-cyan" title="下载">2</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8195" title="The Bourne Supremacy 2004 UHD BluRay 2160p 10bit HDR 2Audio DTS-X 7.1 x265-beAst" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://images.static-bluray.com/movies/covers/164765_slip.jpg">
</a>
</div>
<h3 class="title"><a href="details.php?id=8195" title="The Bourne Supremacy 2004 UHD BluRay 2160p 10bit HDR 2Audio DTS-X 7.1 x265-beAst" target="_blank">The Bourne Supremacy 2004 UHD BluRay 2160p 10bit HDR 2Audio DTS-X 7.1 x265-beAst</a></h3>
<p class="desc">谍影重重2/叛谍追击2:机密圈套(港)/神鬼认证:神鬼疑云(台)/伯恩的身份2/至尊伯恩/伯恩的霸权 国英双语DTS-X 7.1/英语导评/英简繁双语&导评英语SUP字幕/章节</p>
<div class="rating">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">10</span>
<span class="layui-badge layui-bg-cyan" title="下载">2</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8193" title="The Northman 2022 2160p UHD BluRay x265 DV HDR TrueHD Atmos mUHD-FRDS" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://images.static-bluray.com/movies/covers/314414_front.jpg">
</a>
</div>
<h3 class="title"><a href="details.php?id=8193" title="The Northman 2022 2160p UHD BluRay x265 DV HDR TrueHD Atmos mUHD-FRDS" target="_blank">The Northman 2022 2160p UHD BluRay x265 DV HDR TrueHD Atmos mUHD-FRDS</a></h3>
<p class="desc">【北欧人/北方人(台)】mUHD作品 4k杜比视界版本 DV P7 简繁双语</p>
<div class="rating">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">8</span>
 <span class="layui-badge layui-bg-cyan" title="下载">1</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8190" title="Cymbeline 2014 1080p Blu-ray AVC DTS-HD MA 5.1-DIY@HDSky" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://shoot.photo/images/2022/06/15/PXzGT.webp">
</a>
</div>
<h3 class="title"><a href="details.php?id=8190" title="Cymbeline 2014 1080p Blu-ray AVC DTS-HD MA 5.1-DIY@HDSky" target="_blank">Cymbeline 2014 1080p Blu-ray AVC DTS-HD MA <span class="__cf_email__" data-cfemail="32071c031f767b6b727a7661594b">[email&#160;protected]</span></a></h3>
<p class="desc">辛白林/混乱【DIY简繁/双语字幕】“莎翁晚期同名喜剧改编”</p>
<div class="rating">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">4</span>
<span class="layui-badge layui-bg-cyan" title="下载">1</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8187" title="Transformers The Last Knight 2017 2160p REMUX UHD Blu-ray HEVC Atmos TrueHD 7.1" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img9.doubanio.com/view/photo/l_ratio_poster/public/p2462475058.jpg">
</a>
</div>
<h3 class="title"><a href="details.php?id=8187" title="Transformers The Last Knight 2017 2160p REMUX UHD Blu-ray HEVC Atmos TrueHD 7.1" target="_blank">Transformers The Last Knight 2017 2160p REMUX UHD Blu-ray HEVC Atmos TrueHD 7.1</a></h3>
<p class="desc">变形金刚5：最后的骑士/Transformers: The Last Knight/变形金刚：终极战士(港)/变形金刚5：最终骑士(台)/变形金刚5/变5/Transformers 5</p>
<div class="rating">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">9</span>
<span class="layui-badge layui-bg-cyan" title="下载">2</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8170" title="The Bourne Identity 2002 UHD BluRay 2160p 10bit HDR 2Audio DTS-X 7.1 x265-beAst" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://images.static-bluray.com/movies/covers/164766_slip.jpg">
</a>
</div>
<h3 class="title"><a href="details.php?id=8170" title="The Bourne Identity 2002 UHD BluRay 2160p 10bit HDR 2Audio DTS-X 7.1 x265-beAst" target="_blank">The Bourne Identity 2002 UHD BluRay 2160p 10bit HDR 2Audio DTS-X 7.1 x265-beAst</a></h3>
<p class="desc">谍影重重/伯恩的身份/叛谍追击(港)/神鬼认证(台)/身份的迷惑 国英双语DTS-X 7.1/英语导评/英简繁双语&导评英语SUP字幕/章节</p>
<div class="rating">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">11</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8167" title="Reservoir Dogs 1992 JPN Blu-ray 1080p AVC DTS-HD MA 5.1-CMCT" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img9.doubanio.com/view/photo/l_ratio_poster/public/p1851340431.jpg">
</a>
</div>
<h3 class="title"><a href="details.php?id=8167" title="Reservoir Dogs 1992 JPN Blu-ray 1080p AVC DTS-HD MA 5.1-CMCT" target="_blank">Reservoir Dogs 1992 JPN Blu-ray 1080p AVC DTS-HD MA 5.1-CMCT</a></h3>
<p class="desc">落水狗/霸道横行(台)/水库狗(港) 原盘DIY简繁/双语特效/导评/锁事 【日版原盘】</p>
<div class="rating">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">4</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8165" title="字典情人 The Sleeping Dictionary 2003 1080p WEBRip x265 10bit-abcdefg" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://m.media-amazon.com/images/M/MV5BMTA1NTE3Njk0MDJeQTJeQWpwZ15BbWU3MDMwOTQxMzE@._V1_UX352_.jpg">
</a>
</div>
<h3 class="title"><a href="details.php?id=8165" title="字典情人 The Sleeping Dictionary 2003 1080p WEBRip x265 10bit-abcdefg" target="_blank">字典情人 The Sleeping Dictionary 2003 1080p WEBRip x265 10bit-abcdefg</a></h3>
<p class="desc">杰西卡·阿尔芭为艺术献身 字典情人 The Sleeping Dictionary (2003) qp=18</p>
<div class="rating">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">13</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8161" title="The Wave 2008 BluRay REMUX 1080p AVC DTS-HD MA5.1-HDS" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img1.doubanio.com/view/photo/l_ratio_poster/public/p1344888983.jpg">
</a>
</div>
<h3 class="title"><a href="details.php?id=8161" title="The Wave 2008 BluRay REMUX 1080p AVC DTS-HD MA5.1-HDS" target="_blank">The Wave 2008 BluRay REMUX 1080p AVC DTS-HD MA5.1-HDS</a></h3>
<p class="desc">浪潮/恶魔教室(台)/挥手礼/波浪/白恤暴潮(港)[简繁字幕]</p>
<div class="rating">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">5</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8158" title="The Four Feathers 2002 1080p GER Blu-ray VC-1 DTS-HD MA 5.1-ASD87@HDSky" target="_blank">
<img lay-src="https://images.weserv.nl/?url=http://img2.doubanio.com/view/photo/l/public/p686597811.jpg">
</a>
</div>
<h3 class="title"><a href="details.php?id=8158" title="The Four Feathers 2002 1080p GER Blu-ray VC-1 DTS-HD MA 5.1-ASD87@HDSky" target="_blank">The Four Feathers 2002 1080p GER Blu-ray VC-1 DTS-HD MA <span class="__cf_email__" data-cfemail="ae9b809f83effdea9699eee6eafdc5d7">[email&#160;protected]</span></a></h3>
<p class="desc">四根羽毛 / 关键时刻 / 再战豪情 德131分钟版 DIY简繁字幕</p>
<div class="rating">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">5</span>
</p>
</div>
</li>
</ul>
</div>
</div>
<div class="layui-tab-item">
<div class="brick-list">
<ul class="layui-row layui-col-space10">
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8201" title="Itami Juzo FILM COLLECTION Blu-ray Box II" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img9.doubanio.com/view/photo/l_ratio_poster/public/p2535455590.jpg">
</a>
</div>
<h3 class="title"><a href="details.php?id=8201" title="Itami Juzo FILM COLLECTION Blu-ray Box II" target="_blank">Itami Juzo FILM COLLECTION Blu-ray Box II</a></h3>
<p class="desc">伊丹十三电影集II（2012）CC收藏版</p>
<div class="rating">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">2</span>
<span class="layui-badge layui-bg-cyan" title="下载">2</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8139" title="Be My Slave 2012 Blu-ray 1080p AVC LPCM 2.0-ermangwy@CHDBits" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://s2.loli.net/2022/06/13/98s3ABRFv4aYidj.jpg">
</a>
</div>
<h3 class="title"><a href="details.php?id=8139" title="Be My Slave 2012 Blu-ray 1080p AVC LPCM 2.0-ermangwy@CHDBits" target="_blank">Be My Slave 2012 Blu-ray 1080p AVC LPCM <span class="__cf_email__" data-cfemail="ab99859b86ced9c6cac5ccdcd2ebe8e3efe9c2dfd8">[email&#160;protected]</span></a></h3>
<p class="desc">请做我的奴隶2012 坛蜜老师经典作品，出道即巅峰 DIY简繁特效中字</p>
<div class="rating">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">23</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8117" title="Harakiri aka Seppuku 1962 BluRay 1080p x265 10bit MNHD-FRDS" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://s3.bmp.ovh/imgs/2022/06/10/040fe4423e3e3eae.jpg">
</a>
</div>
<h3 class="title"><a href="details.php?id=8117" title="Harakiri aka Seppuku 1962 BluRay 1080p x265 10bit MNHD-FRDS" target="_blank">Harakiri aka Seppuku 1962 BluRay 1080p x265 10bit MNHD-FRDS</a></h3>
<p class="desc">切腹/剖腹/Harakiri/Seppuku/小林正树导演作品/仲代达矢 三国连太郎 岩下志麻主演/豆瓣评分9.3 日语中字/简中字幕 10bit HEVC 版本</p>
<div class="rating">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">6</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7909" title="The Confidence Man JP Princess 2020 Blu-ray 1080p AVC DTS-HD MA 5.1-DIY@TTG" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img9.doubanio.com/view/photo/l_ratio_poster/public/p2610002857.jpg">
</a>
</div>
<h3 class="title"><a href="details.php?id=7909" title="The Confidence Man JP Princess 2020 Blu-ray 1080p AVC DTS-HD MA 5.1-DIY@TTG" target="_blank">The Confidence Man JP Princess 2020 Blu-ray 1080p AVC DTS-HD MA <span class="__cf_email__" data-cfemail="dde8f3ecf09994849d89899a">[email&#160;protected]</span></a></h3>
<p class="desc">行骗天下JP：公主篇/信用欺詐師JP：公主篇(港)DIY 官譯繁简中字</p>
<div class="rating">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">7</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7843" title="I Am a Hero 2015 1080p Blu-ray AVC DTS-HD MA 5.1-AA@OurBits" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img2.doubanio.com/view/photo/l_ratio_poster/public/p2395074307.jpg">
</a>
</div>
<h3 class="title"><a href="details.php?id=7843" title="I Am a Hero 2015 1080p Blu-ray AVC DTS-HD MA 5.1-AA@OurBits" target="_blank">I Am a Hero 2015 1080p Blu-ray AVC DTS-HD MA <span class="__cf_email__" data-cfemail="665348574b272726291314240f1215">[email&#160;protected]</span></a></h3>
<p class="desc">请叫我英雄/丧尸末日战(港) DIY简繁字幕</p>
<div class="rating">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">3</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7813" title="崖上的波妞.Ponyo.2008.JAPANESE.720p.BluRay.H264.AAC-VXT.mp4" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img1.doubanio.com/view/photo/s_ratio_poster/public/p2627847859.jpg">
</a>
</div>
<h3 class="title"><a href="details.php?id=7813" title="崖上的波妞.Ponyo.2008.JAPANESE.720p.BluRay.H264.AAC-VXT.mp4" target="_blank">崖上的波妞.Ponyo.2008.JAPANESE.720p.BluRay.H264.AAC-VXT.mp4</a></h3>
<p class="desc"></p>
<div class="rating">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">2</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7793" title="龙子太郎DVD国语配音" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img2.doubanio.com/view/photo/s_ratio_poster/public/p2188460823.jpg">
</a>
</div>
<h3 class="title"><a href="details.php?id=7793" title="龙子太郎DVD国语配音" target="_blank">龙子太郎DVD国语配音</a></h3>
<p class="desc"></p>
<div class="rating">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">3</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7587" title="Nankyoku Ryorinin 2009 1080p BluRay x264 AAC-WiKi" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img9.doubanio.com/view/photo/l_ratio_poster/public/p575432919.jpg">
</a>
</div>
<h3 class="title"><a href="details.php?id=7587" title="Nankyoku Ryorinin 2009 1080p BluRay x264 AAC-WiKi" target="_blank">Nankyoku Ryorinin 2009 1080p BluRay x264 AAC-WiKi</a></h3>
<p class="desc">南极料理人 内封中字</p>
<div class="rating">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">5</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7396" title="Bubble.2022.1080P.WEB-DL.x264.AAC-YYDS" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img1.doubanio.com/view/photo/s_ratio_poster/public/p2869038538.jpg">
</a>
</div>
<h3 class="title"><a href="details.php?id=7396" title="Bubble.2022.1080P.WEB-DL.x264.AAC-YYDS" target="_blank">Bubble.2022.1080P.WEB-DL.x264.AAC-YYDS</a></h3>
<p class="desc">泡泡 [内嵌简中字幕]</p>
<div class="rating">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">8</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7395" title="Tokyo.Tower.2008.1080p.BluRay.x264.AAC" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img1.doubanio.com/view/photo/s_ratio_poster/public/p2177767108.jpg">
</a>
</div>
<h3 class="title"><a href="details.php?id=7395" title="Tokyo.Tower.2008.1080p.BluRay.x264.AAC" target="_blank">Tokyo.Tower.2008.1080p.BluRay.x264.AAC</a></h3>
<p class="desc">东京塔 / 东京铁塔：我的母亲父亲 / 东京铁塔：老妈和我、有时还有老爸 [简中字幕]</p>
<div class="rating">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">3</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7264" title="Your Eyes Tell 2020 Blu-ray 1080p AVC DTS-HD MA 5.1-DIY@TTG" target="_blank">
 <img lay-src="https://images.weserv.nl/?url=https://s2.loli.net/2022/04/22/PSdcaV7u3FzkKEq.jpg">
</a>
</div>
<h3 class="title"><a href="details.php?id=7264" title="Your Eyes Tell 2020 Blu-ray 1080p AVC DTS-HD MA 5.1-DIY@TTG" target="_blank">Your Eyes Tell 2020 Blu-ray 1080p AVC DTS-HD MA <span class="__cf_email__" data-cfemail="093c2738244d4050495d5d4e">[email&#160;protected]</span></a></h3>
<p class="desc">你的眼睛在追问/看不见的爱(港)/你的眼睛在问/想见你的爱(台)/只有你日版「【DIY】 官譯繁简中字」</p>
<div class="rating">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">7</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7192" title="Audition 1999 GBR ARROW 1080p BluRay AVC DTS-HD MA 5.1-lingfriendly@OurBits" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://images.static-bluray.com/movies/covers/143849_front.jpg">
</a>
</div>
<h3 class="title"><a href="details.php?id=7192" title="Audition 1999 GBR ARROW 1080p BluRay AVC DTS-HD MA 5.1-lingfriendly@OurBits" target="_blank">Audition 1999 GBR ARROW 1080p BluRay AVC DTS-HD MA <span class="__cf_email__" data-cfemail="bd88938c90d1d4d3dadbcfd4d8d3d9d1c4fdf2c8cfffd4c9ce">[email&#160;protected]</span></a></h3>
<p class="desc">切肤之爱/再婚惊魂记 【DIY简繁中字】* |二十五大最恐怖电影 十大禁片之一 鬼子变态重口味慎下|* -==低调下载==-</p>
<div class="rating">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">2</span>
</p>
</div>
</li>
</ul>
</div>
</div>
<div class="layui-tab-item">
<div class="brick-list">
<ul class="layui-row layui-col-space10">
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8149" title="Late Spring 2014 HK Blu-ray 1080p AVC TrueHD 5.1-IWUBEN@OurBits" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img.pterclub.com/images/2022/05/20/959906786311355f4484ba88c260dd2b.jpg">
</a>
</div>
<h3 class="title"><a href="details.php?id=8149" title="Late Spring 2014 HK Blu-ray 1080p AVC TrueHD 5.1-IWUBEN@OurBits" target="_blank">Late Spring 2014 HK Blu-ray 1080p AVC TrueHD <span class="__cf_email__" data-cfemail="cdf8e3fce0849a988f88838d82b8bf8fa4b9be">[email&#160;protected]</span></a></h3>
<p class="desc">春天/裸雕师欲火重生路(台)/春/晚春/春之雕零(港) | 港版原盘DIY简繁+简繁英双语字幕</p>
<div class="rating">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">13</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8034" title="Parasite AKA Gisaengchung 2019 BluRay 1080p x265 10bit MNHD-FRDS" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img9.doubanio.com/view/photo/l_ratio_poster/public/p2561439800.jpg">
</a>
</div>
<h3 class="title"><a href="details.php?id=8034" title="Parasite AKA Gisaengchung 2019 BluRay 1080p x265 10bit MNHD-FRDS" target="_blank">Parasite AKA Gisaengchung 2019 BluRay 1080p x265 10bit MNHD-FRDS</a></h3>
<p class="desc">寄生虫 / 上流寄生族(港) / 寄生上流(台) 中文特效 10bit HEVC 版本</p>
<div class="rating">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">8</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7714" title="Cyber Hell Exposing an Internet Horror.网络炼狱：揭发N号房.2022.HD1080P.X264.AAC.Korean.CHS.BDYS" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img1.doubanio.com/view/photo/s_ratio_poster/public/p2871791108.jpg">
</a>
</div>
<h3 class="title"><a href="details.php?id=7714" title="Cyber Hell Exposing an Internet Horror.网络炼狱：揭发N号房.2022.HD1080P.X264.AAC.Korean.CHS.BDYS" target="_blank">Cyber Hell Exposing an Internet Horror.网络炼狱：揭发N号房.2022.HD1080P.X264.AAC.Korean.CHS.BDYS</a></h3>
<p class="desc">网络炼狱：揭发N号房.2022.HD1080P</p>
<div class="rating">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">1</span>
<span class="layui-badge layui-bg-cyan" title="下载">1</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7695" title="Veteran 2015 BluRay 1080p DTS-HD MA 5.1 x264-EPiC" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img9.doubanio.com/view/photo/l_ratio_poster/public/p2251912398.jpg">
</a>
</div>
<h3 class="title"><a href="details.php?id=7695" title="Veteran 2015 BluRay 1080p DTS-HD MA 5.1 x264-EPiC" target="_blank">Veteran 2015 BluRay 1080p DTS-HD MA 5.1 x264-EPiC</a></h3>
<p class="desc">老手/辣手警探(台)/燥底师兄生擒富二代(港) | 人马针锋 张感十足 外挂中英字</p>
<div class="rating">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">3</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7651" title="解禁男女 Love and Leashes （2022）- HD1080P.X264.AAC-YYDS" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://movie.douban.com/subject/35241052/">
</a>
</div>
<h3 class="title"><a href="details.php?id=7651" title="解禁男女 Love and Leashes （2022）- HD1080P.X264.AAC-YYDS" target="_blank">解禁男女 Love and Leashes （2022）- HD1080P.X264.AAC-YYDS</a></h3>
<p class="desc">挑逗，爆笑，还有爱情，开心下载</p>
<div class="rating">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">14</span>
<span class="layui-badge layui-bg-cyan" title="下载">1</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7645" title="新世界.New.World.2013.BluRay.1080p.x265.10bit.MNHD-FRDS" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://movie.douban.com/photos/photo/1903379911/#title-anchor">
</a>
</div>
<h3 class="title"><a href="details.php?id=7645" title="新世界.New.World.2013.BluRay.1080p.x265.10bit.MNHD-FRDS" target="_blank">新世界.New.World.2013.BluRay.1080p.x265.10bit.MNHD-FRDS</a></h3>
<p class="desc">◎片　　名　신세계 ◎年　　代　2013 ◎产　　地　韩国 ◎类　　别　剧情 / 犯罪 ◎语　　言　韩语,汉语普通话 ◎上映日期　2013-02-21(韩国)</p>
<div class="rating">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">9</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7473" title="Confession 2014 1080p Blu-ray AVC DTS-HD MA 5.1-ACM" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img9.doubanio.com/view/photo/l_ratio_poster/public/p2187159568.jpg">
</a>
</div>
<h3 class="title"><a href="details.php?id=7473" title="Confession 2014 1080p Blu-ray AVC DTS-HD MA 5.1-ACM" target="_blank">Confession 2014 1080p Blu-ray AVC DTS-HD MA 5.1-ACM</a></h3>
<p class="desc">好朋友们 / Confession / Good Friends | 类别：剧情 犯罪</p>
<div class="rating">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">2</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7429" title="Steel Rain 2 2020 1080p Blu-ray AVC DTS-HD MA 5.1-NOELLE" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img9.doubanio.com/view/photo/l_ratio_poster/public/p2611996958.jpg">
</a>
</div>
<h3 class="title"><a href="details.php?id=7429" title="Steel Rain 2 2020 1080p Blu-ray AVC DTS-HD MA 5.1-NOELLE" target="_blank">Steel Rain 2 2020 1080p Blu-ray AVC DTS-HD MA 5.1-NOELLE</a></h3>
<p class="desc">铁雨2：首脑峰会/Steel Rain 2/钢铁雨2/钢铁雨2：核战危机(港)/钢铁雨：深潜行动(台)/铁雨2/铁雨2：顶上会谈/铁雨2：首脑会谈/강철비2-정상회담 | 类型:惊悚</p>
<div class="rating">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
 <span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">5</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7404" title="Ode to My Father 2014 720p BluRay x264-WiKi" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://hdchina.org/attachments/201510/201510061543383034a7b70451d9e7a7f2841936c91f5b.jpg.thumb.jpg">
</a>
</div>
<h3 class="title"><a href="details.php?id=7404" title="Ode to My Father 2014 720p BluRay x264-WiKi" target="_blank">Ode to My Father 2014 720p BluRay x264-WiKi</a></h3>
<p class="desc">国际市场/ 半世纪的诺言(港) 韩版《阿甘正传》</p>
<div class="rating">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">2</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7004" title="A Millionaire On The Run 2012 JPN Blu-ray 1080p AVC DTS-HD MA 5.1-DIY@TTG" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img2.doubanio.com/view/photo/l_ratio_poster/public/p2173869292.jpg">
</a>
</div>
<h3 class="title"><a href="details.php?id=7004" title="A Millionaire On The Run 2012 JPN Blu-ray 1080p AVC DTS-HD MA 5.1-DIY@TTG" target="_blank">A Millionaire On The Run 2012 JPN Blu-ray 1080p AVC DTS-HD MA <span class="__cf_email__" data-cfemail="695c4758442d2030293d3d2e">[email&#160;protected]</span></a></h3>
<p class="desc">五百万美元的大丈夫/高富帥跑路中(台)DIY 官譯繁简中字</p>
<div class="rating">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">10</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=6971" title="特工 The.Spy.Gone.North.2018.BDRip.1080p.mkv" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img9.doubanio.com/view/photo/s_ratio_poster/public/p2528281606.jpg">
</a>
</div>
<h3 class="title"><a href="details.php?id=6971" title="特工 The.Spy.Gone.North.2018.BDRip.1080p.mkv" target="_blank">特工 The.Spy.Gone.North.2018.BDRip.1080p.mkv</a></h3>
<p class="desc">特工 / 北风(台) / 北寒谍战(港) / 工作</p>
<div class="rating">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">2</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=6968" title="Midnight.2021.KOREAN.1080p.BluRay.x264.DDP5.1-EA" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img2.doubanio.com/view/photo/l_ratio_poster/public/p2657014411.jpg">
</a>
</div>
<h3 class="title"><a href="details.php?id=6968" title="Midnight.2021.KOREAN.1080p.BluRay.x264.DDP5.1-EA" target="_blank">Midnight.2021.KOREAN.1080p.BluRay.x264.DDP5.1-EA</a></h3>
<p class="desc">午夜 / Midnight</p>
<div class="rating">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">1</span>
</p>
</div>
</li>
</ul>
</div></div>
<div class="layui-tab-item">
<div class="brick-list">
<ul class="layui-row layui-col-space10">
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8074" title="Young and Dangerous The Prequel 1998 BluRay 1080p 2Audio TrueHD 5.1 x265 10bit-BeiTai" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://iili.io/hoOp6v.jpg">
</a>
</div>
<h3 class="title"><a href="details.php?id=8074" title="Young and Dangerous The Prequel 1998 BluRay 1080p 2Audio TrueHD 5.1 x265 10bit-BeiTai" target="_blank">Young and Dangerous The Prequel 1998 BluRay 1080p 2Audio TrueHD 5.1 x265 10bit-BeiTai</a></h3>
<p class="desc">新古惑仔之少年激斗篇 国粤双语TrueHD5.1/原盘繁简英SUP字幕/章节</p>
<div class="rating">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">4</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8013" title="RRR 2022 Hindi 1080p NF WEBRip DD 5.1 MSubs x264 - mkvAnime.mkv" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img1.doubanio.com/view/photo/s_ratio_poster/public/p2870618629.jpg">
</a>
</div>
<h3 class="title"><a href="details.php?id=8013" title="RRR 2022 Hindi 1080p NF WEBRip DD 5.1 MSubs x264 - mkvAnime.mkv" target="_blank">RRR 2022 Hindi 1080p NF WEBRip DD 5.1 MSubs x264 - mkvAnime.mkv</a></h3>
<p class="desc">双雄起义(台) / RRR (Rise Roar Revolt)</p>
<div class="rating">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">6</span>
<span class="layui-badge layui-bg-cyan" title="下载">1</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8004" title="The Mummy 1999 UHD Blu-ray 2160p HEVC HDR DTS-X-Pete@HDSky" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://m.media-amazon.com/images/M/MV5BOTJiYjBhZDgtMjhiOC00MTIzLThlNGMtMmI1NjIwM2M3YTI5XkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_.jpg">
</a>
</div>
<h3 class="title"><a href="details.php?id=8004" title="The Mummy 1999 UHD Blu-ray 2160p HEVC HDR DTS-X-Pete@HDSky" target="_blank">The Mummy 1999 UHD Blu-ray 2160p HEVC HDR <span class="__cf_email__" data-cfemail="9cd8c8cfb1c4b1ccf9e8f9dcd4d8cff7e5">[email&#160;protected]</span></a></h3>
<p class="desc">木乃伊 1999</p>
<div class="rating">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">3</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7929" title="Joint Security Area 2000 1080p JPN Blu-ray AVC Atmos TrueHD 7.1-AA@OurBits" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://www.z4a.net/images/2022/05/29/71twiD4vbXL._SL1144_.jpg">
</a>
</div>
<h3 class="title"><a href="details.php?id=7929" title="Joint Security Area 2000 1080p JPN Blu-ray AVC Atmos TrueHD 7.1-AA@OurBits" target="_blank">Joint Security Area 2000 1080p JPN Blu-ray AVC Atmos TrueHD <span class="__cf_email__" data-cfemail="ecdbc2ddc1adadaca3999eae85989f">[email&#160;protected]</span></a></h3>
<p class="desc">共同警备区/JSA安全地带 *日版全景声* 画面更胜韩版 DIY简繁字幕</p>
<div class="rating">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">1</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7885" title="大学航空炸弹客 2021 Ted K 2021 1080p BluRay REMUX AVC DTS-HD MA 5.1-PiRaTeS" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://m.media-amazon.com/images/M/MV5BYzVhZGIyODYtMTk0NS00MTcxLTg3OWUtYzVkY2FlMDA2MDYyXkEyXkFqcGdeQXVyMTM1MTE1NDMx._V1_.jpg">
</a>
</div> 
<h3 class="title"><a href="details.php?id=7885" title="大学航空炸弹客 2021 Ted K 2021 1080p BluRay REMUX AVC DTS-HD MA 5.1-PiRaTeS" target="_blank">大学航空炸弹客 2021 Ted K 2021 1080p BluRay REMUX AVC DTS-HD MA 5.1-PiRaTeS</a></h3>
<p class="desc">大学航空炸弹客 2021</p>
<div class="rating">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">1</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7868" title="越狱协议.2020.HD1080P.X264.AAC.Spanish.mp4" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img2.doubanio.com/view/photo/s_ratio_poster/public/p2614496352.jpg">
</a>
</div>
<h3 class="title"><a href="details.php?id=7868" title="越狱协议.2020.HD1080P.X264.AAC.Spanish.mp4" target="_blank">越狱协议.2020.HD1080P.X264.AAC.Spanish.mp4</a></h3>
<p class="desc">类型：剧情 / 动作 / 惊悚</p>
<div class="rating">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">9</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7791" title="Taxi.1-5.1998-2018.BluRay.1080p.DTS-HD.MA.5.1.x265.10bit-ALT" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://movie.douban.com/subject/1294262/">
</a>
</div>
<h3 class="title"><a href="details.php?id=7791" title="Taxi.1-5.1998-2018.BluRay.1080p.DTS-HD.MA.5.1.x265.10bit-ALT" target="_blank">Taxi.1-5.1998-2018.BluRay.1080p.DTS-HD.MA.5.1.x265.10bit-ALT</a></h3>
<p class="desc">的士速递 [共5部合集] [简繁字幕]</p>
<div class="rating">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">8</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7633" title="一杯上路 One for the Road (2021) - 1080p WEBRip DDP5.1 x264 - HBO" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://movie.douban.com/subject/34913315/">
</a>
</div>
<h3 class="title"><a href="details.php?id=7633" title="一杯上路 One for the Road (2021) - 1080p WEBRip DDP5.1 x264 - HBO" target="_blank">一杯上路 One for the Road (2021) - 1080p WEBRip DDP5.1 x264 - HBO</a></h3>
<p class="desc">史诗剧情片，热血超燃，震撼心灵</p>
<div class="rating">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-cyan" title="下载">1</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7530" title="3.Idiots.2009.BluRay.720p.DTS.x264-CHD" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://m.media-amazon.com/images/M/MV5BNTkyOGVjMGEtNmQzZi00NzFlLTlhOWQtODYyMDc2ZGJmYzFhXkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_.jpg[/img]">
</a>
</div>
<h3 class="title"><a href="details.php?id=7530" title="3.Idiots.2009.BluRay.720p.DTS.x264-CHD" target="_blank">3.Idiots.2009.BluRay.720p.DTS.x264-CHD</a></h3>
<p class="desc">三傻大闹宝莱坞</p>
<div class="rating">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">2</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7465" title="Indemnity 2021 BluRay 1080p AVC DTS-HD MA5.1-MTeam" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img9.doubanio.com/view/photo/l_ratio_poster/public/p2848489206.jpg">
</a>
</div>
<h3 class="title"><a href="details.php?id=7465" title="Indemnity 2021 BluRay 1080p AVC DTS-HD MA5.1-MTeam" target="_blank">Indemnity 2021 BluRay 1080p AVC DTS-HD MA5.1-MTeam</a></h3>
<p class="desc">血偿/血债血偿/陷害</p>
<div class="rating">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">11</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7434" title="Metri Shesh Va Nim 2019 1080p BluRay DD5.1 x264-HANDJOB" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img9.doubanio.com/view/photo/l_ratio_poster/public/p2569832505.jpg">
</a>
</div>
<h3 class="title"><a href="details.php?id=7434" title="Metri Shesh Va Nim 2019 1080p BluRay DD5.1 x264-HANDJOB" target="_blank">Metri Shesh Va Nim 2019 1080p BluRay DD5.1 x264-HANDJOB</a></h3>
<p class="desc">650万 / 缉毒风暴(台) / Just 6.5 / 6.5 Toman Per Meter / Metri Shesh Va Nim | 类别：剧情 动作 犯罪</p>
<div class="rating">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">3</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7275" title="The Crossing II 2015 TW Blu-Ray 1080p AVC DTS-HD MA 7.1 -TTG" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://laji.o--o.xyz/i/2022/05/01/otx051.jpg">
</a>
</div>
<h3 class="title"><a href="details.php?id=7275" title="The Crossing II 2015 TW Blu-Ray 1080p AVC DTS-HD MA 7.1 -TTG" target="_blank">The Crossing II 2015 TW Blu-Ray 1080p AVC DTS-HD MA 7.1 -TTG</a></h3>
<p class="desc">太平轮(下)·彼岸/太平轮(下)：彼岸/太平轮II：惊涛挚爱(台)/生死恋/1949/The Crossing : Part 2/太平轮·彼岸</p>
<div class="rating">
<span class="layui-badge layui-bg-green" property="v:douban" title="豆瓣评分">6.1</span>
<span class="layui-badge layui-bg-orange" property="v:imdb" title="IMDb评分">6.6</span>
</div>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">2</span>
</p>
</div>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>

<div class="brick-box">
<div class="box-hd">
<h2 class="title">电视剧TV Series</h2>
<div class="more">
<a href="/Torrents.index?category=2" target="_blank">查看全部<i class="layui-icon layui-icon-right"></i></a>
</div>
</div>
<div class="brick-list">
<ul class="layui-row layui-col-space10">
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8197" title="Love Death and Robots S03 2022 1080p WEB-DL x265 AC3￡cXcY@FRDS" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img9.doubanio.com/view/photo/l_ratio_poster/public/p2872163998.jpg" alt="Love Death and Robots S03 2022 1080p WEB-DL x265 AC3￡cXcY@FRDS" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=8197" title="Love Death and Robots S03 2022 1080p WEB-DL x265 AC3￡cXcY@FRDS" target="_blank">Love Death and Robots S03 2022 1080p WEB-DL x265 AC3￡<span class="__cf_email__" data-cfemail="583b003b01181e0a1c0b">[email&#160;protected]</span></a></h3>
<p class="desc">爱，死亡和机器人 第三季 中英特效/官方简中字幕 Netflix出品 HEVC版本</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">15</span>
<span class="layui-badge layui-bg-blue" title="完成">15</span>
<span class="layui-badge layui-bg-black" title="查看">16</span>
<span class="layui-badge layui-bg-gray" title="点击">27</span>
<span class="layui-badge size">4.94 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8192" title="Game of Thrones S01 2010 UHD BluRay REMUX 2160p HEVC TrueHD7.1 Atmos-HDS" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img.hdsky.me/images/2022/06/12/mNUA2.md.jpg" alt="Game of Thrones S01 2010 UHD BluRay REMUX 2160p HEVC TrueHD7.1 Atmos-HDS" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=8192" title="Game of Thrones S01 2010 UHD BluRay REMUX 2160p HEVC TrueHD7.1 Atmos-HDS" target="_blank">Game of Thrones S01 2010 UHD BluRay REMUX 2160p HEVC TrueHD7.1 Atmos-HDS</a></h3>
<p class="desc">权力的游戏 第一季 全10集 终级收藏版/中文双字幕</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">9</span>
<span class="layui-badge layui-bg-cyan" title="下载">4</span>
<span class="layui-badge layui-bg-blue" title="完成">13</span>
<span class="layui-badge layui-bg-black" title="查看">29</span>
<span class="layui-badge layui-bg-gray" title="点击">31</span>
<span class="layui-badge size">239.20 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8191" title="Hwang Jin Yi 2006 S01 1080p WEB-DL AAC H.265-HBO" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img9.doubanio.com/view/photo/l_ratio_poster/public/p2068345968.jpg" alt="Hwang Jin Yi 2006 S01 1080p WEB-DL AAC H.265-HBO" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=8191" title="Hwang Jin Yi 2006 S01 1080p WEB-DL AAC H.265-HBO" target="_blank">Hwang Jin Yi 2006 S01 1080p WEB-DL AAC H.265-HBO</a></h3>
<p class="desc">黄真伊 / 황진이 全24集韩语 / 越南语外挂中字</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">1</span>
<span class="layui-badge layui-bg-cyan" title="下载">3</span>
<span class="layui-badge layui-bg-black" title="查看">12</span>
<span class="layui-badge layui-bg-gray" title="点击">13</span>
<span class="layui-badge size">40.80 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8189" title="HKOpenTV The Legend Of Kaifeng Complete 2017 1080i HDTV H.264 DD2.0 2Audio-HDHTV" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img2.doubanio.com/view/photo/l_ratio_poster/public/p2528366921.jpg" alt="HKOpenTV The Legend Of Kaifeng Complete 2017 1080i HDTV H.264 DD2.0 2Audio-HDHTV" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=8189" title="HKOpenTV The Legend Of Kaifeng Complete 2017 1080i HDTV H.264 DD2.0 2Audio-HDHTV" target="_blank">HKOpenTV The Legend Of Kaifeng Complete 2017 1080i HDTV H.264 DD2.0 2Audio-HDHTV</a></h3>
<p class="desc">開封府傳奇 全58集粤语 | 国语 繁体字幕主演：黄维德 张檬 齐奎 甘婷婷</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">4</span>
<span class="layui-badge layui-bg-blue" title="完成">5</span>
<span class="layui-badge layui-bg-black" title="查看">17</span>
<span class="layui-badge layui-bg-gray" title="点击">15</span>
<span class="layui-badge size">196.03 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8186" title="Breath of Destiny S01 2021 Complete 2160p Webdl HEVC 10Bbit HDR AAC-DBTV" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img9.doubanio.com/view/photo/l_ratio_poster/public/p2636314736.jpg" alt="Breath of Destiny S01 2021 Complete 2160p Webdl HEVC 10Bbit HDR AAC-DBTV" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=8186" title="Breath of Destiny S01 2021 Complete 2160p Webdl HEVC 10Bbit HDR AAC-DBTV" target="_blank">Breath of Destiny S01 2021 Complete 2160p Webdl HEVC 10Bbit HDR AAC-DBTV</a></h3>
<p class="desc">一起深呼吸 / 白色生死线 | 全40集 | 主演：戚 薇 / 杨祐宁 / 张峻宁 / 朱珠/ 高圣远 / 何政军 / 涂凌 / 王策 / 翟小兴 | 高码率</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">5</span>
<span class="layui-badge layui-bg-cyan" title="下载">1</span>
<span class="layui-badge layui-bg-blue" title="完成">7</span>
<span class="layui-badge layui-bg-black" title="查看">11</span>
<span class="layui-badge layui-bg-gray" title="点击">18</span>
<span class="layui-badge size">208.49 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8183" title="Murdoch Mysteries S01-S13 BluRay 1080p DDP5.1 H.265-d3g" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img9.doubanio.com/view/photo/m_ratio_poster/public/p2292223605.jpg" alt="Murdoch Mysteries S01-S13 BluRay 1080p DDP5.1 H.265-d3g" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=8183" title="Murdoch Mysteries S01-S13 BluRay 1080p DDP5.1 H.265-d3g" target="_blank">Murdoch Mysteries S01-S13 BluRay 1080p DDP5.1 H.265-d3g</a></h3>
<p class="desc">神探默多克 第一季-第十三季/Murdoch Mysteries Season 1-13/神探默多克</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">5</span>
<span class="layui-badge layui-bg-cyan" title="下载">3</span>
<span class="layui-badge layui-bg-blue" title="完成">6</span>
<span class="layui-badge layui-bg-black" title="查看">18</span>
<span class="layui-badge layui-bg-gray" title="点击">22</span>
<span class="layui-badge size">387.76 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8179" title="CCTV4K Chao Yue 2022 2160p UHDTV H.265 AC3-HaresTV" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img.gejiba.com/images/af66d0d289f39cc9b763fde86e3458d5.jpg" alt="CCTV4K Chao Yue 2022 2160p UHDTV H.265 AC3-HaresTV" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=8179" title="CCTV4K Chao Yue 2022 2160p UHDTV H.265 AC3-HaresTV" target="_blank">CCTV4K Chao Yue 2022 2160p UHDTV H.265 AC3-HaresTV</a></h3>
<p class="desc">CCTV4K超高清 超越 全29集 国语中字</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">2</span>
<span class="layui-badge layui-bg-cyan" title="下载">1</span>
<span class="layui-badge layui-bg-blue" title="完成">2</span>
<span class="layui-badge layui-bg-black" title="查看">21</span>
<span class="layui-badge layui-bg-gray" title="点击">12</span>
<span class="layui-badge size">306.01 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8177" title="Halo S01 2022 1080p WEB-DL x265 AC3￡cXcY@FRDS" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img9.doubanio.com/view/photo/l_ratio_poster/public/p2868754840.jpg" alt="Halo S01 2022 1080p WEB-DL x265 AC3￡cXcY@FRDS" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=8177" title="Halo S01 2022 1080p WEB-DL x265 AC3￡cXcY@FRDS" target="_blank">Halo S01 2022 1080p WEB-DL x265 AC3￡<span class="__cf_email__" data-cfemail="d5b68db68c9593879186">[email&#160;protected]</span></a></h3>
<p class="desc">光环 第一季 全九集 / 最后一战(台) / 光晕 / 光环世界 英语中字 / 中英特效 / 简中特效 10bit HEVC 版本</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">18</span>
<span class="layui-badge layui-bg-blue" title="完成">25</span>
<span class="layui-badge layui-bg-black" title="查看">33</span>
<span class="layui-badge layui-bg-gray" title="点击">38</span>
<span class="layui-badge size">15.25 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8174" title="The Handmaid's Tale S02 1080p BluRay AVC DTS-HD MA 5.1-HDBEE" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img9.doubanio.com/view/photo/l_ratio_poster/public/p2520829721.jpg" alt="The Handmaid's Tale S02 1080p BluRay AVC DTS-HD MA 5.1-HDBEE" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=8174" title="The Handmaid's Tale S02 1080p BluRay AVC DTS-HD MA 5.1-HDBEE" target="_blank">The Handmaid's Tale S02 1080p BluRay AVC DTS-HD MA 5.1-HDBEE</a></h3>
<p class="desc">使女的故事 第二季 / 女仆的故事 / 侍女的故事 *第二季 全10集* | 类别：剧情 科幻</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">2</span>
<span class="layui-badge layui-bg-blue" title="完成">6</span>
<span class="layui-badge layui-bg-black" title="查看">16</span>
<span class="layui-badge layui-bg-gray" title="点击">16</span>
<span class="layui-badge size">173.84 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8168" title="Star Trek The Next Generation S01-S07 BluRay 1080p Dts-HDMa7.1" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img1.doubanio.com/view/photo/l_ratio_poster/public/p2511422000.jpg" alt="Star Trek The Next Generation S01-S07 BluRay 1080p Dts-HDMa7.1" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=8168" title="Star Trek The Next Generation S01-S07 BluRay 1080p Dts-HDMa7.1" target="_blank">Star Trek The Next Generation S01-S07 BluRay 1080p Dts-HDMa7.1</a></h3>
<p class="desc">星际迷航：下一代 全七季</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">2</span>
<span class="layui-badge layui-bg-cyan" title="下载">6</span>
<span class="layui-badge layui-bg-blue" title="完成">3</span>
<span class="layui-badge layui-bg-black" title="查看">29</span>
<span class="layui-badge layui-bg-gray" title="点击">34</span>
<span class="layui-badge size">756.79 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8166" title="暗夜行者[全24集][国语配音+中文字幕].Day.Breaker.S01.1080p.WEB-DL.H265.AAC-CatWEB" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img2.doubanio.com/view/photo/s_ratio_poster/public/p2688770853.jpg" alt="暗夜行者[全24集][国语配音+中文字幕].Day.Breaker.S01.1080p.WEB-DL.H265.AAC-CatWEB" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=8166" title="暗夜行者[全24集][国语配音+中文字幕].Day.Breaker.S01.1080p.WEB-DL.H265.AAC-CatWEB" target="_blank">暗夜行者[全24集][国语配音+中文字幕].Day.Breaker.S01.1080p.WEB-DL.H265.AAC-CatWEB</a></h3>
<p class="desc">暗夜行者 2022 全24集 主演：李易峰／宋轶／冯德伦</p>
<p class="info">
<span class="layui-badge layui-bg-cyan" title="下载">4</span>
<span class="layui-badge layui-bg-black" title="查看">29</span>
<span class="layui-badge layui-bg-gray" title="点击">32</span>
<span class="layui-badge size">18.25 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8160" title="Simmer Down 2022 WEB-DL 1080p H.264 AAC-HDCTV" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://www.z4a.net/images/2022/06/14/024d398c9315.png" alt="Simmer Down 2022 WEB-DL 1080p H.264 AAC-HDCTV" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=8160" title="Simmer Down 2022 WEB-DL 1080p H.264 AAC-HDCTV" target="_blank">Simmer Down 2022 WEB-DL 1080p H.264 AAC-HDCTV</a></h3>
<p class="desc">好好说话 全40集 | 主演：陈晓 王晓晨</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">5</span>
<span class="layui-badge layui-bg-cyan" title="下载">1</span>
<span class="layui-badge layui-bg-blue" title="完成">6</span>
<span class="layui-badge layui-bg-black" title="查看">24</span>
<span class="layui-badge layui-bg-gray" title="点击">29</span>
<span class="layui-badge size">95.49 GB</span>
</p>
</div>
</li>
</ul>
</div>
</div>
<div class="brick-box">
<div class="box-hd">
<h2 class="title">综艺TV Shows</h2>
<div class="more">
<a href="/Torrents.index?category=3" target="_blank">查看全部<i class="layui-icon layui-icon-right"></i></a>
</div>
</div>
<div class="brick-list">
<ul class="layui-row layui-col-space10">
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8135" title="Chu Ru Zhi Chang De Wo Men S02 2022 1080p WEB-DL H.264 AAC-TJUPT" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://oss.lijishi.com/2022/06/13/278b6c0ade9ae.jpg" alt="Chu Ru Zhi Chang De Wo Men S02 2022 1080p WEB-DL H.264 AAC-TJUPT" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=8135" title="Chu Ru Zhi Chang De Wo Men S02 2022 1080p WEB-DL H.264 AAC-TJUPT" target="_blank">Chu Ru Zhi Chang De Wo Men S02 2022 1080p WEB-DL H.264 AAC-TJUPT</a></h3>
<p class="desc">初入职场的我们 法医季 / 初入职场的我们 第二季 | 正片全13期 + 案件前夜全11期 + 法医实录全13期 | 嘉宾：刘良 / 周亦武 / 周雨彤 / 翟潇闻 / 齐思钧 | TJUPT小组作品 转载请注明北洋园PT</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">2</span>
<span class="layui-badge layui-bg-blue" title="完成">8</span>
<span class="layui-badge layui-bg-black" title="查看">7</span>
<span class="layui-badge layui-bg-gray" title="点击">10</span>
<span class="layui-badge size">56.09 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
 <div class="thumb">
<a href="details.php?id=8128" title="MotoGP 2022 Round03 Argentina Race 1080p WEBRip DD2.0 x264-NaN" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://i.postimg.cc/135y0StJ/1.jpg" alt="MotoGP 2022 Round03 Argentina Race 1080p WEBRip DD2.0 x264-NaN" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=8128" title="MotoGP 2022 Round03 Argentina Race 1080p WEBRip DD2.0 x264-NaN" target="_blank">MotoGP 2022 Round03 Argentina Race 1080p WEBRip DD2.0 x264-NaN</a></h3>
<p class="desc"></p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">1</span>
<span class="layui-badge layui-bg-blue" title="完成">7</span>
<span class="layui-badge layui-bg-black" title="查看">3</span>
<span class="layui-badge layui-bg-gray" title="点击">9</span>
<span class="layui-badge size">2.29 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8119" title="90 Day Journey S36 1080p DSCP WEB-DL AAC2.0 H.264-WhiteHat" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://ptpimg.me/wos79t.jpg" alt="90 Day Journey S36 1080p DSCP WEB-DL AAC2.0 H.264-WhiteHat" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=8119" title="90 Day Journey S36 1080p DSCP WEB-DL AAC2.0 H.264-WhiteHat" target="_blank">90 Day Journey S36 1080p DSCP WEB-DL AAC2.0 H.264-WhiteHat</a></h3>
<p class="desc">90 Day Journey S36</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">1</span>
<span class="layui-badge layui-bg-blue" title="完成">8</span>
<span class="layui-badge layui-bg-black" title="查看">7</span>
<span class="layui-badge layui-bg-gray" title="点击">10</span>
<span class="layui-badge size">20.86 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7966" title="Go For Spring 2022 S01 1080p WEB-DL H.264 AAC-TJUPT" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://oss.lijishi.com/2022/02/23/9c4152d187b75.jpg" alt="Go For Spring 2022 S01 1080p WEB-DL H.264 AAC-TJUPT" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=7966" title="Go For Spring 2022 S01 1080p WEB-DL H.264 AAC-TJUPT" target="_blank">Go For Spring 2022 S01 1080p WEB-DL H.264 AAC-TJUPT</a></h3>
<p class="desc">春日迟迟再出发 | 先导片 + 正片+ 番外篇+ 加更版+ 超前彩蛋 | 嘉宾：吴昕 / 大张伟 / 吴克群 / 王霏霏 / 傅首尔 | TJUPT小组作品 转载请注明北洋园PT</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">2</span>
<span class="layui-badge layui-bg-blue" title="完成">3</span>
 <span class="layui-badge layui-bg-black" title="查看">13</span>
<span class="layui-badge layui-bg-gray" title="点击">14</span>
<span class="layui-badge size">39.89 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7891" title="Older Sisters Who Brave the Winds and Waves S03E02 2022 1080p WEB-DL H.264 AAC-TJUPT" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img9.doubanio.com/view/photo/l_ratio_poster/public/p2870671248.jpg" alt="Older Sisters Who Brave the Winds and Waves S03E02 2022 1080p WEB-DL H.264 AAC-TJUPT" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=7891" title="Older Sisters Who Brave the Winds and Waves S03E02 2022 1080p WEB-DL H.264 AAC-TJUPT" target="_blank">Older Sisters Who Brave the Winds and Waves S03E02 2022 1080p WEB-DL H.264 AAC-TJUPT</a></h3>
<p class="desc">乘风破浪的姐姐 第三季 / 浪姐3 | 第2期：那英宁静抢人组队 策略对决争一公曲目 | TJUPT小组作品 转载请注明北洋园PT 每周五更新</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">10</span>
<span class="layui-badge layui-bg-blue" title="完成">29</span>
<span class="layui-badge layui-bg-black" title="查看">37</span>
<span class="layui-badge layui-bg-gray" title="点击">57</span>
<span class="layui-badge size">2.04 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7886" title="Older Sisters Who Brave the Winds and Waves 2022 S03E02 1080p WEB-DL H.264 AAC-PTerWEB" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img9.doubanio.com/view/photo/l_ratio_poster/public/p2873329751.jpg" alt="Older Sisters Who Brave the Winds and Waves 2022 S03E02 1080p WEB-DL H.264 AAC-PTerWEB" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=7886" title="Older Sisters Who Brave the Winds and Waves 2022 S03E02 1080p WEB-DL H.264 AAC-PTerWEB" target="_blank">Older Sisters Who Brave the Winds and Waves 2022 S03E02 1080p WEB-DL H.264 AAC-PTerWEB</a></h3>
<p class="desc">乘风破浪/乘风破浪的姐姐 第三季/浪姐3 第02 期 | 主演: 那英 宁静 张蔷 国语中字</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">1</span>
<span class="layui-badge layui-bg-blue" title="完成">3</span>
<span class="layui-badge layui-bg-black" title="查看">17</span>
<span class="layui-badge layui-bg-gray" title="点击">29</span>
<span class="layui-badge size">2.04 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7884" title="Older Sisters Who Brave the Winds and Waves S03 E01 2022 1080p WEB-DL H.264 AAC-TJUPT" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img9.doubanio.com/view/photo/l_ratio_poster/public/p2870671248.jpg" alt="Older Sisters Who Brave the Winds and Waves S03 E01 2022 1080p WEB-DL H.264 AAC-TJUPT" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=7884" title="Older Sisters Who Brave the Winds and Waves S03 E01 2022 1080p WEB-DL H.264 AAC-TJUPT" target="_blank">Older Sisters Who Brave the Winds and Waves S03 E01 2022 1080p WEB-DL H.264 AAC-TJUPT</a></h3>
<p class="desc">乘风破浪的姐姐20220520 第三季 / 浪姐3 | 第1期（上）：全阵容舞台首发 那英宁静回归 + 第1期（下）：solo秀各显实力 师姐带队开启对战 | 嘉宾：那英 / 宁静 / 张蔷 / 许茹芸 / 黄奕 / 柳翰雅 / 胡杏儿 / 钟欣潼 / 黄小蕾 / 张歆艺 / 薛凯琪 / 王心凌 / 谭维维 / 毛俊杰 / 蔡卓妍 / 齐溪 / 张俪 / 朱洁静 / 郭采洁 / 赵梦 / 郑秀妍 / 于文文 / 刘恋 / 徐梦桃 / 吴谨言 / 唐诗逸 / 张天爱 / 赵樱子 / 吴莫愁 / 王紫璇 |</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">8</span>
<span class="layui-badge layui-bg-blue" title="完成">23</span>
<span class="layui-badge layui-bg-black" title="查看">25</span>
<span class="layui-badge layui-bg-gray" title="点击">43</span>
<span class="layui-badge size">3.84 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7754" title="Zhong Guo Hun Li S01E05 2022 1080p WEB-DL H.264 AAC-TJUPT" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img9.doubanio.com/view/photo/l_ratio_poster/public/p2871045287.jpg" alt="Zhong Guo Hun Li S01E05 2022 1080p WEB-DL H.264 AAC-TJUPT" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=7754" title="Zhong Guo Hun Li S01E05 2022 1080p WEB-DL H.264 AAC-TJUPT" target="_blank">Zhong Guo Hun Li S01E05 2022 1080p WEB-DL H.264 AAC-TJUPT</a></h3>
<p class="desc">中国婚礼——我的女儿出嫁了 | 第5期：见证张爱马笛贾昊悦浪漫爱情 翁婿和睦铸造“父子”关系 | TJUPT小组作品 转载请注明北洋园PT 每周六更新</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">2</span>
<span class="layui-badge layui-bg-blue" title="完成">12</span>
<span class="layui-badge layui-bg-black" title="查看">15</span>
<span class="layui-badge layui-bg-gray" title="点击">30</span>
<span class="layui-badge size">1.41 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7753" title="Older Sisters Who Brave the Winds and Waves S03E01 Plus 2022 1080p WEB-DL H.264 AAC-TJUPT" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img9.doubanio.com/view/photo/l_ratio_poster/public/p2870671248.jpg" alt="Older Sisters Who Brave the Winds and Waves S03E01 Plus 2022 1080p WEB-DL H.264 AAC-TJUPT" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=7753" title="Older Sisters Who Brave the Winds and Waves S03E01 Plus 2022 1080p WEB-DL H.264 AAC-TJUPT" target="_blank">Older Sisters Who Brave the Winds and Waves S03E01 Plus 2022 1080p WEB-DL H.264 AAC-TJUPT</a></h3>
<p class="desc">乘风破浪的姐姐 第三季 / 浪姐3 | 加更版第1期：王心凌郭采洁个人VLOG公开 乘风破浪全员入住宿舍 | TJUPT小组作品 转载请注明北洋园PT 每周六更新</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">7</span>
<span class="layui-badge layui-bg-blue" title="完成">15</span>
<span class="layui-badge layui-bg-black" title="查看">32</span>
<span class="layui-badge layui-bg-gray" title="点击">56</span>
<span class="layui-badge size">853.49 MB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7617" title="Welcome Back To Sound 2022 S02 1080p WEB-DL H.264 AAC-TJUPT" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://oss.lijishi.com/2022/02/08/41dca567412d0.jpg" alt="Welcome Back To Sound 2022 S02 1080p WEB-DL H.264 AAC-TJUPT" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=7617" title="Welcome Back To Sound 2022 S02 1080p WEB-DL H.264 AAC-TJUPT" target="_blank">Welcome Back To Sound 2022 S02 1080p WEB-DL H.264 AAC-TJUPT</a></h3>
<p class="desc">朋友请听好 第二季 / 朋友请听好2 | 全12期 | 嘉宾：何炅 / 谢娜 / 井柏然 / 董子健 / 李荣浩 / 陈立农 | TJUPT小组作品 转载请注明北洋园PT</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">2</span>
<span class="layui-badge layui-bg-blue" title="完成">5</span>
<span class="layui-badge layui-bg-black" title="查看">17</span>
<span class="layui-badge layui-bg-gray" title="点击">28</span>
<span class="layui-badge size">24.16 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7583" title="Trump Card S07 2022 1080p WEB-DL H.264 AAC-TJUPT" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://oss.lijishi.com/2022/02/25/f8820ebb7b5c5.jpg" alt="Trump Card S07 2022 1080p WEB-DL H.264 AAC-TJUPT" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=7583" title="Trump Card S07 2022 1080p WEB-DL H.264 AAC-TJUPT" target="_blank">Trump Card S07 2022 1080p WEB-DL H.264 AAC-TJUPT</a></h3>
<p class="desc">王牌对王牌 第七季 | 全12期 | 嘉宾：沈腾 / 贾玲 / 华晨宇 / 关晓彤 | TJUPT小组作品 转载请注明北洋园PT</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">8</span>
 <span class="layui-badge layui-bg-blue" title="完成">8</span>
<span class="layui-badge layui-bg-black" title="查看">18</span>
<span class="layui-badge layui-bg-gray" title="点击">43</span>
<span class="layui-badge size">28.19 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7477" title="So In Love S01 2022 1080p WEB-DL H.264 AAC-TJUPT" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://oss.lijishi.com/2022/03/03/6bef7ec57f56f.jpg" alt="So In Love S01 2022 1080p WEB-DL H.264 AAC-TJUPT" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=7477" title="So In Love S01 2022 1080p WEB-DL H.264 AAC-TJUPT" target="_blank">So In Love S01 2022 1080p WEB-DL H.264 AAC-TJUPT</a></h3>
<p class="desc">没谈过恋爱的我 | 全11期 正片 + 纯享版 + 会员版 | 嘉宾：钟楚曦 / 翟潇闻 / 王菊 / 何广智 / 汪聪 / 沈奕斐 | TJUPT小组作品 转载请注明北洋园PT</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">5</span>
<span class="layui-badge layui-bg-blue" title="完成">6</span>
<span class="layui-badge layui-bg-black" title="查看">13</span>
<span class="layui-badge layui-bg-gray" title="点击">26</span>
<span class="layui-badge size">26.46 GB</span>
</p>
</div>
</li>
</ul>
</div>
</div>
<div class="brick-box">
<div class="box-hd">
<h2 class="title">纪录片Documentaries</h2>
<div class="more">
<a href="/Torrents.index?category=4" target="_blank">查看全部<i class="layui-icon layui-icon-right"></i></a>
</div>
</div>
<div class="brick-list">
<ul class="layui-row layui-col-space10">
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8100" title="Prehistoric Planet 2022 S01 2160p ATVP WEB-DL DDP 5.1 Atmos HDR H.265-FLUX" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img9.doubanio.com/view/photo/l_ratio_poster/public/p2870826358.jpg" alt="Prehistoric Planet 2022 S01 2160p ATVP WEB-DL DDP 5.1 Atmos HDR H.265-FLUX" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=8100" title="Prehistoric Planet 2022 S01 2160p ATVP WEB-DL DDP 5.1 Atmos HDR H.265-FLUX" target="_blank">Prehistoric Planet 2022 S01 2160p ATVP WEB-DL DDP 5.1 Atmos HDR H.265-FLUX</a></h3>
<p class="desc">Apple TV+：史前星球 第一季 全5集 | 解说：大卫·爱登堡 | 最新考古结果和电脑技术展示鲜为人知的恐龙生活 多国语字幕 豆瓣9.6分</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">22</span>
<span class="layui-badge layui-bg-cyan" title="下载">1</span>
<span class="layui-badge layui-bg-blue" title="完成">37</span>
<span class="layui-badge layui-bg-black" title="查看">56</span>
 <span class="layui-badge layui-bg-gray" title="点击">62</span>
<span class="layui-badge size">35.25 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8070" title="Hi, Mom Exclusive Documentary 2021 WEB-DL 1080p H264 AAC-Dave.mp4" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img1.doubanio.com/view/photo/s_ratio_poster/public/p2629056068.jpg" alt="Hi, Mom Exclusive Documentary 2021 WEB-DL 1080p H264 AAC-Dave.mp4" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=8070" title="Hi, Mom Exclusive Documentary 2021 WEB-DL 1080p H264 AAC-Dave.mp4" target="_blank">Hi, Mom Exclusive Documentary 2021 WEB-DL 1080p H264 AAC-Dave.mp4</a></h3>
<p class="desc">《你好，李焕英》独家纪录片 国语 中文字幕</p>
<p class="info">
<span class="layui-badge layui-bg-cyan" title="下载">1</span>
<span class="layui-badge layui-bg-black" title="查看">16</span>
<span class="layui-badge layui-bg-gray" title="点击">19</span>
<span class="layui-badge size">1.55 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8067" title="Apollo 11 2019 UHD BluRay 2160p 10bit HDR DTS-HD MA 5.1 x265-beAst" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://images2.static-bluray.com/movies/covers/250188_front.jpg" alt="Apollo 11 2019 UHD BluRay 2160p 10bit HDR DTS-HD MA 5.1 x265-beAst" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=8067" title="Apollo 11 2019 UHD BluRay 2160p 10bit HDR DTS-HD MA 5.1 x265-beAst" target="_blank">Apollo 11 2019 UHD BluRay 2160p 10bit HDR DTS-HD MA 5.1 x265-beAst</a></h3>
<p class="desc">阿波罗11号/阿波罗登月 英语DTS-HDMA5.1/英简繁双语SUP字幕/章节</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">7</span>
<span class="layui-badge layui-bg-blue" title="完成">16</span>
<span class="layui-badge layui-bg-black" title="查看">29</span>
<span class="layui-badge layui-bg-gray" title="点击">30</span>
<span class="layui-badge size">26.61 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8063" title="BBC Great Barrier Reef 2012 Blu-ray 1080i AVC DTS-HD MA 2.0-CMCT" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://static.hdcmct.org/file/hdcmct/disk/UpLoadFiles/2013/8/2/13/cmct20132013821317533N162.jpg" alt="BBC Great Barrier Reef 2012 Blu-ray 1080i AVC DTS-HD MA 2.0-CMCT" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=8063" title="BBC Great Barrier Reef 2012 Blu-ray 1080i AVC DTS-HD MA 2.0-CMCT" target="_blank">BBC Great Barrier Reef 2012 Blu-ray 1080i AVC DTS-HD MA 2.0-CMCT</a></h3>
<p class="desc">BBC大堡礁/海洋天堂大堡礁 全三集 原盘DIY 国英双语/双国配 简/繁/英/国配/双语特效字幕 *CMCT纪录片DIY第一弹*</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">10</span>
<span class="layui-badge layui-bg-blue" title="完成">17</span>
<span class="layui-badge layui-bg-black" title="查看">33</span>
<span class="layui-badge layui-bg-gray" title="点击">43</span>
<span class="layui-badge size">35.92 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8062" title="Hi, Mom Exclusive Documentary 2021 WEB-DL 1080p H.264 AAC-Dave" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img.pterclub.com/images/2022/04/22/1.png" alt="Hi, Mom Exclusive Documentary 2021 WEB-DL 1080p H.264 AAC-Dave" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=8062" title="Hi, Mom Exclusive Documentary 2021 WEB-DL 1080p H.264 AAC-Dave" target="_blank">Hi, Mom Exclusive Documentary 2021 WEB-DL 1080p H.264 AAC-Dave</a></h3>
<p class="desc">《你好，李焕英》独家纪录片 国语 中文字幕</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">2</span>
<span class="layui-badge layui-bg-blue" title="完成">16</span>
<span class="layui-badge layui-bg-black" title="查看">34</span>
<span class="layui-badge layui-bg-gray" title="点击">49</span>
<span class="layui-badge size">1.55 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8045" title="Beltracchi Die Kunst der Faelschung 2013 1080i Blu-ray AVC DTS-HD MA 5.1-DIY@TTG" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img2.doubanio.com/view/photo/l_ratio_poster/public/p2191874983.jpg" alt="Beltracchi Die Kunst der Faelschung 2013 1080i Blu-ray AVC DTS-HD MA 5.1-DIY@TTG" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=8045" title="Beltracchi Die Kunst der Faelschung 2013 1080i Blu-ray AVC DTS-HD MA 5.1-DIY@TTG" target="_blank">Beltracchi Die Kunst der Faelschung 2013 1080i Blu-ray AVC DTS-HD MA <span class="__cf_email__" data-cfemail="55607b6478111c0c15010112">[email&#160;protected]</span></a></h3>
<p class="desc">苏富比伪画大师/大伪术家(港)DIY 官譯繁简中字</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">3</span>
<span class="layui-badge layui-bg-blue" title="完成">7</span>
<span class="layui-badge layui-bg-black" title="查看">11</span>
<span class="layui-badge layui-bg-gray" title="点击">17</span>
<span class="layui-badge size">19.69 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8035" title="I am a chengguan 2019 1080p WEB-DL H.264 AAC-PTerWEB" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img9.doubanio.com/view/photo/l_ratio_poster/public/p2507740824.jpg" alt="I am a chengguan 2019 1080p WEB-DL H.264 AAC-PTerWEB" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=8035" title="I am a chengguan 2019 1080p WEB-DL H.264 AAC-PTerWEB" target="_blank">I am a chengguan 2019 1080p WEB-DL H.264 AAC-PTerWEB</a></h3>
<p class="desc">我是城管</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">3</span>
<span class="layui-badge layui-bg-blue" title="完成">12</span>
<span class="layui-badge layui-bg-black" title="查看">32</span>
<span class="layui-badge layui-bg-gray" title="点击">22</span>
<span class="layui-badge size">2.56 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7993" title="World War II In HD Colour S01 720p BluRay DD 5.1 x264-iFH" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img2.doubanio.com/view/photo/s_ratio_poster/public/p2175181513.jpg" alt="World War II In HD Colour S01 720p BluRay DD 5.1 x264-iFH" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=7993" title="World War II In HD Colour S01 720p BluRay DD 5.1 x264-iFH" target="_blank">World War II In HD Colour S01 720p BluRay DD 5.1 x264-iFH</a></h3>
<p class="desc">二次大战全彩实录 / 彩色二战 / World War II in Colour and HD | 类别：纪录片</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">3</span>
<span class="layui-badge layui-bg-blue" title="完成">14</span>
<span class="layui-badge layui-bg-black" title="查看">17</span>
<span class="layui-badge layui-bg-gray" title="点击">31</span>
<span class="layui-badge size">28.36 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7958" title="IMAX Space Station 2002 2160p UHD BluRay x265-JustWatch" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img9.doubanio.com/view/photo/l_ratio_poster/public/p2559734508.jpg" alt="IMAX Space Station 2002 2160p UHD BluRay x265-JustWatch" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=7958" title="IMAX Space Station 2002 2160p UHD BluRay x265-JustWatch" target="_blank">IMAX Space Station 2002 2160p UHD BluRay x265-JustWatch</a></h3>
<p class="desc">国际空间站/Space Station 3D/太空站</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">11</span>
<span class="layui-badge layui-bg-blue" title="完成">24</span>
<span class="layui-badge layui-bg-black" title="查看">34</span>
<span class="layui-badge layui-bg-gray" title="点击">46</span>
<span class="layui-badge size">7.52 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
 <a href="details.php?id=7951" title="Wild Britain S01 1080p BluRay AAC 2.0 x264-DON" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img9.doubanio.com/view/photo/s_ratio_poster/public/p2544164754.jpg" alt="Wild Britain S01 1080p BluRay AAC 2.0 x264-DON" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=7951" title="Wild Britain S01 1080p BluRay AAC 2.0 x264-DON" target="_blank">Wild Britain S01 1080p BluRay AAC 2.0 x264-DON</a></h3>
<p class="desc">野性英国 / Wild Britain *第一季 全8集* | 类别：纪录片</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">4</span>
<span class="layui-badge layui-bg-blue" title="完成">7</span>
<span class="layui-badge layui-bg-black" title="查看">12</span>
<span class="layui-badge layui-bg-gray" title="点击">17</span>
<span class="layui-badge size">33.83 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7942" title="South Pacific S01 1080p BluRay DTS 5.1 x264-NaRB" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img1.doubanio.com/view/photo/s_ratio_poster/public/p2594988758.jpg" alt="South Pacific S01 1080p BluRay DTS 5.1 x264-NaRB" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=7942" title="South Pacific S01 1080p BluRay DTS 5.1 x264-NaRB" target="_blank">South Pacific S01 1080p BluRay DTS 5.1 x264-NaRB</a></h3>
<p class="desc">南太平洋 / Wild Pacific | 类别：纪录片</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">4</span>
<span class="layui-badge layui-bg-blue" title="完成">5</span>
<span class="layui-badge layui-bg-black" title="查看">17</span>
<span class="layui-badge layui-bg-gray" title="点击">11</span>
<span class="layui-badge size">34.86 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7922" title="The Colours of China Series 1 EP01-05 2020 1080p HDTV x264 AAC" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://m.media-amazon.com/images/M/MV5BYjEyZDBiMWMtOGMwYi00YTc1LWE1OTEtOWY3M2VjNTk3MWQzXkEyXkFqcGdeQXVyMTYzNjg2NDY@._V1_.jpg" alt="The Colours of China Series 1 EP01-05 2020 1080p HDTV x264 AAC" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=7922" title="The Colours of China Series 1 EP01-05 2020 1080p HDTV x264 AAC" target="_blank">The Colours of China Series 1 EP01-05 2020 1080p HDTV x264 AAC</a></h3>
<p class="desc">五彩中国 第1季 全5集 内封中英双语字幕</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">9</span>
<span class="layui-badge layui-bg-blue" title="完成">18</span>
<span class="layui-badge layui-bg-black" title="查看">42</span>
<span class="layui-badge layui-bg-gray" title="点击">40</span>
<span class="layui-badge size">8.64 GB</span>
</p>
</div>
</li>
</ul>
</div>
</div>
<div class="brick-box">
<div class="box-hd">
<h2 class="title">动漫Animations</h2>
<div class="more">
<a href="/Torrents.index?category=5" target="_blank">查看全部<i class="layui-icon layui-icon-right"></i></a>
</div>
</div>
<div class="brick-list">
<ul class="layui-row layui-col-space10">
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8199" title="My Dress-Up Darling S01 1080p B-Global WEB-DL HEVC AAC-CHDWEB" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://lain.bgm.tv/pic/cover/l/9c/4d/333158_qc7CC.jpg" alt="My Dress-Up Darling S01 1080p B-Global WEB-DL HEVC AAC-CHDWEB" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=8199" title="My Dress-Up Darling S01 1080p B-Global WEB-DL HEVC AAC-CHDWEB" target="_blank">My Dress-Up Darling S01 1080p B-Global WEB-DL HEVC AAC-CHDWEB</a></h3>
<p class="desc">更衣人偶坠入爱河/その着せ替え人形は恋をする/恋上换装娃娃/My Dress-Up Darling</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">6</span>
<span class="layui-badge layui-bg-cyan" title="下载">1</span>
<span class="layui-badge layui-bg-blue" title="完成">9</span>
<span class="layui-badge layui-bg-black" title="查看">16</span>
<span class="layui-badge layui-bg-gray" title="点击">17</span>
<span class="layui-badge size">8.32 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8194" title="The Little Mermaid 1989 BluRay 1080p x265 10bit 4Audios MNHD-FRDS" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://www.z4a.net/images/2019/06/15/cover7d9579d6b020dffe.jpg" alt="The Little Mermaid 1989 BluRay 1080p x265 10bit 4Audios MNHD-FRDS" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=8194" title="The Little Mermaid 1989 BluRay 1080p x265 10bit 4Audios MNHD-FRDS" target="_blank">The Little Mermaid 1989 BluRay 1080p x265 10bit 4Audios MNHD-FRDS</a></h3>
<p class="desc">【小美人鱼 / 小鱼仙】迪士尼系列 国台粤英四轨 10bit HEVC版本</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">10</span>
<span class="layui-badge layui-bg-cyan" title="下载">2</span>
<span class="layui-badge layui-bg-blue" title="完成">14</span>
<span class="layui-badge layui-bg-black" title="查看">13</span>
<span class="layui-badge layui-bg-gray" title="点击">25</span>
 <span class="layui-badge size">4.96 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8188" title="Amagami 2010 1080p Bluray x265 FLAC - VCB-Studio" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img9.doubanio.com/view/photo/l_ratio_poster/public/p2544844143.jpg" alt="Amagami 2010 1080p Bluray x265 FLAC - VCB-Studio" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=8188" title="Amagami 2010 1080p Bluray x265 FLAC - VCB-Studio" target="_blank">Amagami 2010 1080p Bluray x265 FLAC - VCB-Studio</a></h3>
<p class="desc">【アマガミSS】【圣诞之吻SS】【S1-S2 + OVA Fin】</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">3</span>
<span class="layui-badge layui-bg-cyan" title="下载">1</span>
<span class="layui-badge layui-bg-blue" title="完成">2</span>
<span class="layui-badge layui-bg-black" title="查看">17</span>
<span class="layui-badge layui-bg-gray" title="点击">20</span>
<span class="layui-badge size">39.45 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8175" title="Sakura Trick 2014 Ep01-Ep12+SP Fin 1080p BDRip x264 FLAC-sergey_krs" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img9.doubanio.com/view/photo/s_ratio_poster/public/p2169260135.jpg" alt="Sakura Trick 2014 Ep01-Ep12+SP Fin 1080p BDRip x264 FLAC-sergey_krs" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=8175" title="Sakura Trick 2014 Ep01-Ep12+SP Fin 1080p BDRip x264 FLAC-sergey_krs" target="_blank">Sakura Trick 2014 Ep01-Ep12+SP Fin 1080p BDRip x264 FLAC-sergey_krs</a></h3>
<p class="desc">樱TrickSakura Trick桜TrickBDRip1080pTV 01-12 + SP Finx264sergey_krs 转自U2</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">2</span>
<span class="layui-badge layui-bg-blue" title="完成">5</span>
<span class="layui-badge layui-bg-black" title="查看">13</span>
<span class="layui-badge layui-bg-gray" title="点击">12</span>
<span class="layui-badge size">20.56 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8138" title="Shuumatsu Nani Shitemasuka 2017 1080P BDRip HEVC FLAC - MH&Airota&FZSD&VCB-Studio" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img9.doubanio.com/view/photo/l_ratio_poster/public/p2428161646.jpg" alt="Shuumatsu Nani Shitemasuka 2017 1080P BDRip HEVC FLAC - MH&Airota&FZSD&VCB-Studio" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=8138" title="Shuumatsu Nani Shitemasuka 2017 1080P BDRip HEVC FLAC - MH&Airota&FZSD&VCB-Studio" target="_blank">Shuumatsu Nani Shitemasuka 2017 1080P BDRip HEVC FLAC - MH&Airota&FZSD&VCB-Studio</a></h3>
<p class="desc">【末日时在做什么？有没有空？可以来拯救吗？】【終末なにしてますか？忙しいですか？救ってもらっていいですか？】【外挂字幕】</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">6</span>
<span class="layui-badge layui-bg-blue" title="完成">9</span>
<span class="layui-badge layui-bg-black" title="查看">23</span>
<span class="layui-badge layui-bg-gray" title="点击">18</span>
<span class="layui-badge size">25.15 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8110" title="Cyborg 009: Call of Justice III 2016 1080p Blu-ray AVC LPCM 2.0-U2" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img9.doubanio.com/view/photo/s_ratio_poster/public/p2545324366.jpg" alt="Cyborg 009: Call of Justice III 2016 1080p Blu-ray AVC LPCM 2.0-U2" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=8110" title="Cyborg 009: Call of Justice III 2016 1080p Blu-ray AVC LPCM 2.0-U2" target="_blank">Cyborg 009: Call of Justice III 2016 1080p Blu-ray AVC LPCM 2.0-U2</a></h3>
<p class="desc">Cyborg 009: Call of Justice III / CYBORG009 CALL OF JUSTICE 第3章 | 类别：动画</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">2</span>
<span class="layui-badge layui-bg-blue" title="完成">3</span>
<span class="layui-badge layui-bg-black" title="查看">10</span>
<span class="layui-badge layui-bg-gray" title="点击">11</span>
<span class="layui-badge size">31.04 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8051" title="One Piece Collection 1999 EP01-EP1000 WEB-DL H.264 AAC -Black two" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img9.doubanio.com/view/photo/l_ratio_poster/public/p2298457296.jpg" alt="One Piece Collection 1999 EP01-EP1000 WEB-DL H.264 AAC -Black two" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=8051" title="One Piece Collection 1999 EP01-EP1000 WEB-DL H.264 AAC -Black two" target="_blank">One Piece Collection 1999 EP01-EP1000 WEB-DL H.264 AAC -Black two</a></h3>
<p class="desc">海贼王 / 航海王 /EP01-EP1000 /EMBY刮削版/国语中字</p>
<p class="info">
<span class="layui-badge layui-bg-cyan" title="下载">6</span>
<span class="layui-badge layui-bg-black" title="查看">47</span>
<span class="layui-badge layui-bg-gray" title="点击">34</span>
<span class="layui-badge size">683.27 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8039" title="Onward 2020 2160p UHD BluRay x265 DV HDR TrueHD Atmos REPACK mUHD-FRDS" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://images.static-bluray.com/movies/covers/258618_front.jpg" alt="Onward 2020 2160p UHD BluRay x265 DV HDR TrueHD Atmos REPACK mUHD-FRDS" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=8039" title="Onward 2020 2160p UHD BluRay x265 DV HDR TrueHD Atmos REPACK mUHD-FRDS" target="_blank">Onward 2020 2160p UHD BluRay x265 DV HDR TrueHD Atmos REPACK mUHD-FRDS</a></h3>
<p class="desc">【1/2的魔法/½的魔法/二分之一的魔法/勇往直前/向前/觅法奇程/魔法环游记】mUHD作品 4k杜比视界版本 Repack DV 双语特效 国粤评 带评论字幕 章节名</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">9</span>
 <span class="layui-badge layui-bg-blue" title="完成">8</span>
<span class="layui-badge layui-bg-black" title="查看">13</span>
<span class="layui-badge layui-bg-gray" title="点击">27</span>
<span class="layui-badge size">20.43 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8031" title="Monsters, Inc. 2001 2160p UHD BluRay x265 HDR TrueHD 7.1 RERIP mUHD-FRDS" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://images.static-bluray.com/movies/covers/259133_front.jpg" alt="Monsters, Inc. 2001 2160p UHD BluRay x265 HDR TrueHD 7.1 RERIP mUHD-FRDS" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=8031" title="Monsters, Inc. 2001 2160p UHD BluRay x265 HDR TrueHD 7.1 RERIP mUHD-FRDS" target="_blank">Monsters, Inc. 2001 2160p UHD BluRay x265 HDR TrueHD 7.1 RERIP mUHD-FRDS</a></h3>
<p class="desc">【怪兽电力公司/怪兽公司(港)/怪物公司】mUHD作品 4k HDR10版本 国配音轨 简英字幕 Rerip视频</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">6</span>
<span class="layui-badge layui-bg-blue" title="完成">15</span>
<span class="layui-badge layui-bg-black" title="查看">31</span>
<span class="layui-badge layui-bg-gray" title="点击">44</span>
<span class="layui-badge size">13.41 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8024" title="ODD TAXI TV 01-12 Fin+SP 2021 1080p Blu-ray x265 FLAC-AI-Raws&ANK-Raws" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://lain.bgm.tv/pic/cover/l/65/90/325285_4688X.jpg" alt="ODD TAXI TV 01-12 Fin+SP 2021 1080p Blu-ray x265 FLAC-AI-Raws&ANK-Raws" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=8024" title="ODD TAXI TV 01-12 Fin+SP 2021 1080p Blu-ray x265 FLAC-AI-Raws&ANK-Raws" target="_blank">ODD TAXI TV 01-12 Fin+SP 2021 1080p Blu-ray x265 FLAC-AI-Raws&ANK-Raws</a></h3>
<p class="desc">奇巧计程车 奇巧出粗车 ODD TAXI オッドタクシー HEVC-YUV444 10bit | 附CDs SPs</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">9</span>
<span class="layui-badge layui-bg-blue" title="完成">12</span>
<span class="layui-badge layui-bg-black" title="查看">32</span>
<span class="layui-badge layui-bg-gray" title="点击">26</span>
<span class="layui-badge size">17.28 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8012" title="SHENBING KIDS 2007 Complete 1080p WEBRip AI UPSCALED x265 AAC-llxjw" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img9.doubanio.com/view/photo/l_ratio_poster/public/p1904339578.jpg" alt="SHENBING KIDS 2007 Complete 1080p WEBRip AI UPSCALED x265 AAC-llxjw" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=8012" title="SHENBING KIDS 2007 Complete 1080p WEBRip AI UPSCALED x265 AAC-llxjw" target="_blank">SHENBING KIDS 2007 Complete 1080p WEBRip AI UPSCALED x265 AAC-llxjw</a></h3>
<p class="desc">收藏画质|神兵小将|AI高清修复|llxjw个人修复压制|国语无字幕|</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">3</span>
<span class="layui-badge layui-bg-blue" title="完成">6</span>
<span class="layui-badge layui-bg-black" title="查看">37</span>
<span class="layui-badge layui-bg-gray" title="点击">24</span>
<span class="layui-badge size">31.94 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8005" title="Environment Protection Sword 2006 576p WEB-DL H.264 AAC-PTerWEB" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img9.doubanio.com/view/photo/l_ratio_poster/public/p2623232364.jpg" alt="Environment Protection Sword 2006 576p WEB-DL H.264 AAC-PTerWEB" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=8005" title="Environment Protection Sword 2006 576p WEB-DL H.264 AAC-PTerWEB" target="_blank">Environment Protection Sword 2006 576p WEB-DL H.264 AAC-PTerWEB</a></h3>
<p class="desc">环保剑 全 52 集 | 导演：肖智慧 | 主演：刘兰芳 董浩 李磊 国语中字</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">1</span>
<span class="layui-badge layui-bg-blue" title="完成">7</span>
<span class="layui-badge layui-bg-black" title="查看">21</span>
<span class="layui-badge layui-bg-gray" title="点击">15</span>
<span class="layui-badge size">8.68 GB</span>
</p>
</div>
</li>
</ul>
</div>
</div>
<div class="brick-box">
<div class="box-hd">
<h2 class="title">音乐视频Music Videos</h2>
<div class="more">
<a href="/Torrents.index?category=6" target="_blank">查看全部<i class="layui-icon layui-icon-right"></i></a>
</div>
</div>
<div class="brick-list">
<ul class="layui-row layui-col-space10">
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7992" title="班得瑞典藏全集" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://music.douban.com/subject/4730215/" alt="班得瑞典藏全集" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=7992" title="班得瑞典藏全集" target="_blank">班得瑞典藏全集</a></h3>
<p class="desc">班得瑞典藏全集</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">8</span>
<span class="layui-badge layui-bg-blue" title="完成">18</span>
<span class="layui-badge layui-bg-black" title="查看">45</span>
<span class="layui-badge layui-bg-gray" title="点击">44</span>
<span class="layui-badge size">8.03 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7981" title="周杰伦10周年专辑" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://music.douban.com/subject/6028153/" alt="周杰伦10周年专辑" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=7981" title="周杰伦10周年专辑" target="_blank">周杰伦10周年专辑</a></h3>
<p class="desc">周杰倫10週年限量紀念盤</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">19</span>
<span class="layui-badge layui-bg-blue" title="完成">42</span>
<span class="layui-badge layui-bg-black" title="查看">98</span>
<span class="layui-badge layui-bg-gray" title="点击">99</span>
<span class="layui-badge size">2.86 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7785" title="Amit First World Tour Concert Live 2010 Blu-ray 1080i AVC LPCM DTS-HDMA 5.1" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img.pterclub.com/images/2022/05/23/Cover.jpg" alt="Amit First World Tour Concert Live 2010 Blu-ray 1080i AVC LPCM DTS-HDMA 5.1" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=7785" title="Amit First World Tour Concert Live 2010 Blu-ray 1080i AVC LPCM DTS-HDMA 5.1" target="_blank">Amit First World Tour Concert Live 2010 Blu-ray 1080i AVC LPCM DTS-HDMA 5.1</a></h3>
<p class="desc">张惠妹 阿密特首次世界巡回演唱会</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">9</span>
<span class="layui-badge layui-bg-blue" title="完成">23</span>
<span class="layui-badge layui-bg-black" title="查看">37</span>
<span class="layui-badge layui-bg-gray" title="点击">62</span>
<span class="layui-badge size">40.92 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7642" title="Coachella 2018 1080p WEB-DL AAC 2.0 H.264-NoGrp" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://z4a.net/images/2022/05/17/j7jfdv.jpg" alt="Coachella 2018 1080p WEB-DL AAC 2.0 H.264-NoGrp" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=7642" title="Coachella 2018 1080p WEB-DL AAC 2.0 H.264-NoGrp" target="_blank">Coachella 2018 1080p WEB-DL AAC 2.0 H.264-NoGrp</a></h3>
<p class="desc">科切拉音乐节 2018</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">1</span>
<span class="layui-badge layui-bg-blue" title="完成">3</span>
<span class="layui-badge layui-bg-black" title="查看">21</span>
<span class="layui-badge layui-bg-gray" title="点击">18</span>
<span class="layui-badge size">149.07 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7600" title="A15 AMeiZING Live 2013 BluRay 1080p DTS-HD MA 5.1 Flac x265 10bit-BeiTai" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img.pterclub.com/images/2022/05/09/4755_P_1570849536298.jpg" alt="A15 AMeiZING Live 2013 BluRay 1080p DTS-HD MA 5.1 Flac x265 10bit-BeiTai" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=7600" title="A15 AMeiZING Live 2013 BluRay 1080p DTS-HD MA 5.1 Flac x265 10bit-BeiTai" target="_blank">A15 AMeiZING Live 2013 BluRay 1080p DTS-HD MA 5.1 Flac x265 10bit-BeiTai</a></h3>
<p class="desc">张惠妹 AMeiZING Live 世界巡回演唱会 国语DTS-HDMA5.1&Flac2.0/原盘繁简SUP字幕/章节(添加歌名)</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">8</span>
<span class="layui-badge layui-bg-blue" title="完成">4</span>
<span class="layui-badge layui-bg-black" title="查看">19</span>
<span class="layui-badge layui-bg-gray" title="点击">50</span>
<span class="layui-badge size">28.18 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7459" title="Amit First World Tour Concert Live 2010 BluRay 1080p 2Audio DTS-HD MA 5.1 Flac x265 10bit-BeiTai" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://images.static-bluray.com/movies/covers/29686_front.jpg" alt="Amit First World Tour Concert Live 2010 BluRay 1080p 2Audio DTS-HD MA 5.1 Flac x265 10bit-BeiTai" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=7459" title="Amit First World Tour Concert Live 2010 BluRay 1080p 2Audio DTS-HD MA 5.1 Flac x265 10bit-BeiTai" target="_blank">Amit First World Tour Concert Live 2010 BluRay 1080p 2Audio DTS-HD MA 5.1 Flac x265 10bit-BeiTai</a></h3>
<p class="desc">张惠妹 阿密特首次世界巡回演唱会 国语DTS-HDMA5.1&伴奏DD2.0/原盘繁简SUP字幕/章节(添加歌名)</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">5</span>
<span class="layui-badge layui-bg-blue" title="完成">8</span>
<span class="layui-badge layui-bg-black" title="查看">17</span>
<span class="layui-badge layui-bg-gray" title="点击">45</span>
<span class="layui-badge size">21.20 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7439" title="AmeiZING A15 World Tour Live Tw BluRay 1080p DTS-HD MA 5.1 Flac x264-beAst" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img.pterclub.com/images/2022/05/09/4755_P_1570849536298.jpg" alt="AmeiZING A15 World Tour Live Tw BluRay 1080p DTS-HD MA 5.1 Flac x264-beAst" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=7439" title="AmeiZING A15 World Tour Live Tw BluRay 1080p DTS-HD MA 5.1 Flac x264-beAst" target="_blank">AmeiZING A15 World Tour Live Tw BluRay 1080p DTS-HD MA 5.1 Flac x264-beAst</a></h3>
<p class="desc">A15 ─ 张惠妹AMeiZING Live 世界巡回演唱会 国语DTS-HDMA5.1&Flac2.0/原盘繁简SUP字幕/章节(添加歌名)</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">8</span>
<span class="layui-badge layui-bg-blue" title="完成">6</span>
<span class="layui-badge layui-bg-black" title="查看">17</span>
<span class="layui-badge layui-bg-gray" title="点击">57</span>
<span class="layui-badge size">32.76 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7407" title="Amit First World Tour Concert Live 2010 BluRay 1080p 2Audio DTS-HD MA 5.1 x264-beAst" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://images.static-bluray.com/movies/covers/29686_front.jpg" alt="Amit First World Tour Concert Live 2010 BluRay 1080p 2Audio DTS-HD MA 5.1 x264-beAst" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=7407" title="Amit First World Tour Concert Live 2010 BluRay 1080p 2Audio DTS-HD MA 5.1 x264-beAst" target="_blank">Amit First World Tour Concert Live 2010 BluRay 1080p 2Audio DTS-HD MA 5.1 x264-beAst</a></h3>
<p class="desc">张惠妹 阿密特首次世界巡回演唱会 国语DTS-HDMA5.1&伴奏DD2.0/原盘繁简SUP字幕/章节(添加歌名)</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">12</span>
<span class="layui-badge layui-bg-blue" title="完成">5</span>
<span class="layui-badge layui-bg-black" title="查看">16</span>
<span class="layui-badge layui-bg-gray" title="点击">55</span>
<span class="layui-badge size">19.74 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7388" title="The Year of Jacky Cheung World Tour 07' HK 2007 BluRay 1080p 2Audio DTS-HD MA 5.1 x264-beAst" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://images.static-bluray.com/movies/covers/4634_front.jpg" alt="The Year of Jacky Cheung World Tour 07' HK 2007 BluRay 1080p 2Audio DTS-HD MA 5.1 x264-beAst" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=7388" title="The Year of Jacky Cheung World Tour 07' HK 2007 BluRay 1080p 2Audio DTS-HD MA 5.1 x264-beAst" target="_blank">The Year of Jacky Cheung World Tour 07' HK 2007 BluRay 1080p 2Audio DTS-HD MA 5.1 x264-beAst</a></h3>
<p class="desc">张学友光年世界巡回演唱会07'香港站 国粤语DTS&伴奏DD2.0/繁简SUP字幕/章节</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">23</span>
<span class="layui-badge layui-bg-blue" title="完成">18</span>
<span class="layui-badge layui-bg-black" title="查看">27</span>
<span class="layui-badge layui-bg-gray" title="点击">96</span>
<span class="layui-badge size">25.13 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7146" title="[HTPT].111部【黄梅戏】视频" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://www.htpt.cc/fengmian/20220406/2022040614121495c476e317b413e1e92f0653a9e8b413.png" alt="[HTPT].111部【黄梅戏】视频" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=7146" title="[HTPT].111部【黄梅戏】视频" target="_blank">[HTPT].111部【黄梅戏】视频</a></h3>
<p class="desc">111部【黄梅戏】视频 国粹之音 老年人的必备曲目</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">1</span>
<span class="layui-badge layui-bg-blue" title="完成">1</span>
<span class="layui-badge layui-bg-black" title="查看">20</span>
<span class="layui-badge layui-bg-gray" title="点击">20</span>
<span class="layui-badge size">99.40 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7114" title="Mariah Carey: Live at the Tokyo Dome 1996 1080i Blu-ray AVC LPCM 2.0" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://ptpimg.me/c3g55v.jpg" alt="Mariah Carey: Live at the Tokyo Dome 1996 1080i Blu-ray AVC LPCM 2.0" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=7114" title="Mariah Carey: Live at the Tokyo Dome 1996 1080i Blu-ray AVC LPCM 2.0" target="_blank">Mariah Carey: Live at the Tokyo Dome 1996 1080i Blu-ray AVC LPCM 2.0</a></h3>
<p class="desc">玛丽亚·凯莉 东京巨蛋演唱会 2020高清重制版</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">3</span>
<span class="layui-badge layui-bg-blue" title="完成">1</span>
<span class="layui-badge layui-bg-black" title="查看">19</span>
<span class="layui-badge layui-bg-gray" title="点击">19</span>
<span class="layui-badge size">20.19 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=6302" title="LADY_GAGA_MONSTER_BALL" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://m.media-amazon.com/images/M/MV5BOGRjZGM0NmYtN2ZlZC00ZTYyLTkwNTktYTRkZmU0NjAzNGM2XkEyXkFqcGdeQXVyNTk5NDY5Njc@._V1_.jpg" alt="LADY_GAGA_MONSTER_BALL" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=6302" title="LADY_GAGA_MONSTER_BALL" target="_blank">LADY_GAGA_MONSTER_BALL</a></h3>
<p class="desc">Lady.Gaga 恶魔舞会巡演之麦迪逊广场花园演唱会</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">1</span>
<span class="layui-badge layui-bg-blue" title="完成">3</span>
<span class="layui-badge layui-bg-black" title="查看">17</span>
<span class="layui-badge layui-bg-gray" title="点击">25</span>
<span class="layui-badge size">35.46 GB</span>
</p>
</div>
</li>
</ul>
</div>
</div>
<div class="brick-box">
<div class="box-hd">
<h2 class="title">体育Sports</h2>
<div class="more">
<a href="/Torrents.index?category=7" target="_blank">查看全部<i class="layui-icon layui-icon-right"></i></a>
</div>
</div>
<div class="brick-list">
<ul class="layui-row layui-col-space10">
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8180" title="MotoGP 2022 Round04 USA Race 1080p WEBRip AAC2.0 x264-NaN" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://i.postimg.cc/TwYW1Kdg/1.jpg" alt="MotoGP 2022 Round04 USA Race 1080p WEBRip AAC2.0 x264-NaN" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=8180" title="MotoGP 2022 Round04 USA Race 1080p WEBRip AAC2.0 x264-NaN" target="_blank">MotoGP 2022 Round04 USA Race 1080p WEBRip AAC2.0 x264-NaN</a></h3>
<p class="desc"></p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">2</span>
<span class="layui-badge layui-bg-blue" title="完成">4</span>
<span class="layui-badge layui-bg-black" title="查看">4</span>
<span class="layui-badge layui-bg-gray" title="点击">13</span>
<span class="layui-badge size">2.35 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7920" title="UEFA Champions League 2021-22 FINAL Liverpool vs Real Madrid 20220528 2160p UHDTV AAC2.0 H.265-playTV" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img.pterclub.com/images/2021/10/06/CL_Raditik_Anim.gif" alt="UEFA Champions League 2021-22 FINAL Liverpool vs Real Madrid 20220528 2160p UHDTV AAC2.0 H.265-playTV" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=7920" title="UEFA Champions League 2021-22 FINAL Liverpool vs Real Madrid 20220528 2160p UHDTV AAC2.0 H.265-playTV" target="_blank">UEFA Champions League 2021-22 FINAL Liverpool vs Real Madrid 20220528 2160p UHDTV AAC2.0 H.265-playTV</a></h3>
<p class="desc">欧洲冠军联赛21/22赛季 [决赛][2022.05.28][利物浦VS皇家马德里]</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">2</span>
<span class="layui-badge layui-bg-blue" title="完成">3</span>
<span class="layui-badge layui-bg-black" title="查看">13</span>
<span class="layui-badge layui-bg-gray" title="点击">19</span>
<span class="layui-badge size">34.58 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7547" title="FIFA World Cup 2010 All Games HDTV 1080i H.264 MPA" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://z4a.net/images/2019/10/07/hhhhhhhhhhhhhhhhh.png" alt="FIFA World Cup 2010 All Games HDTV 1080i H.264 MPA" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=7547" title="FIFA World Cup 2010 All Games HDTV 1080i H.264 MPA" target="_blank">FIFA World Cup 2010 All Games HDTV 1080i H.264 MPA</a></h3>
<p class="desc">FIFA 2010 南非世界杯 全部64场比赛 含开/闭幕式</p>
<p class="info">
<span class="layui-badge layui-bg-cyan" title="下载">1</span>
<span class="layui-badge layui-bg-black" title="查看">29</span>
<span class="layui-badge layui-bg-gray" title="点击">21</span>
<span class="layui-badge size">746.70 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=5960" title="CCTV-4K Beijing 2022 Olympic Winter Games Closing Ceremony 20220220 4K 50fps UHDTV HEVC HLG DD5.1-QHstudIo" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://pic.imgdb.cn/item/621252942ab3f51d9182b928.jpg" alt="CCTV-4K Beijing 2022 Olympic Winter Games Closing Ceremony 20220220 4K 50fps UHDTV HEVC HLG DD5.1-QHstudIo" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=5960" title="CCTV-4K Beijing 2022 Olympic Winter Games Closing Ceremony 20220220 4K 50fps UHDTV HEVC HLG DD5.1-QHstudIo" target="_blank">CCTV-4K Beijing 2022 Olympic Winter Games Closing Ceremony 20220220 4K 50fps UHDTV HEVC HLG DD5.1-QHstudIo</a></h3>
<p class="desc">CCTV4K超高清频道 2022年北京冬奥会闭幕式 4K | 高帧率| 高码率 QHstudIo小组录制</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">5</span>
<span class="layui-badge layui-bg-blue" title="完成">4</span>
<span class="layui-badge layui-bg-black" title="查看">9</span>
<span class="layui-badge layui-bg-gray" title="点击">41</span>
<span class="layui-badge size">25.35 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=5708" title="Beijing 2022 Olympic Winter Games Opening Ceremony 20220204 4320p CCTV-8K UHDTV AVS3 10bit HDR MPEG-FLTTH" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://pic.ptdream.net/2022/02/04/.jpg" alt="Beijing 2022 Olympic Winter Games Opening Ceremony 20220204 4320p CCTV-8K UHDTV AVS3 10bit HDR MPEG-FLTTH" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=5708" title="Beijing 2022 Olympic Winter Games Opening Ceremony 20220204 4320p CCTV-8K UHDTV AVS3 10bit HDR MPEG-FLTTH" target="_blank">Beijing 2022 Olympic Winter Games Opening Ceremony 20220204 4320p CCTV-8K UHDTV AVS3 10bit HDR MPEG-FLTTH</a></h3>
<p class="desc">2022年北京冬季奥运会开幕式 [CCTV8K] [AVS3源码] [FLTTH版]</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">4</span>
<span class="layui-badge layui-bg-blue" title="完成">5</span>
<span class="layui-badge layui-bg-black" title="查看">47</span>
<span class="layui-badge layui-bg-gray" title="点击">101</span>
<span class="layui-badge size">156.30 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=5704" title="Beijing Winter Olympics 2022 Opening Ceremony 1080i HDTV H.264" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://pic.ptdream.net/2022/02/04/.jpg" alt="Beijing Winter Olympics 2022 Opening Ceremony 1080i HDTV H.264" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=5704" title="Beijing Winter Olympics 2022 Opening Ceremony 1080i HDTV H.264" target="_blank">Beijing Winter Olympics 2022 Opening Ceremony 1080i HDTV H.264</a></h3>
<p class="desc">2022年北京冬季奥运会开幕式 BBC版</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">7</span>
<span class="layui-badge layui-bg-blue" title="完成">9</span>
<span class="layui-badge layui-bg-black" title="查看">34</span>
<span class="layui-badge layui-bg-gray" title="点击">85</span>
<span class="layui-badge size">6.59 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=5698" title="BS4K Beijing 2022 Olympic Winter Games Opening Ceremony 20220204 UHDTV 2160p HLG10 HEVC-HDCTV" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img.pterclub.com/images/2022/02/05/202202051450270c0aa89bfe49ee877cc89f41d2ec7d2e.png" alt="BS4K Beijing 2022 Olympic Winter Games Opening Ceremony 20220204 UHDTV 2160p HLG10 HEVC-HDCTV" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=5698" title="BS4K Beijing 2022 Olympic Winter Games Opening Ceremony 20220204 UHDTV 2160p HLG10 HEVC-HDCTV" target="_blank">BS4K Beijing 2022 Olympic Winter Games Opening Ceremony 20220204 UHDTV 2160p HLG10 HEVC-HDCTV</a></h3>
<p class="desc">2022年北京冬季奥运会开幕式 [4K+HEVC+HDR]</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">5</span>
<span class="layui-badge layui-bg-blue" title="完成">8</span>
<span class="layui-badge layui-bg-black" title="查看">42</span>
<span class="layui-badge layui-bg-gray" title="点击">80</span>
<span class="layui-badge size">24.86 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=5569" title="NBA RS 20220120 All games of the day 1080p WEB-DL H.264 AAC" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://s4.ax1x.com/2022/01/23/74GpxP.jpg" alt="NBA RS 20220120 All games of the day 1080p WEB-DL H.264 AAC" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=5569" title="NBA RS 20220120 All games of the day 1080p WEB-DL H.264 AAC" target="_blank">NBA RS 20220120 All games of the day 1080p WEB-DL H.264 AAC</a></h3>
<p class="desc">NBA常规赛 1月20日所有比赛 英文解说</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">1</span>
<span class="layui-badge layui-bg-blue" title="完成">1</span>
<span class="layui-badge layui-bg-black" title="查看">4</span>
<span class="layui-badge layui-bg-gray" title="点击">9</span>
<span class="layui-badge size">22.49 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=4108" title="UEFA EURO 2020 20210615 France vs Germany 2160p CCTV-4K UHDTV HEVC 10bit HDR DD5.1-FLTTH" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img9.doubanio.com/view/photo/l_ratio_poster/public/p2620889177.jpg" alt="UEFA EURO 2020 20210615 France vs Germany 2160p CCTV-4K UHDTV HEVC 10bit HDR DD5.1-FLTTH" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=4108" title="UEFA EURO 2020 20210615 France vs Germany 2160p CCTV-4K UHDTV HEVC 10bit HDR DD5.1-FLTTH" target="_blank">UEFA EURO 2020 20210615 France vs Germany 2160p CCTV-4K UHDTV HEVC 10bit HDR DD5.1-FLTTH</a></h3>
<p class="desc">2020欧洲杯足球赛 法国对德国</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">1</span>
<span class="layui-badge layui-bg-blue" title="完成">1</span>
 <span class="layui-badge layui-bg-black" title="查看">5</span>
<span class="layui-badge layui-bg-gray" title="点击">19</span>
<span class="layui-badge size">32.89 GB</span>
</p>
</div>
</li>
</ul>
</div>
</div>
<div class="brick-box">
<div class="box-hd">
<h2 class="title">音乐Music</h2>
<div class="more">
<a href="/Torrents.index?category=8" target="_blank">查看全部<i class="layui-icon layui-icon-right"></i></a>
</div>
</div>
<div class="brick-list">
<ul class="layui-row layui-col-space10">
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8184" title="David Knudson - The Only Thing You Have to Change is Everything (2022) [FLAC]" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://i.postimg.cc/Yqr2j7q7/ae26f1f3b74bffd5a84258d320da43ab.jpg" alt="David Knudson - The Only Thing You Have to Change is Everything (2022) [FLAC]" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=8184" title="David Knudson - The Only Thing You Have to Change is Everything (2022) [FLAC]" target="_blank">David Knudson - The Only Thing You Have to Change is Everything (2022) [FLAC]</a></h3>
<p class="desc"></p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">5</span>
<span class="layui-badge layui-bg-blue" title="完成">13</span>
<span class="layui-badge layui-bg-black" title="查看">9</span>
<span class="layui-badge layui-bg-gray" title="点击">16</span>
<span class="layui-badge size">290.11 MB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8182" title="VA - Balearic Chillout (2022) [FLAC]" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://i.postimg.cc/0yjmdthF/f053c5bc2585f3445b21421a601f14be.jpg" alt="VA - Balearic Chillout (2022) [FLAC]" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=8182" title="VA - Balearic Chillout (2022) [FLAC]" target="_blank">VA - Balearic Chillout (2022) [FLAC]</a></h3>
<p class="desc"></p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">3</span>
<span class="layui-badge layui-bg-blue" title="完成">5</span>
<span class="layui-badge layui-bg-black" title="查看">6</span>
<span class="layui-badge layui-bg-gray" title="点击">14</span>
<span class="layui-badge size">605.07 MB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8181" title="VA - The All Time Greatest Car Sing-a-Long [3CD] (2022) [FLAC]" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://i.postimg.cc/tTLhvhGy/1b0eebf13370540a6a019fd7b96df6be.jpg" alt="VA - The All Time Greatest Car Sing-a-Long [3CD] (2022) [FLAC]" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=8181" title="VA - The All Time Greatest Car Sing-a-Long [3CD] (2022) [FLAC]" target="_blank">VA - The All Time Greatest Car Sing-a-Long [3CD] (2022) [FLAC]</a></h3>
<p class="desc"></p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">4</span>
<span class="layui-badge layui-bg-blue" title="完成">9</span>
<span class="layui-badge layui-bg-black" title="查看">9</span>
<span class="layui-badge layui-bg-gray" title="点击">14</span>
<span class="layui-badge size">1.57 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8172" title="VA - Under the Bridge - Massive 90s (2022) [FLAC]" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://i.postimg.cc/vZBBZ9vM/79afb2caf9127ce2a483b9f8878ba63a.jpg" alt="VA - Under the Bridge - Massive 90s (2022) [FLAC]" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=8172" title="VA - Under the Bridge - Massive 90s (2022) [FLAC]" target="_blank">VA - Under the Bridge - Massive 90s (2022) [FLAC]</a></h3>
<p class="desc"></p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">3</span>
<span class="layui-badge layui-bg-blue" title="完成">8</span>
<span class="layui-badge layui-bg-black" title="查看">5</span>
<span class="layui-badge layui-bg-gray" title="点击">13</span>
<span class="layui-badge size">1.37 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8171" title="VA - 100 Most Uplifting Songs Ever (2022) [FLAC]" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://i.postimg.cc/65qy5RR5/d609e29acf15b1de85f8f9d4388c2d16.jpg" alt="VA - 100 Most Uplifting Songs Ever (2022) [FLAC]" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=8171" title="VA - 100 Most Uplifting Songs Ever (2022) [FLAC]" target="_blank">VA - 100 Most Uplifting Songs Ever (2022) [FLAC]</a></h3>
<p class="desc"></p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">5</span>
<span class="layui-badge layui-bg-blue" title="完成">12</span>
<span class="layui-badge layui-bg-black" title="查看">15</span>
<span class="layui-badge layui-bg-gray" title="点击">20</span>
<span class="layui-badge size">2.30 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8169" title="VA - Best Party Hits (2022) [FLAC]" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://i.postimg.cc/CLXMqRDs/751eb35f639f60a04a195964ca672478.jpg" alt="VA - Best Party Hits (2022) [FLAC]" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=8169" title="VA - Best Party Hits (2022) [FLAC]" target="_blank">VA - Best Party Hits (2022) [FLAC]</a></h3>
<p class="desc"></p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">3</span>
<span class="layui-badge layui-bg-blue" title="完成">5</span>
<span class="layui-badge layui-bg-black" title="查看">12</span>
<span class="layui-badge layui-bg-gray" title="点击">14</span>
<span class="layui-badge size">2.18 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8159" title="Marc Van Eyck & Pierre Vervloesem - Tamtams (2022) [FLAC]" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://i.postimg.cc/X7JNJZ7x/d1b6dd82eaa30e36e47b26854292a7e3.jpg" alt="Marc Van Eyck & Pierre Vervloesem - Tamtams (2022) [FLAC]" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=8159" title="Marc Van Eyck & Pierre Vervloesem - Tamtams (2022) [FLAC]" target="_blank">Marc Van Eyck & Pierre Vervloesem - Tamtams (2022) [FLAC]</a></h3>
<p class="desc"></p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">3</span>
<span class="layui-badge layui-bg-blue" title="完成">11</span>
<span class="layui-badge layui-bg-black" title="查看">12</span>
<span class="layui-badge layui-bg-gray" title="点击">14</span>
<span class="layui-badge size">248.44 MB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8151" title="Led Zeppelin - Discography (1969-2018) [FLAC]" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://i.postimg.cc/VNyk5Qq8/55578f89885c.jpg" alt="Led Zeppelin - Discography (1969-2018) [FLAC]" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=8151" title="Led Zeppelin - Discography (1969-2018) [FLAC]" target="_blank">Led Zeppelin - Discography (1969-2018) [FLAC]</a></h3>
<p class="desc"></p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">4</span>
<span class="layui-badge layui-bg-blue" title="完成">10</span>
<span class="layui-badge layui-bg-black" title="查看">22</span>
<span class="layui-badge layui-bg-gray" title="点击">15</span>
<span class="layui-badge size">93.41 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8150" title="Michael Cheeseman - Decades of Love (2022) [FLAC]" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://i.postimg.cc/0y0XzKSb/47d6830726c1c8c487bbb8570c6cc246.jpg" alt="Michael Cheeseman - Decades of Love (2022) [FLAC]" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=8150" title="Michael Cheeseman - Decades of Love (2022) [FLAC]" target="_blank">Michael Cheeseman - Decades of Love (2022) [FLAC]</a></h3>
<p class="desc"></p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">5</span>
<span class="layui-badge layui-bg-blue" title="完成">11</span>
<span class="layui-badge layui-bg-black" title="查看">13</span>
<span class="layui-badge layui-bg-gray" title="点击">21</span>
<span class="layui-badge size">205.48 MB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8147" title="Lana Del Rey - Born To Die: The Paradise Edition [24-bit Hi-Res, Alternative Edition] (2012) [FLAC]" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://i.postimg.cc/9Q7kvhhY/c03898bc10b861ab6767532721f77ae0.jpg" alt="Lana Del Rey - Born To Die: The Paradise Edition [24-bit Hi-Res, Alternative Edition] (2012) [FLAC]" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=8147" title="Lana Del Rey - Born To Die: The Paradise Edition [24-bit Hi-Res, Alternative Edition] (2012) [FLAC]" target="_blank">Lana Del Rey - Born To Die: The Paradise Edition [24-bit Hi-Res, Alternative Edition] (2012) [FLAC]</a></h3>
<p class="desc"></p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">4</span>
<span class="layui-badge layui-bg-blue" title="完成">12</span>
<span class="layui-badge layui-bg-black" title="查看">12</span>
<span class="layui-badge layui-bg-gray" title="点击">19</span>
<span class="layui-badge size">1.08 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8140" title="Lana Del Rey - Ultraviolence [24-bit Hi-Res, Deluxe Alternative Edition] (2014) [FLAC]" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://i.postimg.cc/0y667kmv/92a91a3537512c15825ca74ac8245d99.jpg" alt="Lana Del Rey - Ultraviolence [24-bit Hi-Res, Deluxe Alternative Edition] (2014) [FLAC]" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=8140" title="Lana Del Rey - Ultraviolence [24-bit Hi-Res, Deluxe Alternative Edition] (2014) [FLAC]" target="_blank">Lana Del Rey - Ultraviolence [24-bit Hi-Res, Deluxe Alternative Edition] (2014) [FLAC]</a></h3>
<p class="desc"></p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">5</span>
<span class="layui-badge layui-bg-blue" title="完成">11</span>
<span class="layui-badge layui-bg-black" title="查看">6</span>
<span class="layui-badge layui-bg-gray" title="点击">20</span>
<span class="layui-badge size">745.49 MB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8137" title="S.H.E[2001-2018]所有专辑歌曲合集打包" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img2.doubanio.com/view/photo/photo/public/p2631860422.webp" alt="S.H.E[2001-2018]所有专辑歌曲合集打包" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=8137" title="S.H.E[2001-2018]所有专辑歌曲合集打包" target="_blank">S.H.E[2001-2018]所有专辑歌曲合集打包</a></h3>
<p class="desc">蛇团来啦~S.H.E[2001-2018]所有专辑歌曲合集打包</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">7</span>
<span class="layui-badge layui-bg-cyan" title="下载">1</span>
<span class="layui-badge layui-bg-blue" title="完成">14</span>
<span class="layui-badge layui-bg-black" title="查看">19</span>
<span class="layui-badge layui-bg-gray" title="点击">30</span>
<span class="layui-badge size">16.56 GB</span>
</p>
</div>
</li>
</ul>
</div>
</div>
<div class="brick-box">
<div class="box-hd">
<h2 class="title">电子书Ebook</h2>
<div class="more">
<a href="/Torrents.index?category=9" target="_blank">查看全部<i class="layui-icon layui-icon-right"></i></a>
</div>
</div>
<div class="brick-list">
<ul class="layui-row layui-col-space10">
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7778" title="亚马逊 kindle ebook 大合集" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://s2.ax1x.com/2019/05/30/VMPOF1.jpg" alt="亚马逊 kindle ebook 大合集" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=7778" title="亚马逊 kindle ebook 大合集" target="_blank">亚马逊 kindle ebook 大合集</a></h3>
<p class="desc">6000亚马逊 kindle ebook 大合集</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">11</span>
<span class="layui-badge layui-bg-cyan" title="下载">2</span>
<span class="layui-badge layui-bg-blue" title="完成">34</span>
<span class="layui-badge layui-bg-black" title="查看">161</span>
 <span class="layui-badge layui-bg-gray" title="点击">106</span>
<span class="layui-badge size">35.55 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7744" title="计算机专业电子书大合集-Rs-小叔整理" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://s1.ax1x.com/2022/05/21/Ovr2OU.png" alt="计算机专业电子书大合集-Rs-小叔整理" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=7744" title="计算机专业电子书大合集-Rs-小叔整理" target="_blank">计算机专业电子书大合集-Rs-小叔整理</a></h3>
<p class="desc">计算机专业电子书大合集-Rs-小叔整理</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">8</span>
<span class="layui-badge layui-bg-blue" title="完成">20</span>
<span class="layui-badge layui-bg-black" title="查看">62</span>
<span class="layui-badge layui-bg-gray" title="点击">43</span>
<span class="layui-badge size">25.43 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7725" title="某PDF图书馆（三）（T-Z分类)" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://s2.loli.net/2022/05/21/4GqxktYFXybRZMv.png" alt="某PDF图书馆（三）（T-Z分类)" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=7725" title="某PDF图书馆（三）（T-Z分类)" target="_blank">某PDF图书馆（三）（T-Z分类)</a></h3>
<p class="desc"></p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">5</span>
<span class="layui-badge layui-bg-blue" title="完成">8</span>
<span class="layui-badge layui-bg-black" title="查看">72</span>
<span class="layui-badge layui-bg-gray" title="点击">50</span>
<span class="layui-badge size">209.54 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7724" title="某PDF图书馆（二）（I-S分类)" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://s2.loli.net/2022/05/21/4GqxktYFXybRZMv.png" alt="某PDF图书馆（二）（I-S分类)" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=7724" title="某PDF图书馆（二）（I-S分类)" target="_blank">某PDF图书馆（二）（I-S分类)</a></h3>
<p class="desc"></p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">5</span>
<span class="layui-badge layui-bg-blue" title="完成">7</span>
<span class="layui-badge layui-bg-black" title="查看">65</span>
<span class="layui-badge layui-bg-gray" title="点击">56</span>
<span class="layui-badge size">206.66 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7723" title="某PDF图书馆（一）（A-H分类)" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://s2.loli.net/2022/05/21/4GqxktYFXybRZMv.png" alt="某PDF图书馆（一）（A-H分类)" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=7723" title="某PDF图书馆（一）（A-H分类)" target="_blank">某PDF图书馆（一）（A-H分类)</a></h3>
<p class="desc"></p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">5</span>
<span class="layui-badge layui-bg-blue" title="完成">10</span>
<span class="layui-badge layui-bg-black" title="查看">122</span>
<span class="layui-badge layui-bg-gray" title="点击">67</span>
<span class="layui-badge size">145.31 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7537" title="A Man with Compound Eyes PDF" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img.pterclub.com/images/2022/05/14/23c97034998b8f1c9e775dcac841be0e.jpg" alt="A Man with Compound Eyes PDF" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=7537" title="A Man with Compound Eyes PDF" target="_blank">A Man with Compound Eyes PDF</a></h3>
<p class="desc">复眼人｜作者: 吴明益｜PDF</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">40</span>
<span class="layui-badge layui-bg-blue" title="完成">9</span>
<span class="layui-badge layui-bg-black" title="查看">10</span>
<span class="layui-badge layui-bg-gray" title="点击">109</span>
<span class="layui-badge size">9.54 MB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7426" title="A New New Testament: A Bible for the 21st Century Combining Traditional and Newly Discovered Texts EPUB" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img.pterclub.com/images/2022/05/09/A-New-New-Testament.jpg" alt="A New New Testament: A Bible for the 21st Century Combining Traditional and Newly Discovered Texts EPUB" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=7426" title="A New New Testament: A Bible for the 21st Century Combining Traditional and Newly Discovered Texts EPUB" target="_blank">A New New Testament: A Bible for the 21st Century Combining Traditional and Newly Discovered Texts EPUB</a></h3>
<p class="desc">英文｜作者: Hal Taussig｜EPUB</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">53</span>
<span class="layui-badge layui-bg-blue" title="完成">12</span>
<span class="layui-badge layui-bg-black" title="查看">13</span>
<span class="layui-badge layui-bg-gray" title="点击">183</span>
<span class="layui-badge size">1.52 MB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7424" title="Tripmaster: Lifetime's Faith MOBI" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img.pterclub.com/images/2022/05/09/fcb946f34f11a38def6ad07b37e307c8.jpg" alt="Tripmaster: Lifetime's Faith MOBI" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=7424" title="Tripmaster: Lifetime's Faith MOBI" target="_blank">Tripmaster: Lifetime's Faith MOBI</a></h3>
<p class="desc">行者：一念一生｜作者: 六小龄童｜MOBI</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">38</span>
<span class="layui-badge layui-bg-blue" title="完成">8</span>
<span class="layui-badge layui-bg-black" title="查看">9</span>
<span class="layui-badge layui-bg-gray" title="点击">105</span>
<span class="layui-badge size">13.81 MB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7413" title="The Elements of Building: A Business Handbook for Residential Builders & Tradesmen EPUB" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img.pterclub.com/images/2022/05/08/The-Elements-of-Building.jpg" alt="The Elements of Building: A Business Handbook for Residential Builders & Tradesmen EPUB" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=7413" title="The Elements of Building: A Business Handbook for Residential Builders & Tradesmen EPUB" target="_blank">The Elements of Building: A Business Handbook for Residential Builders & Tradesmen EPUB</a></h3>
<p class="desc">英文版｜作者: Mark Q. Kerson｜EPUB</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">27</span>
<span class="layui-badge layui-bg-blue" title="完成">16</span>
<span class="layui-badge layui-bg-black" title="查看">9</span>
<span class="layui-badge layui-bg-gray" title="点击">86</span>
<span class="layui-badge size">404.61 KB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7412" title="The Murder List EPUB" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img.pterclub.com/images/2022/05/08/The-Murder-List.jpg" alt="The Murder List EPUB" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=7412" title="The Murder List EPUB" target="_blank">The Murder List EPUB</a></h3>
<p class="desc">英文版｜作者: T.F. Muir｜EPUB</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">25</span>
<span class="layui-badge layui-bg-blue" title="完成">9</span>
<span class="layui-badge layui-bg-black" title="查看">9</span>
<span class="layui-badge layui-bg-gray" title="点击">79</span>
<span class="layui-badge size">319.29 KB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7411" title="Modern Computer Architecture and Organization：Learn x86, ARM, and RISC-V architectures and the design of smartphones, PCs, and cloud servers, 2nd Edition PDF" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img.pterclub.com/images/2022/05/08/Modern-Computer-Architecture-and-Organization.jpg" alt="Modern Computer Architecture and Organization：Learn x86, ARM, and RISC-V architectures and the design of smartphones, PCs, and cloud servers, 2nd Edition PDF" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=7411" title="Modern Computer Architecture and Organization：Learn x86, ARM, and RISC-V architectures and the design of smartphones, PCs, and cloud servers, 2nd Edition PDF" target="_blank">Modern Computer Architecture and Organization：Learn x86, ARM, and RISC-V architectures and the design of smartphones, PCs, and cloud servers, 2nd Edition PDF</a></h3>
<p class="desc">现代计算机结构与组成 第二版 英文版｜作者: Jim Ledin｜PDF</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">45</span>
<span class="layui-badge layui-bg-blue" title="完成">8</span>
<span class="layui-badge layui-bg-black" title="查看">8</span>
<span class="layui-badge layui-bg-gray" title="点击">116</span>
<span class="layui-badge size">7.81 MB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7400" title="Fluent Python: Clear, Concise, and Effective Programming 2nd Edition EPUB" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img.pterclub.com/images/2022/05/07/Fluent-Python.jpg" alt="Fluent Python: Clear, Concise, and Effective Programming 2nd Edition EPUB" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=7400" title="Fluent Python: Clear, Concise, and Effective Programming 2nd Edition EPUB" target="_blank">Fluent Python: Clear, Concise, and Effective Programming 2nd Edition EPUB</a></h3>
<p class="desc">流畅的Python 英文版｜作者: Luciano Ramalho｜EPUB</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">51</span>
<span class="layui-badge layui-bg-blue" title="完成">15</span>
<span class="layui-badge layui-bg-black" title="查看">8</span>
<span class="layui-badge layui-bg-gray" title="点击">131</span>
<span class="layui-badge size">8.31 MB</span>
</p>
</div>
</li>
</ul>
</div>
</div>
<div class="brick-box">
<div class="box-hd">
<h2 class="title">软件Software</h2>
<div class="more">
<a href="/Torrents.index?category=10" target="_blank">查看全部<i class="layui-icon layui-icon-right"></i></a>
</div>
</div>
<div class="brick-list">
<ul class="layui-row layui-col-space10">
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=5994" title="Internet Download Manager v6.40 Build8 Repacked by LRepack" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://p.sda1.dev/5/dff23b521a9306248f594b921e70cc01/image.png" alt="Internet Download Manager v6.40 Build8 Repacked by LRepack" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=5994" title="Internet Download Manager v6.40 Build8 Repacked by LRepack" target="_blank">Internet Download Manager v6.40 Build8 Repacked by LRepack</a></h3>
<p class="desc">IDM V6.40.8</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">43</span>
<span class="layui-badge layui-bg-blue" title="完成">14</span>
<span class="layui-badge layui-bg-black" title="查看">17</span>
<span class="layui-badge layui-bg-gray" title="点击">154</span>
<span class="layui-badge size">15.52 MB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=5703" title="internet_download_manager_6.40.7.zip" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://p.sda1.dev/4/46f855c3900b7504789af38f30a79136/image.png" alt="internet_download_manager_6.40.7.zip" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=5703" title="internet_download_manager_6.40.7.zip" target="_blank">internet_download_manager_6.40.7.zip</a></h3>
<p class="desc">IDM 6.40.7 多语言免注册版</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">33</span>
<span class="layui-badge layui-bg-blue" title="完成">13</span>
<span class="layui-badge layui-bg-black" title="查看">28</span>
<span class="layui-badge layui-bg-gray" title="点击">116</span>
<span class="layui-badge size">15.46 MB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=5170" title="Internet Download Manager v6.40 Build2 Repacked by LRepack" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://p.sda1.dev/3/b0fd9199054fa7de388388473a1da8a3/image.png" alt="Internet Download Manager v6.40 Build2 Repacked by LRepack" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=5170" title="Internet Download Manager v6.40 Build2 Repacked by LRepack" target="_blank">Internet Download Manager v6.40 Build2 Repacked by LRepack</a></h3>
<p class="desc">IDM 6.40.2 多语言免注册版</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">39</span>
<span class="layui-badge layui-bg-blue" title="完成">9</span>
<span class="layui-badge layui-bg-black" title="查看">30</span>
<span class="layui-badge layui-bg-gray" title="点击">164</span>
<span class="layui-badge size">15.16 MB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=5136" title="internet_download_manager_6.40.1.zip" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://p.sda1.dev/3/487dd53ef4ab0d211e2d0c6ede011602/image.png" alt="internet_download_manager_6.40.1.zip" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=5136" title="internet_download_manager_6.40.1.zip" target="_blank">internet_download_manager_6.40.1.zip</a></h3>
<p class="desc"></p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">56</span>
<span class="layui-badge layui-bg-blue" title="完成">11</span>
<span class="layui-badge layui-bg-black" title="查看">21</span>
<span class="layui-badge layui-bg-gray" title="点击">255</span>
<span class="layui-badge size">15.15 MB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=4983" title="internet_download_manager_6.39.8.zip" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://lrepacks.net/repaki-programm-dlya-interneta/56-internet-download-manager-repack.html" alt="internet_download_manager_6.39.8.zip" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=4983" title="internet_download_manager_6.39.8.zip" target="_blank">internet_download_manager_6.39.8.zip</a></h3>
<p class="desc"></p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">27</span>
<span class="layui-badge layui-bg-blue" title="完成">56</span>
<span class="layui-badge layui-bg-black" title="查看">32</span>
 <span class="layui-badge layui-bg-gray" title="点击">152</span>
<span class="layui-badge size">15.01 MB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=4931" title="internet_download_manager_6.39.7.zip" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://lrepacks.net/repaki-programm-dlya-interneta/56-internet-download-manager-repack.html" alt="internet_download_manager_6.39.7.zip" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=4931" title="internet_download_manager_6.39.7.zip" target="_blank">internet_download_manager_6.39.7.zip</a></h3>
<p class="desc">IDM v6.39.7</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">23</span>
<span class="layui-badge layui-bg-blue" title="完成">19</span>
<span class="layui-badge layui-bg-black" title="查看">30</span>
<span class="layui-badge layui-bg-gray" title="点击">137</span>
<span class="layui-badge size">15.02 MB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=4885" title="internet_download_manager_6.39.5.zip" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://lrepacks.net/" alt="internet_download_manager_6.39.5.zip" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=4885" title="internet_download_manager_6.39.5.zip" target="_blank">internet_download_manager_6.39.5.zip</a></h3>
<p class="desc">IDM 6.39.5</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">28</span>
<span class="layui-badge layui-bg-blue" title="完成">13</span>
<span class="layui-badge layui-bg-black" title="查看">23</span>
<span class="layui-badge layui-bg-gray" title="点击">164</span>
<span class="layui-badge size">14.99 MB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=4857" title="internet download manager 6.39.3" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://lrepacks.net/uploads/posts/2020-04/1587036845_internet_download_manager.jpg" alt="internet download manager 6.39.3" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=4857" title="internet download manager 6.39.3" target="_blank">internet download manager 6.39.3</a></h3>
<p class="desc">IDM 6.39.3 repack</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">9</span>
<span class="layui-badge layui-bg-blue" title="完成">13</span>
 <span class="layui-badge layui-bg-black" title="查看">23</span>
<span class="layui-badge layui-bg-gray" title="点击">74</span>
<span class="layui-badge size">14.97 MB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=4139" title="[虚拟机][MAC]Parallels_Desktop_for_ARM64_M1_16_5_0_56092.dmg" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://www.parallels.cn/fileadmin/res/img/pd/2020/overview/heroImg_xs.png" alt="[虚拟机][MAC]Parallels_Desktop_for_ARM64_M1_16_5_0_56092.dmg" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=4139" title="[虚拟机][MAC]Parallels_Desktop_for_ARM64_M1_16_5_0_56092.dmg" target="_blank">[虚拟机][MAC]Parallels_Desktop_for_ARM64_M1_16_5_0_56092.dmg</a></h3>
<p class="desc">苹果系统虚拟机软件 M1 CPU 版本</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">3</span>
<span class="layui-badge layui-bg-blue" title="完成">7</span>
<span class="layui-badge layui-bg-black" title="查看">11</span>
<span class="layui-badge layui-bg-gray" title="点击">27</span>
<span class="layui-badge size">318.80 MB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=4138" title="[虚拟机][MAC]Parallels Desktop 16.5.0-49183 - Toolbox 4.5.0-3860 by TNT.dmg" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://www.parallels.cn/fileadmin/res/img/pd/2020/overview/heroImg_xs.png" alt="[虚拟机][MAC]Parallels Desktop 16.5.0-49183 - Toolbox 4.5.0-3860 by TNT.dmg" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=4138" title="[虚拟机][MAC]Parallels Desktop 16.5.0-49183 - Toolbox 4.5.0-3860 by TNT.dmg" target="_blank">[虚拟机][MAC]Parallels Desktop 16.5.0-49183 - Toolbox 4.5.0-3860 by TNT.dmg</a></h3>
<p class="desc">苹果系统虚拟机软件 intel CPU 版本</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">11</span>
<span class="layui-badge layui-bg-blue" title="完成">17</span>
<span class="layui-badge layui-bg-black" title="查看">23</span>
<span class="layui-badge layui-bg-gray" title="点击">162</span>
<span class="layui-badge size">267.05 MB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=3735" title="[BYRBT].Adobe_Premiere_Pro_2021_15.1.0.48_SP_20210413.rar" target="_blank">
<i class="layui-icon layui-icon-picture" style="font-size: 100px; color: #f2f2f2;"></i>
</a>
</div>
<h3 class="title"><a href="details.php?id=3735" title="[BYRBT].Adobe_Premiere_Pro_2021_15.1.0.48_SP_20210413.rar" target="_blank">[BYRBT].Adobe_Premiere_Pro_2021_15.1.0.48_SP_20210413.rar</a></h3>
<p class="desc"></p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">2</span>
<span class="layui-badge layui-bg-blue" title="完成">4</span>
<span class="layui-badge layui-bg-black" title="查看">28</span>
<span class="layui-badge layui-bg-gray" title="点击">21</span>
<span class="layui-badge size">1.53 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=406" title="Adobe_2020_2021_MasterCol_win_v11.1.5_20201208" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://pic.downk.cc/item/5f9c02921cd1bbb86b4ac3c7.png" alt="Adobe_2020_2021_MasterCol_win_v11.1.5_20201208" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=406" title="Adobe_2020_2021_MasterCol_win_v11.1.5_20201208" target="_blank">Adobe_2020_2021_MasterCol_win_v11.1.5_20201208</a></h3>
<p class="desc">Adobe全家桶2020+2021 | 直接安装免激活 | 20201208发布 | 支持GPU加速 | 支持H.265 | 包含Acrobat | vposy</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">2</span>
<span class="layui-badge layui-bg-cyan" title="下载">1</span>
<span class="layui-badge layui-bg-blue" title="完成">37</span>
<span class="layui-badge layui-bg-black" title="查看">83</span>
<span class="layui-badge layui-bg-gray" title="点击">123</span>
<span class="layui-badge size">22.95 GB</span>
</p>
</div>
</li>
</ul>
</div>
</div>
<div class="brick-box">
<div class="box-hd">
<h2 class="title">游戏Game</h2>
<div class="more">
<a href="/Torrents.index?category=11" target="_blank">查看全部<i class="layui-icon layui-icon-right"></i></a>
</div>
</div>
<div class="brick-list">
<ul class="layui-row layui-col-space10">
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7646" title="[PC][Elden Ring][艾尔登法环][ARPG][官方简体][光盘镜像]" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://p.sda1.dev/2/00654ebc9868092ece3a93086ba89403/E3i66I3VIAEp3V7.jpg;" alt="[PC][Elden Ring][艾尔登法环][ARPG][官方简体][光盘镜像]" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=7646" title="[PC][Elden Ring][艾尔登法环][ARPG][官方简体][光盘镜像]" target="_blank">[PC][Elden Ring][艾尔登法环][ARPG][官方简体][光盘镜像]</a></h3>
<p class="desc">老头环 | FLT Scene | Deluxe Edition (1.04.1 (Cal.Ver. 1.04.2) + DLCs + Bonus Content + MULTi14)</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">3</span>
<span class="layui-badge layui-bg-cyan" title="下载">1</span>
 <span class="layui-badge layui-bg-blue" title="完成">8</span>
<span class="layui-badge layui-bg-black" title="查看">59</span>
<span class="layui-badge layui-bg-gray" title="点击">28</span>
<span class="layui-badge size">47.54 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7526" title="Riftbound-TiNYiSO" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://cdn.akamai.steamstatic.com/steam/apps/1588340/header.jpg" alt="Riftbound-TiNYiSO" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=7526" title="Riftbound-TiNYiSO" target="_blank">Riftbound-TiNYiSO</a></h3>
<p class="desc">裂谷征途</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">1</span>
<span class="layui-badge layui-bg-blue" title="完成">6</span>
<span class="layui-badge layui-bg-black" title="查看">16</span>
<span class="layui-badge layui-bg-gray" title="点击">22</span>
<span class="layui-badge size">1.14 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7514" title="Wish World-DARKZER0" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://cdn.akamai.steamstatic.com/steam/apps/1667440/header.jpg" alt="Wish World-DARKZER0" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=7514" title="Wish World-DARKZER0" target="_blank">Wish World-DARKZER0</a></h3>
<p class="desc">无中文</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">3</span>
<span class="layui-badge layui-bg-blue" title="完成">5</span>
<span class="layui-badge layui-bg-black" title="查看">6</span>
<span class="layui-badge layui-bg-gray" title="点击">22</span>
<span class="layui-badge size">194.30 MB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7343" title="Godlike Burger-Razor1911" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://cdn.akamai.steamstatic.com/steam/apps/1432910/header_alt_assets_0.jpg" alt="Godlike Burger-Razor1911" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=7343" title="Godlike Burger-Razor1911" target="_blank">Godlike Burger-Razor1911</a></h3>
<p class="desc">宇宙汉堡王</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">3</span>
 <span class="layui-badge layui-bg-blue" title="完成">8</span>
<span class="layui-badge layui-bg-black" title="查看">9</span>
<span class="layui-badge layui-bg-gray" title="点击">18</span>
<span class="layui-badge size">907.91 MB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7342" title="Bugsnax-FLT" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://cdn.akamai.steamstatic.com/steam/apps/674140/header.jpg" alt="Bugsnax-FLT" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=7342" title="Bugsnax-FLT" target="_blank">Bugsnax-FLT</a></h3>
<p class="desc">虫子快餐店</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">1</span>
<span class="layui-badge layui-bg-blue" title="完成">6</span>
<span class="layui-badge layui-bg-black" title="查看">7</span>
<span class="layui-badge layui-bg-gray" title="点击">21</span>
<span class="layui-badge size">4.35 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7339" title="Evasion From Hell-TiNYiSO" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://cdn.akamai.steamstatic.com/steam/apps/1903630/header.jpg" alt="Evasion From Hell-TiNYiSO" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=7339" title="Evasion From Hell-TiNYiSO" target="_blank">Evasion From Hell-TiNYiSO</a></h3>
<p class="desc">逃离地狱</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">2</span>
<span class="layui-badge layui-bg-blue" title="完成">7</span>
<span class="layui-badge layui-bg-black" title="查看">10</span>
<span class="layui-badge layui-bg-gray" title="点击">17</span>
<span class="layui-badge size">1.40 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7316" title="Barro F22-DARKSiDERS" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://cdn.akamai.steamstatic.com/steam/apps/1958600/header.jpg" alt="Barro F22-DARKSiDERS" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=7316" title="Barro F22-DARKSiDERS" target="_blank">Barro F22-DARKSiDERS</a></h3>
<p class="desc">巴罗F22</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">1</span>
<span class="layui-badge layui-bg-blue" title="完成">5</span>
<span class="layui-badge layui-bg-black" title="查看">2</span>
<span class="layui-badge layui-bg-gray" title="点击">14</span>
<span class="layui-badge size">407.58 MB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7315" title="HunterX-DOGE" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://cdn.akamai.steamstatic.com/steam/apps/1918450/header.jpg" alt="HunterX-DOGE" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=7315" title="HunterX-DOGE" target="_blank">HunterX-DOGE</a></h3>
<p class="desc">狩猎者X</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">1</span>
<span class="layui-badge layui-bg-blue" title="完成">6</span>
<span class="layui-badge layui-bg-black" title="查看">8</span>
<span class="layui-badge layui-bg-gray" title="点击">13</span>
<span class="layui-badge size">1.08 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7312" title="The Heart of Darkness UNRATED-DINOByTES" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://cdn.akamai.steamstatic.com/steam/apps/1413990/header_schinese.jpg" alt="The Heart of Darkness UNRATED-DINOByTES" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=7312" title="The Heart of Darkness UNRATED-DINOByTES" target="_blank">The Heart of Darkness UNRATED-DINOByTES</a></h3>
<p class="desc">黑暗之心</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">1</span>
<span class="layui-badge layui-bg-blue" title="完成">4</span>
<span class="layui-badge layui-bg-black" title="查看">5</span>
<span class="layui-badge layui-bg-gray" title="点击">12</span>
<span class="layui-badge size">639.21 MB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7296" title="Widower's Sky-CODEX" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://cdn.akamai.steamstatic.com/steam/apps/796330/header.jpg" alt="Widower's Sky-CODEX" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=7296" title="Widower's Sky-CODEX" target="_blank">Widower's Sky-CODEX</a></h3>
<p class="desc">鳏夫的天空</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">1</span>
<span class="layui-badge layui-bg-blue" title="完成">2</span>
<span class="layui-badge layui-bg-black" title="查看">7</span>
<span class="layui-badge layui-bg-gray" title="点击">12</span>
<span class="layui-badge size">1.09 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=6571" title="ELDEN RING-PLAZA" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://cdn.akamai.steamstatic.com/steam/apps/1245620/header.jpg?t=1645750738" alt="ELDEN RING-PLAZA" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=6571" title="ELDEN RING-PLAZA" target="_blank">ELDEN RING-PLAZA</a></h3>
<p class="desc">艾尔登法环/老头环 | PC | 官方中文 | 光盘镜像</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">19</span>
<span class="layui-badge layui-bg-blue" title="完成">3</span>
<span class="layui-badge layui-bg-black" title="查看">31</span>
<span class="layui-badge layui-bg-gray" title="点击">67</span>
<span class="layui-badge size">46.13 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=6321" title="The Sims 4" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://cdn.cloudflare.steamstatic.com/steam/apps/1222670/header.jpg" alt="The Sims 4" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=6321" title="The Sims 4" target="_blank">The Sims 4</a></h3>
<p class="desc">2022.2.18最新版本模拟人生4，包含全DLC以及15G大小的Mod，转自网络，仅供学习使用</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">3</span>
<span class="layui-badge layui-bg-blue" title="完成">2</span>
<span class="layui-badge layui-bg-black" title="查看">25</span>
<span class="layui-badge layui-bg-gray" title="点击">16</span>
<span class="layui-badge size">60.48 GB</span>
</p>
</div>
</li>
</ul>
</div>
</div>
<div class="brick-box">
<div class="box-hd">
<h2 class="title">资料Education</h2>
<div class="more">
<a href="/Torrents.index?category=12" target="_blank">查看全部<i class="layui-icon layui-icon-right"></i></a>
</div>
</div>
<div class="brick-list">
<ul class="layui-row layui-col-space10">
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8176" title="The Space Art of a Dream of Red Mansions ---- Jinan University" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img0.baidu.com/it/u%3D1067578508%2C88942508%26fm%3D253%26fmt%3Dauto%26app%3D138%26f%3DJPEG%3Fw%3D554%26h%3D209" alt="The Space Art of a Dream of Red Mansions ---- Jinan University" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=8176" title="The Space Art of a Dream of Red Mansions ---- Jinan University" target="_blank">The Space Art of a Dream of Red Mansions ---- Jinan University</a></h3>
<p class="desc">《红楼梦》的空间艺术----暨南大学</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">1</span>
<span class="layui-badge layui-bg-blue" title="完成">2</span>
<span class="layui-badge layui-bg-black" title="查看">13</span>
<span class="layui-badge layui-bg-gray" title="点击">10</span>
<span class="layui-badge size">563.70 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7443" title="伟大的博物馆系列合辑+分册双版本（全套共31卷）[EPUB Mobi AZW3]" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://thumbs4.imagebam.com/ff/d8/1c/MEA528X_t.png" alt="伟大的博物馆系列合辑+分册双版本（全套共31卷）[EPUB Mobi AZW3]" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=7443" title="伟大的博物馆系列合辑+分册双版本（全套共31卷）[EPUB Mobi AZW3]" target="_blank">伟大的博物馆系列合辑+分册双版本（全套共31卷）[EPUB Mobi AZW3]</a></h3>
<p class="desc"></p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">4</span>
<span class="layui-badge layui-bg-blue" title="完成">15</span>
<span class="layui-badge layui-bg-black" title="查看">37</span>
<span class="layui-badge layui-bg-gray" title="点击">56</span>
<span class="layui-badge size">3.40 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=6031" title="Learning and thinking pack" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://i.endpot.com/image/QCBEN/QQ%25E6%2588%25AA%25E5%259B%25BE20211026084144.png" alt="Learning and thinking pack" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=6031" title="Learning and thinking pack" target="_blank">Learning and thinking pack</a></h3>
<p class="desc">学而思网校幼升小到高中全套视频教程</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">23</span>
<span class="layui-badge layui-bg-blue" title="完成">2</span>
<span class="layui-badge layui-bg-black" title="查看">87</span>
<span class="layui-badge layui-bg-gray" title="点击">130</span>
<span class="layui-badge size">1.608 TB</span>
</p>
 </div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=4992" title="Practical English Usage, 4th Edition.pdf" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://tracker.hd.ai/announce" alt="Practical English Usage, 4th Edition.pdf" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=4992" title="Practical English Usage, 4th Edition.pdf" target="_blank">Practical English Usage, 4th Edition.pdf</a></h3>
<p class="desc">英语用法指南 第四版</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">48</span>
<span class="layui-badge layui-bg-blue" title="完成">22</span>
<span class="layui-badge layui-bg-black" title="查看">35</span>
<span class="layui-badge layui-bg-gray" title="点击">241</span>
<span class="layui-badge size">19.73 MB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=4725" title="Python数据分析与挖掘实战_(大数据技术丛书) - 张良均_等著" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img12.360buyimg.com/n1/jfs/t2311/234/1528472552/65097/39542e3f/565d580dNc459a385.jpg" alt="Python数据分析与挖掘实战_(大数据技术丛书) - 张良均_等著" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=4725" title="Python数据分析与挖掘实战_(大数据技术丛书) - 张良均_等著" target="_blank">Python数据分析与挖掘实战_(大数据技术丛书) - 张良均_等著</a></h3>
<p class="desc"></p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">14</span>
<span class="layui-badge layui-bg-blue" title="完成">31</span>
<span class="layui-badge layui-bg-black" title="查看">43</span>
<span class="layui-badge layui-bg-gray" title="点击">90</span>
<span class="layui-badge size">108.77 MB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=4530" title="Python爬虫 数据采集课程【完整资料】" target="_blank">
<img lay-src="https://images.weserv.nl/?url=http://tracker.hd.ai/announce" alt="Python爬虫 数据采集课程【完整资料】" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=4530" title="Python爬虫 数据采集课程【完整资料】" target="_blank">Python爬虫 数据采集课程【完整资料】</a></h3>
<p class="desc"></p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">10</span>
<span class="layui-badge layui-bg-blue" title="完成">27</span>
 <span class="layui-badge layui-bg-black" title="查看">52</span>
<span class="layui-badge layui-bg-gray" title="点击">71</span>
<span class="layui-badge size">11.75 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=4451" title="三四阶魔方初级玩法" target="_blank">
<img lay-src="https://images.weserv.nl/?url=http://www.cnhd.com/attachments/201210/20121005102226b74ec9d71b5be52923869da69de0bc7c.png" alt="三四阶魔方初级玩法" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=4451" title="三四阶魔方初级玩法" target="_blank">三四阶魔方初级玩法</a></h3>
<p class="desc">优酷上都有，这里做一个收集。转自CHD。</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">28</span>
<span class="layui-badge layui-bg-blue" title="完成">15</span>
<span class="layui-badge layui-bg-black" title="查看">21</span>
<span class="layui-badge layui-bg-gray" title="点击">140</span>
<span class="layui-badge size">404.06 MB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=4435" title="Wikipedia offline browser from all website copy 2021 03" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://i.loli.net/2021/05/26/vCoPN74ZY6GSqti.png" alt="Wikipedia offline browser from all website copy 2021 03" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=4435" title="Wikipedia offline browser from all website copy 2021 03" target="_blank">Wikipedia offline browser from all website copy 2021 03</a></h3>
<p class="desc">维基百科离线版2021 03</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">6</span>
<span class="layui-badge layui-bg-blue" title="完成">3</span>
<span class="layui-badge layui-bg-black" title="查看">20</span>
<span class="layui-badge layui-bg-gray" title="点击">35</span>
<span class="layui-badge size">16.21 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=4373" title="2022强化专项特训（配套张宇36讲）" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://et8.org/attachments/202107/20210727125524bb374b4d87a233e8a855b727135b9888.png" alt="2022强化专项特训（配套张宇36讲）" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=4373" title="2022强化专项特训（配套张宇36讲）" target="_blank">2022强化专项特训（配套张宇36讲）</a></h3>
<p class="desc">考研数学强化专项.2022.张宇36讲（内含高数、线代、概率）</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">3</span>
<span class="layui-badge layui-bg-blue" title="完成">3</span>
<span class="layui-badge layui-bg-black" title="查看">23</span>
<span class="layui-badge layui-bg-gray" title="点击">29</span>
<span class="layui-badge size">37.64 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=4297" title="2020暑期培优" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img.pterclub.com/images/2021/07/11/_20210705180808.png" alt="2020暑期培优" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=4297" title="2020暑期培优" target="_blank">2020暑期培优</a></h3>
<p class="desc">2020学而思暑期培优 小学 语文 数学</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">9</span>
<span class="layui-badge layui-bg-cyan" title="下载">1</span>
<span class="layui-badge layui-bg-blue" title="完成">5</span>
<span class="layui-badge layui-bg-black" title="查看">43</span>
<span class="layui-badge layui-bg-gray" title="点击">74</span>
<span class="layui-badge size">107.29 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=4244" title="Tongji University - advanced mathematics 2019 WEB-DL 1080p AVC AAC" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img.pterclub.com/images/2021/08/01/2021070811425245f3aa15272baf39126723598e6cfab9.jpg" alt="Tongji University - advanced mathematics 2019 WEB-DL 1080p AVC AAC" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=4244" title="Tongji University - advanced mathematics 2019 WEB-DL 1080p AVC AAC" target="_blank">Tongji University - advanced mathematics 2019 WEB-DL 1080p AVC AAC</a></h3>
<p class="desc">b站播放量第一的高数视频 高等数学 同济版 宋浩 2019</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">2</span>
<span class="layui-badge layui-bg-blue" title="完成">4</span>
<span class="layui-badge layui-bg-black" title="查看">13</span>
<span class="layui-badge layui-bg-gray" title="点击">33</span>
<span class="layui-badge size">56.94 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=4243" title="XuTao-Postgraduate Politics 2002 - MP4" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://et8.org/attachments/202107/2021072518044597a12e84db85de879052eaa0b6dc6e41.png" alt="XuTao-Postgraduate Politics 2002 - MP4" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=4243" title="XuTao-Postgraduate Politics 2002 - MP4" target="_blank">XuTao-Postgraduate Politics 2002 - MP4</a></h3>
<p class="desc">2022年徐涛考研政治强化班【马原+思修+史纲+毛中特】</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">4</span>
<span class="layui-badge layui-bg-blue" title="完成">2</span>
<span class="layui-badge layui-bg-black" title="查看">14</span>
<span class="layui-badge layui-bg-gray" title="点击">40</span>
<span class="layui-badge size">25.84 GB</span>
</p>
</div>
</li>
</ul>
</div>
</div>
<div class="brick-box">
<div class="box-hd">
<h2 class="title">旅游Travel</h2>
<div class="more">
<a href="/Torrents.index?category=13" target="_blank">查看全部<i class="layui-icon layui-icon-right"></i></a>
</div>
</div>
<div class="brick-list">
<ul class="layui-row layui-col-space10">
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7610" title="4K-4096x2304-风景视频-54Mbps.mov" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img2.doubanio.com/view/subject/l/public/s3193791.jpg" alt="4K-4096x2304-风景视频-54Mbps.mov" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=7610" title="4K-4096x2304-风景视频-54Mbps.mov" target="_blank">4K-4096x2304-风景视频-54Mbps.mov</a></h3>
<p class="desc">4k超高清片源，测试投影，测试4k电视，风景星空建筑</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">5</span>
<span class="layui-badge layui-bg-blue" title="完成">19</span>
<span class="layui-badge layui-bg-black" title="查看">76</span>
<span class="layui-badge layui-bg-gray" title="点击">49</span>
<span class="layui-badge size">1.82 GB</span>
</p>
</div>
</li>
</ul>
</div>
</div>
<div class="brick-box">
<div class="box-hd">
<h2 class="title">其他Misc</h2>
<div class="more">
<a href="/Torrents.index?category=15" target="_blank">查看全部<i class="layui-icon layui-icon-right"></i></a>
</div>
</div>
<div class="brick-list">
<ul class="layui-row layui-col-space10">
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8200" title="B Zhan Lesson 70 Tao" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://s3.bmp.ovh/imgs/2022/06/08/6c876b88cd2b0d1a.jpeg" alt="B Zhan Lesson 70 Tao" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=8200" title="B Zhan Lesson 70 Tao" target="_blank">B Zhan Lesson 70 Tao</a></h3>
<p class="desc">b站课程70套 c4d/python/excel/绘画/日语/科学/文学/政治/历史/经济学/哲学/心理学/吉他/创作等等</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">2</span>
<span class="layui-badge layui-bg-cyan" title="下载">4</span>
<span class="layui-badge layui-bg-blue" title="完成">1</span>
<span class="layui-badge layui-bg-black" title="查看">14</span>
<span class="layui-badge layui-bg-gray" title="点击">14</span>
<span class="layui-badge size">392.51 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8143" title="The Teahouse 1080p WEB-DL H.264 AAC-PTerWEB" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img.pterclub.com/images/2022/06/12/-70_0001.mp4_20220612_223450.290.jpg" alt="The Teahouse 1080p WEB-DL H.264 AAC-PTerWEB" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=8143" title="The Teahouse 1080p WEB-DL H.264 AAC-PTerWEB" target="_blank">The Teahouse 1080p WEB-DL H.264 AAC-PTerWEB</a></h3>
<p class="desc">话剧 茶馆 北京人艺建院70周年演出版</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">11</span>
<span class="layui-badge layui-bg-cyan" title="下载">1</span>
<span class="layui-badge layui-bg-blue" title="完成">22</span>
<span class="layui-badge layui-bg-black" title="查看">32</span>
<span class="layui-badge layui-bg-gray" title="点击">39</span>
<span class="layui-badge size">5.90 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=8053" title="GEM XXX Live 2013 Blu-ray 1080i AVC DTS-HD MA 5.1-TTG" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://www.picgd.com/images/2020/02/17/d87ce91deb2d987db73d00c121b7410c.jpg" alt="GEM XXX Live 2013 Blu-ray 1080i AVC DTS-HD MA 5.1-TTG" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=8053" title="GEM XXX Live 2013 Blu-ray 1080i AVC DTS-HD MA 5.1-TTG" target="_blank">GEM XXX Live 2013 Blu-ray 1080i AVC DTS-HD MA 5.1-TTG</a></h3>
<p class="desc">邓紫棋 2013 世界巡迴演唱會「耗資千萬 國際班底傾心打造」 港版原盘</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">11</span>
<span class="layui-badge layui-bg-blue" title="完成">25</span>
<span class="layui-badge layui-bg-black" title="查看">39</span>
<span class="layui-badge layui-bg-gray" title="点击">35</span>
<span class="layui-badge size">40.63 GB</span>
</p>
 </div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7770" title="On the Basis of Sex 2018 HDR 2160p WEB H.265-SLOT" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://img9.doubanio.com/view/photo/l_ratio_poster/public/p2528153937.jpg" alt="On the Basis of Sex 2018 HDR 2160p WEB H.265-SLOT" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=7770" title="On the Basis of Sex 2018 HDR 2160p WEB H.265-SLOT" target="_blank">On the Basis of Sex 2018 HDR 2160p WEB H.265-SLOT</a></h3>
<p class="desc">性别为本 / 司法女王(港) / 法律女王(台) / 基于性别 / 以性为本 | 类别：剧情 传记</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">2</span>
<span class="layui-badge layui-bg-blue" title="完成">1</span>
<span class="layui-badge layui-bg-black" title="查看">39</span>
<span class="layui-badge layui-bg-gray" title="点击">16</span>
<span class="layui-badge size">20.75 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7584" title="The End of the Big Cats  AKA  El Fin De Los Grandes Felinos 2012 S01 1080i ESP Blu-ray AVC DD 2.0 -liber8" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://i.imgur.com/N4Y8ik3.png" alt="The End of the Big Cats  AKA  El Fin De Los Grandes Felinos 2012 S01 1080i ESP Blu-ray AVC DD 2.0 -liber8" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=7584" title="The End of the Big Cats  AKA  El Fin De Los Grandes Felinos 2012 S01 1080i ESP Blu-ray AVC DD 2.0 -liber8" target="_blank">The End of the Big Cats AKA El Fin De Los Grandes Felinos 2012 S01 1080i ESP Blu-ray AVC DD 2.0 -liber8</a></h3>
<p class="desc">*活動置頂133*大猫的终结 第1季 4集全*如何拯救终将灭绝的大猫 【西班牙版原盘】</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">3</span>
<span class="layui-badge layui-bg-blue" title="完成">3</span>
<span class="layui-badge layui-bg-black" title="查看">25</span>
<span class="layui-badge layui-bg-gray" title="点击">46</span>
<span class="layui-badge size">41.44 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7356" title="Hunter Hunter 2020 2160p GER UHD Blu-ray HEVC DTS-HD MA 5.1-003@TTG" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://images.static-bluray.com/movies/covers/315587_front.jpg" alt="Hunter Hunter 2020 2160p GER UHD Blu-ray HEVC DTS-HD MA 5.1-003@TTG" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=7356" title="Hunter Hunter 2020 2160p GER UHD Blu-ray HEVC DTS-HD MA 5.1-003@TTG" target="_blank">Hunter Hunter 2020 2160p GER UHD Blu-ray HEVC DTS-HD MA <span class="__cf_email__" data-cfemail="a69388978b969695e6f2f2e1">[email&#160;protected]</span></a></h3>
<p class="desc">人狼恶 / 狩猎追杀 【4K UHD德版原盘】「DIY 简繁中字」</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">2</span>
<span class="layui-badge layui-bg-black" title="查看">4</span>
<span class="layui-badge layui-bg-gray" title="点击">21</span>
<span class="layui-badge size">51.66 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7336" title="有声书 - 穿越古代小说合集5 - HDSAB" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://www.biqusa.com/files/article/image/135/135725/135725s.jpg" alt="有声书 - 穿越古代小说合集5 - HDSAB" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=7336" title="有声书 - 穿越古代小说合集5 - HDSAB" target="_blank">有声书 - 穿越古代小说合集5 - HDSAB</a></h3>
<p class="desc">穿越古代小说合集5 五行世家/锦衣夜行/牧唐/雅骚/回到古代当富商/龙游大唐之贞元记事/回到原始部落当村长 转载请勿修改后缀 天空有声书小组出品</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">3</span>
<span class="layui-badge layui-bg-blue" title="完成">4</span>
<span class="layui-badge layui-bg-black" title="查看">9</span>
<span class="layui-badge layui-bg-gray" title="点击">15</span>
<span class="layui-badge size">25.63 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7335" title="有声书 - 穿越古代小说合集4 - HDSAB" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://www.xbiquge.la/files/article/image/64/64561/64561s.jpg" alt="有声书 - 穿越古代小说合集4 - HDSAB" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=7335" title="有声书 - 穿越古代小说合集4 - HDSAB" target="_blank">有声书 - 穿越古代小说合集4 - HDSAB</a></h3>
<p class="desc">穿越古代小说合集4 我在大宋整挺好/大唐第一世家/定居唐朝/明末传奇/恶明/锦衣夜行/红烧大唐 转载请勿修改后缀 天空有声书小组出品</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">3</span>
<span class="layui-badge layui-bg-blue" title="完成">5</span>
<span class="layui-badge layui-bg-black" title="查看">5</span>
<span class="layui-badge layui-bg-gray" title="点击">13</span>
<span class="layui-badge size">25.98 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=7334" title="有声书 - 医术小说合集5 - HDSAB" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://zqimages.cdn.bcebos.com/BookFiles/BookImages/toushixiaocunyi.jpg" alt="有声书 - 医术小说合集5 - HDSAB" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=7334" title="有声书 - 医术小说合集5 - HDSAB" target="_blank">有声书 - 医术小说合集5 - HDSAB</a></h3>
<p class="desc">医术小说合集5 透视小毒医/一品御医/小农民的妖孽人生/一品神医/透视小村医/都市超凡医神/天才医生 转载请勿修改后缀 天空有声书小组出品</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">1</span>
<span class="layui-badge layui-bg-blue" title="完成">2</span>
<span class="layui-badge layui-bg-black" title="查看">3</span>
<span class="layui-badge layui-bg-gray" title="点击">10</span>
<span class="layui-badge size">40.27 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=6852" title="有声书 - 幻想言情小说合集1 - HDSAB" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://dss2.baidu.com/6ONYsjip0QIZ8tyhnq/it/u=2815238354,3641897126&fm=179&app=35&f=JPEG?w=267&h=356&s=2E70639449D147ED0E15A1470300D0E2" alt="有声书 - 幻想言情小说合集1 - HDSAB" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=6852" title="有声书 - 幻想言情小说合集1 - HDSAB" target="_blank">有声书 - 幻想言情小说合集1 - HDSAB</a></h3>
<p class="desc">幻想言情小说合集1 庶女问仙 绝色十三娘/兽宠天下，全能召唤师/反派BOSS今天又真香了/徒弟个个想造反/灵异片演员app/奸妃有毒/龙王妻 转载请勿修改后缀 天空有声书小组出品</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">3</span>
<span class="layui-badge layui-bg-blue" title="完成">1</span>
<span class="layui-badge layui-bg-black" title="查看">8</span>
<span class="layui-badge layui-bg-gray" title="点击">30</span>
<span class="layui-badge size">26.53 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=6645" title="Genshin Concert Melodies of an Endless Journey 2021 WEB-DL 2160p AVC AAC-QHstudlo" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://imgbox.com/l8Di8Qtv.png" alt="Genshin Concert Melodies of an Endless Journey 2021 WEB-DL 2160p AVC AAC-QHstudlo" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=6645" title="Genshin Concert Melodies of an Endless Journey 2021 WEB-DL 2160p AVC AAC-QHstudlo" target="_blank">Genshin Concert Melodies of an Endless Journey 2021 WEB-DL 2160p AVC AAC-QHstudlo</a></h3>
<p class="desc">[2021][WEB-DL][2160p][Concert][原神]</p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">2</span>
<span class="layui-badge layui-bg-blue" title="完成">2</span>
<span class="layui-badge layui-bg-black" title="查看">20</span>
<span class="layui-badge layui-bg-gray" title="点击">16</span>
<span class="layui-badge size">8.32 GB</span>
</p>
</div>
</li>
<li class="layui-col-md2">
<div class="brick-item">
<div class="thumb">
<a href="details.php?id=6625" title="Glazed Shinto shrine Wallpaper Pack Collections 2013" target="_blank">
<img lay-src="https://images.weserv.nl/?url=https://www.pttime.org/attachments/202203/2022032617204336657a0dd953369c9d79d6ec0fd482b3.jpg" alt="Glazed Shinto shrine Wallpaper Pack Collections 2013" onerror="this.src='/assets/img/trans.gif'">
</a>
</div>
<h3 class="title"><a href="details.php?id=6625" title="Glazed Shinto shrine Wallpaper Pack Collections 2013" target="_blank">Glazed Shinto shrine Wallpaper Pack Collections 2013</a></h3>
<p class="desc"></p>
<p class="info">
<span class="layui-badge layui-bg-green" title="上传">2</span>
<span class="layui-badge layui-bg-blue" title="完成">2</span>
<span class="layui-badge layui-bg-black" title="查看">13</span>
<span class="layui-badge layui-bg-gray" title="点击">10</span>
<span class="layui-badge size">391.64 MB</span>
</p>
</div>
</li>
</ul>
</div>
</div>










</div>

<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
  layui.use(['element','flow','carousel','layer','util'],function() {
    let element = layui.element
    ,flow = layui.flow
    ,carousel = layui.carousel
    ,layer = layui.layer
    ,util = layui.util;
    navThis('nav_home');
    //图片懒加载
    flow.lazyimg();
    //轮播
    carousel.render({
      elem: '#carousel'
      ,width: '1140px'
      ,height: '430px'
      ,interval: 8000
    });
    //热门
    carousel.render({
      elem: '#hot'
      ,width: '1140px'
      ,height: '300px'
      ,indicator: 'none'  // 指示器隐藏
      ,autoplay: false  // 不切换
      //,interval: 9000   // 切换间隔
      ,arrow: 'always'  // 箭头显示
    });

    element.on('nav(header-nav)', function(elem){
      console.log(elem); //得到当前点击的DOM对象
    });

    util.fixbar({
      bar1: '&#xe609;'
      ,bar2: '&#xe66f;'
      ,click: function(type){
        if(type === 'bar1'){
          location.href = '/Torrents.upload';
        } else if(type === 'bar2') {
          location.href = '/userdetails.php?id=' + 10233;
        }
      }
    });
  });
</script>


<div class="site-footer">
<div class="layui-main">
<div class="footer-service">
<ul class="layui-row">
<li class="layui-col-md2">
<a href="javascript:;" onclick="layer.msg('完善中...')"><i class="layui-icon layui-icon-windows"></i>Windows系统</a>
</li>
<li class="layui-col-md2">
<a href="javascript:;" onclick="layer.msg('完善中...')"><i class="layui-icon layui-icon-android"></i>安卓系统</a>
</li>
<li class="layui-col-md2">
<a href="javascript:;" onclick="layer.msg('完善中...')"><i class="layui-icon layui-icon-ios"></i>苹果系统</a>
</li>
<li class="layui-col-md2">
<a href="javascript:;" onclick="layer.msg('完善中...')"><i class="layui-icon layui-icon-login-qq"></i>QQ号码</a>
</li>
<li class="layui-col-md2">
<a href="javascript:;" onclick="layer.msg('完善中...')"><i class="layui-icon layui-icon-email"></i>站点邮箱</a>
</li>
<li class="layui-col-md2">
<a href="/getrss.php"><i class="layui-icon layui-icon-rss"></i>RSS链接</a>
</li>
</ul>
</div>
<div class="footer-links layui-clear">
<dl class="col-links">
<dt>帮助中心</dt>
<dd><a href="/rules.php" target="_blank">规则</a></dd>
<dd><a href="/faq.php" target="_blank">常见问题</a></dd>
<dd><a href="/staff.php" target="_blank">管理组</a></dd>
</dl>
<dl class="col-links">
<dt>服务支持</dt>
<dd><a href="/forums.php?action=viewforum&forumid=2" target="_blank">Bug反馈</a></dd>
<dd><a href="/forums.php?action=viewforum&forumid=3" target="_blank">新手交流区</a></dd>
</dl>
<dl class="col-links">
<dt>邀请区</dt>
<dd><a href="/forums.php?action=viewforum&forumid=6" target="_blank">官方邀请区</a></dd>
<dd><a href="/forums.php?action=viewforum&forumid=5" target="_blank">私人邀请区</a></dd>
</dl>
<dl class="col-links">
<dt>功能导航</dt>
<dd><a href="/mybonus.php" target="_blank">魔力商店</a></dd>
<dd><a href="/invite.php?id=10233" target="_blank">邀请系统</a></dd>
</dl>
<dl class="col-links">
<dt>关于我们</dt>
<dd><a href="javascript:;" onclick="layer.msg('完善中...')">了解我们</a></dd>
<dd><a href="javascript:;" onclick="layer.msg('完善中...')">加入我们</a></dd>
<dd><a href="javascript:;" onclick="layer.msg('完善中...')">站点数据</a></dd>
</dl>
<div class="col-contact">
<p class="phone" title="官方QQ群号码">QQ群：521426140<br />（口令：hdai666）</p>
<button type="button" class="layui-btn layui-btn-primary"><i class="layui-icon layui-icon-service"></i>在线聊天室</button>
</div>
</div>
</div>
</div>

<div class="site-info">
<div class="layui-main layui-clear">
<div class="info-text">
</div>
<div class="info-links">Copyright © HDAI 2020 Powered by <a href="/aboutnexus.php">NexusPHP</a> 93fe1804b7</div>
</div>
</div>
<div class="layui-fluid">
</div>
</body>
</html>