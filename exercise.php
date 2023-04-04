<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/exercise.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css"
    />
    <script
      src="https://kit.fontawesome.com/041cb6b55e.js"
      crossorigin="anonymous"
    ></script>
    <script src="js/script.js" defer></script>

    <title>Document</title>
  </head>

  <body>
  <?php
  include('header.php');
  ?>
    <div id="container">
      <div class="title">
        <h1>Bài kiểm tra kiến thức PYTHON</h1>
        <p>Mức độ Trung bình</p>
      </div>
      <div class="content">
        <div class="ques">
          <div class="question">
            <p>Câu hỏi số 1:</p>
          </div>
          <div class="text">
            <div class="box_ques">
              <div class="choose">
                <p>Chọn đáp án đúng : <span>1+2+3+...+n = ?</span></p> 

                <div class="radio">
                  <input id="radio-1" name="radio" type="radio" checked />
                  <label for="radio-1" class="radio-label">2n</label>
                </div>
                <div class="radio">
                  <input id="radio-2" name="radio" type="radio" />
                  <label for="radio-2" class="radio-label">2n</label>
                </div>
                <div class="radio">
                    <input id="radio-3" name="radio" type="radio" />
                    <label for="radio-3" class="radio-label">2n</label>
                  </div>
                  <div class="radio">
                    <input id="radio-4" name="radio" type="radio" />
                    <label for="radio-4" class="radio-label">2n</label>
                  </div>
              </div>
              
            </div>
          </div>
        </div>


        <div class="ques">
            <div class="question">
              <p>Câu hỏi số 1:</p>
            </div>
            <div class="text">
              <div class="box_ques">
                <div class="choose">
                  <p>Chọn đáp án đúng : <span>1+2+3+...+n = ?</span></p> 
  
                  <div class="radio">
                    <input id="radio-1" name="radio" type="radio" checked />
                    <label for="radio-1" class="radio-label">2n</label>
                  </div>
                  <div class="radio">
                    <input id="radio-2" name="radio" type="radio" />
                    <label for="radio-2" class="radio-label">2n</label>
                  </div>
                  <div class="radio">
                      <input id="radio-3" name="radio" type="radio" />
                      <label for="radio-3" class="radio-label">2n</label>
                    </div>
                    <div class="radio">
                      <input id="radio-4" name="radio" type="radio" />
                      <label for="radio-4" class="radio-label">2n</label>
                    </div>
                </div>
                
              </div>
            </div>
          </div>


       
      </div>
    </div>
    <?php
include('footer.php')
?>
  </body>
</html>
