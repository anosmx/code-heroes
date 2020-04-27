
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

                <div class="col-md-12">

                    <div class="ml-5">
                        <h3 class="mb-4 text-secondary">Prescription Date April 21, 2020</h3>

                        <table class="table table-hover table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">Medicament Name</th>
                                <th scope="col">Dose</th>
                                <th scope="col">Duration of Use</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>ASPIRIN</th>
                                <td>One pill every three hours</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>ADOL COLD 325MG-30MG-15MG CAPLET</th>
                                <td>One pill every three hours</td>
                                <td>7 Days</td>
                            </tr>
                            <tr>
                                <th>Amoxicillin + Clavulanic Acid</th>
                                <td>One pill every three hours</td>
                                <td>7 Days</td>
                            </tr>
                            <tr>
                                <th>ELICA-M CREAM</th>
                                <td>Two times a day</td>
                                <td>10 Days</td>
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