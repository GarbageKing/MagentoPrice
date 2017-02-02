<?php

class GK_Savings_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        Mage::getModel('gk_savings/saving')->run();
    }
}


