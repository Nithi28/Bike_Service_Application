<section>
<header style="background-color: #2E4EAD; color: #fff; padding: 10px;border-top-left-radius:5px;border-top-right-radius:5px;">
        <h2 style="font-size: 1.5rem; font-weight: 600;">
            Update Password
        </h2>
        <p style="margin-top: 5px; font-weight: bold;">
            Ensure your account is using a long, random password to stay secure.
        </p>
    </header>
    <form method="post" action="<?php echo e(route('password.update')); ?>" style="background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); margin-bottom: 1.5rem;">
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
        <input type="hidden" name="_method" value="put">
        <div>
            <?php if(session('status') === 'password-updated'): ?>
            <p style="background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; border-radius: 0.25rem; padding: 0.75rem 1.25rem; margin-bottom: 1rem; font-weight: bold;">Saved.</p>
            <?php endif; ?>
            <label for="current_password" style="display: block; font-size: 0.875rem; font-weight: 500; color: #333;">
                Current Password
            </label>
            <input id="current_password" name="current_password" type="password" style="margin-top: 0.25rem; display: block; width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 3px;" autocomplete="current-password">
            <?php if($errors->updatePassword->has('current_password')): ?>
                <p style="margin-top: 0.25rem; font-size: 0.875rem; color: #ff0000;"><?php echo e($errors->updatePassword->first('current_password')); ?></p>
            <?php endif; ?>
        </div>

        <div>
            <label for="password" style="display: block; font-size: 0.875rem; font-weight: 500; color: #333;">
                New Password
            </label>
            <input id="password" name="password" type="password" style="margin-top: 0.25rem; display: block; width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 3px;" autocomplete="new-password">
            <?php if($errors->updatePassword->has('password')): ?>
                <p style="margin-top: 0.25rem; font-size: 0.875rem; color: #ff0000;"><?php echo e($errors->updatePassword->first('password')); ?></p>
            <?php endif; ?>
        </div>

        <div>
            <label for="password_confirmation" style="display: block; font-size: 0.875rem; font-weight: 500; color: #333;">
                Confirm Password
            </label>
            <input id="password_confirmation" name="password_confirmation" type="password" style="margin-top: 0.25rem; display: block; width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 3px;" autocomplete="new-password">
            <?php if($errors->updatePassword->has('password_confirmation')): ?>
                <p style="margin-top: 0.25rem; font-size: 0.875rem; color: #ff0000;"><?php echo e($errors->updatePassword->first('password_confirmation')); ?></p>
            <?php endif; ?>
        </div>

        <div style="display: flex; align-items: center; gap: 0.5rem; margin-top: 1rem;">
            <button style="background-color: #007bff; color: #fff; font-weight: 700; padding: 0.5rem 1rem; border: none; border-radius: 0.25rem; cursor: pointer;">
                Save
            </button>

            
        </div>
    </form>
</section>
<?php /**PATH C:\Users\Suneel Kumar\Desktop\cartrabbit\Bike\resources\views/profile/partials/update-password-form.blade.php ENDPATH**/ ?>