<?php include('./layouts/header.php') ?>

    <div class="container-fluid">

        <div class="row mt-3">
            <div class="col-md-9">

                <div class="d-flex justify-content-end mb-4">
                    <div class="">
                        <input type="text" class="form-control " placeholder="Search ..">
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-2">
                        <div class="btn-group-vertical">
                            <a href="blood.php" class="btn btn-lg btn-outline-success">Medical Analysis</a>
                            <a href="#" class="btn btn-lg btn-outline-success">X-Ray</a>
                            <a href="#" class="btn btn-lg btn-outline-success">Medications</a>
                            <a href="#" class="btn btn-lg btn-outline-success">Appointments</a>
                            <a href="#" class="btn btn-lg btn-outline-success">Operations</a>
                            <a href="#" class="btn btn-lg btn-outline-success">Detailed Report</a>
                        </div>
                    </div>

                    <div class="col-md-10">

                        <div>
                            <h3 class="mb-4 text-secondary">Last 3 Visits</h3>

                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row" style="width: 1%">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                                </tbody>
                            </table>
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