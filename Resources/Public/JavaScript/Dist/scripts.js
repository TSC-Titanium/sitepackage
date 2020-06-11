/*!
 * tsc-titanium-sitepackage v1.0.0 (https://it-systeme-rehren.de/)
 * Copyright 2017-2020 Friedrich Rehren
 * Licensed under the GPL-2.0-or-later license
 */
$('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
    if (!$(this).next().hasClass('show')) {
      $(this).parents('.dropdown-menu').first().find('.show').removeClass('show');
    }
    var $subMenu = $(this).next('.dropdown-menu');
    $subMenu.toggleClass('show');
  
  
    $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
      $('.dropdown-submenu .show').removeClass('show');
    });
  
  
    return false;
  });