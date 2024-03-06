'use strict';

let jetTricksSettinsMixin = {
	data: function() {
		return {
			pageOptions: window.jetTricksSettingsConfig.settingsData,
			preparedOptions: {},
			savingStatus: false,
			ajaxSaveHandler: null,
		};
	},

	watch: {
		pageOptions: {
			handler( options ) {
				let prepared = {};

				for ( let option in options ) {

					if ( options.hasOwnProperty( option ) ) {
						prepared[ option ] = options[option]['value'];
					}
				}

				this.preparedOptions = prepared;

				this.saveOptions();
			},
			deep: true
		}
	},

	methods: {
		saveOptions: function() {
			var self = this;

			self.savingStatus = true;

			wp.apiFetch( {
				method: 'post',
				path: window.jetTricksSettingsConfig.settingsApiUrl,
				data: self.preparedOptions
			} ).then( function( response ) {

				self.savingStatus = false;

				if ( 'success' === response.status ) {
					self.$CXNotice.add( {
						message: response.message,
						type: 'success',
						duration: 3000,
					} );
				}

				if ( 'error' === response.status ) {
					self.$CXNotice.add( {
						message: response.message,
						type: 'error',
						duration: 3000,
					} );
				}
				
			} ).catch( function( response ) {
				self.$CXNotice.add( {
					message: response.message,
					type: 'error',
					duration: 3000,
				} );
			} );

		},
	}
}

Vue.component( 'jet-tricks-general-settings', {
	template: '#jet-dashboard-jet-tricks-general-settings',
	mixins: [ jetTricksSettinsMixin ],
} );

Vue.component( 'jet-tricks-avaliable-addons', {
	template: '#jet-dashboard-jet-tricks-avaliable-addons',
	mixins: [ jetTricksSettinsMixin ],
} );
