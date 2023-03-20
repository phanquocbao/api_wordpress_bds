( function( api ) {

	// Extends our custom "vw-real-estate" section.
	api.sectionConstructor['vw-real-estate'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );