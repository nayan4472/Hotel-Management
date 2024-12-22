<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- Widgets Start -->
            <div class="container-fluid pt-4 px-4">
                <div>
                    <h2>Data Table</h2>
                    <table border="2" width=100% class="text-light">
                        <tr class="head">
                            <td>ID</td>
                            <td>Name</td>
                            <td>Email</td>
                            <td>Message</td>
                        </tr>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $in): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="head1">
                                <td><?php echo e($in->id); ?></td>
                                <td><?php echo e($in->name); ?></td>
                                <td><?php echo e($in->email); ?></td>
                                <td><?php echo e($in->message); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                </div>
            </div>
            <!-- Widgets End -->
            <!-- Footer Start -->
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Hotel_Managment\resources\views/afeedback.blade.php ENDPATH**/ ?>