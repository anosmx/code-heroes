<?php include('./layouts/header.php') ?>

    <div class="container-fluid">

        <div class="row mt-3">
            <div class="col-md-9">

                <div class="d-flex justify-content-between mb-4">
                    <div class="">
                        <a href="search.php" class="btn btn-outline-secondary">Search Again</a>
                    </div>
                    <div class="">
                        <input type="text" class="form-control " placeholder="Search ..">
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-2">
                        <div class="btn-group-vertical">
                            <a href="blood.php" class="btn btn-lg btn-outline-success">Medical Tests</a>
                            <a href="#" class="btn btn-lg btn-outline-success">X-Ray</a>
                            <a href="medication.php" class="btn btn-lg btn-outline-success">Medications</a>
                            <a href="#" class="btn btn-lg btn-outline-success">Appointments</a>
                            <a href="#" class="btn btn-lg btn-outline-success">Operations</a>
                            <a href="#" class="btn btn-lg btn-outline-success">Detailed Report</a>
                        </div>
                    </div>

                    <div class="col-md-10">

                        <div>
                            <h3 class="mb-4 text-secondary">Last 4 Visits</h3>

                            <div class="row text-center justify-content-center">
                                <div class="col-md-3 m-3 p-3 border border-warning rounded">
                                    <p>20/1/2019</p>
                                    <a href="#">Detailed Report</a>
                                </div>
                                <div class="col-md-3 m-3 p-3 border border-warning rounded">
                                    <p>20/1/2019</p>
                                    <a href="#">Detailed Report</a>
                                </div>
                                <div class="col-md-3 m-3 p-3 border border-warning rounded">
                                    <p>20/1/2019</p>
                                    <a href="#">Detailed Report</a>
                                </div>
                                <div class="col-md-3 m-3 p-3 border border-warning rounded">
                                    <p>20/1/2019</p>
                                    <a href="#">Detailed Report</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div class="pl-1 bg-success"></div>

            <div class="col-md-2 mb-5">

                <div class="text-center">
                    <img src="./assets/user.png" alt="..." class="rounded" height="90">
                </div>

                <div class="mt-4">
                    <h4 class="mb-4 text-success">Patient Information</h4>

                    <p>Name: Omar Abdullah</p>
                    <p>Age: 35</p>
                    <p>Gender: Male</p>
                    <p>Blood Type: O+</p>
                    <p>Chronic Disease: ...</p>
                </div>

            </div>

        </div>
    </div>

<?php include('./layouts/footer.php') ?>