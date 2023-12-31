@extends('layouts.app')

@section('page-title', $post->title)

@section('main-content')
    <div class="row">
        <div class="col">
           @if ($errors-> any())

            <div class="alert alert-danger">
                 <ul>
                    @foreach ($errors->all() as $error)
                        <li>
                            {{ $error }}
                        </li>
                    @endforeach
                 </ul>
            </div>
               
           @endif


            <form action="{{ routes('admin.posts.update' , ['post' => $post->id]) }}" method="post">
                
                @csrf

                @method('PUT')

                <div>
                    <label for="title">Titolo</label>
                    <input type="text" name="title" required maxlength="255" value="{{ old('title' , $post->title) }}">
                </div>

                <div>
                    <label for="content">Contenuto</label>
                    <textarea name="content"  rows="3" required>{{ old('content' , $post->content)}}</textarea>
                </div>

                <div>
                    <button type="submit" class="btn btn-warning">
                        Aggiorna
                    </button>
                </div>
        
            </form>
        </div>
    </div>
@endsection