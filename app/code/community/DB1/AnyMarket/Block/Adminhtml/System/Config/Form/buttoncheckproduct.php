<?php
class DB1_AnyMarket_Block_Adminhtml_System_Config_Form_Buttoncheckproduct extends Mage_Adminhtml_Block_System_Config_Form_Field
{
	/*
	* Set template
	*/
	protected function _construct()
	{
		parent::_construct();
		$this->setTemplate('db1/anymarket/system/config/form/field/button_check_product.phtml');
	}

	/**
	* Return element html
	*
	* @param  Varien_Data_Form_Element_Abstract $element
	* @return string
	*/
	protected function _getElementHtml(Varien_Data_Form_Element_Abstract $element)
	{
		return $this->_toHtml();
	}

	/**
	* Return ajax url for button
	*
	* @return string
	*/
	public function getAjaxCheckProductUrl()
	{
		return Mage::helper('adminhtml')->getUrl('adminhtml/anymarket/checkprod');
	}

	/**
	* Generate button html
	*
	* @return string
	*/
	public function getButtonHtml()
	{
		$button = $this->getLayout()->createBlock('adminhtml/widget_button')
		->setData(array(
		'id'        => 'check_anymarket_button',
		'label'     => Mage::helper('db1_anymarket')->__('Check Product'),
		'onclick'   => 'javascript:checkprod(); return false;'
		));

		return $button->toHtml();
	}
}

?>