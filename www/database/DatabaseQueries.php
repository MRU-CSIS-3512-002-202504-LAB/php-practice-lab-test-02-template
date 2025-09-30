<?php

require path_to('core/DatabaseHelper.php');

class DatabaseQueries
{
    private $db_helper;

    public function __construct()
    {
        $config = require 'config.php';
        $this->db_helper = new DatabaseHelper($config);
    }

    public function __destruct()
    {
        $this->disconnect();
    }

    public function disconnect()
    {
        $this->db_helper->close_connection();
    }

    /*

    TODO: EX-02

    You should create a function here that will be used by your
    ex-02 controller. The function should:
    - Have no parameters.
    - Return a single record, associated with image id 10.
    - Only SELECT necessary fields and not use SELECT *.
    - Use an INNER JOIN.

    */




    /*

    TODO: EX-03

    You should create a function here that will be used by your
    ex-03 controller. The function should:
    - Have a country iso as a parameter. Since there is a parameter, we
      will consider the input "dangerous" and act accordingly.
    - Return all records from cities that match the given country iso.
    - Only SELECT necessary fields and not use SELECT *.
    - Order things correctly.
    - Only return at most 10 records.

    */
}
