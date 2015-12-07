<?php
/**
 * Forkel Resources
 *
 * @category    Forkel
 * @package     Forkel_Resources
 * @copyright   Copyright (c) 2015 Tobias Forkel (http://www.tobiasforkel.de)
 * @license     http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */

class Forkel_Resources_Model_Resource_Green extends Mage_Core_Model_Resource_Db_Abstract
{
    protected function _construct()
    {
        $this->_init(Forkel_Resources_Helper_Data::MODEL_GREEN, 'id');
    }
}