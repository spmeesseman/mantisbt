<?php
# MantisBT - A PHP based bugtracking system

# MantisBT is free software: you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation, either version 2 of the License, or
# (at your option) any later version.
#
# MantisBT is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with MantisBT.  If not, see <http://www.gnu.org/licenses/>.

/**
 * @package MantisBT
 * @copyright Copyright (C) 2000 - 2002  Kenzaburo Ito - kenito@300baud.org
 * @copyright Copyright (C) 2002 MantisBT Team - mantisbt-dev@lists.sourceforge.net
 * @link http://www.mantisbt.org
 */

# This sample file contains the essential files that you MUST
# configure to your specific settings.  You may override settings
# from config_defaults_inc.php by uncommenting the config option
# and setting its value in this file.

# Rename this file to config_inc.php after configuration.

# In general the value OFF means the feature is disabled and ON means the
# feature is enabled.  Any other cases will have an explanation.

# Look in http://www.mantisbt.org/docs/ or config_defaults_inc.php for more
# detailed comments.

#
# DATABASE
#
$g_hostname               = 'localhost';
$g_db_type                = 'mysqli';
$g_database_name          = 'mantis';
$g_db_username            = 'mantis';
$g_db_password            = '97s4yr2$';

#
# DEFAULT TIMEZONE
#
$g_default_timezone       = 'America/Detroit';

#
# The salt. Keep secure!!!
#
$g_crypto_master_salt     = '+7r8ayQ8zZj1RHSm+JxLc2KEhjqSo+Y3ImM1MfAtOmc=';

#
# STATUS COLORS
#
#$g_css_include_file = "/colorized/colorized.css";
#$g_status_colors['new']          = '#eeb3aa';
#$g_status_colors['feedback']     = '#badade';
#$g_status_colors['acknowledged'] = '#f5e5b8';
#$g_status_colors['confirmed']    = '#c5dba9';
#$g_status_colors['assigned']     = '#afbed5';
#$g_status_colors['resolved']     = '#c1b9ae';

#
# SIGNUP
#
$g_allow_signup				= OFF;

#
# EMAIL
#
$g_phpMailer_method		= PHPMAILER_METHOD_SMTP; # or PHPMAILER_METHOD_MAIL, PHPMAILER_METHOD_SENDMAIL
$g_smtp_host			= '10.0.7.50';			# used with PHPMAILER_METHOD_SMTP
$g_smtp_username		= '';					# used with PHPMAILER_METHOD_SMTP
$g_smtp_password		= '';					# used with PHPMAILER_METHOD_SMTP
$g_webmaster_email      = 'smeesseman@pjats.com';
$g_from_email           = 'application@pjats.com';	# the "From: " field in emails
$g_return_path_email    = 'application@pjats.com';	# the return address for bounced mail
$g_from_name			= 'Projects Ticketing System';
# $g_email_send_using_cronjob = OFF;
# Allow an email address to be used by multiple user id's (for tickey system api, 1 id many users)
# note this would be completely insecure against spam if account signup is turned on
$g_email_ensure_unique = OFF;
$g_email_receive_own = ON;

/**
 * Login authentication method. Must be one of
 * MD5, LDAP, BASIC_AUTH or HTTP_AUTH.
 * Note: you may not be able to easily switch encryption methods, so this
 * should be carefully chosen at install time. However, MantisBT will attempt
 * to "fall back" to older methods if possible.
 * @global integer $g_login_method
 */
#$g_login_method = MD5;
$g_login_method = LDAP;

/**
 * Re-authentication required for admin areas
 * @global integer $g_reauthentication
 */
$g_reauthentication = ON;

/**
 * Duration of the reauthentication timeout, in seconds
 * @global integer $g_reauthentication_expiry
 */
$g_reauthentication_expiry = TOKEN_EXPIRY_AUTHENTICATED;

/**
 * LDAP
 */
$g_ldap_server = 'ldap://10.0.0.100:389/';
$g_ldap_root_dn = 'OU=PJA,DC=perryjohnson01,DC=com';
$g_ldap_organization = '';
$g_ldap_protocol_version = 3;
$g_ldap_network_timeout = 0;
$g_ldap_follow_referrals = OFF;
$g_ldap_bind_dn = 'CN=service_sysaid,OU=Service Accounts,OU=MIS,DC=perryjohnson01,DC=com';
$g_ldap_bind_passwd = 'Sy$@1dH3lp!';
$g_ldap_uid_field = 'sAMAccountName';
$g_ldap_realname_field = 'cn';
$g_use_ldap_realname = ON;
$g_use_ldap_email = ON;
$g_ldap_simulation_file_path = '';

#
# Attachments / File Uploads
#
# $g_allow_file_upload	= ON;
# $g_file_upload_method	= DATABASE; # or DISK
# $g_absolute_path_default_upload_folder = ''; # used with DISK, must contain trailing \ or /.
$g_max_file_size = 64000000;
# $g_preview_attachments_inline_max_size = 256 * 1024;
# $g_allowed_files		= '';		# extensions comma separated, e.g. 'php,html,java,exe,pl'
# $g_disallowed_files   = '';		# extensions comma separated

#
# BRANDING
#
$g_window_title			= 'Projects Board';
$g_logo_image			= 'images/header2.png';
$g_favicon_image		= 'images/favicon.ico';

#
# REAL NAMES
#
# $g_show_realname = OFF;
# $g_show_user_realname_threshold = NOBODY;	# Set to access level (e.g. VIEWER, REPORTER, DEVELOPER, MANAGER, etc)

#
# TAGS
#
$g_tag_create_threshold = UPDATER;

#
# DEFAULT HOME PAGE
#
# $g_default_home_page = 'my_view_page.php';	# Set to name of page to go to after login

#
# Show horizontal project manu bar at top of pages
#
#$g_show_project_menu_bar = ON;

#
# LINKS OPEN IN...
#
$g_html_make_links = LINKS_NEW_WINDOW; # LINKS_SAME_WINDOW

#
# PROJECT DOCS PAGE
#
$g_enable_project_documentation = ON;
$g_view_proj_doc_threshold = UPDATER;

#
# SHOW MANTISBT VERSION
#
$g_show_version = ON;

#
# DEVELOPER CAN UPDATE CLOSED TOCKETS
#
$g_update_readonly_bug_threshold = DEVELOPER;

#
# WIKI
#
$g_wiki_enable = ON;
$g_wiki_engine = 'dokuwiki';
$g_wiki_root_namespace = 'mantis';
$g_wiki_engine_url = 'https://app1.development.pjats.com/wiki/';

#
# CUSTOM HEADERS
#
# This may need to be modified if a new plugin needs to adda header
# Add frame-src policy here for IFramed
$g_custom_headers = array("Content-Security-Policy: frame-src http://gist-it.appshot.com/ https://npm.development.pjats.com/ 'self'; img-src https://secure.gravatar.com/ 'self' 'self' data:; default-src 'self'; frame-ancestors 'self'; font-src https://kit-pro.fontawesome.com/ https://kit-free.fontawesome.com/ 'self'; style-src https://kit-pro.fontawesome.com/ 'self' 'unsafe-inline'; script-src https://kit.fontawesome.com/ https://cdnjs.cloudflare.com/ 'self' 'unsafe-inline'");

#
# SCRIPTS
# Note that content security policy must be set above in custom headers for all cross origin domains
# This config is non-documented and referenced in core/html_api.php
#
$g_scripts_included = array( 'font-awesome-pro.js' );

#
# TAGS
#
$g_tag_attach_threshold = DEVELOPER;
$g_tag_detach_threshold = DEVELOPER;
$g_tag_detach_own_threshold = DEVELOPER;
$g_tag_create_threshold = DEVELOPER;

#
# AVATAR
#

$g_show_avatar = ON;
$g_show_avatar_threshold = REPORTER;

#
# ETA/Projection
#

$g_enable_eta = OFF;
$g_enable_projection = OFF;
$g_enable_product_build = OFF;

#
# Relationship graphs
#
$g_relationship_graph_enable = ON;

/**
 * Enable anonymous access to MantisBT. You must also specify
 * $g_anonymous_account as the account which anonymous users will browse
 * MantisBT with. The default setting is OFF.
 * @global integer $g_allow_anonymous_login
 */
$g_allow_anonymous_login = OFF;
$g_anonymous_account = 'anonymous';

#
# DEBUGGING
#

#$g_debug_email = 'smeesseman@pjats.com';
$g_show_queries_count = OFF;
$g_show_detailed_errors = OFF;
$g_stop_on_errors = OFF;
$g_show_log_threshold = ADMINISTRATOR;

/**
 * Errors Display method
 * Defines what {@link http://php.net/errorfunc.constants errors}
 * are displayed and how. Available options are:
 * - DISPLAY_ERROR_HALT    Stop and display error message (including
 *                         variables and backtrace if
 *                         {@link $g_show_detailed_errors} is ON).
 * - DISPLAY_ERROR_INLINE  Display a one line error and continue execution.
 * - DISPLAY_ERROR_NONE    Suppress the error (no display). This is the default
 *                         behavior for unspecified errors constants.
 *
 * The default settings are recommended for use in Production, and will only
 * display MantisBT fatal errors, suppressing output of all other error types.
 *
 * Recommended config_inc.php settings for developers (these are automatically
 * set if the server is localhost):
 * $g_display_errors = array(
 *     E_RECOVERABLE_ERROR => DISPLAY_ERROR_HALT,
 *     E_WARNING           => DISPLAY_ERROR_HALT,
 *     E_ALL               => DISPLAY_ERROR_INLINE,
 * );
 *
 * NOTICE: E_USER_ERROR, E_RECOVERABLE_ERROR and E_ERROR will always be internally
 * set DISPLAY_ERROR_HALT independent of value configured.
 *
 * @global array $g_display_errors
 */
$g_display_errors = array();

# Add developers defaults when server is localhost
# Note: intentionally not using SERVER_ADDR as it's not guaranteed to exist
if( isset( $_SERVER['SERVER_NAME'] ) &&
	( strcasecmp( $_SERVER['SERVER_NAME'], 'localhost' ) == 0 ||
	  $_SERVER['SERVER_NAME'] == '127.0.0.1' ) ) {
	$g_display_errors[E_USER_WARNING] = DISPLAY_ERROR_HALT;
	$g_display_errors[E_WARNING] = DISPLAY_ERROR_HALT;
	$g_display_errors[E_ALL] = DISPLAY_ERROR_INLINE;
}

/**
 * System logging
 * This controls the type of logging information recorded.
 * The available log channels are:
 *
 * LOG_NONE, LOG_EMAIL, LOG_EMAIL_RECIPIENT, LOG_EMAIL_VERBOSE, LOG_FILTERING,
 * LOG_AJAX, LOG_LDAP, LOG_DATABASE, LOG_WEBSERVICE, LOG_PLUGIN, LOG_ALL
 *
 * and can be combined using
 * {@link http://php.net/language.operators.bitwise PHP bitwise operators}
 * Refer to {@link $g_log_destination} for details on where to save the logs.
 *
 * @global integer $g_log_level
 */
#$g_log_level = LOG_NONE;
$g_log_level = LOG_ALL;
$g_log_level = LOG_PLUGIN;
#$g_log_level = LOG_EMAIL | LOG_EMAIL_RECIPIENT;
#$g_log_level = LOG_EMAIL_VERBOSE;

/**
 * Specifies where the log data goes
 *
 * The following five options are available:
 * - '':        The empty string means {@link http://php.net/error_log
 *              default PHP error log settings}
 * - 'none':    Don't output the logs, but would still trigger EVENT_LOG
 *              plugin event.
 * - 'file':    Log to a specific file, specified as an absolute path, e.g.
 *              'file:/var/log/mantis.log' (Unix) or
 *              'file:c:/temp/mantisbt.log' (Windows)
 * - 'firebug': make use of Firefox {@link http://getfirebug.com/ Firebug Add-on}.
 *              If user is not running firefox, this options falls back to
 *              the default php error log settings.
 * - 'page':    Display log output at bottom of the page. See also
 *              {@link $g_show_log_threshold} to restrict who can see log data.
 *
 * @global string $g_log_destination
 */
$g_log_destination = 'page';
$g_log_destination = 'file:/var/www/app1/projects/log/mantis.log';

#
# ANTI-SPAM
#
# Max number of events to allow for users with default access level (see $g_default_new_account_access_level) 
# when signup is enabled. Use 0 for no limit. Default is 10.
$g_antispam_max_event_count = 10;
# Time window to enforce max events within. Default is 3600 seconds (1 hour).
$g_antispam_time_window_in_seconds = 3600;
#
$g_default_new_account_access_level = REPORTER;

#
# ENUMERATIONS
#
# Add "Implemented" to resolutions
$g_resolution_enum_string = '10:open,20:fixed,25:implemented,30:reopened,40:unable to duplicate,50:not fixable,60:duplicate,70:not a bug,80:suspended,90:wont fix';
# Enum string for "type" cusom ticket field
$g_type_enum_string = '10:bug,20:feature,30:task';

$g_view_issues_page_columns = array(
	'selection', 'edit', 'priority', 'id', 'sponsorship_total',
	'bugnotes_count', 'attachment_count', 'Type', 'category_id', 'severity', 'status',
	'last_updated', 'summary'
);

################
# Sub-projects #
################

$g_subprojects_inherit_categories = ON;
$g_subprojects_inherit_versions = OFF;

################
# Custom Menus #
################

$g_plugin_ProjectPages_main_menu_options_back = array(
    array(
        'title'        => 'Read Me',
        'access_level' => REPORTER,
        'url'          => 'plugin.php?page=IFramed/main&title=Read%20Me&url=https://app1.development.pjats.com/svn/web/filedetails.php%3Frepname=pja%26path=%2Fproject_name%2Ftrunk%2FREADME.md%26usemime=1',
        'icon'         => 'fab fa-readme',
        'project_id'   => array ( -1 ),
        'no_project_name' => array ( 'ExtJs Packages' )
    ),
    array(
        'title'        => 'Install Doc',
        'access_level' => UPDATER,
        'url'          => 'plugin.php?page=IFramed/main&title=Install%20Doc&url=https://app1.development.pjats.com/svn/web/filedetails.php%3Frepname=pja%26path=%2Fproject_name%2Ftrunk%2Fdoc%2Fproject_name%20Installation.pdf%26usemime=1',
        'icon'         => 'fa-book',
        'project_id'   => array ( -1 )
    ),
    array(
        'title'        => 'Developer Doc',
        'access_level' => DEVELOPER,
        'url'          => 'plugin.php?page=IFramed/main&title=Developer%20Doc&url=https://app1.development.pjats.com/doc/developernotes.md',
        'icon'         => 'fa-book',
        'project_id'   => array ( -2 )
    ),
    array(
        'title'        => 'ExtJsServer API',
        'access_level' => DEVELOPER,
        'url'          => 'plugin.php?page=IFramed/main&title=ExtJsServer%20API&url=https://app1.development.pjats.com/doc/extjsserver/api',
        'icon'         => 'fa-book',
        'project_id'   => array ( 1, 10 )
    ),
    array(
        'title'        => 'History File',
        'access_level' => REPORTER,
        'url'          => 'plugin.php?page=IFramed/main&title=History.txt&url=https://app1.development.pjats.com/svn/web/filedetails.php%3Frepname=pja%26path=%2Fproject_name%2Ftrunk%2Fdoc%2Fhistory.txt%26usemime=1',
        'icon'         => 'fa-history',
        'project_id'   => array ( -1 )
    ),
    array(
        'title'        => 'WebSVN',
        'access_level' => DEVELOPER,
        'url'          => 'plugin.php?page=IFramed/main&title=WebSVN&url=https://app1.development.pjats.com/svn/web/listing.php%3Frepname=pja%26path=%2Fproject_name%2Ftrunk%2F',
        'icon'         => 'fa-spider',
        'project_id'   => array ( -1 ),
        'no_project_name' => array ( 'Bridge' )
    ),
    array(
        'title'        => 'WebSVN',
        'access_level' => DEVELOPER,
        'url'          => 'plugin.php?page=IFramed/main&title=WebSVN&url=https://app1.development.pjats.com/svn/web/listing.php%3Frepname=pjr%26path=%2FPJBridge%2Ftrunk%2F',
        'icon'         => 'fa-spider',
        'project_name' => array ( 'Bridge' )
    ),
    array(
        'title'        => 'GitHub',
        'access_level' => DEVELOPER,
        'url'          => 'https://github.com/perryjohnsoninc',
        'icon'         => 'fa-github',
        'project_id'   => array ( -1 )
    ),
    array(
        'title'        => 'NPM Registry',
        'access_level' => DEVELOPER,
        'url'          => 'plugin.php?page=IFramed/main&title=PJ%20NPM%20Registry&url=https://npm.development.pjats.com',
        'icon'         => 'fab fa-npm',
        'project_id'   => array ( -1 )
    )/*,
    array(
        'title'        => 'Time Tracking',
        'access_level' => UPDATER,
        'url'          => 'plugin.php?page=IFramed/main&title=PJ%20Time%20Tracking&url=https://app1.development.pjats.com/timetracker',
        'icon'         => 'fa-clock',
        'project_id'   => array ( -1 )
    )*/
);

/*
$g_main_menu_custom_options = array(
    array(
        'title'        => 'Developer Doc',
        'access_level' => DEVELOPER,
        'url'          => 'plugin.php?page=IFramed/main&title=Developer%20Doc&url=https://app1.development.pjats.com/doc/developernotes.md',
        'icon'         => 'fa-book'
    )
);
*/

#}

#$gems_user_field_id = 16;
#$unit_test_status_field_id = 31;
#$gems_user_text = "GEMS2 USer";

#$g_my_view_boxes = array(
#    'assigned'      => '1',
#    'unassigned'    => '2',
#    'reported'      => '3',
#    'resolved'      => '4',
#    'recent_mod'    => '5',
#    'monitored'     => '6',
#    'feedback'      => '0',
#    'verify'        => '0',
#    'my_comments'   => '0',
#    'gems_user'     => '7'
#);

#$g_main_menu_custom_options = array(
#    array( 
#        'title'        => 'My Link',
#        'access_level' => MANAGER,
#        'url'          => 'my_link.php',
#        'icon'         => 'fa-plug'
#    ),
#    array( 
#        'title'        => 'My Link2',
#        'access_level' => ADMINISTRATOR,
#        'url'          => 'my_link2.php',
#        'icon'         => 'fa-plug'
#    )
#);

#$g_view_issues_page_columns = array(
#        'selection', 'edit', 'priority', 'id', 'sponsorship_total',
#        'bugnotes_count', 'attachment_count', 'Type', 'category_id', 'severity', 'status',
#        'last_updated', 'summary'
#);


#$g_print_issues_page_columns = array(
#        'selection', 'priority', 'id', 'sponsorship_total', 'bugnotes_count',
#        'attachment_count', 'type', 'category_id', 'severity', 'status', 'last_updated',
#        'summary'
#);

#$g_csv_columns = array(
#        'id', 'project_id', 'reporter_id', 'handler_id', 'priority',
#        'severity', 'reproducibility', 'version', 'projection', 'type', 'category_id',
#        'date_submitted', 'eta', 'os', 'os_build', 'platform', 'view_state',
#        'last_updated', 'summary', 'status', 'resolution', 'fixed_in_version'
#);
#$g_excel_columns = array(
#        'id', 'project_id', 'reporter_id', 'handler_id', 'priority', 'severity',
#        'reproducibility', 'version', 'projection', 'type', 'category_id',
#        'date_submitted', 'eta', 'os', 'os_build', 'platform', 'view_state',
#        'last_updated', 'summary', 'status', 'resolution', 'fixed_in_version'
#);


#//global $g_custom_field_type_definition;
#//$g_custom_field_type_definition[CUSTOM_FIELD_TYPE_STRING]['#function_default_to_value'] = 'cfdef_prepare_string_default';
#$g_custom_field_type_definition[CUSTOM_FIELD_TYPE_STRING] = array (
#	'#display_possible_values' => true,
#	'#display_valid_regexp' => true,
#	'#display_length_min' => true,
#	'#display_length_max' => true,
#	'#display_default_value' => true,
#	'#function_return_distinct_values' => null,
#	# MySQL 4-bytes UTF-8 chars workaround #21101
#	'#function_value_to_database' => 'db_mysql_fix_utf8',
#	'#function_database_to_value' => null,
#	'#function_default_to_value' => 'cfdef_prepare_string_default',
#	'#function_print_input' => 'cfdef_input_textbox',
#	'#function_print_value' => null,
#	'#function_string_value' => 'cfdef_prepare_string',
#	'#function_string_value_for_email' => null,
#);

function cfdef_prepare_string_default( $p_value ) {
	if( is_blank( $p_value ) ) {
		return '';
	}

	$t_value = trim( $p_value );
	$t_value_length = mb_strlen( $t_value );

	# We are expanding {user} to username
	if( $t_value_length >= 3 && $t_value[0] == '{' && $t_value[$t_value_length - 1] == '}' ) {
		$t_value = mb_substr( $t_value, 1, $t_value_length - 2 );
		if ($t_value == 'user') {
            $t_user_id = auth_get_current_user_id();
            if ( $t_user_id > 0 ) {
                $t_value = user_get_username( $t_user_id  );
            }
		}
	}

	return $t_value;
}

