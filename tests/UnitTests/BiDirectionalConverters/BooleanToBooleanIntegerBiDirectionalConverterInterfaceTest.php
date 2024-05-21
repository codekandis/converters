<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\Tests\UnitTests\BiDirectionalConverters;

use CodeKandis\Converters\BiDirectionalConverters\BooleanToBooleanIntegerBiDirectionalConverterInterface;
use CodeKandis\Converters\Tests\DataProviders\UnitTests\BiDirectionalConverters\BooleanToBooleanIntegerBiDirectionalConverterInterfaceTest\BiDirectionalConvertersWithInvalidFromValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\InvalidValueExceptionInterface;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use Throwable;

/**
 * Represents the test case of `CodeKandis\Converters\BiDirectionalConverters\BooleanToBooleanIntegerBiDirectionalConverterInterface`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class BooleanToBooleanIntegerBiDirectionalConverterInterfaceTest extends TestCase
{
	/**
	 * Tests if the method `BooleanToBooleanIntegerBiDirectionalConverterInterface::convert()` throws a `CodeKandis\Types\InvalidValueExceptionInterface` on an invalid value.
	 * @param BooleanToBooleanIntegerBiDirectionalConverterInterface $biDirectionalConverter The bidirectional converter to test.
	 * @param mixed $invalidFromValue The invalid from value to pass.
	 * @param string $expectedThrowableClassName The expected throwable class name.
	 * @param string $expectedThrowableMessage The expected throwable message.
	 */
	#[DataProviderExternal( BiDirectionalConvertersWithInvalidFromValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodConvertFromThrowsInvalidValueExceptionInterfaceOnInvalidFromValue( booleanToBooleanIntegerBiDirectionalConverterInterface $biDirectionalConverter, mixed $invalidFromValue, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		try
		{
			$biDirectionalConverter->convertFrom( $invalidFromValue );
		}
		catch ( Throwable $throwable )
		{
			static::assertInstanceOf( InvalidValueExceptionInterface::class, $throwable );
			static::assertInstanceOf( $expectedThrowableClassName, $throwable );
			static::assertSame(
				$expectedThrowableMessage,
				$throwable->getMessage()
			);
		}
	}
}