<?php $__env->startSection('content'); ?>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white shadow-lg rounded-lg slide-in-from-left">
            <div class="max-w-xl">
            <?php echo $__env->make('profile.partials.update-profile-information-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
        
        <div class="p-4 sm:p-8 bg-white shadow-lg rounded-lg slide-in-from-left">
            <div class="max-w-xl">
                <?php echo $__env->make('profile.partials.update-password-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>

        <div class="p-4 sm:p-8 bg-white shadow-lg rounded-lg slide-in-from-left">
            <div class="max-w-xl">
                <?php echo $__env->make('profile.partials.delete-user-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<style>
    /* Define the keyframes animation for sliding in from the left */
@keyframes slideInFromLeft {
    0% {
        opacity: 0;
        transform: translateX(-100%);
    }
    100% {
        transform: translateX(0);
    }
}

.slide-in-from-left {
    animation: slideInFromLeft 0.5s ease-in-out; 
}

</style>

<?php echo $__env->make('layouts.template2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Suneel Kumar\Desktop\cartrabbit\Bike\resources\views/profile/edit.blade.php ENDPATH**/ ?>