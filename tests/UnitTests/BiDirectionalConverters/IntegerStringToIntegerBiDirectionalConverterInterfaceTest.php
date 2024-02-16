<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\Tests\UnitTests\BiDirectionalConverters;

use CodeKandis\Converters\Tests\DataProviders\UnitTests\BiDirectionalConverters\IntegerStringToIntegerBiDirectionalConverterInterfaceTest\BiDirectionalConvertersWithInvalidToValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use CodeKandis\Converters\BiDirectionalConverters\IntegerStringToIntegerBiDirectionalConverterInterface;
use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\InvalidValueExceptionInterface;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use Throwable;

/**
 * Represents the test case of `CodeKandis\Converters\BiDirectionalConverters\IntegerStringToIntegerBiDirectionalConverterInterface`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class IntegerStringToIntegerBiDirectionalConverterInterfaceTest extends TestCase
{
	/**
	 * Tests if the method `IntegerStringToIntegerBiDirectionalConverterInterface::convert()` throws a `CodeKandis\Types\InvalidValueExceptionInterface` on an invalid value.
	 * @param IntegerStringToIntegerBiDirectionalConverterInterface $biDirectionalConverter The bidirectional converter to test.
	 * @param mixed $invalidToValue The invalid to value to pass.
	 * @param string $expectedThrowableClassName The expected throwable class name.
	 * @param string $expectedThrowableMessage The expected throwable message.
	 */
	#[DataProviderExternal( BiDirectionalConvertersWithInvalidToValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodConvertToThrowsInvalidValueExceptionInterfaceOnInvalidToValue( integerStringToIntegerBiDirectionalConverterInterface $biDirectionalConverter, mixed $invalidToValue, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		try
		{
			$biDirectionalConverter->convertTo( $invalidToValue );
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
