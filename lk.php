<?php session_start(); ?>
<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Личный кабинет</title>
    <style>
      .edit_btn {
        cursor: pointer; 
        color: green;
      }

      .edit_btn:hover {
        color: darkgreen;
      }

      p {
        font-size: 1.5rem;
      }

    </style>
  </head>
  <body>

    <div class="container mt-5">
    <h1 class="text-center mb-3">Личный кабинет</h1>

    <p>Имя: <span> <?php echo $_SESSION["name"]; ?></span><span class="edit_btn">[Изменить]</span> <span class"save_btn"></span> </p>

    <p>Фамилия: <span> <?php echo $_SESSION["lastname"]; ?> </span><span class="edit_btn">[Изменить]</span> </p>

    <p>E-mail: <?php echo $_SESSION["email"]; ?> </p>

    <p>Id: <?php echo $_SESSION["id"]; ?> </p>

</div>

<script>

  let edit_buttons = document.querySelectorAll(".edit_btn");

  for (let i = 0; i < edit_buttons.length; i++) {
    edit_buttons[i].addEventListener("click", ()->{
      let inputValue = edit_buttons[i].previousElementSibling.innerText;
      edit_buttons[i].previousElementSibling.innerHTML = `<input type="text" value="${inputValue}">`;
    });

  }

</script>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

  </body>
</html>