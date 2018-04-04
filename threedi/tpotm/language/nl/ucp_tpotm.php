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
	'USER_TOOLTIP_HOVER'		=> '<em><< tooltip</em>',
	'USER_TOOLTIP'				=> 'Datum formaat UTC+00:00 in Tooltips',
	'USER_TOOLTIP_EXPLAIN'		=> '<strong>Ja</strong> = Vb. <em>01 10 2017 00:01</em> naar <em>01 11 2027 00:00</em><br><strong>Nee</strong> = Uw bovenstaande datum formaat',
	'USER_TOOLTIP_SEL'			=> 'Toon datum formaat in tooltips',
	'USER_TOOLTIP_SEL_EXPLAIN'	=> '<strong>Nee</strong> = Tooltips worden getoond met een standaardbericht en negeren de bovenstaande selectie',
]);
