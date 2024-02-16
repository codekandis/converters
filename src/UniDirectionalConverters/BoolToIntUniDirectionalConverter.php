<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\ExpectedTypes;
use CodeKandis\Converters\ValidValues;
use function is_bool;

/**
 * Represents a uni-directional converter converting a boolean into an integer.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class BoolToIntUniDirectionalConverter extends AbstractConverter implements BoolToIntUniDirectionalConverterInterface
{
	/**
	 * @inheritDoc
	 */
	public function convert( mixed $value ): int
	{
		if ( false === is_bool( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::BOOLEAN );
		}

		return false === $value
			? ValidValues::BOOLEAN_INTEGER_FALSE
			: ValidValues::BOOLEAN_INTEGER_TRUE;
	}
}
