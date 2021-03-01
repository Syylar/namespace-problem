<div class="w-px-210 m-top-25 center">
    <form class="form" method="POST">
        <div class="placeholder--warning">
                    <?php Message::print('Sign_up_message') ?>
        </div>
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="password" name="repeat_password" placeholder="repeat password">
        <input type="text" name="email" placeholder="email">
        <input type="submit" value="Sign Up">
        <input type="hidden" name="tokken" value="1">
    </form>
</div>


