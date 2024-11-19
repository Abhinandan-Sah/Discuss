<div class="container">
    <h1 class="heading center">Questions</h1>
    <div class="col-8"> 
    <?php
    include("./common/db.php");
    $query= "select * from questions";
    $result=$conn->query($query);
    foreach($result as $row){
        $title= $row['title'];
        $id= $row['id'];
        echo "<div class='row' style='padding: 15px; margin: 10px 0; border: 2px solid #333; border-radius: 5px; background-color: #fafafa; transition: background-color 0.3s;'>
        <a href='?q-id=$id' style='font-size: 24px; text-decoration: none; color: #007BFF; font-weight: 400;'>$title</a>
        </div>";

    }
    ?>
    </div>
</div>