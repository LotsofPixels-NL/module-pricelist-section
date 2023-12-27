<?php

declare(strict_types=1);

namespace Lotsofpixels\PricelistSection\Model\Invoice;

use Lotsofpixels\PricelistSection\Model\ResourceModel\Invoice as InvoiceResourceModel;
use Lotsofpixels\PricelistSection\Model\Invoice;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct() {
    $this->_init(Invoice::class, InvoiceResourceModel::class);
}
}
