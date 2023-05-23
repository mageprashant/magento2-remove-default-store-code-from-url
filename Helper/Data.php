<?php

namespace MagePrashant\RemoveStoreCode\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper
{
    public function getScopeConfig($path, $storeId = null)
    {
        return $this->scopeConfig->getValue($path, ScopeInterface::SCOPE_STORE, $storeId);
    }

    public function isEnabled($storeId = null)
    {
        return $this->getScopeConfig('removestorecode/general/is_enabled', $storeId);
    }
}
