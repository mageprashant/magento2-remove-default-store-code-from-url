<?php
namespace MagePrashant\RemoveStoreCode\Plugin\Block\Store\Edit\Form;

class Group extends \Magento\Backend\Block\System\Store\Edit\Form\Group
{
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Framework\Registry $registry,
        \Magento\Framework\Data\FormFactory $formFactory,
        \Magento\Catalog\Model\Config\Source\Category $category,
        \Magento\Store\Model\StoreFactory $storeFactory,
        \Magento\Store\Model\WebsiteFactory $websiteFactory,
        \MagePrashant\RemoveStoreCode\Helper\Data $dataHelper,
        array $data = []
    ) {
        $this->dataHelper = $dataHelper;
        parent::__construct($context, $registry, $formFactory, $category, $storeFactory, $websiteFactory, $data);
    }

    public function beforeSetForm(\Magento\Backend\Block\System\Store\Edit\Form\Group $object, $form) 
    {

        $isEnabled = $this->dataHelper->isEnabled();
        if ($isEnabled) {
            $groupModel = $object->_coreRegistry->registry('store_data');
        
            $fieldset = $form->getElement('group_fieldset');
            $fieldset->addField(
                'group_remove_store_code',
                'select',
                [
                    'name' => 'group[remove_store_code]',
                    'label' => __('Remove store code from url'),
                    'value' => $groupModel->getRemoveStoreCode(),
                    'options' => [0 => __('No'), 1 => __('Yes')],
                    'required' => false
                ]
            );

        }
        return [$form];
    }
}
