// import external dependencies
import 'jquery';

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import page from './routes/page';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // Pages
  page,
});
