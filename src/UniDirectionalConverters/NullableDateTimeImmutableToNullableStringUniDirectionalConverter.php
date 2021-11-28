<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\UniDirectionalConverterInterface;
use DateTimeImmutable;

/**
 * Represents a uni-directional converter converting nullable string to nullable DateTimeImmutable.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableDateTimeImmutableToNullableStringUniDirectionalConverter extends AbstractConverter implements UniDirectionalConverterInterface
{
	/**
	 * Stores the format of the timestamp string.
	 * @var string
	 */
	private string $format;

	/**
	 * Constructor method.
	 * @param string $format The format of the timestamp string.
	 */
	public function __construct( string $format )
	{
		$this->format = $format;
	}

	/**
	 * Converts from a nullable string into a nullable DateTimeImmutable value.
	 * @param ?DateTimeImmutable $value The nullable DateTimeImmutable value which has to be converted.
	 * @return ?string The converted nullable string value.
	 */
	public function convert( $value )
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
}
