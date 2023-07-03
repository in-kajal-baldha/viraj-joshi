
<label for="{{$name}}">{!!$label!!}{!! $required == 'true' ? '<span style="color: red;">*</span>' : '' !!}</label>
@error($name)
<span class="invalid-feedback" style="display: inline;">{{$message}}</span>
@enderror
{!! Form::select($name,$options,$value,array_merge_recursive(['class'=>$errors->has($name)?'form-select is-invalid':'form-select','style'=>'width:100%'],$attributes)) !!}
