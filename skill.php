<style>
    .progress {
        width: 100%;
        height: 20px;
        background-color: #ddd;
        border-radius: 5px;
    }

    .progress-bar {
        width: 0%;
        height: 100%;
        background-color: #4CAF50;
        border-radius: 5px;
        transition: width 1s ease;
    }
</style>

<div>
    <?php
    $list = [
        "HTML" => 90,
        "CSS" => 75,
        "JavaScript" => 70,
        "PHP" => 80,
        "Laravel" => 60,
        "MySQL" => 80
    ];

    foreach ($list as $key => $value) {
        echo '<p href="#" class="list-group-item list-group-item-action">' . $key . ' <span class="badge rounded-pill bg-primary float-end">' . $value . '%</span></p>';
        echo '<div class="progress">';
        echo '<div class="progress-bar" style="width: ' . $value . '%;"></div>';
        echo '</div>';
    }
    ?>


</div>
