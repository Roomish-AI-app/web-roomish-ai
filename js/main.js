/**
 * Main JavaScript file for Roomish theme
 *
 * @package Roomish
 */

(function() {
    'use strict';

    // DOM ready
    document.addEventListener('DOMContentLoaded', function() {
        
        // Mobile menu toggle
        const menuToggle = document.querySelector('.menu-toggle');
        const navigation = document.querySelector('.main-navigation');
        
        if (menuToggle && navigation) {
            menuToggle.addEventListener('click', function() {
                const expanded = this.getAttribute('aria-expanded') === 'true';
                this.setAttribute('aria-expanded', !expanded);
                navigation.classList.toggle('toggled');
            });
        }

        // Smooth scrolling for anchor links
        const anchorLinks = document.querySelectorAll('a[href^="#"]');
        anchorLinks.forEach(function(link) {
            link.addEventListener('click', function(e) {
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                
                if (targetElement) {
                    e.preventDefault();
                    targetElement.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add loading animation for images
        const images = document.querySelectorAll('img');
        images.forEach(function(img) {
            img.addEventListener('load', function() {
                this.classList.add('loaded');
            });
            
            // If image is already loaded
            if (img.complete) {
                img.classList.add('loaded');
            }
        });

    });

})();
