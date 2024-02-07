<?php declare( strict_types = 1 );
namespace CodeKandis\Converters;

use Override;
use function get_class;
use function gettype;
use function is_object;

/**
 * Represents a type determinator.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class TypeDeterminator implements TypeDeterminatorInterface
{
	/**
	 * Stores if the determined types has to be strict native.
	 * @var bool
	 */
	private readonly bool $strict;

	/**
	 * Constructor method.
	 * @param bool $strict True if the determined types has to be strict native, otherwise false.
	 */
	public function __construct( bool $strict )
	{
		$this->strict = $strict;
	}

	/**
	 * Determines the strict native type of a value.
	 * @param mixed $value The value to determine its type.
	 * @return string The determined type.
	 */
	private function determineStrict( mixed $value ): string
	{
		return gettype( $value );
	}

	/**
	 * Determines the loose type of a value.
	 * @param mixed $value The value to determine its type.
	 * @return string The determined type.
	 */
	private function determineLoose( mixed $value ): string
	{
		if ( true === is_object( $value ) )
		{
			return get_class( $value );
		}

		$valueType = gettype( $value );

		return match ( $valueType )
		{
			NativeTypes::UNKNOWN_TYPE    => ValidTypes::UNKNOWN,
			NativeTypes::NULL            => ValidTypes::NULL,
			NativeTypes::CLOSED_RESOURCE => ValidTypes::UNKNOWN,
			NativeTypes::FLOAT           => ValidTypes::FLOAT,
			NativeTypes::BOOLEAN         => ValidTypes::BOOLEAN,
			NativeTypes::INTEGER         => ValidTypes::INTEGER,
			default                      => $valueType
		};
	}

	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public function determine( mixed $value ): string
	{
		return true === $this->strict
			? $this->determineStrict( $value )
			: $this->determineLoose( $value );
	}
}
