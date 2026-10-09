<?php
// File : test_age.php
require_once('Validator_nama.php');

// Test case 1: nama huruf
try {
    $result = validateName("Yudha Anggara");
    echo "PASS : Nama joko diterima\n";
} catch (Exception $e) {
    echo "FAIL : Nama joko tidak diterima. Error: " . $e->getMessage() . "\n";
}

// Test case 2: nama kosong
try {
    $result = validateName("");
    echo "FAIL : Nama kosong seharusnya ditolak\n";
} catch (Exception $e) {
    echo "PASS : Nama kosong ditolak. Error: " . $e->getMessage() . "\n";
}

// Test case 3: nama angka
try {
    $result = validateName("123");
    echo "FAIL : Nama 123 seharusnya huruf\n";
} catch (Exception $e) {
    echo "PASS : Nama 123 ditolak. Error: " . $e->getMessage() . "\n";
}
