<footer class="footer">
  <div class="footer__container container d-block d-md-flex text-center text-md-left">
    <p>
      <img src="@asset('images/ajl-white.png')" height="18" class="mr-2" /> Une étude de l'Association des Journalistes LGBTI
    </p>
    <p class="ml-auto">
      © {{ App::year() }} - <a href="{{ get_permalink(get_page_by_title('Mentions Légales')) }}">Mentions Légales</a>
    </p>
  </div>
</footer>
