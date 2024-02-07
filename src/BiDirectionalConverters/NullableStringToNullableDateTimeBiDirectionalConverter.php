<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\BiDirectionalConverterInterface;
use CodeKandis\Converters\InvalidTypeExceptionInterface;
use CodeKandis\Converters\ValidTypes;
use DateTime;
use DateTimeZone;
use function is_string;

/**
 * Represents a bi-directional converter converting between nullable string and nullable DateTime.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableStringToNullableDateTimeBiDirectionalConverter extends AbstractConverter implements BiDirectionalConverterInterface
{
	/**
	 * Stores the format of the timestamp string.
	 * @var string
	 */
	private readonly string $format;

	/**
	 * Stores the time zone of the timestamp.
	 * @var ?DateTimeZone
	 */
	private readonly ?DateTimeZone $timeZone;

	/**
	 * Constructor method.
	 * @param string $format The format of the timestamp string.
	 * @param ?DateTimeZone $timeZone The time zone of the timestamp.
	 */
	public function __construct( string $format, ?DateTimeZone $timeZone = null )
	{
		$this->format   = $format;
		$this->timeZone = $timeZone;
	}

	/**
	 * Converts from a nullable string into a nullable DateTime value.
	 * @param ?string $value The nullable string value which has to be converted.
	 * @return ?DateTime The converted nullable DateTime value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convertTo( mixed $value ): ?DateTime
	{
		if ( null !== $value && false === is_string( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ValidTypes::NULLABLE_STRING );
		}

		if ( null === $value )
		{
			return null;
		}

		return DateTime::createFromFormat( $this->format, $value, $this->timeZone );
	}

	/**
	 * Converts from a nullable DateTime into a nullable string value.
	 * @param ?DateTime $value The nullable DateTime value which has to be converted.
	 * @return ?string The converted nullable string value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convertFrom( mixed $value ): ?string
	{
		if ( null !== $value && false === $value instanceof DateTime )
		{
			throw $this->getInvalidTypeException( $value, ValidTypes::NULLABLE_DATE_TIME );
		}

		if ( null === $value )
		{
			return null;
		}

		return $value->format( $this->format );
	}
}
