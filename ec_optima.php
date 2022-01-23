<?php
if (!defined('_PS_VERSION_')) {
    exit;
}
require_once('vendor/autoload.php');
use PrestaShop\Module\Ec_Optima\Model\OptimaProductConfigModel;

class Ec_Optima extends Module
{

    const PREFIX = 'ec_optima';
    protected $models = ['OptimaProductConfigModel'];
    protected $templateFile;
    //tabs to be created in the backoffice menu
    protected $tabs = [
        [
            'name' => 'Optima zasoby',
            'className' => 'AdminOptimaProductConf',
            'active' => 1,
            'parent_class_name' => 'AdminCatalog',

        ],

    ];
protected $_hooks=array();


    public function __construct()
    {
        $this->name = 'ec_optima';
        $this->tab = 'front_features';
        $this->version = '1.7.9';
        $this->author = 'Krzysztof Mazur';
        $this->bootstrap = TRUE;
        $this->module_key = '';
        $this->displayName = $this->l('Optima konfiguracja');
        $this->description = $this->l('Optima konfiguracja');

        parent::__construct();


    }


    public function install()
    {       $modelInstance = new OptimaProductConfigModel();
            $modelInstance->createDatabase();
            $modelInstance->createMissingColumns();



        $this->addTab($this->tabs, Tab::getIdFromClassName('AdminCatalog'));

        if (parent::install()) {
            foreach ($this->_hooks as $hook) {
                if (!$this->registerHook($hook)) {
                    return FALSE;
                }
            }



            return TRUE;
        }

        return TRUE;
    }

    public function uninstall()
    {
        $this->removeTab($this->tabs);

        if (parent::uninstall()) {
            foreach ($this->_hooks as $hook) {
                if (!$this->unregisterHook($hook)) {
                    return FALSE;
                }
            }


            return TRUE;
        }

        return FALSE;
    }


    public function addTab($tabs, $id_parent = 0 )
    {
        foreach ($tabs as $tab)
        {
            $tabModel             = new Tab();
            $tabModel->module     = $this->name;
            $tabModel->active     = $tab['active'];
            $tabModel->class_name = $tab['className'];
            $tabModel->id_parent  = $id_parent;

            //tab text in each language
            foreach (Language::getLanguages(true) as $lang)
            {
                $tabModel->name[$lang['id_lang']] = $tab['name'];
            }

            $tabModel->add();

            //submenus of the tab
            if (isset($tab['childs']) && is_array($tab['childs']))
            {
                $this->addTab($tab['childs'], Tab::getIdFromClassName($tab['className']));
            }
        }
        return true;
    }

    public function removeTab($tabs)
    {
        foreach ($tabs as $tab)
        {
            $id_tab = (int) Tab::getIdFromClassName($tab["className"]);
            if ($id_tab)
            {
                $tabModel = new Tab($id_tab);
                $tabModel->delete();
            }

            if (isset($tab["childs"]) && is_array($tab["childs"]))
            {
                $this->removeTab($tab["childs"]);
            }
        }

        return true;
    }

}

