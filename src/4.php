 $name = $_POST["name"];
 $email = $_POST["email"];
 $message = $_POST["message"];
 $to = "contact@example.com";
 $subject = "Contact Form Submission";
 $body = "Name: $name\nEmail: $email\nMessage:\n$message";
 mail($to, $subject, $body);
 header("Location: /thankyou.php");
 ?>