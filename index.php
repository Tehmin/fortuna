<?php

echo "<pre>";
//print_r($cragir["erkushabti"]);
echo "</pre>";

?>
    <style>
        .container1 input[type=text] {
            padding:5px 0px;
            margin:5px 5px 5px 0px;
        }


        .add_form_field, .my_save_btn
        {
            background-color: #1c97f3;
            color: white;
            padding: 8px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
           // border: 1px solid #186dad;
        }

        input{
            border: 1px solid #1c97f3;
            width: 260px;
            height: 25px;
            margin-bottom:14px;
        }

        .delete{
            background-color: #fd1200;
            border: none;
            color: white;
            padding: 5px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin: 4px 2px;
            cursor: pointer;

        }
        .title_program li{
            display: inline;
            padding: 0 90px;
            margin-right: 20px;
        }
        #sortable {
            list-style-type: none;
        }
        .move_icon{
            cursor: pointer;
            height: 16px;
            width: 16px;
            padding-left: 10px;
        }
        ul.weekdays_tabs{
            margin: 0;
            padding: 0;
            list-style: none;
        }
        ul.weekdays_tabs li{
            display: inline-block;
            padding: 10px 15px;
            cursor: pointer;
            background-color: #f1f1f1;
            border: 1px solid #9fc5e2;
        }
        .weekdays_tabs a{
            text-decoration: none;
            padding: 10px;
        }
        .weekdays_tabs a:hover{
            color: black;
        }
        ul.weekdays_tabs li:hover{
            background-color: #d2e1ec;
        }
        .ui-state-default.ui-corner-top.ui-tabs-active.ui-state-active {
            background-color: #8fcfff;
        }
        a:focus {
            box-shadow: none !important;
        }
    </style>

    <script>
        jQuery(document).ready(function($) {

            $( ".sortable" ).sortable();
            var wrapper         = $(".sortable");
            var add_button      = $(".add_form_field");


            $(add_button).click(function(){
                var day =  $(this).data("day");
                $(this).closest("div.or").find(".sortable").append('<div><input type="text" name="cragir['+day+'][haxordum][]"/><input type="text" name="cragir['+day+'][jam][]"/><a href="#" class="delete">Delete</a><img class="move_icon" src="<?php echo plugin_dir_url( __FILE__ ) ?>images/icon.jpg"></div>'); //add input box
            });

            $(wrapper).on("click",".delete", function(){
                $(this).parent('div').remove();
            });
            $( function() {
                $( ".tabs" ).tabs();
            } );

        });

    </script>

<div class="container1">
    <div class="tabs">
        <ul class="weekdays_tabs">
            <li><a href="#tabs-1">Երկուշաբթի</a></li>
            <li><a href="#tabs-2">Երեքշաբթի</a></li>
            <li><a href="#tabs-3">Չորեքշաբթի</a></li>
            <li><a href="#tabs-4">Հինգշաբթի</a></li>
            <li><a href="#tabs-5">Ուրբաթ</a></li>
            <li><a href="#tabs-6">Շաբաթ</a></li>
            <li><a href="#tabs-7">Կիրակի</a></li>
        </ul>
        <form method="post">
        <div id="tabs-1" class="or">
            <button type="button" data-day="erkushabti" class="add_form_field">Add New Field &nbsp; <span style="font-size:16px; font-weight:bold;">+ </span></button>
            <div class="title_program">
                <ul>
                    <li><strong>Անվանումը</strong></li>
                    <li><strong>Ժամը</strong></li>
                </ul>
            </div>
            <div class="sortable">
                <?php
                if(!empty($cragir["erkushabti"]["haxordum"]) && is_array($cragir["erkushabti"]["haxordum"])) {
                    foreach ($cragir["erkushabti"]["haxordum"] as $key => $haxordum) { ?>
                        <div>
                            <input type="text" name="cragir[erkushabti][haxordum][]"
                                   value="<?php echo $haxordum; ?>"><input type="text" name="cragir[erkushabti][jam][]"
                                                                           value="<?php echo $cragir["erkushabti"]["jam"][$key]; ?>">
                            <a href="#" class="delete">Delete</a>
                            <span class="btn btn-default move" type="button"><img class="move_icon"
                                                                                  src="<?php echo plugin_dir_url(__FILE__) ?>images/icon.jpg"></span>
                        </div>
                    <?php }
                }else{
                ?>
                <div>
                    <input type="text" name="cragir[erkushabti][haxordum][]"><input type="text" name="cragir[erkushabti][jam][]">
                    <span class="btn btn-default move" type="button"><img class="move_icon" src="<?php echo plugin_dir_url( __FILE__ ) ?>images/icon.jpg"></span>
                </div>
                <?php }?>
            </div>
        </div>
        <div id="tabs-2" class="or">
            <button type="button" data-day="ereqshabti" class="add_form_field">Add New Field &nbsp; <span style="font-size:16px; font-weight:bold;">+ </span></button>
            <div class="title_program">
                <ul>
                    <li><strong>Անվանումը</strong></li>
                    <li><strong>Ժամը</strong></li>
                </ul>
            </div>
            <div class="sortable">
                <?php
                if(!empty($cragir["ereqshabti"]["haxordum"]) && is_array($cragir["ereqshabti"]["haxordum"])) {
                    foreach ($cragir["ereqshabti"]["haxordum"] as $key => $haxordum) { ?>
                        <div>
                            <input type="text" name="cragir[ereqshabti][haxordum][]"
                                   value="<?php echo $haxordum; ?>"><input type="text" name="cragir[ereqshabti][jam][]"
                                                                           value="<?php echo $cragir["ereqshabti"]["jam"][$key]; ?>">
                            <a href="#" class="delete">Delete</a>
                            <span class="btn btn-default move" type="button"><img class="move_icon"
                                                                                  src="<?php echo plugin_dir_url(__FILE__) ?>images/icon.jpg"></span>
                        </div>
                    <?php }
                }else{
                    ?>
                    <div>
                        <input type="text" name="cragir[ereqshabti][haxordum][]"><input type="text" name="cragir[ereqshabti][jam][]">
                        <span class="btn btn-default move" type="button"><img class="move_icon" src="<?php echo plugin_dir_url( __FILE__ ) ?>images/icon.jpg"></span>
                    </div>
                <?php }?>
            </div>
        </div>

        <div id="tabs-3" class="or">
            <button type="button" data-day="choreqshabti" class="add_form_field">Add New Field &nbsp; <span style="font-size:16px; font-weight:bold;">+ </span></button>
            <div class="title_program">
                <ul>
                    <li><strong>Անվանումը</strong></li>
                    <li><strong>Ժամը</strong></li>
                </ul>
            </div>
            <div class="sortable">
                <?php
                if(!empty($cragir["choreqshabti"]["haxordum"]) && is_array($cragir["choreqshabti"]["haxordum"])) {
                    foreach ($cragir["choreqshabti"]["haxordum"] as $key => $haxordum) { ?>
                        <div>
                            <input type="text" name="cragir[choreqshabti][haxordum][]"
                                   value="<?php echo $haxordum; ?>"><input type="text" name="cragir[choreqshabti][jam][]"
                                                                           value="<?php echo $cragir["choreqshabti"]["jam"][$key]; ?>">
                            <a href="#" class="delete">Delete</a>
                            <span class="btn btn-default move" type="button"><img class="move_icon"
                                                                                  src="<?php echo plugin_dir_url(__FILE__) ?>images/icon.jpg"></span>
                        </div>
                    <?php }
                }else{
                    ?>
                    <div>
                        <input type="text" name="cragir[choreqshabti][haxordum][]"><input type="text" name="cragir[choreqshabti][jam][]">
                        <span class="btn btn-default move" type="button"><img class="move_icon" src="<?php echo plugin_dir_url( __FILE__ ) ?>images/icon.jpg"></span>
                    </div>
                <?php }?>
            </div>
        </div>
        <div id="tabs-4" class="or">
            <button type="button" data-day="hingshabti" class="add_form_field">Add New Field &nbsp; <span style="font-size:16px; font-weight:bold;">+ </span></button>
            <div class="title_program">
                <ul>
                    <li><strong>Անվանումը</strong></li>
                    <li><strong>Ժամը</strong></li>
                </ul>
            </div>
            <div class="sortable">
                <?php
                if(!empty($cragir["hingshabti"]["haxordum"]) && is_array($cragir["hingshabti"]["haxordum"])) {
                    foreach ($cragir["hingshabti"]["haxordum"] as $key => $haxordum) { ?>
                        <div>
                            <input type="text" name="cragir[hingshabti][haxordum][]"
                                   value="<?php echo $haxordum; ?>"><input type="text" name="cragir[hingshabti][jam][]"
                                                                           value="<?php echo $cragir["hingshabti"]["jam"][$key]; ?>">
                            <a href="#" class="delete">Delete</a>
                            <span class="btn btn-default move" type="button"><img class="move_icon"
                                                                                  src="<?php echo plugin_dir_url(__FILE__) ?>images/icon.jpg"></span>
                        </div>
                    <?php }
                }else{
                    ?>
                    <div>
                        <input type="text" name="cragir[hingshabti][haxordum][]"><input type="text" name="cragir[hingshabti][jam][]">
                        <span class="btn btn-default move" type="button"><img class="move_icon" src="<?php echo plugin_dir_url( __FILE__ ) ?>images/icon.jpg"></span>
                    </div>
                <?php }?>
            </div>
        </div>
        <div id="tabs-5" class="or">
            <button type="button" data-day="urbat" class="add_form_field">Add New Field &nbsp; <span style="font-size:16px; font-weight:bold;">+ </span></button>
            <div class="title_program">
                <ul>
                    <li><strong>Անվանումը</strong></li>
                    <li><strong>Ժամը</strong></li>
                </ul>
            </div>
            <div class="sortable">
                <?php
                if(!empty($cragir["urbat"]["haxordum"]) && is_array($cragir["urbat"]["haxordum"])) {
                    foreach ($cragir["urbat"]["haxordum"] as $key => $haxordum) { ?>
                        <div>
                            <input type="text" name="cragir[urbat][haxordum][]"
                                   value="<?php echo $haxordum; ?>"><input type="text" name="cragir[urbat][jam][]"
                                                                           value="<?php echo $cragir["urbat"]["jam"][$key]; ?>">
                            <a href="#" class="delete">Delete</a>
                            <span class="btn btn-default move" type="button"><img class="move_icon"
                                                                                  src="<?php echo plugin_dir_url(__FILE__) ?>images/icon.jpg"></span>
                        </div>
                    <?php }
                }else{
                    ?>
                    <div>
                        <input type="text" name="cragir[urbat][haxordum][]"><input type="text" name="cragir[urbat][jam][]">
                        <span class="btn btn-default move" type="button"><img class="move_icon" src="<?php echo plugin_dir_url( __FILE__ ) ?>images/icon.jpg"></span>
                    </div>
                <?php }?>
            </div>
        </div>
        <div id="tabs-6" class="or">
            <button type="button" data-day="shabat" class="add_form_field" data-day="shabat">Add New Field &nbsp; <span style="font-size:16px; font-weight:bold;">+ </span></button>
            <div class="title_program">
                <ul>
                    <li><strong>Անվանումը</strong></li>
                    <li><strong>Ժամը</strong></li>
                </ul>
            </div>
            <div class="sortable">
                <?php
                if(!empty($cragir["shabat"]["haxordum"]) && is_array($cragir["shabat"]["haxordum"])) {
                    foreach ($cragir["shabat"]["haxordum"] as $key => $haxordum) { ?>
                        <div>
                            <input type="text" name="cragir[shabat][haxordum][]"
                                   value="<?php echo $haxordum; ?>"><input type="text" name="cragir[shabat][jam][]"
                                                                           value="<?php echo $cragir["urbat"]["jam"][$key]; ?>">
                            <a href="#" class="delete">Delete</a>
                            <span class="btn btn-default move" type="button"><img class="move_icon"
                                                                                  src="<?php echo plugin_dir_url(__FILE__) ?>images/icon.jpg"></span>
                        </div>
                    <?php }
                }else{
                    ?>
                    <div>
                        <input type="text" name="cragir[shabat][haxordum][]"><input type="text" name="cragir[shabat][jam][]">
                        <span class="btn btn-default move" type="button"><img class="move_icon" src="<?php echo plugin_dir_url( __FILE__ ) ?>images/icon.jpg"></span>
                    </div>
                <?php }?>
            </div>
        </div>
        <div id="tabs-7" class="or">
            <button type="button" data-day="kiraki" class="add_form_field" data-day="kiraki">Add New Field &nbsp; <span style="font-size:16px; font-weight:bold;">+ </span></button>
            <div class="title_program">
                <ul>
                    <li><strong>Անվանումը</strong></li>
                    <li><strong>Ժամը</strong></li>
                </ul>
            </div>
            <div class="sortable">
                <?php
                if(!empty($cragir["kiraki"]["haxordum"]) && is_array($cragir["kiraki"]["haxordum"])) {
                    foreach ($cragir["kiraki"]["haxordum"] as $key => $haxordum) { ?>
                        <div>
                            <input type="text" name="cragir[kiraki][haxordum][]"
                                   value="<?php echo $haxordum; ?>"><input type="text" name="cragir[kiraki][jam][]"
                                                                           value="<?php echo $cragir["kiraki"]["jam"][$key]; ?>">
                            <a href="#" class="delete">Delete</a>
                            <span class="btn btn-default move" type="button"><img class="move_icon"
                                                                                  src="<?php echo plugin_dir_url(__FILE__) ?>images/icon.jpg"></span>
                        </div>
                    <?php }
                }else{
                    ?>
                    <div>
                        <input type="text" name="cragir[kiraki][haxordum][]"><input type="text" name="cragir[kiraki][jam][]">
                        <span class="btn btn-default move" type="button"><img class="move_icon" src="<?php echo plugin_dir_url( __FILE__ ) ?>images/icon.jpg"></span>
                    </div>
                <?php }?>
            </div>
        </div>
            <button class="my_save_btn">Save</button>
        </form>

        </div>

</div>
