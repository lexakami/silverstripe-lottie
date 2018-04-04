<?php

namespace SilverStripe\Lottie;

use SilverStripe\Lottie\LottieAnimation;
use SilverStripe\View\Requirements;
use SilverStripe\ORM\DataExtension;

class LottieExtension extends DataExtension {

    public function setupLottieRequirements()
    {
        Requirements::javascript('lexakami/silverstripe-lottie:dist/manifest.js');
        Requirements::javascript('lexakami/silverstripe-lottie:dist/vendor.js');
        Requirements::javascript('lexakami/silverstripe-lottie:dist/app.js');
    }

    public function getLottieAnimation($name)
    {
        return LottieAnimation::get()->filter(['Name' => $name])->first();
    }
}
