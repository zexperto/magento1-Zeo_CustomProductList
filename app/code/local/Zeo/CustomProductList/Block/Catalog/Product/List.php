<?php   
class Zeo_CustomProductList_Block_Catalog_Product_List extends Mage_Catalog_Block_Product_List{   

	public function getProductsCollection() {
		$productCollection =  $this->_getProductCollection ();
	
		return $productCollection;
	
	}
	public function getLayer()
	{
		$layer = Mage::registry('current_layer');
		if ($layer) {
			return $layer;
		}
		return Mage::getSingleton('customproductlist/layer');
	}
}