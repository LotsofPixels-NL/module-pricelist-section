<?php

declare(strict_types=1);

namespace Lotsofpixels\PricelistSection\Helper;
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
    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    ){
        $this->scopeConfig = $scopeConfig;
        parent::__construct($context);
    }

    /**
     * @return mixed
     */
    public function getLabel() {
        return $this->scopeConfig->getValue(self::LABEL_FIELD,\Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

}