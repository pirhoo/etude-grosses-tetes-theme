@extends('layouts.app')

@section('content')

  <div class="container py-5">
    <h1 class="mb-5">
      {!! App::title() !!}
    </h1>

    @if (!have_posts())
      <div class="alert alert-warning">
        {{ __('Sorry, no results were found.', 'sage') }}
      </div>
      {!! get_search_form(false) !!}
    @endif

    <div class="list-group">
      @while(have_posts()) @php the_post() @endphp
        @include('partials.content-search')
      @endwhile
    </div>

    {!! get_the_posts_navigation() !!}
  </div>
@endsection
