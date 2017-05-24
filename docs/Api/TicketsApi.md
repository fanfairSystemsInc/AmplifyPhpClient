# Swagger\Client\TicketsApi

All URIs are relative to *https://public-api.iqxamplify.com/V1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrUpdateTicket**](TicketsApi.md#createOrUpdateTicket) | **POST** /tickets/ | Create or Update a ticket
[**findTickets**](TicketsApi.md#findTickets) | **GET** /tickets/ | Retrieve all events
[**findTicketsById**](TicketsApi.md#findTicketsById) | **GET** /tickets/{id} | Retrieve a single ticket by id


# **createOrUpdateTicket**
> \Swagger\Client\Model\Ticket[] createOrUpdateTicket($ticket)

Create or Update a ticket

Create or Update a ticket

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
Swagger\Client\Configuration::getDefaultConfiguration()->setSandboxMode(true);
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');

$api_instance = new Swagger\Client\Api\TicketsApi();
$ticket = new \Swagger\Client\Model\Ticket(); // \Swagger\Client\Model\Ticket | Add or update ticket details

try {
    $result = $api_instance->createOrUpdateTicket($ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->createOrUpdateTicket: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ticket** | [**\Swagger\Client\Model\Ticket**](../Model/\Swagger\Client\Model\Ticket.md)| Add or update ticket details |

### Return type

[**\Swagger\Client\Model\Ticket[]**](../Model/Ticket.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findTickets**
> \Swagger\Client\Model\Ticket[] findTickets()

Retrieve all events

Retrieve all events

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
Swagger\Client\Configuration::getDefaultConfiguration()->setSandboxMode(true);
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');

$api_instance = new Swagger\Client\Api\TicketsApi();

try {
    $result = $api_instance->findTickets();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->findTickets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Ticket[]**](../Model/Ticket.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findTicketsById**
> \Swagger\Client\Model\Ticket findTicketsById($id)

Retrieve a single ticket by id

Retrieve a single ticket by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
Swagger\Client\Configuration::getDefaultConfiguration()->setSandboxMode(true);
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');

$api_instance = new Swagger\Client\Api\TicketsApi();
$id = "id_example"; // string | ID of the ticket to get

try {
    $result = $api_instance->findTicketsById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->findTicketsById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the ticket to get |

### Return type

[**\Swagger\Client\Model\Ticket**](../Model/Ticket.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

