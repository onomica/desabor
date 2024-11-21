<?php
/**
 * Copyright ETS Software Technology Co., Ltd
 *
 * NOTICE OF LICENSE
 *
 * This file is not open source! Each license that you purchased is only available for 1 website only.
 * If you want to use this file on more websites (or projects), you need to purchase additional licenses.
 * You are not allowed to redistribute, resell, lease, license, sub-license or offer our resources to any third party.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future.
 *
 * @author ETS Software Technology Co., Ltd
 * @copyright  ETS Software Technology Co., Ltd
 * @license    Valid for 1 website (or project) for each purchase of license
 */

if (!defined('_PS_VERSION_'))
    exit;

class Ets_specialproducts_defines
{
    public static $instance;
    public function __construct()
    {
        $this->context = Context::getContext();
        if (is_object($this->context->smarty)) {
            $this->smarty = $this->context->smarty;
        }
    }
    public static function getInstance()
    {
        if (!(isset(self::$instance)) || !self::$instance) {
            self::$instance = new Ets_specialproducts_defines();
        }
        return self::$instance;
    }
    public function l($string)
    {
        return Translate::getModuleTranslation('ets_specialproducts', $string, pathinfo(__FILE__, PATHINFO_FILENAME));
    }
    public function getConfigInputs()
    {
        return array(
            array(
                'name' => 'ETS_SPECIALP_TILE_HOME_BLOCK',
                'label' => $this->l('Title'),
                'lang'=>true,
                'type'=>'text',
                'form_group_class'=> 'position home_block',
                'validate'=>'isCleanHtml',
                'default' => $this->l('Special products'),
                'default_lang' => 'Special products',
                'showRequired' => true,
            ),
            array(
                'type'=> 'text',
                'name' => 'ETS_SPECIALP_NUMBER_PRODUCT_IN_HOME',
                'label' => $this->l('Number of products to display'),
                'form_group_class'=> 'position home_block',
                'validate' => 'isUnsignedInt',
                'default' => 8,
                'desc' => $this->l('Leave blank to show all special products'),
            ),
            array(
                'type' => 'radio',
                'name' => 'ETS_SPECIALP_DISPLAY_TYPE_IN_HOME',
                'label' => $this->l('Display type'),
                'form_group_class'=> 'position home_block',
                'validate' => 'isCleanHtml',
                'default' => 'slide',
                'values' => array(
                    array(
                        'id'=> 'ETS_SPECIALP_DISPLAY_TYPE_IN_HOME_gird',
                        'label' => $this->l('Grid'),
                        'value'=>'gird',
                    ),
                    array(
                        'id'=> 'ETS_SPECIALP_DISPLAY_TYPE_IN_HOME_slide',
                        'label' => $this->l('Slider'),
                        'value'=>'slide',
                    ),
                ),
            ),
            array(
                'type' => 'switch',
                'name' => 'ETS_SPECIALP_AUTO_PLAY_HOME',
                'label' => $this->l('Auto-play slider'),
                'default' => 1,
                'validate' => 'isInt',
                'values' => array(
                    array(
                        'label' => $this->l('Yes'),
                        'id' => 'ETS_SPECIALP_AUTO_PLAY_HOME_on',
                        'value' => 1,
                    ),
                    array(
                        'label' => $this->l('No'),
                        'id' => 'ETS_SPECIALP_AUTO_PLAY_HOME_off',
                        'value' => 0,
                    )
                ),
                'form_group_class'=> 'position home_block',
            ),
            array(
                'name' => 'ETS_SPECIALP_TILE_LEFT_BLOCK',
                'label' => $this->l('Title'),
                'lang'=>true,
                'type'=>'text',
                'form_group_class'=> 'position left_block',
                'validate'=>'isCleanHtml',
                'default' => $this->l('Special products'),
                'default_lang' => 'Special products',
                'showRequired' => true,
            ),
            array(
                'type'=> 'text',
                'name' => 'ETS_SPECIALP_NUMBER_PRODUCT_IN_LEFT',
                'label' => $this->l('Number of products to display'),
                'form_group_class'=> 'position left_block',
                'validate' => 'isUnsignedInt',
                'default' =>8,
                'desc' => $this->l('Leave blank to show all special products'),
            ),
            array(
                'type' => 'radio',
                'name' => 'ETS_SPECIALP_DISPLAY_TYPE_IN_LEFT',
                'label' => $this->l('Display type'),
                'form_group_class'=> 'position left_block',
                'validate' => 'isCleanHtml',
                'default' => 'slide',
                'values' => array(
                    array(
                        'id'=> 'ETS_SPECIALP_DISPLAY_TYPE_IN_LEFT_gird',
                        'label' => $this->l('Grid'),
                        'value'=>'gird',
                    ),
                    array(
                        'id'=> 'ETS_SPECIALP_DISPLAY_TYPE_IN_LEFT_slide',
                        'label' => $this->l('Slider'),
                        'value'=>'slide',
                    ),
                ),
                
            ),
            array(
                'type' => 'switch',
                'name' => 'ETS_SPECIALP_AUTO_PLAY_LEFT',
                'label' => $this->l('Auto-play slider'),
                'default' => 1,
                'validate' => 'isInt',
                'values' => array(
                    array(
                        'label' => $this->l('Yes'),
                        'id' => 'ETS_SPECIALP_AUTO_PLAY_LEFT_on',
                        'value' => 1,
                    ),
                    array(
                        'label' => $this->l('No'),
                        'id' => 'ETS_SPECIALP_AUTO_PLAY_LEFT_off',
                        'value' => 0,
                    )
                ),
                'form_group_class'=> 'position left_block',
            ),
            array(
                'name' => 'ETS_SPECIALP_TILE_RIGHT_BLOCK',
                'label' => $this->l('Title'),
                'lang'=>true,
                'type'=>'text',
                'form_group_class'=> 'position right_block',
                'validate'=>'isCleanHtml',
                'default' => $this->l('Special products'),
                'default_lang' => 'Special products',
                'showRequired' => true,
            ),
            array(
                'type'=> 'text',
                'name' => 'ETS_SPECIALP_NUMBER_PRODUCT_IN_RIGHT',
                'label' => $this->l('Number of products to display'),
                'form_group_class'=> 'position right_block',
                'validate' => 'isUnsignedInt',
                'default' => 8,
                'desc' => $this->l('Leave blank to show all special products'),
            ),
            array(
                'type' => 'radio',
                'name' => 'ETS_SPECIALP_DISPLAY_TYPE_IN_RIGHT',
                'label' => $this->l('Display type'),
                'form_group_class'=> 'position right_block',
                'validate' => 'isCleanHtml',
                'default' => 'slide',
                'values' => array(
                    array(
                        'id'=> 'ETS_SPECIALP_DISPLAY_TYPE_IN_RIGHT_gird',
                        'label' => $this->l('Grid'),
                        'value'=>'gird',
                    ),
                    array(
                        'id'=> 'ETS_SPECIALP_DISPLAY_TYPE_IN_RIGHT_slide',
                        'label' => $this->l('Slider'),
                        'value'=>'slide',
                    ),
                ),
            ),
            array(
                'type' => 'switch',
                'name' => 'ETS_SPECIALP_AUTO_PLAY_RIGHT',
                'label' => $this->l('Auto-play slider'),
                'default' => 1,
                'validate' => 'isInt',
                'values' => array(
                    array(
                        'label' => $this->l('Yes'),
                        'id' => 'ETS_SPECIALP_AUTO_PLAY_RIGHT_on',
                        'value' => 1,
                    ),
                    array(
                        'label' => $this->l('No'),
                        'id' => 'ETS_SPECIALP_AUTO_PLAY_RIGHT_off',
                        'value' => 0,
                    )
                ),
                'form_group_class'=> 'position right_block',
            ),
            array(
                'name' => 'ETS_SPECIALP_TILE_PRODUCT_BLOCK',
                'label' => $this->l('Title'),
                'lang'=>true,
                'type'=>'text',
                'form_group_class'=> 'position product_block',
                'validate'=>'isCleanHtml',
                'default' => $this->l('Special products'),
                'default_lang' => 'Special products',
                'showRequired' => true,
            ),
            array(
                'type'=> 'text',
                'name' => 'ETS_SPECIALP_NUMBER_PRODUCT_IN_PRODUCT',
                'label' => $this->l('Number of products to display'),
                'form_group_class'=> 'position product_block',
                'validate' => 'isUnsignedInt',
                'default' => 8,
                'desc' => $this->l('Leave blank to show all special products'),
            ),
            array(
                'type' => 'radio',
                'name' => 'ETS_SPECIALP_DISPLAY_TYPE_IN_PRODUCT',
                'label' => $this->l('Display type'),
                'form_group_class'=> 'position product_block',
                'validate' => 'isCleanHtml',
                'default' => 'slide',
                'values' => array(
                    array(
                        'id'=> 'ETS_SPECIALP_DISPLAY_TYPE_IN_PRODUCT_gird',
                        'label' => $this->l('Grid'),
                        'value'=>'gird',
                    ),
                    array(
                        'id'=> 'ETS_SPECIALP_DISPLAY_TYPE_IN_PRODUCT_slide',
                        'label' => $this->l('Slider'),
                        'value'=>'slide',
                    ),
                ),
            ),
            array(
                'type' => 'switch',
                'name' => 'ETS_SPECIALP_AUTO_PLAY_PRODUCT',
                'label' => $this->l('Auto-play slider'),
                'default' => 1,
                'validate' => 'isInt',
                'values' => array(
                    array(
                        'label' => $this->l('Yes'),
                        'id' => 'ETS_SPECIALP_AUTO_PLAY_PRODUCT_on',
                        'value' => 1,
                    ),
                    array(
                        'label' => $this->l('No'),
                        'id' => 'ETS_SPECIALP_AUTO_PLAY_PRODUCT_off',
                        'value' => 0,
                    )
                ),
                'form_group_class'=> 'position product_block',
            ),
        );
    }
    public static function getPricesDrop(
        $id_lang,
        $page_number = 0,
        $nb_products = 10,
        $count = false,
        $order_by = null,
        $order_way = null,
        $beginning = false,
        $ending = false,
        Context $context = null
    ) {
        if (!Validate::isBool($count)) {
            die(Tools::displayError());
        }

        if (!$context) {
            $context = Context::getContext();
        }
        if ($page_number < 1) {
            $page_number = 1;
        }
        if (empty($order_by) || $order_by == 'position') {
            $order_by = 'price';
        }
        if (empty($order_way)) {
            $order_way = 'DESC';
        }
        if ($order_by == 'id_product' || $order_by == 'price' || $order_by == 'date_add' || $order_by == 'date_upd') {
            $order_by_prefix = 'product_shop';
        } elseif ($order_by == 'name') {
            $order_by_prefix = 'pl';
        }
        if (!Validate::isOrderBy($order_by) || !Validate::isOrderWay($order_way)) {
            die(Tools::displayError());
        }
        $current_date = date('Y-m-d H:i:00');
        $ids_product = self::_getProductIdByDate((!$beginning ? $current_date : $beginning), (!$ending ? $current_date : $ending), $context);

        $tab_id_product = [];
        foreach ($ids_product as $product) {
            if (is_array($product)) {
                $tab_id_product[] = (int) $product['id_product'];
            } else {
                $tab_id_product[] = (int) $product;
            }
        }

        $front = true;
        if (!in_array($context->controller->controller_type, ['front', 'modulefront'])) {
            $front = false;
        }

        $sql_groups = '';
        if (Group::isFeatureActive()) {
            $groups = FrontController::getCurrentCustomerGroups();
            $sql_groups = ' AND EXISTS(SELECT 1 FROM `' . _DB_PREFIX_ . 'category_product` cp
            JOIN `' . _DB_PREFIX_ . 'category_group` cg ON (cp.id_category = cg.id_category AND cg.`id_group` ' . (count($groups) ? 'IN (' . implode(',', $groups) . ')' : '=' . (int) Group::getCurrent()->id) . ')
            WHERE cp.`id_product` = p.`id_product`)';
        }

        if ($count) {
            return Db::getInstance(_PS_USE_SQL_SLAVE_)->getValue('
            SELECT COUNT(DISTINCT p.`id_product`)
            FROM `' . _DB_PREFIX_ . 'product` p
            ' . Shop::addSqlAssociation('product', 'p') . '
            WHERE product_shop.`active` = 1
            AND product_shop.`show_price` = 1
            ' . ($front ? ' AND product_shop.`visibility` IN ("both", "catalog")' : '') . '
            ' . ((!$beginning && !$ending) ? 'AND p.`id_product` IN(' . ((is_array($tab_id_product) && count($tab_id_product)) ? implode(', ', $tab_id_product) : 0) . ')' : '') . '
            ' . $sql_groups);
        }

        if (strpos($order_by, '.') > 0) {
            $order_by = explode('.', $order_by);
            $order_by = pSQL($order_by[0]) . '.`' . pSQL($order_by[1]) . '`';
        }

        $sql = '
        SELECT
            p.*, product_shop.*, stock.out_of_stock, IFNULL(stock.quantity, 0) as quantity, pl.`description`, pl.`description_short`, pl.`available_now`, pl.`available_later`,
            IFNULL(product_attribute_shop.id_product_attribute, 0) id_product_attribute,
            pl.`link_rewrite`, pl.`meta_description`, pl.`meta_keywords`, pl.`meta_title`,
            pl.`name`, image_shop.`id_image` id_image, il.`legend`, m.`name` AS manufacturer_name,
            DATEDIFF(
                p.`date_add`,
                DATE_SUB(
                    "' . date('Y-m-d') . ' 00:00:00",
                    INTERVAL ' . (Validate::isUnsignedInt(Configuration::get('PS_NB_DAYS_NEW_PRODUCT')) ? Configuration::get('PS_NB_DAYS_NEW_PRODUCT') : 20) . ' DAY
                )
            ) > 0 AS new
        FROM `' . _DB_PREFIX_ . 'product` p
        ' . Shop::addSqlAssociation('product', 'p') . '
        LEFT JOIN `' . _DB_PREFIX_ . 'product_attribute_shop` product_attribute_shop
            ON (p.`id_product` = product_attribute_shop.`id_product` AND product_attribute_shop.`default_on` = 1 AND product_attribute_shop.id_shop=' . (int) $context->shop->id . ')
        ' . Product::sqlStock('p', 0, false, $context->shop) . '
        LEFT JOIN `' . _DB_PREFIX_ . 'product_lang` pl ON (
            p.`id_product` = pl.`id_product`
            AND pl.`id_lang` = ' . (int) $id_lang . Shop::addSqlRestrictionOnLang('pl') . '
        )
        LEFT JOIN `' . _DB_PREFIX_ . 'image_shop` image_shop
            ON (image_shop.`id_product` = p.`id_product` AND image_shop.cover=1 AND image_shop.id_shop=' . (int) $context->shop->id . ')
        LEFT JOIN `' . _DB_PREFIX_ . 'image_lang` il ON (image_shop.`id_image` = il.`id_image` AND il.`id_lang` = ' . (int) $id_lang . ')
        LEFT JOIN `' . _DB_PREFIX_ . 'manufacturer` m ON (m.`id_manufacturer` = p.`id_manufacturer`)
        WHERE product_shop.`active` = 1
        AND product_shop.`show_price` = 1
        ' . ($front ? ' AND product_shop.`visibility` IN ("both", "catalog")' : '') . '
        ' . ((!$beginning && !$ending) ? ' AND p.`id_product` IN (' . ((is_array($tab_id_product) && count($tab_id_product)) ? implode(', ', $tab_id_product) : 0) . ')' : '') . '
        ' . $sql_groups;

        if ($order_by != 'price') {
            $sql .= ' ORDER BY ' . (isset($order_by_prefix) ? pSQL($order_by_prefix) . '.' : '') . pSQL($order_by) . ' ' . pSQL($order_way);
            if($nb_products && $nb_products!==true)
                $sql .= ' LIMIT ' . (int) (($page_number - 1) * $nb_products) . ', ' . (int) $nb_products;
        }
        $result = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);

        if (!$result) {
            return false;
        }

        if ($order_by === 'price') {
            Tools::orderbyPrice($result, $order_way);
            if($nb_products && $nb_products!==true)
                $result = array_slice($result, (int) (($page_number - 1) * $nb_products), (int) $nb_products);
        }

        return Product::getProductsProperties($id_lang, $result);
    }
    protected static function _getProductIdByDate($beginning, $ending, Context $context = null, $with_combination = false)
    {
        if (!$context) {
            $context = Context::getContext();
        }

        $id_address = $context->cart->{Configuration::get('PS_TAX_ADDRESS_TYPE')};
        $ids = Address::getCountryAndState($id_address);
        $id_country = isset($ids['id_country']) ? (int) $ids['id_country'] : (int) Configuration::get('PS_COUNTRY_DEFAULT');

        return SpecificPrice::getProductIdByDate(
            $context->shop->id,
            $context->currency->id,
            $id_country,
            $context->customer->id_default_group,
            $beginning,
            $ending,
            0,
            $with_combination
        );
    }
}