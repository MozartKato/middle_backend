<?php 

class product {
    protected $name;
    protected $price;
    protected $stock;

    public function __construct($name, $price, $stock) {
        $this->name = $name;
        $this->price = $price;
        $this->stock = $stock;
    }

    public function showInformation() {
        echo "Nama: $this->name";
        echo "Harga: $this->price";
        echo "Stock: $this->stock";
    }
}

class productElectornics extends product {
    public function calculateDiscount(){
        return $this->price / 2;
    }
    public function showInformation() {
        parent::showInformation();
        echo "Harga setelah diskon: ".$this->calculateDiscount();
    }
}
class productFashion extends product {
    public function calculateDiscount(){
        return $this->price - $this->price*(70/100);
    }

    public function showInformation() {
        parent::showInformation();
        echo "Harga setelah diskon: ".$this->calculateDiscount();
    }
}

$electronic = new productElectornics("Laptop",1000,20);
$electronic->showInformation();

$fashion = new productFashion("Kaos",7000,20);
$fashion->showInformation();

?>