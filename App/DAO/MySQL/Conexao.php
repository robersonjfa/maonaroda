<?php 



namespace App\DAO\MySQL;



abstract class Conexao

{

    

    protected $pdo; 





    public function __construct()

    {

        $host = 'sql307.epizy.com';

        $port = '3306';

        $user = 'epiz_34222681';

        $pass = 'zft486';

        $dbname = 'epiz_34222681_maonaroda';

   

        $dsn = "mysql:host={$host};dbname={$dbname};port={$port}";



        $this->pdo = new \PDO($dsn, $user, $pass);

        $this->pdo->setAttribute(

            \PDO::ATTR_ERRMODE,

            \PDO::ERRMODE_EXCEPTION

        );

    }

}



