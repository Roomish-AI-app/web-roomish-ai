# Roomish WordPress Theme

A modern, responsive WordPress theme designed for the Roomish water tracking app landing page.

## Features

- **Responsive Design**: Fully responsive layout that works on all devices
- **Modern UI**: Clean, modern design with smooth animations
- **WordPress Standards**: Follows WordPress coding standards and best practices
- **SEO Optimized**: Proper HTML structure and meta tags
- **Accessibility**: WCAG compliant with proper ARIA labels
- **Performance**: Optimized CSS and JavaScript for fast loading
- **Customizable**: Easy to customize colors, fonts, and layout

## Installation

1. Upload the theme folder to `/wp-content/themes/`
2. Activate the theme through the 'Appearance' menu in WordPress
3. Customize the theme through the WordPress Customizer

## Theme Structure

```
roomish-landing/
├── style.css              # Main stylesheet with theme info
├── index.php              # Main template file
├── front-page.php         # Homepage template
├── header.php             # Header template
├── footer.php             # Footer template
├── functions.php          # Theme functions
├── inc/                   # Include files
│   ├── template-tags.php  # Template tag functions
│   ├── template-functions.php # Template functions
│   └── customizer.php     # Customizer functions
├── js/                    # JavaScript files
│   ├── main.js           # Main JavaScript
│   └── customizer.js     # Customizer JavaScript
├── assets/               # Static assets
│   └── site.webmanifest # Web app manifest
└── template-parts/       # Template part files
    ├── content.php       # Post content template
    ├── content-search.php # Search results template
    └── content-none.php  # No content template
```

## Customization

### Colors
The theme uses CSS custom properties for easy color customization:

```css
:root {
  --color-primary: #33313A;
  --color-secondary: #8E8E93;
  --color-link: #018CD8;
  --color-link-hover: #1D62D5;
  /* ... more colors */
}
```

### Typography
The theme uses the Manrope font family from Google Fonts.

### Layout
The theme uses CSS Grid and Flexbox for modern, responsive layouts.

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Internet Explorer 11+

## Requirements

- WordPress 6.7 or higher
- PHP 7.2 or higher

## License

This theme is licensed under the GPL v2 or later.

## Support

For support and questions, please contact the theme developer.

## Changelog

### Version 1.0.0
- Initial release
- Responsive design
- WordPress standards compliance
- Accessibility features
- Performance optimizations

