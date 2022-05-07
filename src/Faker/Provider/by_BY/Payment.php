<?php

namespace Faker\Provider\by_BY;

class Payment extends \Faker\Provider\Payment
{
    protected static $banks = [
        'Альфа-Банк', 'Авангард',
        'Беларусбанк', 'Беларускі Народны Банк', 'Белагапрамбанк', 'Белгазпрамбанк', 'БелВЭБ', 'БТА Банк',
        'ВТБ',
        'Дабрабыт',
        'Ідэя Банк',
        'МТБанк',
        'Прыёрбанк',
        'Тэхнабанк',
        'Франсабанк',
    ];

    public static function bank()
    {
        return static::randomElement(static::$banks);
    }
}
