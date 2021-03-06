<?php
/** 
*
* acp common [Russian]
*
* @package language
* @version $Id: common.php,v 1.83 2007/01/24 11:29:56 acydburn Exp $
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

// Common
$lang = array_merge($lang, array(
	'ACP_ADMINISTRATORS'		=> 'Администраторы',
	'ACP_ADMIN_LOGS'			=> 'Лог администратора',
	'ACP_ADMIN_ROLES'			=> 'Администраторские роли',
	'ACP_ATTACHMENTS'			=> 'Вложения',
	'ACP_ATTACHMENT_SETTINGS'	=> 'Настройки вложений',
	'ACP_AUTH_SETTINGS'			=> 'Аутентификация',
	'ACP_AUTOMATION'			=> 'Автоматизация',
	'ACP_AVATAR_SETTINGS'		=> 'Аватары',

	'ACP_BACKUP'				=> 'Создание резервной копии',
	'ACP_BAN'					=> 'Блокировка доступа',
	'ACP_BAN_EMAILS'			=> 'Чёрный список email',
	'ACP_BAN_IPS'				=> 'Чёрный список IP',
	'ACP_BAN_USERNAMES'			=> 'Чёрный список пользователей',
	'ACP_BASIC_PERMISSIONS'		=> 'Базовые права доступа',
	'ACP_BBCODES'				=> 'BBCode',
	'ACP_BOARD_CONFIGURATION'	=> 'Конфигурация',
	'ACP_BOARD_DEFAULTS'		=> 'Настройки по умолчанию',
	'ACP_BOARD_FEATURES'		=> 'Функции конференции',
	'ACP_BOARD_MANAGEMENT'		=> 'Управление конференцией',
	'ACP_BOARD_SETTINGS'		=> 'Настройки конференции',
	'ACP_BOTS'					=> 'Поисковые роботы',
	
	'ACP_CAPTCHA'				=> 'Визуальное подтверждение',

	'ACP_CAT_DATABASE'			=> 'База данных',
	'ACP_CAT_DOT_MODS'			=> '.Моды',
	'ACP_CAT_FORUMS'			=> 'Форумы',
	'ACP_CAT_GENERAL'			=> 'Общие',
	'ACP_CAT_MAINTENANCE'		=> 'Обслуживание',
	'ACP_CAT_PERMISSIONS'		=> 'Права доступа',
	'ACP_CAT_POSTING'			=> 'Сообщения',
	'ACP_CAT_STYLES'			=> 'Стили',
	'ACP_CAT_SYSTEM'			=> 'Система',
	'ACP_CAT_USERGROUP'			=> 'Пользователи и Группы',
	'ACP_CAT_USERS'				=> 'Пользователи',
	'ACP_CLIENT_COMMUNICATION'	=> 'Средства связи',
	'ACP_COOKIE_SETTINGS'		=> 'Настройки куков (cookies)',
	'ACP_CRITICAL_LOGS'			=> 'Лог ошибок',
	'ACP_CUSTOM_PROFILE_FIELDS'	=> 'Дополнительные поля в профиле',
	
	'ACP_DATABASE'				=> 'База данных',
	'ACP_DISALLOW'				=> 'Запрещённые имена',
	'ACP_DISALLOW_USERNAMES'	=> 'Запрещённые имена',
	
	'ACP_EMAIL_SETTINGS'		=> 'Настройки email',
	'ACP_EXTENSION_GROUPS'		=> 'Управление группами расширений',
	
	'ACP_FORUM_BASED_PERMISSIONS'	=> 'Локальные права доступа',
	'ACP_FORUM_LOGS'				=> 'Логи форума',
	'ACP_FORUM_MANAGEMENT'			=> 'Форумы',
	'ACP_FORUM_MODERATORS'			=> 'Модераторы форумов',
	'ACP_FORUM_PERMISSIONS'			=> 'Доступ к форумам',
	'ACP_FORUM_ROLES'				=> 'Форумные роли',

	'ACP_GENERAL_CONFIGURATION'		=> 'Общие настройки',
	'ACP_GENERAL_TASKS'				=> 'Общие задачи',
	'ACP_GLOBAL_MODERATORS'			=> 'Супермодераторы',
	'ACP_GLOBAL_PERMISSIONS'		=> 'Глобальные права доступа',
	'ACP_GROUPS'					=> 'Группы',
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> 'Форумные права групп',
	'ACP_GROUPS_MANAGE'				=> 'Управление группами',
	'ACP_GROUPS_MANAGEMENT'			=> 'Группы',
	'ACP_GROUPS_PERMISSIONS'		=> 'Права групп',
	
	'ACP_ICONS'					=> 'Значки тем',
	'ACP_ICONS_SMILIES'			=> 'Значки тем/смайлики',
	'ACP_IMAGESETS'				=> 'Наборы изображений',
	'ACP_INACTIVE_USERS'		=> 'Неактивированные пользователи',
	'ACP_INDEX'					=> 'Главная страница',
	
	'ACP_JABBER_SETTINGS'		=> 'Настройки Jabber',
	
	'ACP_LANGUAGE'				=> 'Языки',
	'ACP_LANGUAGE_PACKS'		=> 'Языковые файлы',
	'ACP_LOAD_SETTINGS'			=> 'Ограничения нагрузки на сервер',
	'ACP_LOGGING'				=> 'Логи',
	
	'ACP_MAIN'					=> 'Главная страница администраторского раздела',
	'ACP_MANAGE_EXTENSIONS'		=> 'Управление расширениями',
	'ACP_MANAGE_FORUMS'			=> 'Управление форумами',
	'ACP_MANAGE_RANKS'			=> 'Управление званиями',
	'ACP_MANAGE_REASONS'		=> 'Причины жалоб/отклонения сообщений',
	'ACP_MANAGE_USERS'			=> 'Управление пользователями',
	'ACP_MASS_EMAIL'			=> 'Массовая рассылка почты',
	'ACP_MESSAGES'				=> 'Сообщения',
	'ACP_MESSAGE_SETTINGS'		=> 'Личные сообщения',
	'ACP_MODULE_MANAGEMENT'		=> 'Управление модулями',
	'ACP_MOD_LOGS'				=> 'Лог модератора',
	'ACP_MOD_ROLES'				=> 'Модераторские роли',
	
	'ACP_ORPHAN_ATTACHMENTS'	=> 'Невложенные файлы',
	
	'ACP_PERMISSIONS'			=> 'Права доступа',
	'ACP_PERMISSION_MASKS'		=> 'Маски прав доступа',
	'ACP_PERMISSION_ROLES'		=> 'Роли',
	'ACP_PERMISSION_SETTINGS'	=> 'Настройки доступа',
	'ACP_PERMISSION_TRACE'		=> 'Трассировка прав доступа',
	'ACP_PHP_INFO'				=> 'Информация о версии PHP',
	'ACP_POST_SETTINGS'			=> 'Сообщения',
	'ACP_PRUNE_FORUMS'			=> 'Очистка форумов',
	'ACP_PRUNE_USERS'			=> 'Удаление пользователей',
	'ACP_PRUNING'				=> 'Очистка форумов/удаление пользователей',
	
	'ACP_QUICK_ACCESS'			=> 'Быстрый доступ',
	
	'ACP_RANKS'					=> 'Звания',
	'ACP_REASONS'				=> 'Причины жалоб/отклонения сообщений',
	'ACP_REGISTER_SETTINGS'		=> 'Регистрация пользователей',

	'ACP_RESTORE'				=> 'Восстановление из резервной копии',

	'ACP_SEARCH'				=> 'Настройки поиска',
	'ACP_SEARCH_INDEX'			=> 'Поисковый индекс',
	'ACP_SEARCH_SETTINGS'		=> 'Поиск',

	'ACP_SECURITY_SETTINGS'		=> 'Безопасность',
	'ACP_SERVER_CONFIGURATION'	=> 'Конфигурация сервера',
	'ACP_SERVER_SETTINGS'		=> 'Настройки сервера',
	'ACP_SIGNATURE_SETTINGS'	=> 'Подписи',
	'ACP_SMILIES'				=> 'Смайлики',
	'ACP_SPECIAL_PERMISSIONS'	=> 'Специальные права',
	'ACP_STYLE_COMPONENTS'		=> 'Компоненты стиля',
	'ACP_STYLE_MANAGEMENT'		=> 'Управление стилями',
	'ACP_STYLES'				=> 'Стили',
	
	'ACP_TEMPLATES'				=> 'Шаблоны',
	'ACP_THEMES'				=> 'Темы',
	
	'ACP_UPDATE'					=> 'Обновление конференции',
	'ACP_USERS_FORUM_PERMISSIONS'	=> 'Форумные права пользователей',
	'ACP_USERS_LOGS'				=> 'Лог пользователя',
	'ACP_USERS_PERMISSIONS'			=> 'Права пользователей',
	'ACP_USER_ATTACH'				=> 'Вложения',
	'ACP_USER_AVATAR'				=> 'Аватара',
	'ACP_USER_FEEDBACK'				=> 'Заметки о пользователе',
	'ACP_USER_GROUPS'				=> 'Группы',
	'ACP_USER_MANAGEMENT'			=> 'Пользователи',
	'ACP_USER_OVERVIEW'				=> 'Обзор',
	'ACP_USER_PERM'					=> 'Права доступа',
	'ACP_USER_PREFS'				=> 'Личные настройки',
	'ACP_USER_PROFILE'				=> 'Профиль',
	'ACP_USER_RANK'					=> 'Звание',
	'ACP_USER_ROLES'				=> 'Пользовательские роли',
	'ACP_USER_SECURITY'				=> 'Блокировка пользователей',
	'ACP_USER_SIG'					=> 'Подпись',

	'ACP_VC_SETTINGS'					=> 'Визуальное подтверждение',
	'ACP_VC_CAPTCHA_DISPLAY'			=> 'Предпросмотр визуального подтверждения',
	'ACP_VERSION_CHECK'					=> 'Проверка обновлений',
	'ACP_VIEW_ADMIN_PERMISSIONS'		=> 'Показать права администраторов',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> 'Показать права модераторов',
	'ACP_VIEW_FORUM_PERMISSIONS'		=> 'Показать локальные права',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> 'Показать права супермодераторов',
	'ACP_VIEW_USER_PERMISSIONS'			=> 'Показать права пользователей',
	
	'ACP_WORDS'					=> 'Автоцензор',

	'ACTION'				=> 'Действие',
	'ACTIONS'				=> 'Действия',
	'ACTIVATE'				=> 'Активировать',
	'ADD'					=> 'Добавить',
	'ADMIN'					=> 'Администрирование',
	'ADMIN_INDEX'			=> 'Главная',
	'ADMIN_PANEL'			=> 'Администраторский раздел',

	'BACK'					=> 'Назад',

	'COLOUR_SWATCH'			=> 'Безопасная палитра',
	'CONFIG_UPDATED'		=> 'Конфигурация успешно обновлена.',

	'DEACTIVATE'				=> 'Деактивировать',
	'DIMENSIONS'				=> 'Размеры',
	'DIRECTORY_DOES_NOT_EXIST'	=> 'Заданный путь «%s» не существует.',
	'DIRECTORY_NOT_DIR'			=> 'Заданный путь «%s» не является папкой.',
	'DIRECTORY_NOT_WRITEABLE'	=> 'По заданному пути «%s» невозможно произвести запись.',
	'DISABLE'					=> 'Отключить',
	'DOWNLOAD'					=> 'Скачать',
	'DOWNLOAD_AS'				=> 'Скачать как',
	'DOWNLOAD_STORE'			=> 'Скачать или сохранить на сервере',
	'DOWNLOAD_STORE_EXPLAIN'	=> 'Вы можете напрямую скачать файл или сохранить его на сервере в папке <samp>store/</samp>.',

	'EDIT'					=> 'Редактировать',
	'ENABLE'				=> 'Включить',
	'EXPORT_DOWNLOAD'		=> 'Скачать',
	'EXPORT_STORE'			=> 'Сохранить',

	'GENERAL_OPTIONS'		=> 'Общие настройки',
	'GENERAL_SETTINGS'		=> 'Общие установки',
	'GLOBAL_MASK'			=> 'Глобальная маска доступа',

	'INSTALL'				=> 'Установить',
	'IP'					=> 'IP-адрес пользователя',
	'IP_HOSTNAME'			=> 'IP-адреса или хосты',

	'LOGGED_IN_AS'			=> 'Вы вошли как:',
	'LOGIN_ADMIN'			=> 'Для администрирования конференции вы должны войти на неё.',
	'LOGIN_ADMIN_CONFIRM'	=> 'Для администрирования конференции вы должны повторно ввести имя и пароль.',
	'LOGIN_ADMIN_SUCCESS'	=> 'Вы успешно вошли и сейчас будете перенаправлены в администраторский раздел',
	'LOOK_UP_FORUM'			=> 'Выберите форум',

	'MANAGE'				=> 'Управление',
	'MOVE_DOWN'				=> 'Вниз',
	'MOVE_UP'				=> 'Вверх',

	'NOTIFY'				=> 'Уведомление',
	'NO_ADMIN'				=> 'Вы не имеете права администрирования этой конференции.',
	'NO_EMAILS_DEFINED'		=> 'Не найдено правильных email-адресов',

	'OFF'					=> 'Выкл',
	'ON'					=> 'Вкл',

	'PARSE_BBCODE'						=> 'Разрешить BBCode',
	'PARSE_SMILIES'						=> 'Разрешить смайлики',
	'PARSE_URLS'						=> 'Разрешить ссылки',
	'PERMISSIONS_TRANSFERRED'			=> 'Права доступа переданы',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> 'В настоящий момент вы имеете права доступа пользователя %1$s. Вы можете просматривать конференцию с этими правами, но не будете иметь доступа к администраторскому разделу, поскольку права администратора не были переданы. Вы можете <a href="%2$s"><strong>вернуть свои права</strong></a> в любое время.',
	'PIXEL'							=> 'пикс',	
	'PROCEED_TO_ACP'					=> '%sПерейти в администраторский раздел%s',

	'REMIND'							=> 'Напомнить',
	'REORDER'							=> 'Упорядочить',
	'RESYNC'							=> 'Синхронизировать',
	'RETURN_TO'							=> 'Вернуться к…',

	'SELECT_ANONYMOUS'		=> 'Выбрать учётную запись Гостя',
	'SELECT_OPTION'			=> 'Выбрать',

	'UCP'					=> 'Личный раздел',
	'USERNAMES_EXPLAIN'		=> 'Каждое имя пользователя указывается с новой строки',
	'USER_CONTROL_PANEL'	=> 'Личный раздел',

	'WARNING'				=> 'Предупреждение',
));

// PHP info
$lang = array_merge($lang, array(
	'ACP_PHP_INFO_EXPLAIN'	=> 'Эта страница содержит информацию об установленной на этом сервере версии PHP. Она включает подробные сведения о загруженных модулях, доступных переменных и настройках по умолчанию. Эта информация может быть полезной при диагностике возникших проблем. Учтите, что некоторые хостинг-провайдеры ограничивают объём этой информации по соображениям безопасности. Рекомендуется не раскрывать никакие сведения, содержащиеся на этой странице, без соответствующего запроса <a href="http://www.phpbb.com/about/">членов команды форума</a> официальной поддержки.',

	'NO_PHPINFO_AVAILABLE'	=> 'Не удалось получить информацию о PHP. Функция phpinfo() была отключена по соображениям безопасности.',
));

// Logs
$lang = array_merge($lang, array(
	'ACP_ADMIN_LOGS_EXPLAIN'	=> 'Здесь содержится список действий, произведённых администраторами конференции. Вы можете сортировать список по имени пользователя, дате, IP-адресу или действию. Если вы имеете соответствующие права доступа, вы можете также удалить отдельные записи или очистить весь лог целиком.',
	'ACP_CRITICAL_LOGS_EXPLAIN'	=> 'Здесь содержится список действий, произведённых самой конференцией. Этот лог даёт вам информацию, которую можно использовать для решения специфических проблем, например, с доставкой email-сообщений. Вы можете сортировать список по имени пользователя, дате, IP-адресу или действию. Если вы имеете соответствующие права доступа, вы можете также удалить отдельные записи или очистить весь лог целиком.',
	'ACP_MOD_LOGS_EXPLAIN'		=> 'Здесь содержится список действий, произведённых модераторами конференции, выбор форума осуществляется из выпадающего списка ниже. Вы можете сортировать список по имени пользователя, дате, IP-адресу или действию. Если вы имеете соответствующие права доступа, вы можете также удалить отдельные записи или очистить весь лог целиком.',
	'ACP_USERS_LOGS_EXPLAIN'	=> 'Здесь содержится список всех действий, произведённых пользователями или над пользователями.',
	'ALL_ENTRIES'				=> 'Все записи',

	'DISPLAY_LOG'	=> 'Показать записи за',

	'NO_ENTRIES'	=> 'Отсутствуют записи за указанный период',

	'SORT_IP'		=> 'IP-адрес',
	'SORT_DATE'		=> 'Дата',
	'SORT_ACTION'	=> 'Действие',
));

// Index page
$lang = array_merge($lang, array(
	'ADMIN_INTRO'				=> 'Благодарим за выбор phpBB в качестве решения для создания конференции. На этой странице вы найдёте краткий обзор её статистики. Ссылки в левой части экрана позволяют управлять всеми аспектами работы вашей конференции. Каждая страница содержит инструкции по использованию.',
	'ADMIN_LOG'					=> 'Действия администратора',
	'ADMIN_LOG_INDEX_EXPLAIN'	=> 'Здесь содержится список последних пяти действий, произведённых администраторами конференции. Полную версию лога можно просмотреть через соответствующий пункт меню или по ссылке ниже.',
	'AVATAR_DIR_SIZE'			=> 'Размер папки с аватарами',

	'BOARD_STARTED'		=> 'Дата запуска конференции',

	'DATABASE_SERVER_INFO'	=> 'Сервер базы данных',
	'DATABASE_SIZE'			=> 'Размер базы данных',

	'FILES_PER_DAY'		=> 'Вложений в день',
	'FORUM_STATS'		=> 'Статистика конференции',

	'GZIP_COMPRESSION'	=> 'Сжатие GZip',

	'NOT_AVAILABLE'		=> 'Недоступно',
	'NUMBER_FILES'		=> 'Вложений',
	'NUMBER_POSTS'		=> 'Сообщений',
	'NUMBER_TOPICS'		=> 'Тем',
	'NUMBER_USERS'		=> 'Пользователей',
	'NUMBER_ORPHAN'		=> 'Невложенных файлов',

	'POSTS_PER_DAY'		=> 'Сообщений в день',

	'RESET_DATE'			=> 'Сбросить дату запуска конференции',
	'RESET_ONLINE'			=> 'Сбросить рекорд посещаемости',
	'RESYNC_POSTCOUNTS'		=> 'Синхронизировать количество сообщений',
	'RESYNC_POST_MARKING'	=> 'Синхронизировать свои темы',
	'RESYNC_STATS'			=> 'Синхронизировать статистику',

	'STATISTIC'			=> 'Статистика',

	'TOPICS_PER_DAY'	=> 'Тем в день',

	'UPLOAD_DIR_SIZE'	=> 'Размер прикреплённых вложений',
	'USERS_PER_DAY'		=> 'Пользователей в день',

	'VALUE'					=> 'Значение',
	'VIEW_ADMIN_LOG'		=> 'Лог администратора',
	'VIEW_INACTIVE_USERS'	=> 'Неактивные пользователи',

	'WELCOME_PHPBB'			=> 'Добро пожаловать в phpBB',
));

// Inactive Users
$lang = array_merge($lang, array(
	'INACTIVE_DATE'					=> 'Дата',
	'INACTIVE_REASON'				=> 'Причина',
	'INACTIVE_REASON_MANUAL'		=> 'Учётная запись деактивирована администратором',
	'INACTIVE_REASON_PROFILE'		=> 'Изменён профиль',
	'INACTIVE_REASON_REGISTER'		=> 'Новая учётная запись',
	'INACTIVE_REASON_REMIND'		=> 'Принудительная повторная активация',
	'INACTIVE_REASON_UNKNOWN'		=> 'Неизвестно',
	'INACTIVE_USERS'				=> 'Неактивные пользователи',
	'INACTIVE_USERS_EXPLAIN'		=> 'Здесь содержится список зарегистрированных пользователей, учётные записи которых неактивны. Вы можете активировать, удалить этих пользователей или отправить им напоминание (email-сообщением).',
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> 'Здесь содержится список последних 10 зарегистрированных пользователей, учётные записи которых неактивны. В полном списке, доступном через соответствующий пункт меню или по ссылке ниже, вы можете активировать, удалить этих пользователей или отправить им напоминание (email-сообщением).',

	'NO_INACTIVE_USERS'	=> 'Нет неактивных пользователей',

	'SORT_INACTIVE'		=> 'Дата',
	'SORT_LAST_VISIT'	=> 'Последнее посещение',
	'SORT_REASON'		=> 'Причина',
	'SORT_REG_DATE'		=> 'Дата регистрации',

	'USER_IS_INACTIVE'		=> 'Пользователь неактивен',
));

// Log Entries
$lang = array_merge($lang, array(
	'LOG_ACL_ADD_USER_GLOBAL_U_'		=> '<strong>Добавлены или изменены пользовательские права пользователей</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'		=> '<strong>Добавлены или изменены пользовательские права групп</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'		=> '<strong>Добавлены или изменены супермодераторские права пользователей</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'		=> '<strong>Добавлены или изменены супермодераторские права групп</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'		=> '<strong>Добавлены или изменены администраторские права пользователей</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'		=> '<strong>Добавлены или изменены администраторские права групп</strong><br />» %s',

	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'		=> '<strong>Добавлены или изменены администраторы</strong><br />» %s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'			=> '<strong>Добавлены или изменены супермодераторы</strong><br />» %s',

	'LOG_ACL_ADD_USER_LOCAL_F_'			=> '<strong>Добавлен или изменён доступ пользователей к форуму</strong> из %1$s<br />» %2$s',
	'LOG_ACL_ADD_USER_LOCAL_M_'			=> '<strong>Добавлен или изменён доступ модератора к форуму</strong> из %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'		=> '<strong>Добавлен или изменён доступ групп к форуму</strong> из %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'		=> '<strong>Добавлен или изменён модераторский доступ групп к форуму</strong> из %1$s<br />» %2$s',

	'LOG_ACL_ADD_MOD_LOCAL_M_'			=> '<strong>Добавлены или изменены модераторы</strong> из %1$s<br />» %2$s',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'		=> '<strong>Добавлен или изменён доступ к форуму</strong> из %1$s<br />» %2$s',

	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'		=> '<strong>Удалены администраторы</strong><br />» %s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'			=> '<strong>Удалены супермодераторы</strong><br />» %s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'			=> '<strong>Удалены модераторы</strong> из %1$s<br />» %2$s',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'		=> '<strong>Удалён доступ пользователя/группы к форуму</strong> из %1$s<br />» %2$s',

	'LOG_ACL_TRANSFER_PERMISSIONS'		=> '<strong>Перенесены права доступа пользователя</strong><br />» %s',
	'LOG_ACL_RESTORE_PERMISSIONS'		=> '<strong>Возвращены свои права доступа после использования прав пользователя</strong><br />» %s',
	
	'LOG_ADMIN_AUTH_FAIL'		=> '<strong>Неудачная попытка входа в качестве администратора</strong>',
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>Успешный вход в качестве администратора</strong>',

	'LOG_ATTACH_EXT_ADD'		=> '<strong>Добавлено или изменено расширение вложений</strong><br />» %s',
	'LOG_ATTACH_EXT_DEL'		=> '<strong>Удалено расширение вложений</strong><br />» %s',
	'LOG_ATTACH_EXT_UPDATE'		=> '<strong>Обновлено расширение вложений</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_ADD'	=> '<strong>Добавлена группа расширений</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_EDIT'	=> '<strong>Изменена группа расширений</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_DEL'	=> '<strong>Удалена группа расширений</strong><br />» %s',
	'LOG_ATTACH_FILEUPLOAD'		=> '<strong>Невложенный файл прикреплён к сообщению</strong><br />» ID %1$d - %2$s',
	'LOG_ATTACH_ORPHAN_DEL'		=> '<strong>Невложенные файлы удалены</strong><br />» %s',

	'LOG_BAN_EXCLUDE_USER'	=> '<strong>Исключён пользователь из списка заблокированных</strong> по причине "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_EXCLUDE_IP'	=> '<strong>Исключён IP-адрес из списка заблокированных</strong> по причине "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_EXCLUDE_EMAIL' => '<strong>Исключён email-адрес из списка заблокированных</strong> по причине "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_USER'			=> '<strong>Заблокирован пользователь</strong> по причине "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_IP'			=> '<strong>Заблокирован IP-адрес</strong> по причине "<em>%1$s</em>"<br />» %2$s',
	'LOG_BAN_EMAIL'			=> '<strong>Заблокирован email-адрес</strong> по причине "<em>%1$s</em>"<br />» %2$s',
	'LOG_UNBAN_USER'		=> '<strong>Разблокирован пользователь</strong><br />» %s',
	'LOG_UNBAN_IP'			=> '<strong>Разблокирован IP-адрес</strong><br />» %s',
	'LOG_UNBAN_EMAIL'		=> '<strong>Разблокирован email-адрес</strong><br />» %s',

	'LOG_BBCODE_ADD'		=> '<strong>Добавлен новый BBCode</strong><br />» %s',
	'LOG_BBCODE_EDIT'		=> '<strong>Изменён BBCode</strong><br />» %s',
	'LOG_BBCODE_DELETE'		=> '<strong>Удалён BBCode</strong><br />» %s',

	'LOG_BOT_ADDED'		=> '<strong>Добавлен новый бот</strong><br />» %s',
	'LOG_BOT_DELETE'	=> '<strong>Удалён бот</strong><br />» %s',
	'LOG_BOT_UPDATED'	=> '<strong>Обновлён существующий бот</strong><br />» %s',

	'LOG_CLEAR_ADMIN'		=> '<strong>Очищен лог администратора</strong>',
	'LOG_CLEAR_CRITICAL'	=> '<strong>Очищен лог ошибок</strong>',
	'LOG_CLEAR_MOD'			=> '<strong>Очищен лог модератора</strong>',
	'LOG_CLEAR_USER'		=> '<strong>Очищен лог пользователя</strong><br />» %s',
	'LOG_CLEAR_USERS'		=> '<strong>Очищены логи пользователей</strong>',

	'LOG_CONFIG_ATTACH'			=> '<strong>Изменены настройки вложений</strong>',
	'LOG_CONFIG_AUTH'			=> '<strong>Изменены настройки аутентификации</strong>',
	'LOG_CONFIG_AVATAR'			=> '<strong>Изменены настройки аватар</strong>',
	'LOG_CONFIG_COOKIE'			=> '<strong>Изменены настройки куков (cookies)</strong>',
	'LOG_CONFIG_EMAIL'			=> '<strong>Изменены настройки email</strong>',
	'LOG_CONFIG_FEATURES'		=> '<strong>Изменены возможности конференции</strong>',
	'LOG_CONFIG_LOAD'			=> '<strong>Изменены настройки нагрузки на сервер</strong>',
	'LOG_CONFIG_MESSAGE'		=> '<strong>Изменены настройки личных сообщений</strong>',
	'LOG_CONFIG_POST'			=> '<strong>Изменены настройки сообщений</strong>',
	'LOG_CONFIG_REGISTRATION'	=> '<strong>Изменены настройки регистрации пользователей</strong>',
	'LOG_CONFIG_SEARCH'			=> '<strong>Изменены настройки поиска</strong>',
	'LOG_CONFIG_SECURITY'		=> '<strong>Изменены настройки безопасности</strong>',
	'LOG_CONFIG_SERVER'			=> '<strong>Изменены настройки сервера</strong>',
	'LOG_CONFIG_SETTINGS'		=> '<strong>Изменены настройки конференции</strong>',
	'LOG_CONFIG_SIGNATURE'		=> '<strong>Изменены настройки подписей</strong>',
	'LOG_CONFIG_VISUAL'			=> '<strong>Изменены настройки визуального подтверждения</strong>',

	'LOG_APPROVE_TOPIC'			=> '<strong>Одобрена тема</strong><br />» %s',
	'LOG_BUMP_TOPIC'			=> '<strong>Поднята тема</strong><br />» %s',
	'LOG_DELETE_POST'			=> '<strong>Удалено сообщение</strong><br />» %s',
	'LOG_DELETE_TOPIC'			=> '<strong>Удалена тема</strong><br />» %s',
	'LOG_FORK'					=> '<strong>Скопирована тема</strong><br />» из форума %s',
	'LOG_LOCK'					=> '<strong>Закрыта тема</strong><br />» %s',
	'LOG_LOCK_POST'				=> '<strong>Заблокировано сообщение</strong><br />» %s',
	'LOG_MERGE'					=> '<strong>Объединены сообщения</strong> в тему<br />» %s',
	'LOG_MOVE'					=> '<strong>Перемещена тема</strong><br />» из %s',
	'LOG_SPLIT_DESTINATION'		=> '<strong>Перемещены разделённые сообщения</strong><br />» в %s',
	'LOG_SPLIT_SOURCE'			=> '<strong>Разделены сообщения</strong><br />» из %s',

	'LOG_TOPIC_DELETED'			=> '<strong>Удалена тема</strong><br />» %s',
	'LOG_TOPIC_RESYNC'			=> '<strong>Синхронизированы счётчики темы</strong><br />» %s',
	'LOG_TOPIC_TYPE_CHANGED'	=> '<strong>Изменён тип темы</strong><br />» %s',
	'LOG_UNLOCK'				=> '<strong>Открыта тема</strong><br />» %s',
	'LOG_UNLOCK_POST'			=> '<strong>Разблокировано сообщение</strong><br />» %s',

	'LOG_DISALLOW_ADD'		=> '<strong>Запрещено имя</strong><br />» %s',
	'LOG_DISALLOW_DELETE'	=> '<strong>Разрешено имя</strong>',

	'LOG_DB_BACKUP'			=> '<strong>Резервирование базы данных</strong>',
	'LOG_DB_RESTORE'		=> '<strong>Восстановление базы данных</strong>',

	'LOG_DOWNLOAD_EXCLUDE_IP'	=> '<strong>Исключён IP-адрес/хост из списка скачивания</strong><br />» %s',
	'LOG_DOWNLOAD_IP'			=> '<strong>Добавлен IP-адрес/хост в список скачивания</strong><br />» %s',
	'LOG_DOWNLOAD_REMOVE_IP'	=> '<strong>Удалён IP-адрес/хост из списка скачивания</strong><br />» %s',

	'LOG_ERROR_JABBER'		=> '<strong>Ошибка Jabber</strong><br />» %s',
	'LOG_ERROR_EMAIL'		=> '<strong>Ошибка email</strong><br />» %s',
	
	'LOG_FORUM_ADD'							=> '<strong>Создан форум</strong><br />» %s',
	'LOG_FORUM_DEL_FORUM'					=> '<strong>Удалён форум</strong><br />» %s',
	'LOG_FORUM_DEL_FORUMS'					=> '<strong>Удалён форум с подфорумами</strong><br />» %s',
	'LOG_FORUM_DEL_MOVE_FORUMS'				=> '<strong>Удалён форум и перемещены подфорумы</strong> в %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS'				=> '<strong>Удалён форум и перемещены сообщения</strong> в %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'		=> '<strong>Удалён форум с подфорумами, перемещены сообщения</strong> в %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'	=> '<strong>Удалён форум, перемещены сообщения</strong> в %1$s <strong>и подфорумы</strong> в %2$s<br />» %3$s',
	'LOG_FORUM_DEL_POSTS'					=> '<strong>Удалён форум с сообщениями</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_FORUMS'			=> '<strong>Удалён форум с сообщениями и подфорумами</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'		=> '<strong>Удалён форум с сообщениями, перемещены подфорумы</strong> в %1$s<br />» %2$s',
	'LOG_FORUM_EDIT'						=> '<strong>Изменена информация о форуме</strong><br />» %s',
	'LOG_FORUM_MOVE_DOWN'					=> '<strong>Перемещён форум</strong> %1$s <strong>под</strong> %2$s',
	'LOG_FORUM_MOVE_UP'						=> '<strong>Перемещён форум</strong> %1$s <strong>над</strong> %2$s',
	'LOG_FORUM_SYNC'						=> '<strong>Синхронизирован форум</strong><br />» %s',

	'LOG_GROUP_CREATED'		=> '<strong>Создана группа пользователей</strong><br />» %s',
	'LOG_GROUP_DEFAULTS'	=> '<strong>Назначена группой по умолчанию для пользователей</strong><br />» %s',
	'LOG_GROUP_DELETE'		=> '<strong>Удалена группа</strong><br />» %s',
	'LOG_GROUP_DEMOTED'		=> '<strong>Сняты лидеры в группе</strong> %1$s<br />» %2$s',
	'LOG_GROUP_PROMOTED'	=> '<strong>Назначены лидеры в группе</strong> %1$s<br />» %2$s',
	'LOG_GROUP_REMOVE'		=> '<strong>Удалены пользователи из группы</strong> %1$s<br />» %2$s',
	'LOG_GROUP_UPDATED'		=> '<strong>Обновлена информация о группе</strong><br />» %s',
	'LOG_MODS_ADDED'		=> '<strong>Добавлены новые лидеры в группу</strong> %1$s<br />» %2$s',
	'LOG_USERS_APPROVED'	=> '<strong>Одобрены кандидаты в группу</strong> %1$s<br />» %2$s',
	'LOG_USERS_ADDED'		=> '<strong>Добавлены пользователи в группу</strong> %1$s<br />» %2$s',

	'LOG_IMAGESET_ADD_DB'		=> '<strong>Добавлен пакет изображений в базу данных</strong><br />» %s',
	'LOG_IMAGESET_ADD_FS'		=> '<strong>Добавлен пакет изображений на сервер</strong><br />» %s',
	'LOG_IMAGESET_DELETE'		=> '<strong>Удалён пакет изображений</strong><br />» %s',
	'LOG_IMAGESET_EDIT_DETAILS'	=> '<strong>Изменена информация о пакете изображений</strong><br />» %s',
	'LOG_IMAGESET_EDIT'			=> '<strong>Изменён пакет изображений</strong><br />» %s',
	'LOG_IMAGESET_EXPORT'		=> '<strong>Экспортирован пакет изображений</strong><br />» %s',
	'LOG_IMAGESET_REFRESHED'	=> '<strong>Обновлён пакет изображений</strong><br />» %s',

	'LOG_INACTIVE_ACTIVATE'	=> '<strong>Активированы неактивные пользователи</strong><br />» %s',
	'LOG_INACTIVE_DELETE'	=> '<strong>Удалены неактивные пользователи</strong><br />» %s',
	'LOG_INACTIVE_REMIND'	=> '<strong>Отправлены email-напоминания неактивным пользователям</strong><br />» %s',
	'LOG_INSTALL_CONVERTED'	=> '<strong>Конференция %1$s сконвертирована в phpBB %2$s</strong>',
	'LOG_INSTALL_INSTALLED'	=> '<strong>Установлен phpBB %s</strong>',

	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>Неудачная проверка сессии по IP-адресу/браузеру/X_FORWARDED_FOR</strong><br />»IP-адрес пользователя "<em>%1$s</em>" проверен по IP-адресу сессии "<em>%2$s</em>", строка браузера пользователя "<em>%3$s</em>" проверена по строке браузера сессии "<em>%4$s</em>" и строка X_FORWARDED_FOR пользователя "<em>%5$s</em>" проверена по строке X_FORWARDED_FOR сессии "<em>%6$s</em>".',

	'LOG_JAB_CHANGED'			=> '<strong>Изменена учётная запись Jabber</strong>',
	'LOG_JAB_PASSCHG'			=> '<strong>Изменён пароль Jabber</strong>',
	'LOG_JAB_REGISTER'			=> '<strong>Зарегистрирована учётная запись Jabber</strong>',
	'LOG_JAB_SETTINGS_CHANGED'	=> '<strong>Изменены настройки Jabber</strong>',

	'LOG_LANGUAGE_PACK_DELETED'		=> '<strong>Удалён языковой пакет</strong><br />» %s',
	'LOG_LANGUAGE_PACK_INSTALLED'	=> '<strong>Установлен языковой пакет</strong><br />» %s',
	'LOG_LANGUAGE_PACK_UPDATED'		=> '<strong>Обновлена информация о языковом пакете</strong><br />» %s',
	'LOG_LANGUAGE_FILE_REPLACED'	=> '<strong>Заменён языковой файл</strong><br />» %s',

	'LOG_MASS_EMAIL'		=> '<strong>Произведена массовая email-рассылка</strong><br />» %s',

	'LOG_MCP_CHANGE_POSTER'	=> '<strong>Изменён автор темы "%1$s"</strong><br />» с %2$s на %3$s',

	'LOG_MODULE_DISABLE'	=> '<strong>Выключен модуль</strong>',
	'LOG_MODULE_ENABLE'		=> '<strong>Включен модуль</strong>',
	'LOG_MODULE_MOVE_DOWN'	=> '<strong>Перемещён вниз модуль</strong><br />» %s',
	'LOG_MODULE_MOVE_UP'	=> '<strong>Перемещён вверх модуль</strong><br />» %s',
	'LOG_MODULE_REMOVED'	=> '<strong>Удалён модуль</strong><br />» %s',
	'LOG_MODULE_ADD'		=> '<strong>Добавлен модуль</strong><br />» %s',
	'LOG_MODULE_EDIT'		=> '<strong>Изменён модуль</strong><br />» %s',

	'LOG_A_ROLE_ADD'		=> '<strong>Добавлена администраторская роль</strong><br />» %s',
	'LOG_A_ROLE_EDIT'		=> '<strong>Изменена администраторская роль</strong><br />» %s',
	'LOG_A_ROLE_REMOVED'	=> '<strong>Удалена администраторская роль</strong><br />» %s',
	'LOG_F_ROLE_ADD'		=> '<strong>Добавлена форумная роль</strong><br />» %s',
	'LOG_F_ROLE_EDIT'		=> '<strong>Изменена форумная роль</strong><br />» %s',
	'LOG_F_ROLE_REMOVED'	=> '<strong>Удалена форумная роль</strong><br />» %s',
	'LOG_M_ROLE_ADD'		=> '<strong>Добавлена модераторская роль</strong><br />» %s',
	'LOG_M_ROLE_EDIT'		=> '<strong>Изменена модераторская роль</strong><br />» %s',
	'LOG_M_ROLE_REMOVED'	=> '<strong>Удалена модераторская роль</strong><br />» %s',
	'LOG_U_ROLE_ADD'		=> '<strong>Добавлена пользовательская роль</strong><br />» %s',
	'LOG_U_ROLE_EDIT'		=> '<strong>Изменена пользовательская роль</strong><br />» %s',
	'LOG_U_ROLE_REMOVED'	=> '<strong>Удалена пользовательская роль</strong><br />» %s',

	'LOG_PROFILE_FIELD_ACTIVATE'	=> '<strong>Активировано поле профиля</strong><br />» %s',
	'LOG_PROFILE_FIELD_CREATE'		=> '<strong>Добавлено поле профиля</strong><br />» %s',
	'LOG_PROFILE_FIELD_DEACTIVATE'	=> '<strong>Деактивировано поле профиля</strong><br />» %s',
	'LOG_PROFILE_FIELD_EDIT'		=> '<strong>Изменено поле профиля</strong><br />» %s',
	'LOG_PROFILE_FIELD_REMOVED'		=> '<strong>Удалено поле профиля</strong><br />» %s',

	'LOG_PRUNE'					=> '<strong>Очищены форумы</strong><br />» %s',
	'LOG_AUTO_PRUNE'			=> '<strong>Произведена автоочистка форумов</strong><br />» %s',
	'LOG_PRUNE_USER_DEAC'		=> '<strong>Деактивированы пользователи</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>Удалены пользователи с их сообщениями</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_ANON'	=> '<strong>Удалены пользователи, их сообщения оставлены</strong><br />» %s',

	'LOG_RANK_ADDED'		=> '<strong>Добавлено звание</strong><br />» %s',
	'LOG_RANK_REMOVED'		=> '<strong>Удалено звание</strong><br />» %s',
	'LOG_RANK_UPDATED'		=> '<strong>Обновлено звание</strong><br />» %s',

	'LOG_REASON_ADDED'		=> '<strong>Добавлена причина жалобы/отклонения</strong><br />» %s',
	'LOG_REASON_REMOVED'	=> '<strong>Удалена причина жалобы/отклонения</strong><br />» %s',
	'LOG_REASON_UPDATED'	=> '<strong>Обновлена причина жалобы/отклонения</strong><br />» %s',

	'LOG_RESET_DATE'			=> '<strong>Сброшена дата запуска конференции</strong>',
	'LOG_RESET_ONLINE'			=> '<strong>Сброшен рекорд посещаемости</strong>',
	'LOG_RESYNC_POSTCOUNTS'		=> '<strong>Синхронизированы счётчики сообщений пользователей</strong>',
	'LOG_RESYNC_POST_MARKING'	=> '<strong>Синхронизированы свои темы</strong>',
	'LOG_RESYNC_STATS'			=> '<strong>Синхронизирована статистика сообщений, тем и пользователей</strong>',

	'LOG_STYLE_ADD'				=> '<strong>Добавлен стиль</strong><br />» %s',
	'LOG_STYLE_DELETE'			=> '<strong>Удалён стиль</strong><br />» %s',
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>Изменён стиль</strong><br />» %s',
	'LOG_STYLE_EXPORT'			=> '<strong>Экспортирован стиль</strong><br />» %s',

	'LOG_TEMPLATE_ADD_DB'			=> '<strong>Добавлен шаблон в базу данных</strong><br />» %s',
	'LOG_TEMPLATE_ADD_FS'			=> '<strong>Добавлен шаблон на сервер</strong><br />» %s',
	'LOG_TEMPLATE_CACHE_CLEARED'	=> '<strong>Удалена кэшированная версия файлов шаблона <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_DELETE'			=> '<strong>Удалён шаблон</strong><br />» %s',
	'LOG_TEMPLATE_EDIT'				=> '<strong>Изменён шаблон <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'		=> '<strong>Изменена информация о шаблоне</strong><br />» %s',
	'LOG_TEMPLATE_EXPORT'			=> '<strong>Экспортирован шаблон</strong><br />» %s',
	'LOG_TEMPLATE_REFRESHED'		=> '<strong>Обновлён шаблон</strong><br />» %s',

	'LOG_THEME_ADD_DB'			=> '<strong>Добавлена тема в базу данных</strong><br />» %s',
	'LOG_THEME_ADD_FS'			=> '<strong>Добавлена тема на сервер</strong><br />» %s',
	'LOG_THEME_DELETE'			=> '<strong>Удалена тема</strong><br />» %s',
	'LOG_THEME_EDIT_DETAILS'	=> '<strong>Изменена информация о теме</strong><br />» %s',
	'LOG_THEME_EDIT'			=> '<strong>Изменена тема <em>%1$s</em></strong><br />» Изменён класс <em>%2$s</em>',
	'LOG_THEME_EDIT_ADD'		=> '<strong>Изменена тема <em>%1$s</em></strong><br />» Добавлен класс <em>%2$s</em>',
	'LOG_THEME_EXPORT'			=> '<strong>Экспортирована тема</strong><br />» %s',
	'LOG_THEME_REFRESHED'		=> '<strong>Обновлена тема</strong><br />» %s',

	'LOG_UPDATE_DATABASE'	=> '<strong>Обновлена база данных с версии %1$s до версии %2$s</strong>',
	'LOG_UPDATE_PHPBB'		=> '<strong>Обновлен phpBB с версии %1$s до версии %2$s</strong>',

	'LOG_USER_ACTIVE'		=> '<strong>Активирован пользователь</strong><br />» %s',
	'LOG_USER_BAN_USER'		=> '<strong>Заблокирован пользователь через раздел Управление пользователями</strong> по причине "<em>%1$s</em>"<br />» %2$s',
	'LOG_USER_BAN_IP'		=> '<strong>Заблокирован IP-адрес через раздел Управление пользователями</strong> по причине "<em>%1$s</em>"<br />» %2$s',
	'LOG_USER_BAN_EMAIL'	=> '<strong>Заблокирован email-адрес через раздел Управление пользователями</strong> по причине "<em>%1$s</em>"<br />» %2$s',
	'LOG_USER_DELETED'		=> '<strong>Удалён пользователь</strong><br />» %s',
	'LOG_USER_DEL_ATTACH'	=> '<strong>Удалены все вложения пользователя</strong><br />» %s',
	'LOG_USER_DEL_AVATAR'	=> '<strong>Удалена аватара пользователя</strong><br />» %s',
	'LOG_USER_DEL_POSTS'	=> '<strong>Удалены все сообщения пользователя</strong><br />» %s',
	'LOG_USER_DEL_SIG'		=> '<strong>Удалена подпись пользователя</strong><br />» %s',
	'LOG_USER_INACTIVE'		=> '<strong>Деактивирован пользователь</strong><br />» %s',
	'LOG_USER_MOVE_POSTS'	=> '<strong>Перемещены сообщения пользователя</strong><br />» "%1$s" в форум "%2$s"',
	'LOG_USER_NEW_PASSWORD'	=> '<strong>Изменён пароль пользователя</strong><br />» %s',
	'LOG_USER_REACTIVATE'	=> '<strong>Принудительная повторная активация учётной записи пользователя</strong><br />» %s',
	'LOG_USER_UPDATE_EMAIL'	=> '<strong>Пользователем "%1$s" изменён email-адрес</strong><br />» с "%2$s" на "%3$s"',
	'LOG_USER_UPDATE_NAME'	=> '<strong>Изменено имя пользователя</strong><br />» с "%1$s" на "%2$s"',
	'LOG_USER_USER_UPDATE'	=> '<strong>Обновлена информация о пользователе</strong><br />» %s',

	'LOG_USER_ACTIVE_USER'		=> '<strong>Активирована учётная запись пользователя</strong>',
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong>Удалена аватара пользователя</strong>',
	'LOG_USER_DEL_SIG_USER'		=> '<strong>Удалена подпись пользователя</strong>',
	'LOG_USER_FEEDBACK'			=> '<strong>Добавлена заметка о пользователе</strong><br />» %s',
	'LOG_USER_GENERAL'			=> '%s',
	'LOG_USER_INACTIVE_USER'	=> '<strong>Деактивирована учётная запись пользователя</strong>',
	'LOG_USER_LOCK'				=> '<strong>Пользователь закрыл свою тему</strong><br />» %s',
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>Перемещены все сообщения в форум "%s"</strong>',
	'LOG_USER_REACTIVATE_USER'	=> '<strong>Принудительная повторная активация учётной записи пользователя</strong>',
	'LOG_USER_UNLOCK'			=> '<strong>Пользователь открыл свою тему</strong><br />» %s',
	'LOG_USER_WARNING'			=> '<strong>Вынесено предупреждение пользователю</strong><br />» %s',
	'LOG_USER_WARNING_BODY'		=> '<strong>Следующее предупреждение было направлено пользователю</strong><br />» %s',

	'LOG_USER_GROUP_CHANGE'			=> '<strong>Пользователь изменил группу по умолчанию</strong><br />» %s',
	'LOG_USER_GROUP_DEMOTE'			=> '<strong>Пользователь снят с лидеров группы</strong><br />» %s',
	'LOG_USER_GROUP_JOIN'			=> '<strong>Пользователь вступил в группу</strong><br />» %s',
	'LOG_USER_GROUP_JOIN_PENDING'	=> '<strong>Пользователь подал запрос на вступление в группу и должен быть одобрен</strong><br />» %s',
	'LOG_USER_GROUP_RESIGN'			=> '<strong>Пользователь отказался от членства в группе</strong><br />» %s',

	'LOG_WORD_ADD'			=> '<strong>Добавлен цензор слов</strong><br />» %s',
	'LOG_WORD_DELETE'		=> '<strong>Удалён цензор слов</strong><br />» %s',
	'LOG_WORD_EDIT'			=> '<strong>Изменён цензор слов</strong><br />» %s',
));

?>