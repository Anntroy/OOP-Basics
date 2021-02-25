<?php
function debugger($cosa)
{
  echo '<pre>';
  print_r($cosa);
  echo '</pre>';
}

class Devices
{
  private $id;
  private $type;
  private $name;
  private $size;

  public function __construct($id, $type, $name, $size)
  {
    $this->id = $id;
    $this->type = $type;
    $this->name = $name;
    $this->size = $size;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    return $this->id = $id;
  }

  public function getType()
  {
    return $this->type;
  }

  public function setType($type)
  {
    return $this->type = $type;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    return $this->name = $name;
  }

  public function getSize()
  {
    return $this->size;
  }

  public function setSize($size)
  {
    return $this->size = $size;
  }
}

interface DevicesRepository
{
  function create(Devices $device);
  // This class will return Devices
  function findById($id);
}

class MemoryRepository implements DevicesRepository
{
  private $arrayDevices = array();

  public function getArrayDevices()
  {
    return $this->arrayDevices;
  }

  public function setArrayDevices($arrayDevices)
  {
    return $this->arrayDevices = $arrayDevices;
  }

  function create(Devices $device)
  {
    array_push($this->arrayDevices, $device);
  }

  function findById($id)
  {
    foreach ($this->arrayDevices as $device) {
      if ($device->getId() == $id) {
        return $device;
      }
    }
    return null;
  }
}

class DevicesManager
{
  function addDevices(DevicesRepository $repository, Devices $device)
  {
    $repository->create($device);
  }
}


$repository = new MemoryRepository();
$manager = new DevicesManager();
$manager->addDevices($repository, new Devices(123, "mobile", "Huamwei", "20x70"));
$manager->addDevices($repository, new Devices(575, "mobile", "Lg", "20x70"));
$manager->addDevices($repository, new Devices(453, "mobile", "Nokia", "20x70"));
$manager->addDevices($repository, new Devices(977, "mobile", "Samsung", "20x70"));

debugger($repository);
