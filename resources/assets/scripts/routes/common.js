export default {
  init() {
    // Disable default event for # links
    $('a[href="#"]').on('click', ev => ev.preventDefault());
    // Open external all links in a new window
    $(this.externalLinksSelector).attr('target', '_blank');
  },
  get externalLinksSelector () {
    return `a[href^=http]:not([href^="${this.host}"])`;
  },
  get host () {
    return `${window.location.protocol}//${window.location.host}`;
  },
};
