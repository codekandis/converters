<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\Tests\UnitTests\UniDirectionalConverters;

use CodeKandis\Converters\Tests\DataProviders\UnitTests\UniDirectionalConverters\BinaryStringToBoolArrayUniDirectionalConverterInterfaceTest\UniDirectionalConvertersWithInvalidValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use CodeKandis\Converters\UniDirectionalConverters\BinaryStringToBoolArrayUniDirectionalConverterInterface;
use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\InvalidValueExceptionInterface;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use Throwable;

/**
 * Represents the test case of `CodeKandis\Converters\UniDirectionalConverters\BinaryStringToBoolArrayUniDirectionalConverterInterface`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class BinaryStringToBoolArrayUniDirectionalConverterInterfaceTest extends TestCase
{
	/**
	 * Tests if the method `BinaryStringToBoolArrayUniDirectionalConverterInterface::convert()` throws a `CodeKandis\Types\InvalidValueExceptionInterface` on an invalid value.
	 * @param BinaryStringToBoolArrayUniDirectionalConverterInterface $binaryStringToBoolArrayUniDirectionalConverter The unidirectional converter to test.
	 * @param mixed $invalidValue The invalid value to pass.
	 * @param string $expectedThrowableClassName The expected throwable class name.
	 * @param string $expectedThrowableMessage The expected throwable message.
	 */
	#[DataProviderExternal( UniDirectionalConvertersWithInvalidValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodConvertThrowsInvalidValueExceptionInterfaceOnInvalidValue( BinaryStringToBoolArrayUniDirectionalConverterInterface $binaryStringToBoolArrayUniDirectionalConverter, mixed $invalidValue, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		try
		{
			$binaryStringToBoolArrayUniDirectionalConverter->convert( $invalidValue );
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