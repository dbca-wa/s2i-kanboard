<?php

/*******************************************************************/
/* Rename this file to config.php if you want to change the values */
/*******************************************************************/

// Enable/Disable debug
define('DEBUG', $_ENV['DEBUG'] ?? false;);

// Debug file path
define('DEBUG_FILE', '/data/debug.log');

// Plugins directory
define('PLUGINS_DIR', 'plugins');

// Folder for uploaded files
define('FILES_DIR', '/data/files');

// E-mail address for the "From" header (notifications)
define('MAIL_FROM', $_ENV['MAIL_FROM']);

// Mail transport available: "smtp", "sendmail", "mail" (PHP mail function), "postmark", "mailgun", "sendgrid"
define('MAIL_TRANSPORT', 'smtp');

// SMTP configuration to use when the "smtp" transport is chosen
define('MAIL_SMTP_HOSTNAME', $_ENV['SMTP_HOST']);
define('MAIL_SMTP_PORT', $_ENV['SMTP_PORT']);
define('MAIL_SMTP_USERNAME', '');
define('MAIL_SMTP_PASSWORD', '');
define('MAIL_SMTP_ENCRYPTION', null); // Valid values are "null", "ssl" or "tls"

// Database driver: sqlite, mysql or postgres (sqlite by default)
define('DB_DRIVER', 'postgres');

// Mysql/Postgres username
define('DB_USERNAME', $_ENV['DB_USERNAME']);

// Mysql/Postgres password
define('DB_PASSWORD', $_ENV['DB_PASSWORD']);

// Mysql/Postgres hostname
define('DB_HOSTNAME', $_ENV['DB_HOSTNAME']);

// Mysql/Postgres database name
define('DB_NAME', $_ENV['DB_NAME']);

// Mysql/Postgres custom port (null = default port)
define('DB_PORT', null);

// Enable/disable the reverse proxy authentication
define('REVERSE_PROXY_AUTH', true);

// Header name to use for the username
define('REVERSE_PROXY_USER_HEADER', 'REMOTE_USER');

// Username of the admin, by default blank
define('REVERSE_PROXY_DEFAULT_ADMIN', $_ENV['DEFAULT_ADMIN']);

// Default domain to use for setting the email address
define('REVERSE_PROXY_DEFAULT_DOMAIN', '');

// Enable/disable remember me authentication
define('REMEMBER_ME_AUTH', true);

// Enable or disable "Strict-Transport-Security" HTTP header
define('ENABLE_HSTS', true);

// Enable or disable "X-Frame-Options: DENY" HTTP header
define('ENABLE_XFRAME', true);

// Enable syslog logging
define('ENABLE_SYSLOG', true);

// Escape html inside markdown text
define('MARKDOWN_ESCAPE_HTML', false);

// API alternative authentication header, the default is HTTP Basic Authentication defined in RFC2617
define('API_AUTHENTICATION_HEADER', '');

// Enable/disable url rewrite
define('ENABLE_URL_REWRITE', false);

// Hide login form, useful if all your users use Google/Github/ReverseProxy authentication
define('HIDE_LOGIN_FORM', false);

// Enable captcha after 3 authentication failure
define('BRUTEFORCE_CAPTCHA', 3);

// Lock the account after 6 authentication failure
define('BRUTEFORCE_LOCKDOWN', 6);

// Lock account duration in minute
define('BRUTEFORCE_LOCKDOWN_DURATION', 15);

// Session duration in second (0 = until the browser is closed)
// See http://php.net/manual/en/session.configuration.php#ini.session.cookie-lifetime
define('SESSION_DURATION', 0);

