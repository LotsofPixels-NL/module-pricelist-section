<?php

declare(strict_types=1);

namespace Lotsofpixels\PricelistSection\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Invoice extends  AbstractDb
{
    const MAIN_TABLE = 'lotsofpixels_erp_invoices';
    const ID_FIELDNAME = 'id';

    protected function _construct(){
 $this->_init(self::MAIN_TABLE, self::ID_FIELDNAME);
}
}
