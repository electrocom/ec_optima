<?php

use PrestaShop\Module\Ec_Optima\Model\OptimaProductConfigModel;
class AdminOptimaProductConfController extends ModuleAdminController
{
public static $definition;
public $yesno;
    protected $extra_params = '';
    public function __construct()
    {



        $this->table      = 'ec_optima_product_conf';

        $this->identifier = 'id_product';
        $this->className  = 'PrestaShop\Module\Ec_Optima\Model\OptimaProductConfigModel';

        $this->displayName=  Context::getContext()->getTranslator()->trans ('Konfiguracja produktów Optima');
        $this->toolbar_title=Context::getContext()->getTranslator()->trans ('Konfiguracja produktów Optima');

     $this->addRowAction('edit');
       // $this->addRowAction('delete');
        $this->addRowAction('add');
     //   $this->yesno=array(array('name'=> ))

        $this->fields_list = array(
          //  'id_optima_product_conf' => array('title' =>Context::getContext()->getTranslator()->trans ('ID'),  'width' =>  1),
            'id_product' => array('title' => Context::getContext()->getTranslator()->trans  ('ID produktu') ,'width' =>  20),
            'reference' => array('title' => Context::getContext()->getTranslator()->trans  ('Kod produktu') ,'width' =>  60),
            'disable_pack_incomplete' => array('title' => Context::getContext()->getTranslator()->trans  ('Wył niekompl. zest.'),'type'=>'bool','align'=>'center'),
            'disable_sync' => array('title' => Context::getContext()->getTranslator()->trans  ('Wył Sync Optima'),'type'=>'bool','align'=>'center' ),

        );
        $this->fields_form= [
            'legend' => [
                'title' => Context::getContext()->getTranslator()->trans ('Settings'),
            ],
            'input' => [


                array(
                    'type' => 'switch',
                    'label' => Context::getContext()->getTranslator()->trans('Wyłącz niekompletne. zestawy.'),
                    'name' => 'disable_pack_incomplete',
                   // 'desc' => $this->l('Enable grades on products.'),
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
                ,
                array(
                    'type' => 'switch',
                    'label' => Context::getContext()->getTranslator()->trans('Wyłącz synchronizację  Optima=>Prestashop'),
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





        $this->_use_found_rows = false;
        $this->bootstrap  = true;





        parent::__construct();
        $this->_select = 'pp.reference,pp.id_product id_product  ';
        $this->_join .= '  right join ps_product pp ON pp.id_product=a.id_product     ';

    }
public function init(){
        parent::init();
}

public function initProcess()
{

    if (isset($_GET['update' . $this->table], $_GET[$this->identifier]) ) {

        $sql='
			SELECT `' . bqSQL($this->identifier) . '` as id
			FROM `' . _DB_PREFIX_ . bqSQL($this->table) . '` e
			WHERE e.`id_product` = ' . (int) $_GET[$this->identifier];
        $row = Db::getInstance()->getRow($sql
            ,
            false
        );


     if( !isset($row['id'])){

         $OptimaProductConfigModel = new OptimaProductConfigModel();
        $OptimaProductConfigModel->id_product=$_GET[$this->identifier];
         $OptimaProductConfigModel->disable_pack_incomplete=0;
         $OptimaProductConfigModel->disable_sync=0;
         $OptimaProductConfigModel->add(1,1);

     }





    }

        parent::initProcess();
}


public function giveMyCallBack($id_ceneo){
        return '<a target="_blank" href="https://ceneo.pl/'.$id_ceneo.'">'.$id_ceneo.'</a>';

}








}

