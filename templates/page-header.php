<!DOCTYPE html>
<html lang='en'>
<?php include("page-head.php")?>

<body>

    <header id="header" class="header spread" data-sticky-container>
        <nav id="mobileNavigation" class="navigation spread tween affix top top-bar" aria-hidden="true">
            <a class="logo tween absolute-center-y" href="/">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="33.138" viewBox="0 0 29.999998 31.066779"><g fill="#039be5"><path d="M3.98 4.582V.006h18.672v4.576z"/><path d="M22.25 0c-3.227 0-6.153 1.797-7.305 4.58h7.004c.087-.007.176-.012.265-.012 1.542 0 2.793 1.155 2.793 2.58-.002 1.32-1.083 2.426-2.504 2.562v.004h-5.442v4.602h5.442v.01l.12-.01h.024v-.002c4.12-.212 7.344-3.356 7.352-7.166C30 3.176 26.55 0 22.25 0zM0 .017v9.695h4.953V.017z"/><g><path d="M3.98 26.485v4.576h18.672v-4.575z"/><path d="M22.25 31.067c-3.227 0-6.153-1.797-7.305-4.582h7.004c.087.01.176.013.265.014 1.542 0 2.793-1.156 2.793-2.58-.002-1.32-1.083-2.427-2.504-2.563v-.004h-5.442V16.75h5.442v-.01l.12.01h.024v.003c4.12.212 7.344 3.355 7.352 7.166 0 3.97-3.45 7.147-7.75 7.147zM0 31.05v-9.695h4.953v9.695z"/></g></g></svg>
            </a>
            <a id="mobileNavigationTrigger" href="javascript:;" class="hamburger absolute-center-y" aria-expanded="false" aria-label="navigation menu" role="button" title="navigation menu" aria-controls="navigation">
                <span></span>
            </a>
        </nav>
        <nav id="navigation" class="navigation spread tween affix top top-bar" data-sticky  data-options="marginTop:0;" style="width:100%">
            <div class="top-bar-left">
                <ul class="menu">
                    <li class="topbar-title">
                        <a id="logo" class="logo tween" href="<?=get_baseurl();?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="33.138" viewBox="0 0 29.999998 31.066779"><g fill="#039be5"><path d="M3.98 4.582V.006h18.672v4.576z"/><path d="M22.25 0c-3.227 0-6.153 1.797-7.305 4.58h7.004c.087-.007.176-.012.265-.012 1.542 0 2.793 1.155 2.793 2.58-.002 1.32-1.083 2.426-2.504 2.562v.004h-5.442v4.602h5.442v.01l.12-.01h.024v-.002c4.12-.212 7.344-3.356 7.352-7.166C30 3.176 26.55 0 22.25 0zM0 .017v9.695h4.953V.017z"/><g><path d="M3.98 26.485v4.576h18.672v-4.575z"/><path d="M22.25 31.067c-3.227 0-6.153-1.797-7.305-4.582h7.004c.087.01.176.013.265.014 1.542 0 2.793-1.156 2.793-2.58-.002-1.32-1.083-2.427-2.504-2.563v-.004h-5.442V16.75h5.442v-.01l.12.01h.024v.003c4.12.212 7.344 3.355 7.352 7.166 0 3.97-3.45 7.147-7.75 7.147zM0 31.05v-9.695h4.953v9.695z"/></g></g></svg>
                        </a>
                    </li>
                </ul>
            </div>
            <div role="navigation" class="top-bar-right" aria-hidden="false">
                <ul class="menu">
                    <li>
                        <ul class="vertical medium-horizontal menu">
                            <li>
                                <a id="site-title" href="<?=get_baseurl();?>">Home</a>
                            </li>

                            <li>
                                <a title="About" href="<?=get_baseurl();?>page/about/">About</a>
                            </li>
                            <li>
                                <a href="javascript:;" data-submenu>
                                 Work&nbsp;
                                 <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" fill="white">
                                    <path d="M6.1018 8C5.02785 8 4.45387 9.2649 5.16108 10.0731L10.6829 16.3838C11.3801 17.1806 12.6197 17.1806 13.3169 16.3838L18.8388 10.0731C19.5459 9.2649 18.972 8 17.898 8H6.1018Z" fill="#white"/>
                                </svg>
                            </a>
                            <ul class="submenu">
                                <li>
                                  <a href="<?=get_baseurl();?>sample/torch">Torch</a>
                              </li>
                              <li>
                                  <a href="<?=get_baseurl();?>sample/torch-mobile/">Torch Mobile</a>
                              </li>
                              <li>
                                  <a href="<?=get_baseurl();?>sample/pick-em/">WP Pick-Em</a>
                              </li>
                              <li>
                                  <a href="<?=get_baseurl();?>sample/phantasoft-embeddable-image-editor/">Phantasoft IE</a>
                              </li>
                              <li>
                                  <a href="<?=get_baseurl();?>sample/necoyoad/">Necoyoad</a>
                              </li>
                          </ul>
                      </li>
                      <li>
                        <a title="Contact" href="<?=get_baseurl();?>page/contact/">Contact</a>
                    </li>
                </ul>
            </li>
            <li>
                <ul class="menu">

                    <li>
                        <a title="Github" href="http://github.com/jbejam" target="_blank">
                            <svg>
                                <use xlink:href="#github"></use>
                            </svg>
                        </a>
                    </li>





                    <li>
                        <a title="LinkedIn" href="https://ve.linkedin.com/in/jes%c3%bas-bejarano-33677758" target="_blank">
                            <svg>
                                <use xlink:href="#linkedin"></use>
                            </svg>
                        </a>
                    </li>



                </ul>
            </li>
        </ul>
    </div>
</nav>
</header>
