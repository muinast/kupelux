<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
//define('DB_NAME', 'kupeluxb_wp');
define('DB_NAME', 'kupelux');

/** Имя пользователя MySQL */
define('DB_USER', 'root');
//define('DB_USER', 'kupeluxb_wpu');

/** Пароль к базе данных MySQL */
//define('DB_PASSWORD', 'd86u6fs9rA');
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Xt7I7-|v&CU3^-|Blvt]|/8IHU7:*^@x|>9n^-HlfX/#i0DM pvs]BUugZ-s>eYd');
define('SECURE_AUTH_KEY',  '3[1zI~ocC /uu6$`NiSqwL0nyh^j[>-5{^5STmOXOrNo--smi7+=a#AI)Oa1SDg-');
define('LOGGED_IN_KEY',    '$+pi~5tG|BV3bYo @jNRsNv98]d!Xp,o6KOxmDRq7GHkB+>muMt:r$LC wA%q|&H');
define('NONCE_KEY',        'xg2=dYt||?LKOU^V=nH56fKb(XW7BQ.#Lb([TL% =cR{=1s<>|C~LR,L<Wb=f%~v');
define('AUTH_SALT',        '-MVN=8> y`Fi(D+.iQ6~DlX|^LL1c)SmhwOKO-x+JC-NU-gw]r|J6aih|@sir^FV');
define('SECURE_AUTH_SALT', 'AQ>gXqa[vSu2W%41HroTm1Txh.Nf;}r*,&|RAS]~ZVUb:quesF!5#RFo{7 W0*aI');
define('LOGGED_IN_SALT',   'Me,g`OybY:r4R*P[3>$Zh0yrb8Xw|)}Lc#<c1tNV#x;^}JY6Xo!GT?ObDjKB6c[*');
define('NONCE_SALT',       '_m|t^PY&S(9U l7fz^upA6*V-_N#0G|%p43PldW/&O6]::6X ;7>JXR-u`_~eeTU');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Язык локализации WordPress, по умолчанию английский.
 *
 * Измените этот параметр, чтобы настроить локализацию. Соответствующий MO-файл
 * для выбранного языка должен быть установлен в wp-content/languages. Например,
 * чтобы включить поддержку русского языка, скопируйте ru_RU.mo в wp-content/languages
 * и присвойте WPLANG значение 'ru_RU'.
 */
define('WPLANG', 'ru_RU');

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
