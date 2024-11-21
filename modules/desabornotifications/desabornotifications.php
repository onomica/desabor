<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

class Desabornotifications extends Module
{
    public function __construct()
    {
        $this->name = 'desabornotifications';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Your Name';
        $this->need_instance = 0;

        parent::__construct();

        $this->displayName = $this->l('Desabor Notifications');
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
            'custom_text' => 'Desabor Notifications!',
        ));

        return $this->display(__FILE__, 'views/templates/hook/notifications.tpl');
    }
}
