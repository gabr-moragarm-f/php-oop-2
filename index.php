<?php
class VideoNoleggio{

  protected $name;

  protected $disks = [];

  public function __construct(string $name){
    $this->name = $name;
  }

  public function addDvd(Disk $disk){
    $this->disks[] = $disk;
  }

  public function getDischi(){
    return $this->disks;
  }
}

class Disk{

  protected $name;

  protected $price;

  protected $type;

  protected $stock;

  public function __construct(string $name, float $price, int $stock) {
    $this->name = $name;
    $this->price = $price;
    $this->stock = $stock;
  }

  public function addStock($quantity){
    $this->stock += $quantity;
  }

  public function removeStock($quantity){
    $this->stock -= $quantity;
  }

  public function get($data){
    return $this->$data;
  }
}

class Dvd extends Disk{

  protected $director;

  protected $productionCompany;

  protected $pubblicationDate;

  protected $genre;

  public function __construct(string $name, float $price, int $stock, string $director, string $productionCompany, string $pubblicationDate, string $genre) {
    $this->name = $name;
    $this->price = $price;
    $this->stock = $stock;
    $this->director = $director;
    $this->productionCompany = $productionCompany;
    $this->pubblicationDate = $pubblicationDate;
    $this->genre = $genre;
  }
}

class videoGame extends Disk{

  protected $productionCompany;

  protected $pubblicationDate;

  protected $genre;

  protected $gamePlatform;

  public function __construct(string $name, float $price, int $stock, string $productionCompany, string $pubblicationDate, string $genre, string $gamePlatform) {
    $this->name = $name;
    $this->price = $price;
    $this->stock = $stock;
    $this->director = $director;
    $this->productionCompany = $productionCompany;
    $this->pubblicationDate = $pubblicationDate;
    $this->genre = $genre;
    $this->gamePlatform = $gamePlatform;
  }
}

class User{
  protected $name;

  protected $surname;

  protected $address;

  private $paymentMethod;

  function __construct(string $name, string $surname, Address $address, PaymentMethod $paymentMethod){
    $this->name = $name;
    $this->surname = $surname;
    $this->address = $address;
    $this->paymentMethod = $paymentMethod;
  }
}

class Address{
  protected $country;

  protected $city;

  protected $street;

  protected $streetNumber;

  public function __construct(string $country, string $city, string $street, string $streetNumber){
    $this->country = $country;
    $this->city = $city;
    $this->street = $street;
    $this->streetNumber = $streetNumber;
  }
}

class PaymentMethod{
  private $cardNumber;

  private $expiration;

  public function __construct(int $cardNumber, string $expiration)  {
    $this->cardNumber = $cardNumber;

    $this->expiration = $expiration;
  }
}
