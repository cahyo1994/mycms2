<html>
<head>
	<title>Ini template DEFAULT dalam CMS</title>
	<link type='text/css' rel='stylesheet' href='<?php echo $this->getCurrentTemplatePath();?>css/style.css' />
</head>
<body>
	<div class="wrapper">
		<div class="header">MyCMS</div>
		<div class='clear'></div>
		<div class="sidebar">Di sini letak teks bagian sisi halaman web<br><br></div>
		<div class='content'><?php echo $this->appOutput();?></div>
		<div class='clear'></div>
		<div class="footer"> Teks bagian FOOTER</div>
	</div>
</body>
</html>