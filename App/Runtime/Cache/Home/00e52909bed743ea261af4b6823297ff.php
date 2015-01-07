<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>在线小词典</title>

<script type="text/javascript" src="/Public/js/TpJquery/jquery.js"></script>
<script type="text/javascript" src="/Public/js/TpJquery/jquery.form.js"></script>
<style type="text/css"> 
#dict_name{
  text-align:center;
  height:25px; 
  line-height:25px; 
}
</style>
<script language="JavaScript">
function checkName(){
  $.post('/index.php/Index/checkword',{'keyword':$('#keyword').val()},function(data){
      $('#result').html(data.info).show();
      $('#list').html(data.data).show();
      },'json');
};
</script>
</head>


<body>

<div id="dict_name">英汉小词典</div>

<div style="text-align:center">
  <form method="get" action="/index.php/Index/seek">
    <input type="text" name="keyword" id="keyword" value="<?php echo ($kw); ?>" onkeyup="checkName()"/>
    <input type="submit" value="查找">
  </form>
</div>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<div id="result" style="color:red"></div>
<div id="list" style="color:green"></div>


<br /><br />
<div style="text-align:center">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
Powered By <a href="http://github.com/xialeizhou" target="_new"><font size="-1">xialeizhou</a>

</div>

</body>
</html>