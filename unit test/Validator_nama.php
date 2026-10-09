<?php
// File Validator.php
function validateName($name) {
    if (!is_string($name)) {
        throw new InvalidArgumentException("Nama harus berupa huruf");
    }
    if ($name < 0) {
        throw new InvalidArgumentException("Nama tidak boleh kosong");
    }
    return true;
}