<!DOCTYPE html>
<html lang="en">

<head>
  <title>Quản trị Admin</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" href="css/main.css">
  <!-- Font-icon css-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <!-- or -->
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
  <link rel="stylesheet" type="text/css"
    href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="http://code.jquery.com/jquery.min.js" type="text/javascript"></script>
  <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
  <script>

    function readURL(input, thumbimage) {
      if (input.files && input.files[0]) { //Sử dụng  cho Firefox - chrome
        var reader = new FileReader();
        reader.onload = function (e) {
          $("#thumbimage").attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
      }
      else { // Sử dụng cho IE
        $("#thumbimage").attr('src', input.value);

      }
      $("#thumbimage").show();
      $('.filename').text($("#uploadfile").val());
      $('.Choicefile').css('background', '#14142B');
      $('.Choicefile').css('cursor', 'default');
      $(".removeimg").show();
      $(".Choicefile").unbind('click');

    }
    $(document).ready(function () {
      $(".Choicefile").bind('click', function () {
        $("#uploadfile").click();

      });
      $(".removeimg").click(function () {
        $("#thumbimage").attr('src', '').hide();
        $("#myfileupload").html('<input type="file" id="uploadfile"  onchange="readURL(this);" />');
        $(".removeimg").hide();
        $(".Choicefile").bind('click', function () {
          $("#uploadfile").click();
        });
        $('.Choicefile').css('background', '#14142B');
        $('.Choicefile').css('cursor', 'pointer');
        $(".filename").text("");
      });
    })
  </script>
</head>

<body class="app sidebar-mini rtl">
  <style>
    /* style.css */

/* Tiêu đề Chi tiết Sản Phẩm */
.product-detail-header {
    background-color: #f8f9fa; /* Màu nền nhẹ nhàng */
    padding: 15px;
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Tạo hiệu ứng đổ bóng */
    text-align: center;
    margin-bottom: 20px;
}

.product-detail-header h1 {
    
    color: #343a40; /* Màu chữ tối hơn để dễ đọc */
    font-weight: 700;
    margin: 0;
    text-transform: uppercase;
}

/* Hình ảnh sản phẩm */
.img-fluid {
    max-height: 400px; /* Giới hạn chiều cao của hình ảnh */
    object-fit: cover; /* Cắt hình ảnh để không bị biến dạng */
}

/* Thông tin sản phẩm */
.price {
    background-color: #e9ecef;
    padding: 10px;
    border-radius: 5px;
}

/* Tab nội dung */
.nav-tabs .nav-link {
    color: #007bff; /* Màu cho các tab */
    font-weight: 600;
}

.nav-tabs .nav-link.active {
    background-color: #007bff;
    color: #fff;
}

.tab-content {
    border: 1px solid #ddd;
    padding: 15px;
    border-radius: 5px;
    background-color: #f9f9f9;
}

/* Các nút và liên kết */
.buttons .btn-primary {
    background-color: #007bff;
    border-color: #007bff;
}

.buttons .btn-outline-secondary {
    border-color: #6c757d;
    color: #6c757d;
}

.buttons .btn-outline-secondary:hover {
    background-color: #6c757d;
    color: #fff;
}

.social-share a {
    transition: color 0.3s ease;
}

.social-share a:hover {
    color: #007bff;
}

    .Choicefile {
      display: block;
      background: #14142B;
      border: 1px solid #fff;
      color: #fff;
      width: 150px;
      text-align: center;
      text-decoration: none;
      cursor: pointer;
      padding: 5px 0px;
      border-radius: 5px;
      font-weight: 500;
      align-items: center;
      justify-content: center;
    }

    .Choicefile:hover {
      text-decoration: none;
      color: white;
    }

    #uploadfile,
    .removeimg {
      display: none;
    }

    #thumbbox {
      position: relative;
      width: 100%;
      margin-bottom: 20px;
    }

    .removeimg {
      height: 25px;
      position: absolute;
      background-repeat: no-repeat;
      top: 5px;
      left: 5px;
      background-size: 25px;
      width: 25px;
      /* border: 3px solid red; */
      border-radius: 50%;

    }

    .removeimg::before {
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
      content: '';
      border: 1px solid red;
      background: red;
      text-align: center;
      display: block;
      margin-top: 11px;
      transform: rotate(45deg);
    }

    .removeimg::after {
      /* color: #FFF; */
      /* background-color: #DC403B; */
      content: '';
      background: red;
      border: 1px solid red;
      text-align: center;
      display: block;
      transform: rotate(-45deg);
      margin-top: -2px;
    }
  </style>
  <!-- Navbar-->
  <header class="app-header">
    <!-- Sidebar toggle button-->
    <!-- Navbar Right Menu-->
  </header>
  <!-- Sidebar menu-->
  <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
  <aside class="app-sidebar">
    <hr>
    <ul class="app-menu">
      <li><a class="app-menu__item haha" href="index.php"><iconify-icon icon="ant-design:home-filled" width="25px"></iconify-icon>
          <span class="app-menu__label">TRANG ADMIN</span></a></li>
      <li><a class="app-menu__item " href="index.php?act=adddm"><i class='app-menu__icon bx bx-task'></i><span
            class="app-menu__label">Quản lý danh mục</span></a></li>
      <li><a class="app-menu__item " href="index.php?act=addsp"><i class='app-menu__icon bx bx-purchase-tag-alt'></i>
          <span class="app-menu__label">Quản lý sản phẩm</span></a></li>
      <li><a class="app-menu__item " href="index.php?act=dskh"><i class='app-menu__icon bx bx-id-card'></i><span
            class="app-menu__label">Quản lý tài khoản </span></a></li>
      <li><a class="app-menu__item" href="index.php?act=listbill"><i class="app-menu__icon bx bx-cart-alt"></i><span
            class="app-menu__label">Quản lý đơn hàng</span></a></li>
      <!-- <li><a class="app-menu__item" href="index.php?act=dsbl"><i class='app-menu__icon bx bx-dollar'></i><span
            class="app-menu__label">Quản lý bình luận</span></a></li> -->
      <li><a class="app-menu__item" href="index.php?act=thongke"><i
            class='app-menu__icon bx bx-pie-chart-alt-2'></i><span class="app-menu__label">Bảng thống kê</span></a>
      </li>
    </ul>
  </aside>
</body>
</html>
