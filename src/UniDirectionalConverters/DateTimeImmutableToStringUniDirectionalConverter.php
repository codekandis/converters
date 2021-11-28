<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\UniDirectionalConverterInterface;
use DateTimeImmutable;

/**
 * Represents a uni-directional converter converting DateTimeImmutable to string.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class DateTimeImmutableToStringUniDirectionalConverter extends AbstractConverter implements UniDirectionalConverterInterface
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
	 * Converts from a DateTimeImmutable into a string value.
	 * @param DateTimeImmutable $value The DateTimeImmutable value which has to be converted.
	 * @return string The converted string value.
	 */
	public function convert( $value )
	{
		if ( false === $value instanceof DateTimeImmutable )
		{
			throw $this->getInvalidTypeException( $value, 'DateTimeImmutable' );
		}

		return $value->format( $this->format );
	}
}
