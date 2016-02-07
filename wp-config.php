<?php
/**
 * In dieser Datei werden die Grundeinstellungen für WordPress vorgenommen.
 *
 * Zu diesen Einstellungen gehören: MySQL-Zugangsdaten, Tabellenpräfix,
 * Secret-Keys, Sprache und ABSPATH. Mehr Informationen zur wp-config.php gibt es
 * auf der {@link http://codex.wordpress.org/Editing_wp-config.php wp-config.php editieren}
 * Seite im Codex. Die Informationen für die MySQL-Datenbank bekommst du von deinem Webhoster.
 *
 * Diese Datei wird von der wp-config.php-Erzeugungsroutine verwendet. Sie wird ausgeführt,
 * wenn noch keine wp-config.php (aber eine wp-config-sample.php) vorhanden ist,
 * und die Installationsroutine (/wp-admin/install.php) aufgerufen wird.
 * Man kann aber auch direkt in dieser Datei alle Eingaben vornehmen und sie von
 * wp-config-sample.php in wp-config.php umbenennen und die Installation starten.
 *
 * @package WordPress
 */

/**  MySQL Einstellungen - diese Angaben bekommst du von deinem Webhoster. */
/**  Ersetze database_name_here mit dem Namen der Datenbank, die du verwenden möchtest. */
define('DB_NAME', 'web59_db1');

/** Ersetze username_here mit deinem MySQL-Datenbank-Benutzernamen */
define('DB_USER', 'web59_1');

/** Ersetze password_here mit deinem MySQL-Passwort */
define('DB_PASSWORD', 'schnucki');

/** Ersetze localhost mit der MySQL-Serveradresse */
define('DB_HOST', 'localhost');

/** Der Datenbankzeichensatz der beim Erstellen der Datenbanktabellen verwendet werden soll */
define('DB_CHARSET', 'utf8');

/** Der collate type sollte nicht geändert werden */
define('DB_COLLATE', '');

define('DISABLE_WP_CRON', 'true');
/**#@+
 * Sicherheitsschlüssel
 *
 * Ändere jeden KEY in eine beliebige, möglichst einzigartige Phrase.
 * Auf der Seite {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * kannst du dir alle KEYS generieren lassen.
 * Bitte trage für jeden KEY eine eigene Phrase ein. Du kannst die Schlüssel jederzeit wieder ändern,
 * alle angemeldeten Benutzer müssen sich danach erneut anmelden.
 *
 * @seit 2.6.0
 */
define('AUTH_KEY',         'rmD+qJs$BxxhPqI*Kn}xZ6>:vA~AGnqEL>66taRY%4+#ds! Nv_$O-3bK8rxUF&c');
define('SECURE_AUTH_KEY',  '-0&PD-/:RX=mSd0y~g&N:H}$GKfGeY^=NE.V`-qI^~pia.pOrw~-%FFhF^6jItmV');
define('LOGGED_IN_KEY',    '~wyX-Ih6gnsW:q$Hzw~sOF?.QoP<Z64j|N,,aY5~ed&Gk(p]7]M1 9cAkg}y[=$Z');
define('NONCE_KEY',        'S*8u=/ ayrR)D&2^>cjaO(KG/J4EL|P#tD+s~+6 eM:o=<saZO6_ykg+Yr0!D.za');
define('AUTH_SALT',        'HCY(o {N%WL&i)57M`v-L@0Im_l8IhM+n.+{,~X/,ubwNz+l`vC9dhJQp#(oOT<$');
define('SECURE_AUTH_SALT', ' o<+~D%a0*@#Q7*O+SvS)r6|-$ox `tD}hSfu#`7mUD/WE#/Ff2N)ACtn%5kBtC+');
define('LOGGED_IN_SALT',   '_MVG!xXUJD_8&-g<!MrTJr=n) fDOi~K#]F:N@bO&+|/m7J/9Yi$)RF+pbI`IyH/');
define('NONCE_SALT',       'PJ9`IbU I#FWW Zkg8l528^+/A)6++agR17e(>/#yZHdlVQz7Zeb$!x x<<F88i<');

/**#@-*/

/**
 * WordPress Datenbanktabellen-Präfix
 *
 *  Wenn du verschiedene Präfixe benutzt, kannst du innerhalb einer Datenbank
 *  verschiedene WordPress-Installationen betreiben. Nur Zahlen, Buchstaben und Unterstriche bitte!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
