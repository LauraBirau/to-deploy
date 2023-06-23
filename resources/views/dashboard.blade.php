@extends('common.master')

@section('content')
    <section class="hero  is-medium  is-bold is-primary">
        <div class="hero-body">
        <div class="container">
            <p class="title is-2"> Dashboard</p>
        </div></div>
    </section>

    <section class="section">
        <div class="column is-4-desktop is-12-tablet">
            <div class="columns">
                <div class="column is-8-desktop is-12-tablet">

                    <div class="content">

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
