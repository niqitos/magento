<?php
/**
 * Created by PhpStorm.
 * User: Nik
 * Date: 11/9/16
 * Time: 21:19
 */
class IGN_Siteblocks_Model_Resource_Block_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('siteblocks/block');
    }
}