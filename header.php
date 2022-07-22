<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>
<body <?php body_class('flex flex-col h-screen') ?>>
<?php wp_body_open(); ?>

    <header class="py-4 flex-0 bg-slate-100 shadow-md px-4 test-class border">
        <div class="max-w-screen-lg mx-auto flex justify-between items-center min-h-[40px]">
            <div class="">
                <a class="text-red-600" href="<?php echo home_url() ?>">
                    <img class="w-60" src="<?php echo home_url(); ?>/wp-content/uploads/2022/07/Elektro-Consult-BV_Final-file-1.1.png">
                </a>
            </div>
            <div x-data="{ open : 1}" class="flex">
                <ul class="flex space-x-4">
                <?php     
                $array_menu = wp_get_nav_menu_items('elektro-default');
                ?>

                <?php foreach($array_menu as $navitem): ?>
                    <li x-bind:class="open = <?php echo $navitem->menu_item_parent ?> ? 'hidden' : '' "> <?php echo $navitem->title; ?>  <?php echo $navitem->menu_item_parent; ?> </li>
                <?php endforeach; ?>

                </ul>
  
            </div>
        </div>
    </header>

    <main class="flex-grow px-4 py-4">

