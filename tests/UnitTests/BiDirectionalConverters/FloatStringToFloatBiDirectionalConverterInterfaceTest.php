<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\Tests\UnitTests\BiDirectionalConverters;

use CodeKandis\Converters\Tests\DataProviders\UnitTests\BiDirectionalConverters\FloatStringToFloatBiDirectionalConverterInterfaceTest\BiDirectionalConvertersWithInvalidToValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use CodeKandis\Converters\BiDirectionalConverters\FloatStringToFloatBiDirectionalConverterInterface;
use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\InvalidValueExceptionInterface;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use Throwable;

/**
 * Represents the test case of `CodeKandis\Converters\BiDirectionalConverters\FloatStringToFloatBiDirectionalConverterInterface`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class FloatStringToFloatBiDirectionalConverterInterfaceTest extends TestCase
{
	/**
	 * Tests if the method `FloatStringToFloatBiDirectionalConverterInterface::convert()` throws a `CodeKandis\Types\InvalidValueExceptionInterface` on an invalid value.
	 * @param FloatStringToFloatBiDirectionalConverterInterface $biDirectionalConverter The bidirectional converter to test.
	 * @param mixed $invalidToValue The invalid to value to pass.
	 * @param string $expectedThrowableClassName The expected throwable class name.
	 * @param string $expectedThrowableMessage The expected throwable message.
	 */
	#[DataProviderExternal( BiDirectionalConvertersWithInvalidToValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodConvertToThrowsInvalidValueExceptionInterfaceOnInvalidToValue( floatStringToFloatBiDirectionalConverterInterface $biDirectionalConverter, mixed $invalidToValue, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
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