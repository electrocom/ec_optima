<?php
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;



use PrestaShop\Module\Ec_Optima\Model\OptimaProductConfigModel;
/**
 * Class Ec_OptimaGenerateModuleFrontController
 */
class Ec_OptimaGenerateModuleFrontController extends ModuleFrontController
{
    /** @var bool If set to true, will be redirected to authentication page */
    public $auth = false;

    /** @var bool */
    public $ajax;

    private $formatxml=null;
    private $id_customer=0;

public function postProcess() {
        parent::postProcess();



    }

public function display()
{
echo "Ec_OptimaGenerateModuleFrontController";
    $apiInstance = new OptimaClientApi\Api\AtrybutyTowaruApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
        new GuzzleHttp\Client()
    );
    $twr_id = 56; // int | Id Towaru dla którego pobieramy atrybut
    $attr_kod = "attr_kod_example"; // string | Kod Atrybutu

    try {
        $result = $apiInstance->pobierzAtrybut($twr_id, $attr_kod);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling AtrybutyTowaruApi->pobierzAtrybut: ', $e->getMessage(), PHP_EOL;
    }


die();
}




}