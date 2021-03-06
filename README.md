# PHPPowerPoint Library for Joomla!

**PHPPowerPoint Library for Joomla! 2.5.x &amp; 3.x**

If you already know how to use PHPPowerPoint and you need it for a Joomla! project, than this is a package to be used in Joomla!

Download
--------

[![Download now](https://raw.github.com/vdespa/PHPPowerPoint-Joomla-Library/master/download.png)](https://bitbucket.org/vdespa/phppowerpoint-joomla-library/downloads/PHPPowerPoint-Joomla-Library-0.3.0.20150506.zip)

Version
-------

* The current Joomla! Library is using PHPPowerPoint, commit 01611e55ca54dbdc3dbfab95caa564d4847bb58c (Sep 24, 2014)

Usage
-----

    // Import PHPPowerPoint library
    jimport('phppowerpoint.library.PHPPowerPoint');

or 

    require_once JPATH_LIBRARIES . '/phppowerpoint/library/PHPPowerPoint.php';


Now you can create a new PHPPowerPoint document:

    $objPHPPowerPoint = new PhpOffice\PhpPowerpoint\PhpPowerpoint();



Documentation
-------------

* [PHPPowerPoint GitHub page] (https://github.com/PHPOffice/PHPPowerPoint)
* [PHPPowerPoint Readthedocs.org page] (http://phppowerpoint.readthedocs.org/en/latest/)


Bugs? Problems? Feedback?
-------------------------

If you have any problems installing / updating PHPPowerPoint Library for Joomla! feel free to [Add a New issue] (https://github.com/vdespa/PHPPowerPoint-Joomla-Library/issues)

If you are having problems with PHPPowerPoint itself and you think is a bug or something, check the [PHPPowerPoint Issue Tracker] (https://github.com/PHPOffice/PHPPowerPoint/issues)

Credits
-------

* Special thanks to the [PHPOffice team] (https://github.com/PHPOffice?tab=members) which put the PHPPowerPoint library together.
* Also thanks to Joe for the [inspiration] (http://www.ostraining.com/howtojoomla/how-tos/development/how-to-package-joomla-libraries).


License
-------
PHPPowerPoint is licensed under [LGPL (GNU LESSER GENERAL PUBLIC LICENSE)](https://github.com/PHPOffice/PHPPowerPoint/blob/master/LICENSE)
