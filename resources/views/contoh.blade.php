<html lang="en">

<head>
    <title>Latihan progress bar Bootstrap</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #0D0D0D;
            color: #F2F2F2 ;
        }
        .decade-logo-img {
            display: block;
            margin: 0 auto -10px;
            max-width: 250px;
            height: auto;
        }
        .text-magenta {
            color: #FF00A2;
            text-shadow: 0 0 15px rgba(255, 0, 162, 0.7) ;
        }

        .bg-magenta {
            background-color: #FF00A2;
        }

        .card-decade {
            background-color: #151515 ;
            border: 1px solid #333;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
            border-radius: 0;
        }

    </style>
</head>

<body>

    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="font-weight-bold header-title display-4">
                KAMEN RIDER <span class="text-magenta">DECADE</span>
            </h1>
            <img src="C:\The Data Center\Downloads\kamen rider decade logo.png" alt="Decade Logo"
                class="decade-logo-img">
        </div>

    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card card-decade p-4">
                <h5 class="mb-4 font-weight-bold text-uppercase" style="letter-spacing: 1px;">Progress Analysis</h5>

                <div class="mb-4">
                    <div class="d-flex justify-content-between mb-1">
                        <span class="small font-weight-bold text-uppercase">Rider Cards Collected</span>
                        <span class="small">85%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-magenta" role="progressbar" style="width: 85%">85%</div>
                    </div>
                </div>

                <div class="mb-2">
                    <div class="d-flex justify-content-between mb-1">
                        <span class="small font-weight-bold text-uppercase">A.R. Worlds Destroyed</span>
                        <span class="small">80%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary" role="progressbar" style="width: 80%">80%</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</body>

</html>
