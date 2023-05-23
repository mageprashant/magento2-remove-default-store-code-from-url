<?php

declare(strict_types=1);

namespace MagePrashant\RemoveStoreCode\Plugin\Model\Store;

use Magento\Store\Model\Store;

class RemoveStoreCodeFromUrl
{
    public function __construct(
        \MagePrashant\RemoveStoreCode\Helper\Data $dataHelper
    ) {
        $this->dataHelper = $dataHelper;
    }


    public function afterIsUseStoreInUrl(Store $subject, bool $resultIsUseInUrl): bool
    {
        $isEnabled = $this->dataHelper->isEnabled();
        if ($isEnabled && $subject->getCode() !== Store::ADMIN_CODE && $subject->getGroup()->getRemoveStoreCode()) {
            return false;
        }

        return $resultIsUseInUrl;
    }
}
