@extends('back.layouts.layout')

@section('content')

    @include('back.pages.navbar')

    @include('back.pages.header')

    <section class="ls ms section_padding_top_50 section_padding_bottom_50 columns_padding_5">
        <div class="container-fluid">
            @yield('content_body')
        </div>
    </section>

    @include('back.pages.footer')

@endsection
