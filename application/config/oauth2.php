<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/** All supported providers:
	Blooie
	Facebook	https://facebook.com/developers https://developers.facebook.com/apps
	Foursquare	https://foursquare.com/oauth/register https://developer.foursquare.com/
	Github		https://github.com/settings/applications/new
	Google		https://code.google.com/apis/console/
	Instagram
	Mailchimp
	Mailru
	Paypal		https://devportal.x.com/paypal_auth/authenticate/login
	Soundcloud
	Vkontakte
	Windowslive	https://manage.dev.live.com
	Yandex
*/

$config['providers'] = array(

	//Dev URL: https://code.google.com/apis/console/
	'google' => array(
		'id' => 'to-do-your-id',
		'secret' => 'to-do-your-secret'),

	//Dev URL: https://github.com/settings/applications/new
	'github' => array(
		'id' => 'to-do-your-id',
		'secret' => 'to-do-your-secret'),

	//Dev URL: https://facebook.com/developers  AND  https://developers.facebook.com/apps
	'facebook' => array(
		'id' => 'to-do-your-id',
		'secret' => 'to-do-your-secret'),

	//Dev URL: https://manage.dev.live.com
	'windowslive' => array(
		'id' => 'to-do-your-id',
		'secret' => 'to-do-your-secret'),

	//Dev URL: https://foursquare.com/oauth/register https://developer.foursquare.com/
	'foursquare' => array(
		'id' => 'to-do-your-id',
		'secret' => 'to-do-your-secret'),

	//Dev URL: https://devportal.x.com/paypal_auth/authenticate/login
	'paypal' => array(
		'id' => 'to-do-your-id',
		'secret' => 'to-do-your-secret'),
);

/* End of file oauth2.php */
/* Location: ./application/config/oauth2.php */