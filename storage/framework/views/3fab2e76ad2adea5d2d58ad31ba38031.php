<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="fh5co-parallax" style="background-image: url('user/images/hd.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
                <div class="fh5co-intro fh5co-table-cell">
                    <h1 class="text-center">Book Fast</h1>
                    <p>Made with MAHN by the fine folks at <a href="https://www.ljku.edu.in/">LJKU.in</a></p>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="fh5co-blog-section">
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <div class="section-title text-center">
                  <h2>Book Fast</h2>
              </div>
          </div>
      </div>
      <div class="row">
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $in): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-md-4">
              <div class="blog-grid" style="background-image: url(<?php echo e(url('user/images/'.$in['img_name'])); ?>);">
              </div>
              <div class="desc">
                  <h3 style="font-family: 'Times New Roman', Times, serif;"><?php echo e($in['room_name']); ?></h3><br>
                  <h4 style="font-family: 'Times New Roman', Times, serif;">Price ₹ <?php echo e($in['price']); ?></h4>
                  <button style="font-family: 'Times New Roman', Times, serif;"><a href="checking/<?php echo e($in['id']); ?>">Book</a></button>
              </div>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
  </div>
</div>

<?php echo $__env->make('ufooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Hotel_Managment\resources\views/book.blade.php ENDPATH**/ ?>