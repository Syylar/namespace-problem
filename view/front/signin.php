<div class="w-px-210 m-top-25 center">
    <form class="form" method="POST">
        
        <div class="placeholder--warning">
                    <?php Message::print('Sign_in_message'); ?>
        </div>        
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" value="Log In">
        <input type="hidden" name="tokken" value="1">
    </form>
</div>


