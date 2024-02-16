<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\Tests\UnitTests\BiDirectionalConverters;

use CodeKandis\Converters\BiDirectionalConverters\AbstractBiDirectionalConverter;
use CodeKandis\Converters\Tests\DataProviders\UnitTests\BiDirectionalConverters\AbstractBiDirectionalConverterTest\BiDirectionalConverterClassNamesDataProvider;
use CodeKandis\PhpUnit\TestCase;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of `CodeKandis\Converters\BiDirectionalConverters\AbstractBiDirectionalConverter`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class AbstractBiDirectionalConverterTest extends TestCase
{
	/**
	 * Tests if the method `AbstractBiDirectionalConverter::__construct()` instantiates the converter correctly.
	 * @param string $biDirectionalConverterClassName The class name of the bidirectional converter to test.
	 */
	#[DataProviderExternal( BiDirectionalConverterClassNamesDataProvider::class, 'provideData' )]
	public function testIfConstructorInstantiatesConverterCorrectly( string $biDirectionalConverterClassName ): void
	{
		$resultedBiDirectionalConverter = new $biDirectionalConverterClassName();

		static::assertInstanceOf( AbstractBiDirectionalConverter::class, $resultedBiDirectionalConverter );
	}
}
