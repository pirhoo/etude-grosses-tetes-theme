import $ from 'jquery'

export default {
  init() {
    // Disable default event for # links
    $('a[href="#"]').on('click', ev => ev.preventDefault());
    // Open external all links in a new window
    $(this.externalLinksSelector).attr('target', '_blank');
    // Toggle sub-menu
    this.menuItems.on('click', ({ currentTarget }) => {
      // Close all other sub-menu
      this.menuItems.not(currentTarget).removeClass(this.menuItemIsOpenClass);
      // And toggle this menu state
      $(currentTarget).toggleClass(this.menuItemIsOpenClass);
    });
    // Click outside the menu
    $(document).on('mouseup', ({ target }) => {
      // Ensure we're not clicking on a menu item
      if (!this.menuItems.is(target) && this.menuItems.has(target).length === 0) {
        // Close all other sub-menu
        $(this.menuItemsSelector).removeClass(this.menuItemIsOpenClass);
      }
    })
  },
  get externalLinksSelector () {
    return `a[href^=http]:not([href^="${this.host}"])`;
  },
  get host () {
    return `${window.location.protocol}//${window.location.host}`;
  },
  get menuItems () {
    return $(this.menuItemsSelector)
  },
  get menuItemsSelector () {
    return '.menu-item-has-children';
  },
  get menuItemIsOpenClass () {
    return 'menu-item-is-open';
  },
};
