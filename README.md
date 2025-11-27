# BD X-Ray Theme

A minimal Backdrop CMS theme designed to visually demonstrate the structure of Backdrop's theming system through colored borders and labels. Like an X-ray for your site, this theme reveals the underlying structure, making it easy to understand how regions, blocks, and content nodes are organized and displayed.

## Project History

This theme originated as a tangent project during development of [wp4bd](https://github.com/yourusername/wp4bd) (a system for using WordPress themes with Backdrop CMS). While working on WordPress theme integration, it became clear that a visual reference theme would be valuable for understanding Backdrop's structure, especially when comparing it to WordPress's template hierarchy.

The theme was initially created to help debug and understand how Backdrop handles page regions and blocks differently from Drupal 7 and WordPress. It has since evolved into a standalone educational tool that can benefit anyone learning Backdrop theming.

**Status**: This is an independent project that will be actively developed once the wp4bd project is complete. Currently in early development phase.

## What This Theme Does

Backdrop Outlined uses visual indicators (colored borders and labels) to show:

### Regions (Solid Colored Borders)
- **Header** (red) - Site branding, logo area
- **Navigation** (purple) - Main menu area  
- **Highlighted** (yellow) - Special messages/featured content
- **Help** (blue) - Help text area
- **Content** (green) - Main content area
- **Sidebar First** (dark orange) - Left sidebar
- **Sidebar Second** (orange) - Right sidebar
- **Footer** (teal) - Footer area

### Blocks (Dashed Gray Borders)
- Each block within regions is outlined with a dashed border
- Block titles are clearly labeled
- Shows the relationship between blocks and regions

### Nodes (Dashed Teal Borders)
- Individual content items (posts, pages, etc.)
- Shows where content appears in the overall structure
- Demonstrates how nodes are rendered within regions

## Current Status

### ✅ Working
- Theme discovery and installation
- Basic page rendering without errors
- Node template with proper variable handling
- Block template with proper variable handling
- CSS styling for visual outlines (defined but may need Layout system integration)

### 🚧 In Progress / TODO
- **Region outlines**: The CSS is defined, but region outlines may not display fully because Backdrop uses the Layout system, which renders `$page` as a string rather than an array of regions. This needs investigation into:
  - Layout system template integration
  - Alternative approaches to access regions before rendering
  - CSS-based solutions that work with rendered content
  
- Enhanced block labeling (showing block machine names, delta, etc.)
- Documentation for each template file
- Example content/demo setup
- Responsive design improvements
- Accessibility enhancements

### 📋 Future Plans
- Full Layout system integration
- Support for custom regions
- Developer mode toggle (show/hide outlines)
- Block inspector information
- Region inspector information
- Integration with Backdrop's Layout Manager
- Documentation site with examples

## Installation

1. **Download or clone** this theme into your Backdrop site's `themes` directory:
   ```bash
   cd /path/to/backdrop/themes
   git clone https://github.com/cellear/bd-xray-theme.git backdrop_outlined
   ```

2. **Enable the theme**:
   - Navigate to `admin/appearance` in your Backdrop site
   - Find "Backdrop Outlined" (or "BD X-Ray") in the theme list
   - Click "Enable and set default" (or just "Enable" if you want to keep your current theme)

3. **Add content**:
   - Create some nodes (posts, pages, etc.)
   - Add blocks to different regions via `admin/structure/block`
   - The visual outlines will appear automatically

## Requirements

- Backdrop CMS 1.x
- PHP 7.4 or higher (standard Backdrop requirements)

## File Structure

```
backdrop_outlined/
├── backdrop_outlined.info    # Theme definition, regions, and metadata
├── template.php              # Theme preprocess functions
├── css/
│   └── style.css            # All visual outline styling
├── templates/
│   ├── page.tpl.php         # Page layout template
│   ├── block.tpl.php        # Block template
│   └── node.tpl.php         # Node (content) template
└── README.md                # This file
```

## Technical Details

### Theme Information File
The `.info` file defines:
- Theme name and description
- Backdrop version compatibility
- Available regions (8 standard regions)
- Stylesheet declarations

### Templates
- **page.tpl.php**: Currently simplified to match Backdrop's rendering model (prints `$page` as a string). Future work needed for region access.
- **block.tpl.php**: Handles block rendering with proper variable checks
- **node.tpl.php**: Based on Backdrop core's node template, handles content display

### Styling
The CSS uses:
- CSS `::before` pseudo-elements for region/block labels
- Color-coded borders for visual distinction
- Responsive design for mobile devices
- Minimal styling to keep focus on structure

### Preprocess Functions
Currently minimal preprocessing:
- Adds body class for theme identification
- Placeholder functions for future enhancements

## Use Cases

### Educational
- **Theme development training**: See exactly where regions and blocks appear
- **Backdrop migration**: Understand differences from Drupal 7 or WordPress
- **Layout planning**: Visualize structure before building custom themes

### Development
- **Debugging**: Quickly identify which region a block is in
- **Testing**: Verify block placement and region usage
- **Documentation**: Create visual documentation of site structure

## Contributing

Contributions are welcome! This project is in early development and there are many opportunities to help:

- Improve Layout system integration
- Enhance block/region labeling
- Add developer tools and inspector features
- Improve documentation
- Test with various Backdrop configurations
- Report bugs and suggest features

### Development Setup

1. Clone the repository
2. Install in a Backdrop development site
3. Make changes
4. Test thoroughly
5. Submit a pull request

## Known Issues

- Region outlines may not display fully due to Backdrop's Layout system rendering model
- Some blocks may not show labels if they don't have subjects
- Layout Manager integration needs investigation

## License

GPL v2 or later (same as Backdrop CMS)

## Credits

Created as part of the [wp4bd](https://github.com/yourusername/wp4bd) project development. Will be maintained as an independent project.

## Support

- **Issues**: Report bugs and request features via GitHub Issues
- **Documentation**: See inline code comments and this README
- **Backdrop Community**: This theme follows Backdrop CMS standards and conventions

---

**Note**: This theme is designed for development and educational purposes. While it can be used on production sites, the visual outlines are intended to help understand structure rather than provide a polished user experience.
