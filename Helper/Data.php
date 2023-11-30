<?php

declare(strict_types=1);

namespace Lotsofpixels\PricelistSection\Helper;

use Magento\Framework\App\Helper\AbstractHelper;


/**
 *
 */
class Data extends \Magento\Framework\App\Helper\AbstractHelper {
    /**
     *
     */
    const LABEL_FIELD = 'lotsofpixels/general/label_field';

    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    protected $scopeConfig;
    /**
     * @param \Magento\Framework\App\Helper\Context   $context
     * @param \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
     */

    protected $_httpContext;


    /**
     * @param \Magento\Framework\App\Helper\Context $context
     * @param \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
     * @param \Magento\Framework\App\Http\Context $httpContext
     */
    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
        \Magento\Framework\App\Http\Context $httpContext
    ){
        $this->scopeConfig = $scopeConfig;
        $this->_httpContext = $httpContext;
        parent::__construct($context);
    }

    /**
     * @return mixed
     */
    public function getLabel() {
        return $this->scopeConfig->getValue(self::LABEL_FIELD,\Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /**
     * @return bool
     */
    public function getIsCustomerLoggedIn()
    {
        return (bool)$this->_httpContext->getValue(\Magento\Customer\Model\Context::CONTEXT_AUTH);
    }
}
