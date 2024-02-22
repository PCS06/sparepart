<?php 
header("refresh:3")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.2/css/bootstrap.min.css">
    <title>TC Screw Removal 2</title>
</head>
<body class="bg-body-tertiary">
    <header class="rounded-top-3 py-1 bg-dark">
        <div class="d-flex justify-content-between align-items-center">
            <h5 class="text-center text-white"></h5>
            <h5 class="text-center text-white">TC Screw Removal#2</h5>
            <div>
                <div data-bs-theme="dark">
                    <button onclick="document.location='AutoDis.php'" type="button" class="btn-close pe-4" aria-label="Close"></button>
                </div>
            </div>
        </div>
    </header>
    <div class="m-3 position-relative" style="border: 5px dotted black; background-clip:padding-box; width:770px ">
        <img src="img/main-machine/3-full.png" alt="" width="760px">
        <div class="position-absolute" style="top:170px; right:100px;">
            <button onclick="document.location='AutoDis.php'" class="bg-transparent" style="border: 4px solid blue; height:540px; width:270px;">
                <Label class="fs-6 bg-primary text-light">TC Screw Removal unit</Label>
            </button>
        </div>
        <div class="position-absolute" style="top:200px; left:100px;">
            <button class="bg-transparent" style="border: 4px solid blue; height:520px; width:270px;">
                <Label class="fs-6 bg-primary text-light">Vacuum Screw</Label>
            </button>
        </div>
        <div class="position-absolute" style="bottom:20px; left:150px;">
            <button class="bg-transparent" style="border: 4px solid blue; height:60px; width:500px;">
                <Label class="fs-6 bg-primary text-light">Lifter unit & preload</Label>
            </button>
        </div>
    </div>
</body>
</html>