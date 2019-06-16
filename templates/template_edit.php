<!DOCTYPE html>
<html>
    <head>
        <meta charset="charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Edit Page</title>
        <!-- Bootstrap 4 related -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!-- Local CSS -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        
        <h1 class="text-center mx-5 mt-5">ToDo list</h1>
        <h5 class="text-center text-muted mb-5">Editing</h3>
        <?php 
            echo "<div class='card mx-auto my-4' style='width: 40rem;'>
                        <div class='card-body'>
                            <h4 class='card-title mb-2 mt-1'>
                                <div style='display: flex; justify-content: center;'>
                                    <div style='display: inline'>
                                    <label class='custom-checkbox mr-4' style='height: 0.5rem'>
                                        <input type='checkbox'" . ($task['done'] ? "checked" : "") . ">
                                        <span style='font-size: 1.5rem'></span>
                                    </label>
                                    </div>
                                    <div class='form-group' style='width: 90.5%; display: inline;'>
                                        <textarea class='form-control' id='TA_description' rows='1' style='font-size: 1.5rem; color: black;'>" . $task['title'] . "</textarea>
                                    </div>
                                </div>
                            </h4>
                            <div class='form-group mb-4'>
                                <textarea class='form-control' id='TA_description' rows='4'>" . $task['description'] . "</textarea>
                            </div>
                            <div class='text-right'>
                                <a href='index.php?page=main' class='btn btn-secondary'> Back </a>
                                <a href='index.php?page=main' class='btn btn-danger'> Delete </a>
                                <a href='index.php?page=main' class='btn btn-primary'> Save </a>
                            </div> 
                        </div>
                    </div>";
        
        ?>
    </body>
</html>