/*
 EXTENDED VERSION OF TINYMCE EDITOR
 BY VEKIA: www.mypresta.eu | support[at]mypresta.eu
 DON'T REMOVE THIS HEADING
 */

function tinySetup16(config) {
    if (typeof tinyMCE === 'undefined') {
        setTimeout(function () {
            tinySetup16(config);
        }, 100);
        return;
    }

    if (!config)
        config = {};
    var editor_selector = 'rtepro';
    if (typeof config['editor_selector'] != 'undefined')
        config['selector'] = '.' + config['editor_selector'];

    default_config = {
        selector: ".rtepro",
        plugins: "visualblocks, preview searchreplace print insertdatetime, hr charmap colorpicker anchor code link image paste pagebreak table contextmenu filemanager table code media autoresize textcolor emoticons",
        toolbar2: "newdocument,print,|,bold,italic,underline,|,strikethrough,superscript,subscript,|,forecolor,colorpicker,backcolor,|,bullist,numlist,outdent,indent",
        toolbar1: "styleselect,|,formatselect,|,fontselect,|,fontsizeselect,",
        toolbar3: "code,|,table,|,cut,copy,paste,searchreplace,|,blockquote,|,undo,redo,|,link,unlink,anchor,|,image,emoticons,media,|,inserttime,|,preview ",
        toolbar4: "visualblocks,|,charmap,|,hr,",
        extended_valid_elements: '+pre[*],+script[*],+style[*],+script[src|type|language]',
        valid_children: "+body[meta|style|script],pre[script|div|p|br|span|img|style|h1|h2|h3|h4|h5],*[*],+body[style],+body[script]",
        force_p_newlines: false,
        cleanup: false,
        forced_root_block: false,
        force_br_newlines: true,
        verify_html: false,
        media_strict: false,
        external_filemanager_path: ad + "/filemanager/",
        filemanager_title: "File manager",
        external_plugins: {"filemanager": ad + "/filemanager/plugin.min.js"},
        language: iso,
        skin: "prestashop",
        statusbar: false,
        relative_urls: false,
        convert_urls: true,
        remove_script_host: false,

        menu: {
            edit: {title: 'Edit', items: 'undo redo | cut copy paste | selectall'},
            insert: {title: 'Insert', items: 'media image link | pagebreak'},
            view: {title: 'View', items: 'visualaid'},
            format: {
                title: 'Format',
                items: 'bold italic underline strikethrough superscript subscript | formats | removeformat'
            },
            table: {title: 'Table', items: 'inserttable tableprops deletetable | cell row column'},
            tools: {title: 'Tools', items: 'code'}
        }
    }
    $.each(default_config, function (index, el) {
        if (config[index] === undefined)
            config[index] = el;
    });
    tinyMCE.init(config);
}
$().ready(function () {
    tinySetup16();
});