<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'trombone' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ty7&YZgWeBDj9D2d6es[zmQmXc$(?@?y}%g6-<r>.!a/S.r9^Zq9Fvdq@AC[}B$v' );
define( 'SECURE_AUTH_KEY',  'qi%#=HxU_MiH2xi)tl%Tq6VyB)DF85!lnx}`3k+U0W/7?qjFg:6&+GpdGf4O*Qb5' );
define( 'LOGGED_IN_KEY',    'pjeWGH%YG,X,F:{e0{D#-NJk/0oKX7C-?[tr_ wCPz2~llrzg#vj(iK~|vTzb:,+' );
define( 'NONCE_KEY',        'V`M^hp^ch7DcNk?,_n_jZEAV_+q.}g!AiE>c-*p[St[w5c:=A>,$FZ5.i=%-w?e%' );
define( 'AUTH_SALT',        '>/2%vsas=#; ]@Ir_<z/|.CN.b0#`yl)6{pG9xM5H& 6FHJpT[K:jJ;7j9xw`T_}' );
define( 'SECURE_AUTH_SALT', 'smt@|o=*QtlS5MY!b-3`,nemIvq.*uIYk?mxP#A0! {j_SFhxTuOBOSvE967RKLg' );
define( 'LOGGED_IN_SALT',   'E!Ha-g^hNTDJ:@ZUgg8m*g&:=Od5>PrfTH2.k0Cn6<7p>r?4>+;|5NwW^_Vn0wPY' );
define( 'NONCE_SALT',       'd#$`4d,+c`Xeh j=_q5 hoR&!]E|6FHP2mXoBO5fJf)d=,^=S^G.uu0Qn r0,Rps' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'trombone_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
