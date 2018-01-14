<?php
if (isset($_GET['page'])) {
  $page = $_GET['page'];

  if ($page == 'home')                                      { include "pages/home.php"; }
  if ($page == 'setting')                                   { include "pages/setting.php"; }

  if ($page == 'js0')                                       { include "pages/js-0.php"; }
  if ($page == 'js1')                                       { include "pages/js-1.php"; }
  if ($page == 'js2')                                       { include "pages/js-2.php"; }

} else {
  include "pages/home.php";
}
?>