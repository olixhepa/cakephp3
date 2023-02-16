<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<div class="users form large-9 medium-8 columns content"></div>

<div class="container">
    <div class="row">
    	<div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Login</h3>
			 	</div>
			  	<div class="panel-body">
                    <?= $this->Form->create() ?>
                        <fieldset>
                            <div class="form-group">
                                <?= $this->Form->control('username', ['type' => 'text', 'placeholder' => 'Enter your email', 'class' => 'form-control']) ?>
                            </div>
                            <div class="form-group">
                                <?= $this->Form->control('password', ['type' => 'password', 'placeholder' => 'Enter your email', 'class' => 'form-control']) ?>
                            </div>
                            <?= $this->Form->button(__('Login', ), ['class' => 'btn btn-primary btn-block']) ?>
                        </fieldset>
                    <?= $this->Form->end() ?>
			    </div>
			</div>
		</div>
	</div>
</div>