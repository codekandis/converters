<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Converters\UniDirectionalConverters\BinaryStringToBooleanArrayUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\BooleanArrayToBinaryStringUniDirectionalConverter;
use Override;

/**
 * Represents a bidirectional converter converting between `boolean array` and `binary string`.
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
