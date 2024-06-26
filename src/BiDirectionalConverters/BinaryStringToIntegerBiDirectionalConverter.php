<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Converters\UniDirectionalConverters\BinaryStringToIntegerUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\IntegerToBinaryStringUniDirectionalConverter;
use Override;

/**
 * Represents a bidirectional converter converting a binary string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_BINARY_STRING`] into its corresponding integer value - and vice versa.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class BinaryStringToIntegerBiDirectionalConverter extends AbstractBiDirectionalConverter implements BinaryStringToIntegerBiDirectionalConverterInterface
{
	/**
	 * Constructor method.
	 */
	public function __construct()
	{
		parent::__construct(
			new BinaryStringToIntegerUniDirectionalConverter(),
			new IntegerToBinaryStringUniDirectionalConverter()
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
