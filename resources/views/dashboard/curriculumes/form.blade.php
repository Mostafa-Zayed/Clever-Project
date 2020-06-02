<div class="row">
    @php $input = 'course_id'; @endphp
    <div class="col-md-12">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Course Name : </label>
            <select name="{{$input}}" class="form-control @error($input) is-invalid @enderror">
                @foreach($courses as $course)
                    <option value="{{$course->id}}">{{$course->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>
<br/>
<div class='row'>
    @php $input = 'syllabus'; @endphp 
    <div class="col-md-12">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Syllabus Describe : </label>
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
<div class='row'>
    @php $input = 'syllabus_link'; @endphp 
    <div class="col-md-12">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Syllabus Link : </label>
            <input type="url" id="{{$input}}" class="form-control @error($input) is-invalid @enderror" name="{{$input}}" value="{{isset($row) ? $row->{$input} : old($input)}}" required autocomplete="{{$input}}">
            @error($input)
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
</div>