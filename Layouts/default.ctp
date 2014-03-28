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
            echo $this->Layout->meta();
            echo $this->Layout->feed();
            echo $this->Html->script(array('jquery/jquery.min'));
            echo $this->Layout->js();
            echo $this->Html->script(array('theme'));
            echo $this->Html->css(array(
                'reset',
                '960',
                'theme',
            ));
            echo $scripts_for_layout;
        ?>
    </head>
    <body>
        <div id="wrapper">
            <div id="header">
                <div class="container_16">
                    <div id="logo" class="grid_4">
                        <a href="<?php echo $this->Html->url('/'); ?>"><?php echo Configure::read('Site.title'); ?></a>
                    </div>

                    <div id="nav" class="grid_12">
                        <?php echo $this->Layout->menu('main'); ?>
                        <div class="clear"></div>
                    </div>

                    <div class="clear"></div>
                </div>
            </div>

            <?php
                if ($this->params['controller'] == 'home' && $this->params['action'] == 'index') {
                    echo $this->element('intro');
                }
            ?>

            <div id="main">
                <div class="container_16">
                    <div id="content">
                        <div class="<?php if ($this->params['controller'] == 'nodes') { echo 'grid_11'; } ?>">
                        <?php echo $content_for_layout; ?>
                        </div>
                    </div>

                    <?php if ($this->params['controller'] == 'nodes') { ?>
                    <div id="right">
                        <div class="grid_5">
                        <?php echo $this->Layout->blocks('right'); ?>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="clear"></div>
                </div>
            </div>

            <div class="push"></div>
        </div>

        <div id="footer">
            <div class="container_16">
                <div class="grid_8 footer-left">
                    Powered by <a href="<?php echo $this->Html->url('/'); ?>">Croogo</a>.
                </div>

                <div class="grid_8 footer-right">
                    <a href="http://cakephp.org"><img src="<?php echo $this->Html->url('/img/cake.power.gif'); ?>" alt="CakePHP" /></a>
                </div>

                <div class="clear"></div>
            </div>
        </div>

    </body>
</html>