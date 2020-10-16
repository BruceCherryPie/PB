<?php

/* @var $this yii\web\View */

$this->title = 'Список контактов';
?>

<div class="site-index">

    <div class="jumbotron">
        <h1>Список контактов</h1>

    </div>
    <?PHP
    $posts = Yii::$app->db->createCommand('SELECT * FROM contacts')->queryAll();
    echo '<ul>';
   // while ($row = $posts->fetch(PDO::FETCH_OBJ))
    {
        echo '<li><b>'.$posts.'</b></li>';
    }
    echo '</ul>';
    ?>
</div>
