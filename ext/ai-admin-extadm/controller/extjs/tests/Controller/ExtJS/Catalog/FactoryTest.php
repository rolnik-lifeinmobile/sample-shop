<?php

namespace Aimeos\Controller\ExtJS\Catalog;


/**
 * @license LGPLv3, http://opensource.org/licenses/LGPL-3.0
 * @copyright Metaways Infosystems GmbH, 2011
 * @copyright Aimeos (aimeos.org), 2015-2017
 */
class FactoryTest extends \PHPUnit\Framework\TestCase
{
	public function testCreateController()
	{
		$obj = \Aimeos\Controller\ExtJS\Catalog\Factory::createController( \TestHelperExtjs::getContext() );
		$this->assertInstanceOf( '\\Aimeos\\Controller\\ExtJS\\Iface', $obj );
	}


	public function testFactoryExceptionWrongName()
	{
		$this->setExpectedException( '\\Aimeos\\Controller\\ExtJS\\Exception' );
		\Aimeos\Controller\ExtJS\Catalog\Factory::createController( \TestHelperExtjs::getContext(), 'Wrong$$$Name' );
	}

	public function testFactoryExceptionWrongClass()
	{
		$this->setExpectedException( '\\Aimeos\\Controller\\ExtJS\\Exception' );
		\Aimeos\Controller\ExtJS\Catalog\Factory::createController( \TestHelperExtjs::getContext(), 'WrongClass' );
	}

	public function testFactoryExceptionWrongInterface()
	{
		$this->setExpectedException( '\\Aimeos\\Controller\\ExtJS\\Exception' );
		\Aimeos\Controller\ExtJS\Catalog\Factory::createController( \TestHelperExtjs::getContext(), 'Factory' );
	}

}
