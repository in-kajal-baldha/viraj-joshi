<?php if(!empty($label)): ?>
    <label for="<?php echo e($name); ?>" class="form-label"><?php echo $label; ?><?php echo $required ? '<span style="color: red;">*</span>' : ''; ?></label>
<?php endif; ?>
<?php
    if(strpos($attributes['class'], 'only-number-allow')){
    $attributes['oninput'] = "return $(this).val($(this).val().replace(/[^0-9]/g, ''))";
    }
?>
<?php echo e(Form::text($name, $value,array_merge_recursive(['class' => $errors->has($name)?'form-control is-invalid':'form-control'],$attributes))); ?>

<?php $__errorArgs = [$name];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
<span class="invalid-feedback" role="alert"><strong><?php echo e($message); ?></strong></span>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
<?php /**PATH D:\OSPanel\domains\viraj_joshi\www\resources\views/components/input.blade.php ENDPATH**/ ?>