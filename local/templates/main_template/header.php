<?php
	/** @global \CMain $APPLICATION */

	if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	{
		die();
	}

	$pageAsset = \Bitrix\Main\Page\Asset::getInstance();
?>

<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">
	<head>
		<?php $APPLICATION->ShowHead()?>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php $APPLICATION->ShowTitle()?></title>
		<?php
			$pageAsset->addString("<link rel='stylesheet' href='" . SITE_TEMPLATE_PATH . "/css/woocommerce-layout.css' type='text/css' media='all'/>");
			$pageAsset->addString("<link rel='stylesheet' href='" . SITE_TEMPLATE_PATH . "/css/woocommerce-smallscreen.css' type='text/css' media='only screen and (max-width: 768px)'/>");
			$pageAsset->addString("<link rel='stylesheet' href='" . SITE_TEMPLATE_PATH . "/css/woocommerce.css' type='text/css' media='all'/>");
			$pageAsset->addString("<link rel='stylesheet' href='" . SITE_TEMPLATE_PATH . "/css/font-awesome.min.css' type='text/css' media='all'/>");
			$pageAsset->addString("<link rel='stylesheet' href='" . SITE_TEMPLATE_PATH . "/css/easy-responsive-shortcodes.css' type='text/css' media='all'/>");

			$pageAsset->addJs(SITE_TEMPLATE_PATH . '/js/jquery.js');
			$pageAsset->addJs(SITE_TEMPLATE_PATH . '/js/masonry.pkgd.min.js');
		?>

		<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Oswald:400,500,700%7CRoboto:400,500,700%7CHerr+Von+Muellerhoff:400,500,700%7CQuattrocento+Sans:400,500,700' type='text/css' media='all'/>
	</head>
	
	<body class="<?php $APPLICATION->ShowProperty('body_styles')?>">
		<div id="panel">
			<?php $APPLICATION->ShowPanel()?>
		</div>
		<div id="page">
			<div class="container">
				<header id="masthead" class="site-header">
					<div class="site-branding">
						<?php $APPLICATION->IncludeComponent(
							'bitrix:main.include',
							'',
							[
								'AREA_FILE_SHOW' => 'file',
								'AREA_FILE_SUFFIX' => 'inc',
								'EDIT_TEMPLATE' => '',
								'PATH' => SITE_TEMPLATE_PATH . '/include_areas/site_title_inc.php',
							]
						);?>
					</div>
					<?php $APPLICATION->IncludeComponent(
						'bitrix:menu',
						'main_menu',
						[
							'ALLOW_MULTI_SELECT' => 'N',
							'CHILD_MENU_TYPE' => 'left',
							'DELAY' => 'N',
							'MAX_LEVEL' => '2',
							'MENU_CACHE_GET_VARS' => [0=>'',],
							'MENU_CACHE_TIME' => '3600',
							'MENU_CACHE_TYPE' => 'A',
							'MENU_CACHE_USE_GROUPS' => 'Y',
							'ROOT_MENU_TYPE' => 'top',
							'USE_EXT' => 'N'
						]
					);?>
				</header>
				<!-- #masthead -->
				<div id="content" class="site-content">