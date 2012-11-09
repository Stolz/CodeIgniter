<div id="container">
	<h1>Welcome to CodeIgniter!</h1>

	<div id="body">
		<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

		<p>If you would like to edit this page you'll find it located at:</p>
		<code>application/views/welcome_message.php</code>

		<p>The corresponding controller for this page is found at:</p>
		<code>application/controllers/welcome.php</code>

		<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/index.html">User Guide</a>.</p>

		<hr/>
		<p><a href="https://github.com/Stolz/CodeIgniter">This GitHub repository</a> is based on the <i>master</i> branch of the official <a href="https://github.com/EllisLab/CodeIgniter">EllisLab's GitHub repository</a> (that is, stable code) but it has a few extras in order to make CodeIgniter experience more convenient:</p>

		<ul>
			<li><a href="#spl">Single page layout</a>.</li>
			<li><a href="welcome/login">Basic authentication system</a>.</li>
			<li><a href="welcome/oauth2">Oauth v2 authentication</a>. <a href="https://github.com/philsturgeon/codeigniter-oauth2">(upstream)</a>.</li>
			<li><a href="welcome/gettext">Integrated <i>GNU Gettext</i> translation</a>. Scripts to translate source code are in <i>application/language/</i>.</li>
			<li><a href="welcome/ajax">Controller to handle Ajax requests</a>.</li>
			<li><a href="welcome/htmltidy"><i>HTML Tidy</i> validation <i>on-the-fly</i></a>. <a href="http://tidy.sourceforge.net">(upstream)</a>.</li>
			<li><a href="welcome/firephp"><i>Fire PHP</i> debugging</a>. <a href="http://www.firephp.org">(upstream)</a>.</li>
			<li><a href="welcome/foundation">Integrated <i>Zurb Foundation</i></a>. <a href="http://foundation.zurb.com">(upstream)</a>.</li>
			<li><a href="welcome/foundation_icons">Integrated <i>Zurb Foundation icons</i></a>. <a href="http://www.zurb.com/playground/foundation-icons">(upstream)</a>.</li>
			<li><a href="welcome/html">CSS test page</a>. Test your CSS with all the existing HTML tags.</li>
			<li><a href="welcome/datammaper"><i>Datammaper ORM</i></a>. <a href="http://datamapper.wanwizard.eu/">(upstream)</a>. Remember to load DM bootstrap in your <i>index.php</i>.</li>
			<!--<li><a href="welcome/rest">Integrated <i>REST</i> API controller</a>.</li>-->
		</ul>

		<p>For fine-tuning the installation to fit your needs just search for the tag <i>to-do</i> in the source code (the provided <i>to-do.sh</i> can do it for you).</p>
		<hr/>

		<h2><a name="spl">Single page layout</a></h2>
		<p>A single-file boilerplate containing the structure, CSS and JS that is common to all the site. Out of the box it already includes many HTML recommended practices such as mobile ready meta tags, favicon meta tags for Apple devices,  loading <a href="http://jquery.com">jQuery</a> from <a href="https://developers.google.com/speed/libraries/devguide">Google CDN hosted libraries</a> (with fallback to local copy) or loading JS files at the bottom of the page.</p>

		<p>With single page layout instead of using ugly code like this...</p>
		<code>
		$data = array(<br/>
			'title' => 'My page',<br/>
			'user'  => $this->user_model->get_user(1),<br/>
			'news'  => $this->news_model->get_news(),<br/>
			'images'=> $this->images_model->images_news(),<br/>
			...<br/>
		);<br/>
		<br/>
		$this->load->view('template/header', $data);<br/>
		$this->load->view('template/menu', $data);<br/>
		$this->load->view('template/sidebar', $data);<br/>
		$this->load->view('news/index', $data);<br/>
		$this->load->view('images/index', $data);<br/>
		$this->load->view('template/footer');</code>

		<p>... you can use something much more simple and convenient:</p>
		<code>
		$data = array(<br/>
			...,<br/>
			'views' => array('news/index', 'images/index')<br/>
		);<br/>
		<br/>
		$this->load->view('template', $data);</code>

		<p>You can include any extra JS/CSS files you need very easily:</p>
		<code>
		$data = array(<br/>
			'js'  => array('js_file_1', 'js_file_2'),<br/>
			'css' => array('css_file_1', 'css_file_2'),<br/>
			...<br/>
		);<br/>
		<br/>
		$this->load->view('template', $data);</code>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

<script type="text/javascript">
whenready = ( typeof whenready != 'undefined' && whenready instanceof Array ) ? whenready : [];
whenready.push(function() {

	console.log("Pushing anonymous functions to the 'whenready' array will execute them within jQuery's $(document).ready(function()) even if jQuery has been loaded in the bottom of <body>");

});
</script>