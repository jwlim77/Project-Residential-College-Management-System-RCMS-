<?php
include '../src/templates/header.php';
include '../src/templates/navbar.php';
?>

<main class="container">
    <div class="row">
        <div class="col-lg-9 mx-auto">
            <div class="card">
                <div class="card-body">
                    <div class="container my-2">
                        <form id="details" action="#">
                            <h4 class="mb-3 text-primary">Student Details</h4>

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Name" required>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" placeholder="abc@gmail.com"
                                           required>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="contact">Contact Number</label>
                                    <input type="text" class="form-control" id="contact" placeholder="+6012-3456789"
                                           required>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="student-id">Student ID</label>
                                    <input type="text" class="form-control" id="student-id" placeholder="17171234/1"
                                           required>
                                </div>
                            </div>


                            <h4 class="mt-4 mb-3 text-primary">Accommodation Details</h4>

                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="start">Start date</label>
                                    <input type="date" class="form-control" id="start" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="end">End date</label>
                                    <input type="date" class="form-control" id="end" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="college">College</label>
                                    <select class="form-control" id="college" required>
                                        <option value="" disabled selected hidden>Select your collge</option>
                                        <option value="kk1">KK1</option>
                                        <option value="kk2">KK2</option>
                                        <option value="kk3">KK3</option>
                                        <option value="kk4">KK4</option>
                                        <option value="kk5">KK5</option>
                                        <option value="kk6">KK6</option>
                                        <option value="kk7">KK7</option>
                                        <option value="kk8">KK8</option>
                                        <option value="kk9">KK9</option>
                                        <option value="kk10">KK10</option>
                                        <option value="kk11">KK11</option>
                                        <option value="kk12">KK12</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="reason">Reason to apply</label>
                                <textarea type="text" class="form-control" id="reason"  required>
                                    </textarea>
                            </div>

                            <button type="submit" class="btn btn-primary ml-3 my-2 px-4 float-right" id="submit">
                                Submit
                            </button>
                            <button type="button" class="btn btn-outline-primary ml-3 my-2 px-4 float-right" id="cancel">
                                Cancel
                            </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script src="/assets/js/vendor/jquery-3.5.1.js"></script>
<script src="/assets/js/vendor/bootstrap.bundle.js"></script>
<script src="/assets/js/utility.js"></script>
<script src="/assets/js/core.js"></script>
<script src="/assets/js/new-accommodation.js"></script>

<?php include '../src/templates/footer.php'?>