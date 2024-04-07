<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Converters\UniDirectionalConverters\BooleanIntegerStringToBooleanUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\BooleanToBooleanIntegerStringUniDirectionalConverter;
use Override;

/**
 * Represents a bidirectional converter converting between `boolean integer string` and `boolean`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class BooleanIntegerStringToBooleanBiDirectionalConverter extends AbstractBiDirectionalConverter implements BooleanIntegerStringToBooleanBiDirectionalConverterInterface
{
	/**
	 * Constructor method.
	 */
	public function __construct()
	{
		parent::__construct(
			new BooleanIntegerStringToBooleanUniDirectionalConverter(),
			new BooleanToBooleanIntegerStringUniDirectionalConverter()
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
	public function convertFrom( mixed $value ): string
	{
		return parent::convertFrom( $value );
	}
}
