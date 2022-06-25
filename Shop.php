<?php

class Shop
{
    private PDO $db;

    public function __construct()
    {
        $this->db = new PDO("mysql:host=127.0.0.1;dbname=shop", "root", "");
    }


    public function vendor(): void
    {
        $statement = $this->db->prepare("SELECT items.name, price, quantity, quality FROM items inner join vendors on FID_Vender = ID_Vendors WHERE Vendors.name=?");
        $statement->execute([$_POST["vendor"]]);

        while ($data = $statement->fetch()) {
            echo " <br> Title: {$data['name']} | Price: {$data['price']} | Quantity: {$data['quantity']} | Qulity: {$data['quality']} ";
        }
    }

    public function category(): void
    {
        $statement = $this->db->prepare("SELECT items.name, price, quantity, quality, category.name as 'category' FROM items inner join Category on FID_Category = ID_Category WHERE Category.name=?");
        $statement->execute([$_POST["category"]]);
        $output = "";

        while ($data = $statement->fetch()) {
            $output .= " <br> Title: {$data['name']} | Price: {$data['price']} | Quantity: {$data['quantity']} | Qulity: {$data['quality']} | Category: {$data['category']}";
        }
        echo json_encode($output);
    }

    public function price(): void
    {
        $statement = $this->db->prepare("SELECT items.name, price, quantity, quality FROM items WHERE price between ? and ?");
        $statement->execute([$_POST["minPrice"], $_POST["maxPrice"]]);
        $output = "";

        while ($data = $statement->fetch()) {
            $output .= " <br> Title: {$data['name']} | Price: {$data['price']} | Quantity: {$data['quantity']} | Qulity: {$data['quality']} ";
        }
        echo $output;
    }
}

$shop = new Shop();

if (isset($_POST["vendor"])) {
    $shop->vendor();
} elseif (isset($_POST["category"])) {
    $shop->category();
} elseif (isset($_POST["minPrice"])) {
    $shop->price();
}