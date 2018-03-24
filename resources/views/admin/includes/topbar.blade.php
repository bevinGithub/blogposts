<div class="page-full-width cf">

    <ul id="nav" class="fl">
        <li class="v-sep"><a href="#" class="round button dark ic-left-arrow image-left">Go to website</a></li>
        <li class="v-sep"><a href="#" class="round button dark menu-user image-left">Logged in as <strong>admin</strong></a>
            <ul>
                <li><a href="admin/users/profile">My Profile</a></li>
                <li><a href="admin/users/settings">User Settings</a></li>
                <li><a href="admin/users/reset-password">Change Password</a></li>
                <li><a href="/logout">Log out</a></li>
            </ul> 
        </li>
        <li><a href="#" class="round button dark menu-email-special image-left">3 new messages</a></li>
        <li><a href="/logout" class="round button dark menu-logoff image-left">Log out</a></li>
    </ul> <!-- end nav -->


    <form action="admin/posts/process-search" method="POST" id="search-form" class="fr">
        <fieldset>
            <input name="search-field" type="text" id="search-keyword" class="round button dark ic-search image-right" placeholder="Search..." />
            <input type="hidden" value="SUBMIT" />
        </fieldset>
    </form>

</div> <!-- end full-width -->