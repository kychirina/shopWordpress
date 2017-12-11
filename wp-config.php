<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'shopSoap');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'HI-3$M59BTimypC**]7BxlB$A0<<7}`lFjPLPP6gq$p/>EYPgZPQHI|$TTLH~y26');
define('SECURE_AUTH_KEY',  'sI*m6 bmqvO4[aP!7esK(<`g4~&|DJ^oz=YdnW(z-wG~lFg/zP-as)AolOe!c0nS');
define('LOGGED_IN_KEY',    'V,Hu{Yt4TRXn*bMMv|7t& 3UFaPsj[R-0,zcon.laDfLY:NqOBH*UT1N+p4g5ani');
define('NONCE_KEY',        '.!W&PCKn1n?Hwd7nHfZ7~0uCG>!.o6J|jkX#[}a+o$]S{V+#T.!kR>S7^IH}BeCU');
define('AUTH_SALT',        'z6RZ&RG$[x9FW_]/iU^f6h,,d1vvVRzQ>(vtdv}I$X/{VtG#%L&?CNI#/0inz&7*');
define('SECURE_AUTH_SALT', 'aOA9?/kbQ:i~69)cQS^uw#%vg#v:&:}Zvp7X6ly_(xBMkc?hPgCY6FS7MKbdq2Qr');
define('LOGGED_IN_SALT',   'Wz#qeiea(@UT&CdH{0)q*D_/Q=<eupF+9l+,*tdFgk7P(:UyMK&|v{A^eo366~-d');
define('NONCE_SALT',       '7|X&hJ+YD[ObumEo}u0VM? rm5z/=msduLKfb/r2/@~AD*jfm%M41[z*q{%Y*@RV');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'shop_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
