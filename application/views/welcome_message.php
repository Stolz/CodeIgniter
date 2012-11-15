<div id="container">
	<h1>Welcome to CodeIgniter!</h1>

	<div id="body">
		<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

		<p>If you would like to edit this page you'll find it located at:</p>
		<code>application/views/welcome_message.php</code>

		<p>The corresponding controller for this page is found at:</p>
		<code>application/controllers/welcome.php</code>

		<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/index.html">User Guide</a>.</p>

		<?php if(ENVIRONMENT == 'development') : ?>
		<hr/>
		<p><a href="https://github.com/Stolz/CodeIgniter">This GitHub repository</a> is based on the <i>master</i> branch of the official <a href="https://github.com/EllisLab/CodeIgniter">EllisLab's GitHub repository</a> (that is, stable code) but it adds a few extras in order to make CodeIgniter experience more convenient.</p>

		<p><b>Try them out!</b></p>

		<ul>
			<li>Single page layout including many HTML recommended practices from <a href="http://html5boilerplate.com/">HTML5 Boilerplate</a>.</li>
			<li>Improved default error messages.</li>
			<li><a href="welcome/oauth2">Oauth v2 authentication</a>.</li>
			<li><a href="welcome/foundation">Integrated <i>Zurb Foundation framework</i></a>.</li>
			<li><a href="welcome/foundation_icons">Integrated <i>Zurb Foundation icons</i></a>.</li>
			<li><a href="welcome/datammaper">Integrated <i>Datammaper ORM</i></a>.</li>
			<li><a href="welcome/gettext">Integrated <i>GNU Gettext</i> translation support</a>. Scripts to translate source code are in <i>application/language/</i>.</li>
			<li><a href="welcome/htmltidy"><i>HTML Tidy</i> validation <i>on-the-fly</i></a>.</li>
			<li><a href="welcome/firephp"><i>Fire PHP</i> debugging</a>.</li>
			<li><a href="welcome/pagination">Improved pagination library</a>.</li>
			<li><a href="welcome/login">Controller to have a basic authentication system</a>.</li>
			<li><a href="welcome/ajax">Controller to handle <i>AJAX</i> requests</a>.</li>
			<li><a href="welcome/html">Controller to test your <i>CSS</i> styles with almost all the existing <i>HTML</i> tags</a>.</li>
			<li><a href="feed/news">Controller to create an <i>RSS</i> feed</a>.</li>
			<!--<li><a href="welcome/rest">Integrated <i>REST</i> API controller</a>.</li>-->
		</ul>

		<p>For fine-tuning the installation to fit your needs just search for the tag <i>to-do</i> in the source code (the provided <i>to-do.sh</i> can do it for you).</p>
		<?php endif ?>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

<script type="text/javascript">
whenready = ( typeof whenready != 'undefined' && whenready instanceof Array ) ? whenready : [];
whenready.push(function() {

	console.log("Pushing anonymous functions to the 'whenready' array will execute them within jQuery's $(document).ready(function()) even if jQuery has been loaded in the bottom of <body>");

});
</script>