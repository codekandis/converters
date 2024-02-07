<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\InvalidTypeExceptionInterface;
use CodeKandis\Converters\UniDirectionalConverterInterface;
use CodeKandis\Converters\ValidTypes;
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
	private readonly string $format;

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
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convert( mixed $value ): string
	{
		if ( false === $value instanceof DateTime )
		{
			throw $this->getInvalidTypeException( $value, ValidTypes::DATE_TIME );
		}

		return $value->format( $this->format );
	}
}
