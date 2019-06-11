@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
            {{-- {{Form::file('cover_image', ['class' => 'custom-file-input']) }} tried....--}}
            {{-- {{Form::label('cover_image', 'Choose file', ['class' => 'custom-file-label']) }} --}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection

{{-- <div class="custom-file">
    <input type="file" id="myfile" class="custom-file-input">
    <label class="custom-file-label" for="myfile">Choose file</label>
</div> --}}
