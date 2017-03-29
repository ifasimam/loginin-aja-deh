<?php if(Session::has('flash_message')): ?>
    <div class="alert alert-success <?php echo e(Session::has('penting') ? 'alert-important' : ''); ?>">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <?php echo e(Session::get('flash_message')); ?>

    </div>
<?php endif; ?>