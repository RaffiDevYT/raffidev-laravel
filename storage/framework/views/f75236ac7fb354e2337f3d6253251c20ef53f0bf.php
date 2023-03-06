<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(url('css/custom.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title><?php echo $__env->yieldContent('title', $title); ?></title>
</head>
<body>
    
   <div class="container">
      <h1><?php echo $__env->yieldContent('title', $title); ?></h1>
      <?php echo $__env->yieldContent('content'); ?>
   </div>

</body>
</html><?php /**PATH C:\Users\clov\Desktop\raffidev-laravel\resources\views/app.blade.php ENDPATH**/ ?>