<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- Widgets Start -->
            <div class="container-fluid pt-4 px-4">
                <div>
                    <h2>Data Table</h2>
                    <table border="2" width=100% class="text-light">
                        <tr class="head">
                            <td>ID</td>
                            <td>Username</td>
                            <td>Email</td>
                            <td>PassWord</td>
                            <td>Comfirm PassWord</td>
                            <td>Role</td>
                            <td>Edit</td>
                            <td>Delete</td>


                        </tr>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $in): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="head1">
                                <td><?php echo e($in['id']); ?></td>
                                <td><?php echo e($in['username']); ?></td>
                                <td><?php echo e($in['email']); ?></td>
                                <td><?php echo e($in['password']); ?></td>
                                <td><?php echo e($in['cpassword']); ?></td>
                                <td><?php echo e($in['role']); ?></td>
                                <td><button><a href="<?php echo e(url('admin/'.$in['id'].'/edit')); ?>">Edit</a></button></td>
                                <form method="POST" action="<?php echo e(url('admin/'.$in['id'])); ?>">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <td><button type="submit">Delete</button></td>
                                </form>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                </div>
            </div>
            <!-- Widgets End -->
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Hotel_Managment\resources\views/aregister.blade.php ENDPATH**/ ?>