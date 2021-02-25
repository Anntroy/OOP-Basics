<?php
class  Device
{
  private $name;
  private $serialNumber;
  private $chipset;

  public function __construct($name, $serialNumber, $chipset)
  {
      $this->name = $name;
      $this->serialNumber = $serialNumber;
      $this->chipset = $chipset;
  }


  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    return $this->name = $name;
  }

  public function getSerialNumber()
  {
    return $this->serialNumber;
  }

  public function setSerialNumber($serialNumber)
  {
    return $this->serialNumber = $serialNumber;
  }


  public function getChipset()
  {
    return $this->chipset;
  }

  public function setChipset($chipset)
  {
    return $this->chipset = $chipset;
  }
}

class  Mobile extends Device
{
  private $camera;

  public function __construct($name, $serialNumber, $chipset, $camera)
  {
      parent::__construct($name, $serialNumber, $chipset);
      $this->camera = $camera;
  }

  public function getCamera()
  {
    return $this->camera;
  }
  public function setCamera($camera)
  {
    return $this->camera = $camera;
  }
}

class  Tablet extends Device
{
  private $screen;

  public function __construct($name, $serialNumber, $chipset, $screen)
  {
      parent::__construct($name, $serialNumber, $chipset);
      $this->screen = $screen;
  }

  public function getScreen()
  {
    return $this->screen;
  }

  public function setScreen($screen)
  {
    return $this->screen = $screen;
  }
}

class DeviceManager
{
  public function getDeviceSerialNumber(Device $device){
    return $device->getSerialNumber();
  }
}


$newMobile = new Mobile("Samsung s20", "7253KN", "Exynos", "Sony");
$newTablet = new Tablet("LG 20m", "3457JM", "Leit", "LG");

$newDeviceManager = new DeviceManager();

print_r($newDeviceManager->getDeviceSerialNumber($newMobile));
echo "<br>";
print_r($newDeviceManager->getDeviceSerialNumber($newTablet));
