# TicketClass

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Primary key | [optional] 
**ref_id** | **string** | External systems reference id | [optional] 
**name** | **string** | Name of the ticket | [optional] 
**description** | **string** | Description of the ticket | [optional] 
**ticket_url** | **string** | The URL to the ticket | [optional] 
**order** | **float** | The order in which the ticket should be listed | [optional] 
**price** | **float** | Price of the ticket | [optional] 
**maximum_available** | **float** | The maximum number of ticket allocation | [optional] 
**limit** | **float** | The maximum number of tickets per customer | [optional] 
**tickets_purchased** | **float** | The number of tickets purchased for this ticket class | [optional] 
**availability** | [**\Swagger\Client\Model\TicketClassAvailability**](TicketClassAvailability.md) |  | [optional] 
**modified_date** | [**\DateTime**](\DateTime.md) | Date last modified | [optional] 
**user_id** | **string** | Connected user id | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


