@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="{{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="{{ $page->blogDescription }}" />
@endpush

@section('body')

<section class="flex-col justify-center items-center text-center">

    <img src="/assets/img/avatar.jpg"
        alt="Anik khan"
        class="inline-flex rounded-full h-32 w-32 bg-contain mx-auto">

    <h3>22 | Student | Device Maintainter | LineageOS | Haha</h3>

    <p>Currently, I work at <a href="https://lineageos.org">LineageOS</a>.</p>

    <p>I'm also recognized developer at <a href="https://forum.xda-developers.com/member.php?u=6083514">Xda Developers</a>.</p>

    <p>Whenever i explore new stuff i try to write down some <a href="/blog">blog post.</a></p>

</section>

@stop
