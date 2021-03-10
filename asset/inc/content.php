<?php

$page = $_GET['page'];
$action = $_GET['action'];

if ($page == "barang") {
  if ($action == "") {
    include "page/barang/barang.php";
  } elseif ($action == "add") {
    include "page/barang/add.php";
  } elseif ($action == "edit") {
    include "page/barang/edit.php";
  } elseif ($action == "delete") {
    include "page/barang/delete.php";
  } elseif ($action == "import") {
    include "page/barang/import.php";
  }
} elseif ($page == "ruangan") {
  if ($action == "") {
    include "page/ruangan/ruangan.php";
  } elseif ($action == "add") {
    include "page/ruangan/add.php";
  } elseif ($action == "edit") {
    include "page/ruangan/edit.php";
  } elseif ($action == "delete") {
    include "page/ruangan/delete.php";
  }
} elseif ($page == "kir") {
  if ($action == "") {
    include "page/kir/kir.php";
  } elseif ($action == "detail") {
    include "page/kir/detail.php";
  } elseif ($action == "add") {
    include "page/kir/add.php";
  } elseif ($action == "add_aset") {
    include "page/kir/add_aset.php";
  } elseif ($action == "edit") {
    include "page/kir/edit.php";
  } elseif ($action == "edit_detail") {
    include "page/kir/edit_detail.php";
  } elseif ($action == "delete") {
    include "page/kir/delete.php";
  } elseif ($action == "delete_detail") {
    include "page/kir/delete_detail.php";
  }
} elseif ($page == "user") {
  if ($action == "") {
    include "page/setting/user.php";
  } elseif ($action == "add") {
    include "page/setting/add.php";
  } elseif ($action == "edit") {
    include "page/setting/edit.php";
  } elseif ($action == "delete") {
    include "page/setting/delete.php";
  }
} elseif ($page == "ganti_pass") {
  if ($action == "") {
    include "page/setting/ganti_pass.php";
  }
} else {
  include("dashboard.php");
}
