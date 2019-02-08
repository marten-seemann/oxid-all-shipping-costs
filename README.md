# OXID: show all shipping costs

This module makes it possible to show the delivery cost for every shipping method during the checkout process.

It adds a method `getDeliveryCost($id)` to the `PaymentController`. The parameter `$id` is the id of the shipping method. It returns the price for this shipping method, applied to the current basket.
