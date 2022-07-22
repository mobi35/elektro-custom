<?php get_header() ?>

<div class="max-w-screen-lg mx-auto h-full flex place-content-center items-center">
    <div class="text-center">

        <h1 class="font-semibold"><?php the_title(); ?></h1>
            <br>
        <?php the_content(); ?>

        <h1 class="text-4xl font-bold text-black">Adi try forms</h1>
    
        <?php print_r(the_category()); ?>

        <br>
        <br>
        
        <div id="form_list">
            <div>textbox <input type="text" placeholder="First Name" <?php echo "name='fname'" ?>  class="rounded-md mt-4" /> </div>
            <div>radio <input type="radio"/> </div>
            <div>checkbox <input name="testbox" id="testbox" type="checkbox"/> </div>
            <div>textarea <textarea class="my-4" name="adi" id="" cols="30" rows="10"></textarea></div>
        </div>
    
        <br>
        <hr>
        <br>

        <form id="items"  >
            <div><input type="text" placeholder="First Name" <?php echo "name='fname'" ?>  class="rounded-md mt-4" /> <button id="item1" class="border p-2 text-white bg-gray-600 border-white  hover:border-black hover:bg-white hover:text-black rounded-md">x</button> </div>
            <div class="hidden" id="chanz"><input type="text"  placeholder="Last Name" class="rounded-md mt-4" />  <button  id="item2" class="border p-2 text-white bg-gray-600 border-white  hover:border-black hover:bg-white hover:text-black rounded-md">x</button></div>

            <div><input type="text" placeholder="Email" class="rounded-md mt-4" /> <button id="item3" class="border p-2 text-white bg-gray-600 border-white  hover:border-black hover:bg-white hover:text-black rounded-md">x</button> </div>
            <div><button class="px-4 py-2 bg-green-500 rounded-md my-2 text-white" >submit</button></div>
        </form>

        <script>
 
        </script>
    </div>
</div>




<?php get_footer() ?>