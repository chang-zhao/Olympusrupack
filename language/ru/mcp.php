<?php
/**
*
* mcp [Russian]
*
* @package language
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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

$lang = array_merge($lang, array(
	'ACTION'				=> 'Действие',
	'ACTION_NOTE'			=> 'Действие/Заметка',
	'ADD_FEEDBACK'			=> 'Добавить заметку о пользователе',
	'ADD_FEEDBACK_EXPLAIN'	=> 'Для добавления заметки, пожалуйста, заполните следующую форму. Используйте только обычный текст; HTML, BBCode и проч. не разрешены.',
	'ADD_WARNING'			=> 'Вынести предупреждение',
	'ADD_WARNING_EXPLAIN'	=> 'Для отправки предупреждения этому пользователю, пожалуйста, заполните следующую форму. Используйте только обычный текст; HTML, BBCode и проч. не разрешены.',
	'ALL_ENTRIES'			=> 'Все записи',
	'ALL_NOTES_DELETED'		=> 'Все заметки о пользователе успешно удалены.',
	'ALL_REPORTS'			=> 'Все жалобы',
	'ALREADY_REPORTED'		=> 'Это сообщение уже было обжаловано.',
	'ALREADY_REPORTED_PM'	=> 'Это личное сообщение уже было обжаловано.',
	'ALREADY_WARNED'		=> 'Предупреждение за это сообщение уже было вынесено.',
	'APPROVE'				=> 'Одобрить',
	'APPROVE_POST'			=> 'Одобрить сообщение',
	'APPROVE_POST_CONFIRM'	=> 'Вы уверены, что хотите одобрить это сообщение?',
	'APPROVE_POSTS'			=> 'Одобрить сообщения',
	'APPROVE_POSTS_CONFIRM'	=> 'Вы уверены, что хотите одобрить выбранные сообщения?',
	'APPROVE_TOPIC'			=> 'Одобрить тему',
	'APPROVE_TOPIC_CONFIRM'	=> 'Вы уверены, что хотите одобрить эту тему?',
	'APPROVE_TOPICS'		=> 'Одобрить темы',
	'APPROVE_TOPICS_CONFIRM'=> 'Вы уверены, что хотите одобрить выбранные темы?',

	'CANNOT_MOVE_SAME_FORUM'=> 'Вы не можете переместить тему в форум, в котором она уже находится.',
	'CANNOT_WARN_ANONYMOUS'	=> 'Вы не можете предупредить незарегистрированного пользователя.',
	'CANNOT_WARN_SELF'		=> 'Вы не можете предупредить самого себя.',
	'CAN_LEAVE_BLANK'		=> 'Это поле можно оставить пустым.',
	'CHANGE_POSTER'			=> 'Сменить автора',
	'CLOSE_PM_REPORT'		=> 'Закрыть жалобу на личное сообщение',
	'CLOSE_PM_REPORT_CONFIRM'	=> 'Вы действительно хотите закрыть жалобу на выбранное личное сообщение?',
	'CLOSE_PM_REPORTS'		=> 'Закрыть жалобы на личные сообщения',
	'CLOSE_PM_REPORTS_CONFIRM'	=> 'Вы действительно хотите закрыть жалобы на выбранные личные сообщения?',
	'CLOSE_REPORT'			=> 'Закрыть жалобу',
	'CLOSE_REPORT_CONFIRM'	=> 'Вы уверены, что хотите закрыть выбранную жалобу?',
	'CLOSE_REPORTS'			=> 'Закрыть жалобы',
	'CLOSE_REPORTS_CONFIRM'	=> 'Вы уверены, что хотите закрыть выбранные жалобы?',

	'DELETE_PM_REPORT'			=> 'Удалить жалобу на личное сообщение',
	'DELETE_PM_REPORT_CONFIRM'	=> 'Вы действительно хотите удалить жалобу на выбранное личное сообщение?',
	'DELETE_PM_REPORTS'			=> 'Удалить жалобы на личные сообщения',
	'DELETE_PM_REPORTS_CONFIRM'	=> 'Вы действительно хотите удалить жалобы на выбранные личные сообщения?',
	'DELETE_POSTS'				=> 'Удалить сообщения',
	'DELETE_REPORT'				=> 'Удалить жалобу',
	'DELETE_REPORT_CONFIRM'		=> 'Вы уверены, что хотите удалить выбранную жалобу?',
	'DELETE_REPORTS'			=> 'Удалить жалобы',
	'DELETE_REPORTS_CONFIRM'	=> 'Вы уверены, что хотите удалить выбранные жалобы?',
	'DELETE_SHADOW_TOPIC'		=> 'Удалить ссылку в старом форуме',
	'DELETE_TOPICS'				=> 'Удалить выбранные темы',
	'DISAPPROVE'				=> 'Отклонить',
	'DISAPPROVE_REASON'			=> 'Причина отказа',
	'DISAPPROVE_POST'			=> 'Отклонить сообщение',
	'DISAPPROVE_POST_CONFIRM'	=> 'Вы уверены, что хотите отклонить это сообщение?',
	'DISAPPROVE_POSTS'			=> 'Отклонить сообщения',
	'DISAPPROVE_POSTS_CONFIRM'	=> 'Вы уверены, что хотите отклонить выбранные сообщения?',
	'DISPLAY_LOG'				=> 'Показать записи за',
	'DISPLAY_OPTIONS'			=> 'Настройки отображения',

	'EMPTY_REPORT'					=> 'Вы должны обосновать эту жалобу.',
	'EMPTY_TOPICS_REMOVED_WARNING'	=> 'Пожалуйста, обратите внимание, что одна или несколько тем были удалены из базы данных, поскольку не содержали или перестали содержать сообщения.',

	'FEEDBACK'				=> 'Заметки о пользователе',
	'FORK'					=> 'Создать копию',
	'FORK_TOPIC'			=> 'Создать копию темы',
	'FORK_TOPIC_CONFIRM'	=> 'Вы уверены, что хотите скопировать эту тему?',
	'FORK_TOPICS'			=> 'Создать копии выбранных тем',
	'FORK_TOPICS_CONFIRM'	=> 'Вы уверены, что хотите скопировать выбранные темы?',
	'FORUM_DESC'			=> 'Описание',
	'FORUM_NAME'			=> 'Название форума',
	'FORUM_NOT_EXIST'		=> 'Выбранный вами форум не существует.',
	'FORUM_NOT_POSTABLE'	=> 'В выбранном вами форуме нельзя оставлять сообщения.',
	'FORUM_STATUS'			=> 'Статус форума',
	'FORUM_STYLE'			=> 'Стиль форума',

	'GLOBAL_ANNOUNCEMENT'	=> 'Важная',

	'IP_INFO'				=> 'Информация об IP-адресе',
	'IPS_POSTED_FROM'		=> 'IP-адреса, с которых пользователь отправлял сообщения',

	'LATEST_LOGS'				=> 'Последние 5 действий',
	'LATEST_REPORTED'			=> 'Последние 5 жалоб',
	'LATEST_REPORTED_PMS'		=> 'Последние 5 жалоб на личные сообщения',
	'LATEST_UNAPPROVED'			=> 'Последние 5 сообщений, ожидающих одобрения',
	'LATEST_WARNING_TIME'		=> 'Последнее предупреждение вынесено',
	'LATEST_WARNINGS'			=> 'Последние 5 предупреждений',
	'LEAVE_SHADOW'				=> 'Оставить ссылку в старом форуме',
	'LIST_REPORTS'				=> array(
		1	=> 'Заметок: %d',
		2	=> 'Заметок: %d',
	),
	'LOCK'						=> 'Закрыть',
	'LOCK_POST_POST'			=> 'Заблокировать сообщение',
	'LOCK_POST_POST_CONFIRM'	=> 'Вы уверены, что хотите запретить редактирование этого сообщения?',
	'LOCK_POST_POSTS'			=> 'Заблокировать выбранные сообщения',
	'LOCK_POST_POSTS_CONFIRM'	=> 'Вы уверены, что хотите запретить редактирование выбранных сообщений?',
	'LOCK_TOPIC_CONFIRM'		=> 'Вы уверены, что хотите закрыть эту тему?',
	'LOCK_TOPICS'				=> 'Закрыть выбранные темы',
	'LOCK_TOPICS_CONFIRM'		=> 'Вы уверены, что хотите закрыть все выбранные темы?',
	'LOGS_CURRENT_TOPIC'		=> 'Просмотр логов темы:',
	'LOGIN_EXPLAIN_MCP'			=> 'Вы должны войти для модерирования этого форума.',
	'LOGVIEW_VIEWTOPIC'			=> 'Просмотреть тему',
	'LOGVIEW_VIEWLOGS'			=> 'Просмотреть лог темы',
	'LOGVIEW_VIEWFORUM'			=> 'Просмотреть форум',
	'LOOKUP_ALL'				=> 'Посмотреть хосты для всех IP-адресов',
	'LOOKUP_IP'					=> 'Посмотреть хост для IP-адреса',

	'MARKED_NOTES_DELETED'		=> 'Все отмеченные заметки о пользователе удалены.',

	'MCP_ADD'						=> 'Добавить предупреждение',

	'MCP_BAN'					=> 'Чёрные списки',
	'MCP_BAN_EMAILS'			=> 'адресов email',
	'MCP_BAN_IPS'				=> 'адресов IP/хостов',
	'MCP_BAN_USERNAMES'			=> 'имён пользователей',

	'MCP_LOGS'						=> 'Лог модератора',
	'MCP_LOGS_FRONT'				=> 'Главная страница',
	'MCP_LOGS_FORUM_VIEW'			=> 'Лог форума',
	'MCP_LOGS_TOPIC_VIEW'			=> 'Лог темы',

	'MCP_MAIN'						=> 'Главная',
	'MCP_MAIN_FORUM_VIEW'			=> 'Просмотреть форум',
	'MCP_MAIN_FRONT'				=> 'Главная страница',
	'MCP_MAIN_POST_DETAILS'			=> 'Информация о сообщении',
	'MCP_MAIN_TOPIC_VIEW'			=> 'Просмотреть тему',
	'MCP_MAKE_ANNOUNCEMENT'			=> 'Сделать тему объявлением',
	'MCP_MAKE_ANNOUNCEMENT_CONFIRM'	=> 'Вы уверены, что хотите сделать эту тему объявлением?',
	'MCP_MAKE_ANNOUNCEMENTS'		=> 'Сделать темы объявлениями',
	'MCP_MAKE_ANNOUNCEMENTS_CONFIRM'=> 'Вы уверены, что хотите сделать выбранные темы объявлениями?',
	'MCP_MAKE_GLOBAL'				=> 'Сделать тему важной',
	'MCP_MAKE_GLOBAL_CONFIRM'		=> 'Вы уверены, что хотите сделать эту тему важной?',
	'MCP_MAKE_GLOBALS'				=> 'Сделать темы важными',
	'MCP_MAKE_GLOBALS_CONFIRM'		=> 'Вы уверены, что хотите сделать выбранные темы важными?',
	'MCP_MAKE_STICKY'				=> 'Сделать тему прилепленной',
	'MCP_MAKE_STICKY_CONFIRM'		=> 'Вы уверены, что хотите сделать эту тему прилепленной?',
	'MCP_MAKE_STICKIES'				=> 'Сделать темы прилепленными',
	'MCP_MAKE_STICKIES_CONFIRM'		=> 'Вы уверены, что хотите сделать выбранные темы прилепленными?',
	'MCP_MAKE_NORMAL'				=> 'Сделать тему обычной',
	'MCP_MAKE_NORMAL_CONFIRM'		=> 'Вы уверены, что хотите сделать эту тему обычной?',
	'MCP_MAKE_NORMALS'				=> 'Сделать темы обычными',
	'MCP_MAKE_NORMALS_CONFIRM'		=> 'Вы уверены, что хотите сделать выбранные темы обычными?',

	'MCP_NOTES'						=> 'Заметки о пользователе',
	'MCP_NOTES_FRONT'				=> 'Главная страница',
	'MCP_NOTES_USER'				=> 'Информация',

	'MCP_POST_REPORTS'				=> 'Жалобы на это сообщение',

	'MCP_PM_REPORTS'				=> 'Жалобы на личные сообщения',
	'MCP_PM_REPORT_DETAILS'			=> 'Подробности о жалобе',
	'MCP_PM_REPORTS_CLOSED'			=> 'Закрытые жалобы на ЛС',
	'MCP_PM_REPORTS_CLOSED_EXPLAIN'	=> 'Это список всех просмотренных и закрытых жалоб на личные сообщения.',
	'MCP_PM_REPORTS_OPEN'			=> 'Открытые жалобы на ЛС',
	'MCP_PM_REPORTS_OPEN_EXPLAIN'	=> 'Это список всех жалоб на личные сообщения, которые ещё не были рассмотрены.',

	'MCP_REPORTS'					=> 'Жалобы на сообщения',
	'MCP_REPORT_DETAILS'			=> 'Информация о жалобе',
	'MCP_REPORTS_CLOSED'			=> 'Закрытые жалобы',
	'MCP_REPORTS_CLOSED_EXPLAIN'	=> 'Это список всех жалоб на сообщения, которые уже были рассмотрены.',
	'MCP_REPORTS_OPEN'				=> 'Открытые жалобы',
	'MCP_REPORTS_OPEN_EXPLAIN'		=> 'Это список всех жалоб на сообщения, которые ещё не были рассмотрены.',

	'MCP_QUEUE'								=> 'Очередь на модерацию',
	'MCP_QUEUE_APPROVE_DETAILS'				=> 'Информация об одобрении',
	'MCP_QUEUE_UNAPPROVED_POSTS'			=> 'Сообщения',
	'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'	=> 'Это список всех сообщений, требующих одобрения перед тем, как они станут видимы пользователям.',
	'MCP_QUEUE_UNAPPROVED_TOPICS'			=> 'Темы',
	'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'	=> 'Это список всех тем, требующих одобрения перед тем, как они станут видимы пользователям.',
	'MCP_QUEUE_DELETED_POSTS'				=> 'Удаленные сообщения',
	'MCP_QUEUE_DELETED_POSTS_EXPLAIN'		=> 'Это список всех мягко удаленных сообщений. Вы можете восстановить или навсегда удалить отсюда сообщения.',
	'MCP_QUEUE_DELETED_TOPICS'				=> 'Удаленные темы',
	'MCP_QUEUE_DELETED_TOPICS_EXPLAIN'		=> 'Это список всех мягко удаленных тем. Вы можете восстановить или навсегда удалить отсюда темы.',

	'MCP_VIEW_USER'			=> 'Просмотр предупреждений конкретного пользователя',

	'MCP_WARN'				=> 'Предупреждения',
	'MCP_WARN_FRONT'		=> 'Главная страница',
	'MCP_WARN_LIST'			=> 'Список предупреждений',
	'MCP_WARN_POST'			=> 'Предупреждение за конкретное сообщение',
	'MCP_WARN_USER'			=> 'Вынести предупреждение',

	'MERGE_POSTS_CONFIRM'	=> 'Вы действительно хотите перенести выбранные сообщения в другую тему?',
	'MERGE_TOPIC_EXPLAIN'	=> 'Используя нижеприведённую форму, вы можете перенести выбранные сообщения в уже существующую тему. Сообщения будут показаны в теме согласно времени их добавления.<br />Пожалуйста, введите номер соответствующей темы или нажмите «Выбрать тему» для поиска.',
	'MERGE_TOPIC_ID'		=> 'Номер конечной темы',
	'MERGE_TOPICS'			=> 'Объединение тем',
	'MERGE_TOPICS_CONFIRM'	=> 'Вы уверены, что хотите объединить выбранные темы?',
	'MODERATE_FORUM'		=> 'Модерировать форум',
	'MODERATE_TOPIC'		=> 'Модерировать тему',
	'MODERATE_POST'			=> 'Модерировать сообщение',
	'MOD_OPTIONS'			=> 'Настройки модератора',
	'MORE_INFO'				=> 'Дополнительная информация',
	'MOST_WARNINGS'			=> 'Пользователи с наибольшим количеством предупреждений',
	'MOVE_TOPIC_CONFIRM'	=> 'Вы уверены, что хотите переместить тему в новый форум?',
	'MOVE_TOPICS'			=> 'Переместить выбранные темы',
	'MOVE_TOPICS_CONFIRM'	=> 'Вы уверены, что хотите переместить выбранные темы в новый форум?',

	'NOTIFY_POSTER_APPROVAL'		=> 'Уведомить автора об одобрении его сообщения?',
	'NOTIFY_POSTER_DISAPPROVAL'		=> 'Уведомить автора об отклонении его сообщения?',
	'NOTIFY_USER_WARN'				=> 'Уведомить пользователя о предупреждении?',
	'NOT_MODERATOR'					=> 'Вы не являетесь модератором этого форума.',
	'NO_DESTINATION_FORUM'			=> 'Пожалуйста, выберите форум.',
	'NO_DESTINATION_FORUM_FOUND'	=> 'Доступный форум отсутствует.',
	'NO_ENTRIES'					=> 'Записи в журнале за этот период отсутствуют.',
	'NO_FEEDBACK'					=> 'Нет заметок об этом пользователе.',
	'NO_FINAL_TOPIC_SELECTED'		=> 'Вы должны выбрать тему для объединения сообщений.',
	'NO_MATCHES_FOUND'				=> 'Совпадений не найдено.',
	'NO_POST'						=> 'Вы должны выбрать сообщение для того, чтобы вынести за него предупреждение пользователю.',
	'NO_POST_REPORT'				=> 'Жалоба на это сообщение не направлялась.',
	'NO_POST_SELECTED'				=> 'Вы должны выбрать хотя бы одно сообщение для того, чтобы произвести это действие.',
	'NO_POSTS_DELETED'				=> 'Нет удаленных сообщений.',
	'NO_POSTS_QUEUE'				=> 'Нет сообщений, ожидающих одобрения.',
	'NO_REASON_DISAPPROVAL'			=> 'Пожалуйста, укажите подходящую причину отклонения.',
	'NO_REPORT'						=> 'Жалоба не найдена',
	'NO_REPORTS'					=> 'Жалоб не найдено',
	'NO_REPORT_SELECTED'			=> 'Вы должны выбрать хотя бы одну жалобу для выполнения этого действия.',
	'NO_TOPIC_ICON'					=> 'Нет',
	'NO_TOPIC_SELECTED'				=> 'Вы должны выбрать хотя бы одну тему для того, чтобы произвести это действие.',
	'NO_TOPICS_DELETED'				=> 'Нет удаленных тем.',
	'NO_TOPICS_QUEUE'				=> 'Нет тем, нуждающихся в проверке модератора.',

	'ONLY_TOPIC'			=> 'Только тема «%s»',
	'OTHER_USERS'			=> 'Другие пользователи, отправлявшие сообщения с этого IP-адреса',

	'PM_REPORT_CLOSED_SUCCESS'	=> 'Выбранная жалоба на личное сообщение успешно закрыта.',
	'PM_REPORT_DELETED_SUCCESS'	=> 'Выбранная жалоба на личное сообщение успешно удалена.',
	'PM_REPORTED_SUCCESS'		=> 'Жалоба на это личное сообщение успешно отправлена.',
 	'PM_REPORTS_CLOSED_SUCCESS'	=> 'Выбранные жалобы на личные сообщения успешно закрыты.',
 	'PM_REPORTS_DELETED_SUCCESS'=> 'Выбранные жалобы на личные сообщения успешно удалены.',
	'PM_REPORTS_TOTAL'			=> array(
		0	=> 'Нет жалоб на личные сообщения.',
		1	=> 'Всего жалоб на личные сообщения: <strong>1</strong>.',
		2	=> 'Всего жалоб на личные сообщения: <strong>%d</strong>.',
	),
	'PM_REPORT_DETAILS'			=> 'Подробности о жалобе на личное сообщение',
	'POSTER'					=> 'Автор',
	'POSTS_APPROVED_SUCCESS'	=> 'Выбранные сообщения одобрены.',
	'POSTS_DELETED_SUCCESS'		=> 'Выбранные сообщения удалены из базы данных.',
	'POSTS_DISAPPROVED_SUCCESS'	=> 'Выбранные сообщения отклонены.',
	'POSTS_LOCKED_SUCCESS'		=> 'Выбранные сообщения заблокированы.',
	'POSTS_MERGED_SUCCESS'		=> 'Выбранные сообщения успешно перенесены в другую тему.',
	'POSTS_PER_PAGE'			=> 'Сообщений на странице',
	'POSTS_PER_PAGE_EXPLAIN'	=> '(Установите 0 для просмотра всех сообщений.)',
	'POSTS_RESTORED_SUCCESS'	=> 'Выбранные сообщения восстановлены.',
	'POSTS_UNLOCKED_SUCCESS'	=> 'Выбранные сообщения разблокированы.',
	'POST_APPROVED_SUCCESS'		=> 'Выбранное сообщение одобрено.',
	'POST_DELETED_SUCCESS'		=> 'Выбранное сообщение удалено из базы данных.',
	'POST_DISAPPROVED_SUCCESS'	=> 'Выбранное сообщение отклонено.',
	'POST_LOCKED_SUCCESS'		=> 'Сообщение успешно заблокировано.',
	'POST_NOT_EXIST'			=> 'Запрошенного сообщения не существует.',
	'POST_REPORTED_SUCCESS'		=> 'Жалоба на сообщение отправлена.',
	'POST_RESTORED_SUCCESS'		=> 'Сообщение успешно восстановлено.',
	'POST_UNLOCKED_SUCCESS'		=> 'Сообщение успешно разблокировано.',

	'READ_USERNOTES'			=> 'Заметки о пользователях',
	'READ_WARNINGS'				=> 'Предупреждения пользователя',
	'REPORTER'					=> 'Автор жалобы',
	'REPORTED'					=> 'Жалоба отправлена',
	'REPORTED_BY'				=> 'Жалоба отправлена',
	'REPORTED_ON_DATE'			=> 'от',
	'REPORTS_CLOSED_SUCCESS'	=> 'Выбранные жалобы были успешно закрыты.',
	'REPORTS_DELETED_SUCCESS'	=> 'Выбранные жалобы были успешно удалены.',
	'REPORTS_TOTAL'				=> array(
		0	=> 'Отсутствуют жалобы для просмотра.',
		1	=> 'Всего имеется жалоб для просмотра: <strong>1</strong>.',
		2	=> 'Всего имеется жалоб для просмотра: <strong>%d</strong>.',
	),
	'REPORT_CLOSED'				=> 'Эта жалоба уже была закрыта.',
	'REPORT_CLOSED_SUCCESS'		=> 'Выбранная жалоба была успешно закрыта.',
	'REPORT_DELETED_SUCCESS'	=> 'Выбранная жалоба была успешно удалена.',
	'REPORT_DETAILS'			=> 'Информация о жалобе',
	'REPORT_MESSAGE'			=> 'Отправить жалобу на это сообщение',
	'REPORT_MESSAGE_EXPLAIN'	=> 'Используйте эту форму для отправки жалобы на выбранное личное сообщение. Обычно жалобы используются только в тех случаях, когда сообщение нарушает правила конференции. <strong>Отправленная жалоба на личное сообщение сделает видимым его содержимое модераторам конференции.</strong>',
	'REPORT_NOTIFY'				=> 'Уведомить меня',
	'REPORT_NOTIFY_EXPLAIN'		=> 'Вас проинформируют о рассмотрении жалобы.',
	'REPORT_POST_EXPLAIN'		=> 'Используйте эту форму для отправки жалобы на выбранное сообщение модераторам и администраторам форума. Жалобы обычно используются только в случаях, когда сообщение нарушает правила форума.',
	'REPORT_REASON'				=> 'Причина направления жалобы',
	'REPORT_TIME'				=> 'Время направления жалобы',
	'RESTORE'					=> 'Восстановление',
	'RESTORE_POST'				=> 'Восстановить сообщение',
	'RESTORE_POST_CONFIRM'		=> 'Вы уверены, что хотите восстановить это сообщение?',
	'RESTORE_POSTS'				=> 'Восстановить сообщения',
	'RESTORE_POSTS_CONFIRM'		=> 'Вы уверены, что хотите восстановить выбранные сообщения?',
	'RESTORE_TOPIC'				=> 'Восстановить тему',
	'RESTORE_TOPIC_CONFIRM'		=> 'Вы уверены, что хотите восстановить эту тему?',
	'RESTORE_TOPICS'			=> 'Восстановить темы',
	'RESTORE_TOPICS_CONFIRM'	=> 'Вы уверены, что хотите восстановить выбранные темы?',
	
	'RESYNC'					=> 'Синхронизировать',
	'RETURN_MESSAGE'			=> '%sВернуться к сообщению%s',
	'RETURN_NEW_FORUM'			=> '%sПерейти в новый форум%s',
	'RETURN_NEW_TOPIC'			=> '%sПерейти в новую тему%s',
	'RETURN_PM'					=> '%sВернуться к личному сообщению%s',
	'RETURN_POST'				=> '%sВернуться к сообщению%s',
	'RETURN_QUEUE'				=> '%sВернуться к очереди%s',
	'RETURN_REPORTS'			=> '%sВернуться к жалобам%s',
	'RETURN_TOPIC_SIMPLE'		=> '%sВернуться к теме%s',

	'SEARCH_POSTS_BY_USER'				=> 'Поиск сообщений по',
	'SELECT_ACTION'						=> 'Выбрать желаемое действие',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'	=> 'Пожалуйста, выберите форум, в котором будет отображаться эта важная тема.',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'	=> 'Одна или более из выбранных тем являются важными. Пожалуйста, выберите форум, в котором они будут отображаться.',
	'SELECT_MERGE'						=> 'Выбрать для объединения',
	'SELECT_TOPICS_FROM'				=> 'Выбрать темы из',
	'SELECT_TOPIC'						=> 'Выбрать тему',
	'SELECT_USER'						=> 'Выбрать пользователя',
	'SORT_ACTION'						=> 'Лог действий',
	'SORT_DATE'							=> 'Дата',
	'SORT_IP'							=> 'IP-адрес',
	'SORT_WARNINGS'						=> 'Предупреждения',
	'SPLIT_AFTER'						=> 'Отделить тему начиная с выбранного сообщения',
	'SPLIT_FORUM'						=> 'Форум для новой темы',
	'SPLIT_POSTS'						=> 'Отделить выбранные сообщения',
	'SPLIT_SUBJECT'						=> 'Заголовок новой темы',
	'SPLIT_TOPIC_ALL'					=> 'Отделить тему после выбранных сообщений',
	'SPLIT_TOPIC_ALL_CONFIRM'			=> 'Вы уверены, что хотите разделить эту тему?',
	'SPLIT_TOPIC_BEYOND'				=> 'Разделить тему начиная с выбранного сообщения',
	'SPLIT_TOPIC_BEYOND_CONFIRM'		=> 'Вы уверены, что хотите разделить эту тему начиная с выбранного сообщения?',
	'SPLIT_TOPIC_EXPLAIN'				=> 'Используя нижеприведённую форму, вы можете разделить тему на две, или путём выбора отдельных сообщений, или путём отделения после выбранного сообщения.',

 	'THIS_PM_IP'				=> 'IP-адрес для личного сообщения',
	'THIS_POST_IP'				=> 'IP-адрес для сообщения',
	'TOPICS_APPROVED_SUCCESS'	=> 'Выбранные темы были одобрены.',
	'TOPICS_DELETED_SUCCESS'	=> 'Выбранные темы были успешно удалены из базы данных.',
	'TOPICS_DISAPPROVED_SUCCESS'=> 'Выбранные темы были отклонены.',
	'TOPICS_FORKED_SUCCESS'		=> 'выбранные темы были успешно скопированы.',
	'TOPICS_LOCKED_SUCCESS'		=> 'Выбранные темы были закрыты.',
	'TOPICS_MOVED_SUCCESS'		=> 'Выбранные темы были успешно перемещены.',
	'TOPICS_RESTORED_SUCCESS'	=> 'Выбранные темы были успешно восстановлены.',
	'TOPICS_RESYNC_SUCCESS'		=> 'Выбранные темы были синхронизированы.',
	'TOPICS_TYPE_CHANGED'		=> 'Типы тем успешно изменены.',
	'TOPICS_UNLOCKED_SUCCESS'	=> 'Выбранные темы были открыты.',
	'TOPIC_APPROVED_SUCCESS'	=> 'Выбранная тема была одобрена.',
	'TOPIC_DELETED_SUCCESS'		=> 'Выбранная тема была успешно удалена из базы данных.',
	'TOPIC_DISAPPROVED_SUCCESS'	=> 'Выбранная тема была успешно отклонена.',
	'TOPIC_FORKED_SUCCESS'		=> 'Выбранная тема была успешно скопирована.',
	'TOPIC_LOCKED_SUCCESS'		=> 'Выбранная тема была закрыта.',
	'TOPIC_MOVED_SUCCESS'		=> 'Выбранная тема была успешно перемещена.',
	'TOPIC_NOT_EXIST'			=> 'Выбранная вами тема не существует.',
	'TOPIC_RESTORED_SUCCESS'	=> 'Выбранная тема была успешно восстановлена.',
	'TOPIC_RESYNC_SUCCESS'		=> 'Выбранная тема была синхронизирована.',
	'TOPIC_SPLIT_SUCCESS'		=> 'Выбранная тема была успешно разделена.',
	'TOPIC_TIME'				=> 'Время создания темы',
	'TOPIC_TYPE_CHANGED'		=> 'Тип темы успешно изменён.',
	'TOPIC_UNLOCKED_SUCCESS'	=> 'Выбранная тема была открыта.',
	'TOTAL_WARNINGS'			=> 'Всего предупреждений',

	'UNAPPROVED_POSTS_TOTAL'		=> array(
		0	=> 'Нет сообщений, ожидающих одобрения.',
		1	=> 'Сообщений, ожидающих одобрения: <strong>1</strong>.',
		2	=> 'Сообщений, ожидающих одобрения: <strong>%d</strong>.',
	),
	'UNLOCK'						=> 'Открыть',
	'UNLOCK_POST'					=> 'Разблокировать сообщение',
	'UNLOCK_POST_EXPLAIN'			=> 'Разрешить редактирование',
	'UNLOCK_POST_POST'				=> 'Разблокировать сообщение',
	'UNLOCK_POST_POST_CONFIRM'		=> 'Вы уверены, что хотите разрешить редактирование этого сообщения?',
	'UNLOCK_POST_POSTS'				=> 'Разблокировать выбранные сообщения',
	'UNLOCK_POST_POSTS_CONFIRM'		=> 'Вы уверены, что хотите разрешить редактирование выбранных сообщений?',
	'UNLOCK_TOPIC'					=> 'Открыть тему',
	'UNLOCK_TOPIC_CONFIRM'			=> 'Вы уверены, что хотите открыть эту тему?',
	'UNLOCK_TOPICS'					=> 'Открыть выбранные темы',
	'UNLOCK_TOPICS_CONFIRM'			=> 'Вы уверены, что хотите открыть все выбранные темы?',
	'USER_CANNOT_POST'				=> 'Вы не можете добавлять сообщения в этом форуме.',
	'USER_CANNOT_REPORT'			=> 'Вы не можете отправлять жалобы на сообщения в этом форуме.',
	'USER_FEEDBACK_ADDED'			=> 'Заметка о пользователе успешно добавлена.',
	'USER_WARNING_ADDED'			=> 'Пользователю успешно вынесено предупреждение.',

	'VIEW_DETAILS'			=> 'Информация',
	'VIEW_PM'				=> 'Просмотреть личное сообщение',
	'VIEW_POST'				=> 'Сообщение',

	'WARNED_USERS'			=> 'Пользователи, имеющие предупреждения',
	'WARNED_USERS_EXPLAIN'	=> 'Это список пользователей, для которых не истекли сроки вынесенных предупреждений.',
	'WARNING_PM_BODY'		=> 'Это предупреждение, вынесенное вам администратором или модератором этого сайта.[quote]%s[/quote]',
	'WARNING_PM_SUBJECT'	=> 'Вам вынесено предупреждение',
	'WARNING_POST_DEFAULT'	=> 'Это предупреждение, относящееся к следующему вашему сообщению: %s.',
	'NO_WARNINGS'	=> 'Нет предупреждений.',

	'YOU_SELECTED_TOPIC'	=> 'Вы выбрали тему номер %d: %s.',

	'report_reasons'		=> array(
		'TITLE'	=> array(
			'WAREZ'		=> 'Варез',
			'SPAM'		=> 'Спам',
			'OFF_TOPIC'	=> 'Оффтопик',
			'OTHER'		=> 'Другое',
		),
		'DESCRIPTION' => array(
			'WAREZ'		=> 'Сообщение содержит ссылки на незаконные или пиратские программы.',
			'SPAM'		=> 'Сообщение имеет единственной целью рекламу сайтов, программ или других продуктов, товаров, услуг и пр.',
			'OFF_TOPIC'	=> 'Сообщение не относится к обсуждаемой теме.',
			'OTHER'		=> 'Причина обжалования не относится ни к одной из перечисленных, используйте поле дополнительной информации.',
		)
	),
));
