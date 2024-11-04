<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WORK OF TRACKER</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>


<div class="container">
    <h1 class="text-danger text-center text-read ">Work Of Tracker</h1>
    <div class="container">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Launch demo modal
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="card p-4" method="POST">
                            <div class="mb-3">
                                <label for="name" class="form-label">Ismi</label>
                                <input type="text" class="form-control " name="name" id="name">
                            </div>
                            <div class="mb-3">
                                <label for="arrived_at" class="form-label">Kelgan vaqti</label>
                                <input type="datetime-local" class="form-control" name="arrived_at" id="arrived_at">
                            </div>
                            <div class="mb-3">
                                <label for="leaved_at" class="form-label">Ketgan vaqti</label>
                                <input type="datetime-local" class="form-control" name="leaved_at" id="leaved_at">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>

    <?php
    $dns = "mysql:host=localhost;dbname=work_of_time";
    $username = "root";
    $password = "Dilshodjon2005";
    $pdo = new PDO($dns, $username, $password);
    if (isset($_POST["name"]) && isset($_POST["arrived_at"]) && isset($_POST["leaved_at"])) {
        $name = $_POST["name"];
        $arrived_at = $_POST["arrived_at"];
        $leaved_at = $_POST["leaved_at"];

        $query = "INSERT INTO worktime (name,arrived_at,leaved_at) VALUES (:name,:arrived_at,:leaved_at)";
        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":arrived_at", $arrived_at);
        $stmt->bindParam(":leaved_at", $leaved_at);
        $stmt->execute();


        $workTime = $pdo->query(query: "SELECT * from worktime");
        $records = ($workTime->fetchAll(PDO::FETCH_ASSOC));
    }

    ?>

    <table class="table table-dark table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
        </thead>
        <tbody>
            <?php
            foreach($records as $record) {
                echo "<tr>";
                echo "<td>" . $record['id'] . "</td>";
                echo "<td>" . $record['name'] . "</td>";
                echo "<td>" . $record['arrived_at'] . "</td>";
                echo "<td>" . $record['leaved_at'] . "</td>";

            }
//
            ?>

        </tbody>
    </table>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>