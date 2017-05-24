# Swagger\Client\EventTicketsApi

All URIs are relative to *http://localhost:3005/V1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrUpdateTicketClass**](EventTicketsApi.md#createOrUpdateTicketClass) | **POST** /events/{id}/ticket_classes/ | Create or Update a event ticket
[**findTicketClass**](EventTicketsApi.md#findTicketClass) | **GET** /events/{id}/ticket_classes/ | Retrieve all tickets for an event
[**findTicketClassById**](EventTicketsApi.md#findTicketClassById) | **GET** /events/{id}/ticket_classes/{ticket_class_id}/ | Retrieve a single event ticket by id


# **createOrUpdateTicketClass**
> \Swagger\Client\Model\TicketClass createOrUpdateTicketClass($ticket_class, $id)

Create or Update a event ticket

Create or Update a event ticket

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');

$api_instance = new Swagger\Client\Api\EventTicketsApi();
$ticket_class = new \Swagger\Client\Model\TicketClass(); // \Swagger\Client\Model\TicketClass | Add or update events details
$id = "id_example"; // string | ID of the event to get

try {
    $result = $api_instance->createOrUpdateTicketClass($ticket_class, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventTicketsApi->createOrUpdateTicketClass: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ticket_class** | [**\Swagger\Client\Model\TicketClass**](../Model/\Swagger\Client\Model\TicketClass.md)| Add or update events details |
 **id** | **string**| ID of the event to get |

### Return type

[**\Swagger\Client\Model\TicketClass**](../Model/TicketClass.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findTicketClass**
> \Swagger\Client\Model\TicketClass[] findTicketClass($id)

Retrieve all tickets for an event

Retrieve all tickets for an event

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');

$api_instance = new Swagger\Client\Api\EventTicketsApi();
$id = "id_example"; // string | ID of the event to get

try {
    $result = $api_instance->findTicketClass($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventTicketsApi->findTicketClass: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the event to get |

### Return type

[**\Swagger\Client\Model\TicketClass[]**](../Model/TicketClass.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findTicketClassById**
> \Swagger\Client\Model\TicketClass findTicketClassById($id, $ticket_class_id)

Retrieve a single event ticket by id

Retrieve a single event ticket by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');

$api_instance = new Swagger\Client\Api\EventTicketsApi();
$id = "id_example"; // string | ID of the event to get
$ticket_class_id = "ticket_class_id_example"; // string | ID of the event ticket to get

try {
    $result = $api_instance->findTicketClassById($id, $ticket_class_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventTicketsApi->findTicketClassById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the event to get |
 **ticket_class_id** | **string**| ID of the event ticket to get |

### Return type

[**\Swagger\Client\Model\TicketClass**](../Model/TicketClass.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

