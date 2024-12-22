<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<center>
    <div class="wrapper">
        <form class="form-signin" method="POST" action="/add_room">  
            <?php echo csrf_field(); ?>     
          <h2 class="form-signin-heading">Add New Rooms</h2>
          <input type="file" class="form-control" name="img_name"  required="" autofocus="" />
          <input type="text" class="form-control" name="room_name" placeholder="Room Name" required="" autofocus="" />
          <input type="text" class="form-control" name="price" placeholder="₹ Price" required=""/>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Add</button>   
        </form>
      </div>
</center>

 <!-- Widgets Start -->
 <div class="container-fluid pt-4 px-4">
    <div>
        <h2>Data Table</h2>
        <table border="2" width=100% class="text-light">
            <tr class="head">
                <td>ID</td>
                <td>Image</td>
                <td>Room Name</td>
                <td>Price</td>
                <td>Edit</td>
                <td>Delete</td>


            </tr>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $in): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="head1">
                    <td><?php echo e($in['id']); ?></td>
                    <td><img height="100px" width="180px" src="<?php echo e(url('user/images/'.$in['img_name'])); ?>"></td>
                    <td><?php echo e($in['room_name']); ?></td>
                    <td><?php echo e($in['price']); ?></td>
                    <td><button><a href="edit_img/<?php echo e($in['id']); ?>">Edit</a></button></td>
                    <td><button><a href="delete_img/<?php echo e($in['id']); ?>">Delete</a></button></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
</div>
<!-- Widgets End -->

<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Hotel_Managment\resources\views/abook.blade.php ENDPATH**/ ?>