<?php

$lang['db_invalid_connection_str'] = _('Unable to determine the database settings based on the connection string you submitted.');
$lang['db_unable_to_connect'] = _('Unable to connect to your database server using the provided settings.');
$lang['db_unable_to_select'] = _('Unable to select the specified database: %s');
$lang['db_unable_to_create'] = _('Unable to create the specified database: %s');
$lang['db_invalid_query'] = _('The query you submitted is not valid.');
$lang['db_must_set_table'] = _('You must set the database table to be used with your query.');
$lang['db_must_use_set'] = _('You must use the "set" method to update an entry.');
$lang['db_must_use_index'] = _('You must specify an index to match on for batch updates.');
$lang['db_batch_missing_index'] = _('One or more rows submitted for batch updating is missing the specified index.');
$lang['db_must_use_where'] = _('Updates are not allowed unless they contain a "where" clause.');
$lang['db_del_must_use_where'] = _('Deletes are not allowed unless they contain a "where" or "like" clause.');
$lang['db_field_param_missing'] = _('To fetch fields requires the name of the table as a parameter.');
$lang['db_unsupported_function'] = _('This feature is not available for the database you are using.');
$lang['db_transaction_failure'] = _('Transaction failure: Rollback performed.');
$lang['db_unable_to_drop'] = _('Unable to drop the specified database.');
$lang['db_unsuported_feature'] = _('Unsupported feature of the database platform you are using.');
$lang['db_unsuported_compression'] = _('The file compression format you chose is not supported by your server.');
$lang['db_filepath_error'] = _('Unable to write data to the file path you have submitted.');
$lang['db_invalid_cache_path'] = _('The cache path you submitted is not valid or writable.');
$lang['db_table_name_required'] = _('A table name is required for that operation.');
$lang['db_column_name_required'] = _('A column name is required for that operation.');
$lang['db_column_definition_required'] = _('A column definition is required for that operation.');
$lang['db_unable_to_set_charset'] = _('Unable to set client connection character set: %s');
$lang['db_error_heading'] = _('A Database Error Occurred');

/* End of file db_lang.php */
/* Location: ./application/language/english/db_lang.php */