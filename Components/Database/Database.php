<?php namespace App\Components\Database;

class Database
{
    /** @var mysqli Соединение с базой данных */
    private $connection;

    public function __construct($host, $username, $password, $database, $port, $charset)
    {
        $this->connection = mysqli_connect(
            $host,
            $username,
            $password,
            $database,
            $port
        );
        $this->connection->set_charset($charset);
    }

    /**
     * Функция выполнения запроса к базе данных
     *
     * @param $sql
     *
     * @return mixed
     */
    public function query($sql)
    {
        $result = $this->connection->query($sql);

        return $result->fetch_assoc();
    }

    /**
     * Функция отключения соединения с базой данных
     *
     * @return bool
     */
    public function disconnect()
    {
        if ($this->connection)
        {
            $this->connection->close();
            return true;
        }

        return false;
    }

    public function __destruct()
    {
        $this->disconnect();
    }
}


