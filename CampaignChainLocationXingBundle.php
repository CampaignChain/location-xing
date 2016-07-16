<?php

namespace CampaignChain\Location\XingBundle;

use CampaignChain\Location\XingBundle\DependencyInjection\CampaignChainLocationXingExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class CampaignChainLocationXingBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new CampaignChainLocationXingExtension();
    }
}
