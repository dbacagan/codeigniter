<h2><?php echo $title; ?></h2>

<?php foreach ($tasks as $task_item): ?>

        <h3><?php echo $taks_item['title']; ?></h3>
        <div class="main">
                <?php echo $task_item['task']; ?>
        </div>

<?php endforeach; ?>