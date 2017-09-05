
    <style>
        .container1 input[type=text] {
            padding:5px 0px;
            margin:5px 5px 5px 0px;
        }


        .add_form_field
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
                $(this).closest("div.or").find(".sortable").append('<div><input type="text" name="mytext[]"/><input type="text" name="mytext[]"/><a href="#" class="delete">Delete</a><img class="move_icon" src="<?php echo plugin_dir_url( __FILE__ ) ?>images/icon.jpg"></div>'); //add input box
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
        <div id="tabs-1" class="or">
            <button class="add_form_field">Add New Field &nbsp; <span style="font-size:16px; font-weight:bold;">+ </span></button>
            <div class="title_program">
                <ul>
                    <li><strong>Անվանումը</strong></li>
                    <li><strong>Ժամը</strong></li>
                </ul>
            </div>
            <div class="sortable">
                <div>
                    <input type="text" name="mytext[]"><input type="text" name="mytext[]">
                    <span class="btn btn-default move" type="button"><img class="move_icon" src="<?php echo plugin_dir_url( __FILE__ ) ?>images/icon.jpg"></span>
                </div>
            </div>
        </div>
        <div id="tabs-2" class="or">
            <button class="add_form_field">Add New Field &nbsp; <span style="font-size:16px; font-weight:bold;">+ </span></button>
            <div class="title_program">
                <ul>
                    <li><strong>Անվանումը</strong></li>
                    <li><strong>Ժամը</strong></li>
                </ul>
            </div>
            <div class="sortable">
                <div>
                    <input type="text" name="mytext[]"><input type="text" name="mytext[]">
                    <span class="btn btn-default move" type="button"><img class="move_icon" src="<?php echo plugin_dir_url( __FILE__ ) ?>images/icon.jpg"></span>
                </div>
            </div>
        </div>

        <div id="tabs-3" class="or">
            <button class="add_form_field">Add New Field &nbsp; <span style="font-size:16px; font-weight:bold;">+ </span></button>
            <div class="title_program">
                <ul>
                    <li><strong>Անվանումը</strong></li>
                    <li><strong>Ժամը</strong></li>
                </ul>
            </div>
            <div class="sortable">
                <div>
                    <input type="text" name="mytext[]"><input type="text" name="mytext[]">
                    <span class="btn btn-default move" type="button"><img class="move_icon" src="<?php echo plugin_dir_url( __FILE__ ) ?>images/icon.jpg"></span>
                </div>
            </div>
        </div>
        <div id="tabs-4" class="or">
            <button class="add_form_field">Add New Field &nbsp; <span style="font-size:16px; font-weight:bold;">+ </span></button>
            <div class="title_program">
                <ul>
                    <li><strong>Անվանումը</strong></li>
                    <li><strong>Ժամը</strong></li>
                </ul>
            </div>
            <div class="sortable">
                <div>
                    <input type="text" name="mytext[]"><input type="text" name="mytext[]">
                    <span class="btn btn-default move" type="button"><img class="move_icon" src="<?php echo plugin_dir_url( __FILE__ ) ?>images/icon.jpg"></span>
                </div>
            </div>
        </div>
        <div id="tabs-5" class="or">
            <button class="add_form_field">Add New Field &nbsp; <span style="font-size:16px; font-weight:bold;">+ </span></button>
            <div class="title_program">
                <ul>
                    <li><strong>Անվանումը</strong></li>
                    <li><strong>Ժամը</strong></li>
                </ul>
            </div>
            <div class="sortable">
                <div>
                    <input type="text" name="mytext[]"><input type="text" name="mytext[]">
                    <span class="btn btn-default move" type="button"><img class="move_icon" src="<?php echo plugin_dir_url( __FILE__ ) ?>images/icon.jpg"></span>
                </div>
            </div>
        </div>
        <div id="tabs-6" class="or">
            <button class="add_form_field">Add New Field &nbsp; <span style="font-size:16px; font-weight:bold;">+ </span></button>
            <div class="title_program">
                <ul>
                    <li><strong>Անվանումը</strong></li>
                    <li><strong>Ժամը</strong></li>
                </ul>
            </div>
            <div class="sortable">
                <div>
                    <input type="text" name="mytext[]"><input type="text" name="mytext[]">
                    <span class="btn btn-default move" type="button"><img class="move_icon" src="<?php echo plugin_dir_url( __FILE__ ) ?>images/icon.jpg"></span>
                </div>
            </div>
        </div>
        <div id="tabs-7" class="or">
            <button class="add_form_field">Add New Field &nbsp; <span style="font-size:16px; font-weight:bold;">+ </span></button>
            <div class="title_program">
                <ul>
                    <li><strong>Անվանումը</strong></li>
                    <li><strong>Ժամը</strong></li>
                </ul>
            </div>
            <div class="sortable">
                <div>
                    <input type="text" name="mytext[]"><input type="text" name="mytext[]">
                    <span class="btn btn-default move" type="button"><img class="move_icon" src="<?php echo plugin_dir_url( __FILE__ ) ?>images/icon.jpg"></span>
                </div>
            </div>
        </div>

        </div>

</div>
