<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractDateTimeRelatedConverter;
use CodeKandis\Converters\ExpectedTypes;
use CodeKandis\Converters\ValidValues;
use CodeKandis\Validators\IsStringValidator;
use DateTimeImmutable;
use Override;

/**
 * Represents a unidirectional converter converting a `DateTime` string value into its corresponding `DateTimeImmutable` value depending on a given format.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class DateTimeStringToDateTimeImmutableUniDirectionalConverter extends AbstractDateTimeRelatedConverter implements DateTimeStringToDateTimeImmutableUniDirectionalConverterInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convert( mixed $value ): DateTimeImmutable
	{
		if (
			false === ( new IsStringValidator() )
				->validate( $value )
		)
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::STRING );
		}

		$convertedValue = DateTimeImmutable::createFromFormat( $this->format, $value, $this->timeZone );

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
