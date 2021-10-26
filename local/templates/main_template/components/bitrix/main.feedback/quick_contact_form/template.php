<?

use Bitrix\Main\Localization\Loc;

if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>
<?php
if (!empty($arResult['ERROR_MESSAGE']))
{
	foreach($arResult['ERROR_MESSAGE'] as $v)
		ShowError($v);
}
?>

<?php
	$reqName = false;
	$reqEmail = false;
	$reqMessage = false;

	if ($arParams['REQUIRED_FIELDS'])
	{
		if (in_array('NAME', $arParams['REQUIRED_FIELDS']))
		{
			$reqName = true;
		}

		if (in_array('EMAIL', $arParams['REQUIRED_FIELDS']))
		{
			$reqEmail = true;
		}

		if (in_array('MESSAGE', $arParams['REQUIRED_FIELDS']))
		{
			$reqMessage = true;
		}
	}
?>

<form class="wpcf7" method="post" action="<?=POST_FORM_ACTION_URI?>" id="contactform">
	<?=bitrix_sessid_post()?>
	<div class="form">
		<p><input type="text" name="user_name" placeholder="<?=Loc::getMessage('MFT_NAME') . ($reqName ? ' *' : '')?>"
			<?php if ($reqName) echo 'required'?> value="<?=$arResult['AUTHOR_NAME']?>"></p>
		<p><input type="text" name="user_email" placeholder="<?=Loc::getMessage('MFT_EMAIL') . ($reqEmail ? ' *' : '')?>"
			<?php if ($reqEmail) echo 'required'?> value="<?=$arResult['AUTHOR_EMAIL']?>"></p>
		<p><textarea name="MESSAGE" rows="3" placeholder="<?=Loc::getMessage('MFT_MESSAGE') . ($reqMessage ? ' *' : '')?>"
			<?php if ($reqMessage) echo 'required'?>><?=$arResult['MESSAGE']?></textarea></p>

		<?php if ($arParams['USE_CAPTCHA'] == 'Y'):?>
			<input type="hidden" name="captcha_sid" value="<?=$arResult['capCode']?>">
			<p><img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult['capCode']?>" width="180" height="40" alt="CAPTCHA"></p>
			<p><input type="text" name="captcha_word" size="30" maxlength="50" value="" placeholder="<?=Loc::getMessage('MFT_CAPTCHA_CODE')?>"></p>
		<?endif;?>

		<p><input type="submit" name="submit" id="submit" class="clearfix btn" value="<?=Loc::getMessage('MFT_SUBMIT')?>"></p>
	</div>
</form>
<?php if ($arResult['OK_MESSAGE'] != ''):?>
	<div class="done">								
		<?=$arResult['OK_MESSAGE']?>
	</div>
<?php endif?>