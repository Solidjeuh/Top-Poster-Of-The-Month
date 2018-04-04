<?php
/**
 *
 * Top Poster Of The Month. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2005, 2017, 3Di
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
	'ACL_U_ALLOW_TPOTM_VIEW'	=> 'Kan de TPOTM extensie gebruiken',
	'ACL_A_TPOTM_ADMIN'			=> 'Kan de TPOTM extensie beheren',
]);
