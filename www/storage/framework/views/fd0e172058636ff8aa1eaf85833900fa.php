

<?php echo Form::open([
      'url' => route('home.store.bottom'),
      'method' => 'POST',
      'id'=>'Enquery-bottom-form',

      'class'=>'inquery-form'
  ]); ?>

<div class="input-field">
    <?php echo Form::text('name1',  null, [
                  'class' => ' name',
                  'placeholder' => 'Your Name',
              ]); ?>

    <span class="text-danger" style="font-size:15px">
            <?php $__errorArgs = ['name1'];
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
    <?php echo Form::text('number1',  null, [
                 'class' => ' number',
                 'placeholder' => 'Phone Numbere',
             ]); ?>

    <span class="text-danger" style="font-size:15px">
            <?php $__errorArgs = ['number1'];
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
    <?php echo Form::text('address1',  null, [
                 'class' => ' address',
                 'placeholder' => 'Email Address',
             ]); ?>

    <span class="text-danger" style="font-size:15px">
            <?php $__errorArgs = ['address1'];
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
    <?php echo Form::textarea('massage1',  null, [
                 'class' => ' massage',
                 'placeholder' => 'Message',
                 'rows'=>'4'
             ]); ?>

    <span class="text-danger" style="font-size:15px">
            <?php $__errorArgs = ['massage1'];
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

<?php echo Form::submit('Enquire', ['class' => 'save primary-button', 'id' => 'btnsubmit']); ?>


<?php echo e(Form::close()); ?>

<?php /**PATH D:\OSPanel\domains\viraj_joshi\www\resources\views/frontend/component/bottom_page.blade.php ENDPATH**/ ?>