
<?php $__env->startSection('content'); ?>
<style>
  #form {
    background-color: #2e4ead;
    padding: 70px 40px;
    border-radius: 15px;
    color: white;
    font-weight: 500;
  }

  .form-group {
    padding: 10px 10px;
  }

  #datepicker, #vehicle_name, #service_type, #status{
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    background-color: white;
    color: #333;
    outline: none;
  }

  #datepicker-label {
    display: block;
    margin-top: 10px;
    color: white;
  }
  #button-container {
    display: flex;
    justify-content: center;
}
  #button {
    margin-top: 20px;
    padding: 10px 20px; 
    background-color: #FFA500; 
    border: none;
    border-radius: 5px;
    color: #fff; /* Text color */
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s ease; /* Add a hover effect */
}

#button:hover {
    background-color: #FF7F00; /* Change the background color on hover */
}
.alert-success {
            background-color: #4CAF50; 
            color: #fff; /* White text color */
            padding: 10px; /* Padding around the content */
            border-radius: 5px; /* Rounded corners */
        }
</style>
<form method="post" action="<?php echo e(route('service.update', $service)); ?>">
  <?php echo csrf_field(); ?>
  <?php echo method_field('PUT'); ?> 
  <?php if(session('success')): ?>
    <div class="alert-success">
        <?php echo e(session('success')); ?>

    </div>
  <?php endif; ?>
  <div class="container mt-5">
    <div id="form">
      <div class="form-group">
        <label for="vehicle_name">Vehicle Name</label>
        <input type="text" class="form-control" id="vehicle_name" placeholder="Enter Your name here" name="vehicle_name" value="<?php echo e($service->vehicle_name); ?>">
      </div>
      <div class="form-group">
        <label id="datepicker-label" for="datepicker">Select Date</label>
        <input type="date" class="form-control" id="datepicker" name="selected_date" value="<?php echo e($service->service_date); ?>">
      </div>
      <div class="form-group">
        <label for="service_type">Service Type</label>
        <select class="form-control" id="service_type" name="service_type">
          <option value="oil change" <?php if($service->service_type == 'oil change'): ?> selected <?php endif; ?>>Oil Change</option>
          <option value="water service" <?php if($service->service_type == 'water service'): ?> selected <?php endif; ?>>Water service</option>
          <option value="general service" <?php if($service->service_type == 'general service'): ?> selected <?php endif; ?>>General service</option>
        </select>
      </div>
      <div class="form-group">
    <label for="status">Status</label>
    <select class="form-control" id="status" name="status">
        <option value="pending" <?php if($service->status == 'pending'): ?> selected <?php endif; ?>>Pending</option>
        <option value="ready" <?php if($service->status == 'ready'): ?> selected <?php endif; ?>>Ready</option>
        <option value="completed" <?php if($service->status == 'completed'): ?> selected <?php endif; ?>>Completed</option>
    </select>
    <div id="button-container">
    <button class="custom-button" id="button">Update</button>
    </div>

</div>
    </div>
    
  </div>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Suneel Kumar\Desktop\cartrabbit\Bike\resources\views/services/edit.blade.php ENDPATH**/ ?>