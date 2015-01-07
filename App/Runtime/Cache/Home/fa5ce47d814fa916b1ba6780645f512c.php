<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W4C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/strict.dtd>
<html xmlns="http://www.w5.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo ($keyword); ?>单词提示</title>
<script type="text/javascript" src="/Public/js/TpJquery/jquery.js"></script>
<script type="text/javascript" src="/Public/js/TpJquery/jquery.form.js"></script>

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

     <div style="text-align:center">
     <img src="../Public/images/logo.gif" width="60" height="40" />
     <form method="get" action="/index.php/Index/seek">
     <input type="text" name="keyword" id="keyword" value="<?php echo ($kw); ?>" onkeyup="checkName()"/>
     <input type="submit" value="查找">
     </form>
     </div>

<?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i; echo ($data["word"]); endforeach; endif; else: echo "" ;endif; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<div id="result" style="color:red"></div>
<div id="list" style="color:green"></div>

<div style="text-align:center">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
Powered By <a href="http://github.com/xialeizhou" target="_new"><font size="-1">xialeizhou</a>

</div>
</body>
</html>