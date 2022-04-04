Практическое задание №1.

 Предположим, у нас есть игра в автотематике. У нас есть машины, танки, спецтехника, которые имеют свой набор характеристик,
 умеют ехать вперед и назад, а некоторые могут даже размахивать ковшом. 
 На основе этой информации постройте классы с использованием абстрактного класса и интерфейса.
 Напишите принимающую объект машины функцию, которая бы заставляла ее ехать и вызвала одну из способностей машины.
 Пусть, если это легковое авто, будет закись азота, если это бульдозер, — управление ковшом. 
 Принимающая функция должна быть полиморфной. Необходимо реализовать только структуру.

<?php
 
abstract class Technic
{
    public $forward;
    public $back;
    public function Forward()
    {
        return $this->forward;
    }
 
    public function Back()
    {
        return $this->back;
    }
}
 
class Car extends Technic
{
   public $fuel = 'petrol'; 
   public $signal;
   public $activatingWipersack;
   public function Signal()
   {
    return $this->signal;
   }
   public function ActivatingWipers()
   {
    return $this->activatingWipersack;
   }
}
 
class Tank extends Technic
{
    public $fuel = 'diesel'; 
    
}
class Bulldozer extends Technic
{
   public $fuel = 'diesel'; 
   public $bucketControl;
   public function BucketControl()
   {
    return $this->bucketControl;
   }
}
?>
       <?php
$bulldozer = new Bulldozer ();
echo $bulldozer->fuel;
echo $bulldozer->Forward();
echo $bulldozer->BucketControl();

$car = new Car();
echo $car->fuel;
echo $car->Forward();
echo $car->Signal();
       ?>
