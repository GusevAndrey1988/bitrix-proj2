<?php

use Bitrix\Main\Localization\Loc;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}
?>

<?php if ($arResult):?>
	<aside id="recent-comments-2" class="widget widget_recent_comments">
		<h4 class="widget-title"><?=Loc::getMessage('SITE_BLOG_RECENT_COMMENTS_TITLE')?></h4>
		<ul id="recentcomments">
			<?php foreach ($arResult['RECENT_COMMENTS'] as $recentComment):?>
				<?php
					$authorName = $recentComment['AuthorName'] ?? Loc::getMessage('SITE_BLOG_RECENT_COMMENTS_ANONYMOUS');
					$postTitle = $arResult['POSTS_INFO'][$recentComment['POST_ID']]['TITLE'];
				?>
				<li class="recentcomments"><span><?=$authorName?></span> <?=Loc::getMessage('SITE_BLOG_RECENT_COMMENTS_ON')?> <a href="<?=$recentComment['urlToComment']?>"><?=$postTitle?></a></li>
			<?php endforeach?>
		</ul>
	</aside>
<?php endif?>