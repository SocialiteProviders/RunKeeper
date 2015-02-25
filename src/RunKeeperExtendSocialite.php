<?php
namespace SocialiteProviders\RunKeeper;

use SocialiteProviders\Manager\SocialiteWasCalled;

class RunKeeperExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite(
            'runkeeper', __NAMESPACE__.'\Provider'
        );
    }
}
