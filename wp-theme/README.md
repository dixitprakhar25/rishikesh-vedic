# Rishikesh Vedic WordPress Theme

**Version:** 1.0.0  
**Author:** Rishikesh Vedic Team  
**License:** GPL v2 or later

## 🎨 Premium WordPress Theme for Vedic Astrology Services

A fully customizable WordPress theme designed specifically for Vedic astrology services, spiritual consultants, and wellness professionals. Built with **full Elementor support**, **drag-and-drop customization**, and **complete SEO optimization**.

---

## ✨ KEY FEATURES

### 🎯 Full Customization Control
- **WordPress Customizer Integration** - Change colors, fonts, layout in real-time
- **Elementor Page Builder Support** - Drag & drop any element anywhere
- **Custom Color Schemes** - Control primary, accent, text, and background colors
- **Typography Control** - Choose from 10+ Google Fonts for headings and body
- **Hero Section Customizer** - Change background image, opacity, text, buttons
- **Layout Options** - Adjust container width, sidebar position
- **No Coding Required** - Everything controllable through WordPress admin

### 📱 Responsive & Modern
- Mobile-first design
- Retina-ready graphics
- Fast loading times
- Cross-browser compatible

### 🔍 SEO Optimized
- Schema.org markup for organizations
- Open Graph meta tags for social sharing
- Optimized heading structure
- Clean, semantic HTML5
- Image lazy loading
- Async script loading
- Preconnect for Google Fonts

### 🎭 Custom Post Types
- **Astrologers** - Manage your team with custom fields
  - Experience, location, rating, sessions
  - Specializations taxonomy
  - Custom admin columns
- **Testimonials** - Client reviews and feedback
- **Services** - Manage your offerings

### 🧩 Widget Areas
- Primary sidebar
- 4 footer widget columns
- Fully customizable

### 🎨 Elementor Ready
- All pages support Elementor
- Custom Elementor widgets (coming soon)
- Header/Footer builder support
- Full-width templates

### 🛠️ Developer Friendly
- Well-documented code
- WordPress coding standards
- Child theme ready
- Translation ready (i18n)
- Custom hooks and filters

---

## 📦 INSTALLATION

### Method 1: WordPress Admin (Recommended)

1. Download the theme ZIP file
2. Go to **WordPress Admin → Appearance → Themes**
3. Click **Add New → Upload Theme**
4. Choose the ZIP file and click **Install Now**
5. Click **Activate** after installation

### Method 2: FTP Upload

1. Extract the ZIP file
2. Upload the `rishikesh-vedic` folder to `/wp-content/themes/`
3. Go to **WordPress Admin → Appearance → Themes**
4. Find "Rishikesh Vedic" and click **Activate**

---

## 🚀 QUICK START GUIDE

### Step 1: Install Required Plugins

For full functionality, install these recommended plugins:

**Required:**
- **Elementor** (Free) - For drag & drop page building
- **Contact Form 7** (Free) - For contact forms

**Recommended:**
- **Yoast SEO** or **Rank Math** - For advanced SEO
- **WooCommerce** - If selling services/products
- **Advanced Custom Fields (ACF)** - For additional custom fields

### Step 2: Import Demo Content (Optional)

1. Go to **Tools → Import**
2. Install **WordPress Importer**
3. Import the demo content XML file (if provided)

### Step 3: Customize Your Site

#### A. Basic Settings
1. Go to **Settings → General**
2. Set your **Site Title** and **Tagline**
3. Set your **Timezone**

#### B. Customize Colors & Fonts
1. Go to **Appearance → Customize**
2. Open **Theme Colors** section
   - Set Primary Color (default: #FFB84D)
   - Set Accent Color (default: #2C7A7B)
   - Set Text Color
3. Open **Typography** section
   - Choose Heading Font
   - Choose Body Font
   - Adjust Font Size

#### C. Customize Hero Section
1. In Customizer, open **Hero Section**
2. Upload **Background Image**
3. Adjust **Image Opacity** (0-1)
4. Edit **Hero Title** and **Subtitle**
5. Set **Button Text** and **Button URL**

#### D. Set Up Menus
1. Go to **Appearance → Menus**
2. Create a new menu
3. Add pages: Home, About, Services, Astrologers, Contact
4. Assign to **Primary Menu** location
5. Create footer menu and assign to **Footer Menu**

#### E. Configure Widgets
1. Go to **Appearance → Widgets**
2. Add widgets to **Sidebar** and **Footer 1-4** areas
3. Recommended widgets:
   - Recent Posts
   - Categories
   - Search
   - Custom HTML (for contact info)

### Step 4: Add Your Astrologers

1. Go to **Astrologers → Add New**
2. Enter astrologer name as title
3. Add bio in the editor
4. Set **Featured Image** (astrologer photo)
5. Fill in **Astrologer Details**:
   - Years of Experience
   - Location
   - Rating
   - Total Sessions
   - Languages
   - Training & Credentials
6. Assign **Specializations** (create new if needed)
7. Click **Publish**

### Step 5: Create Pages with Elementor

1. Create a new page: **Pages → Add New**
2. Give it a title (e.g., "Home")
3. Click **Edit with Elementor**
4. Drag and drop elements:
   - **Heading** - For titles
   - **Text Editor** - For paragraphs
   - **Image** - For photos
   - **Button** - For CTAs
   - **Testimonial** - For reviews
   - **Icon Box** - For features
5. Customize each element:
   - Click on element
   - Edit content in left panel
   - Change colors, fonts, spacing
   - Adjust responsive settings
6. Click **Update** to save

---

## 🎨 CUSTOMIZATION GUIDE

### Changing Colors

**Via Customizer (Live Preview):**
1. **Appearance → Customize → Theme Colors**
2. Click color picker for any color
3. Choose new color
4. See changes in real-time
5. Click **Publish** to save

**Via CSS (Advanced):**
Add to **Appearance → Customize → Additional CSS**:
```css
:root {
    --primary-color: #YOUR_COLOR;
    --accent-color: #YOUR_COLOR;
}
```

### Changing Fonts

**Via Customizer:**
1. **Appearance → Customize → Typography**
2. Select **Heading Font** from dropdown
3. Select **Body Font** from dropdown
4. Adjust **Base Font Size**
5. Click **Publish**

### Customizing Hero Section

**Background Image:**
1. **Appearance → Customize → Hero Section**
2. Click **Select Image**
3. Upload or choose from library
4. Adjust **Opacity** slider (0 = invisible, 1 = fully visible)

**Text & Buttons:**
1. Edit **Hero Title** field
2. Edit **Hero Subtitle** field
3. Change **Button Text**
4. Set **Button URL** (e.g., /booking)

### Layout Adjustments

**Container Width:**
1. **Appearance → Customize → Layout Options**
2. Adjust **Container Width** (960-1920px)
3. Default: 1200px

**Sidebar Position:**
1. **Appearance → Customize → Layout Options**
2. Choose: Left, Right, or No Sidebar

### Adding Custom CSS

1. **Appearance → Customize → Additional CSS**
2. Add your custom CSS code
3. See changes in real-time
4. Click **Publish**

Example - Change button hover color:
```css
.btn-primary:hover {
    background-color: #YOUR_COLOR;
}
```

---

## 🧩 USING ELEMENTOR

### Creating a Custom Homepage

1. **Pages → Add New**
2. Title: "Home"
3. Click **Edit with Elementor**
4. Click **+** to add section
5. Choose column structure (1, 2, 3, etc.)
6. Drag widgets from left panel:
   - Heading
   - Text Editor
   - Image
   - Button
   - Spacer
   - Divider
7. Click widget to edit:
   - **Content** tab - Edit text, images
   - **Style** tab - Change colors, fonts, spacing
   - **Advanced** tab - Margins, padding, animations
8. Click **Update**
9. **Settings → Reading → Homepage displays → A static page → Select "Home"**

### Elementor Tips

**Responsive Design:**
- Click device icons (desktop/tablet/mobile) at bottom
- Adjust settings for each device
- Hide elements on specific devices

**Reusable Sections:**
- Right-click section → **Save as Template**
- Reuse on other pages: **Add Template** button

**Global Colors:**
- **Elementor → Settings → Style**
- Set global colors
- Use throughout site for consistency

---

## 📝 CONTENT MANAGEMENT

### Managing Astrologers

**Add New Astrologer:**
1. **Astrologers → Add New**
2. Fill in all fields
3. Upload photo (Featured Image)
4. Assign specializations
5. Publish

**Edit Existing:**
1. **Astrologers → All Astrologers**
2. Hover over name → **Edit**
3. Make changes
4. Click **Update**

**Bulk Actions:**
- Select multiple astrologers
- Choose action from dropdown
- Click **Apply**

### Managing Testimonials

1. **Testimonials → Add New**
2. Title: Client name
3. Content: Testimonial text
4. Featured Image: Client photo (optional)
5. Add custom fields:
   - Rating (1-5)
   - Location
   - Service used
6. Publish

### Blog Posts

1. **Posts → Add New**
2. Write your content
3. Add **Featured Image**
4. Assign **Categories** and **Tags**
5. Set **Excerpt** (summary)
6. Publish or Schedule

---

## 🔍 SEO OPTIMIZATION

### Built-in SEO Features

✅ **Schema.org Markup** - Automatic organization schema  
✅ **Open Graph Tags** - Social media sharing optimization  
✅ **Clean URLs** - SEO-friendly permalinks  
✅ **Image Optimization** - Lazy loading enabled  
✅ **Fast Loading** - Optimized scripts and styles  
✅ **Mobile-Friendly** - Responsive design  
✅ **Semantic HTML** - Proper heading structure  

### Using Yoast SEO (Recommended)

1. Install **Yoast SEO** plugin
2. For each page/post:
   - Scroll to **Yoast SEO** section
   - Set **Focus Keyword**
   - Edit **SEO Title** (60 chars)
   - Edit **Meta Description** (155 chars)
   - Check **SEO Analysis** suggestions
   - Check **Readability** score
3. Aim for green lights!

### SEO Best Practices

**Page Titles:**
- Include main keyword
- Keep under 60 characters
- Make it compelling

**Meta Descriptions:**
- Summarize page content
- Include call-to-action
- 150-155 characters

**Headings:**
- One H1 per page (page title)
- Use H2 for main sections
- Use H3 for subsections
- Include keywords naturally

**Images:**
- Use descriptive file names
- Add ALT text (describe image)
- Compress before uploading
- Use WebP format when possible

**Content:**
- Write for humans first
- Use keywords naturally
- Aim for 1000+ words for blog posts
- Include internal links
- Add external links to authority sites

---

## 🎯 RECOMMENDED PLUGINS

### Essential
- **Elementor** - Page builder
- **Contact Form 7** - Forms
- **Yoast SEO** - SEO optimization

### Recommended
- **WooCommerce** - Sell services/products
- **WPForms** - Advanced forms
- **Smush** - Image optimization
- **WP Rocket** - Caching & speed
- **UpdraftPlus** - Backups
- **Wordfence** - Security

### Optional
- **Advanced Custom Fields** - Extra custom fields
- **Custom Post Type UI** - Create more post types
- **Regenerate Thumbnails** - Fix image sizes
- **Redirection** - Manage 301 redirects

---

## 🛠️ TROUBLESHOOTING

### Theme Not Showing Up
- Check if ZIP file was extracted
- Ensure folder name is `rishikesh-vedic`
- Check file permissions (755 for folders, 644 for files)

### Elementor Not Working
- Install Elementor plugin
- Update to latest version
- Clear cache
- Check PHP version (7.4+ required)

### Customizer Changes Not Saving
- Check browser console for errors
- Disable other plugins temporarily
- Increase PHP memory limit
- Clear browser cache

### Images Not Displaying
- Regenerate thumbnails: **Tools → Regen. Thumbnails**
- Check file permissions
- Verify image URLs

### Menu Not Showing
- Create menu: **Appearance → Menus**
- Assign to location: **Primary Menu**
- Add pages to menu

---

## 📚 SUPPORT & DOCUMENTATION

### Getting Help

**Documentation:** https://docs.rishikeshvedic.com  
**Support Forum:** https://support.rishikeshvedic.com  
**Email:** support@rishikeshvedic.com  
**Response Time:** Within 24 hours

### Before Contacting Support

1. Check this README
2. Search documentation
3. Try disabling plugins
4. Clear cache
5. Check browser console for errors

### What to Include in Support Request

- WordPress version
- Theme version
- Active plugins list
- Screenshot of issue
- Steps to reproduce
- Browser and device info

---

## 🔄 UPDATES

### Checking for Updates

1. **Dashboard → Updates**
2. Look for theme updates
3. Click **Update Now**
4. **Always backup before updating!**

### Changelog

**Version 1.0.0** (December 2024)
- Initial release
- Full Elementor support
- WordPress Customizer integration
- Custom post types
- SEO optimization
- Responsive design

---

## 👨‍💻 DEVELOPER DOCUMENTATION

### Child Theme

Create a child theme for customizations:

1. Create folder: `rishikesh-vedic-child`
2. Create `style.css`:
```css
/*
Theme Name: Rishikesh Vedic Child
Template: rishikesh-vedic
*/
```
3. Create `functions.php`:
```php
<?php
add_action( 'wp_enqueue_scripts', 'child_enqueue_styles' );
function child_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
```

### Hooks & Filters

**Available Hooks:**
- `rishikesh_vedic_before_header`
- `rishikesh_vedic_after_header`
- `rishikesh_vedic_before_content`
- `rishikesh_vedic_after_content`
- `rishikesh_vedic_before_footer`
- `rishikesh_vedic_after_footer`

**Available Filters:**
- `rishikesh_vedic_excerpt_length`
- `rishikesh_vedic_excerpt_more`
- `rishikesh_vedic_body_classes`

### Template Hierarchy

```
index.php (fallback)
├── front-page.php (homepage)
├── home.php (blog page)
├── single.php (single post)
│   └── single-astrologer.php (single astrologer)
├── page.php (pages)
│   └── page-{slug}.php (specific page)
├── archive.php (archives)
│   └── archive-astrologer.php (astrologer archive)
└── 404.php (not found)
```

---

## 📄 LICENSE

This theme is licensed under the GPL v2 or later.

```
This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
```

---

## 🙏 CREDITS

- **Bootstrap** - https://getbootstrap.com
- **Google Fonts** - https://fonts.google.com
- **Elementor** - https://elementor.com
- **WordPress** - https://wordpress.org

---

## 📞 CONTACT

**Website:** https://rishikeshvedic.com  
**Email:** support@rishikeshvedic.com  
**Documentation:** https://docs.rishikeshvedic.com  

---

**Made with ❤️ for the Vedic Astrology Community**