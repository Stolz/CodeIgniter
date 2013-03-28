<?php
/*
 * This file is the same than the one with same filename located at system/language/english/
 * but with all strings wrapped with a gettext function call _('...')
 *
 * If you don't plan to use GNU Gettext delete this file
 */

$lang['email_must_be_array'] = _('The email validation method must be passed an array.');
$lang['email_invalid_address'] = _('Invalid email address: %s');
$lang['email_attachment_missing'] = _('Unable to locate the following email attachment: %s');
$lang['email_attachment_unreadable'] = _('Unable to open this attachment: %s');
$lang['email_no_recipients'] = _('You must include recipients: To, Cc, or Bcc');
$lang['email_send_failure_phpmail'] = _('Unable to send email using PHP mail().  Your server might not be configured to send mail using this method.');
$lang['email_send_failure_sendmail'] = _('Unable to send email using PHP Sendmail.  Your server might not be configured to send mail using this method.');
$lang['email_send_failure_smtp'] = _('Unable to send email using PHP SMTP.  Your server might not be configured to send mail using this method.');
$lang['email_sent'] = _('Your message has been successfully sent using the following protocol: %s');
$lang['email_no_socket'] = _('Unable to open a socket to Sendmail. Please check settings.');
$lang['email_no_hostname'] = _('You did not specify a SMTP hostname.');
$lang['email_smtp_error'] = _('The following SMTP error was encountered: %s');
$lang['email_no_smtp_unpw'] = _('Error: You must assign a SMTP username and password.');
$lang['email_failed_smtp_login'] = _('Failed to send AUTH LOGIN command. Error: %s');
$lang['email_smtp_auth_un'] = _('Failed to authenticate username. Error: %s');
$lang['email_smtp_auth_pw'] = _('Failed to authenticate password. Error: %s');
$lang['email_smtp_data_failure'] = _('Unable to send data: %s');
$lang['email_exit_status'] = _('Exit status code: %s');


/* End of file email_lang.php */
/* Location: ./application/language/english/email_lang.php */
