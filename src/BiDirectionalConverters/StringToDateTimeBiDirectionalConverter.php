<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\BiDirectionalConverterInterface;
use CodeKandis\Converters\InvalidTypeExceptionInterface;
use CodeKandis\Converters\ValidTypes;
use DateTime;
use DateTimeZone;
use Override;
use function is_string;

/**
 * Represents a bidirectional converter converting between string and DateTime.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class StringToDateTimeBiDirectionalConverter extends AbstractConverter implements BiDirectionalConverterInterface
{
	/**
	 * Constructor method.
	 * @param string $format The format of the timestamp string.
	 * @param ?DateTimeZone $timeZone The time zone of the timestamp.
	 */
	public function __construct(
		private readonly string        $format,
		private readonly ?DateTimeZone $timeZone = null
	)
	{
	}

	/**
	 * Converts from a string into a DateTime value.
	 * @param string $value The string value which has to be converted.
	 * @return DateTime The converted DateTime value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	#[Override]
	public function convertTo( mixed $value ): DateTime
	{
		if ( false === is_string( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ValidTypes::STRING );
		}

		return DateTime::createFromFormat( $this->format, $value, $this->timeZone );
	}

	/**
	 * Converts from a DateTime into a string value.
	 * @param DateTime $value The DateTime value which has to be converted.
	 * @return string The converted string value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	#[Override]
	public function convertFrom( mixed $value ): string
	{
		if ( false === $value instanceof DateTime )
		{
			throw $this->getInvalidTypeException( $value, ValidTypes::DATE_TIME );
		}

		return $value->format( $this->format );
	}
}
