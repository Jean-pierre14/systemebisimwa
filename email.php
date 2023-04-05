<?php
    require_once "./includes/header.php";
?>
<div class="container">
    <div class="card card-body my-2">
        <div class="d-flex justify-content-between align-items-center">
            <a href="index.php" class="btn btn-sm btn-success">Retour</a>
        </div>
    </div>
    <div class="row">

        <div class="col-md-12 col-lg-4">
            <div class="card card-body">
                <?php
                if(isset($_POST['submit'])){
                    
                    $receiver = htmlentities($_POST['receiver']);
                    $subject = htmlentities($_POST['subject']);
                    $body = htmlentities($_POST['body']);
                    $sender = htmlentities($_POST['sender']);

                    if(mail($receiver, $subject, $body, $sender)){
                        echo '<p class="alert alert-success">Email sent successfully to '.$receiver.'</p>';
                    }else{
                        echo "Sorry, failed while sending mail!";
                    }
                }
                ?>
                <form action="#" method="post">
                    <div class="form-group my-2">
                        <label for="receiver">Received email</label>
                        <input type="email" name="receiver" id="receiver" placeholder="Receiver email"
                            class="form-control">
                    </div>
                    <div class="form-group my-2">
                        <label for="subject">Subject</label>
                        <input type="text" name="subject" id="subject" placeholder="Subject..." class="form-control">
                    </div>
                    <div class="form-group my-2">
                        <label for="body">Body email</label>
                        <textarea name="body" id="body" placeholder="Message..." class="form-control" cols="30"
                            rows="10"></textarea>
                    </div>
                    <div class="form-group my-2">
                        <label for="sender">Sender email</label>
                        <input type="email" name="sender" id="sender" placeholder="Sender email" class="form-control">
                    </div>
                    <div class="form-group my-1">
                        <button class="btn btn-primary" type="submit" name="submit">Send email</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</body>

</html>