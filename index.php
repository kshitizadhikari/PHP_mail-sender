<?php include("header.php")?>
        <div class="border border-dark p-5">
        <div class="mb-3 d-flex justify-content-center">
            <h1>Mail Sender</h1>
        </div>
        <form action="mailer.php" method="POST">
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control border border-dark" name="email" required>
            </div>
            <div class="mb-3">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" class="form-control border border-dark" name="subject" required>
            </div>
            <div class="mb-3">
                <label for="msg" class="form-label">Body</label>
                <textarea rows="4" cols="40" class="form-control border border-dark" name="msg" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="submitBtn">Submit</button>
        </form>
        </div>
    </div>
    <?php include("footer.php")?>
