<div class="container">
    <ul class="nav nav-tabs">
        <li class="active"><?php echo $this->Html->link
        (
            __('Show'),
            array
            (
                'controller' => 'Mediascores',
                'action' => 'index'
            )
        );?></li>
        <li><?php echo $this->Html->link
        (
            __('Add'),
            array
            (
                'controller' => 'Mediascores',
                'action' => 'add'
            )
        );?></li>
        <li>
            <form action="/Mediascores/search/" method="post" class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" name="needle" id="search" class="form-control" placeholder="Search">
                </div>
            </form>
        </li>
        <li>
            <div id="messages">
            </div>
        </li>
    </ul>
</div>
