define(["../var/tinymcePopup","../var/targets","./util"],function(tinyMCEPopup,targets,util){"use strict";var dialog={prepare:function(editor){editor.setSize(null,tinyMCEPopup.dom.getViewPort(window).h-65);dialog.setEvents(editor)},setEvents:function(editor){tinymce.DOM.bind(window,"resize",dialog.resize);tinymce.DOM.bind(util.getElem("form-editor"),"submit",util.proxy(dialog.save,editor));tinymce.DOM.bind(util.getElem("cancel"),"click",dialog.close)},resize:function(){var vp=tinyMCEPopup.dom.getViewPort(window);tinyMCEPopup.resizeToInnerSize();targets&&util.forEach(targets,function(textarea){textarea.style.height=vp.h-65+"px"})},close:function(){tinyMCEPopup.close();return!1},save:function(){tinyMCEPopup.editor.setContent(this.getValue(),{source_view:!0});tinyMCEPopup.close();return!1}};return tinyMCEPopup?dialog:null});