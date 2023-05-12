<?php

namespace src\Controller;

class View {
    function main() {
        view('main');
    }
    function test($url) {
        view('test', ['id' => $url[1]]);
    }
}