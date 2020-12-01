<?php
require 'database/configuration.php';
login();
register();
?>


<!DOCTYPE html>
<html>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta hhtp-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="THIS IS THE ENGINEERING SCHOOL PDF CENTER">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    fa-rotate-9096+=+-+00
    <title>The PDF Hub</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <div class="text-center">
                <img width="80" height="90" src="assets/img/IMG_3029.PNG" class="rounded " alt="">
            </div>
            <div class="row">

                <div class="navbar-header">

                    <div class="pos-f-t">
                        <div class="collapse" id="navbarToggleExternalContent">
                            <div class="bg-dark p-4">
                                <ul class="nav nav-pills">
                                    <li class="nav-item">
                                        <a href="#" class="btn btn-primary" role="button" aria-pressed="true">Home <i
                                                class="fa fa-home" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <button type="button" class="btn btn-warning" data-toggle="modal"
                                        data-target="#loginmodal">
                                        Login <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="loginmodal" tabindex="-1" role="dialog"
                                        aria-labelledby="ModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="form">
                                            <div class="modal-content" style="background-image: url('assets/img/blur5.jpg'); background-size: cover; background-repeat: no-repeat;
                             background-position: center;">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="ModalLabel">Login Form</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="logform" action="mainpage.php" method="post">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail3">Email address</label>
                                                            <input name="emailLogin" type="email" class="form-control"
                                                                id="exampleInputEmail3" aria-describedby="emailHelp"
                                                                placeholder="Enter email" required>
                                                            <small id="emailHelp" class="form-text text-muted">We'll
                                                                never share your email with anyone else.</small>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label for="validationDefaultUsername">Username</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text"
                                                                        id="inputGroupPrepend2">@</span>
                                                                </div>
                                                                <input name="usernameLogin" type="text"
                                                                    class="form-control" id="validationDefaultUsername3"
                                                                    placeholder="Username"
                                                                    aria-describedby="inputGroupPrepend2" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">Password</label>
                                                            <input name="passwordLogin" type="password"
                                                                class="form-control" id="exampleInputPassword3"
                                                                placeholder="Password" required>
                                                        </div>
                                                        <div class="custom-control custom-switch">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="customSwitch1">
                                                            <label class="custom-control-label"
                                                                for="customSwitch1">Check me out</label>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>
                                                            <input name="login_btn" type="submit"
                                                                class="btn btn-primary" value="Login" /><br>
                                                        </div>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-outline-light" data-toggle="modal"
                                        data-target="#registermodal">
                                        Register <i class="fa fa-user-plus" aria-hidden="true"></i>
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="registermodal" tabindex="-1" role="dialog"
                                        aria-labelledby="ModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="form">
                                            <div class="modal-content"
                                                style="background-image: url('assets/img/blur5.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center;">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="ModalLabel">Registration Form</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="regform" method="post">
                                                        <div class="form-row">
                                                            <div class="col-md-4 mb-3">
                                                                <label for="validationDefault01">First name</label>
                                                                <input name="firstname" type="text" class="form-control"
                                                                    id="validationDefault01" placeholder="First name"
                                                                    required>
                                                            </div>
                                                            <div class="col-md-4 mb-3">
                                                                <label for="validationDefault02">Last name</label>
                                                                <input name="lastname" type="text" class="form-control"
                                                                    id="validationDefault02" placeholder="Last name"
                                                                    required>
                                                            </div>
                                                            <div class="col-md-4 mb-3">
                                                                <label for="validationDefaultUsername">Username</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text"
                                                                            id="inputGroupPrepend2">@</span>
                                                                    </div>
                                                                    <input name="username" type="text"
                                                                        class="form-control"
                                                                        id="validationDefaultUsername"
                                                                        placeholder="Username"
                                                                        aria-describedby="inputGroupPrepend2" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Email address</label>
                                                            <input name="email" type="email" class="form-control"
                                                                id="exampleInputEmail1" aria-describedby="emailHelp"
                                                                placeholder="Enter email" required>
                                                            <small id="emailHelp" class="form-text text-muted">We'll
                                                                never share your email with anyone else.</small>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">Password</label>
                                                            <input name="password" type="password" class="form-control"
                                                                id="exampleInputPassword1" placeholder="Password"
                                                                required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">Confirm Password</label>
                                                            <input name="cpassword" type="password" class="form-control"
                                                                id="exampleInputPassword2"
                                                                placeholder="Confirm Password" required>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-md-6 mb-3">
                                                                <label for="validationDefault03">Contact</label>
                                                                <input name="contact" type="text" class="form-control"
                                                                    id="validationDefault03" placeholder="Contact"
                                                                    required>
                                                            </div>
                                                            <div class="col-md-3 mb-3">
                                                                <label for="validationDefault04">School</label>
                                                                <input name="school" type="text" class="form-control"
                                                                    id="validationDefault04" placeholder="School"
                                                                    required>
                                                            </div>
                                                            <div class="custom-control custom-switch">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="customSwitch2">
                                                                <label class="custom-control-label"
                                                                    for="customSwitch2">Agree to Terms and
                                                                    Conditions</label>
                                                            </div>
                                                        </div>

                                                    </form>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <input name="reg_btn" type="submit" class="btn btn-primary"
                                                        value="Register" /><br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>

                        </div>
                        <nav class="navbar navbar-dark bg-dark">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </nav>
                    </div>

                </div>

            </div>
        </div>

    </nav>
    <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img height="100%" width="100%" style="opacity:0.5; max-width:100%;height:auto;"
                        src="assets/img/woman.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block" style="margin-top: 100px">
                        <h1 style="color: black; font-family: 'Arial Rounded MT'">Login or Register</h1>
                        <p style="color: black; font-family: 'Arial Rounded MT'">Login to your account </p>
                        <p style="color: black; font-family: 'Arial Rounded MT'">Don't have one?</p>
                        <p style="color: black; font-family: 'Arial Rounded MT'">Create an account.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img style="opacity:0.5; max-width:100%;height:auto;" src="assets/img/Search.jpg"
                        class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 style="color: black; font-family: 'Arial Rounded MT'">Search, Browse & Upload</h1>
                        <p style="color: black; font-family: 'Arial Rounded MT'">Search for any book of your preference.
                        </p>
                        <p style="color: black; font-family: 'Arial Rounded MT'">Browse book categories.</p>
                        <p style="color: black; font-family: 'Arial Rounded MT'">Upload your books for easier access.
                        </p>
                        <p style="color: black; font-family: 'Arial Rounded MT'"> Share books with other Users.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img style="opacity:0.5; max-width:100%;height:auto;" src="assets/img/adult.jpg"
                        class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 style="color: black; font-family: 'Arial Rounded MT'">Choose & Download</h1>
                        <p style="color: black; font-family: 'Arial Rounded MT'">Choose a book.</p>
                        <p style="color: black; font-family: 'Arial Rounded MT'"> Download in less than 10 seconds! </p>
                        <p style="color: black; font-family: 'Arial Rounded MT'"> You're good to go. Let's rock it...
                        </p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

    <footer>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#" style="color: white; font-family: 'Arial Rounded MT'">The Pdf Hub</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02"
                style="margin-left: 50%; color: black; font-family: 'Arial Rounded MT'">
                <ul class="nav nav-pills">
                    <li style="margin-left: 10px" class="nav-item">
                        <a href="tel:+233551323199" class="btn btn-primary" role="button">Contact <i
                                class="fa fa-address-book-o" aria-hidden="true"></i></a>
                    </li>
                    <li style="margin-left: 10px" class="nav-item">
                        <a href="mailto:frankduah0@gmail.com" class="btn btn-warning" role="button">Mail <i
                                class="fa fa-envelope" aria-hidden="true"></i></a>
                    </li>
                    <li style="margin-left: 10px" class="nav-item">
                        <a href="https://t.me/dev_frank" target="blank" class="btn btn-outline-light"
                            role="button">Telegram <i class="fa fa-telegram" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </footer>
</body>

</html>\