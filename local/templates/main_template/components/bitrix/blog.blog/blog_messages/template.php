<?php

use Bitrix\Main\Localization\Loc;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
{
	die();
}
?>

<?php if ($arResult['POST']):?>
	<?php if ($arResult['PostPerm'] >= BLOG_PERMS_WRITE):?>
		<div class="site-blog-add-button-container">
			<a href="<?=$arParams['PATH_TO_POST_ADD']?>" class="wpcmsdev-button color-green">
				<span><?=Loc::getMessage('SITE_BLOG_LIST_ADD_POST')?></span>
			</a>
		</div>
	<?php endif?>
	<div class="grid bloggrid">
		<?php foreach ($arResult['POST'] as $post):?>
			<article>
				<header class="entry-header">
					<h1 class="entry-title"><a href="<?=$post['urlToPost']?>" rel="bookmark"><?=$post['TITLE']?></a></h1>
					<?php if ($arResult['PostPerm'] >= BLOG_PERMS_WRITE):?>
						<div class="site-blog-post-button-container">
							<a href="<?=$post['urlToEdit']?>" class="site-blog-post-edit-button">
								<span><?=Loc::getMessage('SITE_BLOG_LIST_EDIT_POST')?></span>
							</a>
							<a href="javascript:if(confirm('<?=Loc::getMessage('SITE_BLOG_LIST_DELETE_CONFIRM')?>')) window.location='<?=$post['urlToDelete'] . '&' . bitrix_sessid_get()?>'" class="site-blog-post-delete-button">
								<span><?=Loc::getMessage('SITE_BLOG_LIST_DELETE_POST')?></span>
							</a>
						</div>
					<?php endif?>				
					<div class="entry-meta">
						<span class="posted-on"><time class="entry-date published"><?=$post['DATE_PUBLISH_FORMATED']?></time></span>						
						<span class="comments-link"><a href="<?=$post['urlToPost']?>"><?=Loc::getMessage('SITE_BLOG_LIST_LEAVE_A_COMMENT')?></a></span>
					</div>
					<div class="entry-thumbnail">
						<?php if (isset($post['PREVIEW_PICTURE'])):?>					
							<img src="<?=$post['PREVIEW_PICTURE']?>" alt="picture">
						<?php elseif ($arParams['USE_IMAGE_PLACEHOLDER'] === 'Y'):?>
							<img src="https://via.placeholder.com/256" alt="placeholder">
						<?php endif?>
					</div>
				</header>
				<div class="entry-summary">
					<p>
						<?php
							$previewText = mb_substr($post['DETAIL_TEXT'], 0, 290);
						?>
						<?=$previewText?> <a class="more-link" href="<?=$post['urlToPost']?>"><?=Loc::getMessage('SITE_BLOG_LIST_READ_MORE')?></a>
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
							<?=Loc::getMessage('SITE_BLOG_LIST_POSTED_IN')?> <?=$tagsString?>
						</span>
					<?php endif?>
				</footer>
			</article>
		<?php endforeach?>
	</div>
<?php endif?>

<div>
	<?=$arResult['NAV_STRING']?>
</div>