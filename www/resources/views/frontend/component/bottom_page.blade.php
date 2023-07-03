

{!! Form::open([
      'url' => route('home.store.bottom'),
      'method' => 'POST',
      'id'=>'Enquery-bottom-form',

      'class'=>'inquery-form'
  ]) !!}
<div class="input-field">
    {!! Form::text('name1',  null, [
                  'class' => ' name',
                  'placeholder' => 'Your Name',
              ]) !!}
    <span class="text-danger" style="font-size:15px">
            @error('name1')
        {{ $message }}
        @enderror
        </span>
</div>
<div class="input-field">
    {!! Form::text('number1',  null, [
                 'class' => ' number',
                 'placeholder' => 'Phone Numbere',
             ]) !!}
    <span class="text-danger" style="font-size:15px">
            @error('number1')
        {{ $message }}
        @enderror
        </span>
</div>
<div class="input-field">
    {!! Form::text('address1',  null, [
                 'class' => ' address',
                 'placeholder' => 'Email Address',
             ]) !!}
    <span class="text-danger" style="font-size:15px">
            @error('address1')
        {{ $message }}
        @enderror
        </span>
</div>
<div class="input-field">
    {!! Form::textarea('massage1',  null, [
                 'class' => ' massage',
                 'placeholder' => 'Message',
                 'rows'=>'4'
             ]) !!}
    <span class="text-danger" style="font-size:15px">
            @error('massage1')
        {{ $message }}
        @enderror
        </span>
</div>

{!! Form::submit('Enquire', ['class' => 'save primary-button', 'id' => 'btnsubmit']) !!}

{{ Form::close() }}
