<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Converters\UniDirectionalConverters\BooleanIntegerToBooleanUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\BooleanToBooleanIntegerUniDirectionalConverter;
use Override;

/**
 * Represents a bidirectional converter converting a boolean value equal to `false` or `true` into its corresponding boolean integer value equal to `0` or `1` - and vice versa.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class BooleanToBooleanIntegerBiDirectionalConverter extends AbstractBiDirectionalConverter implements BooleanToBooleanIntegerBiDirectionalConverterInterface
{
	/**
	 * Constructor method.
	 */
	public function __construct()
	{
		parent::__construct(
			new BooleanToBooleanIntegerUniDirectionalConverter(),
			new BooleanIntegerToBooleanUniDirectionalConverter()
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
	public function convertFrom( mixed $value ): bool
	{
		return parent::convertFrom( $value );
	}
}
