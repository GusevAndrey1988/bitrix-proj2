<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
{
    die();
}

$postIdsList = [];
foreach ($arResult['POST'] as $postId => $post)
{
    if (!empty($post['IMAGES']))
    {
        $arResult['POST'][$postId]['PREVIEW_PICTURE'] = 
            \CFile::GetPath($post['IMAGES'][array_key_first($post['IMAGES'])]);
    }

    $postIdsList[] = $post['ID'];
}

$postsTagResult = \CBlogPost::GetList(
    ['ID' => 'DESC'],
    [
        'ID' => $postIdsList,
    ],
    [
        'ID',
        'CATEGORY_ID',
    ]
);

$postTagList = [];
while ($tag = $postsTagResult->GetNext())
{
    $postTagList[] = $tag;
}

$tagsIdList = [];
foreach ($arResult['POST'] as $postId => $post)
{
    $currentTagIds = explode(',', $postTagList[$postId]['CATEGORY_ID']);
    $arResult['POST'][$postId]['TAGS'] = $currentTagIds;
    $tagsIdList = array_merge($tagsIdList, $currentTagIds);
}

$tagsIdList = array_unique($tagsIdList);

$tagsResult = CBlogCategory::GetList(
    ['ID' => 'DESC'],
    [
        'ID' => $tagsIdList,
    ]
);

$tagList = [];
while ($tag = $tagsResult->GetNext())
{
    $tag['urlToCategory'] = \CComponentEngine::MakePathFromTemplate(
        $arParams['PATH_TO_BLOG_CATEGORY'],
        [
            'blog' => $arResult['BLOG']['URL'],
            'category_id' => $tag['ID'],
            'category' => $tag['NAME'],
        ]
    );
    $tagList[$tag['ID']] = $tag;
}

$arResult['TAGS'] = $tagList;