# OptimaClientApi\AtrybutyTowaruApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pobierzAtrybut**](AtrybutyTowaruApi.md#pobierzatrybut) | **GET** /atrybuty-towaru/towary/{TwrId}/atrybut-towaru/{AttrKod} | Pobieranie atrybutów
[**ustawAtrybut**](AtrybutyTowaruApi.md#ustawatrybut) | **PUT** /atrybuty-towaru/towary | Ustawianie atrybutu towaru.

# **pobierzAtrybut**
> \OptimaClientApi\Model\AtrybutTowaruItem pobierzAtrybut($twr_id, $attr_kod)

Pobieranie atrybutów

Pobiera atrybut

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

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
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **twr_id** | **int**| Id Towaru dla którego pobieramy atrybut |
 **attr_kod** | **string**| Kod Atrybutu |

### Return type

[**\OptimaClientApi\Model\AtrybutTowaruItem**](../Model/AtrybutTowaruItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ustawAtrybut**
> ustawAtrybut($body)

Ustawianie atrybutu towaru.

Ustawia atrybut

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OptimaClientApi\Api\AtrybutyTowaruApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = array(new \OptimaClientApi\Model\AtrybutTowaruItem()); // \OptimaClientApi\Model\AtrybutTowaruItem[] | Wartość którą ustawiamy atrybutowi

try {
    $apiInstance->ustawAtrybut($body);
} catch (Exception $e) {
    echo 'Exception when calling AtrybutyTowaruApi->ustawAtrybut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OptimaClientApi\Model\AtrybutTowaruItem[]**](../Model/AtrybutTowaruItem.md)| Wartość którą ustawiamy atrybutowi |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

