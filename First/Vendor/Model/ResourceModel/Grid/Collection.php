<?php

/**
 * Grid Vendor Collection.
 */
namespace First\Vendor\Model\ResourceModel\Grid;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'entity_id';
    /**
     * Define resource model.
     */
    protected function _construct()
    {
        $this->_init(
            'First\Vendor\Model\Grid',
            'First\Vendor\Model\ResourceModel\Grid'
        );
    }
}
