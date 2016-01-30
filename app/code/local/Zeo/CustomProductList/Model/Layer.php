<?php

class Zeo_CustomProductList_Model_Layer extends Mage_Catalog_Model_Layer
{
        public function getProductCollection()
        {
	        if (isset($this->_productCollections[$this->getCurrentCategory()->getId()])) {
	            $collection = $this->_productCollections[$this->getCurrentCategory()->getId()];
	        } else {
	            $collection = $this->getCurrentCategory()->getProductCollection();
	           
	           // put your filter here
	            
	            $this->prepareProductCollection($collection);
	            $this->_productCollections[$this->getCurrentCategory()->getId()] = $collection;
	        }
	
	        return $collection;
        }

}
