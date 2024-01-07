
/**
 * ��𡝗𠗊瑼娍���閧� (蝳��鍂body��鞱身��𡝗𦆮)
 * @param {String} dragTarget - 甈淄rag�𤌍璅� (��硋�交�����牐��'hover' class)
 * @param {String} inputTarget - <input type="file">�𤌍璅�
 * @param {Function} callback - 瑼娍���厰�脣縧敺�嘑銵𣬚�function
 */
function dragFileHandler(dragTarget, inputTarget, callback){
    const dropbox = document.querySelector(dragTarget);
    const fileinput = document.querySelector(inputTarget);
    if(!dropbox || !fileinput) return false;

    function click(e) {
        fileinput.click()
    }

    function dragenter(e) {
        e.stopPropagation();
        e.preventDefault();
        dropbox.classList.add('hover')
    }

    function dragleave(e) {
        dropbox.classList.remove('hover')
    }

    function dragover(e) {
        e.stopPropagation();
        e.preventDefault();
    }

    function drop(e) {
        e.stopPropagation();
        e.preventDefault();
        dropbox.classList.remove('hover')
        const dt = e.dataTransfer;
        const files = dt.files;
        fileinput.files = files;
        callback(files);
        // handleFiles(files);
    }

    function handleFiles(files) {
        // const fileLimitSize = 1024*1024*1024*4; //4Gb
        // const videoType = /video.*/;
        // const file = files[0];
        // if(file.size > fileLimitSize){
        //     console.log('頞���4G');
        //     return;
        // }
        // if (!file.type.match(videoType)) {
        //     console.log('銝齿𣈲�螱�聢撘�');
        //     return;
        // }

        // //敶梁��
        // const VIDEO = document.createElement("video");
        // VIDEO.setAttribute("controls","controls")
        // VIDEO.src = URL.createObjectURL(file)
        // document.querySelector('.film-upload-container .preview-video').appendChild(VIDEO);

        // //��𣇉��
        // for (var i = 0; i < files.length; i++) {
        //     const file = files[i];
        //     const imageType = /image.*/;
        //     if (!file.type.match(imageType)) {
        //         continue;
        //     }
        //     const img = document.createElement("img");
        //     img.classList.add("obj");
        //     img.file = file;
        //     preview.appendChild(img);
        //     const reader = new FileReader();
        //     reader.onload = (e => img.src = e.target.result);
        //     reader.readAsDataURL(file);
        // }
    }

    function filechange(e){ //暺墧�𢠃�豢�娍�閫貊䔄
        callback(this.files)
    }

    dropbox.addEventListener("click", click, false);
    dropbox.addEventListener("dragenter", dragenter, false);
    dropbox.addEventListener("dragleave", dragleave, false);
    dropbox.addEventListener("dragover", dragover, false);
    dropbox.addEventListener("drop", drop, false);
    fileinput.addEventListener('change', filechange, false)
    window.addEventListener("dragover", dragover, false);
    window.addEventListener("drop", dragover, false);
}


/**
 * 銝𠰴�趺oading ��𧢲踎�脣漲璇�
 *
 * @param {object} param - ���彍
 * @param {object} param.translate - 蝧餉陌
 *
 * uploadProgress(rate) - �凒�鰵�脣漲 %�彍
 * success() - 摰峕�𣂷蒂�啹瘥�
 */
function coverUpLoading(param){
    this.popup = null;
    this.circle = null;
    this.progressRate = null;
    this.i18n = param.translate
    this.init()
}

coverUpLoading.prototype.init = function(){
    var self = this
    var wrap = document.createElement('DIV');
        wrap.classList.add('uploading-wrap');
    var content = document.createElement('DIV');
        content.classList.add('uploading-content');
    var cancel = document.createElement('DIV');
        cancel.classList.add('_biggo-btn','px-5','mt16');
        cancel.textContent = this.i18n.cancelUploading || 'Cancel'
        cancel.addEventListener('click',function(){
            self.cancelUpload()
        })

    var circleWrap = document.createElement('DIV');
        circleWrap.classList.add('circleWrap')
    var circleProgress = document.createElement('DIV');
        circleProgress.classList.add('circle-progress')
    var progressValue = document.createElement('SPAN');
        progressValue.textContent = '0%'

    circleProgress.appendChild(progressValue)
    circleWrap.appendChild(circleProgress)

    var text = document.createElement('DIV');
        text.textContent = this.i18n.videoUploading || 'Uploading...'

    var hint = document.createElement('DIV');
        hint.classList.add('mt16');
        hint.textContent = this.i18n.hint || ''

    content.appendChild(circleWrap)
    content.appendChild(text)
    content.appendChild(hint)
    content.appendChild(cancel)
    wrap.appendChild(content)
    document.body.appendChild(wrap)
    this.popup = wrap
    this.circle = circleWrap
    this.progressRate = progressValue
    window.onbeforeunload = function(e){
        var e = window.event||e;
        e.returnValue = "蝣箏�𡁻𣪧��讠訜��漤��𢒰��𠬍��";
    }
}
coverUpLoading.prototype.uploadProgress = function(rate){ //�凒�鰵�脣漲
    var value = rate * 3.6;
    this.circle.style.background = 'conic-gradient(var(--btn-color-BigGoY3) '+ value +'deg, var(--border-color-BorderOGray2) 0deg)';
    this.progressRate.textContent = Math.floor(rate)+'%';
}
coverUpLoading.prototype.success = function(){ //摰峕�𣂼�𣬚宏�膄DOM
    window.onbeforeunload = null;
    this.popup.remove()
}
coverUpLoading.prototype.cancelInit = function(xhr){
    this.xhr = xhr
}
coverUpLoading.prototype.cancelUpload = function(){
    if(this.xhr){
        this.xhr.abort(['abort'])
        window.onbeforeunload = null;
        this.popup.remove()
    }
}



// ��躰�蝺刻摩�膥
function biggoTextEditor(param){
    this.editor = document.querySelector(param.editor);
    if(!this.editor) return console.error('[ERROR:biggoTextEditor]�𪄳銝滚�蝺刻摩�膥嚗�'+param.editor);
    this.placeholder = document.querySelector(param.placeholder);
    this.at_btn = document.querySelector(param.at_btn);
    this.tag_btn = document.querySelector(param.tag_btn);
    this.counter = document.querySelector(param.text_counter);
    this.wordlimit = param.wordlimit || 500
    this.newlinw = true

    this.spelling_flag = false //compositionstart: 頛詨�交��折�见�蠘撓�交�𤏪�䔶�娍迤�銁�𣄽摮埈�閫貊䔄��compositionupdate:頛詨�交��折�见�蠘撓�交�𤏪�䔶�娍迤�銁�𣄽摮埈�㚚�詨�埈��凒�㺿鈭��批捆��閫貊䔄��compositionend: 頛詨�交��折�见�蠘撓�交�𤏪�峕𣄽摮埈�㚚�詨�堒�峕�琜�峕迤閬����枂�秐頛詨�交���閫貊䔄��

    this.init()
    this.render()
}
biggoTextEditor.prototype.init = function(){
    let editor = this.editor
    let placeholder = this.placeholder
    let at_btn = this.at_btn
    let tag_btn = this.tag_btn
    let self = this

    editor.addEventListener('input', this.inputMainHandle.bind(this)); //頛詨��

    editor.addEventListener('keydown' ,function(e){
        var key = e.key || null
        if(key == '@'){
            self.openSuggestion('atuserid', 'j')
        }else if(key == '#'){
            self.openSuggestion('hashtag', 'p')
        }
    })

    editor.addEventListener('paste', function(e){ //鞎潔�� //TODO鞎潔�𡃏��𡡞𩑈摨西�閧�
        let paste = (e.clipboardData || window.clipboardData).getData('text/plain');
        insertTextAtCaret(paste)
        self.inputMainHandle()
        e.preventDefault();
    })
    editor.addEventListener('focus', function(){
        placeholder.style.display = 'none'
    })
    editor.addEventListener('blur', function(){
        placeholder.style.display = editor.textContent ? 'none' : ''
    })
    editor.addEventListener("compositionstart", function(e) {
        self.spelling_flag = true
    })
    editor.addEventListener("compositionend", function(e) {
        self.spelling_flag = false
        self.inputMainHandle()
    })


    if(placeholder){
        placeholder.addEventListener('click', function(){
            editor.focus()
        })
        if(editor.textContent){
            placeholder.style.display = 'none'
        }
    }

    if(tag_btn){
        tag_btn.addEventListener('click', function(){
            editor.focus()
            insertTextAtCaret('#')
            self.render()
            self.openSuggestion('hashtag', 'p')
        })
    }

    if(at_btn){
        at_btn.addEventListener('click', function(){
            editor.focus()
            insertTextAtCaret('@')
            self.render()
            self.openSuggestion('atuserid', 'j')
        })
    }
}

biggoTextEditor.prototype.updateCounter = function(){   //�凒�鰵摮埈彍
    if(this.counter){
        this.counter.textContent = this.editor.textContent.length +'/'+ this.wordlimit
    }
}
biggoTextEditor.prototype.inputMainHandle = function(){ //頛詨�亥�閧�
    if(this.spelling_flag) return; //�𣄽�𨺗��见�𧢲�銝滩�閧�
    this.render()
}
biggoTextEditor.prototype.render = function(){ //皜脫�𤘪見撘�
    const sel = window.getSelection();
    const textSegments = getTextSegments(this.editor);
    console.log(textSegments);
    let anchorIndex = null;
    let focusIndex = null;
    let currentIndex = 0;
    textSegments.forEach(({text, node}) => {
        if (node === sel.anchorNode) {
            anchorIndex = currentIndex + sel.anchorOffset;
        }
        if (node === sel.focusNode) {
            focusIndex = currentIndex + sel.focusOffset;
        }
        currentIndex += text.length;
    });

    let origin = this.editor.innerHTML
    // let new_htmlstr = parseHTML(origin)
    // let new_html = parseTEXT(new_htmlstr)
    let new_html = parseTEXT(textSegments)
    this.editor.innerHTML = new_html
    restoreSelection(this.editor, anchorIndex, focusIndex);
    this.updateCounter()

    checkCursorQuery()
}
biggoTextEditor.prototype.getString = function(){   //��硋�𡑒圾��𣂼���𦯀葡
    console.log('��硋�𡑒圾��𣂼���𦯀葡');
}

biggoTextEditor.prototype.openSuggestion = function(type, query){   // TODO query��瘝雴葡 嚗� �詨鱓閬���𨀣��
    let editorXY = getDivPosition(this.editor)
    let top = getCursorPosition().y + 24 + 4 +200
    let left = editorXY.x + 10
    let width = this.editor.offsetWidth - 10
    let self = this

    if(!this.suggestionWrap){
        let wrap = document.createElement('DIV')
            wrap.classList.add('biggo-texteditor-suggest')
            wrap.style.top = top+'px'
            wrap.style.left = left+'px'
            wrap.style.width = width+'px'
        document.body.appendChild(wrap)
        this.suggestionWrap = wrap
    }
    getSuggestion()

    function getSuggestion(){
        let api = (type=='hashtag') ? '/api/hashtags_suggestion.php' : '/api/atuserid_suggestion.php';
        $.ajax({
            type: 'GET',
            url: api + '?q=' + query,
            success: function (res) {
                if(res.result){
                    setList(res.data)
                }else{
                    alert('�䔄��罸𥲤隤歹�諹�讠�滚���滩岫')
                }
            }
        })
    }
    function setList(datas){
        var ul = document.createElement('UL')
        if(datas.length){
            datas.forEach(function(item){
                // TODO item query頝偖uggestion����滨�𢠃�讛𠧧
                var li = document.createElement('LI')
                if(type == 'hashtag'){
                    li.innerHTML = '<div>'+ item +'</div>'
                li.addEventListener('click', function(e){       //TODO �䠷�𢠃�頝喳�銝衤��𡃉ode��齿�鍦��
                        self.editor.focus()
                        let selection = window.getSelection();
                        let range = document.createRange();
                        range.setStart(self.editor.firstChild, selection.anchorOffset-1);
                        range.setEnd(self.editor.firstChild, selection.anchorOffset)
                        selection.removeAllRanges();
                        selection.addRange(range)

                        insertTextAtCaret(`#${item} `)
                        self.render()
                    })
                }else if(type == 'atuserid'){
                    // TODO 瘝㘾�鞎潸�閧�
                    li.innerHTML = `<div class="atuser">
                                        <div class="userimg">
                                            <img src="${item.profileimg}" width="42" height="42">
                                        </div>
                                        <div>
                                            <div class="name">${item.name}</div>
                                            <div class="atid">@${item.at_userid}</div>
                                        </div>
                                    </div>`
                    li.addEventListener('click', function(e){   //TODO �䠷�𢠃�頝喳�銝衤��𡃉ode��齿�鍦��
                        self.editor.focus()
                        let selection = window.getSelection();
                        let range = document.createRange();


                        // range.setStart(self.editor.firstChild, selection.anchorOffset-1);
                        // range.setEnd(self.editor.firstChild, selection.anchorOffset)
                        range.setStart(selection.anchorNode, selection.anchorOffset-1);
                        range.setEnd(selection.anchorNode, selection.anchorOffset)
                        selection.removeAllRanges();
                        selection.addRange(range)

                        insertTextAtCaret(`[@${item.at_userid}:${item.userid}] `)
                        self.render()
                    })
                }
                ul.appendChild(li)
            })
        }
        self.suggestionWrap.innerHTML = ''
        self.suggestionWrap.appendChild(ul)
    }
}


function parseHTML(html){ //html頧匧�𦯀葡
    return html
}
function parseTEXT(textSegments){ //摮𦯀葡頧柾tml
    var html = []
    textSegments.forEach(function(item){
        if(item.text.match(hashMatch)){
            let t = item.text.replace(hashMatch, '<div hashtag>#$1</div>');
            html.push(t)
        }else if(item.text.match(atMatch)){
            let t = item.text.replace(atMatch, '<div atuser="$2">@$1</div>');
            html.push(t)
        }else if(item.text != '' || item.text != ' '){
            html.push('<span>'+item.text+'</span>')
        }
    })
    // html = text.replace(hashMatch, '<div hashtag>#$1</div>').replace(atMatch, '<div atuser="$2">@$1</div>')

    return html.join('');
}

function checkCursorQuery(){
    let selection = window.getSelection();
    let range = document.createRange();

    // console.log(selection);

}

function insertTextAtCaret(text) { //閬���衤蒂鞎潔�𠰴��𤌍��滢�滨蔭
    var selection;
    var range = document.createRange();
    if (window.getSelection) {
        selection = window.getSelection();
        if (selection.getRangeAt && selection.rangeCount) {
            //��鍦�亙��
            var textDOM = document.createTextNode(text)
            selection.deleteFromDocument();
            selection.getRangeAt(0).insertNode(textDOM);

            //�凒�鰵皜豢�嗘�滨蔭��鞎潔�羓�摮堒��
            selection.removeAllRanges();
            range.selectNodeContents(textDOM)
            range.collapse(false);
            selection.addRange(range);
        }
    } else if (document.selection && document.selection.createRange) {
        document.selection.createRange().text = text;
    }
}
/*
function saveSelection() {
    if (window.getSelection) {
        sel = window.getSelection();
        if (sel.getRangeAt && sel.rangeCount) {
            return sel.getRangeAt(0);
        }
    } else if (document.selection && document.selection.createRange) {
        return document.selection.createRange();
    }
    return null;
}

function restoreSelection(range) {
    if (range) {
        if (window.getSelection) {
            sel = window.getSelection();
            sel.removeAllRanges();
            sel.addRange(range);
        } else if (document.selection && range.select) {
            range.select();
        }
    }
}
*/

function getCursorPosition(){
    const selection = window.getSelection();
    const range = selection.getRangeAt(0);
    rect = range.getBoundingClientRect();
    return rect
}



function getDivPosition (element) { //��硋�㛖𤌍��滚��蝝惩�嵖ody�㮾撠滢�滨蔭
    var x = 0;
    var y = 0;
    while ( element ) {
        x += element.offsetLeft - element.scrollLeft + element.clientLeft;
        y += element.offsetTop - element.scrollLeft + element.clientTop;
        element = element.offsetParent;
    }
    return { x: x, y: y };
}

function getTextSegments(element) { //頧㗇���㛖�鞉��
    const textSegments = [];
    Array.from(element.childNodes).forEach((node) => {
        switch(node.nodeType) {
            case Node.TEXT_NODE:
                textSegments.push({text: node.nodeValue, node});
                break;
            case Node.ELEMENT_NODE:
                textSegments.splice(textSegments.length, 0, ...(getTextSegments(node)));
                break;
            default:
                throw new Error(`Unexpected node type: ${node.nodeType}`);
        }
    });
    return textSegments;
}
function restoreSelection(element, absoluteAnchorIndex, absoluteFocusIndex) { //�����虜璅嗘�滨蔭
    const sel = window.getSelection();
    const textSegments = getTextSegments(element);
    let anchorNode = element;
    let anchorIndex = 0;
    let focusNode = element;
    let focusIndex = 0;
    let currentIndex = 0;
    textSegments.forEach(({text, node}) => {
        const startIndexOfNode = currentIndex;
        const endIndexOfNode = startIndexOfNode + text.length;
        if (startIndexOfNode <= absoluteAnchorIndex && absoluteAnchorIndex <= endIndexOfNode) {
            anchorNode = node;
            anchorIndex = absoluteAnchorIndex - startIndexOfNode;
        }
        if (startIndexOfNode <= absoluteFocusIndex && absoluteFocusIndex <= endIndexOfNode) {
            focusNode = node;
            focusIndex = absoluteFocusIndex - startIndexOfNode;
        }
        currentIndex += text.length;
    });
    sel.setBaseAndExtent(anchorNode,anchorIndex,focusNode,focusIndex);
}


function setEndOfContenteditable(contentEditableElement) { //蝘餃�閙虜璅嗘�滨蔭����敺�
    var range, selection;
    if(document.createRange){
       range = document.createRange();
       range.selectNodeContents(contentEditableElement);
       range.collapse(false);
       selection = window.getSelection();
       selection.removeAllRanges();
       selection.addRange(range);
    }else if(document.selection){
       range = document.body.createTextRange();
       range.moveToElementText(contentEditableElement);
       range.collapse(false);
       range.select();
    }
}


/**
 * 鞎潔�𤺧tml頧厩�娍����
 * @param {Event} e - onpaste鈭衤辣
 * @param {Number} maxLength - ��憭折𩑈摨�(�虾��)
 */
function pasteAsPlainText(e, maxLength){
    e.preventDefault();
    const biggoRunes = new biggo_runes
    const beforeLength = biggoRunes.getContentLength(e.currentTarget.innerText)
    if(beforeLength >= maxLength) return;
    let text = e.clipboardData
        ? (e.originalEvent || e).clipboardData.getData('text/plain')
        : // For IE
        window.clipboardData
        ? window.clipboardData.getData('Text')
        : '';
        const textLength = biggoRunes.getContentLength(text)
    if(maxLength && typeof maxLength == 'number'){ //鞎潔�𦠜�頞��𦒘�𢠃�鞱�閧�
        if(beforeLength + textLength > maxLength){
            let cutlength = (beforeLength + textLength) - maxLength
            text = biggoRunes.substring(val, 0, textLength-cutlength)
        }
    }

    if(document.queryCommandSupported('insertText')) {
        document.execCommand('insertText', false, text);
    }else{
        const range = document.getSelection().getRangeAt(0);
        range.deleteContents();

        const textNode = document.createTextNode(text);
        range.insertNode(textNode);
        range.selectNodeContents(textNode);
        range.collapse(false);

        const selection = window.getSelection();
        selection.removeAllRanges();
        selection.addRange(range);
    }
}

/**
 * 頞��𡡞𩑈摨行�𧢲�㕑撓��
 * @param {Event} e - onkeydown鈭衤辣
 * @param {Number} maxLength - ��憭折𩑈摨�
 */
function inputMaxLengthHandle(e, maxLength){
    const biggoRunes = new biggo_runes
    let legalKeys = ['ArrowLeft', 'ArrowUp', 'ArrowRight', 'ArrowDown', 'Control', 'Delete', 'Backspace', 'Meta', 'Alt']
    let ctrlKey = (e.ctrlKey || e.metaKey || e.altKey /* || e.shiftKey*/);
    if(biggoRunes.getContentLength(e.currentTarget.innerText) >= maxLength &&
        ((legalKeys.indexOf(e.key) == -1 && !ctrlKey) || (e.key == 'Enter'))){
        e.preventDefault();
        e.stopPropagation();
    }
}


const atMatch = /\[\@([a-zA-Z0-9_\.]+)\:([a-zA-Z0-9_\-]+)\]/g;
const hashMatch = new RegExp(hashPattern(), "ig");
const urlRegex = /https?:\/\/[^\s/$.?#].[^\s]*/g;

function hashPattern() {
    const i = '\xc0-\xd6' + '\xd8-\xf6' + '\xf8-\xff' + '\u0100-\u024f' + '\u0253-\u0254' + '\u0256-\u0257' + '\u0259' + '\u025b' + '\u0263' + '\u0268' + '\u026f' + '\u0272' + '\u0289' + '\u028b' + '\u02bb' + '\u0300-\u036f' + '\u1e00-\u1eff',
        j = '\u0400-\u04ff' + '\u0500-\u0527' + '\u2de0-\u2dff' + '\ua640-\ua69f' + '\u0591-\u05bf' + '\u05c1-\u05c2' + '\u05c4-\u05c5' + '\u05c7' + '\u05d0-\u05ea' + '\u05f0-\u05f4' + '\ufb12-\ufb28' + '\ufb2a-\ufb36' + '\ufb38-\ufb3c' + '\ufb3e' + '\ufb40-\ufb41' + '\ufb43-\ufb44' + '\ufb46-\ufb4f' + '\u0610-\u061a' + '\u0620-\u065f' + '\u066e-\u06d3' + '\u06d5-\u06dc' + '\u06de-\u06e8' + '\u06ea-\u06ef' + '\u06fa-\u06fc' + '\u06ff' + '\u0750-\u077f' + '\u08a0' + '\u08a2-\u08ac' + '\u08e4-\u08fe' + '\ufb50-\ufbb1' + '\ufbd3-\ufd3d' + '\ufd50-\ufd8f' + '\ufd92-\ufdc7' + '\ufdf0-\ufdfb' + '\ufe70-\ufe74' + '\ufe76-\ufefc' + '\u200c-\u200c' + '\u0e01-\u0e3a' + '\u0e40-\u0e4e' + '\u1100-\u11ff' + '\u3130-\u3185' + '\uA960-\uA97F' + '\uAC00-\uD7AF' + '\uD7B0-\uD7FF' + '\uFFA1-\uFFDC',
        k = String.fromCharCode,
        l = '\u30A1-\u30FA\u30FC-\u30FE' + '\uFF66-\uFF9F' + '\uFF10-\uFF19\uFF21-\uFF3A' + '\uFF41-\uFF5A' + '\u3041-\u3096\u3099-\u309E' + '\u3400-\u4DBF' + '\u4E00-\u9FFF' + k(173824) + '-' + k(177983) + k(177984) + '-' + k(178207) + k(194560) + '-' + k(195103) + '\u3003\u3005\u303B',
        m = i + j + l,
        n = '\u0030-\u0039\u0041-\u005A\u0061-\u007A\u00AA\u00B5\u00BA\u00C0-\u00D6\u00D8-\u00F6' + '\u00F8-\u0241\u0250-\u02C1\u02C6-\u02D1\u02E0-\u02E4\u02EE\u037A\u0386' + '\u0388-\u038A\u038C\u038E-\u03A1\u03A3-\u03CE\u03D0-\u03F5\u03F7-\u0481' + '\u048A-\u04CE\u04D0-\u04F9\u0500-\u050F\u0531-\u0556\u0559\u0561-\u0587' + '\u05D0-\u05EA\u05F0-\u05F2\u0621-\u063A\u0640-\u064A\u066E-\u066F' + '\u0671-\u06D3\u06D5\u06E5-\u06E6\u06EE-\u06EF\u06FA-\u06FC\u06FF\u0710' + '\u0712-\u072F\u074D-\u076D\u0780-\u07A5\u07B1\u0904-\u0939\u093D\u0950' + '\u0958-\u0961\u097D\u0985-\u098C\u098F-\u0990\u0993-\u09A8\u09AA-\u09B0' + '\u09B2\u09B6-\u09B9\u09BD\u09CE\u09DC-\u09DD\u09DF-\u09E1\u09F0-\u09F1' + '\u0A05-\u0A0A\u0A0F-\u0A10\u0A13-\u0A28\u0A2A-\u0A30\u0A32-\u0A33' + '\u0A35-\u0A36\u0A38-\u0A39\u0A59-\u0A5C\u0A5E\u0A72-\u0A74\u0A85-\u0A8D' + '\u0A8F-\u0A91\u0A93-\u0AA8\u0AAA-\u0AB0\u0AB2-\u0AB3\u0AB5-\u0AB9\u0ABD' + '\u0AD0\u0AE0-\u0AE1\u0B05-\u0B0C\u0B0F-\u0B10\u0B13-\u0B28\u0B2A-\u0B30' + '\u0B32-\u0B33\u0B35-\u0B39\u0B3D\u0B5C-\u0B5D\u0B5F-\u0B61\u0B71\u0B83' + '\u0B85-\u0B8A\u0B8E-\u0B90\u0B92-\u0B95\u0B99-\u0B9A\u0B9C\u0B9E-\u0B9F' + '\u0BA3-\u0BA4\u0BA8-\u0BAA\u0BAE-\u0BB9\u0C05-\u0C0C\u0C0E-\u0C10' + '\u0C12-\u0C28\u0C2A-\u0C33\u0C35-\u0C39\u0C60-\u0C61\u0C85-\u0C8C' + '\u0C8E-\u0C90\u0C92-\u0CA8\u0CAA-\u0CB3\u0CB5-\u0CB9\u0CBD\u0CDE' + '\u0CE0-\u0CE1\u0D05-\u0D0C\u0D0E-\u0D10\u0D12-\u0D28\u0D2A-\u0D39' + '\u0D60-\u0D61\u0D85-\u0D96\u0D9A-\u0DB1\u0DB3-\u0DBB\u0DBD\u0DC0-\u0DC6' + '\u0E01-\u0E30\u0E32-\u0E33\u0E40-\u0E46\u0E81-\u0E82\u0E84\u0E87-\u0E88' + '\u0E8A\u0E8D\u0E94-\u0E97\u0E99-\u0E9F\u0EA1-\u0EA3\u0EA5\u0EA7' + '\u0EAA-\u0EAB\u0EAD-\u0EB0\u0EB2-\u0EB3\u0EBD\u0EC0-\u0EC4\u0EC6' + '\u0EDC-\u0EDD\u0F00\u0F40-\u0F47\u0F49-\u0F6A\u0F88-\u0F8B\u1000-\u1021' + '\u1023-\u1027\u1029-\u102A\u1050-\u1055\u10A0-\u10C5\u10D0-\u10FA\u10FC' + '\u1100-\u1159\u115F-\u11A2\u11A8-\u11F9\u1200-\u1248\u124A-\u124D' + '\u1250-\u1256\u1258\u125A-\u125D\u1260-\u1288\u128A-\u128D\u1290-\u12B0' + '\u12B2-\u12B5\u12B8-\u12BE\u12C0\u12C2-\u12C5\u12C8-\u12D6\u12D8-\u1310' + '\u1312-\u1315\u1318-\u135A\u1380-\u138F\u13A0-\u13F4\u1401-\u166C' + '\u166F-\u1676\u1681-\u169A\u16A0-\u16EA\u1700-\u170C\u170E-\u1711' + '\u1720-\u1731\u1740-\u1751\u1760-\u176C\u176E-\u1770\u1780-\u17B3\u17D7' + '\u17DC\u1820-\u1877\u1880-\u18A8\u1900-\u191C\u1950-\u196D\u1970-\u1974' + '\u1980-\u19A9\u19C1-\u19C7\u1A00-\u1A16\u1D00-\u1DBF\u1E00-\u1E9B' + '\u1EA0-\u1EF9\u1F00-\u1F15\u1F18-\u1F1D\u1F20-\u1F45\u1F48-\u1F4D' + '\u1F50-\u1F57\u1F59\u1F5B\u1F5D\u1F5F-\u1F7D\u1F80-\u1FB4\u1FB6-\u1FBC' + '\u1FBE\u1FC2-\u1FC4\u1FC6-\u1FCC\u1FD0-\u1FD3\u1FD6-\u1FDB\u1FE0-\u1FEC' + '\u1FF2-\u1FF4\u1FF6-\u1FFC\u2071\u207F\u2090-\u2094\u2102\u2107' + '\u210A-\u2113\u2115\u2119-\u211D\u2124\u2126\u2128\u212A-\u212D' + '\u212F-\u2131\u2133-\u2139\u213C-\u213F\u2145-\u2149\u2C00-\u2C2E' + '\u2C30-\u2C5E\u2C80-\u2CE4\u2D00-\u2D25\u2D30-\u2D65\u2D6F\u2D80-\u2D96' + '\u2DA0-\u2DA6\u2DA8-\u2DAE\u2DB0-\u2DB6\u2DB8-\u2DBE\u2DC0-\u2DC6' + '\u2DC8-\u2DCE\u2DD0-\u2DD6\u2DD8-\u2DDE\u3005-\u3006\u3031-\u3035' + '\u303B-\u303C\u3041-\u3096\u309D-\u309F\u30A1-\u30FA\u30FC-\u30FF' + '\u3105-\u312C\u3131-\u318E\u31A0-\u31B7\u31F0-\u31FF\u3400-\u4DB5' + '\u4E00-\u9FBB\uA000-\uA48C\uA800-\uA801\uA803-\uA805\uA807-\uA80A' + '\uA80C-\uA822\uAC00-\uD7A3\uF900-\uFA2D\uFA30-\uFA6A\uFA70-\uFAD9' + '\uFB00-\uFB06\uFB13-\uFB17\uFB1D\uFB1F-\uFB28\uFB2A-\uFB36\uFB38-\uFB3C' + '\uFB3E\uFB40-\uFB41\uFB43-\uFB44\uFB46-\uFBB1\uFBD3-\uFD3D\uFD50-\uFD8F' + '\uFD92-\uFDC7\uFDF0-\uFDFB\uFE70-\uFE74\uFE76-\uFEFC\uFF21-\uFF3A' + '\uFF41-\uFF5A\uFF66-\uFFBE\uFFC2-\uFFC7\uFFCA-\uFFCF\uFFD2-\uFFD7' + '\uFFDA-\uFFDC',
        o = '\u0300-\u036F\u0483-\u0486\u0591-\u05B9\u05BB-\u05BD\u05BF' + '\u05C1-\u05C2\u05C4-\u05C5\u05C7\u0610-\u0615\u064B-\u065E\u0670' + '\u06D6-\u06DC\u06DF-\u06E4\u06E7-\u06E8\u06EA-\u06ED\u0711\u0730-\u074A' + '\u07A6-\u07B0\u0901-\u0903\u093C\u093E-\u094D\u0951-\u0954\u0962-\u0963' + '\u0981-\u0983\u09BC\u09BE-\u09C4\u09C7-\u09C8\u09CB-\u09CD\u09D7' + '\u09E2-\u09E3\u0A01-\u0A03\u0A3C\u0A3E-\u0A42\u0A47-\u0A48\u0A4B-\u0A4D' + '\u0A70-\u0A71\u0A81-\u0A83\u0ABC\u0ABE-\u0AC5\u0AC7-\u0AC9\u0ACB-\u0ACD' + '\u0AE2-\u0AE3\u0B01-\u0B03\u0B3C\u0B3E-\u0B43\u0B47-\u0B48\u0B4B-\u0B4D' + '\u0B56-\u0B57\u0B82\u0BBE-\u0BC2\u0BC6-\u0BC8\u0BCA-\u0BCD\u0BD7' + '\u0C01-\u0C03\u0C3E-\u0C44\u0C46-\u0C48\u0C4A-\u0C4D\u0C55-\u0C56' + '\u0C82-\u0C83\u0CBC\u0CBE-\u0CC4\u0CC6-\u0CC8\u0CCA-\u0CCD\u0CD5-\u0CD6' + '\u0D02-\u0D03\u0D3E-\u0D43\u0D46-\u0D48\u0D4A-\u0D4D\u0D57\u0D82-\u0D83' + '\u0DCA\u0DCF-\u0DD4\u0DD6\u0DD8-\u0DDF\u0DF2-\u0DF3\u0E31\u0E34-\u0E3A' + '\u0E47-\u0E4E\u0EB1\u0EB4-\u0EB9\u0EBB-\u0EBC\u0EC8-\u0ECD\u0F18-\u0F19' + '\u0F35\u0F37\u0F39\u0F3E-\u0F3F\u0F71-\u0F84\u0F86-\u0F87\u0F90-\u0F97' + '\u0F99-\u0FBC\u0FC6\u102C-\u1032\u1036-\u1039\u1056-\u1059\u135F' + '\u1712-\u1714\u1732-\u1734\u1752-\u1753\u1772-\u1773\u17B6-\u17D3\u17DD' + '\u180B-\u180D\u18A9\u1920-\u192B\u1930-\u193B\u19B0-\u19C0\u19C8-\u19C9' + '\u1A17-\u1A1B\u1DC0-\u1DC3\u20D0-\u20DC\u20E1\u20E5-\u20EB\u302A-\u302F' + '\u3099-\u309A\uA802\uA806\uA80B\uA823-\uA827\uFB1E\uFE00-\uFE0F' + '\uFE20-\uFE23',
        p = '\u0030-\u0039\u0660-\u0669\u06F0-\u06F9\u0966-\u096F\u09E6-\u09EF' + '\u0A66-\u0A6F\u0AE6-\u0AEF\u0B66-\u0B6F\u0BE6-\u0BEF\u0C66-\u0C6F' + '\u0CE6-\u0CEF\u0D66-\u0D6F\u0E50-\u0E59\u0ED0-\u0ED9\u0F20-\u0F29' + '\u1040-\u1049\u17E0-\u17E9\u1810-\u1819\u1946-\u194F\u19D0-\u19D9' + '\uFF10-\uFF19',
        q = n + o + m,
        r = p + '_',
        s = q + r,
        t = '[' + q + ']',
        u = '[' + s + ']',
        w = '[#\\uFF03]',
        x = w + '(' + u + '*:{0,1}' + t + u + '*)'
    return x
}

/**
 * ��讛膩頧柾tml����
 *
 * @param {object} nameMap - {userid1: name1, userid2: name2} @ 憿舐內userid頧㗇�酧ame
 *
 */
function rawDescriptionToHTML(data, nowrap, nameMap={}){
    if(!data) return '';

    var newStr = data.replace(hashMatch, '<a href="/s/%23$1/?m=film" hashtag>#$1</a>')
    // newStr = newStr.replace(atMatch, '<a href="/@$1?tab=myvideo" atuser="$2">@$1</a>');
    newStr = newStr.replace(atMatch, (match, at_userid, userid) => {
        const value = nameMap[userid] || at_userid;
        return `<a href="/@${at_userid}?tab=myvideo" atuser="${userid}">@${value}</a>`;
    })

    newStr = newStr.replace(urlRegex, (url) => {
        const rUrl = `/r/link.php?url=${url}`
        return `<a href="${rUrl}" target="_blank" rel="nofollow noreferrer" commitLink>${url}</a>`;
    })

    if(!nowrap){ //銝齿�𥡝��
        newStr = newStr.replace(/\n/g, "<br />");
    }
    if(Object.values(nameMap).length>0){
    }

    return newStr;
}

function rawDescriptionToMetatext(data){ //��讛膩頧厩�娍����
    if(!data) return '';

    var newStr = data.replace(hashMatch, '#$1')
    newStr = newStr.replace(atMatch, '@$1');
    newStr = newStr.replace(/\n/g, "");

    return newStr;
}

function secondFormat(second) {  //�偘�𦆮蝘埝彍頧� ��:蝘�
    var h = parseInt(second / 3600);
    var m = parseInt((second / 60 % 60));
    var s = parseInt((second % 60));
    if(m < 10) m = '0'+ m;
    if(s < 10) s = '0'+ s;
    return `${m}:${s}`;
}

function videoDateHandle(timestamp){ //��閧�敶梁��＊蝷箸𠯫���
    // 隞𠰴僑:���𠯫
    // �炏���:撟湔��𠯫
    const ISO = window.ISO_lang || 'en-sg';
    var nt = new Date(),
        nY = nt.getFullYear(),
        nM = nt.getMonth()+1,
        nD = nt.getDate()
    var vt = new Date(timestamp),
        vY = vt.getFullYear(),
        vM = vt.getMonth()+1,
        vD = vt.getDate()
    if(nY == vY){
        return vt.toLocaleString(ISO, {
                month: '2-digit',
                day: '2-digit',
            }).replaceAll('/','-')
    }else{
        return vt.toLocaleString(ISO, {
                year: 'numeric',
                month: '2-digit',
                day: '2-digit',
            }).replaceAll('/','-')
    }
}

function timestampToYMD(timestamp){ //����𤘪�頧㗇𠯫���僑蝧餉陌
    const ISO = window.ISO_i18n || 'en-sg';
    const t = new Date(timestamp)
    return t.toLocaleString(ISO, {
        dateStyle: 'medium',
    })
}

function isVerticalRatio(ratio){ //�ế�𪃾敶梁����凒瘞游像
    // �凒true:'cover', 璈剌alse: 'contain'
    // let ratio = this.videoList[this.currentVideoindex].meta.aspect_ratio
    if(!ratio) return false;
    if(ratio.indexOf(":") === -1) return false;
    const [w, h] = ratio.split(":")
    // return +w * 2 > +h && +w < +h
    return ((+w < +h) && (+h/+w>1.3) ) ? true: false;
}

function getWHRatio(ratio){ //��硋蔣����𥪯�见祝頝罸��
    if(!ratio) return {w:1, h:1};
    const [w, h] = ratio.split(":")
    return {w: w, h: h}
}

function randomString(length) { //analytics rand_id
    let result = ''
    const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789'
    const charactersLength = characters.length
    for (let i = 0; i < length; i++) {
      result += characters.charAt(Math.floor(Math.random() * charactersLength))
    }
    return result
}

function snedVideoEvent(videoId, method, referer){ //敶梁��偘�𦆮鈭衤辣
    let body = {
        method: method,
        video_id: videoId,
    }
    if(referer) { //��匧葆靘�皞𣂼銁��
        body.referer = referer
    }
    fetch(`/api/media_event.php`, {
        method: 'POST',
        body: JSON.stringify(body),
    })
}

const shareVideo = (type, url) => { //敶梁��冗蝢文�鈭�
    return new Promise((resolve, reject) => {
        if(type == 'copy'){
            navigator.clipboard.writeText(url).then(() => resolve())
        }else{
            url = encodeURIComponent(url)
            let nurl = ''
            switch(type){
                case 'line':
                    // nurl = `https://lineit.line.me/share/ui?text=${url}&url=${url}`;
                    nurl = `https://lineit.line.me/share/ui?url=${url}`;
                    break;
                case 'telegtam':
                    // nurl = `https://t.me/share/url?text=${url}&url=${url}`;
                    nurl = `https://t.me/share/url?url=${url}`;
                    break;
                case 'whatapp':
                    nurl = `https://wa.me/?text=${url}`;
                    break;
                case 'facebook':
                    nurl = `https://www.facebook.com/sharer/sharer.php?u=${url}`;
                    break;
                case 'email':
                    nurl = `mailto:?body=${url}&subject=${url}`;
                    break;
                // case 'instagram':
                //     break;
                // case 'messenger':
                //     nurl = `fb-messenger://share?app_id=123456789&link=${url}`;
                //     break;
            }
            if(nurl) window.open(nurl);
        }
    });
}

// ��閧�emoji摮𦯀葡���𠧧
// �枂���:https://juejin.cn/post/6844903970700263438
function getByteByBinary(binaryCode) {
    var byteLengthDatas = [0, 1, 2, 3, 4];
    var len = byteLengthDatas[Math.ceil(binaryCode.length / 8)];
    return len;
}
function getByteByHex(hexCode) {
    return getByteByBinary(parseInt(hexCode, 16).toString(2));
}
function substringByByte(str, maxLength) {
    var result = "";
    var flag = false;
    var len = 0;
    var length = 0;
    var length2 = 0;
    for (var i = 0; i < str.length; i++) {
        var code = str.codePointAt(i).toString(16);
        if (code.length > 4) {
            i++;
            if ((i + 1) < str.length) {
                flag = str.codePointAt(i + 1).toString(16) == "200d";
            }
        }
        if (flag) {
            len += getByteByHex(code);
            if (i == str.length - 1) {
                length += len;
                if (length <= maxLength) {
                    result += str.substr(length2, i - length2 + 1);
                } else {
                    break
                }
            }
        } else {
            if (len != 0) {
                length += len;
                length += getByteByHex(code);
                if (length <= maxLength) {
                    result += str.substr(length2, i - length2 + 1);
                    length2 = i + 1;
                } else {
                    break
                }
                len = 0;
                continue;
            }
            length += getByteByHex(code);
            if (length <= maxLength) {
                if (code.length <= 4) {
                    result += str[i]
                } else {
                    result += str[i - 1] + str[i]
                }
                length2 = i + 1;
            } else {
                break
            }
        }
    }
    return result;
}

// ����𥕦�刻攟撟�
function toggleFullScreen(target) {
    const fullTarget = target || document.documentElement;
    const video = fullTarget.getElementsByTagName('video')[0]    
    if (isiOS()) { //ios�刻攟撟閧���隞嗥�漓ideo 銝齿糓body 銝虫蝙�鍂safari��毺��偘�𦆮�膥
        // Toggle fullscreen in Safari for ios
        video.webkitEnterFullScreen()
        return true
    }else if (!document.fullscreenElement &&    // alternative standard method
        !document.mozFullScreenElement && !document.webkitFullscreenElement && !document.msFullscreenElement ) {  // current working methods
      if (fullTarget.requestFullscreen) {
        fullTarget.requestFullscreen();
      } else if (fullTarget.msRequestFullscreen) {
        fullTarget.msRequestFullscreen();
      } else if (fullTarget.mozRequestFullScreen) {
        fullTarget.mozRequestFullScreen();
      } else if (fullTarget.webkitRequestFullscreen) {
        fullTarget.webkitRequestFullscreen(); //Element.ALLOW_KEYBOARD_INPUT
      }
      return true
    } else {
      if (document.exitFullscreen) {
        document.exitFullscreen();
      } else if (document.msExitFullscreen) {
        document.msExitFullscreen();
      } else if (document.mozCancelFullScreen) {
        document.mozCancelFullScreen();
      } else if (document.webkitExitFullscreen) {
        document.webkitExitFullscreen();
      }
      return false
    }
  }

/**
 * 敶梁����𢒰蝮桀�㚚�豢��
 * @param {String} el - �豢��膥摮𦯀葡
 * @param {String|Object} [videoSource] - 敶梁���皞�(蝬脣���𡝗�娍��)
 * @param {Number} [initTime=0] - ��见�讠�埝彍
 * @param {Number} [thumbnailCount=9] - �⏛��𡝗彍���
 */
function videoThumbnailsSelector(el, videoSource, initTime, thumbnailCount){
    this.initialX = 0
    this.initialY = 0
    this.offsetX = 0
    this.offsetY = 0
    this.dragElVideoCurrentTime = 0
    this.moveing = false
    this.loadingFlag = false
    this.el = document.querySelector(el);
    if(!this.el) return console.error(`[videoThumbnailsSelector] ${el} not find.`);
    this.dragEl = null;
    this.videoDuration = 0; //敶梁��蜇蝘埝彍
    this.init()
    this.load(videoSource, initTime, thumbnailCount)
}
videoThumbnailsSelector.prototype.init = function(){ //��嘥�见�𣇉�摰𡁜�蓥�衤辣
    // https://www.kirupa.com/html5/drag.htm
    this.initialX = 0
    this.initialY = 0
    this.offsetX = 0
    this.offsetY = 0
    this.moveing = false
    this.loadingFlag = false

    this.resetEvent = new Event('reset');

    this.el.addEventListener('reset', e => {
        console.log('��滨蔭');
        this.initialX = 0
        this.initialY = 0
        this.offsetX = 0
        this.offsetY = 0
        this.moveing = false
        this.loadingFlag = false
    });

    this.el.addEventListener('mousedown', e => {
        this.initialX = e.clientX - this.offsetX
        this.initialY = e.clientY - this.offsetY
        if(e.target === this.dragEl || e.target.parentNode === this.dragEl || e.target.parentNode === this.el){
            this.moveing = true
        }
        let clickX = e.pageX - e.currentTarget.offsetLeft
        let clickY = e.pageY - e.currentTarget.offsetTop
        this.offsetX = clickX - (this.dragEl.offsetWidth/2)
        this.offsetY = clickY - (this.dragEl.offsetHeight/2)
        this.initialX = this.initialX - this.offsetX
        this.initialY = this.initialX - this.offsetY
        setDragPosition()
        this.initialX = e.clientX - this.offsetX
        this.initialY = e.clientY - this.offsetY
    })
    this.el.addEventListener('mousemove', e => {
        if(this.dragEl && this.moveing){
            e.preventDefault()
            let currentX = e.clientX
            let currentY = e.clientY
            this.offsetX = currentX - this.initialX
            this.offsetY = currentY - this.initialY
            setDragPosition()
        }
    })
    this.el.addEventListener('click', e => {
        if(this.dragEl && !this.moveing){
            e.preventDefault()
            let clickX = e.pageX - e.currentTarget.offsetLeft
            let clickY = e.pageY - e.currentTarget.offsetTop
            this.offsetX = clickX - (this.dragEl.offsetWidth/2)
            this.offsetY = clickY - (this.dragEl.offsetHeight/2)
            setDragPosition()
        }
        this.moveing = false
    })

    const setDragPosition = () => {
        // ��硋�烾�羓��
        let startX = 0
        let endX = this.el.clientWidth - this.dragEl.offsetWidth;
        //��𣂼��蘨�銁蝭���滚�抒宏���
        if(this.offsetX < startX) this.offsetX = startX;
        if(this.offsetX > endX) this.offsetX = endX;
        // 閮��烾�脣漲%
        let progressRate = this.offsetX / endX
        this.dragEl.style.transform = `translate3d(${this.offsetX}px, 0px, 0px) scaleX(1.1) scaleY(1.1)`
        this.dragEl.querySelector('video').currentTime = this.videoDuration * progressRate
        this.dragElVideoCurrentTime = this.dragEl.querySelector('video').currentTime
    }
    // this.el.addEventListener('mouseleave', e => {
    //     moveing = false
    // })
}
videoThumbnailsSelector.prototype.load = function(source, initTime = 0, thumbnailCount = 9){ //頛匧�亥����
    if(!source) return;
    this.loadingFlag = true
    this.el.innerHTML = ''
    let loading = document.createElement('div')
    let loadingI = document.createElement('i')
        loading.style.height = '100%'
        loading.style.width = '62px'
        loading.style.order = 1
        loading.classList.add('bicon-loading')
        loading.appendChild(loadingI)
        this.el.appendChild(loading)
    this.createDrag(source, initTime)
    getAverageThumbnails(this, source, thumbnailCount, (blobImg)=>{
        if(this.loadingFlag){
            const IMG = document.createElement('img');
            IMG.src = URL.createObjectURL(blobImg)
            IMG.draggable = false
            this.el.appendChild(IMG);
        }
    },()=>{
        loading.remove()
    })
}
videoThumbnailsSelector.prototype.clear = function(){ //皜�蝛粹�滨蔭
    this.el.innerHTML = '<div class="empty"></div>'
    this.el.dispatchEvent(this.resetEvent)
}
videoThumbnailsSelector.prototype.getTime = function(){ //��𡝗����
    let time = 0;
    if(this.dragEl.querySelector('video')){
        time = this.dragEl.querySelector('video').currentTime
    }
    return time
}
videoThumbnailsSelector.prototype.createDrag = function(file, initTime){ //�肟撱粹�鞱汗皛穃�訫��
    const dragEl = document.createElement('DIV')
    dragEl.classList.add('draggable-element')
    dragEl.style.transform = 'translate3d(0px, 0px, 0px) scaleX(1.1) scaleY(1.1)'

    const dragPreviewVideo = document.createElement('VIDEO')
    if(typeof file === 'string'){
        dragPreviewVideo.src = file
    }else if(typeof file === 'object'){
        dragPreviewVideo.src = URL.createObjectURL(file)
    }
    dragPreviewVideo.currentTime = initTime
    dragPreviewVideo.crossOrigin = "anonymous"
    dragPreviewVideo.addEventListener('loadedmetadata', e =>{
        this.videoDuration = dragPreviewVideo.duration
        if(dragPreviewVideo.duration >= initTime){ //韏瑕�衤�滨蔭
            let progressRate = initTime / dragPreviewVideo.duration
            let wrapWidth = this.el.offsetWidth - 90
            this.offsetX = wrapWidth * progressRate
            // ��硋�烾�羓��
            let startX = 0
            let endX = this.el.clientWidth - this.dragEl.offsetWidth;
            //��𣂼��蘨�銁蝭���滚�抒宏���
            if(this.offsetX < startX) this.offsetX = startX;
            if(this.offsetX > endX) this.offsetX = endX;
            dragEl.style.transform = `translate3d(${this.offsetX}px, 0px, 0px) scaleX(1.1) scaleY(1.1)`
        }
    })
    dragPreviewVideo.load();

    dragEl.appendChild(dragPreviewVideo)
    this.el.appendChild(dragEl)
    this.dragEl = dragEl
}
function getAverageThumbnails(self, file, getCount, callback, callbackEnd=''){
    return new Promise((resolve, reject) => {
        getCount = getCount-1; //��敺䔶�撘萇鍂敶梁���𣂼偏
        const ThumbnailsVideo = document.createElement('video');
        if(typeof file === 'string'){
            ThumbnailsVideo.src = file
        }else if(typeof file === 'object'){
            ThumbnailsVideo.src = URL.createObjectURL(file)
        }
        ThumbnailsVideo.crossOrigin = "anonymous"
        ThumbnailsVideo.addEventListener('loadedmetadata', async function(e){
            var videoTime = ThumbnailsVideo.duration; //敶梁��蜇�𩑈摨�
            var averageTime = videoTime/getCount; //撟喳���撘菜����
            for(let i = 0; i< getCount; i++){
                if(!self.loadingFlag){
                    resolve()
                    return
                }
                //��𣇉洵i撘�
                callback(await getVideoCover(ThumbnailsVideo, i * averageTime))
            }
            //��𡝗�敺䔶�撘�
            callback(await getVideoCover(ThumbnailsVideo, videoTime))
            ThumbnailsVideo.removeAttribute('src'); // 皜�蝛�
            ThumbnailsVideo.load();
            ThumbnailsVideo.remove();
            callbackEnd();
            resolve()
        })
        ThumbnailsVideo.load();
    });
}

function getVideoCover(VIDEO, seekTo = 0.0){
    return new Promise(function(resolve, reject) {
      setTimeout(function() {
        VIDEO.currentTime = seekTo;
      }, 200);
      VIDEO.addEventListener('seeked', function(e){
        var canvas = document.createElement("canvas");
        canvas.width = VIDEO.videoWidth;
        canvas.height = VIDEO.videoHeight;
        var ctx = canvas.getContext("2d");
        ctx.drawImage(VIDEO, 0, 0, canvas.width, canvas.height);
        ctx.canvas.toBlob(blob => {
            resolve(blob);
        }, "image/jpeg", 0.75 /* ��鞈� */);
      })
    })
}


function getGAEventVideoLabel(videoData){
    var videoLabel = videoData.name + '-'
    if(videoData.video_title){
        videoLabel += videoData.video_title + '&'
    }
    videoLabel += videoData.description
    videoLabel = videoLabel.slice(0, 20);
    return videoLabel
}

function MD5(d){var r = M(V(Y(X(d),8*d.length)));return r.toLowerCase()};function M(d){for(var _,m="0123456789ABCDEF",f="",r=0;r<d.length;r++)_=d.charCodeAt(r),f+=m.charAt(_>>>4&15)+m.charAt(15&_);return f}function X(d){for(var _=Array(d.length>>2),m=0;m<_.length;m++)_[m]=0;for(m=0;m<8*d.length;m+=8)_[m>>5]|=(255&d.charCodeAt(m/8))<<m%32;return _}function V(d){for(var _="",m=0;m<32*d.length;m+=8)_+=String.fromCharCode(d[m>>5]>>>m%32&255);return _}function Y(d,_){d[_>>5]|=128<<_%32,d[14+(_+64>>>9<<4)]=_;for(var m=1732584193,f=-271733879,r=-1732584194,i=271733878,n=0;n<d.length;n+=16){var h=m,t=f,g=r,e=i;f=md5_ii(f=md5_ii(f=md5_ii(f=md5_ii(f=md5_hh(f=md5_hh(f=md5_hh(f=md5_hh(f=md5_gg(f=md5_gg(f=md5_gg(f=md5_gg(f=md5_ff(f=md5_ff(f=md5_ff(f=md5_ff(f,r=md5_ff(r,i=md5_ff(i,m=md5_ff(m,f,r,i,d[n+0],7,-680876936),f,r,d[n+1],12,-389564586),m,f,d[n+2],17,606105819),i,m,d[n+3],22,-1044525330),r=md5_ff(r,i=md5_ff(i,m=md5_ff(m,f,r,i,d[n+4],7,-176418897),f,r,d[n+5],12,1200080426),m,f,d[n+6],17,-1473231341),i,m,d[n+7],22,-45705983),r=md5_ff(r,i=md5_ff(i,m=md5_ff(m,f,r,i,d[n+8],7,1770035416),f,r,d[n+9],12,-1958414417),m,f,d[n+10],17,-42063),i,m,d[n+11],22,-1990404162),r=md5_ff(r,i=md5_ff(i,m=md5_ff(m,f,r,i,d[n+12],7,1804603682),f,r,d[n+13],12,-40341101),m,f,d[n+14],17,-1502002290),i,m,d[n+15],22,1236535329),r=md5_gg(r,i=md5_gg(i,m=md5_gg(m,f,r,i,d[n+1],5,-165796510),f,r,d[n+6],9,-1069501632),m,f,d[n+11],14,643717713),i,m,d[n+0],20,-373897302),r=md5_gg(r,i=md5_gg(i,m=md5_gg(m,f,r,i,d[n+5],5,-701558691),f,r,d[n+10],9,38016083),m,f,d[n+15],14,-660478335),i,m,d[n+4],20,-405537848),r=md5_gg(r,i=md5_gg(i,m=md5_gg(m,f,r,i,d[n+9],5,568446438),f,r,d[n+14],9,-1019803690),m,f,d[n+3],14,-187363961),i,m,d[n+8],20,1163531501),r=md5_gg(r,i=md5_gg(i,m=md5_gg(m,f,r,i,d[n+13],5,-1444681467),f,r,d[n+2],9,-51403784),m,f,d[n+7],14,1735328473),i,m,d[n+12],20,-1926607734),r=md5_hh(r,i=md5_hh(i,m=md5_hh(m,f,r,i,d[n+5],4,-378558),f,r,d[n+8],11,-2022574463),m,f,d[n+11],16,1839030562),i,m,d[n+14],23,-35309556),r=md5_hh(r,i=md5_hh(i,m=md5_hh(m,f,r,i,d[n+1],4,-1530992060),f,r,d[n+4],11,1272893353),m,f,d[n+7],16,-155497632),i,m,d[n+10],23,-1094730640),r=md5_hh(r,i=md5_hh(i,m=md5_hh(m,f,r,i,d[n+13],4,681279174),f,r,d[n+0],11,-358537222),m,f,d[n+3],16,-722521979),i,m,d[n+6],23,76029189),r=md5_hh(r,i=md5_hh(i,m=md5_hh(m,f,r,i,d[n+9],4,-640364487),f,r,d[n+12],11,-421815835),m,f,d[n+15],16,530742520),i,m,d[n+2],23,-995338651),r=md5_ii(r,i=md5_ii(i,m=md5_ii(m,f,r,i,d[n+0],6,-198630844),f,r,d[n+7],10,1126891415),m,f,d[n+14],15,-1416354905),i,m,d[n+5],21,-57434055),r=md5_ii(r,i=md5_ii(i,m=md5_ii(m,f,r,i,d[n+12],6,1700485571),f,r,d[n+3],10,-1894986606),m,f,d[n+10],15,-1051523),i,m,d[n+1],21,-2054922799),r=md5_ii(r,i=md5_ii(i,m=md5_ii(m,f,r,i,d[n+8],6,1873313359),f,r,d[n+15],10,-30611744),m,f,d[n+6],15,-1560198380),i,m,d[n+13],21,1309151649),r=md5_ii(r,i=md5_ii(i,m=md5_ii(m,f,r,i,d[n+4],6,-145523070),f,r,d[n+11],10,-1120210379),m,f,d[n+2],15,718787259),i,m,d[n+9],21,-343485551),m=safe_add(m,h),f=safe_add(f,t),r=safe_add(r,g),i=safe_add(i,e)}return Array(m,f,r,i)}function md5_cmn(d,_,m,f,r,i){return safe_add(bit_rol(safe_add(safe_add(_,d),safe_add(f,i)),r),m)}function md5_ff(d,_,m,f,r,i,n){return md5_cmn(_&m|~_&f,d,_,r,i,n)}function md5_gg(d,_,m,f,r,i,n){return md5_cmn(_&f|m&~f,d,_,r,i,n)}function md5_hh(d,_,m,f,r,i,n){return md5_cmn(_^m^f,d,_,r,i,n)}function md5_ii(d,_,m,f,r,i,n){return md5_cmn(m^(_|~f),d,_,r,i,n)}function safe_add(d,_){var m=(65535&d)+(65535&_);return(d>>16)+(_>>16)+(m>>16)<<16|65535&m}function bit_rol(d,_){return d<<_|d>>>32-_}