<?php
/** 
*
* help_bbcode [English]
*
* @package language
* @version $Id: help_bbcode.php,v 1.8 2006/09/24 00:28:32 shs Exp $
* @copyright (c) 2005 phpBB Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
*/

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

$help = array(
	array(
		0 => '--',
		1 => 'Вступление'
	),
	array(
		0 => 'Что такое BBCode?',
		1 => 'BBCode — это специальный вариант HTML. Сможете вы или нет использовать BBCode в ваших сообщениях, определяется администратором форумов. Кроме того, вы сможете отключить использование BBCode в конкретном сообщении при его размещении. Сам BBCode похож по стилю на HTML, теги заключены в квадратные скобки [ и ], а не в < и >; он даёт больше возможностей управления тем, как выводятся данные. При использовании некоторых шаблонов вы сможете добавлять BBCode в ваши сообщения, пользуясь простым интерфейсом, расположенным над полем для ввода текста. Но даже в этом случае данное руководство может оказаться полезным.<br>'
	),
	array(
		0 => '--',
		1 => 'Форматирование текста'
	),
	array(
		0 => 'Как сделать текст жирным, наклонным или подчёркнутым',
		1 => 'BBCode включает теги для быстрого изменения стиля шрифта, сделать это можно следующими способами:<br><span style="font-size:12px;"><br> <ul><li>Чтобы сделать текст жирным, заключите его в <strong>[b][/b]</strong>, например:<br /><br /><strong>[b]</strong>Привет<strong>[/b]</strong><br /><br />станет <strong>Привет</strong></li><br /><br /><li>Для подчёркивания используйте <strong>[u][/u]</strong>, например:<br /><br /><strong>[u]</strong>Доброе утро<strong>[/u]</strong><br /><br />станет <u>Доброе утро</u></li><br /><br /><li>Курсив делается тегами <strong>[i][/i]</strong>, например:<br /><br />Это <strong>[i]</strong>круто!<strong>[/i]</strong><br /><br />выдаст Это <i>круто!</i></li></ul></span>'
	),
	array(
		0 => 'Как изменить цвет или размер текста',
		1 => 'Для изменения цвета или размера шрифта могут быть использованы следующие теги (окончательный вид будет зависеть от системы и браузера пользователя):<br /><br /><span style="font-size:12px;">  <ul><li>Цвет текста можно изменить, окружив его <strong>[color=][/color]</strong>. Вы можете указать либо известное имя цвета (red, blue, yellow и т.п.), или шестнадцатиричное представление, например #FFFFFF, #000000. Таким образом, для создания красного текста вы можете использовать:<br /><br /><strong>[color=red]</strong>Привет!<strong>[/color]</strong><br /><br />или<br /><br /><strong>[color=#FF0000]</strong>Привет!<strong>[/color]</strong><br /><br />оба способа дадут в результате <span style="color:red">Привет!</span></li><br /><li>Изменение размера достигается аналогичным образом при использовании <strong>[size=][/size]</strong>. Этот тег зависит от используемых шаблонов, рекомендуемый формат — число, показывающее размер текста в пикселях, начиная от 1 (настолько маленький, что вы его не увидите) до 29 (очень большой). Например:<br /><br /><strong>[size=9]</strong>МАЛЕНЬКИЙ<strong>[/size]</strong><br /><br />скорее всего будет <span style="font-size:9px;">МАЛЕНЬКИЙ</span><br /><br />в то время как:<br /><br /><strong>[size=24]</strong>ЗДОРОВЫЙ!<strong>[/size]</strong><br /><br />будет <span style="font-size:24px;">ЗДОРОВЫЙ!</span></li></ul></span>'
	),
	array(
		0 => 'Могу ли я комбинировать теги?',
		1 => 'Да, конечно можете. Например для привлечения чьего-то внимания вы сможете написать:<br /><br /><strong>[size=18][color=red][b]</strong>ПОСМОТРИТЕ НА МЕНЯ!<strong>[/b][/color][/size]</strong><br /><br />что выдаст <span style="color:red;font-size:18px;"><strong>ПОСМОТРИТЕ НА МЕНЯ!</strong></span><br /><br />Мы не рекомендуем выводить таким образом длинные тексты! Учтите, что вы, автор сообщения, должны позаботиться о том, чтобы теги были правильно вложены. Вот этот BBCode, например, неправилен:<br /><br /><strong>[b][u]</strong>Это неверно<strong>[/b][/u]</strong>'
	),
	array(
		0 => '--',
		1 => 'Цитирование и вывод форматированных текстов'
	),
	array(
		0 => 'Цитирование при ответах',
		1 => 'Есть два способа процитировать текст, со ссылкой и без.<br /><br /><span style="font-size:12px;"><ul><li>Когда вы используете кнопку «Ответить с цитатой» для ответа на сообщение, то его текст добавляется в поле ввода окружённым блоком <strong>[quote=""][/quote]</strong> Этот метод позволит вам цитировать со ссылкой на автора, либо на что-то ещё, что вы туда впишете. Например для цитирования отрывка текста, написанного Mr. Blobby, вы напишете:<br /><br /><strong>[quote="Mr. Blobby"]</strong>Текст Mr. Blobby будет здесь<strong>[/quote]</strong><br /><br />В результате перед текстом будут вставлены слова "Mr. Blobby написал:". Помните, вы <strong>должны</strong> поставить кавычки "" вокруг имени, они не могут быть опущены.</li><li>Второй метод просто позволяет вам что-то процитировать. Для этого вам надо заключитть текст в теги <strong>[quote][/quote]</strong>. При просмотре сообщения перед текстом будет стоять только слово "Цитата:"</li></ul></span>'
	),
	array(
		0 => 'Вывод кода или форматированного текста',
		1 => 'Если вам надо вывести кусок программы или что-то, что должно быть выведено шрифтом фиксированной ширины (Courier) вы должны заключить текст в теги <strong>[code][/code]</strong>, например<br /><br /><strong>[code]</strong>echo "This is some code";<strong>[/code]</strong><br /><br />Всё форматирование, используемое внутри тегов <strong>[code][/code]</strong> будет сохранено.'
	),
	array(
		0 => '--',
		1 => 'Создание списков'
	),
	array(
		0 => 'Создание маркированного списка',
		1 => 'BBCode поддерживает два вида списков: маркированные и нумерованные. Они практически идентичны своим эквивалентам из HTML. В маркированном списке все элементы выводятся последовательно, каждый отмечается символом-маркером. <span style="font-size:12px;">Для создания маркированного списка используйте <strong>[list][/list]</strong> и определите каждый элемент при помощи <strong>[*]</strong>. Например, чтобы вывести свои любимые цвета, вы можете использовать:<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Красный<br /><strong>[*]</strong>Синий<br /><strong>[*]</strong>Жёлтый<br /><strong>[/list]</strong><br /><br />Это выдаст такой список:<ul><li>Красный</li><li>Синий</li><li>Жёлтый</li></ul></span>'
	),
	array(
		0 => 'Создание нумерованного списка',
		1 => '<span style="font-size:12px;">Второй тип списка, нумерованный, позволяет выбрать, что именно будет выводиться перед каждым элементом. Для создания нумерованного списка используйте <strong>[list=1][/list]</strong> или <strong>[list=a][/list]</strong> для создания алфавитного списка. Как и в случае маркированного списка, элементы определяются с помощью <strong>[*]</strong>. Например:<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Пойти в магазин<br /><strong>[*]</strong>Купить новый компьютер<br /><strong>[*]</strong>Обругать компьютер, когда случится ошибка<br /><strong>[/list]</strong><br /><br />выдаст следующее:<ol type="1"><li>Пойти в магазин</li><li>Купить новый компьютер</li><li>Обругать компьютер, когда случится ошибка</li></ol>Для алфавитного списка используйте:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>Первый возможный ответ<br /><strong>[*]</strong>Второй возможный ответ<br /><strong>[*]</strong>Третий возможный ответ<br /><strong>[/list]</strong><br /><br />что выдаст<ol type="a"><li>Первый возможный ответ</li><li>Второй возможный ответ</li><li>Третий возможный ответ</li></ol></span>'
	),
	array(
		0 => '--',
		1 => 'Создание ссылок'
	),
	array(
		0 => 'Ссылки на другой сайт',
		1 => '<span style="font-size:12px;">В BBCode поддерживается несколько способов создания URL\'ов.<ul><li>Первый из них использует тег <b>[url=][/url]</b>, после знака = должен идти нужный URL. Например, для ссылки на phpBB.com вы могли бы использовать:<br /><br /><b>[url=http://www.phpbb.com/]</b>Посетите phpBB!<b>[/url]</b><br /><br />Это создаст следующую ссылку: <a href=\"http://www.phpbb.com/\" target=\"_blank\">Посетите phpBB!</a> Ссылка будет открываться в новом окне, так что пользователь сможет продолжать читать форумы.</li><li>Если вы хотите, чтобы в качестве текста ссылки показывался сам URL, вы можете просто сделать следующее:<br /><br /><b>[url]</b>http://www.phpbb.com/<b>[/url]</b><br /><br />Это выдаст следующую ссылку: <a href=\"http://www.phpbb.com/\" target=\"_blank\">http://www.phpbb.com/</a></li><li>Кроме того phpBB поддерживает возможность, называемую <i>Автоматические ссылки</i>, это переведёт любой синтаксически правильный URL в ссылку без необходимости указания тегов и даже префикса http://. Например, ввод www.phpbb.com в ваше сообщение приведёт к автоматической выдаче <a href=\"http://www.phpbb.com/\" target=\"_blank\">www.phpbb.com</a> при просмотре сообщения.</li><li>То же самое относится и к адресам e-mail, вы можете либо указать адрес в явном виде:<br /><br /><b>[email]</b>no.one@domain.adr<b>[/email]</b><br /><br />что выдаст <a href=\"emailto:no.one@domain.adr\">no.one@domain.adr</a> или просто ввести no.one@domain.adr в ваше сообщение, и он будет автоматически преобразован при просмотре.</li></ul>Как и со всеми прочими тегами BBCode, вы можете заключать в URL\'ы любые другие теги, например <b>[img][/img]</b> (см. следующий пункт), <b>[b][/b]</b> и т.д. Как и с тегами форматирования, правильная вложенность тегов зависит от вас, например:<br /><br /><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/url][/img]</b><br /><br /> <u>неверно</u>, что может привести к последующему удалению вашего сообщения, так что будьте аккуратнее.</span>'
	),
	array(
		0 => '--',
		1 => 'Показ картинок в сообщениях'
	),
	array(
		0 => 'Добавление картинки в сообщение',
		1 => 'BBCode включает тег для добавления картинки в ваше сообщение. При этом следует помнить две очень важные вещи: во-первых, многих пользователей раздражает большое количество картинок, во-вторых, ваша картинка уже должна быть размещена в интернете (т.е. она не может быть расположена только на вашем компьютере, если, конечно, вы не запустили на нём вебсервер!). На данный момент нет возможности хранить изображения локально на phpBB (ожидается, что это ограничение будет снято в следующей версии phpBB). Для вывода картинки вы должны окружить её URL тегами <b>[img][/img]</b>. Например:<br /><br /><b>[img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img]</b><br /><br />Как указано в предыдущем пункте, вы можете заключить картинку в теги <b>[url][/url]</b>, то есть<br /><br /><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img][/url]</b><br /><br />выдаст:<br /><br /><a href="http://www.phpbb.com/" target="_blank"><img src="styles/subSilver/imageset/site_logo.gif" alt="" /></a><br />'
	),
	array(
		0 => '--',
		1 => 'Прочее'
	),
	array(
		0 => 'Могу ли я добавить собственные теги?',
		1 => 'Если Вы являетесь администратором этого форума и имеетe достаточные права, то можете добавить новые теги BBCode в Администраторском разделе.'
	)
);

?>