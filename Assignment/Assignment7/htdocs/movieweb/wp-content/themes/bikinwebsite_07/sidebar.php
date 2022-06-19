<!--<sidebar list homepage>-->
<?php if ( is_active_sidebar( 'widget-sidebar-all' ) ) : ?>
	<div class="col-md-4 col-sm-12 col-xs-12 bw_right">
		<div class="sidebar">
			<ul>
				<?php dynamic_sidebar( 'widget-sidebar-all' ); ?>
			</ul>
		</div>
	</div>
<?php endif; ?>
<!--</sidebar list homepage>-->