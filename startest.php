<?php
if (isset($_POST['nametest']) && isset($_POST['name_user'])) {
    $myjson = file_get_contents("json/Playlist.json");
    $json_array = json_decode($myjson, true);
    $id_test = $_POST['nametest'];

    
        
        if ($id_test == 1) {
          $name = "Python";
        } elseif ($id_test == 2 ) {
          $name = "OOP";
        } elseif ($id_test == 3) {
          $name = "PHP";
        } elseif ($id_test == 4) {
          $name = "IOS";
        } elseif ($id_test == 5) {
          $name = "Nodejs";
        } elseif ($id_test == 6) {
          $name = "Reactjs";
        }
       
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/starttest.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css" />
    <script src="https://kit.fontawesome.com/041cb6b55e.js" crossorigin="anonymous"></script>
    <script src="js/script.js" defer></script>

    <title>Document</title>
</head>

<body>
    <?php
    include('header.php');



    ?>

    <div id="container">
        <?php if (isset($_POST['name_user'])  && isset($_POST['nametest'])) { ?>
            <div class="content">
                <div class="title">
                    <h1>Bài kiểm tra kiến thức <?php echo $name?></h1>
                    <p>Thời gian làm bài : 30 phút</p>
                    <p>Số lượng câu hỏi : 50 câu</p>
                </div>
                <div class="pick_level">
                    <p>Chọn độ khó bài test</p>
                    <?php
                    foreach ($json_array as $json_arr) {
                        if ($json_arr['category_id'] == $id_test) {
                    ?>
                            <div class="level">
                                <a href="exercise.php?id=<?php echo $json_arr['_id'];?>&name=<?php echo $_POST['name_user'];?>"><button class=""><?php echo $json_arr['title']; ?></button></a>
                            </div>
                    <?php }
                    } ?>
                </div>
                <div class="start">
                    <a href="exercise.php?id=1"><button class="ready">Bắt đầu bài test</button></a>
                </div>
            </div>
        <?php
        } else {
        ?>
            <h1 style="
    color: white;
    padding-top: 200px;
    padding-bottom: 200px;
    text-align: center;">404 NOT FOUND </h1>
        <?php 
        } ?>
    </div>
    <?php
    include('footer.php')
    ?>
</body>

</html>