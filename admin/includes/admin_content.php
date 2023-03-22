<div class="container-fluid">

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Admin
            <small>Subheading</small>
        </h1>

        <?php 
            /*
            $user = new User();
            $user->username = "Makelele";
            $user->password = "def_mid";
            $user->first_name = "Cloud";
            $user->last_name = "Chealsea";
            $user->create(); 
            */
            $user = User::find_user_by_id(11);
            $user->username = "LM10";
            $user->password = "psg";
            $user->first_name = "Leo";
            $user->last_name = "Messi";
            $user->update();
/*
            $user = User::find_user_by_id(7);
            $user->delete();

            $user = User::find_user_by_id(8);
            $user->password = "new_password";
            $user->save();

            $user = new User();
            $user->username = "Sualve";
            $user->save(); */
        ?>

        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
            </li>
            <li class="active">
                <i class="fa fa-file"></i> Blank Page
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

</div>
<!-- /.container-fluid -->