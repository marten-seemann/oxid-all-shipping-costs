<?php
namespace SeemannIT\AllShippingCostsModule\Application\Controller;

class PaymentController extends PaymentController_parent {
  public function getDeliveryCost($id) {
    $oBasket = $this->getSession()->getBasket();
    $oBasket->setShipping($id);
    $oBasket->calculateBasket(true);
    return $oBasket->getDeliveryCost();
  }
}
