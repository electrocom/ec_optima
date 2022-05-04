# OptimaClientApi\MagazynApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pobierzDefMagazyny**](MagazynApi.md#pobierzdefmagazyny) | **GET** /magazyn/magazyny-def | Pobiera listę magazynów
[**pobierzIloscTowaru**](MagazynApi.md#pobierzilosctowaru) | **POST** /stany-magazynowe/ilosc-towaru | Pobieranie stanu magazynowego
[**pobierzStanMagazynowyDlaTowaru**](MagazynApi.md#pobierzstanmagazynowydlatowaru) | **GET** /stany-magazynowe/towary/{TwrId}/Magazyn/{MagId} | Pobiera stan magazynowy towaru
[**pobierzStanyMag**](MagazynApi.md#pobierzstanymag) | **GET** /stany-magazynowe/magazyn/{MagId} | Pobieranie stanu magazynowego
[**pobierzStanyMagPost**](MagazynApi.md#pobierzstanymagpost) | **POST** /stany-magazynowe/magazyn/{MagId} | Pobieranie stanu magazynowego

# **pobierzDefMagazyny**
> \OptimaClientApi\Model\MagazynItem[] pobierzDefMagazyny()

Pobiera listę magazynów

Pobierz listę magazynów

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OptimaClientApi\Api\MagazynApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->pobierzDefMagazyny();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MagazynApi->pobierzDefMagazyny: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\OptimaClientApi\Model\MagazynItem[]**](../Model/MagazynItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pobierzIloscTowaru**
> \OptimaClientApi\Model\IloscTowaruItem[] pobierzIloscTowaru($body, $mag_id, $dni, $skip, $limit)

Pobieranie stanu magazynowego

Pobiera dostępną ilość towaru z wybranych magazynów

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OptimaClientApi\Api\MagazynApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = array(56); // int[] | Lista TwrId dla których chcemy pobrać cenę
$mag_id = array(new \OptimaClientApi\Model\null[]()); // null[] | Lista magazynów  z których sumujemy dostępną ilość towaru
$dni = 56; // int | Produkty których stan magazynowych zmienił się w ciągu X ostatnich dni
$skip = 56; // int | number of records to skip for pagination
$limit = 56; // int | maximum number of records to return

try {
    $result = $apiInstance->pobierzIloscTowaru($body, $mag_id, $dni, $skip, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MagazynApi->pobierzIloscTowaru: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**int[]**](../Model/int.md)| Lista TwrId dla których chcemy pobrać cenę |
 **mag_id** | [**null[]**](../Model/.md)| Lista magazynów  z których sumujemy dostępną ilość towaru |
 **dni** | **int**| Produkty których stan magazynowych zmienił się w ciągu X ostatnich dni | [optional]
 **skip** | **int**| number of records to skip for pagination | [optional]
 **limit** | **int**| maximum number of records to return | [optional]

### Return type

[**\OptimaClientApi\Model\IloscTowaruItem[]**](../Model/IloscTowaruItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pobierzStanMagazynowyDlaTowaru**
> \OptimaClientApi\Model\IloscItem pobierzStanMagazynowyDlaTowaru($twr_id, $mag_id)

Pobiera stan magazynowy towaru

Pobieranie stanu magazynowego dla pojedńczego towaru z określonego magazynu

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OptimaClientApi\Api\MagazynApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$twr_id = 56; // int | Id Towaru dla którego pobieramy dostępną ilość
$mag_id = 56; // int | Id Magazynu

try {
    $result = $apiInstance->pobierzStanMagazynowyDlaTowaru($twr_id, $mag_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MagazynApi->pobierzStanMagazynowyDlaTowaru: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **twr_id** | **int**| Id Towaru dla którego pobieramy dostępną ilość |
 **mag_id** | **int**| Id Magazynu |

### Return type

[**\OptimaClientApi\Model\IloscItem**](../Model/IloscItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pobierzStanyMag**
> \OptimaClientApi\Model\IloscItem[] pobierzStanyMag($mag_id, $dni, $twr_ids, $skip, $limit)

Pobieranie stanu magazynowego

Pobiera stany magazynowe towarów

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OptimaClientApi\Api\MagazynApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mag_id = 56; // int | Id magazynu z którego pobieramy dostępną ilość towaru
$dni = 56; // int | Produkty których stan magazynowych zmienił się w ciągu X ostatnich dni
$twr_ids = array(56); // int[] | Id towarów dla których pobieramy stan magazynowy
$skip = 56; // int | number of records to skip for pagination
$limit = 56; // int | maximum number of records to return

try {
    $result = $apiInstance->pobierzStanyMag($mag_id, $dni, $twr_ids, $skip, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MagazynApi->pobierzStanyMag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mag_id** | **int**| Id magazynu z którego pobieramy dostępną ilość towaru |
 **dni** | **int**| Produkty których stan magazynowych zmienił się w ciągu X ostatnich dni | [optional]
 **twr_ids** | [**int[]**](../Model/int.md)| Id towarów dla których pobieramy stan magazynowy | [optional]
 **skip** | **int**| number of records to skip for pagination | [optional]
 **limit** | **int**| maximum number of records to return | [optional]

### Return type

[**\OptimaClientApi\Model\IloscItem[]**](../Model/IloscItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pobierzStanyMagPost**
> \OptimaClientApi\Model\IloscItem[] pobierzStanyMagPost($body, $mag_id, $dni, $twr_ids, $skip, $limit)

Pobieranie stanu magazynowego

Pobiera stany magazynowe towarów

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OptimaClientApi\Api\MagazynApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = array(56); // int[] | Lista TwrId dla których chcemy pobrać cenę
$mag_id = 56; // int | Id magazynu z którego pobieramy dostępną ilość towaru
$dni = 56; // int | Produkty których stan magazynowych zmienił się w ciągu X ostatnich dni
$twr_ids = array(56); // int[] | Id towarów dla których pobieramy stan magazynowy
$skip = 56; // int | number of records to skip for pagination
$limit = 56; // int | maximum number of records to return

try {
    $result = $apiInstance->pobierzStanyMagPost($body, $mag_id, $dni, $twr_ids, $skip, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MagazynApi->pobierzStanyMagPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**int[]**](../Model/int.md)| Lista TwrId dla których chcemy pobrać cenę |
 **mag_id** | **int**| Id magazynu z którego pobieramy dostępną ilość towaru |
 **dni** | **int**| Produkty których stan magazynowych zmienił się w ciągu X ostatnich dni | [optional]
 **twr_ids** | [**int[]**](../Model/int.md)| Id towarów dla których pobieramy stan magazynowy | [optional]
 **skip** | **int**| number of records to skip for pagination | [optional]
 **limit** | **int**| maximum number of records to return | [optional]

### Return type

[**\OptimaClientApi\Model\IloscItem[]**](../Model/IloscItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

