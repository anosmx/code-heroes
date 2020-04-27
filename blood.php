<?php include('./layouts/header.php') ?>

    <div class="container-fluid">

        <div class="row mt-3">
            <div class="col-md-9">

                <div class="d-flex justify-content-between mb-4">
                    <div class="ml-5">
                        <button onclick="goBack();" class="btn btn-outline-info">Back</button>
                    </div>
                    <div class="">
                        <input type="text" class="form-control " placeholder="Search ..">
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-10">

                        <div class="ml-5">
                            <h3 class="mb-4 text-secondary">Blood Chemistry Report</h3>

                            <table class="table table-hover table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col">Lab Test</th>
                                    <th scope="col">Results</th>
                                    <th scope="col">Reference Range</th>
                                    <th scope="col">Unit</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">Lipid Profile</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">Cholesteride</th>
                                    <td>399 (High)</td>
                                    <td>150 - 200</td>
                                    <td>mg/dL</td>
                                </tr>
                                <tr>
                                    <th scope="row">Triglyceride</th>
                                    <td>999 (High)</td>
                                    <td>30 - 150</td>
                                    <td>mg/dL</td>
                                </tr>
                                <tr>
                                    <th scope="row">HDL-C</th>
                                    <td>65 (High)</td>
                                    <td>40 - 60</td>
                                    <td>mg/dL</td>
                                </tr>
                                <tr>
                                    <th scope="row">LDL-C</th>
                                    <td>249 (High)</td>
                                    <td>< 150</td>
                                    <td>mg/dL</td>
                                </tr>

                                </tbody>
                            </table>
                        </div>

                    </div>

                    <div class="col-md-2">
                        <div class="btn-group-vertical mt-5">
                            <a href="blood.php" class="btn btn-lg btn-outline-secondary">Creatinine</a>
                            <a href="#" class="btn btn-lg btn-outline-secondary">G6PD</a>
                            <a href="#" class="btn btn-lg btn-outline-secondary">BT</a>
                            <a href="#" class="btn btn-lg btn-outline-secondary">C.P.C</a>
                            <a href="#" class="btn btn-lg btn-outline-secondary">(E.S.R)</a>
                            <a href="#" class="btn btn-lg btn-outline-secondary">Enzymes</a>
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