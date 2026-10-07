<?php

namespace Resque {
    if (!class_exists(Resque::class) && class_exists(\Resque::class)) {
        class Resque extends \Resque {}
    }

    if (!class_exists(FailureHandler::class) && class_exists(\Resque_Failure::class)) {
        class FailureHandler extends \Resque_Failure {}
    }

    if (!class_exists(Stat::class) && class_exists(\Resque_Stat::class)) {
        class Stat extends \Resque_Stat {}
    }
}

namespace Resque\Failure {
    if (!interface_exists(FailureInterface::class) && interface_exists(\Resque_Failure_Interface::class)) {
        interface FailureInterface extends \Resque_Failure_Interface {}
    }
}
