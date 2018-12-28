<?php
/**
 * Created by PhpStorm.
 * User: chenchangqin
 * Date: 2018/12/28
 * Time: 9:46
 */

namespace Tests\More\ServiceLocatorTest;

use More\ServiceLocator\ServiceLocator;
use More\ServiceLocator\LogService;
use More\ServiceLocator\DatabaseService;

class ServiceLocatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var LogService
     */
    private $logService;

    /**
     * @var DatabaseService
     */
    private $databaseService;

    /**
     * @var ServiceLocator
     */
    private $serviceLocator;

    public function setUp()
    {
        $this->serviceLocator  = new ServiceLocator();
        $this->logService      = new LogService();
        $this->databaseService = new DatabaseService();
    }

    public function testHasServices()
    {
        $this->serviceLocator->add(
            'More\ServiceLocator\LogServiceInterface',
            $this->logService
        );

        $this->serviceLocator->add(
            'More\ServiceLocator\DatabaseServiceInterface',
            $this->databaseService
        );

        $this->assertTrue($this->serviceLocator->has('More\ServiceLocator\LogServiceInterface'));
        $this->assertTrue($this->serviceLocator->has('More\ServiceLocator\DatabaseServiceInterface'));

        $this->assertFalse($this->serviceLocator->has('More\ServiceLocator\FakeServiceInterface'));
    }

    public function testServicesWithObject()
    {
        $this->serviceLocator->add(
            'More\ServiceLocator\LogServiceInterface',
            $this->logService
        );

        $this->serviceLocator->add(
            'More\ServiceLocator\DatabaseServiceInterface',
            $this->databaseService
        );

        $this->assertSame(
            $this->logService,
            $this->serviceLocator->get('More\ServiceLocator\LogServiceInterface')
        );

        $this->assertSame(
            $this->databaseService,
            $this->serviceLocator->get('More\ServiceLocator\DatabaseServiceInterface')
        );
    }

    public function testServicesWithClass()
    {
        $this->serviceLocator->add(
            'More\ServiceLocator\LogServiceInterface',
            get_class($this->logService)
        );

        $this->serviceLocator->add(
            'More\ServiceLocator\DatabaseServiceInterface',
            get_class($this->databaseService)
        );

        $this->assertNotSame(
            $this->logService,
            $this->serviceLocator->get('More\ServiceLocator\LogServiceInterface')
        );

        $this->assertInstanceOf(
            'More\ServiceLocator\LogServiceInterface',
            $this->serviceLocator->get('More\ServiceLocator\LogServiceInterface')
        );

        $this->assertNotSame(
            $this->databaseService,
            $this->serviceLocator->get('More\ServiceLocator\DatabaseServiceInterface')
        );

        $this->assertInstanceOf(
            'More\ServiceLocator\DatabaseServiceInterface',
            $this->serviceLocator->get('More\ServiceLocator\DatabaseServiceInterface')
        );
    }

    public function testServicesNotShared()
    {
        $this->serviceLocator->add(
            'More\ServiceLocator\LogServiceInterface',
            $this->logService,
            false
        );

        $this->serviceLocator->add(
            'More\ServiceLocator\DatabaseServiceInterface',
            $this->databaseService,
            false
        );

        $this->assertNotSame(
            $this->logService,
            $this->serviceLocator->get('More\ServiceLocator\LogServiceInterface')
        );

        $this->assertInstanceOf(
            'More\ServiceLocator\LogServiceInterface',
            $this->serviceLocator->get('More\ServiceLocator\LogServiceInterface')
        );

        $this->assertNotSame(
            $this->databaseService,
            $this->serviceLocator->get('More\ServiceLocator\DatabaseServiceInterface')
        );

        $this->assertInstanceOf(
            'More\ServiceLocator\DatabaseServiceInterface',
            $this->serviceLocator->get('More\ServiceLocator\DatabaseServiceInterface')
        );
    }
}
