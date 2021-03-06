<?php require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");?>
<?php $APPLICATION->IncludeComponent(
	'bitrix:blog.post', 
	'blog_post',
	[
		'BLOG_URL' => 'SiteBlog',
		'BLOG_VAR' => '',
		'CACHE_TIME' => '86400',
		'CACHE_TYPE' => 'A',
		'DATE_TIME_FORMAT' => 'd.m.Y H:i:s',
		'ID' => $id,
		'IMAGE_MAX_HEIGHT' => '600',
		'IMAGE_MAX_WIDTH' => '600',
		'PAGE_VAR' => '',
		'PATH_TO_BLOG' => '/blog',
		'PATH_TO_BLOG_CATEGORY' => '/blog/tag.php?category=#category#',
		'PATH_TO_POST_EDIT' => '/blog/post-edit.php?id=#post_id#',
		'PATH_TO_SMILE' => '',
		'PATH_TO_USER' => '',
		'POST_PROPERTY' => '',
		'POST_VAR' => '',
		'RATING_TYPE' => '',
		'SEO_USE' => 'Y',
		'SEO_USER' => 'N',
		'SET_NAV_CHAIN' => 'Y',
		'SET_TITLE' => 'Y',
		'SHOW_RATING' => '',
		'USER_VAR' => '',
	],
	false
);?>
<br>
<?$APPLICATION->IncludeComponent(
	"bitrix:blog.post.comment", 
	"blog_comments", 
	array(
		"AJAX_PAGINATION" => "N",
		"ALLOW_IMAGE_UPLOAD" => "N",
		"ALLOW_VIDEO" => "N",
		"BLOG_URL" => "SiteBlog",
		"BLOG_VAR" => "",
		"CACHE_TIME" => "86400",
		"CACHE_TYPE" => "A",
		"COMMENTS_COUNT" => "5",
		"COMMENT_ID_VAR" => "",
		"DATE_TIME_FORMAT" => "d.m.Y H:i:s",
		"EDITOR_CODE_DEFAULT" => "N",
		"EDITOR_DEFAULT_HEIGHT" => "200",
		"EDITOR_RESIZABLE" => "Y",
		"ID" => $id,
		"IMAGE_MAX_HEIGHT" => "600",
		"IMAGE_MAX_WIDTH" => "600",
		"NO_URL_IN_COMMENTS" => "",
		"NO_URL_IN_COMMENTS_AUTHORITY" => "",
		"PAGE_VAR" => "",
		"PATH_TO_BLOG" => "/blog",
		"PATH_TO_SMILE" => "",
		"PATH_TO_USER" => "",
		"POST_VAR" => "",
		"RATING_TYPE" => "",
		"SEO_USER" => "N",
		"SHOW_RATING" => "",
		"SHOW_SPAM" => "N",
		"SIMPLE_COMMENT" => "N",
		"SMILES_COUNT" => "4",
		"USER_CONSENT" => "N",
		"USER_CONSENT_ID" => "0",
		"USER_CONSENT_IS_CHECKED" => "Y",
		"USER_CONSENT_IS_LOADED" => "N",
		"USER_VAR" => "",
		"USE_ASC_PAGING" => "N",
		"COMPONENT_TEMPLATE" => "blog_comments"
	),
	false
);?><?php require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");?>