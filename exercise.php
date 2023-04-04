<?php 
                $id = $_GET["id"];
                if($id >= 1 && $id <= 3 ){
                  $myjson = file_get_contents("json/Question_Python.json");
                  $name = "Python";
                }elseif($id >= 4 && $id <= 6 ){
                  $myjson = file_get_contents("json/Question_OOP.json");
                  $name = "OOP";
                }elseif($id >= 7 && $id <= 9 ){
                  $myjson = file_get_contents("json/Question_PHP.json");
                  $name = "PHP";
                }elseif($id >= 10 && $id <= 12 ){
                  $myjson = file_get_contents("json/Question_IOS.json");
                  $name = "IOS";
                }elseif($id >= 13 && $id <= 15 ){
                  $myjson = file_get_contents("json/Question_Nodejs.json");
                  $name = "Nodejs";
                }elseif($id >= 16 && $id <= 18 ){
                  $myjson = file_get_contents("json/Question_Reactjs.json");
                  $name = "Reactjs";
                }
      $json_array = json_decode($myjson,true);// suppose your json data variable name is $json then decode it and assing to a new variable $json_array
      ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/exercise.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/041cb6b55e.js" crossorigin="anonymous"></script>

    <!-- <script src="js/script.js" defer></script> -->
    <script src="jsonpath-0.8.0.js" defer></script>
    

    <title>Document</title>
</head>

<body>
    <header>
        <div class="topnav" id="myTopnav">
            <a href="#"><img width="130px" height="auto" src="image/logo.png" /></a>
            <a href="#" class="hidden">Đăng nhập</a>
            <a href="#" class="hidden">Test kiến thức ngay</a>

            <a href="#">Giới thiệu</a>
            <a href="#">Chia sẻ</a>
            <a href="#">Đánh giá</a>
            <a href="#">Hướng dẫn</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
        <div class="topnav-right">
            <a href="#">Đăng nhập</a>

            <a href="/Webinterview2/WebInterview/testnow.html" class="blue">Test kiến thức ngay</a>
        </div>
    </header>
    <div id="container">
        <div class="title">
            <h1>Bài kiểm tra kiến thức <?php echo $name; ?></h1>
            <p>Mức độ Trung bình</p>
        </div>
        <div class="content">
            <form class="quiz">
                
      <?php 
 
  foreach($json_array as $json_arr){ // now iterate through that array
      if($json_arr['playlist_id'] == $id){ ?>

                <div class="ques">
                    <div class="question">
                        <p>Câu hỏi số <?php echo $json_arr['_id']; ?>:</p>
                    </div>

                    <div class="box_ques">
                        <div id="aws" class="choose">
                            <p>Chọn đáp án đúng : <span><?php echo $json_arr['question']; ?> </span></p>
                            <div class="radio">
                                <input name="radio<?php echo $json_arr['_id']; ?>" type="radio" />
                                <label><?php echo $json_arr['answer_1']; ?></label>
                            </div>
                            <div class="radio">
                                <input name="radio<?php echo $json_arr['_id']; ?>" type="radio" />
                                <label><?php echo $json_arr['answer_2']; ?></label>
                            </div>
                            <div class="radio">
                                <input name="radio<?php echo $json_arr['_id']; ?>" type="radio" />
                                <label><?php echo $json_arr['answer_3']; ?></label>
                            </div>
                            <div class="radio">
                                <input name="radio<?php echo $json_arr['_id']; ?>" type="radio" />
                                <label><?php echo $json_arr['answer_4']; ?></label>
                            </div>
                        </div>
                    </div>
                </div>

                <?php }

  }
 ?>

                <!-- <div class="ques">
          <div class="question">
            <p>Câu hỏi số 1:</p>
          </div>

          <div class="box_ques">
            <div id="aws" class="choose">
              <p>Chọn đáp án đúng : <span></span></p>
              <div class="radio">
                <input name="radio" type="radio" />
                <label>2n</label>
              </div>
              <div class="radio">
                <input name="radio" type="radio" />
                <label >2n</label>
              </div>
              <div class="radio">
                <input name="radio" type="radio" />
                <label >2n</label>
              </div>
              <div class="radio">
                <input name="radio" type="radio" />
                <label >2n</label>
              </div>
            </div>
          </div>
        </div> -->




            </form>
        </div>
    </div>

</body>
<script>
const quiz = document.querySelector('form');
const aws = document.getElementById('aws');
const checked = document.querySelector('input');



function checkboxes() {
    var inputElems = document.querySelector('input'),
        count = 0;

    for (var i = 0; i < inputElems.length; i++) {
        if (inputElems[i].type == "checkbox" && inputElems[i].checked == true) {
            count++;
            console.log(count);
        }

    }
}

console.log(checked);
</script>

</html>