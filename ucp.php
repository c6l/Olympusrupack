<?php
/** 
*
* ucp [Russian]
*
* @package language
* @version $Id: ucp.php,v 1.86 2006/11/24 14:59:13 acydburn Exp $
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

// Privacy policy and T&C
$lang = array_merge($lang, array(
	'TERMS_OF_USE_CONTENT'	=> 'Заходя на форумы «%1$s» (в дальнейшем «мы», «наш», «%1$s», «%2$s»), вы подтверждаете своё согласие со следующими условиями. Если вы не согласны с ними, пожалуйста, не заходите и не пользуйтесь форумами «%1$s». Мы оставляем за собой право изменять эти правила в любое время и сделаем всё возможное, чтобы уведомить вас об этом, однако с вашей стороны было бы разумным регулярно просматривать этот текст на предмет изменений, так как использование форумов «%1$s» после обновленния/исправленния условий означает ваше согласие с ними.<br />
	<br />
	Наши форумы работают под управлением программного обеспечения для создания конференций phpBB (в дальнейшем «они», «программное обеспечение phpBB», «www.phpbb.com», «Группа phpBB», «Команды phpBB»), выпущенного по лицензии «<a href="http://www.gnu.org/licenses/gpl.html">General Public License</a>» (в дальнейшем «GPL»). Скачать его можно по адресу <a href="http://www.phpbb.com/">www.phpbb.com</a>. Ограничения лицензии GPL для программного обеспечения phpBB строго связаны с организацией и поддержкой интернет-конференций, и не оказывают влияния на то, что администрация конференций определяет в качестве допустимого содержания и/или поведения в них. За дополнительной информацией о phpBB обращайтесь по адресу <a href="http://www.phpbb.com/">http://www.phpbb.com/</a>.<br />
	<br />
	Вы соглашаетесь не размещать оскорбительных, угрожающих, клеветнических сообщений, порнографических сообщений, призывов к национальной розни и прочих сообщений, которые могут нарушить законы вашей страны, страны, которая предоставляет услуги хостинга для форумов «%1$s», или международное право. Попытки размещения таких сообщений могут привести к вашему немедленному отключению от форумов, при этом ваш провайдер будет поставлен в известность, если мы сочтём это нужным. IP-адреса всех сообщений сохраняются для возможности проведения такой политики. Вы соглашаетесь с тем, что администраторы форумов «%1$s» имеют право удалить, отредактировать, перенести или закрыть любую тему в любое время по своему усмотрению. Как пользователь вы согласны с тем, что введённая вами информация будет храниться в базе данных. Хотя эта информация не будет открыта третьим лицам без вашего разрешения, ни администрация форумов «%1$s», ни Группа phpBB не может быть ответственна за действия хакеров, которые могут привести к несанкционированному доступу к ней.
	',

	'PRIVACY_POLICY'		=> 'Это соглашение подробно объясняет, как «%1$s» и его подразделения (в дальнейшем «мы», «наш», «%1$s», «%2$s») и phpBB (в дальнейшем «они», «программное обеспечение phpBB», «www.phpbb.com», «Группа phpBB», «Команды phpBB») используют информацию, полученную во время любой из ваших пользовательских сессий (в дальнейшем «ваша информация»).<br />
	<br />
	Ваша информация собирается двумя способами. Во-первых, просмотр «%1$s» приведёт к созданию программным обеспечением phpBB определенного числа "cookies" (небольшие текстовые файлы, загружаемые в папку временных файлов вашего браузера). Первые две "cookie" содержат только идентификатор пользователя (в дальнейшем «user-id») и идентификатор анонимной сессии (в дальнейшем «session-id»), автоматически присвоенные вам программным обеспечением phpBB. Третья "cookie" будет создана после просмотра одной из тем на форумах «%1$s» и будет использоваться для хранения информации о прочтенных вами темах, повышая таким образом удобство работы с форумами.<br />
	<br />
	Также, во время просмотра форумов «%1$s», мы можем установить cookies, внешние по отношению к программному обеспечению phpBB, однако они выходят за рамки этого документа, целью которого является рассмотрение страниц, созданных исключительно программным обеспечением phpBB. Вторым источником получения вашей информации являются данные, которые вы отправляете на форум. Этими данными могут быть, но не исчерпываются, следующие данные: сообщения, размещенные под учётной записью Гостя (в дальнейшем «анонимные сообщения»), данные, указанные при регистрации на форумах «%1$s» (в дальнейшем «ваша учётная запись») и сообщения, оставленные вами после регистрации и авторизации (в дальнейшем «ваши сообщения»).<br />
	<br />
	Ваша учётная запись будет содержать, как минимум, однозначно идентифицируемое имя (в дальнейшем «ваше имя пользователя»), индивидуальный пароль для входа под вашей учётной записью (далее «ваш пароль») и реальный адрес email (в дальнейшем «ваш адрес email»). Ваша информация из вашей учётной записи на форумах «%1$s» охраняется законами о защите компьютерной информации, применяемыми в стране, предоставляющей нам услуги хостинга. Любая информация, запрашиваемая при регистрации на форумах «%1$s», кроме вашего имени пользователя, вашего пароля и вашего адреса email, может быть на наше усмотрение как необходимой, так и необязательной ко вводу. В любом случае у вас есть возможность выбрать, какая информация из вашей учётной записи будет общедоступна. Кроме того, у вас есть возможность согласиться/отказаться от получения сообщений, автоматически сгенерированных программным обеспечением phpBB.<br />
	<br />
	Ваш пароль надежно зашифрован (односторонним хэшированием). Однако, не рекомендуется использовать этот же самый пароль, регистрируясь на других сайтах. Ваш пароль является средством доступа к вашей учётной записи на форумах «%1$s», пожалуйста, храните его в тайне, ни при каких обстоятельствах ни «%1$s», ни Группа phpBB, ни другое третье лицо не в праве спрашивать ваш пароль. В случае, если вы забудете ваш пароль к вашей учётной записи, вы сможете воспользоваться функцией восстановления пароля «Забыли пароль?», предусмотренной программным обеспечением phpBB. Вам будет необходимо ввести ваше имя пользователя и ваш адрес email, после чего программное обеспечение phpBB сгенерирует вам новый пароль для вашей учётной записи.<br />
	',
));

$lang = array_merge($lang, array(
	'CAPTCHA' =>array(
		'cells'		=> array(
			'   Введите код,    ',
			'находящийся справа,',
			'в том порядке, что ',
			'   указан слева    ',
		),
		'shape'		=> array(
			'   Введите код,    ',
			'находящийся справа,',
			'  соответствующий  ',
			' изображению слева ',
		)
	)
));

// Common language entries
$lang = array_merge($lang, array(
	'ACCOUNT_ACTIVE'				=> 'Ваша учётная запись была активирована. Спасибо за регистрацию.',
	'ACCOUNT_ACTIVE_ADMIN'			=> 'Ваша учётная запись была активирована.',
	'ACCOUNT_ADDED'					=> 'Спасибо за регистрацию, учётная запись была создана. Вы можете войти в систему, используя ваше имя и пароль.',
	'ACCOUNT_COPPA'					=> 'Ваша учётная запись была создана, но теперь она должна быть одобрена, более подробная информация была выслана вам по e-mail.',
	'ACCOUNT_INACTIVE'				=> 'Учётная запись была создана. На этом форуме требуется активация учётной записи, ключ для активации был выслан на введённый вами адрес. Проверьте свою почту для получения более подробной информации.',
	'ACCOUNT_INACTIVE_ADMIN'		=> 'Учётная запись была создана. На этом форуме требуется активация новой учётной записи одним из администраторов. Им был отправлен e-mail, и, как только они активируют вашу учётную запись, вы получите уведомление.',
	'ACTIVATION_EMAIL_SENT'			=> 'Письмо для активации учётной записи было выслано вам по email',
	'ADD'							=> 'Добавить',
	'ADD_BCC'						=> 'Добавить [Копия]',
	'ADD_FOES'						=> 'Добавить новых недругов',
	'ADD_FOES_EXPLAIN'				=> 'Вы можете ввести несколько имён пользователей, каждое на отдельной строке',
	'ADD_FOLDER'					=> 'Добавить папку',
	'ADD_FRIENDS'					=> 'Добавить новых друзей',
	'ADD_FRIENDS_EXPLAIN'			=> 'Вы можете ввести несколько имён пользователей, каждое на отдельной строке',
	'ADD_NEW_RULE'					=> 'Добавить новое правило',
	'ADD_RULE'						=> 'Добавить правило',
	'ADD_TO'						=> 'Добавить [Кому]',
	'ADMIN_EMAIL'					=> 'Получать email от администраторов',
	'AGREE'							=> 'Я согласен с этими условиями',
	'ALLOW_PM'						=> 'Разрешить пользователям посылать вам личные сообщения',
	'ALLOW_PM_EXPLAIN'				=> 'Учтите, что администраторы и модераторы всегда смогут посылать вам сообщения.',
	'ALREADY_ACTIVATED'				=> 'Вы уже активировали свою учётную запись',
	'ATTACHMENTS_EXPLAIN'			=> 'Это список вложений к сообщениям, оставленным в этом форуме.',
	'ATTACHMENTS_DELETED'			=> 'Вложения успешно удалено.',
	'ATTACHMENT_DELETED'			=> 'Вложение успешно удалено.',
	'AVATAR_CATEGORY'				=> 'Категория',
	'AVATAR_EXPLAIN'				=> 'Максимальные размеры: ширина %1$d пикс., высота %2$d пикс., размер файла %3$dКб.',
	'AVATAR_GALLERY'				=> 'Галерея аватар',
	'AVATAR_GENERAL_UPLOAD_ERROR'	=> 'Невозможно загрузить аватару в %s',
	'AVATAR_PAGE'					=> 'Страница',

   	'BACK_TO_DRAFTS'         		=> 'Вернуться к сохраненным черновикам',
   	'BACK_TO_LOGIN'           		=> 'Вернуться на страницу входа',
  	'BIRTHDAY'               		=> 'День рождения',
   	'BIRTHDAY_EXPLAIN'         		=> 'Если вы укажете год рождения, ваш возраст будет отображаться на форуме.', // ???
   	'BOARD_DATE_FORMAT'         	=> 'Формат даты',
	'BOARD_DATE_FORMAT_EXPLAIN'   	=> 'Синтаксис идентичен функции <a href="http://www.php.net/date">date()</a> языка PHP',
	'BOARD_DST'               		=> 'Сейчас действует летнее время',
	'BOARD_LANGUAGE'         		=> 'Язык',
	'BOARD_STYLE'            		=> 'Внешний вид форумов',
	'BOARD_TIMEZONE'         		=> 'Часовой пояс',
	'BOOKMARKS'               		=> 'Закладки',
	'BOOKMARKS_EXPLAIN'         	=> 'Вы можете добавить данную тему в закладки для будущего обращения. Установите флажок для любой закладки, которую вы хотите удалить, затем нажмите кнопку <em>Удалить отмеченные закладки</em>.',
	'BOOKMARKS_DISABLED'      		=> 'Закладки отключены на данных форумах',
	'BOOKMARKS_REMOVED'         	=> 'Закладки были успешно удалены',

	'CANNOT_EDIT_MESSAGE_TIME'  	=> 'Вы больше не можете отредактировать или удалить данное сообщение',
	'CANNOT_MOVE_TO_SAME_FOLDER'	=> 'Сообщения не могут быть перемещены в папку, которую вы собираетесь удалить.',
	'CANNOT_RENAME_FOLDER'      	=> 'Данная папка не может быть переименована.',
	'CANNOT_REMOVE_FOLDER'      	=> 'Данная папка не может быть удалена.',
	'CHANGE_DEFAULT_GROUP'      	=> 'Изменить группу по умолчанию',
	'CHANGE_PASSWORD'         		=> 'Изменить пароль',
	'CLICK_RETURN_FOLDER'      		=> '%1$sВернуться в папку &laquo;%3$s&raquo;%2$s',
	'CONFIRMATION'            		=> 'Подтверждение регистрации',
	'CONFIRM_CHANGES'         		=> 'Подтвердите изменения',
	'CONFIRM_EMAIL'            		=> 'Подтвердите email',
	'CONFIRM_EMAIL_EXPLAIN'     	=> 'Указывайте email только если вы хотите его поменять.',
	'CONFIRM_EXPLAIN'         		=> 'Для предотвращения автоматических регистраций администратор форумов требует ввода кода подтверждения. Код показан на картинке, которая находится ниже. Если вы не видите код на картинке, то обратитесь к %sадминистратору%s.',
	'CONFIRM_PASSWORD'         		=> 'Подтвердите новый пароль',
	'CONFIRM_PASSWORD_EXPLAIN'  	=> 'Указывайте пароль только если вы изменили его выше.',
	'COPPA_BIRTHDAY'         		=> 'Для продолжения регистрации, пожалуйста, укажите дату рождения.',
	'COPPA_COMPLIANCE'         		=> 'Согласие по COPPA',
	'COPPA_EXPLAIN'            		=> 'Учтите, что ваша учётная запись будет создана после отправки формы. Тем не менее, она не будет активирована до тех пор, пока родитель или опекун не одобрит вашу регистрацию. Вам будет выслана копия email с необходимой формой и указаниями, куда её нужно отправить.',
	'CREATE_FOLDER'            		=> 'Добавить папку…',
	'CURRENT_IMAGE'            		=> 'Текущее изображение',
	'CURRENT_PASSWORD'         		=> 'Текущий пароль',
	'CURRENT_PASSWORD_EXPLAIN'  	=> 'Если вы хотите изменить имя пользователя, e-mail или пароль, вы должны указать текущий пароль.', // ???
	'CUR_PASSWORD_ERROR'      		=> 'Введённый вами пароль не совпадает с текущим паролем',
	'CUSTOM_DATEFORMAT'         	=> 'Другой…',

	'DEFAULT_ACTION'         		=> 'Действие по умолчанию',
	'DEFAULT_ACTION_EXPLAIN'   		=> 'Это действие будет выполнено, если ни одно из вышеуказанных правил не может быть применено',
	'DEFAULT_ADD_SIG'         		=> 'Всегда присоединять мою подпись',
	'DEFAULT_BBCODE'         		=> 'BBCode всегда включён',
	'DEFAULT_NOTIFY'         		=> 'Всегда сообщать мне об ответах',
	'DEFAULT_SMILIES'         		=> 'Смайлики всегда включены',
	'DEFINED_RULES'            		=> 'Определенные правила',
	'DELETED_TOPIC'            		=> 'Tема была удалена',
	'DELETE_ATTACHMENT'         	=> 'Удалить вложение',
	'DELETE_ATTACHMENTS'      		=> 'Удалить вложения',
	'DELETE_ATTACHMENT_CONFIRM' 	=> 'Вы уверены, что хотите удалить данное вложение?',
	'DELETE_ATTACHMENTS_CONFIRM'	=> 'Вы уверены, что хотите удалить данные вложения?',
	'DELETE_AVATAR'            		=> 'Удалить изображение',
	'DELETE_COOKIES_CONFIRM'   		=> 'Вы уверены, что хотите удалить все cookie, установленные данным форумом?',
	'DELETE_MARKED_PM'         		=> 'Удалить отмеченные сообщения',
	'DELETE_MARKED_PM_CONFIRM'  	=> 'Вы уверены, что хотите удалить все отмеченные соообщения?',
	'DELETE_OLDEST_MESSAGES'   		=> 'Удалить самые старые сообщения',
	'DELETE_MESSAGE'         		=> 'Удалить сообшение',
	'DELETE_MESSAGE_CONFIRM'   		=> 'Вы уверены, что хотите удалить данное сообщение?',
	'DELETE_MESSAGES_IN_FOLDER' 	=> 'Удалить все сообщения, которые содержатся в удаляемой папке',
	'DELETE_RULE'            		=> 'Удалить правило',
	'DELETE_RULE_CONFIRM'      		=> 'Вы уверены, что хотите удалить данное правило?',
	'DEMOTE_SELECTED'         		=> 'Отказаться от руководства',
	'DISABLE_CENSORS'         		=> 'Разрешить автоцензор',
	'DISPLAY_GALLERY'         		=> 'Показать галерею',
	'DOMAIN_NO_MX_RECORD_EMAIL' 	=> 'Введенный домен email не имеет корректной почтовой записи в DNS (MX record).',
	'DOWNLOADS'               		=> 'Скачивания',
	'DRAFTS_DELETED'         		=> 'Все отмеченные черновики были успешно удалены.',
	'DRAFTS_EXPLAIN'         		=> 'Здесь вы можете просмотреть, отредактировать и удалить ваши сохраненные черновики.',
	'DRAFT_UPDATED'            		=> 'Черновик был успешно обновлен.',
	
	'EDIT_DRAFT_EXPLAIN'      		=> 'Здесь вы можете редактировать черновик. Черновики не содержат вложений и опросов.',
	'EMAIL_BANNED_EMAIL'      		=> 'Введенный адрес email запрещен к использованию.',
	'EMAIL_INVALID_EMAIL'      		=> 'Введенный адрес email неверен.',
	'EMAIL_REMIND'            		=> 'Адрес email, указанный вами при регистрации.',
	'EMAIL_TAKEN_EMAIL'         	=> 'Введенный адрес email уже используется другим пользователем',
	'EMPTY_DRAFT'            		=> 'Вы должны ввести сообщение, чтобы подтвердить изменения',
	'EMPTY_DRAFT_TITLE'         	=> 'Вы должны ввести название черновика',
	'EXPORT_AS_XML'            		=> 'Экспортировать как XML',
	'EXPORT_AS_CSV'            		=> 'Экспортировать как CSV',
	'EXPORT_AS_CSV_EXCEL'      		=> 'Экспортировать как CSV (Excel)',
	'EXPORT_AS_TXT'            		=> 'Экспортировать как TXT',
	'EXPORT_AS_MSG'            		=> 'Экспортировать как MSG',
	'EXPORT_FOLDER'            		=> 'Экспортировать папку',

	'FIELD_REQUIRED'           			=> 'Не заполнено поле «%s».',
	'FIELD_TOO_SHORT'          			=> 'Значение поля «%1$s» слишком короткое, минимально допустимая длина составляет %2$d символов.',
	'FIELD_TOO_LONG'           			=> 'Значение поля «%1$s» слишком длинное, максимально допустимая длина составляет %2$d символов.',
	'FIELD_TOO_SMALL'          			=> 'Значение поля «%1$s» слишком маленькое, минимально допустимым значением является %2$d.',
	'FIELD_TOO_LARGE'          			=> 'Значение поля «%1$s» слишком большое, максимально допустимым значением является %2$d.',
	'FIELD_INVALID_CHARS_NUMBERS_ONLY'	=> 'Поле «%s» содержит недопустимые символы, разрешены только цифры.',
	'FIELD_INVALID_CHARS_ALPHA_ONLY'   	=> 'Поле «%s» содержит недопустимые символы, разрешены только буквенно-цифровые символы.',
	'FIELD_INVALID_CHARS_SPACERS_ONLY'  => 'Поле «%s» содержит недопустимые символы, разрещены только буквенно-цифровые символы, пробелы, а также символы -+_[].',
	'FIELD_INVALID_DATE'        		=> 'Поле «%s» содержит недопустимую дату.',

	'FOE_MESSAGE'            	=> 'Сообщение от недруга',
	'FOES_EXPLAIN'            	=> 'Foes are users which will be ignored by default. Posts by these users will not be fully visible and personal messages will not be permitted. Please note that you cannot ignore moderators or administrators.',
	'FOES_UPDATED'            	=> 'Списко недругов был успешно обновлен',
	'FOLDER_ADDED'            	=> 'Папка была успешно добавлена',
	'FOLDER_MESSAGE_STATUS'     => '%1$d из %2$d сообщений',
	'FOLDER_NAME_EXIST'         => 'Папка <strong>%s</strong> уже существует',
	'FOLDER_OPTIONS'         	=> 'Свойства папки',
	'FOLDER_RENAMED'         	=> 'Папка была успешно переименована',
	'FOLDER_REMOVED'         	=> 'Папка была успешно удалена',
	'FOLDER_STATUS_MSG'         => 'Папка заполнена на %1$d%% (%2$d из %3$d сообщений)',
	'FORWARD_PM'            	=> 'Переслать ЛС',
	'FORCE_PASSWORD_EXPLAIN'   	=> 'Before you may continue browsing the board you are required to change your password',
	'FRIEND_MESSAGE'         	=> 'Сообщение от друга',
	'FRIENDS'               	=> 'Друзья',
	'FRIENDS_EXPLAIN'         	=> 'Friends enable you quick access to members you communicate with frequently. If the template has relevant support any posts made by a friend may be highlighted.',
	'FRIENDS_OFFLINE'         	=> 'Вне форума',
	'FRIENDS_ONLINE'         	=> 'На форуме',
	'FRIENDS_UPDATED'         	=> 'Список друзей был успешно обновлен',
	'FULL_FOLDER_OPTION_CHANGED'=> 'Full Folder Option changed successfully', // ???
	'FWD_ORIGINAL_MESSAGE'      => '-------- Original Message --------',
	'FWD_SUBJECT'            	=> 'Тема: %s',
	'FWD_DATE'               	=> 'Дата: %s',
	'FWD_FROM'               	=> 'От: %s',
	'FWD_TO'               		=> 'Кому: %s',

	'GLOBAL_ANNOUNCEMENT'      	=> 'Общее объявление',

	'HIDE_ONLINE'           	=> 'Скрыть мое пребывание на форуме',
	'HOLD_NEW_MESSAGES'         => 'Do not accept new messages (New messages will be held back until enough space is available)',
	'HOLD_NEW_MESSAGES_SHORT'   => 'New messages will be held back',
   
	'IF_FOLDER_FULL'			=> 'Если папка заполнена',
	'IMPORTANT_NEWS'			=> 'Важные объявления',
	'INVALID_CHARS_USERNAME'	=> 'Имя пользователя содержит запрещенные символы.',
	'INVALID_CHARS_NEW_PASSWORD'=> 'Пароль не содержит требуемых символов.',
	'ITEMS_REQUIRED'			=> 'Поля вашего профиля отмеченные * обязательны к заполнению',

	'JOIN_SELECTED'				=> 'Вступить в выбранную',

	'LANGUAGE'					=> 'Язык',
	'LINK_REMOTE_AVATAR'		=> 'Внешняя ссылка',
	'LINK_REMOTE_AVATAR_EXPLAIN'=> 'Введите URL, по которому находится файл с изображением, он будет использован в качестве вашей аватары.',
	'LINK_REMOTE_SIZE'			=> 'Размеры аватары',
	'LINK_REMOTE_SIZE_EXPLAIN'	=> 'Укажите высоту и ширину аватары или оставьте поля пустыми для их автоматической проверки.',
	'LOGIN_EXPLAIN_UCP'			=> 'Пожалуйста, авторизуйтесь для входа в ваш Профиль',
	'LOGIN_REDIRECT'			=> 'Вы успешно вошли в систему.',
	'LOGOUT_REDIRECT'			=> 'Вы успешно вышли из системы.',

	'MARK_IMPORTANT'				=> 'Пометить как важное',
	'MARKED_MESSAGE'				=> 'Помеченное сообщение',
	'MAX_FOLDER_REACHED'			=> 'Достигнуто максимальное количество пользовательских папок',
	'MESSAGE_BY_AUTHOR'				=> '',
	'MESSAGE_COLOURS'				=> 'Цвета сообщений',
	'MESSAGE_DELETED'				=> 'Сообщение успешно удалено',
	'MESSAGE_HISTORY'				=> 'История сообщений',
	'MESSAGE_REMOVED_FROM_OUTBOX'	=> 'Автор удалил это сообщение до того, как вы успели его прочесть',
	'MESSAGE_SENT_ON'				=> 'от',
	'MESSAGE_STORED'				=> 'Ваше сообщение успешно отправлено',
	'MESSAGE_TO'					=> 'Кому',
	'MESSAGES_DELETED'				=> 'Сообщения успешно удалены',
	'MOVE_DELETED_MESSAGES_TO'		=> 'Переместить сообщения из удаляемой папки в папку',
	'MOVE_DOWN'						=> 'Сдвинуть вниз',
	'MOVE_MARKED_TO_FOLDER'			=> 'Переместить отмеченные в папку %s',
	'MOVE_PM_ERROR'					=> 'Во время перемещения сообщений в новую папку произошла ошибка, перенесено сообщений: %1d из %2d.',
	'MOVE_TO_FOLDER'				=> 'Переместить в папку',
	'MOVE_UP'						=> 'Сдвинуть вверх',

	'NEW_EMAIL_ERROR'				=> 'Введенные вами адреса email не совпадают.',
	'NEW_FOLDER_NAME'				=> 'Новое имя папки',
	'NEW_PASSWORD'					=> 'Новый пароль',
	'NEW_PASSWORD_ERROR'			=> 'Введенные вами пароли не совпадают.',
	'NOTIFY_METHOD'					=> 'Способ уведомления',
	'NOTIFY_METHOD_BOTH'			=> 'Оба способа',
	'NOTIFY_METHOD_EMAIL'			=> 'Только email',
	'NOTIFY_METHOD_EXPLAIN'			=> 'Средство отправки сообщений, посылаемых этими форумами.',
	'NOTIFY_METHOD_IM'				=> 'Только Jabber',
	'NOTIFY_ON_PM'					=> 'Уведомлять меня о новых личных сообщениях',
	'NOT_ADDED_FRIENDS_ANONYMOUS'	=> 'Вы не можете добавить Гостя в список друзей.',
	'NOT_ADDED_FRIENDS_FOES'		=> 'Вы не можете добавлять пользователей из списка недругов в список друзей',
	'NOT_ADDED_FRIENDS_SELF'		=> 'Вы не можете добавить самого себя в список друзей',
	'NOT_ADDED_FOES_MOD_ADMIN'		=> 'Вы не можете добавлять администраторов и модераторов в список недругов.',
	'NOT_ADDED_FOES_ANONYMOUS'		=> 'Вы не можете добавить Гостя в список недругов.',
	'NOT_ADDED_FOES_FRIENDS'		=> 'Вы не можете добавлять пользователей из списка друзей в список недругов.',
	'NOT_ADDED_FOES_SELF'			=> 'Вы не можете добавить самого себя в список недругов.',
	'NOT_AGREE'						=> 'Я не согласен с этими условиями',
	'NOT_ENOUGH_SPACE_FOLDER'		=> 'Папка-получатель «%s» заполнена. Запрошенное действие не было выполнено.',
	'NOT_MOVED_MESSAGE'				=> 'Папка с вашими личными сообщениями заполнена. Отложенных сообщений: 1.',
	'NOT_MOVED_MESSAGES'			=> 'Папка с вашими личными сообщениями заполнена. Отложенных сообщений: %d.',
	'NO_ACTION_MODE'				=> 'Не выбрано действие для сообщения.',
	'NO_AUTHOR'						=> 'Не указан автор сообщения',
	'NO_AVATAR_CATEGORY'			=> 'Нет',

	'NO_AUTH_DELETE_MESSAGE'		=> 'You are not authorised to delete private messages.',
	'NO_AUTH_EDIT_MESSAGE'			=> 'You are not authorised to edit private messages.',
	'NO_AUTH_FORWARD_MESSAGE'		=> 'You are not authorised to forward private messages.',
	'NO_AUTH_GROUP_MESSAGE'			=> 'You are not authorised to send private messages to groups.',
	'NO_AUTH_READ_MESSAGE'			=> 'You are not authorised to read private messages.',
	'NO_AUTH_READ_REMOVED_MESSAGE'	=> 'You are not able to read this message because it was removed by the author.',
	'NO_AUTH_SEND_MESSAGE'			=> 'You are not authorised sending private messages.',
	'NO_AUTH_SIGNATURE'				=> 'You are not authorised to define a signature',

	'NO_BCC_RECIPIENT'			=> 'None',
	'NO_BOOKMARKS'				=> 'You have no bookmarks',
	'NO_BOOKMARKS_SELECTED'		=> 'You have selected no bookmarks',
	'NO_EMAIL_USER'				=> 'The email/username information submitted could not be found',
	'NO_FOES'					=> 'No foes currently defined',
	'NO_FRIENDS'				=> 'No friends currently defined',
	'NO_FRIENDS_OFFLINE'		=> 'No friends offline',
	'NO_FRIENDS_ONLINE'			=> 'No friends online',
	'NO_GROUP_SELECTED'			=> 'No group specified',
	'NO_IMPORTANT_NEWS'			=> 'No important announcements present',
	'NO_MESSAGE'				=> 'Private Message could not be found',
	'NO_NEW_FOLDER_NAME'		=> 'You have to specify a new folder name',
	'NO_NEWER_PM'				=> 'No newer messages',
	'NO_OLDER_PM'				=> 'No older messages',
	'NO_RECIPIENT'				=> 'No recipient defined',
	'NO_RULES_DEFINED'			=> 'No rules defined',
	'NO_SAVED_DRAFTS'			=> 'No drafts saved',
	'NO_TO_RECIPIENT'			=> 'None',
	'NO_WATCHED_FORUMS'			=> 'You are not watching any forums.',
	'NO_WATCHED_TOPICS'			=> 'You are not watching any topics.',

	'PASS_TYPE_ALPHA_EXPLAIN'	=> 'Password must be between %1$d and %2$d chars long and must contain alphanumerics',
	'PASS_TYPE_ANY_EXPLAIN'		=> 'Must be between %1$d and %2$d characters.',
	'PASS_TYPE_CASE_EXPLAIN'	=> 'Password must be between %1$d and %2$d chars long and must be mixed case',
	'PASS_TYPE_SYMBOL_EXPLAIN'	=> 'Password must be between %1$d and %2$d chars long and must contain symbols',
	'PASSWORD_ACTIVATED'		=> 'Your new password has been activated',
	'PASSWORD_UPDATED'			=> 'Your password has been sent successfully to your original email address.',
	'PERMISSIONS_RESTORED'		=> 'Successfully restored original permissions.',
	'PERMISSIONS_TRANSFERED'	=> 'Successfully transfered permissions from <strong>%s</strong>, you are now able to browse the forum with the users permissions.<br />Please note that admin permissions were not transfered. You are able to revert to your permission set at any time.',
	'PM_DISABLED'				=> 'Private messaging has been disabled on this board',
	'PM_FROM'					=> 'From',
	'PM_FROM_REMOVED_AUTHOR'	=> 'This message was sent by a user no longer registered.',
	'PM_ICON'					=> 'PM icon',
	'PM_INBOX'					=> 'Inbox',
	'PM_OUTBOX'					=> 'Outbox',
	'PM_SENTBOX'				=> 'Sent Messages',
	'PM_SUBJECT'				=> 'Message subject',
	'PM_TO'						=> 'Send to',
	'POPUP_ON_PM'				=> 'Pop up window on new private message',
	'POST_EDIT_PM'				=> 'Edit message',
	'POST_FORWARD_PM'			=> 'Forward message',
	'POST_NEW_PM'				=> 'Post message',
	'POST_PM_LOCKED'			=> 'Private Messaging is locked',
	'POST_PM_POST'				=> 'Quote post',
	'POST_QUOTE_PM'				=> 'Quote message',
	'POST_REPLY_PM'				=> 'Reply to message',
	'PRINT_PM'					=> 'Print View',
	'PREFERENCES_UPDATED'		=> 'Your preferences have been updated.',
	'PROFILE_INFO_NOTICE'		=> 'Please note that this information will be viewable to other members. Be careful when including any personal details. Any fields marked with a * must be completed.',
	'PROFILE_UPDATED'			=> 'Your profile has been updated.',

	'RECIPIENT'							=> 'Получатель',
	'RECIPIENTS'						=> 'Получатели',
	'REGISTRATION'						=> 'Регистрация',
	'RELATIVE_DAYS'						=> 'Вчера/Сегодня/Завтра',
	'RELEASE_MESSAGES'					=> '%sДобавить все отложенные сообщения%s… которые будут рассортированы в соответствующей папке при наличии свободного места',
	'REMOVE_ADDRESS'					=> 'Удалить адрес',
	'REMOVE_SELECTED_BOOKMARKS'			=> 'Удалить выбранные закладки',
	'REMOVE_SELECTED_BOOKMARKS_CONFIRM'	=> 'Вы уверены, что хотите удалить все выбранные закладки?',
	'REMOVE_BOOKMARK_MARKED'			=> 'Удалить отмеченные закладки',
	'REMOVE_FOLDER'						=> 'Удалить папку',
	'REMOVE_FOLDER_CONFIRM'				=> 'Вы уверены, что хотите удалить эту папку?',
	'RENAME'							=> 'Переименовать',
	'RENAME_FOLDER'						=> 'Переименовать папку',
	'REPLIED_MESSAGE'					=> 'Ответить на сообщение',
	'RESIGN_SELECTED'					=> 'Покинуть выбранную',
	'RETURN_FOLDER'						=> '%1$sВернуться в предыдущую папку%2$s',
	'RETURN_UCP'						=> '%sВернуться в Профиль%s',
	'RULE_ADDED'						=> 'Правило успешно добавлено',
	'RULE_ALREADY_DEFINED'				=> 'Такое правило уже было добавлено ранее',
	'RULE_DELETED'						=> 'Правило успешно удалено',
	'RULE_NOT_DEFINED'					=> 'Правило указано некорректно',
	'RULE_REMOVED_MESSAGE'				=> 'Одно личное сообщение было удалено фильтрами ЛС.',
	'RULE_REMOVED_MESSAGES'				=> 'Фильтрами ЛС было удалено личных сообщений : %d',

	'SAME_PASSWORD_ERROR'		=> 'Введенный вами новый пароль совпадает с вашим текущим.',
	'SEARCH_YOUR_POSTS'			=> 'Показать ваши сообщения',
	'SEND_PASSWORD'				=> 'Отослать пароль',
	'SENT_AT'					=> 'Отправлено',
	'SHOW_EMAIL'				=> 'Показывать мой email-адрес',
	'SIGNATURE_EXPLAIN'			=> 'Это текст длиной не более %d символов, который может автоматически добавляться к вашим сообщениями.',
	'SIGNATURE_PREVIEW'			=> 'Ваша подпись в сообщениях будет выглядеть так',
	'SIGNATURE_TOO_LONG'		=> 'Вы ввели слишком длинную подпись.',
	'SORT'						=> 'Сортировать',
	'SORT_COMMENT'				=> 'Комментарии',
	'SORT_DOWNLOADS'			=> 'Скачивания',
	'SORT_EXTENSION'			=> 'Расширение',
	'SORT_FILENAME'				=> 'Имя файла',
	'SORT_POST_TIME'			=> 'Время',
	'SORT_SIZE'					=> 'Размер',

	'TIMEZONE'					=> 'Часовой пояс',
	'TO'						=> 'Кому',
	'TOO_MANY_RECIPIENTS'		=> 'Слишком много получателей',
	'TOO_MANY_REGISTERS'		=> 'Вы исчерпали предельное количество попыток регистрации для данной сессии. Повторите попытку позднее.',

	'UCP'						=> 'Профиль',
	'UCP_ACTIVATE'				=> 'Активировать учетную запись',
	'UCP_ADMIN_ACTIVATE'		=> 'Обратите внимание на то, что вы должны ввести правильный адрес электронной почты перед активацией. Администратор проверит вашу учетную запись и отправит на указанный адрес письмо, содержащее ссылку для активации учетной записи.',
	'UCP_AIM'					=> 'AIM',
	'UCP_ATTACHMENTS'			=> 'Вложения',
	'UCP_COPPA_BEFORE'			=> 'До %s',
	'UCP_COPPA_ON_AFTER'		=> '%s и после',
	'UCP_EMAIL_ACTIVATE'		=> 'Обратите внимание на то, что вы должны ввести правильный адрес электронной почты перед активацией. На указанный вами адрес придет письмо, содержащее ссылку для активации учетной записи.',
	'UCP_ICQ'					=> 'ICQ',
	'UCP_JABBER'				=> 'Jabber',

	'UCP_MAIN'					=> 'Обзор',
	'UCP_MAIN_ATTACHMENTS'		=> 'Вложения',
	'UCP_MAIN_BOOKMARKS'		=> 'Закладки',
	'UCP_MAIN_DRAFTS'			=> 'Черновики',
	'UCP_MAIN_FRONT'			=> 'Начало',
	'UCP_MAIN_SUBSCRIBED'		=> 'Подписки',

	'UCP_MSNM'					=> 'MSN Мessenger',
	'UCP_NO_ATTACHMENTS'		=> 'Вы не создали ни одного вложения',

	'UCP_PREFS'					=> 'Личные настройки',
	'UCP_PREFS_PERSONAL'		=> 'Общие настройки',
	'UCP_PREFS_POST'			=> 'Отправка сообщений',
	'UCP_PREFS_VIEW'			=> 'Настройки отображения',
	
	'UCP_PM'					=> 'Личные сообщения',
	'UCP_PM_COMPOSE'			=> 'Новое сообщение',
	'UCP_PM_DRAFTS'				=> 'Управление черновиками',
	'UCP_PM_OPTIONS'			=> 'Настройки',
	'UCP_PM_POPUP'				=> 'Личные сообщения',
	'UCP_PM_POPUP_TITLE'		=> 'Всплывающее окно о новом личном сообщении',
	'UCP_PM_UNREAD'				=> 'Непрочитанные сообщения',
	'UCP_PM_VIEW'				=> 'Посмотреть сообщения',

	'UCP_PROFILE'				=> 'Профиль',
	'UCP_PROFILE_AVATAR'		=> 'Аватара',
	'UCP_PROFILE_PROFILE_INFO'	=> 'Личные данные',
	'UCP_PROFILE_REG_DETAILS'	=> 'Регистрационные данные',
	'UCP_PROFILE_SIGNATURE'		=> 'Подпись',

	'UCP_USERGROUPS'			=> 'Группы',
	'UCP_USERGROUPS_MEMBER'		=> 'Управление членством',
	'UCP_USERGROUPS_MANAGE'		=> 'Управление группами',

	'UCP_REGISTER_DISABLE'			=> 'Создание новой учётной записи на текущий момент невозможно.',
	'UCP_REMIND'					=> 'Отослать пароль',
	'UCP_RESEND'					=> 'Послать письмо для активации учётной записи',
	'UCP_WELCOME'					=> 'Добро пожаловать в ваш Профиль. Отсюда вы можете просматривать и изменять настройки, информацию о себе и подписку на форумы и темы. Также, если вам это разрешено, вы можете посылать личные сообщения (ЛС) другим пользователям. Перед тем как продолжить, убедитесь, что вы прочли все объявления администрации.',
	'UCP_YIM'						=> 'Yahoo Messenger',
	'UCP_ZEBRA'						=> 'Друзья и недруги',
	'UCP_ZEBRA_FOES'				=> 'Список недругов',
	'UCP_ZEBRA_FRIENDS'				=> 'Список друзей',
	'UNKNOWN_FOLDER'				=> 'Неизвестная папка',
	'UNWATCH_MARKED'				=> 'Отписаться от выделенного',
	'UPLOAD_AVATAR_FILE'			=> 'Загрузить с вашего компьютера',
	'UPLOAD_AVATAR_URL'				=> 'Загрузить с URL',
	'UPLOAD_AVATAR_URL_EXPLAIN'		=> 'Введите URL по которому находится файл с изображением, он будет скопирован на этот сайт.',
	'USERNAME_ALPHA_ONLY_EXPLAIN'	=> 'Имя пользователя не должно быть меньше %1$d или больше %2$d символов и должно содержать только буквы.',
	'USERNAME_ALPHA_SPACERS_EXPLAIN'=> 'Имя пользователя не должно быть меньше %1$d или больше %2$d символов и должно содержать только буквы, пробел или символы -+_[]',
	'USERNAME_CHARS_ANY_EXPLAIN'	=> 'Имя пользователя должно быть не менее %1$d и не более %2$d символов.',
	'USERNAME_TAKEN_USERNAME'		=> 'Извините, пользователь с таким именем уже существует',
	'USERNAME_DISALLOWED_USERNAME'	=> 'Введенное вами имя пользователя было запрещено администратором.',
	'USER_NOT_FOUND_OR_INACTIVE'	=> 'Введенное вами имя пользователя не найдено, либо данный пользователь еще не прошел процедуру активации.',

	'VIEW_AVATARS'				=> 'Показывать аватары',
	'VIEW_EDIT'					=> 'Просмотреть/изменить',
	'VIEW_FLASH'				=> 'Показывать Flash-анимацию',
	'VIEW_IMAGES'				=> 'Показывать рисунки в сообщениях',
	'VIEW_NEXT_HISTORY'			=> 'Следующее ЛС в архиве',
	'VIEW_NEXT_PM'				=> 'Следующее ЛС',
	'VIEW_PM'					=> 'Посмотреть сообщение',
	'VIEW_PM_INFO'				=> 'Информация',
	'VIEW_PM_MESSAGE'			=> 'Сообщений: 1',
	'VIEW_PM_MESSAGES'			=> 'Сообщений: %d',
	'VIEW_PREVIOUS_HISTORY'		=> 'Предыдущее ЛС в архиве',
	'VIEW_PREVIOUS_PM'			=> 'Предыдущее ЛС',
	'VIEW_SIGS'					=> 'Показывать подписи',
	'VIEW_SMILIES'				=> 'Заменять смайлики изображениями',
	'VIEW_TOPICS_DAYS'			=> 'Показывать темы за',
	'VIEW_TOPICS_DIR'			=> 'Порядок сортировки тем',
	'VIEW_TOPICS_KEY'			=> 'Поле сортировки тем',
	'VIEW_POSTS_DAYS'			=> 'Показывать сообщения за',
	'VIEW_POSTS_DIR'			=> 'Порядок сортировки сообщений',
	'VIEW_POSTS_KEY'			=> 'Поле сортировки сообщений',

	'WATCHED_EXPLAIN'			=> 'Ниже расположен список форумов и тем, на которые вы подписаны. Вы будете оповещены о появлении в них новых сообщений. Чтобы отписаться от них, выделите форум или тему и нажмите кнопку <em>Отписаться от выделенного</em>',
	'WATCHED_FORUMS'			=> 'Просмотренные форумы',
	'WATCHED_TOPICS'			=> 'Просмотренные темы',
	'WRONG_ACTIVATION'			=> 'Ключ активации, указанный вами, отсутствует в базе данных',

	'YOUR_DETAILS'				=> 'Ваша активность на форумах',
	'YOUR_FOES'					=> 'Ваши недруги',
	'YOUR_FOES_EXPLAIN'			=> 'Чтобы убрать пользователей из списка, выделите их и нажмите "Отправить"',
	'YOUR_FRIENDS'				=> 'Ваши друзья',
	'YOUR_FRIENDS_EXPLAIN'		=> 'Чтобы убрать пользователей из списка, выделите их и нажмите "Отправить"',
	'YOUR_WARNINGS'				=> 'Полученные предупреждения',

	'PM_ACTION' => array(
		'PLACE_INTO_FOLDER'	=> 'Поместить в папку',
		'MARK_AS_READ'		=> 'Пометить как прочтенное',
		'MARK_AS_IMPORTANT'	=> 'Пометить как важное',
		'DELETE_MESSAGE'	=> 'Удалить сообщение'
	),
	'PM_CHECK' => array(
		'SUBJECT'	=> 'Тема',
		'SENDER'	=> 'Отправитель',
		'MESSAGE'	=> 'Сообщение',
		'STATUS'	=> 'Статус сообщения',
		'TO'		=> 'Получатель'
	),
	'PM_RULE' => array(
		'IS_LIKE'		=> 'содержит',
		'IS_NOT_LIKE'	=> 'не содержит',
		'IS'			=> 'соответствует',
		'IS_NOT'		=> 'не соответствует',
		'BEGINS_WITH'	=> 'начинается с',
		'ENDS_WITH'		=> 'оканчивается на',
		'IS_FRIEND'		=> 'друг',
		'IS_FOE'		=> 'недруг',
		'IS_USER'		=> 'пользователь',
		'IS_GROUP'		=> 'входит в группу',
		'ANSWERED'		=> 'отвеченное',
		'FORWARDED'		=> 'отправленное',
		'TO_GROUP'		=> 'в мою группу по умолчанию',
		'TO_ME'			=> 'мне'
	),


	'GROUPS_EXPLAIN'	=> 'Группы дают администратору форума больше возможностей по управлению пользователями. По умолчанию вы помещены в определеную группу. В зависимости от того, разрешено ли это администратором, вы можете изменить заданную по умолчанию группу. Вы можете быть помещены или вам может быть разрешено вступить в другую группу. Некоторые группы могут давать дополнительные возможности для доступа к разделам форума.',
	'GROUP_LEADER'		=> 'Руководитель в группах',
	'GROUP_MEMBER'		=> 'Членство в группах',
	'GROUP_PENDING'		=> 'Кандидат в члены группы',
	'GROUP_NONMEMBER'	=> 'Не состоит в группах',
	'GROUP_DETAILS'		=> 'Информация о группах',

	'NO_LEADER'		=> 'No group leaderships',
	'NO_MEMBER'		=> 'No group memberships',
	'NO_PENDING'	=> 'No pending memberships',
	'NO_NONMEMBER'	=> 'No non-member groups',
));

?>