<?php
/**
*
* @package phpBB Extension - Ultimate Points
* @copyright (c) 2016 dmzx & posey - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* Brazilian Portuguese translation by AlvoErrado2 and reviewed by eunaumtenhoid (c) 2017 [ver 1.1.8] (https://github.com/phpBBTraducoes)
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
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
//
// Some characters for use
// ’ » “ ” …

$lang = array_merge($lang, array(
	'ACL_CAT_POINTS'		=> 'Ultimate Points',
	'ACL_U_USE_POINTS'		=> 'Pode usar Ultimate Points',
	'ACL_U_USE_ROBBERY'		=> 'Pode usar o módulo de Roubo',
	'ACL_U_USE_BANK'		=> 'Pode usar o módulo de Banco',
	'ACL_U_USE_LOGS'		=> 'Pode usar o módulo de Log',
	'ACL_U_USE_LOTTERY'		=> 'Pode usar o módulo de Loteria',
	'ACL_U_USE_TRANSFER'	=> 'Pode usar o módulo de Tranferência',
	'ACL_F_PAY_ATTACHMENT'	=> 'Tem que pagar para baixar anexos',
	'ACL_F_PAY_TOPIC'		=> 'Tem que pagar para criar um novo tópico',
	'ACL_F_PAY_POST'		=> 'Tem que pagar para fazer uma nova postagem',
	'ACL_M_CHG_POINTS'		=> 'Pode alterar os pontos do usuário',
	'ACL_M_CHG_BANK'		=> 'Pode alterar os pontos do usuário no Banco',
	'ACL_A_POINTS'			=> 'Pode administrar o Ultimate Points',
));
