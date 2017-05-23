/**
 * Avatar Code
 */
function jm_avatar () {

	if ( $( '#site-navigation .avatar a img' ).length ) {

    //mouse enter
		$( '#site-navigation .avatar a' ).hover( function() {

			var src = $( '#site-navigation .avatar a img' ).attr( 'src' );

			$( '#site-navigation .avatar a img' ).attr( 'src', src.replace( '.png', '-active.png' ) );

    //mouse leave
		}, function() {

			var src = $( '#site-navigation .avatar a img' ).attr( 'src' );

			$( '#site-navigation .avatar a img' ).attr( 'src', src.replace( '-active.png', '.png' ) );

		});

	}

}//jm_avatar()


/**
 * Cursor Code
 */
function jm_cursor () {

	if ( $( '.cursor' ).length ) {

		$( '.cursor' ).each( function( index ) {

      var $this = $( this );

      setInterval( function() {

        if ( $this.hasClass( 'off' ) ) {

          $this.removeClass( 'off' );

        } else {

          $this.addClass( 'off' );

        }

      }, 500 );

    });

	}

}//jm_cursor()


/**
 * Homepage Typed Animation
 */
function jm_homepage_typed () {

	if ( $( 'section.hero .content .typed' ).length ) {

		var string = $( 'section.hero .content .typed-string' ).html();

	  $( 'section.hero .content .typed' ).typed( {
			strings: [ string ],
			typeSpeed: -1000,
	    showCursor: false,
	    onStringTyped: function() {
				$( '#homepage-hero .prompt' ).show();
	    }
		} );

	}

}//jm_homepage_typed()


( function() {

	jm_avatar();
  jm_cursor();
	jm_homepage_typed();

} )();
