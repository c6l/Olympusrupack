<?php
/** 
*
* acp_database [Russian]
*
* @package language
* @version $Id: database.php,v 1.13 2006/12/02 13:19:24 acydburn Exp $
* @copyright (c) 2005 phpBB Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* DO NOT CHANGE
*/
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

// Database Backup/Restore
$lang = array_merge($lang, array(
	'ACP_BACKUP_EXPLAIN'	=> 'Здесь вы можете создать резервную копию всех данных конференции. Вы можете сохранить результирующий архив на сервере в папке <samp>store/</samp> или скачать его. В зависимости от конфигурации сервера может быть доступно сжатие файла резервной копии в нескольких форматах.',
	'ACP_RESTORE_EXPLAIN'	=> 'Будет произведено полное восстановление всех таблиц phpBB из сохранённого файла. Если сервер поддерживает такую возможность, вы можете использовать сжатые файлы gzip или bzip2, которые будут автоматически разархивированы. <strong>ВНИМАНИЕ</strong> Все существующие данные будут уничтожены. Восстановление может занять длительное время, поэтому не уходите с этой страницы до полного завершения процесса.',

	'BACKUP_DELETE'		=> 'Файл резервной копии был успешно удалён.',
	'BACKUP_INVALID'	=> 'Выбран неверный файл резервной копии.',
	'BACKUP_OPTIONS'	=> 'Настройки резервного копирования',
	'BACKUP_SUCCESS'	=> 'Файл резервной копии успешно создан.',
	'BACKUP_TYPE'		=> 'Вид резервного копирования',

	'DATABASE'			=> 'Управление БД',
	'DATA_ONLY'			=> 'Только данные',
	'DELETE_BACKUP'		=> 'Удалить резервную копию',
	'DESELECT_ALL'		=> 'Снять выделение',
	'DOWNLOAD_BACKUP'	=> 'Скачать резервную копию',

	'FILE_TYPE'			=> 'Тип файла',
	'FULL_BACKUP'		=> 'Полное',

	'RESTORE_OPTIONS'		=> 'Настройки восстановления',
	'RESTORE_SUCCESS'		=> 'База данных была успешно восстановлена.<br /><br />Конференция восстановлена по состоянию на момент создания резервной копии.',

	'SELECT_ALL'			=> 'Выбрать всё',
	'SELECT_FILE'			=> 'Выбрать файл',
	'START_BACKUP'			=> 'Начать резервное копирование',
	'START_RESTORE'			=> 'Начать восстановление',
	'STORE_AND_DOWNLOAD'	=> 'Сохранить на сервере и скачать',
	'STORE_LOCAL'			=> 'Сохранить на сервере',
	'STRUCTURE_ONLY'		=> 'Только структура',

	'TABLE_SELECT'		=> 'Выбрать таблицы',
));

?>