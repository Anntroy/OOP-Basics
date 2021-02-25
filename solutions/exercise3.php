<?php
abstract class Device1
{
  private $id;
  private $serialNo;

  public function __construct($id, $serialNo)
  {
    $this->id = $id;
    $this->serialNo = $serialNo;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    return $this->id = $id;
  }
  public function getSerialNo()
  {
    return $this->serialNo;
  }

  public function setSerialNo($serialNo)
  {
    return $this->serialNo = $serialNo;
  }
  abstract public function getDetail($deviceId);
}

class Mobile extends Device1
{
  private $camera;

  function __construct($id, $serialNo, $camera)
  {
    parent::__construct($id, $serialNo);
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

  public function getDetail($deviceId)
  {
    return "Mobile with id " . $this->getId($deviceId) . " and camara " . $this->getCamera() . " is created";
  }
}

class Tablet extends Device1
{
  private $screen;

  function __construct($id, $serialNo, $screen)
  {
    parent::__construct($id, $serialNo);
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

  function getDetail($deviceId)
  {
    return "Tablet with id " . $this->getId($deviceId) . " and screen " . $this->getScreen() . " is created";
  }
}

$newMobile = new Mobile(78, '3471ZK', 'Sony');
$newTablet = new Tablet(23, 'M4560P', 'LG');

print_r($newMobile->getDetail($id));
echo"<br>";
print_r($newTablet->getDetail($id));
