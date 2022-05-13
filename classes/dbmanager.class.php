<?php
class DBManager
{
    private $sl_no = array();
    private $nameOfPerson = array();
    private $bankName = array();
    private $payMethod = array();
    private $transDate = array();
    private $transAmount = array();
    private $transID = array();
    private $balance = 0;
    private $mysqli;
    private $row_count = 0;

    function __construct($host, $uname, $pass)
    {
        $this->mysqli = new mysqli($host, $uname, $pass);

        if ($this->mysqli->query("CREATE DATABASE IF NOT EXISTS accounts") === false) {
            die($this->mysqli->error);
        }

        $this->mysqli->query("USE accounts");
        $this->table_create();
    }

    private function table_create()
    {
        if (($this->mysqli->query("CREATE TABLE IF NOT EXISTS santosh_pattnaik(
            Sl_No INT PRIMARY KEY,
            Date DATE NOT NULL,
            Account_Holder_Name VARCHAR(26) NOT NULL,
            Bank_Name VARCHAR(26) NOT NULL,
            Payment_Method VARCHAR(12) NOT NULL,
            Transaction_ID VARCHAR(30) NOT NULL,
            Amount INT NOT NULL)")) === false) {
            die($this->mysqli->error);
        }
    }

    private function get_table_values()
    {
        return $this->mysqli->query("SELECT * FROM santosh_pattnaik ORDER BY Sl_No DESC");
    }
    public function set_sl_no($data)
    {
        array_push($this->sl_no, $data);
    }
    public function set_personName($data)
    {
        array_push($this->nameOfPerson, $data);
    }
    public function set_bankName($data)
    {
        array_push($this->bankName, $data);
    }
    public function set_payMethod($data)
    {
        array_push($this->payMethod, $data);
    }
    public function set_transDate($data)
    {
        array_push($this->transDate, $data);
    }
    public function set_transAmount($data)
    {
        array_push($this->transAmount, $data);
    }
    public function set_transID($data)
    {
        array_push($this->transID, $data);
    }
    public function set_balance($data)
    {
        $this->balance += $data;
    }

    public function arrange_table_values()
    {
        $result = $this->get_table_values();
        if (isset($result)) {
            while ($row = $result->fetch_assoc()) {
                $this->set_sl_no($row['Sl_No']);
                $this->set_personName($row['Account_Holder_Name']);
                $this->set_transDate($row['Date']);
                $this->set_bankName($row['Bank_Name']);
                $this->set_payMethod($row['Payment_Method']);
                $this->set_transID($row['Transaction_ID']);
                $this->set_transAmount($row['Amount']);
                $this->set_balance($row['Amount']);
                $this->row_count++;
            }
        }
    }

    public function get_sl_no()
    {
        return $this->sl_no;
    }
    public function get_personName()
    {
        return $this->nameOfPerson;
    }
    public function get_bankName()
    {
        return $this->bankName;
    }
    public function get_payMethod()
    {
        return $this->payMethod;
    }
    public function get_transDate()
    {
        return $this->transDate;
    }
    public function get_transAmount()
    {
        return $this->transAmount;
    }
    public function get_transID()
    {
        return $this->transID;
    }
    public function get_balance()
    {
        return $this->balance;
    }
    public function get_row_count()
    {
        return $this->row_count;
    }
    function __destruct()
    {
        $this->mysqli->close();
    }
}