<?php
/**
 * Created by PhpStorm.
 * User: dpaz
 * Date: 3/15/19
 * Time: 10:43 AM
 */

header("Access-Control-Allow-Origin: *");

$errors = array();
$errorMessage = null;

try{

    if(empty($_POST)) {

        throw new Exception('POST data was not received. Check your client side configuration.');

    }

    if(empty($_POST['key'])) {

        throw new Exception('POST Data must include a value for `key`, otherwise will not be accepted.');

    }

    if(empty($_POST['first_name'])) {

        $errors[] = 'First name is empty or not set.';

    }

    if(empty($_POST['last_name'])) {

        $errors[] = 'Last name is empty or not set.';

    }

    if(empty($_POST['email'])) {

        $errors[] = 'Email is empty or not set.';

    }

    if(empty($_POST['message'])) {

        $errors[] = 'Message is empty or not set.';

    }

    if(!empty($errors)) {

        throw new Exception('Errors were found while transmitting data. Review below.');

    }

    $jsonString = json_encode(array_merge($_SERVER, array("post"=>$_POST)));

    $file = fopen('post.log', 'a+');
    fwrite($file, date('c', time()) . "\t" . $jsonString . PHP_EOL);
    fclose($file);

} catch (Exception $exception) {

    $jsonData = array_merge($_SERVER, array("post"=>$_POST), array("errors"=>$errors));
    $errorMessage = $exception->getMessage();

    $file = fopen('error.log', 'a+');
    fwrite($file, date('c', time()) . "\t" . $errorMessage . "\t" . json_encode($jsonData). PHP_EOL);
    fclose($file);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Developer Challenge</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<header>
    <nav class="nav">
        <a class="nav-link active" href="https://aes.uic.edu">Academic & Enrollment Services Home</a>
    </nav>
</header>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Contact Form Submission</h1>
        </div>
        <div class="col col-md-12">
            <?php if(empty($errorMessage)): ?>
                <div class="card">
                    <h2 class="card-header">Thanks! We received your message.</h2>
                    <div class="card-body">
                        <h3 class="card-title">Sit tight, we're working on it.</h3>
                        <p class="card-text">We have received your message and are dilligently working to respond as soon as possible. Due to our high volume, it may be 2-3 days before you hear a response.</p>
                        <p>Here's a copy of your message:</p>
                        <ul>
                            <?php

                                foreach($_POST as $postedKey=>$postedValue) {

                                    echo "<li>" . $postedKey . ": " . $postedValue . "</li>";

                                }

                            ?>
                        </ul>
                        <a href="https://aes.uic.edu" class="btn btn-primary">Go Home</a>
                    </div>
                </div>
            <?php else: ?>
                <div class="card">
                    <h2 class="card-header">Errors were detected.</h2>
                    <div class="card-body">
                        <p class="card-text">Something kept the form from processing correctly. Please review any errors below.</p>

                        <p><strong><?php echo $errorMessage;?></strong></p>
                        <ul>
                            <?php

                                foreach($errors as $error) {

                                    echo "<li>" . $error . "</li>";

                                }

                            ?>
                        </ul>
                        <a href="https://aes.uic.edu" class="btn btn-primary">Go Home</a>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>