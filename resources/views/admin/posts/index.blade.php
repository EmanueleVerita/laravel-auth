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

                            <td></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection