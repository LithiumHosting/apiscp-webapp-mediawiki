# ApisCP Mediawiki application

This is a web application for [ApisCP](https://apiscp.com).

## Installation

```bash
cd /usr/local/apnscp
mkdir -p config/custom/webapps
git clone https://github.com/LithiumHosting/apiscp-webapp-mediawiki config/custom/webapps/mediawiki
./composer dump-autoload -o
```
Edit config/custom/boot.php, create if not exists:

```php
<?php
	\a23r::registerModule('mediawiki', \LithiumHosting\WebApps\MediaWiki\MediaWiki_Module::class);
	\Module\Support\Webapps::registerApplication('mediawiki', \LithiumHosting\WebApps\MediaWiki\Handler::class);
```

Then refresh the web apps
```bash
cpcmd webapp:refresh-apps
```

Voila!

## Learning more
All third-party documentation is available via [docs.apiscp.com](https://docs.apiscp.com/admin/webapps/Custom/).
