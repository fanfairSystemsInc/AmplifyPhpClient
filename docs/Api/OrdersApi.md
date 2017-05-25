# Swagger\Client\OrdersApi

All URIs are relative to *https://public-api.iqxamplify.com/V1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrUpdateOrder**](OrdersApi.md#createOrUpdateOrder) | **POST** /orders/ | Create or Update a order
[**findOrders**](OrdersApi.md#findOrders) | **GET** /orders/ | Retrieve all orders
[**findOrdersById**](OrdersApi.md#findOrdersById) | **GET** /orders/{id} | Retrieve a single order by id


# **createOrUpdateOrder**
> \Swagger\Client\Model\Order createOrUpdateOrder($order)

Create or Update a order

Create or Update a order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
Swagger\Client\Configuration::getDefaultConfiguration()->setSandboxMode(true);
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');

$api_instance = new Swagger\Client\Api\OrdersApi();
$order = new \Swagger\Client\Model\Order(); // \Swagger\Client\Model\Order | Add or update orders details

try {
    $result = $api_instance->createOrUpdateOrder($order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->createOrUpdateOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order** | [**\Swagger\Client\Model\Order**](../Model/\Swagger\Client\Model\Order.md)| Add or update orders details |

### Return type

[**\Swagger\Client\Model\Order**](../Model/Order.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findOrders**
> \Swagger\Client\Model\Orders findOrders($page)

Retrieve all orders

Retrieve all orders

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
Swagger\Client\Configuration::getDefaultConfiguration()->setSandboxMode(true);
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');

$api_instance = new Swagger\Client\Api\OrdersApi();
$page = 3.4; // float | The page number ro return

try {
    $result = $api_instance->findOrders($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->findOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **float**| The page number ro return | [optional]

### Return type

[**\Swagger\Client\Model\Orders**](../Model/Orders.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findOrdersById**
> \Swagger\Client\Model\Order findOrdersById($id)

Retrieve a single order by id

Retrieve a single order by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
Swagger\Client\Configuration::getDefaultConfiguration()->setSandboxMode(true);
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');

$api_instance = new Swagger\Client\Api\OrdersApi();
$id = "id_example"; // string | ID of the order to get

try {
    $result = $api_instance->findOrdersById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->findOrdersById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the order to get |

### Return type

[**\Swagger\Client\Model\Order**](../Model/Order.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
