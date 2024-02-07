<?php declare( strict_types = 1 );
namespace CodeKandis\Converters;

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
	public const BOOLEAN = 'bool';

	/**
	 * Represents a nullable bool type.
	 * @var string
	 */
	public const NULLABLE_BOOLEAN = '?bool';

	/**
	 * Represents an int type.
	 * @var string
	 */
	public const INTEGER = 'int';

	/**
	 * Represents a nullable int type.
	 * @var string
	 */
	public const NULLABLE_INTEGER = '?int';

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

	/**
	 * Represents an array of boolean values type.
	 * @var string
	 */
	public const BOOLEAN_ARRAY = 'bool[]';

	/**
	 * Represents a DateTimeZone type.
	 * @var string
	 */
	public const DATE_TIME_ZONE = 'DateTimeZone';

	/**
	 * Represents a nullable DateTimeZone type.
	 * @var string
	 */
	public const NULLABLE_DATE_TIME_ZONE = '?DateTimeZone';

	/**
	 * Represents a DateTimeImmutable type.
	 * @var string
	 */
	public const DATE_TIME_IMMUTABLE = 'DateTimeImmutable';

	/**
	 * Represents a nullable DateTimeImmutable type.
	 * @var string
	 */
	public const NULLABLE_DATE_TIME_IMMUTABLE = '?DateTimeImmutable';

	/**
	 * Represents a DateTime type.
	 * @var string
	 */
	public const DATE_TIME = 'DateTime';

	/**
	 * Represents a nullable DateTime type.
	 * @var string
	 */
	public const NULLABLE_DATE_TIME = '?DateTime';
}
