<?php

namespace Alemian95\PhpComplexNumbers;

class Complex
{

    private float $re;
    private float $im;

    /**
     * Construct
     * @param float real: the real value of the complex number
     * @param float immaginary: the immaginary value of the complex number
     */
    public function __construct(float $real, float $immaginary)
    {
        $this->re = $real;
        $this->im = $immaginary;
    }

    /**
     * Create a complex number from its real and immaginary value
     * @param float real: the real value of the complex number
     * @param float immaginary: the immaginary value of the complex number
     * @return Complex
     */
    public static function create(float $real, float $immaginary)
    {
        return new self($real, $immaginary);
    }

    /**
     * Create a complex number from its polar coordinates
     * @param float abs: the absolute value of the complex number
     * @param float arg: the argument of the complex number
     * @return Complex
     */
    public static function createFromPolar(float $abs, float $arg)
    {
        $re = $abs * cos($arg);
        $im = $abs * sin($arg);
        return new self($re, $im);
    }

    /**
     * Returns the real value of the complex number
     * @return float
     */
    public function re(): float
    {
        return $this->re;
    }

    /**
     * Returns the immaginary value of the complex number
     * @return float
     */
    public function im(): float
    {
        return $this->im;
    }

    /**
     * Returns the absolute value of the complex number
     * @return float
     */
    public function abs(): float
    {
        return sqrt(pow($this->re, 2) + pow($this->im, 2));
    }

    /**
     * Returns the argument of the complex number
     * @return float
     */
    public function arg(): float
    {
        return atan2($this->im, $this->re);
    }

    /**
     * Returns the complex conjugate of the complex number
     * @return Complex
     */
    public function conjugate(): Complex
    {
        return new Complex($this->re, -$this->im);
    }

    /**
     * Returns the sum between this and the argument
     * @param Complex c: the number to add
     * @return Complex
     */
    public function add(Complex $c): Complex
    {
        return new Complex($this->re + $c->re, $this->im + $c->im);
    }

    /**
     * Returns the difference between this and the argument
     * @param Complex c: the number to subtract
     * @return Complex
     */
    public function sub(Complex $c): Complex
    {
        return new Complex($this->re - $c->re, $this->im - $c->im);
    }

    /**
     * Returns the multiplication between this and the argument
     * @param Complex c: the number to multiply
     * @return Complex
     */
    public function mul(Complex $c): Complex
    {
        $u = $this->re * $c->re - $this->im * $c->im;
        $v = $this->re * $c->im + $this->im * $c->re;
        return new Complex($u, $v);
    }

    /**
     * Returns the division between this and the argument
     * @param Complex c: the number to divide
     * @return Complex
     */
    public function div(Complex $c): Complex
    {
        $div = pow($c->re, 2) + pow($c->im, 2);
        $tmp = $this->mul($c->conjugate());
        return new Complex($tmp->re / $div, $tmp->im / $div);
    }
}