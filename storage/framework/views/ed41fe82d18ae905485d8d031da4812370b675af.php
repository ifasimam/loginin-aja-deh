

<?php $__env->startSection('main'); ?>
    <div id="homepage">
        <h2>Welcome !</h2>
        <p>Your Application's Landing Page.<br><br>
        Role Admin : Can add, edit and delete user.<br>
        Role Operator : Nothing Just Login.</p>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
    <?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>