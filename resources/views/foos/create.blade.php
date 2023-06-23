@extends('common.master');
@section('content')
    ;
    <div id="wrapper">
        <div id="page" class="container">
            <h1 class="heading has-text-weight-bold is-size-4">New Foo</h1>
            <form method="POST" action="/foos">
                @csrf

                <div class="field">
                    <label class="label" for="name">Name</label>

                    <div class="control">
                        <input class="input" type="text" name="name" id="name" placeholder="{{ __('Name') }}" value="{{old('name')}}">
                        @if ($errors->any())
                            <div class="help is-danger">
                                <ul>
                                    {{$errors->first('name')}}
                                </ul>
                            </div>
                        @else
                            <ul class="help">The name of the Foo has to be at least 15 characters long.</ul>
                        @endif
                    </div>
                </div>
                <div class="field">
                    <label class="label" for="email">Email</label>
                    <div class="control">
                        <input class="input" type="text" name="email" id="email" placeholder="{{ __('Email Address') }}" value="{{old('email')}}">
                        @if ($errors->any())
                            <div class="help is-danger">
                                <ul>
                                    {{$errors->first('email')}}
                                </ul>
                            </div>
                        @else
                                <ul class="help">Please input a valid email address.</ul>
                        @endif
                    </div>
                </div>
                <div class="field">
                    <label class="label" for="post_id">Post</label>

                    <div class="control">
                        <select id="post_id" name="post_id">
                            @foreach($posts as $post)
                                <option value="{{$post->id}}">{{$post->title}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div>
                    <label class="label" for="thud">Thud</label>
                    <div class="control">
                        <input class="input" type="number" name="thud" id="thud" value="{{old('thud')}}">
                        <p class="help is-danger">{{$errors->first('thud')}}</p>
                    </div>
                </div>
                <div>
                    <p>Wombat</p>
                    <input type="radio" value="1" id="wombat" name="wombat"> TRUE</input>
                    <input type="radio" value="0" id="wombat" name="wombat" checked="checked"> FALSE</input>
                </div>
                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Submit</button>
                    </div>
                </div>
            </form>
            <a href="{{url()->previous()}}">Cancel</a>
        </div>
    </div>
@endsection;
