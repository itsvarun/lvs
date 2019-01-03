@extends('layouts.master')

@section('content')

    @include('layouts.header')

    <section class="section">
        <div class="container">
            <router-view></router-view>
        </div>
    </section>

@endsection
