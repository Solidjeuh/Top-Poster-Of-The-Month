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
	'TPOTM_GENERAL'							=>	'Algemene instellingen',
	// Legend Tpl locations
	'ACP_TPOTM_TEMPLATE_LOCATIONS'			=>	'Template locaties',
	'ACP_TPOTM_TEMPLATE_LOCATIONS_EXPLAIN'	=>	'U kunt de locatie op de index kiezen om onderaan of bovenaan de pagina te staan, maar niet beide. Daarnaast wilt u misschien ook het resultaat weergeven in viewforum.',
	// Legend Hall of fame
	'ACP_TPOTM_HALL'						=>	'Eregalerij instellingen',
	// Legend Board Management
	'ACP_TPOTM_MANAGEMENT'					=>	'Forum administratie',
	'ACP_TPOTM_MANAGEMENT_EXPLAIN'			=>	'<strong>Deze instelling is van toepassing op beide resultaten.</strong><br><em>Houd er rekening mee dat:</em> de Oprichter optie werkt samen met de Beheerder/mods optie. Dit betekent dat als u Beheerder/Mods uitsluit die de Optichter AAN houden, de Oprichters toch niet worden opgenomen.',
	// Tpl locations
	'TPOTM_INDEX'							=>	'Index pagina',
	'TPOTM_BOTTOM'							=>	'Onderaan',
	'TPOTM_TOP'								=>	'Bovenaan',
	'TPOTM_FORUMS'							=>	'Forum pagina’s',
	// Hall of fame
	'TPOTM_HALL'							=>	'Viewport',
	'TPOTM_HALL_EXPLAIN'					=>	'Schakel de pagina in',
	'TPOTM_USERS_PAGE'						=>	'Top posters',
	'TPOTM_USERS_PAGE_EXPLAIN'				=>	'Hoeveel gebruikers tonen per pagina',
	'ACP_TPOTM_TTL_MODE'					=>	'<em>De dynamische automatische cache</em> zorgt voor de Leap jaren en wordt automatisch aan het begin van elke maand verlengd.<br>Als deze optie is ingeschakeld, wordt de selectie in de vervolg keuzelijst niet meer in aanmerking genomen.<br>Als u Nee selecteert, worden beide caches uitgeschakeld. Als u een van de cache modes wilt inschakelen, selecteert u een optie (nogmaals).',
	'TPOTM_TTL_MODE'						=>	'TPE Dynamische cache',
	'TPOTM_TTL_TPE'							=>	'TPE Tijd om te leven',
	'TPOTM_ACP_NO_CACHE'					=>	'geen cache',
	'TPOTM_ACP_ONE_DAY'						=>	'één dag',
	'TPOTM_ACP_ONE_WEEK'					=>	'één week',
	'TPOTM_ACP_TWO_WEEKS'					=>	'twee weken',
	'TPOTM_ACP_ONE_MONTH'					=>	'één maand',
	'ACP_TPOTM_HALL_EPOCH_EXPLAIN'			=>	'Met behulp van <em>Tijdperk</em> start het ophalen sindsdien <em>Tijdperk tijd 1970-01-01 00:00</em> in plaats van de startdatum van het forum. Te gebruiken als u die datum op een bepaald moment opnieuw hebt ingesteld en sommige gebruikers worden uitgesloten van de lijst <em>Top posters ooit</em>, die ook op de posttijd is gebaseerd.',
	'TPOTM_HALL_EPOCH'						=>	'Haal gebruikers op sinds',
	'TPOTM_EPOCH'							=>	'Tijdperk',
	'TPOTM_BOARD_S_DATE'					=>	'Datum sinds wanneer forum is opgestart',
	// Variouses
	'ACP_TPOTM_VARIOUSES'					=>	'Verschillende instellingen',
	'TPOTM_TTL'								=>	'Tijd om te leven',
	'TPOTM_TTL_EXPLAIN'						=>	'Cache tijd in minuten. 0 = Uitgeschakeld<br><em>Gebruik de cache om de prestaties te verbeteren</em>',
	'TPOTM_AVATAR'							=>	'Mini Avatar',
	'TPOTM_AVATAR_EXPLAIN'					=>	'Toon de gebruikers avatar in resultaat',
	'TPOTM_MINIPROFILE'						=>	'Mini profiel naast berichten',
	'TPOTM_MINIPROFILE_EXPLAIN'				=>	'Toon de mini-badge',
	'TPOTM_ADM_MODS'						=>	'Beheerders en moderators opnemen',
	'TPOTM_ADM_MODS_EXPLAIN'				=>	'Ja = verbetert de prestaties<br><em>Ze uitsluiten verhoogt de database belasting, het gebruik ervan heeft de voorkeur in combinatie met de cache.</em>',
	'TPOTM_FOUNDERS'						=>	'Oprichters opnemen',
	'TPOTM_FOUNDERS_EXPLAIN'				=>	'Ja = verbetert de prestaties<br><em>Gebruik dit in combinatie met de bovenstaande optie.</em>',
	'TPOTM_BANNEDS'							=>	'Inclusief gebande gebruikers',
	'TPOTM_BANNEDS_EXPLAIN'					=>	'Ja = verbetert de prestaties<br>',
	// Errors
	'ACP_TPOTM_ERRORS'						=>	'Fouten',
	'TPOTM_BADGE_IMG_INVALID'				=>	'De bestandsnaam van de IMG badge voor de geïnstalleerde stijl <strong><em>"%1s"</em></strong> is fout of de relatieve stijlmap voor de extensie ontbreekt volledig. Controleer de relatieve stijl en afbeelding mappen voor deze extensie.<br>De badge bestandsnaam moet zijn: <em><strong>tpotm_badge.png</strong></em>.<br><em>Het beheer van de extensie is nu in de ruststand en de huidige instellingen kunnen niet worden gewijzigd totdat het probleem is verholpen.</em>',
]);
