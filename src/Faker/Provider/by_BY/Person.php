<?php

namespace Faker\Provider\by_BY;

class Person extends \Faker\Provider\Person
{
    protected static $maleNameFormats = [
        '{{firstNameMale}} {{middleNameMale}} {{lastName}}',
        '{{lastName}} {{firstNameMale}} {{middleNameMale}}',
    ];

    protected static $femaleNameFormats = [
        '{{lastName}} {{firstNameFemale}} {{middleNameFemale}}',
        '{{firstNameFemale}} {{middleNameFemale}} {{lastName}}',
    ];

    protected static $firstNameMale = [
        'Адам', 'Алесь', 'Аляксандр', 'Аляксей', 'Анатолій', 'Андрэй', 'Антон', 'Артём', 'Артур',
        'Барыс', 'Багдан', 'Баляслаў', 'Віктар', 'Вячаслаў', 'Вадзім', 'Валянцін', 'Валерый',
        'Васіль', 'Віталій', 'Уладзімір', 'Уладзіслаў', 'Генадзь', 'Георгій', 'Даніла', 'Дзяніс', 'Дзмітрый',
        'Яўген', 'Іван', 'Ілля', 'Ігар', 'Кірыл', 'Канстанцін', 'Леў', 'Леанід', 'Максім', 'Міраслаў', 'Міхаіл',
        'Мікіта', 'Мікалай', 'Павел', 'Раман', 'Руслан', 'Рыгор', 'Сяргей', 'Станіслаў', 'Тарас', 'Цімафей', 'Фёдар',
        'Юрый', 'Яраслаў', 'Усевалад',
    ];

    protected static $firstNameFemale = [
        'Аксана', 'Алеся', 'Аляксандра', 'Алена', 'Алла', 'Анастасія', 'Анна', 'Валентына', 'Валерыя', 'Вікторыя', 'Галіна', 'Дар\'я', 'Дыяна', 'Яўгенія',
        'Кацярына', 'Елізавета', 'Інна', 'Ірына', 'Кіра', 'Ларыса', 'Любоў', 'Людміла', 'Маргарыта', 'Марына',
        'Марыя', 'Надзя', 'Наташа', 'Ніна', 'Ольга', 'Паліна', 'Раіса', 'Святлана', 'Сафія', 'Тамара',
        'Юлія',
    ];

    protected static $middleNameMale = [
        'Аляксандравіч', 'Аляксеівіч', 'Андрэівіч', 'Яўгенівіч', 'Сяргеевіч', 'Іванавіч',
        'Фёдаравіч', 'Тарасавіч', 'Віктаравіч', 'Васільявіч', 'Раманавіч', 'Пятровіч', 'Мікалаевіч',
        'Барысавіч', 'Міхайлавіч', 'Яўгеньевіч', 'Уладзіміравіч',
    ];

    protected static $middleNameFemale = [
        'Аляксандраўна', 'Аляксееўна', 'Андрэеўна', 'Яўгеньеўна', 'Сяргееўна', 'Іванаўна',
        'Фёдараўна', 'Тарасаўна', 'Віктараўна', 'Васільеўна', 'Раманаўна', 'Пятроўна', 'Мікалаеўна',
        'Барысаўна', 'Міхайлаўна', 'Яўгеньеўна', 'Уладзіміраўна',
    ];

    protected static $lastName = [
        'Антановіч', 'Асіповіч', 'Ахрамовіч', 'Баброўскі', 'Будзіловіч', 'Васілевіч', 'Валковіч',
        'Вярцінскі', 'Волчак', 'Ганчарэнка', 'Гарбацэвіч', 'Данілевіч', 'Дарашэвіч', 'Ісаёнак',
        'Касцюшка', 'Каранеўскі', 'Кузьміч', 'Лойка', 'Леановіч', 'Луцкевіч', 'Матусевіч', 'Міцкевіч',
        'Пашкевіч', 'Рагуля', 'Радзюк', 'Сапега', 'Станкевіч', 'Салагуб', 'Тамашэвіч', 'Улаховіч',
        'Шушкевіч', 'Юдзіцкі', 'Юркевіч', 'Якімовіч', 'Яцэвіч',
    ];

    /**
     * Return male middle name
     *
     * @example 'Віктаравіч'
     *
     * @return string Middle name
     */
    public function middleNameMale()
    {
        return static::randomElement(static::$middleNameMale);
    }

    /**
     * Return female middle name
     *
     * @example 'Яўгеньеўна'
     *
     * @return string Middle name
     */
    public function middleNameFemale()
    {
        return static::randomElement(static::$middleNameFemale);
    }

    /**
     * Return middle name for the specified gender.
     *
     * @param string|null $gender A gender the middle name should be generated
     *                            for. If the argument is skipped a random gender will be used.
     *
     * @return string Middle name
     */
    public function middleName($gender = null)
    {
        if ($gender === static::GENDER_MALE) {
            return $this->middleNameMale();
        }

        if ($gender === static::GENDER_FEMALE) {
            return $this->middleNameFemale();
        }

        return $this->middleName(static::randomElement([
            static::GENDER_MALE,
            static::GENDER_FEMALE,
        ]));
    }
}
