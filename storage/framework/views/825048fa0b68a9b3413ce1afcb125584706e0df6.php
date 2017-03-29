

<?php $__env->startSection('main'); ?>
    <div id="user">
        <h2>User</h2>

        <?php echo $__env->make('_partial.flash_message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <?php if(count($user_list) > 0): ?>
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Level</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 0; ?>
                    <?php foreach($user_list as $user): ?>
                    <tr>
                        <td><?php echo e(++$i); ?></td>
                        <td><?php echo e($user->name); ?></td>
                        <td><?php echo e($user->email); ?></td>
                        <td><?php echo e($user->level); ?></td>
                        <td>
                            <div class="box-button">
                                <?php echo e(link_to('user/' . $user->id . '/edit', 'Edit', ['class' => 'btn btn-warning btn-sm'])); ?>

                            </div>
                            <div class="box-button">
                                <?php echo Form::open(['method' => 'DELETE', 'action' => ['UserController@destroy', $user->id]]); ?>

                                    <?php echo Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']); ?>

                                <?php echo Form::close(); ?>

                            </div>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>Tidak ada data user.</p>
        <?php endif; ?>

        <div class="tombol-nav">
            <a href="user/create" class="btn btn-primary">Tambah User</a>
        </div>

    </div> <!-- / #kelas -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
   <?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>