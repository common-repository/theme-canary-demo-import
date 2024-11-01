<?php

/**
 * Fired when the plugin is uninstalled.
 *
 *
 * For more information, see the following discussion:
 * https://github.com/tommcfarlin/WordPress-Plugin-Boilerplate/pull/123#issuecomment-28541913
 *
 * @link       https://themecanary.com
 * @since      1.0
 *
 * @package    Theme_Canary_Demo_Import
 */

// If uninstall not called from WordPress, then exit.
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
  exit;
}
