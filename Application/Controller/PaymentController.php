<?php
namespace SeemannIT\AllShippingCostsModule\Application\Controller;

class PaymentController extends PaymentController_parent {
  protected $_aDelCosts = null;

  public function getDeliveryCost($id) {
    if($this->_aDelCosts == null) {
      $this->_getDeliveryCosts();
    }
    return $this->_aDelCosts[$id];
  }

  protected function _getDeliveryCosts() {
    $oBasket = $this->getSession()->getBasket();
    // save the old shipping id
    $origShippingId = $oBasket->getShippingId();
    
    $delCosts = [];
    foreach(array_keys($this->getAllSets()) as $id) {
      $oBasket->setShipping($id);
      $oBasket->calculateBasket(true);
      $delCosts[$id] = $oBasket->getDeliveryCost();
    }
    
    // reset to the old shipping id
    $oBasket->setShipping($origShippingId);
    $oBasket->calculateBasket(true);

    $this->_aDelCosts = $delCosts;
  }
}
