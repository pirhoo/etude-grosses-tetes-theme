<div class="home__chapters">
  <div class="container home__chapters__panel">
    <div class="row">
      <div class="col home__chapters__panel__body">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        </p>
        <p>
          Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        </p>
        <p>
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
      </div>
      <div class="col home__chapters__panel__list">
        @foreach (FrontPage::studyChapters() as $chapter)
          <a href="{{ get_permalink($chapter) }}" class="home__chapters__panel__list__item d-block text-dark">
            <h4 class="home__chapters__panel__list__item__title mb-0">
              {{ $chapter->post_title }}
            </h4>
            <p class="home__chapters__panel__list__item__excerpt">
              {{ $chapter->post_excerpt }}
            </p>
          </a>
        @endforeach
      </div>
    </div>
  </div>
</div>
