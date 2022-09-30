<?php

namespace LithiumHosting\WebApps\MediaWiki;

use Module\Support\Webapps\App\Type\Unknown\Handler as Unknown;

class Handler extends Unknown
{
	const NAME       = 'MediaWiki';
	const ADMIN_PATH = "";
	const LINK       = 'https://mediawiki.org';

	const DEFAULT_FORTIFICATION = 'max';
	const FEAT_ALLOW_SSL        = true;
	const FEAT_RECOVERY         = false;
	const FEAT_GIT              = false;

	public function display(): bool
	{
		return version_compare($this->php_version(), '7.2', '>=');
	}

	public function hasUpdate(): bool
	{
		return false;
	}
}