<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\ExpectedTypes;
use CodeKandis\Converters\ValidValues;
use CodeKandis\Converters\ValidValuesRegularExpressions;
use CodeKandis\RegularExpressions\RegularExpression;
use Override;
use function is_string;

/**
 * Represents a unidirectional converter converting a nullable float string value matching the regular expression `ValidValuesRegularExpressions::REGEX_FLOAT_STRING` into its corresponding nullable float value.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableFloatStringToNullableFloatUniDirectionalConverter extends AbstractConverter implements NullableFloatStringToNullableFloatUniDirectionalConverterInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convert( mixed $value ): ?float
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
}
