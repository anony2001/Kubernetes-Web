<?php $servname = $_SERVER['SERVER_NAME']; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Web Interface - Kubernetes</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="static/assets/img/favicon.png" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="static/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="static/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="static/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="static/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="static/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="static/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="static/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="static/assets/css/style.css" rel="stylesheet">
    <style>
        /* The Modal (background) */
        
        .modal,
        .modal1,
        .modal2 {
            display: none;
            position: fixed;
            z-index: 1;
            padding-top: 60%;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
        }
        
        .modal3,
        .modal4,
        .modal5 {
            display: none;
            position: fixed;
            z-index: 1;
            padding-top: 99%;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal6,
        .modal7,
        .modal8 {
            display: none;
            position: fixed;
            z-index: 1;
            padding-top: 99%;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
        }
        /* Modal Content */
        
        .modal-content,
        .modal-content1,
        .modal-content2,
        .modal-content3,
        .modal-content4,
        .modal-content5,
        .modal-content6,
        .modal-content7,
        .modal-content8 {
            position: relative;
            background-color: #fefefe;
            margin: auto;
            padding: 0;
            border: 1px solid #888;
            width: 80%;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            -webkit-animation-name: animatetop;
            -webkit-animation-duration: 0.4s;
            animation-name: animatetop;
            animation-duration: 0.4s
        }
        
        @-webkit-keyframes animatetop {
            from {
                top: -300px;
                opacity: 0
            }
            to {
                top: 0;
                opacity: 1
            }
        }
        
        @keyframes animatetop {
            from {
                top: -300px;
                opacity: 0
            }
            to {
                top: 0;
                opacity: 1
            }
        }
        /* The Close Button */
        
        .close,
        .close1,
        .close2,
        .close3,
        .close4,
        .close5,
        .close6,
        .close7,
        .close8 {
            color: white;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        
        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }
        
        .close2:hover,
        .close2:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }
        
        .close1:hover,
        .close1:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }
        
        .close3:hover,
        .close3:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }
        
        .close4:hover,
        .close4:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }
        
        .close5:hover,
        .close5:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        .close6:hover,
        .close6:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        .close7:hover,
        .close7:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        .close8:hover,
        .close8:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }
        
        .modal-header,
        .modal-header1,
        .modal-header2,
        .modal-header3,
        .modal-header4,
        .modal-header5,
        .modal-header6,
        .modal-header7,
        .modal-header8 {
            padding: 2px 16px;
            text-align: center;
            background-color: #5586ca;
            color: white;
        }
        
        .modal-body,
        .modal-body1,
        .modal-body2,
        .modal-body3,
        .modal-body4,
        .modal-body5,
        .modal-body6,
        .modal-body7,
        .modal-body8 {
            padding: 2px 16px;
        }
        
        .modal-footer,
        .modal-footer1,
        .modal-footer2,
        .modal-footer3,
        .modal-footer4,
        .modal-footer5,
        .modal-footer6,
        .modal-footer7,
        .modal-footer8 {
            padding: 2px 16px;
            background-color: #5586ca;
            color: white;
        }
        
        #btnn1,
        #btnn2,
        #btnn3,
        #btnn4,
        #btnn5,
        #btnn6,
        #btnn7,
        #btnn8,
        #btnn9,
        #btnn10,
        #btnn11,
        #btnn12,
        #btnn13,
        #btnn14,
        #btnn15,
        #btnn16,
        #btnn17,
        #btnn18,
        #btnn19 {
            margin-left: 45%;
        }
    </style>

    <style>
        #ip2 {
            border-radius: 25px;
            border: 2px solid #4b6ee1;
            padding: 20px;
            width: 650px;
            height: 15px;
            margin-left: 20%;
        }
        
        #random {
            border-radius: 15px;
            background: #FFFFFF;
            padding: 20px;
            width: 70%;
            height: auto;
            margin-left: 15%;
        }
    </style>
</head>

<script>
    function kube(cmd, p, b1, b2) {
        document.getElementById(p).innerHTML = "Output is Coming, Please Wait...";
        document.getElementById(b1).style.display = "none";
        document.getElementById(b2).style.display = "block";
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "http://<?=$servname; ?>/cmd2.php?x=" + cmd, true);
        document.getElementById(p).innerHTML = "Output is Coming, Please Wait...";
        xhr.send();
        xhr.onload = function() {
            var output = xhr.responseText;
            document.getElementById(p).innerHTML = output;
        }
    }

    function kube_show(p, b1, b2) {
        document.getElementById(p).innerHTML = "Click on the button to get the output ...";
        document.getElementById(b1).style.display = "none";
        document.getElementById(b2).style.display = "block";
    }

    function kube_one(cmd, inp, h, b1, b2, p) {
        var xhr = new XMLHttpRequest();
        document.getElementById(p).innerHTML = "Output is Coming, Please Wait...";
        document.getElementById(h).style.display = "none";
        document.getElementById(b1).style.display = "none";
        document.getElementById(b2).style.display = "block";
        var y = document.getElementById(inp).value;
        document.getElementById(inp).style.display = "none";
        xhr.open("GET", "http://<?=$servname; ?>/cmd2.php?x=" + cmd + "&y=" + y, true);
        xhr.send();
        xhr.onload = function() {
            var output = xhr.responseText;
            document.getElementById(p).innerHTML = output;
        }
    }

    function kube_one_show(h, i, p, b1, b2) {
        document.getElementById(h).style.display = "block";
        document.getElementById(i).style.display = "block";
        document.getElementById(p).innerHTML = "";
        document.getElementById(b2).style.display = "block";
        document.getElementById(b1).style.display = "none";
    }

    function kube_two(cmd, img, ver, p, h1, h2, i1, i2, b1, b2) {
        var xhr = new XMLHttpRequest();
        document.getElementById(p).innerHTML = "Output is Coming, Please Wait...";
        document.getElementById(h1).style.display = "none";
        document.getElementById(h2).style.display = "none";
        document.getElementById(i1).style.display = "none";
        document.getElementById(i2).style.display = "none";
        document.getElementById(b1).style.display = "none";
        document.getElementById(b2).style.display = "block";
        var y = document.getElementById(img).value;
        var z = document.getElementById(ver).value;
        xhr.open("GET", "http://<?=$servname; ?>/cmd2.php?x=" + cmd + "&y=" + y + "&z=" + z, true);
        xhr.send();
        xhr.onload = function() {
            var output = xhr.responseText;
            document.getElementById(p).innerHTML = output;
        }
    }

    function kube_two_show(p, h1, h2, i1, i2, b1, b2) {
        document.getElementById(p).innerHTML = "";
        document.getElementById(h1).style.display = "block";
        document.getElementById(h2).style.display = "block";
        document.getElementById(i1).style.display = "block";
        document.getElementById(i2).style.display = "block";
        document.getElementById(b1).style.display = "block";
        document.getElementById(b2).style.display = "none";
    }

    function digitalSearch(ele) {
        var xhr = new XMLHttpRequest();
        if (event.keyCode == 13) {
            if (ele.value.includes("deploy") && ele.value.includes("create")) {
                cmd = "deploy"
                var deployment = prompt("Please enter Deployment Name: ");
                var image = prompt("Please enter Image Name: ");
                xhr.open("GET", "http://<?=$servname; ?>/cmd2.php?x=" + cmd + "&y=" + deployment + "&z=" + image, true);
                xhr.send();
                document.getElementById("random").style.display = "block";
                document.getElementById("random").innerHTML = "Output is Coming, Please Wait...";
                xhr.onload = function() {
                    var output = xhr.responseText;
                    document.getElementById("random").style.display = "block";
                    document.getElementById("random").innerHTML = output;
                }
            } else if (ele.value.includes("pod") && ele.value.includes("show")) {
                cmd = "pod"
                xhr.open("GET", "http://<?=$servname; ?>/cmd2.php?x=" + cmd, true);
                xhr.send();
                document.getElementById("random").style.display = "block";
                document.getElementById("random").innerHTML = "Output is Coming, Please Wait...";
                xhr.onload = function() {
                    var output = xhr.responseText;
                    document.getElementById("random").style.display = "block";
                    document.getElementById("random").innerHTML = output;
                }
            }
            else if (ele.value.includes("node")) {
                cmd = "node"
                xhr.open("GET", "http://<?=$servname; ?>/cmd2.php?x=" + cmd, true);
                xhr.send();
                document.getElementById("random").style.display = "block";
                document.getElementById("random").innerHTML = "Output is Coming, Please Wait...";
                xhr.onload = function() {
                    var output = xhr.responseText;
                    document.getElementById("random").style.display = "block";
                    document.getElementById("random").innerHTML = output;
                }
            }
            else if (ele.value.includes("svc") || ele.value.includes("service")) {
                cmd = "svc"
                xhr.open("GET", "http://<?=$servname; ?>/cmd2.php?x=" + cmd, true);
                xhr.send();
                document.getElementById("random").style.display = "block";
                document.getElementById("random").innerHTML = "Output is Coming, Please Wait...";
                xhr.onload = function() {
                    var output = xhr.responseText;
                    document.getElementById("random").style.display = "block";
                    document.getElementById("random").innerHTML = output;
                }
            }
            else if (ele.value.includes("scale")) {
                cmd = "scale"
                var deployment = prompt("Please enter Deployment Name: ");
                var number = prompt("Please enter number of Replica: ");
                xhr.open("GET", "http://<?=$servname; ?>/cmd2.php?x=" + cmd + "&y=" + deployment + "&z=" + number, true);
                xhr.send();
                document.getElementById("random").style.display = "block";
                document.getElementById("random").innerHTML = "Output is Coming, Please Wait...";
                xhr.onload = function() {
                    var output = xhr.responseText;
                    document.getElementById("random").style.display = "block";
                    document.getElementById("random").innerHTML = output;
                }
            }
            else if (ele.value.includes("create") && ele.value.includes("pod")) {
                cmd = "createPod"
                var pod = prompt("Please Pod Name: ");
                var image = prompt("Please enter Image Name: ");
                xhr.open("GET", "http://<?=$servname; ?>/cmd2.php?x=" + cmd + "&y=" + pod + "&z=" + image, true);
                xhr.send();
                document.getElementById("random").style.display = "block";
                document.getElementById("random").innerHTML = "Output is Coming, Please Wait...";
                xhr.onload = function() {
                    var output = xhr.responseText;
                    document.getElementById("random").style.display = "block";
                    document.getElementById("random").innerHTML = output;
                }
            }
            else if (ele.value.includes("expose")) {
                cmd = "expose"
                var deployment = prompt("Please enter Deployment Name: ");
                var port = prompt("Please enter Port Number: ");
                xhr.open("GET", "http://<?=$servname; ?>/cmd2.php?x=" + cmd + "&y=" + deployment + "&z=" + port, true);
                xhr.send();
                document.getElementById("random").style.display = "block";
                document.getElementById("random").innerHTML = "Output is Coming, Please Wait...";
                xhr.onload = function() {
                    var output = xhr.responseText;
                    document.getElementById("random").style.display = "block";
                    document.getElementById("random").innerHTML = output;
                }
            }
            else if (ele.value.includes("delete")) {
                cmd = "delete"
                var deployment = prompt("Please enter Deployment Name: ");
                xhr.open("GET", "http://<?=$servname; ?>/cmd2.php?x=" + cmd + "&y=" + deployment, true);
                xhr.send();
                document.getElementById("random").style.display = "block";
                document.getElementById("random").innerHTML = "Output is Coming, Please Wait...";
                xhr.onload = function() {
                    var output = xhr.responseText;
                    document.getElementById("random").style.display = "block";
                    document.getElementById("random").innerHTML = output;
                }
            }
            else if (ele.value.includes("command")) {
                cmd = "run"
                var command= prompt("Please enter the Command: ");
                xhr.open("GET", "http://<?=$servname; ?>/cmd2.php?x=" + cmd + "&y=" + command, true);
                xhr.send();
                document.getElementById("random").style.display = "block";
                document.getElementById("random").innerHTML = "Output is Coming, Please Wait...";
                xhr.onload = function() {
                    var output = xhr.responseText;
                    document.getElementById("random").style.display = "block";
                    document.getElementById("random").innerHTML = output;
                }
            }
            // alert(ele.value);
        }
    }
</script>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">

		<h1 class="logo"><a href="index.php">Web Interface - Kubernetes</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
			<li><a class="nav-link scrollto" href="index.php">Home</a></li>
			<li><a class="nav-link scrollto" href="docker.php">Docker</a></li>
            <li><a class="nav-link scrollto active" href="kubernetes.php">Kubernetes</a></li>
			<li><a class="getstarted scrollto" href="docker.php">Get Started</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->

    <main id="main">

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">
                <br /><br />
                <div class="section-title">
			<img src="static/assets/img/Kubernetes_Logo.png" width="800px" height="400px" text-align="center">
                    <br /><br /><br />
                    <h2>Kubernetes Sevices</h2>
                    <br />
                    <p>Kubernetes, also known as K8s, is an open-source system for automating deployment, scaling, and management of containerized applications.

                        It groups containers that make up an application into logical units for easy management and discovery. Kubernetes builds upon 15 years of experience of running production workloads at Google, combined with best-of-breed ideas and practices from the community.</p>
                </div>
                <br /><br />
                <h3 align="center">Enter Your Command : </h3>
                <br />
                <input type="text" id="ip2" class="search" onkeydown="digitalSearch(this)" placeholder="Enter Your Command" style="text-align: center" autocomplete="off"/>
                <br /><br />
                <p  id="random" style="display:none" style="text-align: center"></p><br />
                <!-- "random" class=  style="display:none"-->

                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box iconbox-blue">
                            <div class="icon">
				            <img src="static/assets/img/kuberneteslogo_64.png">
                            </div>
                            <h4>Create Deployment</h4>
                            <p>Kubernetes Deployments provide a fundamentally different approach to application management.</p>
                            <br />
                            <h4><button type="button" class="btn btn-outline-secondary" id="myBtn">Create Deployment</button></h4>
                        </div>
                    </div>

                    <!-- The Modal -->
                    <div id="myModal" class="modal">

                        <!-- Modal content -->
                        <div class="modal-content">
                            <div class="modal-header">
                                <span class="close">&times;</span>
                                <h2>Create Deployment</h2>
                            </div>
                            <div class="modal-body">
                                <br /><br />
                                <h6 id="l1">Enter Deployment Name : </h6>
                                <input type="text" class="form-control" id="deployName" placeholder="Deployment Name" required>
                                <br /><br />
                                <h6 id="limage">Enter Image Name: </h6>
                                <input type="text" class="form-control" id="imgName" placeholder="Image Name" required>
                                <p id="p3"></p>
                                <br />
                                <button type="button" id="btnn1" class="btn btn-outline-secondary" onclick="kube_two('deploy', 'deployName', 'imgName', 'p3', 'l1', 'limage', 'deployName', 'imgName', 'btnn1', 'btnn2')">Submit</button>
                                <br />
                                <button type="button" id="btnn2" class="btn btn-outline-secondary" onclick="kube_two_show('p3', 'l1', 'limage', 'deployName', 'imgName', 'btnn1', 'btnn2');">Back</button>
                                <br /><br />
                            </div>
                            <div class="modal-footer">
                                <h3> </h3>
                            </div>
                        </div>

                    </div>

                    <script>
                        var modal = document.getElementById("myModal");
                        var btn = document.getElementById("myBtn");
                        document.getElementById("btnn2").style.display = "none";
                        var span = document.getElementsByClassName("close")[0];
                        btn.onclick = function() {
                            modal.style.display = "block";
                        }
                        span.onclick = function() {
                            modal.style.display = "none";
                        }
                        window.onclick = function(event) {
                            if (event.target == modal) {
                                modal.style.display = "none";
                            }
                        }
                    </script>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon-box iconbox-orange ">
                            <div class="icon">
				    <img src="static/assets/img/kuberneteslogo_64.png">
                            </div>
                            <h4>Scale Deployment</h4>
                            <p>Instantaneously change the number of replicas you want to run your application.</p>
                            <br />
                            <h4><button type="button" class="btn btn-outline-secondary" id="myBtn1">Scale Deployment</button></h4>
                        </div>
                    </div>
                    <!-- The Modal -->
                    <div id="myModal1" class="modal1">
                        <!-- Modal content -->
                        <div class="modal-content1">
                            <div class="modal-header1">
                                <span class="close1">&times;</span>
                                <h2>Scale Deployment</h2>
                            </div>
                            <div class="modal-body1">
                                <br /><br />
                                <h6 id="l3">Enter Deployment Name : </h6>
                                <input type="text" class="form-control" id="deployScaleName" placeholder="Deployment Name" required>
                                <br /><br />
                                <h6 id="Simage">Enter Number of Replica: </h6>
                                <input type="text" class="form-control" id="imgScaleName" placeholder="Number of Replica" required>
                                <p id="p4"></p>
                                <br />
                                <button type="button" id="btnn3" class="btn btn-outline-secondary" onclick="kube_two('scale', 'deployScaleName', 'imgScaleName', 'p4', 'l3', 'Simage', 'deployScaleName', 'imgScaleName', 'btnn3', 'btnn4')">Submit</button>

                                <br />

                                <button type="button" id="btnn4" class="btn btn-outline-secondary" onclick="kube_two_show('p4', 'l3', 'Simage', 'deployScaleName', 'imgScaleName', 'btnn3', 'btnn4');">Back</button>
                                <br /><br />
                            </div>
                            <div class="modal-footer1">
                                <h3> </h3>
                            </div>
                        </div>
                    </div>

                    <script>
                        var modal1 = document.getElementById("myModal1");
                        var btn1 = document.getElementById("myBtn1");
                        document.getElementById("btnn4").style.display = "none";
                        var span1 = document.getElementsByClassName("close1")[0];
                        btn1.onclick = function() {
                            modal1.style.display = "block";
                        }
                        span1.onclick = function() {
                            modal1.style.display = "none";
                        }
                        window.onclick = function(event) {
                            if (event.target == modal1) {
                                modal1.style.display = "none";
                            }
                        }
                    </script>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon-box iconbox-pink">
                            <div class="icon">
				    <img src="static/assets/img/kuberneteslogo_64.png">
                            </div>
                            <h4>Expose Deployment</h4>
                            <p>A Cluster IP service makes it accessible from any of the Kubernetes cluster's nodes.</p>
                            <br />
                            <h4><button type="button" class="btn btn-outline-secondary" id="myBtn2">Expose Deployment</button></h4>
                        </div>
                    </div>
                    <!-- The Modal -->
                    <div id="myModal2" class="modal2">
                        <!-- Modal content -->
                        <div class="modal-content2">
                            <div class="modal-header2">
                                <span class="close2">&times;</span>
                                <h2>Expose Deployment</h2>
                            </div>
                            <div class="modal-body2">
                                <br /><br />
                                <h6 id="l4">Enter Deployment Name : </h6>
                                <input type="text" class="form-control" id="deployExposeName" placeholder="Deployment Name" required>
                                <br /><br />
                                <h6 id="port">Enter Port Number: </h6>
                                <input type="text" class="form-control" id="portNumber" placeholder="Port Number" required>
                                <p id="p5"></p>
                                <br />
                                <button type="button" id="btnn5" class="btn btn-outline-secondary" onclick="kube_two('expose', 'deployExposeName', 'portNumber', 'p5', 'l4', 'port', 'deployExposeName', 'portNumber', 'btnn5', 'btnn6')">Submit</button>
                                <br />
                                <button type="button" id="btnn6" class="btn btn-outline-secondary" onclick="kube_two_show('p5', 'l4', 'port', 'deployExposeName', 'portNumber', 'btnn5', 'btnn6');">Back</button>
                                <br /><br />
                            </div>
                            <div class="modal-footer2">
                                <h3> </h3>
                            </div>
                        </div>
                    </div>

                    <script>
                        var modal2 = document.getElementById("myModal2");
                        var btn2 = document.getElementById("myBtn2");
                        document.getElementById("btnn6").style.display = "none";
                        var span2 = document.getElementsByClassName("close2")[0];
                        btn2.onclick = function() {
                            modal2.style.display = "block";
                        }
                        span2.onclick = function() {
                            modal2.style.display = "none";
                        }
                        window.onclick = function(event) {
                            if (event.target == modal2) {
                                modal2.style.display = "none";
                            }
                        }
                    </script>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box iconbox-yellow">
                            <div class="icon">
				    <img src="static/assets/img/kuberneteslogo_64.png">
                            </div>
                            <h4>Nodes</h4>
                            <p>Node is managed by the control plane and contains the services necessary to run Pods</p>
                            <br />
                            <h4><button type="button" class="btn btn-outline-secondary" id="myBtn3">Nodes</button></h4>
                        </div>
                    </div>

                    <!-- The Modal -->
                    <div id="myModal3" class="modal3">
                        <!-- Modal content -->
                        <div class="modal-content3">
                            <div class="modal-header3">
                                <span class="close3">&times;</span>
                                <h2>Nodes</h2>
                            </div>
                            <div class="modal-body3">
                                <br /><br /><br />
                                <p id="p6">Click on the button to get the output</p>
                                <button type="button" id="btnn8" class="btn btn-outline-secondary" onclick="kube_show('p6', 'btnn8', 'btnn7');">Back</button>
                                <button type="button" id="btnn7" class="btn btn-outline-secondary" onclick="kube('node','p6', 'btnn7', 'btnn8')">Nodes</button>
                                <br /><br />
                            </div>
                            <div class="modal-footer3">
                                <h3> </h3>
                            </div>
                        </div>
                    </div>

                    <script>
                        var modal3 = document.getElementById("myModal3");
                        var btn3 = document.getElementById("myBtn3");
                        document.getElementById("btnn8").style.display = "none";
                        var span3 = document.getElementsByClassName("close3")[0];
                        btn3.onclick = function() {
                            modal3.style.display = "block";
                        }
                        span3.onclick = function() {
                            modal3.style.display = "none";
                        }
                        window.onclick = function(event) {
                            if (event.target == modal3) {
                                modal3.style.display = "none";
                            }
                        }
                    </script>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon-box iconbox-red">
                            <div class="icon">
				    <img src="static/assets/img/kuberneteslogo_64.png">
                            </div>
                            <h4>List Podes</h4>
                            <p>A pod is a collection of containers sharing a network and mount namespace and is the basic unit of deployment in Kubernetes.</p>
                            <br />
                            <h4><button type="button" class="btn btn-outline-secondary" id="myBtn4">List Podes</button></h4>
                        </div>
                    </div>
                    <div id="myModal4" class="modal4">
                        <!-- Modal content -->
                        <div class="modal-content4">
                            <div class="modal-header4">
                                <span class="close4">&times;</span>
                                <h2>List Podes</h3>
                            </div>
                            <div class="modal-body4">
                                <br />
                                <p id="p7">Click on the button to get the output</p>
                                <br /><br />
                                <button type="button" id="btnn9" class="btn btn-outline-secondary" onclick="kube('pod', 'p7', 'btnn9', 'btnn10');">Podes</button>
                                <button type="button" id="btnn10" class="btn btn-outline-secondary" onclick="kube_show('p7', 'btnn10', 'btnn9');">Back</button>
                                <br /><br />
                            </div>
                            <div class="modal-footer4">
                                <h3> </h3>
                            </div>
                        </div>
                    </div>

                    <script>
                        var modal4 = document.getElementById("myModal4");
                        var btn4 = document.getElementById("myBtn4");
                        document.getElementById("btnn10").style.display = "none";
                        var span4 = document.getElementsByClassName("close4")[0];
                        btn4.onclick = function() {
                            modal4.style.display = "block";
                        }
                        span4.onclick = function() {
                            modal4.style.display = "none";
                        }
                        window.onclick = function(event) {
                            if (event.target == modal4) {
                                modal4.style.display = "none";
                            }
                        }
                    </script>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon-box iconbox-teal">
                            <div class="icon">
				            <img src="static/assets/img/kuberneteslogo_64.png">
                            </div>
                            <h4>Services</h4>
                            <p>An abstract way to expose an application running on a set of Pods as a network service</p>
                            <br />
                            <h4><button type="button" class="btn btn-outline-secondary" id="myBtn5">Services</button></h4>
                        </div>
                    </div>
                    <div id="myModal5" class="modal5">
                        <!-- Modal content -->
                        <div class="modal-content5">
                            <div class="modal-header5">
                                <span class="close5">&times;</span>
                                <h2>Services</h3>
                            </div>
                            <div class="modal-body5">
                                <br />
                                <p id="p8">Click on the button to get the output</p>
                                <button type="button" id="btnn11" class="btn btn-outline-secondary" onclick="kube('svc', 'p8', 'btnn11', 'btnn12');">Services</button>
                                <button type="button" id="btnn12" class="btn btn-outline-secondary" onclick="kube_show('p8', 'btnn12', 'btnn11');">Back</button>
                            </div>
                            <br /><br />
                            <div class="modal-footer5">
                                <h3> </h3>
                            </div>
                        </div>
                    </div>

                    <script>
                        var modal5 = document.getElementById("myModal5");
                        var btn5 = document.getElementById("myBtn5");
                        document.getElementById("btnn12").style.display = "none";
                        var span5 = document.getElementsByClassName("close5")[0];
                        btn5.onclick = function() {
                            modal5.style.display = "block";
                        }
                        span5.onclick = function() {
                            modal5.style.display = "none";
                        }
                        window.onclick = function(event) {
                            if (event.target == modal5) {
                                modal5.style.display = "none";
                            }
                        }
                    </script>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon-box iconbox-teal">
                            <div class="icon">
				            <img src="static/assets/img/kuberneteslogo_64.png">
                            </div>
                            <h4>Create Pods</h4>
                            <p>Pods are the smallest deployable units of computing that you can create and manage in Kubernetes.</p>
                            <br />
                            <h4><button type="button" class="btn btn-outline-secondary" id="myBtn6">Create Pods</button></h4>
                        </div>
                    </div>
                    <div id="myModal6" class="modal6">
                        <!-- Modal content -->
                        <div class="modal-content6">
                            <div class="modal-header6">
                                <span class="close6">&times;</span>
                                <h2>Create Pods</h2>
                            </div>
                            <div class="modal-body6">
                                <br /><br />
                                <h6 id="podTxt">Enter Pod Name : </h6>
                                <input type="text" class="form-control" id="podName" placeholder="Pod Name" required>
                                <br /><br />
                                <h6 id="podIm">Enter Image Name: </h6>
                                <input type="text" class="form-control" id="podImage" placeholder="Image Name" required>
                                <p id="podPara"></p>
                                <br />
                                <button type="button" id="btnn13" class="btn btn-outline-secondary" onclick="kube_two('createPod', 'podName', 'podImage', 'podPara', 'podTxt', 'podIm', 'podName', 'podImage', 'btnn13', 'btnn14')">Submit</button>
                                <br />
                                <button type="button" id="btnn14" class="btn btn-outline-secondary" onclick="kube_two_show('podPara', 'podTxt', 'podIm', 'podName', 'podImage', 'btnn13', 'btnn14');">Back</button>
                                <br /><br />
                            </div>
                            <div class="modal-footer6">
                                <h3> </h3>
                            </div>
                        </div>
                    </div>

                    <script>
                        var modal6 = document.getElementById("myModal6");
                        var btn6 = document.getElementById("myBtn6");
                        document.getElementById("btnn14").style.display = "none";
                        var span6 = document.getElementsByClassName("close6")[0];
                        btn6.onclick = function() {
                            modal6.style.display = "block";
                        }
                        span6.onclick = function() {
                            modal6.style.display = "none";
                        }
                        window.onclick = function(event) {
                            if (event.target == modal6) {
                                modal6.style.display = "none";
                            }
                        }
                    </script>
                    

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon-box iconbox-teal">
                            <div class="icon">
				            <img src="static/assets/img/kuberneteslogo_64.png">
                            </div>
                            <h4>Delete Deployments</h4>
                            <p>Delete resources by filenames, stdin, resources and names, or by resources and label selector.</p>
                            <br />
                            <h4><button type="button" class="btn btn-outline-secondary" id="myBtn7">Delete Deployment</button></h4>
                        </div>
                    </div>
                    <div id="myModal7" class="modal7">
                        <!-- Modal content -->
                        <div class="modal-content7">
                            <div class="modal-header7">
                                <span class="close7">&times;</span>
                                <h2>Delete Deployments</h2>
                            </div>
                            <div class="modal-body7">
                                <br /><br />
                                <h6 id="enterDep">Enter Deployment Name : </h6>
                                <input type="text" class="form-control" id="inDeploy" placeholder="Deployment Name" required>
                                <br /><br />
                                <p id="deleteDep"></p>
                                <br />
                                <button type="button" id="btnn15" class="btn btn-outline-secondary" onclick="kube_one('delete','inDeploy','enterDep', 'btnn15', 'btnn16', 'deleteDep')">Submit</button>
                                <br />
                                <button type="button" id="btnn16" class="btn btn-outline-secondary" onclick="kube_one_show('enterDep','inDeploy','deleteDep','btnn16', 'btnn15');">Back</button>
                                <br /><br />
                            </div>
                            <div class="modal-footer7">
                                <h3> </h3>
                            </div>
                        </div>
                    </div>

                    <script>
                        var modal7 = document.getElementById("myModal7");
                        var btn7 = document.getElementById("myBtn7");
                        document.getElementById("btnn16").style.display = "none";
                        var span7 = document.getElementsByClassName("close7")[0];
                        btn7.onclick = function() {
                            modal7.style.display = "block";
                        }
                        span7.onclick = function() {
                            modal7.style.display = "none";
                        }
                        window.onclick = function(event) {
                            if (event.target == modal7) {
                                modal7.style.display = "none";
                            }
                        }
                    </script>



                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon-box iconbox-teal">
                            <div class="icon">
				            <img src="static/assets/img/kuberneteslogo_64.png">
                            </div>
                            <h4>Delete All Deployment</h4>
                            <p>Delete All Deployments, Resources and Namespaces</p>
                            <br />
                            <h4><button type="button" class="btn btn-outline-secondary" id="myBtn8">Delete All</button></h4>
                        </div>
                    </div>
                    <div id="myModal8" class="modal8">
                        <!-- Modal content -->
                        <div class="modal-content8">
                            <div class="modal-header8">
                                <span class="close8">&times;</span>
                                <h2>Delete All</h3>
                            </div>
                            <div class="modal-body8">
                                <br />
                                <p id="pDeleteAll">Click on the button to Delete All Deployments</p>
                                <button type="button" id="btnn17" class="btn btn-outline-secondary" onclick="kube('deleteAll', 'pDeleteAll', 'btnn17', 'btnn18');">Delete</button>
                                <button type="button" id="btnn18" class="btn btn-outline-secondary" onclick="kube_show('pDeleteAll', 'btnn18', 'btnn17');">Back</button>
                            </div>
                            <br /><br />
                            <div class="modal-footer8">
                                <h3> </h3>
                            </div>
                        </div>
                    </div>

                    <script>
                        var modal8 = document.getElementById("myModal8");
                        var btn8 = document.getElementById("myBtn8");
                        document.getElementById("btnn18").style.display = "none";
                        var span8 = document.getElementsByClassName("close8")[0];
                        btn8.onclick = function() {
                            modal8.style.display = "block";
                        }
                        span8.onclick = function() {
                            modal8.style.display = "none";
                        }
                        window.onclick = function(event) {
                            if (event.target == modal8) {
                                modal8.style.display = "none";
                            }
                        }
                    </script>

                </div>
                

            </div>
        </section>

    </main>
    <!-- End #main -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="static/assets/vendor/aos/aos.js"></script>
    <script src="static/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="static/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="static/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="static/assets/vendor/php-email-form/validate.js"></script>
    <script src="static/assets/vendor/purecounter/purecounter.js"></script>
    <script src="static/assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="static/assets/js/main.js"></script>

</body>

</html>
