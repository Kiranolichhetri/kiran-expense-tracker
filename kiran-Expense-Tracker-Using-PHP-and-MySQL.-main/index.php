<head>
<?php include "includes/header.php" ?>

</head>

<!-- ------------------------------------------------------- -->
  <body>
    <section class="wrapper">
      <div class="container">
        <div class="grid-cols-2">
          <div class="grid-item-1">
            <h1 class="main-heading">
              Welcome to <span>Expenditure.</span>
              <br />
              To Analysis your spend.
            </h1>
            <p class="info-text">
            Start tracking your daily expenses from any corner of the world.
            </p>

            <div class="btn_wrapper">
             <a href="includes/index.php" button class="btn view_more_btn">
               Start now<i class="ri-arrow-right-line"></i>
              </button></a>
<a href ="includes/signup.php">
              <button class="btn documentation_btn">Sign Up</button>
</a>
            </div>
          </div>
          <div class="grid-item-2">
            <div class="team_img_wrapper">
              <img src="./images/ex1.png" alt="team-img" />
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>

  <?php include "includes/footer.php" ?>

  <style>
    /* ==== "Inter" FONT-FAMILY FROM FONTS.GOOGLE.COM  ==== */
@import url("https://fonts.googleapis.com/css2?family=Inter:wght@400;500&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Inter", sans-serif;
}
*,
*::before,
*::after {
  box-sizing: border-box;
}

/* ==== CSS VARIABLES ==== */
:root {
  --primary-color: #335eea;
  --link-color: #506690;
  --btn-hover-color: #2b50c7;
  --lg-heading: #161c2d;
  --text-content: #869ab8;
  --fixed-header-height: 4.5rem;
}

/* ==== RESET HTML ==== */
body {
  width: 100%;
  height: 100vh;
  overflow-x: hidden;
  background-color: #fafbfb;
}
ul li {
  list-style-type: none;
}
a {
  text-decoration: none;
}
button {
  background-color: transparent;
  border: none;
  outline: none;
  cursor: pointer;
}
/* ==== CONTAINER ==== */
.container {
  width: 100%;
}
@media screen and (min-width: 1040px) {
  .container {
    width: 1040px;
    margin: 0 auto;
  }
}
/* ==== HEADER ==== */
.header {
  height: var(--fixed-header-height);
  padding: 0 1.7rem;
}

/* ==== NAV ==== */
.nav {
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: space-between;
}
/* ==== LOGO ==== */
.logo h2 {
  font-size: 28px;
  color: var(--primary-color);
}
/* ====  NAV-MENU  ==== */
.nav_menu_list {
  display: flex;
  align-items: center;
}
.nav_menu_list .nav_menu_item {
  margin: 0 2rem;
}
.nav_menu_item .nav_menu_link {
  font-size: 16.5px;
  line-height: 27px;
  color: var(--link-color);
  text-transform: capitalize;
  letter-spacing: 0.5px;
}
.nav_menu_link:hover {
  color: var(--primary-color);
}
.toggle_btn {
  font-size: 20px;
  font-weight: 600;
  color: var(--lg-heading);
  z-index: 4;
}
.nav_menu,
.close_btn {
  display: none;
}
.show {
  right: 3% !important;
}
/* ====  WRAPPER ==== */
.wrapper {
  width: 100%;
  padding-left: 1.7rem;
  padding-right: 1.7rem;
  padding-top: 5rem;
  margin-bottom: 5rem;
}
.grid-cols-2 {
  width: 100%;
  height: 100%;
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 4rem;
}
.grid-item-1 {
  padding-top: 5rem;
  padding-left: 1.5rem;
}
.main-heading {
  font-weight: 300;
  font-size: 38px;
  line-height: 55px;
}
.main-heading span {
  color: var(--primary-color);
}
.info-text {
  margin-top: 1.5rem;
  font-size: 19px;
  line-height: 28px;
  color: #334157;
}
.btn_wrapper {
  margin-top: 3.5rem;
  display: flex;
  width: 100%;
}
.btn {
  width: 110px;
  height: 50px;
  background-color: var(--primary-color);
  display: block;
  font-size: 16px;
  color: #fff;
  text-transform: capitalize;
  border-radius: 7px;
  letter-spacing: 1px;
  transition: 0.4s;
}
.btn:hover {
  transform: translateY(-3px);
  background-color: var(--btn-hover-color);
}
.view_more_btn {
  width: 180px;
  height: 55px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 16px;
  letter-spacing: 0;
  color: #fff;
  font-weight: 500;
  margin-right: 10px;
  box-shadow: 0 0.5rem 1.5rem rgba(22, 28, 45, 0.1);
}
.view_more_btn i {
  margin-left: 0.7rem;
}
.view_more_btn:hover {
  transition: box-shadow 0.25s ease, transform 0.25s ease;
}
.documentation_btn {
  width: 150px;
  height: 55px;
  font-size: 16px;
  font-weight: 500;
  color: #fff;
  letter-spacing: 0;
  background-color: #e1e7fc;
  color: #0e2a86;
  box-shadow: 0 0.5rem 1.5rem rgba(22, 28, 45, 0.1);
}
.documentation_btn:hover {
  background-color: #d7ddf1;
  transition: box-shadow 0.25s ease, transform 0.25s ease;
}
.grid-item-2 {
  width: 100%;
  height: 100%;
}
.team_img_wrapper {
  width: 500px;
  max-width: 100%;
  height: 440px;
}
.team_img_wrapper img {
  width: 100%;
  height: 100%;
  object-fit: contain;
}
.grid-cols-3 {
  width: 100%;
  height: 100%;
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  column-gap: 3rem;
  row-gap: 2rem;
  padding: 1rem;
}
.grid-col-item {
  height: 100%;
}
.icon {
  width: 100%;
  line-height: 40px;
}
.icon svg {
  width: 30px;
  height: 30px;
  color: #6b85d8;
}
.featured_info {
  width: 100%;
}
.featured_info span {
  width: 100%;
  display: block;
  font-size: 21px;
  line-height: 33px;
  color: var(--lg-heading);
}
.featured_info p {
  display: block;
  width: 100%;
  margin-top: 7px;
  font-weight: 400;
  color: #334157;
  line-height: 25px;
  font-size: 15.5px;
}
footer {
  width: 100%;
  background-color: var(--primary-color);
  height: 12px;
  margin-top: 8rem;
}

/* ==== MEDIA QURIES FOR RESPONSIVE DESIGN ==== */
@media screen and (min-width: 768px) {
  .toggle_btn {
    display: none;
  }
  .nav_menu {
    display: block;
  }
}

@media screen and (max-width: 768px) {
  .logo h2 {
    font-size: 23px;
  }
  .nav_menu {
    position: fixed;
    width: 93%;
    height: 100%;
    display: block;
    top: 2.5%;
    right: -100%;
    background-color: #fff;
    padding: 3rem;
    border-radius: 10px;
    box-shadow: 0 0.5rem 1.5rem rgba(22, 28, 45, 0.1);
    z-index: 50;
    transition: 0.4s;
  }
  .nav_menu_list {
    flex-direction: column;
    align-items: flex-start;
    margin-top: 4rem;
  }
  .nav_menu_list .nav_menu_item {
    margin: 1rem 0;
  }
  .nav_menu_item .nav_menu_link {
    font-size: 18px;
  }
  .close_btn {
    display: block;
    position: absolute;
    right: 10%;
    font-size: 25px;
    color: #50689e;
  }
  .close_btn:hover {
    color: #000;
  }
  .wrapper {
    padding: 0 0.7rem;
  }
  .grid-item-1 {
    padding-left: 0rem;
  }
  .main-heading {
    font-size: 35px;
  }
  .view_more_btn {
    width: 140px;
    height: 55px;
    font-size: 13.5px;
    margin-right: 1rem;
  }
  .grid-cols-3 {
    grid-template-columns: repeat(auto-fit, minmax(100%, 1fr));
  }
  .featured_info p {
    line-height: 23px;
    font-size: 14px;
  }
}

@media screen and (max-width: 991px) {
  .wrapper {
    padding-top: 3rem;
  }
  .grid-cols-2 {
    grid-template-columns: repeat(auto-fit, minmax(100%, 1fr));
  }
  .grid-item-1 {
    order: 2;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding-top: 0;
  }
  .main-heading {
    font-size: 32px;
    text-align: center;
    line-height: 40px;
  }
  .info-text {
    font-size: 16px;
    text-align: center;
    padding: 0.7rem;
  }
  .btn_wrapper {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .grid-item-2 {
    order: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
  }
  .team_img_wrapper {
    width: 350px;
    height: 350px;
  }
  .featured_info span {
    font-size: 19px;
  }
}

  </style>