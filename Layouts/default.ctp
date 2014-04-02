<?php
/**
 * Croogo theme
 *
 * @author Fahad Ibnay Heylaal <contact@fahad19.com>
 * @link   http://fahad19.com
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php
        if ($this->params['controller'] == 'home' && $this->params['action'] == 'index') {
            echo 'Croogo | Free, Open Source, CakePHP Powered CMS';
        } else {
            echo $title_for_layout . ' | ' . Configure::read('Site.title');
        }
        ?></title>
    <?php
    echo $this->Html->css(array(
        'style'
    ));
    echo $this->Html->script(array(
        'jquery.min',
        'bootstrap.min'
    ));
    echo $this->Layout->meta();
    echo $this->Layout->feed();
    echo $this->Layout->js();
    echo $scripts_for_layout;
    ?>
</head>
<body>
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
<div id="wrap">
    <?php
    if ($this->params['controller'] == 'pages' && $this->params['action'] == 'display' && $this->request->params['pass'][0] == 'home') {
        echo $this->element('intro');
    }
    ?>
    <div id="main" class="container">
        <div id="content" class="<?php echo ($this->params['controller'] == 'nodes')? 'col-md-9':'col-md-12';?>">
            <?php echo $content_for_layout; ?>
        </div>
        <?php if ($this->params['controller'] == 'nodes') :?>
            <div id="right" class="col-md-3">
                <?php echo $this->Layout->blocks('right'); ?>
            </div>
        <?php endif; ?>
    </div>
</div>
<div id="footer">
    <div  class="container">
        <div class="row">
            <div class="col-xs-3" id="links">
                <a href="https://github.com/croogo?tab=members">Team</a>
                <a href="https://github.com/croogo/croogo/blob/master/LICENSE.txt">License</a>
            </div>
            <div class="col-xs-9" id="connect">
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