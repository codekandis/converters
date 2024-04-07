<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Converters\UniDirectionalConverters\BinaryStringToIntegerUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\IntegerToBinaryStringUniDirectionalConverter;
use Override;

/**
 * Represents a bidirectional converter converting between `integer` and `binary string`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class IntegerToBinaryStringBiDirectionalConverter extends AbstractBiDirectionalConverter implements IntegerToBinaryStringBiDirectionalConverterInterface
{
	/**
	 * Constructor method.
	 */
	public function __construct()
	{
		parent::__construct(
			new IntegerToBinaryStringUniDirectionalConverter(),
			new BinaryStringToIntegerUniDirectionalConverter()
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
	public function convertFrom( mixed $value ): int
	{
		return parent::convertFrom( $value );
	}
}
