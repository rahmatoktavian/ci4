<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>eLIBRARY</title>

    <!-- Custom styles for this template-->
    <link href="<?= base_url('asset/css/sb-admin-2.min.css') ?>" rel="stylesheet">

</head>

<body>

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-8 col-lg-8 col-md-8">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4"><sup>e</sup>LIBRARY</h1>
                                    </div>
                                    <?php $validation = session()->getFlashdata('validation') ?>
                                    <?php if (session()->getFlashdata('error')) : ?>
                                        <div class="alert alert-danger" role="alert"><?= session()->getFlashdata('error') ?></div>
                                    <?php endif  ?>

                                    <form class="user" action="<?= site_url('login'); ?>" method="post">
                                        <div class="form-group">
                                            <input type="text" name="username" class="form-control form-control-user" placeholder="Username" value="">
                                            <small class="form-text text-danger"><?= $validation ? $validation->showError('username') : '' ?></small>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user" placeholder="Password" value="">
                                            <small class="form-text text-danger"><?= $validation ? $validation->showError('password') : '' ?></small>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block " type="submit">Login</button>
                                    </form>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

</body>

</html>