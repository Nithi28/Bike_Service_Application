<x-mail::message>
**Dear Customer,**

We are excited to inform you that your booking is now ready for delivery.  
Our team has carefully prepared your order and  
it will be dispatched to your specified address at the earliest convenience.

**Here are the details of your booking:**

**Order details:**   
**VEHICLE NAME:** {{ $service->vehicle_name }}  
**TYPE:** {{ $service->service_type }}  
**Estimated Delivery Date:** {{ $service->service_date }}  

@if ($service->special_instructions)
**Special Instructions:** {{ $service->special_instructions }}  
@endif

If you have any special instructions or requests regarding the delivery,  
please feel free to let us know at [john@john-bikes.com](mailto:john@john-bikes.com).

Thank you for choosing **John Bikes**.  
We appreciate your business and look forward to serving you.

**Best Regards,**  
John Bikes Team
</x-mail::message>
