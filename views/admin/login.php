<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta name=viewport content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
	<title><?php echo $this->settings->site_name; ?> - <?php echo lang('login_title');?></title>
	<base href="<?php echo base_url(); ?>"/>
	<meta name="robots" content="noindex, nofollow"/>
	<?php Asset::css('workless/normalize.css'); ?>
	<?php Asset::css('workless/main.css'); ?>
	<?php Asset::css('animate/animate.css'); ?>
	<?php Asset::js('jquery/jquery.js'); ?>
	<?php Asset::js('admin/login.js'); ?>
	<?php echo Asset::render() ?>
</head>
<body id="login-body">
<section class="login-screen">
	<div id="login-logo">
		<svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							 width="30px" height="30px" viewBox="0 0 30 30" style="enable-background:new 0 0 30 30;" xml:space="preserve">
			<style type="text/css">
				<![CDATA[
					.st0{fill:#d74733;}
				]]>
			</style>
			<path class="st0" d="M15.189,0.734c0,0-9.126,14.734-9.126,19.774c0,5.041,4.086,9.126,9.126,9.126s9.126-4.085,9.126-9.126
							C24.315,15.468,15.189,0.734,15.189,0.734z M19.451,24.987c-0.861,1.376-2.013,1.979-4.357,1.979s-3.518-0.57-4.474-1.807
							c-0.957-1.236,0.386-3.073,0.576-4.024c0.19-0.95-0.476-1.014-0.57-2.535c-0.095-1.521,1.362-2.855,1.362-2.855
							c-0.38,0.858-0.507,1.132-0.507,2.538c0,1.236,1.997,2.124,1.901,3.074s-1.422,1.732-1.236,2.566c0.09,0.401,0.73,0.601,1.067,0.145
							c0.39-0.527,0.358-1.511,0.739-2.462c0.38-0.95,1.48-1.939,1.48-2.816c0-1.299-0.994-1.521-1.66-1.996
							c-0.665-0.476-1.025-1.426-0.55-2.983c0.404-1.323,1.87-3.577,1.87-3.577s-0.646,1.938-0.475,3.07
							c0.158,1.046,1.426,1.025,2.377,1.881c0.95,0.855,0.919,2.115,0.379,3.13c-0.418,0.788-1.964,1.647-2.154,2.692
							c-0.19,1.047,1.131,1.82,1.773,2.152c0.644,0.335,0.666,1.496,1.111,0.859c0.366-0.529-0.821-2.223-0.794-3.395
							c0.032-1.331,1.587-1.527,1.87-2.441c0.285-0.917-0.475-3.376-0.475-3.376s1.27,1.903,1.616,2.778
							c0.538,1.363-0.033,2.215-0.73,3.135C19.109,21.357,20.354,23.543,19.451,24.987z"/>
		</svg></div>
	<?php $this->load->view('admin/partials/notices') ?>
	<?php echo form_open('admin/login'); ?>
	<div class="form_inputs">
		<ul class="animated fadeIn">
			<li>
				<div class="input" id="login-un">
					<input type="text" name="email" placeholder="<?php echo lang('global:email'); ?>"/>
				</div>
			</li>
			<li>
				<div class="input" id="login-pw">
					<input type="password" name="password" placeholder="<?php echo lang('global:password'); ?>"/>
				</div>
			</li>
		</ul>
		<div id="login-action" class="animated fadeIn clearfix">
			<div id="login-save" class="pull-left">
				<label for="remember-check" id="login-remember">
				<input type="checkbox" name="remember" id="remember-check"/>
				<?php echo lang('user:remember'); ?>
				</label>
			</div>
			<div class="pull-right">
				<button id="login-submit" class="btn" ontouchstart="" type="submit" name="submit" value="<?php echo lang('login_label'); ?>">
					<span><?php echo lang('login_label'); ?></span>
				</button>
			</div>
		</div>
	<?php echo form_close(); ?>
	</div>
</section>
<footer class="login-footer animated fadeIn">
		Copyright &copy; 2009 &ndash; <?php echo date('Y'); ?> PyroCMS LLC <br/>
		<span id="version"><?php echo CMS_VERSION.' '.CMS_EDITION; ?></span>
</footer>
</body>
</html>