
<div class='row'>
    @php $input = 'name'; @endphp 
    <div class="col-md-12">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Question Name : </label>
            <input type="text" class="form-control @error($input) is-invalid @enderror" name="{{$input}}" value="{{isset($row) ? $row->{$input} : old($input)}}" required autocomplete="{{$input}}" autofocus>
            @error($input)
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
</div>
<br>
<div class='row'>
    @php $input = 'answer'; @endphp 
    <div class="col-md-12">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Answer : </label>
            <textarea class='form-control @error($input) is-invalid @enderror' rows='5' name="{{$input}}">
                {{isset($row) ? $row->{$input} : old($input)}}
            </textarea>                
            @error($input)
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
</div>
<br>