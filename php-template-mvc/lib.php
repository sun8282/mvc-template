<?php
spl_autoload_register(function($f) {
    $f = str_replace("\\", "/", $f);
    require_once("../{$f}.php");
});

function view($fileName, $d = []) {
    extract($d);
    require_once("src/View/header.php");
    require_once("src/View/$fileName.php");
    require_once("src/View/footer.php");
}

function e($t) {
    if(in_array(gettyep($t), ['object', 'array'])) {
        return print_r($t);
    }
    echo "<pre>$t</pre>";
}

function ss() {
    return $_SESSION['user'] ?? false;
}

function script($s) {
    echo "<script>$s</script>";
}

function alert($t = '') {
    !empty($t) && script("alert('$t');");
}

function move($tg, $t = '') {
    alert($t);
    script("location.replace('$tg')");
    exit;
}

function back($tg, $t = '') {
    alert($t);
    script("history.back()");
    exit;
}