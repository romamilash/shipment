<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<section class="shipments">
    <?php foreach($arResult["ITEMS"] as $arItem):?>
    <?php $props = CIBlockElement::GetByID($arItem["ID"])->GetNextElement()->GetProperties(); ?>
        <article>
            <img src="<?= CFile::GetPath($props[52]['VALUE']) ?>" alt="<?= $arItem['NAME'] ?>">
            <div class="shipment">
                <h3><?= $arItem['NAME'] ?></h3>
                <div class="d-flex flex-wrap">
                    <div class="info">
                        <div>Куда отгружено:</div> <span>г. <?= $props[53]['VALUE'] ?></span>
                    </div>
                    <div class="info">
                        <div>Срок поставки:</div> <span><?= $props[54]['VALUE'] ?></span>
                    </div>
                </div>
            </div>
        </article>
    <?php endforeach;?>
    <div class="pagination">
        <a href="#">
            <svg width="28" height="16" viewBox="0 0 28 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M27 8H3" stroke="#BDBDBD" stroke-width="1.5" stroke-linecap="square"
                      stroke-linejoin="round"/>
                <path d="M6.66663 4L2.66663 8L6.66663 12" stroke="#BDBDBD" stroke-width="2"
                      stroke-linecap="square" stroke-linejoin="round"/>
            </svg>
        </a>
        <a href="#">1</a>
        <a href="#">2</a>
        <span>3</span>
        <a href="#">...</a>
        <a href="#">5</a>
        <a href="#">6</a>
        <a href="#">N</a>
        <a href="#">
            <svg width="28" height="16" viewBox="0 0 28 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 8H25" stroke="#BDBDBD" stroke-width="1.5" stroke-linecap="square"
                      stroke-linejoin="round"/>
                <path d="M21.3334 4L25.3334 8L21.3334 12" stroke="#BDBDBD" stroke-width="2"
                      stroke-linecap="square" stroke-linejoin="round"/>
            </svg>

        </a>
    </div>
    <div class="mobile-pagination">
        <a href="#">Показать ещё <img src="<?=SITE_TEMPLATE_PATH?>/img/show-more.svg" alt></a>
    </div>
</section>

<?php if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?php endif;?>

<?php if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?php endif;?>

