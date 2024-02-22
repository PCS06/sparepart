<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.2/css/bootstrap.min.css">
    <title>AutoDis-asm</title>
    <style>
        #loader {
            border: 12px solid #f3f3f3;
            border-radius: 50%;
            border-top: 12px solid #444444;
            width: 70px;
            height: 70px;
            animation: spin 1s linear infinite;
        }

        .center {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;
        }

        @keyframes spin {
            100% {
                transform: rotate(360deg);
            }
        }
    </style>
</head>

<body class="bg-body-tertiary">
    <div id="loader" class="center"></div>
    <?php include "component/navbar.php"; ?>
    <main class="container mt-5">
        <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
            <div class="row">
                <div class="col-lg-6 px-0">
                    <h1 class="display-4 fst-italic">TM#4 สามัคคีคือพลัง</h1>
                    <p class="lead my-3">น้องช่าง TM4 น่ารักทุกคน สนใจติดต่อได้ครับ</p>
                    <p class="lead mb-0"><a class="text-body-emphasis fw-bold">รวดเร็วทันใจ พร้อมรับใช้พี่ๆๆทุกคน...</a></p>
                </div>
                <div class="col-lg-6 d-flex justify-content-center align-items-center">
                    <img class="img-fluid" src="img/auto-dis2.png">
                </div>
            </div>
        </div>

        <div class="row g-5">
            <div class="col-md-8">
                <h3 class="pb-4 mb-4 fst-italic border-bottom">
                    Auto Dis ASM - Spare Part
                </h3>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
            <!--  row1 col1 -->
            <div class="col" style="width: 330px;">
                <a href="#" class="text-decoration-none">
                    <div class="card shadow-sm text-center">
                        <img class="rounded-4 mx-sm-auto p-2" width="80%" height="230" src="img/resize_main_machine/Loading.png">
                        <div class="card-body">
                            <p class="card-text fs-5 fw-bolder">Loading</p>
                        </div>
                    </div>
                </a>
            </div>
            <!--  row1 col2 -->
            <div class="col" style="width: 330px;">
                <a href="sp-tc-screw1.php" class="text-decoration-none">
                    <div class="card shadow-sm text-center">
                        <img class="rounded-4 mx-sm-auto p-2" width="80%" height="230" src="img/resize_main_machine/tc-screw-rem1 (banner).png">
                        <div class="card-body">
                            <p class="card-text fs-5 fw-bolder">TC Screw Removal#1</p>
                        </div>
                    </div>
                </a>
            </div>
            <!--  row1 col3 -->
            <div class="col" style="width: 330px;">
                <a href="sp-tc-screw2.php" class="text-decoration-none">
                    <div class="card shadow-sm text-center">
                        <img class="rounded-4 mx-sm-auto p-2" width="80%" height="230" src="img/resize_main_machine/tc-screw-rem2 (banner).png">
                        <div class="card-body">
                            <p class="card-text fs-5 fw-bolder">TC Screw Removal#2 <Removal id="2"></Removal>
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <!--  row1 col4 -->
            <div class="col" style="width: 330px;">
                <a href="sp-topcover.php" class="text-decoration-none">
                    <div class="card shadow-sm text-center">
                        <img class="rounded-4 mx-sm-auto p-2" width="80%" height="230" src="img/resize_main_machine/top-cover-rem1-2 (banner).png">
                        <div class="card-body">
                            <p class="card-text fs-5 fw-bolder">Top Cover Removal#1,2</p>
                        </div>
                    </div>
                </a>
            </div>
            <!--  row2 col1 -->
            <div class="col" style="width: 330px;">
                <a href="#" class="text-decoration-none">
                    <div class="card shadow-sm text-center">
                        <img class="rounded-4 mx-sm-auto p-2" width="80%" height="230" src="img/resize_main_machine/hc-ins (banner).png">
                        <div class="card-body">
                            <p class="card-text fs-5 fw-bolder">Head Clip Install</p>
                        </div>
                    </div>
                </a>
            </div>
            <!--  row2 col2 -->
            <div class="col" style="width: 330px;">
                <a href="#" class="text-decoration-none">
                    <div class="card shadow-sm text-center">
                        <img class="rounded-4 mx-sm-auto p-2" width="80%" height="230" src="img/resize_main_machine/odcs-vcm (banner).png">
                        <div class="card-body">
                            <p class="card-text fs-5 fw-bolder">ODCS & VCM short</p>
                        </div>
                    </div>
                </a>
            </div>
            <!--  row2 col3 -->
            <div class="col" style="width: 330px;">
                <a href="#" class="text-decoration-none">
                    <div class="card shadow-sm text-center">
                        <img class="rounded-4 mx-sm-auto p-2" width="80%" height="230" src="img/resize_main_machine/vcm-flex (banner).png">
                        <div class="card-body">
                            <p class="card-text fs-5 fw-bolder">VCM & Flex Screw</p>
                        </div>
                    </div>
                </a>
            </div>
            <!--  row2 col4 -->
            <div class="col" style="width: 330px;">
                <a href="#" class="text-decoration-none">
                    <div class="card shadow-sm text-center">
                        <img class="rounded-4 mx-sm-auto p-2" width="auto" height="230" src="img/resize_main_machine/bypass1 (banner).png">
                        <div class="card-body">
                            <p class="card-text fs-5 fw-bolder">UV & Bypass#1</p>
                        </div>
                    </div>
                </a>
            </div>
            <!--  row3 col1 -->
            <div class="col" style="width: 330px;">
                <a href="#" class="text-decoration-none">
                    <div class="card shadow-sm text-center">
                        <img class="rounded-4 mx-sm-auto p-2" width="80%" height="230" src="img/resize_main_machine/hsa1-2 (banner).png">
                        <div class="card-body">
                            <p class="card-text fs-5 fw-bolder">HSA / VCM#1,2</p>
                        </div>
                    </div>
                </a>
            </div>
            <!--  row3 col2 -->
            <div class="col" style="width: 330px;">
                <a href="#" class="text-decoration-none">
                    <div class="card shadow-sm text-center">
                        <img class="rounded-4 mx-sm-auto p-2" width="80%" height="230" src="img/resize_main_machine/basevac (banner).png">
                        <div class="card-body">
                            <p class="card-text fs-5 fw-bolder">Base Vac & Pallet clean</p>
                        </div>
                    </div>
                </a>
            </div>
            <!--  row3 col3 -->
            <div class="col" style="width: 330px;">
                <a href="#" class="text-decoration-none">
                    <div class="card shadow-sm text-center">
                        <img class="rounded-4 mx-sm-auto p-2" width="80%" height="230" src="img/resize_main_machine/spoiler (banner).png">
                        <div class="card-body">
                            <p class="card-text fs-5 fw-bolder">Air Spoiler Removal</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- row3 col4 -->
            <div class="col" style="width: 330px;">
                <a href="#" class="text-decoration-none">
                    <div class="card shadow-sm text-center">
                        <img class="rounded-4 mx-sm-auto p-2" width="80%" height="230" src="img/resize_main_machine/ramp (banner).png">
                        <div class="card-body">
                            <p class="card-text fs-5 fw-bolder">Ramp Removal</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- row4 col1 -->
            <div class="col" style="width: 330px;">
                <a href="#" class="text-decoration-none">
                    <div class="card shadow-sm text-center">
                        <img class="rounded-4 mx-sm-auto p-2" width="80%" height="230" src="img/resize_main_machine/topclamp (banner).png">
                        <div class="card-body">
                            <p class="card-text fs-5 fw-bolder">Top Clamp Removal</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- row4 col2 -->
            <div class="col" style="width: 330px;">
                <a href="#" class="text-decoration-none">
                    <div class="card shadow-sm text-center">
                        <img class="rounded-4 mx-sm-auto p-2" width="80%" height="230" src="img/resize_main_machine/bypass2.png">
                        <div class="card-body">
                            <p class="card-text fs-5 fw-bolder">Bypass#2</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- row4 col3 -->
            <div class="col" style="width: 330px;">
                <a href="#" class="text-decoration-none">
                    <div class="card shadow-sm text-center">
                        <img class="rounded-4 mx-sm-auto p-2" width="80%" height="230" src="img/resize_main_machine/dis (banner).png">
                        <div class="card-body">
                            <p class="card-text fs-5 fw-bolder">Disk Removal#1,2,3</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- row4 col4 -->
            <div class="col" style="width: 330px;">
                <a href="#" class="text-decoration-none">
                    <div class="card shadow-sm text-center">
                        <img class="rounded-4 mx-sm-auto p-2" width="80%" height="230" src="img/resize_main_machine/Loading.png">
                        <div class="card-body">
                            <p class="card-text fs-5 fw-bolder">Unload</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </main>


    <footer class="bg-white">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 py-5 mt-5">
                <div class="col mb-3">
                    <h5>Request System</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">MSP Sparepart</a></li>
                    </ul>
                </div>

                <div class="col mb-3">
                    <h5>Information System</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="http://eis/mvx-portal.html" class="nav-link p-0 text-body-secondary">MVX</a></li>
                        <li class="nav-item mb-2"><a href="http://eis/venusq.html" class="nav-link p-0 text-body-secondary">Venus-Q</a></li>
                    </ul>
                </div>

                <div class="col mb-3">
                    <h5>Downtime Monitor</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">DIS ASM</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">SUM ASM</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">CONVEYOR</a></li>
                    </ul>
                </div>

                <div class="col mb-3">
                    <h5>Contract</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2">Kampol M. | 612444</li>
                        <li class="nav-item mb-2">MTC Auto DisAsm | 615882</li>
                        <li class="nav-item mb-2">MTC Sub Center | 613453</li>
                        <li class="nav-item mb-2">MTC VELA Center | 612394</li>
                        <li class="nav-item mb-2">MTC HDE P-ENT | 613454</li>
                        <li class="nav-item mb-2">CBD Spare part | 614573</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>




    <script src="bootstrap-5.3.2/js/bootstrap.min.js"></script>
    <script>
        document.onreadystatechange = function() {
            if (document.readyState !== "complete") {
                document.querySelector("body").style.visibility = "hidden";
                document.querySelector("#loader").style.visibility = "visible";
            } else {
                document.querySelector("#loader").style.display = "none";
                document.querySelector("body").style.visibility = "visible";
            }};
    </script>
</body>

</html>