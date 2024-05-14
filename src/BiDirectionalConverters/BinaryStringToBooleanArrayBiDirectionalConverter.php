<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Converters\UniDirectionalConverters\BinaryStringToBooleanArrayUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\BooleanArrayToBinaryStringUniDirectionalConverter;
use Override;

/**
 * Represents a bidirectional converter converting a binary string value matching the regular expression `ValidValuesRegularExpressions::REGEX_BINARY_STRING` into its corresponding boolean array containing values equal to `false` or `true` - and vice versa.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class BinaryStringToBooleanArrayBiDirectionalConverter extends AbstractBiDirectionalConverter implements BinaryStringToBooleanArrayBiDirectionalConverterInterface
{
	/**
	 * Constructor method.
	 */
	public function __construct()
	{
		parent::__construct(
			new BinaryStringToBooleanArrayUniDirectionalConverter(),
			new BooleanArrayToBinaryStringUniDirectionalConverter()
		);
	}

	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convertTo( mixed $value ): array
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
