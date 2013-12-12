//my debug stuff...
var jqDockDbg = true;
function DBG(c){
  if(jqDockDbg){
    var dbg = jQuery('#dbg');
    if(!dbg.length){
      dbg = jQuery('#page').append('<div id="dbg" style="width:350px; position:absolute; top:50px; left:580px; color:#ff0000; font-size:10px;"></div>').find('#dbg');
    }
    var ch = dbg.children();
    if(!ch.length){
      dbg.append('<div style="border-bottom:1px solid;"><span id="dbgclear">Clear</span>&nbsp;/&nbsp;<span id="dbgdisable">Disable</span></div>')
        .find('#dbgclear').one('click', function(e){ dbg.children().remove(); return false; }).end()
        .find('#dbgdisable').one('click', function(e){ jqDockDbg = false; dbg.remove(); return false; }).end();
    }
    dbg.append('<div>'+c+'</div>');
  }
}

jQuery(function($){
  //initialise shadowbox...
  Shadowbox.init({skipSetup:true});
  //sort out the button links to the same pages with the other DOCTYPEs...
  var hasindx = /dt=\d+/.test(location.href);
  $('#pagebuttons input').each(function(){
      var n = this.id.charAt(this.id.length-1);
      if((!hasindx && n == '0') || location.href.indexOf('dt='+n) >= 0){
        this.disabled = true;
      }else{
        $(this).click(function(){ location.href = 'index.php?dt='+n; return false; });
      }
    });
  //...and the button links to shadowbox content...
  var sboxopts = {width:900, gallery:'sbox', counterType:'skip', onFinish:function(i){ xferSboxBtns(i); }}
    , sbxa = $('#sboxbuttons a.sboxbtn').shadowbox(sboxopts);
  function xferSboxBtns(i){
    var sti = $('#shadowbox_title_inner').append('<div id="shadowbox_other_pages"><div class="jqDkV" title="Current version">v'+$.jqDock('version')+'</div></div>').find('#shadowbox_other_pages')
      , ndx = sbxa.index(i.el)
      ;
    sbxa.not(i.el).clone().appendTo(sti).each(function(n){
        $(this).one('click', function(){ Shadowbox.change(n<ndx?n:n+1); sti.remove(); return false; });
      });
    $('#shadowbox').find('.inPageLink').each(function(){
        var clk = $("[title='"+this.title+"']", sti);
        $(this).one('click', function(){ clk.trigger('click'); return false; });
      });
  }
  $('a.targetBlank').attr({target:'_blank'}); //cheat to get Strict DOCTYPE to validate!
  //v.12 : output jqDock version, and browser and version...
  $('#jqDockVersion').text(' v'+$.jqDock('version'));
  var bv=' ( ';
  $.each(['opera','mozilla','msie','safari'], function(i,v){ bv+=($.browser[v]?v:''); });
  bv+=' v.'+$.browser.version+' )';
  $('#eop').append('<span style="padding-left:12px;">'+bv+'</span>');
});


