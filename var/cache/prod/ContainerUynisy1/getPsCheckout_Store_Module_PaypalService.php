<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'ps_checkout.store.module.paypal' shared service.

return $this->services['ps_checkout.store.module.paypal'] = new \PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\PaypalModule(${($_ = isset($this->services['ps_checkout.repository.paypal.account']) ? $this->services['ps_checkout.repository.paypal.account'] : $this->load('getPsCheckout_Repository_Paypal_AccountService.php')) && false ?: '_'});
