<?php

/** @var \CBlogPostCommentEdit $component */

use Bitrix\Main\Localization\Loc;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
    die();
}

\Bitrix\Main\Page\Asset::getInstance()->addCss($templateFolder . '/style.css', true);
?>

<?php if ($arResult['is_ajax_post'] != 'Y'):?>
	<?php include ($_SERVER['DOCUMENT_ROOT'] . $templateFolder . '/scripts_for_editor.php');?>

    <div id="comments" class="comments-area">
        <div id="respond" class="comment-respond">
            <h3 id="reply-title" class="comment-reply-title"><?=Loc::getMessage('SITE_BLOG_COMMENTS_LEAVE_REPLY')?></h3>
            <form method="POST" name="form_comment" id="<?=$component->createPostFormId()?>" action="<?=POST_FORM_ACTION_URI?>" id="commentform" class="comment-form" novalidate="">
                <input type="hidden" name="parentId" id="parentId" value="">
                <input type="hidden" name="edit_id" id="edit_id" value="">
                <input type="hidden" name="act" id="act" value="add">
                <input type="hidden" name="post" value="Y">
                <?=bitrix_sessid_post()?>
                <p class="comment-notes">
                    <span id="email-notes"><?=Loc::getMessage('SITE_BLOG_COMMENTS_EMAIL_NOTIFICATION')?></span> <?=Loc::getMessage('SITE_BLOG_COMMENTS_REQUIRED_FIELD_NOTIFICATION')?> <span class="required">*</span>
                </p>

                <?php if (empty($arResult["User"])):?>
                    <div class="wpcmsdev-columns">
                        <p class="comment-form-author column column-width-one-third">
                            <label for="user_name"><?=Loc::getMessage('SITE_BLOG_COMMENTS_AUTHOR_NAME')?> <span class="required">*</span></label><input id="user_name" name="user_name" type="text" value="<?=htmlspecialcharsEx($_SESSION["blog_user_name"])?>" size="30" aria-required="true" required="required">
                        </p>
                        <p class="comment-form-email column column-width-one-third">
                            <label for="user_email"><?=Loc::getMessage('SITE_BLOG_COMMENTS_AUTHOR_EMAIL')?> <span class="required">*</span></label><input id="user_email" name="user_email" type="email" value="<?=htmlspecialcharsEx($_SESSION["blog_user_email"])?>" size="30" aria-describedby="email-notes" aria-required="true" required="required">
                        </p>
                        <?php if ($arParams['NOT_USE_COMMENT_TITLE'] != 'Y'):?>
                            <p class="comment-form-url column column-width-one-third">
                                <label for="url"><?=Loc::getMessage('SITE_BLOG_COMMENTS_AUTHOR_WEBSITE')?></label><input id="url" name="subject" type="url" value="" size="30">
                            </p>
                        <?php endif?>
                    </div>
                <?php endif?>
                
                <p class="comment-form-comment">
                    <label for="comment"><?=Loc::getMessage('SITE_BLOG_COMMENTS_AUTHOR_COMMENT')?></label>
                    <textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" required="required"></textarea>
                </p>

                <input type="hidden" name="blog_upload_cid" id="upload-cid" value="">

                <?php if ($arResult['use_captcha'] === true):?>
                    <input type="hidden" name="captcha_code" id="captcha_code" value="">
                <?php endif?>
                
                <div class="site-blog-comment-submit-block">
                    <?php if ($arResult['use_captcha'] === true):?>
                        <label class="site-blog-comment-captcha-word-label" for="captcha_word"><?Loc::getMessage(['SITE_BLOG_COMMENTS_CAPTHCHA_FIELD'])?> <input type="text" name="captcha_word" id="captcha_word" value="" tabindex="7"></label>
                        <img src="" width="180" height="40" id="captcha" style="display:none;">
                    <?php endif?>
                    <p class="form-submit">
                        <input type="button" name="sub-post" id="submit" class="submit" onclick="createNewPost();" value="Post Comment">
                    </p>
                </div>
            
                <noscript>
                </noscript>
            </form>
        </div>
        <div id="errors">
        </div>
        <!-- #respond -->
        
        <ol class="commentlist">
            <?php foreach (array_reverse($arResult['CommentsResult'][0]) as $comment):?>
                <?php require ($_SERVER["DOCUMENT_ROOT"] . $templateFolder . '/comment_template.php')?>
            <?php endforeach?>
        </ol>
        <?php if ($arResult['NEED_NAV']):?>
            <div>
                <p style="float: left; padding-right: 10px;"><?=Loc::getMessage('SITE_BLOG_COMMENTS_PAGE')?> <?=$component->printPaging()?></p>
            </div>
        <?php endif?>
    </div>
<?php else:?>
    <?php 
        // Этот код выполняется при добавлении нового коментария (ajax)

        $APPLICATION->RestartBuffer();

        /** @var array $comment Новый комментарий */
        $comment = $arResult['CommentsResult'][0][0];

        ob_start();
    ?>

    <?php require ($_SERVER["DOCUMENT_ROOT"] . $templateFolder . '/comment_template.php')?>

    <?php
        $html = ob_get_clean();
        echo json_encode(
            [
                'html' => $html,
                'message' => $arResult['MESSAGE'],
                'errorMessages' => $arResult['ERROR_MESSAGE'],
                'fatalMessages' => $arResult['FATAL_MESSAGE'],
                'commentError' => $arResult['COMMENT_ERROR'],
            ],
            JSON_PRETTY_PRINT
        );
        die();
    ?>
<?php endif?>