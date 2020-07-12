<?php
defined('BASEPATH') || exit('No direct script access allowed');

$config['encrypto'] = 'ssl';
$config['validate'] = false;
$config['host']     = 'imap.gmail.com';
$config['port']     = 993;
$config['username'] = 'harveyspect60@gmail.com'; // TODO remove this before commiting
$config['password'] = 'zwukybktspqnzwqk';// TODO remove this before commiting

$config['folders'] = [
	'inbox'  => 'INBOX',
	'sent'   => 'Sent',
	'trash'  => 'Trash',
	'spam'   => 'Spam',
	'drafts' => 'Drafts',
];

$config['expunge_on_disconnect'] = false;

$config['cache'] = [
	'active'     => false,
	'adapter'    => 'file',
	'backup'     => 'file',
	'key_prefix' => 'imap:',
	'ttl'        => 60,
];
