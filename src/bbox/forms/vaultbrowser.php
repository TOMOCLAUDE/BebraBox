<?php
namespace bbox\forms;

use std, gui, framework, bbox;


class vaultbrowser extends AbstractForm
{

    /**
     * @event browser.construct 
     */
    function doBrowserConstruct(UXEvent $e = null)
    {    
        
    }

    /**
     * @event buttonAlt.click-Left 
     */
    function doButtonAltClickLeft(UXMouseEvent $e = null)
    {    
        c("browser")->reload();
    }



}
