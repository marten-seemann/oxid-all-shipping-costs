<?php
/**
 * Metadata version
 */

$sMetadataVersion = '2.0';

$aModule = array(
    'id'           => 'allshippingcosts',
    'title'        => [
        'en' => 'shipping costs for all delivery methods',
        'de' => 'Versandkosten für alle Versandarten',
    ],
    'description'  => [
    ],
    'version'      => '1.0',
    'author'       => 'Marten Seemann',
   
    'url'          => 'https://www.oxid-responsive.com/',
    'extend' => [
        \OxidEsales\Eshop\Application\Model\DeliveryList::class => SeemannIT\AllShippingCostsModule\Application\Model\DeliveryList::class,
        \OxidEsales\Eshop\Application\Controller\PaymentController::class => SeemannIT\AllShippingCostsModule\Application\Controller\PaymentController::class,
    ],
);
