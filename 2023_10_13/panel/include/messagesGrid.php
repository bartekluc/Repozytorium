<?php

global $messagesArr;

?>

<div class="class row">
    <?php
    foreach ($messagesArr as $message):
    ?>
    <div class="col-12 col-md-4 mb-3">
        <dov class="card">
            <div class="card-header">
                <h2>
                    <?= $message["email"] ?>
                </h2>
            </div>
            <div class="card-body">
                <?= $message["message"] ?>
            </div>
            <div class="card-footer">
                <?= $message["created_at"] ?>
            </div>
        </dov>
    </div>
    <?php
    endforeach;
    ?>
</div>