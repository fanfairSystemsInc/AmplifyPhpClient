# Swagger\Client\CustomersApi

All URIs are relative to *http://localhost:3005/V1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrUpdateCustomer**](CustomersApi.md#createOrUpdateCustomer) | **POST** /customers/ | Create or Update a customer
[**findCustomers**](CustomersApi.md#findCustomers) | **GET** /customers/ | Retrieve all customers
[**findCustomersById**](CustomersApi.md#findCustomersById) | **GET** /customers/{id} | Retrieve a single customer by id


# **createOrUpdateCustomer**
> \Swagger\Client\Model\Customer createOrUpdateCustomer($customer)

Create or Update a customer

Create or Update a customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');

$api_instance = new Swagger\Client\Api\CustomersApi();
$customer = new \Swagger\Client\Model\Customer(); // \Swagger\Client\Model\Customer | Add or update customer details

try {
    $result = $api_instance->createOrUpdateCustomer($customer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->createOrUpdateCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer** | [**\Swagger\Client\Model\Customer**](../Model/\Swagger\Client\Model\Customer.md)| Add or update customer details |

### Return type

[**\Swagger\Client\Model\Customer**](../Model/Customer.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findCustomers**
> \Swagger\Client\Model\Customers findCustomers($page)

Retrieve all customers

Retrieve all customers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');

$api_instance = new Swagger\Client\Api\CustomersApi();
$page = 3.4; // float | The page number ro return

try {
    $result = $api_instance->findCustomers($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->findCustomers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **float**| The page number ro return | [optional]

### Return type

[**\Swagger\Client\Model\Customers**](../Model/Customers.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findCustomersById**
> \Swagger\Client\Model\Customer findCustomersById($id)

Retrieve a single customer by id

Retrieve a single customer by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');

$api_instance = new Swagger\Client\Api\CustomersApi();
$id = "id_example"; // string | ID of the customer to get

try {
    $result = $api_instance->findCustomersById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->findCustomersById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the customer to get |

### Return type

[**\Swagger\Client\Model\Customer**](../Model/Customer.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

