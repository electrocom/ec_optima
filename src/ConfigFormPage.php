<?php
namespace PrestaShop\Module\Ec_Optima;

use AdminController;

use Configuration;
use HelperForm;
use Tools;
use Validate;
use Context;
use Tab;

class ConfigFormPage{
private $module;
private $fieldsForm;
private $fields_value;
private $tab;

public function __construct($module)
{
    $this->module=$module;
    $this->tab=new Tab(Context::getContext()->controller->id);

    // Init Fields form array
    $this->fieldsForm[0]['form'] = [
        'legend' => [
            'title' => Context::getContext()->getTranslator()->trans ('Settings'),
        ],
        'input' => [
            array(
                'type' => 'switch',
                'label' => Context::getContext()->getTranslator()->trans('Wył niekompl. zest.'),
                    'name' => 'disable_pack_incomplete',
                //  'desc' => $this->l('Enable grades on products.'),
                'values' => array(
                    array(
                        'id' => 'active_1',
                        'value' => 1,
                        'label' => Context::getContext()->getTranslator()->trans('Enabled')
                    ),
                    array(
                        'id' => 'active_0',
                        'value' => 0,
                        'label' => Context::getContext()->getTranslator()->trans('Disabled')
                    ),

                ),
            ),
            array(
                'type' => 'switch',
                'label' => Context::getContext()->getTranslator()->trans('Sync Optima=>Prestashop'),
                'name' => 'disable_sync',
                //  'desc' => $this->l('Enable grades on products.'),
                'values' => array(
                    array(
                        'id' => 'active_1',
                        'value' => 1,
                        'label' => Context::getContext()->getTranslator()->trans('Enabled')
                    ),
                    array(
                        'id' => 'active_0',
                        'value' => 0,
                        'label' => Context::getContext()->getTranslator()->trans('Disabled')
                    ),

                ),
            )
        ],

        'submit' => [
            'title' => Context::getContext()->getTranslator()->trans ('Save'),
            'class' => 'btn btn-default pull-right'
        ]
    ];
}

    public function getContent()
    {
        $output = null;

        if (Tools::isSubmit('submit'.$this->module->name)) {

            $moduleConfigValues = $this->getDefinedValues();


            foreach ($moduleConfigValues as $value) {
                $myModuleName = strval(Tools::getValue($value['name']  ));
                if (!$myModuleName || empty($myModuleName)
                ) {
                    $output .= $this->module->displayError(Context::getContext()->getTranslator()->trans ('Invalid Configuration value:'. $value['label']));
                    $this->fields_value[$value['name']]=$myModuleName;
                } else {
                    Configuration::updateValue($value['name'], $myModuleName);
                    $this->fields_value[$value['name']]=$myModuleName;
                    $output .= $this->module->displayConfirmation(Context::getContext()->getTranslator()->trans ('Settings updated'));
                }
                                                         }
        }



        $moduleConfigValues = $this->getDefinedValues();
        foreach ($moduleConfigValues as $value) {

            $this->fields_value[$value['name']]= Configuration::get($value['name']);
        }

        return $output.$this->displayForm();
    }


    public function displayForm()
    {
        // Get default language
        $defaultLang = (int)Configuration::get('PS_LANG_DEFAULT');

        $tabname=$this->tab->class_name;

        $helper = new HelperForm();

        // Module, token and currentIndex
        $helper->module = $this->module;
        $helper->name_controller = $this->module->name;
        $helper->token = Tools::getAdminTokenLite($tabname);
        $helper->currentIndex = AdminController::$currentIndex.'&'.$this->module->name;

        // Language
        $helper->default_form_language = $defaultLang;
        $helper->allow_employee_form_lang = $defaultLang;

        // Title and toolbar
        $helper->title = $this->module->displayName;
        $helper->show_toolbar = true;        // false -> remove toolbar
        $helper->toolbar_scroll = true;      // yes - > Toolbar is always visible on the top of the screen.
        $helper->submit_action = 'submit'.$this->module->name;
$helper->
        $helper->toolbar_btn = [
            'save' => [
                'desc' => Context::getContext()->getTranslator()->trans ('Save'),
                'href' => AdminController::$currentIndex.'&save'.$this->module->name.
                    '&token='.Tools::getAdminTokenLite($tabname),
            ],
            'back' => [
                'href' => AdminController::$currentIndex.'&token='.Tools::getAdminTokenLite($tabname),
                'desc' => Context::getContext()->getTranslator()->trans ('Back to list')
            ]
        ];


        $helper->fields_value=$this->fields_value;

        return $helper->generateForm($this->fieldsForm);
    }


    private function getDefinedValues(){

return $this->fieldsForm[0]['form']['input'];

}

}