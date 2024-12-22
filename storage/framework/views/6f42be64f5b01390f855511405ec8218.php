<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- Widgets Start -->
            <div class="container-fluid pt-4 px-4">
                <div>
                    <h2>Data Table</h2>
                    <table border="2" width=100% class="text-light">
                        <tr class="head">
                            <td>ID</td>
                            <td>First Name</td>
                            <td>Last Name</td>
                            <td>Email</td>
                            <td>Phone</td>
                            <td>Address</td>
                            <td>Room Name</td>
                            <td>Room Price</td>
                            <td>Check IN</td>
                            <td>Check Out</td>
                            <td>Adult</td>
                            <td>Children</td>
                            <td>Additional Requests</td>
                        </tr>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $in): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="head1">
                                <td><?php echo e($in['id']); ?></td>
                                <td><?php echo e($in['fname']); ?></td>
                                <td><?php echo e($in['lname']); ?></td>
                                <td><?php echo e($in['email']); ?></td>
                                <td><?php echo e($in['phone']); ?></td>
                                <td><?php echo e($in['address']); ?></td>
                                <td><?php echo e($in['room_name']); ?></td>
                                <td><?php echo e($in['room_price']); ?></td>
                                <td><?php echo e($in['check_in']); ?></td>
                                <td><?php echo e($in['check_out']); ?></td>
                                <td><?php echo e($in['adult']); ?></td>
                                <td><?php echo e($in['children']); ?></td>
                                <td><?php echo e($in['additional_requests']); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                </div>
            </div>
            <!-- Widgets End -->
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Hotel_Managment\resources\views/show_booking.blade.php ENDPATH**/ ?>