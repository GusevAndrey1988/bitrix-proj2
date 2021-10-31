<?php require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("");?><?$APPLICATION->IncludeComponent(
	"bitrix:blog.post.edit", 
	".default", 
	array(
		"ALLOW_POST_CODE" => "Y",
		"ALLOW_POST_MOVE" => "N",
		"BLOG_URL" => "SiteBlog",
		"BLOG_VAR" => "",
		"DATE_TIME_FORMAT" => "d.m.Y H:i:s",
		"EDITOR_CODE_DEFAULT" => "N",
		"EDITOR_DEFAULT_HEIGHT" => "300",
		"EDITOR_RESIZABLE" => "Y",
		"ID" => $id,
		"IMAGE_MAX_HEIGHT" => "600",
		"IMAGE_MAX_WIDTH" => "600",
		"PAGE_VAR" => "",
		"PATH_TO_BLOG" => "/blog",
		"PATH_TO_DRAFT" => "",
		"PATH_TO_POST" => "",
		"PATH_TO_POST_EDIT" => "/blog/post-edit.php?id=#post_id#",
		"PATH_TO_SMILE" => "",
		"PATH_TO_USER" => "",
		"POST_PROPERTY" => array(
		),
		"POST_VAR" => "",
		"SEO_USE" => "Y",
		"SET_TITLE" => "Y",
		"SMILES_COUNT" => "4",
		"USER_CONSENT" => "N",
		"USER_CONSENT_ID" => "0",
		"USER_CONSENT_IS_CHECKED" => "Y",
		"USER_CONSENT_IS_LOADED" => "N",
		"USER_VAR" => "",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?><?php require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");?>