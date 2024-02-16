<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\ExpectedTypes;
use CodeKandis\Converters\ValidValuesRegularExpressions;
use CodeKandis\RegularExpressions\RegularExpression;
use function is_float;
use function is_string;

/**
 * Represents a bi-directional converter converting between `nullable float` and `nullable string`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableFloatToNullableStringBiDirectionalConverter extends AbstractConverter implements NullableFloatToNullableStringBiDirectionalConverterInterface
{
	/**
	 * @inheritDoc
	 */
	public function convertTo( mixed $value ): ?string
	{
		if ( null !== $value && false === is_float( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::NULLABLE_FLOAT );
		}

		if ( null === $value )
		{
			return null;
		}

		return (string) $value;
	}

	/**
	 * @inheritDoc
	 */
	public function convertFrom( mixed $value ): ?float
	{
		if ( null !== $value && false === is_string( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::NULLABLE_STRING );
		}

		if ( null === $value )
		{
			return null;
		}

		$regularExpression = new RegularExpression( ValidValuesRegularExpressions::REGEX_FLOAT_STRING );
		if ( null === $regularExpression->match( $value, false ) )
		{
			throw $this->getInvalidValueException( $value, ExpectedTypes::NULL, ValidValuesRegularExpressions::REGEX_FLOAT_STRING );
		}

		return (float) $value;
	}
}
