<div class="page__header">
    <h1 class="page__header__title">
      {!! App::title() !!}
    </h1>
    <div class="page__header__meta">
      <div class="page__header__meta__author d-block d-sm-flex justify-content-start align-items-center">
        <div class="d-flex flex-row-reverse flex-sm-row align-items-center">
          <img class="page__header__meta__author__avatar" src="@asset('images/ajl-full.png')" alt="logo AJL" />
          <p class="my-0 mr-auto ml-sm-2">
            Par l'<a target="_blank" href="https://www.ajlgbt.info">Association des Journalistes LGBTI</a>
          </p>
        </div>
        <div class="ml-auto text-capitalize">
          @php the_date('F Y') @endphp
        </div>
      </div>
    </div>
</div>
