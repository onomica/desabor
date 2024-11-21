<?php
/**
 * 2007-2024 ETS-Soft
 *
 * NOTICE OF LICENSE
 *
 * This file is not open source! Each license that you purchased is only available for 1 wesite only.
 * If you want to use this file on more websites (or projects), you need to purchase additional licenses.
 * You are not allowed to redistribute, resell, lease, license, sub-license or offer our resources to any third party.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please contact us for extra customization service at an affordable price
 *
 * @author ETS-Soft <etssoft.jsc@gmail.com>
 * @copyright  2007-2024 ETS-Soft
 * @license    Valid for 1 website (or project) for each purchase of license
 *  International Registered Trademark & Property of ETS-Soft
 */

if (!defined('_PS_VERSION_'))
    exit;

class Ets_ageverificationAjaxModuleFrontController extends ModuleFrontController
{
    public function __construct()
    {
        parent::__construct();

        if (!$this->isTokenValid()) {
            die(json_encode([
                'errors' => $this->l('Token invalid', 'ajax'),
            ]));
        }
        if (trim(Configuration::get('ETS_AV_VERIFICATION_TYPE')) == 'birthdate') {

            $month = Tools::getValue('month');
            $day = Tools::getValue('day');
            $year = Tools::getValue('year');

            if ($this->getAge(date('Y-m-d H:i:s', strtotime($year . '-' . $month . '-' . $day . ' 00:00:00'))) >= (int)Configuration::get('ETS_AV_MINIMUM_AGE')) {
                $this->context->cookie->ets_av_allow_website = 1;
            } else
                $this->errors[] = $this->l('Your age is less than allowed age', 'ajax');

        } else
            $this->context->cookie->ets_av_allow_website = 1;

        $this->context->cookie->write();
        $has_error = count($this->errors) > 0;
        die(json_encode([
            'errors' => $has_error ? implode(PHP_EOL, $this->errors) : false,
            'allow_website' => !$has_error && isset($this->context->cookie->ets_av_allow_website) && $this->context->cookie->ets_av_allow_website,
        ]));
    }

    public function getAge($date)
    {
        if (trim($date) == '' || !Validate::isDate($date))
            return 0;
        $dob = new DateTime($date);
        $now = new DateTime();

        return $now->diff($dob)->y;
    }
}
