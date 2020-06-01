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
define( 'DB_NAME', 'wp-car' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'C-qMh7_3IO0O0(m2hZi5d%Z:!U`Sq7(<ojxNI}8Hw?sF[>0I@(QydwEE*&8<]Hua' );
define( 'SECURE_AUTH_KEY',  'O^I[>UqNOGT3?yS5UyV%<dyo1uQ|pa/Zs|zfT_z:H1I)M-OOPZJ}jZtIdP+]`-Xo' );
define( 'LOGGED_IN_KEY',    'j``2xdLDxP?}j_ |;405`gG]0m&-t;0G&9srKs+=^~36Fh}.,CvH-ApsOF/)4sn ' );
define( 'NONCE_KEY',        'J<yH@,G=(-p*-5:2x?&wNd73E%`&Sd6/pCpm|~qq&*rpB{9!`+CPNKtV}/!q)H>#' );
define( 'AUTH_SALT',        'kDT6]}6gMgebaywjyVQ,!](:c[Zl4@CE|GHrppm.aE/>EL,|e2!+6ENlpUT~Qkuj' );
define( 'SECURE_AUTH_SALT', 'ufI0J gR1_9=#ZLbc?6$xq&Yq<>rG7Gj<)%S&mwo#fskcyr4._6iNk+2jfwqFMq}' );
define( 'LOGGED_IN_SALT',   'q`:%k{;=IlaQw<4%-dmBem<S~nO6~M>@G<u%-Hi4M%mIHP8qjUW!T,}5[+^*@/+~' );
define( 'NONCE_SALT',       'f-!0]QX[rPzMtjxi5pHnvPvMFNt(oId?[.HbLM2*ws0[}Q`Lyj:mmMiWEy}_=!Aw' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
