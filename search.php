<?php include('./layouts/header.php') ?>

    <div class="container-fluid">
        <div class="d-flex justify-content-center">
            <div class="container">
                <p class="text-success display-4 text-center">Search for patient history</p>

                <div class="row mt-5 justify-content-center">
                    <div class="col-md-6 text-center">

                        <form action="details.php">
                            <h4>Patient ID</h4>
                            <div class="form-group">
                                <input type="text" class="form-control" aria-describedby="emailHelp">
                            </div>

                            <button type="submit" class="btn btn-outline-secondary">Search</button>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>

<?php include('./layouts/footer.php') ?>