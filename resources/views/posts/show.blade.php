@extends('common.master')

@section('content')
    <section class="hero  is-large  is-bold is-primary"
             style="background: url('{{$post->img_url}}') no-repeat center center; background-size: cover;">
        <div class="hero-body">
            <div class="container">
                <p class="title is-2">{{$post->title}}</p>
                <p class="subtitle is-3"></p>

            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">

                <div class="column is-12">

                    <div class="content">
                        <p>Published at: {{ $post->published_at }}</p>

                        {!! $post->body !!}
                    </div>
                </div>

            </div>
            <div>
                <h2>Foos</h2>
                <table class="table">
                    <thead>
                    <td>Name</td>
                    <td>Thud</td>
                    </thead>
                    <tbody>

                    @foreach($post->foos as $foo)
                        <td>{{$foo->name}}</td>
                        <td>{{$foo->thud}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
    </section>
@endsection


