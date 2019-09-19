<?php
/**
 * Move fields in the Donation Form.
 *
 * In the example below, we move the email field to show at priority 3 (before the first name)
 * and the phone field to show at priority 9 (before the address).
 */
add_action(
	'init',
	function() {
		$fields = charitable()->donation_fields();

		/**
		 * Get the field using the field's key. Default options, along with their priority (order), shown below:
		 *
		 * first_name: 4
		 * last_name: 6
		 * email: 8
		 * address: 10
		 * address_2: 12
		 * city: 14
		 * state: 16
		 * postcode: 18
		 * country: 20
		 * phone: 22
		 *
		 * The following fields are shown separately to the user fields, so they are ordered in relation to each other:
		 *
		 * donor_comment: 4 - If using Donor Comments.
		 * anonymous_donation: 8 - If using Anonymous Donations.
		 */
		$fields->get_field( 'email' )->set( 'donation_form', 'priority', 3 );
		$fields->get_field( 'phone' )->set( 'donation_form', 'priority', 9 );
	}
);
