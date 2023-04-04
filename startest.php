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
        <div class="content">
            <div class="title">
                <h1>Bài kiểm tra kiến thức PYTHON</h1>
                <p>Thời gian làm bài : 30 phút</p>
                <p>Số lượng câu hỏi : 50 câu</p>
            </div>
            <div class="pick_level">
                <p>Chọn độ khó bài test</p>
                <div class="level">
                    <a href=""><button class="">Dễ</button></a>
                </div>
                <div class="level">
                    <a href=""><button class="green">Trung bình</button></a>
                </div>
                
                <div class="level">
                    <a href=""><button class="red">Khó</button></a>
                </div>
            </div>
            <div class="start">
                <a href="exercise.html"><button class="ready">Bắt đầu bài test</button></a>
            </div>
        </div>

    </div>
    <?php
include('footer.php')
?>

</body>

</html>