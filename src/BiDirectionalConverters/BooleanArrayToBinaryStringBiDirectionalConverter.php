<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Converters\UniDirectionalConverters\BinaryStringToBooleanArrayUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\BooleanArrayToBinaryStringUniDirectionalConverter;
use Override;

/**
 * Represents a bidirectional converter converting a boolean array containing values equal to `false` or `true` into its corresponding binary string value matching the regular expression {@link ValidValues::REGEX_BINARY_STRING} - and vice versa.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class BooleanArrayToBinaryStringBiDirectionalConverter extends AbstractBiDirectionalConverter implements BooleanArrayToBinaryStringBiDirectionalConverterInterface
{
	/**
	 * Constructor method.
	 */
	public function __construct()
	{
		parent::__construct(
			new BooleanArrayToBinaryStringUniDirectionalConverter(),
			new BinaryStringToBooleanArrayUniDirectionalConverter()
		);
	}

	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convertTo( mixed $value ): string
	{
		return parent::convertTo( $value );
	}

	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convertFrom( mixed $value ): array
	{
		return parent::convertFrom( $value );
	}
}
