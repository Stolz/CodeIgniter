<?php header("Content-Type: application/rss+xml"); ?>

<!-- http://feed2.w3.org/docs/rss2.html -->

<rss version="2.0">
	<channel>
		<!--Required channel elements-->
		<title><?= xml_convert($title) ?></title>
		<link><?= $url ?></link>
		<description><?= $description ?></description>

		<!--Optional channel elements-->
		<image>
			<title><?= xml_convert($title) ?></title>
			<link><?= $url ?></link>
			<url><?= $image ?></url>
		</image>

		<managingEditor><?= $email ?></managingEditor>
		<webMaster><?= $email ?></webMaster>

		<generator>CodeIgniter</generator>
		<docs>http://feed2.w3.org/docs/rss2.html</docs>
	</channel>

	<?php foreach($items as $item) :?>
	<item>
		<title><?= xml_convert($item->title) ?></title>
		<description><?= xml_convert($item->text) ?></description>

		<pubDate><?= date(DATE_RSS, strtotime($item->date)) ?></pubDate>
		<author><?= xml_convert($item->author) ?></author>

		<link><?= $item->url ?></link>
		<guid><?= $item->url ?></guid>
	</item>
	<?php endforeach ?>
</rss>

