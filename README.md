[This GitHub repository](https://github.com/Stolz/CodeIgniter) is based on the *master* branch of the official [EllisLab’s CodeIgniter GitHub repository](https://github.com/EllisLab/CodeIgniter) (that is, stable code) but it has a few extras in order to make CodeIgniter experience more convenient.

Specifically, it includes:

 - Single-page layout **[*]** generic template including many HTML recommended practices from [HTML5 Boilerplate](http://html5boilerplate.com).
 - Improved default error messages.
 - Improved pagination library.
 - Basic authentication system (Check *application/libraries/MY_Session.php*).
 - [Oauth v2](http://oauth.net/2/) authentication using [Phil Sturgeon’s library](https://github.com/philsturgeon/codeigniter-oauth2).
 - Integrated [Zurb Foundation](http://foundation.zurb.com) framework.
 - Integrated [Zurb Foundation](http://www.zurb.com/playground/foundation-icons) icons.
 - Integrated [Markdown](http://daringfireball.net/projects/markdown) library.
 - [Datammaper ORM](http://datamapper.wanwizard.eu).
 - Scripts to extract and translate [GNU Gettext](http://www.gnu.org/software/gettext) translations. (Check *application/language/*).
 - [HTML Tidy](http://tidy.sourceforge.net) validation *on-the-fly*.
 - [Fire PHP](http://www.firephp.org) debugging.
 - Controller to handle AJAX requests.
 - Controller to test your CSS styles with almost all the existing HTML tags.
 - Controller to create an RSS feed.
 - **All the included external libraries are kept up to date as far as possible**.

----

**[*]** A single-file boilerplate containing the structure, CSS and JS that is common to the whole site. Out of the box it already includes many HTML recommended practices such as mobile ready meta tags, favicon meta tags for Apple devices, loading [jQuery](http://jquery.com) from [Google CDN hosted libraries](https://developers.google.com/speed/libraries/devguide) (with fallback to local copy) or loading JS files at the bottom of the page.


With single page layout instead of using ugly code like this…

	$data = array(
		'title' => 'My page',
		'user'  => $this->user_model->get_user(1),
		'news'  => $this->news_model->get_news(),
		'images'=> $this->images_model->images_news(),
		...
	);

	$this->load->view('template/header', $data);
	$this->load->view('template/menu', $data);
	$this->load->view('template/sidebar', $data);
	$this->load->view('news/index', $data);
	$this->load->view('images/index', $data);
	$this->load->view('template/footer');`

… you can use something much more simple and convenient:


	$data = array(
		...
		'views' => array('news/index', 'images/index')
	);

	$this->load->view('template', $data);

You can include any extra JS/CSS files you need very easily:

	$data = array(
		'js'  => array('js_file_1', 'js_file_2'),
		'css' => array('css_file_1', 'css_file_2'),
		...	);

	$this->load->view('template', $data);`
