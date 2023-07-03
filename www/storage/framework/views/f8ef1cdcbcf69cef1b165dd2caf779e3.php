<?php echo Form::open([
      'url' => route('home.store'),
      'method' => 'POST',
      'id'=>'Enquery-top-form',
      'class'=>'inquery-form'
  ]); ?>

    <div class="input-field">
        <?php echo Form::text('name',  null, [
                      'class' => ' name',
                      'placeholder' => 'Your Name',
                  ]); ?>

        <span class="text-danger" style="font-size:15px">
            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <?php echo e($message); ?>

            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </span>
    </div>
    <div class="input-field">
        <?php echo Form::text('number',  null, [
                     'class' => ' number',
                     'id'=>'number',
                     'placeholder' => 'Phone Number',
                 ]); ?>

        <span class="text-danger" style="font-size:15px">
            <?php $__errorArgs = ['number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <?php echo e($message); ?>

            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </span>
    </div>
    <div class="input-field">
        <?php echo Form::text('address',  null, [
                     'class' => ' address',
                     'placeholder' => 'Email Address',
                 ]); ?>

        <span class="text-danger" style="font-size:15px">
            <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <?php echo e($message); ?>

            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </span>
    </div>
    <div class="input-field">
        <?php echo Form::textarea('massage',  null, [
                     'class' => ' massage',
                     'placeholder' => 'Message',
                     'rows'=>'4'
                 ]); ?>

        <span class="text-danger" style="font-size:15px">
            <?php $__errorArgs = ['massage'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <?php echo e($message); ?>

            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </span>
    </div>

<?php echo Form::submit('Enquire', ['class' => 'save primary-button', 'id' => 'btnsubmit1']); ?>


<?php echo e(Form::close()); ?>


<?php /**PATH D:\OSPanel\domains\viraj_joshi\www\resources\views/frontend/component/top_page.blade.php ENDPATH**/ ?>