<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
if ($_SERVER['HTTP_HOST'] == 'wp-test') {
    /** Адрес установки WP */
    define('WP_HOME', 'http://wp-test'); // no trailing slash

    /** Адрес домашней страницы */
    define('WP_SITEURL', 'http://wp-test');  // no trailing slash
} elseif ($_SERVER['HTTP_HOST'] == 'v.darklab.ru') {
    /** Адрес установки WP */
    define('WP_HOME', 'http://v.darklab.ru/tj'); // no trailing slash

    /** Адрес домашней страницы */
    define('WP_SITEURL', 'http://v.darklab.ru/tj');  // no trailing slash
}
// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', '');

/** Имя пользователя MySQL */
define('DB_USER', '');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', '');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'QtuyB9;Nwia9Zd^/TXsG 9_<d[zh/j;~MsKAoeXlG{T?+iH^KXb:LAd@OeB-n/dC');
define('SECURE_AUTH_KEY', 'yo*:MU7!9&/Ylkh|,CQ{5y!FISa^sN.%7 ` zo?VtX&8/.Ps43^1Z@TnJSefBnm4');
define('LOGGED_IN_KEY', '.>}qc->85?HUP#V?9SCoH9iMD1}xAYsh=+lg$zue3~`5:vno9c&r*VsR28<+H#1_');
define('NONCE_KEY', '7s*N):;@kT>z3rmz@`d>FWMAG!Z~O|_GLbgL?VLo*I$:Ak7,A~Q}wZX)f%; 9VT@');
define('AUTH_SALT', '~klU%:CFax36!}xX?Loby]u6{(YS)|)*c nAGmKs5W9yi1|N$bx;@~&ToD[%a.#E');
define('SECURE_AUTH_SALT', '8Hi.+Pj@+%Qh{C(zE@}/QpG_h,B`QFRC,j7c6{DtK@))%5H2~66e-3:1sjal}vI)');
define('LOGGED_IN_SALT', '*,Z*5)yL1m,=0Izh/U,%zXC8dDFMO`9Ld^px#TOrBS(|>@!TkqTME/qyOnCvRBk&');
define('NONCE_SALT', '%x+Jr^2kH=c:9-E|$O+.gpq^l}u2pVLTZa@Q?vmAKj z)Cpt&/.Z.7:`d3H$cP*+');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'dp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if (! defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
