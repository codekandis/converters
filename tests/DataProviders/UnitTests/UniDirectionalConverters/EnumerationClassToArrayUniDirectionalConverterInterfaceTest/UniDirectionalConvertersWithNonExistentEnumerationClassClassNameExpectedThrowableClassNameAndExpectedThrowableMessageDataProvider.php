<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\Tests\DataProviders\UnitTests\UniDirectionalConverters\EnumerationClassToArrayUniDirectionalConverterInterfaceTest;

use CodeKandis\Converters\EnumerationClassNotFoundException;
use CodeKandis\Converters\Tests\Fixtures\Values;
use CodeKandis\Converters\UniDirectionalConverters\EnumerationClassToArrayUniDirectionalConverter;
use CodeKandis\PhpUnit\DataProviderInterface;
use Override;

/**
 * Represents a data provider providing unidirectional converters with nonexisstent enumeration class class name, expected throwable class name and expected throwable message.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class UniDirectionalConvertersWithNonExistentEnumerationClassClassNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'uniDirectionalConverter'              => new EnumerationClassToArrayUniDirectionalConverter(),
				'nonExistentEnumerationClassClassName' => $nonExistentEnumerationClassClassName = Values::NON_EXISTENT_ENUMERATION_CLASS_NAME,
				'expectedThrowableClassName'           => EnumerationClassNotFoundException::class,
				'expectedThrowableMessage'             => sprintf( EnumerationClassNotFoundException::EXCEPTION_MESSAGE_ENUMERATION_CLASS_NOT_FOUND, $nonExistentEnumerationClassClassName )
			]
		];
	}
}