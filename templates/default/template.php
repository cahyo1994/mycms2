<html>
<head>
	<title>Ini template DEFAULT dalam CMS</title>
	<link type='text/css' rel='stylesheet' href='<?php echo $this->getCurrentTemplatePath();?>css/style.css' />
</head>
<body>
	<div class="wrapper">
		<div class="header"><?php $this->widgetOutput('logoPosition');?></div>
		<div class='clear'></div>
		<div class="sidebar"><?php $this->widgetOutput('sidebarPosition');?></div>
		<div class='content'><?php echo $this->appOutput();?></div>
		<div class='clear'></div>
		<div class="footer"> Teks bagian FOOTER</div>
	</div>
</body>
</html>