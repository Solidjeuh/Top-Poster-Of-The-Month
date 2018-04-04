<?php
/**
 *
 * Top Poster Of The Month. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2005,2017, 3Di
 * Nederlandse vertaling @ Solidjeuh <https://www.muziekpromo.net>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [
	'ERROR_MSG_3111_321_MISTMATCH'	=>	'Minimaal 3.1.11 maar minder dan 3.2.0@dev OF hoger dan 3.2.1 maar minder dan 3.3.0@dev',
	'ERROR_MSG_PHP_VERSION'			=>	'PHP versie moet hoger zijn dan 5.4.0',
]);
