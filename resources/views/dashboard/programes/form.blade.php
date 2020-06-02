<div class='row'>
    @php $input = 'name'; @endphp 
    <div class="col-md-12">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating" for="{{$input}}">Programe Name : </label>
            <input type="text" id="{{$input}}" class="form-control @error($input) is-invalid @enderror" name="{{$input}}" value="{{isset($row) ? $row->{$input} : old($input)}}" required autocomplete="{{$input}}" autofocus>
            @error($input)
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
</div>
<br>
<div class="row">
    @php $input = 'category_id'; @endphp
    <div class="col-md-12">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Category Name : </label>
            <select name="{{$input}}" class="form-control @error($input) is-invalid @enderror">
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{ucfirst($category->name)}}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>
<br/>
<div class="row">
    @php $input = 'type_id'; @endphp
    <div class="col-md-12">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating" for="{{$input}}">Type Name : </label>
            <select name="{{$input}}" id="{{$input}}" class="form-control @error($input) is-invalid @enderror">
                @foreach($types as $type)
                    <option value="{{$type->id}}">{{ucfirst($type->name)}}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>
<br>
<div class="row">
    @php $input = 'instructors[]'; @endphp
    <div class="col-md-12">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Instructors : </label>
            <select name="{{$input}}" class="form-control @error($input) is-invalid @enderror" multiple style="height:100px;">
                @foreach($instructors as $instructor)
                    <option value="{{$instructor->id}}">{{ucfirst($instructor->user->full_name)}}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>
<br>
<div class='row'>
    @php $input = 'describe'; @endphp 
    <div class="col-md-12">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating" for="{{$input}}">Description : </label>
            <textarea class='form-control @error($input) is-invalid @enderror' rows='5' name="{{$input}}" id="{{$input}}">
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
<div class='row'>
@php $input = 'meta_keywords'; @endphp                    
    <div class="col-md-8">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating" for="{{$input}}">Meta KeyWords : </label>
            <input type="text" id="{{$input}}" class="form-control @error($input) is-invalid @enderror" name={{$input}} value="{{isset($row) ? $row->{$input} : old($input)}}"  autocomplete="{{$input}}" autofocus>
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
@php $input = 'meta_describe'; @endphp
    <div class="col-md-12">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating" for="{{$input}}">Meta Description : </label>
            <textarea class='form-control @error($input) is-invalid @enderror' rows='5' name="{{$input}}" id="{{$input}}">
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
            <label>Select Program Image : </label>
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
        <div id='program_image'></div>
    </div>
</div>