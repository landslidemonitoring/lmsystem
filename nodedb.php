<?php
class data
{
    public $link = '';
    function __construct($Data1, $Data2)
    
    {
        $this->connect();
        $this->storeInDB($Data1, $Data2);
    }

    function connect()
    {
        $this->link = mysqli_connect('localhost', 'root', '') or die('Cannot connect to the DB');
        mysqli_select_db($this->link, 'lms_login') or die('Cannot select the DB');
 }

    function storeInDB($Data1, $Data2)
    {
        $query = "insert into node1 (Data1,Data2) values ('" . $Data1 . "','" . $Data2 . "')";
        $result = mysqli_query($this->link, $query) or die('Errant query:  ' . $query);
    }
}
    if ( $_GET['Data1'] != '' and $_GET['Data2'] != '') {
    $data = new data($_GET['Data1'], $_GET['Data2']);
    }




