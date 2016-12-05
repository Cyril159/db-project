<?php 
include "main.php";
main_template(get_defined_vars(), function($vars) {
    extract($vars);
?>
    <div id="list" class="pure-u-1">
        <div class="pure-g">
            <div class="pure-u-1-6">
            </div>
            <div class="pure-u-2-3">
                <div class="block">
                    <form class="inner-block pure-form pure-form-aligned" action="signup.php" method="post" enctype="multipart/form-data">
                        <fieldset>
                            <div class="pure-control-group">
                                <label for="username">Username</label>
                                <input id="username" name="username" type="text" placeholder="Username" required>
                            </div>

                            <div class="pure-control-group">
                                <label for="name">Displayed name</label>
                                <input id="name" name="name" type="text" placeholder="Name">
                            </div>
                    
                            <div class="pure-control-group">
                                <label for="password">Password</label>
                                <input id="password" name="password" type="password" placeholder="Password" required>
                            </div>
                    
                            <div class="pure-control-group">
                                <label for="email">Email Address</label>
                                <input id="email" name="email" type="email" placeholder="Email Address" required>
                            </div>

                            <div class="pure-control-group">
                                <label for="avatar">Avatar</label>
                                <input id="avatar" name="avatar" type="file">
                            </div>
                    
                            <div class="pure-controls">
                                <button type="submit" class="pure-button pure-button-primary">Submit</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
            <div class="pure-u-1-6">
            </div>            
        </div>
    </div>
<?php
});
?>
