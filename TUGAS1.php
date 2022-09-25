<?php 

     class product
     {
        public $name;
        public $price;
        public $discount;

        function getprice(){
           return $this->price;
        }
        function setprice($price){
           $this->price=$price;
        }
        function getname(){
           return $this->name;
        }
        function setname($name){
        $this->name =$name;
        }
        function getdiscount(){
           return $this->discount;
        }
        function setdiscount($discount){
           $this->discount=$discount;
        }
     }


    class CDmusic extends product{
        public $artist;
        public $genre;

        function __construct($name="nama", $price="harga", $discount="diskon"){
        }

        function getartist(){
            return $this->artist;
        }
        function setartist($artist){
            $this->artist=$artist;
        }
        function getgenre(){
            return $this->genre;
        }
        function setgenre($genre){
            $this->genre=$genre;
        }
        function setprice($price){
            $this->price=$price;
        }
        function getprice(){
            $harga =$this->price;
            $ppn = ((10/100) * $this->price);
            $discount = ((5/100) * $this->price);
            return ($harga + $ppn ) - $discount; 
        }
        function setdiscount($discount){
            $this->discount=$discount;
        }
    }

    // 

    class CDrack extends product {
        public $capacity;
        public $model;

        function getcapacity(){
            return $this->capacity;
        }
        function setcapacity($capacity){
            $this->capacity=$capacity;
        }
        function getmodel(){
            return $this->model;
        }
        function setmodel($model){
            $this->model=$model;
        }
        function getprice(){
            $harga=$this->price;
            $tambahan=((15/100) * $this->price);
            return $harga + $tambahan;
        }
        function setprice($price){
            $this->price=$price;
        }
    }
    $beli = new product();
    $beli_cdm = new CDmusic();
    $beli_cdr = new CDrack();

    $beli->setname("CD Music Mu ");
    $beli->setprice(200000);
    $beli->setdiscount("1. Discount CDmusic = 5% <br/> 2. Discount CDrack = 0%");

    echo "Nama Product : " . $beli->getname() . "<br/>";
    echo "Harga : Rp.".$beli->getprice()."<br/>";
    echo $beli->getdiscount()."<br/><hr/>";
    
    $beli_cdm->setartist("Undertale");
    $beli_cdm->setgenre("Turu");
    $beli_cdm->setdiscount("5%");
    $beli_cdm->setprice(200000);

    echo " CD MUSIC  <br/> " ;
    echo "Nama Product :".$beli->getname()."<br/>";
    echo "Artis :".$beli_cdm->getartist()."<br/>";
    echo "Genre :".$beli_cdm->getgenre()."<br/>";
    echo "Selamat anda mendapatkan discount sebesar ".$beli_cdm->getdiscount()."<br/>";
    echo "Total Harga : Rp.".$beli_cdm->getprice().",<br/> Harga diatas sudah termasuk PPN sebesar 10% dan discount 5% <br/><br><hr/>";

    $beli_cdr->setcapacity("600mb");
    $beli_cdr->getmodel("keluaran baru");
    $beli_cdr->setprice(200000);

    echo " CD Rack <br/>";
    echo "Kapasitas :".$beli_cdr->getcapacity()."<br/>";
    echo "Model :".$beli_cdr->getmodel()."<br/>";
    echo "Selamat anda mendapatkan discount 0% <br/>";
    echo "Total Harga : Rp.".$beli_cdr->getprice()."<br/> Harga diatas suda termasuk PPN sebesar 15% dan tidak mendapatkan discount.";


    echo "<br/> <hr/> Terimakasih"
 


?>