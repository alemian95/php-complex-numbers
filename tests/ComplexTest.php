<?php

namespace Alemian95\PhpComplexNumbers\Test;

use Alemian95\PhpComplexNumbers\Complex;
use PHPUnit\Framework\TestCase;

class ComplexTest extends TestCase
{
    public function testConstructor()
    {
        $complex = new Complex(3.0, 4.0);
        $this->assertInstanceOf(Complex::class, $complex);
    }

    public function testCreate()
    {
        $complex = Complex::create(3.0, 4.0);
        $this->assertInstanceOf(Complex::class, $complex);
    }

    public function testCreateFromPolar()
    {
        $complex = Complex::createFromPolar(5.0, 0.92729521800161); // Should equal to (3, 4)
        $this->assertInstanceOf(Complex::class, $complex);
        $this->assertEqualsWithDelta(3.0, $complex->re(), 0.01, '');
        $this->assertEqualsWithDelta(4.0, $complex->im(), 0.01, '');
    }

    public function testRe()
    {
        $complex = new Complex(3.0, 4.0);
        $this->assertEqualsWithDelta(3.0, $complex->re(), 0.01, '');
    }

    public function testIm()
    {
        $complex = new Complex(3.0, 4.0);
        $this->assertEqualsWithDelta(4.0, $complex->im(), 0.01, '');
    }

    public function testAbs()
    {
        $complex = new Complex(3.0, 4.0);
        $this->assertEqualsWithDelta(5.0, $complex->abs(), 0.01, '');
    }

    public function testArg()
    {
        $complex = new Complex(3.0, 4.0);
        $this->assertEqualsWithDelta(0.92729521800161, $complex->arg(), 0.01, '');
    }

    public function testConjugate()
    {
        $complex = new Complex(3.0, 4.0);
        $conjugate = $complex->conjugate();
        $this->assertEqualsWithDelta(3.0, $conjugate->re(), 0.01, '');
        $this->assertEqualsWithDelta(-4.0, $conjugate->im(), 0.01, '');
    }

    public function testAdd()
    {
        $complex1 = new Complex(3.0, 4.0);
        $complex2 = new Complex(1.0, 2.0);
        $sum = $complex1->add($complex2);
        $this->assertEqualsWithDelta(4.0, $sum->re(), 0.01, '');
        $this->assertEqualsWithDelta(6.0, $sum->im(), 0.01, '');
    }

    public function testSub()
    {
        $complex1 = new Complex(3.0, 4.0);
        $complex2 = new Complex(1.0, 2.0);
        $diff = $complex1->sub($complex2);
        $this->assertEqualsWithDelta(2.0, $diff->re(), 0.01, '');
        $this->assertEqualsWithDelta(2.0, $diff->im(), 0.01, '');
    }

    public function testMul()
    {
        $complex1 = new Complex(3.0, 4.0);
        $complex2 = new Complex(1.0, 2.0);
        $mul = $complex1->mul($complex2);
        $this->assertEqualsWithDelta(-5.0, $mul->re(), 0.01, '');
        $this->assertEqualsWithDelta(10.0, $mul->im(), 0.01, '');
    }

    public function testDiv()
    {
        $complex1 = new Complex(3.0, 4.0);
        $complex2 = new Complex(1.0, 2.0);
        $div = $complex1->div($complex2);
        $this->assertEqualsWithDelta(2.2, $div->re(), 0.01, '');
        $this->assertEqualsWithDelta(-0.4, $div->im(), 0.01, '');
    }
}
