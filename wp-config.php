<?php
/**
 * Основне поставке Вордпреса.
 *
 * Ова датотека се користи од стране скрипте за прављење wp-config.php током
 * инсталирања. Не морате да користите веб место, само умножите ову датотеку
 * у "wp-config.php" и попуните вредности.
 *
 * Ова датотека садржи следеће поставке:
 * * MySQL подешавања
 * * тајне кључеве
 * * префикс табеле
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL подешавања - Можете добити ове податке од свог домаћина ** //
/** Име базе података за Вордпрес */
define( 'DB_NAME', 'sajtic' );

/** Корисничко име MySQL базе */
define( 'DB_USER', 'root' );

/** Лозинка MySQL базе */
define( 'DB_PASSWORD', '' );

/** MySQL домаћин */
define( 'DB_HOST', 'localhost' );

/** Скуп знакова за коришћење у прављењу табела базе. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Не мењајте ово ако сте у сумњи. */
define( 'DB_COLLATE', '' );

/**#@+
 * Јединствени кључеви за аутентификацију.
 *
 * Промените ово у различите јединствене изразе!
 * Можете направити ово користећи {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org услугу тајних кључева}
 * Ово можете променити у сваком тренутку да бисте поништили све постојеће колачиће.
 * Ово ће натерати кориснике да се поново пријаве.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'SW3@LNkm&OXE=Bt(L*7%g-<,%f0>9FS5;jU$L&W58j?@Z{!!&u,h+(s_@H*KWKG1' );
define( 'SECURE_AUTH_KEY',  '|a}W4f7-^G~b1y-+,RgR!)W&~l4GZHpy)e6JC0]G.eBeeISWZ&fhNBK UtFA<9P|' );
define( 'LOGGED_IN_KEY',    'rmX8< UBjplJ3QPB6H9^u}r+<:C?>jQUe~y@B(i}m6iLyU1~:vp&;+YAdV+!yQ@k' );
define( 'NONCE_KEY',        '[UorsWcgwmeaoumb0vt7=ssR(=8]54&*;[>R>j_mxe0DK#2|5e2J[`jY#I1~xe]I' );
define( 'AUTH_SALT',        '-MQUBQnftdc=!l6o[V@pOFkT:ydD0B/w#wnOB|W}y`[}Cl#p>QD.N4V?$BAqF@4M' );
define( 'SECURE_AUTH_SALT', ',RB#2,-bw~[l<>FyIM[QD7Uc-$u0y`MZAn!FqswF}B@`jR*e_BBrLm<!m_uby|.d' );
define( 'LOGGED_IN_SALT',   '80as#~FE(uA5}HL`nNR6kpD)${C=~ia8*w!nsP:ESN$1.d8m84)^3`/:sBy?.?_a' );
define( 'NONCE_SALT',       '*gfz3e5u,V)?PWha)37RB:P_AX<c5Hd{6Ajkg*WXiV]hH>]2-3Toi`c:Z,nAN|oE' );

/**#@-*/

/**
 * Префикс табеле Вордпресове базе података.
 *
 * Можете имати више инсталација Вордпреса у једној бази уколико
 * свакој дате јединствени префикс. Само бројеви, слова и доње цртице!
 */
$table_prefix = 'wp_';

/**
 * За градитеље: исправљање грешака у Вордпресу ("WordPress debugging mode").
 *
 * Промените ово у true да бисте омогућили приказ напомена током градње.
 * Веома се препоручује да градитељи тема и додатака користе WP_DEBUG
 * у својим градитељским окружењима.
 *
 * За више података о осталим константама које могу да се
 * користе током отклањања грешака, посетите Документацију.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* То је све, престаните са уређивањем! Срећно објављивање. */

/** Апсолутна путања ка Вордпресовом директоријуму. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Поставља Вордпресове променљиве и укључене датотеке. */
require_once( ABSPATH . 'wp-settings.php' );

set_time_limit(300);
