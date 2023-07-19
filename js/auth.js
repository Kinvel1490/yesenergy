var layout = 'popup';
var type;
window.addEventListener('DOMContentLoaded', ()=>{
    document.querySelector('#soc_auth').addEventListener('click', e=>{
        e = e || window.event;
        console.log(e.target);
        if(e.target === document.querySelector('.vklogin>img')){type = 'vk'; createForm ('https://oauth.vk.com/authorize', '51697826', 'http://localhost/add', null); return;}
        if(e.target === document.querySelector('.oklogin>img')){
            layout = 'w';
            type = 'ok';
            createForm ('https://connect.ok.ru/oauth/authorize', '512002026050', 'http://localhost/add', 'VALUABLE_ACCESS');
        }
    });

})

function createForm (url, cl_id, redirect, scope) {
    var parent = document.querySelector('#soc_auth');
    var form = document.createElement('form');
    form.setAttribute('action', url);
    form.setAttribute('method', "GET");
    form.setAttribute('id', "auth");
    var CID = document.createElement('input');
    CID.setAttribute('type', 'text');
    CID.setAttribute('name', 'client_id');
    CID.setAttribute('value', cl_id);
    var redir = document.createElement('input');
    redir.setAttribute('type', 'text');
    redir.setAttribute('name', 'redirect_uri');
    redir.setAttribute('value', redirect);
    var display = document.createElement('input');
    display.setAttribute('type', 'text');
    display.setAttribute('name', 'display');
    display.setAttribute('value', layout);
    var resp = document.createElement('input');
    resp.setAttribute('type', 'text');
    resp.setAttribute('name', 'response_type');
    resp.setAttribute('value', 'code');
    var state = document.createElement('input');
    state.setAttribute('type', 'text');
    state.setAttribute('name', 'state');
    state.setAttribute('value', type);
    if (scope) {
        var scopeAttr = document.createElement('input');
        scopeAttr.setAttribute('type', 'text');
        scopeAttr.setAttribute('name', 'scope');
        scopeAttr.setAttribute('value', scope);
    }
    var sub = document.createElement('submit');
    parent.appendChild(form);
    form.appendChild(CID);
    form.appendChild(redir);
    form.appendChild(display);
    form.appendChild(resp);
    form.appendChild(state);
    form.appendChild(sub);
    form.submit();
}