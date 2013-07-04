<ul class="primary-nav">
	<li id="logo">
		<div><svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							 width="30px" height="30px" viewBox="0 0 30 30" style="enable-background:new 0 0 30 30;" xml:space="preserve">
			<style type="text/css">
				<![CDATA[
					.st0{fill:#ebe7e4;}
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
	</li>
	<li id="dashboard-link"><?php echo anchor('admin', lang('global:dashboard'), 'class="top-link no-submenu '.( ! $this->module ? 'current ' : '').'"') ?></li>

		<?php 
		// Display the menu items.
		// We have already vetted them for permissions
		// in the Admin_Controller, so we can just
		// display them now.
		foreach ($menu_items as $key => $menu_item)
		{
			if (is_array($menu_item))
			{
					$current = (($this->module_details && $this->module_details['menu'] == $menu_item) or $menu_item == $this->module);
					$class = $current ? "top-link current" : "top-link";
				echo '<li><a href="'.current_url().'#" class="top-link '.$class.'">'.lang_label($key).'</a><ul>';

				foreach ($menu_item as $lang_key => $uri)
				{
					$current = 'admin/'.$this->module == $uri;
					$class = $current ? "current" : "";
					echo '<li><a href="'.site_url($uri).'" class="'.$class.'">'.lang_label($lang_key).'</a></li>';

				}
				echo '</ul></li>';
			}
			elseif (is_array($menu_item) and count($menu_item) == 1)
			{
				foreach ($menu_item as $lang_key => $uri)
				{
					echo '<li><a href="'.site_url($menu_item).'" class="top-link no-submenu">'.lang_label($lang_key).'</a></li>';
				}
			}
			elseif (is_string($menu_item))
			{
				echo '<li><a href="'.site_url($menu_item).'" class="top-link no-submenu '.$class.'">'.lang_label($key).'</a></li>';
			}
		}
		?>

</ul>