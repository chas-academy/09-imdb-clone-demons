/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
require('./bootstrap');

$(document).ready(function() {
    const params = new URLSearchParams(window.location.search);
    $('.movies').infiniteScroll({
        path: function() {
            params.set('page', this.pageIndex + 1);
            return window.location.origin + window.location.pathname + '?' + params.toString();
        },
        append: '.movie',
        scrollThreshold: 800
    });

    $('.watchlist-delete').on('click', function(event) {
        event.preventDefault();
        $('#delete-form').submit();
    });

    $('.watchlist-dropdown-item').on('click', function(event) {
        event.preventDefault();
        event.stopPropagation();
        $(this).toggleClass('dropdown-item-checked');
        $(this).parent().submit();
    });
});

