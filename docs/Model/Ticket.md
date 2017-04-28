# Ticket

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Primary key | [optional] 
**ref_id** | **string** | External systems reference id | [optional] 
**ticket_number** | **string** | Ticket reference number | [optional] 
**card_number** | **string** | Last 4 digits of the credit card | [optional] 
**event_name** | **string** | Name of the event | [optional] 
**artist_name** | **string** | Name of the performing artist | [optional] 
**customer_ref_id** | **string** | Customers reference id | [optional] 
**venue** | [**\Swagger\Client\Model\EventVenue**](EventVenue.md) |  | [optional] 
**location** | [**\Swagger\Client\Model\TicketLocation**](TicketLocation.md) |  | [optional] 
**ticket_category** | **float** | The category of the ticket | [optional] 
**ticket_price** | **float** | The price of the ticket | [optional] 
**date_purchased** | **float** | The date the ticket was purchased | [optional] 
**door_open_time** | [**\DateTime**](\DateTime.md) | The time that the doors open | [optional] 
**currency** | **string** | The currency that the tickets is sold in | [optional] 
**subtotal_price** | **float** | The Tickets&#39;s sub total | [optional] 
**total_price** | **float** | The Tickets&#39;s total | [optional] 
**total_shipping** | **float** | The Tickets&#39;s shipping cost | [optional] 
**total_fees** | **float** | The Tickets&#39;s fees cost | [optional] 
**total_tax** | **float** | The Tickets&#39;s tax amount | [optional] 
**customer_email** | **string** | The email address of the customer that purchased | [optional] 
**modified_date** | [**\DateTime**](\DateTime.md) | Date last modified | [optional] 
**user_id** | **string** | Connected user id | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


