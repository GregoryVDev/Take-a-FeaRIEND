<!-- if ($_POST) {
    if(
        isset($_POST["name"]) &&
        isset($_POST["content"]) &&
        isset($_POST["category"]) &&
        isset($_POST["price"]) &&
        isset($_POST["discount"]) &&
        isset($_POST["images"])
    ) {
        require_once("connect.php");

        $name = strip_tags($_POST["name"]);
        $content = strip_tags($_POST["content"]);
        $category = strip_tags($_POST["category"]);
        $price = strip_tags($_POST["price"]);
        $discount = strip_tags($_POST["discount"]);
        $images = strip_tags($_POST["images"]);

        $sql = "INSERT INTO animaux (name, content, category, price, discount, images) VALUES (:name, :content, :category, :price, :discount, :images)";
        $query = $db->prepare($sql);

        $query->bindValue(":name", $name);
        $query->bindValue(":content", $content);
        $query->bindValue(":category", $category);
        $query->bindValue(":price", $price);
        $query->bindValue(":discount", $discount);
        $query->bindValue(":images", $images);

        $query->execute();

        require_once("close.php");
        
        header("Location: add.php");
        exit()

    }
} -->