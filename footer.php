	<footer class="footer">
		<div class="container-fluid">
			<div class="row-fluid footer" id="footerwidgets">
				<div class="span5 footerone" id="footerone">
					<ul class="nobullets">
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer 1') ) : ?>
						<?php endif; ?>
					</ul>
				</div>
				<div class="span7 footertwo" id="footertwo">
					<ul class="nobullets">
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer 2') ) : ?>
						<?php endif; ?>
					</ul>
				</div>
			</div>
		</div>
	</footer>
</div> <!-- /container -->

    <?php wp_footer(); ?>

  </body>
</html>