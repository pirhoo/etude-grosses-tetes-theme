@extends('layouts.app')

@section('content')

  <div class="container py-5">
    <div class="mb-5 d-flex">
      <h1 class="m-0 mr-auto">
        {!! $app->title() !!}
      </h1>
      {!! get_search_form(false) !!}
    </div>

    @if (!have_posts())
      <div class="alert alert-warning">
        {{ __('Sorry, no results were found.', 'sage') }}
      </div>
    @endif

    <div class="list-group">
      @while(have_posts()) @php the_post() @endphp
        @include('partials.content-search')
      @endwhile
    </div>

    {!! get_the_posts_navigation() !!}
  </div>
@endsection
