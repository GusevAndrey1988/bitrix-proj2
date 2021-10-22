<?php
	if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	{
		die();
	}
?>
				</div>
				<!-- #content -->
			</div>
			<!-- .container -->
			<footer id="colophon" class="site-footer">
				<div class="container">
					<div class="site-info">
						<?php $APPLICATION->IncludeComponent(
							'bitrix:main.include',
							'',
							[
								'AREA_FILE_SHOW' => 'file',
								'AREA_FILE_SUFFIX' => 'inc',
								'EDIT_TEMPLATE' => '',
								'PATH' => SITE_TEMPLATE_PATH . '/include_areas/footer_site_info_inc.php',
							]
						);?>
					</div>
				</div>	
			</footer>
			<a href="#top" class="smoothup" title="Back to top"><span class="genericon genericon-collapse"></span></a>
		</div>
		<!-- #page -->
		<script src='<?=SITE_TEMPLATE_PATH?>/js/plugins.js'></script>
		<script src='<?=SITE_TEMPLATE_PATH?>/js/scripts.js'></script>
	</body>
</html>