export default {
  init() {
    $('a[href="#"]').on('click', ev => {
      ev.preventDefault();
    });
  },
};
