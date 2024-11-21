<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.type.improve.international.locations.country_type' shared service.

return $this->services['form.type.improve.international.locations.country_type'] = new \PrestaShopBundle\Form\Admin\Improve\International\Locations\CountryType(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Feature\\MultistoreFeature'] ?? $this->getMultistoreFeatureService())->isActive(), ($this->services['prestashop.core.form.choice_provider.currency_by_id'] ?? $this->load('getPrestashop_Core_Form_ChoiceProvider_CurrencyByIdService.php')), ($this->services['prestashop.core.form.choice_provider.zone_by_id'] ?? ($this->services['prestashop.core.form.choice_provider.zone_by_id'] = new \PrestaShop\PrestaShop\Adapter\Form\ChoiceProvider\ZoneByIdChoiceProvider())));
