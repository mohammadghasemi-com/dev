<!doctype html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>bootstrap test</title>
    <!-- font -->
    <!--    <link rel="stylesheet" href="https://cdn1.simorgh.app/simorgh/v3/font/iransans-fa/font-face.css" type="text/css">-->
    <link rel="stylesheet" href="https://simorghbu.github.io/dev/src/font/iransans-fa/font-face.css" type="text/css">
    <!-- reset -->
<!--    <link rel="stylesheet" href="https://cdn1.simorgh.app/simorgh/v3/reset/ex1.css" type="text/css">-->
    <!-- config -->
<!--    <link rel="stylesheet" href="https://cdn1.simorgh.app/simorgh/v3/config/ex1.css" type="text/css">-->
    <!-- color palette -->
    <link rel="stylesheet" href="https://simorghbu.github.io/dev/src/color/none/simorgh/admin-panel/indigo.css" type="text/css">
    <link rel="stylesheet" href="https://simorghbu.github.io/dev/src/color/none/simorgh/primary/indigo.css" type="text/css">
    <link rel="stylesheet" href="https://simorghbu.github.io/dev/src/color/none/simorgh/secondary/orange.css" type="text/css">

    <link rel="stylesheet" href="https://simorghbu.github.io/dev/src/color/none/simorgh/palette/blue.css" type="text/css">
    <link rel="stylesheet" href="https://simorghbu.github.io/dev/src/color/none/simorgh/palette/indigo.css" type="text/css">
    <link rel="stylesheet" href="https://simorghbu.github.io/dev/src/color/none/simorgh/palette/red.css" type="text/css">
    <link rel="stylesheet" href="https://simorghbu.github.io/dev/src/color/none/simorgh/palette/orange.css" type="text/css">
    <link rel="stylesheet" href="https://simorghbu.github.io/dev/src/color/none/simorgh/palette/green.css" type="text/css">
    <link rel="stylesheet" href="https://simorghbu.github.io/dev/src/color/none/simorgh/palette/yellow.css" type="text/css">
    <link rel="stylesheet" href="https://simorghbu.github.io/dev/src/color/none/simorgh/palette/gray.css" type="text/css">
    <link rel="stylesheet" href="https://simorghbu.github.io/dev/src/color/none/simorgh/palette/pink.css" type="text/css">
    <link rel="stylesheet" href="https://simorghbu.github.io/dev/src/color/none/simorgh/palette/purple.css" type="text/css">
    <link rel="stylesheet" href="https://simorghbu.github.io/dev/src/color/none/simorgh/palette/teal.css" type="text/css">
    <link rel="stylesheet" href="https://simorghbu.github.io/dev/src/color/none/simorgh/palette/cyan.css" type="text/css">


    <!--<link rel="stylesheet" href="https://cdn1.simorgh.app/simorgh/v3/color/required-class.css" type="text/css">
    <link rel="stylesheet" href="https://cdn1.simorgh.app/simorgh/v3/color/primary-class.css" type="text/css">
    <link rel="stylesheet" href="https://cdn1.simorgh.app/simorgh/v3/color/secondary-class.css" type="text/css">-->
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://simorghbu.github.io/dev/cdn/bootstrap.rtl.css">
<!--    <link rel="stylesheet" href="./dist/bootstrap.css">-->
<!--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">-->

</head>
<body>
    <button type="button" class="btn btn-lg btn-outline-primary">تست اصلی</button>
    <button type="button" class="btn btn-lg btn-primary">تست اصلی</button>
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
    <div class="alert alert-secondary" role="alert">
        A simple primary alert—check it out!
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

    <select class="form-select" aria-label="Default select example">
        <option selected>Open this select menu</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
    </select>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
        <label class="form-check-label" for="flexRadioDefault1">
            Default radio
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
        <label class="form-check-label" for="flexRadioDefault2">
            Default checked radio
        </label>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
            Default checkbox
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
        <label class="form-check-label" for="flexCheckChecked">
            Checked checkbox
        </label>
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">@</span>
        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
    </div>

    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
        <span class="input-group-text" id="basic-addon2">@example.com</span>
    </div>

    <label for="basic-url" class="form-label">Your vanity URL</label>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text">$</span>
        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
        <span class="input-group-text">.00</span>
    </div>

    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Username" aria-label="Username">
        <span class="input-group-text">@</span>
        <input type="text" class="form-control" placeholder="Server" aria-label="Server">
    </div>

    <div class="input-group">
        <span class="input-group-text">With textarea</span>
        <textarea class="form-control" aria-label="With textarea"></textarea>
    </div>


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