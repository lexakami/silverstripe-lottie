<?php

class LottieExtension extends DataExtension {

    public function setupLottieRequirements()
    {
        Requirements::javascript('silverstripe-lottie/dist/manifest.js');
        Requirements::javascript('silverstripe-lottie/dist/vendor.js');
        Requirements::javascript('silverstripe-lottie/dist/app.js');
    }

    public function getLottieAnimation($name)
    {
        return LottieAnimation::get()->filter(['Name' => $name])->first();
    }
}
