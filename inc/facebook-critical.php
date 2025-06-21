<?php
// Facebook Critical Inline Script
// This loads BEFORE any bundles to ensure cookies are available for API
?>
<script>
// Facebook Pixel and Conversions API Synchronization - CRITICAL INLINE
(function() {
    'use strict';
    
    // Function to set a cookie
    function setCookie(name, value, days) {
        var expires = "";
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + (value || "") + expires + "; path=/; SameSite=Strict";
    }
    
    // Function to get a cookie
    function getCookie(name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for(var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    }
    
    // Generate unique session ID if it doesn't exist
    var sessionId = getCookie('fb_session_id');
    if (!sessionId) {
        sessionId = 'sess_' + Date.now() + '_' + Math.random().toString(36).substr(2, 9);
        setCookie('fb_session_id', sessionId, 1);
    }
    
    // Store page view event ID for server-side API - CRITICAL FOR SYNC
    var pageViewEventId = 'PetzSite_' + Date.now() + '_' + Math.floor(Math.random() * 9000 + 1000);
    setCookie('fb_pageview_event_id', pageViewEventId, 1);
    
    // Store page title for server-side API
    setCookie('fb_page_title', document.title, 1);
    
    // Preload Facebook pixel script for faster loading
    var linkPreload = document.createElement('link');
    linkPreload.rel = 'preload';
    linkPreload.as = 'script';
    linkPreload.href = 'https://connect.facebook.net/en_US/fbevents.js';
    linkPreload.crossOrigin = 'anonymous';
    document.head.appendChild(linkPreload);
    
    // Performance monitoring
    if (window.performance && window.performance.mark) {
        window.performance.mark('facebook-critical-start');
    }
    
    // Load Facebook pixel immediately
    !function(f,b,e,v,n,t,s) {
        if(f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ? n.callMethod.apply(n,arguments) : n.queue.push(arguments)
        };
        if(!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)
    }(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
    
    // Initialize Facebook pixels - All 4 pixels active
    fbq('init', '700996330520730');  // MAIN Petz School Business Manager
    fbq('init', '2832144410330423'); // Secondary Petz School
    fbq('init', '372361850883221');  // Cosmeticacorp BM  
    fbq('init', '3067315600166617'); // Cosmeticacorp BM
    
    // Track PageView with synchronized event ID - CRITICAL
    fbq('track', 'PageView', {
        eventID: pageViewEventId,
        content_type: 'website',
        page_title: document.title
    });
    
    // Performance monitoring
    if (window.performance && window.performance.mark) {
        window.performance.mark('facebook-critical-end');
        window.performance.measure('facebook-critical-duration', 'facebook-critical-start', 'facebook-critical-end');
    }
    
})();
</script> 