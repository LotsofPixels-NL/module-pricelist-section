<?php

declare(strict_types=1);

namespace Lotsofpixels\PricelistSection\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;

/**
 *
 */
class priceList implements ArgumentInterface
{
    /**
     *
     */
    const LABEL_FIELD = 'lotsofpixels/general/static_block';

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
    }

    /**
     * @return mixed
     */
public function getStaticblockValue(): string
{
    return $this->scopeConfig->getValue(self::LABEL_FIELD,\Magento\Store\Model\ScopeInterface::SCOPE_STORE);
}


}
