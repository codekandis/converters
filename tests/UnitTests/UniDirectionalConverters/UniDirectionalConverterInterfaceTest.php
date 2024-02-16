<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\Tests\UnitTests\UniDirectionalConverters;

use CodeKandis\Converters\Tests\DataProviders\UnitTests\UniDirectionalConverters\UniDirectionalConverterInterfaceTest\UniDirectionalConvertersWithInvalidTypedValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use CodeKandis\Converters\Tests\DataProviders\UnitTests\UniDirectionalConverters\UniDirectionalConverterInterfaceTest\UniDirectionalConvertersWithValidValueAndExpectedConvertedValueDataProvider;
use CodeKandis\Converters\UniDirectionalConverters\UniDirectionalConverterInterface;
use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\InvalidTypeExceptionInterface;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use Throwable;
use function is_object;

/**
 * Represents the test case of `CodeKandis\Converters\UniDirectionalConverters\UniDirectionalConverterInterface`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class UniDirectionalConverterInterfaceTest extends TestCase
{
	/**
	 * Tests if the method `UniDirectionalConverterInterface::convert()` throws a `CodeKandis\Types\InvalidTypeExceptionInterface` on an invalid value type.
	 * @param UniDirectionalConverterInterface $uniDirectionalConverter The unidirectional converter to test.
	 * @param mixed $invalidTypedValue The invalid typed value to pass.
	 * @param string $expectedThrowableClassName The expected throwable class name.
	 * @param string $expectedThrowableMessage The expected throwable message.
	 */
	#[DataProviderExternal( UniDirectionalConvertersWithInvalidTypedValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodConvertThrowsInvalidTypeExceptionInterfaceOnInvalidValueType( UniDirectionalConverterInterface $uniDirectionalConverter, mixed $invalidTypedValue, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		try
		{
			$uniDirectionalConverter->convert( $invalidTypedValue );
		}
		catch ( Throwable $throwable )
		{
			$resultedThrowableMessage = $throwable->getMessage();

			static::assertInstanceOf( InvalidTypeExceptionInterface::class, $throwable );
			static::assertInstanceOf( $expectedThrowableClassName, $throwable );
			static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
		}
	}

	/**
	 * Tests if the method `UniDirectionalConverterInterface::convert()` converts a valid value correctly.
	 * @param UniDirectionalConverterInterface $uniDirectionalConverter The unidirectional converter to test.
	 * @param mixed $validValue The valid value to pass.
	 * @param mixed $expectedConvertedValue The expected converted value.
	 */
	#[DataProviderExternal( UniDirectionalConvertersWithValidValueAndExpectedConvertedValueDataProvider::class, 'provideData' )]
	public function testIfMethodConvertConvertsValidValueCorrectly( UniDirectionalConverterInterface $uniDirectionalConverter, mixed $validValue, mixed $expectedConvertedValue ): void
	{
		$resultedConvertedValue = $uniDirectionalConverter->convert( $validValue );

		if ( false === is_object( $resultedConvertedValue ) )
		{
			static::assertSame( $expectedConvertedValue, $resultedConvertedValue );
		}
		else
		{
			static::assertEquals( $expectedConvertedValue, $resultedConvertedValue );
		}
	}
}
