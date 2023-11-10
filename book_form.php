<?php


// new code 

// $name = $_POST["name"];
$name= "Book my ticket";
$email = $_POST["email"];
$phone = $_POST["phone"];
$address = $_POST["address"];
$guests = $_POST['guests'];
$address = $_POST['address'];
$location = $_POST['location'];
$arrivals = $_POST['arrivals'];
$leaving = $_POST['leaving'];

use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/autoload.php';

$mail = new PHPMailer();

$mail->SMTPDebug = 0; // Set SMTPDebug to 0 to disable debug output
$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.gmail.com";
// $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "pankajsr412@gmail.com";
$mail->Password = "kgwd tiid qhzr naan";

$mail->setFrom($email, $name);

// Add the recipient's email (user's email)
$mail->addAddress($email, $name);

// Add your email (where you want to receive a copy)
$mail->addAddress("pankajsr412@gmail.com", "Pankaj");

$mail->isHTML(true);
$mail->Subject = 'This is my html form content';
$mail->Body = "<!DOCTYPE html>
    
    <html>
    <head>
    </head>
    <body>
    <table rules='all' border='1' style='border-color: #666;' cellpadding='10'>
    <tr style='background: #eee;'><td colspan='2'><strong>Contact Form Details</strong> </td></tr>
    <tr>
        <td><strong>Name:</strong></td>
        <td>" . $name2 . "</td>
    </tr>
    <tr>
        <td><strong>Email:</strong></td>
        <td>" . $email . "</td>
    </tr>
    <tr>
        <td><strong>Phone:</strong></td>
        <td>" . $phone . "</td>
    </tr>
    <tr>
        <td><strong>Address:</strong></td>
        <td>" . $address . "</td>
    </tr>
    <tr>
        <td><strong>Location:</strong></td>
        <td>" . $location . "</td>
    </tr>

    <tr>
        <td><strong>Address:</strong></td>
        <td>" . $guests . "</td>
    </tr>
    <tr>
        <td><strong>Arrivals:</strong></td>
        <td>" . $arrivals . "</td>
    </tr>
    <tr>
        <td><strong>Leaving:</strong></td>
        <td>" . $leaving . "</td>
    </tr>
    </table>
    </body>
    </html>";

if ($mail->send()) {
    $connection = mysqli_connect('localhost', 'root', '', 'book_db');

    $request = " insert into book_form(name , email , phone , address , location , guests, arrivals , leaving) values
    ('$name' , '$email' ,'$phone'  , '$address' , '$location' , '$guests' , '$arrivals' , '$leaving' )";

    mysqli_query($connection, $request);

    header('Location: thankyou.html');
    exit;
} else {
    echo "Error: " . $mail->ErrorInfo;
}

























// previous code


// $name = $_POST["name"];
// $email = $_POST["email"];
// $phone = $_POST["phone"];
// $address = $_POST["address"];
// $guests = $_POST['guests'];
// $address = $_POST['address'];
// $location = $_POST['location'];
// $arrivals = $_POST['arrivals'];
// $leaving = $_POST['leaving'];

// use PHPMailer\PHPMailer\PHPMailer;

// require 'vendor/autoload.php';

// $mail = new PHPMailer();

// $mail->SMTPDebug = 0;
// $mail->isSMTP();
// $mail->SMTPAuth = true;

// $mail->Host = "smtp.gmail.com";

// $mail->Port = 587;

// $mail->Username = "pankajsr412@gmail.com";
// $mail->Password = "kgwd tiid qhzr naan";

// $mail->setFrom($email, $name);
// $mail->addAddress("pankajsr412@gmail.com", "Pankaj");

// $mail->isHTML(true);
// $mail->Subject = 'This is my html form content';
// $mail->Body = "<!DOCTYPE html>

//     <html>
//     <head>
//     </head>
//     <body>
//     <table rules='all' border='1' style='border-color: #666;' cellpadding='10'>
//     <tr style='background: #eee;'><td colspan='2'><strong>Contact Form Details</strong> </td></tr>
//     <tr>
//         <td><strong>Name:</strong></td>
//         <td>" . $name . "</td>
//     </tr>
//     <tr>
//         <td><strong>Email:</strong></td>
//         <td>" . $email . "</td>
//     </tr>
//     <tr>
//         <td><strong>Phone:</strong></td>
//         <td>" . $phone . "</td>
//     </tr>
//     <tr>
//         <td><strong>Address:</strong></td>
//         <td>" . $address . "</td>
//     </tr>
//     <tr>
//         <td><strong>Location:</strong></td>
//         <td>" . $location . "</td>
//     </tr>

//     <tr>
//         <td><strong>Address:</strong></td>
//         <td>" . $guests . "</td>
//     </tr>
//     <tr>
//         <td><strong>Arrivals:</strong></td>
//         <td>" . $arrivals . "</td>
//     </tr>
//     <tr>
//         <td><strong>Leaving:</strong></td>
//         <td>" . $leaving . "</td>
//     </tr>
//     </table>
//     </body>
//     </html>";

// if ($mail->send()) {
//     header('Location: thankyou.html');
//     exit;
// } else {
//     echo "Error: " . $mail->ErrorInfo;
// }
?>