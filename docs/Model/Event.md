# Event

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Primary key | [optional] 
**ref_id** | **string** | External systems reference id | [optional] 
**name** | **string** | Name of the event | [optional] 
**description** | **string** | Description of the event | [optional] 
**status** | **string** | Status of the event | [optional] 
**type** | **string** | The type of event | [optional] 
**event_image** | **string** | URL to the event image | [optional] 
**event_start_date** | **string** | The date the event starts at | [optional] 
**event_end_date** | **string** | The data the event ends at | [optional] 
**door_open_time** | **string** | The time that the doors open | [optional] 
**event_start_time** | **string** | The time that the doors close | [optional] 
**total_capacity** | **float** | The total capacity for the event | [optional] 
**total_tickets_purchased** | **float** | The total tickets purchased for all ticket classes | [optional] 
**purchase_limit** | **float** | The maximum number of ticket that can be purchased by a customer | [optional] 
**event_url** | **string** | The URL to the event page | [optional] 
**currency** | **string** | The currency that the event tickets are sold in | [optional] 
**tickets** | [**\Swagger\Client\Model\TicketClass[]**](TicketClass.md) | The individual line items of the order | [optional] 
**time_zone** | **string** | The time zone that the event is in | [optional] 
**artist_name** | **string** | The name of the artist | [optional] 
**venue** | [**\Swagger\Client\Model\EventVenue**](EventVenue.md) |  | [optional] 
**scanner_code** | **string** | the scanner code to unlock the event | [optional] 
**modified_date** | [**\DateTime**](\DateTime.md) | Date last modified | [optional] 
**user_id** | **string** | Connected user id | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


