jQuery(function ($) {

    /*================================
     Typed JS
     ================================*/
    var typed = new Typed('#typed4', {
        /*
         strings: ['Some strings without', 'Some HTML', 'Chars'],
         */
        stringsElement: '#typed-strings',
        typeSpeed: 56,
        backSpeed: 79,
        attr: 'placeholder',
        bindInputFocusEvents: true,
        loop: true,
        showCursor: true,
        cursorChar: '|',
        contentType: 'text'
    });
});