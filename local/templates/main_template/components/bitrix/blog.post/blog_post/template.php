<?php

use Bitrix\Main\Localization\Loc;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}
?>
<?php if ($arResult['Post']):?>
	<article>
		<header class="entry-header">
			<h1 class="entry-title"><?=$arResult['Post']['TITLE']?></h1>
			<div class="entry-meta">
					<span class="posted-on"><time class="entry-date published"><?=$arResult['Post']['DATE_PUBLISH_FORMATED']?></time></span>						
					<!-- <span class="comments-link"><a href="#">Leave a comment</a></span> -->
				</div>
			<div class="entry-thumbnail">		
				<?php if ($arResult['images']):?>
					<img src="<?=$arResult['images'][array_key_first($arResult['images'])]['full']?>" alt="picture">
				<?php else:?>
					<img src="https://via.placeholder.com/256" alt="">
				<?php endif?>			
			</div>
		</header>
		<!-- .entry-header -->
		<div class="entry-content">
			<?=$arResult['Post']['textFormated']?>
		</div>
		<!-- .entry-content -->
		<footer class="entry-footer">
			<?php if ($arResult['Category']):?>
				<span class="cat-links">
					<?=Loc::getMessage('SITE_BLOG_POST_POSTED_IN')?>
					<?php foreach ($arResult['Category'] as $category):?>
						<a href="<?=$category['urlToCategory']?>" rel="category tag"><?=$category['NAME']?></a>, 
					<?php endforeach?>
				</span>
			<?php endif?>
		</footer>
		<!-- .entry-footer -->
	</article>
	<!-- #post-## -->
	<nav class="navigation post-navigation" role="navigation">
		<h1 class="screen-reader-text"><?=Loc::getMessage('SITE_BLOG_POST_NAVIGATION')?></h1>
		<div class="nav-links">
			<div class="nav-previous">
				<a href="<?=$arResult['urlToBlog']?>" rel="prev"><span class="meta-nav">←</span> <?=Loc::getMessage('SITE_BLOG_POST_THANKS_FOR_WATCHING')?></a>
			</div>
		</div>
		<!-- .nav-links -->
	</nav>
<?php endif?>