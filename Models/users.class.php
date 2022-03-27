<?php


class Users extends Dbh {

    protected $name;

    protected function __construct( $val )
    {   
        $this->name = $val;
    }



    public function userModelMessage(){
       $getDbMessage = $this->databaseMessage(); 
       echo $getDbMessage . "Model-> ";
    }

    /* === GET ALL DATA FROM THE DATABASE === */
    public function getAllUsers(){
        $sql = "SELECT * FROM users";
        $result = $this->connect()->query( $sql );
        if ($result->rowCount() > 0){
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $data[] = $row;
            }
            return $data;
        }
        
    }

    /* === GET A SINGLE DATA FROM THE DATABASE === */
    protected function getUser( $name ){
        $sql = "SELECT * FROM users WHERE name = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute( [$name] );

        $result = $stmt->fetchAll();
        return $result;
    }

    /* === INSERT DATA INTO DATABASE === */
    protected function insertUser( $name ){
        $sql = "INSERT INTO users( name ) VALUES ( ? ) ";
        $stmt = $this->connect()->prepare( $sql );
        $stmt->execute( [$name] );
    }

    /* === UPDATE DATA FROM DATABASE === */
    protected function updateUser( $id , $name ){
        $sql = "UPDATE `users` SET `name` = ? WHERE `users`.`id` = ? ";
        $stmt = $this->connect()->prepare( $sql );
        $stmt->execute( [$id], [$name] );
    }

    
}


