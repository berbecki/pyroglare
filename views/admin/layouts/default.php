<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title><?php echo $template['title'].' - '.lang('cp:admin_title') ?></title>
	<base href="<?php echo base_url(); ?>" />
	<!-- Mobile viewport optimized -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<?php file_partial('metadata'); ?>
</head>
<body>
<noscript>
	<div id="no-js-info"><span>PyroCMS requires that JavaScript be turned on for many of the functions to work correctly. Please turn JavaScript on and reload the page.</span></div>
</noscript>
<div id="tools" class="clearfix">
	<div class="pull-right">
		<div class="topbar-form">
					<script type="text/javascript">
						jQuery(function($) {
							$(function() {
								var cache = {}, lastXhr;
								$(".search-query").autocomplete({
									minLength: 2,
									delay: 200,
									source: function( request, response ) {
										var term = request.term;
										if ( term in cache ) {
											response( cache[ term ] );
											return;
										}
		
										lastXhr = $.getJSON(SITE_URL + 'admin/search/ajax_autocomplete', request, function( data, status, xhr ) {
											cache[ term ] = data.results;
											if ( xhr === lastXhr ) {
												response( data.results );
											}
										});
									},
									
									open: function (event, ui) {
										$(this).data("autocomplete").menu.element.addClass("search-results animated-zing dropDown");
									},
									
									focus: function(event, ui) {
										// $("#searchform").val( ui.item.label);
										return false;
									},
									select: function(event, ui) {
										window.location.href = ui.item.url;
										return false;
									}
								})
								.data("autocomplete")._renderItem = function(ul, item){
									return $("<li></li>")
									.data("item.autocomplete", item)
									.append('<a href="' + item.url + '">' + '<span>' + item.title + '</span>' + '<div class="keywords">' + item.keywords + '</div><div class="singular">' + item.singular + '</div>' + '</a>')
									.appendTo(ul);
								};
							});
						});
					</script>
		
					<form class="topbar-search">
						<input type="text" class="search-query" id="nav-search" placeholder="<?php echo lang("cp:search"); ?>" ontouchstart="">
					</form>
		</div>
	</div>
	<div class="pull-left">
	<?php echo anchor('', $this->settings->site_name, 'target="_blank" class="btn"'); ?>
	<a href="admin/logout" class="btn"><i class="icon-off"></i></a>
	<?php if($module_details['slug']): ?>
	<?php echo anchor('admin/help/'.$module_details['slug'], lang('help_label'), array('title' => $module_details['name'].'&nbsp;'.lang('help_label'), 'class' => 'modal btn')); ?>
	<?php endif; ?>
	
	</div>
</div>
<div id="box-general">
	<div id="box-row">
		<div id="box-menu">
			<nav id="primary">
				<?php file_partial('navigation') ?>
			</nav>
		</div>
		<div id="box-content">
			<div id="container">
				<section id="content">
					<header class="hide-on-ckeditor-maximize clearfix">
					<?php file_partial('header'); ?>
					</header>
					<div id="content-body">
						<?php file_partial('notices'); ?>
						<?php echo $template['body']; ?>
					</div>
				</section>
			</div>
		</div>
	</div>
</div>

	<footer class="clearfix">
		<div class="wrapper">
			<p class="credits">Copyright &copy;<?php echo date('Y'); ?> PyroCMS &nbsp; <span>Version <?php echo CMS_VERSION.' '.CMS_EDITION; ?> &nbsp; Rendered in {elapsed_time} sec. using {memory_usage}.</span></p>
			<ul id="lang" class="clearfix">
				<?php foreach(config_item('supported_languages') as $key => $lang): ?>
				<li <?php echo CURRENT_LANGUAGE == $key ? ' class="selected" ' : 'class="unselected"'; ?> ><a href="<?php echo current_url(); ?>?lang=<?php echo $key; ?>"><?php echo $lang['name']; ?></a></li>
				<?php endforeach; ?>
			</ul>
		</div>
	</footer>
</body>
</html>