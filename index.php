<!doctype html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>bootstrap test</title>
    <!-- font -->
<!--    <link rel="stylesheet" href="https://cdn1.simorgh.app/simorgh/v3/font/iransans-fa/font-face.css" type="text/css">-->
    <link rel="stylesheet" href="./src/font/iransans-fa/font-face.css" type="text/css">
    <!-- reset -->
<!--    <link rel="stylesheet" href="https://cdn1.simorgh.app/simorgh/v3/reset/ex1.css" type="text/css">-->
    <!-- config -->
<!--    <link rel="stylesheet" href="https://cdn1.simorgh.app/simorgh/v3/config/ex1.css" type="text/css">-->
    <!-- color palette -->
    <link rel="stylesheet" href="https://simorghbu.github.io/dev/src/color/simorgh/admin-panel/indigo.css" type="text/css">
    <link rel="stylesheet" href="https://simorghbu.github.io/dev/src/color/simorgh/primary/indigo.css" type="text/css"> <!-- primary = panel-->
    <link rel="stylesheet" href="https://simorghbu.github.io/dev/src/color/simorgh/secondary/orange.css" type="text/css"> <!-- primary = panel-->

    <link rel="stylesheet" href="https://simorghbu.github.io/dev/src/color/simorgh/__palette/blue.css" type="text/css">
    <link rel="stylesheet" href="https://simorghbu.github.io/dev/src/color/simorgh/__palette/indigo.css" type="text/css">
    <link rel="stylesheet" href="https://simorghbu.github.io/dev/src/color/simorgh/__palette/red.css" type="text/css">
    <link rel="stylesheet" href="https://simorghbu.github.io/dev/src/color/simorgh/__palette/orange.css" type="text/css">
    <link rel="stylesheet" href="https://simorghbu.github.io/dev/src/color/simorgh/__palette/green.css" type="text/css">
    <link rel="stylesheet" href="https://simorghbu.github.io/dev/src/color/simorgh/__palette/yellow.css" type="text/css">
    <link rel="stylesheet" href="https://simorghbu.github.io/dev/src/color/simorgh/__palette/gray.css" type="text/css">


    <!--<link rel="stylesheet" href="https://cdn1.simorgh.app/simorgh/v3/color/required-class.css" type="text/css">
    <link rel="stylesheet" href="https://cdn1.simorgh.app/simorgh/v3/color/primary-class.css" type="text/css">
    <link rel="stylesheet" href="https://cdn1.simorgh.app/simorgh/v3/color/secondary-class.css" type="text/css">-->
    <!-- bootstrap -->
    <link rel="stylesheet" href="./cdn/bootstrap.rtl.css">
<!--    <link rel="stylesheet" href="./dist/bootstrap.css">-->
<!--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">-->
    <style>
        .mg-alert-primary{
            background-color: var(--pa-primary-50);
            color: var(--pa-primary-400);
            border:1px solid var(--pa-primary-200);
        }
    </style>
</head>
<body>
    <button type="button" class="btn btn-lg btn-outline-primary">تست اصلی</button>
    <button type="button" class="btn btn-lg btn-secondary">Secondary</button>
    <button type="button" class="btn btn-success">Success</button>
    <button type="button" class="btn btn-danger">Danger</button>
    <button type="button" class="btn btn-warning">Warning</button>
    <button type="button" class="btn btn-info">Info</button>
    <button type="button" class="btn btn-light">Light</button>
    <button type="button" class="btn btn-dark">Dark</button>

    <div class="alert alert-primary" role="alert">
        A simple primary alert—check it out!
    </div>
    <div class="alert mg-alert-primary" role="alert">
        A simple secondary alert—check it out!
    </div>
    <div class="alert alert-success" role="alert">
        A simple success alert—check it out!
    </div>
    <div class="alert alert-danger" role="alert">
        A simple danger alert—check it out!
    </div>
    <div class="alert alert-warning" role="alert">
        A simple warning alert—check it out!
    </div>
    <div class="alert alert-info" role="alert">
        A simple info alert—check it out!
    </div>
    <div class="alert alert-light" role="alert">
        A simple light alert—check it out!
    </div>
    <div class="alert alert-dark" role="alert">
        A simple dark alert—check it out!
    </div>


    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>


    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <button type="button" class="btn btn-link">Link</button>

        <p>test</p>
    <button class="">test</button>
    <script src="./dist/bootstrap.js"></script>
<!--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>-->

</body>
</html>