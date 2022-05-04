# OptimaClientApi\CenaApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pobierzCeneTowaru**](CenaApi.md#pobierzcenetowaru) | **GET** /cena/ceny/{CenaId}/towary/{TwrId} | Pobiera cenę dla towaru
[**pobierzCennik**](CenaApi.md#pobierzcennik) | **GET** /ceny/cennik/{CennikId} | Pobiera Cennik
[**pobierzCennikPost**](CenaApi.md#pobierzcennikpost) | **POST** /ceny/cennik/{CennikId} | Pobiera Ceny tylko dla wybranych towarów
[**pobierzCenyTowaru**](CenaApi.md#pobierzcenytowaru) | **GET** /cena/towary/{TwrId} | Pobieranie cen określonego towaru.
[**pobierzDefCeny**](CenaApi.md#pobierzdefceny) | **GET** /cena/ceny-def | Pobieranie definicji cen.

# **pobierzCeneTowaru**
> \OptimaClientApi\Model\CennikItem pobierzCeneTowaru($cena_id, $twr_id, $skip, $limit)

Pobiera cenę dla towaru

Pobieranie ceny towaru z określonego Cennika(CennikId)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OptimaClientApi\Api\CenaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cena_id = 56; // int | Id Cennika z którego pobieramy ceny
$twr_id = 56; // int | Id Towaru dla którego pobieramy cenę
$skip = 56; // int | number of records to skip for pagination
$limit = 56; // int | maximum number of records to return

try {
    $result = $apiInstance->pobierzCeneTowaru($cena_id, $twr_id, $skip, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CenaApi->pobierzCeneTowaru: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cena_id** | **int**| Id Cennika z którego pobieramy ceny |
 **twr_id** | **int**| Id Towaru dla którego pobieramy cenę |
 **skip** | **int**| number of records to skip for pagination | [optional]
 **limit** | **int**| maximum number of records to return | [optional]

### Return type

[**\OptimaClientApi\Model\CennikItem**](../Model/CennikItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pobierzCennik**
> \OptimaClientApi\Model\CennikItem[] pobierzCennik($cennik_id, $skip, $limit)

Pobiera Cennik

Pobieranie ceny towarów dla określonej Ceny(CennikId)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OptimaClientApi\Api\CenaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cennik_id = 56; // int | Id Cennika z którego pobieramy ceny
$skip = 56; // int | number of records to skip for pagination
$limit = 56; // int | maximum number of records to return

try {
    $result = $apiInstance->pobierzCennik($cennik_id, $skip, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CenaApi->pobierzCennik: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cennik_id** | **int**| Id Cennika z którego pobieramy ceny |
 **skip** | **int**| number of records to skip for pagination | [optional]
 **limit** | **int**| maximum number of records to return | [optional]

### Return type

[**\OptimaClientApi\Model\CennikItem[]**](../Model/CennikItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pobierzCennikPost**
> \OptimaClientApi\Model\CennikItem[] pobierzCennikPost($body, $cennik_id)

Pobiera Ceny tylko dla wybranych towarów

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OptimaClientApi\Api\CenaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = array(56); // int[] | Optional description in *Markdown*
$cennik_id = 56; // int | Id Cennika z którego pobieramy ceny

try {
    $result = $apiInstance->pobierzCennikPost($body, $cennik_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CenaApi->pobierzCennikPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**int[]**](../Model/int.md)| Optional description in *Markdown* |
 **cennik_id** | **int**| Id Cennika z którego pobieramy ceny |

### Return type

[**\OptimaClientApi\Model\CennikItem[]**](../Model/CennikItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pobierzCenyTowaru**
> \OptimaClientApi\Model\CennikItem[] pobierzCenyTowaru($twr_id)

Pobieranie cen określonego towaru.

Pobieranie cen towaru

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OptimaClientApi\Api\CenaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$twr_id = 56; // int | Id Towaru dla którego pobieramy cenę

try {
    $result = $apiInstance->pobierzCenyTowaru($twr_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CenaApi->pobierzCenyTowaru: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **twr_id** | **int**| Id Towaru dla którego pobieramy cenę |

### Return type

[**\OptimaClientApi\Model\CennikItem[]**](../Model/CennikItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pobierzDefCeny**
> \OptimaClientApi\Model\CenyDefItem[] pobierzDefCeny()

Pobieranie definicji cen.

Pobieranie definicji cen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OptimaClientApi\Api\CenaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->pobierzDefCeny();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CenaApi->pobierzDefCeny: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\OptimaClientApi\Model\CenyDefItem[]**](../Model/CenyDefItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

