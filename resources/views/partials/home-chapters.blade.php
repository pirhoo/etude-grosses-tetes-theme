<div class="home__chapters">
  <div class="container home__chapters__panel">
    <div class="row no-gutters">
      <div class="col-12 col-lg-6">
        <div class="home__chapters__panel__interviews py-4 pr-lg-5 d-flex flex-column h-100">
          <div class="home__chapters__panel__interviews__list">
            @foreach (FrontPage::interviews() as $interview)
              <a href="{{ get_permalink($interview) }}" class="home__chapters__panel__interviews__list__item">
                <h5 class="home__chapters__panel__interviews__list__item__title">
                  {{ $interview->post_title }}
                </h5>
                <p class="home__chapters__panel__interviews__list__item__excerpt">
                  {{ $interview->post_excerpt }}
                </p>
                {!! get_the_post_thumbnail($interview, 'home-md', ['class' => 'home__chapters__panel__interviews__list__item__thumbnail']) !!}
              </a>
            @endforeach
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6 home__chapters__panel__list">
        @foreach (FrontPage::studyChapters() as $chapter)
          <a href="{{ get_permalink($chapter) }}" class="home__chapters__panel__list__item d-flex text-dark">
            <div class="flex-grow-1">
              <h5 class="home__chapters__panel__list__item__title mb-0">
                {{ $chapter->post_title }}
              </h5>
              <p class="home__chapters__panel__list__item__excerpt">
                {{ $chapter->post_excerpt }}
              </p>
            </div>
            <div class="home__chapters__panel__list__item__thumbnail">
              {!! get_the_post_thumbnail($chapter, 'home-sm', ['class' => 'home__chapters__panel__list__item__thumbnail__image']) !!}
            </div>
          </a>
        @endforeach
      </div>
    </div>
  </div>
</div>
