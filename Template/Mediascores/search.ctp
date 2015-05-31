<?php
    if( isset($list) )
    {
        echo $this->element('Mediascore/navbar');
        echo '<div class="container">';
            echo '<table id="MediascoreIndexTable" class="table table-hover">';
                echo '<thead>';
                    $following_icon = '<span class="glyphicon glyphicon-sort"></span>';
                    echo $this->Html->tableHeaders(array
                    (
                        __('Id') . $following_icon,
                        __('Name (de)') . $following_icon,
                        __('Name (eng)') . $following_icon,
                        __('Year of Launch') . $following_icon,
                        __('Rating') . $following_icon,
                        __('Done') . $following_icon,
                        __('Stored') . $following_icon
                    ));
                echo '</thead>';
                echo '<tbody>';
                    foreach ($list as $mediascore)
                    {
                        if ( $mediascore->done_until == "0" )
                        {
                            $done_until = $this->Html->image('check.png');
                        }
                        else
                        {
                            $done_until = $mediascore->done_until;
                        }
                        
                        if ( $mediascore->stored == "1" )
                        {
                            $stored = $this->Html->image('check.png');
                        }
                        else
                        {
                            $stored = $this->Html->image('cross.png');
                        }

                        echo $this->Html->tableCells(array(array
                        (
                            $mediascore->id,
                            $mediascore->name_de,
                            $mediascore->name_en,
                            $mediascore->launch_year,
                            $mediascore->rate,
                            $done_until,
                            $stored
                        )));
                    }
                echo '</tbody>';
            echo '</table>';
        echo '</div>';
        echo $this->Html->script(array('jquery.tablesorter.min.js','mediascore/mediascore.js'));
    }
    else
    {
        echo __('List not given!');
    }
?>
