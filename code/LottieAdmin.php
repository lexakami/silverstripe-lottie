<?php

namespace SilverStripe\Lottie;

use SilverStripe\Lottie\LottieAnimation;
use SilverStripe\Admin\ModelAdmin;

class LottieAdmin extends ModelAdmin
{
    private static $managed_models = [
        LottieAnimation::class
    ];

    private static $url_segment = 'animations';

    private static $menu_title = 'Animations';
}
