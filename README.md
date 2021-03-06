# ApisCP Mediawiki application

This is a web application for [ApisCP](https://apiscp.com).

## Installation

```bash
cd /usr/local/apnscp
git clone https://github.com/LithiumHosting/apiscp-webapp-mediawiki config/custom/webapps/mediawiki
./composer dump-autoload -o
```
Edit config/custom/boot.php, create if not exists:

```php
<?php
	\a23r::registerModule('limediawiki', \lithiumhosting\mediawiki\Mediawiki_Module::class);
	\Module\Support\Webapps::registerApplication('mediawiki', \apisnetworks\mediawiki\Handler::class);
```

Then restart ApisCP.

```bash
systemctl restart apiscp
```

Voila!

## Learning more
All third-party documentation is available via [docs.apiscp.com](https://docs.apiscp.com/admin/webapps/Custom/).
