<?php

class Ainstainer_Blog_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }

    public function categoryAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }
}