<?php
/****************************************************************************
 * ./lang/de/ocstyle/lib/menu.php
 * -------------------
 * begin                : Mon June 14 2004
 *
 * For license information see doc/license.txt
 ****************************************************************************/

/****************************************************************************
 *
 *  Unicode Reminder メモ
 *
 * $menu contains the entire menu structure
 *
 * possible array elements are:
 *
 * title         displayed HTML title
 * menustring    displayed menu text
 * siteid        unique id of this page
 * visible       bool, if true this site is shown in the menu structure
 * quicklinks    array of relativ pages
 *               (contains assotiativ array with href and text for each page)
 * submenu       array of submenues. Only the first 3 levels are displayed, deeper levels
 *               are only for the breadcrump. Each submenu has the same structure as $menu
 * navicolor     (only top-level menus) backgroundcolor of the menu
 * filename      filename for href
 *
 ****************************************************************************/

global $menu;

$menu = [
    [
        'title' => t('Login'),
        'menustring' => t('Login'),
        'siteid' => 'login',
        'visible' => false,
        'filename' => 'login.php'
    ],
    [
        'title' => t(''),
        'menustring' => t('Start'),
        'siteid' => 'start',
        'visible' => true,
        'filename' => 'index.php'
    ],
    [
        'title' => t('My profile'),
        'menustring' => t('My profile'),
        'siteid' => 'myhome',
        'visible' => true,
        'filename' => 'myhome.php',
        'navicolor' => '#E8DDE4'
    ],
    [
        'title' => t('Caches'),
        'menustring' => t('Caches'),
        'siteid' => 'search',
        'visible' => true,
        'filename' => 'search.php',
        'navicolor' => '#FFFFC5',
        'submenu' => [
            [
                'title' => t('Search'),
                'menustring' => t('Search'),
                'visible' => true,
                'filename' => 'search.php',
                'siteid' => 'search1/search',
                'submenu' => [
                    [
                        'title' => t('Show Geocache'),
                        'menustring' => t('Show Geocache'),
                        'visible' => false,
                        'filename' => 'viewcache.php',
                        'siteid' => 'viewcache',
                        'submenu' => [
                            [
                                'title' => t('Create a logentry'),
                                'menustring' => t('Create a logentry'),
                                'visible' => false,
                                'filename' => 'log.php',
                                'siteid' => 'log_cache'
                            ],
                            [
                                'title' => t('Edit logentry'),
                                'menustring' => t('Edit logentry'),
                                'visible' => false,
                                'filename' => 'editlog.php',
                                'siteid' => 'editlog'
                            ],
                            [
                                'title' => t('Remove logentry'),
                                'menustring' => t('Remove logentry'),
                                'visible' => false,
                                'filename' => 'removelog.php',
                                'siteid' => 'removelog_logowner'
                            ],
                            [
                                'title' => t('Remove logentry'),
                                'menustring' => t('Remove logentry'),
                                'visible' => false,
                                'filename' => 'removelog.php',
                                'siteid' => 'removelog_cacheowner'
                            ],
                            [
                                'title' => t('Edit cache'),
                                'menustring' => t('Edit cache'),
                                'visible' => false,
                                'filename' => 'editcache.php',
                                'siteid' => 'editcache'
                            ],
                            [
                                'title' => t('Add description'),
                                'menustring' => t('Add description'),
                                'visible' => false,
                                'filename' => 'newdesc.php',
                                'siteid' => 'newdesc'
                            ],
                            [
                                'title' => t('Edit description'),
                                'menustring' => t('Edit description'),
                                'visible' => false,
                                'filename' => 'editdesc.php',
                                'siteid' => 'editdesc'
                            ],
                            [
                                'title' => t('Remove description'),
                                'menustring' => t('Remove description'),
                                'visible' => false,
                                'filename' => 'removedesc.php',
                                'siteid' => 'removedesc'
                            ]
                        ]
                    ],
                    [
                        'title' => t('Select city'),
                        'menustring' => t('Select city'),
                        'visible' => false,
                        'filename' => 'search.php',
                        'siteid' => 'search1/selectlocid'
                    ],
                    [
                        'title' => t('Show search result'),
                        'menustring' => t('Result'),
                        'visible' => false,
                        'filename' => 'search.php',
                        'siteid' => 'search1/search.result.caches'
                    ],
                    [
                        'title' => t('Recommendations'),
                        'menustring' => t('Recommendations'),
                        'visible' => false,
                        'filename' => 'recommendations.php',
                        'siteid' => 'recommendations'
                    ]
                ]
            ],
            [
                'title' => t('Create a cache'),
                'menustring' => t('Create a cache'),
                'visible' => true,
                'filename' => 'newcache.php',
                'siteid' => 'newcache',
                'submenu' => [
                    [
                        'title' => t('Description - Create a cache'),
                        'menustring' => t('Description'),
                        'visible' => true,
                        'filename' => 'articles.php?page=cacheinfo',
                        'siteid' => 'articles/cacheinfo'
                    ],
                    [
                        'title' => t('HTML Tags'),
                        'menustring' => t('HTML Tags'),
                        'visible' => true,
                        'filename' => 'articles.php?page=htmltags',
                        'siteid' => 'articles/htmltags'
                    ]
                ]
            ],
            [
                'title' => t('My caches'),
                'menustring' => t('My caches'),
                'visible' => true,
                'filename' => 'myhome.php#mycaches',
                'siteid' => 'myhome'
            ],
            [
                'title' => t('Special caches'),
                'menustring' => t('Special caches'),
                'visible' => true,
                'filename' => 'tops.php',
                'siteid' => 'tops'
            ],
            [
                'title' => 'Cache lists',
                'menustring' => 'Cache lists',
                'visible' => true,
                'filename' => 'cachelists.php',
                'siteid' => 'cachelists'
            ],
            [
                'title' => 'OConly-81',
                'menustring' => 'OConly-81',
                'visible' => true,
                'filename' => 'oconly81.php',
                'siteid' => 'oconly81'
            ]
        ]
    ],
    [
        'title' => t('Map'),
        'menustring' => t('Map'),
        'siteid' => 'map',
        'visible' => true,
        'filename' => 'map2.php'
    ],
    [
        'title' => t('Admin'),
        'menustring' => t('Admin'),
        'siteid' => 'admin',
        'visible' => $usr['admin'] > 0,
        'filename' => 'translate.php'
    ],
    [
        'title' => t('Add picture'),
        'visible' => false,
        'filename' => 'newpic.php',
        'menustring' => t('Add picture'),
        'siteid' => 'newpic'
    ],
    [
        'title' => t('Edit picture'),
        'visible' => false,
        'filename' => 'editpic.php',
        'menustring' => t('Edit picture'),
        'siteid' => 'editpic'
    ],
    [
        'title' => t('Error message'),
        'menustring' => t('Error message'),
        'visible' => false,
        'filename' => 'index.php',
        'siteid' => 'error'
    ],
    [
        'title' => t('Message'),
        'visible' => false,
        'filename' => 'index.php',
        'menustring' => t('Message'),
        'siteid' => 'message'
    ],
    [
        'title' => t('Changelog'),
        'visible' => false,
        'filename' => 'index.php',
        'menustring' => t('Changelog'),
        'siteid' => 'changelog'
    ],
    [
        'title' => t('Sitemap'),
        'visible' => false,
        'filename' => 'index.php',
        'menustring' => t('Sitemap'),
        'siteid' => 'sitemap'
    ],
    [
        'title' => t('Operator Association'),
        'visible' => false,
        'filename' => 'index.php',
        'menustring' => t('Operator Association'),
        'siteid' => 'verein'
    ]
];

/*
 * mnu_MainMenuIndexFromPageId - returns the top level menu
 *
 * menustructure   normally $menu
 * pageid          siteid to search for
 */
function mnu_MainMenuIndexFromPageId($menustructure, $pageid)
{
    /* selmenuitem contains the selected (bold) menu item */
    global $mnu_selmenuitem;

    for ($i = 0, $ret = - 1; ($i < count($menustructure)) && ($ret == - 1); $i++) {
        if ($menustructure[$i]['siteid'] == $pageid) {
            $mnu_selmenuitem = $menustructure[$i];

            return $i;
        } else {
            if (isset($menustructure[$i]['submenu'])) {
                $ret = mnu_MainMenuIndexFromPageId($menustructure[$i]['submenu'], $pageid);
                if ($ret != - 1) {
                    return $i;
                }
            }
        }
    }

    return $ret;
}

/*
 * mnu_EchoMainMenu - echos the top level menus
 *
 * selmenuid   p.e. mnu_MainMenuIndexFromPageId($menu, $siteid)
 */
function mnu_EchoMainMenu($selmenuid)
{
    global $menu;
    $c = 0;
    $max = count($menu);
    for ($i = 0; $i < $max; $i++) {
        if ($menu[$i]['visible'] == true) {
            $sTarget = isset($menu[$i]['target']) ? $menu[$i]['target'] : '';
            $sItem = '<a href="' . $menu[$i]['filename'] . '" ' . $sTarget . '>' . htmlspecialchars(t($menu[$i]['menustring']), ENT_COMPAT, 'UTF-8') . '</a>';
            $sItemSel = '<a href="' . $menu[$i]['filename'] . '" ' . $sTarget . ' class=\'selected bg-green06\'>' . htmlspecialchars(t($menu[$i]['menustring']), ENT_COMPAT, 'UTF-8') . '</a>';

            if ($menu[$i]['siteid'] == $selmenuid) {
                /* $sItem = '<li>TODO:selected' . $sItem . '</li>'; */
                $sItem = '<li>' . $sItemSel . '</li>';
            } else {
                $sItem = '<li>' . $sItem . '</li>';
            }

            echo $sItem . "\n";

            $c++;
        }
    }
}

/*
 * mnu_EchoSubMenu - echos the 2. and 3. menu level
 *
 * menustructure   $menu
 * pageid          siteid to search for
 * level           has to be 1
 * bHasSubmenu     has to be false
 */
function mnu_EchoSubMenu($menustructure, $pageid, $level, $bHasSubmenu)
{
    /* enthält die Hintergrundfarbe des Menüs */
    global $mnu_bgcolor;

    if (!$bHasSubmenu) {
        /* prüfen, ob ein Submenü vorhanden ist */
        for ($i = 0, $bSubmenu = false; ($i < count($menustructure)) && ($bSubmenu == false); $i++) {
            if (isset($menustructure[$i]['submenu'])) {
                $bSubmenu = true;
            }
        }
    }

    if (!$bHasSubmenu) {
        $cssclass = 'group1';
    } else {
        if ($level == 1) {
            $cssclass = 'group1';
        } else {
            $cssclass = 'group2';
        }
    }
    $maxMenuStructure = count($menustructure);
    for ($i = 0; $i < $maxMenuStructure; $i++) {
        if ($menustructure[$i]['visible'] == true) {
            if ($menustructure[$i]['siteid'] == $pageid) {
                echo '<li class="' . $cssclass . ' group_active"><a href="' . $menustructure[$i]['filename'] . '">' . htmlspecialchars(t($menustructure[$i]['menustring']), ENT_COMPAT, 'UTF-8') . '</a></li>' . "\n";
            } else {
                if (isset($menustructure[$i]['submenu'])) {
                    if (mnu_IsMenuParentOf($menustructure[$i]['submenu'], $pageid)) {
                        echo '<li class="' . $cssclass . ' group_active"><a href="' . $menustructure[$i]['filename'] . '">' . htmlspecialchars(t($menustructure[$i]['menustring']), ENT_COMPAT, 'UTF-8') . '</a></li>' . "\n";
                    } else {
                        echo '<li class="' . $cssclass . '"><a href="' . $menustructure[$i]['filename'] . '">' . htmlspecialchars(t($menustructure[$i]['menustring']), ENT_COMPAT, 'UTF-8') . '</a></li>' . "\n";
                    }
                } else {
                    echo '<li class="' . $cssclass . '"><a href="' . $menustructure[$i]['filename'] . '">' . htmlspecialchars(t($menustructure[$i]['menustring']), ENT_COMPAT, 'UTF-8') . '</a></li>' . "\n";
                }
            }

            if (isset($menustructure[$i]['submenu'])) {
                /* rekursiver Aufruf zur Ausgabe der 3. Ebene */
                mnu_EchoSubMenu($menustructure[$i]['submenu'], $pageid, $level + 1, true);
            }
        }
    }
}

/*
 * mnu_IsMenuParentOf - returns true if menuitemid is part of $parentmenuitems, otherwise false
 *
 * parentmenuitems   p.e. $menu
 * menuitemid        siteid to search for
 */
function mnu_IsMenuParentOf($parentmenuitems, $menuitemid)
{
    $countParentMenuItems = count($parentmenuitems);
    for ($i = 0; $i < $countParentMenuItems; $i++) {
        if ($parentmenuitems[$i]['siteid'] == $menuitemid) {
            return true;
        }

        if (isset($parentmenuitems[$i]['submenu'])) {
            $ret = mnu_IsMenuParentOf($parentmenuitems[$i]['submenu'], $menuitemid);
            if ($ret == true) {
                return true;
            }
        }
    }

    return false;
}

/*
 * mnu_EchoBreadCrumb - echos the breadcrumb
 *
 * pageid          siteid to search for
 * mainmenuindex   index of the top level menu
 */
function mnu_EchoBreadCrumb($pageid, $mainmenuindex)
{
    global $menu;

    if ($mainmenuindex >= 0) { // is -1 e.g. when calling newcache.php as logged-off-user (-> login.tpl.php)
        echo htmlspecialchars(t($menu[$mainmenuindex]['menustring']), ENT_COMPAT, 'UTF-8');

        if (isset($menu[$mainmenuindex]['submenu']) && ($menu[$mainmenuindex]['siteid'] != $pageid)) {
            mnu_prv_EchoBreadCrumbSubItem($pageid, $menu[$mainmenuindex]['submenu']);
        }
    }

}

/*
 * mnu_prv_EchoBreadCrumbSubItem - private helper function
 */
function mnu_prv_EchoBreadCrumbSubItem($pageid, $menustructure)
{
    $maxMenuStructure = count($menustructure);
    for ($i = 0; $i < $maxMenuStructure; $i++) {
        if ($menustructure[$i]['siteid'] == $pageid) {
            echo '&nbsp;&gt;&nbsp;' . htmlspecialchars(t($menustructure[$i]['menustring']), ENT_COMPAT, 'UTF-8');

            return;
        } else {
            if (isset($menustructure[$i]['submenu'])) {
                if (mnu_IsMenuParentOf($menustructure[$i]['submenu'], $pageid)) {
                    echo '&nbsp;&gt;&nbsp;' . htmlspecialchars(t($menustructure[$i]['menustring']), ENT_COMPAT, 'UTF-8');
                    mnu_prv_EchoBreadCrumbSubItem($pageid, $menustructure[$i]['submenu']);

                    return;
                }
            }
        }
    }
}

/*
 * show help icon, if a help page exists for this template
 */

function mnu_EchoHelpLink($tplname)
{
    $helplink = helppagelink($tplname);
    if ($helplink != "") {
        echo $helplink . '<img src="resource2/ocstyle/images/misc/32x32-help.png" /></a>';
    }
}
