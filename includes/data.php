<?php
function ccs_data() {
    static $data = null;
    if ($data === null) {
        $json = file_get_contents(__DIR__ . '/../data/site.json');
        $data = json_decode($json, true);
    }
    return $data;
}
function e($s) { return htmlspecialchars($s ?? '', ENT_QUOTES, 'UTF-8'); }
