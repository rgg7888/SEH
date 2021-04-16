<?php

require_once __DIR__ . "/vendor/autoload.php";

echo unirStyles([
    sltr(".plans-container--card",[
        "8relative","C70%","D190px",
        "I300px","E250px","150px 8px 0",
        "20 15px","Lvar(--just-white)",
        "O15px","M0 4px 8px rgba(89, 73, 30, 0.16)"
    ]),
    sltr2(".plans-container--card",[
        "0center"
    ])
]);