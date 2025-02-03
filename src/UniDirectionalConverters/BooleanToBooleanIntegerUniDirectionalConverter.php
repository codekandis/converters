<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\ExpectedTypes;
use CodeKandis\Converters\ValidValues;
use CodeKandis\Validators\IsBooleanValidator;
use Override;

/**
 * Represents a unidirectional converter converting a boolean value equal to `false` or `true` into its corresponding boolean integer value equal to `0` or `1`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class BooleanToBooleanIntegerUniDirectionalConverter extends AbstractConverter implements BooleanToBooleanIntegerUniDirectionalConverterInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convert( mixed $value ): int
	{
		if (
			false === ( new IsBooleanValidator() )
				->validate( $value )
		)
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::BOOLEAN );
		}

		return false === $value
			? ValidValues::BOOLEAN_INTEGER_FALSE
			: ValidValues::BOOLEAN_INTEGER_TRUE;
	}
}
