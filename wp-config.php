<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/Applications/MAMP/htdocs/hogarsinenredos/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'hogarsinenredos');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', ')>EE%W AT(APua;mRs1pg}bP%( R?5j5S~^?!%lGbBJwqksN>;Wc-LJ+)u*,<7Du');
define('SECURE_AUTH_KEY', 'F9n}:%f-7^Dex6FQ@m1r1@ZOBTh,eH+8-p0U!;&B523.pG2 )Z{K%=+X 1TYl)G$');
define('LOGGED_IN_KEY', '=w]w8J9|&,Z[>Rc,g#>Ud/^n%k&Xy|A_M{rD(+isU2^#H:/!${nErN8!TMh?Zqkh');
define('NONCE_KEY', '&`[13T6PZWOB8_lCK^m]Dqa=lB_X ;MX.=am=?X*X7-Wb@F9WcS&BND])Ok{_g00');
define('AUTH_SALT', '@a;xZHfdn7dxfz&z<<DbcLPl_Gzm,[IVF)XFN=Ms4!9AxNi>x.`Ftep3_wp+5$y%');
define('SECURE_AUTH_SALT', '?8a,YY(4u;c{zdNaB1(Q SV{Zbqbz$Cvr_9Wv<+=<x?Gf%ix)3|7H3iT rJyQY2k');
define('LOGGED_IN_SALT', 'we1]qD54mK_@K~qJHH{E3i,p%]Ei7Y>Ut?EC,mx_f;grASgXQHl?e!{]67RBvPT;');
define('NONCE_SALT', 'o{NA|ty.Mfa-fW(O:l+xU7%R5.DjYQROhEH-|QD6|Is,`;`sy)KcZm8}{C0j^I!/');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
define('FS_METHOD', 'direct');

