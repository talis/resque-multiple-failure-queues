# resque-multiple-failure-queues
Add-on for php-resque to allow multiple failure queues

To use:
```
\Resque_Failure::setBackend(\Talis\Resque\Failure\RedisMultipleQueues::class);
```