<?php
namespace app\models;
use yii\db\ActiveRecord;
/**
 * Created by PhpStorm.
 * User: Buma
 * Date: 25.10.2016
 * Time: 21:43
 */
class Product extends ActiveRecord implements \pistol88\cart\interfaces\CartElement
{
    //..
    public function table()
    {

        return 'product';

    }
    public function getCartId()
    {
        return $this->id;
    }

    public function getCartName()
    {
        return $this->name;
    }

    public function getCartPrice()
    {
        return $this->price;
    }

    //Опции продукта для выбора при добавлении в корзину
    public function getCartOptions()
    {
        return [
            '1' => [
                'name' => 'Цвет',
                'variants' => ['1' => 'Красный', '2' => 'Белый', '3' => 'Синий'],
            ],
            '2' => [
                'name' => 'Размер',
                'variants' => ['4' => 'XL', '5' => 'XS', '6' => 'XXL'],
            ]
        ];
    }
    //..
}