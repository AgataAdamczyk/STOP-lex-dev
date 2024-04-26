import $ from 'jquery';
import { enableBodyScroll, disableBodyScroll } from 'body-scroll-lock';

const initOffcanvasToggling = () => {
  const $offcanvasTogglerButton = $('[data-offcanvas-toggler]');
  const $mainNav = $('#nav-header');

  $offcanvasTogglerButton.on('click', function () {
    const offcanvasSelector = $(this).attr('data-target');
    const $offcanvasElement = $(offcanvasSelector);
    $offcanvasElement.toggleClass('offcanvas--show');

    const isHidden = !$offcanvasElement.hasClass('offcanvas--show');
    $offcanvasElement.attr('aria-hidden', isHidden);
    $(this).attr('aria-expanded', !isHidden);

    const offcanvas = document.querySelector(offcanvasSelector).querySelector('.offcanvas__wrapper');

    isHidden ? enableBodyScroll(offcanvas) : disableBodyScroll(offcanvas);

    $mainNav.toggleClass('navbar--offcanvas');
  });
};

export { initOffcanvasToggling };
