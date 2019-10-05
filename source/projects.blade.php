@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="Projects {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="Projects I've worked on recently." />
@endpush

@section('body')
    <div>
        <h1>Projects</h1>
        <p>A few recent projects I've worked on and learned from.</p>

        <div class="my-8">
          <h2 class="mb-2">LineageOS</h2>
            <a 
            href="https://github.com/LineageOS"
            class="inline-block bg-grey-light hover:bg-blue-lighter leading-loose tracking-wide text-grey-darkest uppercase text-xs font-semibold rounded mr-4 my-2 px-3 pt-px"
            >
            Github Repo
            </a>
          <p>I have maintained Xiaomi Redmi 3 and Xiaomi Redmi 4 Prime.
          </p>
        </div>

        <!--<div class="my-8">
          <h2 class="mb-2"></h2>
            <a 
            href=""
            class="inline-block bg-grey-light hover:bg-blue-lighter leading-loose tracking-wide text-grey-darkest uppercase text-xs font-semibold rounded mr-4 my-2 px-3 pt-px"
            >
            Repo
            </a>
          <p>
          </p>
        </div>

        <div class="my-8">
          <h2 class="mb-2"></h2>
            <a 
            href=""
            class="inline-block bg-grey-light hover:bg-blue-lighter leading-loose tracking-wide text-grey-darkest uppercase text-xs font-semibold rounded mr-4 my-2 px-3 pt-px"
            >
            Repo
            </a>
          <p>
          </p>
        </div>

        <div class="my-8">
          <h2 class="mb-2"></h2>
            <a 
            href=""
            class="inline-block bg-grey-light hover:bg-blue-lighter leading-loose tracking-wide text-grey-darkest uppercase text-xs font-semibold rounded mr-4 my-2 px-3 pt-px"
            >
            Repo
            </a>
          <p>
          </p>
        </div>

        <div class="my-8">
          <h2 class="mb-2"></h2>
            <a 
            href=""
            class="inline-block bg-grey-light hover:bg-blue-lighter leading-loose tracking-wide text-grey-darkest uppercase text-xs font-semibold rounded mr-4 my-2 px-3 pt-px"
            >
            Repo
            </a>
          <p>
          </p>
        </div>

      </div>-->
@endsection
