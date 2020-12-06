<div class="single">
  @if (has_post_thumbnail())
    <div class="single__thumbnail">
      @php the_post_thumbnail('post-thumbnail', ['class' => 'single__thumbnail__image']) @endphp
      <div class="single__thumbnail__caption">
        @php the_post_thumbnail_caption() @endphp
      </div>
    </div>
  @endif

  <div class="d-block d-md-flex justify-content-center">
    <div class="single__sidebar single__sidebar--left"></div>

    <div class="single__content post-content">
      @php the_content() @endphp
    </div>

    <div class="single__sidebar single__sidebar--right">
      {!! do_shortcode('[ssba-buttons]') !!}
    </div>
  </div>

  @include('partials/next-study-chapter')
</div>
