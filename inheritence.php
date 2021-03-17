<?php 
class asset{ //parent class/base class//
public $house = "Building";
public $land = "3 biga";
private $cash = 20000.;
public function mainAsset(){
  echo "This is main class method";
}
}
class new_asset extends asset { //child class / derive class//
  public  $laptop ="hp"; 
  public function child_asset(){
        echo "This is child class method";
  }
}
//create object for asset class
$sompotti = new asset();
//create object for new_asset class
$notun_sompotti = new new_asset();
echo "<pre>";
print_r(get_class_vars('asset'));
echo "</pre>";

echo "<pre>";
print_r(get_class_vars('new_asset'));
echo "</pre>";

echo "<pre>";
print_r(get_class_methods('asset'));
echo "</pre>";

echo "<pre>";
print_r(get_class_methods('new_asset'));
echo "</pre>";
echo $notun_sompotti->house;
// $sompotti = mainAsset;
$notun_sompotti->new_asset;

?>