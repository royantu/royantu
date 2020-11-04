<!DOCTYPE html>
	<html lang="en-US">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Log In &lsaquo; Priyanka Dhar &#8212; WordPress</title>
	<link rel='dns-prefetch' href='//s.w.org' />
<link rel='stylesheet' id='dashicons-css'  href='/wp-includes/css/dashicons.min.css?ver=5.5.3' media='all' />
<link rel='stylesheet' id='buttons-css'  href='/wp-includes/css/buttons.min.css?ver=5.5.3' media='all' />
<link rel='stylesheet' id='forms-css'  href='/wp-admin/css/forms.min.css?ver=5.5.3' media='all' />
<link rel='stylesheet' id='l10n-css'  href='/wp-admin/css/l10n.min.css?ver=5.5.3' media='all' />
<link rel='stylesheet' id='login-css'  href='/wp-admin/css/login.min.css?ver=5.5.3' media='all' />
    <style media="screen"  id="loginpress-style-wp-5-3">
      .login form .input, .login input[type=text],.login form input[type=checkbox]{
        border-radius: 0;
      }
      input[type=checkbox]:checked:before {
    	  content: url('data:image/svg+xml;utf8,<svg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20viewBox%3D%270%200%2020%2020%27><path%20d%3D%27M14.83%204.89l1.34.94-5.81%208.38H9.02L5.78%209.67l1.34-1.25%202.57%202.4z%27%20fill%3D%27%231e8cbe%27%2F><%2Fsvg>');
    	  margin: -0.25rem 0 0 -0.275rem !important;
      }
      .wp-core-ui #login .button-primary{
          margin-left: 0;
      }
      .admin-email__actions-primary .button:first-child {
          font: 400 15px "Roboto", sans-serif;
          color: #fff;
          height: auto;
          line-height: 20px !important;
          padding: 13px;
          padding-top: 13px;
          padding-bottom: 13px;
          width: 100%;
          text-align: center;
          background-color: #008ec2;
          border: 0;
          margin-bottom: 8px;
          border-radius: 5px;
      }
      .admin-email__actions-primary .button:first-child:hover {
          background-color: #008ec2;
      }
      .login form.admin-email-confirm-form {
          max-width: 360px;
          margin: 0 auto;
      }
      .login-action-confirm_admin_email #backtoblog a {
          color: #008ec2 !important;
      }
    </style>
    <style media="screen" id="loginpress-style">

    /*************************************************************
     * Plugin:      LoginPress - Customizing the WordPress Login.*
     * Description: LoginPress is the best Login Page Customizer *
     *              in WordPress which allows you to completely  *
     *              change the layout of login, register and     *
     *              forgot password forms.                       *
     * Author:      WPBrigade                                    *
     * visit:       https://wordpress.org/plugins/loginpress/    *
     *************************************************************/
    body.login {
      background-image: url(/wp-content/plugins/loginpress/img/bg.jpg);
      /*background-color: #ddd5c3;*/
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
      background-attachment: fixed;
    	display: table;
    	min-height: 100vh;
    	width: 100%;
    	padding: 0;
    }
    .header-wrapper{
    	/* display: table-row; */
    }
    #login{
    	margin-top: 2%;
    	background: #fff;
    	position: relative;
    	-webkit-border-radius: 5px;
    	-moz-border-radius: 5px;
    	-ms-border-radius: 5px;
    	-o-border-radius: 5px;
    	border-radius: 5px;
    	-webkit-box-shadow: 0 0 15px rgba(0,0,0,.8);
    	box-shadow: 0 0 15px rgba(0,0,0,.8);
      max-width: 350px;
    	padding: 26px 26px 6px 26px;
    	width: 100%;
    }
    .login form {
    	margin-top: 20px;
    	margin-left: 0;
    	padding: 0 24px 12px !important;
    	background: #fff;
    	-webkit-box-shadow: none;
    	box-shadow: none;
    }
    .login form .input, .login input[type="text"]{
    	height: 48px;
    	background: #fff;
    	-webkit-border-radius: 5px;
    	-moz-border-radius: 5px;
    	-ms-border-radius: 5px;
    	border-radius: 5px;
    	margin-bottom: 18px;
    	font: normal 15px "Roboto", sans-serif;
    	color: #7f7f7f;
    	border-color: #bdbdbd;
    	padding-left: 27px;
    	font-weight: normal;
    }
    #jetpack_protect_answer{
      padding-left: 0;
      text-align : center;
    }
    .login input[type="submit"] {
    	background: #fff;
    	color: #fff;
    	margin: 7px 0 7px;
    	height: 46px;
    	-webkit-border-radius: 5px;
    	-moz-border-radius: 5px;
    	-ms-border-radius: 5px;
    	border-radius: 5px;
    	font: normal 15px "Roboto", sans-serif;
    	color: #fff;
    	width: 100%;
	}
	.wp-core-ui.login .button-group.button-large .button,
	.wp-core-ui.login .button.button-large, .wp-core-ui.login .button-primary{
    	height: 46px;
    	line-height: 0;
    	background: #008ec2;
	}
	.wp-core-ui.login  .two-factor-email-resend .button{
		color: #444;
	}
    .login #nav {
    	text-align: center;
    }
    #login_error { display:block; }
    /*.message { display:none; }*/
    /*.custom-message {
    	-moz-border-radius:3px 3px 3px 3px;
    	border-style:solid;
    	border-width:1px;
    	margin:0 0 16px 8px;
    	padding:12px;
    }*/

    #backtoblog{
    	text-align: center;
    }
    .header-cell{
    	/* display: table-cell; */
    	height: 100px;
    }
    .loginHeaderMenu{
    	text-align: center;
    	position: relative;
    	z-index: 10;
    	list-style: none;
    	background: #333;

    }
    .loginHeaderMenu>ul>li{
    	display: inline-block;
    	vertical-align: top;
    	position: relative;
    	list-style: none;
    }
    .loginHeaderMenu>ul>li>a{
    	color: #fff;
    	text-transform: uppercase;
    	text-decoration: none;
    	font-size: 16px;
    	padding: 17px 20px;
    	display: inline-block;
    }
    .loginHeaderMenu>ul>li:hover>a{
    	background: #4CAF50;
    	color: #fff;
    }
    .loginHeaderMenu>ul>li>ul{
    	position: absolute;
    	width: 200px;
    	padding: 0;
    	top: 100%;
    	left: 0;
    	background: #fff;
    	list-style: none;
    	text-align: left;
    	border-radius: 0 0 5px 5px;
    	-webkit-box-shadow: 0px 5px 10px -1px rgba(0,0,0,0.31);
    	-moz-box-shadow: 0px 5px 10px -1px rgba(0,0,0,0.31);
    	box-shadow: 0px 5px 10px -1px rgba(0,0,0,0.31);
    	overflow: hidden;
    	opacity: 0;
    	visibility: hidden;
    }
    .loginHeaderMenu>ul>li:hover>ul{
    	opacity: 1;
    	visibility: visible;
    }
    .loginHeaderMenu>ul>li>ul>li{
    	font-size: 15px;
    	color: #333;
    }
    .loginHeaderMenu>ul>li>ul>li>a{
    	color: #333;
    	padding: 10px;
    	display: block;
    	text-decoration: none;
    }
    .loginHeaderMenu>ul>li>ul>li>a:hover {
    	background: rgba(51, 51, 51, 0.35);
    	color: #fff;
    }
    .login-wrapper{
    	display: table-row;
    }
    .login-cell{
    	display: table-cell;
    	vertical-align: middle;
    }
    .clear{
    	display: none;
    }
    .footer-wrapper{
    	/* display: table-footer-group; */
      position: -webkit-sticky;
      position: sticky;
      top: 100vh;
    }
    .footer-cont{

    	right: 0;
    	bottom: 0;
    	left: 0;
    	text-align: center;
    	/* display: table-cell; */
    	vertical-align: bottom;
    	/* height: 100px; */
    }
    .loginFooterMenu{
    	text-align: center;
    	background-color: rgba(0,0,0,.7);
    }
    .loginFooterMenu>ul{
    	display: inline-flex;
    }

    .loginFooterMenu>ul>li{
    	display: inline-block;
    	padding: 18px;
	}
	/* style two factor plugin */
	.login .backup-methods-wrap a, #login form p:not([class]){
		color: #555d66;
	}
	.login .backup-methods-wrap a:hover{
		color: #00a0d2;
	}
	/*End style two factor plugin */
    .loginFooterMenu>ul>li:focus{
    	outline: none;
    	border: 0;
    }
    .loginFooterMenu>ul>li>a:focus{
    	outline: none;
    	border: 0;
    }
    .loginFooterMenu>ul>li>a{
    	color: #fff;
    	text-transform: uppercase;
    	text-decoration: none;
    	font-size: 14px;
    }
    .loginHead {
    	width:100%;
    	text-align: center;
    	margin-top: 0;
    	margin-bottom: 20px;
    	padding: 13px 0 0;
    	position: relative;
    	margin: 0;
    }
    .loginHead p a {
  	  text-decoration: none;
    }
    .loginFooter {
    	display: table-footer-group;
    }
    .loginFooter p a {
    	display: inline-block;
    	margin: 0 5px;
    }
    .loginInner {
    	margin: 0 auto;
    	text-align: center;
    	margin-top: 20px;
    	margin-bottom: 0;
    	padding: 13px 0;
    	position: relative;
    }
    .copyRight{
    	text-align: center;
    	padding: 12px;
    	background-color: #efefef;
    }
    .loginpress-show-love{
      color: #222;
    }
    .loginpress-show-love a{
      color: #263466;
    }
    .loginpress-show-love a:hover{
      color: #4d5d95;
	}
    @media screen and (max-width: 767px) {
        #login{
            width: 300px;
        }
        .login form{
            padding-right: 0;
            padding-left: 0;
        }
        .login .loginpress-show-love{
            position: static;
            text-align: center;
            float: none;
            background: rgba(255,255,255, .5);
            margin-top: 11px;
            padding-bottom: 0;
            padding: 3px;
        }
    }

    </style>

  <style type="text/css">
*{
	box-sizing: border-box;
}


.login form input[type=checkbox]:focus{
	box-shadow: none;
    outline: none;
}
.login form .forgetmenot{
	float: none;
}
.login form .forgetmenot label{
	display:inline-block;
	margin: 0;
}
#login::after{
    }

#login{
  
  				}
html[dir="rtl"] .login form .input, html[dir="rtl"] .login input[type="text"]{
	margin-right: 0;
}
body.login #loginpress_video-background-wrapper{
				}
body.login #loginpress_video-background{
				
			object-fit: cover;
	
	}
body.login:after{
  
  }
body.login {

  
	
				  position: relative;
}
.login h1{
	}
.interim-login.login h1 a{
  	width: 84px;
	}

.login h1 a {
						background-size: contain;
	
	
}

.wp-core-ui #login  .button-primary{
				}

.wp-core-ui #login  .button-primary:hover{
			}
.wp-core-ui #login .button-primary, .wp-core-ui #login .two-factor-email-resend .button{

	box-shadow: 0 0 0px rgba( 0,0,0,0.8 );  /* box-shadow: none; */
	height: auto;
	line-height: 20px;
	padding: 13px;
			float: none;
	width: 100%;
}
#loginform {

						}

#loginform input[type="text"], #loginform input[type="password"]{

box-shadow: 0 0 0px rgba( 0,0,0,0.8 );}

#registerform input[type="text"], #registerform input[type="password"], #registerform input[type="number"], #registerform input[type="email"] {
		box-shadow: 0 0 0px rgba( 0,0,0,0.8 );}

#lostpasswordform input[type="text"]{
		box-shadow: 0 0 0px rgba( 0,0,0,0.8 );}

#login {
		}

.login form .forgetmenot label {
	}

.login label {
		}

.login form .input, .login input[type="text"] {
				}

#lostpasswordform {
		  		}

#registerform {
  		}

#wfls-prompt-overlay {
	}

.login .custom-message {

    border-left: 4px solid #00a0d2;
  
	  background-color: #fff;
	
  padding: 12px;
  margin-left: 0;
  margin-bottom: 20px;
  -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
  box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}

.login #nav {
		}

.login #nav a, .login #nav{
			
}

.login form .forgetmenot label{
	}

.login input[type="submit"]{
			}

.login #nav a:hover{
	}

.login #backtoblog{
	}

.login #backtoblog a{
				}

.login #backtoblog a:hover{
	}

.loginHead {
	}

.loginHead p a {
		}

.loginHead p a:hover {
	}

.loginFooter p a {
	margin: 0 5px;
		}

.loginFooter p a:hover {
		}

.loginInner {
	}


.wp-core-ui .button-primary{
text-shadow: none;
}

/*input:-webkit-autofill{
  transition: all 100000s ease-in-out 0s !important;
  transition-property: background-color, color !important;
}*/
.copyRight{
	padding: 12px 170px;
}
.loginpress-show-love{
  float: right;
  font-style: italic;
  padding-right: 20px;
  padding-bottom: 10px;
  position: absolute;
  bottom: 3px;
  right: 0;
  z-index: 10;
}
.loginpress-show-love a{
  text-decoration: none;
}
.love-postion{
	left: 0;
	padding-left: 20px;
}
.header-cell{
	/* display: table-cell; */
	height: 100px;
}
.loginHeaderMenu{
	text-align: center;
	position: relative;
	z-index: 10;
	list-style: none;
	background: #333;

}
.loginHeaderMenu>ul>li{
	display: inline-block;
	vertical-align: top;
	position: relative;
	list-style: none;
}
.loginHeaderMenu>ul>li>a{
	color: #fff;
	text-transform: uppercase;
	text-decoration: none;
	font-size: 16px;
	padding: 17px 20px;
	display: inline-block;
}
.loginHeaderMenu>ul>li:hover>a{
	background: #4CAF50;
	color: #fff;
}
.loginHeaderMenu>ul>li>ul{
	position: absolute;
	width: 200px;
	padding: 0;
	top: 100%;
	left: 0;
	background: #fff;
	list-style: none;
	text-align: left;
	border-radius: 0 0 5px 5px;
	-webkit-box-shadow: 0px 5px 10px -1px rgba(0,0,0,0.31);
	-moz-box-shadow: 0px 5px 10px -1px rgba(0,0,0,0.31);
	box-shadow: 0px 5px 10px -1px rgba(0,0,0,0.31);
	overflow: hidden;
	opacity: 0;
	visibility: hidden;
}
.loginHeaderMenu>ul>li:hover>ul{
	opacity: 1;
	visibility: visible;
}
.loginHeaderMenu>ul>li>ul>li{
	font-size: 15px;
	color: #333;
}
.loginHeaderMenu>ul>li>ul>li>a{
	color: #333;
	padding: 10px;
	display: block;
	text-decoration: none;
}
.loginHeaderMenu>ul>li>ul>li>a:hover {
	background: rgba(51, 51, 51, 0.35);
	color: #fff;
}
.loginHeaderMenu>ul {
    flex-wrap: wrap;
    display: flex;
    justify-content: center;
}
.loginFooterMenu{
	text-align: center;
	background-color: rgba(0,0,0,.7);
}
.loginFooterMenu>ul{
	display: inline-flex;
}

.loginFooterMenu>ul>li{
	display: inline-block;
	padding: 18px;
}
.loginFooterMenu>ul>li:focus{
	outline: none;
	border: 0;
}
.loginFooterMenu>ul>li>a:focus{
	outline: none;
	border: 0;
}
.loginFooterMenu>ul>li>a{
	color: #fff;
	text-transform: uppercase;
	text-decoration: none;
	font-size: 14px;
}
.loginFooterMenu>ul {
    flex-wrap: wrap;
    display: flex;
    justify-content: center;
}
.loginpress-caps-lock{
	background: rgba(51, 56, 61, 0.9);
    color: #fff;
    display: none;
    font-size: 14px;
    width: 120px;
	padding: 5px 10px;
	line-height: 20px;
    position: absolute;
    left: calc(100% + 10px);
    top: 50%;
    transform: translateY(-50%);
    border-radius: 5px;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    text-align: center;
    -webkit-box-shadow: 0 0 9px 0px rgba(0, 0, 0, 0.20);
    box-shadow: 0 0 9px 0px rgba(0, 0, 0, 0.20);
    margin-left: 5px;
    font-weight: normal;
	margin: 0;
	display: none;
}
.loginpress-caps-lock:before{
	content: '';
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 5px 5px 5px 0;
    border-color: transparent rgba(51, 56, 61, 0.9) transparent transparent;
    position: absolute;
    top: 50%;
    right: 100%;
    margin-left: 0;
    margin-top: -5px;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    z-index: 1;
}
.login form{
    overflow: visible;
		border: none;
}
#loginform .user-pass-fields input{
    margin-bottom: 0;
}
#loginform .user-pass-fields {
	margin-bottom: 18px;
	position: relative;
}
#login form p.submit{
	position: relative;
  clear: both;
}
input[type=checkbox]:checked::before{
	margin: -.35rem 0 0 -.375rem;
}
 /* LoginPress input field since 1.1.20 */
 /* .loginpress-input-wrap{
	 position: relative;
 }
.loginpres-input-field {
	transition: 0.4s;
}
.loginpres-input-field ~ .focus-border:before, .loginpres-input-field ~ .focus-border:after{
	content: "";
	position: absolute;
	top: 0;
	left: 50%;
	width: 0;
	height: 2px;
	background-color: #3399FF;
	transition: 0.4s;
	z-index: 999;
}
.loginpres-input-field ~ .focus-border:after{
	top: auto; bottom: 0;
}
.loginpres-input-field ~ .focus-border i:before, .loginpres-input-field ~ .focus-border i:after{
	content: "";
	position: absolute;
	top: 50%;
	left: 0;
	width: 2px;
	height: 0;
	background-color: #3399FF;
	transition: 0.6s;
}
.loginpres-input-field ~ .focus-border i:after{
	left: auto; right: 0;
}
.loginpres-input-field:focus ~ .focus-border:before, .loginpres-input-field:focus ~ .focus-border:after{
	left: 0;
	width: 100%;
	transition: 0.4s;
}
.loginpres-input-field:focus ~ .focus-border i:before, .loginpres-input-field:focus ~ .focus-border i:after{
	top: 0;
	height: 100%;
	transition: 0.6s;
} */
/* ! LoginPress input field since 1.1.20 */
@media screen and (max-width: 1239px) and (min-width: 768px){
	body.login #loginpress_video-background-wrapper{
			}
}
@media screen and (max-width: 767px) {
		.login h1 a {
				max-width: 100%;
				background-size: contain !important;
		}
    .copyRight{
    	padding: 12px;
	}
	.loginpress-caps-lock{
		left: auto;
		right: 0;
		top: 149%;
	}
	.loginpress-caps-lock:before{
		content: '';
		width: 0;
		height: 0;
		border-style: solid;
		border-width: 0 5px 5px 5px;
		border-color: transparent transparent rgba(51, 56, 61, 0.9) transparent;
		position: absolute;
		top: 0px;
		left: 5px;
		right: auto;
	}
	.loginpress-show-love{
		display: none !important;
	}
body.login #loginpress_video-background-wrapper{
				}
}
@media screen and (max-height: 700px) {
	.loginpress-show-love{
		display: none !important;
	}
}
/* The only rule that matters */
#loginpress_video-background {
/*  making the video fullscreen  */
  position: fixed !important ;
  right: 0 !important ;
  bottom: 0 !important ;
  width: 100% !important ;
  height: 100% !important ;
  z-index: -100 !important ;
}
body.login #login.login_tranparent,body.login  #login.login_tranparent #loginform{
	background: none !important;
}
body.login{
	display: flex;
	flex-direction: column;
}
body.login label[for="authcode"]:after{
	display: none;
}
body.login label[for="authcode"]+input{
padding-left: 15px;
}
</style>

	<meta name='robots' content='noindex,noarchive' />
	<meta name='referrer' content='strict-origin-when-cross-origin' />
		<meta name="viewport" content="width=device-width" />
		</head>
	<body class="login no-js login-action-login wp-core-ui  locale-en-us">
	<script type="text/javascript">
		document.body.className = document.body.className.replace('no-js','js');
	</script>
		<div id="login">
		<h1><a href="">http://localhost/priyanka</a></h1>
	
		<form name="loginform" id="loginform" action="/wp-login.php" method="post">
			<p>
				<label for="user_login">Username or Email Address</label>
				<input type="text" name="log" id="user_login" class="input" value="" size="20" autocapitalize="off" />
			</p>

			<div class="user-pass-wrap">
				<label for="user_pass">Password</label>
				<div class="wp-pwd">
					<input type="password" name="pwd" id="user_pass" class="input password-input" value="" size="20" />
					<button type="button" class="button button-secondary wp-hide-pw hide-if-no-js" data-toggle="0" aria-label="Show password">
						<span class="dashicons dashicons-visibility" aria-hidden="true"></span>
					</button>
				</div>
			</div>
						<p class="forgetmenot"><input name="rememberme" type="checkbox" id="rememberme" value="forever"  /> <label for="rememberme">Remember Me</label></p>
			<p class="submit">
				<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="Log In" />
									<input type="hidden" name="redirect_to" value="http://localhost/priyanka/wp-admin/" />
									<input type="hidden" name="testcookie" value="1" />
			</p>
		</form>

					<p id="nav">
								<a href="/wp-login.php?action=lostpassword">Lost your password?</a>
			</p>
					<script type="text/javascript">
			function wp_attempt_focus() {setTimeout( function() {try {d = document.getElementById( "user_login" );d.focus(); d.select();} catch( er ) {}}, 200);}
wp_attempt_focus();
if ( typeof wpOnload === 'function' ) { wpOnload() }		</script>
				<p id="backtoblog"><a href="/">
		&larr; Back to Priyanka Dhar		</a></p>
			</div>
	<div class="loginpress-show-love">Powered by: <a href="https://wpbrigade.com/" target="_blank">LoginPress</a></div><div class="footer-wrapper"><div class="footer-cont"></div></div>
<script>

document.addEventListener( 'DOMContentLoaded', function() {
    if (navigator.userAgent.indexOf("Firefox") != -1) {
      var body = document.body;
      body.classList.add("firefox");
    }
    // your code goes here
    if ( document.getElementById('user_pass') ) {
      var loginpress_user_pass = document.getElementById('user_pass');
      var loginpress_wrapper   = document.createElement('div');
      loginpress_wrapper.classList.add('user-pass-fields');
      // insert wrapper before el in the DOM tree
      user_pass.parentNode.insertBefore(loginpress_wrapper, loginpress_user_pass);

      // move el into wrapper
      loginpress_wrapper.appendChild(loginpress_user_pass);
      var loginpress_user_ps  = document.getElementsByClassName('user-pass-fields');
      var loginpress_node     = document.createElement("div");
      loginpress_node.classList.add('loginpress-caps-lock');
      var loginpress_textnode = document.createTextNode('Caps Lock is on');
      loginpress_node.appendChild(loginpress_textnode);
      loginpress_user_ps[0].appendChild(loginpress_node);
    }

  }, false );
  window.onload = function(e) {

    var capsLock      = 'off';
    var passwordField = document.getElementById("user_pass");
    if ( passwordField ) {
      passwordField.onkeydown = function(e) {
        var el   = this;
        var caps = event.getModifierState && event.getModifierState( 'CapsLock' );
        if ( caps ) {

          capsLock = 'on';
          el.nextElementSibling.style.display = "block";
        } else {

          capsLock = 'off';
          el.nextElementSibling.style.display = "none";
        }
      };

      passwordField.onblur = function(e) {

        var el = this;
        el.nextElementSibling.style.display = "none";
      };

      passwordField.onfocus = function(e) {

        var el = this;
        if ( capsLock == 'on' ) {

          el.nextElementSibling.style.display = "block";
        }else{

          el.nextElementSibling.style.display = "none";
        }
      };
    }


    // if ( document.getElementById("loginform") ) {
    //   document.getElementById("loginform").addEventListener( "submit", _LoginPressFormSubmitLoader );
    // }
    // if ( document.getElementById("registerform") ) {
    //   document.getElementById("registerform").addEventListener( "submit", _LoginPressFormSubmitLoader );
    // }
    // if ( document.getElementById("lostpasswordform") ) {
    //   document.getElementById("lostpasswordform").addEventListener( "submit", _LoginPressFormSubmitLoader );
    // }


    function _LoginPressFormSubmitLoader() {

      var subButton = document.getElementsByClassName("submit");
      var myButton  = document.getElementById("wp-submit");
      var image     = document.createElement("img");

      myButton.setAttribute('disabled', 'disabled');
      image.setAttribute( "src", "http://localhost/priyanka/wp-admin/images/loading.gif" );
      image.setAttribute( "width", "20" );
      image.setAttribute( "height", "20" );
      image.setAttribute( "alt", "Login Loader" );
      image.setAttribute( "style", "display: block;margin: 0 auto;position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);" );
      subButton[0].appendChild(image);
    }

  };

        var _LoginPressRMChecked = document.getElementById("rememberme");
      if ( null != _LoginPressRMChecked ) {
        _LoginPressRMChecked.checked = true;
      }
  </script>
<script src='/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp' id='jquery-core-js'></script>
<script id='zxcvbn-async-js-extra'>
var _zxcvbnSettings = {"src":"http:\/\/localhost\/priyanka\/wp-includes\/js\/zxcvbn.min.js"};
</script>
<script src='/wp-includes/js/zxcvbn-async.min.js?ver=1.0' id='zxcvbn-async-js'></script>
<script src='/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=7.4.4' id='wp-polyfill-js'></script>
<script id='wp-polyfill-js-after'>
( 'fetch' in window ) || document.write( '<script src="http://localhost/priyanka/wp-includes/js/dist/vendor/wp-polyfill-fetch.min.js?ver=3.0.0"></scr' + 'ipt>' );( document.contains ) || document.write( '<script src="http://localhost/priyanka/wp-includes/js/dist/vendor/wp-polyfill-node-contains.min.js?ver=3.42.0"></scr' + 'ipt>' );( window.DOMRect ) || document.write( '<script src="http://localhost/priyanka/wp-includes/js/dist/vendor/wp-polyfill-dom-rect.min.js?ver=3.42.0"></scr' + 'ipt>' );( window.URL && window.URL.prototype && window.URLSearchParams ) || document.write( '<script src="http://localhost/priyanka/wp-includes/js/dist/vendor/wp-polyfill-url.min.js?ver=3.6.4"></scr' + 'ipt>' );( window.FormData && window.FormData.prototype.keys ) || document.write( '<script src="http://localhost/priyanka/wp-includes/js/dist/vendor/wp-polyfill-formdata.min.js?ver=3.0.12"></scr' + 'ipt>' );( Element.prototype.matches && Element.prototype.closest ) || document.write( '<script src="http://localhost/priyanka/wp-includes/js/dist/vendor/wp-polyfill-element-closest.min.js?ver=2.0.2"></scr' + 'ipt>' );
</script>
<script src='/wp-includes/js/dist/i18n.min.js?ver=bb7c3c45d012206bfcd73d6a31f84d9e' id='wp-i18n-js'></script>
<script id='password-strength-meter-js-extra'>
var pwsL10n = {"unknown":"Password strength unknown","short":"Very weak","bad":"Weak","good":"Medium","strong":"Strong","mismatch":"Mismatch"};
</script>
<script id='password-strength-meter-js-translations'>
( function( domain, translations ) {
	var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
	localeData[""].domain = domain;
	wp.i18n.setLocaleData( localeData, domain );
} )( "default", { "locale_data": { "messages": { "": {} } } } );
</script>
<script src='/wp-admin/js/password-strength-meter.min.js?ver=5.5.3' id='password-strength-meter-js'></script>
<script src='/wp-includes/js/underscore.min.js?ver=1.8.3' id='underscore-js'></script>
<script id='wp-util-js-extra'>
var _wpUtilSettings = {"ajax":{"url":"\/priyanka\/wp-admin\/admin-ajax.php"}};
</script>
<script src='/wp-includes/js/wp-util.min.js?ver=5.5.3' id='wp-util-js'></script>
<script id='user-profile-js-translations'>
( function( domain, translations ) {
	var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
	localeData[""].domain = domain;
	wp.i18n.setLocaleData( localeData, domain );
} )( "default", { "locale_data": { "messages": { "": {} } } } );
</script>
<script src='/wp-admin/js/user-profile.min.js?ver=5.5.3' id='user-profile-js'></script>
	<script>
	/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
	</script>
		<div class="clear"></div>
	</body>
	</html>
	