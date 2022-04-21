<header class="main-header clearfix">
    <nav class="main-menu clearfix">
        <div class="main-menu-wrapper">
            <div class="main-menu-wrapper__left">
                <div class="main-menu-wrapper__logo">
                    <?php echo $this->Html->link(
                        $this->Html->image('logo-1.png'),
                        array(
                            'controller' => 'home',
                            'action' => 'index'
                        ),
                        array('escape' => false)
                    );
                    ?>
                </div>
                <div class="main-menu-wrapper__main-menu">
                    <a href="#" class="mobile-nav__toggler">
                        <span class="mobile-nav__toggler-bar"></span>
                        <span class="mobile-nav__toggler-bar"></span>
                        <span class="mobile-nav__toggler-bar"></span>
                    </a>
                    <ul class="main-menu__list">
                        <!-- <li class="dropdown  ">
                                    <a href="index.html">Home</a>
                                </li> -->
                        <li class="dropdown">
                            <?= $this->Html->link('Research Center', array(
                            'controller' => 'ResearchCenter',
                            'action' => 'index'
                        ));
                            ?>
                        </li>
                        <li class="dropdown">
                        <?= $this->Html->link('Consulting', array(
                            'controller' => 'Consulting',
                            'action' => 'index'
                        ));
                            ?>
                            <!-- <ul>
                                        <li><a href="#">Organizations</a></li> 
                                        <li><a href="#">Leaders</a></li>
                                        <li><a href="#">Youth</a></li>
                                    </ul> -->
                        </li>
                        <li class="dropdown">
                            
                        <?= $this->Html->link('LIBRARY', array(
                            'controller' => 'Library',
                            'action' => 'index'
                        ));
                            ?>
                   
                        </li>
                        <li class="dropdown">
                        <?= $this->Html->link('About', array(
                            'controller' => 'About',
                            'action' => 'index'
                        ));
                            ?>
                        </li>
                        </li>
                        <li>          <?= $this->Html->link('Contact', array(
                            'controller' => 'Contact',
                            'action' => 'index'
                        ));
                            ?>
                            </li>
                    </ul>
                </div>
            </div>
            <div class="main-menu-wrapper__right">
                <div class="main-menu-wrapper__phone-contact">
                    <p>Connect with us</p>
                    <a href="tel:+1(800) 888 0000">+1-312 925 9041</a>
                </div>
            </div>
        </div>
    </nav>
</header>