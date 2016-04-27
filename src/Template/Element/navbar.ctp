<nav class="top-bar expanded" data-topbar role="navigation">
    <ul class="title-area large-2 medium-4 columns">
        <li class="name">
            <h1><?= $this->Html->link(
                'Home',
                '/') ?>
            </h1>
        </li>
    </ul>
    <div class="top-bar-section">
        <ul class="left">
            <li><a target="_blank" href="http://book.cakephp.org/3.0/">Documentation</a></li>
            <li><a target="_blank" href="http://api.cakephp.org/3.0/">API</a></li>
            <li><?= $this->Html->link('Portfolio',['controller' => 'Portfolio', 'action' => 'index', '_full' => true]); ?></li>
        </ul>
    </div>
</nav>