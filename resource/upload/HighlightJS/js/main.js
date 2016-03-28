jQuery(document).ready(function () {
  jQuery(function extJS_TagSource(){
    var bodyContent = '#bodyContent';
    var source = 'div.TagSource pre code';
    jQuery(bodyContent).find(source).each(function (i, block) {
      hljs.highlightBlock(block);
    });
  });
});
