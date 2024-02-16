<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\ExpectedTypes;
use function is_float;

/**
 * Represents a unidirectional converter converting a float into a string.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class FloatToStringUniDirectionalConverter extends AbstractConverter implements FloatToStringUniDirectionalConverterInterface
{
	/**
	 * @inheritDoc
	 */
	public function convert( mixed $value ): string
	{
		if ( false === is_float( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::FLOAT );
		}

		return (string) $value;
	}
}
