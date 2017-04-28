# Swagger\Client\ProductsApi

All URIs are relative to *https://public-api.iqxamplify.com/V1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrUpdateProduct**](ProductsApi.md#createOrUpdateProduct) | **POST** /products/ | Create or Update a product
[**findProducts**](ProductsApi.md#findProducts) | **GET** /products/ | Retrieve all products
[**findProductsById**](ProductsApi.md#findProductsById) | **GET** /products/{id} | Retrieve a single product by id


# **createOrUpdateProduct**
> \Swagger\Client\Model\Product createOrUpdateProduct($product)

Create or Update a product

Create or Update a product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');

$api_instance = new Swagger\Client\Api\ProductsApi();
$product = new \Swagger\Client\Model\Product(); // \Swagger\Client\Model\Product | Add or update products details

try {
    $result = $api_instance->createOrUpdateProduct($product);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->createOrUpdateProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product** | [**\Swagger\Client\Model\Product**](../Model/\Swagger\Client\Model\Product.md)| Add or update products details |

### Return type

[**\Swagger\Client\Model\Product**](../Model/Product.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findProducts**
> \Swagger\Client\Model\Product[] findProducts()

Retrieve all products

Retrieve all products

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');

$api_instance = new Swagger\Client\Api\ProductsApi();

try {
    $result = $api_instance->findProducts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->findProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Product[]**](../Model/Product.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findProductsById**
> \Swagger\Client\Model\Product findProductsById($id)

Retrieve a single product by id

Retrieve a single product by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');

$api_instance = new Swagger\Client\Api\ProductsApi();
$id = "id_example"; // string | ID of the product to get

try {
    $result = $api_instance->findProductsById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->findProductsById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the product to get |

### Return type

[**\Swagger\Client\Model\Product**](../Model/Product.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

