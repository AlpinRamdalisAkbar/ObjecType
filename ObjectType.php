<?php  
class produk{
  public $namaBarang,
         $stat,
         $atk;
  public function nama(){
    return "$this->namaBarang, $this->stat, $this->atk";
  }
  public function __construct($namaBarang="nama barang", $stat="stat", $atk=0){
    $this->namaBarang = $namaBarang;
    $this->stat = $stat;
    $this->atk =  $atk;
  }
}

class cetakinfoproduk{
    public function cetakInfo(produk $produk){
        $str="{$produk->namaBarang}, {$produk->nama()}";
        return $str;
    }
}

$produk1 = new produk("Lorule", "lvl 50, hp 10000","exp = 20000");
$produk2 = new produk("Pedang kaisar wanita","Venena","harga = 70000S");
$produk3 = new produk("Pedang kristal", "Kristal","harga = 20000S");
$produk4 = new produk("Kapak iblis", "Minotaur"," harga= 15000S");
$produk5 = new produk("Panah limbo", "Raja Darkan","harga = 12000S");
$infoProduk = new cetakinfoproduk();

echo "Nama Chara: " . $produk1->nama();
echo "<br>";
echo "Nama pedang: " . $produk2->nama();
echo "<br>";
echo "Nama pedang: " . $produk3->nama();
echo "<br>";
echo "Nama kapak: " . $produk4->nama();
echo "<br>";
echo "Nama panah: " . $produk5->nama();
echo "<br>";
echo $infoProduk->cetakInfo($produk1);
?>