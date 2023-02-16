<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">

	<div class="row">
		<h2>User Profile Page</h2>
        <div class="col-md-12 ">

            <div class="panel panel-default">
            <div class="panel-heading">  <h4 >User Profile</h4></div>
                <div class="panel-body">
                    
                    <div class="box box-info">
                        
                            <div class="box-body">
                                <div class="col-sm-6">
                                    <div  align="center"> <img alt="User Pic" src="<?= $this->Webroot->url('img/user_profile.png') ?>" id="profile-image1" class="img-circle img-responsive"> 
                                        <input id="profile-image-upload" class="hidden" type="file">
                                        <div style="color:#999;" >click here to change profile image</div>
                                        <!--Upload Image Js And Css-->
                                    </div> <br>
                                <!-- /input-group -->
                                </div>
                                <div class="col-sm-6">
                                <h4 style="color:#00b1b1;"><?= h($user->firstname. " ".$user->lastname) ?> </h4></span>
                                    <!-- <span><p>Aspirant</p></span>             -->
                                </div>
                                
                                <div class="clearfix"></div>
                                <hr style="margin:5px 0 5px 0;">
                
                        
                                <div class="col-sm-5 col-xs-6 tital " >First Name:</div><div class="col-sm-7 col-xs-6 "><?= h($user->firstname) ?></div>
                                
                                <div class="clearfix"></div>
                                <div class="bot-border"></div>


                                <div class="col-sm-5 col-xs-6 tital " >Last Name:</div><div class="col-sm-7"> <?= h($user->lastname) ?></div>
                                
                                <div class="clearfix"></div>
                                <div class="bot-border"></div>

                                <div class="col-sm-5 col-xs-6 tital " >Username:</div><div class="col-sm-7"> <?= h($user->username) ?></div>
                                
                                <div class="clearfix"></div>
                                <div class="bot-border"></div>

                                <div class="col-sm-5 col-xs-6 tital " >Email:</div><div class="col-sm-7"> <?= h($user->email) ?></div>
                                
                                <div class="clearfix"></div>
                                <div class="bot-border"></div>

                                <div class="col-sm-5 col-xs-6 tital " >Date Of Joining:</div><div class="col-sm-7"><?= $this->Time->timeagoinwords($user->created) ?></div>

                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div> 
                </div> 
            </div>
        </div>  
        <!-- <script>
            $(function() {
                $('#profile-image1').on('click', function() {
                    $('#profile-image-upload').click();
                });
            });       
        </script>  -->
   </div>
</div>
