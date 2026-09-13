<?php
require_once '../bootstrap/view.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Раздел — HARD Roleplay</title>
<link rel="icon" type="image/png" href="/logo.png?v=1">
<link rel="stylesheet" href="/pages.css">
<link rel="stylesheet" href="/toggle.css">
<link rel="stylesheet" href="/css/login.css">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;900&display=swap" rel="stylesheet">
<style>
:root{
    --ft-text:#e9e9e9; --ft-title:#fff; --ft-desc:#888; --ft-head-bg:#141414; --ft-head-border:#2a2a2a;
    --ft-hint-bg:#1a1010; --ft-hint-border:#4a1a1a; --ft-hint-text:#c7c7c7;
    --ft-form-bg:#101010; --ft-form-border:#2a2a2a; --ft-input-bg:#181818; --ft-input-border:#2f2f2f;
    --ft-list-bg:#101010; --ft-list-border:#2a2a2a; --ft-item-border:#1f1f1f;
    --ft-item-title:#fff; --ft-item-meta:#666; --ft-item-fields:#9a9a9a; --ft-item-fields-b:#cfcfcf;
    --ft-item-reply:#9a9a9a; --ft-item-reply-b:#e21d2f; --ft-empty-text:#666;
}
body.light-theme{
    --ft-text:#1a1a1a; --ft-title:#1a1a1a; --ft-desc:#777; --ft-head-bg:#f5f5f5; --ft-head-border:#dcdcdc;
    --ft-hint-bg:#fff5f5; --ft-hint-border:#f0c0c0; --ft-hint-text:#555;
    --ft-form-bg:#fff; --ft-form-border:#dcdcdc; --ft-input-bg:#f5f5f5; --ft-input-border:#d5d5d5;
    --ft-list-bg:#fff; --ft-list-border:#dcdcdc; --ft-item-border:#e5e5e5;
    --ft-item-title:#1a1a1a; --ft-item-meta:#888; --ft-item-fields:#555; --ft-item-fields-b:#1a1a1a;
    --ft-item-reply:#555; --ft-item-reply-b:#e21d2f; --ft-empty-text:#999;
}
.topic-page{ width:100%;display:flex;justify-content:center;padding:40px 20px 60px;box-sizing:border-box; }
.topic-page .topic{ width:min(1100px,96vw);font-family:'Montserrat',Arial,sans-serif;color:var(--ft-text);transition:color .35s ease; }
.topic-page .topic-back{ display:inline-flex;align-items:center;gap:8px;color:var(--ft-desc);text-decoration:none;font-size:12px;margin-bottom:16px;transition:color .15s; }
.topic-page .topic-back:hover{ color:#e21d2f; }
.topic-page .topic-back svg{ width:14px;height:14px;flex-shrink:0;stroke:currentColor;fill:none;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;display:block; }
.topic-page .topic-head{ background:var(--ft-head-bg);border:1px solid var(--ft-head-border);border-radius:10px;padding:20px 22px;margin-bottom:20px;transition:background .35s ease,border-color .35s ease; }
.topic-page .topic-head h1{ font-size:22px;margin:0 0 6px;color:var(--ft-title);transition:color .35s ease; }
.topic-page .topic-head p{ margin:0;color:var(--ft-desc);font-size:13px;transition:color .35s ease; }
.topic-page .topic-actions{ display:flex;justify-content:flex-end;margin-bottom:14px; }
.topic-page .btn-new{ background:#e21d2f;color:#fff;border:none;padding:10px 18px;border-radius:6px;font-weight:700;font-size:13px;cursor:pointer;letter-spacing:.05em;font-family:inherit; }
.topic-page .btn-new:hover{ background:#ff2a3d; }
.topic-page .login-hint{ background:var(--ft-hint-bg);border:1px solid var(--ft-hint-border);border-radius:10px;padding:16px 20px;margin-bottom:22px;font-size:13px;color:var(--ft-hint-text);display:flex;align-items:center;justify-content:space-between;gap:16px;flex-wrap:wrap;transition:background .35s ease,border-color .35s ease,color .35s ease; }
.topic-page .login-hint button{ background:#e21d2f;color:#fff;padding:8px 16px;border:none;border-radius:6px;font-weight:700;font-size:12px;letter-spacing:.05em;cursor:pointer;font-family:inherit; }
.topic-page .login-hint button:hover{ background:#ff2a3d; }
.topic-page .topic-form{ background:var(--ft-form-bg);border:1px solid var(--ft-form-border);border-radius:10px;padding:22px;margin-bottom:22px;display:none;transition:background .35s ease,border-color .35s ease; }
.topic-page .topic-form.open{ display:block; }
.topic-page .topic-form h3{ margin:0 0 16px;font-size:15px;color:var(--ft-title);transition:color .35s ease; }
.topic-page .form-row{ margin-bottom:14px; }
.topic-page .form-row label{ display:block;font-size:12px;color:var(--ft-desc);margin-bottom:6px;transition:color .35s ease; }
.topic-page .form-row input,
.topic-page .form-row textarea{ width:100%;box-sizing:border-box;background:var(--ft-input-bg);border:1px solid var(--ft-input-border);color:var(--ft-text);padding:10px 12px;border-radius:6px;font-family:inherit;font-size:13px;outline:none;transition:background .35s ease,border-color .35s ease,color .35s ease; }
.topic-page .form-row input:focus,
.topic-page .form-row textarea:focus{ border-color:#e21d2f; }
.topic-page .form-row textarea{ min-height:110px;resize:vertical; }
.topic-page .form-submit{ background:#1d4fd6;color:#fff;border:none;padding:10px 18px;border-radius:6px;font-weight:700;font-size:13px;cursor:pointer;font-family:inherit; }
.topic-page .form-submit:hover{ background:#2a6df4; }
.topic-page .topic-list{ background:var(--ft-list-bg);border:1px solid var(--ft-list-border);border-radius:10px;overflow:hidden;transition:background .35s ease,border-color .35s ease; }
.topic-page .topic-item{ padding:16px 22px;border-bottom:1px solid var(--ft-item-border);transition:border-color .35s ease; }
.topic-page .topic-item:last-child{ border-bottom:none; }
.topic-page .ti-title{ font-size:14px;color:var(--ft-item-title);font-weight:700;transition:color .35s ease; }
.topic-page .ti-meta{ font-size:11px;color:var(--ft-item-meta);margin-top:4px;transition:color .35s ease; }
.topic-page .ti-fields{ font-size:12px;color:var(--ft-item-fields);margin-top:8px;line-height:1.6;transition:color .35s ease; }
.topic-page .ti-fields b{ color:var(--ft-item-fields-b); }
.topic-page .ti-replies{ margin-top:12px;border-left:2px solid var(--ft-item-border);padding-left:12px;transition:border-color .35s ease; }
.topic-page .ti-reply{ font-size:12px;color:var(--ft-item-reply);margin-bottom:8px;transition:color .35s ease; }
.topic-page .ti-reply b{ color:var(--ft-item-reply-b); }
.topic-page .topic-empty{ padding:30px;text-align:center;color:var(--ft-empty-text);font-size:13px;transition:color .35s ease; }
</style>
</head>
<body>
<div class="main-bg"></div>
<div class="main-bg-overlay"></div>

<?php renderHeader(); ?>

<div class="topic-page">
<div class="topic">
<a href="/forum" class="topic-back">
<svg viewBox="0 0 24 24"><polyline points="15 18 9 12 15 6"></polyline></svg>
Назад к форуму
</a>

<div class="topic-head">
<h1 id="topic-title">Загрузка…</h1>
<p id="topic-desc"></p>
</div>

<div class="topic-actions" id="actions-box" style="display:none;">
<button class="btn-new" id="btn-new">+ Создать тему</button>
</div>

<div class="login-hint" id="login-hint" style="display:none;">
<span>Чтобы создать тему, войдите в аккаунт.</span>
<button id="open-login-hint">ВОЙТИ</button>
</div>

<div class="topic-form" id="topic-form">
<h3 id="form-title">Новая тема</h3>
<form id="topic-form-el">
<div id="form-fields"></div>
<button type="submit" class="form-submit">Отправить</button>
</form>
</div>

<div class="topic-list" id="topic-list"></div>
</div>
</div>

<footer class="main-footer">
<div class="footer-brand"><span>HARD</span><span class="footer-divider">|</span><span>HOUSTON</span></div>
</footer>

<?php renderLogin(); ?>

<script src="/toggle.js"></script>
<script src="/js/login.js"></script>

<script id="forum-data" type="application/json">
[
  {"id":"complaints-players","title":"Жалобы на игроков","desc":"Подача жалоб на игроков проекта","formTitle":"Жалоба на игрока","formFields":[{"name":"nick","label":"Ник нарушителя","type":"text","required":true},{"name":"rule","label":"Пункт правил","type":"text","required":true},{"name":"desc","label":"Описание ситуации","type":"textarea","required":true},{"name":"proof","label":"Доказательства (ссылка)","type":"text","required":true}]},
  {"id":"complaints-admins","title":"Жалобы на администрацию","desc":"Подача жалоб на администрацию проекта","formTitle":"Жалоба на администратора","formFields":[{"name":"nick","label":"Ник администратора","type":"text","required":true},{"name":"desc","label":"Описание ситуации","type":"textarea","required":true},{"name":"proof","label":"Доказательства (ссылка)","type":"text","required":true}]},
  {"id":"complaints-leaders","title":"Жалобы на лидеров фракций","desc":"Подача жалоб на лидеров фракций","formTitle":"Жалоба на лидера фракции","formFields":[{"name":"fraction","label":"Фракция","type":"text","required":true},{"name":"nick","label":"Ник лидера","type":"text","required":true},{"name":"desc","label":"Описание ситуации","type":"textarea","required":true},{"name":"proof","label":"Доказательства (ссылка)","type":"text","required":true}]},
  {"id":"questions","title":"Вопросы","desc":"Здесь задают вопросы по игре и получают ответы","formTitle":"Новый вопрос","formFields":[{"name":"title","label":"Тема вопроса","type":"text","required":true},{"name":"desc","label":"Ваш вопрос","type":"textarea","required":true}]},
  {"id":"bugs","title":"Баги","desc":"Сообщения о найденных багах и ошибках","formTitle":"Баг-репорт","formFields":[{"name":"title","label":"Краткое описание бага","type":"text","required":true},{"name":"steps","label":"Как воспроизвести","type":"textarea","required":true},{"name":"proof","label":"Скриншот / видео (ссылка)","type":"text","required":false}]}
]
</script>

<script>
(function(){
"use strict";
var STORAGE_KEY='hh_forum_threads';
var USERS_KEY='hh_users';
var SESSION_KEY='hh_user';
function loadThreads(){try{return JSON.parse(localStorage.getItem(STORAGE_KEY))||{};}catch(e){return{};}}
function saveThreads(t){localStorage.setItem(STORAGE_KEY,JSON.stringify(t));}
function loadUsers(){try{return JSON.parse(localStorage.getItem(USERS_KEY))||{};}catch(e){return{};}}
function saveUsers(u){localStorage.setItem(USERS_KEY,JSON.stringify(u));}

var currentUser=null;
try{currentUser=JSON.parse(localStorage.getItem(SESSION_KEY)||'null');}catch(e){}
var isLogged=!!currentUser;

var data=JSON.parse(document.getElementById('forum-data').textContent);
var params=new URLSearchParams(location.search);
var id=params.get('id');
var cat=null;
for(var i=0;i<data.length;i++){if(data[i].id===id){cat=data[i];break;}}

var actionsBox=document.getElementById('actions-box');
var loginHint=document.getElementById('login-hint');
var formBox=document.getElementById('topic-form');
var titleEl=document.getElementById('topic-title');
var descEl=document.getElementById('topic-desc');
var listRoot=document.getElementById('topic-list');

function esc(s){return String(s).replace(/[&<>"']/g,function(c){return({'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#39;'})[c];});}

if(!cat){
  titleEl.textContent='Выберите раздел';
  descEl.textContent='Откройте нужный раздел на главной странице форума.';
  actionsBox.style.display='none';
  loginHint.style.display='none';
  listRoot.innerHTML=data.map(function(c){
    return '<a class="topic-item" href="/forum/topic.php?id='+encodeURIComponent(c.id)+'" style="display:block;text-decoration:none;color:inherit;"><div class="ti-title">'+esc(c.title)+'</div><div class="ti-meta">'+esc(c.desc)+'</div></a>';
  }).join('');
} else {
  document.title=cat.title+' — HARD Roleplay';
  titleEl.textContent=cat.title;
  descEl.textContent=cat.desc;
  document.getElementById('form-title').textContent=cat.formTitle||'Новая тема';

  var fieldsRoot=document.getElementById('form-fields');
  (cat.formFields||[]).forEach(function(f){
    var row=document.createElement('div');
    row.className='form-row';
    var label=document.createElement('label');
    label.textContent=f.label+(f.required?' *':'');
    row.appendChild(label);
    var input;
    if(f.type==='textarea'){input=document.createElement('textarea');}
    else{input=document.createElement('input');input.type=f.type||'text';}
    input.name=f.name;
    if(f.required)input.required=true;
    row.appendChild(input);
    fieldsRoot.appendChild(row);
  });

  document.getElementById('btn-new').addEventListener('click',function(){
    if(!isLogged)return;
    formBox.classList.toggle('open');
  });

  document.getElementById('topic-form-el').addEventListener('submit',function(e){
    e.preventDefault();
    if(!isLogged){alert('Войдите в аккаунт.');return;}
    var fd=new FormData(e.target);
    var fields={};
    fd.forEach(function(v,k){fields[k]=v;});
    var title=cat.formTitle||'Новая тема';
    (cat.formFields||[]).forEach(function(f){if(f.name==='title'&&fields.title)title=fields.title;});
    var t=loadThreads();
    t[cat.id]=t[cat.id]||[];
    t[cat.id].push({title:title,author:currentUser.nick,date:new Date().toLocaleString('ru-RU'),fields:fields,replies:[]});
    saveThreads(t);
    formBox.classList.remove('open');
    e.target.reset();
    renderTopics();
  });

  renderTopics();
}

function refreshAuthUI(){
  if(isLogged){
    if(actionsBox)actionsBox.style.display='flex';
    if(loginHint)loginHint.style.display='none';
  } else {
    if(actionsBox)actionsBox.style.display='none';
    if(loginHint)loginHint.style.display='flex';
  }
}
refreshAuthUI();

function renderTopics(){
  if(!cat)return;
  var threads=loadThreads();
  var list=threads[cat.id]||[];
  if(!list.length){
    listRoot.innerHTML='<div class="topic-empty">Тем пока нет. '+(isLogged?'Создайте первую!':'Войдите, чтобы создать первую.')+'</div>';
    return;
  }
  var html='';
  list.forEach(function(t){
    var fieldsHtml='';
    if(t.fields){
      Object.keys(t.fields).forEach(function(k){
        var f=null;
        (cat.formFields||[]).forEach(function(x){if(x.name===k)f=x;});
        fieldsHtml+='<div><b>'+esc(f?f.label:k)+':</b> '+esc(t.fields[k])+'</div>';
      });
    }
    var repliesHtml='';
    (t.replies||[]).forEach(function(r){
      repliesHtml+='<div class="ti-reply"><b>'+esc(r.author)+'</b> · '+esc(r.date)+'<br>'+esc(r.text)+'</div>';
    });
    html+='<div class="topic-item">'+
      '<div class="ti-title">'+esc(t.title)+'</div>'+
      '<div class="ti-meta">Автор: '+esc(t.author)+' · '+esc(t.date)+'</div>'+
      (fieldsHtml?'<div class="ti-fields">'+fieldsHtml+'</div>':'')+
      (repliesHtml?'<div class="ti-replies">'+repliesHtml+'</div>':'')+
    '</div>';
  });
  listRoot.innerHTML=html;
}

var hintBtn = document.getElementById('open-login-hint');
if(hintBtn) hintBtn.addEventListener('click', function(){
    var btn = document.getElementById('openLoginBtn');
    if(btn) btn.click();
});
})();
</script>
</body>
</html>