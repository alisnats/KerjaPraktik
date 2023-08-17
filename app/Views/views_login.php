<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Single Window</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="assets/images/asw.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <section>
        <div class="container-sm my-5">
            <div class="row justify-content-center">
                <div class="p-5  rounded-3 col-lg-4 " style="width: 25rem; background-color: #d4d5d5; border-top-right-radius: 39px;
                    border-top-left-radius: 39px;
                    border-bottom-right-radius: 39px;
                    border-bottom-left-radius: 39px;">
                    <div class="mb-3 text-center">
                        <img src="assets/images/asrimotor-logo.png" alt="" style="width:100%">
                        <H2 class='text-dark'>Asri Motor Single Window</H2>
                    </div>
                    <hr>
                    <div class="row">
                        <form method="POST" action="">
                            <?php if (session()->getFlashdata('error')) { ?>
                                <div class="alert alert-danger">
                                    <?php echo session()->getFlashdata('error') ?>
                                </div>
                            <?php } ?>
                            <div class="row mb-3">
                                <div class="col-md-12 mb-3">
                                    <input id="nik" type="text" for="nik" class="form-control " name="nik"
                                        placeholder="Masukkan NIK" value="<?php echo session()->getFlashdata('nik') ?>">
                                </div>
                                <div class="col-md-12">
                                    <input id="password" type="password" for='password' class="form-control "
                                        name="password" placeholder="Masukkan Password">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="submit" name="login"
                                        class="btn btn-outline-light btn-lg mt-3 col-md-12"
                                        style="background-color: #92C874" value='login' /><i
                                        class="bi bi-box-arrow-in-right"></i>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>

    <!-- FOOTER: DEBUG INFO + COPYRIGHTS -->
    <footer>
        <div class="copyrights">

            <p>Version 23.08 &copy;
                2021 by IT Division
            </p>

        </div>
    </footer>

    <!-- SCRIPTS -->

    <script>
        function toggleMenu() {
            var menuItems = document.getElementsByClassName('menu-item');
            for (var i = 0; i < menuItems.length; i++) {
                var menuItem = menuItems[i];
                menuItem.classList.toggle("hidden");
            }
        }
    </script>

    <!-- -->

</body>

</html>