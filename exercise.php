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
  <title>Document</title>
</head>

<body>
<header>
    <div class="topnav" id="myTopnav">
      <a href="#"><img width="130px" height="auto" src="image/logo.png" /></a>
      <a class="menuitem" href="#" class="hidden">Đăng nhập</a>
      <a  class="menuitem" href="#" class="hidden">Test kiến thức ngay</a>

      <a class="menuitem" href="#">Giới thiệu</a>
      <a class="menuitem" href="#">Chia sẻ</a>
      <a class="menuitem" href="#">Đánh giá</a>
      <a class="menuitem" href="#">Hướng dẫn</a>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
      </a>
    </div>
    <div class="topnav-right">
      <p id="dem">0</p><p>/50</p>
      <br>
      <div id="tg"></div>
      <p id="diem">0</p>
      <a href="#">Đăng nhập</a>
      

      <a href="/Webinterview2/WebInterview/testnow.html" class="blue">Test kiến thức ngay</a>
    </div>
  </header>
    <div id="container">
      <?php if(isset($id)){?>
        <div class="title">
            <h1>Bài kiểm tra kiến thức <?php echo $name; ?></h1>
            <p>Mức độ <?php if($id == 1||$id== 4||$id== 7||$id== 10||$id== 13||$id== 16 ){
              echo "Dễ";
            }elseif($id == 2||$id== 5||$id== 8||$id== 11||$id== 14||$id== 17 ){
              echo "Trung Bình";
            }else{
              echo "Khó";
            }
            
            ?></p>
        </div>
        <div class="content">
            <form class="quiz" >
                
      <?php 
 $a = 1;
  foreach($json_array as $json_arr){ 
      if( $json_arr['playlist_id'] == $id){  ?>

                <div class="ques">
                    <div class="question">
                        <p>Câu hỏi số <?php echo $a; ?>:</p>
                    </div>

                    <div class="box_ques">
                        <div id="aws" class="choose">
                            <p>Chọn đáp án đúng : <span><?php echo $json_arr['question']; ?> </span></p>
                            <div class="radio">
                                <input id="inputcheck" name='<?php echo $json_arr['answer_true'], $a; ?>'  value='<?php echo $json_arr['answer_1'], $a; ?>' type="radio" onclick="checkboxes()" />
                                <label id="answer" ><?php echo $json_arr['answer_1']; ?></label>
                            </div>
                            <div class="radio">
                                <input id="inputcheck" name='<?php echo $json_arr['answer_true'], $a; ?>'  value='<?php echo $json_arr['answer_2'], $a; ?>' type="radio"  onclick="checkboxes()"/>
                                <label><?php echo $json_arr['answer_2']; ?></label>
                            </div>
                            <?php if(isset($json_arr['answer_3'])){?>
                            <div class="radio">
                                <input id="inputcheck" name='<?php echo $json_arr['answer_true'], $a; ?>'  value='<?php echo $json_arr['answer_3'], $a; ?>' type="radio" onclick="checkboxes()"/>
                                <label><?php echo $json_arr['answer_3']; ?></label>
                            </div>
                            <?php }
                            if(isset($json_arr['answer_4'])){ ?>
                            <div class="radio">
                                <input id="inputcheck" name='<?php echo $json_arr['answer_true'], $a; ?>'  value='<?php echo $json_arr['answer_4'], $a; ?>' type="radio" onclick="checkboxes()"/>
                                <label><?php echo $json_arr['answer_4']  ?></label>
                            </div>
                            <?php } ?>
                        </div>
                        </div>

                    
              </div>

          <?php $a++ ;}
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
        </div>
        <?php }else{?>
        <h1 style="color : white; padding-top: 200px">
        <?php
          echo " 404 NOT FOUND <br>Trang Không Hợp Lệ!!!!";
        } ?></h1>
    </div>

</body>
<script>
const quiz = document.querySelector('form');
const aws = document.getElementById('aws');
function countdown( elementName, minutes, seconds )


{
  

    var element, endTime, hours, mins, msLeft, time;


    function twoDigits( n )

    {return (n <= 9 ? "0" + n : n);}

    element = document.getElementById( elementName ); 

    endTime = (+new Date) + 1000 * (60*minutes + seconds) + 500;

    updateTimer();

     function updateTimer()

    {

        msLeft = endTime - (+ new Date);

        if ( msLeft < 1000 ) {

            element.innerHTML = "het gio";

        }

        else {

            time = new Date( msLeft );

            hours = time.getUTCHours();

            mins = time.getUTCMinutes();

            element.innerHTML = (hours ? hours + ':' + twoDigits( mins ) : mins) + ':' + twoDigits( time.getUTCSeconds() );

            setTimeout( updateTimer, time.getUTCMilliseconds() + 500 );

        }

    }

}



countdown( 'tg', 30, 0 );





function checkboxes() {
    var inputElems = document.getElementsByTagName('input');
        
    console.log(inputElems);
     count = 0;       
     score = 0;
    for (var i = 0; i < inputElems.length; i++) {
      
        if (inputElems[i].checked == true) {
          count++;  
          console.log(count);
          
        
        if (inputElems[i].value == inputElems[i].name ){
          score++;
          console.log(score);
        }
      }
    }

    document.getElementById('dem').innerHTML = count;
    document.getElementById('diem').innerHTML = score;
}



</script>

</html>