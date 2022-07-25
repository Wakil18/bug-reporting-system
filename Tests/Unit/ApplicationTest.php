<?php

namespace Tests\Units;

use App\Helpers\App;
use PHPUnit\Framework\TestCase;

class ApplicationTest extends TestCase
{
    public function testItCanGetinstanceOfApplication()
    {
        self::assertInstanceOf(App::class, new App);
    }
    /**
     * To check if ot can get basic application data set
     */
    public function testItCanGetBasicApplicationDatasetFromAppClass()
    {
        $application = new App;
        self::assertTrue($application->isRunningFromConsole());
        self::assertSame('test', $application->getEnvironment());
        self::assertNotNull($application->getLogPath());
        $this->assertInstanceOf(\DateTime::class, $application->getServerTime());
    }

}