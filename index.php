<?php include "controller.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Todo App</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css" />
  <style type="text/css">
    .tile.is-primary{background-color: #eee;}
    .tile{margin-bottom: 1em;}
    span.done{text-decoration: line-through;}
    article{width:100%;}
    .list-item{display: flex;}
    form.inline{margin-left: auto; }
  </style>
</head>
<body>
  <h1 class="title">Toudoux <small>Pour lister toutes les tâches, surtout les plus douces</small></h1>
  <section>
    <div class="container">
      <div class="columns">
        <div class="column is-half">
          <div class="tile is-primary is-parent">
            <article class="is-child">
              <h3 class="title">Ma liste</h3>
              <ul class="list">
                <?php foreach($todo as $task):?>
                  <li class="list-item">
                    <?php echo display_task($task); ?>
                    <form class="inline">
                      <button class="button is-small is-success" name="action" value="mark_done">Fait</button>
                      <button class="button is-small is-danger" name="action" value="move_to_recycle">Supprimer</button>
                    </form>
                  </li>
                <?php endforeach;?>
              </ul>
            </article>
          </div>
          <div class="tile is-primary is-parent">
            <article class="is-child">
              <h3 class="title">Corbeille</h3>
              <ul class="list">
                <li class="list-item">
                  <?php foreach($recycle as $task):?>
                  <li class="list-item">
                    <?php echo display_task($task); ?>
                  </li>
                <?php endforeach;?>
                </li>
              </ul>
            </article>
          </div>
        </div>
        <div class="column is-half">
          <div class="tile is-primary is-parent">
            <article class="is-child is-fullwidth">
              <h3 class="title">Ajouter une tâche</h3>
              <form method="POST" class="is-fullwidth">
                <input class="input is-fullwidth" type="text" name="title" placeholder="Votre nouvelle tâche" /> <br>
                <button class="button is-small is-success" name="action" value="add_task" type="submit">Ajouter</button>
              </form>
            </article>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>