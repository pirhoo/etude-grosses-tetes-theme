<header class="banner">
  <div class="container banner__container">
    <h1 class="font-weight-normal banner__container__heading">
      <a class="banner__container__heading__brand" href="{{ home_url('/') }}">
        <span class="banner__container__heading__brand__prefix">
          Étude
        </span>
        <span class="banner__container__heading__brand__label">
          Les Grosses Têtes
        </span>
      </a>
    </h1>
    @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'container_class' => 'banner__container__nav-primary', 'menu_class' => 'banner__container__nav-primary__menu']) !!}
    @endif
  </div>
</header>
