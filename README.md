# hmvc-codeigniter-template-views
 Custom Template Helper and Structure for HMVC Codeigniter

 Theme Helper using Codeigniter 3.x
## Theme Helper

    /core/application/helper/theme_helper.php

### Main function 

    public static function renderView(
        $data, $type = 'front', $hmvc = false){....}

**Parameter Explaination**

    $data
    This how we pass the data from codeigniter.
    
    $type
    Type of the theme, if you want to load from 
    database you can use hook and pass the  config here.
    
    $hmvc 
    if false will load view in the 
    /themes/theme_name/view_name.php 
    if true will load in view hmvc 
    /modules/module_name/views/view_name.php

    

## Structure and Configuration

Move application folder, system folder Codeigniter to /core/ and move views folder into /themes

The structure folder and files of Codeigniter will show like below :

    core
    -----/application
    -----/system
    modules/
    -------/module_name/
    -------------------/controllers
    -------------------/views
    themes/
    -------/theme_name
    -------/another_theme_name
    index.php
    
**/index.php**

    $system_path = 'core/system';
    $application_folder = 'core/application';
    $view_folder = 'themes';

**Theme Config Sample** 

    /core/application/config/theme_config.php

    $config['theme'] = array(
       "admin" => array(
          'name' => 'admin', 
          'file_master' => 'index.master.php'
       ),
       "front" => array(
          'name' => 'front', 
          'file_master' => 'index.master.php'
       )

    );
**Autoload**

    $autoload['config'] = array('theme_config');

### HMVC with MX Loader

Check how to implement in the modules/hmvc/controllers

## Themes
Check in the source how I implement in 

 - /themes/front/index.master.php
 - /themes/admin/index.master.php

Check the demo implementation [here](http://hmvc-codeigniter-theme.kodingspace.com/)

Any issue please report in this repository ? 
or follow us on [facebook page](https://www.facebook.com/kodingspace/) 

