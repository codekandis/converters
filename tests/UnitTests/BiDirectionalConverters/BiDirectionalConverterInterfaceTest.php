<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\Tests\UnitTests\BiDirectionalConverters;

use CodeKandis\Converters\BiDirectionalConverters\BiDirectionalConverterInterface;
use CodeKandis\Converters\Tests\DataProviders\UnitTests\BiDirectionalConverters\BiDirectionalConverterInterfaceTest\BiDirectionalConvertersWithInvalidTypedFromValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use CodeKandis\Converters\Tests\DataProviders\UnitTests\BiDirectionalConverters\BiDirectionalConverterInterfaceTest\BiDirectionalConvertersWithInvalidTypedToValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use CodeKandis\Converters\Tests\DataProviders\UnitTests\BiDirectionalConverters\BiDirectionalConverterInterfaceTest\BiDirectionalConvertersWithValidFromValueAndExpectedConvertedFromValueDataProvider;
use CodeKandis\Converters\Tests\DataProviders\UnitTests\BiDirectionalConverters\BiDirectionalConverterInterfaceTest\BiDirectionalConvertersWithValidToValueAndExpectedConvertedToValueDataProvider;
use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\InvalidTypeExceptionInterface;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use Throwable;
use function is_object;

/**
 * Represents the test case of `CodeKandis\Converters\BiDirectionalConverters\BiDirectionalConverterInterface`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class BiDirectionalConverterInterfaceTest extends TestCase
{
	/**
	 * Tests if the method `BiDirectionalConverterInterface::convertTo()` throws a `CodeKandis\Types\InvalidTypeExceptionInterface` on an invalid value type.
	 * @param BiDirectionalConverterInterface $biDirectionalConverter The bidirectional converter to test.
	 * @param mixed $invalidTypedToValue The invalid typed to value to pass.
	 * @param string $expectedThrowableClassName The expected throwable class name.
	 * @param string $expectedThrowableMessage The expected throwable message.
	 */
	#[DataProviderExternal( BiDirectionalConvertersWithInvalidTypedToValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodConvertToThrowsInvalidTypeExceptionInterfaceOnInvalidValueType( BiDirectionalConverterInterface $biDirectionalConverter, mixed $invalidTypedToValue, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		try
		{
			$biDirectionalConverter->convertTo( $invalidTypedToValue );
		}
		catch ( Throwable $throwable )
		{
			static::assertInstanceOf( InvalidTypeExceptionInterface::class, $throwable );
			static::assertInstanceOf( $expectedThrowableClassName, $throwable );
			static::assertSame(
				$expectedThrowableMessage,
				$throwable->getMessage()
			);
		}
	}

	/**
	 * Tests if the method `BiDirectionalConverterInterface::convertTo()` converts a value correctly.
	 * @param BiDirectionalConverterInterface $biDirectionalConverter The bidirectional converter to test.
	 * @param mixed $validToValue The valid to value to pass.
	 * @param mixed $expectedConvertedToValue The expected converted to value.
	 */
	#[DataProviderExternal( BiDirectionalConvertersWithValidToValueAndExpectedConvertedToValueDataProvider::class, 'provideData' )]
	public function testIfMethodConvertToConvertsValidValueCorrectly( BiDirectionalConverterInterface $biDirectionalConverter, mixed $validToValue, mixed $expectedConvertedToValue ): void
	{
		$resultedConvertedToValue = $biDirectionalConverter->convertTo( $validToValue );

		if ( false === is_object( $resultedConvertedToValue ) )
		{
			static::assertSame( $expectedConvertedToValue, $resultedConvertedToValue );
		}
		else
		{
			static::assertEquals( $expectedConvertedToValue, $resultedConvertedToValue );
		}
	}

	/**
	 * Tests if the method `BiDirectionalConverterInterface::convertFrom()` throws a `CodeKandis\Types\InvalidTypeExceptionInterface` on an invalid value type.
	 * @param BiDirectionalConverterInterface $biDirectionalConverter The bidirectional converter to test.
	 * @param mixed $invalidTypedFromValue The invalid typed from value to pass.
	 * @param string $expectedThrowableClassName The expected throwable class name.
	 * @param string $expectedThrowableMessage The expected throwable message.
	 */
	#[DataProviderExternal( BiDirectionalConvertersWithInvalidTypedFromValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodConvertFromThrowsInvalidTypeExceptionInterfaceOnInvalidValueType( BiDirectionalConverterInterface $biDirectionalConverter, mixed $invalidTypedFromValue, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		try
		{
			$biDirectionalConverter->convertFrom( $invalidTypedFromValue );
		}
		catch ( Throwable $throwable )
		{
			static::assertInstanceOf( InvalidTypeExceptionInterface::class, $throwable );
			static::assertInstanceOf( $expectedThrowableClassName, $throwable );
			static::assertSame(
				$expectedThrowableMessage,
				$throwable->getMessage()
			);
		}
	}

	/**
	 * Tests if the method `BiDirectionalConverterInterface::convertFrom()` converts a value correctly.
	 * @param BiDirectionalConverterInterface $biDirectionalConverter The bidirectional converter to test.
	 * @param mixed $validFromValue The valid from value to pass.
	 * @param mixed $expectedConvertedFromValue The expected converted from value.
	 */
	#[DataProviderExternal( BiDirectionalConvertersWithValidFromValueAndExpectedConvertedFromValueDataProvider::class, 'provideData' )]
	public function testIfMethodConvertFromConvertsValidValueCorrectly( BiDirectionalConverterInterface $biDirectionalConverter, mixed $validFromValue, mixed $expectedConvertedFromValue ): void
	{
		$resultedConvertedFromValue = $biDirectionalConverter->convertFrom( $validFromValue );

		if ( false === is_object( $resultedConvertedFromValue ) )
		{
			static::assertSame( $expectedConvertedFromValue, $resultedConvertedFromValue );
		}
		else
		{
			static::assertEquals( $expectedConvertedFromValue, $resultedConvertedFromValue );
		}
	}
}
