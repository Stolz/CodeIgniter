How to translate your codeigniter project:
==========================================

Using Codeigniter native support
--------------------------------

Assuming the original language of your application is XXX then:

- Edit `application/config/config.php` and set `$config['language'] = 'XXX'`;
- If your language is other than English download the [translation files](https://github.com/EllisLab/CodeIgniter/wiki/Language-Translation) from CI wiki and copy them to `system/language/XXX` or `application/language/`

To dynamically set language

	$this->lang->load('XXX_lang', 'XXX');


Using GNU gettext:
------------------

Assuming the original language of your application is XXX then:

- Edit `application/config/config.php` and set `$config['language'] = 'XXX';`.
- Copy folder `system/language/XXX` into `application/language/`.
- Edit `application/language/XXX/*.php` and wrap strings with the gettext function. I.E: `'hello' ==> _('hello')`.
- Run `application/language/gettext.sh` script. It will launch your favorite editor for you to enter the translations.

If you don't want/need to translate certain files (i.e. there is no point in translating CI profiler or unit testing message as they are only needed for development) simply delete those files from `application/language/XXX/`. CI will keep using the file in `system/language/XXX/`.

To dynamically set language

	bindtextdomain('messages', APPPATH.'language/');
	textdomain('messages');
	setlocale(LC_ALL, 'XXX.UTF-8', 'XXX');
	//NOTE: LC_ALL may switch float decimal separator character deppending on locale which could have undesired issues specially when inserting float values to your DB. Consider using LC_MESSAGES instead


