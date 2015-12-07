<?php
/**
 * Forkel Resources
 *
 * @category    Forkel
 * @package     Forkel_Resources
 * @copyright   Copyright (c) 2015 Tobias Forkel (http://www.tobiasforkel.de)
 * @license     http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */

class Forkel_Resources_Block_Adminhtml_Blue extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_blockGroup = Forkel_Resources_Helper_Data::MODULE_KEY;
        $this->_controller = 'adminhtml_blue';
        $this->_headerText = $this->__('Forkel Resources > Blue');

        parent::__construct();
    }
}