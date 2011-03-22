/*!
 * MeiuPic common js v2.0
 * http://meiu.cn/
 *
 * Copyright 2011, Lingter
 */
 
/*drag and drop start*/
(function($){
$.fn.jqDrag=function(h){return i(this,h,'d');};
$.fn.jqResize=function(h){return i(this,h,'r');};
$.jqDnR={dnr:{},e:0,
drag:function(v){
 if(M.k == 'd')E.css({left:M.X+v.pageX-M.pX,top:M.Y+v.pageY-M.pY});
 else E.css({width:Math.max(v.pageX-M.pX+M.W,0),height:Math.max(v.pageY-M.pY+M.H,0)});
  return false;},
stop:function(){E.css('opacity',M.o);$(document).unbind('mousemove',J.drag).unbind('mouseup',J.stop);}
};
var J=$.jqDnR,M=J.dnr,E=J.e,
i=function(e,h,k){return e.each(function(){h=(h)?$(h,e):e;
 h.bind('mousedown',{e:e,k:k},function(v){var d=v.data,p={};E=d.e;
 // attempt utilization of dimensions plugin to fix IE issues
 if(E.css('position') != 'relative'){try{E.position(p);}catch(e){}}
 M={X:p.left||f('left')||0,Y:p.top||f('top')||0,W:f('width')||E[0].scrollWidth||0,H:f('height')||E[0].scrollHeight||0,pX:v.pageX,pY:v.pageY,k:d.k,o:E.css('opacity')};
 E.css({opacity:0.8});$(document).mousemove($.jqDnR.drag).mouseup($.jqDnR.stop);
 return false;
 });
});},
f=function(k){return parseInt(E.css(k))||false;};
})(jQuery);
/*drag and drop end*/
jQuery.fn.addOption = function(text,value){jQuery(this).get(0).options.add(new Option(text,value));}

var Mui = {
    centerMe : function(jel){
        var w_w = $(jel).outerWidth();
        var w_h = $(jel).outerHeight();
        var left = $(window).scrollLeft() + (($(window).width()-w_w)/2);
        if($(jel).css('position') == 'fixed'){
            var top = ((document.documentElement.clientHeight-w_h)/2) - 50;
        }else{
            var top = $(window).scrollTop() + ((document.documentElement.clientHeight-w_h)/2) - 50;
        }
        if( top < 100 ) top = 100;
        $(jel).css({'left':left});
        $(jel).css({'top':top});
    }
};

Mui.box = {
    callback : null,
    show : function(url){
        if( $('#meiu_float_box').length == 0 ){
            $('body').prepend('<div id="meiu_float_box"></div>');
        }
        if(jQuery.browser.msie && jQuery.browser.version < 7){
            $('body').append('<iframe class="bg_iframe" scrolling="no" frameborder="0" style="position: absolute;"></iframe>');
        }
        if(url){
            $.get(url,{ajax:'true','_t':Math.random()}, function(data) {
                $('#meiu_float_box').html(data);
                Mui.centerMe('#meiu_float_box');
                $('#meiu_float_box').jqDrag('.box_title');
            });
            $('#meiu_float_box').html('<div class="loading">Loading...</div>');
            $('#meiu_float_box').show();
            Mui.centerMe('#meiu_float_box');
        }else{
            $('#meiu_float_box').show();
            Mui.centerMe('#meiu_float_box');
        }
    },
    setData : function(data){
        if( $('#meiu_float_box').length == 0 ){
            $('body').prepend('<div id="meiu_float_box"></div>');
        }
        $('#meiu_float_box').html(data);
        $('#meiu_float_box').show();
        Mui.centerMe('#meiu_float_box');
    },
    resize: function(w,h){
        $('#meiu_float_box').width(w);
        if(h){
            $('#meiu_float_box').height(h);
        }
    },
    close : function(){
        $('#meiu_float_box').hide();
        if(jQuery.browser.msie && jQuery.browser.version < 7){
            $('iframe').remove('.bg_iframe');
        }
        this.callback = null;
    }
};

Mui.form = {
    send : function(formid){
        $('#'+formid).unbind('submit').submit(function(){
            $.post($('#'+formid).attr('action'),$('#'+formid).serializeArray(),function(data) {
                Mui.form.showResult(data,formid);
            },'html');
        });
    },
    sendPop : function(formid){
        $('#'+formid).unbind('submit').submit(function(){
            $.post($('#'+formid).attr('action'),$('#'+formid).serializeArray(),function(data) {
                Mui.box.setData(data);
            },'html');
        });
    },
    sendAuto : function(formid){
        $('#'+formid).unbind('submit').submit(function(){
            $.post($('#'+formid).attr('action'),$('#'+formid).serializeArray(),function(data) {
                if(data.ret){
                    if(Mui.box.callback){
                        Mui.box.setData(data.html.replace(/<script(.|\s)*?\/script(\s)*>/gi,"") );
                        Mui.box.callback();
                    }else{
                        Mui.box.setData(data.html);
                    }
                }else{
                    Mui.form.showResult(data.html,formid);
                }
            },'json');
        });
    },
    showResult : function(ret,formid){
        if( ret != '' ){
            if( $('#meiu_notice_div').length == 0 && formid != '' ){
                $('#'+formid).before('<div id="meiu_notice_div"></div>');
                $('#meiu_notice_div').html(ret);
            }else{
                $('#meiu_notice_div').html(ret);
            }
            $('#meiu_notice_div').css({display:'block'});
        }else{
            if( $('#meiu_notice_div').length > 0 ){
                $('#meiu_notice_div').css({display:'none'});
            }
        }
    }
};

function setMask(id,state){
    var oldEl = $('#'+id);
    if(oldEl.length == 0){
        return;
    }
    var val=oldEl.val();
    var cla=oldEl.attr('class');
    var name=oldEl.attr('name');
    var sibling = oldEl.next();
    var newInput = document.createElement('input');
    
    $(newInput).val(val);
    $(newInput).attr('id',id);
    $(newInput).attr('class',cla);
    $(newInput).attr('name',name);
    if (state == true)
        $(newInput).attr('type','text');
    else
        $(newInput).attr('type','password');
    
    oldEl.remove();
    sibling.before($(newInput));
}
