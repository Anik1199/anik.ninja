@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="Contact {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="Get in touch with {{ $page->siteName }}" />
@endpush

@section('body')

<section>
    <h1 class="text-center">Get in touch</h1>
    <p class="text-center text-3xl">
      <a href="mailto:anik@lineageos.org">
        &#8594; Send me an email.
      </a>
    </p>
  </section>

@stop
