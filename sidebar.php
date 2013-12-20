        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" id="sidebar" role="navigation">
          <div class="well sidebar-nav">

					<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

						<?php dynamic_sidebar( 'sidebar1' ); ?>

					<?php else : ?>

						<!-- This content shows up if there are no widgets defined in the backend. -->

						<div class="alert alert-help">
							<p><?php _e( 'Please activate some Widgets.', 'bonestheme' );  ?></p>
						</div>

					<?php endif; ?>

          </div><!--/.well -->

        </div><!--/span-->
