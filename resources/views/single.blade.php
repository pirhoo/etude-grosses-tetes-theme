@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.single-header')
    @include('partials.content-single')
  @endwhile
@endsection
