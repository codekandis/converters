<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\UniDirectionalConverterInterface;
use DateTime;

/**
 * Represents a uni-directional converter converting a DateTime into a string.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class DateTimeToStringUniDirectionalConverter extends AbstractConverter implements UniDirectionalConverterInterface
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
	 * Converts from a DateTime into a string value.
	 * @param DateTime $value The DateTime value which has to be converted.
	 * @return string The converted string value.
	 */
	public function convert( $value )
	{
		if ( false === $value instanceof DateTime )
		{
			throw $this->getInvalidTypeException( $value, 'DateTime' );
		}

		return $value->format( $this->format );
	}
}
