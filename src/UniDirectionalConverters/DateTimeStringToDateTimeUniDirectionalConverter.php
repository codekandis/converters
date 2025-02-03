<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractDateTimeRelatedConverter;
use CodeKandis\Converters\ExpectedTypes;
use CodeKandis\Converters\ValidValues;
use CodeKandis\Validators\IsStringValidator;
use DateTime;
use Override;

/**
 * Represents a unidirectional converter converting a `DateTime` string value into its corresponding `DateTime` value depending on a given format.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class DateTimeStringToDateTimeUniDirectionalConverter extends AbstractDateTimeRelatedConverter implements DateTimeStringToDateTimeUniDirectionalConverterInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convert( mixed $value ): DateTime
	{
		if (
			false === ( new IsStringValidator() )
				->validate( $value )
		)
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::STRING );
		}

		$convertedValue = DateTime::createFromFormat( $this->format, $value, $this->timeZone );

		if ( false === $convertedValue )
		{
			throw $this->getInvalidValueException(
				$value,
				ValidValues::createDateTimeString( $this->format )
			);
		}

		return $convertedValue;
	}
}
