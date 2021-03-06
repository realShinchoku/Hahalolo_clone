<?php
    if (session_id() === '')
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đặt tour du lịch | Hahalolo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/placeholder-loading/dist/css/placeholder-loading.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" type="image/ico" href="https://www.hahalolo.com/favicon.ico"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>


<body>
    <header>
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container-fluid">
                <a href="http://localhost/BTL_NHOM9/" class="h-logo navbar-brand"><svg viewBox="0 0 24 24" focusable="false" aria-hidden="true">
                        <path fill="#24a8d8" d="M22 11.5c0-1-.2-1.9-.6-2.8-1.4-4.2-5.6-7-10-6.8h-.1c-1.7.2-3.4.7-4.9 1.8-4.6 3-5.8 9.2-2.8 13.9v.1c.2.2.3.6.6.8l.1.1c1.9 2.2 4.7 3.6 7.7 3.6h8.7c.8 0 1.3-.6 1.3-1.3v-9.4z">
                        </path>
                        <path fill="#FFF" d="M16.9 16.8c-.7.9-1.7 1.4-2.8 1.5-.5 0-1-.1-1.4-.5-.3-.3-.5-.8-.4-1.2 0-.2 0-.4.1-.6 0-.2.1-.5.2-.8l1-3.8c-.2.3-.4.5-.6.8-.9 1.8-1.7 3.7-2.4 5.6 0 .1-.1.3-.2.4h-.1c-.1.1-.3.2-.5.2s-.4-.1-.5-.2c-.3-.2-.4-.4-.5-.6-.1-.3-.2-.5-.2-.8s0-.5.1-.8l2.5-9.9c0-.1.1-.2.2-.2l1.7-.5h.1c.1 0 .1.1.1.2l-3.1 12v.2c0-.1.1-.2.2-.5l.3-.9c.2-.7.5-1.4.7-2s.5-1.3.8-1.9c.3-.6.6-1.1 1.1-1.6.1-.1.2-.2.3-.2v-.1s0-.1.1-.1v-.1h.2c.3 0 .5.1.7.3.2.3.2.6.2.9 0 .4-.1.8-.2 1.2l-.3 3.2c-.1.4-.1.8-.1 1.2.1.2.3.3.8.2.7-.2 1.3-.5 1.8-.9.1 0 .2.2.1.3z">
                        </path>
                    </svg>
                </a>
                <ul class="h-menu navbar-nav justify-content-between">
                    <li class="nav-item">
                        <a href="#" class="h-menu-logo nav-link black">
                            <div class="h-menu-logo-icon">
                                <i class="bi bi-newspaper">
                                    <div class="background-icon"></div>
                                </i>
                            </div>
                            Bảng tin
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="h-menu-logo nav-link">
                            <div class="h-menu-logo-icon">
                                <i class="bi bi-binoculars">
                                    <div class="background-icon"></div>
                                </i>
                            </div>
                            Trải nghiệm
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="http://localhost/BTL_NHOM9/" class="h-menu-logo nav-link selected">
                            <div class="h-menu-logo-icon">
                                <i class="bi bi-geo-alt">
                                    <div class="background-icon"></div>
                                </i>
                            </div>
                            Tour
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="h-menu-logo nav-link">
                            <div class="h-menu-logo-icon">
                                <i class="bi bi-building">
                                    <div class="background-icon"></div>
                                </i>
                            </div>
                            Khách sạn
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="h-menu-logo nav-link">
                            <div class="h-menu-logo-icon">
                                <i class="bi bi-ticket">
                                    <div class="background-icon"></div>
                                </i>
                            </div>
                            Vé máy bay
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="h-menu-logo nav-link">
                            <div class="h-menu-logo-icon">
                                <i class="bi bi-bicycle">
                                    <div class="background-icon"></div>
                                </i>
                            </div>
                            Thuê xe
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="h-menu-logo nav-link">
                            <div class="h-menu-logo-icon">
                                <div class="background-icon"></div>
                                <i class="bi bi-bag"></i>
                            </div>
                            Mua sắm
                        </a>
                    </li>
                </ul>
                <ul class="h-user navbar-nav justify-content-end">
                    <li class="nav-item">
                        <a href="http://localhost/BTL_NHOM9/cart/">
                        <span class="h-user-iteam">
                            <i class="bi bi-cart3"></i>
                        </span>
                        </a>
                    </li>
                    <li class="nav-item"><span class="h-user-iteam">
                        <a href="accounts/change">
                            <i class="bi bi-wallet2"></i>
                        </a>
                        </span></li>
                        <?php
                            if(isset($_SESSION["user_id"])){
                            ?> <h6>
                                <li class="nav-item" style = "margin-top: 3px;" ><span class="h-user-iteam"> 
                                    <a href="accounts/sign-in/logout.php">
                                        <i class="bi bi-arrow-up-circle"></i>
                                    </a>
                                    </span>
                                </li>
                                </h6>
                            <?php
                            }else{?>
                                <li class="nav-item"><span class="h-user-iteam"> 
                                    <a href="accounts/sign-in">
                                        <i class="bi bi-arrow-down-circle"></i>
                                    </a>
                                    </span>
                                </li>
                            <?php } ?>
                    <form action="template/loadimg.php" method="post" enctype="multipart/form-data">
                        <button class="btn-img">
                            <li class="nav-item"><img id="img" class="style-scope yt-img-shadow" alt="Hình ảnh đại diện" height="32" width="32" src="https://yt3.ggpht.com/yti/APfAmoFV39QFrpgQ605BDJUj7quJ-JIHmqaWYE59wro_EQ=s88-c-k-c0x00ffffff-no-rj-mo">
                            </li>
                        </button>
                    </form>
                </ul>
            </div>
        </nav>
    </header>