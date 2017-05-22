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


( function() {

	jm_avatar();
  jm_cursor();

} )();
