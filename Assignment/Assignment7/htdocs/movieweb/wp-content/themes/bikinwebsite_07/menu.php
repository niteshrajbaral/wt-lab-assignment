<!--<navbar menu>-->
<div class="bw_menu">
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container padding_lr10">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bw_floating_navmenu">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				
				<!--<logo>-->
				<div class="bw_logo_mobile">
					<a href="<?php bloginfo( 'url' ); ?>"><img src="http://localhost/wordpress/wp4/wp-content/uploads/2020/12/moviesflix-moviesflixpro-1.png"></a>
				</div>
				<!--</logo>-->
			</div>
			
				<?php
					wp_nav_menu( array(
						'menu'              => 'primary',
						'theme_location'    => 'primary',
						'depth'             => 2,
						'container'         => 'div',
						'container_class'   => 'navbar-collapse collapse',
						'container_id'      => 'bw_floating_navmenu',
						'menu_class'        => 'nav navbar-nav bw_navbar_center',
						'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
						'walker'            => new wp_bootstrap_navwalker())
					);
				?>
		</div>
	</nav>
</div>

<center><div id="home-button">
<a href="https://t.me/ivyadu" target="blank"><button class="button button5">Join Telegram</button></a>
<a href="<?php bloginfo('url') ?>?s=bollywood"><button class="button button5">BollYWood</button></a>  
<a href="<?php bloginfo('url') ?>?s=netflix-series"><button class="button button5">NetFlix Series </button></a>
<a href="<?php bloginfo('url') ?>?s=web-series"><button class="button button5">Web Series</button></a>  
<a href="<?php bloginfo('url') ?>?s=dubbed"><button class="button button5">Dual Audio</button></a>
<a href="<?php bloginfo('url') ?>?s=1080p"><button class="button button5">1080p Movies</button></a>
<a href="<?php bloginfo('url') ?>?s=480p"><button class="button button5">480p Movies</button></a>
<a href="<?php bloginfo('url') ?>?s=720"><button class="button button5">720p Movies</button></a>
<a href="<?php bloginfo('url') ?>?s=movies"><button class="button button5">18+ Movies</button></a>
<a href="https://ivyadu.com/"><button class="button button5" style="background-color: red;">How To Download</button></a></div></center>

<center><br><form role="search" method="get" id="searchform" action="<?php bloginfo('url') ?>"> <input type="text" class="searchm" value="" name="s" id="p" placeholder="Search: Movie Name, Series Name...."></form></center>

<!--</navbar menu>-->