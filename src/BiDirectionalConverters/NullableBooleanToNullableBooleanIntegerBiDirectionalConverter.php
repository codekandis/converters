<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Converters\UniDirectionalConverters\NullableBooleanIntegerToNullableBooleanUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\NullableBooleanToNullableBooleanIntegerUniDirectionalConverter;
use Override;

/**
 * Represents a bidirectional converter converting between `nullable boolean` and `nullable boolean integer`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableBooleanToNullableBooleanIntegerBiDirectionalConverter extends AbstractBiDirectionalConverter implements NullableBooleanToNullableBooleanIntegerBiDirectionalConverterInterface
{
	/**
	 * Constructor method.
	 */
	public function __construct()
	{
		parent::__construct(
			new NullableBooleanToNullableBooleanIntegerUniDirectionalConverter(),
			new NullableBooleanIntegerToNullableBooleanUniDirectionalConverter()
		);
	}

	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convertTo( mixed $value ): ?int
	{
		return parent::convertTo( $value );
	}

	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convertFrom( mixed $value ): ?bool
	{
		return parent::convertFrom( $value );
	}
}
