<?php
class requests {
protected $servername = "EXAMPLE";
protected $username = "EXAMPLE";
protected $password = "EXAMPLE";
protected $databasename = "EXAMPLE";
protected $connection;

public function getDrivers(){

    $connection = new mysqli($this->servername, $this->username, $this->password, $this->databasename);
    $request = "Select id, fullName, currentVehicle, licenses FROM Drivers";
    $result = $connection->query($request);

    return $result;
}

public function getDriver($driver){

    $connection = new mysqli($this->servername, $this->username, $this->password, $this->databasename);
    $request = "Select id, fullName, currentVehicle, licenses FROM Drivers WHERE fullname == $driver";
    $result = $connection->query($request);

    return $result;
}

public function getVehicles(){

    $connection = new mysqli($this->servername, $this->username, $this->password, $this->databasename);
    $request = "Select id, licensePlate, licenseRequirement, lastUse FROM Vehicles";
    $result = $connection->query($request);

    return $result;
}

public function getVehicle($plate){

    $connection = new mysqli($this->servername, $this->username, $this->password, $this->databasename);
    $request = "Select id, licensePlate, licenseRequirement, lastUse FROM Vehicles WHERE licensePlate == $plate";
    $result = $connection->query($request);

    return $result;
}

public function getUsers(){

    $connection = new mysqli($this->servername, $this->username, $this->password, $this->databasename);
    $request = "Select id, fullName, lastBooking FROM Users";
    $result = $connection->query($request);

    return $result;
}

public function getUser($user){

    $connection = new mysqli($this->servername, $this->username, $this->password, $this->databasename);
    $request = "Select id, fullName, lastBooking FROM Users WHERE fullName == $user";
    $result = $connection->query($request);

    return $result;
}

public function getBookings(){

    $connection = new mysqli($this->servername, $this->username, $this->password, $this->databasename);
    $request = "Select id, driver, user, vehiclePlate, date FROM Bookings";
    $result = $connection->query($request);

    return $result;
}
}