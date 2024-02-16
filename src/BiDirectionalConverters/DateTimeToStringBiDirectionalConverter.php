<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Converters\AbstractDateTimeRelatedConverter;
use CodeKandis\Converters\ExpectedTypes;
use DateTime;
use Override;
use function is_string;

/**
 * Represents a bi-directional converter converting between `DateTime` and `string`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class DateTimeToStringBiDirectionalConverter extends AbstractDateTimeRelatedConverter implements DateTimeToStringBiDirectionalConverterInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convertTo( mixed $value ): string
	{
		if ( false === $value instanceof DateTime )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::DATETIME );
		}

		return $value->format( $this->format );
	}

	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convertFrom( mixed $value ): DateTime
	{
		if ( false === is_string( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::STRING );
		}

		return DateTime::createFromFormat( $this->format, $value, $this->timeZone );
	}
}
