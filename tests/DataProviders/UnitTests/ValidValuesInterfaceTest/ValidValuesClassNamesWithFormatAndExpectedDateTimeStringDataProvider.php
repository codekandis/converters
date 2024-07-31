<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\Tests\DataProviders\UnitTests\ValidValuesInterfaceTest;

use CodeKandis\Converters\Tests\Fixtures\Values;
use CodeKandis\Converters\ValidValues;
use CodeKandis\PhpUnit\DataProviderInterface;
use Override;

/**
 * Represents a data provider providing types class names with format and expected `DateTime string`.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidValuesClassNamesWithFormatAndExpectedDateTimeStringDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'typesClassName'         => ValidValues::class,
				'format'                 => $format = Values::DATETIME_FORMAT,
				'expectedDateTimeString' => ValidValues::createDateTimeString( $format )
			]
		];
	}
}
