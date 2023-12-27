<?php

declare(strict_types=1);

namespace Lotsofpixels\PricelistSection\Model;

use Magento\Framework\Model\AbstractModel;

class Invoice extends AbstractModel
{
protected function _construct() {
    $this->_init(ResourceModel\Invoice::class);
}
}
