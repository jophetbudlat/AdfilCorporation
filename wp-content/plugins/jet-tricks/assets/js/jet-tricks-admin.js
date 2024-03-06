(function( $, settingsPageConfig ) {

	'use strict';

	Vue.config.devtools = true;

	if ( ! $('#jet-tricks-settings-page')[0] ) {
		return false;
	}

	window.JetTricksSettingsPage = new Vue( {
		el: '#jet-tricks-settings-page',

		data: {
			pageOptions: settingsPageConfig.settingsData,
			preparedOptions: {},
			savingStatus: false,
			ajaxSaveHandler: null,
			disableAllWidgets: false,
		},

		mounted: function() {
			for ( var slug in this.pageOptions['avaliable_widgets']['value'] ) {

				if ( 'true' === this.pageOptions['avaliable_widgets']['value'][slug] ) {
					this.disableAllWidgets = true;

					break;
				}
			}

			this.$el.className = 'is-mounted';
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

			disableAllWidgetsEvent: function( state ) {

				if ( state ) {
					for ( var slug in this.pageOptions['avaliable_widgets']['value'] ) {
						this.pageOptions['avaliable_widgets']['value'][slug] = 'true';
					}
				} else {
					for ( var slug in this.pageOptions['avaliable_widgets']['value'] ) {
						this.pageOptions['avaliable_widgets']['value'][slug] = 'false';
					}
				}
			},

			saveOptions: function() {

				var self = this;

				self.savingStatus = true;

				wp.apiFetch( {
					method: 'post',
					path: settingsPageConfig.settingsApiUrl,
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
	} );

})( jQuery, window.JetTricksSettingsPageConfig );
