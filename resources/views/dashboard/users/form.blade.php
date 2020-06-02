<div class="row">
    @php $input = 'full_name'; @endphp
    <div class="col-md-8">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Full Name : </label>
            <input type="text" class="form-control @error($input) is-invalid @enderror" name="{{$input}}" value="{{isset($row) ? $row->{$input} : old($input)}}" required autocomplete="{{$input}}" autofocus>
            @error('full_name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
</div>
<div class='row'>
    @php $input = 'email'; @endphp 
    <div class="col-md-8">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Email address : </label>
            <input type="{{$input}}" id="{{$input}}" class="form-control @error($input) is-invalid @enderror" name="{{$input}}" value="{{isset($row) ? $row->{$input} : old($input)}}" required autocomplete="{{$input}}">
            @error($input)
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
</div>
<div class="row">
    @php $input = 'password'; @endphp 
    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating" for="password">{{ __('Password') }}</label>
            <input type="{{$input}}" id="{{$input}}" class="form-control @error($input) is-invalid @enderror" name="{{$input}}"  autocomplete="new-{{$input}}">
            @error($input)
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    @php $input = 'password-confirm'; @endphp
    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating" for="password-confirm">{{ __('Confirm Password') }}</label>
            <input id="{{$input}}" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">
        </div>
    </div>
</div>
<br/>

<div class="row">   
    @php $input = 'status'; @endphp
    <div class='col-md-4'>
        <label class='bmd-label-floating'>Status : </label>
    </div>
    <div class="col-md-4">
        <div class="form-check form-check-radio">
            <label class="form-check-label" for='active'>    
                <input class="form-check-input @error($input) is-invalid @enderror" id="active" type="radio" name="{{$input}}"  value="1" {{(isset($row) && $row->status === 1) ? 'checked' : ''}}>Active
                <span class="circle">
                    <span class="check"></span>
                </span>
            </label>
        </div>
    </div>
    <div class='col-md-4'>
        <div class="form-check form-check-radio">
            <label class="form-check-label" for='inactive'>
                <input class="form-check-input @error($input) is-invalid @enderror" type="radio" name="{{$input}}" id="inactive" value="0" {{(isset($row) && $row->status === 0) ? 'checked' : ''}}>Not Active
                <span class="circle">
                    <span class="check"></span>
                </span>
            </label>
        </div>
    </div>  
</div>
<br>
<div class='row'>
    @php $input = 'image'; @endphp 
    <div class='col-md-12'>
        <div class="form-group bmd-form-group">
            <label>Select Your Image : </label>
            <input type="file" class="form-control-file @error($input) is-invalid @enderror" name="{{$input}}">
            @error($input)
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
</div>
<div class='row'>
    <div class='col-md-12'>
        <div id='person_image'></div>
    </div>
</div>
