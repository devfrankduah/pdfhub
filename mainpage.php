<?php

require 'database/configuration.php';

// session_start();
// if (!isset($_SESSION['emailLogin'])) {
//   header('Location: mainpage.php');
// } else {
//   header('Location: index.php');
// }

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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="assets/css/icons/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <link rel="icon" type="png" href="assets/img/Adobe.png">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <title>The PDF Hub</title>
</head>

<body style="background-image: url('assets/img/blur5.jpg'); background-size: cover; background-repeat: no-repeat;
   background-position: center;">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <div class="text-center">
        <img width="80" height="90" src="assets/img/IMG_3029.PNG" class="rounded " alt="">
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <ul class="nav nav-pills">
              <li class="nav-item" style="margin-left: 10px">
                <a href="#" class="btn btn-primary" role="button" aria-pressed="true">Home <i class="fa fa-home" aria-hidden="true"></i> </a> </li>
            </ul>
          </li>
        </ul>

        <form class="form-inline my-2 my-lg-0" method="post">
          <input name="book_name" class="form-control mr-sm-2" type="search" placeholder="Find A book ?">
          <button name="search_button" class="btn btn-warning my-2 my-sm-0" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
        </form>

        <button style="margin-left: 5px" class="btn btn-outline-light" data-toggle="modal" data-target="#uploadmodal"> <i class="fa fa-upload" aria-hidden="true"> </i>
        </button>

        <a href="index.php" class="btn btn-danger" role="button" style="margin-left: 5px">Log Out <i class="fa fa-sign-out" aria-hidden="true"></i>
        </a>



        <!-- Modal -->
        <div class="modal fade" id="uploadmodal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="form">
            <div class="modal-content" style="background-image: url('assets/img/blur5.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center;">
              <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">File Upload</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form class="upform" action="mainpage.php" method="post" enctype="multipart/form-data">
                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label for="inputBookName">Book Name</label>
                      <input name="bookname" type="text" class="form-control" id="inputBookName" aria-describedby="bookHelp" placeholder="Enter book name" required>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="inputBookAuthor">Book Author</label>
                      <input name="bookauthor" type="text" class="form-control" id="inputBookAuthor" placeholder="Enter Author' name" required>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Book Category</label>
                      <select name="bookcat" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                        <option value="Lecture Slides">Lecture Slides</option>
                        <option value="Text Book">Text Book</option>
                        <option value="Past Questions">Past Questions</option>
                      </select>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="validationDefaultUsername">Username</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroupPrepend2">@</span>
                        </div>
                        <input name="username" type="text" class="form-control" id="validationDefaultUsername" placeholder="Username" aria-describedby="inputGroupPrepend2" required>
                      </div>
                    </div>
                    <div class="col-md-9 mb-3">
                      <label for="inputBookUrl">Book File</label>
                      <input name="pdf" type="file" accept="application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint, application/pdf, application/pptx" class="form-control" id="inputBookUrl" placeholder="Choose Book File" required>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input name="upload_btn" type="submit" class="btn btn-dark" value="Upload" /><br>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
  </nav>

  <?php echo uploadBook();
  searchBook(); ?>

  <div class="container">
    <h2 style="margin: 20px; color: black; font-family: 'Arial Rounded MT' ">Most Popular Books</h2>
    <div class="row">
      <div class="card text-white bg-secondary mb-3" style="max-width: 18rem; margin: 20px">
        <div class="card-header" style="color: black; font-family: 'Arial Rounded MT'">No.1 Trending</div>
        <div class="card-body">

          <img height="180" width="180" src="assets/img/books/IMG_3075.PNG" class="rounded" alt="...">
        </div>
        <div class="card-footer" style="color: black; font-family: 'Arial Rounded MT'"><a style="color:whitesmoke" href="assets/documents/Malik D.S.-C++ Programming. From problem analysis to program design-Cengage (2013).pdf" download="Malik D.S.-C++ Programming. From problem analysis to program design-Cengage (2013).pdf">
            <h5 class="card-title">C++ Programming <i class="fa fa-download"></i></h5>
          </a> </div>
      </div>
      <div class="card text-white bg-primary mb-3" style="max-width: 18rem; margin: 20px">
        <div class="card-header" style="color: black; font-family: 'Arial Rounded MT'">No.2 Trending</div>
        <div class="card-body">
          <img height="180" width="180" src="assets/img/books/IMG_3080.JPG" class="rounded" alt="...">
        </div>
        <div class="card-footer" style="color: black; font-family: 'Arial Rounded MT'"><a style="color:whitesmoke" href="assets/documents/-Statics, R.C. Hibbeler, 12th book.pdf" download="-Statics, R.C. Hibbeler, 12th book.pdf">
            <h5 class="card-title">Statics <i class="fa fa-download"></i></h5>
          </a> </div>
      </div>
      <div class="card text-white bg-success mb-3" style="max-width: 18rem; margin: 20px">
        <div class="card-header" style="color: black; font-family: 'Arial Rounded MT'">No.3 Trending</div>
        <div class="card-body">
          <img height="180" width="180" src="assets/img/books/IMG_3082.JPG" class="rounded" alt="...">
        </div>
        <div class="card-footer" style="color: black; font-family: 'Arial Rounded MT'"><a style="color:whitesmoke" href="assets/documents/Sullivan Algebra & Trigonometry 9th txtbk.pdf" download="Sullivan Algebra & Trigonometry 9th txtbk.pdf">
            <h5 class="card-title">Algebra-1 <i class="fa fa-download"></i></h5>
          </a> </div>
      </div>
      <div class="card text-white bg-danger mb-3" style="max-width: 18rem; margin: 20px">
        <div class="card-header" style="color: black; font-family: 'Arial Rounded MT'">No.4 Trending</div>
        <div class="card-body">
          <img height="180" width="180" src="assets/img/books/IMG_3076.JPG" class="rounded" alt="...">
        </div>
        <div class="card-footer" style="color: black; font-family: 'Arial Rounded MT'"><a style="color:whitesmoke" href=assets/documents/hughes-electrical-and-electronic-technology-10th-edition.pdf" download="hughes-electrical-and-electronic-technology-10th-edition.pdf">
            <h5 class="card-title">Electronics <i class="fa fa-download"></i></h5>
          </a> </div>
      </div>
      <div class="card text-white bg-warning mb-3" style="max-width: 18rem; margin: 20px">
        <div class="card-header" style="color: black; font-family: 'Arial Rounded MT'">No.5 Trending</div>
        <div class="card-body">
          <img height="180" width="180" src="assets/img/books/IMG_3078.JPG" class="rounded" alt="...">
        </div>
        <div class="card-footer" style="color: black; font-family: 'Arial Rounded MT'"><a style="color:whitesmoke" href=assets/documents/1429431793.203Software Engineering by Somerville.pdf" download="1429431793.203Software Engineering by Somerville.pdf">
            <h5 class="card-title">Soft. Engineering <i class="fa fa-download"></i></h5>
          </a> </div>
      </div>
      <div class="card text-white bg-info mb-3" style="max-width: 18rem; margin: 20px">
        <div class="card-header" style="color: black; font-family: 'Arial Rounded MT'">No.6 Trending</div>
        <div class="card-body">
          <img height="180" width="180" src="assets/img/books/IMG_3079.JPG" class="rounded" alt="...">
        </div>
        <div class="card-footer" style="color: black; font-family: 'Arial Rounded MT'"><a style="color:whitesmoke" href="assets/documents/digital_circuits_tutorial.pdf" download="digital_circuits_tutorial.pdf">
            <h5 class="card-title">Dig. Circuits <i class="fa fa-download"></i></h5>
          </a> </div>
      </div>
      <div class="card bg-light mb-3" style="max-width: 18rem; margin: 20px">
        <div class="card-header" style="color: black; font-family: 'Arial Rounded MT'">No.7 Trending</div>
        <div class="card-body">
          <img height="180" width="180" src="assets/img/books/IMG_3077.JPG" class="rounded" alt="...">
        </div>
        <div class="card-footer" style="color: black; font-family: 'Arial Rounded MT'"><a style="color:whitesmoke" href="assets/documents/Fundamentals_of_Database_Systems,_6th_Edition.pdf" download="Fundamentals_of_Database_Systems,_6th_Edition.pdf">
            <h5 class="card-title" style="color: black; font-family: 'Arial Rounded MT'">D.B. Systems <i class="fa fa-download"></i></h5>
          </a> </div>
      </div>
      <div class="card text-white bg-dark mb-3" style="max-width: 18rem; margin: 20px">
        <div class="card-header" style="color: white; font-family: 'Arial Rounded MT'">No.8 Trending</div>
        <div class="card-body">
          <img height="180" width="180" src="assets/img/books/IMG_3074.JPG" class="rounded" alt="...">
        </div>
        <div class="card-footer" style="color: black; font-family: 'Arial Rounded MT'"><a style="color:whitesmoke" href="assets/documents/The Book.pdf" download="The Book.pdf">
            <h5 class="card-title">Calculus 1 <i class="fa fa-download"></i></h5>
          </a> </div>
      </div>
      <div class="card text-white bg-danger mb-3" style="max-width: 18rem; margin: 20px">
        <div class="card-header" style="color: black; font-family: 'Arial Rounded MT'">No.9 Trending</div>
        <div class="card-body">
          <img height="180" width="180" src="assets/img/books/session-slide-1-1-638.jpg" class="rounded" alt="...">
        </div>
        <div class="card-footer" style="color: black; font-family: 'Arial Rounded MT'"><a style="color:whitesmoke" href="assets/documents/Critical thinking.pdf" download="Critical thinking.pdf">
            <h5 class="card-title">Critical Thinking 1 <i class="fa fa-download"></i></h5>
          </a> </div>
      </div>
      <div class="card border-success mb-3" style="max-width: 18rem; margin: 20px">
        <div class="card-header bg-transparent border-success">
          <h6 style="color: black; font-family: 'Arial Rounded MT'">No.10 Trending</h6>
        </div>
        <div class="card-body text-success">
          <img height="180" width="180" src="assets/img/books/IMG_3084.JPG" class="rounded" alt="...">
        </div>
        <div class="card-footer" style="color: black; font-family: 'Arial Rounded MT'"><a style="color:whitesmoke" href="assets/documents/Calculus_-_Early_Transcendentals_2e_Brig.pdf" download="Calculus_-_Early_Transcendentals_2e_Brig.pdf">
            <h5 class="card-title" style="color: black; font-family: 'Arial Rounded MT'">Calculus-III <i class="fa fa-download"></i></h5>
          </a> </div>
      </div>
      <div class="card text-white bg-secondary mb-3" style="max-width: 18rem; margin: 20px">
        <div class="card-header" style="color: black; font-family: 'Arial Rounded MT'">No.11 Trending</div>
        <div class="card-body">
          <img height="180" width="180" src="assets/img/books/IMG_3081.JPG" class="rounded" alt="...">
        </div>
        <div class="card-footer" style="color: black; font-family: 'Arial Rounded MT'"><a style="color:whitesmoke" href="assets/documents/Engineering_Mechanics_Dynamics_12_Editio.pdf" download="Engineering_Mechanics_Dynamics_12_Editio.pdf">
            <h5 class="card-title">Dynamics <i class="fa fa-download"></i></h5>
          </a> </div>
      </div>
      <div class="card border-warning mb-3" style="max-width: 18rem; margin: 20px">
        <div class="card-header bg-transparent border-warning">
          <h6 style="color: black; font-family: 'Arial Rounded MT'">No.12 Trending</h6>
        </div>
        <div class="card-body text-warning">
          <img height="180" width="180" src="assets/img/books/IMG_3083.JPG" class="rounded" alt="...">
        </div>
        <div class="card-footer" style="color: black; font-family: 'Arial Rounded MT'"><a style="color:whitesmoke" href="assets/documents/CalculusIII_Version2.pdf" download="CalculusIII_Version2.pdf">
            <h5 class="card-title" style="color: black; font-family: 'Arial Rounded MT'">Calculus II <i class="fa fa-download"></i></h5>
          </a> </div>
      </div>

    </div>
  </div>




  <div class="card-deck">
    <div class="container">
      <h2 style="margin: 20px; color: black; font-family: 'Arial Rounded MT' ">
        <hr>Book Categories
        <hr>
      </h2>
      <div class="card" style="margin-top: 20px">
        <img src="assets/img/row-of-books-in-shelf-256541.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#textbooksmodal">
              TextBook PDFs</button>
          </h5>
          <p class="card-text">Discover textboook pdfs for most courses at ease.</p>
        </div>
        <div class="card-footer">
          <small class="text-muted">Last updated few mins ago</small>
        </div>
      </div>
      <div class="card" style="margin-top: 20px">
        <img src="assets/img/woman-holding-microphone-standing-in-front-of-crowd-1708912.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#slidesmodal">
              Lecture Slides</button>
          </h5>
          <p class="card-text">Access every lecture slide from Day 1. </p>
        </div>
        <div class="card-footer">
          <small class="text-muted">Last updated few mins ago</small>
        </div>
      </div>
      <div class="card" style="margin-top: 20px">
        <img src="assets/img/antique-blank-camera-classic-269810 (1).jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#pascomodal">
              Past Questions</button>
          </h5>
          <p class="card-text"> Get Past Questions along with Answers for a better understanding</p>
        </div>
        <div class="card-footer">
          <small class="text-muted">Last updated few mins ago</small>
        </div>
      </div>
    </div>
  </div>



  <!-- Modal -->
  <div class="modal fade" id="textbooksmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><a href="#" role="button" class="btn btn-secondary popover-test" title="Download Free Text Books" data-content="Popover body content is set in this attribute.">Text Book PDFs</a>
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <?php retrieveBook(" Text Book"); ?>
        </div>
        <div class=" modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


  <!-- Modal -->
  <div class="modal fade" id="slidesmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Lecture Slides</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <?php retrieveBook(" Lecture Slides"); ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  </div>


  <!-- Modal -->
  <div class="modal fade" id="pascomodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Past Questions</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <?php retrieveBook(" Past Questions"); ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <footer>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin-top: 50px">
      <a class="navbar-brand" href="#" style="color: white; font-family: 'Arial Rounded MT'">The Pdf Hub</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02" style="margin-left: 50%; color: black; font-family: 'Arial Rounded MT'">
        <ul class="nav nav-pills">
          <li style="margin-left: 10px" class="nav-item">
            <a href="tel:+233551323199" class="btn btn-danger" role="button">Contact <i class="fa fa-address-book-o" aria-hidden="true"></i></a>
          </li>
          <li style="margin-left: 10px" class="nav-item">
            <a href="mailto:frankduah0@gmail.com" class="btn btn-warning" role="button">Mail <i class="fa fa-envelope" aria-hidden="true"></i></a>
          </li>
          <li style="margin-left: 10px" class="nav-item">
            <a href="https://t.me/dev_frank" target="blank" class="btn btn-info" role="button">Telegram <i class="fa fa-telegram" aria-hidden="true"></i></a>
          </li>
          <li class="nav-item" style="margin-left: 10px">
            <a href="#" class="btn btn-outline-light" role="button" aria-pressed="true">Back to Top <i class="fa fa-level-up" aria-hidden="true"></i> </a>
          </li>
        </ul>
      </div>
    </nav>
  </footer>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

</body>

</html>