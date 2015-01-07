<?php if (!defined('THINK_PATH')) exit();?><h1>Hello, edit!</h1>
<h1><?php echo ($user["email"]); ?></h1>
<h2><?php echo ($data['x']+$data['y']); ?></h3>
<?php if(is_array($w_list)): $i = 0; $__LIST__ = array_slice($w_list,5,31,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$l): $mod = ($i % 2 );++$i; echo ($l["id"]); ?>:<?php echo ($l["word"]); ?>:<?php echo ($l["sound"]); ?>}<br/><?php endforeach; endif; else: echo "" ;endif; ?>