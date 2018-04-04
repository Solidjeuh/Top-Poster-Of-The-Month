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

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, [
	'TPOTM_CAT'						=> 'Top Poster Van De Maand',
	'TPOTM_EVER_CAT'				=> 'Top Posters ooit',
	'TPOTM_NOW'						=> 'Op dit moment is ',
	'TPOTM_NOBODY'					=> 'nog niet beschikbaar ',
	'TPOTM_BADGE'					=> 'Badge ?',
	'TPOTM_BADGE_MINIPROFILE'		=> 'Top Poster Van De Maand',
	'TOTAL_MONTH'					=> ' uit <strong>%1s</strong> (%2s%%)',
	'TPOTM_EXPLAIN'					=> 'Van %1s naar %2s',
	'TPOTM_NO_EXPLAIN'				=> 'Tijdens de huidige maand',
	'TPOTM_TOT_POST'				=> 'Totaal aantal berichten',
	'TPOTM_DATE'					=> 'Jaar en Maand',
	'TPOTM_LAST_POST_IN_MONTH'		=> 'Laatst op',

	'TPOTM_CACHE'	=> [
		0	=> ' <i>[update altijd bij laden van pagina]</i>',
		1	=> ' <i>[updates elke <strong>%d</strong> minuut]</i>',
		2	=> ' <i>[updates alle <strong>%d</strong> minuten]</i>',
	],

	'TPOTM_POST'	=> [
		1	=> ' met een totaal van <strong>%d</strong> bericht',
		2	=> ' met een totaal van <strong>%d</strong> berichten',
	],

	// Translators please do not change the following line, no need to translate it!
	'TPOTM_CREDIT_LINE'		=>	' | <a href="https://github.com/3D-I/tpotm">Top Poster Of The Month</a> &copy; 2005, 2018 - 3Di',

	// Hall of fame
	'VIEWING_TPOTM_HALL'			=> 'Bekijken van TPOTM Eregalerij',
	'TPOTM_PAGE'					=> 'Eregalerij',
	'TPOTM_HELLO'					=> 'Top Poster Van De Maand - Eregalerij',
	'TPOTM_EXPLAIN_HALL'			=> 'Van %1s naar %2s',
	'TPOTM_HALL_NO_EXPLAIN'			=> 'Sinds begin van tijdperk tot het einde van de vorige maand',

	'HALL_OF_FAME'	=> [
		0	=> 'Eregalerij',
		1	=> 'Eregalerij &bull; pagina %d',
		2	=> 'Eregalerij &bull; pagina %d',
	],

	'TPOTM_HALL_COUNT'	=> [
		1	=> ' Vond een totaal van <strong>%d</strong> top poster',
		2	=> ' Vond een totaal van <strong>%d</strong> top posters',
	],

	'NOT_AUTHORISED_TPOTM__HALL'	=> 'U bent niet gemachtigd om de Eregalerij van de Top poster van de maand extensie te bekijken.',
	'TPOTM__HALL_DISABLED'			=> 'De Eregalerij van de Top poster van de maand extensie is tijdelijk uitgeschakeld.',
]);
