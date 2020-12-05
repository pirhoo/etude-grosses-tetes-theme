<div class="home__chapters">
  <div class="container home__chapters__panel">
    <div class="row no-gutters">
      <div class="col-7">
        <div class="py-4 pr-4 d-flex flex-column h-100">
          @include('partials/home-interviews')
        </div>
      </div>
      <div class="col home__chapters__panel__list">
        @foreach (FrontPage::studyChapters() as $chapter)
          <a href="{{ get_permalink($chapter) }}" class="home__chapters__panel__list__item d-block text-dark">
            <h5 class="home__chapters__panel__list__item__title mb-0">
              {{ $chapter->post_title }}
            </h5>
            <p class="home__chapters__panel__list__item__excerpt">
              {{ $chapter->post_excerpt }}
            </p>
          </a>
        @endforeach
      </div>
    </div>
  </div>
</div>
