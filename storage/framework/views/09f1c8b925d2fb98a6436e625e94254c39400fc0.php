
<?php $__env->startSection('content'); ?>
<div class="container">
      <div class="wrapper">
        <?php if(session('success')): ?>
        <p class="alert alert-success"><?php echo e(session('success')); ?></p>
        <?php endif; ?>
        <?php if($errors->any()): ?>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p class="alert alert-danger"><?php echo e($err); ?></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
        <div class="title"><span>Change Password</span></div>
        <form method="POST" action="<?php echo e(route('password_action')); ?>">
            <?php echo csrf_field(); ?>
            <div class="row">
                <i class="fas fa-user"></i>
                <input type="password" placeholder="Old Password" type="password" name="old_password" required>
            </div>
            <div class="row">
                <i class="fas fa-user"></i>
                <input type="password" placeholder="New Password" type="password" name="new_password" required>
            </div>
            <div class="row">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Confirmation Password" type="password" name="new_password_confirmation" required>
            </div>
            <div class="row button">
                <input type="submit" value="Change">
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\clov\Desktop\raffidev-laravel\resources\views/user/password.blade.php ENDPATH**/ ?>