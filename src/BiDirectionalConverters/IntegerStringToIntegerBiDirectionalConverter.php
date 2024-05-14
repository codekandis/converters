<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Converters\UniDirectionalConverters\IntegerStringToIntegerUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\IntegerToIntegerStringUniDirectionalConverter;
use Override;

/**
 * Represents a bidirectional converter converting an integer string value matching the regular expression `ValidValuesRegularExpressions::REGEX_INTEGER_STRING` into its corresponding integer value - and vice versa.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class IntegerStringToIntegerBiDirectionalConverter extends AbstractBiDirectionalConverter implements IntegerStringToIntegerBiDirectionalConverterInterface
{
	/**
	 * Constructor method.
	 */
	public function __construct()
	{
		parent::__construct(
			new IntegerStringToIntegerUniDirectionalConverter(),
			new IntegerToIntegerStringUniDirectionalConverter()
		);
	}

	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convertTo( mixed $value ): int
	{
		return parent::convertTo( $value );
	}

	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convertFrom( mixed $value ): string
	{
		return parent::convertFrom( $value );
	}
}
