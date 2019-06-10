$(function() {
    var _visible = 4;
    var $pagers = $('#pager a');
    var _onBefore = function() {
        $(this).find('img').stop().fadeTo( 300, 1 );
        $pagers.removeClass( 'selected' );
    };

    $('#carousel6').carouFredSel({
        items: _visible,
        width: '100%',

        auto: false,
        scroll: {
            duration: 750
        },
        prev: {
            button: '#prev6',
            items: 4,
            onBefore: _onBefore
        },
        next: {
            button: '#next6',
            items: 4,
            onBefore: _onBefore
        },
    });

    $pagers.click(function( e ) {
        e.preventDefault();

        var group = $(this).attr( 'href' ).slice( 1 );
        var slides = $('#carousel6 div.' + group);
        var deviation = Math.floor( ( _visible - slides.length ) / 2 );
        if ( deviation < 0 ) {
            deviation = 0;
        }

        $('#carousel6').trigger( 'slideTo', [ $('#' + group), -deviation ] );
        $('#carousel6 div img').stop().fadeTo( 300, 0.3 );
        slides.find('img').stop().fadeTo( 300, 1 );

        $(this).addClass( 'selected' );
    });
});









