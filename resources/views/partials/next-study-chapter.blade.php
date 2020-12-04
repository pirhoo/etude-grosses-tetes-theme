@if (Chapter::hasNextChapter())
  <div class="next-study-chapter">
    <div class="next-study-chapter__container">
      <h3 class="next-study-chapter__container__heading">Suite de l'étude</h3>
      <a href="{{ get_permalink(Chapter::nextChapter()) }}" class="next-study-chapter__container__link d-flex">
        <span class="flex-grow-1">
          <h4 class="next-study-chapter__container__link__title">
            {{ Chapter::nextChapter()->post_title }}
          </h4>
          <p class="mb-0">
            {{ Chapter::nextChapter()->post_excerpt }}
          </p>
        </span>
        <span class="p-3 align-self-center">
          <span class="dashicons dashicons-arrow-right-alt text-primary next-study-chapter__container__link__arrow"></span>
        </span>
      </a>
    </div>
  </div>
@endif
