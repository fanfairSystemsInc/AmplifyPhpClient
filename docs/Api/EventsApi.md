# Swagger\Client\EventsApi

All URIs are relative to *https://public-api.iqxamplify.com/V1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrUpdateEvent**](EventsApi.md#createOrUpdateEvent) | **POST** /events/ | Create or Update a event
[**findEvents**](EventsApi.md#findEvents) | **GET** /events/ | Retrieve all events
[**findEventsById**](EventsApi.md#findEventsById) | **GET** /events/{id} | Retrieve a single event by id


# **createOrUpdateEvent**
> \Swagger\Client\Model\Event createOrUpdateEvent($event)

Create or Update a event

Create or Update a event

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');

$api_instance = new Swagger\Client\Api\EventsApi();
$event = new \Swagger\Client\Model\Event(); // \Swagger\Client\Model\Event | Add or update events details

try {
    $result = $api_instance->createOrUpdateEvent($event);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->createOrUpdateEvent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **event** | [**\Swagger\Client\Model\Event**](../Model/\Swagger\Client\Model\Event.md)| Add or update events details |

### Return type

[**\Swagger\Client\Model\Event**](../Model/Event.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findEvents**
> \Swagger\Client\Model\Event[] findEvents()

Retrieve all events

Retrieve all events

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('authorization', 'Bearer');

$api_instance = new Swagger\Client\Api\EventsApi();

try {
    $result = $api_instance->findEvents();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->findEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Event[]**](../Model/Event.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findEventsById**
> \Swagger\Client\Model\Event findEventsById($id)

Retrieve a single event by id

Retrieve a single event by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EventsApi();
$id = "id_example"; // string | ID of the event to get

try {
    $result = $api_instance->findEventsById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->findEventsById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the event to get |

### Return type

[**\Swagger\Client\Model\Event**](../Model/Event.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

