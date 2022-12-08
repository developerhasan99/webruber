// Mobile Nav Scripts
var navMenuBtn = document.getElementsByClassName('nav_menu_toggler')[0];
var navMenuWrapper = document.getElementsByClassName('nav_menu_wrapper')[0];
var mobileNavCloserBtn = document.getElementsByClassName('mobile_nav_closer_btn')[0];

navMenuBtn.addEventListener('click', function() {
    navMenuWrapper.style.right = '0';
});

mobileNavCloserBtn.addEventListener('click', function() {
    navMenuWrapper.style.right = '-300px';
});

//Sub Menu Scripts
var subMenuTogglers = document.querySelectorAll('li.menu-item-has-children');
var subMenus = document.querySelectorAll('li.menu-item-has-children .sub-menu');

for (let i = 0; i < subMenuTogglers.length; i++) {
    subMenuTogglers[i].addEventListener('mouseenter', function() {
        subMenus[i].classList.add('submenu_active');
    });
    subMenuTogglers[i].addEventListener('mouseleave', function() {
        subMenus[i].classList.remove('submenu_active');
    });
}

// Nav Search Scripts
var navSearchToggler = document.getElementsByClassName('nav_search_toggler')[0];
var navSearchWrapper = document.getElementsByClassName('nav_searchform_wrapper')[0];
var searchFormInput = document.getElementsByClassName('search_form_input')[0];

var navSearchStatus = false;

navSearchToggler.addEventListener('click', function() {
    if (!navSearchStatus) {
        navSearchWrapper.style.display = 'block';
        searchFormInput.focus();
        navSearchToggler.classList.add('nav_search_closer');
        navSearchStatus = !navSearchStatus;
    } else {
        navSearchWrapper.style.display = 'none';
        searchFormInput.blur();
        navSearchToggler.classList.remove('nav_search_closer');
        navSearchStatus = !navSearchStatus;
    }
});