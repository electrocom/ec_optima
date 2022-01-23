<?php

namespace PrestaShop\Module\Ec_Optima\Model;


class OptimaProductConfigModel extends OptimaCustomObject
{
    function __construct($id = null, $id_lang = null, $id_shop = null)
    {

        parent::__construct($id, $id_lang, $id_shop);

    }

    public static $definition = [
        'table' => 'ec_optima_product_conf',
        'primary' => 'id_product',
        'multilang' => false,
        'fields' => [

            'id_product' => ['type' => self::TYPE_INT, 'db_type' => 'int', 'required' => true],
            'disable_sync' => ['type' => self::TYPE_INT, 'db_type' => 'int', 'validate' => 'isInt', 'required' => false],
            'disable_pack_incomplete' => ['type' => self::TYPE_INT, 'db_type' => 'int', 'validate' => 'isInt', 'required' => false],

            'TS_Mod' => [
                'type' => self::TYPE_DATE,

                'db_type' => 'datetime',
            ],
            'TS_Zal' => [
                'type' => self::TYPE_DATE,


                'db_type' => 'datetime',
            ]
        ],
    ];


    public $id_product;
    public $disable_sync;
    public $disable_pack_incomplete;
    public $TS_Mod;
    public $TS_Zal;




}
