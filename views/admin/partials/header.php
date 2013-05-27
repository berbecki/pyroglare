<div class="subbar">
	<div class="wrapper">
		<div class="subbar-inner clearfix">
			<h2><?php echo $module_details['name'] ? anchor('admin/'.$module_details['slug'], $module_details['name']) : lang('global:dashboard') ?></h2>
			<small>
				<?php echo $module_details['description'] ? $module_details['description'] : '' ?>
			</small>	
		</div>
	</div>
	<?php file_partial('shortcuts') ?>
</div>

<?php if ( ! empty($module_details['sections'])) file_partial('sections') ?>
