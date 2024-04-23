<!DOCTYPE html>
<html>

<head>
    <title> Dashboard </title>
    <meta charset="UTF-8">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css.map" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.min.css.map" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="icon" href="images/fav-icon.png" type="image/png" sizes="">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link href="https://site-assets.fontawesome.com/releases/v6.0.0/css/all.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet" type="text/css">
</head>

<body>
    <header class="header" id="header">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid p-0">
                <a class="navbar-brand" href="#"></a>
                <ul class="main-ul">
                    <div class="spaces">
                        <ul>
                            <li class="nav-item">
                                <button type="button" class="toggle" id="toggle">
                                    <span></span>
                                </button>
                            </li>

                            <li class="nav-item no-bg">
                                <a href="javascriprt:;">
                                    <img src="images/logo.png" alt="img" class="img-fluid logo-top">
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="spaces">
                        <ul>
                            <li class="nav-item dropdown">
                                <a class="nav-link profile-box" href="#" role="button" data-bs-toggle="dropdown">
                                    <div class="main-img">
                                        <img src="images/hinata.jpg" alt="img" class="img-fluid">
                                    </div>
                                    <div class="info">
                                        <h5>Name</h5>
                                        <p>Role</p>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="profile.php" class="dropdown-item ai-icon">
                                        <i class="fa-regular fa-user"></i>
                                        <span class="ms-2">Profile</span>
                                    </a>
                                    <a href="changepassword.php" class="dropdown-item ai-icon">
                                        <i class="fa-regular fa-unlock"></i>
                                        <span class="ms-2">Change Password</span>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item ai-icon">
                                        <i class="fa-solid fa-right-from-bracket"></i>
                                        <span class="ms-2">Logout</span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </ul>
            </div>
        </nav>

        <div class="sub-header">
            <div class="d-flex align-items-center flex-wrap me-auto">
                <h5 class="dashboard_bar">Dashboard</h5>
            </div>
        </div>
    </header>