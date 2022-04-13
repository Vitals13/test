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

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'finishingWork' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'Y~`JUG]gL@^Y1i}9%z)|G5E@Ncm0<^N>iLxO^Oh>^qz8[lcFl;:&`d~mEG,$Q6=4' );
define( 'SECURE_AUTH_KEY',  'mo~L0QM!e_;*bSL,f5si0zo&I,0qOi6IY3@d3,~,5,_$2e**pq^WK+u}^TR%+ph=' );
define( 'LOGGED_IN_KEY',    '6yNveG{v@iG>*=?Z/l/3gD{H^/*p+WIAmlyWjR,$:4n~<1$_6{xt&!q1,@?JIjR!' );
define( 'NONCE_KEY',        ']%i%1P`2P+/~pv(]GBX/|HN-+,DS17g<40<+cuut|Y/Q!KH*U;ltcN,%4Ml $e;g' );
define( 'AUTH_SALT',        'id:3kdLs:~_4t`z_g9A@=-wC%0[Dx,z)kP;!+[C|1?kLbItkKX<&)JtqE`qGqW3J' );
define( 'SECURE_AUTH_SALT', 'dx,FUL!Qw/%qk|lf>26/9nIs5`nThI HtS4IR-K5O`ExgSQhw:omh:rj3CG<EWDt' );
define( 'LOGGED_IN_SALT',   '?7}dd37[x<f.)3s?DEsCHE24rH|_, 5kyjo+F/C4Yv5wkxHMsnISbJY,s%%W]Zca' );
define( 'NONCE_SALT',       '8&//*$#7@3tR|j//NTv!3JfpzhO:^rw)2Z8PU<NXus1_pZ;`)Jh>y^LOy:)pxAQN' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
