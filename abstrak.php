<?php
class Mobil{
    public $merk;
    public $warna;

    public function setMerk($merk){
        $this->merk = $merk;
    }
    public function getMerk(){
        return $this->merk;
    }
}

$mobilSaya = new Mobil();
$mobilSaya -> setMerk('Toyota');

echo $mobilSaya->getMerk()

?>
