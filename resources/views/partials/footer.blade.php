<footer class="footer">
  <div class="footer__container container d-flex">
    <p>
      <img src="@asset('images/ajl-white.png')" height="18" /> Une étude de l'Association des Journalistes LGBTI
    </p>
    <p class="ml-auto">
      © {{ App::year() }} - <a href="{{ get_permalink(get_page_by_title('Mentions Légales')) }}">Mentions Légales</a>
    </p>
  </div>
</footer>
