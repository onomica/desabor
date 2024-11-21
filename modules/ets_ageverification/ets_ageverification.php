<?php
/**
 * 2007-2024 ETS-Soft
 *
 * NOTICE OF LICENSE
 *
 * This file is not open source! Each license that you purchased is only available for 1 web site only.
 * If you want to use this file on more web sites (or projects), you need to purchase additional licenses.
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
 * @license    Valid for 1 web site (or project) for each purchase of license
 *  International Registered Trademark & Property of ETS-Soft
 */

if (!defined('_PS_VERSION_')) {
    exit;
}

use PrestaShop\PrestaShop\Core\Module\WidgetInterface;

class Ets_ageverification extends Module implements WidgetInterface
{
    public $templateFile;
    public $imageType = 'jpg';
    public $refs;
    public function __construct()
    {
        $this->name = 'ets_ageverification';
        $this->tab = 'front_office_features';
        $this->version = '1.0.5';
        $this->author = 'ETS-Soft';
        $this->need_instance = 0;
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Age Verification');
        $this->description = $this->l('Display a popup that is aimed at checking the age of your PrestaShop website’s visitors.');
$this->refs = 'https://prestahero.com/';

        $this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);
        $this->templateFile = 'module:' . $this->name . '/views/templates/front/ageverification.tpl';
    }

    public function install()
    {
        return parent::install() &&
            $this->registerHook('displayBackOfficeHeader') &&
            $this->registerHook('displayFooter') &&
            $this->registerHook('displayHeader') &&
            $this->installConfigs();
    }

    public function uninstall()
    {
        $this->cleanUploadImages();

        return parent::uninstall() && $this->uninstallConfigs();
    }

    const _ETS_IMG_DIR_ = ['uploads'];

    public function cleanUploadImages()
    {
        if (self::_ETS_IMG_DIR_) {
            foreach (self::_ETS_IMG_DIR_ as $dir) {
                $this->removeTree(_PS_IMG_DIR_ . $this->name . DIRECTORY_SEPARATOR . $dir);
            }
        }

        return true;
    }

    public function removeTree($dir)
    {
        if (@is_dir($dir)) {
            $files = array_diff(scandir($dir), array('.', '..'));
            foreach ($files as $file) {
                (is_dir(($each = $dir . DIRECTORY_SEPARATOR . $file))) ? $this->removeTree($each) : @unlink($each);
            }
            @rmdir($dir);
        }

        return true;
    }

    public function installConfigs()
    {
        if ($configs = $this->getConfigs()) {
            $languages = Language::getLanguages(false);
            foreach ($configs as $key => $config) {
                if (!isset($config['default']))
                    continue;
                if (isset($config['lang']) && $config['lang']) {
                    $values = [];
                    if ($languages) {
                        foreach ($languages as $l) {
                            $values[$l['id_lang']] = $config['default'];
                        }
                    }
                    Configuration::updateValue($key, $values, true);
                } else {
                    if (trim($config['default']) !== '' && isset($config['type']) && $config['type'] == 'file') {
                        $folder = isset($config['folder']) ? $config['folder'] : '';
                        $file_dest = _PS_IMG_DIR_ . $this->name . '/' . ($folder !== '' ? $folder : 'uploads') . '/';
                        if (!is_dir($file_dest))
                            @mkdir($file_dest, 0755, true);
                        @copy($this->local_path . 'views/img/' . $config['default'], $file_dest . $config['default']);
                    }
                    Configuration::updateValue($key, $config['default'], true);
                }
            }
        }

        return true;
    }

    public function uninstallConfigs()
    {
        if ($configs = $this->getConfigs()) {
            foreach ($configs as $key => $config) {
                Configuration::deleteByName($key);
                unset($config);
            }
        }

        return true;
    }

    static $cache_configs;

    public function getConfigs()
    {
        if (!self::$cache_configs) {
            $switch_values = array(
                array(
                    'id' => 'active_on',
                    'value' => true,
                    'label' => $this->l('Enabled')
                ),
                array(
                    'id' => 'active_off',
                    'value' => false,
                    'label' => $this->l('Disabled')
                )
            );
            self::$cache_configs = [
                'ETS_AV_ENABLED' => array(
                    'label' => $this->l('Enabled'),
                    'name' => 'ETS_AV_ENABLED',
                    'type' => 'switch',
                    'is_bool' => true,
                    'values' => $switch_values,
                    'default' => 1,
                ),
                'ETS_AV_ICON' => array(
                    'label' => $this->l('Icon'),
                    'name' => 'ETS_AV_ICON',
                    'type' => 'file',
                    'folder' => 'uploads',
                    'delete_url' => $this->currentIndex() . '&field=ets_av_icon&deleted=1',
                    'form_group_class' => 'ets_av_thumbnail',
                    'default' => 'eighteen.png'
                ),
                'ETS_AV_TITLE' => array(
                    'label' => $this->l('Title'),
                    'name' => 'ETS_AV_TITLE',
                    'type' => 'text',
                    'lang' => true,
                    'required' => true,
                    'validate' => 'isCleanHtml',
                    'default' => $this->l('Age verification'),
                    'size' => 255,
                ),
                'ETS_AV_DESCRIPTION' => array(
                    'label' => $this->l('Description'),
                    'name' => 'ETS_AV_DESCRIPTION',
                    'type' => 'textarea',
                    'lang' => true,
                    'autoload_rte' => true,
                    'validate' => 'isCleanHtml',
                    'default' => $this->l('Please verify that you are 18 years old or older to enter this site')
                ),
                'ETS_AV_VERIFICATION_TYPE' => array(
                    'label' => $this->l('Verification type'),
                    'name' => 'ETS_AV_VERIFICATION_TYPE',
                    'type' => 'radio',
                    'values' => [
                        [
                            'id' => 'birthdate',
                            'label' => $this->l('By birth date'),
                            'value' => 'birthdate'
                        ],
                        [
                            'id' => 'their_self',
                            'label' => $this->l('By customers themselves'),
                            'value' => 'their_self'
                        ]
                    ],
                    'default' => 'birthdate'
                ),
                'ETS_AV_MINIMUM_AGE' => [
                    'label' => $this->l('Minimum age'),
                    'name' => 'ETS_AV_MINIMUM_AGE',
                    'type' => 'text',
                    'default' => 18,
                    'col' => 3,
                    'required' => true,
                    'suffix' => $this->l('years old'),
                    'validate' => 'isUnsignedInt',
                ],
                'ETS_AV_SUBMIT_LABEL_COLOR' => array(
                    'label' => $this->l('Submit label color'),
                    'name' => 'ETS_AV_SUBMIT_LABEL_COLOR',
                    'type' => 'color',
                    'validate' => 'isColor',
                    'default' => '#ffffff',
                    'form_group_class' => 'ets_av_color',
                ),
                'ETS_AV_SUBMIT_BACKGROUND_COLOR' => array(
                    'label' => $this->l('Submit background color'),
                    'name' => 'ETS_AV_SUBMIT_BACKGROUND_COLOR',
                    'type' => 'color',
                    'validate' => 'isColor',
                    'default' => '#24b9d7',
                    'form_group_class' => 'ets_av_color',
                ),
                'ETS_AV_SUBMIT_LABEL_HOVER' => array(
                    'label' => $this->l('Submit label color when hover'),
                    'name' => 'ETS_AV_SUBMIT_LABEL_HOVER',
                    'type' => 'color',
                    'validate' => 'isColor',
                    'default' => '#ffffff',
                    'form_group_class' => 'ets_av_color',
                ),
                'ETS_AV_SUBMIT_BACKGROUND_HOVER' => array(
                    'label' => $this->l('Submit background when hover'),
                    'name' => 'ETS_AV_SUBMIT_BACKGROUND_HOVER',
                    'type' => 'color',
                    'validate' => 'isColor',
                    'default' => '#1d93ab',
                    'form_group_class' => 'ets_av_color',
                ),
            ];

            $image = trim(Configuration::get('ETS_AV_ICON'));
            if ($image !== '' && @file_exists(_PS_IMG_DIR_ . $this->name . '/uploads/' . $image)) {
                self::$cache_configs['ETS_AV_ICON']['image'] = ImageManager::thumbnail(
                    _PS_IMG_DIR_ . $this->name . '/uploads/' . $image,
                    'ets_av_icon_' . $image,
                    150,
                    $this->imageType,
                    true,
                    true
                );
            }
        }

        return self::$cache_configs;
    }

    public function getAssignConfigs(&$assign)
    {
        if ($configs = $this->getConfigs()) {
            foreach ($configs as $key => $config) {
                if (isset($config['lang']) && $config['lang'])
                    $assign[$key] = Configuration::get($key, $this->context->language->id);
                else
                    $assign[$key] = Configuration::get($key);
            }
        }
        return $assign;
    }

    public function currentIndex($conf = 0, $token = true)
    {
        return $this->context->link->getAdminLink('AdminModules', $token) . ($conf > 0 ? '&conf=' . $conf : '') . '&configure=' . $this->name;
    }

    public function getContent()
    {
        $this->postProcess();
        $this->setMedia();

        return $this->renderForm() . $this->displayIframe();
    }

    public function getConfigForm()
    {
        return array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Settings'),
                    'icon' => 'icon-cogs',
                ),
                'input' => $this->getConfigs(),
                'submit' => array(
                    'title' => $this->l('Save'),
                ),
            ),
        );
    }

    public function getConfigFormValues($submit)
    {
        $configs = $this->getConfigs();
        $fields = [];
        $languages = Language::getLanguages(false);
        if (Tools::isSubmit($submit)) {
            if ($configs) {
                foreach ($configs as $key => $config) {
                    if (isset($config['lang']) && $config['lang']) {
                        if ($languages)
                            foreach ($languages as $l)
                                $fields[$key][$l['id_lang']] = Tools::getValue($key . '_' . $l['id_lang']);
                    } elseif (isset($config['type']) && $config['type'] == 'switch') {
                        $fields[$key] = Tools::getValue($key) ? 1 : 0;
                    } else
                        $fields[$key] = Tools::getValue($key);
                }
            }
        } else {
            if ($configs) {
                foreach ($configs as $key => $config) {
                    if (isset($config['lang']) && $config['lang']) {
                        if ($languages)
                            foreach ($languages as $l)
                                $fields[$key][$l['id_lang']] = Configuration::get($key, $l['id_lang']);
                    } else
                        $fields[$key] = Configuration::get($key);
                }
            }
        }

        return $fields;
    }

    public function postProcess()
    {
        if (Tools::isSubmit('saveConfig'))
            $this->postConfig();
    }

    const DEFAULT_MAX_SIZE = 104857600;

    public function postConfig()
    {
        $configs = $this->getConfigs();
        $id_default_lang = Configuration::get('PS_LANG_DEFAULT');
        $languages = Language::getLanguages(false);
        if ($configs) {
            foreach ($configs as $key => $config) {
                if (isset($config['lang']) && $config['lang']) {
                    if (isset($config['required']) && $config['required'] && trim(Tools::getValue($key . '_' . $id_default_lang)) == '')
                        $this->_errors[] = $config['label'] . ' ' . $this->l('is required');
                    elseif ($languages) {
                        foreach ($languages as $l) {
                            if (($field_value = trim(Tools::getValue($key . '_' . $l['id_lang']))) !== '') {
                                if (!Validate::isCleanHtml($field_value)) {
                                    $this->_errors[] = sprintf($this->l('%s is invalid (in language "%s")'), $config['label'], $config['size'], $l['name']);
                                } elseif (isset($config['size']) && (int)$config['size'] > 0 && Tools::strlen($field_value) > (int)$config['size']) {
                                    $this->_errors[] = sprintf($this->l('The %s should not be longer than %s characters (in language "%s")'), Tools::strtolower($config['label']), $config['size'], $l['name']);
                                }
                            }
                        }
                    }
                } elseif (isset($config['type']) && trim($config['type']) == 'file') {
                    $folder = isset($config['folder']) ? $config['folder'] : '';
                    $file_dest = _PS_IMG_DIR_ . $this->name . '/' . ($folder !== '' ? $folder : 'uploads') . '/';
                    if (!is_dir($file_dest))
                        @mkdir($file_dest, 0755, true);
                    if (!is_dir($file_dest))
                        $this->_errors[] = sprintf($this->l('The directory "%s" does not exist.'), $file_dest);
                    $post_content_size = self::getServerVars('CONTENT_LENGTH');
                    if (($post_max_size = self::getPostMaxSizeBytes()) && ($post_content_size > $post_max_size)) {
                        $this->_errors[] = sprintf($this->l('The uploaded file(s) exceeds the post_max_size directive in php.ini (%s > %s)'), self::formatBytes($post_content_size), self::formatBytes($post_max_size));
                    } elseif (!@is_writable($file_dest) && !empty($_FILES[$key]['name'])) {
                        $this->_errors[] = sprintf($this->l('The directory "%s" is not writable.'), $file_dest);
                    } elseif (isset($config['required']) && $config['required'] && empty($_FILES[$key]['name'])) {
                        $this->_errors[] = $config['label'] . ' ' . $this->l('is required');
                    } elseif (isset($_FILES[$key]) && !empty($_FILES[$key]['name'])) {
                        if ($uploadError = $this->checkUploadError($_FILES[$key]['error'], $_FILES[$key]['name'])) {
                            $this->_errors[] = $uploadError;
                        } elseif ($_FILES[$key]['size'] > $post_max_size) {
                            $this->_errors[] = sprintf($this->l('File is too large. Maximum size allowed: %sMb'), self::formatBytes($post_max_size));
                        } elseif ($_FILES[$key]['size'] > self::DEFAULT_MAX_SIZE) {
                            $this->_errors[] = sprintf($this->l('File is too big. Current size is %1s, maximum size is %2s.'), $_FILES[$key]['size'], self::DEFAULT_MAX_SIZE);
                        } else {
                            $type = Tools::strtolower(Tools::substr(strrchr($_FILES[$key]['name'], '.'), 1));
                            if (!in_array($type, array('jpg', 'gif', 'jpeg', 'png'))) {
                                $this->_errors[] = sprintf($this->l('File "%s" type is not allowed'), $_FILES[$key]['name']);
                            }
                        }
                    }
                } else {
                    $field_value = Tools::getValue($key);
                    if (isset($config['required']) && $config['required'] && !is_array($field_value) && trim($field_value) == '') {
                        $this->_errors[] = $config['label'] . ' ' . $this->l('is required');
                    } elseif (isset($config['validate']) && $config['validate'] && $field_value) {
                        $validate = trim($config['validate']);
                        if (method_exists('Validate', $validate) && !Validate::$validate($field_value))
                            $this->_errors[] = $config['label'] . ' ' . $this->l('is invalid');
                    }
                }
            }
            if (count($this->_errors) < 1) {
                foreach ($configs as $key => $config) {
                    if (isset($config['lang']) && $config['lang']) {
                        $values = [];
                        if ($languages) {
                            foreach ($languages as $l)
                                $values[$l['id_lang']] = Tools::getValue($key . '_' . $l['id_lang']);
                        }
                        Configuration::updateValue($key, $values, true);
                    } elseif (isset($config['type']) && $config['type'] == 'switch') {
                        Configuration::updateValue($key, Tools::getValue($key) ? 1 : 0);
                    } elseif (isset($config['type']) && $config['type'] == 'file') {

                        $folder = isset($config['folder']) ? $config['folder'] : '';
                        $file_dest = _PS_IMG_DIR_ . $this->name . '/' . ($folder !== '' ? $folder : 'uploads') . '/';
                        $linkOldFile = $file_dest . trim(Configuration::get($key));

                        if (!empty($_FILES[$key]['name'])) {
                            $salt = Tools::strtolower(Tools::passwdGen(20));
                            $type = Tools::strtolower(Tools::substr(strrchr($_FILES[$key]['name'], '.'), 1));
                            $image = $salt . '.' . $type;
                            $file_name = $file_dest . $image;

                            if (@file_exists($file_name)) {
                                $this->_errors[] = $this->l('File name already exists. Try to rename the file and upload again');
                            } else {
                                $image_size = @getimagesize($_FILES[$key]['tmp_name']);
                                if (isset($_FILES[$key]) && !empty($_FILES[$key]['tmp_name']) && !empty($image_size) && in_array($type, array('jpg', 'gif', 'jpeg', 'png'))) {
                                    if (!($temp_name = tempnam(_PS_TMP_IMG_DIR_, 'PS')) || !@move_uploaded_file($_FILES[$key]['tmp_name'], $temp_name)) {
                                        $this->_errors[] = $this->l('An error occurred while uploading the image.');
                                    } elseif (!ImageManager::resize($temp_name, $file_name, null, null, $type))
                                        $this->_errors[] = sprintf($this->l('An error occurred while copying this image: %s'), Tools::stripslashes($image));
                                }
                                if (isset($temp_name))
                                    @unlink($temp_name);
                                if (!$this->_errors) {
                                    Configuration::updateValue($key, $image, true);
                                    if (@file_exists($linkOldFile))
                                        @unlink($linkOldFile);
                                }
                            }
                        } elseif ((int)Tools::getValue($key . '_REMOVED') > 0 && @file_exists($linkOldFile)) {
                            Configuration::updateValue($key, '');
                            @unlink($linkOldFile);
                        }
                    } else
                        Configuration::updateValue($key, Tools::getValue($key));
                }
            }
        } else
            $this->_errors[] = $this->l('Unknown error.');

        if (count($this->_errors) < 1)
            Tools::redirect($this->currentIndex(4));

        $this->context->controller->errors = $this->_errors;
    }

    public function renderForm()
    {
        $helper = new HelperForm();

        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $helper->module = $this;
        $helper->default_form_language = $this->context->language->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG', 0);

        $helper->identifier = $this->identifier;
        $helper->submit_action = 'saveConfig';
        $helper->currentIndex = $this->currentIndex(0, false);
        $helper->token = Tools::getAdminTokenLite('AdminModules');

        $helper->tpl_vars = array(
            'fields_value' => $this->getConfigFormValues($helper->submit_action),
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id,
            'name_controller' => 'ets_av_verification',
            'widget' => $this->displayWidget()
        );

        return $helper->generateForm(array($this->getConfigForm()));
    }

    public static function formatFileName($file_name)
    {
        return preg_replace('/[\_\(\)\s\%\+]+/', '-', $file_name);
    }

    public static function formatBytes($bytes, $precision = 2)
    {
        $units = array('B', 'KB', 'MB', 'GB', 'TB');

        $bytes = max($bytes, 0);
        $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
        $pow = min($pow, count($units) - 1);
        $bytes /= pow(1024, $pow);

        return round($bytes, $precision) . ' ' . $units[$pow];
    }

    public static function getServerVars($var)
    {
        return isset($_SERVER[$var]) ? $_SERVER[$var] : '';
    }

    public static function getPostMaxSizeBytes()
    {
        $postMaxSizeList = array(@ini_get('post_max_size'), @ini_get('upload_max_filesize'), (int)Configuration::get('PS_ATTACHMENT_MAXIMUM_SIZE') . 'M');
        $ik = 0;
        foreach ($postMaxSizeList as &$max_size) {
            $bytes = (int)trim($max_size);
            $last = Tools::strtolower($max_size[Tools::strlen($max_size) - 1]);
            switch ($last) {
                case 'g':
                    $bytes *= 1024;
                case 'm':
                    $bytes *= 1024;
                case 'k':
                    $bytes *= 1024;
            }
            if ($bytes == '') {
                unset($postMaxSizeList[$ik]);
            } else
                $max_size = $bytes;
            $ik++;
        }

        return min($postMaxSizeList);
    }

    public function checkUploadError($error_code, $file_name)
    {
        switch ($error_code) {
            case 1:
                return sprintf($this->l('File "%1s" uploaded exceeds %2s'), $file_name, ini_get('upload_max_filesize'));
            case 2:
                return sprintf($this->l('The uploaded file exceeds %s'), ini_get('post_max_size'));
            case 3:
                return sprintf($this->l('Uploaded file "%s" was only partially uploaded'), $file_name);
            case 6:
                return $this->l('Missing temporary folder');
            case 7:
                return sprintf($this->l('Failed to write file "%s" to disk'), $file_name);
            case 8:
                return sprintf($this->l('A PHP extension stopped the file "%s" to upload'), $file_name);
        }
        return false;
    }

    public function displayWidget()
    {
        return $this->renderWidget(null, ['admin' => true]);
    }

    public function setMedia()
    {
        if (Tools::getValue('configure') == $this->name) {
            $this->context->controller->addJS($this->_path . 'views/js/function.js');
            $this->context->controller->addJS($this->_path . 'views/js/back.js');
            $this->context->controller->addCSS($this->_path . 'views/css/back.css');
        }
    }

    public function hookDisplayBackOfficeHeader()
    {
        if (Tools::getValue('configure') == $this->name) {
            $this->context->controller->addJS($this->_path . 'views/js/function.js');
            $this->context->controller->addJS($this->_path . 'views/js/back.js');
            $this->context->controller->addCSS($this->_path . 'views/css/back.css');
        }
    }

    public function hookDisplayHeader()
    {
        $this->context->controller->addJS($this->_path . 'views/js/function.js');
        $this->context->controller->addJS($this->_path . 'views/js/front.js');
        $this->context->controller->addCSS($this->_path . 'views/css/front.css');
    }

    public function renderWidget($hookName = null, array $configuration = [])
    {
        if (!(isset($configuration['admin']) && $configuration['admin']) && ($hookName == null || (int)Configuration::get('ETS_AV_ENABLED') < 1 || isset($this->context->cookie->ets_av_allow_website) && $this->context->cookie->ets_av_allow_website))
            return '';

	    $this->smarty->assign($this->getWidgetVariables($hookName, $configuration));

        return $this->fetch($this->templateFile);
    }

    public function getWidgetVariables($hookName, array $configuration)
    {
        $isAdmin = isset($configuration['admin']) && $configuration['admin'];
        $configuration['positionAt'] = $hookName;
        $configuration['action'] = $isAdmin ? '' : $this->context->link->getModuleLink($this->name, 'ajax', ['token' => Tools::getToken(false)], Configuration::get('PS_SSL_ENABLED') && Configuration::get('PS_SSL_ENABLED_EVERYWHERE'));

        $this->getAssignConfigs($configuration);
        if (isset($configuration['ETS_AV_ICON']) && trim($configuration['ETS_AV_ICON'])) {
            $configuration['ETS_AV_ICON_URL'] = $this->context->link->getMediaLink(_PS_IMG_ . $this->name . '/uploads/' . $configuration['ETS_AV_ICON']);
        }
        if ($isAdmin || isset($configuration['ETS_AV_VERIFICATION_TYPE']) && trim($configuration['ETS_AV_VERIFICATION_TYPE']) == 'birthdate') {
            $configuration['months'] = $this->dateMonths();
            $configuration['days'] = Tools::dateDays();
            $configuration['years'] = Tools::dateYears();
        }

        return $configuration;
    }

    public  function dateMonths()
    {
        $tab = [];

        $tab[1] = $this->l('January');
        $tab[2] = $this->l('February');
        $tab[3] = $this->l('March');
        $tab[4] = $this->l('April');
        $tab[5] = $this->l('May');
        $tab[6] = $this->l('June');
        $tab[7] = $this->l('July');
        $tab[8] = $this->l('August');
        $tab[9] = $this->l('September');
        $tab[10] = $this->l('October');
        $tab[11] = $this->l('November');
        $tab[12] = $this->l('December');

        return $tab;
    }

    public function displayIframe()
    {
        switch ($this->context->language->iso_code) {
            case 'en':
                $url = 'https://cdn.prestahero.com/prestahero-product-feed?utm_source=feed_' . $this->name . '&utm_medium=iframe';
                break;
            case 'it':
                $url = 'https://cdn.prestahero.com/it/prestahero-product-feed?utm_source=feed_' . $this->name . '&utm_medium=iframe';
                break;
            case 'fr':
                $url = 'https://cdn.prestahero.com/fr/prestahero-product-feed?utm_source=feed_' . $this->name . '&utm_medium=iframe';
                break;
            case 'es':
                $url = 'https://cdn.prestahero.com/es/prestahero-product-feed?utm_source=feed_' . $this->name . '&utm_medium=iframe';
                break;
            default:
                $url = 'https://cdn.prestahero.com/prestahero-product-feed?utm_source=feed_' . $this->name . '&utm_medium=iframe';
        }
        $this->smarty->assign(
            array(
                'url_iframe' => $url
            )
        );
        return $this->display(__FILE__, 'iframe.tpl');
    }
}
