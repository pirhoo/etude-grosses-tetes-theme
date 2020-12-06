@extends('layouts.app')

@section('content')
  @if (!have_posts())
    <div class="container py-5">
      <div class="alert alert-warning">
        {{ __('Désolé, la page que vous cherchez n\'existe pas.', 'sage') }}
      </div>
    </div>
  @endif
@endsection
