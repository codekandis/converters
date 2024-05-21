# Documentation

## Index

* [Base converters](#base-converters)
* [Concrete converters](#concrete-converters)
  * [Unidirectional converters](#unidirectional-converters)
  * [Bidirectional converters](#bidirectional-converters)

## Base converters

* [`AbstractConverter`][srclink-BaseConverters-AbstractConverter]

  Represents the base class of any converter.

* [`AbstractDateTimeRelatedConverter`][srclink-BaseConverters-AbstractDateTimeRelatedConverter]

  Represents the base class of any `DateTime` related converter.

* [`AbstractBiDirectionalConverter`][srclink-BaseConverters-AbstractBiDirectionalConverter]

  Represents the base class of any bidirectional converter.

* [`AbstractBiDirectionalConverterTrait`][srclink-BaseConverters-AbstractBiDirectionalConverterTrait]

  Represents the trait of any bidirectional converter.

* [`AbstractDateTimeRelatedBiDirectionalConverter`][srclink-BaseConverters-AbstractDateTimeRelatedBiDirectionalConverter]

  Represents the base class of any `DateTime` related bidirectional converter.

## Concrete converters

### Unidirectional converters

* [`BinaryStringToBooleanArrayUniDirectionalConverter`][srclink-UniDirectionalConverters-BinaryStringToBooleanArrayUniDirectionalConverter]

  Converts a binary string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_BINARY_STRING`][srclink-ValidValuesRegularExpressions-RegexBinaryString] into its corresponding boolean array containing values equal to `false` or `true`.

* [`BinaryStringToIntegerUniDirectionalConverter`][srclink-UniDirectionalConverters-BinaryStringToIntegerUniDirectionalConverter]

  Converts a binary string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_BINARY_STRING`][srclink-ValidValuesRegularExpressions-RegexBinaryString] into its corresponding integer value.

* [`BooleanArrayToBinaryStringUniDirectionalConverter`][srclink-UniDirectionalConverters-BooleanArrayToBinaryStringUniDirectionalConverter]

  Converts a boolean array containing values equal to `false` or `true` into its corresponding binary string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_BINARY_STRING`][srclink-ValidValuesRegularExpressions-RegexBinaryString].

* [`BooleanIntegerStringToBooleanUniDirectionalConverter`][srclink-UniDirectionalConverters-BooleanIntegerStringToBooleanUniDirectionalConverter]

  Converts a boolean integer string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_BOOLEAN_INTEGER_STRING`][srclink-ValidValuesRegularExpressions-RegexBooleanIntegerString] into its corresponding boolean value equal to `false` or `true`.

* [`BooleanIntegerToBooleanUniDirectionalConverter`][srclink-UniDirectionalConverters-BooleanIntegerToBooleanUniDirectionalConverter]

  Converts a boolean integer value equal to `0` or `1` into its corresponding boolean value equal to `false` or `true`.

* [`BooleanStringToBooleanUniDirectionalConverter`][srclink-UniDirectionalConverters-BooleanStringToBooleanUniDirectionalConverter]

  Converts a boolean string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_BOOLEAN_STRING`][srclink-ValidValuesRegularExpressions-RegexBooleanString] into its corresponding boolean value equal to `false` or `true`.

* [`BooleanToBooleanIntegerStringUniDirectionalConverter`][srclink-UniDirectionalConverters-BooleanToBooleanIntegerStringUniDirectionalConverter]

  Converts a boolean value equal to `false` or `true` into its corresponding boolean integer string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_BOOLEAN_INTEGER_STRING`][srclink-ValidValuesRegularExpressions-RegexBooleanIntegerString].

* [`BooleanToBooleanIntegerUniDirectionalConverter`][srclink-UniDirectionalConverters-BooleanToBooleanIntegerUniDirectionalConverter]

  Converts a boolean value equal to `false` or `true` into its corresponding boolean integer value equal to `0` or `1`.

* [`BooleanToBooleanStringUniDirectionalConverter`][srclink-UniDirectionalConverters-BooleanToBooleanStringUniDirectionalConverter]

  Converts a boolean value equal to `false` or `true` into its corresponding boolean string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_BOOLEAN_STRING`][srclink-ValidValuesRegularExpressions-RegexBooleanString].

* [`ClassConstantsToArrayUniDirectionalConverter`][srclink-UniDirectionalConverters-ClassConstantsToArrayUniDirectionalConverter]

  Converts class constants into an array of corresponding key value pairs.

* [`DateTimeImmutableToDateTimeStringUniDirectionalConverter`][srclink-UniDirectionalConverters-DateTimeImmutableToDateTimeStringUniDirectionalConverter]

  Converts a `DateTimeImmutable` value into its corresponding `DateTime` string value depending on a given format.

* [`DateTimeStringToDateTimeImmutableUniDirectionalConverter`][srclink-UniDirectionalConverters-DateTimeStringToDateTimeImmutableUniDirectionalConverter]

  Converts a `DateTime` string value into its corresponding `DateTimeImmutable` value depending on a given format.

* [`DateTimeStringToDateTimeUniDirectionalConverter`][srclink-UniDirectionalConverters-DateTimeStringToDateTimeUniDirectionalConverter]

  Converts a `DateTime` string value into its corresponding `DateTime` value depending on a given format.

* [`DateTimeToDateTimeStringUniDirectionalConverter`][srclink-UniDirectionalConverters-DateTimeToDateTimeStringUniDirectionalConverter]

  Converts a `DateTime` value into its corresponding `DateTime` string value depending on a given format.

* [`FloatStringToFloatUniDirectionalConverter`][srclink-UniDirectionalConverters-FloatStringToFloatUniDirectionalConverter]

  Converts a float string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_FLOAT_STRING`][srclink-ValidValuesRegularExpressions-RegexFloatString] into its corresponding float value.

* [`FloatToFloatStringUniDirectionalConverter`][srclink-UniDirectionalConverters-FloatToFloatStringUniDirectionalConverter]

  Converts a float value into its corresponding float string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_FLOAT_STRING`][srclink-ValidValuesRegularExpressions-RegexFloatString].

* [`IntegerStringToIntegerUniDirectionalConverter`][srclink-UniDirectionalConverters-IntegerStringToIntegerUniDirectionalConverter]

  Converts an integer string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_INTEGER_STRING`][srclink-ValidValuesRegularExpressions-RegexIntegerString] into its corresponding integer value.

* [`IntegerToBinaryStringUniDirectionalConverter`][srclink-UniDirectionalConverters-IntegerToBinaryStringUniDirectionalConverter]

  Converts an integer value into its corresponding binary string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_BINARY_STRING`][srclink-ValidValuesRegularExpressions-RegexBinaryString].

* [`IntegerToIntegerStringUniDirectionalConverter`][srclink-UniDirectionalConverters-IntegerToIntegerStringUniDirectionalConverter]

  Converts an integer value into its corresponding integer string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_INTEGER_STRING`][srclink-ValidValuesRegularExpressions-RegexIntegerString].

* [`NullableBinaryStringToNullableBooleanArrayUniDirectionalConverter`][srclink-UniDirectionalConverters-NullableBinaryStringToNullableBooleanArrayUniDirectionalConverter]

  Converts a nullable binary string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_BINARY_STRING`][srclink-ValidValuesRegularExpressions-RegexBinaryString] into its corresponding nullable boolean array containing values equal to `false` or `true`.

* [`NullableBinaryStringToNullableIntegerUniDirectionalConverter`][srclink-UniDirectionalConverters-NullableBinaryStringToNullableIntegerUniDirectionalConverter]

  Converts a nullable binary string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_BINARY_STRING`][srclink-ValidValuesRegularExpressions-RegexBinaryString] into its corresponding nullable integer value.

* [`NullableBooleanArrayToNullableBinaryStringUniDirectionalConverter`][srclink-UniDirectionalConverters-NullableBooleanArrayToNullableBinaryStringUniDirectionalConverter]

  Converts a nullable boolean array containing values equal to `false` or `true` into its corresponding nullable binary string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_BINARY_STRING`][srclink-ValidValuesRegularExpressions-RegexBinaryString].

* [`NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverter`][srclink-UniDirectionalConverters-NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverter]

  Converts a nullable boolean integer string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_BOOLEAN_INTEGER_STRING`][srclink-ValidValuesRegularExpressions-RegexBooleanIntegerString] into its corresponding nullable boolean value equal to `false` or `true`.

* [`NullableBooleanIntegerToNullableBooleanUniDirectionalConverter`][srclink-UniDirectionalConverters-NullableBooleanIntegerToNullableBooleanUniDirectionalConverter]

  Converts a nullable boolean integer value equal to `0` or `1` into its corresponding nullable boolean value equal to `false` or `true`.

* [`NullableBooleanStringToNullableBooleanUniDirectionalConverter`][srclink-UniDirectionalConverters-NullableBooleanStringToNullableBooleanUniDirectionalConverter]

  Converts a nullable boolean string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_BOOLEAN_STRING`][srclink-ValidValuesRegularExpressions-RegexBooleanString] into its corresponding nullable boolean value equal to `false` or `true`.

* [`NullableBooleanToNullableBooleanIntegerStringUniDirectionalConverter`][srclink-UniDirectionalConverters-NullableBooleanToNullableBooleanIntegerStringUniDirectionalConverter]

  Converts a nullable boolean value equal to `false` or `true` into its corresponding nullable boolean integer string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_BOOLEAN_INTEGER_STRING`][srclink-ValidValuesRegularExpressions-RegexBooleanIntegerString].

* [`NullableBooleanToNullableBooleanIntegerUniDirectionalConverter`][srclink-UniDirectionalConverters-NullableBooleanToNullableBooleanIntegerUniDirectionalConverter]

  Converts a nullable boolean value equal to `false` or `true` into its corresponding nullable boolean integer value equal to `0` or `1`.

* [`NullableBooleanToNullableBooleanStringUniDirectionalConverter`][srclink-UniDirectionalConverters-NullableBooleanToNullableBooleanStringUniDirectionalConverter]

  Converts a nullable boolean value equal to `false` or `true` into its corresponding nullable boolean string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_BOOLEAN_STRING`][srclink-ValidValuesRegularExpressions-RegexBooleanString].

* [`NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter`][srclink-UniDirectionalConverters-NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter]

  Converts a nullable `DateTimeImmutable` value into its corresponding nullable `DateTime` string value depending on a given format.

* [`NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter`][srclink-UniDirectionalConverters-NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter]

  Converts a nullable `DateTime` string value into its corresponding nullable `DateTimeImmutable` value depending on a given format.

* [`NullableDateTimeStringToNullableDateTimeUniDirectionalConverter`][srclink-UniDirectionalConverters-NullableDateTimeStringToNullableDateTimeUniDirectionalConverter]

  Converts a nullable `DateTime` string value into its corresponding nullable `DateTime` value depending on a given format.

* [`NullableDateTimeToNullableDateTimeStringUniDirectionalConverter`][srclink-UniDirectionalConverters-NullableDateTimeToNullableDateTimeStringUniDirectionalConverter]

  Converts a nullable `DateTime` value into its corresponding nullable `DateTime` string value depending on a given format.

* [`NullableFloatStringToNullableFloatUniDirectionalConverter`][srclink-UniDirectionalConverters-NullableFloatStringToNullableFloatUniDirectionalConverter]

  Converts a nullable float string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_FLOAT_STRING`][srclink-ValidValuesRegularExpressions-RegexFloatString] into its corresponding nullable float value.

* [`NullableFloatToNullableFloatStringUniDirectionalConverter`][srclink-UniDirectionalConverters-NullableFloatToNullableFloatStringUniDirectionalConverter]

  Converts a nullable float value into its corresponding nullable float string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_FLOAT_STRING`][srclink-ValidValuesRegularExpressions-RegexFloatString].

* [`NullableIntegerStringToNullableIntegerUniDirectionalConverter`][srclink-UniDirectionalConverters-NullableIntegerStringToNullableIntegerUniDirectionalConverter]

  Converts a nullable integer string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_INTEGER_STRING`][srclink-ValidValuesRegularExpressions-RegexIntegerString] into its corresponding nullable integer value.

* [`NullableIntegerToNullableBinaryStringUniDirectionalConverter`][srclink-UniDirectionalConverters-NullableIntegerToNullableBinaryStringUniDirectionalConverter]

  Converts a nullable integer value into its corresponding nullable binary string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_BINARY_STRING`][srclink-ValidValuesRegularExpressions-RegexBinaryString].

* [`NullableIntegerToNullableIntegerStringUniDirectionalConverter`][srclink-UniDirectionalConverters-NullableIntegerToNullableIntegerStringUniDirectionalConverter]

  Converts a nullable integer value into its corresponding nullable integer string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_INTEGER_STRING`][srclink-ValidValuesRegularExpressions-RegexIntegerString].

### Bidirectional converters

* [`BinaryStringToBooleanArrayBiDirectionalConverter`][srclink-BiDirectionalConverters-BinaryStringToBooleanArrayBiDirectionalConverter]

  Converts a binary string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_BINARY_STRING`][srclink-ValidValuesRegularExpressions-RegexBinaryString] into its corresponding boolean array containing values equal to `false` or `true` - and vice versa.

* [`BinaryStringToIntegerBiDirectionalConverter`][srclink-BiDirectionalConverters-BinaryStringToIntegerBiDirectionalConverter]

  Converts a binary string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_BINARY_STRING`][srclink-ValidValuesRegularExpressions-RegexBinaryString] into its corresponding integer value - and vice versa.

* [`BooleanArrayToBinaryStringBiDirectionalConverter`][srclink-BiDirectionalConverters-BooleanArrayToBinaryStringBiDirectionalConverter]

  Converts a boolean array containing values equal to `false` or `true` into its corresponding binary string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_BINARY_STRING`][srclink-ValidValuesRegularExpressions-RegexBinaryString] - and vice versa.

* [`BooleanIntegerStringToBooleanBiDirectionalConverter`][srclink-BiDirectionalConverters-BooleanIntegerStringToBooleanBiDirectionalConverter]

  Converts a boolean integer string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_BOOLEAN_INTEGER_STRING`][srclink-ValidValuesRegularExpressions-RegexBooleanIntegerString] into its corresponding boolean value equal to `false` or `true` - and vice versa.

* [`BooleanIntegerToBooleanBiDirectionalConverter`][srclink-BiDirectionalConverters-BooleanIntegerToBooleanBiDirectionalConverter]

  Converts a boolean integer value equal to `0` or `1` into its corresponding boolean value equal to `false` or `true` - and vice versa.

* [`BooleanStringToBooleanBiDirectionalConverter`][srclink-BiDirectionalConverters-BooleanStringToBooleanBiDirectionalConverter]

  Converts a boolean string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_BOOLEAN_STRING`][srclink-ValidValuesRegularExpressions-RegexBooleanString] into its corresponding boolean value equal to `false` or `true` - and vice versa.

* [`BooleanToBooleanIntegerStringBiDirectionalConverter`][srclink-BiDirectionalConverters-BooleanToBooleanIntegerStringBiDirectionalConverter]

  Converts a boolean value equal to `false` or `true` into its corresponding boolean integer string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_BOOLEAN_INTEGER_STRING`][srclink-ValidValuesRegularExpressions-RegexBooleanIntegerString] - and vice versa.

* [`BooleanToBooleanIntegerBiDirectionalConverter`][srclink-BiDirectionalConverters-BooleanToBooleanIntegerBiDirectionalConverter]

  Converts a boolean value equal to `false` or `true` into its corresponding boolean integer value equal to `0` or `1` - and vice versa.

* [`BooleanToBooleanStringBiDirectionalConverter`][srclink-BiDirectionalConverters-BooleanToBooleanStringBiDirectionalConverter]

  Converts a boolean value equal to `false` or `true` into its corresponding boolean string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_BOOLEAN_STRING`][srclink-ValidValuesRegularExpressions-RegexBooleanString] - and vice versa.

* [`DateTimeImmutableToDateTimeStringBiDirectionalConverter`][srclink-BiDirectionalConverters-DateTimeImmutableToDateTimeStringBiDirectionalConverter]

  Converts a `DateTimeImmutable` value into its corresponding `DateTime` string value depending on a given format - and vice versa.

* [`DateTimeStringToDateTimeImmutableBiDirectionalConverter`][srclink-BiDirectionalConverters-DateTimeStringToDateTimeImmutableBiDirectionalConverter]

  Converts a `DateTime` string value into its corresponding `DateTimeImmutable` value depending on a given format - and vice versa.

* [`DateTimeStringToDateTimeBiDirectionalConverter`][srclink-BiDirectionalConverters-DateTimeStringToDateTimeBiDirectionalConverter]

  Converts a `DateTime` string value into its corresponding `DateTime` value depending on a given format - and vice versa.

* [`DateTimeToDateTimeStringBiDirectionalConverter`][srclink-BiDirectionalConverters-DateTimeToDateTimeStringBiDirectionalConverter]

  Converts a `DateTime` value into its corresponding `DateTime` string value depending on a given format - and vice versa.

* [`FloatStringToFloatBiDirectionalConverter`][srclink-BiDirectionalConverters-FloatStringToFloatBiDirectionalConverter]

  Converts a float string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_FLOAT_STRING`][srclink-ValidValuesRegularExpressions-RegexFloatString] into its corresponding float value - and vice versa.

* [`FloatToFloatStringBiDirectionalConverter`][srclink-BiDirectionalConverters-FloatToFloatStringBiDirectionalConverter]

  Converts a float value into its corresponding float string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_FLOAT_STRING`][srclink-ValidValuesRegularExpressions-RegexFloatString] - and vice versa.

* [`IntegerStringToIntegerBiDirectionalConverter`][srclink-BiDirectionalConverters-IntegerStringToIntegerBiDirectionalConverter]

  Converts an integer string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_INTEGER_STRING`][srclink-ValidValuesRegularExpressions-RegexIntegerString] into its corresponding integer value - and vice versa.

* [`IntegerToBinaryStringBiDirectionalConverter`][srclink-BiDirectionalConverters-IntegerToBinaryStringBiDirectionalConverter]

  Converts an integer value into its corresponding binary string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_BINARY_STRING`][srclink-ValidValuesRegularExpressions-RegexBinaryString] - and vice versa.

* [`IntegerToIntegerStringBiDirectionalConverter`][srclink-BiDirectionalConverters-IntegerToIntegerStringBiDirectionalConverter]

  Converts an integer value into its corresponding integer string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_INTEGER_STRING`][srclink-ValidValuesRegularExpressions-RegexIntegerString] - and vice versa.

* [`NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter`][srclink-BiDirectionalConverters-NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter]

  Converts a nullable binary string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_BINARY_STRING`][srclink-ValidValuesRegularExpressions-RegexBinaryString] into its corresponding nullable boolean array containing values equal to `false` or `true` - and vice versa.

* [`NullableBinaryStringToNullableIntegerBiDirectionalConverter`][srclink-BiDirectionalConverters-NullableBinaryStringToNullableIntegerBiDirectionalConverter]

  Converts a nullable binary string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_BINARY_STRING`][srclink-ValidValuesRegularExpressions-RegexBinaryString] into its corresponding nullable integer value - and vice versa.

* [`NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter`][srclink-BiDirectionalConverters-NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter]

  Converts a nullable boolean array containing values equal to `false` or `true` into its corresponding nullable binary string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_BINARY_STRING`][srclink-ValidValuesRegularExpressions-RegexBinaryString] - and vice versa.

* [`NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter`][srclink-BiDirectionalConverters-NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter]

  Converts a nullable boolean integer string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_BOOLEAN_INTEGER_STRING`][srclink-ValidValuesRegularExpressions-RegexBooleanIntegerString] into its corresponding nullable boolean value equal to `false` or `true` - and vice versa.

* [`NullableBooleanIntegerToNullableBooleanBiDirectionalConverter`][srclink-BiDirectionalConverters-NullableBooleanIntegerToNullableBooleanBiDirectionalConverter]

  Converts a nullable boolean integer value equal to `0` or `1` into its corresponding nullable boolean value equal to `false` or `true` - and vice versa.

* [`NullableBooleanStringToNullableBooleanBiDirectionalConverter`][srclink-BiDirectionalConverters-NullableBooleanStringToNullableBooleanBiDirectionalConverter]

  Converts a nullable boolean string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_BOOLEAN_STRING`][srclink-ValidValuesRegularExpressions-RegexBooleanString] into its corresponding nullable boolean value equal to `false` or `true` - and vice versa.

* [`NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter`][srclink-BiDirectionalConverters-NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter]

  Converts a nullable boolean value equal to `false` or `true` into its corresponding nullable boolean integer string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_BOOLEAN_INTEGER_STRING`][srclink-ValidValuesRegularExpressions-RegexBooleanIntegerString] - and vice versa.

* [`NullableBooleanToNullableBooleanIntegerBiDirectionalConverter`][srclink-BiDirectionalConverters-NullableBooleanToNullableBooleanIntegerBiDirectionalConverter]

  Converts a nullable boolean value equal to `false` or `true` into its corresponding nullable boolean integer value equal to `0` or `1` - and vice versa.

* [`NullableBooleanToNullableBooleanStringBiDirectionalConverter`][srclink-BiDirectionalConverters-NullableBooleanToNullableBooleanStringBiDirectionalConverter]

  Converts a nullable boolean value equal to `false` or `true` into its corresponding nullable boolean string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_BOOLEAN_STRING`][srclink-ValidValuesRegularExpressions-RegexBooleanString] - and vice versa.

* [`NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter`][srclink-BiDirectionalConverters-NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter]

  Converts a nullable `DateTimeImmutable` value into its corresponding nullable `DateTime` string value depending on a given format - and vice versa.

* [`NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter`][srclink-BiDirectionalConverters-NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter]

  Converts a nullable `DateTime` string value into its corresponding nullable `DateTimeImmutable` value depending on a given format - and vice versa.

* [`NullableDateTimeStringToNullableDateTimeBiDirectionalConverter`][srclink-BiDirectionalConverters-NullableDateTimeStringToNullableDateTimeBiDirectionalConverter]

  Converts a nullable `DateTime` string value into its corresponding nullable `DateTime` value depending on a given format - and vice versa.

* [`NullableDateTimeToNullableDateTimeStringBiDirectionalConverter`][srclink-BiDirectionalConverters-NullableDateTimeToNullableDateTimeStringBiDirectionalConverter]

  Converts a nullable `DateTime` value into its corresponding nullable `DateTime` string value depending on a given format - and vice versa.

* [`NullableFloatStringToNullableFloatBiDirectionalConverter`][srclink-BiDirectionalConverters-NullableFloatStringToNullableFloatBiDirectionalConverter]

  Converts a nullable float string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_FLOAT_STRING`][srclink-ValidValuesRegularExpressions-RegexFloatString] into its corresponding nullable float value - and vice versa.

* [`NullableFloatToNullableFloatStringBiDirectionalConverter`][srclink-BiDirectionalConverters-NullableFloatToNullableFloatStringBiDirectionalConverter]

  Converts a nullable float value into its corresponding nullable float string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_FLOAT_STRING`][srclink-ValidValuesRegularExpressions-RegexFloatString] - and vice versa.

* [`NullableIntegerStringToNullableIntegerBiDirectionalConverter`][srclink-BiDirectionalConverters-NullableIntegerStringToNullableIntegerBiDirectionalConverter]

  Converts a nullable integer string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_INTEGER_STRING`][srclink-ValidValuesRegularExpressions-RegexIntegerString] into its corresponding nullable integer value - and vice versa.

* [`NullableIntegerToNullableBinaryStringBiDirectionalConverter`][srclink-BiDirectionalConverters-NullableIntegerToNullableBinaryStringBiDirectionalConverter]

  Converts a nullable integer value into its corresponding nullable binary string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_BINARY_STRING`][srclink-ValidValuesRegularExpressions-RegexBinaryString] - and vice versa.

* [`NullableIntegerToNullableIntegerStringBiDirectionalConverter`][srclink-BiDirectionalConverters-NullableIntegerToNullableIntegerStringBiDirectionalConverter]

  Converts a nullable integer value into its corresponding nullable integer string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_INTEGER_STRING`][srclink-ValidValuesRegularExpressions-RegexIntegerString] - and vice versa.



[srclink-ValidValuesRegularExpressions-RegexBooleanString]: ../src/ValidValuesRegularExpressions.php#L15
[srclink-ValidValuesRegularExpressions-RegexBooleanIntegerString]: ../src/ValidValuesRegularExpressions.php#L21
[srclink-ValidValuesRegularExpressions-RegexBinaryString]: ../src/ValidValuesRegularExpressions.php#L27
[srclink-ValidValuesRegularExpressions-RegexIntegerString]: ../src/ValidValuesRegularExpressions.php#L33
[srclink-ValidValuesRegularExpressions-RegexFloatString]: ../src/ValidValuesRegularExpressions.php#L39
[srclink-BaseConverters-AbstractConverter]: ../src/AbstractConverter.php
[srclink-BaseConverters-AbstractDateTimeRelatedConverter]: ../src/AbstractDateTimeRelatedConverter.php
[srclink-BaseConverters-AbstractBiDirectionalConverter]: ../src/BiDirectionalConverters/AbstractBiDirectionalConverter.php
[srclink-BaseConverters-AbstractBiDirectionalConverterTrait]: ../src/BiDirectionalConverters/AbstractBiDirectionalConverterTrait.php
[srclink-BaseConverters-AbstractDateTimeRelatedBiDirectionalConverter]: ../src/BiDirectionalConverters/AbstractDateTimeRelatedBiDirectionalConverter.php
[srclink-UniDirectionalConverters-BinaryStringToBooleanArrayUniDirectionalConverter]: ../src/UniDirectionalConverters/BinaryStringToBooleanArrayUniDirectionalConverter.php
[srclink-UniDirectionalConverters-BinaryStringToIntegerUniDirectionalConverter]: ../src/UniDirectionalConverters/BinaryStringToIntegerUniDirectionalConverter.php
[srclink-UniDirectionalConverters-BooleanArrayToBinaryStringUniDirectionalConverter]: ../src/UniDirectionalConverters/BooleanArrayToBinaryStringUniDirectionalConverter.php
[srclink-UniDirectionalConverters-BooleanIntegerStringToBooleanUniDirectionalConverter]: ../src/UniDirectionalConverters/BooleanIntegerStringToBooleanUniDirectionalConverter.php
[srclink-UniDirectionalConverters-BooleanIntegerToBooleanUniDirectionalConverter]: ../src/UniDirectionalConverters/BooleanIntegerToBooleanUniDirectionalConverter.php
[srclink-UniDirectionalConverters-BooleanStringToBooleanUniDirectionalConverter]: ../src/UniDirectionalConverters/BooleanStringToBooleanUniDirectionalConverter.php
[srclink-UniDirectionalConverters-BooleanToBooleanIntegerStringUniDirectionalConverter]: ../src/UniDirectionalConverters/BooleanToBooleanIntegerStringUniDirectionalConverter.php
[srclink-UniDirectionalConverters-BooleanToBooleanIntegerUniDirectionalConverter]: ../src/UniDirectionalConverters/BooleanToBooleanIntegerUniDirectionalConverter.php
[srclink-UniDirectionalConverters-BooleanToBooleanStringUniDirectionalConverter]: ../src/UniDirectionalConverters/BooleanToBooleanStringUniDirectionalConverter.php
[srclink-UniDirectionalConverters-ClassConstantsToArrayUniDirectionalConverter]: ../src/UniDirectionalConverters/ClassConstantsToArrayUniDirectionalConverter.php
[srclink-UniDirectionalConverters-DateTimeImmutableToDateTimeStringUniDirectionalConverter]: ../src/UniDirectionalConverters/DateTimeImmutableToDateTimeStringUniDirectionalConverter.php
[srclink-UniDirectionalConverters-DateTimeStringToDateTimeImmutableUniDirectionalConverter]: ../src/UniDirectionalConverters/DateTimeStringToDateTimeImmutableUniDirectionalConverter.php
[srclink-UniDirectionalConverters-DateTimeStringToDateTimeUniDirectionalConverter]: ../src/UniDirectionalConverters/DateTimeStringToDateTimeUniDirectionalConverter.php
[srclink-UniDirectionalConverters-DateTimeToDateTimeStringUniDirectionalConverter]: ../src/UniDirectionalConverters/DateTimeToDateTimeStringUniDirectionalConverter.php
[srclink-UniDirectionalConverters-FloatStringToFloatUniDirectionalConverter]: ../src/UniDirectionalConverters/FloatStringToFloatUniDirectionalConverter.php
[srclink-UniDirectionalConverters-FloatToFloatStringUniDirectionalConverter]: ../src/UniDirectionalConverters/FloatToFloatStringUniDirectionalConverter.php
[srclink-UniDirectionalConverters-IntegerStringToIntegerUniDirectionalConverter]: ../src/UniDirectionalConverters/IntegerStringToIntegerUniDirectionalConverter.php
[srclink-UniDirectionalConverters-IntegerToBinaryStringUniDirectionalConverter]: ../src/UniDirectionalConverters/IntegerToBinaryStringUniDirectionalConverter.php
[srclink-UniDirectionalConverters-IntegerToIntegerStringUniDirectionalConverter]: ../src/UniDirectionalConverters/IntegerToIntegerStringUniDirectionalConverter.php
[srclink-UniDirectionalConverters-NullableBinaryStringToNullableBooleanArrayUniDirectionalConverter]: ../src/UniDirectionalConverters/NullableBinaryStringToNullableBooleanArrayUniDirectionalConverter.php
[srclink-UniDirectionalConverters-NullableBinaryStringToNullableIntegerUniDirectionalConverter]: ../src/UniDirectionalConverters/NullableBinaryStringToNullableIntegerUniDirectionalConverter.php
[srclink-UniDirectionalConverters-NullableBooleanArrayToNullableBinaryStringUniDirectionalConverter]: ../src/UniDirectionalConverters/NullableBooleanArrayToNullableBinaryStringUniDirectionalConverter.php
[srclink-UniDirectionalConverters-NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverter]: ../src/UniDirectionalConverters/NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverter.php
[srclink-UniDirectionalConverters-NullableBooleanIntegerToNullableBooleanUniDirectionalConverter]: ../src/UniDirectionalConverters/NullableBooleanIntegerToNullableBooleanUniDirectionalConverter.php
[srclink-UniDirectionalConverters-NullableBooleanStringToNullableBooleanUniDirectionalConverter]: ../src/UniDirectionalConverters/NullableBooleanStringToNullableBooleanUniDirectionalConverter.php
[srclink-UniDirectionalConverters-NullableBooleanToNullableBooleanIntegerStringUniDirectionalConverter]: ../src/UniDirectionalConverters/NullableBooleanToNullableBooleanIntegerStringUniDirectionalConverter.php
[srclink-UniDirectionalConverters-NullableBooleanToNullableBooleanIntegerUniDirectionalConverter]: ../src/UniDirectionalConverters/NullableBooleanToNullableBooleanIntegerUniDirectionalConverter.php
[srclink-UniDirectionalConverters-NullableBooleanToNullableBooleanStringUniDirectionalConverter]: ../src/UniDirectionalConverters/NullableBooleanToNullableBooleanStringUniDirectionalConverter.php
[srclink-UniDirectionalConverters-NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter]: ../src/UniDirectionalConverters/NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter.php
[srclink-UniDirectionalConverters-NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter]: ../src/UniDirectionalConverters/NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter.php
[srclink-UniDirectionalConverters-NullableDateTimeStringToNullableDateTimeUniDirectionalConverter]: ../src/UniDirectionalConverters/NullableDateTimeStringToNullableDateTimeUniDirectionalConverter.php
[srclink-UniDirectionalConverters-NullableDateTimeToNullableDateTimeStringUniDirectionalConverter]: ../src/UniDirectionalConverters/NullableDateTimeToNullableDateTimeStringUniDirectionalConverter.php
[srclink-UniDirectionalConverters-NullableFloatStringToNullableFloatUniDirectionalConverter]: ../src/UniDirectionalConverters/NullableFloatStringToNullableFloatUniDirectionalConverter.php
[srclink-UniDirectionalConverters-NullableFloatToNullableFloatStringUniDirectionalConverter]: ../src/UniDirectionalConverters/NullableFloatToNullableFloatStringUniDirectionalConverter.php
[srclink-UniDirectionalConverters-NullableIntegerStringToNullableIntegerUniDirectionalConverter]: ../src/UniDirectionalConverters/NullableIntegerStringToNullableIntegerUniDirectionalConverter.php
[srclink-UniDirectionalConverters-NullableIntegerToNullableBinaryStringUniDirectionalConverter]: ../src/UniDirectionalConverters/NullableIntegerToNullableBinaryStringUniDirectionalConverter.php
[srclink-UniDirectionalConverters-NullableIntegerToNullableIntegerStringUniDirectionalConverter]: ../src/UniDirectionalConverters/NullableIntegerToNullableIntegerStringUniDirectionalConverter.php
[srclink-BiDirectionalConverters-BinaryStringToBooleanArrayBiDirectionalConverter]: ../src/BiDirectionalConverters/BinaryStringToBooleanArrayBiDirectionalConverter.php
[srclink-BiDirectionalConverters-BinaryStringToIntegerBiDirectionalConverter]: ../src/BiDirectionalConverters/BinaryStringToIntegerBiDirectionalConverter.php
[srclink-BiDirectionalConverters-BooleanArrayToBinaryStringBiDirectionalConverter]: ../src/BiDirectionalConverters/BooleanArrayToBinaryStringBiDirectionalConverter.php
[srclink-BiDirectionalConverters-BooleanIntegerStringToBooleanBiDirectionalConverter]: ../src/BiDirectionalConverters/BooleanIntegerStringToBooleanBiDirectionalConverter.php
[srclink-BiDirectionalConverters-BooleanIntegerToBooleanBiDirectionalConverter]: ../src/BiDirectionalConverters/BooleanIntegerToBooleanBiDirectionalConverter.php
[srclink-BiDirectionalConverters-BooleanStringToBooleanBiDirectionalConverter]: ../src/BiDirectionalConverters/BooleanStringToBooleanBiDirectionalConverter.php
[srclink-BiDirectionalConverters-BooleanToBooleanIntegerBiDirectionalConverter]: ../src/BiDirectionalConverters/BooleanToBooleanIntegerBiDirectionalConverter.php
[srclink-BiDirectionalConverters-BooleanToBooleanIntegerStringBiDirectionalConverter]: ../src/BiDirectionalConverters/BooleanToBooleanIntegerStringBiDirectionalConverter.php
[srclink-BiDirectionalConverters-BooleanToBooleanStringBiDirectionalConverter]: ../src/BiDirectionalConverters/BooleanToBooleanStringBiDirectionalConverter.php
[srclink-BiDirectionalConverters-DateTimeImmutableToDateTimeStringBiDirectionalConverter]: ../src/BiDirectionalConverters/DateTimeImmutableToDateTimeStringBiDirectionalConverter.php
[srclink-BiDirectionalConverters-DateTimeStringToDateTimeBiDirectionalConverter]: ../src/BiDirectionalConverters/DateTimeStringToDateTimeBiDirectionalConverter.php
[srclink-BiDirectionalConverters-DateTimeStringToDateTimeImmutableBiDirectionalConverter]: ../src/BiDirectionalConverters/DateTimeStringToDateTimeImmutableBiDirectionalConverter.php
[srclink-BiDirectionalConverters-DateTimeToDateTimeStringBiDirectionalConverter]: ../src/BiDirectionalConverters/DateTimeToDateTimeStringBiDirectionalConverter.php
[srclink-BiDirectionalConverters-FloatStringToFloatBiDirectionalConverter]: ../src/BiDirectionalConverters/FloatStringToFloatBiDirectionalConverter.php
[srclink-BiDirectionalConverters-FloatToFloatStringBiDirectionalConverter]: ../src/BiDirectionalConverters/FloatToFloatStringBiDirectionalConverter.php
[srclink-BiDirectionalConverters-IntegerStringToIntegerBiDirectionalConverter]: ../src/BiDirectionalConverters/IntegerStringToIntegerBiDirectionalConverter.php
[srclink-BiDirectionalConverters-IntegerToBinaryStringBiDirectionalConverter]: ../src/BiDirectionalConverters/IntegerToBinaryStringBiDirectionalConverter.php
[srclink-BiDirectionalConverters-IntegerToIntegerStringBiDirectionalConverter]: ../src/BiDirectionalConverters/IntegerToIntegerStringBiDirectionalConverter.php
[srclink-BiDirectionalConverters-NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter]: ../src/BiDirectionalConverters/NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter.php
[srclink-BiDirectionalConverters-NullableBinaryStringToNullableIntegerBiDirectionalConverter]: ../src/BiDirectionalConverters/NullableBinaryStringToNullableIntegerBiDirectionalConverter.php
[srclink-BiDirectionalConverters-NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter]: ../src/BiDirectionalConverters/NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter.php
[srclink-BiDirectionalConverters-NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter]: ../src/BiDirectionalConverters/NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter.php
[srclink-BiDirectionalConverters-NullableBooleanIntegerToNullableBooleanBiDirectionalConverter]: ../src/BiDirectionalConverters/NullableBooleanIntegerToNullableBooleanBiDirectionalConverter.php
[srclink-BiDirectionalConverters-NullableBooleanStringToNullableBooleanBiDirectionalConverter]: ../src/BiDirectionalConverters/NullableBooleanStringToNullableBooleanBiDirectionalConverter.php
[srclink-BiDirectionalConverters-NullableBooleanToNullableBooleanIntegerBiDirectionalConverter]: ../src/BiDirectionalConverters/NullableBooleanToNullableBooleanIntegerBiDirectionalConverter.php
[srclink-BiDirectionalConverters-NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter]: ../src/BiDirectionalConverters/NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter.php
[srclink-BiDirectionalConverters-NullableBooleanToNullableBooleanStringBiDirectionalConverter]: ../src/BiDirectionalConverters/NullableBooleanToNullableBooleanStringBiDirectionalConverter.php
[srclink-BiDirectionalConverters-NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter]: ../src/BiDirectionalConverters/NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter.php
[srclink-BiDirectionalConverters-NullableDateTimeStringToNullableDateTimeBiDirectionalConverter]: ../src/BiDirectionalConverters/NullableDateTimeStringToNullableDateTimeBiDirectionalConverter.php
[srclink-BiDirectionalConverters-NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter]: ../src/BiDirectionalConverters/NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter.php
[srclink-BiDirectionalConverters-NullableDateTimeToNullableDateTimeStringBiDirectionalConverter]: ../src/BiDirectionalConverters/NullableDateTimeToNullableDateTimeStringBiDirectionalConverter.php
[srclink-BiDirectionalConverters-NullableFloatStringToNullableFloatBiDirectionalConverter]: ../src/BiDirectionalConverters/NullableFloatStringToNullableFloatBiDirectionalConverter.php
[srclink-BiDirectionalConverters-NullableFloatToNullableFloatStringBiDirectionalConverter]: ../src/BiDirectionalConverters/NullableFloatToNullableFloatStringBiDirectionalConverter.php
[srclink-BiDirectionalConverters-NullableIntegerStringToNullableIntegerBiDirectionalConverter]: ../src/BiDirectionalConverters/NullableIntegerStringToNullableIntegerBiDirectionalConverter.php
[srclink-BiDirectionalConverters-NullableIntegerToNullableBinaryStringBiDirectionalConverter]: ../src/BiDirectionalConverters/NullableIntegerToNullableBinaryStringBiDirectionalConverter.php
[srclink-BiDirectionalConverters-NullableIntegerToNullableIntegerStringBiDirectionalConverter]: ../src/BiDirectionalConverters/NullableIntegerToNullableIntegerStringBiDirectionalConverter.php
