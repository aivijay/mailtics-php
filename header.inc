<link href="styles/shader.css" type="text/css" rel="stylesheet">

<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.7.2.custom.min.js"></script>
<script type="text/javascript" src="js/jquery.form.js"></script>

<!--
<script type="text/javascript" src="js/fck-jquery/jquery.MetaData.js"></script>
<script type="text/javascript" src="js/fck-jquery/jquery.form.js"></script>
<script type="text/javascript" src="js/fck-jquery/jquery.FCKEditor.js"></script>
<script type="text/javascript" src="js/fck-jquery/"></script>
-->

<link rel="stylesheet" type="text/css" media="screen" href="js/tabs/themes/redmond/jquery-ui-1.7.1.custom.css" />
<link rel="stylesheet" type="text/css" media="screen" href="js/tabs/themes/ui.jqgrid.css" />
<link href="styles/mailtics_main.css" type="text/css" rel="stylesheet">
<link href="styles/main.css" type="text/css" rel="stylesheet">
<style>
html, body {
	margin: 0;			/* Remove body margin/padding */
	padding: 0;
	overflow: hidden;	/* Remove scroll bars on browser window */	
  font-size: 75%;
}
/*Splitter style */


#LeftPane {
	/* optional, initial splitbar position */
	overflow: auto;
}
/*
 * Right-side element of the splitter.
*/

#RightPane {
	padding: 2px;
	overflow: auto;
}
.ui-tabs-nav li {position: relative;}
.ui-tabs-selected a span {padding-right: 10px;}
.ui-tabs-close {display: none;position: absolute;top: 3px;right: 0px;z-index: 800;width: 16px;height: 14px;font-size: 10px; font-style: normal;cursor: pointer;}
.ui-tabs-selected .ui-tabs-close {display: block;}
.ui-layout-west .ui-jqgrid tr.jqgrow td { border-bottom: 0px none;}
.ui-datepicker {z-index:1200;}
</style>

<!--<script src="js/tabs/js/jquery.js" type="text/javascript"></script>-->
<script src="js/tabs/js/jquery-ui-1.7.1.custom.min.js" type="text/javascript"></script>
<script src="js/tabs/js/jquery.layout.js" type="text/javascript"></script>
<script src="js/tabs/js/i18n/grid.locale-en.js" type="text/javascript"></script>
<script src="js/tabs/js/jquery.jqGrid.min.js" type="text/javascript"></script>
<script src="js/tabs/js/jquery.tablednd.js" type="text/javascript"></script>
<script src="js/tabs/js/jquery.contextmenu.js" type="text/javascript"></script>

<script type="text/javascript">
var gridimgpath = 'themes/basic/images';
jQuery(document).ready(function(){
    //$('#switcher').themeswitcher();

	$('body').layout({
		resizerClass: 'ui-state-default',
        west__onresize: function (pane, $Pane) {
            jQuery("#west-grid").setGridWidth($Pane.innerWidth()-2);
		}
	});
	$.jgrid.defaults = $.extend($.jgrid.defaults,{loadui:"enable"});
	var maintab =jQuery('#tabs-new','#RightPane').tabs({
        add: function(e, ui) {
            // append close thingy
            $(ui.tab).parents('li:first')
                .append('<span class="ui-tabs-close ui-icon ui-icon-close" title="Close Tab"></span>')
                .find('span.ui-tabs-close')
                .click(function() {
                    maintab.tabs('remove', $('li', maintab).index($(this).parents('li:first')[0]));
                });
            // select just added tab
            maintab.tabs('select', '#' + ui.panel.id);
        }
    });
    jQuery("#west-grid").jqGrid({
        url: "tree.xml",
        datatype: "xml",
        height: "auto",
        pager: false,
        loadui: "disable",
        colNames: ["id","Items","url"],
        colModel: [
            {name: "id",width:1,hidden:true, key:true},
            {name: "menu", width:150, resizable: false, sortable:false},
            {name: "url",width:1,hidden:true}
        ],
        treeGrid: true,
		caption: "MailTics &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='process.php?page=logout' style='color: white;'>Logout</a>",
        ExpandColumn: "menu",
        autowidth: true,
        //width: 180,
        rowNum: 200,
        ExpandColClick: true,
        treeIcons: {leaf:'ui-icon-document-b'},
        onSelectRow: function(rowid) {
            var treedata = $("#west-grid").getRowData(rowid);
            if(treedata.isLeaf=="true") {
                //treedata.url
                var st = "#t"+treedata.id;
				if($(st).html() != null ) {
					maintab.tabs('select',st);
					$(st,"#tabs-new").load(treedata.url);
				} else {
					maintab.tabs('add',st, treedata.menu);
					$(st,"#tabs-new").load(treedata.url);
				}
            }
        }
    });
	
// end splitter

//


//


});

/*
$($function(){
$('#tabs-new').tabs({
    load: function(event, ui) {
        $('a', ui.panel).click(function() {
            $(ui.panel).load(this.href);
            return false;
        });
    }
});
});



  $(function(){
    $('#tabs-new').tabs({
      show: function(event, ui) {
        $('a', ui.panel).click(function(event) {
          $(ui.panel).load(this.href);
          return false;
        });
      }
    });
  });
*/


</script>

</head>
<body bgcolor="" background="" align="top">
<a name="top"></a>
<?php
$ppage = $_REQUEST['page'];
if ($ppage == "" or $ppage == 'home' or $ppage == 'logout') {
print "<center><table border='0' cellpadding='0' cellspacing='0'><tr><td><img src='images/mailtics-icon-main-small.png'/></td><td valign='middle' class='mailtics-banner-txt'>MailTics</td><td width='80'></td>";
print "<td valign='middle'><h1 class='header-banner-txt1'>eMail Analytics</h1>
       </td><td width='20'></td><td>
          <h1 class='send-emails'>Send Emails</h1>
       </td></tr>
       <tr><td colspan='6'>   
        <table border='0' cellpadding='0' cellspacing='0' width='100%' align='center'>
          <tr>
            <td align='center'>
              <h1 class='sub-headings'>Measure Email Activity</h1>
            </td>
            <td align='center'>
          <h1 class='sub-headings'>Analyze Statistics</h1>
            </td>
            <td align='center'>
          <h1 class='sub-headings'>Make Business Decisions</h1>
            </td>
           </tr>
         </table>  
        </td></tr>";
print "</table></center>";
} // endif
?>

