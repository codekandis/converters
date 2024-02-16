<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\ExpectedTypes;
use CodeKandis\Converters\ValidValuesRegularExpressions;
use CodeKandis\RegularExpressions\RegularExpression;
use function is_string;

/**
 * Represents a uni-directional converter converting a nullable string into a nullable integer.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableStringToNullableIntUniDirectionalConverter extends AbstractConverter implements NullableStringToNullableIntUniDirectionalConverterInterface
{
	/**
	 * @inheritDoc
	 */
	public function convert( mixed $value ): ?int
	{
		if ( null !== $value && false === is_string( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::NULLABLE_STRING );
		}

		if ( null === $value )
		{
			return null;
		}

		$regularExpression = new RegularExpression( ValidValuesRegularExpressions::REGEX_INTEGER_STRING );
		if ( null === $regularExpression->match( $value, false ) )
		{
			throw $this->getInvalidValueException( $value, ExpectedTypes::NULL, ValidValuesRegularExpressions::REGEX_INTEGER_STRING );
		}

		return (int) $value;
	}
}
