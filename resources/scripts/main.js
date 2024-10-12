import 'jquery';

import { domReady } from '@roots/sage/client';

import Router from './util/Router';
import common from './routes/common';
import page from './routes/page';

const main = async (err) => {
  if (err) {
    // handle hmr errors
    console.error(err);
  }

  /** Populate Router instance with DOM routes */
  const routes = new Router({ common, page });

  // Load Events
  routes.loadEvents();
};

/**
 * Initialize
 *
 * @see https://webpack.js.org/api/hot-module-replacement
 */
domReady(main);

import.meta.webpackHot?.accept(main);