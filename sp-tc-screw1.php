
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.2/css/bootstrap.min.css">
    <title>SP.TC Screw Removal 1</title>
</head>

<body class="bg-body-tertiary">
    <header class="rounded-top-3 py-1 bg-dark">
        <div class="d-flex justify-content-between align-items-center">
            <h5 class="text-center text-white"></h5>
            <h5 class="text-center text-white">TC Screw Removal#1</h5>
            <div>
                <div data-bs-theme="dark">
                    <button onclick="document.location='AutoDis.php'" type="button" class="btn-close pe-4" aria-label="Close"></button>
                </div>
            </div>
        </div>
    </header>
    <div class="m-3 position-relative" style="border: 5px dotted black; background-clip:padding-box; width:770px ">
        <img src="img/main-machine/2-full.png" alt="" width="760px">
        <div class="position-absolute" style="top:15px; bottom:0; left:240px; right:0;">
            <button type="button" class="bg-transparent" data-bs-toggle="modal" data-bs-target="#EE1" style="border: 4px solid blue; height:750px; width:300px;">
                <Label class="fs-6 bg-primary text-light">TC Screw Removal unit</Label>
            </button>
        </div>
        <div class="position-absolute" style="bottom:0; left:200px; right:0;">
            <button type="button" class="bg-transparent" data-bs-toggle="modal" data-bs-target="#lifter" style="border: 4px solid blue; height:40px; width:350px;">
                <Label class="fs-6 bg-primary text-light">Lifter unit & preload</Label>
            </button>
        </div>
    </div>

    <!-- Modal EE1 -->
    <div class="modal fade" id="EE1" tabindex="-1" aria-labelledby="modalEE1" style="display: none;" aria-modal="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h5 class="modal-title text-light" id="modalEE1">TC Screw Removal Unit</h5>
                    <div data-bs-theme="dark">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="position-relative" style="border: 5px dotted black; background-clip:padding-box; width:770px;">
                        <img src="img/main-machine/2-EE1-presenter.png" alt="" width="760px">
                        <div class="position-absolute" style="top:46px;left:20px;">
                            <button  onclick="parent.open('https://10.144.134.150/stock/AI_search.php?Control=MVE-715')" type="button" class="bg-transparent" style="border: 4px solid blue; height:160px; width:153px;"></button>
                        </div>
                        <div class="position-absolute" style="top:210px;left:22px;">
                            <button onclick="parent.open('https://10.144.134.150/stock/AI_search.php?Control=MVE-853')" type="button" class="bg-transparent" style="border: 4px solid blue; height:164px; width:147px;"></button>
                        </div>
                        <div class="position-absolute" style="top:65px;right:25px;">
                            <button onclick="parent.open('https://10.144.134.150/stock/AI_search.php?Control=MVE-951')" type="button" class="bg-transparent" style="border: 4px solid blue; height:168px; width:150px;"></button>
                        </div>
                        <div class="position-absolute" style="top:240px;right:15px;">
                            <button onclick="parent.open('https://10.144.134.150/stock/AI_search.php?Control=MVE-953')" type="button" class="bg-transparent" style="border: 4px solid blue; height:168px; width:148px;"></button>
                        </div>
                        <div class="position-absolute" style="bottom:252px;left:22px;">
                            <button onclick="parent.open('https://10.144.134.150/stock/AI_search.php?Control=MVE-819')" type="button" class="bg-transparent" style="border: 4px solid blue; height:148px; width:148px;"></button>
                        </div>
                        <div class="position-absolute" style="bottom:50px;left:25px">
                            <button onclick="parent.open('https://10.144.134.150/stock/AI_search.php?Control=MVE-810')" type="button" class="bg-transparent" style="border: 4px solid blue; height:170px; width:150px;"></button>
                        </div>
                        <div class="position-absolute" style="bottom:6px;left:245px">
                            <button onclick="parent.open('https://10.144.134.150/stock/AI_search.php?Control=MVE-809')" type="button" class="bg-transparent" style="border: 4px solid blue; height:168px; width:147px;"></button>
                        </div>
                        <div class="position-absolute" style="bottom:5px;right:105px;">
                            <button onclick="parent.open('https://10.144.134.150/stock/AI_search.php?Control=MVE-832')" type="button" class="bg-transparent" style="border: 4px solid blue; height:165px; width:147px;"></button>
                        </div>
                        <div class="position-absolute" style="bottom:195px;right:20px;">
                            <button onclick="parent.open('https://10.144.134.150/stock/AI_search.php?Control=MVE-739')" type="button" class="bg-transparent" style="border: 4px solid blue; height:170px; width:150px;"></button>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Lifter -->
    <!-- <div class="modal fade" id="lifter" tabindex="-1" aria-labelledby="modalLifter" style="display: none;" aria-modal="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h5 class="modal-title text-light" id="modalLifter">Lifter & Preload Unit</h5>
                    <div data-bs-theme="dark">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="position-relative" style="border: 5px dotted black; background-clip:padding-box; width:770px;">
                        <img src="img/main-machine/2-spare.png" alt="" width="760px">
                        <div class="position-absolute" style="top:45px;left:35px;">
                            <button  onclick="parent.open('https://10.144.134.150/stock/AI_search.php?Control=MVE-715')" type="button" class="bg-transparent" style="border: 4px solid blue; height:150px; width:148px;"></button>
                        </div>
                        <div class="position-absolute" style="top:225px;left:17px;">
                            <button onclick="parent.open('https://10.144.134.150/stock/AI_search.php?Control=MVE-853')" type="button" class="bg-transparent" style="border: 4px solid blue; height:150px; width:137px;"></button>
                        </div>
                        <div class="position-absolute" style="bottom:40px;left:37px;">
                            <button onclick="parent.open('https://10.144.134.150/stock/AI_search.php?Control=MVE-819')" type="button" class="bg-transparent" style="border: 4px solid blue; height:135px; width:132px;"></button>
                        </div>
                        <div class="position-absolute" style="top:110px;right:30px;">
                            <button onclick="parent.open('https://10.144.134.150/stock/AI_search.php?Control=MVE-951')" type="button" class="bg-transparent" style="border: 4px solid blue; height:155px; width:137px;"></button>
                        </div>
                        <div class="position-absolute" style="bottom:97px;right:18px;">
                            <button onclick="parent.open('https://10.144.134.150/stock/AI_search.php?Control=MVE-953')" type="button" class="bg-transparent" style="border: 4px solid blue; height:155px; width:137px;"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 -->


    <script src="bootstrap-5.3.2/js/bootstrap.min.js"></script>
</body>

</html>