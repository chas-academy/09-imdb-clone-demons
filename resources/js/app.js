/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
require('./bootstrap');

$( document ).ready(function() {
    const params = new URLSearchParams(window.location.search);

    $('.movies').infiniteScroll({
        path: function() {
            params.set('page', this.pageIndex + 1);
            return window.location.origin + window.location.pathname + '?' + params.toString();
        },
        append: '.movie',
        scrollThreshold: 7500
    });
});

