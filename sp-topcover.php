<?php 
header("refresh:3")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.2/css/bootstrap.min.css">
    <title>Top Cover Removal1,2</title>
</head>
<body>
    <header class="rounded-top-3 py-1 bg-dark">
        <div class="d-flex justify-content-between align-items-center">
            <h5 class="text-center text-white"></h5>
            <h5 class="text-center text-white">Top Cover Removal#1,2</h5>
            <div>
                <div data-bs-theme="dark">
                    <button onclick="document.location='AutoDis.php'" type="button" class="btn-close pe-4" aria-label="Close"></button>
                </div>
            </div>
        </div>
    </header>
    <div class="m-3 position-relative" style="border: 5px dotted black; background-clip:padding-box; width:770px ">
        <img src="img/main-machine/4-full.png" alt="" width="760px">
        <div class="position-absolute" style="top:220px; left:300px;">
            <button onclick="document.location='AutoDis.php'" class="bg-transparent" style="border: 4px solid blue; height:300px; width:180px;">
                <Label class="fs-6 bg-primary text-light">PP1 Unit</Label>
            </button>
        </div>
        <div class="position-absolute" style="top:525px; left:340px;">
            <button onclick="document.location='AutoDis.php'" class="bg-transparent" style="border: 4px solid blue; height:70px; width:120px;">
                <Label class="fs-6 bg-primary text-light">Position Lifter</Label>
            </button>
        </div>

        <div class="position-absolute" style="bottom:20px; left:270px;">
            <button class="bg-transparent" style="border: 4px solid blue; height:60px; width:280px;">
                <Label class="fs-6 bg-primary text-light">Lifter unit & preload</Label>
            </button>
        </div>
    </div>




    
</body>
</html>