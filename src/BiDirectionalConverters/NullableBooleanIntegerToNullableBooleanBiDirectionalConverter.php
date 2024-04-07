<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Converters\UniDirectionalConverters\NullableBooleanIntegerToNullableBooleanUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\NullableBooleanToNullableBooleanIntegerUniDirectionalConverter;
use Override;

/**
 * Represents a bidirectional converter converting between `nullable boolean integer` and `nullable boolean`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableBooleanIntegerToNullableBooleanBiDirectionalConverter extends AbstractBiDirectionalConverter implements NullableBooleanIntegerToNullableBooleanBiDirectionalConverterInterface
{
	/**
	 * Constructor method.
	 */
	public function __construct()
	{
		parent::__construct(
			new NullableBooleanIntegerToNullableBooleanUniDirectionalConverter(),
			new NullableBooleanToNullableBooleanIntegerUniDirectionalConverter()
		);
	}

	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convertTo( mixed $value ): ?bool
	{
		return parent::convertTo( $value );
	}

	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convertFrom( mixed $value ): ?int
	{
		return parent::convertFrom( $value );
	}
}
