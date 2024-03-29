<div class="form-group @error('category_id') has-error @enderror">
    {{Form::label('category_id', 'Select Category')}}
    {{Form::select('category_id', \App\Models\Category::list(), null, ['class'=>'form-control', 'placeholder'=>'Select Category'])}}
    <span class="errspan" id="errspan">{{ $errors->first('category_id') }}</span>
</div>
<div class="form-group @error('post') has-error @enderror">
    {!! Form::label('post', 'Post Content',[],false) !!}
    {!! Form::textarea('post', null, ['class'=>'form-control', 'rows'=> 4]) !!}
    <span class="errspan" id="errspan">{{ $errors->first('post') }}</span>
</div> 