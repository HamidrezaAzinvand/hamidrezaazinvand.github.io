<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Title</title>
		<link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="style.css">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        <script src="script.js"></script>
    </head>
	<body style="background-color: black;">
        <header>
            <h2 id="title">Hamidreza Azinvand</h2>
            <p id="title-description">This For Upload My Project</p>

            <div class="row">
                <div class="col-3"></div>
                <div class="col-2">
                    <a id="about_me" href="about_me.php">About Me</a>
                </div>
            </div>
        </header>

        <br><br><br><br><br><br>
        <div class="row">
            <div class="col-4"></div>
        <div class="card bg-dark" style="width: 20rem;">
            <div class="card-body">
                <h4 class="card-title text-light">Projects</h4>
                <div class="row">
                    <div class="col-7">
                        <!-- Tower Defence -->
                        <button class="btn btn-primary" onclick="TD()">Tower Defence</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <!-- Sunny Land -->
                        <p class="d-inline-flex gap-1">
                            <button class="btn btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                Sunny Land
                            </button>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <br>
        <div class="collapse" id="collapseExample" style="width: 18rem;">
            <div class="card card-body bg-dark">
                <p class="text-light">
                    Coming Soon...
                    <br>
                    This is Project in working
                </p>
            </div>
        </div>
	</body>
</html>