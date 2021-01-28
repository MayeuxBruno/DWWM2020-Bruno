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
define( 'DB_NAME', 'testwp' );

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
define( 'AUTH_KEY',         'kR)6s/;_.<^HfhG-RTPpc?d8jk!Ln b*z04wB@AjPB}lZM4.Z MYkX,pvUpMSnGn' );
define( 'SECURE_AUTH_KEY',  '+(oQD3y)]C^fG:=dy3]Mf8NJ3`z`,AQe=$sDA82vZzP&O$v5p|?_oTFbLW+A#X*`' );
define( 'LOGGED_IN_KEY',    'l.G4WLK8XBiH|Ti?@ELg3W3.[iEpQt^uWW*RlS>vx~`}v}AHQO11h-O+qh;~7V=%' );
define( 'NONCE_KEY',        'vWG ZGbWZ)^E& b@y>9*?9sD2c!HFrQH EnyBdEPFqG5M?l?~#X)9)GW%,yDb@J;' );
define( 'AUTH_SALT',        'q!7m1#*V=$.Njrw>}ZC`!zv$gYaF0?61_>8arVofG~q{nRRrP;ulH)>>m,T0|@su' );
define( 'SECURE_AUTH_SALT', '5I_E8^+!zPw8LvJn1njKrt>jCvun*vRG{FX-{mB[.=,yhm_FeLc81Z4l.GGD`)RF' );
define( 'LOGGED_IN_SALT',   'Sdz|#UzFH)x3:Z$?/bHc;*Y)iD~K=KXzf-zY1wQ.j<-n`3NF7TN!|AtUa;z7W&|G' );
define( 'NONCE_SALT',       'fLV:nDaj*TEUTEZ9qy<L?C@.&LpYvp@IeV:C@=S_ |7Jyud*_8N=!H[.t3g+@@P,' );
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
