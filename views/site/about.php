В состав модуля входит несколько виджетов. Все работают аяксом.

<?php
use pistol88\cart\widgets\BuyButton;
use pistol88\cart\widgets\TruncateButton;
use pistol88\cart\widgets\CartInformer;
use pistol88\cart\widgets\ElementsList;
use pistol88\cart\widgets\DeleteButton;
use pistol88\cart\widgets\ChangeCount;
use pistol88\cart\widgets\ChangeOptions;
?>

<?=ElementsList::widget(['type' => ElementsList::TYPE_DROPDOWN]);?>

<?php /* Выведет кнопку покупки */ ?>
<?= BuyButton::widget([
    'model' => $model,
    'text' => 'Заказать',
    'htmlTag' => 'a',
    'cssClass' => 'custom_class'
]) ?>

<?php /* Выведет количество товаров и сумму заказа */ ?>

<?= CartInformer::widget(['htmlTag' => 'a', 'offerUrl' => '/?r=cart', 'text' => '{c} на {p}']); ?>

<?php /* Выведет кнопку очистки корзины */ ?>
<?= TruncateButton::widget(); ?>

<?php
/*
Выведет корзину с выпадающими или обычными ('type' => ElementsList::TYPE_FULL) элементами списка.
Можно передать перечень дополнительных полей через otherFields (['Остаток' => 'amount']).
*/
?>
<?=ElementsList::widget(['type' => ElementsList::TYPE_DROPDOWN]);?>






