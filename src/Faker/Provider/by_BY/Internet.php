<?php

namespace Faker\Provider\by_BY;

class Internet extends \Faker\Provider\Internet
{
    protected static $tld = ['by', 'бел', 'com.by', 'org.by', 'net.by', 'com', 'net', 'org'];
    protected static $freeEmailDomain = ['gmail.com', 'tut.by', 'onliner.by'];
}
