Embargoed Composer
=======
Embargoed is middleware for PHP Composer with a engine that blocks all requests from Russia and displays a pro-Ukraine message instead.

People are already working on making for all other platforms. If you port it to other platform, please let me know and I'll add your port to the [list of ports](https://github.com/rameerez/embargoed-list).

Here's the message that replaces all pages of your app:


<p align="center">
  <img src="https://github.com/rameerez/embargoed/blob/main/public/embargoed-message.jpg?raw=true" alt="Embargoed message displayed to Russian visitors" width="400"/>
</p>



## Installation
This project using composer.
```
$ composer require gdelacc/embargoed-composer
```

## Usage
Block all visits to your website from Rusian IPS
```php
<?php

use embargoedComposer

new EmbargoedComposer();
```


## Collaborate

Please feel free to contact to [@rameerez](https://twitter.com/rameerez) or fork this to port it to other platforms, or make PRs to this repo to collaborate.