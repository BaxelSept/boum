<!DOCTYPE html>
<html>
<head>
  <title>Site Todo_List </title>
  <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vanilla Javascript Todo List</title>
    <link rel="stylesheet" href="style_todo.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css"
      integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o="
      crossorigin="anonymous"
    />
  </head>
  <header>
  <?php  require 'header.php'; ?>
      <span class="menu">
        <span></span>
        <span></span>
        <span></span>
      </span> 
  </header>
  <body>
    <header>
      <h1>Votre Todo List</h1>
    </header>
    <form id="todo-form">
      <label for="name">Note:(1 et 30 caractères) </label>
      <input type="text" class="todo-input" id="name" name="name" minlength="1" maxlength="30" size="23" autocomplete="off">
      <button class="todo-button" type="submit">
        <i class="fas fa-plus-square"></i>
      </button>
      <div class="select">
        <select name="todos" class="filter-todo">
          <option value="all">Toutes</option>
          <option value="completed">Complétée</option>
          <option value="uncompleted">À Faire</option>
        </select>
      </div>
    </form>
    <div class="todo-container">
      <ul class="todo-list"></ul>
    </div>
    <script src="./app.js"></script>
  </body>
  <div class="tâche-content">
    </ul>
  </div>
  <footer>
    <a href="tâche.php" class="buttons top">top</a>
  </footer>
  <script src="js/app.js"></script> 
</body>
</html>
