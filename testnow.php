<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="css/style.css" rel="stylesheet" type="text/css" />
  <link href="css/testnow.css" rel="stylesheet" type="text/css" />
  <script src="https://kit.fontawesome.com/041cb6b55e.js" crossorigin="anonymous"></script>
  <script src="js/script.js" defer></script>

  <title>Document</title>
</head>
<body>
  <?php
  include('header.php');
  ?>

  <section id="container">
    <div class="content">
      <div class="info">
        <h2> Bắt đầu kiểm tra kiến thức của bạn, trước tiên hay cho chúng tôi biết thêm về bạn nhé</h2>
        <h3>Thông tin chỉ mang tính chất lưu trữ kết quả cho lần sau và hoàn toàn bảo mật</h3>
        <form action="" method="post" class="infoform">
          <p> Tên của bạn</p>
          <input type="text" placeholder="Hãy nhập tên của bạn" name="name_user" required>
          
          <p> Chọn bài test mà bạn muốn tham gia</p>

          <select onchange="onclick1()" id="name_id" name="nametest" required>

            <option value="" style="display: none">Tên Bài Test</option>
            <?php
            $myjson = file_get_contents("json/Category.json");
            $json_array = json_decode($myjson, true);
          
            foreach ($json_array as $json_arr) { ?>
              <option value="<?php echo $json_arr['_id']; ?>">
                <?php echo $json_arr['name']; ?></option>
             
             <?php

            }
            ?>
          </select>
          <div style="display: flex;padding-top: 10px;">
            <div style="flex:3"></div>
            <button type="submit">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                <path fill="none" d="M0 0h24v24H0z"></path>

                <path fill="currentColor"
                  d="M5 13c0-5.088 2.903-9.436 7-11.182C16.097 3.564 19 7.912 19 13c0 .823-.076 1.626-.22 2.403l1.94 1.832a.5.5 0 0 1 .095.603l-2.495 4.575a.5.5 0 0 1-.793.114l-2.234-2.234a1 1 0 0 0-.707-.293H9.414a1 1 0 0 0-.707.293l-2.234 2.234a.5.5 0 0 1-.793-.114l-2.495-4.575a.5.5 0 0 1 .095-.603l1.94-1.832C5.077 14.626 5 13.823 5 13zm1.476 6.696l.817-.817A3 3 0 0 1 9.414 18h5.172a3 3 0 0 1 2.121.879l.817.817.982-1.8-1.1-1.04a2 2 0 0 1-.593-1.82c.124-.664.187-1.345.187-2.036 0-3.87-1.995-7.3-5-8.96C8.995 5.7 7 9.13 7 13c0 .691.063 1.372.187 2.037a2 2 0 0 1-.593 1.82l-1.1 1.039.982 1.8zM12 13a2 2 0 1 1 0-4 2 2 0 0 1 0 4z">

                </path>
              </svg>
              <a >Bắt đầu</a>
            </button>
            <div style="flex:3"></div>
          </div>
        </form>
      </div>
      <div class="img_main">
        <img src="image/test.png" alt="" />
      </div>
    </div>
  </section>
  <?php
  include('footer.php')

    ?>

</body>
<script>
  
  window.localStorage.clear();
  

  function onclick1() {
    
    document.querySelector('form').action = "startest.php";
    


  }
</script>

</html>