<div class="single__header">
    <h1 class="single__header__title">
      {!! $app->title() !!}
    </h1>
    @if (is_single() || is_page())
      <div class="single__header__meta d-flex align-items-start">
        <div class="single__header__meta__author d-block d-sm-flex justify-content-start align-items-center flex-grow-1">
          <div class="d-flex flex-row-reverse flex-sm-row align-items-center">
            @section('author')
              {!! get_avatar(get_the_author_meta('ID'), 96, '', get_the_author(), ['class' => 'single__header__meta__author__avatar']) !!}
              <p class="my-0 mr-auto ml-sm-2">
                Par
                <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" rel="author" class="fn">
                  {{ get_the_author() }}
                </a>
              </p>
            @show
          </div>
          <time class="ml-auto text-capitalize" datetime="{{ get_post_time('c', true) }}">
            @php the_date('F Y') @endphp
          </time>
        </div>
        <div class="single__header__meta__share">
          <a href="#" class="single__header__meta__share__toggler" title="Partager">
            <span class="sr-only">Partager</span>
            <span class="dashicons dashicons-share-alt2"></span>
          </a>
          <div class="single__header__meta__share__menu">
            {!! do_shortcode('[ssba-buttons]') !!}
          </div>
        </div>
      </div>
    @endif
</div>
