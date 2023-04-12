<?php
if (isset($_GET["id"])) {
  $id = $_GET["id"];
  if ($id >= 1 && $id <= 3) {
    $myjson = file_get_contents("json/Question_Python.json");
    $name = "Python";
  } elseif ($id >= 4 && $id <= 6) {
    $myjson = file_get_contents("json/Question_OOP.json");
    $name = "OOP";
  } elseif ($id >= 7 && $id <= 9) {
    $myjson = file_get_contents("json/Question_PHP.json");
    $name = "PHP";
  } elseif ($id >= 10 && $id <= 12) {
    $myjson = file_get_contents("json/Question_IOS.json");
    $name = "IOS";
  } elseif ($id >= 13 && $id <= 15) {
    $myjson = file_get_contents("json/Question_Nodejs.json");
    $name = "Nodejs";
  } elseif ($id >= 16 && $id <= 18) {
    $myjson = file_get_contents("json/Question_Reactjs.json");
    $name = "Reactjs";
  }
  $json_array = json_decode($myjson, true);
  if ($id == 1 || $id == 4 || $id == 7 || $id == 10 || $id == 13 || $id == 16) {
    $level = "Dễ";
  } elseif ($id == 2 || $id == 5 || $id == 8 || $id == 11 || $id == 14 || $id == 17) {
    $level = "Trung Bình";
  } else {
    $level = "Khó";
  }
}


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
  <script src="js/exercise.js" defer></script>
  <script src="js/script.js" defer></script>

  <title>Document</title>
</head>

<body>
  <header>
    <div class="topnav" id="myTopnav">
      <a href="index.php"><img width="130px" height="auto" src="image/logo.png" /></a>
      <a class="menuitem" href="#" class="hidden">Đăng nhập</a>
      <a class="menuitem" href="#" class="hidden">Test kiến thức ngay</a>

      <a class="menuitem" href="#">Giới thiệu</a>
      <a class="menuitem" href="#">Chia sẻ</a>
      <a class="menuitem" href="#">Đánh giá</a>
      <a class="menuitem" href="#">Hướng dẫn</a>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
      </a>
      <?php if (isset($id)) { ?>
        <div class="time">
          <div class="number_quiz">
            <p>Số câu trả lời</p>
            <p> <span style="color:white; font-size: 16px;" id="dem">0</span>/50</p>
            <p style="display: none" id="diem"></p>

          </div>
          <div class="number_quiz">
            <p>Time left: </p>
            <div id="tg">
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
    <div class="topnav-right">

    </div>
  </header>
  <?php if (isset($id)) { ?>
    <div class="success">
      <div class="background">
        <div class="text">
          <h4>HẾT GIỜ !!!</h4>
          <p>Chúc mừng bạn đã hoàn thành bài thi</p>
          <p>Cùng xem kết quả nhé</p>
          <button class="bubbly-button">Xem kết quả</button>
        </div>
      </div>
      <div class="background ">

        <div class="text">
          <h4>Bạn có chắc đã hoàn thành bài thi</h4>
          <p>Nếu chưa hãy kiểm tra lại nhé</p>
          <div class="complete">
            <button class="btn1">
              Kiểm tra lại bài
            </button>
            <button class="btn2">
              Hoàn thành bài test
            </button>
          </div>
        </div>

      </div>
      <div class="background display">
        <div class="text1">
          <h4>Kết quả bài test của bạn</h4>
          <p>Hãy chia sẽ và đánh giá nếu bạn thấy hữu ích nhé</p>
        </div>

        <div class="wrapper_infor">
          <div class="infor">
            <p>Thí sinh: <?php echo $_GET['name']; ?></p>
            <p>Phần thi: <?php echo $name ?> </p>
            <p>Mức độ: <?php echo $level ?></p>
            <p>Số điểm: <span id="mark" style="font-weight:600; font-size: 20px;">0</span>/50</p>
            <p>Thời gian: 30 phút</p>
          </div>
          <div class="result">
            <div class="progress-bar-container">

              <div class="progress-bar html">
                <progress id="html" min="0" max="100" value="92"></progress>
              </div>
            </div>


          </div>

        </div>
        <div class="back" style="padding-bottom:20px">
          <p id="end" style="font-family: 'Inter';
font-style: normal;
font-weight: 700;
font-size: 24px;
color: red;">Hoàn thành bài thi</p>
          <a style="text-decoration:underline; font-size: 18px; font-weight: 400; color: #3514FF;; " href="">Quay lại trang chủ</a>
        </div>
      </div>
    </div>
    </div>

    </div>
    <div id="container">

      <div class="title">
        <h1> Bài kiểm tra kiến thức <?php echo $name; ?></h1>

        <p>Mức độ <?php echo $level ?></p>
      </div>
      <div class="content">
        <form class="quiz">

          <?php
          $a = 1;
          foreach ($json_array as $json_arr) {
            if ($json_arr['playlist_id'] == $id) {  ?>
              <div class="ques">
                <div class="question">
                  <p>Câu hỏi số <?php echo $a; ?>:</p>
                </div>
                <div class="box_ques">
                  <div id="aws" class="choose">
                    <p>Chọn đáp án đúng : <span><?php echo $json_arr['question']; ?> </span></p>
                    <div class="radio">
                      <input id="inputcheck" name='<?php echo $json_arr['answer_true'], $a; ?>' value='<?php echo $json_arr['answer_1'], $a; ?>' type="radio" onclick="checkboxes()" />
                      <label id="answer"><?php echo $json_arr['answer_1']; ?></label>
                    </div>
                    <div class="radio">
                      <input id="inputcheck" name='<?php echo $json_arr['answer_true'], $a; ?>' value='<?php echo $json_arr['answer_2'], $a; ?>' type="radio" onclick="checkboxes()" />
                      <label><?php echo $json_arr['answer_2']; ?></label>
                    </div>
                    <?php if (isset($json_arr['answer_3'])) { ?>
                      <div class="radio">
                        <input id="inputcheck" name='<?php echo $json_arr['answer_true'], $a; ?>' value='<?php echo $json_arr['answer_3'], $a; ?>' type="radio" onclick="checkboxes()" />
                        <label><?php echo $json_arr['answer_3']; ?></label>
                      </div>
                    <?php }
                    if (isset($json_arr['answer_4'])) { ?>
                      <div class="radio">
                        <input id="inputcheck" name='<?php echo $json_arr['answer_true'], $a; ?>' value='<?php echo $json_arr['answer_4'], $a; ?>' type="radio" onclick="checkboxes()" />

                        <label><?php echo $json_arr['answer_4']  ?></label>
                      </div>
                    <?php } ?>
                  </div>

                </div>


              </div>

          <?php $a++;
            }
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



          <input type="submit"> hoan thanh</input>
        </form>
        <button onclick="myalert()">
          Show Alert Message
        </button>
      </div>
    <?php } else { ?>
      <h1 class="error" style="color : white; padding-top: 180px; padding-bottom: 120px">
      <?php
      echo " 404 NOT FOUND <br>Trang Không Hợp Lệ!!!!";
    } ?></h1>

      <div style="z-index: 1;position: fi; width:100%;height:100%;background-color:black; "> </div>
    </div>
    <?php include('footer.php') ?>
</body>
<script>
  const quiz = document.querySelector('form');
  const aws = document.getElementById('aws');

  function countdown(elementName, minutes, seconds) {
    var element, endTime, hours, mins, msLeft, time;

    function twoDigits(n) {
      return (n <= 9 ? "0" + n : n);
    }
    element = document.getElementById(elementName);
    endTime = (+new Date) + 1000 * (60 * minutes + seconds) + 500;
    updateTimer();

    function updateTimer()

    {

      msLeft = endTime - (+new Date);

      if (msLeft < 1000) {

        element.innerHTML = "Time out !";
        element.style = "color:red;";

      } else {

        time = new Date(msLeft);

        hours = time.getUTCHours();

        mins = time.getUTCMinutes();

        element.innerHTML = (hours ? hours + ':' + twoDigits(mins) : mins) + ':' + twoDigits(time.getUTCSeconds());

        setTimeout(updateTimer, time.getUTCMilliseconds() + 500);

      }

    }

  }



  countdown('tg', 30, 0);




  //tinh diem
  function checkboxes() {
    var inputElems = document.getElementsByTagName('input');

    console.log(inputElems);
    count = 0;
    score = 0;
    for (var i = 0; i < inputElems.length; i++) {

      if (inputElems[i].checked == true) {
        count++;
        console.log(count);


        if (inputElems[i].value == inputElems[i].name) {
          score++;
          console.log(score);
          if (score >= 35) {
            document.getElementById('end').innerHTML = "Hoàn thành rất tốt";
          } else if (score >= 25 && score < 35) {
            document.getElementById('end').innerHTML = "Hoàn thành bài thi";
          } else {
            document.getElementById('end').innerHTML = "Chưa đạt yêu cầu";
          }
        }

      }

    }

    document.getElementById('dem').innerHTML = count;

    document.getElementById('diem').innerHTML = score;
    document.getElementById('mark').innerHTML = score;
  }


  function myalert() {
    if (confirm('Bạn có muốn nộp luôn không ?')) {

      console.log('OK');
    } else {

      console.log('HỦY');
    }
  }
  <?php

  ?>
</script>

</html>