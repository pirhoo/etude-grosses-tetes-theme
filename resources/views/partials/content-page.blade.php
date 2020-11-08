@if (has_post_thumbnail())
  <div class="page__thumbnail">
    @php the_post_thumbnail('post-thumbnail', ['class' => 'page__thumbnail__image']) @endphp
    <div class="page__thumbnail__caption">
      @php the_post_thumbnail_caption() @endphp
    </div>
  </div>
@endif

<div class="d-flex justify-content-center">
  <div class="page__sidebar page__sidebar--left">

  </div>
  <div class="page__content">
    @php the_content() @endphp
  </div>

  <div class="page__sidebar page__sidebar--right">
    
  </div>
</div>

{!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
