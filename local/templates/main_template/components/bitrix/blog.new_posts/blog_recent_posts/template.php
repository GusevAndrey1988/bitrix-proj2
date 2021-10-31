<?php

use Bitrix\Main\Localization\Loc;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}
?>

<?php if ($arResult):?>
	<aside id="recent-posts-2" class="widget widget_recent_entries">
		<h4 class="widget-title"><?=Loc::getMessage('SITE_BLOG_RECENT_POSTS')?></h4>
		<ul>
			<?php foreach ($arResult as $post):?>
				<li>
					<a href="<?=$post['urlToPost']?>"><?=$post['TITLE']?></a>
				</li>
			<?php endforeach?>
		</ul>
	</aside>
<?php endif?>