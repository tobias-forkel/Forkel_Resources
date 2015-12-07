<?php
/**
 * Forkel Resources
 *
 * @category    Forkel
 * @package     Forkel_Resources
 * @copyright   Copyright (c) 2015 Tobias Forkel (http://www.tobiasforkel.de)
 * @license     http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */

class Forkel_Resources_Block_Adminhtml_Customers_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
    public function __construct()
    {
        parent::__construct();

        $this->setDefaultSort('id');
        $this->setId('forkel_resources_customer_grid');
        $this->setDefaultDir('desc');
        $this->setSaveParametersInSession(true);
    }

    /**
     * Get collection class
     *
     * Return collection path as a string.
     *
     * @return string
     */
    protected function _getCollectionClass()
    {
        return 'customer/customer_collection';
    }

    /**
     * Prepare collection
     *
     * Extend collection with joins to other resources.
     *
     * @return Mage_Adminhtml_Block_Widget_Grid
     */
    protected function _prepareCollection()
    {
        $collection = Mage::getResourceModel($this->_getCollectionClass());
        $collection->addAttributeToSelect('*');

        $this->setCollection($collection);

        return parent::_prepareCollection();
    }

    /**
     * Prepare columns
     *
     * Add columns to the grid.
     *
     * @return Forkel_Resources_Block_Adminhtml_Blue_Grid
     */
    protected function _prepareColumns()
    {
        $this->addColumn('entity_id',
            array(
                'header'    =>  $this->__('ID'),
                'align'     =>  'right',
                'width'     =>  '50px',
                'index'     =>  'entity_id'
            )
        );

        $this->addColumn('firstname',
            array(
                'header'    => $this->__('Firstname'),
                'index'     => 'firstname'
            )
        );

        $this->addColumn('lastname',
            array(
                'header'    => $this->__('Lastname'),
                'index'     => 'lastname'
            )
        );

        $this->addColumn('email',
            array(
                'header'    => $this->__('Email'),
                'index'     => 'email'
            )
        );

        $this->addColumn('customer_since', array(
            'header'    => Mage::helper('customer')->__('Customer Since'),
            'type'      => 'datetime',
            'index'     => 'created_at',
            'gmtoffset' => true
        ));

        return parent::_prepareColumns();
    }

    /**
     * Get URL for a specific row
     *
     * Return the "edit" form url for each row.
     *
     * @return string
     */
    public function getRowUrl($row)
    {
        return null;
    }
}