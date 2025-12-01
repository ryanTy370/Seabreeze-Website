/*
Theme Name: Seas Breeze
Theme URI: https://yourdomain.com
Author: Your Name
Author URI: https://yourdomain.com
Description: A clean, ocean-inspired WordPress theme with blue color scheme
Version: 1.0
License: GPL v2 or later
Text Domain: seas-breeze
*/

/* ==========================================================================
   Table of Contents
   ==========================================================================

   1. Reset & Base Styles
   2. Typography
   3. Layout
   4. Header
   5. Navigation
   6. Content
   7. Sidebar
   8. Footer
   9. Responsive
   ========================================================================== */

/* 1. Reset & Base Styles
   ========================================================================== */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html {
    scroll-behavior: smooth;
}

body {
    font-family: 'Poppins', sans-serif;
    line-height: 1.6;
    color: #334155;
    background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

/* 2. Typography
   ========================================================================== */
h1, h2, h3, h4, h5, h6 {
    font-family: 'Playfair Display', serif;
    font-weight: 600;
    line-height: 1.3;
    color: #1e293b;
    margin-bottom: 1rem;
}

h1 { font-size: 2.5rem; }
h2 { font-size: 2rem; }
h3 { font-size: 1.75rem; }
h4 { font-size: 1.5rem; }
h5 { font-size: 1.25rem; }
h6 { font-size: 1rem; }

p {
    margin-bottom: 1rem;
}

a {
    color: #3b82f6;
    text-decoration: none;
    transition: color 0.3s ease;
}

a:hover {
    color: #0ea5e9;
}

/* 3. Layout
   ========================================================================== */
.site {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}

.site-content {
    flex: 1;
    padding: 40px 0;
}

/* 4. Header
   ========================================================================== */
.site-header {
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(10px);
    padding: 20px 0;
    position: sticky;
    top: 0;
    z-index: 1000;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.header-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.site-branding {
    display: flex;
    align-items: center;
    gap: 15px;
}

.site-logo img {
    max-height: 50px;
    width: auto;
}

.site-title {
    font-size: 1.8rem;
    font-weight: 700;
    color: #1e293b;
    margin: 0;
}

.site-description {
    font-size: 0.9rem;
    color: #64748b;
    margin: 0;
}

/* 5. Navigation
   ========================================================================== */
.main-navigation {
    display: flex;
    align-items: center;
}

.menu {
    display: flex;
    list-style: none;
    gap: 30px;
}

.menu li {
    position: relative;
}

.menu a {
    color: #475569;
    font-weight: 500;
    padding: 8px 0;
    position: relative;
}

.menu a:hover {
    color: #3b82f6;
}

.menu a:after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0;
    height: 2px;
    background: #3b82f6;
    transition: width 0.3s ease;
}

.menu a:hover:after {
    width: 100%;
}

.mobile-menu-toggle {
    display: none;
    background: none;
    border: none;
    font-size: 1.5rem;
    color: #475569;
    cursor: pointer;
    padding: 5px;
}

/* 6. Content
   ========================================================================== */
.content-area {
    display: grid;
    grid-template-columns: 1fr 300px;
    gap: 40px;
}

.hentry {
    background: white;
    border-radius: 12px;
    padding: 30px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    margin-bottom: 30px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.hentry:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
}

.entry-header {
    margin-bottom: 20px;
}

.entry-title {
    font-size: 2rem;
    margin-bottom: 10px;
}

.entry-meta {
    color: #64748b;
    font-size: 0.9rem;
    display: flex;
    gap: 15px;
    margin-bottom: 15px;
}

.entry-meta i {
    margin-right: 5px;
}

.post-thumbnail {
    margin-bottom: 20px;
    border-radius: 8px;
    overflow: hidden;
}

.post-thumbnail img {
    width: 100%;
    height: auto;
    display: block;
    transition: transform 0.5s ease;
}

.hentry:hover .post-thumbnail img {
    transform: scale(1.05);
}

.entry-content {
    line-height: 1.8;
}

/* 7. Sidebar
   ========================================================================== */
.sidebar {
    background: white;
    border-radius: 12px;
    padding: 25px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
}

.widget {
    margin-bottom: 30px;
}

.widget:last-child {
    margin-bottom: 0;
}

.widget-title {
    font-size: 1.3rem;
    color: #1e293b;
    padding-bottom: 10px;
    margin-bottom: 15px;
    border-bottom: 2px solid #e2e8f0;
    position: relative;
}

.widget-title:after {
    content: '';
    position: absolute;
    bottom: -2px;
    left: 0;
    width: 60px;
    height: 2px;
    background: #3b82f6;
}

.widget ul {
    list-style: none;
}

.widget li {
    padding: 8px 0;
    border-bottom: 1px solid #f1f5f9;
}

.widget li:last-child {
    border-bottom: none;
}

/* 8. Footer
   ========================================================================== */
.site-footer {
    background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
    color: #cbd5e1;
    padding: 60px 0 30px;
    margin-top: 60px;
}

.footer-widgets {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 40px;
    margin-bottom: 40px;
}

.footer-widget-title {
    color: white;
    font-size: 1.2rem;
    margin-bottom: 20px;
}

.footer-widget ul li a {
    color: #94a3b8;
}

.footer-widget ul li a:hover {
    color: #60a5fa;
}

.site-info {
    text-align: center;
    padding-top: 30px;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
    font-size: 0.9rem;
    color: #94a3b8;
}

/* 9. Responsive
   ========================================================================== */
@media (max-width: 1024px) {
    .content-area {
        grid-template-columns: 1fr;
    }
    
    .sidebar {
        order: 2;
    }
}

@media (max-width: 768px) {
    .header-container {
        flex-direction: column;
        gap: 20px;
    }
    
    .main-navigation {
        width: 100%;
    }
    
    .menu {
        flex-direction: column;
        gap: 15px;
        display: none;
    }
    
    .menu.active {
        display: flex;
    }
    
    .mobile-menu-toggle {
        display: block;
    }
    
    h1 { font-size: 2rem; }
    h2 { font-size: 1.75rem; }
    h3 { font-size: 1.5rem; }
    
    .hentry {
        padding: 20px;
    }
}