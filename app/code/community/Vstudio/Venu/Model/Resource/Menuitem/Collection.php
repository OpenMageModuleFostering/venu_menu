<?php
class Vstudio_Venu_Model_Resource_MenuItem_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract {

	public function _construct() {
		$this -> _init('vstudio_venu/menuitem');
	}

}
