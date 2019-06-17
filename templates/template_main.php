<!DOCTYPE html>
<html>
    <head>
        <meta charset="charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Main Page</title>
        <!-- Bootstrap 4 related -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!-- Local CSS -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script src="js/checkbox.js"></script>
    </head>
    <body>
        
        <h1 class="text-center m-5">Darāmo lietu saraksts</h1>
        <?php
            // Displaying each task from received data as a separate card
            // TODO: rewrite using DOM objects?
            foreach($data as $key => $task) {
                echo "<div class='card mx-auto my-4' style='width: 40rem;'>
                        <div class='card-body'>
                            <h4 class='card-title mb-3'>
                                <label class='custom-checkbox mr-3' style='height: 1rem'>
                                    <input type='checkbox' onclick='onCheck(" . $task['id'] . ")'" . ($task['done'] ? "checked" : "") . ">
                                    <span style='font-size: 1.5rem'></span>
                                </label>" . $task['title'] . "
                            </h4>
                            <h6 class='card-subtitle mb-3 text-muted' style='margin-left: 3rem'>" . nameDate($task['date_added']) . " (" . $task['date_added'] . ")</h6>
                            <p class='card-text ml-5'>" . $task['description'] . "</p>
                            <div class='text-right'>
                                <a href='index.php?page=edit&action=view&id=" . ($task['id']) . "' class='btn btn-secondary' style='width:5rem'>Labot</a>
                            </div> 
                        </div>
                    </div>";
            }
            echo "
            <div class='text-right mx-auto' style='width: 40rem; margin-bottom: 20rem; margin-top: 2rem;'>
                <a href='index.php?page=add' class='btn btn-primary'>Pievienot jaunu</a>
            </div>
            ";
            
            // Gives time difference a name, (Note: Timezone mismatch possible)
            function nameDate($date) {
                $now = getDate(time());
                $time_input = strtotime($date);
                $then = getDate($time_input);
                if ($now['year'] > $then['year']) {
                    $delta = $now['year'] - $then['year'];
                    return $delta > 1 ? "Pirms " . $delta . " gadiem" : "Pagājušajā gadā";
                } else if ($now['mon'] > $then['mon']) {
                    $delta = $now['mon'] - $then['mon'];
                    return $delta > 1 ? "Pirms " . $delta . " mēnešiem" : "Pagājušajā mēnesī";
                } else if ($now['mday'] > $then['mday']) {
                    $delta = $now['mday'] - $then['mday'];
                    return "Pirms " . $delta . ($delta > 1 ? " dienām" : " dienas");
                } else if ($now['mday'] < $then['mday'] || $now['mon'] < $then['mon'] || $now['year'] < $then['year']) {
                    return "Nakotnē";
                } else {
                    return "Šodien";
                }
            }
        ?>
    </body>
</html>