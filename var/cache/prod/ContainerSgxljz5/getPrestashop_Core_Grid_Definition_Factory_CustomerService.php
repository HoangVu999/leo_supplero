<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.grid.definition.factory.customer' shared service.

$this->services['prestashop.core.grid.definition.factory.customer'] = $instance = new \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\CustomerGridDefinitionFactory(${($_ = isset($this->services['prestashop.core.hook.dispatcher']) ? $this->services['prestashop.core.hook.dispatcher'] : $this->getPrestashop_Core_Hook_DispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.core.b2b.b2b_feature']) ? $this->services['prestashop.core.b2b.b2b_feature'] : $this->load('getPrestashop_Core_B2b_B2bFeatureService.php')) && false ?: '_'}->isActive(), ${($_ = isset($this->services['prestashop.adapter.multistore_feature']) ? $this->services['prestashop.adapter.multistore_feature'] : $this->getPrestashop_Adapter_MultistoreFeatureService()) && false ?: '_'}->isActive(), ${($_ = isset($this->services['prestashop.adapter.form.choice_provider.gender_by_id_choice_provider']) ? $this->services['prestashop.adapter.form.choice_provider.gender_by_id_choice_provider'] : ($this->services['prestashop.adapter.form.choice_provider.gender_by_id_choice_provider'] = new \PrestaShop\PrestaShop\Adapter\Form\ChoiceProvider\GenderByIdChoiceProvider())) && false ?: '_'}->getChoices());

$instance->setTranslator(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'});

return $instance;
