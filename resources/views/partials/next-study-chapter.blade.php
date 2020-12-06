@if (Chapter::hasNextChapter())
  <div class="next-study-chapter">
    <div class="next-study-chapter__container">
      <h3 class="next-study-chapter__container__heading">
        Pour aller plus loin
      </h3>
      <a href="{{ get_permalink(Chapter::nextChapter()) }}" class="next-study-chapter__container__link d-flex">
        <span class="flex-grow-1 d-flex align-items-start">
          {!! get_the_post_thumbnail(Chapter::nextChapter(), 'next-study-chapter', ['class' => 'next-study-chapter__container__link__thumbnail']) !!}
          <div>
            <h4 class="next-study-chapter__container__link__title">
              {{ Chapter::nextChapter()->post_title }}
            </h4>
            <p class="mb-0">
              {{ Chapter::nextChapter()->post_excerpt }}
            </p>
          </div>
        </span>
        <span class="p-3 align-self-center">
          <span class="dashicons dashicons-arrow-right-alt text-primary next-study-chapter__container__link__arrow"></span>
        </span>
      </a>
    </div>
  </div>
@endif
