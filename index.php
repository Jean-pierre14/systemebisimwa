<?php require_once "./includes/header.php";
?>

<body>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="card card-body">
                    <h3>Bisimwa</h3>
                    <!-- Dynamic link from navLink.json -->
                    <ul class="mt-5 list-group list-group-flush">
                        <li class="list-group-item">
                            <a href="index.php"
                                class="text-decoration-none d-flex justify-content-between align-items-center p-3">
                                <span>Icon</span>
                                <span>Dashboard</span>
                                <span>date</span>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="student.php"
                                class="text-decoration-none d-flex justify-content-between align-items-center p-3">
                                <span>Icon</span>
                                <span>Students</span>
                                <span class="badge bg-primary rounded-pill">1890</span>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="index.php"
                                class="text-decoration-none d-flex justify-content-between align-items-center p-3">
                                <span>Icon</span>
                                <span>Parascolaire</span>
                                <span>date</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-8">
                <div class="card card-body">
                    <h3>Main</h3>
                </div>
            </div>
        </div>

    </div>
</body>

</html>