<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\Tests\DataProviders\UnitTests\BiDirectionalConverters\AbstractBiDirectionalConverterTest;

use CodeKandis\Converters\BiDirectionalConverters\BinaryStringToBooleanArrayBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\BinaryStringToIntegerBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\BooleanArrayToBinaryStringBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\BooleanIntegerStringToBooleanBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\BooleanIntegerToBooleanBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\BooleanStringToBooleanBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\BooleanToBooleanIntegerBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\BooleanToBooleanIntegerStringBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\BooleanToBooleanStringBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\FloatStringToFloatBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\FloatToFloatStringBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\IntegerStringToIntegerBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\IntegerToBinaryStringBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\IntegerToIntegerStringBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\NullableBinaryStringToNullableIntegerBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\NullableBooleanIntegerToNullableBooleanBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\NullableBooleanStringToNullableBooleanBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\NullableBooleanToNullableBooleanIntegerBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\NullableBooleanToNullableBooleanStringBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\NullableFloatStringToNullableFloatBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\NullableFloatToNullableFloatStringBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\NullableIntegerStringToNullableIntegerBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\NullableIntegerToNullableBinaryStringBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\NullableIntegerToNullableIntegerStringBiDirectionalConverter;
use CodeKandis\PhpUnit\DataProviderInterface;
use Override;

/**
 * Represents a data provider providing bidirectional converter class names.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class BiDirectionalConverterClassNamesDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0  => [
				'biDirectionalConverterClassName' => BinaryStringToBooleanArrayBiDirectionalConverter::class
			],
			1  => [
				'biDirectionalConverterClassName' => BinaryStringToIntegerBiDirectionalConverter::class
			],
			2  => [
				'biDirectionalConverterClassName' => BooleanArrayToBinaryStringBiDirectionalConverter::class
			],
			3  => [
				'biDirectionalConverterClassName' => BooleanIntegerStringToBooleanBiDirectionalConverter::class
			],
			4  => [
				'biDirectionalConverterClassName' => BooleanIntegerToBooleanBiDirectionalConverter::class
			],
			5  => [
				'biDirectionalConverterClassName' => BooleanStringToBooleanBiDirectionalConverter::class
			],
			6  => [
				'biDirectionalConverterClassName' => BooleanToBooleanIntegerBiDirectionalConverter::class
			],
			7  => [
				'biDirectionalConverterClassName' => BooleanToBooleanIntegerStringBiDirectionalConverter::class
			],
			8  => [
				'biDirectionalConverterClassName' => BooleanToBooleanStringBiDirectionalConverter::class
			],
			9  => [
				'biDirectionalConverterClassName' => FloatStringToFloatBiDirectionalConverter::class
			],
			10 => [
				'biDirectionalConverterClassName' => FloatToFloatStringBiDirectionalConverter::class
			],
			11 => [
				'biDirectionalConverterClassName' => IntegerStringToIntegerBiDirectionalConverter::class
			],
			12 => [
				'biDirectionalConverterClassName' => IntegerToBinaryStringBiDirectionalConverter::class
			],
			13 => [
				'biDirectionalConverterClassName' => IntegerToIntegerStringBiDirectionalConverter::class
			],
			14 => [
				'biDirectionalConverterClassName' => NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter::class
			],
			15 => [
				'biDirectionalConverterClassName' => NullableBinaryStringToNullableIntegerBiDirectionalConverter::class
			],
			16 => [
				'biDirectionalConverterClassName' => NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter::class
			],
			17 => [
				'biDirectionalConverterClassName' => NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter::class
			],
			18 => [
				'biDirectionalConverterClassName' => NullableBooleanIntegerToNullableBooleanBiDirectionalConverter::class
			],
			19 => [
				'biDirectionalConverterClassName' => NullableBooleanStringToNullableBooleanBiDirectionalConverter::class
			],
			20 => [
				'biDirectionalConverterClassName' => NullableBooleanToNullableBooleanIntegerBiDirectionalConverter::class
			],
			21 => [
				'biDirectionalConverterClassName' => NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter::class
			],
			22 => [
				'biDirectionalConverterClassName' => NullableBooleanToNullableBooleanStringBiDirectionalConverter::class
			],
			23 => [
				'biDirectionalConverterClassName' => NullableFloatStringToNullableFloatBiDirectionalConverter::class
			],
			24 => [
				'biDirectionalConverterClassName' => NullableFloatToNullableFloatStringBiDirectionalConverter::class
			],
			25 => [
				'biDirectionalConverterClassName' => NullableIntegerStringToNullableIntegerBiDirectionalConverter::class
			],
			26 => [
				'biDirectionalConverterClassName' => NullableIntegerToNullableBinaryStringBiDirectionalConverter::class
			],
			27 => [
				'biDirectionalConverterClassName' => NullableIntegerToNullableIntegerStringBiDirectionalConverter::class
			]
		];
	}
}
