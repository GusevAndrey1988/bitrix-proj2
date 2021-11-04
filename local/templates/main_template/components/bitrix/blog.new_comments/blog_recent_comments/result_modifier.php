<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

if ($arResult)
{
    $recentCommentsList = $arResult;
    $arResult = [];
    $arResult['RECENT_COMMENTS'] = $recentCommentsList;

    $postsIds = [];
    foreach ($arResult['RECENT_COMMENTS'] as $recentComment)
    {
        $postsIds[$recentComment['POST_ID']] = true;
    }

    $postsIds = array_keys($postsIds);

    $postsResult = \CBlogPost::getList(
        ['ID' => 'DESC'],
        [
            'ID' => $postsIds,
        ],
        false,
        false,
        [
            'ID',
            'TITLE',
        ]
    );

    $postsInfo = [];
    while ($post = $postsResult->GetNext())
    {
        $postsInfo[$post['ID']] = $post;
    }

    $arResult['POSTS_INFO'] = $postsInfo;
}