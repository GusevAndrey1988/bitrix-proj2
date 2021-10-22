<?php

use Bitrix\Main\Localization\Loc;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
{
	die();
}
?>

<?php if (!empty($arResult)):?>
	<nav id="site-navigation" class="main-navigation">
		<button class="menu-toggle"><?=Loc::getMessage("MAIN_MENU_TOGGLE_BUTTON")?></button>
		<a class="skip-link screen-reader-text" href="#content"><?=Loc::getMessage('MAIN_MENU_SKIP_TO_CONTENT')?></a>
		<div class="menu-menu-1-container">
			<ul id="menu-menu-1" class="menu">
				<?php $previousLevel = 0;?>
				<?php foreach($arResult as $arItem):?>
					<?php if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
						<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
					<?php endif?>

					<?php if ($arItem["IS_PARENT"]):?>
						<li>
							<a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
							<ul class="sub-menu">
					<?php else:?>
						<?php if ($arItem["PERMISSION"] > "D"):?>
							<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
						<?php else:?>
							<li><a href="" title="<?=Loc::getMessage("MAIN_MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
						<?php endif?>
					<?php endif?>

					<?php $previousLevel = $arItem["DEPTH_LEVEL"];?>
				<?php endforeach?>

				<?php if ($previousLevel > 1):?>
					<?=str_repeat("</ul></li>", ($previousLevel-1));?>
				<?php endif?>
			</ul>
		</div>
	</nav>
<?endif?>