<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Your site title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo SCRIPT_ROOT . 'assets/css/main.css' ?>">
  </head>
  <body>
    <header class="jumbotron jumbotron-fluid mainColor mb-0">
      <section class="container">
        <h1 class="display-4">Project manager</h1>
        <p class="lead">Deal easily with your projects</p>
      </section>
    </header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse container" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo SCRIPT_ROOT . 'controllers/index.php' ?>">Projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo SCRIPT_ROOT . 'controllers/archive.php' ?>">Archive</a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Main Content -->
    <section class="container pt-3">
