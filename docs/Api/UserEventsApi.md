# Swagger\Client\UserEventsApi

All URIs are relative to *http://localhost:3005/V1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**processUserEvent**](UserEventsApi.md#processUserEvent) | **POST** /user-event/ | Process webhooks


# **processUserEvent**
> \Swagger\Client\Model\UserEventResponse processUserEvent($user_event)

Process webhooks

This function responds to all of the webhook calls from Amplify

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UserEventsApi();
$user_event = new \Swagger\Client\Model\UserEvent(); // \Swagger\Client\Model\UserEvent | Add or update customer details

try {
    $result = $api_instance->processUserEvent($user_event);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserEventsApi->processUserEvent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_event** | [**\Swagger\Client\Model\UserEvent**](../Model/\Swagger\Client\Model\UserEvent.md)| Add or update customer details |

### Return type

[**\Swagger\Client\Model\UserEventResponse**](../Model/UserEventResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

