<?php

namespace Faker\Provider\by_BY;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    /**
     * @see list of Belarusian mobile formats, source: https://be.wikipedia.org/wiki/%D0%A2%D1%8D%D0%BB%D0%B5%D1%84%D0%BE%D0%BD%D0%BD%D1%8B_%D0%BF%D0%BB%D0%B0%D0%BD_%D0%BD%D1%83%D0%BC%D0%B0%D1%80%D0%B0%D1%86%D1%8B%D1%96_%D0%91%D0%B5%D0%BB%D0%B0%D1%80%D1%83%D1%81%D1%96
     */
    protected static $formats = [

        // International format (mobile)
        '+37525#######',
        '+37529#######',
        '+37533#######',
        '+37544#######',

        // Internal country format (mobile)
        '25#######',
        '29#######',
        '33#######',
        '44#######',

        // More generic formats
        '+375(##)#######',
    ];

    /**
     * @see Detailed numbering scheme (partial). Source: https://www.beltelecom.by/en/private/telephony/phone-codes
     */
    protected static $e164Formats = [
        '+375152######',
        '+3751511#####',
        '+3751512#####',
        '+3751513#####',
        '+3751514#####',
        '+3751515#####',
        '+37517#######',
        '+375214######',
    ];
}
