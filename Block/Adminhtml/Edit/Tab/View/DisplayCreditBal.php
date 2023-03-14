<?php

namespace Mageget\StoreCredit\Block\Adminhtml\Edit\Tab\View;

use Magento\Backend\Block\Template\Context;
use Magento\Backend\Helper\Data;
use Magento\Customer\Controller\RegistryConstants;
use Magento\Framework\Registry;

class DisplayCreditBal extends \Magento\Backend\Block\Template
{
    protected $_coreRegistry = null;

    protected $_collectionFactory;
 

    public function __construct(
        Context $context,
        Data $backendHelper,
        CollectionFactory $collectionFactory,
        Registry $coreRegistry,
        array $data = []
    ) {
        $this->_coreRegistry = $coreRegistry;
        $this->_collectionFactory = $collectionFactory;
        parent::__construct($context, $backendHelper, $data);
    }

protected function _prepareBlock()
{

    $cus_id = $this->_coreRegistry->registry(RegistryConstants::CURRENT_CUSTOMER_ID);


    return $cus_id;
}

}