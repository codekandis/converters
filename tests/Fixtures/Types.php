<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\Tests\Fixtures;

use CodeKandis\Types\TypeHintTypes;
use function get_resource_type;

/**
 * Represents an enumeration of types.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class Types
{
	/**
	 * Represents a type hint `null` type.
	 * @var string
	 */
	public const string TYPE_HINT_NULL = TypeHintTypes::NULL;

	/**
	 * Represents a type hint `closed resource`.
	 * @var string
	 */
	public const string TYPE_HINT_CLOSED_RESOURCE = TypeHintTypes::CLOSED_RESOURCE;

	/**
	 * Represents a type hint `array`.
	 * @var string
	 */
	public const string TYPE_HINT_ARRAY = TypeHintTypes::ARRAY;

	/**
	 * Represents a type hint `integer`.
	 * @var string
	 */
	public const string TYPE_HINT_INTEGER = TypeHintTypes::INTEGER;

	/**
	 * Represents a type hint `float`.
	 * @var string
	 */
	public const string TYPE_HINT_FLOAT = TypeHintTypes::FLOAT;

	/**
	 * Represents a type hint `string`.
	 * @var string
	 */
	public const string TYPE_HINT_STRING = TypeHintTypes::STRING;

	/**
	 * Creates a type hint typed `resource` type of a specific resource.
	 * @param resource $resource The resource to create the type hint typed `resource` type from.
	 * @return string The created type hint typed `resource` type.
	 */
	public static function createTypeHintTypedResourceTypeByResource( $resource ): string
	{
		return TypeHintTypes::createTypedResource(
			get_resource_type( $resource )
		);
	}

	/**
	 * Creates a type hint typed `object` type of a specific object.
	 * @param object $object The object to create the type hint typed `object` type from.
	 * @return string The created type hint typed `object` type.
	 */
	public static function createTypeHintTypedObjectTypeByObject( object $object ): string
	{
		return TypeHintTypes::createTypedObject( $object::class );
	}

	/**
	 * Creates a type hint typed `boolean` type of a specific value.
	 * @param bool $value The value to create the type hint typed `boolean` type from.
	 * @return string The created type hint typed `boolean` type.
	 */
	public static function createTypeHintTypedBooleanTypeByValue( bool $value ): string
	{
		return TypeHintTypes::createTypedBoolean( $value );
	}
}
