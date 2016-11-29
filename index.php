<?php 
include "view/main.php";

function t() {
?>
    <div id="list" class="pure-u-1">
        <div class="pure-g">
            <div class="pure-u-1-3">
                <div class="block sidebar">
                    <div class="inner-block">
                        <h2>Trending Topics</h2>
                        <ul>
                            <li><a href="#">#PrimaireDroite</a></li>
                            <li><a href="#">Fillon</a></li>
                            <li><a href="#">#ZoneTéléchargement</a></li>
                            <li><a href="#">#24hDeBaba</a></li>
                            <li><a href="#">#UnSloganPourLaSNCF</a></li>
                            <li><a href="#">#ACAB</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="pure-u-2-3">
                <div class="block">
                    <form class="pure-form write-twirp inner-block">
                        <fieldset>
                            <input type="text" name="twirp" placeholder="'Sup ?">
                            <button type="submit" class="pure-button pure-button-primary">Twirp</button>
                        </fieldset>
                    </form>

                    <div class="post inner-block">
                        <div class="post-avatar">
                            <img class="email-avatar" src="/images/avatar.jpg" height="64" width="64">
                        </div>

                        <div class="post-content">
                            <div class="post-author">John Doe</div>
                            <div class="message">Hey, I had some feedback for pull request #51. We should center the menu so it looks better on mobile.</div>
                        </div>
                    </div>

                    <div class="post inner-block">
                        <div class="post-avatar">
                            <img class="email-avatar" src="/images/avatar.jpg" height="64" width="64">
                        </div>

                        <div class="post-content">
                            <div class="post-author">John Doe</div>
                            <div class="message">Hey, I had some feedback for pull request #51. We should center the menu so it looks better on mobile.</div>
                        </div>
                    </div>

                    <div class="post inner-block">
                        <div class="post-avatar">
                            <img class="email-avatar" src="/images/avatar.jpg" height="64" width="64">
                        </div>

                        <div class="post-content">
                            <div class="post-author">John Doe</div>
                            <div class="message">Hey, I had some feedback for pull request #51. We should center the menu so it looks better on mobile.</div>
                        </div>
                    </div>

                    <div class="post inner-block">
                        <div class="post-avatar">
                            <img class="email-avatar" src="/images/avatar.jpg" height="64" width="64">
                        </div>

                        <div class="post-content">
                            <div class="post-author">John Doe</div>
                            <div class="message">Hey, I had some feedback for pull request #51. We should center the menu so it looks better on mobile.</div>
                        </div>
                    </div>

                    <div class="post inner-block">
                        <div class="post-avatar">
                            <img class="email-avatar" src="/images/avatar.jpg" height="64" width="64">
                        </div>

                        <div class="post-content">
                            <div class="post-author">John Doe</div>
                            <div class="message">Hey, I had some feedback for pull request #51. We should center the menu so it looks better on mobile.</div>
                        </div>
                    </div>

                    <div class="post inner-block">
                        <div class="post-avatar">
                            <img class="email-avatar" src="/images/avatar.jpg" height="64" width="64">
                        </div>

                        <div class="post-content">
                            <div class="post-author">John Doe</div>
                            <div class="message">Hey, I had some feedback for pull request #51. We should center the menu so it looks better on mobile.</div>
                        </div>
                    </div>

                    <div class="innerblock end"></div>
                </div>
            </div>
        </div>
    </div>
<?php
}

main_template(t);
?>
