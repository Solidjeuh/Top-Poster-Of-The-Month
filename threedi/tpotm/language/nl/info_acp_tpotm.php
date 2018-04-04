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
	'ACP_TPOTM_TITLE'				=> 'Top Poster Van De Maand',
	'ACP_TPOTM_SETTINGS'			=> 'Instellingen',
	'ACP_TPOTM_SETTING_SAVED'		=> 'Top Poster Van De Maand instellingen opgeslagen.',

	// Error log
	'TPOTM_LOG_CONFIG_SAVED'		=> '<strong>TPOTM algemene configuratie opgeslagen.</strong>',
	'TPOTM_LOG_BADGE_IMG_INVALID'	=> '<strong>TPOTM - <em>Badge IMG bestandsnaam</em> is fout of ontbreekt helemaal.</strong>',
]);
