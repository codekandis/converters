<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\Tests\UnitTests\BiDirectionalConverters;

use CodeKandis\Converters\Tests\DataProviders\UnitTests\BiDirectionalConverters\NullableBooleanIntegerToNullableBooleanBiDirectionalConverterInterfaceTest\BiDirectionalConvertersWithInvalidToValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use CodeKandis\Converters\BiDirectionalConverters\NullableBooleanIntegerToNullableBooleanBiDirectionalConverterInterface;
use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\InvalidValueExceptionInterface;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use Throwable;

/**
 * Represents the test case of `CodeKandis\Converters\BiDirectionalConverters\NullableBooleanIntegerToNullableBooleanBiDirectionalConverterInterface`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableBooleanIntegerToNullableBooleanBiDirectionalConverterInterfaceTest extends TestCase
{
	/**
	 * Tests if the method `NullableBooleanIntegerToNullableBooleanBiDirectionalConverterInterface::convert()` throws a `CodeKandis\Types\InvalidValueExceptionInterface` on an invalid value.
	 * @param NullableBooleanIntegerToNullableBooleanBiDirectionalConverterInterface $biDirectionalConverter The bidirectional converter to test.
	 * @param mixed $invalidToValue The invalid to value to pass.
	 * @param string $expectedThrowableClassName The expected throwable class name.
	 * @param string $expectedThrowableMessage The expected throwable message.
	 */
	#[DataProviderExternal( BiDirectionalConvertersWithInvalidToValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodConvertToThrowsInvalidValueExceptionInterfaceOnInvalidToValue( nullableBooleanIntegerToNullableBooleanBiDirectionalConverterInterface $biDirectionalConverter, mixed $invalidToValue, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
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
