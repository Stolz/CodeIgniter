<p>Add pairs of options to your URL and see the magic!. All valid options are preserved in pagination links and invalid options are filtered out. Table headers for change the sorting method are automatillay generated.</p>

<table style="text-align:center" align="center" summary="">
	<thead>
		<tr>
			<?php foreach($this->pagination->table_header('orderby') as $header): ?>
			<th><?= $header ?></th>
			<?php endforeach ?>
		</tr>
	</thead>

	<tbody>
		<?php foreach($items as $key => $value) : ?>
		<tr>
			<td><?= $key ?></td>
			<td><i><?= $value ?></i></td>
		</tr>
		<?php endforeach ?>
	</tbody>

	<caption style="caption-side:bottom;"><?= $this->pagination->create_links() ?></caption>
</table>

<?php
	echo '<b>Options passed to the controller:</b><pre>',print_r($this->pagination->url_options, TRUE),'</pre>(a FALSE value means the option was not provided in the URL)<br/>';

 if($this->pagination->invalid_url_options) echo '<br/><b>Unrecognized URL options:</b><pre>',print_r($this->pagination->invalid_url_options, TRUE),'</pre>';