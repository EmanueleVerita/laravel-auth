@extends('layouts.app')

@section('page-title', 'All Posts')

@section('main-content')
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <th scope="row">
                                {{ $post->id }}
                            </th>

                            <td>
                                {{ $post->Title }}
                            </td>

                            <td>
                                {{ $post->Slug }}
                            </td>

                            <td>
                                <a href="{{ route('admin.posts.show' , ['post' => $post->id]) }}" class="btn btn-primary">
                                    Show
                                </a>
    
                                <a href="{{ route('admin.posts.edit' , ['post' => $post->id]) }}" class="btn btn-warning">
                                    Modify
                                </a>
    
                                <form action="{{ route('admin.posts.destroy' , ['post' => $post->id]) }}" method="POST" onsubmit="return confirm('Sei sicuro di voler eliminare il post?')">
                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-danger" type="submit">
                                        Elimina
                                    </button>

                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection