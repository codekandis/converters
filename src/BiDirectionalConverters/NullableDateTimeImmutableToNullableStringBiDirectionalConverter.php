<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\BiDirectionalConverterInterface;
use CodeKandis\Converters\Types\ValidTypes;
use DateTimeImmutable;
use DateTimeZone;
use function is_string;

/**
 * Represents a bi-directional converter converting between nullable string and nullable DateTimeImmutable.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableDateTimeImmutableToNullableStringBiDirectionalConverter extends AbstractConverter implements BiDirectionalConverterInterface
{
	/**
	 * Stores the format of the timestamp string.
	 * @var string
	 */
	private string $format;

	/**
	 * Stores the time zone of the timestamp.
	 * @var ?DateTimeZone
	 */
	private ?DateTimeZone $timeZone;

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
	 * Converts from a nullable string into a nullable DateTimeImmutable value.
	 * @param ?DateTimeImmutable $value The nullable DateTimeImmutable value which has to be converted.
	 * @return ?string The converted nullable string value.
	 */
	public function convertTo( $value )
	{
		if ( null !== $value && false === $value instanceof DateTimeImmutable )
		{
			throw $this->getInvalidTypeException( $value, '?DateTimeImmutable' );
		}

		if ( null === $value )
		{
			return null;
		}

		return $value->format( $this->format );
	}

	/**
	 * Converts from a nullable DateTimeImmutable into a nullable string value.
	 * @param ?string $value The nullable string value which has to be converted.
	 * @return ?DateTimeImmutable The converted nullable DateTimeImmutable value.
	 */
	public function convertFrom( $value )
	{
		if ( null !== $value && false === is_string( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ValidTypes::NULLABLE_STRING );
		}

		if ( null === $value )
		{
			return null;
		}

		return DateTimeImmutable::createFromFormat( $this->format, $value, $this->timeZone );
	}
}
