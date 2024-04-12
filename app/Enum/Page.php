<?php

namespace App\Enum;

enum Page: string
{
    case INDEX = 'index';
    case ABOUT = 'about';
    case SUBPAGE1 = 'subpage1';
    case SUBPAGE2 = 'subpage2';
}
