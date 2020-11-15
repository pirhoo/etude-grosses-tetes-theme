<div class="home__chapters">
  <div class="container home__chapters__panel">
    <div class="row no-gutters">
      <div class="col home__chapters__panel__body">
        <h4>100% des émissions contiennent des propos sexistes</h4>
        <p>Part d’émission contenant chaque catégorie d'épisode problématiques, relevés dans les 24 émissions de notre étude.</p>
        <iframe title="Des propos sexistes relevés dans 100% des émissions" aria-label="Histogramme" id="datawrapper-chart-FbfrT" src="https://datawrapper.dwcdn.net/FbfrT/4/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="467"></iframe>
        <script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}}))}();</script>
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
