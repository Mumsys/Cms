#!/usr/bin/env php
<?php

/**
 * ----------------------------------------------------------------------------
 * Make wiki entrys from the docs for Mumsys/Cms
 * ----------------------------------------------------------------------------
 * @author Florian Blasel <flobee.code@gmail.com>
 * @copyright (c) 2016 by Florian Blasel
 * @license LGPL Version 3 http://www.gnu.org/licenses/lgpl-3.0.txt
 * ----------------------------------------------------------------------------
 * @version 1.1.0 Created 2015-04-06
 * ----------------------------------------------------------------------------
 */

// cd to project root
$dirCurrent = getcwd();
chdir(dirname(__FILE__) . '/../');


// relevant docs for wiki and readme.md
// Array value contains the location of the wiki file name
//[submodule "docs/mumsys-cms.wiki"]
//	url = https://github.com/Mumsys/Cms.wiki.git
$docs = array(
    'README.txt' => 'docs/wiki/Home.md',
    // 'SUMMARY.txt', // content to be generated where the "# Summary" tag is
    'FEATURES.txt'  => 'docs/wiki/1_Features-of-mumsys-cms.md',
    'EXAMPLES.txt'  => 'docs/wiki/2_Examples-for-mumsys-cms.md',
    'INSTALL.txt'   => 'docs/wiki/3_Installing-mumsys-cms.md',
    'USAGE.txt'     => 'docs/wiki/4_Usage-of-mumsys-cms.md',
    'CONTRIBUTE.txt'=> 'docs/wiki/5_Contributions.md',
    'AUTHORS.txt'   => 'docs/wiki/6_Contribution_Authors.md',
    'LICENSE.txt'   => 'docs/wiki/7_License-for-mumsys-cms.md',
    'BUGS.txt',
//    'HISTORY.txt'
);



