
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./_bootstrap/util/index.js');
window.$ = window.jQuery = require('jquery');

// AJAX X-CSRF-TOKEN
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});






// HIDE SIDEBAR
// $(function () {
//    $('.aside-button').on('click', function () {
//        $('body').toggleClass('hide-sidebar', '');
//    })
// });