<div class="container">
    <div class="col-md-4 col-md-offset-4">
        <h2 class="text-center">{$smarty.session.username} Update Profile</h2>
        <div class="row">
            <img style="width: 50px; height: 50px; margin: 0 auto; display: block;" src="assets/img/user/{$user->picture}">
            <form action="#" method="post" enctype="multipart/form-data">
                Profile Picture
            <input type="file" name="picture" class="tex-center">
        </div>
        <div class="row">
            <br>
            <strong>Username</strong>
            <input type="text" class="form-control" name="username" value="{$user->username}">
        </div>
        <div class="row">
            <br>
            <strong>Email</strong>
            <input type="text" class="form-control" name="email" value="{$user->email}">
        </div>
        <div class="row">
            <br>
            <strong>Firstname</strong>
            <input type="text" class="form-control" name="firstname" value="{$user->firstname}">
        </div>
        <div class="row">
            <br>
            <strong>Lastname</strong>
            <input type="text" class="form-control" name="lastname" value="{$user->lastname}">
        </div>
        <div class="row">
            <br>
            <input type="submit" value="Update" class="btn btn-default pull-right">
        </div>
            </form>
        <div class="row text-center">{if isset($error)}{$error}{/if}</div>
    </div>
</div>
<div class="row margin50"></div>