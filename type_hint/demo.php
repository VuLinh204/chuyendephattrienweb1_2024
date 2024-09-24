<?php

declare(strict_types=1);

require_once 'I.php';
require_once 'C.php';
require_once 'A.php';
require_once 'B.php';

class Demo
{
    public I $i;
    // 25 phương thức 

    public function typeAReturnA(): A
    {
        echo __FUNCTION__ . "<br>";
        return new A();
    }

    public function typeAReturnB(): A
    {
        echo __FUNCTION__ . "<br>";
        return new B();
    }

    public function typeAReturnC(): A
    {
        echo __FUNCTION__ . "<br>";
        return new C();
    }

    public function typeAReturnI(): A
    {
        echo __FUNCTION__ . "<br>";
        $this->i = new A();
        return $this->i;
    }

    public function typeAReturnNull(): A
    {
        echo __FUNCTION__ . "<br>";
        return null;
    }

    public function typeBReturnA(): B
    {
        echo __FUNCTION__ . "<br>";
        return new A();
    }

    public function typeBReturnB(): B
    {
        echo __FUNCTION__ . "<br>";
        return new B();
    }

    public function typeBReturnC(): B
    {
        echo __FUNCTION__ . "<br>";
        return new C();
    }

    public function typeBReturnI(): B
    {
        echo __FUNCTION__ . "<br>";
        $this->i = new B();
        return $this->i;
    }

    public function typeBReturnNull(): B
    {
        echo __FUNCTION__ . "<br>";
        return null;
    }

    public function typeCReturnA(): C
    {
        echo __FUNCTION__ . "<br>";
        return new A();
    }

    public function typeCReturnB(): C
    {
        echo __FUNCTION__ . "<br>";
        return new B();
    }

    public function typeCReturnC(): C
    {
        echo __FUNCTION__ . "<br>";
        return new C();
    }

    public function typeCReturnI(): C
    {
        echo __FUNCTION__ . "<br>";
        $this->i = new C();
        return $this->i;
    }

    public function typeCReturnNull(): C
    {
        echo __FUNCTION__ . "<br>";
        return null;
    }

    public function typeIReturnA(): I
    {
        echo __FUNCTION__ . "<br>";
        return new A();
    }

    public function typeIReturnB(): I
    {
        echo __FUNCTION__ . "<br>";
        return new B();
    }

    public function typeIReturnC(): I
    {
        echo __FUNCTION__ . "<br>";
        return new C();
    }

    public function typeIReturnI(): I
    {
        echo __FUNCTION__ . "<br>";
        $this->i = new C();
        return $this->i;
    }

    public function typeIReturnNull(): I
    {
        echo __FUNCTION__ . "<br>";
        return null;
    }

    public function typeNullReturnA(): ?A
    {
        echo __FUNCTION__ . "<br>";
        return new A;
    }

    public function typeNullReturnB(): ?B
    {
        echo __FUNCTION__ . "<br>";
        return new B;
    }

    public function typeNullReturnC(): ?C
    {
        echo __FUNCTION__ . "<br>";
        return new C;
    }

    public function typeNullReturnI(): ?I
    {
        echo __FUNCTION__ . "<br>";
        $this->i = new C();
        return $this->i;
    }

    public function typeNullReturnNull(): null
    {
        echo __FUNCTION__ . "<br>";
        return null;
    }
}

// Tạo đối tượng demo và gọi các phương thức
$demo = new Demo();

// A
$demo->typeAReturnA();
// $demo->typeAReturnB();
// $demo->typeAReturnC();
$demo->typeAReturnI();
// $demo->typeAReturnNull();

//B
// $demo->typeBReturnA();
$demo->typeBReturnB();
// $demo->typeBReturnC();
$demo->typeBReturnI();
// $demo->typeBReturnNull();

//C
$demo->typeCReturnA();
$demo->typeCReturnB();
$demo->typeCReturnC();
$demo->typeCReturnI();
// $demo->typeCReturnNull();

//I
$demo->typeIReturnA();
$demo->typeIReturnB();
$demo->typeIReturnC();
$demo->typeIReturnI();
// $demo->typeIReturnNull();

//Null
$demo->typeNullReturnA();
$demo->typeNullReturnB();
$demo->typeNullReturnC();
$demo->typeNullReturnI();
$demo->typeNullReturnNull();
