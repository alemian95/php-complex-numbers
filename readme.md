# PHP Complex numbers

## Introduction

This library provides a simple way to manipulate and perform calculations with complex numbers.

## Installation

You can install this library via Composer

```bash
composer require alemian95/php-complex-numbers
```

## Usage

### Creating Complex Numbers

You can create a complex number using either Cartesian coordinates (real and imaginary parts) or polar coordinates (magnitude and argument)

```php
use Alemian95\PhpComplexNumbers\Complex;

// Create a complex number using Cartesian coordinates
$complex1 = new Complex(3.0, 4.0);

// Create a complex number using polar coordinates
$complex2 = Complex::createFromPolar(5.0, 0.92729521800161); // Equivalent to (3, 4)
```

### Basic Operations

You can perform basic arithmetic operations on complex numbers, such as addition, subtraction, multiplication, and division:

```php
// Addition
$sum = $complex1->add($complex2);

// Subtraction
$diff = $complex1->sub($complex2);

// Multiplication
$product = $complex1->mul($complex2);

// Division
$quotient = $complex1->div($complex2);
```

### Other operations

You can also perform other operations such as calculating the absolute value, argument, and conjugate of a complex number:

```php
// Absolute value
$absoluteValue = $complex1->abs();

// Argument
$argument = $complex1->arg();

// Conjugate
$conjugate = $complex1->conjugate();
```

## Contributing

Contributions are welcome! If you find any issues or have suggestions for improvements, please open an issue or submit a pull request on GitHub.

## License

This library is licensed under the MIT License.
