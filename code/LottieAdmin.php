<?php

class LottieAdmin extends ModelAdmin
{
    private static $managed_models = [
        'LottieAnimation'
    ];

    private static $url_segment = 'animations';

    private static $menu_title = 'Animations';
}
