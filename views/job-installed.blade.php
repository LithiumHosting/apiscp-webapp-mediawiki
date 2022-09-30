@component('email.indicator', ['status' => 'success'])
	Your application is installed.
@endcomponent

@component('mail::message')
	{{-- Body --}}
	# Howdy!

	{{ $appname }} has been successfully installed on {{ $uri }}!

	## Admin panel
	You can access the panel at [{{$proto}}{{$uri}}{{LithiumHosting\WebApps\MediaWiki\Handler::ADMIN_PATH}}]({{$proto}}{{$uri}}{{LithiumHosting\WebApps\MediaWiki\Handler::ADMIN_PATH}}) using the following information:

	**Login**: `{{ str_replace('@', '\\@', $email) }}`<br/>
	**Password**: `{{ str_replace('@', '\\@', $password) }}`

	---

	@include('email.webapps.common-footer')
@endcomponent