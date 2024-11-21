<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

class Desaborfourimages extends Module
{
    public function __construct()
    {
        $this->name = 'desaborfourimages';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Your Name';
        $this->need_instance = 0;

        parent::__construct();

        $this->displayName = $this->l('Desabor Four Images');
        $this->description = $this->l('Adds a custom template to the displayHome hook.');
    }

    public function install()
    {
        return parent::install() &&
            $this->registerHook('displayHome');
    }

    public function hookDisplayHome($params)
    {
        $this->context->smarty->assign(array(
            'custom_text' => 'Desabor Four Images!',
        ));

        return $this->display(__FILE__, 'views/templates/hook/four-images.tpl');
    }
}
