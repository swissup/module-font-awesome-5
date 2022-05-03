<?php

namespace Swissup\FontAwesome5\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    /**
     * @var string
     */
    const CONFIG_PATH_ENABLED = 'swissup_fontawesome5/general/enabled';

    /**
     * @var string
     */
    const CONFIG_PATH_USE_CDN = 'swissup_fontawesome5/general/use_cdn';

    /**
     * @var string
     */
    const CONFIG_PATH_USE_PRO = 'swissup_fontawesome5/general/use_pro';

    /**
     * @var string
     */
    const ASSET_REMOTE_URL = 'https://use.fontawesome.com/releases/v5.15.4/css/all.css';

    /**
     * @var string
     */
    const ASSET_LOCAL_URL = 'Swissup_FontAwesome5::fontawesome-free-5.15.4-web/css/all.min.css';

    /**
     * @var string
     */
    const ASSET_PRO_REMOTE_URL = 'https://pro.fontawesome.com/releases/v5.15.4/css/all.css';

    /**
     * @var string
     */
    const ASSET_PRO_LOCAL_URL = 'Swissup_FontAwesome5::fontawesome-pro-5.15.4-web/css/all.min.css';

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
        return $this->canUsePro() || $this->scopeConfig->getValue(
            self::CONFIG_PATH_USE_CDN,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Retrieve canUsePro flag
     *
     * @return boolean
     */
    public function canUsePro()
    {
        return $this->scopeConfig->getValue(
            self::CONFIG_PATH_USE_PRO,
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
            'name' => 'swissup_fontawesome5'
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
        $asset = $this->getBaseAsset();
        $asset->addData([
            'url'  => $this->canUsePro() ? self::ASSET_PRO_REMOTE_URL : self::ASSET_REMOTE_URL,
            'type' => 'css'
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
            'url'  => $this->canUsePro() ? self::ASSET_PRO_LOCAL_URL : self::ASSET_LOCAL_URL,
            'type' => 'css'
        ]);
        return $asset;
    }
}
