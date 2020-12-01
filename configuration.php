<?php

session_start();

function con()
{
	$con = mysqli_connect("localhost", "id11850159_root", "b}UvOSXy{}BRdH7P", "id11850159_pdfhub") or die("unable to connect");
	return mysqli_select_db($con, "id11850159_pdfhub");
}

function login()
{
	if (isset($_POST['login_btn'])) {
		$email = $_POST['emailLogin'];
		$password = $_POST['passwordLogin'];
		$username = $_POST['usernameLogin'];


		$query = "select * from usertable WHERE email='$email' AND password='$password'";
		$query_run = mysqli_query(con(), $query);
		if (mysqli_num_rows($query_run) > 0) {
			//valid

			$_SESSION['emailLogin'] = $email;

			$session_store = $_SESSION['emailLogin'];

			header('location:mainpage.php');
			echo '<script type="text/javascript"> alert("User successfully logged in ") </script>';
		} else {
			//invalid
			echo '<script type="text/javascript"> alert("User credentials not recognized. ") </script>';
		}
	}
}
function register()
{
	$con = mysqli_connect("localhost", "id11850159_root", "b}UvOSXy{}BRdH7P", "id11850159_pdfhub") or die("unable to connect");
	mysqli_select_db($con, "id11850159_pdfhub");

	if (isset($_POST['reg_btn'])) {
		//echo '<script type="text/javascript"> alert("Sign Up in progress") </script>';
		$username = $_POST['username'];
		$password = $_POST['password'];
		$cpassword = $_POST['cpassword'];
		$first_name = $_POST['firstname'];
		$last_name = $_POST['lastname'];
		$email = $_POST['email'];
		$contact = $_POST['contact'];
		$school = $_POST['school'];

		if ($password == $cpassword) {
			$query = "select * from usertable WHERE email='$email' ";
			$query_run = mysqli_query($con, $query);

			if (mysqli_num_rows($query_run) > 0) {

				//there's already a user with with the same email
				echo '<script type="text/javascript"> alert("Email aready in use, please try another ") </script>';
			} else {
				$query = "insert into usertable values('$first_name','$last_name','$username','$email','$school','$contact','$password')";
				$query_run = mysqli_query($con, $query);

				if ($query_run) {
					echo '<script type="text/javascript"> alert("User successfully registered. Please log in with your new account to access features.") </script>';
				} else {
					echo '<script type="text/javascript"> alert("error") </script>';
				}
			}
		} else {
			echo '<script type="text/javascript"> alert("Passwords do not match. Please try again. ") </script>';
		}
	}
}

function uploadBook()
{
	$con = mysqli_connect("localhost", "id11850159_root", "b}UvOSXy{}BRdH7P", "id11850159_pdfhub") or die("unable to connect");
	mysqli_select_db($con, "id11850159_pdfhub");

	if (isset($_POST['upload_btn'])) {
		echo '<script type="text/javascript">
		alert("Confirm upload.");
		</script>';
		$bookname = $_POST['bookname'];
		$bookauthor = $_POST['bookauthor'];
		$bookcat = $_POST['bookcat'];
		$username = $_POST['username'];
		$file_name = null;
		$file_size = null;
		$file_tmp_name = null;
		if (isset($_FILES['pdf'])) {
			$file_name = $_FILES['pdf']['name'];
			$file_size = $_FILES['pdf']['size'];
			$file_tmp_name = $_FILES['pdf']['tmp_name'];
			// $file_ext = strtolower(end(explode('.', $file_name)));
		} else {
			echo "The pdf input is not set";
		}


		$target_dir = "assets/documents/";
		$target_file = $target_dir . basename($file_name);
		$upload0k = 1;
		$pdfFileType = pathinfo($target_file, PATHINFO_EXTENSION);
		$check = getimagesize($file_tmp_name);
		// if ($check !== false) {
		// echo "File is present - " . $check["mime"] . ".";
		// $upload0k = 1;
		// } else {
		// echo "there is no file";
		// $upload0k = 0;
		// }
		if (file_exists($target_file)) {
			$upload0k = 0;
			echo "<center>File Already Exists :(</center>";
		}
		// if ($pdfFileType != "pdf" || $pdfFileType != "docx" || $pdfFileType != "pptx") {
		// echo "file is not valid";
		// $upload0k = 0;
		// }
		if ($upload0k != 0) {
			move_uploaded_file($file_tmp_name, $target_dir . $file_name);
			echo "<center><a href=" . $target_file . " download=''>File Upload Successful. Download Here <i class='fa fa-download'></i></a></center>";

			$fileUploadQuery = "INSERT INTO `bookstable`( `book_title`, `book_category`, `book_author`, `book_url`, `user_id`) VALUES ('$bookname',' $bookcat','$bookauthor','$target_file',' $username') ; ";

			if (mysqli_query($con, $fileUploadQuery)) {
				echo '<script type="text/javascript">
	alert("Book successfully Uploaded ")
</script>';
			} else {
				echo "<center>Something Went Wrong :(</center>";
			}
		}
	}
}

function searchBook()
{
	$con = mysqli_connect("localhost", "id11850159_root", "b}UvOSXy{}BRdH7P", "id11850159_pdfhub") or die("unable to connect");
	mysqli_select_db($con, "id11850159_pdfhub");
	if (isset($_POST['search_button'])) {
		$search_btn = $_POST['search_button'];
		$book_name = $_POST['book_name'];
		$search_query = "select * from bookstable where book_title like '%$book_name%' ;";

		$rows = mysqli_query($con, $search_query);
		if (mysqli_num_rows($rows) > 0) {
			echo '<center>
	<h2 style="margin: 20px; color: black; font-family: \'Arial Rounded MT\' ">Search Results</h2>
</center>
<hr>';
			// output data of each row
			while ($row = mysqli_fetch_array($rows)) {

				$book_url =  $row["book_url"];
				$book_file = str_replace("assets/documents/", "", $book_url);
				$author =  $row["book_author"];
				$title = $row["book_title"];
				echo "<center> <b>Author: </b> " . $author . " - <b>Book Title</b>: " . $title . " <a class='btn btn-sm btn-success' href='$book_url' download='$book_file'><i class='fa fa-download'></i> </a></center><br><br>";
			}
			echo '<hr>';
		} else {
			echo "<center>No book found. Please try another search</center>";
		}
		return $search_query;
	}
}
function retrieveBook($book_type)
{
	$con = mysqli_connect("localhost", "id11850159_root", "b}UvOSXy{}BRdH7P", "id11850159_pdfhub") or die("unable to connect");
	mysqli_select_db($con, "id11850159_pdfhub");
	$search_query = "SELECT * FROM bookstable where book_category = '$book_type'";
	$rows = mysqli_query($con, $search_query);
	echo $rows;
	if (mysqli_num_rows($rows) > 0) {
		echo '<center>
			<h2 style="margin: 20px; color: black; font-family: \'Arial Rounded MT\' ">Search Results</h2>
		</center>
		<hr>';
		// output data of each row
		while ($row = mysqli_fetch_array($rows)) {

			$book_url =  $row["book_url"];
			$book_file = str_replace("assets/documents/", "", $book_url);
			echo " <b>Author: </b> " .  $row["book_author"] . " <br> <b>Book Title</b>: " . $row["book_title"] . " 
			<a class='btn btn-sm btn-success' href='$book_url' download='$book_file'><i class='fa fa-download'></i> </a><hr><br>";
		}
		echo '<hr>';
	} else {
		echo "<center>No book found. Please try another search</center>";
	}
}