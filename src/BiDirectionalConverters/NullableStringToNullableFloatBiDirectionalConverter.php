<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\ExpectedTypes;
use CodeKandis\Converters\ValidValues;
use CodeKandis\Converters\ValidValuesRegularExpressions;
use CodeKandis\RegularExpressions\RegularExpression;
use Override;
use function is_float;
use function is_string;

/**
 * Represents a bi-directional converter converting between `nullable string` and `nullable float`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableStringToNullableFloatBiDirectionalConverter extends AbstractConverter implements NullableStringToNullableFloatBiDirectionalConverterInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convertTo( mixed $value ): ?float
	{
		if ( null === $value )
		{
			return null;
		}

		if ( false === is_string( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::NULLABLE_STRING );
		}

		$regularExpression = new RegularExpression( ValidValuesRegularExpressions::REGEX_FLOAT_STRING );
		if ( null === $regularExpression->match( $value, false ) )
		{
			throw $this->getInvalidValueException( $value, ValidValues::NULL_STRING, ValidValuesRegularExpressions::REGEX_FLOAT_STRING );
		}

		return (float) $value;
	}

	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convertFrom( mixed $value ): ?string
	{
		if ( null === $value )
		{
			return null;
		}

		if ( false === is_float( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::NULLABLE_FLOAT );
		}

		return (string) $value;
	}
}
