# resque-multiple-failure-queues

Add-on for php-resque to allow multiple failure queues

To use:

```php
Resque\FailureHandler::setBackend(Talis\Resque\Failure\RedisMultipleQueues::class);
```

For resque/php-resque <=1.3.6 (non-namespaced), include the `compat.inc.php` file to ensure compatibility:

```php
require_once 'vendor/talis/resque-multiple-failure-queues/compat.inc.php';

Resque\FailureHandler::setBackend(...);
```
