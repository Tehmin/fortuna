<?php
    add_shortcode('program','show_program');

function show_program(){
    $cragir =  get_option('cragir');
    $cragri_html = '
            [tabs type="vertical"]
            [tabs_head]
            [tab_title] ԵՐԿՈՒՇԱԲԹԻ '.date("d.m.Y", strtotime(get_option("shabatva_skizb"))+60*60*24*0).'[/tab_title]
            [tab_title] ԵՐԵՔՇԱԲԹԻ '.date("d.m.Y", strtotime(get_option("shabatva_skizb"))+60*60*24*1).'[/tab_title]
            [tab_title] ՉՈՐԵՔՇԱԲԹԻ '.date("d.m.Y", strtotime(get_option("shabatva_skizb"))+60*60*24*2).'[/tab_title]
            [tab_title] ՀԻՆԳՇԱԲԹԻ '.date("d.m.Y", strtotime(get_option("shabatva_skizb"))+60*60*24*3).'[/tab_title]
            [tab_title] ՈՒՐԲԱԹ '.date("d.m.Y", strtotime(get_option("shabatva_skizb"))+60*60*24*4).'[/tab_title]
            [tab_title] ՇԱԲԱԹ '.date("d.m.Y", strtotime(get_option("shabatva_skizb"))+60*60*24*5).'[/tab_title]
            [tab_title] ԿԻՐԱԿԻ '.date("d.m.Y", strtotime(get_option("shabatva_skizb"))+60*60*24*6).'[/tab_title]
            [/tabs_head]
             [tab]
<table class="category table-bordered">
    <thead>
    <tr>
        <th id="tableOrdering" class="sectiontableheader">ԱՆՎԱՆՈՒՄԸ</th>
        <th id="tableOrdering3" class="sectiontableheader">ԺԱՄԸ</th>
    </tr>
    </thead>
    <tbody>';
    foreach($cragir["erkushabti"]["haxordum"] as $key => $haxordum) {
        $cragri_html .= '<tr class="sectiontableentry1">
                        <td class="list-title">'.$haxordum.'</td>
                        <td class="createdby">'.$cragir["erkushabti"]["jam"][$key].'</td>
                    </tr>';
    };
    $cragri_html .='</tbody>
</table>
[/tab]
[tab]
<table class="category table-bordered">
    <thead>
    <tr>
        <th id="tableOrdering" class="sectiontableheader">ԱՆՎԱՆՈՒՄԸ</th>
        <th id="tableOrdering3" class="sectiontableheader">ԺԱՄԸ</th>
    </tr>
    </thead>
    <tbody>';
    foreach($cragir["ereqshabti"]["haxordum"] as $key => $haxordum) {
        $cragri_html .= '<tr class="sectiontableentry1">
                        <td class="list-title">'.$haxordum.'</td>
                        <td class="createdby">'.$cragir["ereqshabti"]["jam"][$key].'</td>
                    </tr>';
    };
    $cragri_html .='</tbody>
</table>
[/tab]
[tab]
<table class="category table-bordered">
    <thead>
    <tr>
        <th id="tableOrdering" class="sectiontableheader">ԱՆՎԱՆՈՒՄԸ</th>
        <th id="tableOrdering3" class="sectiontableheader">ԺԱՄԸ</th>
    </tr>
    </thead>
    <tbody>';
    foreach($cragir["choreqshabti"]["haxordum"] as $key => $haxordum) {
        $cragri_html .= '<tr class="sectiontableentry1">
                        <td class="list-title">'.$haxordum.'</td>
                        <td class="createdby">'.$cragir["choreqshabti"]["jam"][$key].'</td>
                    </tr>';
    };
    $cragri_html .='</tbody>
</table>
[/tab]
[tab]
<table class="category table-bordered">
    <thead>
    <tr>
        <th id="tableOrdering" class="sectiontableheader">ԱՆՎԱՆՈՒՄԸ</th>
        <th id="tableOrdering3" class="sectiontableheader">ԺԱՄԸ</th>
    </tr>
    </thead>
    <tbody>';
    foreach($cragir["hingshabti"]["haxordum"] as $key => $haxordum) {
        $cragri_html .= '<tr class="sectiontableentry1">
                        <td class="list-title">'.$haxordum.'</td>
                        <td class="createdby">'.$cragir["hingshabti"]["jam"][$key].'</td>
                    </tr>';
    };
    $cragri_html .='</tbody>
</table>
[/tab]
[tab]
<table class="category table-bordered">
    <thead>
    <tr>
        <th id="tableOrdering" class="sectiontableheader">ԱՆՎԱՆՈՒՄԸ</th>
        <th id="tableOrdering3" class="sectiontableheader">ԺԱՄԸ</th>
    </tr>
    </thead>
    <tbody>';
    foreach($cragir["urbat"]["haxordum"] as $key => $haxordum) {
        $cragri_html .= '<tr class="sectiontableentry1">
                        <td class="list-title">'.$haxordum.'</td>
                        <td class="createdby">'.$cragir["urbat"]["jam"][$key].'</td>
                    </tr>';
    };
    $cragri_html .='</tbody>
</table>
[/tab]
[tab]
<table class="category table-bordered">
    <thead>
    <tr>
        <th id="tableOrdering" class="sectiontableheader">ԱՆՎԱՆՈՒՄԸ</th>
        <th id="tableOrdering3" class="sectiontableheader">ԺԱՄԸ</th>
    </tr>
    </thead>
    <tbody>';
    foreach($cragir["shabat"]["haxordum"] as $key => $haxordum) {
        $cragri_html .= '<tr class="sectiontableentry1">
                        <td class="list-title">'.$haxordum.'</td>
                        <td class="createdby">'.$cragir["shabat"]["jam"][$key].'</td>
                    </tr>';
    };
    $cragri_html .='</tbody>
</table>
[/tab]
[tab]
<table class="category table-bordered">
    <thead>
    <tr>
        <th id="tableOrdering" class="sectiontableheader">ԱՆՎԱՆՈՒՄԸ</th>
        <th id="tableOrdering3" class="sectiontableheader">ԺԱՄԸ</th>
    </tr>
    </thead>
    <tbody>';
    foreach($cragir["kiraki"]["haxordum"] as $key => $haxordum) {
        $cragri_html .= '<tr class="sectiontableentry1">
                        <td class="list-title">'.$haxordum.'</td>
                        <td class="createdby">'.$cragir["kiraki"]["jam"][$key].'</td>
                    </tr>';
    };
    $cragri_html .='</tbody>
</table>
[/tab]
[/tabs]';

    return do_shortcode($cragri_html);
}


