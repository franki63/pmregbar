<?php
/**
*
* @package phpBB Extension - PM Notify & Guest Register bar
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* @Author Stoker - http://www.phpbb3bbcodes.com
*
* Übersetzt von franki (http://dieahnen.de/ahnenforum/)
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'PMG_WELCOME'		=> 'Willkommen auf',
	'PMG_REGISTER'		=> 'Klicke hier zum registrieren', 
	'PMG_HELLO'			=> 'Hallo',	
	'PMG_YOUHAVE'		=> '- Du hast eine Private Nachricht',
	'PMG_AND'			=> 'und',
));
