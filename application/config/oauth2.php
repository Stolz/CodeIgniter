<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/** All supported providers:
	Blooie
	Facebook	https://facebook.com/developers
	Foursquare	https://foursquare.com/oauth/register
	Github		https://github.com/settings/applications/new
	Google		https://code.google.com/apis/console/
	Instagram
	Mailchimp
	Mailru
	Paypal		https://devportal.x.com/paypal_auth/authenticate/login
	Soundcloud
	Vkontakte
	Windowslive
	Yandex
*/

$config['providers'] = array(
	'google' => array(
		'id' => 'to-do-your-id',
		'secret' => 'to-do-your-secret'),

	'github' => array(
		'id' => 'to-do-your-id',
		'secret' => 'to-do-your-secret'),

	'facebook' => array(
		'id' => 'to-do-your-id',
		'secret' => 'to-do-your-secret'),
);

/* End of file oauth2.php */
/* Location: ./application/config/oauth2.php */