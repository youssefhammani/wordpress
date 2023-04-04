`<?php


?>

<?php
global $wpdb; //connection with database
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <div class="container mt-4">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name='name'>
        </div>

        <div class="mb-3">
            <label for="subject" class="form-label">Subject</label>
            <input type="text" class="form-control" id="subject" name="subject">
        </div>

        <div>
            <label for="message">Message</label>
            <textarea id="message" name="message"></textarea><br>
        </div>


        <input type="submit" value="Submit">

        <?php
        // check if the form is submitted
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // retrieve form data
            $name = $_POST['name'];
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];

            // validate form fields
            if (empty($name) || empty($email) || empty($subject) || empty($message)) {
                echo 'Please fill in all fields.';
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo 'Invalid email format.';
            } else {
                // insert data into the database
                $table_name = $wpdb->prefix . 'form_data'; // replace form_data with your own table name
                $data = array(
                    'name' => $name,
                    'email' => $email,
                    'subject' => $subject,
                    'message' => $message,
                    'date' => current_time('mysql')
                );
                $wpdb->insert($table_name, $data);

                echo 'Your form has been sent.';
            }
        }
        ?>

    </div>


</form>

<style>
    /* form {
        margin: 50px;
    } */

    .container {
        width: 700px;
    }
</style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>`
