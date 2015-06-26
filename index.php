<!DOCTYPE html><html>
<head>
<meta charset='UTF-8'>
<link rel="shortcut icon" href="http://malu.me/favicon.ico"> 
<title>小马匿名聊天 Docker版 by malu.me</title>
<script type="text/javascript">var MYIP='<?php echo  preg_replace('/((?:\d+\.){3})\d+/', "\\1*",$_SERVER["REMOTE_ADDR"]);?>'<?php if (isset($host)) echo ','.$host;?>;</script>
<link rel="stylesheet" type="text/css" href="http://im.malu.me/style.min.css">
</head><body>
<div id="login">
 <div class="login-container">
 <form role="form" id="lockscreen" class="lockcreen-form fade-in-effect">
   <div class="user-thumb">
     <a href="#" id="userimg">
       <img src="http://www.malu.me/im/img/user.png" class="img-responsive" />
     </a>
     <div id="userimg_list" style="display:none">
      <div id="band_close"><div id="xx_title">头像选择</div><div id="xx_x">x</div></div>
      <div id="band_img"><ul></ul></div>
     </div>
   </div>
   <div class="form-group">
     <h3>小马匿名聊天 Docker版!</h3>
     <p class="room">输入您的用户名
</p>
     <div class="input-group">
       <input type="text" class="form-control input-dark" name="username" placeholder="用户名" />
       <label id="username-error" class="error" for="username" style="display:none"></label>
       <span class="input-group-btn">
         <button type="submit" class="btn btn-primary">登录</button>
       </span>
     </div>
   </div>
 </form>
 <div id="stat" style="display:none">
  <div class="stat_label"><div>房间</div><div>在线人数</div></div>
  <ul class="stat_list"></ul>
 </div>
 </div><!-- login-container end-->
</div><!-- login end-->
     <div id="userimg_list2" style="display:none">
      <div id="band_close2"><div id="xx_title2">头像更换</div><div id="xx_x2">x</div></div>
      <div id="band_img2"><ul></ul></div>
     </div>
<div id="chat-thread">
  <ul><li class="admin wait">正在连接请等待...</li></ul>
</div>
<form class="chat-window">
	<input class="chat-window-message" name="chat" type="text" autocomplete="off"  />
  <div class="btn sendrec">录音</div>
  <div class="btn sendimg">图片
      <div class="file_actions" style="display: none;">
        <img src="http://www.malu.me/im/img/close.png" class="file_actions_close" alt="close">
        <div class="url_img">
          <input type="text" name="url" id="send_url" size="40" placeholder="http://malu.me/logo.jpg" value="">
          <div class="scope-badge">浏览<input id="sendImage" type="file" value="image" accept="image/*"></div>
          <a onclick="file_action( 'send' )">发送</a>
          <a onclick="file_action( 'hide' )">取消</a> 
        </div>
        <div class="face_img"><ul></ul></div>
      </div>
  </div>
  <button type="submit" class="btn sendmsg">发送</button>
</form>
<div id="chat" class="fixed">
  <div class="chat-inner">
    <h2 class="chat-header">
      <div href="#" id="chatuserimg"><img src="http://www.malu.me/im/img/user.png" class="img-responsive"></div>
      <p id="myname"></p>
    </h2>
    <div class="chat-group"><strong class="room">在线用户
</strong>
<div class="userlist"></div>
    </div>
    <div class="chat-footer">Power by<a href="http://malu.me/"> Malu</a>.</div>
  </div>
</div>
<script src="http://libs.useso.com/js/jquery/1.8.3/jquery.min.js"></script>
<script src='http://im.malu.me/im_v3.min.js'></script>
</body></html>