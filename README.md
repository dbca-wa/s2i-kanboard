# s2i-kanboard
Kanboard to run on openshift using source 2 image
Env vars:

```
define('DEBUG', $_ENV['DEBUG']);
define('MAIL_FROM', $_ENV['MAIL_FROM']);
define('MAIL_SMTP_HOSTNAME', $_ENV['SMTP_HOST']);
define('MAIL_SMTP_PORT', $_ENV['SMTP_PORT']);
define('DB_USERNAME', $_ENV['DB_USERNAME']);
define('DB_PASSWORD', $_ENV['DB_PASSWORD']);
define('DB_HOSTNAME', $_ENV['DB_HOSTNAME']);
define('DB_NAME', $_ENV['DB_NAME']);
define('REVERSE_PROXY_USER_HEADER', $_ENV['AUTH_HEADER']);
define('REVERSE_PROXY_DEFAULT_ADMIN', $_ENV['DEFAULT_ADMIN']);
```
