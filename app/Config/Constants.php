<?php

/*
 | --------------------------------------------------------------------
 | App Namespace
 | --------------------------------------------------------------------
 |
 | This defines the default Namespace that is used throughout
 | CodeIgniter to refer to the Application directory. Change
 | this constant to change the namespace that all application
 | classes should use.
 |
 | NOTE: changing this will require manually modifying the
 | existing namespaces of App\* namespaced-classes.
 */
defined('APP_NAMESPACE') || define('APP_NAMESPACE', 'App');

/*
 | --------------------------------------------------------------------------
 | Composer Path
 | --------------------------------------------------------------------------
 |
 | The path that Composer's autoload file is expected to live. By default,
 | the vendor folder is in the Root directory, but you can customize that here.
 */
defined('COMPOSER_PATH') || define('COMPOSER_PATH', ROOTPATH . 'vendor/autoload.php');

/*
 |--------------------------------------------------------------------------
 | Timing Constants
 |--------------------------------------------------------------------------
 |
 | Provide simple ways to work with the myriad of PHP functions that
 | require information to be in seconds.
 */
defined('SECOND') || define('SECOND', 1);
defined('MINUTE') || define('MINUTE', 60);
defined('HOUR')   || define('HOUR', 3600);
defined('DAY')    || define('DAY', 86400);
defined('WEEK')   || define('WEEK', 604800);
defined('MONTH')  || define('MONTH', 2_592_000);
defined('YEAR')   || define('YEAR', 31_536_000);
defined('DECADE') || define('DECADE', 315_360_000);

/*
 | --------------------------------------------------------------------------
 | Exit Status Codes
 | --------------------------------------------------------------------------
 |
 | Used to indicate the conditions under which the script is exit()ing.
 | While there is no universal standard for error codes, there are some
 | broad conventions.  Three such conventions are mentioned below, for
 | those who wish to make use of them.  The CodeIgniter defaults were
 | chosen for the least overlap with these conventions, while still
 | leaving room for others to be defined in future versions and user
 | applications.
 |
 | The three main conventions used for determining exit status codes
 | are as follows:
 |
 |    Standard C/C++ Library (stdlibc):
 |       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
 |       (This link also contains other GNU-specific conventions)
 |    BSD sysexits.h:
 |       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
 |    Bash scripting:
 |       http://tldp.org/LDP/abs/html/exitcodes.html
 |
 */
defined('EXIT_SUCCESS')        || define('EXIT_SUCCESS', 0);        // no errors
defined('EXIT_ERROR')          || define('EXIT_ERROR', 1);          // generic error
defined('EXIT_CONFIG')         || define('EXIT_CONFIG', 3);         // configuration error
defined('EXIT_UNKNOWN_FILE')   || define('EXIT_UNKNOWN_FILE', 4);   // file not found
defined('EXIT_UNKNOWN_CLASS')  || define('EXIT_UNKNOWN_CLASS', 5);  // unknown class
defined('EXIT_UNKNOWN_METHOD') || define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     || define('EXIT_USER_INPUT', 7);     // invalid user input
defined('EXIT_DATABASE')       || define('EXIT_DATABASE', 8);       // database error
defined('EXIT__AUTO_MIN')      || define('EXIT__AUTO_MIN', 9);      // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      || define('EXIT__AUTO_MAX', 125);    // highest automatically-assigned error code

/**
 * @deprecated Use \CodeIgniter\Events\Events::PRIORITY_LOW instead.
 */
define('EVENT_PRIORITY_LOW', 200);

/**
 * @deprecated Use \CodeIgniter\Events\Events::PRIORITY_NORMAL instead.
 */
define('EVENT_PRIORITY_NORMAL', 100);

/**
 * @deprecated Use \CodeIgniter\Events\Events::PRIORITY_HIGH instead.
 */
define('EVENT_PRIORITY_HIGH', 10);

// =============================================================================
// ================================ Panel Setting ==============================
// =============================================================================
/* AWS Setting */
define('S3_REGION', 'ap-south-1');
define('S3_SECRET', '135AegeYZSSn6kHOU0ospt8WdFCD6NIpzSubiIZD');
// define("AUTH_KEY", "584689756845214785698542");
define('BUCKET_NAME', 'dummy-datas-bucket');
define('BANNER_PATH', 'banners/');
define('FRONT_FILE', 'developer-front/');
define('BACK_FILE', 'developer-back/');

/* Common Setting */
define('URL', 'https://syphnosys.com/appmaster/');
define('COPYRIGHT', 'Copyright © 2019-2025 Reserved By - Syphnosys Technology Private Limited.');
define('TITLE', 'AppMaster Panel');
define('OTP', 'macncloud');

/* Database Setting */
define('HOST', 'localhost');
define('USER', 'syphnosy_root');
define('PASS', 'SYS@dev#web#cloud#12');
define('DB', 'syphnosys_appmaster');

// =============================================================================
// =============================== Table Setting ===============================
// =============================================================================
define('USER_ADMIN_TABLE', 'user_admin');
define('ANDROID_APPS_TABLE', 'android_apps');
define('ANDROID_VERSION_TABLE', 'android_version');
define('ANDROID_SUBSCRIPTION_TABLE', 'android_subscription');
define('ANDROID_ROI_TABLE', 'android_roi');
define('ANDROID_PRIVACY_TABLE', 'android_privacy');
define('ANDROID_JSON_TABLE', 'android_json');
define('ANDROID_AD_TABLE', 'android_ad');
define('ANDROID_DEVELOPER_TABLE', 'android_developer');
define('ANDROID_CONCEPT_TABLE', 'android_concept');
define('ANDROID_BANNER_TABLE', 'android_banner');
define('ANDROID_COMMON_JSON_TABLE', 'android_common_json');
define('ANDROID_DEVICE_TABLE', 'inhouse_device');
define('ANDROID_IP_TABLE', 'inhouse_ip');
define('ACCOUNT_GMAIL_TABLE', 'account_gmail');
define('ACCOUNT_FACEBOOK_TABLE', 'account_facebook');
define('ANDROID_SIMCARD_TABLE', 'android_simcard');
define('ANDROID_FEEDBACK_TABLE', 'android_feedback');