# Order

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Primary key | [optional] 
**contact_ref_id** | **string** | Contact reference id | [optional] 
**financial_status** | **string** | Financial status of the order | [optional] 
**iqx_order** | **string** | iqx internal order id | [optional] 
**line_items** | [**\Swagger\Client\Model\OrderLineItems[]**](OrderLineItems.md) | The individual line items of the order | [optional] 
**processed_at** | [**\DateTime**](\DateTime.md) | The Order was processed at | [optional] 
**ref_id** | **string** | The Order reference number | [optional] 
**subtotal_price** | **float** | The Order&#39;s sub total | [optional] 
**total_price** | **float** | The Order&#39;s total | [optional] 
**total_shipping** | **float** | The Order&#39;s shipping cost | [optional] 
**total_tax** | **float** | The Order&#39;s tax amount | [optional] 
**user_id** | **string** | Connected user id | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


