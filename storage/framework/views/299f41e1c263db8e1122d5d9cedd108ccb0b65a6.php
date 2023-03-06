
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
        <div class="title"><span>Login Form</span></div>
        <form method="POST" action="<?php echo e(route('login.action')); ?>">
            <?php echo csrf_field(); ?>
            <div class="row">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Username" type="username" name="username" value="<?php echo e(old('username')); ?>" required>
            </div>
            <div class="row">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password" type="password" name="password" required>
            </div>
            <div class="pass"><a href="#">Forgot password?</a></div>
            <div class="row button">
                <input type="submit" value="Login">
            </div>
          <div class="signup-link">Not a account? <a href="<?php echo e(route('register')); ?>">Signup now</a></div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<!-- <a class="btn btn-danger" href="<?php echo e(route('home')); ?>">Back</a> -->

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\clov\Desktop\raffidev-laravel\resources\views/user/login.blade.php ENDPATH**/ ?>