<?php include('./layouts/header.php') ?>

<div class="container-fluid">
    <div class="d-flex justify-content-center">
        <div class="container">
            <p class="text-success display-4 text-center">Patient Data Archiving System (PDAS)</p>
            <p class="text-info h4 text-center mt-5 ">Login to your Account</p>

            <div class="row justify-content-center">
                <div class="col-md-6">

                    <form action="search.php">
                        <div class="form-group">
                            <label for="email" class="text-">Username:</label>
                            <input type="text" class="form-control" id="email" aria-describedby="emailHelp">
                        </div>

                        <div class="form-group">
                            <label for="password" class="text-">Password:</label>
                            <input type="password" class="form-control" id="password">
                        </div>

                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Remember me</label>
                        </div>

                        <button type="submit" class="btn btn-outline-secondary">Login</button>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

<?php include('./layouts/footer.php') ?>