<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Converters\UniDirectionalConverters\NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\NullableBooleanToNullableBooleanIntegerStringUniDirectionalConverter;
use Override;

/**
 * Represents a bidirectional converter converting between `nullable boolean integer string` and `nullable boolean`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter extends AbstractBiDirectionalConverter implements NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverterInterface
{
	/**
	 * Constructor method.
	 */
	public function __construct()
	{
		parent::__construct(
			new NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverter(),
			new NullableBooleanToNullableBooleanIntegerStringUniDirectionalConverter()
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
	public function convertFrom( mixed $value ): ?string
	{
		return parent::convertFrom( $value );
	}
}
