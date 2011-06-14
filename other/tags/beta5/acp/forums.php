<?php
/** 
*
* acp_forums [Russian]
*
* @package language
* @version $Id: forums.php,v 1.23 2007/01/21 18:33:45 acydburn Exp $
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

// Forum Admin
$lang = array_merge($lang, array(
	'AUTO_PRUNE_DAYS'			=> 'Автоочистка по дате последнего сообщения',
	'AUTO_PRUNE_DAYS_EXPLAIN'	=> 'Количество дней с последнего сообщения, по прошествии которых тема будет удалена.',
	'AUTO_PRUNE_FREQ'			=> 'Период автоочистки',
	'AUTO_PRUNE_FREQ_EXPLAIN'	=> 'Время в днях между выполнением автоочистки.',
	'AUTO_PRUNE_VIEWED'			=> 'Автоочистка по времени просмотра',
	'AUTO_PRUNE_VIEWED_EXPLAIN'	=> 'Количество дней с последнего просмотра, по прошествию которых тема будет удалена.',

	'COPY_PERMISSIONS'				=> 'Копировать права доступа из',
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> 'Вновь созданному форуму будут присвоены те же права доступа, что и у выбранного из списка. Если ничего не выбрано, созданный форум не будет отображаться на конференции до установки прав доступа.',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> 'Если вы выбрали копирование прав доступа, форуму будут присвоены те же права доступа, что и выбранному здесь. Все ранее установленные права доступа к этому форуму будут при этом заменены. Если форум не выбран, будут сохранены текущие права доступа.',
	'CREATE_FORUM'					=> 'Создать форум',

	'DECIDE_MOVE_DELETE_CONTENT'		=> 'Удалить содержимое или переместить в форум',
	'DECIDE_MOVE_DELETE_SUBFORUMS'		=> 'Удалить подфорумы или переместить в форум',
	'DEFAULT_STYLE'						=> 'Стиль по умолчанию',
	'DELETE_ALL_POSTS'					=> 'Удалить сообщения',
	'DELETE_SUBFORUMS'					=> 'Удалить подфорумы и сообщения',
	'DISPLAY_ACTIVE_TOPICS'				=> 'Включить активные темы',
	'DISPLAY_ACTIVE_TOPICS_EXPLAIN'		=> 'Если включено, в данной категории будут отображаться активные темы из выбранных подфорумов.',

	'EDIT_FORUM'					=> 'Редактировать форум',
	'ENABLE_INDEXING'				=> 'Включить поисковое индексирование',
	'ENABLE_INDEXING_EXPLAIN'		=> 'Если включено, сообщения в этом форуме будут индексироваться для поиска.',
	'ENABLE_POST_REVIEW'			=> 'Включить просмотр сообщений',
	'ENABLE_POST_REVIEW_EXPLAIN'	=> 'Если включено, пользователи смогут пересмотреть своё сообщение, если во время его создания в теме появились новые сообщения. Должно быть выключено для чат-форумов.',
	'ENABLE_RECENT'					=> 'Показывать активные темы',
	'ENABLE_RECENT_EXPLAIN'			=> 'Если включено, темы из этого форума будут отображаться в списке активных тем.',
	'ENABLE_TOPIC_ICONS'			=> 'Включить значки тем',

	'FORUM_ADMIN'						=> 'Управление форумами',
	'FORUM_ADMIN_EXPLAIN'				=> 'В phpBB3 отсутствуют категории, конференция основана на форумах. Каждый форум может иметь неограниченное количество подфорумов, и вы можете определять, разрешено в нём создавать темы или нет (в последнем случае форум будет действовать как категория в phpBB2). Здесь вы можете добавлять, редактировать, закрывать, открывать каждый из форумов, устанавливать некоторые дополнительные настройки. Если ваши сообщения и темы рассинхронизированы, вы можете также синхронизировать форум.',
	'FORUM_AUTO_PRUNE'					=> 'Включить автоочистку',
	'FORUM_AUTO_PRUNE_EXPLAIN'			=> 'Очищает форум от тем, установите параметры периодичности/времени ниже.',
	'FORUM_CREATED'						=> 'Форум успешно создан.',
	'FORUM_DATA_NEGATIVE'				=> 'Параметры очистки не могут быть отрицательными.',
	'FORUM_DESC_TOO_LONG'				=> 'Описание форума слишком длинное, оно должно содержать менее 4000 символов.',
	'FORUM_DELETE'						=> 'Удалить форум',
	'FORUM_DELETE_EXPLAIN'				=> 'Форма ниже позволяет вам удалить форум. Если в форуме разрешено создавать сообщения, вы можете решить, куда переместить все имеющиеся в нём темы (форумы).',
	'FORUM_DELETED'						=> 'Форум успешно удалён.',
	'FORUM_DESC'						=> 'Описание',
	'FORUM_DESC_EXPLAIN'				=> 'Любая заданная здесь разметка будет отображена в этом же виде.',
	'FORUM_EDIT_EXPLAIN'				=> 'Форма ниже позволяет вам настраивать этот форум. Учтите, что настройки модерирования и количества сообщений производятся в правах доступа к форумам для каждого отдельного пользователя или группы.',
	'FORUM_IMAGE'						=> 'Значок форума',
	'FORUM_IMAGE_EXPLAIN'				=> 'Путь относительно корневой папки phpBB к дополнительному изображению, ассоциированному с этим форумом.',
	'FORUM_LINK_EXPLAIN'				=> 'Полная ссылка (URL, включая протокол, например <samp>http://</samp>), на которую будет перенаправлен пользователь при щелчке по данному форуму.',
	'FORUM_LINK_TRACK'					=> 'Отслеживать переходы',
	'FORUM_LINK_TRACK_EXPLAIN'			=> 'Записывает количество щелчков по ссылке на форум.',
	'FORUM_NAME'						=> 'Имя форума',
	'FORUM_NAME_EMPTY'					=> 'Вы должны задать имя этого форума.',
	'FORUM_PARENT'						=> 'Родительский форум',
	'FORUM_PASSWORD'					=> 'Пароль к форуму',
	'FORUM_PASSWORD_CONFIRM'			=> 'Подтверждение пароля к форуму',
	'FORUM_PASSWORD_CONFIRM_EXPLAIN'	=> 'Необходимо только в случае, если задан пароль к форуму.',
	'FORUM_PASSWORD_EXPLAIN'			=> 'Устанавливает пароль для этого форума, предпочтительно использование системы прав доступа.',
	'FORUM_PASSWORD_MISMATCH'			=> 'Введённые пароли не совпадают.',
	'FORUM_PRUNE_SETTINGS'				=> 'Настройки очистки форума',
	'FORUM_RESYNCED'					=> 'Форум «%s» успешно синхронизирован',
	'FORUM_RULES_EXPLAIN'				=> 'Правила форума отображаются на каждой странице в пределах данного форума.',
	'FORUM_RULES_LINK'					=> 'Ссылка на правила форума',
	'FORUM_RULES_LINK_EXPLAIN'			=> 'Здесь вы можете задать ссылку (URL) на страницу/сообщение с правилами форума. При этом текст правил форума будет заменён.',
	'FORUM_RULES_PREVIEW'				=> 'Предпросмотр правил форума',
	'FORUM_RULES_TOO_LONG'				=> 'Правила форума должны содержать менее 4000 символов.',
	'FORUM_SETTINGS'					=> 'Настройки форума',
	'FORUM_STATUS'						=> 'Статус форума',
	'FORUM_STYLE'						=> 'Стиль форума',
	'FORUM_TOPICS_PAGE'					=> 'Тем на страницу',
	'FORUM_TOPICS_PAGE_EXPLAIN'			=> 'Если отлично от нуля, это значение заменит настройку количества тем на страницу по умолчанию.',
	'FORUM_TYPE'						=> 'Тип форума',
	'FORUM_UPDATED'						=> 'Информация о форуме успешно обновлена.',

	'GENERAL_FORUM_SETTINGS'	=> 'Общие настройки форумов',

	'LINK'					=> 'Ссылка',
	'LIST_INDEX'			=> 'Показывать форум в списке подфорумов',
	'LIST_INDEX_EXPLAIN'	=> 'Отображает ссылку на данный форум в списке подфорумов родительского форума, если таковой существует.',
	'LOCKED'				=> 'Закрыт',

	'MOVE_POSTS_TO'		=> 'Переместить сообщения в',
	'MOVE_SUBFORUMS_TO'	=> 'Переместить подфорумы в',

	'NO_DESTINATION_FORUM'			=> 'Не указан форум для перемещения содержимого',
	'NO_FORUM_ACTION'				=> 'Не задано действие для содержимого форума',
	'NO_PARENT'						=> 'Нет',
	'NO_PERMISSIONS'				=> 'Не копировать права доступа',
	'NO_PERMISSION_FORUM_ADD'		=> 'Вы не имеете необходимых прав доступа для добавления форумов.',
	'NO_PERMISSION_FORUM_DELETE'	=> 'Вы не имеете необходимых прав доступа для удаления форумов.',

	'PARENT_NOT_EXIST'			=> 'Родительский форум не существует.',
	'PRUNE_ANNOUNCEMENTS'		=> 'Очистить объявления',
	'PRUNE_STICKY'				=> 'Очистить прилепленные темы',
	'PRUNE_OLD_POLLS'			=> 'Очистить старые опросы',
	'PRUNE_OLD_POLLS_EXPLAIN'	=> 'Удалять темы, в опросах которых не было голосов за указанное выше количество дней с последнего сообщения.',
	
	'REDIRECT_ACL'	=> 'Теперь вы можете %sустановить права доступа%s для этого форума.',

	'SYNC_IN_PROGRESS'			=> 'Синхронизация форума',
	'SYNC_IN_PROGRESS_EXPLAIN'	=> 'Идёт синхронизация тем %1$d/%2$d.',

	'TYPE_CAT'			=> 'Категория',
	'TYPE_FORUM'		=> 'Форум',
	'TYPE_LINK'			=> 'Ссылка',

	'UNLOCKED'			=> 'Открыт',
));

?>