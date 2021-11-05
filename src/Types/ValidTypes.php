<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\Types;

/**
 * Represents an enumeration of valid types.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class ValidTypes
{
	/**
	 * Represents an unknown type.
	 * @var string
	 */
	public const UNKNOWN = 'unknown';

	/**
	 * Represents a NULL type.
	 * @var string
	 */
	public const NULL = 'null';

	/**
	 * Represents a bool type.
	 * @var string
	 */
	public const BOOL = 'bool';

	/**
	 * Represents a nullable bool type.
	 * @var string
	 */
	public const NULLABLE_BOOL = '?bool';

	/**
	 * Represents an int type.
	 * @var string
	 */
	public const INT = 'int';

	/**
	 * Represents a nullable int type.
	 * @var string
	 */
	public const NULLABLE_INT = '?int';

	/**
	 * Represents a float type.
	 * @var string
	 */
	public const FLOAT = 'float';

	/**
	 * Represents a nullable float type.
	 * @var string
	 */
	public const NULLABLE_FLOAT = '?float';

	/**
	 * Represents a string type.
	 * @var string
	 */
	public const STRING = 'string';

	/**
	 * Represents a nullable string type.
	 * @var string
	 */
	public const NULLABLE_STRING = '?string';

	/**
	 * Represents an array type.
	 * @var string
	 */
	public const ARRAY = 'array';

	/**
	 * Represents a nullable array type.
	 * @var string
	 */
	public const NULLABLE_ARRAY = '?array';

	/**
	 * Represents a resource type.
	 * @var string
	 */
	public const RESOURCE = 'resource';

	/**
	 * Represents a nullable resource type.
	 * @var string
	 */
	public const NULLABLE_RESOURCE = '?resource';
}
