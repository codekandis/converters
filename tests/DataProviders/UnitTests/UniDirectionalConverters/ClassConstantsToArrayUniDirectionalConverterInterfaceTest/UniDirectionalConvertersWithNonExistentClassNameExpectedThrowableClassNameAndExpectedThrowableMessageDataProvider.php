<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\Tests\DataProviders\UnitTests\UniDirectionalConverters\ClassConstantsToArrayUniDirectionalConverterInterfaceTest;

use CodeKandis\Converters\ClassNotFoundException;
use CodeKandis\Converters\Tests\Fixtures\Values;
use CodeKandis\Converters\UniDirectionalConverters\ClassConstantsToArrayUniDirectionalConverter;
use CodeKandis\PhpUnit\DataProviderInterface;
use Override;

/**
 * Represents a data provider providing unidirectional converters with nonexisstent class name, expected throwable class name and expected throwable message.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class UniDirectionalConvertersWithNonExistentClassNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'uniDirectionalConverter'    => new ClassConstantsToArrayUniDirectionalConverter(),
				'nonExistentClassName'       => $nonExistentClassName = Values::NONEXISTENT_CLASS_NAME,
				'expectedThrowableClassName' => ClassNotFoundException::class,
				'expectedThrowableMessage'   => sprintf( ClassNotFoundException::EXCEPTION_MESSAGE_CLASS_NOT_FOUND, $nonExistentClassName )
			]
		];
	}
}