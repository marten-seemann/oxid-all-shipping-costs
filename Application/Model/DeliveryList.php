<?php
namespace SeemannIT\AllShippingCostsModule\Application\Model;

class DeliveryList extends DeliveryList_parent {
  // The DeliveryList caches delivers in the _aDeliveries.
  // When called multiple times it would apply multiple delivery methods to one basket,
  // effectively summing up all delivery costs.
  // Therefore, we need to reset the _aDeliveries before calculating.
  public function getDeliveryList($oBasket, $oUser = null, $sDelCountry = null, $sDelSet = null) {
    $this->_aDeliveries = [];
    return parent::getDeliveryList($oBasket, $oUser, $sDelCountry, $sDelSet);
  }
}
