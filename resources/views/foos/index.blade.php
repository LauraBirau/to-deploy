@extends('common.master')

@section('content')
    <section class="hero  is-medium  is-bold is-primary">
        <div class="hero-body">
            <div class="container">
                <p class="title is-2"> Foos</p>
            </div>
        </div>
    </section>
    <section>
        <div>
            <a href="foos/create" class="button">Create new foo</a>
            <table class="table">
                <thead>
                <td>Name</td>
                <td>Email</td>
                <td>Post</td>
                <td>Thud</td>
                <td>Wombat</td>
                <td>Actions</td>
                </thead>
                <tbody>

                @foreach($foos as $foo)

                    <tr @if($foo->wombat === 1) style="background-color:powderblue" @endif>
                        <td><a href="/foos/{{$foo->id}}">{{$foo->name}}</a></td>
                        <td>{{$foo->email}}</td>
                        <td>{{$foo->post->title}}</td>
                        <td>{{$foo->thud}}</td>
                        <td>{{$foo->wombat}}</td>
                        <td><a class="button" href="/foos/{{$foo->id}}/edit">Edit</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{$foos->links()}}
    </div>
    </section>
@endsection
