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
			$pageAsset->addString("<link rel='stylesheet' href='" . SITE_TEMPLATE_PATH . "/style.css' type='text/css' media='all'/>");
			$pageAsset->addString("<link rel='stylesheet' href='" . SITE_TEMPLATE_PATH . "/css/easy-responsive-shortcodes.css' type='text/css' media='all'/>");

			$pageAsset->addJs(SITE_TEMPLATE_PATH . '/js/jquery.js');
			$pageAsset->addJs(SITE_TEMPLATE_PATH . '/js/masonry.pkgd.min.js');
		?>

		<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Oswald:400,500,700%7CRoboto:400,500,700%7CHerr+Von+Muellerhoff:400,500,700%7CQuattrocento+Sans:400,500,700' type='text/css' media='all'/>
	</head>
	
	<body class="home page page-template page-template-template-portfolio page-template-template-portfolio-php">
		<div id="panel">
			<?php $APPLICATION->ShowPanel()?>
		</div>
		<div id="page">
			<div class="container">
				<header id="masthead" class="site-header">
					<div class="site-branding">
						<h1 class="site-title"><a href="index.html" rel="home">Moschino</a></h1>
						<h2 class="site-description">Minimalist Portfolio HTML Template</h2>
					</div>
					<nav id="site-navigation" class="main-navigation">
						<button class="menu-toggle">Menu</button>
						<a class="skip-link screen-reader-text" href="#content">Skip to content</a>
						<div class="menu-menu-1-container">
							<ul id="menu-menu-1" class="menu">
								<li><a href="index.html">Home</a></li>
								<li><a href="about.html">About</a></li>
								<li><a href="shop.html">Shop</a></li>
								<li><a href="blog.html">Blog</a></li>
								<li><a href="elements.html">Elements</a></li>
								<li><a href="#">Pages</a>
									<ul class="sub-menu">
										<li><a href="portfolio-item.html">Portfolio Item</a></li>
										<li><a href="blog-single.html">Blog Article</a></li>
										<li><a href="shop-single.html">Shop Item</a></li>
										<li><a href="portfolio-category.html">Portfolio Category</a></li>
									</ul>
								</li>
								<li><a href="contact.html">Contact</a></li>
							</ul>
						</div>
					</nav>
				</header>
				<!-- #masthead -->
				<div id="content" class="site-content">