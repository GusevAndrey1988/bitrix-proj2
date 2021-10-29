<?php

use Bitrix\Main\Localization\Loc;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
{
	die();
}
?>

<?php if ($arResult['POST']):?>
	<div class="grid bloggrid">
		<?php foreach ($arResult['POST'] as $post):?>
			<article>
				<header class="entry-header">
					<h1 class="entry-title"><a href="<?=$post['urlToPost']?>" rel="bookmark"><?=$post['TITLE']?></a></h1>
					<div class="entry-meta">
						<span class="posted-on"><time class="entry-date published"><?=$post['DATE_PUBLISH_FORMATED']?></time></span>						
						<span class="comments-link"><a href="<?=$post['urlToPost']?>"><?=Loc::getMessage('SITE_BOLOG_LIST_LEAVE_A_COMMENT')?></a></span>
					</div>
					<div class="entry-thumbnail">
						<?php if (isset($post['PREVIEW_PICTURE'])):?>					
							<img src="<?=$post['PREVIEW_PICTURE']?>" alt="picture">
						<?php endif?>
					</div>
				</header>
				<div class="entry-summary">
					<p>
						<?php
							$previewText = mb_substr($post['DETAIL_TEXT'], 0, 290);
						?>
						<?=$previewText?> <a class="more-link" href="<?=$post['urlToPost']?>"><?=Loc::getMessage('SITE_BOLOG_LIST_READ_MORE')?></a>
					</p>
				</div>
				<footer class="entry-footer">
					<?php if ($post['TAGS']):?>
						<span class="cat-links">
							<?php
								$tags = [];
								foreach ($post['TAGS'] as $tag)
								{
									$tags[] = '<a href="' . $arResult['TAGS'][$tag['ID']]['urlToCategory'] . '" rel="category tag">' 
										. $arResult['TAGS'][$tag['ID']]['NAME'] . '</a>';
								}
								$tagsString = implode(', ', $tags);
							?>
							<?=Loc::getMessage('SITE_BOLOG_LIST_POSTED_IN')?> <?=$tagsString?>
						</span>
					<?php endif?>
				</footer>
			</article>
		<?php endforeach?>
	</div>
<?php endif?>