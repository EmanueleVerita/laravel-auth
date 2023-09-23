@extends('layouts.app')

@section('page-title', 'Tutti i Post')

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


            <form action="{{ routes('admin.posts.store') }}" method="post">
                
                @csrf


                <div>
                    <label for="title">Titolo</label>
                    <input type="text" name="title" required maxlength="255" value="{{ old('title') }}">
                </div>

                <div>
                    <label for="content">Contenuto</label>
                    <textarea name="content"  rows="3" required>{{ old('content') }}</textarea>
                </div>

                <div>
                    <button type="submit" class="btn btn-success">
                        + Aggiugngi
                    </button>
                </div>
        
            </form>
        </div>
    </div>
@endsection
