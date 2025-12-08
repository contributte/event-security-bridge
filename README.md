![](https://heatbadger.now.sh/github/readme/contributte/event-security-bridge/?deprecated=1)

<p align=center>
    <a href="https://bit.ly/ctteg"><img src="https://badgen.net/badge/support/gitter/cyan"></a>
    <a href="https://bit.ly/cttfo"><img src="https://badgen.net/badge/support/forum/yellow"></a>
    <a href="https://contributte.org/partners.html"><img src="https://badgen.net/badge/sponsor/donations/F96854"></a>
</p>

<p align=center>
    Website 🚀 <a href="https://contributte.org">contributte.org</a> | Contact 👨🏻‍💻 <a href="https://f3l1x.io">f3l1x.io</a> | Twitter 🐦 <a href="https://twitter.com/contributte">@contributte</a>
</p>

## Disclaimer

| :warning: | This project is no longer being maintained. Please use [contributte/event-dispatcher-extra](https://github.com/contributte/event-dispatcher-extra).
|---|---|

| Composer | [`contributte/event-security-bridge`](https://packagist.org/packages/contributte/event-security-bridge) |
|---| --- |
| Version | ![](https://badgen.net/packagist/v/contributte/event-security-bridge) |
| PHP | ![](https://badgen.net/packagist/php/contributte/event-security-bridge) |
| License | ![](https://badgen.net/github/license/contributte/event-security-bridge) |

## Versions

| State       | Version | Branch   | PHP      |
|-------------|---------|----------|----------|
| stable      | `^0.1`  | `master` | `>= 5.6` |

## Usage :tada:

```neon
extensions:
	events: Contributte\EventDispatcher\DI\EventDispatcherExtension
	events2security: Contributte\Events\Bridges\Security\DI\EventSecurityBridgeExtension
```

### Bridge :wrench:

There are several Nette Security events on which you can listen to.

```php
use Contributte\Events\Bridges\Security\Event\LoggedInEvent;
use Contributte\Events\Bridges\Security\Event\LoggedOutEvent;
```

- `LoggedInEvent::NAME` && `SecurityEvents::ON_LOGGED_IN`
- `LoggedOutEvent::NAME` && `SecurityEvents::ON_LOGGED_OUT`

### Subscriber :bulb:

```php
use Contributte\EventDispatcher\EventSubscriber;
use Contributte\Events\Bridges\Security\Event\LoggedInEvent;
use Contributte\Events\Bridges\Security\Event\SecurityEvents;

final class LoggedInSubscriber implements EventSubscriber
{

	/**
	 * @return array
	 */
	public static function getSubscribedEvents()
	{
		return [SecurityEvents::ON_LOGGED_IN => 'onLoggedIn'];
	}

	/**
	 * @param LoggedInEvent $event
	 * @return void
	 */
	public function onLoggedIn(LoggedInEvent $event)
	{
		// do magic
	}

}
```

## Development

This package was maintained by these authors.

<a href="https://github.com/f3l1x">
  <img width="80" height="80" src="https://avatars2.githubusercontent.com/u/538058?v=3&s=80">
</a>

-----

Consider to [support](https://contributte.org/partners.html) **contributte** development team.
Also thank you for using this package.
