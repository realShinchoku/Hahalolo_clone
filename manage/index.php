<?php
session_start();
if (!isset($_SESSION['user_id'])) {
  header('location:../accounts/');
} else {
  if ($_SESSION['permission'] > 1) {
    header('location:../');
  } else {
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
      <link rel="stylesheet" href="../css/admin.css">
      <link rel="shortcut icon" type="image/ico" href="https://www.hahalolo.com/favicon.ico" />
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    </head>

    <body>
      <header class="container-fluid fixed-top border-bottom header">
        <ul class="nav justify-content-end align-items-center m-3">
          <li class="nav-item spacing">
            <b>VND</b>
          </li>
          <li class="nav-item">
            <svg width="1em" height="1em" viewBox="0 0 512 336" xmlns="http://www.w3.org/2000/svg" font-size="30">
              <g fill="none">
                <path d="M503.172 335.724H8.828A8.829 8.829 0 010 326.896V9.103A8.829 8.829 0 018.828.275h494.345a8.829 8.829 0 018.828 8.828v317.793a8.83 8.83 0 01-8.829 8.828z" fill="#FF4B55"></path>
                <path d="M260.119 67.969l23.609 70.79 74.621.578c4.172.032 5.902 5.357 2.546 7.836l-60.029 44.329 22.509 71.147c1.259 3.978-3.271 7.27-6.666 4.843L256 224.099l-60.71 43.393c-3.394 2.426-7.924-.865-6.666-4.843l22.509-71.147-60.029-44.329c-3.357-2.478-1.626-7.804 2.546-7.836l74.621-.578 23.609-70.79c1.321-3.958 6.919-3.958 8.239 0z" fill="#FFE15A"></path>
              </g>
            </svg>
          </li>
          <li class="nav-item spacing">
            <b>WeLCOME</b>
          </li>
          <li class="nav-item spacing">
            <a href="http://localhost/BTL_NHOM9/accounts/sign-in/logout.php">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
                <g data-name="Group 28596">
                  <path data-name="Rectangle 4595" fill="none" d="M0 0h24v24H0z"></path>
                  <g data-name="Group 28574">
                    <g data-name="Group 28570">
                      <path data-name="Path 20399" d="M4.879 21h8.266a1.879 1.879 0 001.879-1.875v-3.75a.376.376 0 00-.751 0v3.75a1.127 1.127 0 01-1.127 1.125H4.88a1.127 1.127 0 01-1.127-1.125V4.875A1.127 1.127 0 014.879 3.75h8.266a1.127 1.127 0 011.127 1.125v3.75a.376.376 0 00.751 0v-3.75A1.879 1.879 0 0013.144 3H4.878a1.879 1.879 0 00-1.879 1.875v14.25A1.879 1.879 0 004.879 21z" stroke="#000" stroke-width="0.25"></path>
                    </g>
                    <g data-name="Group 28571">
                      <path data-name="Path 20400" d="M20.624 12.375H9.353a.376.376 0 110-.751h11.271a.376.376 0 010 .751z" stroke="#000" stroke-width="0.25"></path>
                    </g>
                    <g data-name="Group 28572">
                      <path data-name="Path 20401" d="M17.618 15.381a.375.375 0 01-.266-.641l2.74-2.74-2.74-2.74a.376.376 0 11.531-.531l3.006 3.006a.376.376 0 010 .531l-3.006 3.006a.377.377 0 01-.265.109z" stroke="#000" stroke-width="0.25"></path>
                    </g>
                  </g>
                </g>
              </svg>
            </a>
          </li>
        </ul>
      </header>
      <div class="flex p-3 bg-white sidebar">
        <a href="http://localhost/BTL_NHOM9/" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" focusable="false" viewBox="0 0 24 24" aria-hidden="true" alt="Hahalolo logo" style="font-size: 56px;">
            <g data-name="Group 28306">
              <path data-name="Rectangle 4447" fill="none" d="M0 0h24v24H0z"></path>
              <g data-name="Vector Smart Object">
                <g data-name="Group 1">
                  <path data-name="Path 1" d="M20.999 12.066v7.73a1.2 1.2 0 01-1.2 1.2h-7.8a8.979 8.979 0 01-6.869-3.187l-.064-.077a8.731 8.731 0 01-.525-.7l-.042-.062a9 9 0 016.906-13.954l.12-.007a9.1 9.1 0 018.984 6.093 8.79 8.79 0 01.482 2.528q.01.218.01.436z">
                  </path>
                  <path data-name="Path 2" d="M13.381 11.007a6.936 6.936 0 00-1.075 1.561 16.72 16.72 0 00-.838 1.873q-.344.921-.7 2.011-.127.431-.283.93t-.168.541a.38.38 0 01-.087.155c-.009.009-.036.011-.041 0s.035.1.1.126a.1.1 0 00.082-.008 2.265 2.265 0 00.194-.428 44.188 44.188 0 012.377-5.57 4.315 4.315 0 01.875-1.19 1.3 1.3 0 01.552-.594 1.805 1.805 0 00-.988.593z" fill="#fff"></path>
                  <path data-name="Path 3" d="M10.394 17.979a.2.2 0 01-.107-.116.279.279 0 01-.02-.1.867.867 0 01.025-.142l3.088-12.02a.149.149 0 00-.118-.18.173.173 0 00-.083 0l-1.7.478a.286.286 0 00-.2.2l-2.5 9.939a2.322 2.322 0 00-.13.757 2.029 2.029 0 00.16.817 1.484 1.484 0 00.419.573.857.857 0 00.547.208.8.8 0 00.685-.426.1.1 0 01-.066.012z" fill="#fff"></path>
                  <path data-name="Path 4" d="M14.153 17.271a3.52 3.52 0 01.1-1.248l.91-3.423a5.1 5.1 0 00.158-1.183 1.729 1.729 0 00-.22-.93.768.768 0 00-.7-.346 1.157 1.157 0 00-.192.016l-.034.017-.031.018-.031.019-.026.017-.015.011-.031.024-.016.013-.027.023-.026.024-.037.036-.018.018-.034.037-.016.018c-.017.021-.035.042-.05.063l-.017.023-.008.012-.02.029-.011.017q-.031.047-.052.084l-.008.015c-.026.047-.039.077-.039.077a.149.149 0 01-.01.035.089.089 0 01-.006.017c0 .011-.009.03-.025.088s-.02.077-.027.112l-1.095 4.153q-.1.5-.158.824a3.655 3.655 0 00-.056.594 1.753 1.753 0 00.447 1.247 2.015 2.015 0 001.37.47 3.621 3.621 0 002.771-1.462c.088-.107.01-.32-.1-.24a5.44 5.44 0 01-1.8.894c-.544.125-.739-.059-.82-.213z" fill="#fff"></path>
                </g>
              </g>
            </g>
          </svg>
          <h5>Hahalolo</h5>
        </a>

        <ul class="list-unstyled">
          <li class="mb-1">
            <button class="btn category-list selected menu-item" id="btnDashboard" data-tab="0">Tổng quan</button>
          </li>
          <li class="mb-1">
            <button class="btn category-list menu-item" id="btnOder" data-tab="1">Danh sách hóa đơn</button>
          </li>
          <li class="mb-1">
            <button class="btn category-list menu-item" id="btnCate" data-tab="2">Danh sách chủ đề Tour</button>
          </li>
          <li class="mb-1">
            <button class="btn category-list menu-item" id="btnTour" data-tab="3">Danh sách Tour</button>
          </li>
          <li class="mb-1">
            <button class="btn category-list menu-item" id="btnCreateCate" data-tab="4">Tạo chủ đề Tour</button>
          </li>
          <li class="mb-1">
            <button class="btn category-list menu-item" id="btnCreatetour" data-tab="5">Tạo Tour</button>
          </li>
          <?php
          if ($_SESSION['permission'] == 0) {
          ?>
            <hr>
            <li class="mb-1">
              <button class="btn category-list menu-item" id="btnAccount" data-tab="6">Quản lý tài khoản</button>
            </li>
          <?php
          }
          ?>
        </ul>
      </div>
      <main class="container mt-5">
        <div class="main" style="margin-top: 7rem!important;">
          <div id="tabload"></div>
        </div>
      </main>

      <script>
        var host_id = <?php echo $_SESSION['user_id']; ?>;
      </script>
      <script src="../js/manage.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>

    </html>
<?php
  }
}
?>