# 🎯 COMPLETE WORDPRESS THEME SETUP GUIDE

## ✅ THEME FILES READY!

Your WordPress theme is now complete with all necessary files. Here's how to install it properly.

---

## 📦 STEP-BY-STEP INSTALLATION

### Option 1: Direct Download & Install (EASIEST)

**Step 1: Download Theme Files**
1. Go to: https://github.com/dixitprakhar25/rishikesh-vedic
2. Click the green **Code** button
3. Click **Download ZIP**
4. Save to your computer

**Step 2: Extract & Locate Theme**
1. Extract the downloaded ZIP file
2. Open the folder: `rishikesh-vedic-main`
3. Navigate to the `wp-theme` folder
4. You should see these files:
   ```
   wp-theme/
   ├── style.css ✅
   ├── functions.php ✅
   ├── index.php ✅
   ├── header.php ✅
   ├── footer.php ✅
   ├── sidebar.php ✅
   ├── single.php ✅
   ├── page.php ✅
   ├── front-page.php ✅
   ├── inc/
   │   ├── customizer.php ✅
   │   ├── custom-post-types.php ✅
   │   └── template-tags.php ✅
   ├── js/
   │   └── main.js ✅
   └── README.md ✅
   ```

**Step 3: Create Proper ZIP File**

**IMPORTANT:** You need to ZIP the CONTENTS of wp-theme folder, NOT the folder itself!

**On Windows:**
1. Open the `wp-theme` folder
2. Select ALL files inside (Ctrl+A)
3. Right-click → Send to → Compressed (zipped) folder
4. Name it: `rishikesh-vedic.zip`

**On Mac:**
1. Open the `wp-theme` folder
2. Select ALL files inside (Cmd+A)
3. Right-click → Compress Items
4. Rename to: `rishikesh-vedic.zip`

**Step 4: Upload to WordPress**
1. Login to WordPress Admin
2. Go to **Appearance → Themes**
3. Click **Add New**
4. Click **Upload Theme**
5. Click **Choose File**
6. Select `rishikesh-vedic.zip`
7. Click **Install Now**
8. Wait for installation
9. Click **Activate**

✅ **Done! Theme is now active!**

---

### Option 2: FTP Upload (For Advanced Users)

**Step 1: Prepare Files**
1. Download and extract repository
2. Locate `wp-theme` folder
3. Rename it to: `rishikesh-vedic`

**Step 2: Upload via FTP**
1. Connect to your server using FTP client (FileZilla, etc.)
2. Navigate to: `/wp-content/themes/`
3. Upload the entire `rishikesh-vedic` folder
4. Wait for upload to complete

**Step 3: Activate**
1. Go to WordPress Admin
2. **Appearance → Themes**
3. Find "Rishikesh Vedic"
4. Click **Activate**

---

## 🎨 AFTER INSTALLATION - CUSTOMIZE YOUR SITE

### Step 1: Install Required Plugins

**Go to Plugins → Add New and install:**

1. **Elementor** (Required for drag & drop)
   - Search "Elementor"
   - Install & Activate

2. **Contact Form 7** (For contact forms)
   - Search "Contact Form 7"
   - Install & Activate

3. **Yoast SEO** or **Rank Math** (For SEO)
   - Choose one
   - Install & Activate

### Step 2: Customize Theme Colors & Fonts

1. Go to **Appearance → Customize**
2. You'll see these sections:

**Theme Colors:**
- Primary Color (default: #FFB84D - Saffron)
- Accent Color (default: #2C7A7B - Teal)
- Text Color
- Background Color

**Typography:**
- Heading Font (choose from 10+ fonts)
- Body Font (choose from 5+ fonts)
- Base Font Size

**Hero Section:**
- Upload Background Image
- Adjust Image Opacity (0-1 slider)
- Edit Hero Title
- Edit Hero Subtitle
- Change Button Text
- Set Button URL

**Layout Options:**
- Container Width (960-1920px)
- Sidebar Position (Left/Right/None)

**Social Media Links:**
- Facebook URL
- Instagram URL
- YouTube URL
- WhatsApp Number

**Contact Information:**
- Email Address
- Phone Number
- Physical Address

**Footer Options:**
- Copyright Text
- Show/Hide Footer Widgets

3. Make your changes
4. Click **Publish** to save

### Step 3: Set Up Menus

1. Go to **Appearance → Menus**
2. Click **Create a new menu**
3. Name it: "Primary Menu"
4. Add pages:
   - Home
   - About
   - Services
   - Astrologers
   - Blog
   - Contact
5. Check **Primary Menu** under Menu Settings
6. Click **Save Menu**

### Step 4: Configure Homepage

**Option A: Use Default Homepage (with customizable hero)**
1. **Settings → Reading**
2. Select **Your homepage displays: Your latest posts**
3. The front-page.php template will be used
4. Customize hero section via **Appearance → Customize → Hero Section**

**Option B: Create Custom Homepage with Elementor**
1. **Pages → Add New**
2. Title: "Home"
3. Click **Edit with Elementor**
4. Build your page with drag & drop
5. Click **Update**
6. **Settings → Reading**
7. Select **A static page**
8. Homepage: Select "Home"
9. Click **Save Changes**

### Step 5: Add Your Astrologers

1. Go to **Astrologers → Add New**
2. Enter astrologer name as title
3. Add bio/description in editor
4. Click **Set featured image** → Upload photo
5. Scroll to **Astrologer Details** box:
   - Years of Experience: e.g., 35
   - Location: e.g., Rishikesh, Uttarakhand
   - Rating: e.g., 4.9
   - Total Sessions: e.g., 1000
   - Languages: e.g., Hindi, Sanskrit
   - Training & Credentials: Add details
6. On right sidebar, assign **Specializations**:
   - Click **+ Add New Specialization**
   - Examples: Relationships, Career, Health, etc.
7. Click **Publish**

### Step 6: Create Pages with Elementor

**Create About Page:**
1. **Pages → Add New**
2. Title: "About Us"
3. Click **Edit with Elementor**
4. Click **+** to add section
5. Drag widgets from left:
   - **Heading** - For titles
   - **Text Editor** - For paragraphs
   - **Image** - For photos
   - **Button** - For CTAs
6. Click each widget to customize:
   - **Content** tab: Edit text/images
   - **Style** tab: Change colors, fonts
   - **Advanced** tab: Spacing, animations
7. Click **Update**

**Repeat for other pages:**
- Services
- Contact
- Blog (optional)

---

## 🎨 CUSTOMIZATION EXAMPLES

### Change Primary Color

**Via Customizer:**
1. **Appearance → Customize → Theme Colors**
2. Click **Primary Color** picker
3. Choose your color (e.g., #FF6B6B for red)
4. See live preview
5. Click **Publish**

**Via CSS (Advanced):**
1. **Appearance → Customize → Additional CSS**
2. Add:
```css
:root {
    --primary-color: #FF6B6B;
}
```
3. Click **Publish**

### Change Hero Background

1. **Appearance → Customize → Hero Section**
2. Click **Select Image** under Background Image
3. Upload your image (recommended: 1920x1080px)
4. Adjust **Opacity** slider:
   - 0 = Image invisible
   - 0.15 = Subtle (default)
   - 1 = Fully visible
5. Click **Publish**

### Change Fonts

1. **Appearance → Customize → Typography**
2. **Heading Font** dropdown:
   - Playfair Display (elegant serif)
   - Montserrat (modern sans-serif)
   - Lora (classic serif)
   - etc.
3. **Body Font** dropdown:
   - Open Sans (clean)
   - Roboto (modern)
   - Lato (friendly)
   - etc.
4. Adjust **Base Font Size** (12-24px)
5. Click **Publish**

---

## 🧩 USING ELEMENTOR

### Creating Custom Sections

1. **Edit page with Elementor**
2. Click **+** icon to add section
3. Choose column structure:
   - 1 column (full width)
   - 2 columns (50/50)
   - 3 columns (33/33/33)
   - Custom layouts
4. Drag widgets into columns
5. Customize each widget

### Responsive Design

1. Click device icons at bottom:
   - 💻 Desktop
   - 📱 Tablet
   - 📱 Mobile
2. Adjust settings for each device
3. Hide elements on specific devices:
   - Click widget
   - **Advanced** tab
   - **Responsive** section
   - Toggle visibility

### Reusable Templates

1. Build a section you like
2. Right-click section → **Save as Template**
3. Name it (e.g., "Hero Section")
4. Reuse on other pages:
   - Click folder icon
   - **My Templates**
   - Insert template

---

## 🔍 SEO OPTIMIZATION

### Using Yoast SEO

**For Each Page/Post:**
1. Scroll to **Yoast SEO** section
2. **Focus Keyword**: Enter main keyword
3. **SEO Title**: Edit (keep under 60 chars)
4. **Meta Description**: Write summary (150-155 chars)
5. Check **SEO Analysis**:
   - Aim for green lights
   - Follow suggestions
6. Check **Readability**:
   - Aim for green score
   - Improve if needed

**General Settings:**
1. **SEO → General**
2. Configure:
   - Site name
   - Tagline
   - Social profiles
3. **SEO → Search Appearance**
4. Set templates for:
   - Homepage
   - Posts
   - Pages
   - Custom post types

---

## 🛠️ TROUBLESHOOTING

### Theme Not Appearing After Upload

**Problem:** Theme doesn't show in Themes list

**Solution:**
1. Check ZIP structure - `style.css` must be at root level
2. Verify `style.css` has proper header:
```css
/*
Theme Name: Rishikesh Vedic
...
*/
```
3. Check file permissions (755 for folders, 644 for files)

### Customizer Changes Not Saving

**Problem:** Changes disappear after clicking Publish

**Solutions:**
1. Clear browser cache (Ctrl+Shift+Del)
2. Try different browser
3. Disable other plugins temporarily
4. Check browser console for JavaScript errors (F12)
5. Increase PHP memory limit in wp-config.php:
```php
define('WP_MEMORY_LIMIT', '256M');
```

### Elementor Not Working

**Problem:** "Edit with Elementor" button missing

**Solutions:**
1. Install Elementor plugin
2. Update Elementor to latest version
3. Check PHP version (7.4+ required)
4. Clear Elementor cache:
   - **Elementor → Tools → Regenerate CSS**
   - **Elementor → Tools → Clear Cache**

### Images Not Displaying

**Problem:** Featured images or thumbnails not showing

**Solutions:**
1. Regenerate thumbnails:
   - Install "Regenerate Thumbnails" plugin
   - **Tools → Regen. Thumbnails**
   - Click **Regenerate All Thumbnails**
2. Check image file permissions
3. Verify image URLs in browser inspector (F12)

### Menu Not Showing

**Problem:** Navigation menu not appearing

**Solutions:**
1. Create menu: **Appearance → Menus**
2. Add pages to menu
3. Assign to **Primary Menu** location
4. Save menu
5. Clear cache

---

## 📞 SUPPORT

**Need Help?**
- **Email:** support@rishikeshvedic.com
- **Response Time:** Within 24 hours

**Before Contacting:**
1. Check this guide
2. Try troubleshooting steps
3. Disable plugins to test
4. Clear cache

**Include in Support Request:**
- WordPress version
- Theme version
- Active plugins list
- Screenshot of issue
- Steps to reproduce
- Browser/device info

---

## ✅ CHECKLIST AFTER INSTALLATION

- [ ] Theme activated successfully
- [ ] Elementor plugin installed
- [ ] Colors customized
- [ ] Fonts selected
- [ ] Hero section configured
- [ ] Primary menu created
- [ ] Homepage set up
- [ ] At least 3 astrologers added
- [ ] About page created
- [ ] Services page created
- [ ] Contact page created
- [ ] SEO plugin installed
- [ ] Social media links added
- [ ] Footer widgets configured
- [ ] Mobile responsiveness tested

---

## 🎉 YOU'RE READY!

Your WordPress theme is now fully installed and customized. You have complete control over:
- ✅ Colors
- ✅ Fonts
- ✅ Layout
- ✅ Hero section
- ✅ All content
- ✅ Pages (via Elementor)
- ✅ Astrologers
- ✅ Everything!

**No coding required - just point, click, and customize!**

---

**Made with ❤️ for the Vedic Astrology Community**