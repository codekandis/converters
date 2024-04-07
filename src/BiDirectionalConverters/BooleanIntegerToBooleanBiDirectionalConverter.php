<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Converters\UniDirectionalConverters\BooleanIntegerToBooleanUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\BooleanToBooleanIntegerUniDirectionalConverter;
use Override;

/**
 * Represents a bidirectional converter converting between `boolean integer` and `boolean`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class BooleanIntegerToBooleanBiDirectionalConverter extends AbstractBiDirectionalConverter implements BooleanIntegerToBooleanBiDirectionalConverterInterface
{
	/**
	 * Constructor method.
	 */
	public function __construct()
	{
		parent::__construct(
			new BooleanIntegerToBooleanUniDirectionalConverter(),
			new BooleanToBooleanIntegerUniDirectionalConverter()
		);
	}

	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convertTo( mixed $value ): bool
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
