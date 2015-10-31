


<!DOCTYPE html>
<html lang="en" class=" is-copy-enabled">
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# object: http://ogp.me/ns/object# article: http://ogp.me/ns/article# profile: http://ogp.me/ns/profile#">
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta name="viewport" content="width=1020">
    
    
    <title>jQuery-Mapael/france_departments.js at master · neveldo/jQuery-Mapael</title>
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub">
    <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub">
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-114.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-144.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144.png">
    <meta property="fb:app_id" content="1401488693436528">

      <meta content="@github" name="twitter:site" /><meta content="summary" name="twitter:card" /><meta content="neveldo/jQuery-Mapael" name="twitter:title" /><meta content="jQuery-Mapael - jQuery plugin based on raphael.js that allows you to display dynamic vector maps" name="twitter:description" /><meta content="https://avatars0.githubusercontent.com/u/1663176?v=3&amp;s=400" name="twitter:image:src" />
      <meta content="GitHub" property="og:site_name" /><meta content="object" property="og:type" /><meta content="https://avatars0.githubusercontent.com/u/1663176?v=3&amp;s=400" property="og:image" /><meta content="neveldo/jQuery-Mapael" property="og:title" /><meta content="https://github.com/neveldo/jQuery-Mapael" property="og:url" /><meta content="jQuery-Mapael - jQuery plugin based on raphael.js that allows you to display dynamic vector maps" property="og:description" />
      <meta name="browser-stats-url" content="https://api.github.com/_private/browser/stats">
    <meta name="browser-errors-url" content="https://api.github.com/_private/browser/errors">
    <link rel="assets" href="https://assets-cdn.github.com/">
    <link rel="web-socket" href="wss://live.github.com/_sockets/MTMyNDE4MzA6NDlhYTc5NTY4NWM5Mzc3YTYzMmI2MDlhODQ2ZDcxOTY6NGNkN2MzMTI5OWJjOWFmN2E4MDZlNTY4ZWMwZDVkZmM4YmE3MTU1ODI5OTUwNjM1NzcyZmZlZTFlYmRmOTRkNw==--48384f1cd9e9274950d2259b2b4984da9379255b">
    <meta name="pjax-timeout" content="1000">
    <link rel="sudo-modal" href="/sessions/sudo_modal">

    <meta name="msapplication-TileImage" content="/windows-tile.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="selected-link" value="repo_source" data-pjax-transient>

    <meta name="google-site-verification" content="KT5gs8h0wvaagLKAVWq8bbeNwnZZK1r1XQysX3xurLU">
    <meta name="google-analytics" content="UA-3769691-2">

<meta content="collector.githubapp.com" name="octolytics-host" /><meta content="github" name="octolytics-app-id" /><meta content="539A343B:09AE:3C91994:56346A3E" name="octolytics-dimension-request_id" /><meta content="13241830" name="octolytics-actor-id" /><meta content="steph-del" name="octolytics-actor-login" /><meta content="5b9e9ba3ffc75636f0f629f5ebca51ba6c6277db47c9d751d39ef41cf3f1475b" name="octolytics-actor-hash" />

<meta content="Rails, view, blob#show" data-pjax-transient="true" name="analytics-event" />


  <meta class="js-ga-set" name="dimension1" content="Logged In">
    <meta class="js-ga-set" name="dimension4" content="Current repo nav">




    <meta name="is-dotcom" content="true">
        <meta name="hostname" content="github.com">
    <meta name="user-login" content="steph-del">

      <link rel="mask-icon" href="https://assets-cdn.github.com/pinned-octocat.svg" color="#4078c0">
      <link rel="icon" type="image/x-icon" href="https://assets-cdn.github.com/favicon.ico">

    <meta content="f24d62dff2013b9678f49d7cd7820f49cd1d1b23" name="form-nonce" />

    <link crossorigin="anonymous" href="https://assets-cdn.github.com/assets/github-4b3a5bbd58771cb35e8ab63d46cf27dbc5c339d72b3db8553f131c9efa8618af.css" integrity="sha256-SzpbvVh3HLNeirY9Rs8n28XDOdcrPbhVPxMcnvqGGK8=" media="all" rel="stylesheet" />
    <link crossorigin="anonymous" href="https://assets-cdn.github.com/assets/github2-00a8be553371a21678bd88362a07c328eda1b6f1a38d00f799b6bb3b99198706.css" integrity="sha256-AKi+VTNxohZ4vYg2KgfDKO2htvGjjQD3mba7O5kZhwY=" media="all" rel="stylesheet" />
    
    
    


    <meta http-equiv="x-pjax-version" content="e62bfd108ba421defcc4a63e2fa7fc1e">

      
  <meta name="description" content="jQuery-Mapael - jQuery plugin based on raphael.js that allows you to display dynamic vector maps">
  <meta name="go-import" content="github.com/neveldo/jQuery-Mapael git https://github.com/neveldo/jQuery-Mapael.git">

  <meta content="1663176" name="octolytics-dimension-user_id" /><meta content="neveldo" name="octolytics-dimension-user_login" /><meta content="10887157" name="octolytics-dimension-repository_id" /><meta content="neveldo/jQuery-Mapael" name="octolytics-dimension-repository_nwo" /><meta content="true" name="octolytics-dimension-repository_public" /><meta content="false" name="octolytics-dimension-repository_is_fork" /><meta content="10887157" name="octolytics-dimension-repository_network_root_id" /><meta content="neveldo/jQuery-Mapael" name="octolytics-dimension-repository_network_root_nwo" />
  <link href="https://github.com/neveldo/jQuery-Mapael/commits/master.atom" rel="alternate" title="Recent Commits to jQuery-Mapael:master" type="application/atom+xml">

  </head>


  <body class="logged_in   env-production macintosh vis-public page-blob">
    <a href="#start-of-content" tabindex="1" class="accessibility-aid js-skip-to-content">Skip to content</a>

    
    
    



      <div class="header header-logged-in true" role="banner">
  <div class="container clearfix">

    <a class="header-logo-invertocat" href="https://github.com/" data-hotkey="g d" aria-label="Homepage" data-ga-click="Header, go to dashboard, icon:logo">
  <span class="mega-octicon octicon-mark-github"></span>
</a>


      <div class="site-search repo-scope js-site-search" role="search">
          <!-- </textarea> --><!-- '"` --><form accept-charset="UTF-8" action="/neveldo/jQuery-Mapael/search" class="js-site-search-form" data-global-search-url="/search" data-repo-search-url="/neveldo/jQuery-Mapael/search" method="get"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /></div>
  <label class="js-chromeless-input-container form-control">
    <div class="scope-badge">This repository</div>
    <input type="text"
      class="js-site-search-focus js-site-search-field is-clearable chromeless-input"
      data-hotkey="s"
      name="q"
      placeholder="Search"
      aria-label="Search this repository"
      data-global-scope-placeholder="Search GitHub"
      data-repo-scope-placeholder="Search"
      tabindex="1"
      autocapitalize="off">
  </label>
</form>
      </div>

      <ul class="header-nav left" role="navigation">
        <li class="header-nav-item">
          <a href="/pulls" class="js-selected-navigation-item header-nav-link" data-ga-click="Header, click, Nav menu - item:pulls context:user" data-hotkey="g p" data-selected-links="/pulls /pulls/assigned /pulls/mentioned /pulls">
            Pull requests
</a>        </li>
        <li class="header-nav-item">
          <a href="/issues" class="js-selected-navigation-item header-nav-link" data-ga-click="Header, click, Nav menu - item:issues context:user" data-hotkey="g i" data-selected-links="/issues /issues/assigned /issues/mentioned /issues">
            Issues
</a>        </li>
          <li class="header-nav-item">
            <a class="header-nav-link" href="https://gist.github.com/" data-ga-click="Header, go to gist, text:gist">Gist</a>
          </li>
      </ul>

    
<ul class="header-nav user-nav right" id="user-links">
  <li class="header-nav-item">
      <span class="js-socket-channel js-updatable-content"
        data-channel="notification-changed:steph-del"
        data-url="/notifications/header">
      <a href="/notifications" aria-label="You have no unread notifications" class="header-nav-link notification-indicator tooltipped tooltipped-s" data-ga-click="Header, go to notifications, icon:read" data-hotkey="g n">
          <span class="mail-status all-read"></span>
          <span class="octicon octicon-bell"></span>
</a>  </span>

  </li>

  <li class="header-nav-item dropdown js-menu-container">
    <a class="header-nav-link tooltipped tooltipped-s js-menu-target" href="/new"
       aria-label="Create new…"
       data-ga-click="Header, create new, icon:add">
      <span class="octicon octicon-plus left"></span>
      <span class="dropdown-caret"></span>
    </a>

    <div class="dropdown-menu-content js-menu-content">
      <ul class="dropdown-menu dropdown-menu-sw">
        
<a class="dropdown-item" href="/new" data-ga-click="Header, create new repository">
  New repository
</a>


  <a class="dropdown-item" href="/organizations/new" data-ga-click="Header, create new organization">
    New organization
  </a>



  <div class="dropdown-divider"></div>
  <div class="dropdown-header">
    <span title="neveldo/jQuery-Mapael">This repository</span>
  </div>
    <a class="dropdown-item" href="/neveldo/jQuery-Mapael/issues/new" data-ga-click="Header, create new issue">
      New issue
    </a>

      </ul>
    </div>
  </li>

  <li class="header-nav-item dropdown js-menu-container">
    <a class="header-nav-link name tooltipped tooltipped-s js-menu-target" href="/steph-del"
       aria-label="View profile and more"
       data-ga-click="Header, show menu, icon:avatar">
      <img alt="@steph-del" class="avatar" height="20" src="https://avatars3.githubusercontent.com/u/13241830?v=3&amp;s=40" width="20" />
      <span class="dropdown-caret"></span>
    </a>

    <div class="dropdown-menu-content js-menu-content">
      <div class="dropdown-menu  dropdown-menu-sw">
        <div class=" dropdown-header header-nav-current-user css-truncate">
            Signed in as <strong class="css-truncate-target">steph-del</strong>

        </div>


        <div class="dropdown-divider"></div>

          <a class="dropdown-item" href="/steph-del" data-ga-click="Header, go to profile, text:your profile">
            Your profile
          </a>
        <a class="dropdown-item" href="/stars" data-ga-click="Header, go to starred repos, text:your stars">
          Your stars
        </a>
        <a class="dropdown-item" href="/explore" data-ga-click="Header, go to explore, text:explore">
          Explore
        </a>
          <a class="dropdown-item" href="/integrations" data-ga-click="Header, go to integrations, text:integrations">
            Integrations
          </a>
        <a class="dropdown-item" href="https://help.github.com" data-ga-click="Header, go to help, text:help">
          Help
        </a>

          <div class="dropdown-divider"></div>

          <a class="dropdown-item" href="/settings/profile" data-ga-click="Header, go to settings, icon:settings">
            Settings
          </a>

          <!-- </textarea> --><!-- '"` --><form accept-charset="UTF-8" action="/logout" class="logout-form" data-form-nonce="f24d62dff2013b9678f49d7cd7820f49cd1d1b23" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="BtBLz/dD3nTstAweNqmC4GuvN8UryI4wt5DOUi2AF+VcuuUEKa/DRIKgIVVWAzkVM7bvzIWP7hIFtwTQZ8Z8cA==" /></div>
            <button class="dropdown-item dropdown-signout" data-ga-click="Header, sign out, icon:logout">
              Sign out
            </button>
</form>
      </div>
    </div>
  </li>
</ul>


    
  </div>
</div>

      

      


    <div id="start-of-content" class="accessibility-aid"></div>

    <div id="js-flash-container">
</div>


    <div role="main" class="main-content">
        <div itemscope itemtype="http://schema.org/WebPage">
    <div class="pagehead repohead instapaper_ignore readability-menu">

      <div class="container">

        <div class="clearfix">
          

<ul class="pagehead-actions">

  <li>
      <!-- </textarea> --><!-- '"` --><form accept-charset="UTF-8" action="/notifications/subscribe" class="js-social-container" data-autosubmit="true" data-form-nonce="f24d62dff2013b9678f49d7cd7820f49cd1d1b23" data-remote="true" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="3IVLBnB0W5pbev0ozjbY8Ys4b8mvAF4NdQcCrtpswuQk0VgkYu0VXiXTj1NV6LaP8vQiTRyy9QNCbcmkkdOxxA==" /></div>    <input id="repository_id" name="repository_id" type="hidden" value="10887157" />

      <div class="select-menu js-menu-container js-select-menu">
        <a href="/neveldo/jQuery-Mapael/subscription"
          class="btn btn-sm btn-with-count select-menu-button js-menu-target" role="button" tabindex="0" aria-haspopup="true"
          data-ga-click="Repository, click Watch settings, action:blob#show">
          <span class="js-select-button">
            <span class="octicon octicon-eye"></span>
            Watch
          </span>
        </a>
        <a class="social-count js-social-count" href="/neveldo/jQuery-Mapael/watchers">
          47
        </a>

        <div class="select-menu-modal-holder">
          <div class="select-menu-modal subscription-menu-modal js-menu-content" aria-hidden="true">
            <div class="select-menu-header">
              <span class="octicon octicon-x js-menu-close" role="button" aria-label="Close"></span>
              <span class="select-menu-title">Notifications</span>
            </div>

            <div class="select-menu-list js-navigation-container" role="menu">

              <div class="select-menu-item js-navigation-item selected" role="menuitem" tabindex="0">
                <span class="select-menu-item-icon octicon octicon-check"></span>
                <div class="select-menu-item-text">
                  <input checked="checked" id="do_included" name="do" type="radio" value="included" />
                  <span class="select-menu-item-heading">Not watching</span>
                  <span class="description">Be notified when participating or @mentioned.</span>
                  <span class="js-select-button-text hidden-select-button-text">
                    <span class="octicon octicon-eye"></span>
                    Watch
                  </span>
                </div>
              </div>

              <div class="select-menu-item js-navigation-item " role="menuitem" tabindex="0">
                <span class="select-menu-item-icon octicon octicon octicon-check"></span>
                <div class="select-menu-item-text">
                  <input id="do_subscribed" name="do" type="radio" value="subscribed" />
                  <span class="select-menu-item-heading">Watching</span>
                  <span class="description">Be notified of all conversations.</span>
                  <span class="js-select-button-text hidden-select-button-text">
                    <span class="octicon octicon-eye"></span>
                    Unwatch
                  </span>
                </div>
              </div>

              <div class="select-menu-item js-navigation-item " role="menuitem" tabindex="0">
                <span class="select-menu-item-icon octicon octicon-check"></span>
                <div class="select-menu-item-text">
                  <input id="do_ignore" name="do" type="radio" value="ignore" />
                  <span class="select-menu-item-heading">Ignoring</span>
                  <span class="description">Never be notified.</span>
                  <span class="js-select-button-text hidden-select-button-text">
                    <span class="octicon octicon-mute"></span>
                    Stop ignoring
                  </span>
                </div>
              </div>

            </div>

          </div>
        </div>
      </div>
</form>
  </li>

  <li>
    
  <div class="js-toggler-container js-social-container starring-container ">

    <!-- </textarea> --><!-- '"` --><form accept-charset="UTF-8" action="/neveldo/jQuery-Mapael/unstar" class="js-toggler-form starred js-unstar-button" data-form-nonce="f24d62dff2013b9678f49d7cd7820f49cd1d1b23" data-remote="true" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="ciffakCMpE/YLzwkJ49OGjL7DDjFrVMfrP9H8NE4PGZfStBH1v55EQUaFtG77Ff365UxlVrM+Cw5/SG67mlvuA==" /></div>
      <button
        class="btn btn-sm btn-with-count js-toggler-target"
        aria-label="Unstar this repository" title="Unstar neveldo/jQuery-Mapael"
        data-ga-click="Repository, click unstar button, action:blob#show; text:Unstar">
        <span class="octicon octicon-star"></span>
        Unstar
      </button>
        <a class="social-count js-social-count" href="/neveldo/jQuery-Mapael/stargazers">
          651
        </a>
</form>
    <!-- </textarea> --><!-- '"` --><form accept-charset="UTF-8" action="/neveldo/jQuery-Mapael/star" class="js-toggler-form unstarred js-star-button" data-form-nonce="f24d62dff2013b9678f49d7cd7820f49cd1d1b23" data-remote="true" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="vAjHGAJXzrSByc5c2rIzp5Yw3FGE02322fsxsCk/uEPZFvRayCmPpDK84lnoyWYfl5nfzgWRkOyLI4huM5aNgw==" /></div>
      <button
        class="btn btn-sm btn-with-count js-toggler-target"
        aria-label="Star this repository" title="Star neveldo/jQuery-Mapael"
        data-ga-click="Repository, click star button, action:blob#show; text:Star">
        <span class="octicon octicon-star"></span>
        Star
      </button>
        <a class="social-count js-social-count" href="/neveldo/jQuery-Mapael/stargazers">
          651
        </a>
</form>  </div>

  </li>

  <li>
          <!-- </textarea> --><!-- '"` --><form accept-charset="UTF-8" action="/neveldo/jQuery-Mapael/fork" class="btn-with-count" data-form-nonce="f24d62dff2013b9678f49d7cd7820f49cd1d1b23" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="mS8VApA5RaXUai3zVcKjrDnzQQtXlo3OC2UkgAbCF5FMsM+8ViCAorau43crMfjETGveW3AOhcZVFc5J9i3aQQ==" /></div>
            <button
                type="submit"
                class="btn btn-sm btn-with-count"
                data-ga-click="Repository, show fork modal, action:blob#show; text:Fork"
                title="Fork your own copy of neveldo/jQuery-Mapael to your account"
                aria-label="Fork your own copy of neveldo/jQuery-Mapael to your account">
              <span class="octicon octicon-repo-forked"></span>
              Fork
            </button>
</form>
    <a href="/neveldo/jQuery-Mapael/network" class="social-count">
      104
    </a>
  </li>
</ul>

          <h1 itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="entry-title public ">
  <span class="mega-octicon octicon-repo"></span>
  <span class="author"><a href="/neveldo" class="url fn" itemprop="url" rel="author"><span itemprop="title">neveldo</span></a></span><!--
--><span class="path-divider">/</span><!--
--><strong><a href="/neveldo/jQuery-Mapael" data-pjax="#js-repo-pjax-container">jQuery-Mapael</a></strong>

  <span class="page-context-loader">
    <img alt="" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
  </span>

</h1>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="repository-with-sidebar repo-container new-discussion-timeline ">
        <div class="repository-sidebar clearfix">
          
<nav class="sunken-menu repo-nav js-repo-nav js-sidenav-container-pjax js-octicon-loaders"
     role="navigation"
     data-pjax="#js-repo-pjax-container"
     data-issue-count-url="/neveldo/jQuery-Mapael/issues/counts">
  <ul class="sunken-menu-group">
    <li class="tooltipped tooltipped-w" aria-label="Code">
      <a href="/neveldo/jQuery-Mapael" aria-label="Code" aria-selected="true" class="js-selected-navigation-item selected sunken-menu-item" data-hotkey="g c" data-selected-links="repo_source repo_downloads repo_commits repo_releases repo_tags repo_branches /neveldo/jQuery-Mapael">
        <span class="octicon octicon-code"></span> <span class="full-word">Code</span>
        <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>    </li>

      <li class="tooltipped tooltipped-w" aria-label="Issues">
        <a href="/neveldo/jQuery-Mapael/issues" aria-label="Issues" class="js-selected-navigation-item sunken-menu-item" data-hotkey="g i" data-selected-links="repo_issues repo_labels repo_milestones /neveldo/jQuery-Mapael/issues">
          <span class="octicon octicon-issue-opened"></span> <span class="full-word">Issues</span>
          <span class="js-issue-replace-counter"></span>
          <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

    <li class="tooltipped tooltipped-w" aria-label="Pull requests">
      <a href="/neveldo/jQuery-Mapael/pulls" aria-label="Pull requests" class="js-selected-navigation-item sunken-menu-item" data-hotkey="g p" data-selected-links="repo_pulls /neveldo/jQuery-Mapael/pulls">
          <span class="octicon octicon-git-pull-request"></span> <span class="full-word">Pull requests</span>
          <span class="js-pull-replace-counter"></span>
          <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>    </li>

      <li class="tooltipped tooltipped-w" aria-label="Wiki">
        <a href="/neveldo/jQuery-Mapael/wiki" aria-label="Wiki" class="js-selected-navigation-item sunken-menu-item" data-hotkey="g w" data-selected-links="repo_wiki /neveldo/jQuery-Mapael/wiki">
          <span class="octicon octicon-book"></span> <span class="full-word">Wiki</span>
          <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>
  </ul>
  <div class="sunken-menu-separator"></div>
  <ul class="sunken-menu-group">

    <li class="tooltipped tooltipped-w" aria-label="Pulse">
      <a href="/neveldo/jQuery-Mapael/pulse" aria-label="Pulse" class="js-selected-navigation-item sunken-menu-item" data-selected-links="pulse /neveldo/jQuery-Mapael/pulse">
        <span class="octicon octicon-pulse"></span> <span class="full-word">Pulse</span>
        <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>    </li>

    <li class="tooltipped tooltipped-w" aria-label="Graphs">
      <a href="/neveldo/jQuery-Mapael/graphs" aria-label="Graphs" class="js-selected-navigation-item sunken-menu-item" data-selected-links="repo_graphs repo_contributors /neveldo/jQuery-Mapael/graphs">
        <span class="octicon octicon-graph"></span> <span class="full-word">Graphs</span>
        <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>    </li>
  </ul>


</nav>

            <div class="only-with-full-nav">
                
<div class="js-clone-url clone-url open"
  data-protocol-type="http">
  <h3 class="text-small text-muted"><span class="text-emphasized">HTTPS</span> clone URL</h3>
  <div class="input-group js-zeroclipboard-container">
    <input type="text" class="input-mini text-small text-muted input-monospace js-url-field js-zeroclipboard-target"
           value="https://github.com/neveldo/jQuery-Mapael.git" readonly="readonly" aria-label="HTTPS clone URL">
    <span class="input-group-button">
      <button aria-label="Copy to clipboard" class="js-zeroclipboard btn btn-sm zeroclipboard-button tooltipped tooltipped-s" data-copied-hint="Copied!" type="button"><span class="octicon octicon-clippy"></span></button>
    </span>
  </div>
</div>

  
<div class="js-clone-url clone-url "
  data-protocol-type="ssh">
  <h3 class="text-small text-muted"><span class="text-emphasized">SSH</span> clone URL</h3>
  <div class="input-group js-zeroclipboard-container">
    <input type="text" class="input-mini text-small text-muted input-monospace js-url-field js-zeroclipboard-target"
           value="git@github.com:neveldo/jQuery-Mapael.git" readonly="readonly" aria-label="SSH clone URL">
    <span class="input-group-button">
      <button aria-label="Copy to clipboard" class="js-zeroclipboard btn btn-sm zeroclipboard-button tooltipped tooltipped-s" data-copied-hint="Copied!" type="button"><span class="octicon octicon-clippy"></span></button>
    </span>
  </div>
</div>

  
<div class="js-clone-url clone-url "
  data-protocol-type="subversion">
  <h3 class="text-small text-muted"><span class="text-emphasized">Subversion</span> checkout URL</h3>
  <div class="input-group js-zeroclipboard-container">
    <input type="text" class="input-mini text-small text-muted input-monospace js-url-field js-zeroclipboard-target"
           value="https://github.com/neveldo/jQuery-Mapael" readonly="readonly" aria-label="Subversion checkout URL">
    <span class="input-group-button">
      <button aria-label="Copy to clipboard" class="js-zeroclipboard btn btn-sm zeroclipboard-button tooltipped tooltipped-s" data-copied-hint="Copied!" type="button"><span class="octicon octicon-clippy"></span></button>
    </span>
  </div>
</div>



<div class="clone-options text-small text-muted">You can clone with
  <!-- </textarea> --><!-- '"` --><form accept-charset="UTF-8" action="/users/set_protocol?protocol_selector=http&amp;protocol_type=clone" class="inline-form js-clone-selector-form is-enabled" data-form-nonce="f24d62dff2013b9678f49d7cd7820f49cd1d1b23" data-remote="true" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="jC5OuNzF4EYTtDTfAY5j86hDjlm3h4c3q7txC4CYpJLajlZQLA/S09x5Ljd+BkWUwfx45RfloKVWOxO3PkTz0g==" /></div><button class="btn-link js-clone-selector" data-protocol="http" type="submit">HTTPS</button></form>, <!-- </textarea> --><!-- '"` --><form accept-charset="UTF-8" action="/users/set_protocol?protocol_selector=ssh&amp;protocol_type=clone" class="inline-form js-clone-selector-form is-enabled" data-form-nonce="f24d62dff2013b9678f49d7cd7820f49cd1d1b23" data-remote="true" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="Wu+bu+NvWuHeMe0U9rZG1r96EuAiaFrfGjv4+B0pT1OTm0tizz4Z36h23eXwqBZB+Iq1ypFPrZixczIcEU2gaQ==" /></div><button class="btn-link js-clone-selector" data-protocol="ssh" type="submit">SSH</button></form>, or <!-- </textarea> --><!-- '"` --><form accept-charset="UTF-8" action="/users/set_protocol?protocol_selector=subversion&amp;protocol_type=clone" class="inline-form js-clone-selector-form is-enabled" data-form-nonce="f24d62dff2013b9678f49d7cd7820f49cd1d1b23" data-remote="true" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="3SkYa5088Kq0QI+0ddK5UTF9PufJcANCcyuf5ohZM6t+NQzJERDObnWM8nHen1Mcj2DE7QbAKWiCwNIGZBoLpQ==" /></div><button class="btn-link js-clone-selector" data-protocol="subversion" type="submit">Subversion</button></form>.
  <a href="https://help.github.com/articles/which-remote-url-should-i-use" class="help tooltipped tooltipped-n" aria-label="Get help on which URL is right for you.">
    <span class="octicon octicon-question"></span>
  </a>
</div>
  <a href="github-mac://openRepo/https://github.com/neveldo/jQuery-Mapael" class="btn btn-sm sidebar-button" title="Save neveldo/jQuery-Mapael to your computer and use it in GitHub Desktop." aria-label="Save neveldo/jQuery-Mapael to your computer and use it in GitHub Desktop.">
    <span class="octicon octicon-desktop-download"></span>
    Clone in Desktop
  </a>

              <a href="/neveldo/jQuery-Mapael/archive/master.zip"
                 class="btn btn-sm sidebar-button"
                 aria-label="Download the contents of neveldo/jQuery-Mapael as a zip file"
                 title="Download the contents of neveldo/jQuery-Mapael as a zip file"
                 rel="nofollow">
                <span class="octicon octicon-cloud-download"></span>
                Download ZIP
              </a>
            </div>
        </div>
        <div id="js-repo-pjax-container" class="repository-content context-loader-container" data-pjax-container>

          

<a href="/neveldo/jQuery-Mapael/blob/d0ec9a1c2664c68831c991c167c3716cac70da74/js/maps/france_departments.js" class="hidden js-permalink-shortcut" data-hotkey="y">Permalink</a>

<!-- blob contrib key: blob_contributors:v21:466e2db92eded8b6b3f47b6622a849e5 -->

  <div class="file-navigation js-zeroclipboard-container">
    
<div class="select-menu js-menu-container js-select-menu left">
  <button class="btn btn-sm select-menu-button js-menu-target css-truncate" data-hotkey="w"
    title="master"
    type="button" aria-label="Switch branches or tags" tabindex="0" aria-haspopup="true">
    <i>Branch:</i>
    <span class="js-select-button css-truncate-target">master</span>
  </button>

  <div class="select-menu-modal-holder js-menu-content js-navigation-container" data-pjax aria-hidden="true">

    <div class="select-menu-modal">
      <div class="select-menu-header">
        <span class="octicon octicon-x js-menu-close" role="button" aria-label="Close"></span>
        <span class="select-menu-title">Switch branches/tags</span>
      </div>

      <div class="select-menu-filters">
        <div class="select-menu-text-filter">
          <input type="text" aria-label="Filter branches/tags" id="context-commitish-filter-field" class="js-filterable-field js-navigation-enable" placeholder="Filter branches/tags">
        </div>
        <div class="select-menu-tabs">
          <ul>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="branches" data-filter-placeholder="Filter branches/tags" class="js-select-menu-tab" role="tab">Branches</a>
            </li>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="tags" data-filter-placeholder="Find a tag…" class="js-select-menu-tab" role="tab">Tags</a>
            </li>
          </ul>
        </div>
      </div>

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="branches" role="menu">

        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


            <a class="select-menu-item js-navigation-item js-navigation-open selected"
               href="/neveldo/jQuery-Mapael/blob/master/js/maps/france_departments.js"
               data-name="master"
               data-skip-pjax="true"
               rel="nofollow">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <span class="select-menu-item-text css-truncate-target" title="master">
                master
              </span>
            </a>
        </div>

          <div class="select-menu-no-results">Nothing to show</div>
      </div>

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="tags">
        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/neveldo/jQuery-Mapael/tree/1.1.0/js/maps/france_departments.js"
                 data-name="1.1.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="1.1.0">1.1.0</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/neveldo/jQuery-Mapael/tree/1.0.1/js/maps/france_departments.js"
                 data-name="1.0.1"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="1.0.1">1.0.1</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/neveldo/jQuery-Mapael/tree/1.0.0/js/maps/france_departments.js"
                 data-name="1.0.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="1.0.0">1.0.0</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/neveldo/jQuery-Mapael/tree/0.7.1/js/maps/france_departments.js"
                 data-name="0.7.1"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="0.7.1">0.7.1</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/neveldo/jQuery-Mapael/tree/0.7.0/js/maps/france_departments.js"
                 data-name="0.7.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="0.7.0">0.7.0</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/neveldo/jQuery-Mapael/tree/0.6.0/js/maps/france_departments.js"
                 data-name="0.6.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="0.6.0">0.6.0</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/neveldo/jQuery-Mapael/tree/0.5.1/js/maps/france_departments.js"
                 data-name="0.5.1"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="0.5.1">0.5.1</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/neveldo/jQuery-Mapael/tree/0.4.0/js/maps/france_departments.js"
                 data-name="0.4.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="0.4.0">0.4.0</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/neveldo/jQuery-Mapael/tree/0.3.0/js/maps/france_departments.js"
                 data-name="0.3.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="0.3.0">0.3.0</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/neveldo/jQuery-Mapael/tree/0.2.2/js/maps/france_departments.js"
                 data-name="0.2.2"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="0.2.2">0.2.2</a>
            </div>
        </div>

        <div class="select-menu-no-results">Nothing to show</div>
      </div>

    </div>
  </div>
</div>

    <div class="btn-group right">
      <a href="/neveldo/jQuery-Mapael/find/master"
            class="js-show-file-finder btn btn-sm empty-icon tooltipped tooltipped-nw"
            data-pjax
            data-hotkey="t"
            aria-label="Quickly jump between files">
        <span class="octicon octicon-list-unordered"></span>
      </a>
      <button aria-label="Copy file path to clipboard" class="js-zeroclipboard btn btn-sm zeroclipboard-button tooltipped tooltipped-s" data-copied-hint="Copied!" type="button"><span class="octicon octicon-clippy"></span></button>
    </div>

    <div class="breadcrumb js-zeroclipboard-target">
      <span class="repo-root js-repo-root"><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/neveldo/jQuery-Mapael" class="" data-branch="master" data-pjax="true" itemscope="url"><span itemprop="title">jQuery-Mapael</span></a></span></span><span class="separator">/</span><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/neveldo/jQuery-Mapael/tree/master/js" class="" data-branch="master" data-pjax="true" itemscope="url"><span itemprop="title">js</span></a></span><span class="separator">/</span><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/neveldo/jQuery-Mapael/tree/master/js/maps" class="" data-branch="master" data-pjax="true" itemscope="url"><span itemprop="title">maps</span></a></span><span class="separator">/</span><strong class="final-path">france_departments.js</strong>
    </div>
  </div>


  <div class="commit-tease">
      <span class="right">
        <a class="commit-tease-sha" href="/neveldo/jQuery-Mapael/commit/56f941f5ce03254a4cb65963860a9868a6813da9" data-pjax>
          56f941f
        </a>
        <time datetime="2015-10-28T12:47:30Z" is="relative-time">Oct 28, 2015</time>
      </span>
      <div>
        <img alt="@neveldo" class="avatar" height="20" src="https://avatars3.githubusercontent.com/u/1663176?v=3&amp;s=40" width="20" />
        <a href="/neveldo" class="user-mention" rel="author">neveldo</a>
          <a href="/neveldo/jQuery-Mapael/commit/56f941f5ce03254a4cb65963860a9868a6813da9" class="message" data-pjax="true" title="Added AMD and CommonJS compatibility">Added AMD and CommonJS compatibility</a>
      </div>

    <div class="commit-tease-contributors">
      <a class="muted-link contributors-toggle" href="#blob_contributors_box" rel="facebox">
        <strong>1</strong>
         contributor
      </a>
      
    </div>

    <div id="blob_contributors_box" style="display:none">
      <h2 class="facebox-header" data-facebox-id="facebox-header">Users who have contributed to this file</h2>
      <ul class="facebox-user-list" data-facebox-id="facebox-description">
          <li class="facebox-user-list-item">
            <img alt="@neveldo" height="24" src="https://avatars1.githubusercontent.com/u/1663176?v=3&amp;s=48" width="24" />
            <a href="/neveldo">neveldo</a>
          </li>
      </ul>
    </div>
  </div>

<div class="file">
  <div class="file-header">
  <div class="file-actions">

    <div class="btn-group">
      <a href="/neveldo/jQuery-Mapael/raw/master/js/maps/france_departments.js" class="btn btn-sm " id="raw-url">Raw</a>
        <a href="/neveldo/jQuery-Mapael/blame/master/js/maps/france_departments.js" class="btn btn-sm js-update-url-with-hash">Blame</a>
      <a href="/neveldo/jQuery-Mapael/commits/master/js/maps/france_departments.js" class="btn btn-sm " rel="nofollow">History</a>
    </div>

        <a class="octicon-btn tooltipped tooltipped-nw"
           href="github-mac://openRepo/https://github.com/neveldo/jQuery-Mapael?branch=master&amp;filepath=js%2Fmaps%2Ffrance_departments.js"
           aria-label="Open this file in GitHub Desktop"
           data-ga-click="Repository, open with desktop, type:mac">
            <span class="octicon octicon-device-desktop"></span>
        </a>

        <!-- </textarea> --><!-- '"` --><form accept-charset="UTF-8" action="/neveldo/jQuery-Mapael/edit/master/js/maps/france_departments.js" class="inline-form js-update-url-with-hash" data-form-nonce="f24d62dff2013b9678f49d7cd7820f49cd1d1b23" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="sqii6LUD5cqt2hMx6B+nPWL/TOeFjL6Y/1z+BGaToH3V/wvgm5Pp+psNhnxYNbjqChIW2b2efjL26pUx7v6cpg==" /></div>
          <button class="octicon-btn tooltipped tooltipped-nw" type="submit"
            aria-label="Fork this project and edit the file" data-hotkey="e" data-disable-with>
            <span class="octicon octicon-pencil"></span>
          </button>
</form>        <!-- </textarea> --><!-- '"` --><form accept-charset="UTF-8" action="/neveldo/jQuery-Mapael/delete/master/js/maps/france_departments.js" class="inline-form" data-form-nonce="f24d62dff2013b9678f49d7cd7820f49cd1d1b23" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="xK/v4iQQukTjNopwZTdNFJY4IxjRxfOoGsFKe2u0xr6KLUx1i9AqmMpduj6s6P/3HC1IGXL/US8xUCWCyZEfcw==" /></div>
          <button class="octicon-btn octicon-btn-danger tooltipped tooltipped-nw" type="submit"
            aria-label="Fork this project and delete the file" data-disable-with>
            <span class="octicon octicon-trashcan"></span>
          </button>
</form>  </div>

  <div class="file-info">
      159 lines (152 sloc)
      <span class="file-info-divider"></span>
    134 KB
  </div>
</div>

  

  <div class="blob-wrapper data type-javascript">
      <table class="highlight tab-size js-file-line-container" data-tab-size="8">
      <tr>
        <td id="L1" class="blob-num js-line-number" data-line-number="1"></td>
        <td id="LC1" class="blob-code blob-code-inner js-file-line"><span class="pl-c">/**</span></td>
      </tr>
      <tr>
        <td id="L2" class="blob-num js-line-number" data-line-number="2"></td>
        <td id="LC2" class="blob-code blob-code-inner js-file-line"><span class="pl-c">*</span></td>
      </tr>
      <tr>
        <td id="L3" class="blob-num js-line-number" data-line-number="3"></td>
        <td id="LC3" class="blob-code blob-code-inner js-file-line"><span class="pl-c">* Jquery Mapael - Dynamic maps jQuery plugin (based on raphael.js)</span></td>
      </tr>
      <tr>
        <td id="L4" class="blob-num js-line-number" data-line-number="4"></td>
        <td id="LC4" class="blob-code blob-code-inner js-file-line"><span class="pl-c">* Requires jQuery and Mapael</span></td>
      </tr>
      <tr>
        <td id="L5" class="blob-num js-line-number" data-line-number="5"></td>
        <td id="LC5" class="blob-code blob-code-inner js-file-line"><span class="pl-c">*</span></td>
      </tr>
      <tr>
        <td id="L6" class="blob-num js-line-number" data-line-number="6"></td>
        <td id="LC6" class="blob-code blob-code-inner js-file-line"><span class="pl-c">* Map of metropolitan France by department</span></td>
      </tr>
      <tr>
        <td id="L7" class="blob-num js-line-number" data-line-number="7"></td>
        <td id="LC7" class="blob-code blob-code-inner js-file-line"><span class="pl-c">* Equirectangular projection</span></td>
      </tr>
      <tr>
        <td id="L8" class="blob-num js-line-number" data-line-number="8"></td>
        <td id="LC8" class="blob-code blob-code-inner js-file-line"><span class="pl-c"></span></td>
      </tr>
      <tr>
        <td id="L9" class="blob-num js-line-number" data-line-number="9"></td>
        <td id="LC9" class="blob-code blob-code-inner js-file-line"><span class="pl-c">* <span class="pl-k">@author</span> Vincent Brouté</span></td>
      </tr>
      <tr>
        <td id="L10" class="blob-num js-line-number" data-line-number="10"></td>
        <td id="LC10" class="blob-code blob-code-inner js-file-line"><span class="pl-c">* @source http://fr.m.wikipedia.org/wiki/Fichier:France_location_map-Departements.svg</span></td>
      </tr>
      <tr>
        <td id="L11" class="blob-num js-line-number" data-line-number="11"></td>
        <td id="LC11" class="blob-code blob-code-inner js-file-line"><span class="pl-c">*/</span></td>
      </tr>
      <tr>
        <td id="L12" class="blob-num js-line-number" data-line-number="12"></td>
        <td id="LC12" class="blob-code blob-code-inner js-file-line">(<span class="pl-k">function</span> (<span class="pl-smi">factory</span>) {</td>
      </tr>
      <tr>
        <td id="L13" class="blob-num js-line-number" data-line-number="13"></td>
        <td id="LC13" class="blob-code blob-code-inner js-file-line">    <span class="pl-k">if</span> (<span class="pl-k">typeof</span> <span class="pl-c1">exports</span> <span class="pl-k">===</span> <span class="pl-s"><span class="pl-pds">&#39;</span>object<span class="pl-pds">&#39;</span></span>) {</td>
      </tr>
      <tr>
        <td id="L14" class="blob-num js-line-number" data-line-number="14"></td>
        <td id="LC14" class="blob-code blob-code-inner js-file-line">        <span class="pl-c">// CommonJS</span></td>
      </tr>
      <tr>
        <td id="L15" class="blob-num js-line-number" data-line-number="15"></td>
        <td id="LC15" class="blob-code blob-code-inner js-file-line">        <span class="pl-c1">module</span>.exports <span class="pl-k">=</span> factory(<span class="pl-c1">require</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>jquery<span class="pl-pds">&#39;</span></span>), <span class="pl-c1">require</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>mapael<span class="pl-pds">&#39;</span></span>));</td>
      </tr>
      <tr>
        <td id="L16" class="blob-num js-line-number" data-line-number="16"></td>
        <td id="LC16" class="blob-code blob-code-inner js-file-line">    } <span class="pl-k">else</span> <span class="pl-k">if</span> (<span class="pl-k">typeof</span> define <span class="pl-k">===</span> <span class="pl-s"><span class="pl-pds">&#39;</span>function<span class="pl-pds">&#39;</span></span> <span class="pl-k">&amp;&amp;</span> define.amd) {</td>
      </tr>
      <tr>
        <td id="L17" class="blob-num js-line-number" data-line-number="17"></td>
        <td id="LC17" class="blob-code blob-code-inner js-file-line">        <span class="pl-c">// AMD. Register as an anonymous module.</span></td>
      </tr>
      <tr>
        <td id="L18" class="blob-num js-line-number" data-line-number="18"></td>
        <td id="LC18" class="blob-code blob-code-inner js-file-line">        define([<span class="pl-s"><span class="pl-pds">&#39;</span>jquery<span class="pl-pds">&#39;</span></span>, <span class="pl-s"><span class="pl-pds">&#39;</span>mapael<span class="pl-pds">&#39;</span></span>], factory);</td>
      </tr>
      <tr>
        <td id="L19" class="blob-num js-line-number" data-line-number="19"></td>
        <td id="LC19" class="blob-code blob-code-inner js-file-line">    } <span class="pl-k">else</span> {</td>
      </tr>
      <tr>
        <td id="L20" class="blob-num js-line-number" data-line-number="20"></td>
        <td id="LC20" class="blob-code blob-code-inner js-file-line">        <span class="pl-c">// Browser globals</span></td>
      </tr>
      <tr>
        <td id="L21" class="blob-num js-line-number" data-line-number="21"></td>
        <td id="LC21" class="blob-code blob-code-inner js-file-line">        factory(jQuery, jQuery.fn.mapael);</td>
      </tr>
      <tr>
        <td id="L22" class="blob-num js-line-number" data-line-number="22"></td>
        <td id="LC22" class="blob-code blob-code-inner js-file-line">    }</td>
      </tr>
      <tr>
        <td id="L23" class="blob-num js-line-number" data-line-number="23"></td>
        <td id="LC23" class="blob-code blob-code-inner js-file-line">}(<span class="pl-k">function</span> (<span class="pl-smi">$</span>, <span class="pl-smi">Mapael</span>) {</td>
      </tr>
      <tr>
        <td id="L24" class="blob-num js-line-number" data-line-number="24"></td>
        <td id="LC24" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L25" class="blob-num js-line-number" data-line-number="25"></td>
        <td id="LC25" class="blob-code blob-code-inner js-file-line">	<span class="pl-s"><span class="pl-pds">&quot;</span>use strict<span class="pl-pds">&quot;</span></span>;</td>
      </tr>
      <tr>
        <td id="L26" class="blob-num js-line-number" data-line-number="26"></td>
        <td id="LC26" class="blob-code blob-code-inner js-file-line">	</td>
      </tr>
      <tr>
        <td id="L27" class="blob-num js-line-number" data-line-number="27"></td>
        <td id="LC27" class="blob-code blob-code-inner js-file-line">	$.extend(<span class="pl-c1">true</span>, Mapael, </td>
      </tr>
      <tr>
        <td id="L28" class="blob-num js-line-number" data-line-number="28"></td>
        <td id="LC28" class="blob-code blob-code-inner js-file-line">		{</td>
      </tr>
      <tr>
        <td id="L29" class="blob-num js-line-number" data-line-number="29"></td>
        <td id="LC29" class="blob-code blob-code-inner js-file-line">			maps <span class="pl-k">:</span> {</td>
      </tr>
      <tr>
        <td id="L30" class="blob-num js-line-number" data-line-number="30"></td>
        <td id="LC30" class="blob-code blob-code-inner js-file-line">				france_departments <span class="pl-k">:</span> {</td>
      </tr>
      <tr>
        <td id="L31" class="blob-num js-line-number" data-line-number="31"></td>
        <td id="LC31" class="blob-code blob-code-inner js-file-line">					width <span class="pl-k">:</span> <span class="pl-c1">600.08728</span>, </td>
      </tr>
      <tr>
        <td id="L32" class="blob-num js-line-number" data-line-number="32"></td>
        <td id="LC32" class="blob-code blob-code-inner js-file-line">					height <span class="pl-k">:</span> <span class="pl-c1">626.26221</span>,</td>
      </tr>
      <tr>
        <td id="L33" class="blob-num js-line-number" data-line-number="33"></td>
        <td id="LC33" class="blob-code blob-code-inner js-file-line">					<span class="pl-en">getCoords</span> <span class="pl-k">:</span> <span class="pl-k">function</span> (<span class="pl-smi">lat</span>, <span class="pl-smi">lon</span>) {</td>
      </tr>
      <tr>
        <td id="L34" class="blob-num js-line-number" data-line-number="34"></td>
        <td id="LC34" class="blob-code blob-code-inner js-file-line">						<span class="pl-c">// Corse</span></td>
      </tr>
      <tr>
        <td id="L35" class="blob-num js-line-number" data-line-number="35"></td>
        <td id="LC35" class="blob-code blob-code-inner js-file-line">						<span class="pl-k">if</span> (lat <span class="pl-k">&lt;</span> <span class="pl-c1">43.15710</span> <span class="pl-k">&amp;&amp;</span> lon <span class="pl-k">&gt;</span> <span class="pl-c1">8.17199</span>) {</td>
      </tr>
      <tr>
        <td id="L36" class="blob-num js-line-number" data-line-number="36"></td>
        <td id="LC36" class="blob-code blob-code-inner js-file-line">							<span class="pl-k">var</span> xfactor <span class="pl-k">=</span> <span class="pl-c1">43.64246</span>;</td>
      </tr>
      <tr>
        <td id="L37" class="blob-num js-line-number" data-line-number="37"></td>
        <td id="LC37" class="blob-code blob-code-inner js-file-line">							<span class="pl-k">var</span> xoffset <span class="pl-k">=</span> <span class="pl-c1">181.34520</span>;</td>
      </tr>
      <tr>
        <td id="L38" class="blob-num js-line-number" data-line-number="38"></td>
        <td id="LC38" class="blob-code blob-code-inner js-file-line">							<span class="pl-k">var</span> x <span class="pl-k">=</span> (lon <span class="pl-k">*</span> xfactor) <span class="pl-k">+</span> xoffset;</td>
      </tr>
      <tr>
        <td id="L39" class="blob-num js-line-number" data-line-number="39"></td>
        <td id="LC39" class="blob-code blob-code-inner js-file-line">							</td>
      </tr>
      <tr>
        <td id="L40" class="blob-num js-line-number" data-line-number="40"></td>
        <td id="LC40" class="blob-code blob-code-inner js-file-line">							<span class="pl-k">var</span> yfactor <span class="pl-k">=</span> <span class="pl-k">-</span><span class="pl-c1">65.77758</span>;</td>
      </tr>
      <tr>
        <td id="L41" class="blob-num js-line-number" data-line-number="41"></td>
        <td id="LC41" class="blob-code blob-code-inner js-file-line">							<span class="pl-k">var</span> yoffset <span class="pl-k">=</span> <span class="pl-c1">3346.37839</span>;</td>
      </tr>
      <tr>
        <td id="L42" class="blob-num js-line-number" data-line-number="42"></td>
        <td id="LC42" class="blob-code blob-code-inner js-file-line">							<span class="pl-k">var</span> y <span class="pl-k">=</span> (lat <span class="pl-k">*</span> yfactor) <span class="pl-k">+</span> yoffset;</td>
      </tr>
      <tr>
        <td id="L43" class="blob-num js-line-number" data-line-number="43"></td>
        <td id="LC43" class="blob-code blob-code-inner js-file-line">						} <span class="pl-k">else</span> {</td>
      </tr>
      <tr>
        <td id="L44" class="blob-num js-line-number" data-line-number="44"></td>
        <td id="LC44" class="blob-code blob-code-inner js-file-line">							<span class="pl-k">var</span> xfactor <span class="pl-k">=</span> <span class="pl-c1">45.48385</span>;</td>
      </tr>
      <tr>
        <td id="L45" class="blob-num js-line-number" data-line-number="45"></td>
        <td id="LC45" class="blob-code blob-code-inner js-file-line">							<span class="pl-k">var</span> xoffset <span class="pl-k">=</span> <span class="pl-c1">220.22005</span>;</td>
      </tr>
      <tr>
        <td id="L46" class="blob-num js-line-number" data-line-number="46"></td>
        <td id="LC46" class="blob-code blob-code-inner js-file-line">							<span class="pl-k">var</span> x <span class="pl-k">=</span> (lon <span class="pl-k">*</span> xfactor) <span class="pl-k">+</span> xoffset;</td>
      </tr>
      <tr>
        <td id="L47" class="blob-num js-line-number" data-line-number="47"></td>
        <td id="LC47" class="blob-code blob-code-inner js-file-line">							</td>
      </tr>
      <tr>
        <td id="L48" class="blob-num js-line-number" data-line-number="48"></td>
        <td id="LC48" class="blob-code blob-code-inner js-file-line">							<span class="pl-k">var</span> yfactor <span class="pl-k">=</span> <span class="pl-k">-</span><span class="pl-c1">65.97284</span>;</td>
      </tr>
      <tr>
        <td id="L49" class="blob-num js-line-number" data-line-number="49"></td>
        <td id="LC49" class="blob-code blob-code-inner js-file-line">							<span class="pl-k">var</span> yoffset <span class="pl-k">=</span> <span class="pl-c1">3371.10748</span>;</td>
      </tr>
      <tr>
        <td id="L50" class="blob-num js-line-number" data-line-number="50"></td>
        <td id="LC50" class="blob-code blob-code-inner js-file-line">							<span class="pl-k">var</span> y <span class="pl-k">=</span> (lat <span class="pl-k">*</span> yfactor) <span class="pl-k">+</span> yoffset;</td>
      </tr>
      <tr>
        <td id="L51" class="blob-num js-line-number" data-line-number="51"></td>
        <td id="LC51" class="blob-code blob-code-inner js-file-line">						}</td>
      </tr>
      <tr>
        <td id="L52" class="blob-num js-line-number" data-line-number="52"></td>
        <td id="LC52" class="blob-code blob-code-inner js-file-line">						<span class="pl-k">return</span> {x <span class="pl-k">:</span> x, y <span class="pl-k">:</span> y};</td>
      </tr>
      <tr>
        <td id="L53" class="blob-num js-line-number" data-line-number="53"></td>
        <td id="LC53" class="blob-code blob-code-inner js-file-line">					},</td>
      </tr>
      <tr>
        <td id="L54" class="blob-num js-line-number" data-line-number="54"></td>
        <td id="LC54" class="blob-code blob-code-inner js-file-line">					elems <span class="pl-k">:</span> {</td>
      </tr>
      <tr>
        <td id="L55" class="blob-num js-line-number" data-line-number="55"></td>
        <td id="LC55" class="blob-code blob-code-inner js-file-line">						&quot;department-29&quot; : &quot;m 37.28,156.11 c -1.42,1.23 -3.84,1.18 -3.99,3.49 -1.31,-2.24 -8,-0.27 -6.23,1.86 -0.83,0.29 -3.61,-0.09 -4.72,1.08 1.27,-3.15 -2.84,-2.76 -4.74,-1.32 -1.52,0.3 0.5,1.51 -1.67,1.26 -1.43,1.46 -5.78,-1.22 -5,1.7 2.01,2.28 -4.44,-1.17 -2.19,2.21 2.05,2.35 -1.91,-1.21 -3.2,0.17 -2.44,0.46 -5.9,3.28 -4.27,6.2 1.31,1.03 -2.45,2.79 -0.89,4.68 1.85,1.54 -1.54,4.66 1.85,4.99 2.29,0.7 2.49,-2.98 4.87,-0.96 3.08,0.74 5.89,-2.07 8.89,-2.74 1.93,-0.34 5.67,-2.04 6.34,-1.85 -2,1.78 -5.83,1.89 -6.41,4.93 -0.69,1.92 2.11,-0.67 2.33,1.07 1.34,-0.89 2.68,-1.87 3.94,-1.39 3.81,-2.03 -2.75,2.24 0.52,1.99 1.47,0.34 4.01,0.96 4.33,1.46 -1.94,0.3 -3.28,1.07 -4.57,-0.08 -2.38,0.71 -4.58,1.45 -6.63,0.05 -2.75,0.86 -5.75,0.61 -4.18,-2.84 -3.29,-0.24 -0.4,5.1 -3.79,3.67 -1.2,2.84 5.41,0.67 2.62,3.42 0.89,1.41 -0.15,5.78 1.86,2.76 0.83,-2.29 2.62,-4.57 5.09,-2.36 1.97,1.37 5.1,0.79 5.41,4 1.86,2.04 -0.29,6.23 -3,3.6 -3.95,0.62 -7.67,1.95 -11.58,2.45 -2.09,0.38 -5.98,-0.08 -4.41,2.7 2.53,0.06 4.87,1.62 7.03,1.82 2.62,-1.48 5.9,3.16 7.51,5.27 1.61,2.44 2.66,5.4 0.91,7.66 1.94,1.19 5.11,1.18 7.5,0.75 1.99,-0.45 3.16,-2.44 1.04,-3.28 -1.05,-1.98 0.82,-2.27 1.51,-0.45 3.34,0.23 -0.63,-4.11 0.69,-3.65 0.91,2.75 3.66,3.46 5.82,3.53 2.26,0.86 -0.02,-4.66 2.92,-2.01 2.11,1.7 2.69,4.22 4.57,6.13 2.01,0.11 4.17,0.12 6.01,-0.65 1.82,2.12 5.68,2.27 8.25,2.23 1.8,-1.51 -1.55,-4.66 0.95,-5.09 0.94,2.57 3.24,-0.19 3.58,-1.33 2.95,0.23 0.38,-3.13 2.08,-4.2 -0.21,-1.43 -0.64,-3.61 -2.53,-1.94 -1.44,2.09 -1.76,-1.59 -3.7,-1.52 -2.13,-1.41 -5.77,1.37 -6.1,-2.55 -0.44,-2.07 -2.04,-3.22 -2.32,-5.05 -2.23,-0.45 0.49,-4.53 2.59,-4.02 1.42,-1.43 5.76,-1.87 5.77,-3.15 -3.54,-1.5 2.53,-4.55 -0.88,-5.73 0.6,-1.35 -0.87,-3.79 -0.56,-5.72 -3.53,0.13 -1.65,-3.79 0.06,-4.6 -3.56,-1.53 -0.98,-4.21 0.33,-6.05 -1.3,-1.16 -2.22,-1.16 -1.99,-2.94 -3.12,-0.26 -3.41,-4.67 -2.3,-6.54 -0.38,-1.53 -3.23,-0.42 -4.45,-1.94 -2.01,-0.12 -5.18,-1.19 -4.7,2.29 -0.84,1.4 0.25,4.35 -1.82,2.22 -1.36,-0.49 -0.48,-3.38 -2.36,-1.3 -1.28,1.93 -1.52,-3.86 -1.99,-4.38 z m -9.88,28.66 0,0.02 0,-0.02 z&quot;,</td>
      </tr>
      <tr>
        <td id="L56" class="blob-num js-line-number" data-line-number="56"></td>
        <td id="LC56" class="blob-code blob-code-inner js-file-line">						&quot;department-22&quot; : &quot;m 77.67,146.73 c -2.58,0.94 -4.37,2.6 -5.78,4.84 1.21,-2.76 0.01,-6.18 -2.26,-2.58 -2.86,-0.54 -4.85,2.02 -7.32,2.35 0.05,-2.38 -5.14,-2.89 -4.97,-0.27 -1.65,0.69 -2.79,2.55 -0.54,3.83 1.42,1.41 -3.19,1.12 -1.21,3.58 0.75,2.79 -2.62,-0.53 -2.95,1.74 -2.03,2.25 0.93,5.14 2.73,6.11 -0.89,1.81 3.77,1.87 0.94,3.62 -2.27,1.33 -1.69,4.1 0.71,4.68 -2.37,0.99 -3.54,4.66 -0.18,4.93 -0.75,1.8 0.34,4.07 1.35,3.89 -2.23,1.45 2.07,3.31 -1.02,4.81 -1.32,1.63 3.39,3.81 -0.37,3.46 -0,1.68 3.4,-0.17 4.6,0.64 2.17,-1.15 0.09,3.47 2.84,1.65 2.78,-2.51 5.12,2.28 8.16,0.11 1.28,-1.21 4.21,0.16 3.71,-2.72 2.36,-2.11 5.53,-0.32 6.55,2.07 3.1,-1.66 5.66,1.79 8.52,1.44 1.09,1.13 1.31,4.63 2.54,1.67 1.77,0.69 4.7,-2.67 4.36,1 -1.42,1.92 -0.06,5.98 2.29,3.25 2.15,-1.33 3.24,-3.52 3.71,-5.84 -1.55,-1.8 3.03,-1.29 4.1,-2.17 2.56,0.5 2.84,5.71 5.3,2.6 2.48,-0.52 4.76,-2.21 4.35,-5.23 2.66,1.35 0.38,-3.98 3.68,-3.07 2.3,0.76 0.88,-1.21 2.74,-1.68 0.93,-2.46 3.26,2.1 3.88,-0.74 2.87,-0.05 0.28,-3.49 2.75,-3.67 -0.67,-1.88 -0.1,-4.12 -0.62,-6.07 1.57,-1.46 2.25,-5.3 0.59,-6.78 -0.36,1.32 -2.86,3.56 -2.08,0.75 -0.58,-2.28 -2.24,-1.04 -3,-0.66 -0.39,-2.19 -3.7,-1.69 -4.26,-4.29 -2.01,-0.96 -0.92,3.96 -2.61,1.33 -0.93,2.11 -1.72,-1.85 -2.25,-2.64 -0.23,-2.69 -5.02,3.57 -3.11,-0.38 2.12,-1.4 -0.5,-4.55 -1.42,-1.9 -1.94,1.15 -2.92,1.92 -4.85,1.1 -2.9,-0.12 0.52,1.54 -2.1,2.49 -3.58,0.78 -5.19,5.69 -8.5,5.48 0.49,3.36 -2.74,-0.19 -2.06,-1.81 -2.95,-1.1 -4.73,-3.24 -4.7,-6.38 -2,-2 -5.44,-3.63 -5.11,-6.81 -0.95,-1.07 -6.79,-1.08 -3.38,-3.09 0.47,-2.76 -4.12,-1.19 -3.66,1.11 -0.44,1.73 -2.27,2.41 -0.65,0.39 1.33,-1.47 1.44,-4.62 0.53,-6.14 z&quot;,</td>
      </tr>
      <tr>
        <td id="L57" class="blob-num js-line-number" data-line-number="57"></td>
        <td id="LC57" class="blob-code blob-code-inner js-file-line">						&quot;department-56&quot; : &quot;m 78.99,190.76 c -3.41,-1.13 -2.2,3.92 -5.32,2.9 -1.41,0.4 -1.19,1.61 -2.99,0.82 -1.13,0.79 -2.69,-0.38 -3.4,-0.47 -0.84,-2.28 -6.08,2.96 -4.76,-1.3 -1.92,-0.69 -4.61,-0.08 -6.81,-0.32 -2.56,1.49 -6.48,1.43 -6.89,4.97 1.66,0.45 1.27,1.18 1.54,2.72 2.29,1.28 1.38,6.71 5.21,4.85 2.27,-0.57 4.21,1.54 5.35,2.54 1.09,-1.75 3.9,-1.39 3.21,0.95 0.1,1.55 -1.11,2.84 -0.3,4.77 -2.2,-0.71 -3.03,4.58 -5.67,1.76 -1.43,0.94 1.23,2.98 -0.19,4.47 0.79,3.11 4.25,6.81 7.21,3.89 -1.96,-1.82 1.17,-1.04 2.08,-2.79 1.53,-1.34 1.85,-1.47 0.72,0.46 -0.96,1.01 -3.43,3.3 -0.38,3.09 1.49,0.45 3.45,4.36 4.77,2.88 -0.27,-2.53 3.83,-3.05 1.1,-5.44 1.05,0.63 2.71,-0.96 2.12,1.15 2.98,0.99 -0.94,3.03 -2.44,3.55 -2.08,3.14 3.5,3.77 1.75,6.92 -0.29,1.59 0.31,5.9 2.13,4.03 -1.68,-0.96 -1.89,-7.61 0.51,-4.94 -0.5,1.26 4.8,0.74 3.44,-1.25 0.35,-0.76 1.34,3.45 1.43,0.83 0.89,1.74 3.91,2.47 1.59,0.06 -0.51,-1.47 -0.02,-3.03 -0.87,-4.45 1.76,1.65 1.37,4.11 4.01,4.31 0.21,-1.28 1.88,-0.67 1.78,-2.23 1.83,0.46 2.89,-0.48 3.79,-0.93 2.28,0.82 -0.59,1.71 2.06,2.43 1.57,0.52 0.39,-4.11 1.62,-1.05 -0.46,2.03 -2.17,6.08 -4.56,4.17 -1.51,0.14 -2.97,0.56 -4.53,-0.67 -3.37,0.66 2.51,2.11 2.17,4.25 2.28,1.57 4.95,-1.33 7.46,-0.04 0.09,-2.03 1.34,-0.88 2.36,-1.71 -1.31,-1.38 4.01,-1.27 0.96,-0.1 0.22,1.93 4.41,-1.17 5.9,0.75 1.01,1.43 4.31,0.26 4.44,1.04 -2.33,0.43 -6.75,-0.69 -5.01,3.23 1.5,1.03 2.59,-3.6 4.01,-0.77 1.99,-0.12 4.3,0.38 4.4,-2.43 0.29,-2.58 2.25,-0.15 3.16,-0.22 1.19,-1.05 2.3,-1.01 2.74,0.42 1.6,-0.29 0.66,-3.06 3.03,-2.61 0.96,-1.59 -0.11,-4.05 1.01,-5.76 -1.21,-2.25 -1.75,-4.67 -1.62,-7.13 1.06,-1.01 4.05,-0.69 1.57,-1.96 -1.94,-0.06 -2.1,-1.17 -0.12,-1.66 0.89,-1.32 3.49,-4.07 1.04,-4.6 -2.47,1.93 -2.55,-3.4 -0.68,-4.04 -0.57,-3.25 -3.22,-4.81 -6.13,-5.41 -2.4,0.4 -4.25,0.1 -2.46,-2.49 0.6,-2.26 5.5,-0.56 4.09,-3.23 -1.75,-0.22 -3.84,2.7 -3.33,-0.63 0.01,-3.41 -3.32,-2.88 -4.84,-1.45 -0.88,-3.11 -3.48,-4.72 -6.36,-3.01 -2.15,-0.01 0.26,2.97 -2.05,3.88 -0.09,2.06 -3.87,4.92 -5.31,3.84 -1.21,-1.39 2.06,-7.27 -1.57,-5.21 -1.38,0.54 -2.88,0.33 -3.62,2.06 -0.18,-2.38 -1.59,-4.23 -4.05,-3.7 -1.5,-2.53 -4.89,-0.74 -6.39,-1.56 -0.77,-1.17 -1.33,-2.65 -3.1,-2.43 z&quot;,</td>
      </tr>
      <tr>
        <td id="L58" class="blob-num js-line-number" data-line-number="58"></td>
        <td id="LC58" class="blob-code blob-code-inner js-file-line">						&quot;department-35&quot; : &quot;m 134.53,157.78 c -2.29,1.25 -4.29,0.31 -6.19,1.59 -0.35,1.67 -2.93,2.17 -1.16,4.31 0.18,1.71 3.99,2.25 1.51,3.04 0.71,1.27 0.98,3.59 2.33,1.22 1.69,2.12 0.9,4.75 -0.11,6.67 -1.16,1.66 0.84,3.78 -0.19,5.68 1.34,1.46 -2.11,1.58 -0.78,3.48 0.21,2.25 -2.03,-0.13 -2.56,2.08 -1.42,-0.68 -2.58,-1.61 -3.47,0.21 -1.19,0.31 -0.39,2.42 -2.44,1.14 -3.01,-0.11 -1.06,4.1 -3.56,3.46 -0.04,2.21 -0.64,4.46 -2.86,4.2 0.62,1.53 1.56,3.49 1.75,5.16 0.54,-2.03 5.23,-1.03 2.52,0.76 -2.33,-0.69 -5.1,2.03 -3.97,3.88 2.89,-0.33 6.41,0.27 7.93,3.03 1.44,1.66 0.87,2.99 -0.39,4.33 0.11,1.6 0.84,3.69 2.2,1.35 0.71,-0.77 0.83,2.07 1.01,2.45 -1.23,1.26 -2.05,2.91 -3.28,3.92 1.71,0.13 3.61,2.39 0.59,2.1 -2.68,1.22 0.26,4 -0.22,5.86 2.34,-0.34 4.15,-1.76 6.12,-3.07 0.06,2.7 3.03,-0.8 4.56,-0.57 2.43,-1.1 5.63,0.82 7.84,-0.63 3.6,0.5 2.72,-4.87 6.32,-4.78 1.62,-0.77 5.16,-0.84 3.73,-3.31 2.85,-0.62 4.57,1.21 6.54,2.5 1.91,0.57 5.04,2.11 4.63,-1.3 1.15,-1.21 0.6,-2.9 1.92,-3.9 0.7,-1.81 1.08,-4.73 2.39,-6.4 1.07,-2.4 6.58,0.52 5.22,-3.48 -0.09,-3.31 -1.44,-6.24 -2.22,-9.58 0.1,-2.96 -2.26,-6.23 0.02,-8.8 1.83,-2.19 0.74,-5.58 -0.28,-8.01 0.55,-2.21 1.33,-6.39 -2.22,-6.48 -2.56,-0.06 -6.32,-3.21 -7.21,0.93 -2.37,0.79 -4.8,5.49 -7.02,1.82 -2.57,-0.44 -4.28,-3.63 -3.95,-6.18 -0.99,-1.91 -2.39,-5.92 -4.86,-2.88 -3.41,0.04 -8.02,2.16 -10.43,-0.96 -1.67,-2.06 2.03,-3.1 0.24,-4.85 z&quot;,</td>
      </tr>
      <tr>
        <td id="L59" class="blob-num js-line-number" data-line-number="59"></td>
        <td id="LC59" class="blob-code blob-code-inner js-file-line">						&quot;department-44&quot; : &quot;m 152.12,215.29 c 0.59,4.69 -7.52,2.23 -7.55,6.92 -2.45,2.92 -6.64,1.42 -9.84,1.79 -2.21,0.47 -4.62,2.21 -6.1,1.16 -2.15,1.71 -5.77,2.38 -4.86,5.66 -0.41,1.99 0.14,5.32 -2.78,5.46 0.29,3.39 -2.45,-0.35 -3.39,1.23 -1.97,-0.43 -3.4,-1.22 -3.87,1.43 -1.39,3.38 -7.86,-1.72 -6.53,3.45 1.04,0.36 3.95,1.27 1.26,1.45 -1.78,0.18 -4.38,-0.42 -5.51,2.1 0.81,1.67 6.76,3.88 3.55,5.8 -1.04,-0.85 -4.89,-1.36 -1.91,0.14 1.73,1.23 3.86,1.82 5.03,0.15 2.77,0.79 5.25,4.76 7.99,1.3 2.33,-2.98 5.67,-3.71 9.18,-3.56 3.26,1.31 7.02,1.76 9.14,4.89 0.59,1.56 5.82,2.63 2.15,2.16 -4.08,-0.08 -5.45,-5.45 -9.25,-4.42 -2.59,-1.44 -6.59,-0.45 -8.62,1.17 0.15,2.98 1.07,6.99 -2.64,7.63 1.56,2.78 6.83,0.77 8.69,4.16 2.99,2.74 4.83,7.09 8.9,8.42 0.9,1.88 5.53,0.57 5.08,3.59 3.08,0.7 6.82,2.86 9.67,1.11 2.13,-1.29 -2.55,-2.42 -0.14,-3.94 -2.91,-1.74 -0.81,-8.5 2.35,-5.93 0.6,2.44 -0.71,8.47 3.28,5.3 3.57,-0.9 -1,-7.35 3.9,-6.19 0.83,-0.5 2.39,-4.6 3.91,-1.32 1.06,2.31 6.94,2.33 4.03,-0.72 -1.16,-2.43 -6.27,-0.49 -4.19,-3.49 1.19,-2.09 4.14,-3.59 2.27,-6.58 -0.11,-2.99 -2.79,0.14 -3.66,-2.47 -0.42,-1.81 -2.18,-3.14 -3.54,-3 1.51,-3.16 6.07,-2.52 8.85,-3.95 3.12,-0.79 9.37,1.47 9.71,-3.23 -1.08,-2.47 -1.12,-5.9 -4.66,-5.46 -2.8,0.23 -7.97,-1.25 -5.65,-4.79 1.85,-0.34 7.04,1.35 6.32,-1.48 -2.96,-1.34 -7.7,-2.06 -7.06,-6.38 -0.89,-2.42 -4.47,-2.43 -3.18,-5.19 -2.78,-1.29 -5.51,-2.7 -8.1,-4.12 -0.73,-0.11 -1.47,-0.12 -2.19,-0.28 z&quot;,</td>
      </tr>
      <tr>
        <td id="L60" class="blob-num js-line-number" data-line-number="60"></td>
        <td id="LC60" class="blob-code blob-code-inner js-file-line">						&quot;department-50&quot; : &quot;m 131.13,90.31 c -1.88,0.95 -0.8,4.82 1.86,4.23 3.56,1.9 1.73,6.62 0.2,9.04 2.05,2.45 3.1,5.7 3,9 0.14,1.74 2.63,0.2 3.07,2.34 0.75,1.03 1.85,2.12 2.19,0.36 1.37,1.6 -1.38,2.27 1.05,3.66 1.37,1.28 0.99,6.4 3.69,4.06 1.9,0.29 2.45,1.19 0.04,0.86 -1.6,1.67 0.46,4.57 0.89,5.74 -2.97,1.02 -0.03,4.32 -0.89,6.45 0.25,4.18 2.26,-2.3 3.97,0.71 -3,-1.64 -2.73,4.63 -1.52,5.52 -1.39,1.53 -0.75,4.59 -2.48,6.57 2.85,1.89 0.3,6.73 3.77,8.41 0.72,3.65 6.47,2.47 6.87,4.86 -3.09,-0.67 -6.13,1.28 -9.29,0.14 2.12,2.48 1.69,5.44 3.35,8.16 0.49,2.03 2.9,1.69 3.89,3.28 2.85,0.97 3.52,-2.95 6.22,-3.35 0.5,-4.19 4.83,-0.16 7.12,-0.52 2.46,0.21 4.49,2.11 6.88,1.58 1.14,-3.4 4.72,2.61 6.05,-1.83 2.14,-1.71 4.11,-4.11 4,-6.8 -2.86,-1.65 2.62,-4.05 -1.04,-4.65 -1.19,-1.03 -1.99,-2.17 -3.44,-2.39 0.65,-1.72 0.69,-2.24 -1.24,-1.46 -2.15,-1.56 -3.83,-1.87 -6.18,-1.16 -1.5,-0.55 -4.16,0.68 -4.02,-2.14 -1.26,-0.78 -4.15,-1.48 -1.38,-2.84 0.99,-1.27 1.76,-1.9 2.97,-1.76 1.12,-1.18 3.8,-4.02 0.24,-2.9 -1.76,-0.83 1.02,-4.16 2.87,-2.17 3.08,-0.43 3.89,-3.82 6.01,-5.35 -2.27,-0.59 1.2,-4.39 -1.22,-5.32 -2.09,1.3 -1,0.15 0.07,-0.89 -1.07,-1.07 -4.55,-2.49 -1.49,-2.88 2.17,-1.47 -0.09,-4.82 -1.5,-1.9 -3.17,0.81 -5.99,-2.78 -7.94,-5.02 -1.69,-1.95 2.34,-3.94 -0.73,-4.53 -0.02,-1.64 -2.94,0.31 -1.33,-2.17 1.04,-2.89 -2.27,-4.45 -3.47,-6.64 -1.37,-1.99 -4.59,-6.54 -0.56,-7.31 0.17,-1.79 2.56,-1.35 1.09,-3.59 -0.43,-3.65 -3.79,-3.85 -6.83,-3.94 -3.88,-1.03 -4.69,4.08 -8.52,3.07 -3.16,1.2 -5.48,-1.83 -8.81,-1.65 -2.47,0.02 -3.19,-2.65 -5.7,-1.92 -0.51,-0.38 -1.01,-1.1 -1.74,-0.94 z&quot;,</td>
      </tr>
      <tr>
        <td id="L61" class="blob-num js-line-number" data-line-number="61"></td>
        <td id="LC61" class="blob-code blob-code-inner js-file-line">						&quot;department-53&quot; : &quot;m 208.55,167.1 c -1.01,1 0.05,3.16 -1.88,3.54 -1.52,-1.01 -2.64,-0.44 -3.16,1.13 -2.16,0.27 -4.3,-2.6 -6.35,-0.72 -2.51,0.71 -4.34,2.89 -6.91,3.52 -1.47,-0.07 -0.73,-3.05 -2.63,-1.24 -1.44,-0.25 -1.57,0.24 -1.23,1.52 -1.95,1.91 -3.12,-1.9 -4.31,-1.2 -0.57,-2.91 -4.17,-1.79 -5.68,-3.27 -1.71,1.43 -3.54,2.05 -5.24,0.23 -1.62,1.36 -0.04,4.11 -0.87,5.96 1,2.8 1.94,6.2 -0.3,8.68 -1.8,2.64 0.64,5.51 0.63,8.4 0.26,2.57 1.34,4.89 2.01,7.32 0.27,1.9 0.56,4.67 -2.4,4.46 -3.58,-1.21 -3.75,3.46 -4.8,5.71 -0.32,2.32 -3.14,4.44 -1.31,6.55 2.18,1.99 5.34,0.43 7.83,1.57 1.63,0.66 3.95,1.05 3.53,-1.27 2.64,-0.54 3.9,3.91 6.54,1.42 2.25,1.91 5.27,1.85 7.94,2.38 1.76,-0.55 3.96,-1.63 5.33,-1.8 0.74,-3.63 3.49,1.65 5.63,-0.72 3.1,-0.49 -0.69,-2.25 -1.75,-2.95 -1.24,-2.55 5.38,-2.7 2.17,-4.78 -2.1,-2.18 2.21,-3.41 3.9,-3.25 2.7,-2.12 -2.9,-5 -0.82,-7.18 1.54,-1.12 5.56,-0.07 4.23,-2.96 2.04,-1.51 -2.56,-3.7 0.57,-5.19 2.14,-0.95 4.31,-2.8 2.75,-5.2 0.4,-1.84 1.4,-3.83 0.29,-5.45 0.84,-2.27 2.74,-2.67 4.64,-3.69 0.49,-2.31 0.11,-5.38 -2.99,-3.91 -2.18,-0.9 -2.07,-4.02 -1.67,-5.52 -0.9,-1.11 -2.32,-1.86 -3.72,-2.1 z&quot;,</td>
      </tr>
      <tr>
        <td id="L62" class="blob-num js-line-number" data-line-number="62"></td>
        <td id="LC62" class="blob-code blob-code-inner js-file-line">						&quot;department-49&quot; : &quot;m 163.22,217.21 c -0.83,2.37 -1.6,5.33 1.37,5.86 1.81,2.08 0.91,5.95 4.42,6.63 2.22,0.05 6.13,2.61 1.99,3.38 -1.68,0.33 -6.88,-1.51 -4.42,1.8 -0.28,3.95 5.62,1.28 7.64,2.98 2.45,0.74 1.41,5.07 2.67,6.48 -2.29,2.93 -6.35,1.4 -9.46,1.86 -2.75,1.47 -6.15,1.11 -8.63,2.95 -2.19,2.35 2.81,0.48 2.57,3.2 0.31,2.29 2.55,1.71 3.57,1.87 1.63,2.89 1.11,5.74 -1.65,7.56 -1.38,3.05 3.73,1.85 4.64,4.57 0.65,0.86 -1.19,3.33 1.44,2.98 2.09,1.51 5.06,-0.93 6.83,0.87 2.12,0.24 3.87,3.37 5.76,0.52 2.61,-0.75 5.23,0.76 7.87,-0.16 3.45,0.68 4.18,-2.89 4.98,-5 2.46,-1.53 5.74,1.7 7.32,-1.15 3.52,-0.32 7.2,-1.11 10.47,-0.77 1.05,1.17 -2.26,1.94 0.29,2.63 2.66,0.88 1.49,-3.86 4.67,-2.23 0.32,-1.55 1.08,-6.07 4.26,-4.7 1.02,-3.55 0.54,-7.68 3.15,-10.63 1.2,-1.75 2.78,-3.33 2.02,-5.32 0.89,-2.49 1.94,-4.87 2.33,-7.52 -2.3,-1.25 2.95,-6.06 -1.28,-5.83 -1.14,3.4 -4.78,-0.25 -6.77,-0.21 -1.89,-1.86 -5.83,-3.95 -7.59,-1.47 -2.9,0.48 -5.51,-3.13 -2.87,-5.2 -1.31,-0.36 -3.53,1.25 -5.3,-0.11 -1.96,-0.38 -3.12,0.57 -3.07,-1.96 -1.12,-2.87 -4.12,0.14 -5.77,-2.2 -1.77,-0.71 -0.8,2.61 -3.03,1.75 -3.13,1.53 -6.89,1.32 -10.17,-0.06 -1.72,-2.25 -3.57,1.59 -5.08,-1.25 -0.8,-0.99 -3.72,-1.84 -2.9,0.37 -3.4,0.17 -6.97,-0.89 -10.18,-1.14 -0.72,-0.44 -1.37,-0.99 -2.14,-1.36 z&quot;,</td>
      </tr>
      <tr>
        <td id="L63" class="blob-num js-line-number" data-line-number="63"></td>
        <td id="LC63" class="blob-code blob-code-inner js-file-line">						&quot;department-85&quot; : &quot;m 161.28,265.2 c -0.97,1.7 -1.54,3.91 -3.7,2.64 -1.76,1.98 1.21,6.33 -3.05,6.68 -4.15,2.13 -1.3,-4.19 -2.86,-6.14 -3.81,-0.88 -3.43,4.2 -2.06,6.39 -1.18,1.59 2.88,3.89 -0.56,4.36 -2.8,1.01 -5.58,-1.25 -8.45,-1.27 -0.94,-1.21 -1.09,-3.22 -3.4,-2.64 -2.06,0.15 -1.35,-2.2 -3.49,-1.71 -2.48,-1.21 -5.24,-7.8 -7.15,-2.42 -0.59,3.85 -5.53,4.8 -4.91,9.21 0.37,4.17 5.72,4.87 7.16,8.67 2.67,2.58 4.99,5.43 6.65,8.8 0.87,1.89 0.24,6.13 2,6.75 0.16,-1.73 0.12,-2.45 1.07,-0.5 1.66,2.86 6.15,2.45 7.02,5.1 3.4,-0.42 6.93,0.3 7.04,4.36 1.27,2.81 4.49,-1.27 6.02,1.84 2.09,-0.13 3,3.11 4.96,3.02 -0.36,-3.97 4.41,-1.93 6.48,-3.3 1.71,-1.96 4.7,-2.5 6.81,-2.37 -1.17,1.68 -0.83,3.92 1.65,2.75 2.07,-0.36 4.04,-2.66 5.25,0.14 2.09,1.8 3.55,-0.97 5.61,-0.12 1.62,-1.38 3.3,-2.9 5.04,-3.72 0.18,-2.56 -3.47,-1.87 -3.87,-1.44 -0.63,-2.59 1.8,-5.29 -0.47,-7.7 0.94,-1.38 2.03,-1.54 1.08,-3.45 0.09,-2.1 -0.29,-4.13 -1.61,-5.22 0.65,-2.15 -1.16,-2.52 -0.79,-4.52 -1.57,-1.94 -3.3,-3.94 -1.89,-6.5 -1.72,-1.62 -5.39,-2.92 -5.22,-6.11 0.38,-2.29 -3.29,-2.9 -3.68,-5.31 -1.81,-2.01 -4.49,-1.74 -7.1,-1.32 -3.49,-1.03 -6.73,-2.66 -9.6,-4.96 z&quot;,</td>
      </tr>
      <tr>
        <td id="L64" class="blob-num js-line-number" data-line-number="64"></td>
        <td id="LC64" class="blob-code blob-code-inner js-file-line">						&quot;department-79&quot; : &quot;m 211.41,263.54 c -3.47,1 -7.46,-0.24 -10.55,2.01 -1.54,0.87 -3.61,1.5 -3.45,-0.55 -2.89,-0.11 -3.46,3 -4.1,4.64 -2.76,1.84 -6.3,1.53 -9.35,1.02 -2.77,-0.37 -6.01,2.62 -2.55,4.27 1.05,2.29 0.26,5.24 3.5,6.22 3.7,1.27 0.35,4.83 3.08,6.91 1.95,2.46 1.89,5.88 3.13,8.43 0.79,2.29 0.53,5.23 -0.6,6.69 2.08,1.92 -1.04,5.98 0.79,6.87 2.26,-2.05 4.86,2.6 1.35,3.21 -1.82,2.1 -4.84,2.03 -7.01,3.55 -1.92,3.7 2.7,4.91 3.24,8.13 1.44,0.37 2.62,0.88 2.81,2.1 3.32,-0.93 5.83,3.57 8.63,3.01 2.89,1.17 6.03,0.6 8.47,3.22 3.7,-0.54 3.87,6.56 7.56,4.57 1.73,-2.11 1.24,-5.98 4.87,-5.81 1.63,-2.21 4.23,-2.49 6.45,-1.63 1.55,-1.48 2.11,-4.78 -0.83,-4.33 -3.29,-1.46 -1.71,-5.49 -0.5,-7.4 1.75,-0.97 0.56,-7.43 -1.84,-3.75 -2.3,2.89 -5.28,-1.21 -4.22,-3.39 -2.48,-2.03 -1.19,-5.37 -2.68,-7.99 1.33,-2.02 1.71,-4.55 3.11,-6.42 -0.55,-0.92 -2.28,-2.13 -2.08,-2.45 -3.66,1.58 0.19,-4.05 1.24,-5.25 2.3,-2.33 -3.14,-3.07 -0.93,-5.56 1.44,-1.85 -3.47,-1.82 -0.33,-2.92 3.33,-0.16 0.56,-1.18 -0.24,-2.53 0.5,-2.54 0.1,-5.85 -1.91,-7.36 -1.96,-0.52 -0.38,-5.88 -4.15,-4.77 -2.43,-0.12 2.22,-3.17 -0.9,-2.74 z&quot;,</td>
      </tr>
      <tr>
        <td id="L65" class="blob-num js-line-number" data-line-number="65"></td>
        <td id="LC65" class="blob-code blob-code-inner js-file-line">						&quot;department-17&quot; : &quot;m 175.73,312.62 c -2.1,1.05 -4.89,0.98 -6.33,3.16 -2.59,0.12 1.24,4.72 -2.26,5.02 -2,0.79 -4.42,5.17 -2.11,6.01 2.93,0 2.49,3.17 4.17,4.84 0.72,1.37 3.67,5.65 0.03,4.87 -2.18,0.36 1.95,2.77 0.48,4.24 1.55,2.23 0.05,3.13 -1.55,3.46 -0.38,1.57 -2.23,1.63 -0.92,3.81 0.7,3.56 3.92,5.46 6.53,7.53 -3.66,-0.31 -5.1,-4.96 -7.98,-5.25 -3.89,-1.1 -3.52,4.91 -2.88,6.67 2.74,-1.46 4.76,2.94 7.48,3.54 3.34,1.31 3.69,5.42 7.19,6.15 4.09,3 7.55,7.17 8.5,12.27 0.26,3.76 5.67,2.29 7.12,1.56 -1.08,5.27 6.99,0.78 7.08,5.12 0.92,1.82 -0.24,5.87 1.93,6.53 3.38,-1.84 5.25,4.16 8.91,4.29 2.53,1.16 3.84,-3.72 5.99,-0.43 0.42,-1.35 1.41,-3.02 1.97,-3.79 -0.43,-1.67 1.72,-4.75 -1.44,-5.53 -1.82,-0.53 -4.59,0.36 -3.27,-2.54 -1.47,-1.11 -5.11,-3.27 -7.08,-1.29 -2.02,-1.16 -0.75,-3.34 0.78,-3.22 -1.02,-0.53 -4.64,-2.27 -1.19,-3.33 4.28,-0.66 -2.5,-4.27 0.56,-5.26 2.44,-2.46 -2.28,-2.77 -2.54,-4.29 2.17,-2.32 -2.75,-3.59 -3.55,-5.14 -2.87,0.92 -0.97,-2.62 0.33,-2.63 -2.65,-1.14 -0.44,-4.4 -1.57,-5.27 -2.89,0.77 -1.45,-2.34 0.53,-2.18 1.34,-1.34 4.68,-0.44 6.11,-2.14 2.35,-0.74 2.26,3.5 4.57,1.02 2.44,-0.29 1.26,-3.78 2.59,-5.17 -1.46,-1.93 -1.99,-4.68 1.15,-4.47 0.21,-2.43 -3.03,-4.09 -3.83,-6.1 -0.81,-1.69 -4.49,-0.9 -5.2,-3.54 -1.75,0.56 -3.25,0.45 -4.22,-0.82 -1.42,1.85 -1.72,-1.94 -2.91,-0.25 -3.3,-0.03 -3.97,-4.4 -7.72,-2.73 0.56,-2.08 -4.7,-2.08 -3.15,-4.59 -0.87,-1.66 -4.22,-2.08 -2.44,-4.29 -0.3,-2.54 -4.15,-5.59 -5.48,-2.93 -1.22,-0.57 -5.78,1.4 -3.85,-1.55 0.3,-0.71 0.63,-1.62 -0.55,-1.38 z m -24.48,7.33 c -2.5,0.03 -3.87,1.14 -1.7,3.09 3.95,0.17 7.19,2.31 10.9,3.68 3.89,-1.05 -3.64,-4.87 -5.82,-4.1 0.29,-2.41 -4.61,1.24 -3.83,-1.48 1.5,1.02 1.83,-1.02 0.46,-1.19 z m 4.27,13.72 c -0.7,1.54 2.03,3.7 0.87,5.86 3.02,2.81 6.53,5.8 7.08,10.16 2.32,-1.62 3.28,-6.49 0.08,-7.91 -0.51,-2.29 -0.47,-5.1 -3.54,-5.11 -1.46,-1 -2.65,-2.71 -4.49,-2.99 z&quot;,</td>
      </tr>
      <tr>
        <td id="L66" class="blob-num js-line-number" data-line-number="66"></td>
        <td id="LC66" class="blob-code blob-code-inner js-file-line">						&quot;department-33&quot; : &quot;m 170.37,365.5 c -2.88,2.39 -3.66,6.38 -3.67,9.99 -0.06,6.47 -0.57,12.93 -1.99,19.26 -0.93,8.17 -1.59,16.38 -2.58,24.55 0.15,2.18 -1.38,7.44 -0.06,8.1 -0.08,-3.31 1.98,-7.54 4.36,-8.96 1.97,1.72 7.34,5.74 3.76,7.49 -2.73,1.04 -6.38,-2.36 -6.38,2.52 -1.52,2.69 -2.74,7 -1.06,9.24 2.84,-0.63 5.96,-2.27 7.61,-3.75 2.03,1.26 5.7,0.92 3.77,4.43 -2.89,4.65 3.5,-0.33 5.45,2.23 3.86,1.51 7.87,-3.74 11.26,-0.84 -1.42,4.09 4.44,3.2 5.19,6.56 1.94,1.37 4.07,0.77 4.89,3.31 2.18,0.86 -1.21,6.6 3.33,5.68 2.58,1.12 6.14,0.42 4.75,-3.03 1.75,-3.72 3.17,3 5.62,1.04 3.5,-1.1 3.84,-4.91 0.95,-7.06 1.78,-1.99 6.6,-1.58 3.43,-5.47 1.27,-2.35 -1.77,-5.16 1.09,-7.2 -1.95,-2.11 4.08,0.01 3.42,-3.48 2.15,-0.49 2.85,-2.17 2.61,-3.54 1.82,1.01 2.01,-3.15 -0.54,-1.86 -1.24,-1.31 -2.01,-2.64 0.2,-3.47 -0.33,-1.44 2,-1.21 2.56,-1.67 0.96,3.46 0.77,-3.24 2.88,-0.59 3.44,-0.12 -2.08,-5.38 2.19,-5.6 -0.3,-3.57 -4.29,-0.98 -5.16,1.24 -2.94,-0.94 -4.42,-0.02 -6.92,-0.52 -0.48,-1.95 -5.24,-0.86 -1.96,-2.84 3,-2.61 -1.26,-5.76 1.74,-8.21 0.18,-2.65 3.61,-7.86 -1.4,-8.03 -1.8,0.66 -3.02,1.85 -4.53,-0.13 -2.79,3.68 -7.23,0.65 -9.47,-1.85 -1.02,0.81 -2.89,-3.34 -3.74,-0.02 -1.83,-2.9 -1.15,-5.89 -1.94,-8.56 -2.49,-1.97 -7.58,0.6 -7.16,-4.13 -0.99,3.32 -7.86,-1.7 -5.65,3.47 1.12,5.25 -0.04,11.74 4.13,15.79 1.6,0.97 5.46,1.4 5.09,3.59 -1.14,-1.76 -5.95,-2.2 -2.42,0.16 0.89,1.86 0.32,4.86 0.46,6.96 -0.86,-3.57 -0.31,-7.65 -4.4,-9.5 -4,-3.65 -3.81,-9.3 -4.62,-14.2 -0.83,-4.14 -2.82,-8.05 -6.26,-10.61 -1.82,-3.68 -6.55,-3.9 -8.36,-7.63 -0.3,-0.84 1.03,-2.73 -0.47,-2.88 z&quot;,</td>
      </tr>
      <tr>
        <td id="L67" class="blob-num js-line-number" data-line-number="67"></td>
        <td id="LC67" class="blob-code blob-code-inner js-file-line">						&quot;department-40&quot; : &quot;m 169.77,433.93 c -1.39,4.09 -9.03,1.92 -8.11,7.38 -1.02,7.04 -1.81,14.11 -3.21,21.09 -1.27,6.3 -2.02,12.7 -3.64,18.93 -1,6.23 -2.25,12.44 -3.8,18.55 2.58,-1.5 3.77,4.05 6.97,1.91 3.34,1.32 5.68,-3.95 8.44,-2.39 2.07,1.33 0.83,1.91 -0.48,2.62 2.25,0.71 3.66,-2.53 5.72,-0.83 1.43,1.01 3.09,-0.31 2.14,-1.78 2.65,0.58 4.62,-1.18 7.1,-0.71 0.89,-0.91 2.56,-0.97 3.4,-1.93 1.42,1.18 2.14,3.21 3.39,1.18 1.9,-0.75 2.12,-1.21 2.41,0.33 1.62,2.42 3.07,-1.23 4.2,0.55 1.35,-0.65 5.1,-4.97 5.14,-2 -2.25,3.45 3.32,-1.25 4.51,1.48 1.42,-0.66 5.29,-2.61 3.41,-4.06 -2.62,-1.1 2.2,-2.69 0.51,-4.53 -0.4,-2.09 3.75,-3.09 1.72,-4.6 0.25,-1.62 -1.17,-3.73 0.82,-4.32 -0.1,-1.59 -0.15,-2.99 -0.15,-4.15 -3.84,-1.04 1.14,-3.46 2.82,-3.81 1.4,0.08 1.6,0.86 2.46,-0.49 1.85,-0.5 2.29,-3.87 4,-0.74 -0.03,1.42 -1.08,2.56 1.12,3.35 3.85,1.54 0.42,-3.68 2.06,-5.19 -1.31,-3.01 1.52,-6.01 2.73,-8.67 -3.45,-0.68 -6.76,-2.36 -10.44,-2.46 -3.14,0.72 -0.38,-5.12 -3.37,-6.17 -1.68,-2.94 -3.31,0.33 -2.44,2.4 -1.45,2.03 -6.15,0.75 -7.76,-0.49 0.06,-2.43 0.64,-4.45 -1.66,-5.74 -0.75,-1.94 -4.67,-0.97 -4.92,-3.99 -2.01,-1.55 -5.69,-1.4 -4.21,-4.64 -1.24,-2.31 -3.79,0.2 -5.94,-0.34 -3.05,3.71 -7.01,-1.41 -10.49,1 -4.03,1.42 2.63,-4.52 -0.65,-5.54 -1.61,0.68 -2.43,-1.07 -3.83,-1.21 z&quot;,</td>
      </tr>
      <tr>
        <td id="L68" class="blob-num js-line-number" data-line-number="68"></td>
        <td id="LC68" class="blob-code blob-code-inner js-file-line">						&quot;department-64&quot; : &quot;m 211.2,495.72 c -1.9,1.07 -4.71,-0.23 -5.99,2.39 -1.98,0.52 -4.11,-1.44 -6.18,0.45 -1.47,-0.65 2.04,-3.79 -1.1,-2.24 -1.84,1.1 -3.29,3.13 -5.1,2.48 -1.96,1.45 -5,-2.73 -6.29,0.37 -1.3,-1.42 -2.42,-3.2 -3.7,-1.06 -1.86,0.3 -2.9,1.44 -5.06,0.79 -0.86,1.97 -4.19,-0.71 -3.64,2.4 -2.25,0.68 -5.49,-1.09 -7.26,1.32 -3.27,-0.97 2.34,-1.26 -0.09,-2.53 -2.18,-3.25 -4.64,2.8 -7.39,1.71 -2.74,0.92 -5.67,0.14 -7,-2.21 -3.51,1.11 -4.76,4.93 -7.06,7.37 -1.86,2.09 -5.86,0.94 -7.14,3.17 0.39,1.82 2.63,2.08 2.45,4.31 2.16,-0.79 5.47,-0.83 4.92,2.37 1.44,2.55 2.98,-0.5 3.6,-1.51 2.37,0.53 4.98,1.17 7.12,1.91 1.21,3.15 -0.34,6.66 -1.84,9.39 -3.7,1.82 -0.21,5.81 2.82,5.62 2.52,-0.18 0.25,-6.64 4.3,-5.38 -2.77,2.45 0.66,4.77 3.15,4.41 2.76,1.62 4.75,2.53 7.73,3.53 2.51,0.74 4.11,3.68 7.28,2.92 2.81,1.52 7.35,-3.02 7.16,2.26 -1.02,2.96 3.25,2.28 4.34,4.46 1.78,1.41 3.01,6.8 5.13,3.41 1.29,-2.94 5.1,2.52 7.14,-0.85 1.53,-1.11 3.1,-1.71 2.2,-4.29 -2.14,-2.89 3.19,-3.06 1.08,-6.08 -0.73,-2.21 1.82,-2.45 1.78,-4.48 3.8,1.19 0.42,-4.25 3.06,-5 2.06,-1.26 1.63,-4.46 4.21,-4.01 0.61,-1.33 0.15,-2.87 1.47,-3.33 2.68,-2.17 -1.51,-4.94 1.51,-6.75 3.94,0.18 -1.17,-3.74 0.89,-5.91 -0.71,-3.82 -1.88,1.82 -3.23,0.54 -0.52,-1.85 0.16,-3.46 1.54,-4.09 -0.91,-1.78 -0.41,-4.39 -2.84,-4.92 0.66,-3.73 -2.6,-1.04 -3.99,-2.95 z&quot;,</td>
      </tr>
      <tr>
        <td id="L69" class="blob-num js-line-number" data-line-number="69"></td>
        <td id="LC69" class="blob-code blob-code-inner js-file-line">						&quot;department-65&quot; : &quot;m 216.99,494.91 c -1.84,0.25 -2.8,4.03 -0.53,4.11 1.88,1.3 0.29,3.67 2.23,4.92 -1.93,0.09 -2.67,2 -1.81,3.38 0.3,1.54 2.42,-3.88 2.78,-0.62 0.04,1.77 -0.37,4.08 1.04,5.66 -0.74,1.52 -3.19,0.65 -3.23,3.06 1.46,1.22 1.22,2.8 0.07,4.31 -0.99,0.9 -1.52,1.78 -1.24,3.38 -1.18,1.4 -2.47,-0.59 -2.75,1.65 -0.31,2.34 -3.5,2.62 -2.83,5.08 -0.23,1.21 0.77,2.46 -1.27,2.75 -1.74,-1.03 -0.67,2.29 -2.47,2.46 -0.22,2.15 1.18,4.49 -1.44,5.52 0.13,2.35 0.39,5.58 3.33,6.26 1.51,1 2.85,2.84 4.69,1.37 -0.57,1.85 1.47,3.6 2.41,4.96 1.56,0.38 2.66,3.5 4.75,1.97 1.8,-0.64 3.96,-1.24 5.98,-1.71 2.21,-1.74 5.92,-0.18 6.53,2.47 2.16,1.45 2.84,-4.54 5.11,-1.48 1.05,2.42 6.1,0.26 2.72,-1.38 -0.47,-1.86 -0.16,-4.75 -0.08,-7.05 -0.01,-1.71 0.82,-4 2.68,-2.21 3.39,1.23 2.02,-4.26 4.56,-5.2 1.78,-1.39 -1.78,-2.01 -0.27,-3.71 -0.3,-0.99 -0.83,-2.98 -1.65,-1.25 -1.08,0.21 -3.2,2.39 -2.44,-0.12 -0.09,-1.57 2.08,-1.37 1.06,-3.26 -1.4,-1.24 -3.29,-2.47 -4.49,-3.12 -2.02,-2.1 3.51,-3.46 2.42,-5.76 0.93,-0.47 4.3,-0.56 1.96,-2.04 0.32,-1.95 5.47,-3.77 2.06,-5.05 -2.3,-1.28 -4.63,-0.69 -6.84,-1.39 -2.1,2.1 -2.26,-2.3 -4.28,-0.93 -1.76,1.3 -0.81,-1.74 -2.47,-1.53 -0.55,-2.46 -4.01,1.85 -5.67,-0.21 0.62,-1.85 -3.42,-2.4 -1.35,-4.21 1.51,-1.16 -1.9,-2.45 -1.19,-4.22 -1.14,-1.21 -3.48,-0.65 -4.39,-2.66 -2.13,-0.62 -0.57,-4.95 -3.7,-4.22 z&quot;,</td>
      </tr>
      <tr>
        <td id="L70" class="blob-num js-line-number" data-line-number="70"></td>
        <td id="LC70" class="blob-code blob-code-inner js-file-line">						&quot;department-32&quot; : &quot;m 246.37,463.78 c -1.87,2.87 -5.69,0.08 -7.22,3.28 -1.88,1.49 -4.2,0.57 -5.81,2.33 -2.39,-0.54 -4.55,-3.39 -6.11,0.1 -0.16,1.89 -1.71,0.96 -1.7,-0.3 -2.5,0.36 -4.05,2.53 -2.63,4.96 0.01,3.29 -6.18,-0.5 -3.3,-1.85 -0.54,-2.21 -2.13,-1.97 -3.07,-0.29 -1.34,0.89 -1.71,2.04 -3.36,1.03 -1.68,0.34 -3.48,1.37 -4.38,2.76 1.22,0.28 3.13,1.71 1.37,2.42 1.01,1.6 0.51,3.2 -0.73,3.83 -0.07,2.44 2.42,4.6 -0.76,5.86 -1.18,1.63 0.66,4.33 -1.94,5.01 -0.42,1.69 2.27,1.13 1.62,3.13 2.18,-0.55 3.63,0.28 6.01,0.22 1.55,-0.54 3.47,-2.96 4.82,-0.45 0.15,2.77 2.68,4.35 4.51,5.25 2.48,-0.68 1.19,3.49 3.25,4.21 -0.48,0.88 -2.09,2.3 -0,3.14 1.28,0.27 0.25,2.29 2,2.07 2.01,0.08 3.81,-1.91 5.13,-0.1 0.83,0.3 0.34,2.73 2.13,1.32 1.65,-1.02 1.99,3.25 3.69,0.87 2.91,0.44 5.72,1.25 8.79,1.59 2.28,-1 2.83,-4 4.96,-4.85 -0.08,-1.97 1.2,-2.17 2.72,-1.09 2.04,-2.03 5.8,0.4 7.36,1.79 1.25,2.38 1.53,-1.44 1.56,-2.27 1.63,-0.08 0.78,-2.07 1.64,-3.14 -1.95,-1.43 1.97,-2.65 1.07,-4.39 -0.66,-1.2 0.97,-1.78 2.08,-0.85 0.33,-1.45 2.39,-1.29 3.2,-2.18 2.33,0.7 0.78,-3.33 -0.81,-2.33 -0.96,-0.86 -0.26,-2.97 -2.3,-2.06 -1.55,-0.33 0.33,-2.07 -1.76,-1.78 -1.88,-0.75 0.92,-3.18 -2.09,-3.14 -1.61,-1.44 -2.45,-4.37 -4.36,-5.15 -3.35,1.69 1.17,-3.08 -1.5,-3.24 0.76,-1.49 -1.03,-2.76 -0.22,-4.22 -1.16,-1.24 -2.92,-1.03 -4.29,-1.63 -2.35,1.17 -1.75,-1.94 -0.23,-2.55 1.5,-1.23 1.3,-2.73 1.39,-4.08 3.53,-0.83 -1.38,-2.38 -2.33,-0.22 -1.18,0.08 -0.41,-3.33 -2.53,-1.63 -1.28,0.69 -2.36,3.52 -3.35,0.81 -0.67,-0.82 -1.46,-1.92 -2.53,-2.18 z&quot;,</td>
      </tr>
      <tr>
        <td id="L71" class="blob-num js-line-number" data-line-number="71"></td>
        <td id="LC71" class="blob-code blob-code-inner js-file-line">						&quot;department-47&quot; : &quot;m 230.07,418.5 c -0.81,0.77 -0.9,3.82 -1.83,1.38 -1.82,-0.02 -3.21,2.14 -3.88,3.3 1.04,0.9 2.08,1.66 3.3,1.8 -0.04,1.51 -1.7,2.55 -2.03,4.05 -1.55,0.64 -2.55,2.47 -3.24,3.29 -3.01,0.59 -4.44,4.14 -2.78,6.75 -1.33,1.76 2.46,5.68 -1.08,5.69 -2.16,-0.16 -3.67,2.4 -1.25,3.45 1.89,2.62 -1.53,5.28 -3.79,5.58 -0.01,1.94 -0.52,5.85 2.43,4.84 2.83,-0.58 4.82,1.94 7.53,1.7 1.96,-0.36 2.73,1.43 1.07,2.55 -0.51,2.08 -4.01,5.95 -0.67,6.93 1.39,-0.27 1.71,-1.54 2.32,0.34 1.42,0.2 1.56,-3.84 3.99,-2.43 2.21,2.53 4.49,0.26 7.07,0 2.57,-0.7 3.69,-3.71 6.77,-2.71 1.7,-0.39 3.39,-2.44 4.44,0.28 1.31,3.29 3.19,-0.23 4.88,-1.16 0.36,-1.62 1.13,-2.69 2.56,-3.54 -1.25,-2.97 5.51,1.65 4.18,-2.52 -0.96,-0.29 -2.25,-1.68 -0.22,-2.14 2.35,-0.03 2.05,-4.03 2.4,-5.78 -1.23,-1.07 -4.15,-1.71 -2.2,-3.71 -0.38,-1.68 1.32,-4.27 2.55,-1.77 1.53,0.85 4.19,-0.22 5.25,-0.41 0.48,-2.12 -0.42,-3.89 -1.57,-5.33 0.06,-1.97 -1.67,-5.18 -1.15,-6.13 2.23,0.07 5.01,-2.93 1.78,-3.93 -1.73,-2.48 -5.12,-2.94 -6.92,-0.28 -2.08,2.1 -3.89,-1.44 -2.14,-3.04 0.26,-1.39 -1.37,-4.01 -2.62,-1.92 -2.44,1.01 -5.83,0.37 -7,-0.95 -2.41,-0.18 -2.86,2.94 -5.17,1.62 -2.31,0.8 -5.39,2.91 -7.69,0.67 0.42,-2.17 -0.14,-6.16 -2.93,-6.02 -0.81,0.25 -1.86,0.44 -2.38,-0.43 z&quot;,</td>
      </tr>
      <tr>
        <td id="L72" class="blob-num js-line-number" data-line-number="72"></td>
        <td id="LC72" class="blob-code blob-code-inner js-file-line">						&quot;department-31&quot; : &quot;m 290.02,474.31 c -1.06,1.38 -2.08,2.2 -3.14,1.27 -0.58,4.46 -6.27,-1.79 -5.29,3.06 -1.9,-0.93 -3.5,1.28 -0.64,0.98 2.48,2.1 -3.77,2.63 -4.93,4.19 -2.22,1.21 -0.1,-1.87 -2.62,-1.46 -1.27,-3.41 -2.92,1.42 -4.53,-1.01 -1.38,1.57 -7.9,0.39 -4.49,3.87 1.19,2.36 4.47,2.68 3.64,5.37 2.67,0.06 0.55,2.9 3.52,1.95 0.58,0.93 0.66,2.79 2.12,2.09 2.71,3.12 -2.63,3.32 -4.16,4.93 -1.1,-1.53 -1.56,1.15 -1.34,1.61 0.44,1.44 -2.97,2.2 -1.16,3.88 -0.09,2.59 -2.4,2.6 -1.68,5.18 -1.9,1.75 -3.41,-2.85 -6.25,-2.48 -1.97,-0.25 -2.83,1.49 -4.6,-0.2 -0.73,3 -3.35,2.98 -4.53,6.1 -1.7,0.77 -1.89,0.75 -1.75,2.05 -1.29,1.74 -3.85,2.87 -2.67,4.97 -1.64,0.77 -2.86,0.43 -2.8,2.37 -2.19,1.55 -3.92,4.34 -0.36,4.93 1.97,0.94 4.52,4.07 1.77,4.79 -1.3,4.88 3.7,-2.96 3.72,1.66 0.49,1.32 -0.65,2.24 1.07,3.28 -2.79,1.64 -2.18,9.05 -6.68,5.6 -1.73,2.41 -1.93,7.77 -0.38,10.18 1.27,3.59 5.97,0.17 8.88,1.83 2.51,-1.92 -1.95,-5.09 0.25,-7.4 -0.76,-3.42 2.9,-4.02 4.93,-2.32 1.62,-0.12 4.31,1.32 2.68,-1.53 -0.93,-1.79 -1.4,-4.59 1.53,-4.74 -1.15,-3.31 5.98,-1.18 5.47,-5.37 -2.22,-1.5 -0.83,-5.26 0.13,-6.33 2.45,2.03 0.85,-3.56 3.56,-1.87 1.66,-2.07 2.75,0.56 4.53,0.43 1.14,1.96 2.46,4.41 4.04,1.37 2.25,-2.5 -5.64,-2.56 -1.56,-4.98 1.91,-0.32 6.85,-0.7 5.84,-3.41 -3.62,0.11 -4.71,-4.72 -0.54,-4.92 1.7,1.78 3.23,3.99 3.46,6.31 3.43,1.14 2.88,-2.05 2.74,-4.44 1.24,-0.74 2.86,2.59 3.98,0.85 2.05,0.25 3.31,3.93 3.51,0.42 1.87,-1.02 3.37,-2.54 3.2,-4.86 1.65,-0.79 5.11,0.92 3.61,-2.58 0.23,-2.56 3.55,-6.11 4.18,-1.52 0.52,0.87 1.91,-3.3 3.78,-0.91 2.24,0.69 2.87,-1.22 1.62,-2.8 0.91,-0.95 2.23,-3.84 -0.03,-2.5 -1.07,2.43 -6.09,-0.82 -6.91,-3.1 -0.98,-3.43 -6.75,-3 -7.98,-6.29 2.91,-1.68 0.76,-3.48 -1.25,-4.16 3.26,-0.53 0.29,-2.11 -0.5,-3.7 0.64,-3.06 -3.23,-3.07 -3.17,-5.79 -1.79,-0.87 -1.06,-3.76 -1.85,-4.82 z&quot;,</td>
      </tr>
      <tr>
        <td id="L73" class="blob-num js-line-number" data-line-number="73"></td>
        <td id="LC73" class="blob-code blob-code-inner js-file-line">						&quot;department-09&quot; : &quot;m 281,514.26 c -1.93,0.45 -2.81,3.42 -0.61,3.74 0.47,1.06 3.65,0.84 1.91,2.92 -1.78,0.48 -2.86,1.94 -5,1.65 -1.94,-0.47 -2.72,3.01 -0.2,2.59 2.24,0.58 1.95,2.32 0.27,3.21 -1.24,2.42 -2.69,-0.31 -3.19,-1.7 -1.18,-0.65 -2.35,-0.74 -3.49,-1.68 -1.21,1.5 -3.6,0.41 -3.5,3.08 -0.69,0.69 -2.14,-1.23 -2.07,0.85 0.78,1.23 -1.59,1.79 -0.08,3.25 -1.18,1.45 2.43,1.96 0.17,3.11 -0.33,2.96 -5.7,1.12 -4.88,4.08 -1,0.73 -3.51,0.76 -1.93,2.67 -0.14,2.58 1.36,4.98 3.85,6.04 1.3,1.43 2.44,-0.82 3.84,0.84 2.2,0.69 5.28,-0.08 6.42,2.49 -0.04,2.84 2.56,2.9 4.54,2 2.27,0.7 5.31,-0.62 6.28,1.97 2.47,1.03 1.46,6.42 4.53,5.84 0.33,-1.46 -0.02,-3.65 2.25,-2.77 2.58,-1.67 3.67,2.32 6.42,1.51 1.59,0.01 4.16,0.09 3.44,2.23 1.96,0.82 4.9,1.1 6.14,-0.77 0.17,-1.61 2.36,0.02 3.34,-1.21 1.09,-1.15 1.09,-3.64 3.34,-2.57 1.75,-1.21 4.32,-0.24 5.87,-0.95 0.4,-2.48 -3.41,-3.46 -4.42,-5.35 -2.08,0.81 -4.89,2.28 -6.69,-0.08 -1.29,-0.72 0.48,-2.24 -1.27,-3.27 -1.88,-0.45 -2.07,-2.21 -0.54,-3.2 2.84,0.11 5.65,-1.41 4.42,-4.62 -1.62,-0.54 -3.31,-2.15 -0.6,-2.68 1.86,-1.01 -0.44,-3.29 0.61,-4.77 -1.01,-0.87 -2.68,-1.46 -1.18,-2.69 -0.07,-1.43 -0.47,-4.45 -2.45,-3.41 -0.92,1.43 -0.96,-2.2 -2.67,-1.24 -2.3,-0.25 -5.38,-1.98 -6.1,-3.66 0.91,-1.6 -0.72,-3.91 -1.67,-5.05 -0.92,0.6 -1.38,4.39 -1.98,1.49 -1.2,-0.67 -2.47,-1.05 -3.16,-0.2 -0.47,-1.65 -2.24,-0.25 -2.45,-1.94 -1.91,1 1.34,4.52 -1.22,4.39 -1.46,2.03 -3.74,-0.79 -2.75,-2.52 -1.34,-0.95 -2.09,-3.13 -3.54,-3.63 z&quot;,</td>
      </tr>
      <tr>
        <td id="L74" class="blob-num js-line-number" data-line-number="74"></td>
        <td id="LC74" class="blob-code blob-code-inner js-file-line">						&quot;department-11&quot; : &quot;m 322.74,505.07 c -2.05,0.87 -0.82,6.47 -3.43,3.37 -1.24,-1.83 -5.19,2.71 -5.61,-1.17 -0.96,-1.29 -3.24,1.91 -4.87,-0.09 -1.63,-0.8 -2.35,3.52 -2.64,0.63 -0.96,-2.44 -1.93,-1.82 -2.84,-0.31 -0.91,1.07 -1.52,2.84 -0.93,4.7 -1.36,0.65 -4.52,-0.56 -3.73,2 -2.59,1.87 -0.87,4.71 -0.49,7.11 -1.27,1.72 2.24,1.99 3.14,3.2 1.19,0.53 2.27,1.21 2.96,0.05 1.12,0.9 1.35,2.64 3.05,1.69 2.12,0.9 2.09,4.11 1.18,5.21 3.13,0.75 0.58,4.42 2.61,6.09 -0.39,0.99 -3.64,-0.55 -2.72,1.47 3.15,0.22 2.69,5.73 -0.43,5.57 -2.23,-0.56 -4.71,2.43 -1.69,3.29 1.21,1.07 1.25,2.2 0.94,3.14 2.17,2.52 4.98,0.67 7.49,0.33 1.51,2.48 4.82,3.48 4.44,6.58 1.77,-0.41 3.17,-3.16 4.49,-3.39 3.31,0.6 4.11,-3.13 3.04,-5.57 -1.83,-2.22 -0.3,-4.53 2.45,-3.77 2.55,1.09 4.79,-0.72 7.38,0.01 2.84,0.15 6.37,1.82 8.78,-0.17 0.65,-3.39 5.24,-6.04 7.54,-2.78 1.85,0.63 5.78,4.21 6.08,0.38 -0.45,-2.41 3.52,0.65 2.08,-2.31 -2.01,-0.09 -2.51,-4.47 -0.81,-3.38 -1.64,2.12 0.92,2.66 1.07,0.34 -0.46,-2.15 2.38,-4.6 1.05,-6.15 -2.36,0.27 -1.35,-5.67 0.64,-3.13 -2.54,0.73 1.01,4.03 1.12,0.84 1.32,-2.4 3.72,-4.96 4.13,-7.43 -1.48,-1.18 -2.13,-3.67 -4.25,-2.51 -1.21,-1.56 -3.82,-0.43 -5.13,-2.43 -2.87,1.08 -0.98,-4.2 -4.12,-2.08 -1.35,-0.41 -2.91,-0.78 -3.72,-1.82 -0.39,1.7 -3.42,0.2 -2.88,2.31 -1.03,1.88 -2.16,4.69 -4.29,2.05 -1.21,-0.21 -0.6,-4.63 -2.32,-1.66 -2.18,1.62 -3.12,-0.12 -3.87,-2.12 -3.09,-0.03 -1.41,-4.42 0.31,-5.1 -2.19,-1.27 -5.18,-2.28 -7.77,-1.42 -1.98,2 -4.51,-1.63 -6.72,-1.15 -0.21,-0.07 -0.4,-0.62 -0.72,-0.42 z&quot;,</td>
      </tr>
      <tr>
        <td id="L75" class="blob-num js-line-number" data-line-number="75"></td>
        <td id="LC75" class="blob-code blob-code-inner js-file-line">						&quot;department-34&quot; : &quot;m 390.74,470.95 c -2.99,-0.26 -2.82,5.22 -4.91,4.05 -0.85,-0.82 -3.55,2.9 -1.7,3.78 -2.23,1.02 -3.63,-1.19 -4.2,-2.93 -1.16,0.9 -4.89,3.4 -3.25,0.24 -0.72,-2.79 -3.95,-1 -5.3,0 -2.69,-1.07 -4.43,1.99 -3.3,4.01 -2.19,2.21 -5.5,0.8 -7.8,-0.28 -1.78,1.11 -0.38,3.61 -0.42,5.05 -1.55,1.49 1.67,5.37 -2.24,4.09 -1.98,-1.46 -4.85,0.46 -4.95,2.6 -2.71,0.38 -5.15,2.58 -7.61,2.47 -1.2,-2.9 -5.65,-2.66 -5.41,0.83 -0.2,2.13 -0.02,4.29 2.09,5.91 -1.23,1.35 0.72,3.85 -1.77,4.6 -0.84,1.05 -3.22,1.42 -1.8,2.86 -2.1,0.55 -3.27,4.78 -0.38,4.9 0.41,3.09 3.29,3.1 4.71,0.7 1.12,1.12 0.35,3.34 2.55,3.76 2.97,1.15 1.66,-5.18 5.05,-4.27 1.09,-0.26 0.38,-2.58 1.62,-0.55 1.21,1.33 3.32,1.66 5.28,1.1 -0.81,3.2 2.64,2.34 4.33,4 1.73,-0.69 2.59,1.52 4.38,0.6 1.39,1.92 3.62,4.56 5.52,1.34 2.58,-2.15 5.39,-4.64 8.99,-3.22 1.68,-2.14 3.28,-4.7 5.33,-6.66 2.9,-0.94 5.12,-2.93 7.63,-4.62 1.32,-0.52 2.38,-2.93 0.36,-1.17 -0.86,0.97 -3.9,2.82 -4.09,1.95 2.86,-0.54 3.94,-3.18 5.35,-4.98 2.22,-0.89 3.15,-3.57 5.97,-3.69 2.76,-1.69 5.46,-2.2 8.14,-1.32 3.13,-2.28 2.15,-5.6 0.6,-8.52 -0.42,-1.85 -2.64,-1.51 -3.41,-3.24 -1.72,-0.64 -2.58,-4.02 -5.12,-2.47 -0.36,-1.17 1.06,-3.05 -1.22,-3.23 -1.16,-1.21 -1.48,-2.47 -3.51,-1.47 -2.48,1.54 -3.44,-1.7 -1.82,-3.25 0.15,-1.49 -1.98,-1.29 -2.11,-2.79 -0.5,-0.22 -1.04,-0.13 -1.56,-0.19 z&quot;,</td>
      </tr>
      <tr>
        <td id="L76" class="blob-num js-line-number" data-line-number="76"></td>
        <td id="LC76" class="blob-code blob-code-inner js-file-line">						&quot;department-81&quot; : &quot;m 317.26,455.8 c -1.38,0.45 -1.96,1.61 -3.59,0.76 -0.3,1.95 -3.52,3.22 -5.56,2.27 -1.35,-1.6 -1.97,-0.02 -0.95,1.04 -0.95,0.36 -4.67,-1.27 -3.47,1.46 -0.16,1.66 -2.33,-1.92 -2.18,0.76 -1.1,0.98 -2.79,-1.57 -4.48,-0.74 -2.96,-0.67 -1.32,3.31 0.16,3.83 0.79,1.92 -1.89,3.01 -2.42,4.25 -1.32,0.93 -1.16,3.17 -3.54,1.88 -3.23,0.63 2.44,1.72 -0.33,3.16 -1.29,2.54 1.59,4.57 1.92,6.82 3.43,0.3 1.18,4.78 4.33,5.68 1.56,1.28 -3.01,2.06 -0.13,2.25 2.4,0.02 1.46,2.84 -0.02,3.51 0.41,1.89 3.59,2.46 5.14,3.73 3.27,0.27 2.72,5.06 6.14,5.64 1.57,0.82 3.54,1.72 3.47,-0.75 2.28,-0.44 1.4,2 0.21,3 0.06,1.82 2.22,2.93 2.93,4.31 2.14,0.3 3.89,-2.52 5.16,0.35 2.18,0.85 0.37,-3.47 2.64,-4.11 1.88,0.14 4.42,2.05 6.83,2.16 2.71,-2.86 6.35,1.58 9.11,-0.98 1.2,-0.64 2.07,-1.84 2.78,-2.36 -0.59,-1.87 0.29,-4.05 -1.8,-5.38 -0.4,-2.17 -0.06,-5.25 1.22,-6.85 1.68,0.37 3.78,1.08 4.87,2.68 2.13,-1.79 6.04,-1.49 7.35,-3.74 0.82,-2 0.39,-5.04 -2.37,-4.51 -1.51,-1.26 -3.19,-1.55 -4.19,0.39 -2.37,0.97 -5.11,-0.89 -6.55,-2.85 -1.52,-2.15 -3.76,-4.35 -2.85,-6.85 -1.52,-0.96 -0.28,-3.74 -2.85,-4.01 -0.47,-0.84 1.76,-2.39 -0.4,-3.07 -0.29,-2.52 -2.16,-4.07 -4.11,-4.88 -0.57,-2.53 -3.81,-3.32 -5.31,-4.22 -0.15,-2.48 -4.32,0.72 -4.86,-1.12 1.44,0.14 3.17,-1.78 0.74,-1.46 -0.91,0.39 -2.23,-1.71 -3,-2.06 z&quot;,</td>
      </tr>
      <tr>
        <td id="L77" class="blob-num js-line-number" data-line-number="77"></td>
        <td id="LC77" class="blob-code blob-code-inner js-file-line">						&quot;department-82&quot; : &quot;m 270.52,443.01 c -2.14,1.16 -4.19,2.19 -6.63,2.16 -1.8,1.76 -1.62,-2.78 -3.54,-0.83 0.31,1.77 -1.92,4.88 1.19,4.85 2.39,1.55 0.09,4.21 -0.3,6.31 -0.44,1.21 -4,0.94 -1.6,2.01 1.97,0.84 -0.06,4.23 -1.88,2.4 -1.71,-1.22 -1.76,0.34 -2.14,1.6 -2.88,-0.32 -2.21,4.49 -0.81,4.92 0.76,-1.3 4.97,-1.27 3.43,0.36 -1.84,1.04 -0.66,3.8 -2.94,4.81 -1.25,0.84 -0.68,2.87 0.84,1.84 1.82,0.52 5.75,1.1 3.97,3.56 1.04,0.67 0.69,2.25 0.98,2.38 1.77,0.78 -1.98,4.07 1.01,3.39 2.26,-0.43 4.92,-0.42 6.74,-1.49 1.27,0.58 2.39,0.31 3.28,-0.35 1.56,0.75 2.53,2.41 3.56,2.88 1.74,-0.62 2.22,-2.04 4.12,-2 1.89,-0.5 1.91,-2.44 -0.22,-2.07 -1.95,-1.13 1.52,-1.46 1.74,-1.49 -0.38,-2.02 1.51,-2.5 2.7,-1.14 2.06,1 2.76,-3.06 4.11,-1.34 0.99,-1.05 2.54,-1.76 3.38,-2.23 -0.31,-0.89 -2.82,-2.03 -0.52,-2.27 3.19,1.02 3.39,-3.02 5.79,-4.18 1.52,-1.98 -2.9,-3.42 -1.35,-5.63 1.94,-1.07 4.17,0.24 5.66,0.61 0.71,-1.21 1.03,-1.65 2.08,-0.63 0.24,-1.33 0.21,-2.59 2.09,-1.85 1.1,0.24 2.24,0.41 1.15,-0.79 0.51,-1.8 4.19,2 3.66,-0.96 -0.31,-2.1 -2.39,0.61 -2.47,-1.31 -3.3,-1.19 0.65,-3.45 1.77,-4.89 0.21,-2.45 -4.44,-0.16 -4.38,-2.98 0.49,-1.88 -1.6,-1.91 -2.4,-1.54 -1.21,-0.58 -1.91,1.84 -3.15,0.41 -2.28,-0.21 -4.04,4.15 -5.85,2.74 -0.79,-2.47 -3.62,0.05 -1.56,1.51 0.31,2.35 -3.95,2.36 -3.07,-0.25 -2.24,-2.68 -3.51,1.69 -5.86,2.39 -1.45,2.53 -2.73,-0.71 -4.63,-0.48 -0.83,-1.02 1.91,-4.61 -0.86,-3.31 -1.97,2.14 -4.17,-0.81 -5.73,-2.04 -1.54,-0.03 -2.07,-2.27 -2.71,-3.05 0.48,-0.77 3.85,-1.24 1.34,-2.04 z&quot;,</td>
      </tr>
      <tr>
        <td id="L78" class="blob-num js-line-number" data-line-number="78"></td>
        <td id="LC78" class="blob-code blob-code-inner js-file-line">						&quot;department-12&quot; : &quot;m 344.82,407.22 c -2.14,2.24 -4.92,3.53 -5.91,6.44 -0.2,3.05 -2.88,4.6 -2.81,7.85 -2.78,1.77 -2.83,6.44 -7.03,4.76 -2.85,0.81 -3.66,-2.92 -6.7,-0.63 -2.79,-0.18 -0.5,4.84 -3.68,4.44 -1,2.09 -4.35,0.18 -4.99,0.68 -2.27,1.36 -4.93,3.35 -6.47,5.56 -0.5,0.74 -1.33,-2.39 -1.72,0.49 -3.55,0.2 0.23,4.71 0.28,6.73 2.91,2.12 -2.27,3.27 -0.47,5.85 1.39,1.46 5.91,0.06 3.8,3.53 -3.1,-0.35 -2.94,5.1 0.37,3.8 0.84,2.24 2.93,2.1 3.97,0.28 0.64,-0.72 3.02,-0.92 4.38,-1.29 0.38,2.53 5.59,1.47 2.9,3.68 1.7,0.61 3.86,-0.93 4.36,1.52 3.19,-0.21 4.33,4.36 7.18,4.97 1.07,2.25 3.3,4.6 2.21,6.63 2.23,0.9 1.85,3.49 2.9,4.9 -1.38,2.72 2.8,5.25 4.08,7.58 2.19,1.85 5.01,1.88 6.77,-0.28 2.08,1.32 5.71,0.5 5.44,3.99 1.27,0.35 3.33,-1.02 4.93,0.31 1.97,-0.43 -0.03,-3.71 1.21,-5.08 -2.26,-3.18 1.08,-5.37 3.72,-2.96 2.82,0.94 5.31,-0.91 4.29,-3.64 1.04,-3.15 6.02,0.38 5.11,-4.28 0.93,-2.39 7.18,-5.33 2.04,-7.25 -1.51,-0.47 -2.97,-0.34 -3.42,-2.06 -1.73,1.9 -3.93,-2.51 -0.51,-1.95 0.48,-1.6 1.14,-3.68 2.65,-4.73 -0.68,-4.43 -9.42,2.3 -6.63,-3.08 -1.18,-1.25 -3.15,-1.32 -3.65,-2.81 -2.6,0.85 1.8,-4.01 -0.75,-5.21 -0.72,-3.41 2.21,-7.15 -2.14,-9.54 -0.76,-2.6 0.83,-5.86 -2.52,-7.49 -2.49,-2.83 -5.19,-5.99 -4.63,-9.9 -1,-0.3 1.62,-2.72 -0.79,-2.1 -2.92,-0.77 -0.83,-7.54 -5.15,-5.36 -2.76,2.56 0.68,-4.65 -2.57,-4.34 z&quot;,</td>
      </tr>
      <tr>
        <td id="L79" class="blob-num js-line-number" data-line-number="79"></td>
        <td id="LC79" class="blob-code blob-code-inner js-file-line">						&quot;department-46&quot; : &quot;m 289.52,399.9 c -1.93,0.63 -3.22,2.08 -5.19,2.51 -0.55,2.48 1.91,5.04 0.2,6.77 1.53,1.17 0.68,2.13 -0.64,2.71 -0.49,1.39 -2.82,1.08 -2.03,3.22 -2.04,0.31 -3.93,1.87 -1.84,3.73 -0.63,1.48 -1.5,2.57 -2.96,3.19 -1.15,2.55 -6.2,0.92 -4.86,4.75 -0.81,1.54 -2.94,2.2 -2.41,4.25 -2.21,-0.14 -3.42,2.82 -5.02,1.78 1.06,2.16 1.42,4.31 1.76,6.68 1.42,0.87 1.66,2.27 1.65,3.98 1.08,0.06 4.12,-1.76 2.93,0.81 -1.71,0.25 -2.37,1.31 -0.78,2.24 0.3,2.25 3.42,1.16 3.62,3.37 1.9,1.69 3.3,-0.16 5.08,-0.35 0.72,1.57 -2.26,4.22 0.76,4.02 1.46,0.62 1.81,2.15 3.19,0.31 1.85,-0.6 3.07,-3.05 4.33,-3.46 2.43,-0.2 1.29,4.21 3.91,2.83 1.72,-1.05 -1.79,-4.67 1.45,-4.27 1,-0.03 1.35,3.17 2.11,1.18 -1.32,-1.83 1.53,0.24 1.9,-1.51 1.38,-1.16 3.1,-1.29 4.45,-0.92 0.2,-1.96 1.81,0.11 2.71,-1.11 1.67,0.1 4.18,-1.49 1.89,-2.9 -0.47,-2.26 -2.34,-4.82 -1.67,-6.85 1.76,-0.03 1.59,-1.88 3.42,-1.54 2.32,-1.45 3.8,-3.77 6.26,-4.75 1.66,-0.78 4.05,1.82 5.11,-0.84 2.37,0.13 1.47,-2.41 -0.05,-3.14 -0.16,-1.64 0.62,-3.82 -1.82,-3.9 0.88,-2.1 0.95,-4.43 1.69,-6.42 -0.75,-2.19 -3.06,-3.63 -3.78,-5.98 -0.22,-1.15 1.69,-2.17 -0.2,-3.09 0.38,-3.82 -4.01,-3.64 -6.05,-1.43 -0.4,-1.8 -2.37,-1.92 -3.03,-0.03 -1.66,0.66 -3.24,2.7 -4.53,1.71 -1.67,0.61 -1.38,-2.93 -3.39,-2.7 -0.94,-2.08 -2.85,-4.19 -5.2,-4.37 -1.54,-0.53 -2.13,1.38 -2.99,-0.49 z&quot;,</td>
      </tr>
      <tr>
        <td id="L80" class="blob-num js-line-number" data-line-number="80"></td>
        <td id="LC80" class="blob-code blob-code-inner js-file-line">						&quot;department-24&quot; : &quot;m 247.71,356.64 c -1.33,1.72 -2.15,5.44 -4.37,3.98 -1.29,2.19 0.65,6.02 -2.78,7.22 -1.07,1.73 -1.22,3.17 -3.43,2.89 -1.35,1.3 -2.7,2.47 -3.69,2.4 1.31,1.44 -2.43,1.19 -1.92,3.33 -1.11,2.86 2.21,7.18 -2.16,7.82 -1.72,1.11 -2.1,4.21 -4.37,4.44 -1.83,-1.85 -4.84,-0.09 -5.58,2.19 -1.71,0.92 1.62,1.85 -0.97,2.36 -2.09,3.33 4.38,0.08 4.2,3.85 0.13,2.45 -1.7,4.67 -1.9,7.15 -2.34,1.81 1.75,4.57 -1.01,6.63 -1.98,1.62 -0.57,1.93 1.18,2.08 1.5,2.41 4.72,0.24 7.34,1.24 1.58,-2.14 3.57,-4.36 5.67,-1.25 -1.59,1.46 -2.98,1.82 -1.65,4.38 2.67,1.95 3.57,5.11 3.66,7.87 2.89,2.27 5.83,-2.31 8.31,-0.64 1.5,-0.14 1.73,-2.6 3.78,-2.17 1.74,-0.66 1.71,2.87 4.06,1.59 2.32,0.27 4.87,-3.2 5.62,0.33 1.53,0.48 -2.2,5.61 1.71,4.55 1.86,-2.63 5.57,-3.37 7.55,-0.26 1.61,0.15 2.83,4.14 2.8,0.73 3.09,-1.47 0.93,-6.06 5.03,-5.87 2.1,-1.49 4.63,-2.68 4.89,-5.07 -3.18,-2.94 3.24,-2.15 2.07,-5.03 1.39,-0.77 2.75,-1.97 3.62,-3.12 -2.55,-1.45 1.11,-2.89 -0.92,-4.95 -0.82,-1.88 -0.06,-3.23 0.88,-4.14 -1.12,-2.13 -3.92,-5.19 -1.35,-6.5 -1.47,-1.44 -7.7,-0.59 -6.45,-3.12 3.25,-2.31 -3.9,-1.43 -1.21,-3.75 2.08,-0.54 1.75,-2.32 -0.17,-2.44 -0.66,-1.42 -0.44,-4.25 1.4,-4.42 0.7,-1.32 4.27,-4.12 0.61,-3.76 -2.11,-1.25 -0.47,-1.95 0.2,-2.77 -1.16,-1.12 -2.39,-0.61 -3.26,-2.06 -1.89,0.78 -2.29,-1.48 -4.2,-1.06 -0.44,-1.95 3.54,-4.4 -0.69,-4.44 -2.48,1.66 -3.1,-3.01 -4.18,-4.31 -2.45,-0.69 -5.34,1.33 -6.92,-0.8 -0.28,1.94 -2.24,3.99 -3.3,1.71 -4.01,-0.32 1.3,-5.83 -3.25,-6.54 -2.23,1.7 -3.48,-1.31 -4.85,-0.28 z&quot;,</td>
      </tr>
      <tr>
        <td id="L81" class="blob-num js-line-number" data-line-number="81"></td>
        <td id="LC81" class="blob-code blob-code-inner js-file-line">						&quot;department-16&quot; : &quot;m 252.54,327.65 c -2.29,0.72 -1.44,3.44 -4.4,2.98 -1.27,1.85 -4.05,0.47 -4.98,-1.39 -0.68,-3.54 -5.06,1.6 -1.79,2.2 -0.58,3.13 -3.4,1.11 -5.1,0.91 -3.14,1.37 -5.19,-1.3 -7.86,-1.81 -1.52,1.5 -2.93,-1.91 -4.66,0.15 -1.97,-0.37 -2.45,3.38 -5.06,2.24 -1.93,0.04 0.82,2.24 -1.2,2.74 0.87,2.68 -3.95,2.15 -2.09,4.68 -0.28,1.91 -3.6,0.31 -2.2,2.53 -0.11,1.44 2.16,2.96 -0.03,4.42 -0.09,1.53 -0.09,4.77 -2.18,3.4 -1.96,2.42 -3.18,-3.47 -5.22,-0.43 -2.04,1.16 -4.38,0.45 -6.15,1.89 -2.73,1.16 0.38,1.62 1.39,1.98 -2.76,2.08 2.9,5.14 -0.46,5.78 -1.46,1.75 0.17,2.05 1.51,1.62 1.01,2.19 5.21,3.29 2.97,5.77 2.34,0.08 4.85,3.05 1.84,4.29 -0.18,1.67 3.8,4.33 0.08,4.95 -3.11,0.84 0.04,2.57 1.34,2.89 -0.62,0.79 -3.1,1.95 -1.06,3.18 2.2,-2.04 4.86,0.36 7.25,0.92 -0.44,1.96 0.03,3.48 2.36,2.77 1.73,0.17 2.65,2.07 3.44,2.83 1.42,-1.43 3.54,-1.84 5.23,-0.38 1.69,-1.46 2.03,-3.29 3.72,-4.47 1.1,-1.12 3.55,-1.27 2.27,-3.69 -1.79,-2.79 1.03,-5.85 1.8,-7.57 0.23,-1.21 1.54,0.42 2.16,-1.12 1.02,-1.12 2.42,-1.8 3.66,-1.6 0.38,-3.16 4.03,-3.24 3.74,-6.43 -0.64,-1.42 -0.09,-4.56 1.85,-3.02 1.5,-1.35 2.27,-4.04 4,-5.85 1.03,-2.13 3.92,-2.7 3.46,-5.45 1.36,-0.67 3.4,1.91 3.05,-0.98 1.5,-1.75 2.07,-3.92 1.46,-6.01 -0.57,-2.93 3.18,0.64 4.34,-1.8 2.69,-1.02 0.69,-6.52 -1.66,-5.43 -1.88,-0.53 -3.24,-3.11 -1.94,-5.21 -0.3,-3.28 -2.38,-2.24 -4.88,-2.46 z&quot;,</td>
      </tr>
      <tr>
        <td id="L82" class="blob-num js-line-number" data-line-number="82"></td>
        <td id="LC82" class="blob-code blob-code-inner js-file-line">						&quot;department-86&quot; : &quot;m 220.19,259.01 c -2.67,1.11 -1.14,6.66 -4.7,5.46 -1.12,2.67 -0.28,6.33 2.34,7.3 1.21,2.8 -0.12,6.86 2.81,8.58 -0.34,0.88 -4.74,0.94 -2.01,2.12 1.66,0.91 -1.21,4.66 1.86,5.01 0.17,2.88 -3.53,4.96 -3.39,7.51 2.34,-1.74 2.86,1.09 4.01,2.56 -2.36,1.41 -1.42,4.19 -3.11,6.09 1.11,2.79 0.46,6.03 2.68,8.32 -0.98,2.26 1.88,5.6 3.64,2.56 3.26,-2.86 4.22,4.09 1.42,5.44 -1.17,2.3 -1.1,6.6 2.78,6.31 1.76,0.42 -1.54,4.9 1.9,4.82 2.58,2.29 6.42,0.33 9.24,2 3.12,-1.13 -1.64,-3.61 1.54,-4.88 2.93,-0.45 3.66,4.64 7.15,2.55 2.65,-1.24 4.01,-4.64 7.5,-3.07 5.18,0.43 -2.68,-6.17 1.99,-6.32 0.93,-3.5 4.73,-3.96 7.28,-4.09 1.27,-2.3 2.21,-5.88 5.59,-4.54 3.05,-1.23 4.82,-4.66 1.43,-6.65 -0.96,-2.09 -0.63,-5.43 -4.09,-4.96 -2.4,-0.38 -3.1,-2.52 -5.49,-3.06 -4.32,-2.56 0.87,-7.41 -2.39,-10.17 -3.73,-2.36 -3.49,-7.19 -7.25,-9.59 -1.82,-2.65 -1.18,-7.21 -5.41,-7.83 -3.82,-1.6 1.37,4.35 -2.65,2.83 -3.22,-0.17 -6.05,2.2 -9.36,1.21 -5,0.41 0.09,-6.41 -3.44,-7.54 -1.02,-1.75 -5.86,1.14 -3.94,-2.42 -1.49,-2.05 -5.43,-1.78 -6.57,-4.86 -0.36,-0.36 -0.83,-0.61 -1.33,-0.67 z&quot;,</td>
      </tr>
      <tr>
        <td id="L83" class="blob-num js-line-number" data-line-number="83"></td>
        <td id="LC83" class="blob-code blob-code-inner js-file-line">						&quot;department-37&quot; : &quot;m 248.48,223.77 c -1.42,3.62 -6.45,2.73 -8.2,5.37 -1.46,1.36 -3.9,-2.72 -3.72,0.4 1.37,1.11 1.66,4.33 -0.82,2.81 -1.82,-1.23 -6.06,-3.74 -5.96,0.05 -1.81,2.38 0.79,4.4 -1.19,6.79 -1.59,2.5 -0.38,5.84 -2.27,7.78 -1.62,2.49 -3.61,4.89 -3.44,8.06 -0.62,2.26 -1.45,6.53 1.54,7.19 1.25,-0.87 1.94,2.54 3.31,0.71 0.97,1.11 -0.63,5.21 2.13,3.2 1.8,-1.1 1.89,1.61 3.57,1.4 0.89,2.11 -1.82,7.48 2.05,6.94 1.94,-0.66 4.56,0.68 6.7,-0.98 1.61,-0.96 6.42,0.73 3.58,-2.33 -0.63,-2.85 4.7,0.45 5.56,1.73 0.59,2.71 0.86,5.99 3.94,7.28 1.95,1.88 1.63,7.78 6,6.31 1.43,1.23 2.54,1.03 3.52,-0.09 1.84,-0.7 -1.13,-3.48 0.89,-4.6 0.94,-2.88 0.5,-6.24 2.1,-8.75 -0.51,-3.01 1.88,-5.04 4.77,-5.05 2.3,-0.22 4.18,2.32 5.36,-0.8 1.09,-2.04 2.29,-3.59 3.83,-4.89 -0.17,-3.29 -2.68,-5.86 -4.09,-8.7 -1.3,-3.91 -5.06,-1e-4 -7.13,-2.72 -1.96,-2.54 1.63,-6.07 -1.07,-8.64 1.91,-0.4 1.97,-2.18 -0.13,-2.78 -0.17,-1.99 -3.11,-4.5 -0.71,-6.14 -0.62,-1.2 -2.55,-4.44 -3.27,-1.51 -0.57,-2.17 -2.63,-4.19 -4.63,-1.88 -3.07,2.82 -2.07,-3.8 -2.27,-4.29 -2.95,-0.2 -5.98,-1.05 -8.71,-0.82 -1.21,0.63 -0.51,-1.11 -1.23,-1.05 z&quot;,</td>
      </tr>
      <tr>
        <td id="L84" class="blob-num js-line-number" data-line-number="84"></td>
        <td id="LC84" class="blob-code blob-code-inner js-file-line">						&quot;department-72&quot; : &quot;m 231.9,172.51 c -2.61,0.34 -4.43,1.91 -6.19,3.04 -1.38,0.48 -2.05,1.94 -3.42,2.6 -0.33,3.05 -3.2,-1.34 -4.33,0.83 -1.43,1.08 -5.63,0.06 -4.24,2.95 -3.08,-0.79 0.86,3.38 -1.37,4.58 -0.86,1.81 1.85,4.28 -0.94,5.2 -2.01,1.1 -4.73,3.07 -1.86,4.9 -0.99,1.29 0.02,2.59 -0.74,3.79 -2.44,-0.68 -6.78,1.67 -3.4,3.85 0.73,2.09 1.76,4.48 -1.53,4.5 -2.58,-0.44 -3.89,2.42 -1.36,3.52 0.5,2.29 -5.19,2.01 -2.45,4.82 3.47,-0.45 1.48,4.86 3.4,5.98 2.31,-1.32 4.91,2 6.78,-0.52 3.29,0.6 -2.46,2.42 0.25,4.06 0.74,1.66 3.87,2.49 4.49,0.08 2.3,1.12 4.71,0.48 6.02,2.83 1.69,1.36 4.05,0.33 5.35,2.19 1.62,-0.93 1.69,-2.65 3.94,-1.78 2.54,-0.05 4.67,2.82 7.14,2.4 0.9,-1.5 -2.93,-3.52 -0.02,-4.31 1.04,1.34 2.82,2.12 3.33,-0.2 2.31,-0.39 4.79,-1.35 6.51,-2.6 -2.85,-2.23 1.58,-5.3 3.79,-5.52 0.46,-1.4 2.4,-3.52 3.78,-4.83 -1.44,-1.85 -0.29,-6.03 1.78,-3.82 -1.09,-2.59 3.21,-2.96 0.58,-5.37 0.08,-1.7 1.43,-3.61 -1.11,-3.97 -1.64,-2.45 2.4,-1.51 1.74,-3.29 -2.05,-0.4 1.4,-1.62 0.89,-2.96 2.29,0.52 3.2,-1.49 0.55,-1.94 -2.01,-0.09 -3.25,-2.56 -5.32,-1.22 -2.38,-0.82 -2.49,-6.22 -5.36,-4.81 0.79,2.39 -2.74,0.17 -4.1,0.37 -1.11,-1.06 -2.58,-1.99 -2.45,-3.6 -1.86,0.23 -5.36,-0.71 -4.94,-3.08 -0.44,-3.4 0.09,-8.02 -4.58,-8.58 l -0.59,-0.08 2e-5,0 z&quot;,</td>
      </tr>
      <tr>
        <td id="L85" class="blob-num js-line-number" data-line-number="85"></td>
        <td id="LC85" class="blob-code blob-code-inner js-file-line">						&quot;department-61&quot; : &quot;m 236.9,140.22 c -1.37,2.93 -4.44,0.95 -5.77,0.51 -0.7,2.09 -2.92,0.83 -4.24,2.34 -1.35,-2.77 -4.38,-0.25 -5.26,1.87 -3.09,0.73 -4.56,4.12 -8.22,4.12 0.6,2.97 -3.23,-1.05 -4.99,-0.78 -2.07,-0.19 -4.42,-1.53 -4.55,1.51 -1.86,-0.97 -4.38,-5.01 -6.99,-1.88 -2.67,0.7 -5.63,2.58 -8.38,0.81 -1.94,-0.21 0.58,2.41 -2,2.73 -2.21,0.79 -4.81,2.48 -5.8,4.18 1.64,0.47 4.03,2.64 4.89,3.81 -2.6,1.08 -0.04,3.17 -0.37,4.16 -0.1,3.46 -3.63,4.61 -4.76,7.47 1.29,1.59 1.78,3.06 3.56,2.81 -0.2,2.49 3.05,0.83 2.04,-0.77 2.19,0.16 3.37,-1.72 3.97,1.42 2.29,-1.26 4.74,-2.16 6.49,-3.76 2.15,-0.24 4.6,-0.72 6.51,1.02 1.07,-1.63 2.35,-2.41 3.95,-1.42 1.83,-1.07 -0.27,-4.47 3.02,-3.12 1.81,1.18 3.45,2.14 1.99,3.87 0.35,2.25 1.92,4.62 4.47,2.94 1.72,0.65 -0.84,6.99 2.46,4.03 1.16,0.36 3.03,2.09 3.43,-0.38 1.63,-0.81 2.66,-2.19 4.04,-2.85 0.28,-1.38 5.31,-3.16 7.52,-1.96 3.9,1.26 2.59,5.53 3.26,8.6 -0.11,2.92 4.56,1.76 5.41,3.53 -0.07,1.99 3.35,3.78 5.67,2.91 3.19,-3.99 3.88,7.21 7.66,3.4 3.17,-1.53 -1.64,-4 -0.17,-6.33 -3.57,-0.8 0.8,-4.69 3.13,-4.08 2.2,-1.01 6.03,-4.76 3.83,-6.66 -0.95,-2.15 2.33,-4.5 -0.88,-5.72 0.72,-2.4 -4.26,-1.56 -3.98,-4.43 -1.88,-0.39 0.25,-5.19 -3.06,-4.1 -0.43,-1.15 -0.37,-2.32 -1.89,-2.36 3.89,-2.53 -0.45,-5.72 -3.19,-6.87 -1.23,-0.78 -2.92,-1.32 -1.88,-2.86 -1.36,-1.19 -1.22,-3.67 -3.26,-1.5 -2.58,-0.67 -7.27,0.22 -7.13,-3.52 0.64,-0.73 0.75,-2.65 -0.53,-2.7 z&quot;,</td>
      </tr>
      <tr>
        <td id="L86" class="blob-num js-line-number" data-line-number="86"></td>
        <td id="LC86" class="blob-code blob-code-inner js-file-line">						&quot;department-27&quot; : &quot;m 242.33,106.21 c -2.25,1.4 -4.46,3.12 -7.27,3.2 -3.13,0.01 -1.44,3.96 -0.97,5.79 -0.25,1.42 -0.2,3.07 0.05,4.32 1.56,-2.67 4.74,1.16 1.61,1.68 -3.49,1.51 3.09,2.25 1.65,4.56 -0.6,1.84 0.47,2.5 1.82,3.11 -1.56,1.19 -0.91,2.9 -0.68,4.31 -3.08,-0.3 -1.43,3.4 0.78,3.14 1.11,2.25 -1.15,5.22 -2.03,7.57 1.97,1.86 5.79,2.95 8.17,1.67 1.68,-0.94 2.06,2.46 2.78,2.55 -1.38,3.04 5.18,3.21 5.92,5.84 1.68,1.55 -0.55,2.63 -0.78,3.74 1.84,0.46 1,3.47 3.6,1.89 2.3,-0.06 2.09,-4.03 4.58,-2.4 2.21,-1.11 4.77,-0.84 6.52,-3.04 1.78,1 3.18,0.1 2.69,-1.95 1.73,0.3 3.34,2.1 5.52,1.18 1.73,0.91 5.58,0.54 5.97,-1.71 -2.26,-3.14 2.59,-4.24 4.24,-5.72 -0.13,-1.58 -1.51,-4.22 1.43,-3.88 0.74,-0.67 -0.33,-1.93 0.53,-2.57 -1.47,0.74 -2.69,-0.27 -1.44,-1.58 -1.04,-1.31 -2.12,-4.8 0.61,-3.44 1.11,-1.2 0.8,-1.98 2.49,-1.09 3.37,-0.07 4.6,-2.86 5.45,-5.81 0.13,-2.58 1.39,-4.89 2.52,-6.95 1.56,-1.59 3.56,2.74 3.6,-0.58 -1.93,-1.54 -0.62,-5.1 -2.69,-7.09 -0.94,-2.78 -3.12,-0.33 -5.23,-1.99 -1.74,0.33 -2.23,-3.11 -4.08,-1.45 -2.23,-1.34 -5.13,-1.37 -7.71,-1.23 -0.89,1.39 -2.82,1.34 -2.49,3.35 -1.48,1.47 -1.23,4.8 -4.4,3.5 -1.42,0.9 -3.69,0.83 -4.18,2.58 -2.63,-0.42 -3.44,1.09 -2.81,3.24 -1.76,0.32 -3.16,0.76 -4.2,-0.95 -1.28,0.44 -0.68,-4.41 -2.73,-1.94 -0.92,0.95 -1.47,-2.05 -3.03,-1.54 0.47,-2.75 5.09,0.66 3.34,-3.08 -0.36,-1.37 -2.02,1.31 -1.95,-1 -2.7,-0.13 -3.88,-2.85 -6.72,-1.29 -2.27,1 -3.56,-0.22 -5.16,-1.45 -2.66,0.51 -3.03,-3.16 -5.33,-3.52 z&quot;,</td>
      </tr>
      <tr>
        <td id="L87" class="blob-num js-line-number" data-line-number="87"></td>
        <td id="LC87" class="blob-code blob-code-inner js-file-line">						&quot;department-14&quot; : &quot;m 231.23,109.9 c -4.06,0.09 -6.85,2.84 -9.55,5.38 -3.34,2.06 -7.05,3.56 -10.99,3.85 -1.95,1.92 -3.54,-1.01 -5.94,-1.28 -2.67,-1.83 -5.65,-1.96 -8.71,-2.47 -2.52,-0.48 -5.06,0.57 -7.64,-0.13 -3.42,-0.41 -7.08,-0.38 -10.19,-1.98 -1.94,-1.82 -4.91,-0.74 -7.32,-0.9 -3.6,0.27 -1.56,4.12 -3.38,5.89 0.35,2.42 2.43,4.3 4.66,5.41 1.29,2.26 4.25,1.82 4.95,-0.81 0.89,1.47 2.18,1.84 0.71,3.15 -2.85,2.72 2.74,3.63 1.8,6.79 0.25,1.58 -1.34,2.53 0.39,3.45 -2.56,1.47 -4.13,6.64 -7.82,4.57 -1.7,0.05 -2.56,3.86 0.25,2.27 1.68,0.8 -1.5,3.01 -2.33,3.69 -1.18,-0.64 -2.61,2.05 -3.44,2.77 1.51,0.52 3.07,1.11 2.99,2.92 1.94,0.53 4.35,0.57 6.32,-0.18 1.55,1.73 4.66,1.77 5.78,1.31 0.33,1.85 2.06,-2.55 3.65,-1.79 1.67,-0.4 2.88,-1.72 1.91,-3.16 2.07,-1.17 2.99,1.93 4.94,0.32 1.69,0.63 2.6,-1.47 4.44,-1.14 2.02,-2.53 4.71,-0.49 6.27,0.75 0.09,2.25 1.52,-0.03 1.58,-1.02 2.72,0.42 5.75,0.47 7.89,2.34 0.72,-2.21 4.15,-0.58 5.38,-3.06 1.98,-1.59 4.45,-2.16 5.53,-4.57 1.56,-0.47 2.62,-1.63 3.42,0.6 1.16,-0.33 2.13,-1.63 3.58,-1.13 0.5,-2.08 1.78,-0.88 2.61,-0.44 1.61,0.55 3,0.24 4,-1.29 0.95,1.22 2.59,1.22 2.01,-0.7 1.28,-2.16 0.25,-3.37 -2.04,-3.81 -1.78,-1.67 1.38,-2.37 1.39,-3.02 -1.93,-1.58 2.62,-4.1 -0.98,-4.39 -0.16,-2.06 0.6,-4.48 -2.13,-4.95 -3.24,-2.19 4.22,-2.19 0.79,-4.43 -0.9,-0.04 -3.11,2.04 -1.98,-0.25 -0.33,-1.14 -1.2,-1.29 -0.01,-2.61 -1.49,-1.67 0.64,-7.09 -2.8,-5.97 z&quot;,</td>
      </tr>
      <tr>
        <td id="L88" class="blob-num js-line-number" data-line-number="88"></td>
        <td id="LC88" class="blob-code blob-code-inner js-file-line">						&quot;department-76&quot; : &quot;m 285.08,67.51 c -1.66,1.28 -3.92,-0.27 -5.32,2.21 -2.55,2.82 -5.75,4.75 -9.23,6.16 -2.69,2.07 -6.27,0.91 -9.1,2.49 -3.04,0.83 -5.97,2.2 -9.16,2.2 -4.64,-0.08 -8.38,2.85 -12.2,5.03 -3.19,1.24 -5.65,3.53 -8.97,4.44 -4.45,0.63 -4.32,5.58 -6.08,8.7 -1.33,2.41 -3.69,6.09 0.02,7.66 2.71,1.09 5.28,1.25 8.39,1.98 3.84,1.23 7.92,-4.2 10.87,-0.97 1.02,1.67 2.99,3.04 4.68,1.44 -0.81,3.45 3.88,2.23 5.92,1.74 1.25,0.7 1.48,-1.8 1.82,0.62 0.74,1.56 3.24,0.12 3.81,1.84 1.65,-0.96 2.48,4.22 -0.34,2.48 -3.28,0.03 0.21,1.48 0.51,2.68 2.73,-3.35 2.83,4.25 5.77,2.84 2.8,-0.27 -0.27,-3.85 3.3,-3.41 1.82,-0.28 2.83,-2.57 4.57,-2.23 0.36,-1.37 4.68,0.8 4.04,-2.57 1.27,-2.05 1.52,-4.08 4.3,-5.05 2.08,0.14 5.31,0.85 7.56,1.4 2.14,-0.45 3.59,3.15 6.18,2.19 2.06,0.69 2.28,-3.97 4.3,-4.86 1.52,-1.49 -0.75,-3.01 -1.45,-0.94 -2.42,-0.89 0.93,-2.53 -0.81,-3.95 0.3,-1.61 -2.27,-1.27 -1.03,-2.58 -0.73,-1.35 1.8,-2.21 -0.04,-3.48 1.02,-1.01 3.32,-5.11 0.67,-2.57 -2.48,-0.31 0.5,-3.34 1.11,-4.23 -0.07,-1.57 3.34,-0.34 1.01,-2.16 -2.4,-2.69 -1.34,-6.85 -4.28,-9.1 -3.65,-1.5 -5.37,-5.07 -8.6,-7.13 -2.03,-0.46 -0.42,-2.8 -2.2,-2.85 z&quot;,</td>
      </tr>
      <tr>
        <td id="L89" class="blob-num js-line-number" data-line-number="89"></td>
        <td id="LC89" class="blob-code blob-code-inner js-file-line">						&quot;department-60&quot; : &quot;m 299.82,88.06 c -0.68,1.53 -2.52,3 -2.62,4.61 0.88,0.83 2.72,-2.26 2.36,0.47 -2.03,0.88 -1.5,2.81 -1.5,4.35 -1.65,1.28 0.75,1.64 0.2,3.03 0.54,1.64 1.83,2.54 0.02,4.14 0.78,1.65 2.88,-1.94 3.18,0.81 -0.81,1.88 -3.2,3.3 -3.32,5.72 1.83,-0.19 -0.44,1.38 1.38,2.1 1.48,2.13 0.75,4.92 2.41,6.82 0.2,2.27 -1.63,1.56 -2.48,0.39 -2.21,-0.34 -2.49,2.24 -0.48,2.81 -0.83,1.16 -0.47,2.78 1.13,3 2.38,-0.91 4.68,1.32 7.04,0.62 2.19,-0.63 4.26,-0.42 6.14,-1.88 1.82,-1.52 2.59,1.29 4.7,0.92 0.24,2.48 3.26,-1.11 3.69,1.4 -0.75,1.55 3.2,0.09 3.21,-1.39 1.69,-0.21 1.93,2.59 3.71,1.86 2.57,0.22 4.8,1.97 6.25,3.43 0.62,-1.34 1.71,-1.33 1.95,0.34 1.46,2.81 2.94,-2.02 4.79,0.35 1.09,0.96 1.32,2.68 2.73,1.05 0.38,2.06 2.62,0.41 2.41,-0.61 2.06,-2.04 3.56,2.74 5.7,0.23 1.37,0.79 3.07,-1.58 3.55,0.59 0.9,-2.08 4.02,0.32 3.84,-2.61 0.97,-1.2 1.9,-2.09 3.15,-2.84 -1.43,-0.2 -1,-3.93 -2.02,-1.23 0.12,2.36 -0.59,-0.15 -0.51,-1.14 -0.98,-0.34 -1.96,-0.8 -2.82,-1.45 1.46,-1.59 0.58,-5.08 -1.78,-5.51 -1.64,-1.93 1.32,-3.14 3,-2.37 2.78,-1.33 1.45,-5.56 2.96,-6.93 1.83,1.02 3.46,-1.08 0.88,-1.43 -2.12,-0.58 0.91,-1.96 -1.18,-3 -0.31,-1.21 1.9,-1.71 1.13,-3.46 1.11,-2.28 -2.26,-3.66 -0.83,-5.46 -1.28,-1.35 1.28,-1.82 0.48,-3.31 0.33,-2.37 -2.35,1.17 -1.98,-1.22 -1.06,0.07 -2.21,3.33 -3.26,0.83 -1.15,-1.16 -2.97,0.6 -2.46,1.87 -0.95,-1.04 -2.28,-2.96 -3.61,-2.19 0.98,1.2 1.14,2.51 -0.39,1.26 -0.14,2.4 -4.2,0.61 -3.1,3.55 -0.54,2.6 -5.29,-1.86 -5.5,1.9 0.32,2.24 -2.85,2.23 -2.21,0.03 -1.14,-1.83 -2.74,1.59 -3.58,-0.97 -1.21,-1.4 -2.44,-1.07 -3.66,-0.6 -0.85,-3.25 -4.16,-1.53 -6.1,-3.1 -0.93,-1.42 -3.34,-0.98 -4.87,-2.04 -2.87,-0.39 -5.38,1.28 -8.22,0.91 -0.21,-2.15 -3.87,-1.59 -4.92,-1.24 -1.09,-1.54 -2.79,1.74 -4.47,0.11 -1.06,-0.76 -1.06,-1.17 -0.69,-2.16 -0.99,-0.72 -2.08,-1.47 -3.42,-1.36 z&quot;,</td>
      </tr>
      <tr>
        <td id="L90" class="blob-num js-line-number" data-line-number="90"></td>
        <td id="LC90" class="blob-code blob-code-inner js-file-line">						&quot;department-80&quot; : &quot;m 292.25,47.76 c -3.3,0.48 -3.7,7.09 -0.18,7.88 1.08,1.67 4.2,2.74 3.06,4.24 -2.73,-1.29 -6.63,-3.63 -7.9,0.8 -0.08,3.06 -3.29,5.38 -4.22,7.27 1.37,-0.11 3.64,-1.46 3.18,1.37 3.11,1.87 5.05,5.06 7.98,7.06 3.9,1.29 3.89,5.38 5.12,8.61 0.56,2.66 4.89,3.47 4.09,5.66 1.46,2.82 4.15,-0.88 5.54,0.73 2.25,-2 4.72,2.18 7.27,1.01 2.7,-0.93 5.98,-1.02 8.68,0.5 1.84,-0.03 3.1,2.73 5.49,1.65 1.93,0.79 2.11,3.17 3.94,1.57 2.03,0.38 2.41,3.33 4.24,1.67 1.8,-0.87 1.46,4.54 3.03,1.36 0.02,-3.92 4.11,-1.35 5.69,-2.17 -0.71,-2.24 0.89,-2.61 2.47,-2.96 0.23,-1.49 2.58,-0.96 0.98,-2.41 1.05,-1.53 0.91,1.46 2.09,-0.25 0.9,2.74 1.49,1.35 3.01,0.23 1.35,0.58 3.49,2.16 3.45,-0.59 1.21,0.66 3.53,0.99 2.21,-1.27 0.39,-2.05 -3.23,-2.65 -0.99,-4.12 0.13,-1.56 -2.17,-2.32 -0.06,-3.42 -0.06,-1.95 2.47,-2.66 2.02,-5.11 0.89,-1.27 2.86,-3.19 2.9,-4.11 -2.64,0.29 0.37,-2.52 -2.05,-2.42 -2.22,-1.41 -5.14,-3.16 -7.9,-1.23 -1.34,-2.15 -4.91,2.97 -5.09,0.51 1.42,-1.44 -0.8,-3.49 -2.15,-1.79 -0.94,1.46 -4.33,1.85 -2.41,-0.4 3.11,-2.33 -2.99,-5.63 -2.46,-2.07 1.41,1.98 -2.63,-0.12 -3.46,-0.4 -1.61,-0.21 -3.12,-0.74 -2.69,-2.12 -1.34,-0.69 -1.48,3.04 -2.43,0.22 -3.21,-2.44 -3.38,5.35 -5.85,1.64 -1.72,-1.93 1.49,-5.21 3.99,-5.44 1.33,-2.2 -4.48,-3.79 -5.35,-1.18 -0.74,-1.34 -1.37,-2.06 -1.64,-0.43 -2.88,-0.65 -5.6,0.07 -8.2,1.37 -1.11,-1.55 -3.47,0.2 -3.68,-2.58 1.41,-3.13 -8.2,-2.22 -4.92,-5.34 -0.16,-2.3 -3.14,1.95 -4.11,-1.07 -2.18,-2.39 -5.42,-2.15 -7.98,-0.54 -2.27,1.67 -2.44,-2.55 -4.75,-1.91 z&quot;,</td>
      </tr>
      <tr>
        <td id="L91" class="blob-num js-line-number" data-line-number="91"></td>
        <td id="LC91" class="blob-code blob-code-inner js-file-line">						&quot;department-95&quot; : &quot;m 297.89,122.77 c -1.93,0.92 -1.82,3.28 -2.24,5.06 -0.18,1.39 -0.88,2.57 -1.71,3.66 -1.18,2.5 3.25,0.35 3.28,2.76 0.67,1.03 2.44,0.71 2.86,-0.15 1.62,0.83 1.89,-1.96 3.5,-0.67 1.15,0.5 1.54,1.3 0.91,2.4 0.05,1.46 1.28,0.91 1.47,-0.15 1.23,-1.85 1.56,1.36 3.2,0.93 1.81,-0.33 2.63,2.19 4.51,1.19 1,-0.65 2.03,-0.32 2.94,-0.74 0.27,0.84 -0.01,2.32 1.49,2.09 1.39,0.41 0.73,2.42 2.34,2.4 -0.26,0.82 -0.29,3.2 0.91,1.57 0.86,-1.05 2.61,-1.25 3.07,-2.57 1.17,0.19 2.33,0.34 3.34,-0.64 1.5,0.48 3.52,2.04 5,0.44 1.28,-0.6 2.07,-1.91 3.13,-2.67 -1.04,-1.28 1.15,-1.17 1.41,-2.36 0.47,-0.74 -0.21,-1.51 0.41,-2.34 -0.57,-0.87 -1.19,-1.72 -1.74,-2.51 -0.76,0.04 -0.35,1.66 -1.56,0.99 -1.63,0.01 0.09,-1.59 -1.48,-1.79 -0.96,-0.62 -1.98,-0.38 -2.67,-1.33 -1.15,-0.06 -2.21,-0.73 -3.09,-0.09 -0.52,-1.59 -2.64,-3.14 -3.11,-0.65 -0.81,0.43 -3.97,1.21 -2.53,-0.5 -0.87,-1.58 -3.19,1.28 -3.56,-1.01 -1.15,-0.35 -2.65,-0.19 -3.11,-1.46 -1.37,0.13 -2.53,1.17 -3.72,1.84 -1.32,-0.26 -2.69,0.49 -4.1,0.64 -1.33,0.67 -2.12,-0.84 -3.46,0.08 -0.96,-1.47 -2.91,-0.73 -4.2,-0.81 -0.5,-0.95 -2.12,-1.82 -0.57,-2.52 0.13,-0.53 -0.36,-1.09 -0.9,-1.1 z&quot;,</td>
      </tr>
      <tr>
        <td id="L92" class="blob-num js-line-number" data-line-number="92"></td>
        <td id="LC92" class="blob-code blob-code-inner js-file-line">						&quot;department-78&quot; : &quot;m 292.32,132.84 c -1.68,0.81 -3.67,0.76 -5.14,1.83 -1.97,-1.3 -0.99,2.02 -0.1,2.67 0.55,0.79 -1.34,2.61 0.69,2.07 1.64,-0.39 0.59,0.65 0.37,1.44 0.56,0.92 0.3,2.44 1.88,2.64 -0.09,1.26 1.67,1.89 0.48,3.08 1.64,0.66 2.24,2.6 1.48,4.19 -1.03,2.01 0.99,3.08 1.85,4.34 -0.58,1.19 -2.9,3.12 -0.68,3.75 -0.47,1.26 0.09,2.42 1.54,2.47 0.18,1.99 1.68,2.21 3.27,2.53 -0.41,1.11 -0.51,2.96 1.4,2.43 1.42,0.39 2.18,2 1.59,3.43 0.23,1.67 0.57,3.89 2.53,3.87 0.36,1.68 3.78,2.12 3.77,0.29 -0.23,-1.35 1.17,-2.66 1.54,-4.05 1.67,-0.97 -2.33,-2.06 -0.18,-2.66 1.44,0.17 3.44,0.88 3.57,-1.25 0.08,-1.12 0.7,-1.71 1.35,-2.36 -0.8,-1.15 -2.97,-2.42 -1.13,-3.55 0.61,-1.71 3.54,-1.04 3.46,-3.33 -0.81,-1.48 0.7,-1.23 1.5,-1.61 0.73,-1.13 2.67,-0.43 2.55,-1.99 1.23,0.53 1.88,-0.53 0.53,-1.07 -0.97,-1.07 -3.27,-1.54 -2.66,-3.59 -0.02,-1.82 0.75,-3.53 2.25,-4.55 0.27,-1.43 0.56,-2.46 -1.03,-2.77 0.42,-2.23 -2.99,-1.71 -2.63,-3.73 -1.61,-0.09 -3.2,1.35 -4.8,0.6 -1.14,-1.79 -3.8,-0.64 -4.79,-2.64 -0.79,0.03 -1.9,3.2 -2.31,1.04 -0.6,-0.85 0.89,-2.23 -0.76,-2.51 -1.37,-1.91 -2.01,1.2 -3.59,0.52 -1.03,1.41 -3.22,0.49 -3.58,-1.01 -1.62,-1.22 -2.88,0.79 -4.21,-0.53 z&quot;,</td>
      </tr>
      <tr>
        <td id="L93" class="blob-num js-line-number" data-line-number="93"></td>
        <td id="LC93" class="blob-code blob-code-inner js-file-line">						&quot;department-28&quot; : &quot;m 287.11,142.32 c -2.1,1.04 1.22,5.31 -2.55,5.04 -3.13,0.47 -2.25,4.05 -2.79,5.7 -2.08,1.39 -4.66,0.71 -6.89,0.79 -1.67,0.17 -4.55,-2.91 -4.14,0.39 -0.94,1.3 -4.08,-0.75 -3.86,1.85 -2.43,0.08 -5.51,1.27 -7.37,1.58 -1.08,1.71 -3.78,2.6 -2.33,4.99 0.77,3.5 4.78,4.24 6.38,7.09 -0.22,2.23 -1.98,4.13 0.4,5.86 -1.32,2.12 -2.68,4.96 -5.61,5.63 -2.31,-0.78 -5.36,3.02 -2.13,3.95 -1.7,2.27 2.62,5.08 0.17,6.87 0.96,1.32 5.87,1.56 4.27,3.23 -2.59,-0.41 -2.61,3.43 0.12,2 1.93,-0.18 2.86,0.02 4.27,-1.38 2.46,-1.17 2.35,1.12 0.44,1.89 0.94,1.94 5.72,-0.14 5.24,3.16 2.38,1.44 2.98,5.53 5.88,5 2.46,1.01 5.04,1.84 7.07,-0.1 2.12,0.96 1.21,-4.35 3.42,-1.33 2.91,1.91 0.9,-4.73 4.83,-2.76 1.99,-0.3 2.54,-3.35 5.19,-2.24 2.89,0.64 5.49,-1.07 8.22,-1.66 2.33,-1.48 0.35,-5.82 3.98,-5.14 -0.56,-1.06 0.03,-1.81 0.2,-2.18 -1.12,-2.33 1.98,-4.62 -0.13,-6.47 1.22,-2.57 0.51,-6.45 -1.46,-7.17 0.98,-3.67 -3.12,-0.53 -4.61,-2.82 -3.57,-1.35 -1.08,-6.34 -4.19,-7.79 -2.86,0.53 -0.05,-3.49 -3.13,-2.7 -2.21,-2.24 -5.44,-5.53 -2.5,-8.36 -1.41,-1.65 -2.75,-3.31 -1.37,-5.55 -0.35,-2.12 -1.91,-3.29 -1.97,-5.44 -0.63,-1.06 -1.8,-1.83 -3.04,-1.94 z&quot;,</td>
      </tr>
      <tr>
        <td id="L94" class="blob-num js-line-number" data-line-number="94"></td>
        <td id="LC94" class="blob-code blob-code-inner js-file-line">						<span class="pl-s"><span class="pl-pds">&quot;</span>department-75<span class="pl-pds">&quot;</span></span> <span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>m 326.98,144.71 c -1.27,-0.06 -2.46,0.68 -3.27,1.54 -0.47,-0.15 -0.85,0.06 -1.23,0.25 -0.65,0.03 -1.66,1.18 -0.69,1.52 0.81,0.18 0.93,1.2 1.8,1.35 1.65,0.28 3.42,1.43 5.03,0.39 1.03,-0.88 2.21,0.62 3.32,0.28 0.54,-0.43 0.6,-1.27 -0.33,-1.23 -0.68,-0.16 -1.14,-0.33 -1.46,-0.06 -0.34,-1.13 -0.06,-2.23 -0.93,-3.14 -0.12,-1.14 -1.17,-0.96 -2.05,-0.92 l -0.18,0 -0.03,3e-4 z<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L95" class="blob-num js-line-number" data-line-number="95"></td>
        <td id="LC95" class="blob-code blob-code-inner js-file-line">						<span class="pl-s"><span class="pl-pds">&quot;</span>department-93<span class="pl-pds">&quot;</span></span> <span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>m 336.5,137.58 c -0.46,0.33 -1.14,0.34 -1.42,0.97 -0.75,1.19 -2.15,1.71 -3.14,2.62 -0.82,-0.03 -1.72,-0.07 -2.53,-0.25 -0.64,-0.37 -1.29,-1.34 -2.07,-0.64 -0.6,0.3 -1.08,1.1 -1.81,0.59 -0.35,-0.19 -1.46,-0.42 -1.19,0.3 0.56,0.53 2.05,0.32 2.05,1.33 -0.06,0.69 -1.13,1.34 -0.68,2.02 1.05,0.43 2.37,-0.21 3.33,0.37 0.27,0.54 0.5,1.08 0.89,1.55 0.18,0.57 -0.13,1.72 0.86,1.53 1.07,-0.15 2.16,-1.04 3.23,-0.34 1.04,0.72 2.32,1.35 3.05,2.37 -0.11,0.74 1.41,0.94 1.04,0.05 -0.24,-0.71 -0.92,-1.55 -0.78,-2.26 0.67,-0.23 -0.04,-0.79 -0.4,-0.86 0.27,-0.43 -0.26,-0.81 -0.29,-1.14 0.41,-0.57 1.31,-0.71 1.23,-1.58 -0.09,-0.8 0.8,-1.4 0.35,-2.19 -0.23,-0.84 -1.06,-1.46 -1.25,-2.26 0.77,-0.61 0.45,-1.99 -0.49,-2.17 z<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L96" class="blob-num js-line-number" data-line-number="96"></td>
        <td id="LC96" class="blob-code blob-code-inner js-file-line">						<span class="pl-s"><span class="pl-pds">&quot;</span>department-94<span class="pl-pds">&quot;</span></span> <span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>m 332.85,147.49 c -0.56,0.21 -2.03,0.43 -2.18,1.01 0.31,0.21 1.82,-0.09 1.77,0.51 0.02,0.58 -0.23,1.64 -1.05,1.16 -1.03,-0.16 -2.09,-1.01 -3.03,-0.14 -0.7,0.5 -1.59,0.2 -2.33,0.5 -0.4,1.12 0.01,2.46 -0.66,3.53 -0.23,0.79 0.87,0.44 1.11,0.99 0.42,0.39 0.99,0.13 1.33,-0.1 0.46,0.44 -0.1,1.74 0.84,1.68 0.59,-0.25 1.17,-0.38 1.79,-0.16 1.34,-0.05 2.64,-0.54 3.94,-0.71 0.51,0.63 0.39,1.61 1.15,2.11 0.31,0.19 0.6,0.29 0.75,0.66 0.59,0.31 1.26,-0.47 0.77,-0.99 -0.01,-0.93 1.56,-1.44 0.88,-2.44 0.49,-0.32 0.24,-1.11 0.85,-1.28 0.43,-0.58 -0.47,-0.6 -0.83,-0.71 -0.34,-0.52 0.66,-1.17 0.14,-1.69 0.12,-0.8 -1.11,-0.7 -1.2,-1.46 -1.03,-1.05 -2.25,-2.13 -3.71,-2.49 -0.1,-0.01 -0.2,-0.01 -0.31,0 z<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L97" class="blob-num js-line-number" data-line-number="97"></td>
        <td id="LC97" class="blob-code blob-code-inner js-file-line">						<span class="pl-s"><span class="pl-pds">&quot;</span>department-92<span class="pl-pds">&quot;</span></span> <span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>m 324.24,141.53 c -2,0.52 -3.26,2.41 -5.06,3.32 -1.07,0.77 -1.1,2.2 -0.99,3.39 -0.4,0.4 -0.48,0.98 -0.25,1.53 0.01,0.71 0.73,0.52 1.15,0.65 0.16,0.65 0.67,1.01 1.28,1.14 0.25,0.33 0.49,0.67 0.86,0.85 0.32,0.72 0.72,1.57 1.66,1.53 0.78,-0.01 1.11,0.83 1.08,1.46 0.36,0.27 0.92,-0.2 1.18,0.31 0.73,-0.09 0.08,-1 0.1,-1.43 0.14,-0.72 0.7,-1.47 0.38,-2.22 -0.12,-0.62 0.28,-1.24 0.24,-1.78 -0.96,-0.79 -2.46,-0.33 -3.22,-1.42 -0.37,-0.47 -1.1,-0.68 -1.44,-1.08 0.22,-1.13 1.41,-1.83 2.5,-1.7 0.39,-0.7 1.58,-0.82 1.76,-1.68 -0.35,-0.89 1.37,-1.42 0.54,-2.3 -0.48,-0.39 -1.16,-0.56 -1.77,-0.58 z<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L98" class="blob-num js-line-number" data-line-number="98"></td>
        <td id="LC98" class="blob-code blob-code-inner js-file-line">						&quot;department-91&quot; : &quot;m 320.25,153.32 c -0.58,0.51 -0.49,1.56 -1.65,1.15 -1.09,0.27 -1.38,1.31 -2.58,1.12 0.11,1.05 -0.02,2.93 -1.5,3.32 -1.61,-0.22 -1.97,1.45 -2.84,2.24 0.58,0.86 2.2,1.77 1.79,2.96 -1.64,0.36 -0.55,3.52 -2.55,3.44 -0.79,0.15 -3.39,-0.81 -2.43,0.71 1.02,0.53 2.16,1.11 0.51,1.61 -0.86,0.93 -0.75,2.41 -1.65,3.25 0.14,1.24 1.76,2.59 0.46,3.92 0.71,0.75 2.78,0.14 2.06,1.92 1.07,1.28 -0.54,2.43 0.19,3.85 0.08,0.92 -1.54,1.43 -0.06,2.16 1.67,1.02 3.4,-0.35 5.09,-0.44 0.79,-1.48 2.15,0.97 2.97,-0.44 -0.22,-1.14 1.58,-0.26 1.55,-1.49 0.43,-1.63 2.01,-0.33 2.65,0.23 -0.12,0.95 0.48,1.61 1.08,0.67 0.98,0.38 1.68,0 2.09,-1.03 1.19,-0.35 1.89,2.24 3.4,1.07 0.49,-0.63 -0.03,-1.81 1.37,-1.59 1.11,-0.46 0.12,-2.39 1.77,-2.49 0.99,-0.33 0.83,-1.84 2.2,-1.42 0.62,-0.47 2.15,-0.38 0.97,-1.39 -1.69,-0.77 -1.16,-2.85 -1,-4.34 0.63,-1.35 -0.62,-2.47 -0.1,-3.88 0.63,-1.33 0.75,-2.86 1.78,-3.97 -0.3,-0.67 -1.97,-1.85 -0.32,-2.16 1.12,-0.7 -0.81,-1.91 0.75,-2.52 1.46,0.63 1.85,-1.77 0.18,-1 -1.09,-0.51 -1.76,-1.71 -2.13,-2.88 -1.08,-0.05 -2.24,1 -2.98,0.91 -0.9,-0.56 -2.37,0.31 -3.35,-0.26 0.08,-0.81 -0.25,-1.5 -1.11,-1.09 -0.9,-1.03 -1.16,0.24 -1.83,0.61 -0.49,-0.5 -1.91,-0.11 -1.24,-1.2 -0.57,-1.05 -2.44,-1.17 -3.52,-1.52 z&quot;,</td>
      </tr>
      <tr>
        <td id="L99" class="blob-num js-line-number" data-line-number="99"></td>
        <td id="LC99" class="blob-code blob-code-inner js-file-line">						<span class="pl-s"><span class="pl-pds">&quot;</span>department-45<span class="pl-pds">&quot;</span></span> <span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>m 320.43,181.91 c -1.93,3.75 -6.85,2.12 -9.9,4.16 -1.95,2.44 0.54,6.83 -3.34,8.04 -0.15,3.54 -2.85,4.96 -6.06,5.24 -2.92,1.1 -6.42,-0.72 -8.49,2.39 -1.57,0.69 -5.05,0.19 -3.17,3.06 1.8,0.69 1.81,1.21 0.63,2.66 -1.69,2.43 4.05,3.22 1.25,6.02 -2.34,2.28 -0.38,4.59 0.09,7.04 1.76,1.74 4.95,-1.17 6.29,2.07 1.03,2.45 2.79,7.52 5.89,3.78 1.72,-3.2 5.45,1.69 8.15,-0.49 3.31,-0.11 8.68,-1.55 10.42,2.55 3,0.8 5.42,3.73 8.74,2.17 2.13,1.16 4.32,2.3 6.96,2.83 1.97,1.01 3.09,6.61 5.84,4.26 -0,-3.62 2.76,-1.68 4.41,-0.43 2.59,0.81 2.19,-2.3 2.2,-3.37 1.94,-0.4 6.46,-0.48 3.87,-3.36 0.34,-3.56 -2.17,-6.48 -4.41,-8.39 0.34,-3.92 6.29,-1.58 7.84,-4.63 1.26,-2.84 -2.35,-5.65 1.12,-7.77 4,-1.7 4.51,-6.41 1.51,-9.33 -2.16,-2.35 -2.73,-6.91 -6.87,-6.87 -1.86,0.13 -5.92,3.75 -6.03,-0.07 -2.63,1.14 -5.36,4.25 -8.22,1.8 -2.17,-0.24 -6.58,1.49 -7.34,0.08 2.67,-1.6 4.53,-6.27 0.45,-7.38 -2.86,-1.04 -1.71,-5.28 -5.43,-4.57 -1.53,-1.38 -4.89,2.52 -5.34,-1.02 -0.33,-0.2 -0.71,-0.32 -1.06,-0.48 z<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L100" class="blob-num js-line-number" data-line-number="100"></td>
        <td id="LC100" class="blob-code blob-code-inner js-file-line">						&quot;department-41&quot; : &quot;m 266.29,195.63 c -2.06,2.95 -7.43,0.3 -8.5,3.42 -1.9,1 -2.23,2.67 -0.22,3.62 0.19,3.26 0.26,5.82 -1.16,8.6 -4.07,-1.69 0.07,5.24 -3.5,5.91 -0.99,3.4 -6.81,3.06 -5.94,7 2.53,-0.22 6.07,1.21 9.36,0.87 2.33,-0.38 3.21,0.87 2.33,3.13 -0.6,3 2.08,2.14 3.12,0.52 2.68,-0.46 3,3.47 5.15,1.95 3.31,1.92 -0.52,5.3 2.24,7.5 2.87,2.54 0.27,5.57 1.51,8.9 -2.12,3.16 1.39,5.4 4.47,4.52 3.84,-0.06 2.69,7.22 7.32,5.56 1.87,-1.68 3.74,-3.34 6.46,-2 0.88,-3.66 5.55,-2.27 8.48,-2.51 2.88,0.7 4.8,4.16 8.08,3.56 2.17,-0.93 0.23,-5.2 4,-4.24 2.53,1.03 9.23,0.49 7.7,-3.24 -2.46,-1.98 -1.75,-6.33 1.55,-6.48 1.62,0.43 3.89,1.9 3.49,-1.2 0.4,-2.84 -2.55,-3.04 -1.96,-5.71 -0.66,-1.86 -5.5,-1.35 -2.85,-4.03 2.3,-0.71 6.5,-3.18 2.67,-5.2 -3.4,-0.6 -6.94,-0.37 -10.34,0.3 -2.3,0.89 -5.75,-3.14 -6.32,0.82 -3.73,2.59 -5.33,-2.8 -6.15,-5.3 -2.21,-2.59 -5.58,2.04 -6.3,-1.81 -0.8,-1.62 0.46,-2.55 -1.18,-3.79 1.15,-2.66 3.49,-5.56 -0.29,-7.32 0.2,-1.64 2.39,-4.45 -1.04,-3.94 -1.34,-0.61 -4.15,-1.65 -3.51,1.01 -2.97,0.88 -5.87,1.72 -8.76,0.26 -3.05,-0.48 -3.65,-3.81 -5.67,-5.58 -0.41,-3.18 -5.31,-0.86 -5.28,-3.08 0.5,-0.52 3.23,-1.6 1.02,-2.02 z&quot;,</td>
      </tr>
      <tr>
        <td id="L101" class="blob-num js-line-number" data-line-number="101"></td>
        <td id="LC101" class="blob-code blob-code-inner js-file-line">						&quot;department-36&quot; : &quot;m 292.75,252.32 c -0.22,1.96 -4.71,0.36 -3.09,3.11 -2.43,-0.72 -5.02,-1.03 -6.59,1.34 -2.69,0.52 -2.88,2.56 -1.18,4.37 -0.27,2.79 -3.21,4.19 -4.35,6.82 -1.44,3.03 -4.42,-1.33 -6.53,0.46 -3.18,0.46 -2.88,3.92 -3.68,6.03 -1.05,3.06 -0.95,6.5 -2.13,9.41 1.56,2.64 -2,4.95 -4.07,2.91 -3.4,-0.16 1.5,2.15 0.47,4.03 -1.36,3.26 -0.89,7.48 3.29,8.02 1.63,1.02 1.82,2.51 4.05,2.13 3.15,0.49 2.87,3.8 3.42,5.86 3.01,0.61 1.99,2.49 1.57,4.47 1.47,-0.43 1.97,1.71 3.8,0.38 1.85,0.34 2.68,-2.93 4.56,-0.65 1.37,1.89 2.88,2.94 4.14,0.35 1.12,-1.38 3.37,-4.31 4.14,-1.21 1.33,-0.81 3.52,-2.34 3.35,0.47 1.47,0.6 2.78,-3.28 3.75,-0.32 2.88,0.93 1.17,-5.91 4.57,-3.2 2.52,2.22 5.64,-0.66 8.59,0.82 2.5,1.04 7.68,2.32 7.46,-1.55 4.04,-2.02 -1.08,-5.26 0.41,-8.47 1.23,-2.22 0.34,-4.16 -1.32,-5.77 1.29,-2.28 -5.15,-3.19 -2.63,-5.41 3.7,-2.03 -4.12,-5.08 0.13,-6.45 0.15,-1.85 5.09,-3.55 1.3,-4.36 -3.14,-0.2 -1.71,-2.81 -0.75,-4.45 0.55,-3.16 -4.43,-3.11 -2.28,-6.14 0.71,-2.59 -1.84,-0.34 -2.34,-2.38 -2.14,-1.4 -4.51,2.29 -6.97,0.12 -1.89,-0.3 -3.87,-1.35 -1.68,-3.08 2.9,-1.88 1.03,-5.37 -2,-5.37 -1.57,-1.11 -2.26,-2.41 -4.45,-1.38 -1.18,-0.07 -1.7,-1.07 -2.98,-0.88 z&quot;,</td>
      </tr>
      <tr>
        <td id="L102" class="blob-num js-line-number" data-line-number="102"></td>
        <td id="LC102" class="blob-code blob-code-inner js-file-line">						&quot;department-18&quot; : &quot;m 323.87,229.07 c -2.35,0.13 -9.34,2.52 -5.77,4.83 3.63,-0.55 1.32,4.29 3.95,4.19 1.09,2.3 -0.24,7.95 -2.97,4.02 -2.53,0.84 -4.38,3.27 -2.23,5.76 1.94,2.35 0.54,4.87 -2.44,4.09 -2,0.97 -4.54,0.79 -6.09,-0.04 -3.26,0.8 0.48,4.8 -3.11,4.5 -2.3,-0.84 -0.78,2.92 -3.07,3.74 -2.13,3.21 4.52,3.78 6.54,2.69 2.19,-2.06 2.95,2.09 4.74,0.99 0.13,1.95 -1.78,4.73 1.47,5.08 2.39,1.98 -3.09,7.46 2.34,7.01 1.98,2.06 -4.63,4.48 -3.1,6.87 3.2,0.9 1.23,3.63 0.29,5.24 0.67,1.68 4.73,1.92 3.03,4.22 4.54,2.34 -0.65,6.57 2.07,9.85 1.42,2.13 -0.12,3.45 -1.35,4.8 0.97,3.01 6.38,2.02 6.61,-1.43 1.68,-1.43 2.79,-4.1 5.74,-3.71 2.61,-0.19 8.61,0.85 7.95,-3.28 -1.28,-1.97 -0.29,-4.02 -0.99,-5.76 1.11,-0.26 2.76,0.38 2.1,-1.66 2.77,0.03 3.8,-5.99 6.55,-2.38 4.02,-0.1 5.48,-4.84 9.43,-5.17 5.09,1.19 4.04,-5.2 3.91,-8.3 0.71,-2.84 1.27,-6.86 -1.24,-8.77 -0.49,-3.87 -0.61,-7.69 -2.18,-11.39 0.6,-4.25 -6.27,-4.24 -4.71,-8.26 2.14,-3.02 2.74,-7.4 -0.15,-10.16 -1.82,-0.35 -3.52,2.23 -5.06,-0.44 -2.66,-2.76 -1.08,3.94 -4.37,2.1 -2.06,-1.93 -3.82,-6.36 -7.51,-5.63 -1.58,-0.2 -3.8,-3.83 -5.86,-1.15 -1.78,-0.24 -2.82,-2.01 -4.51,-2.45 z&quot;,</td>
      </tr>
      <tr>
        <td id="L103" class="blob-num js-line-number" data-line-number="103"></td>
        <td id="LC103" class="blob-code blob-code-inner js-file-line">						&quot;department-23&quot; : &quot;m 301.06,306.59 c -2.18,-0.09 -0.48,5.24 -3.46,3.84 -1.17,-2.86 -2.05,0.79 -3.59,0.42 -1.13,-0.79 -0,-3.31 -1.73,-1.25 -1.24,0.55 -2.36,1.38 -2.36,-0.7 -1.54,-0.88 -2.18,2.59 -3.79,3.02 -0.98,0.84 -2.88,2.44 -0.45,2.76 0.29,1.69 -1.79,2.6 -0.56,4.04 -2.11,0.16 0.28,2.07 -1.84,2.35 -1.71,2.37 1.37,3.88 3.12,3.98 -0.87,1.98 3.03,2.32 1.47,4.18 0.81,1.46 2.68,2.16 2.08,4.13 0.59,1.41 -1.07,3.49 1.38,3.72 1.8,2.32 -4.92,2.97 -1.35,4.46 1.26,1.18 3.64,-2.06 4.21,0.35 0.31,1.19 0.8,2.47 -1.06,2.08 -1.31,1.78 2.07,3.75 3.94,3.02 1.79,0.62 3.88,-3.62 3.75,-0.15 0.21,1.27 2.24,2.17 2.82,1.56 1.47,1.11 3.83,3.39 1.98,4.77 0.21,1.09 -0.08,4.28 1.82,2.42 1.13,0.08 1.99,-1.04 3.2,-0.95 0.33,-2.76 3.75,-2.96 4.66,-0.46 1.35,-0.17 2.6,0.94 3.34,-0.03 1.49,1.32 3.49,2.43 4.82,3.44 0.2,2.09 4,0.09 3.38,-1.73 2.36,-0.58 5.37,1.33 6.38,-2.1 -1.37,-1.09 -2.62,-1.96 -3.06,-3.78 -1.55,-1.24 -1.59,-2.93 0.65,-2.9 0.54,-1.38 1.04,-2.45 2.73,-1.85 0.62,-1.79 3.09,-2.23 2.56,-4.51 0.36,-1.75 3.84,-1.53 2.12,-3.52 1.2,-2.89 -2.25,-4.14 -2.04,-6.95 -0.08,-2.21 1.4,-4.81 -1.02,-6.11 0.02,-2.5 -1.86,-3.91 -2.39,-6.08 -1.13,-1.7 -3.1,0.63 -2.89,-2.06 -0.52,-1.65 -1.48,-0.92 -2.17,-0.16 -2.13,-0.72 -3.54,-2.45 -1.59,-4.12 -3.08,0.61 -1.54,-4.21 -4.75,-3.19 -2.85,-0.75 -5.52,1.57 -8.05,0.18 -2.39,-0.94 -4.83,-0.98 -7.12,-1.05 -1.87,0.89 -3.74,0.71 -4.87,-1.08 l -0.28,-0.01 10e-6,10e-5 z&quot;,</td>
      </tr>
      <tr>
        <td id="L104" class="blob-num js-line-number" data-line-number="104"></td>
        <td id="LC104" class="blob-code blob-code-inner js-file-line">						&quot;department-87&quot; : &quot;m 281.04,310.22 c -0.51,0.05 -1.17,0.12 -1.14,0.78 -0.25,1 -1.41,1.2 -2.23,0.78 -0.91,-0.55 -1.46,0.97 -2.37,0.47 -0.41,-0.24 -0.15,-1.36 -0.88,-1.06 -0.15,0.36 -0.49,0.69 -0.87,0.31 -0.42,-0.56 -1.48,-0.46 -1.39,0.36 -0.29,0.51 -0.98,0.78 -0.95,1.46 -0.55,0.47 -1.05,-0.38 -1.56,-0.48 -1.22,-0.29 -2.83,0.17 -3.07,1.56 0.1,1.34 -1.16,2.36 -1.14,3.65 -1.12,-0.21 -2.43,-0.58 -3.48,-0.02 -0.57,-0.29 -1.43,-0.46 -1.55,0.41 -0.29,0.71 -1.42,0.57 -1.53,1.41 -0.45,0.32 -0.59,0.81 -0.41,1.28 -0.57,0.79 -2.14,-0.04 -2.35,1.21 -0.11,1.15 1.52,1.66 1.49,2.82 0.45,0.61 -0.22,1.55 0.51,2.07 0.3,0.78 -1.04,0.68 -1.22,1.21 0.1,0.73 1.16,1.32 0.57,2.1 -0.2,0.88 -0.43,1.82 -0.37,2.7 0.55,0.71 1.53,1.06 1.85,1.96 0.6,0.29 0.77,-1.11 1.42,-0.47 0.52,0.57 1.56,1 1.37,1.9 0.17,0.33 0.61,0.45 0.5,0.91 0.25,0.56 0.69,1.22 0.15,1.8 -0.4,0.33 -0.69,0.93 -0.79,1.33 -1.08,0.03 -1.62,1.44 -2.79,1.15 -0.74,0.09 -1.45,-0.83 -2.12,-0.41 -0.07,0.49 0.25,0.98 0.12,1.53 -0.13,0.54 0.63,1.01 0.41,1.49 -0.44,0.28 -0.27,0.69 -0.21,1.04 -0.23,1.22 -1.06,2.19 -1.62,3.25 -0.26,0.54 0.17,1.51 -0.39,1.85 -0.92,-0.16 -1.85,-1.49 -2.8,-0.78 -0.33,0.63 -0.36,1.44 0.03,2.02 -0.07,0.89 -1.28,0.52 -1.72,1.1 -0.39,0.39 -0.56,0.91 -1.06,1.2 -0.36,0.39 -0.09,1.12 -0.8,1.16 -0.53,0.7 0.73,1.29 1.05,1.78 1.12,0.48 2.72,-0.73 3.83,0.16 0.41,0.49 0.74,1.16 1.39,1.34 0.08,1.16 -0.5,2.25 -0.79,3.32 0.28,0.85 0.98,1.77 1.99,1.46 0.49,0.16 0.41,1.27 1.18,1.08 1.27,-0.42 1.02,-2.31 2.06,-2.9 0.55,0.27 0.58,1.69 1.39,1.27 0.5,-0.37 1.3,-0.2 1.85,-0.57 0.8,-0.12 1.59,0.64 2.37,0.08 1.2,-0.25 2.21,0.92 2.02,2.08 -0.09,0.92 0.66,1.5 1.35,1.88 0.41,0.32 0.61,1.42 1.32,0.86 0.49,-0.58 1.3,-0.68 1.86,-0.14 0.33,0.35 1.23,0.52 1.23,1.08 -0.69,0.87 -1.91,1.66 -1.92,2.87 0.34,0.84 1.26,0.35 1.87,0.21 0.56,0.26 0.58,0.97 0.93,1.33 0.84,-0.26 2.33,-0.56 2.49,0.7 0.19,0.63 0.87,0.23 0.77,-0.27 0.67,-0.31 0.04,-1.73 0.98,-1.81 0.57,0.07 0.21,-0.87 0.71,-0.67 0.95,0.21 1.74,1.1 2.68,1.15 0.76,-1.2 1.96,-2.1 2.52,-3.45 0.35,-0.6 1.02,-0.45 1.52,-0.23 0.86,-0.13 0.35,-1.3 0.75,-1.74 0.56,-0.03 0.98,-0.4 1.21,-0.85 0.63,0.05 0.58,1.16 1.29,0.85 0.37,-0.17 0.08,-0.99 0.68,-0.63 0.79,0.46 1.82,0.91 2.6,0.18 0.48,-0.4 0.34,-1.43 1.2,-1.3 1.25,0.1 2.05,-1.03 2.55,-1.98 0.73,-0.73 1.34,-1.82 2.34,-2.13 0.74,0.12 1.5,-0.28 1.86,-0.87 0.93,-0.17 1.13,-1.16 1.48,-1.85 0.37,-0.07 0.64,0.49 1.11,0.2 0.61,0.2 0.96,1.44 1.71,0.76 0.42,-0.5 1.1,0.52 1.33,-0.26 -0.03,-0.66 0.6,-0.53 1.03,-0.64 0.45,-0.2 0.16,-0.77 -0.12,-0.88 -0.02,-0.51 -0.84,-0.68 -0.83,-1.1 0.48,-0.35 0.14,-0.82 -0.21,-1.07 0.24,-0.6 0.41,-1.25 0.01,-1.83 -0.05,-0.55 1.2,0 0.86,-0.75 -0.45,-0.79 -0.3,-1.85 -1.25,-2.36 -0.47,-0.29 -0.97,-0.56 -1.37,-0.86 -0.42,0.28 -0.85,0.21 -1.19,-0.2 -0.57,-0.6 -1.85,-0.61 -1.72,-1.7 0.17,-0.43 0.1,-1.78 -0.62,-1.22 -0.17,0.44 -0.43,0.74 -0.89,0.86 -0.71,0.92 -2.04,0.24 -2.93,0.86 -0.49,0.28 -0.9,0.12 -1.15,-0.31 -0.68,-0.45 -1.84,-0.44 -2.21,-1.23 0.21,-0.61 -0.04,-1.24 -0.49,-1.61 0.25,-0.59 1.1,-0.28 1.36,-0.78 0.47,0.27 0.94,-0.21 0.51,-0.63 -0.6,-0.41 0.17,-1.39 -0.62,-1.58 -0.8,-0.29 -1.69,0.05 -2.03,0.8 -0.73,0.21 -1.51,-0.02 -1.97,-0.63 -0.45,-0.19 -1.31,-0.18 -0.96,-0.92 0.42,-1.4 2.91,-1.11 2.81,-2.77 -0.02,-0.79 -0.76,-1.12 -1.46,-1.02 -0.74,-0.49 -0.23,-1.62 0.01,-2.28 0.07,-0.84 -0.67,-1.62 -0.2,-2.45 -0.01,-0.95 -1.08,-1.21 -1.63,-1.75 -0.29,-0.44 -0.89,-1.12 -0.22,-1.54 0.59,-0.47 -0.22,-1.14 -0.7,-1.29 -0.29,-0.51 -0.96,-0.67 -1.32,-1.01 0.65,-0.4 0.49,-1.69 -0.42,-1.53 -0.93,0.06 -2.05,-0.18 -2.28,-1.2 -0.52,-0.39 -1.08,-1.35 -0.53,-1.94 0.31,-0.58 0.65,-1.21 1.38,-1.2 0.66,-0.47 -0.77,-0.84 -0.18,-1.34 0.43,-0.32 0.7,-0.79 0.48,-1.28 -0.02,-0.63 0.42,-1.1 0.86,-1.45 0.24,-0.83 0.18,-2.06 -0.9,-2.22 -0.7,-0.32 -0.2,-1.35 -0.83,-1.79 -0.85,-0.67 -1.34,-1.98 -2.45,-2.23 l -0.03,0.01 z&quot;,</td>
      </tr>
      <tr>
        <td id="L105" class="blob-num js-line-number" data-line-number="105"></td>
        <td id="LC105" class="blob-code blob-code-inner js-file-line">						&quot;department-19&quot; : &quot;m 313.35,352.38 c -1.86,0.13 -2.22,1.42 -2.96,2.7 -1.7,-0.45 -2.02,1.25 -3.41,1.04 0.1,2.65 -3.23,3.39 -4.97,1.84 -1.53,1.04 -2.82,2.64 -4.95,2.95 -1.42,1.63 -2.47,3.68 -4.63,4.05 -0.78,2.4 -3.28,0.32 -4.72,1.32 -0.15,-2.02 -2.14,1.24 -2.3,2.01 -1.89,-1.15 -2.49,2.34 -3.89,3.21 -1.28,0.53 -3.65,-2.27 -4.12,0.75 -1.21,1.38 2.97,2.44 0.01,3.18 -0.68,2.09 4.29,0.8 2.12,3.47 -1.5,0.61 -1.7,2.64 -3.24,3.07 -0.37,1.74 -0.74,3.8 1.62,4.02 0.64,1.56 -3.73,2.47 -1.44,3.5 2.52,-0.79 2.31,2.08 0.75,2.84 2.1,1.86 4.91,0.57 6.95,2.2 -1.97,1.83 -0.08,4.96 1.55,6.77 1.57,0.57 3.76,-3.02 4.88,-0.71 2.49,-1.36 5.15,0.9 6.6,2.82 0.89,1.66 2.62,2.3 3.51,3.98 0.84,-0.76 2.22,0.94 2.83,-0.95 1.95,-0.25 4.19,-4.21 5.12,-0.84 2.18,-2.19 5.35,-1.42 8,-1.89 1.92,-1.72 -3.18,-4.39 -0.13,-5.96 1.44,-0.92 3.38,-0.83 2.82,-3.25 -0.27,-1.27 3.56,-2.56 1.06,-3.66 -2.12,-2.49 1.31,-4.07 2.09,-6.03 1.52,-1.54 3.08,-3.21 4.69,-4.48 0.47,-1.62 0.7,-3.32 -0.12,-4.93 2.48,-0.49 5.95,4.22 7.88,1.25 -2.68,-1.36 -0.86,-4.01 -0.65,-6.27 0.65,-2.61 -0.12,-4.5 -1.81,-6.42 -0.37,-1.09 0.41,-2.79 1.03,-3.68 2.2,0.41 0.72,-2.34 1.39,-3.43 -0.08,-1.62 -1.77,-3.7 -2.72,-1.42 -1.49,2.45 -5.53,-1.84 -5.69,2.21 -1.2,1.04 -3.48,1.86 -3.57,-0.45 -2.4,-0.22 -2.77,-1.54 -4.33,-2.87 -0.57,1 -2.92,0.03 -3.77,-0.11 0.11,-0.94 -1.07,-1.2 -1.5,-1.83 z&quot;,</td>
      </tr>
      <tr>
        <td id="L106" class="blob-num js-line-number" data-line-number="106"></td>
        <td id="LC106" class="blob-code blob-code-inner js-file-line">						&quot;department-15&quot; : &quot;m 334.72,370.94 c -1.28,1.82 -1.55,4.58 0.43,5.9 -1.81,2.51 -4.37,0.04 -6.57,-1.17 -2.6,-1.06 0.22,2.76 -1.15,4.1 -0.02,1.86 -2.79,1.83 -3.22,3.86 -1.83,1.13 -3.51,3.59 -4.24,5.64 0.35,1.77 2.71,2.41 0.56,3.82 -1.95,0.87 -0.07,4.99 -2.89,4.16 -3.55,0.88 -0.82,4.03 -0.22,5.71 -0.43,1.88 -4.6,-0.03 -2.81,2.9 -0.04,1.62 2.21,2.57 0.46,3.91 0.13,3.08 4.46,4.57 3.6,7.69 -0.92,1.52 -0.85,3.76 -1.46,5.32 3.14,-0.54 0.43,4.14 3.05,4.94 0.99,0 -0.12,-3.03 2.23,-2.19 1.58,-0.83 4.01,-1.56 4.43,0.74 2.75,-0.34 6.48,0.85 7.12,-2.96 2.85,-1.73 1.71,-5.71 4.3,-7.33 -0.14,-2.33 1,-4.52 2.76,-5.39 0.66,-1.77 2.62,-2.11 3.53,-3.79 2.71,0.19 1.23,4.39 2.14,5.14 1.36,-1.39 4.37,-1.42 3.78,1.12 0.34,1.62 0.97,4.51 2.8,3.48 0.84,2.32 -0.52,5.11 1.01,7.65 0.5,1.69 1.9,2.45 2.17,0.12 0.35,-2.14 2.27,-2.85 1.68,-4.93 0.92,-1.91 0.56,-5.47 2.78,-5.83 -0.12,-1.77 1.65,-6.61 3.22,-3.03 1.26,2.36 3.56,-0.59 3.31,-2.05 0.59,-1.14 0.92,-2.65 1.95,-1.09 1.6,-1 4.29,-1.63 3.3,-3.81 1.88,-0.88 -1.23,-1.49 -1.31,-2.37 -2.47,-0.36 0.7,-4.16 -1.68,-4.86 0.04,-1.43 3.56,1.01 2.84,-0.76 -3.52,-0.25 -3.97,-3.78 -3.79,-6.72 -2.86,-0.25 -0.48,-5.68 -3.84,-4.2 -1,0.06 -0.92,-1.73 -2.53,-0.75 -1.83,0.05 -2.03,-0.79 -0.71,-1.66 -1.98,-0.82 1.54,-2.18 -0.51,-2.67 -1.63,1.16 -2.03,4.92 -4.8,3.76 -3.45,-0.77 -2.59,-5.89 -6.01,-5.8 -1.98,-1.95 -3.93,0.16 -6.22,-0.38 -1.82,0.76 -1.98,-2.81 -2.23,-3.3 -2,0.21 -2.37,-1.95 -4.2,-1.04 -0.86,-1.4 -2.85,0.57 -2.19,-1.65 -0.21,-0.26 -0.61,-0.13 -0.87,-0.22 z&quot;,</td>
      </tr>
      <tr>
        <td id="L107" class="blob-num js-line-number" data-line-number="107"></td>
        <td id="LC107" class="blob-code blob-code-inner js-file-line">						&quot;department-30&quot; : &quot;m 402.45,438.56 c -1.2,2.08 -2.01,3.99 -4.41,4.18 -0.91,2.13 4,4.03 1.37,6.32 -0.45,1.86 3.55,2.45 0.94,3.7 -0.76,1.99 0.11,3.59 0.97,5.15 -2.84,-2.29 -3.24,4.22 -6.65,2.09 -2.84,1.31 -5.14,-3.82 -7.86,-2.71 -1.9,-0.09 0.68,4.12 -2.36,3.87 -3.59,-0.21 -7.54,0.01 -9.81,-3.3 -3.88,-0.94 -1.76,4.82 -5.2,4.63 -0.2,1.99 1.7,1.26 2.49,1.37 0.64,2.2 6.26,1.35 5.12,4.79 -0.92,1.9 -5.78,3.67 -3.13,5.83 2.48,-0.75 3.13,1.64 2.84,3.17 1.93,-1.62 4.32,-2.9 4.52,0.69 1.23,0.34 3.7,1.07 1.85,-0.84 1.05,-1.8 2.07,-3.7 4.36,-3.11 -0.01,-3.76 5,-4.67 6.38,-1.85 2.32,1.17 -2.54,5.3 1.82,4.76 1.89,-0.76 3.45,-1.45 3.7,1.02 2.53,0.02 1.7,2.08 1.81,3.51 2.89,-1.55 4.4,2.61 6.33,3.87 2.8,0.69 3.15,4.82 3.78,7.11 -0.67,2.22 -2.4,3.52 -4.18,3.93 1.03,2.15 2.04,4.41 2.86,6.75 1.85,2.05 3.54,0.51 3.74,-1.66 2.08,-0.46 3.52,-1.72 3.36,-3.55 0.97,2.31 4.15,-0.86 5.01,-1.94 1.98,0.27 2.78,-2.49 0.23,-2.01 -0.41,-2.17 1.81,-4.53 3.24,-5.76 1.92,-1.29 6.52,3.05 5.01,-1.07 0.59,-2.7 2.29,-5.32 1.74,-7.95 1.25,-0.84 -1.73,-1.91 0.74,-2.53 2.32,-1.47 3.71,-3.79 6.04,-5.21 0.4,-1.57 0.8,-2.1 2,-2.68 -1.38,-1.85 -2.67,-6.36 -5.46,-5.62 -1.54,-2.69 0.63,-6.1 -0.98,-8.69 -2.44,0.11 -1.5,-4.81 -4.22,-4.74 -2.14,-0.69 -5.48,-5.75 -7.17,-2.57 0.92,4.08 -4.49,2.27 -2.46,-0.85 -1.91,-1.19 -5.21,1.01 -5.19,3.34 -1.4,3.16 -4.03,-1.21 -5.4,-1.88 -1.7,0.52 -1.47,-2.53 -3.73,-1.05 -1.71,1.8 -2.68,-0.11 -1.46,-1.57 -0.15,-1.56 -0.74,-2.62 0.35,-3.62 -1.57,-1 -0.67,-2.78 -2.91,-3.32 z&quot;,</td>
      </tr>
      <tr>
        <td id="L108" class="blob-num js-line-number" data-line-number="108"></td>
        <td id="LC108" class="blob-code blob-code-inner js-file-line">						&quot;department-48&quot; : &quot;m 373.48,404.94 c -1.47,0.89 -3.46,3.53 -5.12,1.98 -0.01,1.49 -1.57,1.93 -1.04,3.5 -1.43,1.81 -3.11,1.2 -3.88,-0.85 -2.88,-0.45 -1.07,4.27 -3.39,4.9 -1.4,1.6 -1.16,4.02 -1.76,5.9 0.45,1.49 -1.64,2.13 -1.6,3.92 -1.61,2.48 1.66,4.55 3.09,6.26 2.11,1.84 -1.38,5.67 2.08,6.72 1.92,1.77 1.3,4.27 0.7,6.32 -0.81,2.08 2.13,3.68 0.68,5.63 -1.2,1 -0.69,2.92 0.49,1.55 -0.34,2.49 4.49,1.53 3.22,4.04 -0.61,3.08 3.16,-0.47 4.71,0.57 2.33,-0.24 2.39,2.9 4.55,3.55 1.02,2.18 4.4,1.65 6.21,1.9 1.73,0.64 4.49,-0.1 3.28,-2.39 -0.17,-1.71 2.49,-2.35 3.14,-0.7 2.15,-0.14 3.4,3.16 5.36,2.3 1.4,-0.48 2.81,0.78 3.7,-1.01 1.48,-0.27 0.79,-2.83 2.56,-1.71 0.48,-1.13 -1.37,-1.78 -0.45,-3.23 -0.32,-1.45 2.55,-2.77 -0.12,-3.02 -0.49,-1.4 -1.27,-2.69 0.33,-3.79 -0.9,-1.25 -2.65,-3.18 -2.62,-4.42 1.46,-1.07 3.7,-0.89 3.95,-3.34 1.21,-1.8 0.03,-4.2 -0.54,-6.13 -0.14,-2.55 -3.1,-2.32 -3.01,-4.96 -0.51,-1.42 -0.74,-3.3 -1.23,-4.8 0.21,-0.99 -1.02,-2.2 -0.2,-3.43 -0.96,-0.75 -2.32,-0.83 -1.55,-2.36 -1.84,1.16 -1.86,-1.71 -3.45,-2.23 0.02,-3.18 -3.5,-0.79 -4.63,-2.01 2.18,-2.04 -3.67,-4.45 -2.82,-1.23 0.29,3.23 -3.33,0.7 -4.65,2.81 -2.12,0.38 -2.38,-3.83 -3.37,-5.42 -0.69,-1.57 0.03,-3.98 -2.15,-4.28 l -0.25,-0.51 -0.23,-0.01 -2.2e-4,-1e-4 z&quot;,</td>
      </tr>
      <tr>
        <td id="L109" class="blob-num js-line-number" data-line-number="109"></td>
        <td id="LC109" class="blob-code blob-code-inner js-file-line">						&quot;department-63&quot; : &quot;m 350.25,319.87 c -2.41,0.1 -1.39,6.08 -4.36,2.69 -2.2,-1.55 -1.13,2.91 -3.36,2.6 -0.99,2.15 -2.4,5.06 -4.99,2.48 -3.53,1.71 0.74,5.9 1.02,8.31 0.33,2.26 -0.13,3.09 -1.85,4.34 -0.59,3.07 -2.87,5.1 -5.46,5.93 -0.78,1.08 -3.3,2.29 -0.7,4.14 1.84,2.94 6.68,6.33 3.76,10.01 -3.59,1.58 -0.37,5.2 0.63,7.47 -1.63,3.1 2.57,5.33 4.8,4.69 1.04,1.88 3.32,0.49 2.64,2.92 1.95,3.55 6.09,-0.43 8.67,2.01 3.48,0.74 2.44,6.76 6.82,5.67 2.39,-1.04 2.55,-4.68 5.97,-4.03 2.84,-0.11 5.33,-4.21 7.45,-3.45 1.17,-0.15 2.17,-1.54 3.06,0.31 2.88,1.39 5.17,-2.92 7.03,0.16 3.24,-0.64 2.05,6.51 5.21,2.85 1.13,-3.37 5.41,3.07 6.68,-1.35 0.83,-2.19 5.07,4.34 4.28,-0.59 0.72,-2.92 5.73,-4.1 3.45,-7.91 -0.98,-3.57 -2.63,-6.42 -6.17,-8.13 -2.69,-2.1 -1.82,-6.45 -4.74,-8.34 -0.45,-1.7 -2.19,-2.8 -0.35,-4.4 -0.69,-2.91 2.62,-4.84 -0.62,-6.96 -2.59,-1.57 -3.98,-4.12 -5.91,-6.12 -2.16,0.37 -6.24,1.62 -5.45,-1.98 -1.98,-2.68 -5.33,1.55 -7.73,-0.76 -2.66,-0.65 -5.11,0.01 -7.56,-0.72 -1.51,-1.52 -2.18,-2.56 -4.49,-2.07 -3.09,-0.49 -3.15,-3.91 -5.15,-5.29 0.27,-2.13 2.01,-5.11 -1.71,-4.35 l -0.47,-0.05 -0.43,-0.12 0,0 z&quot;,</td>
      </tr>
      <tr>
        <td id="L110" class="blob-num js-line-number" data-line-number="110"></td>
        <td id="LC110" class="blob-code blob-code-inner js-file-line">						&quot;department-42&quot; : &quot;m 397.37,318.49 c -1.6,0.83 -3.4,1.29 -4.64,2.21 -1.3,0.59 1.02,2.59 0.48,3.98 0.61,1.85 -0.41,4.23 1.11,6.23 -1.61,2.5 2.37,7.25 -2.15,7.3 -1.09,-0.11 -1.49,1.09 -2.88,0.34 -2.32,2.56 2.22,3.36 1.74,5.81 -1.98,1.61 -0.24,4.65 -2.31,6.15 1.69,0.49 1.3,2.13 2.33,2.91 2.23,1.34 1.14,4.92 3.25,6.83 1.78,1.97 5.01,2.91 6.17,5.68 -1.24,2.45 2.85,3.93 0.67,5.95 0.89,3.06 -5.47,3.2 -3.23,7.04 0.42,3.41 2.25,-3.4 4.17,-0.43 0.87,1.44 1.19,2.02 2.38,0.77 1.23,1.18 1.39,0.75 2.25,-0.33 1.05,-0.89 3.38,0.13 2.65,-1.8 2.25,-0.56 4.93,-0.17 6.2,1.72 1.74,-1.96 5.45,1.48 2.47,2.65 0.55,1.23 1.98,1.3 0.84,2.91 0.86,2.54 3.62,-1.67 4.48,1.3 1.58,2.36 4.9,0.89 6.79,-0.08 -1.25,-1.91 1.2,-3.4 2.26,-5.02 1.49,-1.32 5.89,-1.48 4.47,-4.32 -0.52,-1.74 0.97,-3.48 -0.58,-5.25 -0.48,-1.69 -3.61,1.7 -3.93,-1.3 0.42,-2.1 -0.24,-3.68 -1.93,-4.86 -1.43,0.06 -2.67,-1.02 -4.29,-0.14 -2.32,-0.62 -2.91,-2.86 -5.1,-4.24 -1.42,-1.8 -2.51,-3.8 -0.78,-6.03 1.82,-2.31 -3.43,-0.74 -1.14,-3.43 0.94,-1.31 1.04,-3.98 1.15,-5.42 -2.5,-0.01 -3.12,-2.67 -2.32,-4.33 -1.63,-1.26 -2.43,-3.07 -4.07,-4.21 0.9,-0.54 3.97,0.36 2.35,-1.72 -1.31,0.09 -3.3,-2.79 -0.85,-2.47 1.97,-1.74 0.65,-5.53 4.11,-6 0.97,-0.45 2.45,1.37 2.78,-0.77 -0.25,-1.57 -2.38,-2.12 -0.65,-3.5 -1.51,-1.51 -2.16,1.22 -2.41,1.83 -1.97,-0.74 -4.16,3.26 -5.16,1 1.12,-2.05 -1.54,-0.14 -2.23,-1.49 -1.1,1.9 -3.25,0.89 -4.63,-0.3 -2.08,0.61 -5.43,3.53 -6.14,-0.27 -1.61,-0.39 -4.74,-0.44 -2.93,-2.93 0.29,-0.63 0.34,-2.13 -0.72,-1.99 z&quot;,</td>
      </tr>
      <tr>
        <td id="L111" class="blob-num js-line-number" data-line-number="111"></td>
        <td id="LC111" class="blob-code blob-code-inner js-file-line">						&quot;department-69&quot; : &quot;m 433.73,316.51 c -1.23,0.46 -2.5,0.15 -2.78,2.07 -0.74,1.45 -2.37,-0.51 -2.67,-1.28 -0.69,1.49 -2.76,2.38 -3.71,0.45 -1.68,-1.33 -4.39,-0.82 -4.01,1.84 -0.71,1.65 0.63,2.41 1.38,3.48 -2.55,0.77 0.51,1.73 0.61,2.71 -0.41,1.66 -1.38,2.06 -2.7,1.09 -2.04,0.63 -3.43,2.17 -3.25,4.46 0.34,2.11 -3.89,1.45 -1.52,3.28 0.64,0.85 2.57,0.6 1.5,2.34 -0.59,0.49 -3.83,-0.49 -1.93,0.9 1.83,0.38 1.7,2.77 3.5,3.41 0.3,1.24 -1.23,2.13 0.17,3.34 0.85,1.23 3.47,0.4 1.96,2.6 -0.03,1.87 -0.27,3.49 -1.48,4.83 0.06,1.49 3.29,0.29 1.61,2.31 -1.06,1.85 -1.32,4.02 0.45,5.41 1.27,1.35 2.68,3.31 4.18,4.13 1.51,1.5 3.36,-0.41 4.88,1.05 1.7,-0.73 1.49,2.06 2.91,2.19 -1.19,1.71 0.21,5.2 2.42,3.21 1.24,-1.16 2.04,4.15 2.96,1.45 1.23,-1.41 3.83,-2.33 3.98,-4.32 -1.76,-0.7 -2.47,-2.54 -4.09,-3.51 1.84,-0.94 3.53,1.28 4.58,-0.77 1.51,-1.17 4.45,-0.14 5.27,-1.51 0.95,-0.25 2.74,0.97 2.03,-1.03 1.24,-1.85 2.79,-4.63 5.26,-4.54 0.24,-2.22 -3.33,-1.77 -3.23,-3.97 -1.59,-0.5 -1.14,-2.19 0.43,-1.77 0.7,-2.69 -4,-0.18 -5.55,-0.99 -1.61,0.21 -2.66,0.21 -2.4,-1.73 -0.63,-1.95 -1.32,-4.61 -3.64,-4.95 -0.96,0.68 -1.86,1.05 -1.38,-0.57 -0.83,-1.37 -2.55,-0.91 -3.49,-1.92 2.14,-2.03 -0.39,-5.26 0.95,-7.43 1.04,-0.99 -1.1,-2.32 0.59,-3.24 1.49,-1.45 2.32,-4.9 -0.84,-4.45 -2.61,-1.01 0.89,-5.07 -2.78,-5.24 -1.21,-1.33 2.19,-1.14 0.43,-2.68 -0.12,-0.26 -0.3,-0.58 -0.61,-0.66 z&quot;,</td>
      </tr>
      <tr>
        <td id="L112" class="blob-num js-line-number" data-line-number="112"></td>
        <td id="LC112" class="blob-code blob-code-inner js-file-line">						&quot;department-43&quot; : &quot;m 379.31,374.73 c -1.62,2.39 -4.9,1.8 -6.71,0.33 -0.7,1.72 -0.87,1.21 -1.91,0.1 -0.8,1.98 -3.58,1.56 -4.38,3.23 -1.25,1.09 -2.57,1.35 -4.33,1.17 0.74,1.5 -1.58,1.78 -0.04,2.79 -2.08,1.77 1.79,1.15 2.36,1.2 -0.13,1.97 3.13,-0.54 2.89,1.98 -0.29,1.8 0.97,2.96 2.14,3.73 -0.86,2.28 -0.05,5.34 2.48,5.9 2.93,0.43 -0.37,2.07 -1.36,0.74 -1.49,0.56 1.82,1.51 0.26,2.94 -1.01,2.64 2.59,2.31 2.97,4.1 -2.04,1.24 0.26,1.73 1.03,2.74 1.8,0.69 0.7,3.92 2.11,5.44 0.56,1.74 1.53,5.67 3.68,3.09 2.13,0.18 4,-0.58 3.52,-3.06 1.72,-1.57 4.47,0.99 3.25,2.73 2.03,-0.35 4.24,-0.91 4.56,1.81 1.6,0.42 1.42,3.2 3.32,1.95 -0.31,0.86 -0.01,2.7 1.4,1.48 3.08,-0.04 2.22,-4.19 4.35,-5.07 0.8,1.72 0.74,-0.65 2.16,-0.3 0.91,-0.43 0.22,-3.47 2.51,-2.52 2.14,-0.66 5.33,0.63 5.55,-2.64 1.54,-1.36 1.15,-4.48 3.81,-3.54 1.57,0.05 2.24,-1.12 0.99,-2.15 -1.14,-2.94 5.69,-1.67 3.23,-3.83 -1.6,-1.11 -0.01,-3.44 1.47,-3.61 -1.01,-0.84 -1.65,-2.84 0.52,-2.06 0.75,0.25 1.93,2.57 1.79,0.63 -0.57,-2.5 2.93,-4.77 1.26,-7.19 -1.2,-1.98 -2.64,-2.48 -4.48,-1.26 -2.08,-0.82 0.53,-3 -1.95,-3.68 1.6,-1.09 1.44,-3.36 -0.89,-3.47 -2.17,2.19 -2.9,-2.58 -5.24,-0.98 -1.45,-1.18 -2.23,0.2 -2.36,1.14 -1.72,-0.24 -2.79,0.8 -3.72,1.87 -0.74,-1.86 -1.9,-0.59 -2.28,0.4 -0.52,-2.16 -2.78,-4.05 -4.23,-1.53 -0.3,1.52 -1.03,1.38 -1.49,0.05 -2.13,0.67 -3.37,-3.95 -4.67,-1.3 0.12,2.86 -4.25,0.82 -5.13,-0.4 -0.84,1.48 -2.99,4.23 -4.08,1.09 -0.06,-2.97 -3.34,-1.73 -4.39,-4.01 z&quot;,</td>
      </tr>
      <tr>
        <td id="L113" class="blob-num js-line-number" data-line-number="113"></td>
        <td id="LC113" class="blob-code blob-code-inner js-file-line">						&quot;department-07&quot; : &quot;m 436.62,378.68 c -2.11,1.19 -5.05,1.82 -5.73,4.31 -0.61,0.74 -1.7,1.47 -0.63,2.83 -1.48,1.55 -5.39,0.21 -5.65,3.05 -0.4,2.17 -2.13,4.1 -1.51,6.11 -0.82,1.35 -2.2,-3.55 -3.34,-0.83 2.87,1.6 -1.37,1.64 -1.06,3.7 -0.07,1.01 2.58,2.11 0.3,2.78 -2.43,-0.04 -3.73,1.92 -2.22,3.92 -1.62,1.35 -4.39,-0.37 -4.36,2.53 -1.51,1.8 -1.89,5.12 -5.04,3.9 -1.64,0.68 -4.72,-0.35 -3.54,2.75 -1.69,0.44 -2.07,1.93 -3.57,0.7 -0.65,2.39 -1.67,4.38 -3.7,5.18 0.05,1.23 -0.23,2.66 0.56,3.58 -0.09,2.42 0.91,5.06 1.8,7.31 3.3,1.24 2.04,5.97 4.07,8.24 1.96,0.49 1.37,2.56 2.59,3.64 -1.74,0.94 0.2,3.57 -1,5.13 1.45,0.08 4.13,-2.2 4.71,0.49 2.27,-0.88 3.84,4.84 5.98,2.4 0.11,-2.69 3.06,-5.02 5.54,-4.01 -0.84,1.71 0.49,4.93 2.22,2.69 -1.12,-4.19 4.37,-2.87 5.2,-0.35 2.07,1.28 5.06,2.67 3.99,-1.18 -0.44,-2.49 0.5,-4.84 0.92,-7.23 2.57,-1.67 0.05,-4.72 1.41,-6.94 -1.34,-2.75 2.73,-3.36 2.63,-6.07 2.5,-3.08 -0.98,-6.81 0.47,-10.07 2,-1.59 2.83,-4.11 4.16,-6.22 -0.81,-2.28 2.55,-4.4 -0.11,-6.44 -1.37,-1.98 -0.41,-4.12 -0.17,-5.92 -1.82,-0.69 -0.96,-3.19 -2.25,-4.49 1.8,-2.26 -0.83,-5.08 0.05,-7.93 1.49,-3.08 -3.02,-4.17 -1.77,-7.12 l -0.36,-0.33 -0.59,-0.1 0,0 z&quot;,</td>
      </tr>
      <tr>
        <td id="L114" class="blob-num js-line-number" data-line-number="114"></td>
        <td id="LC114" class="blob-code blob-code-inner js-file-line">						&quot;department-26&quot; : &quot;m 448.07,380.12 c -2.89,1.17 -5.09,3.5 -8.19,2.69 -0.39,2.66 -1.05,6.79 0.49,9.42 -1.96,1.97 0.32,3.64 0.34,5.76 2.35,1.37 -0.99,4.81 1.33,6.93 2.06,2.38 -0.62,5.13 -0.81,7.77 -1.22,2.58 -4.32,4.41 -3.69,7.71 1.66,3.46 0.06,6.59 -1.3,9.7 -3.02,0.93 -0.83,4.24 -2.03,6.3 0.95,3.33 -2.55,6.12 -1.92,9.81 1.2,3.03 7.51,-0.99 7.1,4.18 0.14,2.04 0.67,4.67 2.58,1.79 2.97,-0.92 6.04,-2.27 9.06,-3.52 1.12,3.67 4.14,-0.81 5.13,-0.14 -0.85,1.68 -0.59,3.54 -0.5,5.19 1.36,1.14 3.35,1.14 4.16,-0.1 1.72,1.86 4.28,0.89 5.95,1.95 0.03,1.94 0.09,3.52 2.41,3.44 1.06,4.04 4.77,0.96 6.47,-0.43 -1.58,-2.47 1.9,-2.75 3,-1.1 1.64,-1.37 2.06,-2.86 1.41,-5.21 1.53,-2.36 -2.87,-0.24 -1.73,-2.96 -1.59,-0.67 -0.77,-1.18 -0.59,-2.32 -2.51,0.48 -4.35,-1.04 -6.35,-0.89 -1.23,-1.45 -2.87,-1.53 -2.12,-3.69 -1.62,-1.67 -0.01,-2.82 1.69,-1.61 2.12,-0.83 -1.87,-1.85 -0.65,-3.64 -0.28,-2.93 4.33,0.48 6.05,0.59 1.73,0.39 1.15,-2.66 3.01,-2.35 -1.71,-1.67 -3.84,-2.97 -1.6,-5.43 1.79,-1.45 -0.55,-5.71 2.99,-3.98 1.94,0.82 3.33,-0.86 4.9,-1.06 1.29,-0.88 2.08,-3.19 -0.35,-2.44 -2.24,0.57 -3.91,-2.09 -6.41,-1.58 -1.16,-1.43 -2.84,-3.52 -4.34,-3.81 0.14,1.78 -6.09,-0.53 -3.44,-2.33 -1.37,-2.79 0.85,-6.84 0.11,-10.1 0.96,-2.47 -1.42,-5.35 0.09,-7.37 -2.07,0.93 -4.59,4.84 -6.88,1.6 -1.84,0.62 -4.04,-0.31 -5.88,-1.61 -1.29,0.02 -2.1,2.02 -3.13,0.34 2.95,-1.62 2.73,-5.57 1.54,-8.29 2.1,-1.71 -0.25,-3.63 -2.12,-2.9 0.27,-1.74 0.99,-4.37 -1.59,-2.47 -1.31,0.06 -1.04,-2.86 -3.02,-2.37 -0.42,-0.45 -0.36,-1.52 -1.19,-1.46 z m -1.27,60.35 c 2.68,0.18 1.93,3.2 4.79,3.14 -1.88,1.51 -2.98,3.63 -4.06,5.91 -1.76,-1.35 -5.66,0.15 -4.33,-3.15 -1.66,-0.66 1.47,-2.81 1.37,-4.36 0.67,-0.62 1.73,-0.72 2.23,-1.54 z&quot;,</td>
      </tr>
      <tr>
        <td id="L115" class="blob-num js-line-number" data-line-number="115"></td>
        <td id="LC115" class="blob-code blob-code-inner js-file-line">						&quot;department-84&quot; : &quot;m 446.86,440.69 c -1.95,0.68 -2.59,2.23 -3.24,3.95 -1.54,1.08 0.24,1.84 -0.38,3.25 0.79,1.16 2.95,0.74 4.3,1.12 1.33,-1.76 1.41,-4.26 3.76,-4.92 -0.23,-0.92 -2.69,-0.73 -2.57,-2.42 -0.66,-0.27 -1.12,-0.97 -1.86,-0.99 z m -10.7,6.69 c -1.75,0.63 -4.36,-0.72 -3.75,2.23 -0.47,1.96 1.22,3.5 1.32,5.13 2.22,-0.26 1.8,3.29 1.6,4.89 -0.71,1.78 -0.16,4.41 1.97,3.57 1.39,1.79 2.8,3.83 3.94,5.76 0.11,1.52 -2.28,0.28 -1.54,2.26 -0.27,1.54 -4.74,2.54 -1.78,2.92 1.98,0.36 4.26,0.33 5.81,1.82 2.69,0.61 4.43,2.7 6.08,4.74 0.55,2.14 2.45,3.17 4.31,4.09 2.3,2.43 5.12,0.03 7.83,1.23 2.38,1.21 4.48,2.96 6.96,4.03 2.69,1.26 6.11,1.9 8.79,0.34 1.35,-1.61 3.7,-0.97 4.73,-3.09 0.97,-1.51 -1.94,-2.24 -1.96,-3.86 -1.56,-1.86 -3.42,-4.41 -6.24,-2.8 -2.07,0.95 -0.48,-2.95 0.61,-3.43 0.51,-1.33 1.55,-2.66 -0.1,-3.23 -0.29,-2.08 -4.3,-0.54 -3.06,-3.3 0.45,-2.01 1.86,-3.87 1.45,-6.01 -1.1,0.12 -2.63,0.07 -2.14,-1.74 0.53,-2.35 -2.66,-1.28 -2.71,-3.51 -1.05,-0.88 -3.35,-0.4 -2.48,-2.73 -0.01,-3.12 -4.03,-0.26 -5.3,-2.66 -1.51,-1.06 -0.98,1.74 -2.66,0.68 -2.01,-0.15 -3.06,-1.35 -2.27,-3.12 -1.69,-0.64 1.81,-3.73 -0.28,-2.95 -1.07,2.14 -3.56,1.91 -4.6,0.21 -2.41,0.78 -4.55,2.65 -7.11,2.79 -1.53,-0.33 -4,4.19 -3.94,0.55 -0.37,-2.16 -0.51,-5.06 -3.51,-4.81 z&quot;,</td>
      </tr>
      <tr>
        <td id="L116" class="blob-num js-line-number" data-line-number="116"></td>
        <td id="LC116" class="blob-code blob-code-inner js-file-line">						&quot;department-13&quot; : &quot;m 436.6,474.08 c -0.74,1.85 -4.74,2.73 -4.06,4.51 1.26,0.66 -1.41,1.72 -0.12,3.06 0.08,2.7 -2.74,5.11 -1.37,7.86 -2.28,-0.28 -6.4,-2.34 -7.04,1.21 -2.02,1.17 -2.34,4.33 0.25,4.07 -0.26,2.18 -2.99,1.15 -3.24,3.2 -2.53,0.88 -3.65,1.48 -5.33,3.13 -3.12,0.45 -3.32,4.69 0.25,3.69 2.78,0.47 5.55,1.05 8.35,0.35 2.37,-0.45 7.29,1.42 4.55,4.28 -0.6,3.55 5.03,2.05 7.33,2.58 1.71,0.43 5.71,0.01 2.7,-2.11 -3.88,-1.35 -2.85,-5.16 -3.05,-8.31 -0.04,-1.21 -2.55,-5.59 -0.42,-2.89 1.89,2.36 1,5.34 0.95,8.05 0.88,2.13 3.62,3.05 5.46,4.22 1.53,-0.81 -2.25,-2.45 0.5,-3.11 1.91,-1.46 4.03,-0.52 5.49,0.58 3.35,0.39 4.55,-4.15 1.3,-5.2 -0.68,-1.48 -0.16,-6.09 1.79,-3.06 2.23,-0.56 2.91,0.56 2.79,2.29 1.26,2.1 3.09,1.09 4.71,0.38 1.06,3.09 -3.48,5.94 -6.44,5.14 -4.78,-0.48 -3.49,6.19 0.68,5.18 2.9,-0.06 6.07,0.58 8.6,-1.26 3.09,-1.75 3.91,2.83 3.27,4.72 2.03,1.28 -2.35,4.61 1.58,4.55 2.59,-0.26 5.17,0.78 7.33,0.32 0.97,2.95 3.72,1.97 5.67,1.14 -0.33,-3.01 1.95,-4.41 4.07,-5.87 -0.58,-2.14 -2.28,-2.58 -3.96,-3.03 2.56,-1.22 -1.49,-6.49 2.6,-5.65 1.54,0.73 3.39,-0.95 1.08,-1.75 -1.32,-1.96 -3.23,-3.39 -1.84,-5.73 2.26,-2.81 -4.73,-2.76 -1.41,-4.42 -0.82,-3.37 2.37,-4.88 5.13,-5.19 1.46,-1.69 -2.03,-5.66 -3.21,-2.42 -1.87,0.81 -3.79,1.87 -5.79,2.74 -4.96,0.73 -9.29,-2.44 -13.26,-4.94 -3.21,-1.31 -6.53,0.84 -9.27,-1.96 -2.79,-0.81 -2.96,-3.66 -4.98,-5.35 -1.7,-2.34 -4.64,-3.03 -7.08,-4.31 -1.52,-0.14 -3,-0.57 -4.52,-0.71 z&quot;,</td>
      </tr>
      <tr>
        <td id="L117" class="blob-num js-line-number" data-line-number="117"></td>
        <td id="LC117" class="blob-code blob-code-inner js-file-line">						&quot;department-83&quot; : &quot;m 517.2,482.16 c -2.21,0.45 -4.51,0.15 -4.56,3.03 -1.71,2.89 -5.34,-0.75 -6.7,-2.47 -3.07,-2.54 -3.41,4.73 -6.6,3.29 -1.58,1.5 -2.96,3.5 -4.46,4.67 -1.25,-1.47 -1.71,-3.25 -3.55,-3.95 0.03,-1.86 -1.87,-1.86 -1.91,-0.09 -1.33,1.02 -2.66,0.95 -3.16,-0.75 -1.91,-1.9 -4.18,0.89 -2.09,2.04 0.53,1.23 1.97,1.94 0.53,3.38 -2.84,-0.21 -5.92,2 -4.84,5.1 -3.44,1.27 3.35,1.25 1.35,3.57 -0.22,1.94 -1.24,3.31 0.74,4.69 0.22,1.73 4.1,2.93 0.81,3.75 -2.63,-1.28 -3.72,1.11 -2.27,3.16 -1.33,1.63 -0.65,2.88 1.29,2.7 1.09,1.33 2.34,3.31 -0.22,3.83 -2.89,1.3 -2.33,4.54 -1.48,6.82 1.05,1.11 2.71,1.01 3.71,1.52 -0.45,1.28 3.17,1.21 0.61,2.02 -2.2,1.64 1.53,2.03 2.31,3.24 1.87,0.49 2.01,-2.69 4.02,-1.64 0.25,-1.17 -3.62,-2.32 -0.77,-2.94 1.5,-0.75 1.25,1.72 3.11,0.9 1.98,-0.44 2.88,1.82 4.97,0.72 2.49,0.17 1.79,3.18 -0.25,3.1 1.03,0.17 3.75,1.02 4.22,-0.22 -1.87,-1.01 -0.43,-5.47 2.18,-4.51 2.27,-1.02 4.3,0.74 5.47,2.2 2.95,0.7 -0.7,-3.95 2.56,-4.14 1.82,-1.17 4.32,-0.11 5.81,-1.82 1.19,-1.87 3.53,-0.69 3.91,0.87 1.83,-0.26 1.02,-2.97 3.25,-2.97 -1.94,-1.52 0.52,-2.56 0.71,-4.09 -0.88,-1.35 -6.14,0.84 -4.2,-1.29 1.98,-0.49 3.13,-1.3 3.41,-3.27 3.09,-0.38 1.58,-4.33 3.42,-5.76 2.02,1.51 4.49,0.53 6.29,-0.38 1.97,-1.45 2.07,-3.69 -0.21,-4.86 0.39,-1.48 -0.82,-2.76 0.73,-4.13 0.32,-1.33 0.43,-3.31 -1.68,-2.51 -2.08,-0.91 -4.86,-2.77 -4.6,-5.2 1.21,-2.45 -1.26,-3.59 -2.82,-4.44 -1.3,-0.4 -2.5,0.43 -2.84,-1.45 -0.36,-2.95 -3.06,-1.75 -4.46,-0.37 0.04,-0.84 -0.83,-2.43 -1.72,-1.38 z&quot;,</td>
      </tr>
      <tr>
        <td id="L118" class="blob-num js-line-number" data-line-number="118"></td>
        <td id="LC118" class="blob-code blob-code-inner js-file-line">						&quot;department-06&quot; : &quot;m 534.65,445.17 c -2.26,1.07 -5.06,2.58 -4.36,5.66 -3,-0.21 -3.04,3.43 -4.06,5.54 -1.08,2.46 0.95,4.86 2.25,6.92 -1.14,3.22 2.36,4.62 4.05,6.69 0.63,2.61 3.53,3.37 4.77,5.63 -2.57,2.29 -4.92,-3.17 -6.86,-0.03 -0.74,2.32 -3.13,1.4 -4.56,1.36 1.15,1.61 -2.67,2.88 0.34,3.69 1.19,1.89 -4.95,1.17 -2.32,3.78 0.53,1.35 2.49,-0.04 3.3,1.63 2.89,-0.16 1.89,3.58 2.03,5.2 1.45,1.97 3.65,3.89 6.12,3.69 1.22,2.02 -1.58,4.04 -0.48,6.02 -0.26,2.6 3.76,2.43 2.74,-0.52 1.75,-2.03 4.78,-1.82 7.05,-2.83 2.15,2.34 0.79,-2.94 1.42,-4.1 0.35,-2.64 3.85,-1.42 4.44,-3.92 1.43,-0.64 4.04,-1.22 4.41,0.38 0.69,-1.18 0.32,-2.51 2.45,-2.28 -0.13,-1.76 1.58,-4.07 3.07,-2.16 1.7,0.06 1.19,-2.66 3.34,-2.27 -0.27,-2.4 -3,-5.81 0.3,-7.3 1.54,-1.45 0.99,-4.2 3.51,-4.76 2.78,-1.39 1.89,-4.43 4.17,-6.12 1.59,-2.77 -3.27,-4.24 -1.5,-7.3 -1.21,-2.71 -2.61,1.55 -4.47,0.73 -2.22,0.84 -4.68,1.32 -6.76,2.38 -2.04,0.2 -3.62,-0.51 -4.81,-1.86 -2.43,0.52 -3.44,-1.96 -5.53,-2.49 -1.15,-2.34 -3.58,-0.83 -4.96,-2.82 -1.54,-1.59 -4.78,0.61 -4.95,-2.66 -1.4,-1.9 -2.37,-3.95 -3.93,-5.85 l -0.23,-0.02 -1.8e-4,10e-5 z&quot;,</td>
      </tr>
      <tr>
        <td id="L119" class="blob-num js-line-number" data-line-number="119"></td>
        <td id="LC119" class="blob-code blob-code-inner js-file-line">						&quot;department-04&quot; : &quot;m 536.03,425.47 c -1.91,1.96 -3.88,3.46 -6.49,4.44 -1.02,2.88 -4.75,3.12 -5.32,6.34 -1.11,1.83 -1.21,3.9 -4.02,3.07 -3.01,-0.06 -6.66,-0.3 -8.11,-3.08 -0.64,-1.8 -3.43,-1.98 -2.19,0.22 -0.26,3.25 -2.7,-0.14 -4.23,1.68 -1.44,0.61 2.06,5.8 -1.43,5.09 -2.1,-2.16 -2.71,-5.63 -6.09,-5.69 -0.87,3.33 -6.54,3.63 -7.12,7.81 -0.96,1.13 -2.01,2.66 -0.4,3.1 -0.61,1.4 0.72,5.52 -1.66,2.94 -0.44,-1.65 -2.49,-3.59 -2.83,-0.6 1.02,1.86 2.62,3.82 3.95,5.12 -2.91,0.83 -6.3,-2.29 -9.28,0.12 -0.78,0.38 -3.94,0.37 -2.37,1.8 0.52,0.59 -1.17,0.62 -1.27,-0.25 -1.21,-2.36 -3.58,-0.6 -2.43,1.22 -2.05,0.82 -5.12,3.55 -2.92,5.69 3.34,-0.23 0.15,4.71 -0.09,6.55 -0.21,2.32 3.26,0.85 3.55,3.17 2.24,1.52 -3.59,5.18 -1.33,6.48 2.81,-2.13 5.06,0.73 6.7,2.59 0.57,1.46 2.26,4.38 3.61,1.7 2.13,0.13 4.41,4.24 5.38,0.42 1.94,-1.62 1.55,2.48 3.59,2.29 0.43,1.7 2.31,4.04 2.93,1.23 2.03,-0.76 2.24,-3.96 4.52,-2.9 1.73,-1.32 3.93,-6.5 5.92,-2.58 1.76,2.61 6.67,4.01 6.46,-0.53 1.66,-0.48 3.88,-1.21 5.41,-0.9 0.99,2.9 3.19,-2.27 4.59,0.48 1.62,-0.3 5.25,-1.56 1.66,-2.44 0.5,-1.52 2.15,-2.44 0.07,-3.65 2.45,0.82 5.17,0.99 6.43,-1.88 1.98,-0.91 4.27,3.34 5.6,0.53 -2.39,-1.94 -3.94,-3.66 -5.54,-6.13 -1.97,-1.55 -3.7,-3.16 -3.01,-5.85 -1.63,-2.1 -3.46,-4.86 -1.89,-7.35 0.29,-2.57 2.02,-4.78 3.68,-5.75 -0.2,-4 5.64,-3.6 4.5,-7.78 -0.28,-2.01 3.78,-1.57 1.15,-3.33 -2.21,-1.59 -4,-5.51 -0.76,-7.08 1.56,-1.02 4.77,-6.03 1.11,-6.32 z&quot;,</td>
      </tr>
      <tr>
        <td id="L120" class="blob-num js-line-number" data-line-number="120"></td>
        <td id="LC120" class="blob-code blob-code-inner js-file-line">						&quot;department-05&quot; : &quot;m 505.98,394.66 c -0.92,0.25 -1.63,1.24 -1.1,2.16 0.19,0.48 0.58,1.51 -0.28,1.51 -1.03,0.5 -0.62,1.96 -1.08,2.79 -0.5,0.85 0.81,1.35 1.44,1.52 1.22,0.46 2.5,-0.16 3.7,-0.25 0.54,0.61 -0.39,1.36 0.2,1.99 0.46,0.55 -0.24,1.49 0.61,1.76 1.28,0.11 1.04,1.22 0.99,2.19 0.04,1.33 -0.36,2.63 -0.12,3.94 -0.53,0.79 -1.69,0.39 -2,-0.4 -0.51,-1.19 -2.09,-0.47 -2.63,0.32 -1,0.97 -2.33,-0.4 -3.46,0.21 -0.85,0.38 -1.73,-1.03 -2.42,-0.12 -0.98,1 -2.08,1.88 -3.19,2.74 -0.6,-0.52 -1.36,-2.29 -1.99,-0.92 -0.19,0.45 -0.47,0.63 -0.95,0.63 -0.5,0.26 -1.64,0.37 -1.59,1.05 0.28,0.44 1.46,0.83 1.02,1.47 -0.54,0.3 -1.13,0.65 -1.29,1.26 -0.7,-0.05 -1.3,0.89 -1.97,0.42 -0.72,-0.21 -1.09,0.98 -1.85,0.43 -0.58,0.09 -1.28,-0.82 -1.74,-0.36 0.25,1.1 -0.94,2.04 -0.76,3.1 0.52,0.18 0.81,0.66 0.78,1.23 -0.53,0.61 -1.46,0.99 -1.58,1.94 -0.18,0.9 -1.25,0.06 -1.79,0.32 -0.68,0.37 -1.24,1.41 -2.12,0.79 -0.93,-0.21 -2.04,-0.85 -2.95,-0.39 -0.57,0.89 0.83,2.18 -0.26,2.82 -0.65,0.74 -0.7,1.84 -1.37,2.59 -0.33,0.63 -0.72,1.79 0.31,1.98 1.01,0.26 1.61,1.36 2.24,2.13 -0.07,0.59 -1.06,0.18 -1.47,0.37 -0.6,0.27 -0.26,1.22 -0.74,1.67 -0.29,0.65 -1.01,0.59 -1.49,0.18 -0.57,-0.34 -1.27,-0.05 -1.74,-0.61 -0.9,-0.62 -2,-0.67 -3.03,-0.83 -0.44,-0.35 -1.26,-0.9 -0.84,0.18 0.34,0.85 -0.18,1.94 0.35,2.71 0.46,0.27 1.64,0.66 1.06,1.38 -0.5,0.81 -1.41,0.3 -2.05,-0.05 -0.52,-0.37 -1.25,0.09 -0.87,0.7 0.33,0.77 0.86,1.66 0.62,2.5 -0.66,0.38 0.12,0.97 0.62,0.79 0.61,0.08 0.48,1.09 1.17,1.15 0.27,0.47 0.79,0.78 1.25,0.32 0.66,-0.57 1.26,0.29 1.64,0.72 1.26,0.36 2.77,-0.21 3.93,0.31 -0.15,0.66 -1.33,1.39 -0.16,1.75 0.4,0.17 0.78,0.55 0.44,0.97 -0.13,0.75 0.67,1.6 1.38,1.06 0.44,-0.36 1.29,0.39 0.73,0.76 -0.45,0.57 -0.47,1.41 -0.01,1.94 -0.06,0.96 -0.14,2.01 0.32,2.89 0.74,-0.36 1.48,-0.84 2.32,-1.03 0.89,-0.54 2.04,-0.3 3.03,-0.47 1.36,0.7 2.9,1.36 4.48,1.28 0.82,-0.57 -0.52,-1.06 -0.97,-1.25 -0.83,-0.92 -1,-2.37 -2.18,-3.02 -0.89,-0.61 -0.47,-1.72 -0.01,-2.44 0.2,-0.82 1.38,-0.21 1.78,0.12 0.44,0.5 0.07,1.39 0.76,1.79 0.27,0.34 1.29,1.11 1.39,0.28 -0.46,-0.7 -0.4,-1.72 0.04,-2.4 0.24,-0.63 -0.28,-0.96 -0.8,-0.99 -0.4,-0.58 -0.19,-1.66 0.53,-1.93 1.11,-0.98 1.03,-2.64 1.93,-3.7 0.84,-0.83 2.18,-1.02 2.91,-1.96 0.3,-0.69 1.08,-1.23 1.8,-1.37 0.77,0.34 0.76,-0.99 0.72,-1.47 0.2,-0.8 1.42,-0.33 1.96,-0.19 0.77,0.29 1.87,0.6 1.76,1.64 -0.03,0.5 0.41,0.7 0.8,0.64 0.65,1.23 1.63,2.21 2.33,3.38 0.67,0.53 1.08,-0.73 1.28,-1.18 0.53,-1.39 -0.98,-2.61 -0.83,-3.89 0.95,-0.06 1.68,-0.79 2.53,-1.06 0.55,0.33 1.53,1.41 2.02,0.36 0.44,-0.73 0.48,-1.61 -0.08,-2.27 0.17,-0.42 0.83,-0.77 1.24,-0.86 0.91,1 1.94,1.96 2.46,3.23 0.51,0.3 1.22,-0.11 1.7,0.41 0.56,0.61 1.25,1.09 2.14,1 1.98,0.14 3.96,0.2 5.94,0.29 0.53,-0.84 0.08,-2.27 1.05,-2.94 1.09,-0.75 1.13,-2.18 1.48,-3.28 1.39,0.19 2.51,-0.88 3.23,-1.94 0.77,-0.23 0.49,-1.3 1.27,-1.53 0.82,-0.72 1.93,-0.86 2.92,-1.25 0.49,-0.42 0.51,-1.23 1.32,-1.26 0.83,-0.36 1.14,-1.4 1.93,-1.78 0.77,0.27 1.79,0.29 2.08,-0.66 0.66,-1.38 2.4,-1.81 3.71,-1.06 0.39,0.18 1.29,0.5 1.12,-0.27 0.09,-1.44 -0.99,-2.46 -1.92,-3.38 -0.16,-1.25 0.2,-2.81 -0.7,-3.82 0.26,-0.63 1.23,-1.27 0.5,-1.95 -0.48,-0.56 -0.7,-1.27 -1.5,-1.47 -0.9,-0.29 -1.99,-1.36 -2.93,-0.65 -1.03,0.93 -2.61,0.14 -3.63,-0.46 -1.39,-1.22 -3.06,-2.05 -4.52,-3.16 -0.14,-0.64 0.04,-1.36 -0.18,-2.01 0.26,-0.67 0.64,-1.39 0.32,-2.14 -0.46,-0.77 -0.27,-1.65 -0.34,-2.48 -0.67,-1.47 -2.82,-0.12 -3.68,-1.29 -0.42,-1.05 0.19,-2.49 -0.93,-3.24 -0.45,-0.58 -0.89,-1.29 -0.84,-2.02 -0.58,-0.55 -1.68,-0.52 -2.38,-0.21 -0.4,0.9 -1.61,1.62 -2.44,0.8 -0.83,-0.16 -1.61,0.86 -1.3,1.66 0.16,0.65 0.15,1.68 -0.74,1.69 -0.9,0.39 -1.54,-0.53 -2.43,-0.47 -0.85,-0.07 -1.72,-0.21 -2.49,-0.62 0.67,-1.13 -0.23,-2.74 -1.37,-3.11 -0.83,0.45 -1.99,0.92 -2.79,0.12 -0.24,-0.12 -0.29,-0.52 -0.63,-0.43 z&quot;,</td>
      </tr>
      <tr>
        <td id="L121" class="blob-num js-line-number" data-line-number="121"></td>
        <td id="LC121" class="blob-code blob-code-inner js-file-line">						&quot;department-38&quot; : &quot;m 464.21,344.5 c -2.79,1.9 -2.68,8.48 -7.27,6.99 -0.9,-2.78 -3.83,-2.24 -5.03,-0.76 -2.02,0.29 1.51,1.68 1.08,3.08 2.47,0.08 3.5,3.16 0.44,2.72 -1.73,1.6 -3.23,3.88 -3.85,5.57 -1.57,-1.3 -1.06,1.72 -2.92,0.29 -3.28,-0.47 -4.55,3.17 -7.48,1.48 -1.5,1.31 5.74,3.47 2.07,5.5 -2.26,2.06 -5.1,3.74 -4.23,6.93 0.77,2.57 -0.06,8.04 4.48,6.03 2.27,2 6.34,-5.1 8.45,-0.76 1.77,0.21 1.71,3.96 3.93,1.45 1.68,0.13 -1.09,4.61 1.72,3.03 1.9,0.92 2.02,2.4 0.5,3.24 1.61,2.88 0.73,6.17 -0.85,8.65 1.08,-0.16 3.1,-1.79 4.37,0.45 2.36,0.7 4.24,0.15 6.23,1.33 0.84,-0.27 3.02,-1.03 3.81,-2.77 2.64,0.63 -1.49,2.67 0.72,4.47 0.38,3.59 -0.09,7.56 -0.56,11.3 0.4,1.45 0.41,2.4 -0.01,3.62 1.24,0.79 4,2.16 3.74,0.13 2.61,1.83 4.3,5.05 7.54,4.72 2.17,2.94 5.3,0.26 5.21,-2.58 1.66,1.44 8.14,-0.42 5.75,-2.57 -0.07,-1 2.61,-2.26 3.54,-2.4 2.26,2.99 3.89,-3.83 6.67,-1.32 2.19,0.23 3.45,-0.22 5.31,-1.27 0.97,1.39 3.24,2.32 2.54,-0.45 1.1,-3.23 -1.77,-5.43 -1.86,-8.01 -3.37,1.84 -6.82,-1.82 -3.61,-4.41 -0.13,-1.84 0.52,-3.31 1.32,-4.86 -1.82,-0.13 -3.26,-1.51 -5.13,-0.74 1.43,-2.69 -1.8,-4.98 -0.71,-7.76 -0.38,-2.56 4.12,-3.93 2.03,-6.04 0.5,-3.14 -3.24,-5.89 -6.15,-5.13 -1.66,-1.14 -3.77,-5.23 -5.46,-1.87 -0.31,1.87 -0.63,3.21 -0.4,4.62 -2.15,1.23 -4.77,-3.87 -7.68,-2.52 -0.95,-2.94 -2.79,-6.19 -4.33,-9.02 -1.66,-2.41 -2.31,-5.84 -4.73,-7.23 -0.04,-3.77 -5.4,-5.53 -5.81,-9.3 0.88,-1.39 -2.2,-3.36 -3.39,-3.83 z&quot;,</td>
      </tr>
      <tr>
        <td id="L122" class="blob-num js-line-number" data-line-number="122"></td>
        <td id="LC122" class="blob-code blob-code-inner js-file-line">						&quot;department-73&quot; : &quot;m 486.16,340.96 c -0.45,0.45 0.31,1.19 0.03,1.77 -0.43,2.29 -1.49,4.41 -1.88,6.69 -0.26,1.38 -0.01,2.88 -0.3,4.22 -0.62,0.31 0.02,1.17 -0.58,1.57 -0.45,1.17 -1.58,0.73 -2.55,0.64 -0.84,0.07 0.16,1.14 -0.18,1.7 -0.39,0.69 -1.23,1.27 -0.9,2.19 0.16,0.81 -0.73,0.85 -1.28,0.92 -0.46,0.22 -0.52,0.84 -0.99,1.02 -0.1,0.57 -0.89,1.04 -0.26,1.63 0.76,1.32 2.36,2.45 2.11,4.11 0.23,0.33 0.74,0.34 0.74,0.83 0.84,0.69 0.84,1.99 1.51,2.8 0.86,0.69 -0.26,2.79 1.33,2.79 0.69,-0.42 1.75,-0.43 2.21,0.36 0.86,0.8 2.15,0.9 3.12,1.6 0.57,0.15 0.69,0.71 1.06,1.03 0.59,0.02 1.32,-1.15 0.42,-1.31 -0.57,-0.83 0.26,-1.71 0.62,-2.42 0.32,-0.63 -0.18,-1.37 -0.02,-1.93 0.76,-0.47 1.65,-0.69 2.47,-1.04 0.43,0.56 1.01,1.07 1.58,1.38 0.13,0.76 0.39,1.57 1.25,1.79 0.96,0.51 2.24,-0.49 3,0.51 0.5,0.17 1.21,-0.47 1.46,0.31 0.64,1.59 2.48,2.51 2.66,4.29 -0.29,0.15 -0.79,0.54 -0.21,0.73 0.85,0.23 0.12,1.35 0.11,1.91 -0.05,0.98 -1.42,0.76 -1.63,1.63 -0.67,0.52 -0.97,1.32 -0.71,2.16 0.28,0.8 -0.51,1.41 -0.41,2.16 0.41,0.87 0.74,1.73 1.41,2.45 0.62,1.01 -0.59,1.95 -0.5,2.93 0.52,0.56 1.11,-0.22 1.49,-0.5 0.92,-0.1 1.37,0.91 2.13,1.15 0.63,-0.3 1.62,-0.2 1.66,0.68 -0.1,1.41 1.8,2.18 2.81,1.25 0.65,-0.79 1.23,0.33 1.67,0.84 0.46,0.64 0.68,1.43 0.45,2.15 0.54,0.74 1.75,0.36 2.53,0.62 0.86,0.16 1.92,1 2.66,0.13 0.38,-0.92 -0.65,-2.23 0.57,-2.71 0.35,-0.45 0.85,-0.56 1.27,-0.15 0.94,0.49 1.73,-0.4 2.13,-1.14 0.91,-0.24 1.86,0.12 2.72,0.29 0.81,-0.21 1.62,-0.66 2.1,-1.32 0.99,-0.68 2.46,0.1 3.22,-1.02 0.35,-0.43 0.97,-0.89 1.45,-0.3 0.85,0.52 2.11,0.47 2.52,1.51 0.72,0.63 1.87,0.09 2.61,-0.25 0.41,-0.56 -0.74,-1.63 0.24,-1.82 0.89,-0.31 2.18,-0.09 2.35,-1.31 0.28,-0.94 0.93,-1.7 1.94,-1.85 1,-0.19 1.96,-0.56 2.92,-0.94 0.28,0.29 0.54,1.02 1.07,0.58 0.47,-0.87 0.96,-2.03 2.06,-2.12 0.86,-0.78 0.12,-2.12 -0.06,-3.06 -0.11,-0.72 -1,-1.93 0.07,-2.33 0.68,-0.07 0.41,-0.73 0.59,-1.12 0.98,-0.99 1.63,-2.36 1.9,-3.7 -0.59,-0.97 -1.87,-1.22 -2.71,-1.86 -0.94,-0.95 -0.87,-3.04 -2.54,-3.15 -0.56,-0.01 -0.92,-0.42 -0.89,-0.96 -0.58,-0.7 -1.85,-0.56 -2.18,-1.57 -0.64,-1.44 -0.23,-3.2 -1.06,-4.6 -0.34,-1.1 0.49,-2.08 0.76,-3.02 -0.69,-0.83 -1.62,-1.51 -2.76,-1.31 -0.88,0.14 -0.91,-0.82 -1.25,-1.33 -0.99,-0.62 -2.63,-0.33 -3.11,-1.66 -0.83,-0.95 -1.39,-2.07 -1.33,-3.37 -0.05,-0.49 -0.09,-1.83 -0.91,-1.34 -0.91,0.06 -1.72,0.7 -1.99,1.6 -0.42,0.52 -0.86,1.4 -1.45,1.52 -0.4,-0.17 -1.27,-0.31 -0.7,-0.87 0.23,-0.66 -0.51,-1.2 -0.28,-1.88 -0.34,-0.89 -0.91,-2.04 -1.95,-2.2 -0.89,-0.13 -2.19,0.76 -2.83,-0.15 -0.09,-0.52 -0.37,-0.96 -0.88,-1.06 -0.72,-0.81 -1.07,-2.03 -1.15,-3.07 0.63,0.06 1.62,-0.31 1.26,-1.11 -0.35,-1.05 -1.53,-1.04 -2.36,-1.47 -0.67,-0.01 -0.86,0.94 -1.52,1.08 -0.85,0.88 -1.48,2.09 -1.51,3.29 -0.72,0.95 -0.91,2.24 -1.97,2.95 -0.76,0.61 -1.69,1.28 -1.54,2.39 -0.21,0.67 -0.99,1.04 -1.01,1.82 -0.44,0.97 -0.54,2.37 -1.86,2.41 -1.14,0.38 -2.33,0.53 -3.53,0.54 -0.06,-0.45 0.01,-1.66 -0.76,-1.32 -0.31,0.13 -0.76,0.69 -1.03,0.56 -0.25,-0.91 0.24,-2.16 -0.62,-2.79 -0.14,-0.81 -1.14,-1.57 -1.94,-1.34 -0.21,0.5 -0.78,0.26 -1.03,-0.06 -0.76,0.04 -0.24,1.32 -0.76,1.53 -0.34,-0.65 -1.25,-0.37 -1.8,-0.73 -0.47,-0.07 -0.73,0.7 -1.2,0.25 -0.48,-0.36 -1.21,-0.4 -1.7,-0.51 0.01,-0.61 -0.44,-1.04 -0.93,-1.29 0.04,-0.57 0.55,-1.77 -0.49,-1.68 -0.47,-0.1 -0.19,-0.97 -0.81,-1.05 -0.66,-0.37 -1.22,0.91 -1.76,0.14 -0.38,-0.36 -0.12,-1.3 -0.92,-1.18 -1.02,-0.5 -0.45,-1.96 -0.7,-2.86 -0.23,-1.29 -0.31,-2.65 -0.65,-3.91 -0.34,-0.35 -0.97,-0.38 -1.43,-0.38 z&quot;,</td>
      </tr>
      <tr>
        <td id="L123" class="blob-num js-line-number" data-line-number="123"></td>
        <td id="LC123" class="blob-code blob-code-inner js-file-line">						&quot;department-74&quot; : &quot;m 522.73,306.41 c -1.97,0.51 -4.09,-0.11 -6.02,0.54 -1.69,0.88 -2.87,2.78 -4.92,2.88 -1.61,0.19 -3.71,0.06 -4.62,1.7 -1.07,1.16 -2.72,2.21 -2.73,3.97 0.1,0.69 1.48,0.71 0.93,1.55 -0.41,0.84 0.21,1.93 0.9,2.4 0.42,0.09 0.95,-0.58 1.26,0.01 0.37,0.53 0.48,1.32 -0.23,1.62 -1.53,1.19 -3.48,2.08 -4.62,3.7 0.15,0.96 -1.06,1.44 -1.7,1.89 -0.92,0.54 -2.12,0.67 -2.99,-0.02 -0.94,-0.11 -1.74,0.7 -2.72,0.57 -1.73,-0.1 -3.26,0.92 -4.93,1 -0.77,0.2 -1.52,0.85 -1.16,1.71 0.19,0.63 -0.32,1.15 -0.97,1 -0.99,0.19 -1.36,-0.93 -2.04,-1.36 -0.25,0.5 -0.16,1.27 -0.57,1.8 -0.32,1.76 -0.11,3.58 -0.18,5.37 -0.05,1.02 1.4,1.33 1.1,2.4 -0.08,0.89 -0.37,2.18 0.97,1.91 0.75,0.22 0.29,1.37 0.52,1.94 0.31,1.44 0.48,2.91 0.5,4.37 0.07,0.67 0.88,0.58 1.19,0.96 -0.06,0.61 0.65,1.43 1.18,0.8 0.34,-0.42 1.1,-0.12 1.48,0.06 -0.19,0.54 0.13,1.08 0.73,0.94 0.45,0.32 -0.03,1.12 0.02,1.58 0.26,0.43 0.87,0.53 0.99,1.06 0.58,0.39 1.43,1.09 2.13,0.73 0.22,-0.52 0.78,-0.22 1.09,0 0.59,0.21 1.53,0.05 1.32,-0.78 -0.01,-0.66 0.68,-0.27 0.9,0.03 0.57,0.28 0.97,-0.69 1.55,-0.21 0.84,0.25 1.11,1.08 1.58,1.67 0.61,0.22 0.16,1.19 0.32,1.69 -0.08,0.68 0.71,0.6 0.85,0.07 0.5,-0.09 1,0.52 0.86,1.04 0.4,0.69 1.5,0.24 2.16,0.27 0.76,-0.24 1.79,-0.22 2.32,-0.85 0.55,-0.82 0.59,-1.89 1.06,-2.69 0.59,-0.47 1.08,-1.17 0.58,-1.84 1.1,-1.12 2.6,-2.01 3.15,-3.59 0.44,-0.46 0.57,-1.04 0.46,-1.64 0.43,-1.24 1.14,-2.4 2.27,-3.1 0.24,-0.19 0.68,-1.23 1.02,-0.66 0.87,0.56 2.4,0.81 2.5,2.07 0.05,0.67 -0.39,0.98 -1.01,0.85 -0.65,0.38 0.05,1.31 0.13,1.86 0.25,0.92 1.4,1.05 1.58,2.03 0.48,0.87 1.65,0.01 2.41,0.12 0.73,-0.31 1.18,0.28 1.5,0.85 0.45,0.56 1.16,1.11 0.82,1.91 -0.09,0.58 0.7,0.95 0.24,1.52 -0.21,0.76 0.9,0.79 1.18,0.23 0.84,-0.71 0.9,-2.01 2.02,-2.43 1.02,-0.06 1.62,-1 1.61,-1.96 -0.09,-1.02 0.58,-2.66 1.85,-2.26 0.39,0.29 1.11,0.3 0.98,-0.35 0.01,-0.41 0.22,-0.99 0.72,-0.64 1.66,0.72 3.32,-0.42 4.67,-1.3 1.07,-1.02 1.17,-2.69 2.2,-3.72 0.24,-1.07 0.13,-2.38 -0.92,-2.98 -0.31,-0.29 0.4,-0.66 0.03,-1.04 -1.08,-1.72 -2.7,-3.09 -3.82,-4.78 -0.93,-0.47 -1.81,1.29 -2.7,0.56 -0.35,-0.84 0.72,-1.72 0.05,-2.53 0.03,-0.72 1.46,-1.61 0.49,-2.23 -0.76,-0.34 -1.61,-0.31 -2.36,-0.72 -0.84,-0.04 -2.06,-0.19 -2.06,-1.31 0.09,-1.22 0.81,-2.32 0.63,-3.59 0.03,-1.74 2.08,-2.69 2.14,-4.38 -0.61,-2.1 -2.81,-3.32 -3.41,-5.34 0.58,-0.82 1.83,-1.33 1.69,-2.56 0.1,-0.89 0.32,-2.26 -0.88,-2.5 -2.33,-0.82 -4.77,-1.84 -7.27,-1.85 z&quot;,</td>
      </tr>
      <tr>
        <td id="L124" class="blob-num js-line-number" data-line-number="124"></td>
        <td id="LC124" class="blob-code blob-code-inner js-file-line">						&quot;department-71&quot; : &quot;m 412,260.36 c -2.93,0.55 -4.26,2.21 -6.96,2.68 -1.28,2.48 2.3,4.5 -0.5,6.99 -1.43,0.66 -3.07,3.09 -0.49,1.44 1.9,1.91 -1.31,5.49 2.35,6.61 2.41,2.48 -3.47,2.49 -1.06,5.02 0.77,3.39 -3.9,1.03 -5.18,3.67 -2.25,1.4 -4.63,2.62 -7.04,3.38 -0.31,-4.58 -4.86,-2.18 -7.6,-2.64 0.33,3.18 3.53,4.95 4.3,8.11 0.37,1.27 1.28,3.31 0.8,5.05 2.56,1.6 5.5,0.03 6.06,3.56 2.3,-0.67 6.83,0.19 5.63,3.81 -1.65,2.24 1.1,6.27 -0.41,7.48 -1.83,-0.26 -2.1,1.92 -4,2.06 1.17,2.28 -1.61,6.17 2.72,5.49 0.93,1.98 2.84,2.96 4.81,1.08 2.24,-1.83 4.53,2.66 6.18,-0.34 0.99,0.81 3.97,-0.12 2.52,2.07 1.82,0.5 3.17,-1.98 5.29,-1.84 0.91,-1.94 0.34,-5.84 2.53,-7.3 2.38,-0.25 4.64,4.02 6.14,0.44 0.69,1.02 2.58,2.86 3.18,0.21 1.5,-2.57 5.41,0.79 2.63,2.19 4.35,0.26 -0.17,5.73 3.79,5.35 1.63,-2.32 1.8,-5.62 3.02,-8.28 1.07,-3.54 2,-7.12 3.47,-10.47 -0.24,-4.22 3.76,-4.44 6.12,-2.01 2.73,0.91 5.4,-3.24 7.43,-0.63 0.71,4.46 5.42,3.07 8.23,1.96 3.48,-0.33 -0.18,-2.98 -1.2,-3.64 -0.19,-2.06 -0.14,-4 2.12,-4.12 -1.13,-2.06 2.54,-2.7 0.55,-4.54 0.27,-1.18 -1.25,-2.07 -0.87,-3.37 -1.29,-1.52 -2.14,-2.53 -0.54,-4.28 -1.91,-0.7 -4.07,-3.41 -0.68,-3.56 1.47,-0.64 5.77,0.15 2.85,-1.99 -1.77,-0.79 -1.54,-3.02 -3.84,-2.16 -2.27,0.63 -1.51,-5.03 -4.1,-2.86 0.12,-2.06 -1.07,-4.73 -3.5,-2.61 -2.78,0.86 -4.3,2.07 -6.4,-0.46 -1.94,0.4 -2.39,2.11 -4.89,0.86 -2.61,0.33 -5.24,2.44 -8.14,3.19 -1.76,-0.3 -4.71,2.29 -4.23,-1.06 -3.18,-0.15 -5.08,-3.48 -5.63,-5.52 -2.23,0.19 -4.16,-1.65 -6.41,-2.36 0.94,-2.91 -1.62,-1.37 -2.5,-0.96 0.79,-4 -4.82,-1.4 -5.2,-5.1 -0.71,0.24 -0.8,-0.59 -1.34,-0.6 z&quot;,</td>
      </tr>
      <tr>
        <td id="L125" class="blob-num js-line-number" data-line-number="125"></td>
        <td id="LC125" class="blob-code blob-code-inner js-file-line">						&quot;department-03&quot; : &quot;m 355.26,283.59 c -2.47,0.46 -4.86,3.44 -6.02,4.72 -1.76,-0.99 -3.8,2.31 -4.59,-0.78 -1.76,0.08 -2.97,3.69 -5.04,3.94 1.97,2.84 -4.43,0.31 -1.55,2.39 0.4,1.42 -1.37,2.94 0.6,3.99 1.55,3.09 -3.65,5.08 -5.37,3.61 -2.24,1.35 -6.48,-0.24 -7.16,3.06 -1.54,1.23 -3.6,4.68 -1.43,6.74 2.23,0.25 1.54,1.18 0.45,2.24 0.46,1.75 3.06,2.36 3.77,1.35 1.79,0.78 0.58,3.48 2.71,2.33 2.32,1.7 3.03,4.85 4.13,7.52 1.59,1.1 1.36,3.94 4.21,3.81 2.2,-0.4 1.29,-4.32 4.06,-4.34 -0.38,-2.36 1.13,-2.81 2.64,-1.17 2.87,2.05 0.78,-4.7 4.25,-3.15 2.6,-0.56 4.31,1.53 2.01,3.27 -0.51,2.53 2.71,1.85 2.18,4.56 1.6,1.64 4.19,2.18 6.12,1.98 0.53,3.71 5.09,1.32 7.41,2.58 2.46,-0.35 4.25,2.07 6.4,-0.15 2.05,-0.87 3.81,1.48 3.14,3.62 2.97,-0.38 6.89,-1.86 7.42,2.51 1.3,0.31 3.13,3.55 3.29,0.55 1.79,-0.98 4.46,0.16 5.67,-2.24 -1.33,-3.25 -0.2,-6.45 -1.49,-9.65 1.17,-1.65 -1.28,-4.71 -0.7,-6.42 1.4,-0.12 2.34,-1.59 4.2,-1.58 1.27,-1.45 2.99,-2.22 4.25,-3.49 2.82,-0.46 -0.34,-5.16 1.28,-7.19 1.51,-3 -3.08,-4.88 -5.16,-3.65 -1.18,-1.3 -1.26,-3.58 -3.47,-2.38 -1.93,-1.04 -3.95,-1.45 -2.9,-4.14 -1.14,-2.8 -2.34,-5.73 -4.5,-8.23 0.48,-2.03 -3.61,-4.95 -2.1,-1.56 -0.34,1.45 -3.05,0.68 -1.66,2.91 -1.17,0.41 -2.72,0.17 -3.32,2.29 -3.21,0.75 -0.8,-5.19 -4.58,-3.84 -1.04,2.99 -3.56,1.08 -4.7,-0.26 -2.1,1.25 -4.73,3.83 -6.34,0.2 -2.17,-1.67 -4.84,-2.89 -5.84,-5.6 -0.73,-0.27 -1.51,-0.18 -2.26,-0.35 z&quot;,</td>
      </tr>
      <tr>
        <td id="L126" class="blob-num js-line-number" data-line-number="126"></td>
        <td id="LC126" class="blob-code blob-code-inner js-file-line">						&quot;department-58&quot; : &quot;m 361.05,231.75 c -1.61,0.98 -3.32,2.58 -5.23,1.22 -1.54,0.66 -5.16,0.31 -5.72,1.84 1.58,2.33 4.2,5.39 3.03,8.27 -0.46,2.34 -4.01,5.74 -0.25,7.04 1.92,1.64 3.66,3.16 3.28,5.91 2.2,3.19 1.4,7.61 2.45,10.69 2.84,1.44 0.59,4.96 1.6,7.25 -1.99,2.66 1.02,5.99 -1.24,8.7 -1.75,2.29 0.81,5.12 3.16,5.53 1.64,1.06 3.28,4.95 5.39,2.27 1.52,-1.93 3.16,-1.38 4.16,0.57 1.96,0.7 3.24,-3.41 4.93,-1.11 0.68,1.01 0.94,1.95 1.13,3.28 1.84,0.37 2.58,-2.94 4.39,-2.04 -0.61,-1.82 -0.49,-2.4 1.36,-2.38 -0.2,-1.17 -0.22,-3.61 1.45,-1.97 2.29,2.03 7.01,-1.91 8.02,2.31 1.41,2.29 3.54,-1.84 5.75,-1.47 1.68,-2.02 4.85,-2.71 6.51,-3.23 -0.22,-2.14 -1.12,-3.85 1.59,-4.65 -0.2,-2.28 -4.24,-3.86 -1.97,-6.79 0.18,-2.41 -4.07,0.3 -1.77,-2.02 2.77,-1.18 2.72,-4.62 1.41,-6.48 -0.21,-2.71 3.29,-1.57 3.61,-3.64 2.41,0.12 4.36,-0.55 4.66,-3.1 0.33,-2.07 -2.28,-4.7 -4.14,-3.18 -2.16,-1.91 1.5,-6.7 -2.23,-6.47 -2.06,-0.11 -3.88,3.63 -5.15,0.03 -0.32,-1.35 -0.05,-4.35 -2.03,-2.79 -1.29,0.05 -2.91,2.04 -2.96,-0.58 1.08,-0.8 1.65,-3.07 -0.35,-2.77 -1.09,1.35 -0.9,4.62 -3.13,2.61 -0.88,-1.42 -3.65,0.48 -4.06,-2.21 -1.01,-1.24 -3.05,-2.54 -4.54,-2.45 -1.62,0.35 -0.42,-3.16 -2.49,-3.09 -1.47,-0.17 -1.9,-4.94 -2.3,-1.85 0.35,2 -0.34,3.67 -2.39,2.1 -2.63,-1.51 -3.86,4.14 -5.82,1.03 -1.87,-1.04 -4.17,1.13 -5,-2 -2.26,0.34 -4.45,-1.48 -4.25,-4 -0.17,-0.32 -0.55,-0.4 -0.88,-0.38 z&quot;,</td>
      </tr>
      <tr>
        <td id="L127" class="blob-num js-line-number" data-line-number="127"></td>
        <td id="LC127" class="blob-code blob-code-inner js-file-line">						&quot;department-89&quot; : &quot;m 374.12,178.1 c -1.36,2.82 -5.36,0.91 -7.76,1.83 -2.91,0.12 -7.22,-0.23 -8.27,2.98 0.14,3.17 1.58,6.21 -2.22,8.02 -3.13,1.63 -1.03,2.94 1.17,4.04 2.28,2.02 1.91,5.48 4.92,6.98 0.09,2.23 1.57,5.13 -1.56,6.65 -2.34,1.36 -4.04,3.95 -2.14,6.31 -0.68,1.5 0.04,4.08 -2.76,4.29 -2.25,0.39 -7.34,0.64 -4.79,4.05 2.45,0.93 4.06,4.45 3.33,7.05 1.14,3.61 5.07,3.17 7.39,1.37 1.4,1.71 1.46,5.08 4.64,4.36 1.07,1.7 2.94,2.2 4.19,1.56 2.83,2.78 4.94,-2.42 8.04,-0.36 2.24,0.32 0.05,-5.91 2.11,-2.26 1.33,1.79 2.94,3.05 3.85,4.95 3.33,-1.09 4.42,4.4 7.1,3.73 1.63,0.4 3.4,2.47 3.61,-0.47 1.06,-2.78 3.75,-0.39 1.71,1.41 -0.27,3 5.9,-2.28 4.47,2.93 0.46,3.12 3.19,1.32 4.4,0.59 4.42,-0.6 -2.45,-5.06 1.49,-6.94 2.21,-1.57 -0.41,-5.47 2.78,-6.83 1.14,-2.73 3.9,-5.69 3.26,-8.58 1.88,-0.52 1.26,-1.92 0.64,-3.48 1.6,-1.09 4.66,-1.22 3.88,-4.34 0.07,-2.34 -0.26,-3.73 -2.7,-3.42 -3.53,-2.05 4.19,-4.69 -0.03,-5.12 -1.97,-0.1 -2.62,-5.1 -3.28,-1.27 -2.05,-2.67 -2.92,2.59 -5.45,0.23 -2.35,0.79 -5.27,0.01 -8.15,0.79 0.15,-1.59 0.88,-6.21 -1.65,-3.46 -2.36,-1.38 1.3,-2.55 -1.24,-3.58 -0.94,-2.75 -2.25,-5.79 -4.33,-7.09 0.87,-2.25 -1.27,-2.36 -1.7,-0.43 -3.07,1.65 -2.16,-4.29 -5.46,-2.45 0.07,-1.1 1.54,-2.74 1.12,-4.43 -0.2,-2.34 -3.48,-5.41 -5.2,-7.74 -2.07,-0.04 -3.97,0.46 -4.78,-1.75 -0.22,-0.05 -0.43,-0.1 -0.65,-0.14 z&quot;,</td>
      </tr>
      <tr>
        <td id="L128" class="blob-num js-line-number" data-line-number="128"></td>
        <td id="LC128" class="blob-code blob-code-inner js-file-line">						&quot;department-77&quot; : &quot;m 360.11,130.7 c -0.75,1.23 -0.27,2.29 -2.33,1.67 -1.38,-0.38 -1.84,2.1 -2.56,0.07 -2.14,0.21 -4.49,1.91 -6.24,0.1 -2.04,-1.53 -3.2,3.4 -5.16,0.88 -1.56,1.65 -2.68,-3.86 -4.86,-1.22 -1.42,0.6 -1.4,2.29 -1.08,2.9 -0.79,0.91 -3.3,2.12 -0.93,2.41 0.92,1.64 0.15,3.36 1.66,4.95 -0.21,1.86 -2.5,3.75 -0.77,5.03 -0.42,1.69 1.07,3.83 0.45,5.54 1.88,0.5 -0.47,2.18 -0.41,3.35 -1.82,0.99 1.36,3.93 -1.65,3.64 -0.82,0.84 0.31,2.38 -1.22,3.04 1.7,1.22 -0.11,2.87 -0.29,4.11 -0.83,2.76 -0.35,5.7 -0.38,8.61 1.13,0.77 2.32,2.24 0.22,2.19 -1.67,0.77 -3.86,1.83 -3.71,4.1 -3.26,-0.23 0.46,3.05 -0.39,4.73 1.93,0.89 5.35,1.9 4.16,4.93 0.05,1.63 -0.21,2.35 -1.8,2.26 -2.59,2.58 2.06,2.09 3.18,0.95 1.95,0.94 4.16,-0.38 5.89,1.16 1.74,-0.08 3.98,-1.65 3.26,-2.69 2.16,-0.61 3.3,-0.11 2.62,2.03 1.99,0.05 3.64,-2.23 5.85,-2.23 1.28,-2.5 4.18,-3.1 5.17,-5.95 -1.75,-1.86 -0.91,-4.39 0.11,-6.51 2.23,0.08 3.58,-0.87 5.81,-1.29 2.4,1.59 4.47,-0.91 6.89,0.03 1.85,0.05 2.21,-2.32 4.09,-1.22 1.02,-1.56 -1.94,-1.95 -0.46,-3.63 -1.01,-1.71 -0.67,-2.54 1.28,-3.16 -0.64,-1.19 -1.85,-3.14 0.59,-2.27 3.2,-0.16 -0.39,-3.09 2.44,-3.84 0.11,-1.36 2.11,-1.25 2.34,-2.32 -1.35,-1.35 -2.61,-1.35 -4.33,-0.87 -0.83,-1.72 0,-2.93 0.73,-4.28 -0.27,-1.41 0.18,-2.58 -1.57,-2.81 -0.08,-1.26 -2.46,0.08 -1.43,-1.87 0.29,-0.92 3.06,-1.11 0.77,-1.96 -2,-1.6 4.65,-0.07 2.85,-3.04 -0.62,0.26 -2.18,0.96 -1.62,-0.5 -2.19,-0.35 -3.93,-1.72 -3.63,-4.09 -1.91,1.44 -2.54,-0.3 -3.11,-1.76 -2.53,1.6 -2.02,-2.84 -4.2,-3.33 -1.26,-1.06 -2.94,-1.79 -1.15,-3.4 -0.57,-2.97 -1.82,-4.38 -5.07,-4.44 z&quot;,</td>
      </tr>
      <tr>
        <td id="L129" class="blob-num js-line-number" data-line-number="129"></td>
        <td id="LC129" class="blob-code blob-code-inner js-file-line">						&quot;department-10&quot; : &quot;m 415.76,157.34 c -2.6,0.51 -5.55,-0.05 -7.71,1.48 -2.64,-2.28 -2.21,2.93 -5.08,1.84 -1.93,0.67 -1.61,4.36 -4.3,3.88 -0.4,1.61 -1.36,1.64 -2.59,1.72 1.3,3.01 -1.42,4.79 -3.84,3.13 -2.09,-1.39 -6.82,1.14 -6.65,-2.55 -0.6,-0.93 -2.3,-0.55 -2.52,-2.29 -2.04,-2.28 -2.83,1.06 -4.5,1.77 -0.06,1.25 0.93,2.82 -1.41,3.08 -3.5,-1.29 1.33,2.83 -1.65,2.81 -1.9,0.54 0.78,2.64 -0.38,3.85 2.1,0.63 -0.62,5.56 2.52,3.51 3.16,-0.12 4.15,3.44 6.03,5.22 0.01,1.47 3.08,2.04 0.93,3.9 2.08,0.85 -3.12,4.07 0.15,3.27 2.29,-0.8 2.03,4.35 4.19,2.52 1.08,-0.14 0.3,-2.78 1.94,-1.13 0.93,0.76 -0.96,2.98 1.14,2.23 2.34,1.66 1.67,5.24 3.89,6.96 2.43,1.45 -2.11,1.84 0.59,3.02 0.73,-0.46 1.14,-2.22 1.92,-0.23 0.37,1.61 -1.44,4.62 1.62,3.35 1.95,0.01 2.99,-0.54 4.79,0.26 0.99,-3.03 2.57,1.82 4.01,-0.76 0.84,-1.92 1.99,-0.84 2.76,-0.15 -0.14,-1.03 0.29,-2.65 1.27,-1.4 -0.33,2.78 3.95,3.53 3.81,0.39 2.92,-0.59 5.93,0.14 8.85,-0.56 2.39,0.31 2.85,-0.77 1.49,-2.56 2.05,-2.2 4.43,-1.32 6.94,-0.84 2.63,-1.11 0.34,-3.51 -1.25,-4.11 2.37,-0.23 3.32,-3.91 6.03,-1.87 3.03,1.11 1.67,-2.97 2.47,-4.56 1.68,-1.76 -0.94,-2.47 -0.07,-3.99 1.1,-2.25 -0.53,-3.76 -1.25,-5.67 2.38,-2.25 -3.94,-1.43 -2.88,-4.17 -1.47,-0.37 -2.51,-0.25 -2.96,-1.8 0.24,-1.72 -4.18,-2.97 -1.75,-4.03 0.72,-2.19 1.43,-3.93 -1.16,-5.04 -2.33,-0.81 -3.68,3.05 -5.35,0.57 -2.15,0.43 -4.7,-0.92 -6.23,-2.52 -2.9,-1.25 -2.44,-3.78 -2.05,-6.39 -0.16,-1 -0.29,-2.51 -1.75,-2.14 z&quot;,</td>
      </tr>
      <tr>
        <td id="L130" class="blob-num js-line-number" data-line-number="130"></td>
        <td id="LC130" class="blob-code blob-code-inner js-file-line">						&quot;department-51&quot; : &quot;m 405.08,111.51 c -1.06,0.78 -0.74,4.64 -2.69,2.03 -2.26,-0.62 -3.69,-3.04 -5.85,-0.46 -0.76,1.47 -0.53,3.07 -2.6,1.59 -2.67,0.5 -5.66,1.55 -7.69,3.27 1.02,2.06 1.46,4.73 0.89,6.32 2.55,-0.42 1.18,3.01 3.85,2.11 0.48,4.28 -5.3,-0.05 -6.19,3.06 -0.39,1.65 2.79,4.09 -0.6,4.59 -2.26,3.23 5.49,0.01 3.06,3.78 -2.35,0.83 -2.21,3.44 -4.02,4.55 -0.04,2.3 -3.69,1.38 -3.38,4.24 -1.75,1.12 0.58,4.63 -2.54,3.99 -2.46,-0.16 -1.14,0.3 -0.32,1.22 0.08,0.89 -3.17,1.69 -1.26,2.59 2.53,0.21 3.88,3.9 1.46,5.7 0.25,2.2 1.1,2.12 2.94,1.45 1.92,0.52 2.98,4.27 5.46,4.81 -0.12,4.68 6.56,0.97 8.91,3.79 3.18,-0.68 -0.17,-4.93 3.46,-4.46 0.45,-2.04 3.42,-1.33 3.65,-3.97 0.75,-2.28 4.33,-0.39 4.38,-3.49 1.36,-0.34 2.79,1.39 3.81,-0.56 2.71,0.28 5.46,-1.6 7.64,0.42 0.89,2.81 -1.6,6.2 2.08,7.6 1.6,3.05 5.89,1.61 7.51,3.56 1.84,-1.76 4.32,-2.12 5.98,-0.45 1.91,-1.07 7.38,1.87 5.1,-2.02 -2.42,-2.79 6.05,-2.46 2.44,-5.4 -1.35,-0.11 -4.14,-0.27 -1.58,-1.69 1.66,-0.63 3.72,1.24 5.25,-0.9 2.3,1.31 5.6,-0.99 4.11,-3.45 -1.93,-1.13 -3.33,-3.27 -5.05,-4.35 0.2,-1.89 3.07,-2.43 1.04,-4.46 -0.24,-2.76 1.96,-3.93 4.51,-4.61 2.25,-1.35 -0.39,-2.44 -0.39,-3.09 2.85,-0.57 0.54,-4.33 -1.51,-2.09 2.09,-1.98 1.44,-5.68 -0.12,-8.2 -0.96,-1.63 -1.81,-3.48 0.73,-4.04 -0.24,-1.82 -2.4,-2.81 -3.5,-3.66 -2.15,0.23 -1.49,3.78 -3.82,1.54 -2.45,0 -5.77,-1.84 -7.92,0.23 -2.68,0.36 -2.07,-5.98 -5.47,-3.2 -2.64,0.89 -6.12,0.77 -7.24,-2.32 -2.8,0.56 -4.24,-2.36 -6.09,-4.01 -2.61,-1.4 -5.28,-1.58 -8.44,-1.57 z&quot;,</td>
      </tr>
      <tr>
        <td id="L131" class="blob-num js-line-number" data-line-number="131"></td>
        <td id="LC131" class="blob-code blob-code-inner js-file-line">						&quot;department-02&quot; : &quot;m 388.2,68.13 c -1.08,1.13 -2.82,3.24 -4.4,1.16 -2.84,-2.2 -4.67,3.68 -7.97,1.02 -2.67,-1.47 -4.82,2.26 -7.41,-0.08 -2.13,-0.29 -5.92,2.27 -2.52,2.96 -2.98,2.53 -3.74,6.36 -5.63,9.48 -1.75,0.96 2.24,2.4 -0.4,3.91 1.95,1.43 2.51,4.94 2.65,7.7 -1.5,0.24 -0.31,2.46 -1.01,3.2 2.8,2.14 0.67,5.53 0.21,7.42 1.3,1.39 -0.62,2.75 2.02,3.19 1.86,2.58 -4.01,-0.19 -2.57,2.99 0.21,2.78 -1.91,6.35 -4.84,5.03 -3.19,2.38 3.18,2.33 1.82,4.68 0.73,2 -0.93,3.6 1.68,4.15 1.16,1.34 2.5,-0.57 2.39,2.15 3.19,1.07 -5.03,3.79 0.04,3.92 2.54,0.03 3.91,4.01 2.15,5.73 2.04,1.28 3.84,3.72 5.3,5.32 1.97,-1.81 1.27,4.11 3.47,1.27 1.13,0.14 0.62,4.1 3.08,3.73 1.02,1.15 2.26,2.18 2.67,-0.16 1.3,-1.34 1.82,-3.4 3.99,-3.73 1.01,-2.49 2.46,-4.36 4.65,-6 0.1,-2.93 -6.07,0.28 -3.5,-3.33 4.06,-0.79 -1.61,-3.63 1.16,-5.63 1.74,-0.53 6.13,1.2 5.33,-1.72 -2.24,0.27 -1.72,-2.21 -3.92,-2.36 2.32,-2 -2.35,-5.73 0.53,-7.34 2.85,-0.42 5.37,-3.57 8.29,-1.65 -0.29,-1.73 3.19,-4.87 4.55,-2.85 1.43,0.76 4.63,3.46 4.24,0.06 0.75,-1.54 -0.52,-3.16 0.75,-4.21 -1.86,-2.09 0.18,-3.94 0.86,-5.41 -1.97,-0.87 0.95,-3.51 -1.67,-4.78 -1.57,-3.69 5.08,0.31 4.01,-3.96 1.21,-2.05 5.54,-3.68 5.14,-6.49 -2.5,-0.39 -0.05,-2.22 -0.82,-3.84 1.25,-2 2.5,-4.89 -0.05,-6.15 1.79,-3.26 -2.77,-4.61 -5.35,-3.57 -2.14,-1.09 -7,-0.34 -5.08,-4.21 -1.57,-0.94 -4.83,3.39 -5.36,0.08 -2.78,-0.3 -5.86,-1.9 -8.53,-1.67 z&quot;,</td>
      </tr>
      <tr>
        <td id="L132" class="blob-num js-line-number" data-line-number="132"></td>
        <td id="LC132" class="blob-code blob-code-inner js-file-line">						&quot;department-59&quot; : &quot;m 335.57,0.12 c -3.45,1.43 -6.99,2.74 -10.76,2.39 -2.72,1.29 -8.66,1.44 -9.11,3.85 2.44,2.79 3.25,6.62 4.77,9.94 0.43,4.77 5.56,3.66 8.58,4.42 2.32,1.45 -4.63,1.65 -1.51,3.98 2.44,0.67 -1.2,3.42 2.07,2.61 2.93,3.85 6.72,1.92 9.95,3.5 2.19,-0.65 4.1,-0.87 5.68,0.87 0.41,-1.85 2.1,-1.38 0.62,-3.01 2.05,-2.57 7.25,2.09 2.69,2.82 -1.83,1.68 0.07,3.54 -0.61,5.52 2.34,0.14 3.9,-1 3.93,1.59 2.5,-1.01 7,0.2 5.64,3.54 1.27,0.39 3.92,-0.75 2.32,1.89 -3.74,0.21 -4.27,4.12 -0.66,5.49 2.67,1.86 -0.52,2.17 0.31,4.28 2.66,0.03 5.42,1.44 5.6,3.59 -3.49,-0.01 -0.66,2 -1.8,3.32 -2.94,0.76 0.82,2.08 -1.93,3.52 1.19,2.22 -2.19,4.81 1.75,6.08 2.76,1.37 5.33,-1.11 8.08,0.5 2.78,-2.8 7.12,1.76 9.94,-1.66 1.88,-2.21 4.77,3.11 6.2,-0.72 3.06,-1.45 6.64,0.94 9.78,1.44 0.46,3.12 6.54,-3.53 4.81,1.34 0,2.28 5.16,2.43 7.07,2.12 1.13,-1.37 -0.83,-4.12 2.33,-4.63 2.68,-0.88 0.57,-5.07 -0.84,-5.54 -3.3,1 -0.12,-4.14 0.06,-5.58 2.39,-1.25 2.41,-3.76 -0.41,-4.14 -0.6,4.11 -2.68,-3.09 -5.06,-3.38 -1.96,-3.39 -6.66,2.37 -9.45,-1.06 -3.02,-1.09 -5.18,0.58 -6.36,2.66 -3.42,-1.36 -0.95,-6.36 -2.22,-9.19 -1.09,-3.5 -4.72,-3.12 -7.3,-3.15 1.15,-5.24 -5.66,2.5 -7.97,-1.03 -3.9,-1.63 -1.34,-6.5 -3.82,-9.41 1.83,-3.67 -3.12,-4.71 -3.84,-8.29 -2.91,-1.52 -7.12,1 -10.06,2.09 -0.33,4.97 -4.26,1.63 -6.9,0.96 -1.64,-3.04 -3.74,-6.42 -7.35,-5.98 -1.29,-2.74 -2.17,-6.28 -0.14,-8.73 -2.25,-2.77 -2.84,-5.71 -4.09,-8.81 z m 28.08,54.5 0.01,0.01 -0.01,-0.01 z&quot;,</td>
      </tr>
      <tr>
        <td id="L133" class="blob-num js-line-number" data-line-number="133"></td>
        <td id="LC133" class="blob-code blob-code-inner js-file-line">						&quot;department-62&quot; : &quot;m 313.33,5.46 c -4.94,0.63 -9.82,2.03 -14.3,4.19 -2.31,2.03 -4.44,4.39 -7.41,5.25 0.4,3 1.9,6.23 -0.01,9.07 -1.39,2.89 0.06,6.1 -0.08,9.15 0.12,1.92 1.85,2.89 0.02,4.03 0.23,3.04 -1.19,6.37 -0.33,9.17 2.74,1.63 4.65,4.95 7.93,2.3 3.81,-2.29 6.82,4.56 9.77,1.72 1.01,1.14 -1.99,2.68 0.88,2.9 2.1,1.36 5.3,1.26 4.69,4.15 0.88,1.54 2.94,0.71 3.92,1.37 1.81,-1.07 3.99,-1.33 5.74,-1.4 1.16,1.12 1.77,-0.42 1.57,-0.98 1.33,-0.36 1.77,3.47 2.74,0.75 1.51,-1.51 6.22,0.91 4.51,2.46 -2.54,0.07 -6.33,4.05 -3.27,5.63 1.73,2.15 1.55,-3.53 4.22,-2.43 1.09,-0.01 1.95,2.52 2.26,-0.06 2.83,-0.7 -0.14,2.46 2.59,2.02 1.28,-0.01 4.09,2 4.68,1.23 -1.22,-1.42 0.73,-3.47 2.15,-1.5 3.8,-0.04 -3.11,6.76 1.65,4.07 2.16,-2.39 3.64,-1.2 4.04,1.36 2.23,-1.54 4.16,-0.79 6.67,-1.69 1.7,0.68 3.25,0.84 2.92,-1.52 2.01,-0.93 -0.86,-3.26 1.69,-4.17 -3.08,-1.56 3.06,-1.88 0.19,-3.89 0.22,-1.46 4.13,-1.5 1.13,-2.69 -0.34,-2.78 -7.17,-0.62 -4.12,-4.27 0.8,-2.23 -5.36,-4.49 -3.06,-6.23 1.03,-0.79 5.01,-2.22 2.55,-3.36 -2.01,2.19 -1.83,-1.12 -1.83,-2.28 -1.69,-2.27 -3.83,-0.79 -5.87,-1.11 1.15,-3.86 -4.88,0.62 -3.97,-3.05 1.99,-1.08 -1.84,-2.64 0.61,-4.04 1.4,-1.06 3.51,-1.23 1.17,-2.9 -1.51,-1.43 -4.89,0 -2.23,1.47 -1.85,-0.59 -1.52,3.3 -3.1,0.89 -1.9,-1.78 -4.14,1.01 -6.2,-0.92 -1.66,1.28 -2.66,-1.12 -4.47,0.08 -1.69,-1.59 -4.29,-2.33 -5.63,-3.51 2,-1.35 -3.65,-3.85 0.56,-4.64 3.01,-2.03 -3.3,-1.35 -4.61,-1.78 -3.99,-1.02 -3.27,-5.59 -5.16,-8.44 -1.11,-2.34 -2,-6.31 -5.19,-6.38 z&quot;,</td>
      </tr>
      <tr>
        <td id="L134" class="blob-num js-line-number" data-line-number="134"></td>
        <td id="LC134" class="blob-code blob-code-inner js-file-line">						&quot;department-08&quot; : &quot;m 440.07,60.88 c -1.81,2.16 -4.2,3.74 -5.88,5.87 0.42,3.23 -0.62,6.85 -4.6,6.61 -2.61,1.4 -5.4,3.78 -8.53,2.23 -2.57,-0.31 -6.87,-3.07 -8.21,0.49 -1.09,2.27 2.57,2.05 1.26,4.47 -0.9,1.91 -2.03,4.96 -1.4,6.42 2.68,1.57 -1.58,4.47 -2.94,5.51 -2.03,1.01 -1.06,5.37 -4.36,3.7 -3.54,0.85 2.51,3.79 -0.29,5.51 1.51,0.87 0.58,2.56 -0.65,3.44 -0.53,1.71 1.98,3.37 -0.03,4.16 0.01,4.05 5.16,0.95 6.98,2.81 3.3,0.55 4.18,4.27 7.37,4.91 1.8,0.07 3.13,4.15 6,2.59 2.07,-0.07 4.96,-2.29 5.47,0.74 0.38,2.71 2.61,2.41 4.09,0.8 2.57,1.18 5.4,0.24 7.56,1.64 0.31,-2.7 3.11,-2.45 4.13,-0.68 1.4,-1.13 3.89,-1.64 4.64,-3.09 -2.15,-1.79 -0.62,-5.71 2.04,-5.88 0.24,-1.22 -1.21,-1.95 0.54,-2.89 0.24,-2.32 -1.77,-3.52 -2.04,-5.72 1.86,-0.63 0.83,-2.98 2.1,-3.97 -0.49,-2.87 2.16,-0.91 2.97,0.03 2.69,-1.68 3.87,3.39 6.05,0.41 0.28,-2.43 4.57,-1.6 3.3,-4.01 -0.97,-0.75 -4.08,1.55 -3.04,-1.15 1.75,-1.77 -2.34,-4.79 -3.97,-3 -1.63,-0.09 -2.52,-1.03 -3.35,-1.82 -2.04,-0.2 -1.16,-4.65 -4.28,-3.56 -2.09,-0.97 -3.75,-3.12 -6.22,-1.46 -1.91,0.12 -3.56,-0.3 -2.44,-2.42 -2.07,-2.68 2.55,-6.08 -1.42,-8.03 -4.13,-0.79 1.05,-4.77 -0.06,-7.24 0.2,-2.35 3.01,-3.4 2.16,-5.95 -1.43,-0.71 -2.14,0.48 -2.93,-1.47 z&quot;,</td>
      </tr>
      <tr>
        <td id="L135" class="blob-num js-line-number" data-line-number="135"></td>
        <td id="LC135" class="blob-code blob-code-inner js-file-line">						&quot;department-55&quot; : &quot;m 466.47,97.47 c -1.56,1.83 -3.96,2.91 -5.49,4.69 -1.73,-0.62 -3.36,-2.29 -5.13,-1.66 -3.57,-3.74 -2.07,3.57 -4.83,4.43 1.86,1.88 2.97,4.89 1.69,6.85 0.61,2.43 -4.88,3.04 -2.52,6.02 2.38,3.31 -6.19,2.92 -2.28,6.6 -4.21,1.78 0.99,5.9 0.55,8.83 -0.1,1.57 -1.24,3.24 0.94,2.92 1.75,1.64 -1.92,3.15 0.48,3.93 0.25,3.59 -6.19,2.07 -5.18,5.89 1.08,1.97 -0.23,3.47 -1.14,4.72 1.38,2.47 5.49,3.27 5.15,6.61 0.23,1.76 -1.52,5.98 0.78,6.29 1.9,-2.79 1.64,2.85 3.89,1.37 2.31,2.74 5.53,4.67 8.96,5.55 2.27,1.43 4.35,3.02 5.92,5.23 2.69,2.59 4.85,-1.27 7.77,-0.65 1.95,-0.75 1.99,-2.61 4.21,-1.43 3.14,0.06 4.5,-5.18 1.4,-6.29 -3.87,-2.46 6.35,-3.69 1.46,-4.42 -1.47,-2.21 0.74,-5.44 -1.65,-7.38 0.52,-3.01 3.49,-5.5 2.03,-8.71 1.74,-1.41 -2.37,-3.07 0.56,-4.22 1.59,-0.69 4.2,-1.75 1.55,-3.18 -1.32,-1.7 3.57,-5.15 -0.4,-5.57 1.51,-1.93 -0.24,-3.53 -1.91,-2.99 -2.09,-1.69 1.38,-6.16 -1.64,-5.8 -0.54,-2.63 -0.07,-4.79 1.7,-6.78 -2.19,-0.64 -1.63,-2.43 -1.84,-4.23 -1.39,-1.72 -2.89,-6.03 -5.8,-3.74 -2.4,-0.05 -3.98,1.51 -4.61,0.54 -0.96,-0.51 -0.02,-0.62 -1.25,-1.61 0.46,-1.47 -0.85,-2.06 -0.1,-2.7 -0.17,-2.17 1.28,-0.21 0.11,-1.81 -0.06,-2.69 -0.83,-5.88 -3.37,-7.28 z&quot;,</td>
      </tr>
      <tr>
        <td id="L136" class="blob-num js-line-number" data-line-number="136"></td>
        <td id="LC136" class="blob-code blob-code-inner js-file-line">						&quot;department-54&quot; : &quot;m 483.26,101.56 c -1.75,2.39 -6.72,-0.76 -7.03,2.38 -2.62,-1.44 -7.36,1.12 -6.17,4.43 0.74,4.88 5.26,0.58 8.1,1.48 2.96,1.01 3.57,5.58 4.1,7.38 3.12,1.31 -1.93,3.72 -0.52,5.95 -0.87,2.35 2.62,1.44 1.12,3.56 0.09,2.56 -0.17,4.4 2.68,4.39 0.95,1.44 -0.85,2.5 1.32,3.1 0.08,2.43 -2.65,4.77 0.06,6.73 -1.86,1.53 -5.42,2.68 -2.94,4.96 -0.32,3.14 0.42,6.53 -2.29,8.78 0.3,2.26 1.85,3.57 0.92,5.93 -0.21,2.42 4.1,2.54 0.74,3.73 -2.75,0.52 -2.79,3.37 -0.09,3.76 0.33,2.01 0.1,5.32 3,2.95 5.39,-1.2 1.3,5.69 5.29,7.31 -0.38,3.55 5.14,2.54 6.11,0.87 0.8,0.45 2.56,2.67 3.02,-0.32 0.4,-3.41 3.98,0.7 5.58,-2.34 2.07,-1.7 2.85,1.78 5.26,0.83 2.41,0.96 5.78,-1.97 8.72,-1.33 -0.11,-2.51 2.69,-4.44 3.49,-1.11 1.87,2.12 5.7,3.02 8.46,2.03 1.11,-2.51 3,0.55 4.43,-2.06 1.4,-3.3 8.67,-2.58 5.72,-7.33 -1.28,-1.26 -2.12,-2.52 -2.84,-3.74 -2.12,0.62 -3.12,-2.23 -5.19,-0.6 -3.43,-1.47 -6.2,-3.18 -9.79,-3.87 -0.04,-2.22 -3.9,-2.63 -5.43,-4.68 -2.97,-0.67 -5.52,-2.5 -8.38,-2.2 -1.35,-2.37 -4.49,-3.45 -2.73,-6.5 1.93,-3.82 -4.9,-3.21 -7.26,-3.68 -1.33,-1.55 -2.62,-2.04 -4.55,-3.04 0.53,-3.54 -7.57,-4.55 -4.54,-8.33 3.1,1.07 1.22,-3.19 3.24,-3.88 -1.85,-1.34 -2.22,-2.92 0.05,-3.88 0.24,-1.64 -0.87,-4.88 -1.53,-5.53 -2.45,-0.97 -0.9,-3.36 -2.63,-4.79 -0.94,-2.62 2.2,-6.94 -2.47,-7.44 -1.91,-1.02 -2.61,-3.63 -5,-3.91 z&quot;,</td>
      </tr>
      <tr>
        <td id="L137" class="blob-num js-line-number" data-line-number="137"></td>
        <td id="LC137" class="blob-code blob-code-inner js-file-line">						&quot;department-57&quot; : &quot;m 503.4,104.95 c -3.5,0.04 -5.26,4.42 -8.98,3.78 -1.89,-0.4 -2.66,-4.83 -4.84,-2.71 4.17,0.85 -0.69,5.81 2.03,8.08 0.95,1.12 1.47,1.12 0.16,1.85 2.72,1.47 3.97,5.18 2.78,8.12 -3.16,1.23 2.9,3.39 -0.76,4.28 0.68,2.17 0.05,3.22 -2.29,2.94 -2.22,3.61 4.41,3.78 4.47,6.79 0.32,2.5 4.34,1.92 4.61,4.09 2.63,0.22 7.9,-0.18 8.05,3.09 -1.51,2.09 -1.02,3.76 1.16,4.61 -0.07,2.41 2.71,3.1 4.16,2.64 2.31,1.86 5.93,1.31 7.61,4.01 3.25,1.89 6.08,3.97 9.68,5.11 1.62,1.34 4.4,1.49 5.37,1.07 1.15,1.63 4.32,0.61 3.99,3.06 2.04,2.55 6.14,5.26 8.81,1.93 1.69,-2.04 5.6,-6.38 2.03,-8.09 -0.63,-2.26 4.24,-5.88 0.71,-8.42 -2.28,-1.08 -5.5,-4.67 -6.48,-0.31 -1.32,2.17 -2.68,0.9 -2.94,-0.66 -3.5,-1.06 4.07,-2.79 -0.09,-3.01 -2.21,-1.11 -5.81,-2.3 -5.04,-4.57 1.13,0.06 2.3,-2.29 3.7,-2.54 0.74,-1.99 0.82,-7.28 3.45,-6.47 0.09,2.59 1.3,4.57 3.75,4.84 3.24,0.28 5.22,3.37 8.36,2.73 2.95,-1.6 5.64,0.34 8.22,0.72 1.73,-1.99 3.39,-5.75 3.26,-7.88 -3.15,-1.08 -5.79,-2.77 -6.37,-6.36 -2.47,-1.1 -4.98,-1.26 -6.78,1.45 -3.22,2.32 -7.72,1.44 -11.17,-0.38 -0.64,3.79 -3.96,0.62 -3.06,-1.79 -1.61,-2.56 -5.77,-3.52 -8.36,-2.33 2.56,4.39 -5.29,4.06 -5.55,1.2 0.78,-2.3 -2.24,-2.11 -2.29,-4.46 -1.24,-2.84 -6.04,-4.38 -3.87,-7.88 -2.52,-2.26 -3.82,-6.64 -8.27,-6.11 -4.17,1.53 -5.59,-3.04 -9.23,-2.45 z&quot;,</td>
      </tr>
      <tr>
        <td id="L138" class="blob-num js-line-number" data-line-number="138"></td>
        <td id="LC138" class="blob-code blob-code-inner js-file-line">						&quot;department-67&quot; : &quot;m 544.44,133.33 c -2.55,1.2 -1.86,5.34 -3.54,7.57 -2.79,-0.45 -3.98,5.32 -0.38,4.93 0.87,1.03 5.75,1.83 2.14,2.53 -1.78,1.5 1.91,2.4 0.8,3.44 3.07,0.38 2.8,-5.61 5.59,-2.68 1.27,0.5 2.75,1.06 3.36,2.31 3.21,1.88 -0.45,5.47 -1.04,7.67 0.4,1.75 3.37,1.12 1.47,2.94 -0.9,2.92 -2.34,6.34 -5.54,7.14 -1.52,-0.27 -6.22,0.31 -2.38,1.08 1.92,0.81 -2.32,1.02 0.26,2.27 -0.26,2.11 -1.22,5.21 -0.98,7.34 -1.59,2.69 3.49,1.95 4.06,2.53 1.12,2.38 5.28,1.06 5.74,4.01 2.04,-0.84 -0.91,2.57 1.9,1.72 3.01,0.58 6.32,2.58 6.2,5.56 1.67,1.12 3.39,4.4 5.2,1.29 0.87,-3.2 3.75,-5.3 4.22,-8.66 0.15,-2.7 3.74,-3.64 2.22,-6.76 -0.27,-3.01 1.17,-6.05 2.5,-8.7 1.39,-2.29 -0.7,-5.94 1.56,-8.31 1.96,-2.54 5.71,-3.61 6.25,-7.2 0.97,-1.38 2.5,-0.59 3.09,-2.39 3.71,-1.2 3.61,-5.01 5.11,-7.95 0.24,-2.03 5.28,-4.42 1.59,-4.91 -3.51,-0.14 -6.34,-2.15 -9.28,-3.81 -2.69,-1.53 -5.76,0.29 -8.43,-1.4 -2.54,1.19 -6.23,-0.86 -8.22,1.79 -0.69,2.41 -2.45,7.76 -5.69,4.83 -2.43,-2.51 -5.76,1.35 -8.43,-0.25 -1.12,-1.59 -3.01,-2.5 -4.57,-2.09 -2.06,-1.13 -5.18,-2.13 -4.56,-5.04 0.33,-0.23 0.21,-0.84 -0.21,-0.81 z&quot;,</td>
      </tr>
      <tr>
        <td id="L139" class="blob-num js-line-number" data-line-number="139"></td>
        <td id="LC139" class="blob-code blob-code-inner js-file-line">						&quot;department-88&quot; : &quot;m 543.7,170.72 c -3.31,1.38 -6.33,2.9 -8.64,5.73 -1.29,0.67 -1.97,-1.71 -3,0.67 -1.48,2.53 -4.46,-1.14 -6.53,-0.37 -3.07,0.39 -1.42,-5.29 -4.45,-2.86 -1.72,1.06 0.93,4.33 -2.07,2.2 -1.78,0.74 -4.05,0.76 -5.72,1.72 -1.57,1.83 -1.69,-1.56 -3.59,-0.23 -1.77,0.14 -2.17,-3.2 -3.48,-0.63 -1.05,2.66 -5.79,-1 -5.2,1.97 -0.89,2.75 -2.59,1.71 -3.28,0.37 -0.1,2.4 -3.59,0.58 -5.16,1.87 -1.7,-0.72 0.13,-3.65 -2.1,-3.15 -3.28,-1.76 1.05,-7.74 -3.76,-6.9 -1.91,1.57 -3.93,0.03 -4.94,2.56 -1.62,0.54 -3.6,-1.45 -4.31,0.83 -0.98,2.28 -4.98,-0.54 -5.76,2.63 -1.49,-1.12 -4.76,0.24 -4.44,1.84 2.72,-0.76 -1.5,4.16 1.48,2.83 2.58,-2.8 4.27,0.92 5.47,2.86 0.99,2.29 2.44,-0.84 3.66,1.62 0.19,1.46 -0.14,2.91 2.21,2.73 1.05,0.81 2.84,3.4 0.16,2.99 -1.16,2.1 -0.8,4.9 -2.74,6.18 0.01,1.72 3.18,0.08 3.76,2.45 2.71,0.96 3.73,3.61 3.02,6.15 1.1,2.31 3.31,-2.88 3.5,0.86 1.43,3.89 3.56,-4.88 4.18,-0.76 -1.87,1.59 0.22,2.12 0.99,0.26 2.44,-0.34 2.63,-4.83 6.01,-3.79 2.78,-2.08 1.94,3.16 3.04,3.81 1.67,1.1 3.1,2.11 4.88,0.16 2.8,0.02 6.14,-1.3 7.82,1.99 0.57,3.89 4.42,1.42 5.62,-0.82 2.89,-1.35 3.54,3.7 6.5,4.05 2.19,0.9 3.46,2.55 5.11,3.85 2.21,-0.74 5.19,-1.96 3.36,-4.73 1.56,-1.66 0.35,-4.44 1.89,-6.56 0.98,-1.7 3.7,-2.62 3.88,-5.25 1.52,-1.58 3,-3.43 1.6,-5.14 1.49,-2.96 3.07,-5.84 4.54,-8.75 0.95,-1.35 2.26,-2.99 0.28,-4.02 -1.87,1.29 -5.67,-0.97 -2.92,-2.78 -2.18,-1.78 1.85,-5.54 -0.21,-7.07 -0.57,-0.2 -0.01,-1.38 -0.66,-1.38 z&quot;,</td>
      </tr>
      <tr>
        <td id="L140" class="blob-num js-line-number" data-line-number="140"></td>
        <td id="LC140" class="blob-code blob-code-inner js-file-line">						&quot;department-52&quot; : &quot;m 446.82,158.96 c -1.69,0.91 -3.13,-0.45 -4.82,1.2 -1.12,-0.83 -4.57,-0.69 -3.54,0.9 2.8,-1.2 4.68,3.32 1.31,3.37 -2.26,0.28 -2.04,1.83 -1.08,2.97 1.74,4.14 -5.82,-1.2 -5.38,2.99 -0.5,1.16 -1.78,3.02 -1.22,3.88 2.37,0.94 2.16,4.62 5.26,4.46 -0.97,2.99 5.41,1.68 2.86,4.7 2.62,1.68 0.37,4.97 1.38,6.77 1.02,1.49 -1.35,3.52 -0.54,5.29 0.17,4.44 -5.3,-1.1 -6.39,2.93 -2.48,1.02 2.31,2.62 0.41,4.4 1.49,1.78 5.61,0.36 3.83,3.87 2.37,-0.59 4.42,1.86 1.79,3.34 0.65,2.75 2.75,-2.78 3.64,0.5 0.65,2.55 3.6,4.14 3.33,6.7 -1.31,0.89 -4.49,2.9 -1.32,2.84 1.47,1.51 -1.34,5.58 1.92,4.46 1.63,-2.16 2.42,0.63 2.94,1.7 1.79,1.42 3.81,1.4 4.82,-0.8 0.79,0.32 -0.13,2.53 1.75,2.49 0.96,1.39 3.18,1.14 1.74,3.15 0.89,2.65 3.78,-3.01 5.24,-0.13 1.75,-1.89 1.15,-6.06 4.57,-5.11 1.28,-1.4 3.49,1.3 4.33,-1.4 1.59,-1.92 1.63,2.72 3.95,1.22 2.18,-0.12 2.71,-1.17 2.09,-3.01 0.93,-1.34 1.22,-2.86 -0.38,-3.56 -0.59,-2.58 1.37,-2.98 3.06,-3.3 -0.71,-3.1 2.46,-1.42 3.57,-1.95 -0.16,-2.01 1.36,-3.53 2.99,-3.36 -0.29,-2.42 -2.17,-4.47 -4.19,-2.78 -1.26,-1.95 0.41,-5.52 -3.04,-6.35 -1,-1.34 -2.58,-2.41 -4.02,-2.13 -1.13,-1.43 1.6,-1.92 0.97,-3.42 1.1,-1.79 0.88,-4.33 2.89,-4.52 -0.46,-2.76 -4.86,-1.71 -3.68,-4.79 -1.34,-2.4 -3.06,0.93 -3.95,-2 -1.16,-2.97 -3.69,-4.38 -6.2,-2.11 -0.59,-1.91 1.12,-3.24 -1.32,-3.92 1.85,-0.41 3.47,-2.52 0.93,-3.26 -0.38,-1.87 -1.16,-2.02 -2.78,-2.58 -1.73,-3.16 -6.41,-1.82 -8.19,-4.99 -2.15,-0.46 -2.78,-2.81 -5.04,-3 -0.12,-2.21 -1.01,-1.61 -2.26,-0.66 -2.79,-0.35 1.41,-5.66 -2.22,-4.93 z&quot;,</td>
      </tr>
      <tr>
        <td id="L141" class="blob-num js-line-number" data-line-number="141"></td>
        <td id="LC141" class="blob-code blob-code-inner js-file-line">						&quot;department-70&quot; : &quot;m 499.88,202.89 c -2.63,0.3 -4.89,2.11 -5.97,4.12 -0.94,0.91 -3.97,2.32 -2.12,-0.03 0.13,-1.92 -1.88,-0.34 -1.76,0.64 -1.02,1.34 -0.98,3.88 -3.06,3.55 -0.55,1.66 -1.23,4.46 -3.43,2.67 -1.42,0.7 -1.13,3.58 -3.32,2.54 -2.26,2.15 1.83,3.96 -0.2,6.21 1.24,3.12 -4.32,4.77 -5.32,1.82 -0.58,-0.92 -2.73,2.87 -4.37,1.01 -1.22,1.14 -4.49,-0.07 -3.8,2.59 -2.11,1.09 0.1,3.94 1.06,1.41 2.21,-1.57 4.14,3.91 2.96,5.69 -0.66,2.07 -2.95,2.72 -4.23,3.24 1.21,1.06 -1.76,2.05 0.86,1.83 2.25,0.29 -0.16,6.1 3.34,4.24 1.79,2.16 -1.88,5.33 1.36,5.71 1.44,2.16 3.91,4.38 6.57,2.71 2.27,-0.86 4.59,0.16 6.71,-1.75 2.79,-1.14 5.72,-4.18 8.47,-2.76 2.5,-0.09 4.56,-1.97 5.85,-3.76 1.83,0.46 2.61,-0.36 2.86,-1.77 2.63,-0.46 5.27,-1.6 5.54,-4.7 2.29,-1.29 5.83,-3.32 7.88,-0.71 1.23,-0.95 5.65,1.5 4.64,-1.81 -0.18,-2.44 4.57,1.54 3.74,-2.01 -0.12,-2.68 3.06,0.48 4.42,0.6 2.85,1.79 2.94,-3.34 1.04,-4.6 1.68,-2.26 -0.76,-5 -0.83,-7.47 -0.79,-2.86 4.43,-4.21 1.79,-6.71 -2.08,-2.66 -6.24,-2.87 -7.71,-6.14 -2.5,-2.92 -3.93,3.02 -6.8,2.39 -1.62,-1.8 -2.57,-4.88 -5.66,-4.53 -2.96,-0.21 -6.08,3.12 -8.15,0.41 -2.4,-0.51 0.23,-4.03 -2.37,-4.63 z&quot;,</td>
      </tr>
      <tr>
        <td id="L142" class="blob-num js-line-number" data-line-number="142"></td>
        <td id="LC142" class="blob-code blob-code-inner js-file-line">						&quot;department-21&quot; : &quot;m 430.26,202.39 c -2.98,-0.36 -2.28,3.5 -2.89,4.09 -3.52,0.85 -7.72,-0.28 -10.91,1.13 0.12,1.91 0.16,3.7 -1.78,4.39 -1.43,2.57 2.23,2.59 2.78,2.96 0.78,2.82 0.56,7.26 -3.23,7.04 -0.11,2.16 1.99,3.62 -1,3.9 0.72,2.94 -2.41,6.52 -3.86,9.44 -2.44,2.06 0.03,6.34 -3.4,7.86 -0.01,1.52 1.54,3.57 2.08,4.44 2.08,-1.74 -0.71,3.97 0.05,5.35 0.76,2.06 4.84,0.48 4.74,3.88 -1.32,3.42 1.69,6.38 5.01,6.9 1.3,1.42 0.65,2.78 2.51,1.23 2.03,0.22 0.19,2.75 2.63,2.77 2.7,1.39 5.44,1.37 6.15,4.62 1.34,1.99 4.7,1.98 4.57,4.24 2.88,-1.34 6.42,-1.22 9.16,-3.33 2.31,-0.8 6.07,-0.86 8.14,-1.17 2.91,2.58 6.21,-1.12 9.25,-0.89 2.24,-0.61 1.63,-2.43 0.75,-3.34 1.62,-2.89 6.07,-2.65 6.78,-6.47 1.41,-2.73 2.01,-5.54 2.73,-8.48 0.14,-1.92 1.96,-2.74 -0.25,-3.51 0.43,-2.24 1.54,-5.31 -1.69,-5.06 -0.44,-1.89 -1.3,-4.9 -2.86,-4.55 0.22,-3.37 5.14,-1.91 4.96,-5.91 0.76,-2.96 -2.67,-7.08 -4.51,-2.82 -2.22,-0.25 -3.54,-1.43 -5.3,0.74 -2.39,1.02 -0.78,-3.81 -3.53,-3.94 -1.77,-1.18 -0.62,-3.19 -2.39,-0.9 -3.64,2.12 -4.58,-4.93 -7.28,-2.21 -2.89,-0.45 0.78,-4.91 -3.01,-5.07 0.9,-1.64 5.08,-3.23 1.85,-5.04 -1.35,-1.96 -2.46,-6.59 -4.91,-3.77 -2.57,-0.44 2.15,-3.15 -0.94,-3.86 -1.96,-0.39 -2.06,-0.68 -1.78,-2.38 -2.58,-1.59 -5.78,-1.16 -8.59,-2.28 l 0,0 z&quot;,</td>
      </tr>
      <tr>
        <td id="L143" class="blob-num js-line-number" data-line-number="143"></td>
        <td id="LC143" class="blob-code blob-code-inner js-file-line">						<span class="pl-s"><span class="pl-pds">&quot;</span>department-25<span class="pl-pds">&quot;</span></span> <span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>m 524.75,232.72 c 0.6,3.47 -5.06,1.11 -4.41,4.65 -1.59,0.18 -4.21,0.28 -5.1,0.07 -2.83,-2.93 -7.31,0.27 -8.34,3.45 -1.29,2.51 -4.23,1.18 -5.23,3.59 -1.44,0.48 -2.41,0.42 -2.71,1.78 -2.17,0.44 -3.6,3.16 -6.39,2.02 -3.22,-0.12 -5.72,2.6 -8.74,3.57 -3.03,0.32 -3.9,3.34 -1.23,5.03 3.1,1.51 4.18,4.87 1.57,7.47 0.1,1.6 -1.31,3.03 -1.29,4.53 1.26,1.41 2.75,-3.16 3.11,0.11 0.9,2.49 4.55,-0.29 4.63,2.13 3.8,0.81 1.81,4.9 4.19,7.22 0.91,2.91 5.17,1.46 6.56,4.25 3.53,2.93 0.14,6.33 -2.84,7.54 -1.4,1.89 0.42,3.62 -1.39,5.19 -0.75,2.81 3.69,5.73 3.76,1.72 2.39,-2.03 4.37,-4.58 7.12,-6.18 2.26,-1.76 5.45,-2.91 6.57,-5.72 -0.74,-2.93 1.48,-6 -0.08,-9.15 0.11,-4.19 6.86,-3.29 9.42,-5.9 2.72,-1.98 2.28,-6.41 5.92,-7.6 2.76,-2.22 4.53,-5.44 7.39,-7.56 -0.61,-3.67 3.46,-4.22 4.78,-6.73 -0.15,-3.82 -4.97,0.07 -7.07,-1.46 0.7,-1.9 3.21,-4.13 1.45,-6.71 -0.76,-1.48 -0.67,-2.19 0.61,-2.92 -0.66,-3.47 -5.22,-3.74 -7.78,-2.34 -1.29,-1.12 -3.19,-0.98 -4.5,-2.06 z<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L144" class="blob-num js-line-number" data-line-number="144"></td>
        <td id="LC144" class="blob-code blob-code-inner js-file-line">						<span class="pl-s"><span class="pl-pds">&quot;</span>department-2B<span class="pl-pds">&quot;</span></span> <span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>m 591.47,517.82 c -3.8,0.59 0.96,5.58 -2.34,7.11 0.41,2.37 -1.56,4.36 0.27,6.51 0.91,2.65 0.16,5.25 -1.21,7.52 -1.7,1.4 -2.28,-3.59 -4.88,-2.82 -2.72,-0.68 -5.78,0.73 -6.51,3.55 -0.96,3.57 -5.53,1.85 -7.86,3.52 -1.89,1.06 -3.87,1.71 -4.61,3.96 -1.27,0.02 -3.62,-0.97 -3.17,1.52 -0.83,1.46 -4.01,3 -1.97,4.89 -0.74,1.76 -0.34,3.49 -2.71,3.49 -0.21,1.44 -2.22,2.88 0.58,2.71 2.53,1.11 5.12,2.12 7.69,3.24 1.52,0.72 3.8,-1.59 3.24,1.35 1.14,3.16 4.05,4.22 6.73,6.16 3.36,0.28 1.41,5.5 4.55,6.47 1.71,1.96 0.79,6.36 4.83,5.7 0.18,2.3 0.59,4.8 0.39,7.09 3.14,0.81 -1.89,5.25 2.18,4.96 1.78,0.52 2.82,0.98 4.16,-0.94 3.62,-1.36 0.49,-5.59 2.73,-7.46 1.3,-1.69 2.64,-3.75 1.77,-5.45 1.89,-0.05 4.02,-2.43 3.98,-4.66 -3.67,0.56 1.98,-2.55 0.4,-4.61 0.47,-4.5 -0.6,-8.88 -1.01,-13.3 -0.14,-3.75 0.34,-7.67 -0.54,-11.31 -2.55,0.11 -3.67,-4.24 -3.35,-6.45 -0.43,-3.66 1.56,-7.1 1.67,-10.65 -0.63,-3.67 -1.07,-7.33 -1.55,-11 -0.76,-1.12 -2.26,-1.12 -3.47,-1.1 z<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L145" class="blob-num js-line-number" data-line-number="145"></td>
        <td id="LC145" class="blob-code blob-code-inner js-file-line">						&quot;department-2A&quot; : &quot;m 553.92,559.49 c -0.76,0.55 -0.1,3.85 1.13,1.96 1.53,-0.6 3.16,1.13 1.04,1.7 0.18,1.06 4.56,1.95 3.28,3.75 -1.7,0.83 -4.95,1.13 -5.71,2.43 1.47,0.55 1.4,3.03 1,3.92 1.78,0.17 -1.16,0.99 0.63,1.63 0.63,1.3 2.89,1.78 3.93,2.6 2.01,-0.69 1.72,2.93 3.31,3.71 -1.37,1.54 -4.97,1.78 -3.83,4.58 -1,1.17 -4.84,0.3 -2.28,2.46 0.58,1.07 -0.7,3.38 1.57,2.3 2.41,0.81 4.08,-2.02 6.12,-1.18 1.97,1.46 -0.22,3.37 0.14,5 -2.75,0 1.8,1.85 -1.02,2.54 -3.01,0.03 -0.83,3.83 -3.9,3.99 -1.68,0.23 1.57,0.7 1.54,1.65 1.76,-0.59 3.68,-1.62 3.39,1.11 1.89,0.2 4.59,0.62 6.1,1.72 -1.54,1.28 -2.78,3.54 -5.39,3.37 -1.08,2.57 -0.44,5.65 2.26,6.65 0.47,1.48 3.07,1.49 4.07,2.79 2.06,-0.18 4.37,2.72 5.98,1.13 0.61,-0.03 -0.33,2.68 1.6,1.9 1.78,0.68 -1.94,3.73 1.39,3.43 1.92,2.48 5.07,2.16 5.35,-1.31 -0.28,-1.01 -2.21,1.4 -1.26,-0.4 -1.13,-2.4 4.15,-2.95 2.21,-5.91 -0.37,-2.45 4.29,-3.07 3.59,-5.68 -1.11,-1.47 -3.9,2.07 -2.85,-0.95 0.15,-2.4 3.01,0.56 2.82,-1.99 2.59,-0.18 0.07,-3.36 2.35,-4.13 0.15,-3.28 0.23,-6.85 -0.14,-10.22 -1.57,-1.53 -3.07,3.01 -4.83,0.98 -2.75,0.63 -3.37,-1.87 -1.99,-3.78 0.22,-1.35 -2.56,-0.55 -1.08,-2.17 -0.85,-2.32 1.32,-7.41 -2.67,-6.39 -2.45,-0.98 -0.65,-4.44 -2.73,-5.65 -2.85,-1.24 -1.36,-6.19 -4.82,-6.53 -1.64,-1.96 -4.77,-2 -5.5,-4.65 -1.21,-1.02 -0.51,-3.66 -2.85,-2.55 -2.75,-0.46 -5.3,-1.82 -7.74,-2.91 -1.28,-0.57 -2.84,-0.72 -4.21,-0.9 z&quot;,</td>
      </tr>
      <tr>
        <td id="L146" class="blob-num js-line-number" data-line-number="146"></td>
        <td id="LC146" class="blob-code blob-code-inner js-file-line">						<span class="pl-s"><span class="pl-pds">&quot;</span>department-66<span class="pl-pds">&quot;</span></span> <span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>m 350.33,540.74 c -2.96,0.38 -4.31,2.8 -5.6,5.05 -3.53,0.71 -7.2,-0.41 -10.77,-0.57 -2.35,1.71 -6.82,-1.75 -7.77,1.56 0.2,2.13 1.85,4.41 0.81,6.44 -1.56,1.89 -4.34,1.3 -5.68,3.47 -1.35,1.08 -2.18,1.99 -3.65,0.52 -2.39,0.04 -5.76,-0.02 -7.25,1.69 -0.99,2.71 -4.23,1.36 -5.45,3.77 -3.15,-0.36 -6.54,2.28 -5.14,5.7 2.43,0.62 5.15,0.58 6.86,2.76 2.19,0.36 3.92,1.1 3.79,3.75 0.25,2.56 3.21,3.71 5.32,2.52 1.96,-1.04 2.2,-4.45 4.97,-3.96 2.58,-0.15 5.03,-1.38 7.33,0.7 1.62,1.14 4.07,1.03 4.94,3.03 1.26,1.86 4.32,3.14 5.35,0.56 1.73,0.75 6.82,2.34 4.14,-1.14 0.71,-2.52 4.05,-2.95 6.3,-2.62 1.56,-1.63 3.48,-3.18 5.81,-2.8 0.99,-2.12 3.1,-0.12 4.88,-0.88 1.63,1.07 2.93,3.67 5.54,2.51 3.2,-0.39 -1.16,-3.71 -1.44,-5.38 -2.92,-1.29 -2.81,-4.63 -3.06,-7.37 0.78,-2.2 -2.64,-2.22 -1.43,-4.12 2.29,1.97 1.16,-2.93 1.55,-4.24 0.36,-2.22 -0.89,-3.89 -3.17,-3.82 -1.26,-1.48 0.41,-4.01 -2.35,-4.33 -1.89,-0.44 -3.32,-1.87 -4.85,-2.81 z<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L147" class="blob-num js-line-number" data-line-number="147"></td>
        <td id="LC147" class="blob-code blob-code-inner js-file-line">						&quot;department-01&quot; : &quot;m 445.43,302.59 c -1.44,3.02 -1.75,6.16 -3.18,9.18 -0.78,3.16 -1.85,6.34 -2.91,9.5 -0.74,1.88 -1.31,3.79 -0.09,5.37 -0.73,2.05 -2.97,3.67 -1.95,5.9 -1.67,2.26 0.87,5.73 -1.18,7.83 1.88,0.01 3.46,1.61 3.99,2.62 2.16,-1.53 3.89,1.88 4.07,3.41 0.92,1.26 -0.03,3.77 2.46,2.77 2.89,0.46 5.98,-0.89 8.76,0.39 1.35,2.24 3.89,2.93 5.42,0.31 1.18,-1.7 1.66,-5.65 4.09,-5.27 2.02,1.24 3.75,2.88 3.08,4.98 1.95,2.32 3.67,4.97 5.93,6.73 1.33,1.23 0.17,0.8 -0.53,0.61 0.61,1.8 3.11,2.49 3.34,4.83 0.97,0.84 1.38,-1.89 2.87,-1.59 -0.3,-1.63 1.67,-2.68 0.77,-4.34 3.81,0.96 3.71,-3.34 3.75,-5.95 0.89,-3.44 1.98,-6.82 2.27,-10.31 -1.07,-2.3 -1.36,-4.85 -1.09,-7.47 0.3,-1.5 0.9,-3.58 2.27,-1.4 2.48,1.01 0.53,-3.51 3.59,-2.7 2.71,-0.13 3.55,-3.26 1.37,-4.78 1.32,-2.8 5.95,-1.73 6.82,-4.09 -1.66,-3.05 4.61,-7.07 -0.2,-9.19 -2.62,-2.47 -4.13,2.14 -6.1,3.38 -0.9,2.11 -2.5,3.05 -3.65,4.53 -1.99,2.56 -5.47,0.79 -8.11,1.25 0.84,-3.04 -2.73,-3.43 -3.76,-4.72 -2.02,1.65 -3.16,4.49 -6.19,4.68 -2.73,0.46 -1.81,-2.02 -1.56,-3.51 -1.42,0.56 -1.69,-0.36 -2.26,-1.49 -0.06,1.35 -0.96,2.99 -0.83,0.6 -1.4,-1.01 -1.59,-2.59 -1.58,-3.72 -1.32,-0.93 -3.93,-1.28 -2.29,-3.07 -1.76,-1.43 -5.48,-1.31 -5.42,-4.72 -2.13,-0.62 -4.08,0.9 -6.23,1.42 -1.93,-0.36 -3.28,-2.81 -5.2,-1.46 0.07,-0.1 -0.3,-0.68 -0.54,-0.51 z&quot;,</td>
      </tr>
      <tr>
        <td id="L148" class="blob-num js-line-number" data-line-number="148"></td>
        <td id="LC148" class="blob-code blob-code-inner js-file-line">						&quot;department-39&quot; : &quot;m 472.04,250.64 c -2.16,1.79 -1.36,5.28 -2.94,7.45 0.09,2.73 -2.31,4.73 -3.53,7.05 -3.03,-0.47 -5.35,3.74 -3.19,4.71 -2.06,0.47 -3.73,5.36 -0.52,4.7 1.33,0.76 0.69,4.17 3.48,3.21 1.68,-0.66 1.23,2.18 3.27,2.09 2.46,1.35 -0.2,2.67 -1.91,2.03 -2.06,-0.51 -4.46,1.94 -1.6,2.77 2.43,1.33 -1.33,3.03 1.08,4.08 0.89,2.1 1.19,3.82 2.13,6.05 -2.12,0.95 -0.43,3.73 -3.06,3.72 -1.86,2.41 0.74,4.14 2.3,5.69 -0.13,2.93 -6.18,0.76 -4.86,4.67 0.41,1.69 3.59,1.72 2.72,3.84 0.3,1.7 2.14,1.5 2.39,1.42 0.16,2.17 2.98,0.53 1.91,2.98 -0.9,3.13 3.87,1.82 4.85,0.12 1.46,-0.55 2.58,-4.59 4.24,-1.99 2.29,0.06 2.46,3.2 3.09,3.77 2.93,-0.04 7.08,0.91 8.5,-2.49 2.02,-1.97 3.8,-4.92 6.21,-7.02 2.27,-1.54 0.39,-4.74 2.54,-6.4 1.4,-1.49 3.11,-3.84 -0.06,-3.89 -2.06,-1.17 -3.31,-3.74 -0.87,-5.29 0.4,-1.53 -1.44,-3.09 0.76,-4.19 2.73,-1.36 6.13,-4.43 2.26,-6.76 -1.6,-2.02 -3.91,-2.65 -5.92,-3.04 -1.27,-2 -1.73,-3.98 -2.6,-5.89 -0.82,-0.25 1.22,-2.33 -1.1,-2.27 -1.84,-1.29 -4.2,-1.14 -5.91,-2.76 -0.62,-1.82 -0.09,-1.2 -1.26,-0.03 -2.05,2.08 -3.47,-2.98 -0.74,-2.02 0.76,-1.1 -0.4,-3.36 1.4,-4.52 2.37,-3.1 -2.64,-4.46 -3.59,-6.62 -0.37,-1.97 -2.06,-4.51 -3.97,-2.34 -2.56,0.88 -4.13,-1.12 -5.49,-2.82 z&quot;,</td>
      </tr>
      <tr>
        <td id="L149" class="blob-num js-line-number" data-line-number="149"></td>
        <td id="LC149" class="blob-code blob-code-inner js-file-line">						<span class="pl-s"><span class="pl-pds">&quot;</span>department-68<span class="pl-pds">&quot;</span></span> <span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>m 549.43,183.82 c -2.25,1 -2.94,3.73 -3.79,5.81 -0.9,2.15 -3.75,4.26 -2.11,6.74 -0.93,2.22 -2.92,4.25 -3.93,6.64 -2.43,1.18 -3.51,3.7 -3.19,6.38 0.13,1.69 -1.55,2.36 -0.44,3.95 0.77,2.64 -4.62,1.97 -2.6,4.52 2.13,1.91 5.37,1.9 7.52,3.96 0.67,1.81 1.6,4.32 0.06,6.09 -1.78,1.43 -0.08,4 1.85,2.88 1.83,0.98 2.47,3.66 3.32,5.16 -0.72,2.04 1.34,2.1 2.39,2.44 -0.32,1.38 -1.23,4 1.33,3.32 1.03,1.33 2.07,1.29 3.35,0.31 2.56,-0.08 5.85,0.35 7.17,-2.31 -0.73,-1.24 -0.96,-2.18 0.78,-1.43 2.66,0.8 0.35,-2.42 2.52,-2.38 0.82,-0.85 -1.99,-1.47 0.03,-2.05 1.88,-1.02 4.21,-2.78 2.05,-4.99 -1.7,-1.63 -3.7,-3.88 -1.43,-6.04 0.91,-2.16 -1.41,-4.57 0.56,-6.71 0.67,-2 0.44,-4 1.78,-5.83 -0.03,-2.09 3.45,-4.94 0.43,-6.95 -3.06,-1.46 0.88,-6.62 -2.19,-7 -1.65,-0.56 -1.53,-2.31 -3.25,-2.51 -0.17,-1.94 -0.33,-3.93 -2.69,-4.35 -2.09,-1.1 -4.78,-1.23 -5.71,-3.58 0.07,-2.15 -2.48,-1.52 -3.79,-2.06 z<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L150" class="blob-num js-line-number" data-line-number="150"></td>
        <td id="LC150" class="blob-code blob-code-inner js-file-line">						&quot;department-90&quot; : &quot;m 532.37,216.22 c -0.55,0.23 -0.49,0.97 -0.95,1.33 -0.62,0.8 -1.51,1.36 -1.95,2.3 -0.77,0.99 -0.8,2.48 -0.08,3.5 -0.03,0.67 0.48,1.24 0.41,1.93 -0.01,0.83 -0.07,1.76 0.62,2.36 0.29,0.29 0.48,0.66 0.1,0.97 -0.14,0.38 -0.57,0.43 -0.76,0.72 -0.05,0.5 0.53,0.78 0.56,1.29 0.18,0.47 0.52,0.85 0.75,1.28 0.26,0.15 0.87,0.53 0.4,0.81 -0.7,0.47 -0.05,1.72 0.76,1.5 0.78,0.02 1.57,-0.19 2.27,-0.46 0.8,0.18 1.42,0.82 1.45,1.64 0.04,0.86 1.41,0.54 1.43,1.42 0.01,0.47 0.26,1.11 -0.01,1.5 -0.5,0.35 -0.45,-0.64 -0.86,-0.74 -0.5,-0.2 -0.94,0.42 -0.64,0.85 0.2,0.34 -0.18,0.93 0.34,1.04 0.43,0.61 0.84,1.44 0.71,2.19 -0.36,0.5 0.42,0.64 0.75,0.45 0.83,-0.18 1.47,-0.8 2.26,-1.07 0.62,-0.6 -0.22,-1.42 -0.38,-2.05 -0.12,-0.36 -0.45,-1.06 0.17,-1.13 0.42,-0.08 0.81,-0.3 1.15,-0.48 0.96,0.2 1.82,0.91 2.86,0.71 1.1,-0.11 2.47,-0.62 2.45,-1.94 0.16,-1 -0.69,-1.62 -1.41,-2.13 -0.16,-0.46 -0.02,-1.09 -0.52,-1.4 -0.45,-0.55 -0.43,-1.71 -1.38,-1.73 -0.72,-0.12 -1.46,0.05 -1.95,0.59 -0.4,0.24 -0.3,-0.53 -0.6,-0.62 -0.31,-0.79 -0.34,-1.73 0.1,-2.47 0.16,-0.36 0.01,-1.1 0.63,-0.98 0.41,0.01 0.38,-0.37 0.4,-0.64 0.61,-1 -0.15,-2.14 -0.3,-3.13 0.23,-0.47 0.38,-1.05 -0.1,-1.44 -0.8,-1.1 -2.3,-1.18 -3.29,-2.06 -0.38,-0.36 -0.84,-0.58 -1.33,-0.6 -0.84,-0.67 -2.13,-0.38 -2.92,-1.15 -0.45,-0.63 -0.74,-1.4 -0.95,-2.13 -0.05,-0.04 -0.12,-0.05 -0.18,-0.04 z&quot;</td>
      </tr>
      <tr>
        <td id="L151" class="blob-num js-line-number" data-line-number="151"></td>
        <td id="LC151" class="blob-code blob-code-inner js-file-line">					}</td>
      </tr>
      <tr>
        <td id="L152" class="blob-num js-line-number" data-line-number="152"></td>
        <td id="LC152" class="blob-code blob-code-inner js-file-line">				}</td>
      </tr>
      <tr>
        <td id="L153" class="blob-num js-line-number" data-line-number="153"></td>
        <td id="LC153" class="blob-code blob-code-inner js-file-line">			}</td>
      </tr>
      <tr>
        <td id="L154" class="blob-num js-line-number" data-line-number="154"></td>
        <td id="LC154" class="blob-code blob-code-inner js-file-line">		}</td>
      </tr>
      <tr>
        <td id="L155" class="blob-num js-line-number" data-line-number="155"></td>
        <td id="LC155" class="blob-code blob-code-inner js-file-line">	);</td>
      </tr>
      <tr>
        <td id="L156" class="blob-num js-line-number" data-line-number="156"></td>
        <td id="LC156" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L157" class="blob-num js-line-number" data-line-number="157"></td>
        <td id="LC157" class="blob-code blob-code-inner js-file-line">	<span class="pl-k">return</span> $.fn.mapael;</td>
      </tr>
      <tr>
        <td id="L158" class="blob-num js-line-number" data-line-number="158"></td>
        <td id="LC158" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L159" class="blob-num js-line-number" data-line-number="159"></td>
        <td id="LC159" class="blob-code blob-code-inner js-file-line">}));</td>
      </tr>
</table>

  </div>

</div>

<a href="#jump-to-line" rel="facebox[.linejump]" data-hotkey="l" style="display:none">Jump to Line</a>
<div id="jump-to-line" style="display:none">
  <!-- </textarea> --><!-- '"` --><form accept-charset="UTF-8" action="" class="js-jump-to-line-form" method="get"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /></div>
    <input class="linejump-input js-jump-to-line-field" type="text" placeholder="Jump to line&hellip;" aria-label="Jump to line" autofocus>
    <button type="submit" class="btn">Go</button>
</form></div>

        </div>
      </div>
      <div class="modal-backdrop"></div>
    </div>
  </div>


    </div>

      <div class="container">
  <div class="site-footer" role="contentinfo">
    <ul class="site-footer-links right">
        <li><a href="https://status.github.com/" data-ga-click="Footer, go to status, text:status">Status</a></li>
      <li><a href="https://developer.github.com" data-ga-click="Footer, go to api, text:api">API</a></li>
      <li><a href="https://training.github.com" data-ga-click="Footer, go to training, text:training">Training</a></li>
      <li><a href="https://shop.github.com" data-ga-click="Footer, go to shop, text:shop">Shop</a></li>
        <li><a href="https://github.com/blog" data-ga-click="Footer, go to blog, text:blog">Blog</a></li>
        <li><a href="https://github.com/about" data-ga-click="Footer, go to about, text:about">About</a></li>
        <li><a href="https://github.com/pricing" data-ga-click="Footer, go to pricing, text:pricing">Pricing</a></li>

    </ul>

    <a href="https://github.com" aria-label="Homepage">
      <span class="mega-octicon octicon-mark-github" title="GitHub"></span>
</a>
    <ul class="site-footer-links">
      <li>&copy; 2015 <span title="0.10006s from github-fe129-cp1-prd.iad.github.net">GitHub</span>, Inc.</li>
        <li><a href="https://github.com/site/terms" data-ga-click="Footer, go to terms, text:terms">Terms</a></li>
        <li><a href="https://github.com/site/privacy" data-ga-click="Footer, go to privacy, text:privacy">Privacy</a></li>
        <li><a href="https://github.com/security" data-ga-click="Footer, go to security, text:security">Security</a></li>
        <li><a href="https://github.com/contact" data-ga-click="Footer, go to contact, text:contact">Contact</a></li>
        <li><a href="https://help.github.com" data-ga-click="Footer, go to help, text:help">Help</a></li>
    </ul>
  </div>
</div>



    
    
    

    <div id="ajax-error-message" class="flash flash-error">
      <span class="octicon octicon-alert"></span>
      <button type="button" class="flash-close js-flash-close js-ajax-error-dismiss" aria-label="Dismiss error">
        <span class="octicon octicon-x"></span>
      </button>
      Something went wrong with that request. Please try again.
    </div>


      <script crossorigin="anonymous" integrity="sha256-Ln/D0mSiCOE4PehbgVN5vsz/VsH5d3FFFdTKx4IO7z4=" src="https://assets-cdn.github.com/assets/frameworks-2e7fc3d264a208e1383de85b815379beccff56c1f977714515d4cac7820eef3e.js"></script>
      <script async="async" crossorigin="anonymous" integrity="sha256-eSjpWA/TKkgDQdFQdoHY0N17+7t0VV2E/KC7IFY1S8o=" src="https://assets-cdn.github.com/assets/github-7928e9580fd32a480341d1507681d8d0dd7bfbbb74555d84fca0bb2056354bca.js"></script>
      
      
    <div class="js-stale-session-flash stale-session-flash flash flash-warn flash-banner hidden">
      <span class="octicon octicon-alert"></span>
      <span class="signed-in-tab-flash">You signed in with another tab or window. <a href="">Reload</a> to refresh your session.</span>
      <span class="signed-out-tab-flash">You signed out in another tab or window. <a href="">Reload</a> to refresh your session.</span>
    </div>
  </body>
</html>

