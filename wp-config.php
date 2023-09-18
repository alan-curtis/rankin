<?php
/**
 * This config file is yours to hack on. It will work out of the box on Pantheon
 * but you may find there are a lot of neat tricks to be used here.
 *
 * See our documentation for more details:
 *
 * https://pantheon.io/docs
 */

/**
 * Pantheon platform settings. Everything you need should already be set.
 */
if (file_exists(dirname(__FILE__) . '/wp-config-pantheon.php') && isset($_ENV['PANTHEON_ENVIRONMENT'])) {
	require_once(dirname(__FILE__) . '/wp-config-pantheon.php');

/**
 * Local configuration information.
 *
 * If you are working in a local/desktop development environment and want to
 * keep your config separate, we recommend using a 'wp-config-local.php' file,
 * which you should also make sure you .gitignore.
 */
} elseif (file_exists(dirname(__FILE__) . '/wp-config-local.php') && !isset($_ENV['PANTHEON_ENVIRONMENT'])){
	# IMPORTANT: ensure your local config does not include wp-settings.php
	require_once(dirname(__FILE__) . '/wp-config-local.php');

/**
 * This block will be executed if you are NOT running on Pantheon and have NO
 * wp-config-local.php. Insert alternate config here if necessary.
 *
 * If you are only running on Pantheon, you can ignore this block.
 */
} else {
	/** Authentication Unique Keys and Salts. */
define( 'AUTH_KEY', 'uUYrVuBMrGtYuFnlfpJHNXZxhIUyPDQpkBqVDSPpsZMktSyjUETztLLwasUFCvuw' );
define( 'SECURE_AUTH_KEY', 'UrgRnfrJZbIFHahRyykCrtUdyKTTZTEalHshvMslGRsmLoWMMgEPgsMbQlbAHDGQ' );
define( 'LOGGED_IN_KEY', 'xHYOAYtISvFSBKOfrvkzUKWGhJbUzXWZcuxMmBLHVIQLMwPSsHlmxYLvNgFrYKgS' );
define( 'NONCE_KEY', 'ImEgRLDqlgDRrFaWfscoCkFcNlMnLUpYNmnzVILcuRchWoRrElALLYWGyqXWBxuF' );
define( 'AUTH_SALT', 'kYysEcnjOsIXQIOKVCaBaHoJygyBuupEidZdvSIrbQGLicnOHjLWojhMvudkJaJT' );
define( 'SECURE_AUTH_SALT', 'VQXBQiciqdeyYuJtNtmkFeASYmmSqPrYBKQExBMLSTjEzDqwYctnkafZezkMihBI' );
define( 'LOGGED_IN_SALT', 'lmExNkLtiMsVCyWFmTkqVviJzycPTqpNVOZsoXhEuxDoiliazeGCFDMmqxGrpbUh' );
define( 'NONCE_SALT', 'XBGjeCqXClllpjyGKDKsQuzwnGMZvPxaYuwMeVTNkhRyMFtXYpafnpuRbuysYMgk' );
}


/** Standard wp-config.php stuff from here on down. **/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * You may want to examine $_ENV['PANTHEON_ENVIRONMENT'] to set this to be
 * "true" in dev, but false in test and live.
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define('WP_DEBUG', true);
}
// Include for ddev-managed settings in wp-config-ddev.php.
$ddev_settings = dirname(__FILE__) . '/wp-config-ddev.php';
if (is_readable($ddev_settings) && !defined('DB_USER')) {
  require_once($ddev_settings);
}
/* That's all, stop editing! Happy Pressing. */




/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
