@extends('common.master');
@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1 class="heading has-text-weight-bold is-size-4">Update Foo</h1>
            <form method="POST" action="/foos/{{$foo->id}}">
                @csrf
                @method('PUT')
                <div class="field">
                    <label class="label" for="name">Name</label>

                    <div class="control">
                        <input class="input" type="text" name="name" id="name" value="{{$foo->name}}">
                        <p class="help is-danger">{{$errors->first('name')}}</p>
                    </div>
                </div>
                <div class="field">
                    <label class="label" for="email">Email</label>

                    <div class="control">
                        <input class="input" type="text" name="email" id="email" value="{{$foo->email}}">
                        <p class="help is-danger">{{$errors->first('email')}}</p>
                    </div>
                </div>
                <div class="field">
                    <label class="label" for="post">Post</label>
                    <div class="control">
                        <select id="post_id" name="post_id">
                            @foreach($posts as $post)
                                <option
                                    @if($foo->post->id === $post->id) selected="selected" @endif>{{$post->title}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="excerpt">Thud</label>

                    <div class="control">
                        <input class="input" type="number" name="thud" id="thud" value="{{$foo->thud}}">
                        <p class="help is-danger">{{$errors->first('thud')}}</p>
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="wombat">Wombat</label>
                    <p class="help is-danger">{{$errors->first('wombat')}}</p>
                </div>
                <div class="control">
                    <input type="radio" value="1" id="wombat" name="wombat"
                           @if($foo->wombat === 1)checked="checked" @endif> TRUE
                    <input type="radio" value="0" id="wombat" name="wombat"
                           @if($foo->wombat === 0)checked="checked" @endif> FALSE
                </div>
                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Submit</button>
                    </div>
                </div>
            </form>
            <form method="POST" action="/foos/{{ $foo->id }}">
                @csrf
                @method('DELETE')
                <button class="button is-link" type="submit">Delete</button>
            </form>
            <a href="{{url()->previous()}}">Cancel</a>
        </div>
    </div>
@endsection;
