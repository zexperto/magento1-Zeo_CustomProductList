<?php 
class Zeo_CustomProductList_Block_Catalog_Product_Layer_View extends Mage_Catalog_Block_Layer_View
{
	public function getLayer()
	{
		return Mage::getSingleton('customproductlist/layer');
	}
}
