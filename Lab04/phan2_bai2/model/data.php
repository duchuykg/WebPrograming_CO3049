<?php
    class Data{
        private $conn;

        public $id;
        public $img;
        public $name; 
        public $price; 
        public $des;

        public function __construct($db)
        {
            $this->conn = $db;
        }
        public function get(){
            $newsql = "SELECT * FROM products";
            $result = $this->conn->query($newsql);
            return $result;
        }

        public function add($id, $name, $des, $price, $img){
            $newsql = "INSERT INTO products (id, name, description, price, image) VALUES ('$id', '$name', '$des', '$price', '$img')";
            
        }

        public function edit($id, $name, $des, $price, $img){
            $newsql = "UPDATE products SET name='$name',description='$des',price='$price',image='$img' WHERE id=$id";
           
        }

        public function delete($id){
            $sql = "DELETE FROM products WHERE id = '$id'";
           
        }
    }

    
?>    