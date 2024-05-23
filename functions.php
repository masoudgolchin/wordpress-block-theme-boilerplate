<?php
/*
* Register the blocks
*
* @return void
*/
function fabin_register_blocks()
{
    $blocks = [
        'footer', 'header'
    ];
    foreach ($blocks as $block) {
        register_block_type(__DIR__ . "/build/$block");
    }
}
add_action('init', 'fabin_register_blocks');
