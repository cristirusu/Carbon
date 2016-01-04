<?php

/*
 * This file is part of the Carbon package.
 *
 * (c) Brian Nesbitt <brian@nesbot.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests\Carbon;

use Carbon\Carbon;
use Tests\AbstractTestCase;

class IssetTest extends AbstractTestCase
{
    public function testIssetReturnFalseForUnknownProperty()
    {
        $this->assertFalse(isset(Carbon::create(1234, 5, 6, 7, 8, 9)->sdfsdfss));
    }

    public function testIssetReturnTrueForProperties()
    {
        $properties = array(
            'age',
            'day',
            'dayOfWeek',
            'dayOfYear',
            'daysInMonth',
            'dst',
            'hour',
            'local',
            'micro',
            'minute',
            'month',
            'offset',
            'offsetHours',
            'quarter',
            'second',
            'timestamp',
            'timezone',
            'timezoneName',
            'tz',
            'tzName',
            'utc',
            'weekOfMonth',
            'weekOfYear',
            'year',
        );

        foreach ($properties as $property) {
            $this->assertTrue(isset(Carbon::create(1234, 5, 6, 7, 8, 9)->$property));
        }
    }
}
