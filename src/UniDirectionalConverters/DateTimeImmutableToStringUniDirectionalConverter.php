<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\InvalidTypeExceptionInterface;
use CodeKandis\Converters\UniDirectionalConverterInterface;
use CodeKandis\Converters\ValidTypes;
use DateTimeImmutable;
use Override;

/**
 * Represents a unidirectional converter converting a DateTimeImmutable into a string.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class DateTimeImmutableToStringUniDirectionalConverter extends AbstractConverter implements UniDirectionalConverterInterface
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
	 * Converts from a DateTimeImmutable into a string value.
	 * @param DateTimeImmutable $value The DateTimeImmutable value which has to be converted.
	 * @return string The converted string value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	#[Override]
	public function convert( mixed $value ): string
	{
		if ( false === $value instanceof DateTimeImmutable )
		{
			throw $this->getInvalidTypeException( $value, ValidTypes::DATE_TIME_IMMUTABLE );
		}

		return $value->format( $this->format );
	}
}
