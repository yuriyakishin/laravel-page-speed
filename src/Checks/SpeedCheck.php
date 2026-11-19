<?php

declare(strict_types=1);

namespace Yu\PageSpeed\Checks;

use Yu\PageSpeed\Data\Snapshot;
use Yu\WebToolsCore\Checklist\Check;

/**
 * One rule of the report. Its title, description and advice are translations under messages.checks.{code}.
 */
interface SpeedCheck
{
    public function run(Snapshot $site): Check;
}
