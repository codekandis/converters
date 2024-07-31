<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\Tests\UnitTests;

use CodeKandis\Converters\Tests\DataProviders\UnitTests\ValidValuesInterfaceTest\ValidValuesClassNamesWithFormatAndExpectedDateTimeStringDataProvider;
use CodeKandis\Converters\ValidValuesInterface;
use CodeKandis\PhpUnit\TestCase;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of `CodeKandis\Converters\ValidValuesInterface`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidValuesInterfaceTest extends TestCase
{
	/**
	 * Tests if the method `ValidValuesInterface::createDateTimeString()` returns the `DateTime string` correctly.
	 * @param string $typesClassName The class name of the valid values to test.
	 * @param string $format The format to pass.
	 * @param string $expectedDateTimeString The expected `DateTime string`.
	 */
	#[DataProviderExternal( ValidValuesClassNamesWithFormatAndExpectedDateTimeStringDataProvider::class, 'provideData' )]
	public function testIfMethodCreateTypedResourceReturnsTypedResourceCorrectly( string $typesClassName, string $format, string $expectedDateTimeString ): void
	{
		/**
		 * @var ValidValuesInterface $typesClassName
		 */
		$resultedDateTimeString = $typesClassName::createDateTimeString( $format );

		static::assertEquals( $expectedDateTimeString, $resultedDateTimeString );
	}
}
