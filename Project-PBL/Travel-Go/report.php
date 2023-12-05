<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>

<body style="height :3000px">
    <!-- Header -->
    <?php include "header.php"; ?>
    <!-- End header -->
    <div class="container-lg">
        <div class="row">
            <!--Sidebar-->
            <?php include "sidebar.php"; ?>
            <!-- End side bar -->

            <!-- Content -->
            <div class="col-lg-9 mt-1">
                <div class="card">
                    <div class="card-header">
                        Report
                    </div>
                    <div class="card-body">
                        

                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <!-- End Content -->
        </div>
        <div class="fixed-bottom text-center mb-2">Copyright 2023 artha</div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
        
</body>

</html>