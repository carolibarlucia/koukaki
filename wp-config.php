<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'koukaki' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'V*vln_D9OKa*J1d r(_H ~)7inUuv3(IwSoONfD`8f;^ghzn$0P4.Ja~yOLiP..s' );
define( 'SECURE_AUTH_KEY',  'U+ezNm?2o~);C +im{(tV$(RGO`1omZ7iwg/yQu[Bs76?<6:<}onVX+<&OA^v`IW' );
define( 'LOGGED_IN_KEY',    'W7ket,|JS8d$?(6cT+k3E<g|(F/BElIsbc5_!S-LEnECrP5_$B(P%hxh;W4v,r_z' );
define( 'NONCE_KEY',        '>sCMKmYxx._?{go:q-g}2,TLfY1_KG42qcPD:@X/NW<-2WsqtyvA O#l8dZDk+Q%' );
define( 'AUTH_SALT',        '2X~Y?[q`ceARF(~X(m{bO7[tl#?#8`)ZuKP,}P2UiW~W-<`6hMiRr:o1`t|iho}b' );
define( 'SECURE_AUTH_SALT', 'ndE8t73Lt,sDhj{Og5-kRmruP[+Uq1o$q0-Iztr) 77T>d7:VUP>O70a.a8;p.dl' );
define( 'LOGGED_IN_SALT',   '&L<&<9CL6_U,&HW^ Lq+z1Y}iFdUf{:9Cvy<osH/vT9DIVOrq7`mLRxXws;%:|1a' );
define( 'NONCE_SALT',       '_{U0;]]bfP|!#r&Q($*qyU#T$s&>d7XukF>OTD%;:L2]d`v2%Un(G:DG3S2O]SzV' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
