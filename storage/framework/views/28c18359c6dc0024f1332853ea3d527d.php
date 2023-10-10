<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => $__env->getContainer()->make(Illuminate\View\Factory::class)->make('mail::message'),'data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('mail::message'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
**Dear Customer,**

We are excited to inform you that your booking is now ready for delivery.  
Our team has carefully prepared your order and  
it will be dispatched to your specified address at the earliest convenience.

**Here are the details of your booking:**

**Order details:**   
**VEHICLE NAME:** <?php echo e($service->vehicle_name); ?>  
**TYPE:** <?php echo e($service->type); ?>  
**Estimated Delivery Date:** <?php echo e($service->service_date); ?>  

<?php if($service->special_instructions): ?>
**Special Instructions:** <?php echo e($service->special_instructions); ?>  
<?php endif; ?>

If you have any special instructions or requests regarding the delivery,  
please feel free to let us know at [john@john-bikes.com](mailto:john@john-bikes.com).

Thank you for choosing **John Bikes**.  
We appreciate your business and look forward to serving you.

**Best Regards,**  
John Bikes Team
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Suneel Kumar\Desktop\cartrabbit\Bike\resources\views/BookingReady.blade.php ENDPATH**/ ?>