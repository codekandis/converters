<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractDateTimeRelatedConverter;
use CodeKandis\Converters\ExpectedTypes;
use CodeKandis\Validators\IsInstanceOfValidator;
use CodeKandis\Validators\IsNullValidator;
use DateTimeImmutable;
use Override;

/**
 * Represents a unidirectional converter converting a nullable `DateTimeImmutable` value into its corresponding nullable `DateTime` string value depending on a given format.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter extends AbstractDateTimeRelatedConverter implements NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverterInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convert( mixed $value ): ?string
	{
		if (
			true === ( new IsNullValidator() )
				->validate( $value )
		)
		{
			return null;
		}

		if (
			false === ( new IsInstanceOfValidator( DateTimeImmutable::class ) )
				->validate( $value )
		)
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE );
		}

		return $value->format( $this->format );
	}
}
