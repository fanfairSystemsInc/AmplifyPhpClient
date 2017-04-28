# Swagger\Client\StoresApi

All URIs are relative to *https://public-api.iqxamplify.com/V1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrUpdateStore**](StoresApi.md#createOrUpdateStore) | **POST** /stores/ | Create or update a store
[**findStores**](StoresApi.md#findStores) | **GET** /stores/ | Retrieve all stores
[**findStoresById**](StoresApi.md#findStoresById) | **GET** /stores/{id} | Retrieve a single store by id


# **createOrUpdateStore**
> \Swagger\Client\Model\Store[] createOrUpdateStore($store)

Create or update a store

Create or update a store

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');

$api_instance = new Swagger\Client\Api\StoresApi();
$store = new \Swagger\Client\Model\Store(); // \Swagger\Client\Model\Store | Add or update store details

try {
    $result = $api_instance->createOrUpdateStore($store);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->createOrUpdateStore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store** | [**\Swagger\Client\Model\Store**](../Model/\Swagger\Client\Model\Store.md)| Add or update store details |

### Return type

[**\Swagger\Client\Model\Store[]**](../Model/Store.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findStores**
> \Swagger\Client\Model\Store[] findStores()

Retrieve all stores

Retrieve all stores

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');

$api_instance = new Swagger\Client\Api\StoresApi();

try {
    $result = $api_instance->findStores();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->findStores: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Store[]**](../Model/Store.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findStoresById**
> \Swagger\Client\Model\Store findStoresById($id)

Retrieve a single store by id

Retrieve a single store by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');

$api_instance = new Swagger\Client\Api\StoresApi();
$id = "id_example"; // string | ID of the store to get

try {
    $result = $api_instance->findStoresById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->findStoresById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the store to get |

### Return type

[**\Swagger\Client\Model\Store**](../Model/Store.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

