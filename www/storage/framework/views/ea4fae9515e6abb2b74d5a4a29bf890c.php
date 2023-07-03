<?php $__env->startSection('title'); ?>
    Thank you
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>


<body>
<div class="inquery-thankyou">

    <div class="social-icon popup">
<a href="#" class="insta-icon icon-box">
    <img src="<?php echo e(asset('assets/frontend/images/instagram-icon.svg')); ?>" alt="instagram-icon">
</a>
<a href="#" class="insta-icon icon-box">
    <img src="<?php echo e(asset('assets/frontend/images/call-icon.svg')); ?>" alt="call-icon">
</a>
    </div>
<h5>Thank you!</h5>
<p>Our team will get in touch with you soon</p>
<img src="<?php echo e(asset('assets/frontend/images/thankyou-popup-img.png')); ?>" alt="thankyou-popup-img" >

<a href="<?php echo e(URL::previous()); ?>" class=" primary-button">close </a>
</div>
</body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\viraj_joshi\www\resources\views/frontend/thank_you.blade.php ENDPATH**/ ?>