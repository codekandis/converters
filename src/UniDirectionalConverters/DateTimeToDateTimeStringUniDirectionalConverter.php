<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractDateTimeRelatedConverter;
use CodeKandis\Converters\ExpectedTypes;
use DateTime;
use Override;

/**
 * Represents a unidirectional converter converting a `DateTime` value into its corresponding `DateTime` string value depending on a given format.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class DateTimeToDateTimeStringUniDirectionalConverter extends AbstractDateTimeRelatedConverter implements DateTimeToDateTimeStringUniDirectionalConverterInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convert( mixed $value ): string
	{
		if ( false === $value instanceof DateTime )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::DATETIME );
		}

		return $value->format( $this->format );
	}
}
