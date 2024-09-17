<?php
class data
{
    public $link = '';
    function __construct($kemiringan, $curahhujan , $kelembaban,  $pergeseran )
    {
        $this->connect();
        $this->storeInDB($kemiringan, $curahhujan , $kelembaban,  $pergeseran );
    }

    function connect()
    {
        $this->link = mysqli_connect('localhost', 'root', '') or die('Cannot connect to the DB');
        mysqli_select_db($this->link, 'tesis') or die('Cannot select the DB');
 }

    function storeInDB($kelembaban, $curahhujan , $kelembaban,  $pergeseran )
    {
        $query = "insert into node1 (kemiringan, curahhujan, kelembaban,pergeseran) values ('" . $kemiringan . "','" . $curahhujan . "' ,'" . $kelembaban . "','" . $pergeseran . "')";
        $result = mysqli_query($this->link, $query) or die('Errant query:  ' . $query);
    }
}
    if ( $_GET['kemiringan'] != '' and $_GET['curahhujan'] != '' and $_GET['kelembaban'] != ''and $_GET['pergeseran'] != '') 
    {$data = new data($_GET['kemiringan'], $_GET['curahhujan'], $_GET['kelembaban'], $_GET['pergeseran']);
    }


