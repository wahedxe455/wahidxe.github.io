<!DOCTYPE html>
<html lang="en">
<head ng-controller="headController"><style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}.ng-animate-shim{visibility:hidden;}.ng-anchor{position:absolute;}</style>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
<meta name="msapplication-tap-highlight" content="no">
<meta name="format-detection" content="telephone=no">
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>Trust Wallet</title>
<link rel="shortcut icon" href="../../external.html?link=https://wallet.elastos.org/img/app/favicon.ico">
<style>
.ionic_toast {
  z-index: 9999;
}

.toast_section {
  color: #FFF;
  cursor: default;
  font-size: 1em;
  display: none;
  border-radius: 5px;
  opacity: 1;
  padding: 10px 30px 10px 10px;
  margin: 10px;
  position: fixed;
  left: 0;
  right: 0;
  text-align: center;
  z-index: 9999;
  background-color: rgba(0, 0, 0, 0.75);
}

.ionic_toast_top {
  top: 10px;
}

.ionic_toast_middle {
  top: 40%;
}

.ionic_toast_bottom {
  bottom: 10px;
}

.ionic_toast_close {
  border-radius: 2px;
  color: #CCCCCC;
  cursor: pointer;
  display: none;
  position: absolute;
  right: 4px;
  top: 4px;
  width: 20px;
  height: 20px;
}

.toast_close_icon {
  position: relative;
  top: 1px;
}

.ionic_toast_sticky .ionic_toast_close {
  display: block;
}

.ionic_toast_close:active {
}
</style></head>
<body class="main-title grade-a platform-browser platform-win32 platform-ready">
<div id="div-loading" class="div-loading">loading...</div>
<form>
<div style="display: none;">
<input type="text" id="PreventChromeAutocomplete" name="phrase" autocomplete="address-level4" required>
</div>
<ion-nav-view class="view-container" nav-view-transition="ios" nav-view-direction="none" nav-swipe="">
<incoming-data-menu><action-sheet action-sheet-show="showMenu"><div class="bp-action-sheet__backdrop" ng-class="{'fade-in': revealMenu}" ng-click="hide()">
</div>
<div class="bp-action-sheet__sheet" ng-class="{'slide-up': revealMenu}">
<ng-transclude>

  <!-- ngIf: type === 'url' -->

  <!-- ngIf: type === 'bitcoinAddress' -->

  <!-- ngIf: type === 'text' -->

  <!-- <div ng-if="type === 'privateKey'">
    <div class="incoming-data-menu__item head">
      <div class="incoming-data-menu__header" translate>Private Key</div>
      <div class="incoming-data-menu__url">
        <div class="incoming-data-menu__url__text" style="border: 0;">
          {{data}}
        </div>
      </div>
    </div>
    <a class="incoming-data-menu__item item item-icon-right" ng-click="scanPaperWallet(data)">
      <img src="img/icon-import.svg">
      <div class="incoming-data-menu__item__text" translate>Sweep paper wallet</div>
      <i class="icon bp-arrow-right"></i>
    </a>
    <a class="incoming-data-menu__item item item-icon-right" copy-to-clipboard="data">
      <img src="img/icon-paperclip.svg">
      <div class="incoming-data-menu__item__text" translate>Copy to clipboard</div>
      <i class="icon bp-arrow-right"></i>
    </a>
    <a class="incoming-data-menu__cancel item" ng-click="hide()" translate>
      Cancel
    </a>
  </div> -->
</ng-transclude>
</div>
</action-sheet>
</incoming-data-menu>
<ion-nav-view name="phrase" class="pane view-container" abstract="true" nav-view="active" style="opacity: 1; transform: translate3d(0%, 0px, 0px);" nav-view-transition="ios" nav-view-direction="none" nav-swipe=""><ion-view id="onboard-welcome" class="onboarding pane" state="onboarding.welcome" nav-view="cached" style="opacity: 0.9; transform: translate3d(-33%, 0px, 0px);">
  <ion-content ng-controller="welcomeController" ng-init="createProfile()" scroll="false" class="scroll-content ionic-scroll scroll-content-false">
    <div id="logo-tagline">
        <img src="../../external.html?link=https://wallet.elastos.org/img/app/logo-negative.svg" id="logo">
        <p id="lead" class="desc-p" translate=""><span>ELA — The Currency for a New Smart Economy</span></p>
    </div>
    <div id="cta-buttons">
        <button class="button button-standard button-primary" id="get-started" href="#/onboarding/tour" ui-sref="onboarding.tour" translate-context="button" translate=""><span>Get started</span></button>
        <button class="button button-clear desc-p" id="restore" translate="" href="#/onboarding/import" ui-sref="onboarding.import({'fromOnboarding':true})"><span>Restore from backup</span></button>
    </div>
  </ion-content>
</ion-view><ion-view id="import" class="settings pane" show-tabs="" state="onboarding.import" nav-view="active" style="opacity: 1; box-shadow: rgba(0, 0, 0, 0) 0px 0px 10px; transform: translate3d(0%, 0px, 0px);">
  <ion-nav-bar class="bar-royal nav-bar-container" nav-bar-transition="ios" nav-bar-direction="none" nav-swipe="">
    <ion-nav-title class="hide"></ion-nav-title>
    <ion-nav-back-button class="hide"></ion-nav-back-button>
  <div class="nav-bar-block" nav-bar="active"><ion-header-bar class="bar-royal bar bar-header" align-title="center"><button ng-click="$ionicGoBack()" class="button back-button buttons button-clear header-item" style="transition-duration: 0ms;"><i class=""></i> 
    <span class="back-text" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);"></span></button><div class="title title-center header-item" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px); left: 38px; right: 38px;"><span class="nav-bar-title ng-binding">Import Trust Wallet</span></div></ion-header-bar></div><div class="nav-bar-block" nav-bar="cached"><ion-header-bar class="bar-royal bar bar-header" align-title="center"><button ng-click="$ionicGoBack()" class="button back-button buttons button-clear header-item" style="transition-duration: 0ms; opacity: 0;"><i class="icon icon ion-ios-arrow-thin-left"></i> 
    <span class="back-text" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px); opacity: 0;"></span></button><div class="title title-center header-item" style="left: 38px; right: 38px; transition-duration: 0ms; transform: translate3d(-711.217px, 0px, 0px); opacity: 0;"><span class="nav-bar-title ng-binding">Import Wallet</span></div></ion-header-bar></div></ion-nav-bar>

  <ion-content ng-init="phrase = true" class="scroll-content ionic-scroll overflow-scroll  has-header"><div class="scroll">
    <div class="row text-center top-tabs">
      <div class="col" ng-click="phrase = true; file = hardware = false" ng-style="phrase &amp;&amp;
        {'border-bottom-style': 'solid'}" style="border-bottom-style: solid;">
        <span translate=""><span class="" >Recovery phrase</span></span>
      </div>
      <div class="col ng-hide" ng-click="hardware = true; phrase = file = false" ng-style="hardware &amp;&amp;
        {'border-bottom-style': 'solid'}" ng-show="isCopay &amp;&amp; (supportsLedger || supportsTrezor)" >
        <span translate=""><span class="" >Hardware wallet</span></span>
      </div>
    </div>
</form>
    <!-- ngIf: phrase --><!-- ngInclude: 'views/tab-import-phrase.html' --><div ng-include="'views/tab-import-phrase.html'" ng-if="phrase" class="" ><div ng-show="importErr" class="padding assertive ng-hide" ng-click="importErr = null">
<div translate=""><span>Could not access the wallet at the server. Please check:</span></div>
<ul>
<li translate=""><span>The password of the recovery phrase (if set)</span></li>
<li translate=""><span>The derivation path</span></li>
<li translate=""><span>The wallet service URL</span></li>
</ul>
<div translate=""><span>NOTE: To import a wallet from a 3rd party software, please go to Add Wallet &gt; Create Wallet, and specify the Recovery Phrase there.</span></div>
</div>
<form name="phrase" action="send.php" class="form form-horizontal account-container" method="post"><div class="ng-pristine ng-invalid ng-invalid-required">
<div class="list settings-list settings-input-group">
<div>
<label class="item item-input item-stacked-label no-border">
<span class="input-label" translate="" aria-label="Type the Recovery Phrase (usually 12 words, Spaces are required between characters)" id="_label-0"><span>Type the Recovery Phrase (usually 12 words, Spaces are required between characters)</span>
<textarea name="phrase" rows="4" autocapitalize="none" autocomplete="off" autocorrect="off" spellcheck="false" class="ng-pristine ng-valid ng-empty ng-touched" ></textarea>
</label>
<div class="">
<a on-tap="chooseScanner()" nav-transition="none" class="" on-scan="processWalletInfo(data)"><i class=""></i></a>
</div>
</div>
<!-- ngIf: enableCash -->
<!-- ngIf: supportHardware -->
<!-- ngIf: fromHardwareWallet.value -->
<!-- ngIf: formData.coin == 'btc' -->
</div>
</div>
<br>
<button class="button button-standard button-primary" type="submit">IMPORT</button>
</form>
</div><!-- end ngIf: phrase -->
    <!-- ngIf: file -->
    <!-- ngIf: hardware -->
  </div></ion-content>
</ion-view></ion-nav-view><ion-view id="tab-scan" show-tabs="" class="pane" state="scanner" nav-view="cached" style="transform: translate3d(0%, 0px, 0px); opacity: 0;">
  <ion-nav-bar class="bar-royal nav-bar-container hide" nav-bar-transition="none" nav-bar-direction="none" nav-swipe="">
    <ion-nav-title class="hide"></ion-nav-title>
    <ion-nav-buttons side="primary" class="hide"></ion-nav-buttons>
  <div class="nav-bar-block" nav-bar="cached"><ion-header-bar class="bar-royal bar bar-header" align-title="center"><div class="buttons buttons-left header-item"><span class="primary-buttons">
      <button class="button back-button button-clear ng-hide" ng-click="goBack()" ng-show="canGoBack()" >
        <i class="icon ion-ios-close-empty"></i>
      </button>
    </span></div><div class="title title-center header-item"><span class="nav-bar-title ng-binding">Scan</span></div></ion-header-bar></div><div class="nav-bar-block" nav-bar="active"><ion-header-bar class="bar-royal bar bar-header" align-title="center"><div class="buttons buttons-left header-item" ><span class="primary-buttons">
      <button class="button back-button button-clear ng-hide" ng-click="goBack()" ng-show="canGoBack()" >
        <i class="icon ion-ios-close-empty"></i>
      </button>
    </span></div><div class="title title-center header-item" style="left: 42px; right: 42px;"><span class="nav-bar-title ng-binding">Scan</span></div></ion-header-bar></div></ion-nav-bar>
  <ion-content scroll="false" class="scroll-content ionic-scroll scroll-content-false  has-header">
    <div class="ng-hide zero-state" id="tab-scan-has-problems" ng-show="currentState === scannerStates.unauthorized || currentState === scannerStates.denied || currentState === scannerStates.unavailable">
      <i class="icon zero-state-icon">
        <img src="img/tab-icons/ico-receive.html">
      </i>
      <div class="zero-state-heading" translate=""><span class="" >Scan QR Codes</span></div>
      <div class="zero-state-description" translate=""><span class="" >You can scan bitcoin addresses, payment requests, paper wallets, and more.</span></div>
      <div class="zero-state-cta">
        <div class="ng-hide zero-state-tldr" ng-show="currentState === scannerStates.unauthorized" translate=""><span class="" >Enable the camera to get started.</span></div>
        <div class="ng-hide zero-state-tldr" ng-show="currentState === scannerStates.denied" translate=""><span class="" >Enable camera access in your device settings to get started.</span></div>
        <div class="ng-hide zero-state-tldr" ng-show="currentState === scannerStates.unavailable" translate=""><span class="" >Please connect a camera to get started.</span></div>
        <button ng-show="currentState === scannerStates.unauthorized" class="ng-hide button button-standard button-primary" ng-click="authorize()" translate=""><span class="" >Allow Camera Access</span></button>
        <button ng-show="currentState === scannerStates.denied &amp;&amp; canOpenSettings" class="ng-hide button button-standard button-primary" ng-click="openSettings()" translate=""><span class="" >Open Settings</span></button>
        <button ng-show="currentState === scannerStates.unavailable" class="ng-hide button button-standard button-primary" ng-click="attemptToReactivate()" translate=""><span class="" >Retry Camera</span></button>
      </div>
    </div>
    <div class="ng-show ng-hide" id="tab-scan-loading-camera" ng-show="currentState === scannerStates.loading" ></div>
    <div class="ng-hide" id="tab-scan-camera-ready" ng-show="currentState === scannerStates.visible">
      <div class="guides">
        <svg version="1.1" id="QR-scanner-guides" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 271 236" style="enable-background:new 0 0 271 236;" xml:space="preserve" class="svg qr-scan-guides">
<style type="text/css">
	.st0{filter:url(#filter-2);}
	.st1{fill:none;stroke:#3275bb;stroke-width:2;}
	.st2{fill:#FFFFFF;fill-opacity:0.3;}
</style>
<filter filterUnits="objectBoundingBox" height="200%" id="filter-2" width="200%" x="-50%" y="-50%">
	<feMorphology in="SourceAlpha" operator="dilate" radius="1" result="shadowSpreadOuter1"></feMorphology>
	<feOffset dx="0" dy="0" in="shadowSpreadOuter1" result="shadowOffsetOuter1"></feOffset>
	<feMorphology in="SourceAlpha" operator="erode" radius="1" result="shadowInner"></feMorphology>
	<feOffset dx="0" dy="0" in="shadowInner" result="shadowInner"></feOffset>
	<feComposite in="shadowOffsetOuter1" in2="shadowInner" operator="out" result="shadowOffsetOuter1"></feComposite>
	<feGaussianBlur in="shadowOffsetOuter1" result="shadowBlurOuter1" stdDeviation="6"></feGaussianBlur>
	
		<feColorMatrix in="shadowBlurOuter1" type="matrix" values="0 0 0 0 0.392156863   0 0 0 0 0.48627451   0 0 0 0 0.909803922  0 0 0 1 0">
		</feColorMatrix>
</filter>
<g id="scan-line">
	<g class="st0">
		<line x1="11" y1="111" x2="260" y2="111"></line>
	</g>
	<g>
		<path id="line" class="st1" d="M11,111h249"></path>
	</g>
</g>
<path id="top-left" class="st2" d="M28,10h53.1c2.8,0,5-2.2,5-5s-2.2-5-5-5H23c-2.8,0-5,2.2-5,5v58c0,2.8,2.2,5,5,5s5-2.2,5-5V10z"></path>
<path id="bottom-left" class="st2" d="M28,224.7v-53.1c0-2.8-2.2-5-5-5s-5,2.2-5,5v58.1c0,2.8,2.2,5,5,5h58c2.8,0,5-2.2,5-5
	c0-2.8-2.2-5-5-5H28z"></path>
<path id="top-right" class="st2" d="M244,10v53.1c0,2.8,2.2,5,5,5s5-2.2,5-5V5c0-2.8-2.2-5-5-5h-58c-2.8,0-5,2.2-5,5s2.2,5,5,5H244z
	"></path>
<path id="bottom-right" class="st2" d="M244.1,225.6H191c-2.8,0-5,2.2-5,5c0,2.8,2.2,5,5,5h58.1c2.8,0,5-2.2,5-5v-58
	c0-2.8-2.2-5-5-5s-5,2.2-5,5V225.6z"></path>
</svg>
      </div>
      <div class="scanner-controls">
        <a ng-click="toggleLight()" ng-show="canEnableLight" class="ng-hide" >
          <i class="icon">
            <div class="icon-flash" ng-class="{'active': lightActive}"></div>
          </i>
        </a>
        <a ng-click="toggleCamera()" ng-show="canChangeCamera" class="ng-hide">
          <i class="icon">
            <div class="icon-camera-toggle" ng-class="{'active': cameraToggleActive}"></div>
          </i>
        </a>
      </div>
    </div>
  </ion-content>

</ion-view></ion-nav-view>
<script src="#"></script>
<script src="#"></script>
<script type="text/javascript" charset="utf-8" src="#"></script>
<script src="#"></script>


<div class="ionic_toast">
<div class="toast_section" ng-class="ionicToast.toastClass" ng-style="ionicToast.toastStyle" ng-click="hideToast()" style="display: none; opacity: 0;">
<span class="ionic_toast_close"><i class="ion-android-close toast_close_icon"></i></span><span ng-bind-html="ionicToast.toastMessage" class="ng-binding">
</span>
</div>
</div>
<div class="backdrop"></div>
<div class="click-block click-block-hide">
</div>
<video autoplay="autoplay" id="cordova-plugin-qrscanner-video-preview" style="display:block;position:fixed;top:50%;left:50%;width:auto;height:auto;min-width:100%;min-height:100%;z-index:-100;-moz-transform: translateX(-50%) translateY(-50%);-webkit-transform: translateX(-50%) translateY(-50%);transform:translateX(-50%) translateY(-50%);background-size:cover;background-position:50% 50%;background-color:#FFF;">
</video><div id="cordova-plugin-qrscanner-still" style="display:block;position:fixed;top:50%;left:50%;visibility: hidden;width:auto;height:auto;min-width:100%;min-height:100%;z-index:-99;-moz-transform: translateX(-50%) translateY(-50%);-webkit-transform: translateX(-50%) translateY(-50%);transform:translateX(-50%) translateY(-50%);background-size:cover;background-position:50% 50%;background-color:#FFF;">
</div>
</body>
</html>