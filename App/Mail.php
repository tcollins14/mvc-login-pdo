<?php

namespace App;

use Mailgun\Mailgun;

class Mail
{
	public static function send($to, $subject, $text, $html)
	{
		$mgClient = new Mailgun(Config::MAILGUN_API_KEY);
		$domain = Config::MAILGUN_DOMAIN;

		$result = $mgClient->sendMessage($domain, array(
    	'from'    => 'sender@yourdomain.com',
    	'to'      => $to,
    	'subject' => $subject,
    	'text'    => $text,
    	'html' => $html
));
	}
}