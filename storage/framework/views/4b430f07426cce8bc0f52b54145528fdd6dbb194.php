<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Loginin</title>

    <link href="<?php echo e(asset('bootstrap_3_3_6/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="<?php echo e(asset('http://laravelapp.dev/js/html5shiv_3_7_2.min.js')); ?>"></script>
      <script src="<?php echo e(asset('http://laravelapp.dev/js/respond_1_4_2.min.js')); ?>"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <?php echo $__env->make('navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php echo $__env->yieldContent('main'); ?>
    </div>

    <?php echo $__env->yieldContent('footer'); ?>

    <script src="<?php echo e(asset('js/jquery_2_2_1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('bootstrap_3_3_6/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/laravelapp.js')); ?>"></script>
  </body>
</html>
