<?php

namespace Swissup\FontAwesome\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    /**
     * @var string
     */
    const CONFIG_PATH_ENABLED = 'swissup_fontawesome/general/enabled';

    /**
     * @var string
     */
    const CONFIG_PATH_USE_CDN = 'swissup_fontawesome/general/use_cdn';

    /**
     * @var string
     */
    const ASSET_REMOTE_URL = 'https://use.fontawesome.com/releases/v5.3.1/css/all.css';

    /**
     * @var string
     */
    const ASSET_LOCAL_URL = 'Swissup_FontAwesome::fontawesome-free-5.3.1-web/css/all.min.css';

    /**
     * Retrieve isFontAwesomeEnabled flag
     *
     * @return boolean
     */
    public function isFontAwesomeEnabled()
    {
        return $this->scopeConfig->getValue(
            self::CONFIG_PATH_ENABLED,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Retrieve canUseCdn flag
     *
     * @return boolean
     */
    public function canUseCdn()
    {
        return $this->scopeConfig->getValue(
            self::CONFIG_PATH_USE_CDN,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get basic font awesome asset object
     *
     * @return \Magento\Framework\DataObject
     */
    protected function getBaseAsset()
    {
        $asset = new \Magento\Framework\DataObject();
        $asset->addData([
            'properties' => [],
            'name' => 'swissup_fontawesome'
        ]);
        return $asset;
    }

    /**
     * Get remote font awesome asset object
     *
     * @return \Magento\Framework\DataObject
     */
    public function getRemoteAsset()
    {
        $url = self::ASSET_REMOTE_URL;
        $type = 'css';
        $asset = $this->getBaseAsset();
        $asset->addData([
            'url'  => $url,
            'type' => $type
        ]);
        return $asset;
    }

    /**
     * Get local font awesome data object
     *
     * @return \Magento\Framework\DataObject
     */
    public function getLocalAsset()
    {
        $asset = $this->getBaseAsset();
        $asset->addData([
            'url'  => self::ASSET_LOCAL_URL,
            'type' => 'css'
        ]);
        return $asset;
    }
}
