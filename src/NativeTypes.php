<?php declare( strict_types = 1 );
namespace CodeKandis\Converters;

/**
 * Represents an enumeration of native PHP types.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class NativeTypes
{
	/**
	 * Represents an unknown type.
	 * @var string
	 */
	public const string UNKNOWN_TYPE = 'unknown type';

	/**
	 * Represents a null value.
	 * @var string
	 */
	public const string NULL = 'NULL';

	/**
	 * Represents a resource.
	 * @var string
	 */
	public const string RESOURCE = 'resource';

	/**
	 * Represents a closed resource.
	 * @var string
	 */
	public const string CLOSED_RESOURCE = 'resource (closed)';

	/**
	 * Represents an object.
	 * @var string
	 */
	public const string OBJECT = 'object';

	/**
	 * Represents an array.
	 * @var string
	 */
	public const string ARRAY = 'array';

	/**
	 * Represents a boolean.
	 * @var string
	 */
	public const string BOOLEAN = 'boolean';

	/**
	 * Represents an integer
	 * @var string
	 */
	public const string INTEGER = 'integer';

	/**
	 * Represents a float.
	 * @var string
	 */
	public const string FLOAT = 'double';

	/**
	 * Represents a string.
	 * @var string
	 */
	public const string STRING = 'string';
}
