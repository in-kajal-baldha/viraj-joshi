{!! Form::open([
      'url' => route('home.store'),
      'method' => 'POST',
      'id'=>'Enquery-top-form',
      'class'=>'inquery-form'
  ]) !!}
    <div class="input-field">
        {!! Form::text('name',  null, [
                      'class' => ' name',
                      'placeholder' => 'Your Name',
                  ]) !!}
        <span class="text-danger" style="font-size:15px">
            @error('name')
            {{ $message }}
            @enderror
        </span>
    </div>
    <div class="input-field">
        {!! Form::text('number',  null, [
                     'class' => ' number',
                     'id'=>'number',
                     'placeholder' => 'Phone Number',
                 ]) !!}
        <span class="text-danger" style="font-size:15px">
            @error('number')
            {{ $message }}
            @enderror
        </span>
    </div>
    <div class="input-field">
        {!! Form::text('address',  null, [
                     'class' => ' address',
                     'placeholder' => 'Email Address',
                 ]) !!}
        <span class="text-danger" style="font-size:15px">
            @error('address')
            {{ $message }}
            @enderror
        </span>
    </div>
    <div class="input-field">
        {!! Form::textarea('massage',  null, [
                     'class' => ' massage',
                     'placeholder' => 'Message',
                     'rows'=>'4'
                 ]) !!}
        <span class="text-danger" style="font-size:15px">
            @error('massage')
            {{ $message }}
            @enderror
        </span>
    </div>

{!! Form::submit('Enquire', ['class' => 'save primary-button', 'id' => 'btnsubmit1']) !!}

{{ Form::close() }}

