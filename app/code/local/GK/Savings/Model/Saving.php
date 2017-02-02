<?php


class GK_Savings_Model_Saving extends Mage_Core_Model_Abstract
{
    
    public function run()
    {        
        //echo 'Hi'; die;
        Mage::app()->setCurrentStore(Mage_Core_Model_App::ADMIN_STORE_ID);
        set_time_limit(0);
        ini_set('memory_limit','-1');
        
        $this->manipulatePrices();            
           
    }

    public function manipulatePrices()
    {
       
        $products = Mage::getModel('catalog/product')->getCollection()
                ->addAttributeToSelect('*')->load();
        
        foreach($products as $product)
        {
            $regPrice = $product->getPrice();            
            $salePrice = $product->getFinalPrice();            
            
            $difference = $regPrice - $salePrice;
            
            $product->setSaving($difference);
            $product->save(); 
        }
        
    }
    
    
}


