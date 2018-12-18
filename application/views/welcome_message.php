<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>PWT 2019</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Welcome to PWT 2019</h1>

	<div id="body">
		<center><?php echo anchor('semnas','SEMNAS PWT 2019'); ?></center>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet id ligula pellentesque condimentum. Cras suscipit ante eget nulla convallis varius. Ut lacus massa, ullamcorper nec purus quis, aliquam suscipit sapien. Vivamus fermentum eget augue non eleifend. Cras semper nunc quis sapien venenatis rutrum. Cras egestas semper molestie. Fusce et facilisis mi, eget volutpat sapien. Maecenas suscipit nisl vitae odio molestie luctus. Sed ut justo id ligula semper sodales sed vel libero.</p>

		<center><?php echo anchor('prc','PRC PWT 2019'); ?></center>
		<p>Pellentesque sollicitudin interdum diam, a dapibus risus varius ac. Morbi vitae lectus posuere, porttitor ex vitae, condimentum arcu. Maecenas lacinia massa non ornare imperdiet. Integer consectetur erat quis justo suscipit laoreet. Vestibulum leo felis, eleifend eget tincidunt id, consequat ac quam. Curabitur pulvinar, velit vitae accumsan bibendum, ante ex blandit erat, nec convallis lorem libero et ante. Etiam sit amet lacus vel magna porta porttitor. Quisque consequat massa sodales mauris dignissim fermentum. Suspendisse fermentum ultrices vehicula. Fusce elementum vitae risus sed eleifend. Nunc pretium porta dolor, eget consectetur arcu eleifend viverra. Quisque eros ex, elementum et vestibulum vel, pretium nec eros. Proin libero quam, faucibus in ex posuere, elementum posuere arcu. Cras in rutrum neque. Morbi convallis elementum nisi, sed aliquet massa iaculis nec.</p>

		<p>Nullam ullamcorper mollis dui. Praesent tempor ultrices nisi, eget ultrices urna lobortis vitae. Aliquam orci tortor, sagittis id nibh a, euismod tincidunt magna. Pellentesque tempus tempor nunc, ut feugiat felis fermentum vel. Vivamus pharetra eleifend odio, vel interdum nisi vulputate vel. Aliquam velit dui, rutrum nec justo quis, tempor laoreet urna. Nulla eget magna lacus. Aliquam erat volutpat. Fusce sagittis purus a leo dictum luctus.</p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>