<div class="home__interviews">
  <div class="home__interviews__container">
    <div class="home__interviews__container__list">
      @foreach (FrontPage::interviews() as $interview)
        <a href="{{ get_permalink($interview) }}" class="home__interviews__container__list__item">
          <h5 class="home__interviews__container__list__item__title">
            {{ $interview->post_title }}
          </h5>
          <p class="home__interviews__container__list__item__excerpt">
            {{ $interview->post_excerpt }}
          </p>
          {!! get_the_post_thumbnail($interview, 'home-md', ['class' => 'home__interviews__container__list__item__thumbnail']) !!}
        </a>
      @endforeach
    </div>
  </div>
</div>
