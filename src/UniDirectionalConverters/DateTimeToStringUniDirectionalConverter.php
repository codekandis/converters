<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractDateTimeRelatedConverter;
use CodeKandis\Converters\ExpectedTypes;
use DateTime;

/**
 * Represents a uni-directional converter converting a DateTime into a string.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class DateTimeToStringUniDirectionalConverter extends AbstractDateTimeRelatedConverter implements DateTimeToStringUniDirectionalConverterInterface
{
	/**
	 * @inheritDoc
	 */
	public function convert( mixed $value ): string
	{
		if ( false === $value instanceof DateTime )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::DATETIME );
		}

		return $value->format( $this->format );
	}
}
