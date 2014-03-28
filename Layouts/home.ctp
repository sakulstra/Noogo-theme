<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Croogo - The CakePHP powered Content Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    echo $this->Html->css(array(
        'style'
    ));
    echo $this->Html->script(array(
        'jquery.min',
        'bootstrap.min'
    ));
    echo $this->Layout->meta();
    ?>
</head>

<body>
<div class="wrap">
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?php echo $this->Html->link('Croogo', '/', array('class' => 'logo navbar-brand',)); ?>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="http://docs.croogo.org">Documentation</a></li>
                    <li><a href="http://blog.croogo.org">Blog</a></li>
                    <li><a href="http://github.com/croogo/croogo">Source</a></li>
                    <li><a href="http://github.com/croogo/croogo/issues">Issues</a></li>
                    <li><a href="https://groups.google.com/forum/?fromgroups#!forum/croogo">Discuss</a></li>
                    <li><a href="http://downloads.croogo.org">Download</a></li>
                </ul>
            </div>

        </div>
    </div>
    <div id="intro" class="jumbotron">
        <div class="container">
            <div class="col-md-12">
                <h2>Open Source <span>CMS</span> built for everyone!</h2>
                <?php echo $this->Html->image('/images/screenshot.png'); ?>
            </div>
        </div>

        <div class="clear"></div>
    </div>
    <div class="container">
        <div id="tech" class="row centered i-normalize">
            <div class="col-md-12">
                <h3 class="desc-line">Built on proven technologies</h3>
            </div>
            <div class="col-md-3 col-sm-6">
                <?php echo $this->Html->image('/images/php.png', array('alt' => 'PHP')); ?>
                <p>Supports PHP 5.2, 5.3 and 5.4! Freedom to run on almost any server!</p>
            </div>

            <div class="col-md-3 col-sm-6">
                <?php echo $this->Html->image('/images/sql.png', array('alt' => 'MySQL and PostgreSql')); ?>
                <p>Compatible with both MySQL and PostgreSQL.</p>
            </div>
            <div class="clearfix visible-sm"></div>
            <div class="col-md-3 col-sm-6">
                <?php echo $this->Html->image('/images/cakephp_small.png', array('alt' => 'CakePHP')); ?>
                <p>Powered by the very popular <a href="http://cakephp.org">CakePHP</a> MVC framework for rapid development.</p>
            </div>

            <div class="col-md-3 col-sm-6">
                <?php echo $this->Html->image('/images/bootstrap.png', array('alt' => 'Twitter Bootstrap')); ?>
                <p>Built with <a href="http://twitter.github.com/bootstrap">Twitter Bootstrap</a> for responsive administrative UI.</p>
            </div>
        </div>
        <div id="community" class="row jumbotron centered i-normalize">
            <div class="col-md-12">
                <h3 class="desc-line">Get involved with the community</h3>
            </div>
            <div class="col-md-6 github">
                <a href="http://github.com/croogo">
                    <?php echo $this->Html->image('/images/github.png', array('alt' => 'GitHub')); ?>
                </a>
                <p>Fork the project from <a href="http://github.com/croogo">GitHub</a> if you are interested in contributing, or you can simply watch its progress.</p>
            </div>
            <div class="col-md-6 google-group">
                <a href="https://groups.google.com/forum/?fromgroups#!forum/croogo">
                    <?php echo $this->Html->image('/images/groups.png', array('alt' => 'Google Groups')); ?>
                </a>
                <p>We also have a small but growing community which is pretty active. You can join our mailing list on <a href="https://groups.google.com/forum/?fromgroups#!forum/croogo">Google Group</a>.</p>
            </div>
        </div>
    </div>
</div>
<div id="footer">
    <div  class="container">
        <div class="row">
            <div class="col-xs-6" id="links">
                <a href="https://github.com/croogo?tab=members">Team</a>
                <a href="https://github.com/croogo/croogo/blob/master/LICENSE.txt">License</a>
            </div>
            <div class="col-xs-6" id="connect">
                <a href="http://twitter.com/croogo"><i class="fa fa-twitter"></i></a>
                <a href="https://plus.google.com/u/0/communities/103533171506392970953"><i class="fa fa-google-plus"></i></a>
                <a href="http://github.com/croogo"><i class="fa fa-github"></i></a>
                <a href="https://groups.google.com/forum/?fromgroups#!forum/croogo">Groups</a>
                <a href="http://webchat.freenode.net/?channel=croogo">IRC</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>