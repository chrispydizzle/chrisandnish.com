<?php

function loadevents()
{
    $events = [];
    return $events;
}

function showevents()
{
    $data = new db('localhost', 'cn');
    $select = 'SELECT * FROM events';
    $result = $data->query($select);

    $data->writeEvents($result);
    $data->close();
}

class instrumentation
{
    public function __construct()
    {

    }

    public function error($error)
    {

    }

    public function info($info)
    {

    }
}

class db
{
    protected $m;
    protected $instrumentation;

    public function __construct($host, $common, ref $instrument = null)
    {
        $this->instrumentation = $instrument === null ? new instrumentation() : $instrument;

        $this->m = new mysqli($host, $common, $common, $common);
        if ($this->m->connect_error) {
            $this->intrumentation . error('Connection failed: ' . $this->m->connect_error);
        }
    }

    public function GetInsert($dat, $esc, $ico)
    {
        $sql = "INSERT INTO events 
                ( Date, eventscol, Description, icon, Title) 
                  VALUES ($dat, '', $esc, $ico, NULL)";
        return $sql;

    }

    public function close()
    {
        $this->m->close();
    }

    public function query($q)
    {
        return $this->m->query($q);
    }

    public function writeEvents($result)
    {
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo 'id: ' . $row['ID'] . ' - Title: ' . $row['Title'] . ' ' . $row['icon'] . '<br>';
            }
        } else {
            echo '0 results';
        }
    }
}