<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\InvalidTypeExceptionInterface;
use CodeKandis\Converters\UniDirectionalConverterInterface;
use CodeKandis\Converters\ValidTypes;
use DateTime;
use Override;

/**
 * Represents a unidirectional converter converting a nullable DateTime into a nullable string.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableDateTimeToNullableStringUniDirectionalConverter extends AbstractConverter implements UniDirectionalConverterInterface
{
	/**
	 * Constructor method.
	 * @param string $format The format of the timestamp string.
	 */
	public function __construct(
		private readonly string $format
	)
	{
	}

	/**
	 * Converts from a nullable DateTime into a nullable string value.
	 * @param ?DateTime $value The nullable DateTime value which has to be converted.
	 * @return ?string The converted nullable string value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	#[Override]
	public function convert( mixed $value ): ?string
	{
		if ( null !== $value && false === $value instanceof DateTime )
		{
			throw $this->getInvalidTypeException( $value, ValidTypes::NULLABLE_DATE_TIME );
		}

		return $value?->format( $this->format );
	}
}
