<html>
<head>
  <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url()."asset/style.css";  ?>">
  <script type="text/javascript" src="<?php echo base_url()."asset/js/jquery-1.9.1.min.js"; ?>"></script>
  <script type="text/javascript" charset="utf-8" src="<?php echo base_url()."asset/js/jquery.leanModal.min.js"; ?>"></script>
  <!-- jQuery plugin leanModal under MIT License http://leanmodal.finelysliced.com.au/ -->
</head>


<a href="#loginmodal" class="flatbtn" id="modaltrigger">Edit Data</a>
<div id="loginmodal" style="display:none;">
    <h1>User Login</h1>
    <form id="loginform" name="loginform" method="post" action="index.html">
      <label for="username">Username:</label>
      <input type="text" name="username" id="username" class="txtfield" tabindex="1">
      
      <label for="password">Password:</label>
      <input type="password" name="password" id="password" class="txtfield" tabindex="2">
      
      <div class="center"><input type="submit" name="loginbtn" id="loginbtn" class="flatbtn-blu hidemodal" value="Log In" tabindex="3"></div>
    </form>
  </div>
<script type="text/javascript">
$(function(){
  $('#loginform').submit(function(e){
    return false;
  });
  
  $('#modaltrigger').leanModal({ top: 110, overlay: 0.45, closeButton: ".hidemodal" });
});
</script>

</html>